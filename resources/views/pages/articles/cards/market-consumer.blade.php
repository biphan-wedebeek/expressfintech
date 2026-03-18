

{{-- resources/views/pages/articles/cards/market.consumer.blade.php --}}
@extends('layouts.credit-cards')

@section('title', 'Consumer Protection Laws')
@section('breadcrumb_section', 'Market & Regulation')
@section('breadcrumb_current', 'Consumer Protection Laws')
@section('hero_section_label', 'Market & Regulation')
@section('hero_title', 'Consumer Protection Laws')
@section('hero_subtitle', 'The regulatory framework protecting credit card consumers — from the CARD Act\'s rate restrictions to CFPB enforcement and the rights every cardholder should know.')
@section('hero_date', now()->format('F Y'))
@section('hero_read_time', '9 min read')
@section('article_badge', 'Market & Regulation')
@section('last_updated', now()->format('F Y'))
@section('nav_consumer', 'active')

@section('hero_stats')
    <div class="hero-stat rounded-xl px-5 py-4 text-center min-w-[130px]">
        <p class="text-[26px] font-bold text-white fonttitle">2009</p>
        <p class="text-[11.5px] text-purple-300/70 leading-tight mt-1">CARD Act enacted</p>
    </div>
    <div class="hero-stat rounded-xl px-5 py-4 text-center min-w-[130px]">
        <p class="text-[26px] font-bold text-white fonttitle">$12B</p>
        <p class="text-[11.5px] text-purple-300/70 leading-tight mt-1">Fees saved since CARD Act</p>
    </div>
@endsection

@section('sidebar_stats')
    <div class="space-y-3">
        @foreach([
            ['CFPB Complaints (2025)', '340K+'],
            ['CARD Act Savings/yr', '$4B+'],
            ['Chargeback Window', '60–120 days'],
        ] as [$l, $v])
        <div class="cc-card flex items-center justify-between p-3 rounded-xl bg-[#f7f5ff] border border-[#e8e2f8]">
            <p class="text-[11px] text-[#9ca3af] font-mono-sp">{{ $l }}</p>
            <p class="text-[14px] font-bold text-[#1e0a3c]">{{ $v }}</p>
        </div>
        @endforeach
    </div>
@endsection

@section('toc')
    <a href="#card-act" class="toc-link text-[13px] text-[#6b7280] hover:text-violet-700 block">The CARD Act 2009</a>
    <a href="#tila" class="toc-link text-[13px] text-[#6b7280] hover:text-violet-700 block">TILA & Disclosure Rules</a>
    <a href="#fcba" class="toc-link text-[13px] text-[#6b7280] hover:text-violet-700 block">FCBA & Chargebacks</a>
    <a href="#cfpb" class="toc-link text-[13px] text-[#6b7280] hover:text-violet-700 block">CFPB Oversight</a>
    <a href="#rights" class="toc-link text-[13px] text-[#6b7280] hover:text-violet-700 block">Your Key Rights</a>
@endsection

@section('right_panel')
    <div class="bg-white rounded-2xl border border-[#e8e2f8] p-5" style="box-shadow:0 2px 14px rgba(30,10,60,.07)">
        <p class="text-[10.5px] font-bold uppercase tracking-[.14em] text-violet-700 mb-4">Key Laws at a Glance</p>
        <div class="space-y-2.5">
            @foreach([
                ['CARD Act 2009', 'Rate & fee protections'],
                ['TILA',          'Disclosure requirements'],
                ['FCBA',          'Billing dispute rights'],
                ['ECOA',          'Credit discrimination'],
                ['FCRA',          'Credit reporting'],
                ['EFTA',          'Electronic transfers'],
            ] as [$law, $scope])
            <div class="flex items-center gap-2.5 p-2.5 rounded-lg bg-[#f7f5ff]">
                <span class="text-[11px] font-bold text-violet-700 font-mono-sp w-24 shrink-0">{{ $law }}</span>
                <span class="text-[12px] text-[#6b7280]">{{ $scope }}</span>
            </div>
            @endforeach
        </div>
    </div>
    <div class="bg-[#1e0a3c] rounded-2xl p-5 text-white">
        <p class="text-[10.5px] font-bold uppercase tracking-[.14em] text-purple-400 mb-3">Report a Complaint</p>
        <p class="text-[12.5px] text-white/50 mb-3 leading-relaxed">File a credit card complaint with the CFPB at consumerfinance.gov. Most issuers must respond within 15 days.</p>
        <div class="text-[12px] font-mono-sp text-purple-300">consumerfinance.gov</div>
    </div>
