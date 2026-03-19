@extends('layouts.finreview')
@section('title', 'Contact Us — Express Fintech')

@section('content')

{{-- ═══ HERO BAND ═══ --}}
<section class="relative overflow-hidden" style="background:linear-gradient(135deg,var(--navy) 0%,var(--navy-mid) 55%,#1e1460 100%); padding:72px 0 80px;">
    <div class="absolute inset-0 pointer-events-none"
         style="background-image:linear-gradient(rgba(255,255,255,.04) 1px,transparent 1px),linear-gradient(90deg,rgba(255,255,255,.04) 1px,transparent 1px);background-size:64px 64px;"></div>
    <div class="absolute inset-0 pointer-events-none"
         style="background:radial-gradient(ellipse 65% 80% at 12% 50%,rgba(79,70,229,.2) 0%,transparent 60%),radial-gradient(ellipse 45% 55% at 88% 20%,rgba(129,140,248,.08) 0%,transparent 55%);"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-12">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div>
                <div class="inline-flex items-center gap-2 mb-6 px-4 py-2 rounded-full text-xs font-semibold tracking-widest uppercase"
                     style="background:rgba(79,70,229,.18);border:1px solid rgba(79,70,229,.35);color:#a5b4fc;">
                    <span class="w-1.5 h-1.5 rounded-full bg-indigo-400" style="animation:pulse-dot 2s ease-in-out infinite;"></span>
                    Contact &amp; Support
                </div>
                <h1 class="hero-title">
                    We're here to<br>
                    <em style="color:#a5b4fc;font-style:italic;">help you</em> navigate<br>
                    your finances
                </h1>
                <p class="text-base font-light leading-relaxed mb-8 max-w-lg" style="color:rgba(255,255,255,.55);">
                    Our expert team is ready to answer your questions, discuss your options, and guide you toward smarter financial decisions.
                </p>
                <div class="flex flex-wrap gap-8">
                    @foreach([['24h','Average response time'],['98%','Satisfaction rate'],['5 ★','Expert advisors']] as [$val,$lbl])
                        <div>
                            <div class="fonttitle text-white font-bold" style="font-size:28px;line-height:1;">{{ $val }}</div>
                            <div class="mt-1 text-xs" style="color:rgba(255,255,255,.4);letter-spacing:.04em;">{{ $lbl }}</div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="flex justify-end">
                <div class="flex flex-col gap-3 w-full max-w-sm">
                    @foreach([
                        ['indigo','Email Support','support@expressfintech.com','<path d="M2 4a2 2 0 012-2h12a2 2 0 012 2v10a2 2 0 01-2 2H4a2 2 0 01-2-2V4z" stroke="#818cf8" stroke-width="1.5"/><path d="M2 6l8 5 8-5" stroke="#818cf8" stroke-width="1.5" stroke-linecap="round"/>'],
                        ['amber','Phone Line','+1 484 569 1268','<path d="M5 2.5A1.5 1.5 0 016.5 1h7A1.5 1.5 0 0115 2.5v15a1.5 1.5 0 01-1.5 1.5h-7A1.5 1.5 0 014 17.5v-15z" stroke="#d97706" stroke-width="1.5"/><circle cx="10" cy="16" r="1" fill="#d97706"/>'],
                    ] as [$color,$title,$sub,$svgPath])
                        <div class="flex items-center gap-4 rounded-xl px-5 py-4 transition-all duration-200 cursor-default"
                             style="background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.1);"
                             onmouseover="this.style.background='rgba(255,255,255,.1)';this.style.borderColor='rgba(79,70,229,.4)';this.style.transform='translateX(-4px)'"
                             onmouseout="this.style.background='rgba(255,255,255,.06)';this.style.borderColor='rgba(255,255,255,.1)';this.style.transform='translateX(0)'">
                            <div class="w-10 h-10 rounded-xl flex items-center justify-center flex-shrink-0"
                                 style="background:{{ $color==='indigo'?'rgba(79,70,229,.25)':($color==='amber'?'rgba(217,119,6,.2)':'rgba(16,185,129,.2)') }};">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none">{!! $svgPath !!}</svg>
                            </div>
                            <div>
                                <div class="text-sm font-semibold text-white">{{ $title }}</div>
                                <div class="text-xs mt-0.5" style="color:rgba(255,255,255,.45);">{{ $sub }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══ BODY ═══ --}}
