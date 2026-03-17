@extends('layouts.finreview')
@section('title', 'Contact Us — Express Fintech')

@section('content')

{{-- ═══ HERO BAND ═══ --}}
<section class="relative overflow-hidden" style="background:linear-gradient(135deg,var(--navy) 0%,var(--navy-mid) 55%,#1e1460 100%); padding:72px 0 80px;">

    {{-- Grid texture --}}
    <div class="absolute inset-0 pointer-events-none"
         style="background-image:linear-gradient(rgba(255,255,255,.04) 1px,transparent 1px),linear-gradient(90deg,rgba(255,255,255,.04) 1px,transparent 1px);background-size:64px 64px;"></div>

    {{-- Radial glows --}}
    <div class="absolute inset-0 pointer-events-none"
         style="background:radial-gradient(ellipse 65% 80% at 12% 50%,rgba(79,70,229,.2) 0%,transparent 60%),radial-gradient(ellipse 45% 55% at 88% 20%,rgba(129,140,248,.08) 0%,transparent 55%);"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-12">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

            {{-- Left --}}
            <div>
                {{-- Badge --}}
                <div class="inline-flex items-center gap-2 mb-6 px-4 py-2 rounded-full text-xs font-semibold tracking-widest uppercase"
                     style="background:rgba(79,70,229,.18);border:1px solid rgba(79,70,229,.35);color:#a5b4fc;">
                    <span class="w-1.5 h-1.5 rounded-full bg-indigo-400"
                          style="animation:pulse-dot 2s ease-in-out infinite;"></span>
                    Contact &amp; Support
                </div>

                <h1 class="hero-title">
                    We're here to<br>
                    <em style="color:#a5b4fc;font-style:italic;">help you</em> navigate<br>
                    your finances
                </h1>

                <p class="text-base font-light leading-relaxed mb-8 max-w-lg"
                   style="color:rgba(255,255,255,.55);">
                    Our expert team is ready to answer your questions, discuss your options, and guide you toward smarter financial decisions.
                </p>

                {{-- Stats row --}}
                <div class="flex flex-wrap gap-8">
                    @foreach([
                        ['24h',  'Average response time'],
                        ['98%',  'Satisfaction rate'],
                        ['5 ★',  'Expert advisors'],
                    ] as [$val, $lbl])
                        <div>
                            <div class="fonttitle text-white font-bold" style="font-size:28px;line-height:1;">{{ $val }}</div>
                            <div class="mt-1 text-xs" style="color:rgba(255,255,255,.4);letter-spacing:.04em;">{{ $lbl }}</div>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- Right: contact method cards --}}
            <div class="flex justify-end">
                <div class="flex flex-col gap-3 w-full max-w-sm">
                    @foreach([
                        ['indigo', 'Email Support',  'support@expressfintech.com',      '<path d="M2 4a2 2 0 012-2h12a2 2 0 012 2v10a2 2 0 01-2 2H4a2 2 0 01-2-2V4z" stroke="#818cf8" stroke-width="1.5"/><path d="M2 6l8 5 8-5" stroke="#818cf8" stroke-width="1.5" stroke-linecap="round"/>'],
                        ['amber',  'Phone Line',     '+1 (888) 400-FINTECH',             '<path d="M5 2.5A1.5 1.5 0 016.5 1h7A1.5 1.5 0 0115 2.5v15a1.5 1.5 0 01-1.5 1.5h-7A1.5 1.5 0 014 17.5v-15z" stroke="#d97706" stroke-width="1.5"/><circle cx="10" cy="16" r="1" fill="#d97706"/>'],
                        ['green',  'Live Chat',      'Available Mon–Fri, 9am–6pm EST',   '<path d="M2 10C2 5.58 5.58 2 10 2s8 3.58 8 8-3.58 8-8 8c-1.2 0-2.34-.27-3.36-.74L2 18l.74-4.64A7.95 7.95 0 012 10z" stroke="#10b981" stroke-width="1.5"/>'],
                    ] as [$color, $title, $sub, $svgPath])
                        @php
                            $iconBg = match($color) {
                                'indigo' => 'rgba(79,70,229,.25)',
                                'amber'  => 'rgba(217,119,6,.2)',
                                'green'  => 'rgba(16,185,129,.2)',
                            };
                        @endphp
                        <div class="flex items-center gap-4 rounded-xl px-5 py-4 transition-all duration-200 cursor-default group"
                             style="background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.1);"
                             onmouseover="this.style.background='rgba(255,255,255,.1)';this.style.borderColor='rgba(79,70,229,.4)';this.style.transform='translateX(-4px)'"
                             onmouseout="this.style.background='rgba(255,255,255,.06)';this.style.borderColor='rgba(255,255,255,.1)';this.style.transform='translateX(0)'">
                            <div class="w-10 h-10 rounded-xl flex items-center justify-center flex-shrink-0"
                                 style="background:{{ $iconBg }};">
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
            <h2 class="fonttitle text-white! font-bold relative z-10" style="font-size:22px;margin-bottom:4px;">
                Send Us a Message
            </h2>
            <p class="text-sm font-light relative z-10" style="color:rgba(255,255,255,.5);">
                Complete the 3 steps below — we'll route your request to the right team.
            </p>
        </div>

        {{-- Progress bar --}}
        <div class="px-9 py-6" style="background:var(--bg-surface);border-bottom:1px solid var(--border);">
            <div class="flex items-center" id="progress-bar">
                @foreach([['1','Your Info'],['2','Category'],['3','Details']] as $i => [$n, $label])
                    <div class="relative flex justify-center" style="flex-shrink:0;">
                        <div id="sc{{ $n }}"
                             class="w-9 h-9 rounded-full flex items-center justify-center text-sm font-bold transition-all duration-300 relative z-10"
                             style="{{ $n == '1'
                                ? 'background:var(--indigo);color:#fff;border:2px solid var(--indigo);box-shadow:0 0 0 4px rgba(79,70,229,.12);'
                                : 'background:var(--bg-white);color:var(--text-subtle);border:2px solid var(--border);' }}">
                            {{ $n }}
                        </div>
                        <span id="sl{{ $n }}"
                              class="absolute top-11 text-center whitespace-nowrap"
                              style="font-size:10px;font-weight:600;letter-spacing:.05em;text-transform:uppercase;
                                     color:{{ $n == '1' ? 'var(--indigo)' : 'var(--text-subtle)' }};">
                            {{ $label }}
                        </span>
                    </div>
                    @if($i < 2)
                        <div id="conn{{ $i + 1 }}"
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

                {{-- Name --}}
                <div class="field mb-5 relative" id="f-name">
                    <label class="block mb-1.5 text-xs font-semibold uppercase tracking-wider" style="color:var(--text-muted);" for="inp-name">
                        Full Name <span style="color:var(--indigo);">*</span>
                    </label>
                    <input type="text" id="inp-name" autocomplete="name"
                           class="w-full px-4 py-3 rounded-xl text-sm transition-all duration-200 outline-none"
                           style="border:1.5px solid var(--border);background:var(--bg-white);color:var(--text-primary);font-family:inherit;"
                           placeholder="e.g. Alex Johnson"
                           onfocus="focusField(this)" onblur="blurField(this,'name')">
                    <div class="field-err hidden mt-1.5 flex items-center gap-1.5 text-xs font-medium" id="err-name" style="color:#ef4444;">
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none"><circle cx="6" cy="6" r="5" fill="#ef4444"/><path d="M6 3.5v3" stroke="white" stroke-width="1.3" stroke-linecap="round"/><circle cx="6" cy="8.5" r=".6" fill="white"/></svg>
                        Please enter your full name (at least 2 characters).
                    </div>
                </div>

                {{-- Email --}}
                <div class="field mb-5 relative" id="f-email">
                    <label class="block mb-1.5 text-xs font-semibold uppercase tracking-wider" style="color:var(--text-muted);" for="inp-email">
                        Email Address <span style="color:var(--indigo);">*</span>
                    </label>
                    <input type="email" id="inp-email" autocomplete="email"
                           class="w-full px-4 py-3 rounded-xl text-sm transition-all duration-200 outline-none"
                           style="border:1.5px solid var(--border);background:var(--bg-white);color:var(--text-primary);font-family:inherit;"
                           placeholder="you@example.com"
                           onfocus="focusField(this)" onblur="blurField(this,'email')">
                    <div class="field-err hidden mt-1.5 flex items-center gap-1.5 text-xs font-medium" id="err-email" style="color:#ef4444;">
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none"><circle cx="6" cy="6" r="5" fill="#ef4444"/><path d="M6 3.5v3" stroke="white" stroke-width="1.3" stroke-linecap="round"/><circle cx="6" cy="8.5" r=".6" fill="white"/></svg>
                        Please enter a valid email address.
                    </div>
                </div>

                {{-- Phone --}}
                <div class="field mb-2 relative" id="f-phone">
                    <label class="block mb-1.5 text-xs font-semibold uppercase tracking-wider" style="color:var(--text-muted);" for="inp-phone">
                        Phone Number <span style="color:var(--indigo);">*</span>
                    </label>
                    <input type="tel" id="inp-phone" autocomplete="tel"
                           class="w-full px-4 py-3 rounded-xl text-sm transition-all duration-200 outline-none"
                           style="border:1.5px solid var(--border);background:var(--bg-white);color:var(--text-primary);font-family:inherit;"
                           placeholder="e.g. 0912 345 678 or +86 138 0000 0000"
                           onfocus="focusField(this)" onblur="blurField(this,'phone')">
                    
                    <div class="field-err hidden mt-1 flex items-center gap-1.5 text-xs font-medium" id="err-phone" style="color:#ef4444;">
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none"><circle cx="6" cy="6" r="5" fill="#ef4444"/><path d="M6 3.5v3" stroke="white" stroke-width="1.3" stroke-linecap="round"/><circle cx="6" cy="8.5" r=".6" fill="white"/></svg>
                        Please enter at least 10 digits.
                    </div>
                </div>

                <div class="flex justify-end mt-7">
                    <button onclick="goToStep(2)"
                            class="inline-flex items-center gap-2 px-7 py-3 rounded-xl text-sm font-semibold text-white transition-all duration-200"
                            style="background:var(--indigo);box-shadow:0 2px 12px rgba(79,70,229,.3);"
                            onmouseover="this.style.background='var(--indigo-hover)';this.style.transform='translateY(-1px)';this.style.boxShadow='0 6px 20px rgba(79,70,229,.4)'"
                            onmouseout="this.style.background='var(--indigo)';this.style.transform='translateY(0)';this.style.boxShadow='0 2px 12px rgba(79,70,229,.3)'">
                        Continue
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M6 12l4-4-4-4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </button>
                </div>
            </div>

            {{-- ─── STEP 2: Category ─── --}}
            <div class="step-panel hidden" id="step2">
                <h3 class="fonttitle font-bold mb-1" style="font-size:20px;color:var(--navy);">Select a Category</h3>
                <p class="text-sm font-light mb-7" style="color:var(--text-muted);line-height:1.6;">
                    What type of inquiry are you making? We'll connect you with the right specialist.
                </p>

                <div class="grid grid-cols-2 gap-3" id="cat-grid">
                    @php
                        $cats = [
                            ['support',     'Support',     'Account help & general questions',    'blue',   '#3b82f6', '<circle cx="10" cy="10" r="8" stroke="#3b82f6" stroke-width="1.5"/><path d="M7.5 8c0-1.38 1.12-2.5 2.5-2.5s2.5 1.12 2.5 2.5c0 1.5-1.5 2-2.5 3" stroke="#3b82f6" stroke-width="1.5" stroke-linecap="round"/><circle cx="10" cy="14.5" r=".8" fill="#3b82f6"/>'],
                            ['sales',       'Sales',       'Pricing, plans & product demos',      'amber',  '#d97706', '<path d="M3 16l4-7 4 4 3-5 3 8" stroke="#d97706" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>'],
                            ['technical',   'Technical',   'API, integrations & bugs',             'purple', '#7c3aed', '<path d="M7 6l-4 4 4 4M13 6l4 4-4 4" stroke="#7c3aed" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M11 4l-2 12" stroke="#7c3aed" stroke-width="1.5" stroke-linecap="round"/>'],
                            ['partnership', 'Partnership', 'Collaboration & affiliate programs',  'green',  '#059669', '<path d="M13 6c0-1.66-1.34-3-3-3S7 4.34 7 6s1.34 3 3 3" stroke="#059669" stroke-width="1.5" stroke-linecap="round"/><path d="M17 14c0-2.21-1.79-4-4-4H7c-2.21 0-4 1.79-4 4" stroke="#059669" stroke-width="1.5" stroke-linecap="round"/><path d="M14 11l2 2-2 2" stroke="#059669" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>'],
                        ];
                        $iconBgs = ['blue'=>'#eff6ff','amber'=>'#fffbeb','purple'=>'#f5f3ff','green'=>'#f0fdf4'];
                    @endphp

                    @foreach($cats as [$val, $name, $desc, $color, $stroke, $svgPath])
                        <label class="cat-card relative flex items-start gap-3 p-4 rounded-xl cursor-pointer transition-all duration-200"
                               style="border:1.5px solid var(--border);background:var(--bg-white);"
                               onclick="selectCat(this,'{{ $val }}')">
                            <input type="radio" name="category" value="{{ $val }}" class="absolute opacity-0 pointer-events-none">
                            <div class="w-10 h-10 rounded-xl flex items-center justify-center flex-shrink-0"
                                 style="background:{{ $iconBgs[$color] }};">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none">{!! $svgPath !!}</svg>
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="text-sm font-semibold" style="color:var(--navy);">{{ $name }}</div>
                                <div class="text-xs mt-0.5 leading-relaxed" style="color:var(--text-muted);">{{ $desc }}</div>
                            </div>
                            <div class="cat-check absolute top-2.5 right-2.5 w-5 h-5 rounded-full flex items-center justify-center opacity-0 transition-all duration-200"
                                 style="background:var(--indigo);transform:scale(.6);">
                                <svg width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M2 5l2.5 2.5 4-4" stroke="white" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </div>
                        </label>
                    @endforeach

                    {{-- Other — full width --}}
                    <label class="cat-card relative col-span-2 flex items-start gap-3 p-4 rounded-xl cursor-pointer transition-all duration-200"
                           style="border:1.5px solid var(--border);background:var(--bg-white);"
                           onclick="selectCat(this,'other')">
                        <input type="radio" name="category" value="other" class="absolute opacity-0 pointer-events-none">
                        <div class="w-10 h-10 rounded-xl flex items-center justify-center flex-shrink-0"
                             style="background:var(--bg-muted);">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"><circle cx="10" cy="10" r="1.5" fill="#6b7280"/><circle cx="4" cy="10" r="1.5" fill="#6b7280"/><circle cx="16" cy="10" r="1.5" fill="#6b7280"/></svg>
                        </div>
                        <div class="flex-1 min-w-0">
                            <div class="text-sm font-semibold" style="color:var(--navy);">Other</div>
                            <div class="text-xs mt-0.5 leading-relaxed" style="color:var(--text-muted);">Anything else — press, media, feedback, or general inquiries not listed above</div>
                        </div>
                        <div class="cat-check absolute top-2.5 right-2.5 w-5 h-5 rounded-full flex items-center justify-center opacity-0 transition-all duration-200"
                             style="background:var(--indigo);transform:scale(.6);">
                            <svg width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M2 5l2.5 2.5 4-4" stroke="white" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </div>
                    </label>
                </div>

                <div class="cat-err hidden mt-2 flex items-center gap-1.5 text-xs font-medium" id="err-cat" style="color:#ef4444;">
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

            {{-- ─── STEP 3: Sub-cat + Message ─── --}}
            <div class="step-panel hidden" id="step3">
                <h3 class="fonttitle font-bold mb-1" style="font-size:20px;color:var(--navy);">Describe Your Inquiry</h3>
                <p class="text-sm font-light mb-6" style="color:var(--text-muted);line-height:1.6;">
                    Select the topic that best fits your request, then tell us the details.
                </p>

                {{-- Selected category badge --}}
                <div id="subcat-header"
                     class="flex items-center gap-3 px-4 py-3 rounded-xl mb-5"
                     style="background:var(--indigo-light);border:1px solid rgba(79,70,229,.18);">
                    <span id="subcat-badge"
                          class="px-3 py-1 rounded-full text-xs font-bold tracking-wider uppercase"
                          style="background:rgba(79,70,229,.12);color:var(--indigo);">
                        Selected
                    </span>
                    <span id="subcat-name" class="text-sm font-semibold" style="color:var(--navy);">Loading…</span>
                </div>

                {{-- Sub-category grid --}}
                <div class="grid grid-cols-2 gap-2 mb-2" id="subcat-grid">
                    {{-- populated by JS --}}
                </div>
                <div class="cat-err hidden mb-4 flex items-center gap-1.5 text-xs font-medium" id="err-subcat" style="color:#ef4444;">
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
                              placeholder="Please describe your inquiry in detail. The more context you provide, the faster we can help."
                              oninput="updateCharCount(this)"
                              onfocus="this.style.borderColor='var(--indigo)';this.style.boxShadow='0 0 0 3px rgba(79,70,229,.1)'"
                              onblur="validateMsg(this)"></textarea>
                    <div class="flex justify-between mt-1.5">
                        <div class="field-err hidden flex items-center gap-1.5 text-xs font-medium" id="err-message" style="color:#ef4444;">
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none"><circle cx="6" cy="6" r="5" fill="#ef4444"/><path d="M6 3.5v3" stroke="white" stroke-width="1.3" stroke-linecap="round"/><circle cx="6" cy="8.5" r=".6" fill="white"/></svg>
                            Please enter a message (at least 20 characters).
                        </div>
                        <span id="char-count" class="text-xs ml-auto" style="color:var(--text-subtle);">0 / 1000</span>
                    </div>
                </div>

                {{-- Submit --}}
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
                     style="background:var(--bg-surface);border:1px solid var(--border);color:var(--indigo);font-family:'DM Mono',monospace,inherit;">
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

    {{-- ═══ SIDEBAR ═══ --}}
    <aside class="flex flex-col gap-5">

        {{-- Contact Methods --}}
        <div class="rounded-2xl p-7"
             style="background:var(--bg-white);border:1px solid var(--border);box-shadow:var(--shadow-sm);">
            <h4 class="fonttitle font-bold mb-5 flex items-center gap-2.5"
                style="font-size:16px;color:var(--navy);">
                <span class="w-1 h-5 rounded-full flex-shrink-0" style="background:var(--indigo);"></span>
                Contact Methods
            </h4>
            @foreach([
                ['blue',   'Email',        'support@expressfintech.com',   'Response within 24 hours',         '<path d="M2 4a2 2 0 012-2h10a2 2 0 012 2v9a2 2 0 01-2 2H4a2 2 0 01-2-2V4z" stroke="#3b82f6" stroke-width="1.4"/><path d="M2 6l7 5 7-5" stroke="#3b82f6" stroke-width="1.4" stroke-linecap="round"/>',   '#eff6ff'],
                ['green',  'Phone',        '+1 (888) 400-3468',            'Mon–Fri, 9am–6pm EST',             '<path d="M3.5 3A1.5 1.5 0 015 1.5h8A1.5 1.5 0 0114.5 3v12A1.5 1.5 0 0113 16.5H5A1.5 1.5 0 013.5 15V3z" stroke="#10b981" stroke-width="1.4"/><circle cx="9" cy="14" r=".8" fill="#10b981"/>',             '#f0fdf4'],
                ['amber',  'Live Chat',    'Chat with an expert now',      'Instant response during hours',    '<path d="M2 10C2 5.58 5.58 2 9 2s7 3.58 7 8-3.58 8-7 8c-1.05 0-2.05-.23-2.93-.66L2 17l.66-4.07A7.95 7.95 0 012 10z" stroke="#d97706" stroke-width="1.4"/>',                                                          '#fffbeb'],
                ['purple', 'Office Hours', 'Monday – Friday',              '9:00 AM – 6:00 PM Eastern',        '<circle cx="9" cy="9" r="7" stroke="#7c3aed" stroke-width="1.4"/><path d="M9 5v4l3 3" stroke="#7c3aed" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>',                                  '#f5f3ff'],
            ] as [$color, $label, $value, $sub, $svgPath, $iconBg])
                <div class="flex items-start gap-3.5 py-3.5"
                     style="border-bottom:1px solid var(--border);">
                    <div class="w-10 h-10 rounded-xl flex items-center justify-center flex-shrink-0"
                         style="background:{{ $iconBg }};">
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

        {{-- Office Hours --}}
        <div class="rounded-2xl p-7"
             style="background:var(--bg-white);border:1px solid var(--border);box-shadow:var(--shadow-sm);">
            <h4 class="fonttitle font-bold mb-5 flex items-center gap-2.5"
                style="font-size:16px;color:var(--navy);">
                <span class="w-1 h-5 rounded-full flex-shrink-0" style="background:var(--indigo);"></span>
                Office Hours
            </h4>
            <div class="grid grid-cols-2 gap-2.5">
                @foreach([
                    ['Mon–Fri',   '9am – 6pm',  false],
                    ['Saturday',  '10am – 2pm', false],
                    ['Sunday',    'Closed',      true],
                    ['Holidays',  'Email only',  true],
                ] as [$day, $time, $dim])
                    <div class="rounded-xl p-3 text-center" style="background:var(--bg-surface);">
                        <div class="text-xs font-semibold uppercase tracking-wider" style="color:var(--text-muted);">{{ $day }}</div>
                        <div class="text-sm font-semibold mt-1" style="color:{{ $dim ? 'var(--text-subtle)' : 'var(--navy)' }};">{{ $time }}</div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Trust signals --}}
        <div class="rounded-2xl p-7"
             style="background:var(--bg-white);border:1px solid var(--border);box-shadow:var(--shadow-sm);">
            <h4 class="fonttitle font-bold mb-4 flex items-center gap-2.5"
                style="font-size:16px;color:var(--navy);">
                <span class="w-1 h-5 rounded-full flex-shrink-0" style="background:var(--indigo);"></span>
                Why Trust Us
            </h4>
            <div class="flex flex-wrap gap-2">
                @foreach([
                    ['★ 4.9/5 Rating', '⭐'],
                    ['SSL Secured',     '🔒'],
                    ['100K+ Users',     '👥'],
                    ['FINRA Compliant', '🏛️'],
                    ['24h Response',    '⚡'],
                    ['Est. 2018',       '📅'],
                ] as [$pill, $_])
                    <span class="inline-flex items-center px-3 py-1.5 rounded-full text-xs font-medium"
                          style="background:var(--bg-surface);border:1px solid var(--border);color:var(--text-body);">
                        {{ $pill }}
                    </span>
                @endforeach
            </div>
        </div>

        {{-- Free consultation --}}
        <div class="rounded-2xl p-7 relative overflow-hidden"
             style="background:linear-gradient(135deg,var(--navy) 0%,var(--navy-mid) 100%);">
            <div class="absolute -top-10 -right-10 w-40 h-40 rounded-full pointer-events-none"
                 style="background:rgba(79,70,229,.15);"></div>
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

        {{-- FAQ --}}
        <div class="rounded-2xl p-7"
             style="background:var(--bg-white);border:1px solid var(--border);box-shadow:var(--shadow-sm);">
            <h4 class="fonttitle font-bold mb-4 flex items-center gap-2.5"
                style="font-size:16px;color:var(--navy);">
                <span class="w-1 h-5 rounded-full flex-shrink-0" style="background:var(--indigo);"></span>
                Common Questions
            </h4>
            @foreach([
                ['How quickly will I get a response?',     'Our team responds within 24 business hours. Priority requests are typically answered within 4 hours during business hours.'],
                ['Is my information secure?',              'All data is encrypted with 256-bit SSL, stored securely, and never sold to third parties. We are GDPR and CCPA compliant.'],
                ['Can I track my support ticket?',         'Yes. After submitting, you\'ll receive a reference number via email. Use this to check your ticket status at any time.'],
                ['Do you offer phone support?',            'Phone support is available Monday through Friday, 9am to 6pm Eastern. Call +1 (888) 400-3468 for immediate assistance.'],
            ] as [$q, $a])
                <div class="faq-item py-4" style="border-bottom:1px solid var(--border);">
                    <div class="faq-q flex items-center justify-between gap-3 text-sm font-semibold cursor-pointer select-none"
                         style="color:var(--navy);"
                         onclick="toggleFaq(this)">
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
</div>{{-- /page-body --}}

