@extends('layouts.personal-finance')

@section('title', 'AARP Membership — Costs, Benefits & Annual Value Review')
@section('breadcrumb', 'AARP Membership')
@section('eyebrow', 'Planning · Membership Benefits')
@section('page_title', 'AARP Membership ' . now()->year)
@section('page_lead', 'A financial breakdown of AARP membership — costs, savings potential, and how to determine whether the annual fee earns its place in your household budget.')

@section('content')

<section class="bg-surface border-b border-[var(--border)] py-20">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-14 items-start">
            <div>
                <div class="flex items-center gap-3 mb-4 text-[10px] font-bold tracking-[0.26em] uppercase text-emerald-600">
                    <span class="w-6 h-px bg-emerald-600"></span>
                    {{ now()->year }} Membership Review
                </div>

                <h2 class="fonttitle text-4xl lg:text-5xl text-navy mb-8 leading-tight">
                    Is AARP Worth $15 a Year?
                </h2>

                <p class="text-[15px] text-muted leading-relaxed mb-5">
                    AARP charges <strong class="text-navy">$15 for your first year</strong> on the
                    Automatic Renewal plan, then <strong class="text-navy">$16/year</strong> thereafter.
                    Against estimated household savings of <strong class="text-navy">$300–$600/year</strong>
                    across travel, health, and retail discounts, the financial case is straightforward
                    — provided you actively use what you are paying for.
                </p>

                <p class="text-[15px] text-muted leading-relaxed mb-6">
                    The mistake most members make: joining, auto-renewing, and never auditing which
                    benefits they actually use. Treat AARP like any recurring subscription —
                    <strong class="text-navy">review it once a year</strong> before the renewal date,
                    tally your real savings, and make a deliberate decision to continue or cancel.
                    For most households over 50, the math strongly favours renewing.
                </p>

                <div class="border border-emerald-200 bg-emerald-50 p-6 rounded-lg">
                    <div class="text-[10px] uppercase tracking-[0.2em] text-emerald-700 font-semibold mb-2">
                        The One-Booking Rule
                    </div>
                    <p class="text-[13px] text-muted leading-relaxed">
                        A single hotel booking through AARP's negotiated rate (typically
                        <strong class="text-navy">10–15% off</strong>) covers the entire annual
                        membership fee. Every benefit beyond that is pure upside.
                    </p>
                </div>
            </div>

            <div>
                <div class="border-l-4 border-indigo bg-white shadow-sm p-7 mb-5">
                    <div class="fonttitle text-6xl font-black text-emerald-600 mb-2">$15</div>
                    <div class="text-xs text-muted uppercase tracking-wider">
                        First-year cost · Automatic Renewal plan
                    </div>
                    <div class="text-xs text-muted mt-1">
                        For your first year when you sign up for Automatic Renewal
                    </div>
                </div>

                <div class="flex gap-3 mb-6">
                    <a href="{{ $banners_button->isNotEmpty() ? $banners_button->first()->tracking_url : 'https://www.aarp.org/' }}" target="_blank"
                        class="flex items-center justify-center flex-1 bg-emerald-600 text-white font-bold text-[15px] tracking-wide px-6 py-4 rounded-sm hover:bg-emerald-700 transition-colors shadow-sm">
                        Join Today
                    </a>

                    <a href="{{ $banners_button->isNotEmpty() ? $banners_button->first()->tracking_url : 'https://www.aarp.org/' }}" target="_blank"
                        class="flex items-center justify-center flex-1 border-2 border-[var(--border-strong)] text-navy font-bold text-[15px] px-6 py-4 rounded-sm hover:border-indigo-500 hover:text-indigo-500  transition-colors duration-300 bg-white">
                        Renew Now
                    </a>
                </div>

                <ul class="space-y-3">
                    <li class="flex gap-3 text-[14px] text-muted leading-relaxed">
                        <span class="text-indigo font-semibold">→</span>
                        <span>Access exclusive discounts, programmes &amp; services</span>
                    </li>
                    <li class="flex gap-3 text-[14px] text-muted leading-relaxed">
                        <span class="text-indigo font-semibold">→</span>
                        <span>Double-down with a <strong class="text-navy">FREE second membership</strong> for your spouse or partner</span>
                    </li>
                    <li class="flex gap-3 text-[14px] text-muted leading-relaxed">
                        <span class="text-indigo font-semibold">→</span>
                        <span>Get a subscription to AARP The Magazine</span>
                    </li>
                    <li class="flex gap-3 text-[14px] text-muted leading-relaxed">
                        <span class="text-indigo font-semibold">→</span>
                        <span>Earn 50% more points with AARP's Loyalty Programme</span>
                    </li>
                    <li class="flex gap-3 text-[14px] text-muted leading-relaxed">
                        <span class="text-indigo font-semibold">→</span>
                        <span>Set a calendar reminder 30 days before renewal to run your savings audit</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="bg-white border-b border-[var(--border)] py-20">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach([
            ['01','Confirm Eligibility','Open to anyone aged 50+. A spouse or partner of any age receives a free second membership — two cards, one annual fee.'],
            ['02','Choose Your Term','Auto-renew 1yr ($15 first year), manual 1yr ($16), 3yr ($43), or 5yr ($63). Longer terms lock in the rate and remove annual renewal friction.'],
            ['03','Activate Benefits Early','In the first 30 days, use at least three benefits — hotel discount, Rx savings card, and dining programme. Early use builds the habit.'],
            ['04','Run the Annual Audit','Before each renewal, total your real savings. If they exceed $16, renew without hesitation. Most active members save 10–30× the fee.'],
            ] as [$n,$title,$body])

            <div class="bg-surface p-7 border border-[var(--border)] hover:border-emerald-400 transition">
                <div class="text-4xl font-bold text-emerald-500 opacity-40 mb-4"> {{ $n }} </div>
                <div class="font-semibold mb-2 text-[var(--text-primary)]"> {{ $title }} </div>
                <div class="text-sm text-muted leading-relaxed"> {{ $body }} </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section id="membership-details" class="bg-surface border-b border-[var(--border)] py-20 scroll-mt-28">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">

        <div class="flex items-center gap-3 mb-4 text-[10px] font-bold tracking-[0.26em] uppercase text-emerald-600">
            <span class="w-6 h-px bg-emerald-600"></span>
            Full Cost &amp; Savings Breakdown
        </div>

        <h2 class="fonttitle text-3xl lg:text-4xl text-navy mb-2 leading-tight">
            Membership Pricing &amp; Estimated Annual Value
        </h2>
        <p class="text-[15px] text-muted leading-relaxed mb-10 max-w-2xl">
            Figures based on AARP's published {{ now()->year }} rates and average member usage data.
            Actual savings depend on how actively you engage each benefit.
        </p>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
            <div>
                <p class="text-[10px] font-bold uppercase tracking-[0.18em] text-emerald-600 mb-4">
                    Plan Options &amp; Pricing
                </p>
                <div class="bg-white border border-[var(--border)] overflow-hidden">
                    <div class="grid grid-cols-3 bg-navy text-white text-[11px] font-bold uppercase tracking-wider px-5 py-3">
                        <span>Plan</span>
                        <span class="text-center">First Year</span>
                        <span class="text-center">Renewal</span>
                    </div>
                    <div class="grid grid-cols-3 px-5 py-4 bg-indigo-light border-b border-[var(--border)] items-center">
                        <div class="flex items-center gap-2 flex-wrap">
                            <span class="text-[13px] font-semibold text-navy">Auto-Renew</span>
                            <span class="text-[9px] font-bold uppercase tracking-widest text-emerald-600 bg-white border border-indigo/30 px-1.5 py-0.5 rounded">Best</span>
                        </div>
                        <div class="text-center fonttitle text-2xl font-black text-emerald-600">$15</div>
                        <div class="text-center text-[13px] text-muted">$16 / yr</div>
                    </div>
                    <div class="grid grid-cols-3 px-5 py-4 border-b border-[var(--border)] items-center">
                        <span class="text-[13px] text-muted">1-Year Manual</span>
                        <span class="text-center fonttitle text-xl font-bold text-navy">$16</span>
                        <span class="text-center text-[13px] text-muted">$16 / yr</span>
                    </div>
                    <div class="grid grid-cols-3 px-5 py-4 border-b border-[var(--border)] items-center">
                        <span class="text-[13px] text-muted">3-Year Bundle</span>
                        <span class="text-center fonttitle text-xl font-bold text-navy">$43</span>
                        <span class="text-center text-[13px] text-muted">—</span>
                    </div>
                    <div class="grid grid-cols-3 px-5 py-4 items-center">
                        <span class="text-[13px] text-muted">5-Year Bundle</span>
                        <span class="text-center fonttitle text-xl font-bold text-navy">$63</span>
                        <span class="text-center text-[13px] text-muted">—</span>
                    </div>
                </div>
            </div>

            <div>
                <p class="text-[10px] font-bold uppercase tracking-[0.18em] text-emerald-600 mb-4">
                    Estimated Annual Savings by Category
                </p>
                <div class="bg-white border border-[var(--border)] overflow-hidden">
                    <div class="grid grid-cols-2 bg-navy text-white text-[11px] font-bold uppercase tracking-wider px-5 py-3">
                        <span>Benefit Category</span>
                        <span class="text-right">Est. Saving / yr</span>
                    </div>
                    @php
                    $savings = [
                    ['Hotels &amp; Travel', '~ $120'],
                    ['Auto Insurance', '~ $80'],
                    ['Dining &amp; Retail', '~ $60'],
                    ['Health &amp; Dental', '~ $50'],
                    ['Prescription (Rx) Card', '~ $40'],
                    ['Entertainment &amp; Leisure', '~ $30'],
                    ];
                    @endphp
                    @foreach($savings as $i => [$label, $amount])
                    <div class="grid grid-cols-2 px-5 py-3 border-b border-[var(--border)] last:border-b-0 items-center {{ $i % 2 !== 0 ? 'bg-surface' : '' }}">
                        <span class="text-[13px] text-muted">{!! $label !!}</span>
                        <span class="text-right text-[13px] font-semibold text-navy">{{ $amount }}</span>
                    </div>
                    @endforeach
                    <div class="grid grid-cols-2 px-5 py-4 bg-indigo-light items-center">
                        <span class="text-[13px] font-bold text-navy">Total Estimated</span>
                        <span class="text-right fonttitle text-xl font-black text-emerald-600">~ $380 +</span>
                    </div>
                </div>
                <p class="text-[11px] text-muted mt-3 leading-relaxed">
                    * Estimates based on average member usage. Your figure will vary.
                </p>
            </div>

        </div>
    </div>