<div class="max-w-7xl mx-auto px-6 lg:px-12 py-14"
     style="display:grid;grid-template-columns:1fr 400px;gap:44px;align-items:start;">

    {{-- ═══ FORM CARD ═══ --}}
    <div id="contact-form-card" class="rounded-2xl overflow-hidden"
         style="background:var(--bg-white);border:1px solid var(--border);box-shadow:var(--shadow-md);">

        {{-- Card header --}}
        <div class="relative overflow-hidden px-9 py-8"
             style="background:linear-gradient(135deg,var(--navy) 0%,var(--navy-mid) 100%);">
            <div class="absolute -top-8 -right-8 w-40 h-40 rounded-full pointer-events-none"
                 style="background:rgba(79,70,229,.15);"></div>
            <h2 class="fonttitle text-white! font-bold relative z-10" style="font-size:22px;margin-bottom:4px;">Send Us a Message</h2>
            <p class="text-sm font-light relative z-10" style="color:rgba(255,255,255,.5);">
                Complete the 3 steps below — we'll route your request to the right team.
            </p>
        </div>

        {{-- Progress bar --}}
        <div class="px-9 py-6" style="background:var(--bg-surface);border-bottom:1px solid var(--border);">
            <div class="flex items-center" id="progress-bar">
                @foreach([['1','Your Info'],['2','Category'],['3','Details']] as $i => [$n,$label])
                    <div class="relative flex justify-center" style="flex-shrink:0;">
                        <div id="sc{{ $n }}"
                             class="w-9 h-9 rounded-full flex items-center justify-center text-sm font-bold transition-all duration-300 relative z-10"
                             style="{{ $n=='1' ? 'background:var(--indigo);color:#fff;border:2px solid var(--indigo);box-shadow:0 0 0 4px rgba(79,70,229,.12);' : 'background:var(--bg-white);color:var(--text-subtle);border:2px solid var(--border);' }}">
                            {{ $n }}
                        </div>
                        <span id="sl{{ $n }}"
                              class="absolute top-11 text-center whitespace-nowrap"
                              style="font-size:10px;font-weight:600;letter-spacing:.05em;text-transform:uppercase;color:{{ $n=='1'?'var(--indigo)':'var(--text-subtle)' }};">
                            {{ $label }}
                        </span>
                    </div>
                    @if($i < 2)
                        <div id="conn{{ $i+1 }}"
                             style="flex:1;height:2px;background:var(--border);margin:0 -2px;position:relative;z-index:0;transition:background .4s;"></div>
                    @endif
                @endforeach
            </div>
        </div>

        {{-- Form body --}}
        <div class="px-9 py-9">

            {{-- ─── STEP 1 ─── --}}
            <div class="step-panel active" id="step1">
                <h3 class="fonttitle font-bold mb-1" style="font-size:20px;color:var(--navy);">Your Information</h3>
                <p class="text-sm font-light mb-7" style="color:var(--text-muted);line-height:1.6;">
                    Tell us who you are so we can personalise your experience.
                </p>

                <div class="field mb-5" id="f-name">
                    <label class="block mb-1.5 text-xs font-semibold uppercase tracking-wider" style="color:var(--text-muted);" for="inp-name">
                        Full Name <span style="color:var(--indigo);">*</span>
                    </label>
                    <input type="text" id="inp-name" autocomplete="name"
                           class="w-full px-4 py-3 rounded-xl text-sm transition-all duration-200 outline-none"
                           style="border:1.5px solid var(--border);background:var(--bg-white);color:var(--text-primary);font-family:inherit;"
                           placeholder="e.g. Alex Johnson"
                           onfocus="focusField(this)" onblur="blurField(this,'name')">
                    <div class="field-err hidden mt-1.5 items-center gap-1.5 text-xs font-medium" id="err-name" style="color:#ef4444;">
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none"><circle cx="6" cy="6" r="5" fill="#ef4444"/><path d="M6 3.5v3" stroke="white" stroke-width="1.3" stroke-linecap="round"/><circle cx="6" cy="8.5" r=".6" fill="white"/></svg>
                        Please enter your full name (at least 2 characters).
                    </div>
                </div>

                <div class="field mb-5" id="f-email">
                    <label class="block mb-1.5 text-xs font-semibold uppercase tracking-wider" style="color:var(--text-muted);" for="inp-email">
                        Email Address <span style="color:var(--indigo);">*</span>
                    </label>
                    <input type="email" id="inp-email" autocomplete="email"
                           class="w-full px-4 py-3 rounded-xl text-sm transition-all duration-200 outline-none"
                           style="border:1.5px solid var(--border);background:var(--bg-white);color:var(--text-primary);font-family:inherit;"
                           placeholder="you@example.com"
                           onfocus="focusField(this)" onblur="blurField(this,'email')">
                    <div class="field-err hidden mt-1.5 items-center gap-1.5 text-xs font-medium" id="err-email" style="color:#ef4444;">
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none"><circle cx="6" cy="6" r="5" fill="#ef4444"/><path d="M6 3.5v3" stroke="white" stroke-width="1.3" stroke-linecap="round"/><circle cx="6" cy="8.5" r=".6" fill="white"/></svg>
                        Please enter a valid email address.
                    </div>
                </div>

                <div class="field mb-2" id="f-phone">
                    <label class="block mb-1.5 text-xs font-semibold uppercase tracking-wider" style="color:var(--text-muted);" for="inp-phone">
                        Phone Number <span style="color:var(--indigo);">*</span>
                    </label>
                    <input type="tel" id="inp-phone" autocomplete="tel"
                           class="w-full px-4 py-3 rounded-xl text-sm transition-all duration-200 outline-none"
                           style="border:1.5px solid var(--border);background:var(--bg-white);color:var(--text-primary);font-family:inherit;"
                           placeholder="e.g. 0912 345 678 or +86 138 0000 0000"
                           onfocus="focusField(this)" onblur="blurField(this,'phone')">
                    <div class="field-err hidden mt-1 items-center gap-1.5 text-xs font-medium" id="err-phone" style="color:#ef4444;">
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none"><circle cx="6" cy="6" r="5" fill="#ef4444"/><path d="M6 3.5v3" stroke="white" stroke-width="1.3" stroke-linecap="round"/><circle cx="6" cy="8.5" r=".6" fill="white"/></svg>
                        Please enter at least 10 digits.
                    </div>
                </div>

                <div class="flex justify-end mt-7">
                    <button onclick="goToStep(2)"
                            class="inline-flex items-center gap-2 px-7 py-3 rounded-xl text-sm font-semibold text-white transition-all duration-200"
                            style="background:var(--indigo);box-shadow:0 2px 12px rgba(79,70,229,.3);"
                            onmouseover="this.style.background='var(--indigo-hover)';this.style.transform='translateY(-1px)'"
                            onmouseout="this.style.background='var(--indigo)';this.style.transform='translateY(0)'">
                        Continue
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M6 12l4-4-4-4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </button>
                </div>
            </div>

            {{-- ─── STEP 2: Category từ DB ─── --}}
            <div class="step-panel hidden" id="step2">
                <h3 class="fonttitle font-bold mb-1" style="font-size:20px;color:var(--navy);">Select a Category</h3>
                <p class="text-sm font-light mb-7" style="color:var(--text-muted);line-height:1.6;">
                    What type of inquiry are you making? We'll connect you with the right specialist.
                </p>

                <div class="grid grid-cols-2 gap-3" id="cat-grid">
                    @foreach($categories as $cat)
                        <label class="cat-card relative flex items-start gap-3 p-4 rounded-xl cursor-pointer transition-all duration-200"
                               style="border:1.5px solid var(--border);background:var(--bg-white);"
                               onclick="selectCat(this, {{ $cat->id }}, '{{ addslashes($cat->name) }}')">
                            <input type="radio" name="category" value="{{ $cat->id }}" class="absolute opacity-0 pointer-events-none">
                            <div class="w-10 h-10 rounded-xl flex items-center justify-center flex-shrink-0"
                                 style="background:var(--indigo-light);">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <circle cx="10" cy="10" r="8" stroke="var(--indigo)" stroke-width="1.5"/>
                                    <path d="M7 10h6M10 7v6" stroke="var(--indigo)" stroke-width="1.5" stroke-linecap="round"/>
                                </svg>
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="text-sm font-semibold" style="color:var(--navy);">{{ $cat->name }}</div>
                            </div>
                            <div class="cat-check absolute top-2.5 right-2.5 w-5 h-5 rounded-full flex items-center justify-center opacity-0 transition-all duration-200"
                                 style="background:var(--indigo);transform:scale(.6);">
                                <svg width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M2 5l2.5 2.5 4-4" stroke="white" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </div>
                        </label>
                    @endforeach
                </div>

                <div class="cat-err hidden mt-2 items-center gap-1.5 text-xs font-medium" id="err-cat" style="color:#ef4444;">
                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none"><circle cx="6" cy="6" r="5" fill="#ef4444"/><path d="M6 3.5v3" stroke="white" stroke-width="1.3" stroke-linecap="round"/><circle cx="6" cy="8.5" r=".6" fill="white"/></svg>
                    Please select a category to continue.
                </div>

                <div class="flex items-center justify-between mt-7">
                    <button onclick="goToStep(1)"
                            class="inline-flex items-center gap-2 px-5 py-3 rounded-xl text-sm font-medium transition-all duration-200"
                            style="border:1.5px solid var(--border);background:transparent;color:var(--text-muted);"
                            onmouseover="this.style.borderColor='var(--navy)';this.style.color='var(--navy)'"
                            onmouseout="this.style.borderColor='var(--border)';this.style.color='var(--text-muted)'">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M10 4l-4 4 4 4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        Back
                    </button>
                    <button onclick="goToStep(3)"
                            class="inline-flex items-center gap-2 px-7 py-3 rounded-xl text-sm font-semibold text-white transition-all duration-200"
                            style="background:var(--indigo);box-shadow:0 2px 12px rgba(79,70,229,.3);"
                            onmouseover="this.style.background='var(--indigo-hover)';this.style.transform='translateY(-1px)'"
                            onmouseout="this.style.background='var(--indigo)';this.style.transform='translateY(0)'">
                        Continue
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M6 12l4-4-4-4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </button>
                </div>
            </div>

            {{-- ─── STEP 3: Sub-category + Message ─── --}}
            <div class="step-panel hidden" id="step3">
                <h3 class="fonttitle font-bold mb-1" style="font-size:20px;color:var(--navy);">Describe Your Inquiry</h3>
                <p class="text-sm font-light mb-6" style="color:var(--text-muted);line-height:1.6;">
                    Select the topic that best fits your request, then tell us the details.
                </p>

                {{-- Selected category badge --}}
                <div id="subcat-header" class="flex items-center gap-3 px-4 py-3 rounded-xl mb-5"
                     style="background:var(--indigo-light);border:1px solid rgba(79,70,229,.18);">
                    <span class="px-3 py-1 rounded-full text-xs font-bold tracking-wider uppercase"
                          style="background:rgba(79,70,229,.12);color:var(--indigo);">
                        Category
                    </span>
                    <span id="subcat-name" class="text-sm font-semibold" style="color:var(--navy);">—</span>
                </div>

                {{-- Sub-category grid (populated by JS from PHP data) --}}
                <div class="grid grid-cols-2 gap-2 mb-2" id="subcat-grid"></div>
                <div class="cat-err hidden mb-4 items-center gap-1.5 text-xs font-medium" id="err-subcat" style="color:#ef4444;">
                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none"><circle cx="6" cy="6" r="5" fill="#ef4444"/><path d="M6 3.5v3" stroke="white" stroke-width="1.3" stroke-linecap="round"/><circle cx="6" cy="8.5" r=".6" fill="white"/></svg>
                    Please select a sub-category.
                </div>

                {{-- Message --}}
                <div class="mt-5" id="f-message">
                    <label class="block mb-1.5 text-xs font-semibold uppercase tracking-wider" style="color:var(--text-muted);" for="inp-message">
                        Your Message <span style="color:var(--indigo);">*</span>
                    </label>
                    <textarea id="inp-message" maxlength="1000" rows="4"
                              class="w-full px-4 py-3 rounded-xl text-sm outline-none transition-all duration-200 resize-y"
                              style="border:1.5px solid var(--border);background:var(--bg-white);color:var(--text-primary);font-family:inherit;min-height:100px;"
                              placeholder="Please describe your inquiry in detail."
                              oninput="updateCharCount(this)"
                              onfocus="this.style.borderColor='var(--indigo)';this.style.boxShadow='0 0 0 3px rgba(79,70,229,.1)'"
                              onblur="validateMsg(this)"></textarea>
                    <div class="flex justify-between mt-1.5">
                        <div class="field-err hidden items-center gap-1.5 text-xs font-medium" id="err-message" style="color:#ef4444;">
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none"><circle cx="6" cy="6" r="5" fill="#ef4444"/><path d="M6 3.5v3" stroke="white" stroke-width="1.3" stroke-linecap="round"/><circle cx="6" cy="8.5" r=".6" fill="white"/></svg>
                            Please enter a message (at least 20 characters).
                        </div>
                        <span id="char-count" class="text-xs ml-auto" style="color:var(--text-subtle);">0 / 1000</span>
                    </div>
                </div>

                {{-- Honeypot ẩn — bot sẽ điền, người thật không thấy --}}
                <div style="position:absolute;left:-9999px;top:-9999px;opacity:0;height:0;overflow:hidden;" aria-hidden="true">
                    <input type="text" id="inp-website" name="website" tabindex="-1" autocomplete="off">
                </div>

                {{-- Timestamp ẩn ghi lúc load trang --}}
                <input type="hidden" id="inp-js-time">

                <button id="btn-submit" onclick="submitForm()"
                        class="w-full mt-6 flex items-center justify-center gap-2.5 py-4 rounded-xl text-sm font-semibold text-white transition-all duration-200"
                        style="background:linear-gradient(135deg,var(--indigo) 0%,#7c3aed 100%);box-shadow:0 4px 20px rgba(79,70,229,.35);"
                        onmouseover="this.style.boxShadow='0 8px 28px rgba(79,70,229,.5)';this.style.transform='translateY(-2px)'"
                        onmouseout="this.style.boxShadow='0 4px 20px rgba(79,70,229,.35)';this.style.transform='translateY(0)'">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M2 9l12-6-5 6 5 6z" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round"/></svg>
                    Send Message
                </button>

                <div class="flex items-center mt-4">
                    <button onclick="goToStep(2)"
                            class="inline-flex items-center gap-2 px-5 py-3 rounded-xl text-sm font-medium transition-all duration-200"
                            style="border:1.5px solid var(--border);background:transparent;color:var(--text-muted);"
                            onmouseover="this.style.borderColor='var(--navy)';this.style.color='var(--navy)'"
                            onmouseout="this.style.borderColor='var(--border)';this.style.color='var(--text-muted)'">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M10 4l-4 4 4 4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        Back
                    </button>
                </div>
            </div>

            {{-- ─── SUCCESS ─── --}}
            <div class="hidden text-center py-8 px-4" id="success-panel">
                <div class="w-18 h-18 rounded-full flex items-center justify-center mx-auto mb-6"
                     style="width:72px;height:72px;background:linear-gradient(135deg,#10b981,#059669);box-shadow:0 8px 32px rgba(16,185,129,.3);animation:popIn .5s cubic-bezier(.34,1.56,.64,1) .15s both;">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none"><path d="M8 16l5.5 5.5 11-11" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </div>
                <h3 class="fonttitle font-bold mb-3" style="font-size:24px;color:var(--navy);">Message Sent!</h3>
                <p class="text-sm font-light leading-relaxed mb-6 max-w-xs mx-auto" style="color:var(--text-muted);">
                    Thank you for reaching out. Our team has received your inquiry and will respond within 24 business hours.
                </p>
                <div class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full text-sm font-medium"
                     style="background:var(--bg-surface);border:1px solid var(--border);color:var(--indigo);">
                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><rect x="2" y="2" width="10" height="10" rx="2" stroke="currentColor" stroke-width="1.3"/><path d="M5 7h4M7 5v4" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/></svg>
                    Ref: <span id="ref-num" class="font-semibold">EF-000000</span>
                </div>
                <div>
                    <button onclick="resetForm()"
                            class="mt-5 inline-flex items-center gap-2 text-sm font-medium transition-colors duration-200"
                            style="color:var(--text-muted);background:none;border:none;cursor:pointer;font-family:inherit;"
                            onmouseover="this.style.color='var(--indigo)'"
                            onmouseout="this.style.color='var(--text-muted)'">
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M9 2L5 7l4 5" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        Submit another request
                    </button>
                </div>
            </div>

        </div>{{-- /form-body --}}
    </div>{{-- /form-card --}}

    {{-- ═══ SIDEBAR ═══ (giữ nguyên như cũ) ─────────────────── --}}
    <aside class="flex flex-col gap-5">
        <div class="rounded-2xl p-7" style="background:var(--bg-white);border:1px solid var(--border);box-shadow:var(--shadow-sm);">
            <h4 class="fonttitle font-bold mb-5 flex items-center gap-2.5" style="font-size:16px;color:var(--navy);">
                <span class="w-1 h-5 rounded-full flex-shrink-0" style="background:var(--indigo);"></span>
                Contact Methods
            </h4>
            @foreach([
                ['blue','Email','support@expressfintech.com','Response within 24 hours','<path d="M2 4a2 2 0 012-2h10a2 2 0 012 2v9a2 2 0 01-2 2H4a2 2 0 01-2-2V4z" stroke="#3b82f6" stroke-width="1.4"/><path d="M2 6l7 5 7-5" stroke="#3b82f6" stroke-width="1.4" stroke-linecap="round"/>','#eff6ff'],
                ['green','Phone','+1 484 569 1268','Mon–Fri, 9am–6pm EST','<path d="M3.5 3A1.5 1.5 0 015 1.5h8A1.5 1.5 0 0114.5 3v12A1.5 1.5 0 0113 16.5H5A1.5 1.5 0 013.5 15V3z" stroke="#10b981" stroke-width="1.4"/><circle cx="9" cy="14" r=".8" fill="#10b981"/>','#f0fdf4'],
                ['purple','Office Hours','Monday – Friday','9:00 AM – 6:00 PM Eastern','<circle cx="9" cy="9" r="7" stroke="#7c3aed" stroke-width="1.4"/><path d="M9 5v4l3 3" stroke="#7c3aed" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>','#f5f3ff'],
            ] as [$color,$label,$value,$sub,$svgPath,$iconBg])
                <div class="flex items-start gap-3.5 py-3.5" style="border-bottom:1px solid var(--border);">
                    <div class="w-10 h-10 rounded-xl flex items-center justify-center flex-shrink-0" style="background:{{ $iconBg }};">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none">{!! $svgPath !!}</svg>
                    </div>
                    <div>
                        <div class="text-xs font-semibold uppercase tracking-wider mb-0.5" style="color:var(--text-subtle);">{{ $label }}</div>
                        <div class="text-sm font-semibold" style="color:var(--navy);">{{ $value }}</div>
                        <div class="text-xs mt-0.5 font-light" style="color:var(--text-muted);">{{ $sub }}</div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="rounded-2xl p-7" style="background:var(--bg-white);border:1px solid var(--border);box-shadow:var(--shadow-sm);">
            <h4 class="fonttitle font-bold mb-5 flex items-center gap-2.5" style="font-size:16px;color:var(--navy);">
                <span class="w-1 h-5 rounded-full flex-shrink-0" style="background:var(--indigo);"></span>
                Office Hours
            </h4>
            <div class="grid grid-cols-2 gap-2.5">
                @foreach([['Mon–Fri','9am – 6pm',false],['Saturday','10am – 2pm',false],['Sunday','Closed',true],['Holidays','Email only',true]] as [$day,$time,$dim])
                    <div class="rounded-xl p-3 text-center" style="background:var(--bg-surface);">
                        <div class="text-xs font-semibold uppercase tracking-wider" style="color:var(--text-muted);">{{ $day }}</div>
                        <div class="text-sm font-semibold mt-1" style="color:{{ $dim?'var(--text-subtle)':'var(--navy)' }};">{{ $time }}</div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="rounded-2xl p-7" style="background:var(--bg-white);border:1px solid var(--border);box-shadow:var(--shadow-sm);">
            <h4 class="fonttitle font-bold mb-4 flex items-center gap-2.5" style="font-size:16px;color:var(--navy);">
                <span class="w-1 h-5 rounded-full flex-shrink-0" style="background:var(--indigo);"></span>
                Why Trust Us
            </h4>
            <div class="flex flex-wrap gap-2">
                @foreach([['★ 4.9/5 Rating'],['SSL Secured'],['100K+ Users'],['FINRA Compliant'],['24h Response'],['Est. 2018']] as [$pill])
                    <span class="inline-flex items-center px-3 py-1.5 rounded-full text-xs font-medium"
                          style="background:var(--bg-surface);border:1px solid var(--border);color:var(--text-body);">
                        {{ $pill }}
                    </span>
                @endforeach
            </div>
        </div>

        <div class="rounded-2xl p-7 relative overflow-hidden"
             style="background:linear-gradient(135deg,var(--navy) 0%,var(--navy-mid) 100%);">
            <div class="absolute -top-10 -right-10 w-40 h-40 rounded-full pointer-events-none" style="background:rgba(79,70,229,.15);"></div>
            <div class="text-xs font-bold tracking-widest uppercase mb-2 relative z-10" style="color:#818cf8;">Free Offer</div>
            <h4 class="fonttitle font-bold mb-3 relative z-10" style="font-size:18px;color:#fff;line-height:1.25;">
                Get a Free Financial Consultation
            </h4>
            <p class="text-xs font-light leading-relaxed mb-5 relative z-10" style="color:rgba(255,255,255,.5);">
                Book a 30-minute session with one of our certified advisors. No commitment required.
            </p>
            <button class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl text-sm font-semibold text-white transition-all duration-200 relative z-10"
                    style="background:rgba(79,70,229,.85);border:none;cursor:pointer;font-family:inherit;"
                    onmouseover="this.style.background='var(--indigo)'"
                    onmouseout="this.style.background='rgba(79,70,229,.85)'">
                Book Now
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M5 10l4-3-4-3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </button>
        </div>

        <div class="rounded-2xl p-7" style="background:var(--bg-white);border:1px solid var(--border);box-shadow:var(--shadow-sm);">
            <h4 class="fonttitle font-bold mb-4 flex items-center gap-2.5" style="font-size:16px;color:var(--navy);">
                <span class="w-1 h-5 rounded-full flex-shrink-0" style="background:var(--indigo);"></span>
                Common Questions
            </h4>
            @foreach([
                ['How quickly will I get a response?','Our team responds within 24 business hours. Priority requests are typically answered within 4 hours during business hours.'],
                ['Is my information secure?','All data is encrypted with 256-bit SSL, stored securely, and never sold to third parties. We are GDPR and CCPA compliant.'],
                ['Can I track my support ticket?','Yes. After submitting, you\'ll receive a reference number via email. Use this to check your ticket status at any time.'],
                ['Do you offer phone support?','Phone support is available Monday through Friday, 9am to 6pm Eastern. Call +1 (888) 400-3468 for immediate assistance.'],
            ] as [$q,$a])
                <div class="faq-item py-4" style="border-bottom:1px solid var(--border);">
                    <div class="faq-q flex items-center justify-between gap-3 text-sm font-semibold cursor-pointer select-none"
                         style="color:var(--navy);" onclick="toggleFaq(this)">
                        {{ $q }}
                        <svg class="flex-shrink-0 transition-transform duration-250" width="16" height="16" viewBox="0 0 16 16" fill="none" style="color:var(--text-muted);">
                            <path d="M4 6l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="faq-a text-xs font-light leading-relaxed overflow-hidden" style="color:var(--text-muted);max-height:0;transition:max-height .3s ease,padding .3s;">
                        {{ $a }}
                    </div>
                </div>
            @endforeach
        </div>
    </aside>