{{-- ── INLINE STYLES (scoped to this page) ──────────────────────── --}}
<style>
    @keyframes pulse-dot { 0%,100%{opacity:.4;transform:scale(.9)} 50%{opacity:1;transform:scale(1.1)} }
    @keyframes popIn     { from{transform:scale(0);opacity:0} to{transform:scale(1);opacity:1} }
    @keyframes stepIn    { from{opacity:0;transform:translateX(14px)} to{opacity:1;transform:translateX(0)} }
    @keyframes spin      { to{transform:rotate(360deg)} }

    .step-panel.active { animation: stepIn .3s cubic-bezier(.4,0,.2,1); }

    /* cat-card hover */
    .cat-card:hover {
        border-color: var(--indigo) !important;
        background: var(--indigo-light) !important;
        transform: translateY(-2px);
        box-shadow: 0 4px 16px rgba(79,70,229,.12);
    }
    .cat-card.selected {
        border-color: var(--indigo) !important;
        background: var(--indigo-light) !important;
        box-shadow: 0 0 0 3px rgba(79,70,229,.1), 0 4px 16px rgba(79,70,229,.08);
    }
    .cat-card.selected .cat-check {
        opacity: 1 !important;
        transform: scale(1) !important;
    }

    /* subcat item */
    .subcat-item:hover   { border-color:var(--indigo)!important;background:var(--indigo-light)!important; }
    .subcat-item.selected{ border-color:var(--indigo)!important;background:var(--indigo-light)!important; }
    .subcat-item.selected .subcat-dot-inner { background:var(--indigo)!important;border-color:var(--indigo)!important; }
    .subcat-item.selected .subcat-dot-fill  { display:block!important; }

    /* field valid / error states */
    .field-input-valid  { border-color:#10b981!important;box-shadow:0 0 0 3px rgba(16,185,129,.08)!important; }
    .field-input-error  { border-color:#ef4444!important;box-shadow:0 0 0 3px rgba(239,68,68,.08)!important; }

    /* faq open */
    .faq-item.open .faq-q svg { transform:rotate(180deg); }
    .faq-item.open .faq-a     { max-height:200px!important; padding-top:10px; }

    /* responsive */
    @media (max-width:1024px) {
        .page-body-grid { grid-template-columns:1fr!important; }
        .sidebar-grid   { display:grid!important;grid-template-columns:1fr 1fr; }
    }
    @media (max-width:640px) {
        .cat-grid-inner      { grid-template-columns:1fr!important; }
        .subcat-grid-inner   { grid-template-columns:1fr!important; }
        .sidebar-grid        { grid-template-columns:1fr!important; }
        .hours-inner-grid    { grid-template-columns:1fr 1fr; }
    }
</style>

<script>
// ── DATA ─────────────────────────────────────────────────────────────────────
const CATEGORIES = {
    support:     { label:'Support',     sub:['Account login issues','Password reset help','Billing & subscription','Cancellation request','Profile & settings','Data & privacy request','Notification preferences','Referral program','Content not loading','Other account issue'] },
    sales:       { label:'Sales',       sub:['Product pricing inquiry','Enterprise plan demo','Free trial extension','Upgrade / downgrade plan','Volume discounts','Custom quote request','Compare plans','Payment methods','Invoice & receipts','Sales team contact'] },
    technical:   { label:'Technical',   sub:['API access & keys','Integration setup','Bug / error report','Performance issue','Data export problem','Third-party app sync','Webhook configuration','OAuth / SSO setup','Rate limit questions','Developer documentation'] },
    partnership: { label:'Partnership', sub:['Affiliate program signup','White-label inquiry','Co-marketing proposal','Data partnership','Referral partner program','Press & media inquiry','Content collaboration','API reseller program','Investor relations','Strategic alliance'] },
    other:       { label:'Other',       sub:['General feedback','Feature suggestion','Complaint / concern','Accessibility support','Language / locale request','Community & events','Educational resources','Charitable initiatives','Regulatory inquiry','Anything else'] },
};

// ── STATE ─────────────────────────────────────────────────────────────────────
let currentStep   = 1;
let selectedCat   = null;
let selectedSubCat= null;

// ── NAVIGATION ────────────────────────────────────────────────────────────────
function goToStep(step) {
    if (step > currentStep && !validateStep(currentStep)) return;
    if (step === 3 && currentStep === 2) buildSubCats();

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
        const c  = document.getElementById('sc' + i);
        const l  = document.getElementById('sl' + i);
        c.style.background   = '';
        c.style.color        = '';
        c.style.borderColor  = '';
        c.style.boxShadow    = '';
        l.style.color        = 'var(--text-subtle)';

        if (i < currentStep) {
            // done — show checkmark
            c.innerHTML = `<svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M3 7l3 3 5-5" stroke="white" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>`;
            c.style.background  = '#10b981';
            c.style.color       = '#fff';
            c.style.borderColor = '#10b981';
            l.style.color       = '#10b981';
        } else if (i === currentStep) {
            c.textContent        = i;
            c.style.background   = 'var(--indigo)';
            c.style.color        = '#fff';
            c.style.borderColor  = 'var(--indigo)';
            c.style.boxShadow    = '0 0 0 4px rgba(79,70,229,.12)';
            l.style.color        = 'var(--indigo)';
        } else {
            c.textContent        = i;
            c.style.background   = 'var(--bg-white)';
            c.style.color        = 'var(--text-subtle)';
            c.style.borderColor  = 'var(--border)';
        }
    }
    // connectors
    for (let i = 1; i <= 2; i++) {
        const conn = document.getElementById('conn' + i);
        conn.style.background = i < currentStep ? '#10b981' : 'var(--border)';
    }
}

// ── VALIDATION ────────────────────────────────────────────────────────────────
function validateStep(step) {
    if (step === 1) return validateStep1();
    if (step === 2) return validateStep2();
    if (step === 3) return validateStep3();
    return true;
}

function validateStep1() {
    let ok = true;
    const name  = document.getElementById('inp-name').value.trim();
    const email = document.getElementById('inp-email').value.trim();
    const phone = document.getElementById('inp-phone').value.replace(/\D/g,'');
    const emailRe = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    setField('inp-name',  'err-name',  name.length >= 2);
    setField('inp-email', 'err-email', emailRe.test(email));
    setField('inp-phone', 'err-phone', phone.length >= 10);

    if (name.length < 2  || !emailRe.test(email) || phone.length < 10) ok = false;
    return ok;
}

function validateStep2() {
    const err = document.getElementById('err-cat');
    if (!selectedCat) { err.classList.remove('hidden'); err.classList.add('flex'); return false; }
    err.classList.add('hidden'); err.classList.remove('flex');
    return true;
}

function validateStep3() {
    let ok = true;
    const subErr = document.getElementById('err-subcat');
    if (!selectedSubCat) { subErr.classList.remove('hidden'); subErr.classList.add('flex'); ok = false; }
    else                 { subErr.classList.add('hidden'); subErr.classList.remove('flex'); }

    const msg = document.getElementById('inp-message').value.trim();
    setField('inp-message','err-message', msg.length >= 20);
    if (msg.length < 20) ok = false;
    return ok;
}

function setField(inputId, errId, valid) {
    const input = document.getElementById(inputId);
    const err   = document.getElementById(errId);
    if (valid) {
        input.classList.remove('field-input-error'); input.classList.add('field-input-valid');
        input.style.borderColor = '#10b981';
        input.style.boxShadow   = '0 0 0 3px rgba(16,185,129,.08)';
        if (err) { err.classList.add('hidden'); err.classList.remove('flex'); }
    } else {
        input.classList.remove('field-input-valid'); input.classList.add('field-input-error');
        input.style.borderColor = '#ef4444';
        input.style.boxShadow   = '0 0 0 3px rgba(239,68,68,.08)';
        if (err) { err.classList.remove('hidden'); err.classList.add('flex'); }
    }
}

// ── FOCUS/BLUR HANDLERS ───────────────────────────────────────────────────────
function focusField(el) {
    el.style.borderColor = 'var(--indigo)';
    el.style.boxShadow   = '0 0 0 3px rgba(79,70,229,.1)';
}
function blurField(el, type) {
    const v = el.value.trim();
    if (!v) { el.style.borderColor='var(--border)'; el.style.boxShadow='none'; return; }
    if (type==='name')  setField('inp-name',  'err-name',  v.length >= 2);
    if (type==='email') setField('inp-email', 'err-email', /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v));
    if (type==='phone') setField('inp-phone', 'err-phone', el.value.replace(/\D/g,'').length >= 10);
}