@endsection

@section('content')

<p class="text-[17px] text-[#1e0a3c] font-medium leading-relaxed mb-8 pb-6 border-b border-[#f5f0ff]">
    Credit card regulation in the United States has been shaped by decades of consumer advocacy, legislative action, and regulatory enforcement. The framework that exists today — centered on the CARD Act, TILA, and CFPB oversight — gives cardholders meaningful protections that many are unaware they have.
</p>

<h2 id="card-act">The Credit CARD Act of 2009</h2>
<p>
    The Credit Card Accountability Responsibility and Disclosure (CARD) Act of 2009 is the most significant piece of consumer credit card legislation in a generation. Passed in response to widespread industry practices perceived as abusive, it fundamentally restructured how issuers could price and market credit cards.
</p>

<div class="my-7 space-y-3">
    @foreach([
        ['Rate Increase Restrictions', 'Issuers cannot raise the APR on an existing balance during the first 12 months. After 12 months, rate increases require 45 days advance notice. Increased rates apply only to new purchases, not the existing balance.'],
        ['Double-Cycle Billing Banned', 'Previously, issuers could charge interest on balances already paid. The CARD Act eliminated this practice — interest is calculated only on the current billing cycle\'s average daily balance.'],
        ['Minimum Payment Disclosures', 'Issuers must disclose on every statement how long it will take to pay off the balance paying only minimums, and the total interest cost. Also required: the payment amount needed to pay off the balance in 3 years.'],
        ['Over-Limit Fee Restrictions', 'Cardholders must opt in to over-limit coverage. Without opt-in, transactions that would exceed the credit limit are simply declined — no fee charged.'],
        ['Penalty Fee Limits', 'Late fees and penalty fees are limited to $30 for the first violation, $41 for subsequent violations within 6 months (subject to CFPB adjustment). The fee cannot exceed the minimum payment amount.'],
        ['Student Card Restrictions', 'Applicants under 21 must show independent income or have a co-signer. Issuers cannot market credit cards at college campuses or provide freebies to induce applications.'],
    ] as $i => [$title, $desc])
    <div class="cc-card flex gap-4 p-4 rounded-2xl bg-[#f7f5ff] border border-[#e8e2f8]">
        <div class="w-6 h-6 rounded-full bg-violet-100 flex items-center justify-center shrink-0 mt-0.5">
            <svg class="w-3 h-3 text-violet-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
        </div>
        <div>
            <p class="text-[13.5px] font-semibold text-[#1e0a3c] mb-1">{{ $title }}</p>
            <p class="text-[13px] text-[#6b7280] !mb-0 leading-relaxed">{{ $desc }}</p>
        </div>
    </div>
    @endforeach
</div>

<h2 id="tila">Truth in Lending Act (TILA) & Disclosure Rules</h2>
<p>
    TILA, enacted in 1968 and implemented by Regulation Z, requires standardized disclosure of credit terms before and after account opening. Key requirements for credit cards include the Schumer Box — the standardized summary table appearing in all card applications showing APR, fees, and key terms — and the requirement that changes to terms be communicated in writing with advance notice.
</p>

<h2 id="fcba">Fair Credit Billing Act (FCBA) & Chargebacks</h2>
<p>
    The FCBA gives cardholders the right to dispute billing errors and unauthorized charges. This is the legal basis for the chargeback process that makes credit cards one of the safest payment methods for consumers.
</p>