</div>

<style>
    @keyframes pulse-dot { 0%,100%{opacity:.4;transform:scale(.9)} 50%{opacity:1;transform:scale(1.1)} }
    @keyframes popIn     { from{transform:scale(0);opacity:0} to{transform:scale(1);opacity:1} }
    @keyframes stepIn    { from{opacity:0;transform:translateX(14px)} to{opacity:1;transform:translateX(0)} }
    @keyframes spin      { to{transform:rotate(360deg)} }

    .step-panel.active { animation: stepIn .3s cubic-bezier(.4,0,.2,1); }

    .cat-card:hover { border-color:var(--indigo)!important;background:var(--indigo-light)!important;transform:translateY(-2px);box-shadow:0 4px 16px rgba(79,70,229,.12); }
    .cat-card.selected { border-color:var(--indigo)!important;background:var(--indigo-light)!important;box-shadow:0 0 0 3px rgba(79,70,229,.1),0 4px 16px rgba(79,70,229,.08); }
    .cat-card.selected .cat-check { opacity:1!important;transform:scale(1)!important; }

    .subcat-item:hover    { border-color:var(--indigo)!important;background:var(--indigo-light)!important; }
    .subcat-item.selected { border-color:var(--indigo)!important;background:var(--indigo-light)!important; }
    .subcat-item.selected .subcat-dot { background:var(--indigo)!important;border-color:var(--indigo)!important; }
    .subcat-item.selected .subcat-dot-fill { display:block!important; }

    .field-input-valid { border-color:#10b981!important;box-shadow:0 0 0 3px rgba(16,185,129,.08)!important; }
    .field-input-error { border-color:#ef4444!important;box-shadow:0 0 0 3px rgba(239,68,68,.08)!important; }

    .faq-item.open .faq-q svg { transform:rotate(180deg); }
    .faq-item.open .faq-a     { max-height:200px!important;padding-top:10px; }
</style>

<script>
// ── Sub-categories từ PHP/DB truyền xuống JS ─────────────────────────────────
const ALL_SUBCATS = @json($subCategories);

// ── STATE ─────────────────────────────────────────────────────────────────────
let currentStep    = 1;
let selectedCatId  = null;
let selectedCatName= null;
let selectedSubId  = null;

// Ghi timestamp lúc load trang (chống bot submit quá nhanh)
document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('inp-js-time').value = Date.now();
});