// ── CATEGORY SELECT ───────────────────────────────────────────────────────────
function selectCat(label, value) {
    selectedCat    = value;
    selectedSubCat = null;
    document.querySelectorAll('.cat-card').forEach(c => c.classList.remove('selected'));
    label.classList.add('selected');
    label.querySelector('input[type="radio"]').checked = true;
    const err = document.getElementById('err-cat');
    err.classList.add('hidden'); err.classList.remove('flex');
}

// ── BUILD SUB-CATS ────────────────────────────────────────────────────────────
function buildSubCats() {
    const data = CATEGORIES[selectedCat];
    document.getElementById('subcat-badge').textContent = data.label;
    document.getElementById('subcat-name').textContent  = data.label + ' — Select a topic';

    const grid = document.getElementById('subcat-grid');
    grid.innerHTML = '';
    data.sub.forEach(sub => {
        const item = document.createElement('label');
        item.className = 'subcat-item relative flex items-center gap-2.5 px-3.5 py-3 rounded-xl cursor-pointer transition-all duration-180';
        item.style.cssText = 'border:1.5px solid var(--border);background:var(--bg-white);';
        item.innerHTML = `
            <input type="radio" name="subcategory" class="absolute opacity-0 pointer-events-none">
            <div class="subcat-dot-inner w-4 h-4 rounded-full flex-shrink-0 flex items-center justify-center transition-all"
                 style="border:2px solid var(--border);">
                <div class="subcat-dot-fill w-1.5 h-1.5 rounded-full hidden" style="background:#fff;"></div>
            </div>
            <span class="text-sm font-medium" style="color:var(--text-body);">${sub}</span>`;
        item.addEventListener('click', () => {
            selectedSubCat = sub;
            document.querySelectorAll('.subcat-item').forEach(s => s.classList.remove('selected'));
            item.classList.add('selected');
            const dot  = item.querySelector('.subcat-dot-inner');
            const fill = item.querySelector('.subcat-dot-fill');
            document.querySelectorAll('.subcat-dot-inner').forEach(d => { d.style.background=''; d.style.borderColor='var(--border)'; });
            document.querySelectorAll('.subcat-dot-fill').forEach(f => f.classList.add('hidden'));
            dot.style.background   = 'var(--indigo)';
            dot.style.borderColor  = 'var(--indigo)';
            fill.classList.remove('hidden');
            const err = document.getElementById('err-subcat');
            err.classList.add('hidden'); err.classList.remove('flex');
        });
        grid.appendChild(item);
    });
}

