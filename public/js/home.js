let currentStep = 1;
const totalSteps = 10;
let selectedAmount = null;

document.querySelectorAll('select').forEach(select => {
    select.addEventListener('change', function () {
        if (this.value) {
            this.style.color = '#000';
        } else {
            this.style.color = '#94a3b8';
        }
    });
});

document.getElementById('loanForm').addEventListener('submit', async function (e) {
    e.preventDefault();
    const currentStepEl = document.querySelector(`.step[data-step="10"]`);
    const captchaInput = document.getElementById('captchaInput');
    const submitBtn = document.getElementById('submitBtn');

    if (!validateStep(currentStepEl)) {
        return;
    }

    if (!validateStep10(currentStepEl)) {
        return;
    }

    submitBtn.disabled = true;
    submitBtn.textContent = 'Verifying...';

    try {
        const captchaResponse = await fetch(captchaVerifyUrl, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
            },
            body: JSON.stringify({
                captcha: captchaInput.value
            })
        });

        const captchaResult = await captchaResponse.json();

        if (!captchaResult.success) {
            showError(currentStepEl, captchaResult.message || 'Invalid CAPTCHA code. Please try again.');
            refreshCaptcha();
            submitBtn.disabled = false;
            submitBtn.textContent = 'Submit Application';
            return;
        }

        submitBtn.textContent = 'Submitting...';

        const formData = new FormData(this);

        const submitResponse = await fetch(this.action, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                'Accept': 'application/json'
            },
            body: formData
        });

        const result = await submitResponse.json();

        if (result.success) {
            document.getElementById('loanForm').style.display = 'none';
            document.getElementById('successMessage').classList.remove('hidden');
            window.scrollTo({ top: 0, behavior: 'smooth' });
        } else {
            if (result.errors && result.errors.length > 0) {
                showErrorNotification(result.errors);
            } else {
                showErrorNotification(['An error occurred. Please try again.']);
            }
            submitBtn.disabled = false;
            submitBtn.textContent = 'Submit Application';
        }

    } catch (error) {
        console.error('Error:', error);
        showErrorNotification(['An error occurred. Please try again.']);
        submitBtn.disabled = false;
        submitBtn.textContent = 'Submit Application';
    }
});

document.querySelectorAll('#income, #otherIncome, #debt, #rent').forEach(input => {
    input.addEventListener('keydown', function(e) {
        if (e.key === '-' || e.key === 'e') {
            e.preventDefault();
        }
    });
});

updateProgress();

function selectAmount(button, amount) {
    document.querySelectorAll('[data-step="1"] .btn-radio').forEach(btn => {
        btn.classList.remove('selected');
    });

    button.classList.add('selected');
    document.getElementById('loanAmount').value = amount;
    selectedAmount = amount;
    document.getElementById('continueBtn1').disabled = false;
}

function updateProgress() {
    const progress = currentStep * 10;
    document.getElementById('progressBar').style.width = progress + '%';
    document.getElementById('progressText').textContent = progress + '%';
}

function nextStep() {
    const currentStepEl = document.querySelector(`.step[data-step="${currentStep}"]`);

    if (!validateStep(currentStepEl)) {
        return;
    }

    if (currentStep === 3 && !validateStep3(currentStepEl)) {
        return;
    }

    if (currentStep === 5 && !validateStep5(currentStepEl)) {
        return;
    }

    if (currentStep === 6 && !validateStep6(currentStepEl)) {
        return;
    }

    if (currentStep === 7 && !validateStep7(currentStepEl)) {
        return;
    }

    if (currentStep === 8 && !validateStep8(currentStepEl)) {
        return;
    }

    if (currentStep === 9 && !validateStep9(currentStepEl)) {
        return;
    }

    clearError(currentStepEl);

    if (currentStep < totalSteps) {
        currentStepEl.classList.remove('active');
        currentStep++;
        document.querySelector(`.step[data-step="${currentStep}"]`).classList.add('active');
        updateProgress();
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }
}

function prevStep() {
    if (currentStep > 1) {
        document.querySelector(`.step[data-step="${currentStep}"]`).classList.remove('active');
        currentStep--;
        document.querySelector(`.step[data-step="${currentStep}"]`).classList.add('active');
        updateProgress();
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }
}

function refreshCaptcha() {
    const captchaImage = document.getElementById('captchaImage');
    captchaImage.src = captchaGenerateUrl + '?t=' + new Date().getTime();
}