// ── NAVIGATION ────────────────────────────────────────────────────────────────
function goToStep(step) {
    if (step > currentStep && !validateStep(currentStep)) return;
    if (step === 3) buildSubCats();

    document.getElementById('step' + currentStep).classList.remove('active');
    document.getElementById('step' + currentStep).classList.add('hidden');
    currentStep = step;
    document.getElementById('step' + step).classList.remove('hidden');
    document.getElementById('step' + step).classList.add('active');

    updateProgress();
    document.getElementById('contact-form-card').scrollIntoView({ behavior:'smooth', block:'start' });
}

function updateProgress() {
    for (let i = 1; i <= 3; i++) {
        const c = document.getElementById('sc' + i);
        const l = document.getElementById('sl' + i);
        l.style.color = 'var(--text-subtle)';

        if (i < currentStep) {
            c.innerHTML = `<svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M3 7l3 3 5-5" stroke="white" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>`;
            c.style.background = '#10b981'; c.style.color = '#fff'; c.style.borderColor = '#10b981'; c.style.boxShadow = '';
            l.style.color = '#10b981';
        } else if (i === currentStep) {
            c.textContent = i;
            c.style.background = 'var(--indigo)'; c.style.color = '#fff'; c.style.borderColor = 'var(--indigo)';
            c.style.boxShadow = '0 0 0 4px rgba(79,70,229,.12)';
            l.style.color = 'var(--indigo)';
        } else {
            c.textContent = i;
            c.style.background = 'var(--bg-white)'; c.style.color = 'var(--text-subtle)';
            c.style.borderColor = 'var(--border)'; c.style.boxShadow = '';
        }
    }
    for (let i = 1; i <= 2; i++) {
        document.getElementById('conn' + i).style.background = i < currentStep ? '#10b981' : 'var(--border)';
    }
}