// ── CHAR COUNT & MSG VALIDATE ─────────────────────────────────────────────────
function updateCharCount(el) {
    document.getElementById('char-count').textContent = el.value.length + ' / 1000';
    if (el.value.trim().length >= 20) setField('inp-message','err-message',true);
}
function validateMsg(el) {
    if (el.value.trim().length > 0) setField('inp-message','err-message',el.value.trim().length >= 20);
}

// ── SUBMIT ────────────────────────────────────────────────────────────────────
function submitForm() {
    if (!validateStep3()) return;
    const btn = document.getElementById('btn-submit');
    btn.disabled = true;
    btn.innerHTML = `<svg width="18" height="18" viewBox="0 0 18 18" fill="none" style="animation:spin .8s linear infinite"><circle cx="9" cy="9" r="7" stroke="rgba(255,255,255,.3)" stroke-width="2"/><path d="M9 2a7 7 0 017 7" stroke="white" stroke-width="2" stroke-linecap="round"/></svg> Sending…`;

    setTimeout(() => {
        document.getElementById('ref-num').textContent = 'EF-' + Math.floor(100000 + Math.random() * 900000);
        document.getElementById('step3').classList.remove('active');
        document.getElementById('step3').classList.add('hidden');
        const sp = document.getElementById('success-panel');
        sp.classList.remove('hidden');
        sp.style.animation = 'stepIn .4s ease';
        currentStep = 4; // past all steps
        updateProgress();
        btn.disabled = false;
    }, 1800);
}

// ── RESET ─────────────────────────────────────────────────────────────────────
function resetForm() {
    selectedCat = null; selectedSubCat = null;
    ['inp-name','inp-email','inp-phone','inp-message'].forEach(id => {
        const el = document.getElementById(id);
        if (el) { el.value=''; el.style.borderColor='var(--border)'; el.style.boxShadow='none'; el.classList.remove('field-input-valid','field-input-error'); }
    });
    document.getElementById('char-count').textContent = '0 / 1000';
    document.querySelectorAll('.cat-card').forEach(c => c.classList.remove('selected'));
    document.querySelectorAll('.field-err,.cat-err').forEach(e => { e.classList.add('hidden'); e.classList.remove('flex'); });

    document.getElementById('success-panel').classList.add('hidden');
    const btn = document.getElementById('btn-submit');
    btn.disabled = false;
    btn.innerHTML = `<svg width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M2 9l12-6-5 6 5 6z" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round"/></svg> Send Message`;

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