/* ------------------------------- Validate ------------------------------ */
function validateStep(stepEl) {
    const inputs = stepEl.querySelectorAll('input[required]:not([type=hidden]), select[required]');
    let isValid = true;
    inputs.forEach(input => {
        if (input.offsetParent !== null && !input.value) {
            isValid = false;
            input.classList.add('border-red-500');
            input.classList.remove('border-slate-300');
        } else {
            input.classList.remove('border-red-500');
            input.classList.add('border-slate-300');
        }
    });

    if (!isValid) {
        showError(stepEl, 'Please complete all required fields');
        return false;
    }

    return true;
}

function validateStep3(currentStepEl) {
    const fname = document.getElementById('fname')?.value.trim();
    const lname = document.getElementById('lname')?.value.trim();
    const dob = document.getElementById('dob')?.value;
    const ssn = document.getElementById('ssn')?.value.trim();

    if (!fname || fname.length < 2) {
        showError(currentStepEl, 'First name must be at least 2 characters.');
        return false;
    }

    if (!lname || lname.length < 2) {
        showError(currentStepEl, 'Last name must be at least 2 characters.');
        return false;
    }

    if (!dob || !validateBirthdate(dob)) {
        showError(currentStepEl, 'Please enter a valid date of birth (must be at least 18 years old).');
        return false;
    }

    if (!ssn || !validateSSN(ssn)) {
        showError(currentStepEl, 'Please enter a valid Social Security Number.');
        return false;
    }

    document.getElementById('ssn').value = formatSSN(ssn);

    return true;
}

function validateStep5(currentStepEl) {
    const email = document.getElementById('email')?.value.trim();
    const phone = document.getElementById('phone')?.value.trim();
    const contactTime = document.getElementById('contactTime')?.value;
    const homePhone = document.getElementById('homePhone')?.value.trim();

    if (!email || !validateEmail(email)) {
        showError(currentStepEl, 'Please enter a valid email address.');
        return false;
    }

    if (!phone || !validateUSPhone(phone)) {
        showError(currentStepEl, 'Please enter a valid US phone number.');
        return false;
    } else {
        document.getElementById('phone').value = formatUSPhonePretty(phone);
    }

    if (!homePhone || !validateUSPhone(homePhone)) {
        showError(currentStepEl, 'Please enter a valid home phone number.');
        return false;
    } else {
        document.getElementById('homePhone').value = formatUSPhonePretty(homePhone);
    }

    if (!contactTime) {
        showError(currentStepEl, 'Please select your preferred contact time.');
        return false;
    }

    return true;
}