// ── VALIDATION ────────────────────────────────────────────────────────────────
function validateStep(step) {
    if (step === 1) {
        const name  = document.getElementById('inp-name').value.trim();
        const email = document.getElementById('inp-email').value.trim();
        const phone = document.getElementById('inp-phone').value.replace(/\D/g,'');
        const emailRe = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        setField('inp-name','err-name', name.length >= 2);
        setField('inp-email','err-email', emailRe.test(email));
        setField('inp-phone','err-phone', phone.length >= 10);
        return name.length >= 2 && emailRe.test(email) && phone.length >= 10;
    }
    if (step === 2) {
        const err = document.getElementById('err-cat');
        if (!selectedCatId) { err.classList.remove('hidden'); err.style.display='flex'; return false; }
        err.classList.add('hidden'); err.style.display='';
        return true;
    }
    if (step === 3) {
        let ok = true;
        const subErr = document.getElementById('err-subcat');
        if (!selectedSubId) { subErr.classList.remove('hidden'); subErr.style.display='flex'; ok = false; }
        else { subErr.classList.add('hidden'); subErr.style.display=''; }
        const msg = document.getElementById('inp-message').value.trim();
        setField('inp-message','err-message', msg.length >= 20);
        if (msg.length < 20) ok = false;
        return ok;
    }
    return true;
}