</section>

<section id="template-prep" class="bg-white border-b border-[var(--border)] py-20 scroll-mt-28">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="flex items-center gap-3 mb-4 text-[10px] font-bold tracking-[0.26em] uppercase text-emerald-600">
            <span class="w-[22px] h-[1px] bg-emerald-600 block"></span>
            Membership Template
        </div>

        <h2 class="fonttitle text-3xl lg:text-4xl text-navy mb-4 leading-tight"> Build Your Personal Membership Record </h2>
        <p class="text-[15px] text-muted leading-relaxed mb-10 max-w-2xl">
            Keep the fields below in a password manager, spreadsheet, or notes app.
            This two-minute record prevents missed renewals, forgotten benefits, and unclaimed savings.
        </p>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
            <div>
                <p class="text-[10px] font-bold uppercase tracking-[0.18em] text-emerald-600 mb-4"> Member Record — Template</p>
                <div class="bg-surface border border-[var(--border)] divide-y divide-[var(--border)]">
                    @php
                    $fields = [
                    ['Full Name', '[Your full name]'],
                    ['Date of Birth', '[DD / MM / YYYY]'],
                    ['Registered Email', '[email@example.com]'],
                    ['Member Card Number', '[AARP-XXXX-XXXX]'],
                    ['Plan Type', 'Auto-Renew — $15 first year'],
                    ['Enrolment Date', '[DD / MM / YYYY]'],
                    ['Next Renewal Date', '[DD / MM / YYYY]'],
                    ['Renewal Fee', '$16.00 / year'],
                    ['Second Member', '[Spouse / partner — free]'],
                    ['Status', 'Active'],
                    ];
                    @endphp
                    @foreach($fields as [$key, $val])
                    <div class="flex justify-between items-center px-5 py-3.5">
                        <span class="text-[11px] text-muted uppercase tracking-wide">{{ $key }}</span>
                        <span class="text-[13px] font-semibold text-navy">{{ $val }}</span>
                    </div>
                    @endforeach
                </div>
            </div>

            <div>
                <p class="text-[10px] font-bold uppercase tracking-[0.18em] text-emerald-600 mb-4"> Pre-Enrolment Checklist</p>
                <ul class="space-y-3 mb-8">
                    @php
                    $checklist = [
                    'Confirm eligibility — aged 50+, or spouse / partner of an AARP member',
                    'Select your plan term — auto-renew ($15) is the lowest first-year cost',
                    'Prepare your email address and payment method before starting enrolment',
                    'Save your member card number to a password manager immediately after joining',
                    'Note your renewal date with a 30-day advance calendar reminder',
                    'Identify three benefits to activate within your first 30 days',
                    'Add your spouse or partner as a free second member during sign-up',
                    ];
                    @endphp
                    @foreach($checklist as $item)
                    <li class="flex gap-3 text-[14px] text-muted leading-relaxed">
                        <span class="text-emerald-600 font-semibold shrink-0">→</span>
                        <span>{{ $item }}</span>
                    </li>
                    @endforeach
                </ul>

                <div class="border border-emerald-200 bg-emerald-50 p-6 rounded-lg">
                    <div class="text-[10px] font-bold tracking-[0.22em] uppercase emerald-600 mb-2"> Annual Review Rule</div>
                    <p class="text-[13px] text-muted leading-relaxed">
                        30 days before renewal — list every AARP saving from the past year and total them.
                        If the sum exceeds <strong class="text-navy">$16</strong>, renew immediately.
                        If not, cancel and rejoin only when a specific benefit need arises.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-navy border-b border-[var(--border)] py-20">
    <div class="max-w-3xl mx-auto px-6 lg:px-12 text-center">
        <div class="text-xs uppercase tracking-[0.26em] text-emerald-400 font-bold mb-4">
            Free Consultation
        </div>
        <h2 class="fonttitle text-white! text-2xl md:text-3xl mb-4 leading-snug">
            Not Sure If AARP Is Right for You?
        </h2>
        <p class="text-gray-400 text-sm leading-relaxed mb-10 max-w-xl mx-auto">
            Leave your email and our team will send you a personalised breakdown
            of which AARP benefits match your household profile — no commitment required.
        </p>
        <form class="flex flex-col sm:flex-row gap-3 max-w-lg mx-auto">
            <input type="hidden" name="source" value="aarp-membership">
            <input type="email" name="email" required placeholder="Enter your email address"
                class="flex-1 px-5 py-3 rounded text-sm text-navy placeholder-gray-400 bg-white border border-white/20 focus:outline-none focus:ring-2 focus:ring-emerald-400">
            <button type="submit"
                class="flex-shrink-0 bg-emerald-500 hover:bg-emerald-400 text-white text-sm font-bold uppercase tracking-widest px-7 py-3 rounded transition-all duration-300 hover:scale-105">
                Get Free Advice →
            </button>
        </form>
        <p class="text-gray-500 text-xs mt-5">
            No spam. No sales calls. One email with your personalised benefit summary.
        </p>
    </div>