function validateStep6(currentStepEl) {
    const address = document.getElementById('address')?.value.trim();
    const city = document.getElementById('city')?.value.trim();
    const zipcode = document.getElementById('zipcode')?.value.trim();

    if (!address || address.length < 5) {
        showError(currentStepEl, 'Street address must be at least 5 characters.');
        return false;
    }

    if (!city || !/^[a-zA-Z\s'.-]+$/.test(city)) {
        showError(currentStepEl, 'Please enter a valid city name.');
        return false;
    }

    if (!zipcode || !/^\d{5}(-\d{4})?$/.test(zipcode)) {
        showError(currentStepEl, 'Please enter a valid ZIP code (e.g., 12345 or 12345-6789).');
        return false;
    }

    return true;
}

function validateStep7(currentStepEl) {
    const jobTitle = document.getElementById('jobTitle')?.value.trim();
    const employer = document.getElementById('employer')?.value.trim();
    const workPhone = document.getElementById('workPhone')?.value.trim();

    if (!jobTitle || jobTitle.length < 2) {
        showError(currentStepEl, 'Please enter your job title.');
        return false;
    }

    if (!employer || employer.length < 2) {
        showError(currentStepEl, 'Please enter your employer or company name.');
        return false;
    }

    if (workPhone && !validateUSPhone(workPhone)) {
        showError(currentStepEl, 'Please enter a valid work phone number.');
        return false;
    } else {
        document.getElementById('workPhone').value = formatUSPhonePretty(workPhone);
    }

    return true;
}

// sửa ở đây nè
function validateStep8(currentStepEl) {
    const income = document.getElementById('income')?.value;
    const nextPayday = document.getElementById('nextPayday')?.value;
    const otherIncome = document.getElementById('otherIncome')?.value;
    const debt = document.getElementById('debt')?.value;

    if (!income || parseFloat(income) <= 0) {
        showError(currentStepEl, 'Monthly income must be greater than $0.');
        return false;
    }

    if (nextPayday) {
        const today = new Date();
        today.setHours(0, 0, 0, 0);
        const payday = new Date(nextPayday);
        if (payday < today) {
            showError(currentStepEl, 'Next payday must be today or a future date.');
            return false;
        }
    }

    if (otherIncome && parseFloat(otherIncome) < 0) {
        showError(currentStepEl, 'Other income cannot be negative.');
        return false;
    }

    if (debt && parseFloat(debt) < 0) {
        showError(currentStepEl, 'Total debt cannot be negative.');
        return false;
    }

    return true;
}

function validateStep9(currentStepEl) {
    const accountNumber = document.getElementById('accountNumber')?.value.trim();
    const aba = document.getElementById('aba')?.value.trim();

    if (!accountNumber || !/^\d{8,17}$/.test(accountNumber)) {
        showError(currentStepEl, 'Account number must be 8 to 17 digits.');
        return false;
    }

    if (!aba || !/^\d{9}$/.test(aba)) {
        showError(currentStepEl, 'ABA Routing Number must be exactly 9 digits.');
        return false;
    }

    return true;
}

function validateStep10(currentStepEl) {
    const bankPhone = document.getElementById('bankPhone')?.value.trim();
    document.getElementById('bankPhone').value = formatUSPhonePretty(bankPhone);

    return true;
}

function validateBirthdate(dob) {
    if (!dob) return false;

    const dobDate = new Date(dob);

    if (isNaN(dobDate.getTime())) return false;

    const today = new Date();
    if (dobDate > today) return false;

    const year = dobDate.getFullYear();
    if (year < 1900) return false;

    let age = today.getFullYear() - year;

    const hasNotHadBirthdayThisYear =
        today.getMonth() < dobDate.getMonth() ||
        (today.getMonth() === dobDate.getMonth() && today.getDate() < dobDate.getDate());

    if (hasNotHadBirthdayThisYear) {
        age -= 1;
    }

    return age >= 18;
}

function validateEmail(email) {
    const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return regex.test(email);
}

function validateSSN(ssn) {
    if (!ssn) return false;
    const digits = ssn.replace(/\D/g, '');
    if (digits.length !== 9) return false;

    if (digits.substring(0, 3) === '000') return false;
    if (digits.substring(3, 5) === '00') return false;
    if (digits.substring(5, 9) === '0000') return false;
    if (digits.substring(0, 3) === '666') return false;
    if (digits.charAt(0) === '9') return false;

    return true;
}

function validateUSPhone(phone) {
    if (!phone) return false;

    const digits = phone.replace(/\D/g, '');

    if (digits.length === 10) {
        return /^[2-9]\d{9}$/.test(digits);
    }

    if (digits.length === 11 && digits.startsWith('1')) {
        const tenDigits = digits.substring(1);
        return /^[2-9]\d{9}$/.test(tenDigits);
    }

    return false;
}
/* ------------------------------ End validate ---------------------------- */

/* ------------------------------ Helpers --------------------------------- */
function showError(parentEl, message) {
    const existingError = parentEl.querySelector('.bg-red-50');
    if (existingError) existingError.remove();
    const errorDiv = document.createElement('div');
    errorDiv.className = 'mt-4 bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded text-sm';
    errorDiv.textContent = message;
    parentEl.appendChild(errorDiv);
}

function clearError(parentEl) {
    const existingError = parentEl.querySelector('.bg-red-50');
    if (existingError) existingError.remove();
}

function formatUSPhonePretty(phone) {
    if (!phone) return '';

    const digits = phone.replace(/\D/g, '');

    let cleaned = digits;
    if (digits.length === 11 && digits.startsWith('1')) {
        cleaned = digits.substring(1);
    }

    if (cleaned.length !== 10) return '';

    return cleaned.replace(/(\d{3})(\d{3})(\d{4})/, '($1) $2-$3');
}

function formatSSN(ssn) {
    if (!ssn) return '';

    const digits = ssn.replace(/\D/g, '');

    if (digits.length !== 9) return '';

    return digits.replace(/(\d{3})(\d{2})(\d{4})/, '$1-$2-$3');
}

function showErrorNotification(errors) {
    const notification = document.getElementById('errorNotification');
    const errorList = document.getElementById('errorList');
    errorList.innerHTML = '';

    errors.forEach(error => {
        const li = document.createElement('li');
        li.textContent = error;
        errorList.appendChild(li);
    });

    notification.classList.add('show');

    setTimeout(() => {
        hideErrorNotification();
    }, 10000);
}

function hideErrorNotification() {
    const notification = document.getElementById('errorNotification');
    notification.classList.remove('show');
}

function selectOption(btn, fieldId, value) {
    btn.parentElement.querySelectorAll('.btn-radio').forEach(b => b.classList.remove('selected'));
    btn.classList.add('selected');
    document.getElementById(fieldId).value = value;
}
/* ------------------------------ End Helpers ----------------------------- */