function setField(inputId, errId, valid) {
    const input = document.getElementById(inputId);
    const err   = document.getElementById(errId);
    if (valid) {
        input.style.borderColor = '#10b981'; input.style.boxShadow = '0 0 0 3px rgba(16,185,129,.08)';
        if (err) { err.classList.add('hidden'); err.style.display=''; }
    } else {
        input.style.borderColor = '#ef4444'; input.style.boxShadow = '0 0 0 3px rgba(239,68,68,.08)';
        if (err) { err.classList.remove('hidden'); err.style.display='flex'; }
    }
}

function focusField(el) { el.style.borderColor='var(--indigo)'; el.style.boxShadow='0 0 0 3px rgba(79,70,229,.1)'; }
function blurField(el, type) {
    const v = el.value.trim(); if (!v) { el.style.borderColor='var(--border)'; el.style.boxShadow='none'; return; }
    if (type==='name')  setField('inp-name','err-name', v.length >= 2);
    if (type==='email') setField('inp-email','err-email', /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v));
    if (type==='phone') setField('inp-phone','err-phone', el.value.replace(/\D/g,'').length >= 10);
}

// ── CATEGORY SELECT ───────────────────────────────────────────────────────────
function selectCat(label, catId, catName) {
    selectedCatId   = catId;
    selectedCatName = catName;
    selectedSubId   = null;
    document.querySelectorAll('.cat-card').forEach(c => c.classList.remove('selected'));
    label.classList.add('selected');
    label.querySelector('input[type="radio"]').checked = true;
    const err = document.getElementById('err-cat'); err.classList.add('hidden'); err.style.display='';
}

