<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Validator;
use App\Models\LoanApplication;
use App\Models\Tracklink;
use Illuminate\Support\Facades\Http;
use App\Models\Affiliate;
use App\Models\Offer;
use Carbon\Carbon;

class LoanApplicationController extends Controller
{
    public function store(Request $request)
    {
        $validator = $this->validateLoanApplication($request);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()->all()
            ], 422);
        }

        $validated = $validator->validated();

        $tracklinkId = Cookie::get('tracklink_id');

        $qualificationCheck = $this->checkQualifyAsLead($validated);
        $isQualified = $qualificationCheck['qualified'];
        $reason = $qualificationCheck['reason'];

        $loanApplication = LoanApplication::create([
            'tracklink_id' => $tracklinkId,

            // Step 1: Loan Amount
            'loan_amount' => $validated['loan_amount'],

            // Step 2: Loan Info
            'credit' => $validated['credit'],
            'loan_reason' => $validated['loan_reason'],

            // Step 3: Personal Info
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'],
            'date_of_birth' => $validated['date_of_birth'],
            'ssn' => $validated['ssn'],

            // Step 4: Personal Info 2
            'military' => $validated['military'] === 'Yes',
            'citizen' => $validated['citizen'] === 'Yes',
            'dl_state' => $validated['dl_state'],
            'own_home' => $validated['own_home'] === 'Yes',
            'own_car' => $validated['own_car'] === 'Yes',

            // Step 5: Contact Info
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'home_phone' => $validated['home_phone'] ?? null,
            'contact_time' => $validated['contact_time'],

            // Step 6: Address
            'address' => $validated['address'],
            'city' => $validated['city'],
            'state' => $validated['state'],
            'zipcode' => $validated['zipcode'],
            'residence_months' => $validated['residence_months'],
            'rent' => $validated['rent'],

            // Step 7: Employment
            'job_title' => $validated['job_title'],
            'employer' => $validated['employer'],
            'employed_months' => $validated['employed_months'],
            'work_phone' => $validated['work_phone'] ?? null,

            // Step 8: Income
            'income' => $validated['income'],
            'income_type' => $validated['income_type'],
            'pay_frequency' => $validated['pay_frequency'],
            'next_payday' => $validated['next_payday'] ?? null,
            'other_income' => $validated['other_income'] ?? null,
            'debt' => $validated['debt'] ?? null,

            // Step 9: Bank Info
            'bank_name' => $validated['bank_name'],
            'account_number' => $validated['account_number'],
            'aba' => $validated['aba'],
            'bank_type' => $validated['bank_type'],
            'bank_months' => $validated['bank_months'],

            // Step 10: Bank Info 2
            'bank_phone' => $validated['bank_phone'],
            'direct_deposit' => $validated['direct_deposit'] === 'Yes',
            'trustedform_cert_url' => $request->input('xxTrustedFormCertUrl'),

            // Status
            'status' => $isQualified ? 'valid' : 'invalid',
            'reason' => $reason,
        ]);

        if ($isQualified && $tracklinkId) {
            $tracklink = Tracklink::find($tracklinkId);

            if ($tracklink && $tracklink->aff_clickid) {
                $this->updateTracklink($tracklinkId);
                $this->sendPostback($tracklinkId);
            }
        }

        Cookie::queue(Cookie::forget('tracklink_id'));
        Cookie::queue(Cookie::forget('clickid'));
        Cookie::queue(Cookie::forget('aff_id'));
        Cookie::queue(Cookie::forget('offer_id'));

        return response()->json([
            'success' => true,
            'app_id' => $loanApplication->id,
        ]);
    }

    private function checkQualifyAsLead($validated)
    {
        // Check bank whitelist
        if (!$this->isBankWhitelisted($validated['bank_name'])) {
            return [
                'qualified' => false,
                'reason' => 'Bank Not Whitelisted'
            ];
        }

        // Check duplicates
        $duplicateReason = $this->checkDuplicates($validated);
        if ($duplicateReason) {
            return [
                'qualified' => false,
                'reason' => $duplicateReason
            ];
        }

        return [
            'qualified' => true,
            'reason' => null
        ];
    }

    private function checkDuplicates($validated)
    {
        if (LoanApplication::where('email', $validated['email'])->exists()) {
            return 'Duplicate Email';
        }

        if (LoanApplication::where('ssn', $validated['ssn'])->exists()) {
            return 'Duplicate SSN';
        }

        if (LoanApplication::where('phone', $validated['phone'])->exists()) {
            return 'Duplicate Phone';
        }

        if (LoanApplication::where('account_number', $validated['account_number'])->exists()) {
            return 'Duplicate Account Number';
        }

        return null;
    }

    private function isBankWhitelisted($bankName)
    {
        $whitelist = config('whitelisted_banks');
        $normalizedInput = $this->normalizeBankName($bankName);

        foreach ($whitelist as $bank) {
            if ($this->normalizeBankName($bank) === $normalizedInput) {
                return true;
            }
        }

        return false;
    }

    private function updateTracklink($tracklinkId)
    {
        if (!$tracklinkId) {
            return;
        }

        $tracklink = Tracklink::find($tracklinkId);

        if (!$tracklink) {
            return;
        }

        $payout = 0;

        if ($tracklink->campaign_id) {
            $offer = AppOffer::find($tracklink->campaign_id);
            if ($offer) {
                $payout = $offer->payout_amount;
            }
        }

        $tracklink->update([
            'lead' => 1,
            'converted_at' => now(),
            'payout' => $payout,
        ]);
    }

    private function normalizeBankName($name)
    {
        $normalized = strtoupper(trim($name));
        $normalized = str_replace([' ', '-', '.', "'"], '', $normalized);

        return $normalized;
    }

    private function sendPostback($tracklinkId)
    {
        if (!$tracklinkId) {
            return;
        }

        $tracklink = Tracklink::find($tracklinkId);

        if (!$tracklink) {
            return;
        }

        $affiliate = Affiliate::find($tracklink->aff_id);

        if (!$affiliate || !$affiliate->postback_url) {
            return;
        }

        $postbackUrl = $this->buildPostbackUrl(
            $affiliate->postback_url,
            $tracklink->aff_clickid,
            $tracklink->payout
        );

        try {
            Http::timeout(10)->get($postbackUrl);
        } catch (\Exception $e) {
            \Log::error('Postback error: ' . $e->getMessage());
        }
    }

    private function buildPostbackUrl($template, $clickId, $payout)
    {
        return str_replace(
            ['{clickid}', '{payout}'],
            [$clickId, $payout],
            $template
        );
    }

    // Đang sửa hàm này
    private function validateLoanApplication(Request $request)
    {
        return Validator::make($request->all(), [
            // Step 1 => DONE
            'loan_amount' => 'required|string|max:50',

            // Step 2 => DONE
            'credit' => 'required|string|max:50',
            'loan_reason' => 'required|string|max:100',

            // Step 3 => DONE
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'date_of_birth' => ['required', 'date', 'before:today', 'after:1900-01-01', function ($attribute, $value, $fail) {
                $age = Carbon::parse($value)->age;
                if ($age < 18) {
                    $fail('You must be at least 18 years old.');
                }
            }],
            'ssn' => ['required', 'regex:/^\d{3}-?\d{2}-?\d{4}$/'],

            // Step 4 => DONE
            'military' => 'required|in:Yes,No',
            'citizen' => 'required|in:Yes,No',
            'dl_state' => 'required|string|size:2',
            'own_home' => 'required|in:Yes,No',
            'own_car' => 'required|in:Yes,No',

            // Step 5 => DONE
            'email' => ['required', 'email', 'regex:/^[^\s@]+@[^\s@]+\.[^\s@]+$/'],
            'phone' => ['required', 'regex:/^(\+?1[-.\s]?)?\(?\d{3}\)?[-.\s]?\d{3}[-.\s]?\d{4}$/'],
            'home_phone' => ['nullable', 'regex:/^(\+?1[-.\s]?)?\(?\d{3}\)?[-.\s]?\d{3}[-.\s]?\d{4}$/'],
            'contact_time' => 'required|string|max:50',

            // Step 6 => DONE
            'address' => 'required|string|min:5',
            'city' => ['required', 'string', 'regex:/^[a-zA-Z\s\'.\\-]+$/'],
            'state' => 'required|string|max:255',
            'zipcode' => ['required', 'regex:/^\d{5}(-\d{4})?$/'],
            'residence_months' => 'required|string',
            'rent' => 'required|numeric|min:0',

            // Step 7
            'job_title' => 'required|string|max:255',
            'employer' => 'required|string|max:255',
            'employed_months' => 'required|string',
            'work_phone' => ['nullable', 'regex:/^(\+?1[-.\s]?)?\(?\d{3}\)?[-.\s]?\d{3}[-.\s]?\d{4}$/'],

            // Step 8
            'income' => 'required|numeric|min:0',
            'income_type' => 'required|string|max:50',
            'pay_frequency' => 'required|string|max:50',
            'next_payday' => 'required|date|after_or_equal:today',
            'other_income' => 'nullable|numeric|min:0',
            'debt' => 'nullable|numeric|min:0',

            // Step 9
            'bank_name' => 'required|string|max:255',
            'account_number' => ['required', 'regex:/^\d{8,17}$/'],
            'aba' => ['required', 'regex:/^\d{9}$/'],
            'bank_type' => 'required|in:Checking,Savings',
            'bank_months' => 'required|string',

            // Step 10
            'bank_phone' => ['nullable', 'regex:/^(\+?1[-.\s]?)?\(?\d{3}\)?[-.\s]?\d{3}[-.\s]?\d{4}$/'],
            'direct_deposit' => 'required|in:Yes,No',
            'xxTrustedFormCertUrl' => 'nullable|url|max:500',
        ], [
            // Step 1 => DONE
            'loan_amount.required' => 'Please select a loan amount.',

            // Step 2 => DONE
            'credit.required' => 'Please select your credit score range.',
            'loan_reason.required' => 'Please select your loan reason.',

            // Step 3 => DONE
            'first_name.required' => 'First name is required.',
            'first_name.max' => 'First name is too long.',
            'last_name.required' => 'Last name is required.',
            'last_name.max' => 'Last name is too long.',
            'date_of_birth.required' => 'Date of birth is required.',
            'date_of_birth.date' => 'Please enter a valid date of birth.',
            'date_of_birth.before' => 'Date of birth cannot be in the future.',
            'ssn.required' => 'Social Security Number is required.',
            'ssn.regex' => 'Please enter a valid SSN (XXX-XX-XXXX).',

            // Step 4 => DONE
            'military.required' => 'Please select your military status.',
            'citizen.required' => 'Please select your citizenship status.',
            'dl_state.required' => 'Please select your driver\'s license state.',
            'own_home.required' => 'Please select if you own your home.',
            'own_car.required' => 'Please select if you own a car.',

            // Step 5 => DONE
            'email.required' => 'Email address is required.',
            'email.email' => 'Please enter a valid email address.',
            'phone.required' => 'Phone number is required.',
            'phone.regex' => 'Please enter a valid US phone number.',
            'home_phone.regex' => 'Please enter a valid home phone number.',
            'contact_time.required' => 'Please select your preferred contact time.',

            // Step 6 => DONE
            'address.required' => 'Street address is required.',
            'address.min' => 'Street address must be at least 5 characters.',
            'city.required' => 'City is required.',
            'city.regex' => 'City can only contain letters, spaces, apostrophes, or hyphens.',
            'state.required' => 'Please select a state.',
            'zipcode.required' => 'ZIP code is required.',
            'zipcode.regex' => 'Please enter a valid ZIP code.',
            'residence_months.required' => 'Please select time at residence.',
            'rent.required' => 'Please enter your monthly rent/mortgage payment.',

            // Step 7 => DONE
            'job_title.required' => 'Please enter your job title.',
            'employer.required' => 'Please enter your employer name.',
            'employed_months.required' => 'Please select time at current job.',
            'work_phone.regex' => 'Please enter a valid work phone number.',

            // Step 8 => DONE
            'income.required' => 'Please enter your monthly income.',
            'income_type.required' => 'Please select your income type.',
            'pay_frequency.required' => 'Please select your pay frequency.',
            'next_payday.after_or_equal' => 'Next payday must be today or a future date.',
            'next_payday.required' => 'Please select your next payday.',

            // Step 9
            'bank_name.required' => 'Please select or enter your bank name.',
            'account_number.required' => 'Account number is required.',
            'account_number.regex' => 'Account number must be 8 to 17 digits.',
            'aba.required' => 'ABA Routing Number is required.',
            'aba.regex' => 'ABA Routing Number must be exactly 9 digits.',
            'bank_type.required' => 'Please select your account type.',
            'bank_months.required' => 'Please select your account age.',

            // Step 10
            'bank_phone.required' => 'Please enter bank phone number.',
            'bank_phone.regex' => 'Please enter a valid bank phone number.',
            'direct_deposit.required' => 'Please select if you have direct deposit.',
        ]);
    }
}