<div class="my-6 overflow-hidden rounded-2xl border border-[#e8e2f8]">
    <table class="w-full border-collapse text-[13.5px]">
        <thead>
            <tr style="background:linear-gradient(135deg,#1e0a3c,#2d1060)">
                <th class="text-left px-5 py-4 text-[11px] font-bold uppercase tracking-[.13em] text-purple-300">Dispute Type</th>
                <th class="text-left px-5 py-4 text-[11px] font-bold uppercase tracking-[.13em] text-purple-200/80">Timeframe to File</th>
                <th class="text-left px-5 py-4 text-[11px] font-bold uppercase tracking-[.13em] text-purple-200/80">Issuer Response Time</th>
                <th class="text-left px-5 py-4 text-[11px] font-bold uppercase tracking-[.13em] text-purple-200/80">Consumer Liability</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-[#f5f0ff]">
            @foreach([
                ['Billing error', '60 days from statement', '30 days (acknowledge), 90 days (resolve)', '$0'],
                ['Unauthorized charge', '60–120 days', '10 business days', '$50 max (typically $0)'],
                ['Goods not received', '60 days after expected delivery', '30–45 days', '$0 (usually)'],
                ['Fraud / identity theft', 'No specific limit', 'Provisionally reversed within 5 days', '$0'],
            ] as [$type, $time, $resp, $liab])
            <tr class="hover:bg-[#fdfbff] transition-colors">
                <td class="px-5 py-3.5 font-semibold text-[#1e0a3c] bg-[#fdfbff]">{{ $type }}</td>
                <td class="px-5 py-3.5 text-[#374151] text-[13px]">{{ $time }}</td>
                <td class="px-5 py-3.5 text-[#374151] text-[13px]">{{ $resp }}</td>
                <td class="px-5 py-3.5 font-semibold text-violet-700 font-mono-sp">{{ $liab }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<h2 id="cfpb">CFPB Oversight</h2>
<p>
    The Consumer Financial Protection Bureau (CFPB), established by the Dodd-Frank Act in 2010, supervises credit card issuers with over $10 billion in assets. The CFPB has authority to examine issuers, investigate complaints, and bring enforcement actions for unfair, deceptive, or abusive acts or practices (UDAAP).
</p>
<p>
    Since its founding, the CFPB has returned over $17 billion to consumers through enforcement actions against card issuers for practices including illegal add-on fee sales, misleading marketing, and discriminatory underwriting.
</p>

<h2 id="rights">Your Key Rights as a Cardholder</h2>
<ul>
    <li><strong>Right to dispute errors</strong> — Any billing error can be disputed in writing within 60 days. The issuer must investigate and respond.</li>
    <li><strong>Right to advance notice</strong> — 45 days notice required before any significant account changes (rate increases, fee additions).</li>
    <li><strong>Right to reject changes</strong> — If you disagree with a term change, you can close the account and pay off the existing balance under the old terms.</li>
    <li><strong>Right to credit report accuracy</strong> — Under FCRA, you can dispute inaccurate information on your credit report for free at any time.</li>
    <li><strong>Right to non-discrimination</strong> — Under ECOA, issuers cannot discriminate based on race, sex, national origin, age, or receipt of public benefits.</li>
</ul>

<div class="my-7 p-6 rounded-2xl border-l-4 border-violet-500" style="background:linear-gradient(135deg,#f5f3ff,#ede9fe)">
    <p class="text-[13.5px] font-semibold text-[#4c1d95] mb-1">{{ now()->year }}: Late Fee Rule Battle</p>
    <p class="text-[13.5px] text-[#5b21b6] !mb-0 leading-relaxed">The CFPB's 2024 rule capping late fees at $8 — down from the current $30/$41 — has been contested in federal court by the banking industry. The outcome of this litigation will determine whether issuers must restructure their penalty fee revenue model, potentially affecting how they price risk across their card portfolios and which consumers receive cards at all.</p>
</div>

@endsection

@section('related')
<a href="{{ route('cards.mechanics-risk_based') }}" class="block bg-white rounded-xl border border-[#e8e2f8] p-4 hover:border-violet-300 hover:shadow-md transition-all">
    <span class="text-[10.5px] font-bold uppercase tracking-[.12em] text-violet-600 mb-2 block">Card Mechanics</span>
    <p class="text-[13.5px] font-semibold text-[#1e0a3c] leading-snug">Risk-based Pricing Models</p>
</a>
<a href="{{ route('cards.mechanics-apr') }}" class="block bg-white rounded-xl border border-[#e8e2f8] p-4 hover:border-violet-300 hover:shadow-md transition-all">
    <span class="text-[10.5px] font-bold uppercase tracking-[.12em] text-violet-600 mb-2 block">Card Mechanics</span>
    <p class="text-[13.5px] font-semibold text-[#1e0a3c] leading-snug">APR & Interest Calculation</p>
</a>
<a href="{{ route('cards.market-comparison') }}" class="block bg-white rounded-xl border border-[#e8e2f8] p-4 hover:border-violet-300 hover:shadow-md transition-all">
    <span class="text-[10.5px] font-bold uppercase tracking-[.12em] text-pink-500 mb-2 block">Market & Regulation</span>
    <p class="text-[13.5px] font-semibold text-[#1e0a3c] leading-snug">Card Network Comparison</p>
</a>
@endsection