// ── BUILD SUB-CATS từ data PHP ────────────────────────────────────────────────
function buildSubCats() {
    const filtered = ALL_SUBCATS.filter(s => s.category_id == selectedCatId);
    document.getElementById('subcat-name').textContent = selectedCatName + ' — Select a topic';

    const grid = document.getElementById('subcat-grid');
    grid.innerHTML = '';

    if (filtered.length === 0) {
        grid.innerHTML = '<p class="col-span-2 text-sm text-center py-4" style="color:var(--text-muted);">No sub-categories available for this category.</p>';
        return;
    }

    filtered.forEach(sub => {
        const item = document.createElement('label');
        item.className = 'subcat-item relative flex items-center gap-2.5 px-3.5 py-3 rounded-xl cursor-pointer transition-all duration-180';
        item.style.cssText = 'border:1.5px solid var(--border);background:var(--bg-white);';
        item.innerHTML = `
            <input type="radio" name="subcategory" value="${sub.id}" class="absolute opacity-0 pointer-events-none">
            <div class="subcat-dot w-4 h-4 rounded-full flex-shrink-0 flex items-center justify-center transition-all"
                 style="border:2px solid var(--border);">
                <div class="subcat-dot-fill w-1.5 h-1.5 rounded-full hidden" style="background:#fff;"></div>
            </div>
            <span class="text-sm font-medium" style="color:var(--text-body);">${sub.name}</span>`;
        item.addEventListener('click', () => {
            selectedSubId = sub.id;
            document.querySelectorAll('.subcat-item').forEach(s => s.classList.remove('selected'));
            item.classList.add('selected');
            const err = document.getElementById('err-subcat'); err.classList.add('hidden'); err.style.display='';
        });
        grid.appendChild(item);
    });
}