</section>

@endsection
@section('related')
<section class="bg-white border-t border-[var(--border)] py-16">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="text-[10px] font-bold tracking-[0.26em] uppercase text-emerald-600 mb-8"> Related Articles </div>
        <div class="grid md:grid-cols-3 gap-6">
            @foreach([
            ['finance.planning.budget','Budgeting','The 50/30/20 Rule','Apply behavioural insights to your monthly budget structure.'],
            ['finance.planning.retirement','Retirement','Retirement Planning','Maximise retirement income and build long-term financial security.'],
            ['finance.behavior.consumer_trends','Consumer Trends','Subscription Audit','How recurring charges erode your budget — and how to systematically cut them.'],
            ] as [$route,$cat,$title,$body])
            <a href="{{ route($route) }}" class="block border border-[var(--border)] bg-surface p-6 hover:shadow-md transition">
                <div class="text-xs uppercase tracking-wider text-emerald-600 font-semibold mb-2">
                    {{ $cat }}
                </div>
                <div class="fonttitle text-lg font-bold mb-2"> {{ $title }} </div>
                <p class="text-sm text-muted mb-4"> {{ $body }} </p>
                <span class="text-xs uppercase tracking-wider text-emerald-600 font-semibold"> Read More → </span>
            </a>
            @endforeach
        </div>
    </div>
</section>
@endsection