// ── CHAR COUNT ────────────────────────────────────────────────────────────────
function updateCharCount(el) {
    document.getElementById('char-count').textContent = el.value.length + ' / 1000';
    if (el.value.trim().length >= 20) setField('inp-message','err-message',true);
}
function validateMsg(el) {
    if (el.value.trim().length > 0) setField('inp-message','err-message', el.value.trim().length >= 20);
}

// ── SUBMIT via AJAX ───────────────────────────────────────────────────────────
function submitForm() {
    if (!validateStep(3)) return;

    const btn = document.getElementById('btn-submit');
    btn.disabled = true;
    btn.innerHTML = `<svg width="18" height="18" viewBox="0 0 18 18" fill="none" style="animation:spin .8s linear infinite"><circle cx="9" cy="9" r="7" stroke="rgba(255,255,255,.3)" stroke-width="2"/><path d="M9 2a7 7 0 017 7" stroke="white" stroke-width="2" stroke-linecap="round"/></svg> Sending…`;

    const payload = {
        full_name:       document.getElementById('inp-name').value.trim(),
        email:           document.getElementById('inp-email').value.trim(),
        phone_number:    document.getElementById('inp-phone').value.trim(),
        category_id:     selectedCatId,
        sub_category_id: selectedSubId,
        message:         document.getElementById('inp-message').value.trim(),
        website:         document.getElementById('inp-website').value,      // honeypot
        submitted_at_js: document.getElementById('inp-js-time').value,
        _token:          '{{ csrf_token() }}',
    };

    fetch('{{ route("contact.store") }}', {
        method:  'POST',
        headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': payload._token, 'Accept': 'application/json' },
        body:    JSON.stringify(payload),
    })
    .then(res => res.json())
    .then(data => {
        if (data.success) {
            document.getElementById('ref-num').textContent = data.ref;
            document.getElementById('step3').classList.remove('active');
            document.getElementById('step3').classList.add('hidden');
            const sp = document.getElementById('success-panel');
            sp.classList.remove('hidden');
            sp.style.animation = 'stepIn .4s ease';
            currentStep = 4;
            updateProgress();
        } else {
            alert(data.message || 'Something went wrong. Please try again.');
        }
    })
    .catch(() => {
        alert('Network error. Please check your connection and try again.');
    })
    .finally(() => {
        btn.disabled = false;
        btn.innerHTML = `<svg width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M2 9l12-6-5 6 5 6z" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round"/></svg> Send Message`;
    });
}

// ── RESET ─────────────────────────────────────────────────────────────────────
function resetForm() {
    selectedCatId = null; selectedSubId = null; selectedCatName = null;
    ['inp-name','inp-email','inp-phone','inp-message'].forEach(id => {
        const el = document.getElementById(id);
        if (el) { el.value=''; el.style.borderColor='var(--border)'; el.style.boxShadow='none'; }
    });
    document.getElementById('char-count').textContent = '0 / 1000';
    document.getElementById('inp-js-time').value = Date.now();
    document.querySelectorAll('.cat-card').forEach(c => c.classList.remove('selected'));
    document.querySelectorAll('.field-err,.cat-err').forEach(e => { e.classList.add('hidden'); e.style.display=''; });
    document.getElementById('success-panel').classList.add('hidden');
    currentStep = 1;
    document.getElementById('step1').classList.remove('hidden');
    document.getElementById('step1').classList.add('active');
    updateProgress();
}

// ── FAQ ───────────────────────────────────────────────────────────────────────
function toggleFaq(btn) {
    const item = btn.closest('.faq-item');
    const was  = item.classList.contains('open');
    document.querySelectorAll('.faq-item').forEach(f => f.classList.remove('open'));
    if (!was) item.classList.add('open');
}
</script>

@endsection