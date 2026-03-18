{{-- resources/views/pages/articles/cards/mechanics.risk_based.blade.php --}}
@extends('layouts.credit-cards')
@section('title', 'Risk-based Pricing')
@section('breadcrumb_section', 'Card Mechanics')
@section('breadcrumb_current', 'Risk-based Pricing')
@section('hero_section_label', 'Card Mechanics')
@section('hero_title', 'Risk-based Pricing')
@section('hero_subtitle', 'How issuers price credit risk — the models that determine why two people applying for the same card receive different APRs, limits, and approval decisions.')
@section('hero_date', now()->format('F Y'))
@section('hero_read_time', '8 min read')
@section('article_badge', 'Card Mechanics')
@section('last_updated', now()->format('F Y'))
@section('nav_risk', 'active')
@section('sidebar_stats')
    <div class="space-y-3">
        @foreach([['APR Range Spread','8–30%'],['Score Impact on Rate','Up to 15%pts'],['ML Models Used','90%+ top issuers']] as [$l,$v])
        <div class="cc-card flex items-center justify-between p-3 rounded-xl bg-[#f7f5ff] border border-[#e8e2f8]">
            <p class="text-[11px] text-[#9ca3af] font-mono-sp">{{ $l }}</p>
            <p class="text-[14px] font-bold text-[#1e0a3c]">{{ $v }}</p>
        </div>
        @endforeach
    </div>
@endsection
@section('content')
<p class="text-[17px] text-[#1e0a3c] font-medium leading-relaxed mb-8 pb-6 border-b border-[#f5f0ff]">
    Risk-based pricing is the practice of pricing credit products — APR, credit limit, fees — according to the individual applicant's predicted default risk. It is the core methodology of modern consumer lending and the reason the same card can be offered at 14% APR to one person and 28% APR to another.
</p>

<h2>The Logic of Risk-based Pricing</h2>
<p>From the issuer's perspective, every credit card relationship is a portfolio of expected outcomes. High-credit-quality cardholders default rarely; high-risk cardholders default more frequently. Risk-based pricing allocates the cost of expected losses to the borrowers who create them — rather than spreading that cost equally across all cardholders.</p>

<h2>Inputs to Risk Pricing Models</h2>
<div class="grid grid-cols-2 gap-4 my-7">
    @foreach([
        ['Credit Score','The primary input. FICO score predicts 12-month default probability with strong statistical accuracy. Each score band maps to an expected loss rate.'],
        ['Income & DTI','Debt-to-income ratio — total monthly debt payments divided by gross monthly income. Higher DTI signals stretched borrower capacity.'],
        ['Account Behavior','For existing customers: payment patterns, utilization trends, cash advance usage, and spending categories all predict future behavior.'],
        ['Bureau Attributes','Individual bureau data including derogatory marks, account age, inquiry density, and credit mix provide granular risk signals.'],
        ['Macroeconomic Overlays','Rate environment, unemployment trends, and sector-specific stress are applied as portfolio-level adjustments to individual scores.'],
        ['ML Behavioral Models','Modern issuers layer gradient-boosted tree models on top of bureau data to predict nuanced behaviors like "will carry balance profitably?"'],
    ] as [$t,$d])
    <div class="cc-card p-4 rounded-2xl bg-[#f7f5ff] border border-[#e8e2f8]">
        <h3 class="!mt-0 text-[13.5px] text-violet-700">{{ $t }}</h3>
        <p class="!text-[13px] !mb-0 text-[#6b7280]">{{ $d }}</p>
    </div>
    @endforeach
</div>

<h2>APR Tiers by Score Range</h2>
<div class="my-6 overflow-hidden rounded-2xl border border-[#e8e2f8]">
    <table class="w-full border-collapse text-[13.5px]">
        <thead>
            <tr style="background:linear-gradient(135deg,#1e0a3c,#2d1060)">
                <th class="text-left px-5 py-4 text-[11px] font-bold uppercase tracking-[.13em] text-purple-300">Score Range</th>
                <th class="text-left px-5 py-4 text-[11px] font-bold uppercase tracking-[.13em] text-purple-200/80">Tier</th>
                <th class="text-left px-5 py-4 text-[11px] font-bold uppercase tracking-[.13em] text-purple-200/80">Typical APR Offer</th>
                <th class="text-left px-5 py-4 text-[11px] font-bold uppercase tracking-[.13em] text-purple-200/80">Products Available</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-[#f5f0ff]">
            @foreach([
                ['800–850','Exceptional','13–18%','All premium cards, top limits'],
                ['740–799','Very Good','17–22%','Most premium cards'],
                ['670–739','Good','21–25%','Standard rewards cards'],
                ['580–669','Fair','25–29%','Secured or basic unsecured'],
                ['< 580','Poor','29%+ / Denied','Secured cards only'],
            ] as [$range,$tier,$apr,$products])
            <tr class="hover:bg-[#fdfbff] transition-colors">
                <td class="px-5 py-3.5 font-mono-sp font-bold text-[#1e0a3c] bg-[#fdfbff]">{{ $range }}</td>
                <td class="px-5 py-3.5 text-[#374151]">{{ $tier }}</td>
                <td class="px-5 py-3.5 font-mono-sp text-violet-700 font-bold">{{ $apr }}</td>
                <td class="px-5 py-3.5 text-[#6b7280] text-[13px]">{{ $products }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="my-7 p-6 rounded-2xl border-l-4 border-violet-500" style="background:linear-gradient(135deg,#f5f3ff,#ede9fe)">
    <p class="text-[13.5px] font-semibold text-[#4c1d95] mb-1">The Adverse Action Notice</p>
    <p class="text-[13.5px] text-[#5b21b6] !mb-0 leading-relaxed">If you're denied or receive a less favorable rate than the best advertised rate, the ECOA and FCRA require issuers to send an adverse action notice explaining the specific reasons. These notices are underused as a diagnostic tool — they reveal exactly which factors your application scored poorly on, giving you a roadmap for improvement.</p>
</div>
@endsection
@section('related')
<a href="{{ route('cards.mechanics-scoring') }}" class="block bg-white rounded-xl border border-[#e8e2f8] p-4 hover:border-violet-300 hover:shadow-md transition-all">
    <span class="text-[10.5px] font-bold uppercase tracking-[.12em] text-violet-600 mb-2 block">Card Mechanics</span>
    <p class="text-[13.5px] font-semibold text-[#1e0a3c] leading-snug">Credit Scoring Models</p>
</a>
<a href="{{ route('cards.mechanics-apr') }}" class="block bg-white rounded-xl border border-[#e8e2f8] p-4 hover:border-violet-300 hover:shadow-md transition-all">
    <span class="text-[10.5px] font-bold uppercase tracking-[.12em] text-violet-600 mb-2 block">Card Mechanics</span>
    <p class="text-[13.5px] font-semibold text-[#1e0a3c] leading-snug">APR & Interest Calculation</p>
</a>
<a href="{{ route('cards.market-consumer') }}" class="block bg-white rounded-xl border border-[#e8e2f8] p-4 hover:border-violet-300 hover:shadow-md transition-all">
    <span class="text-[10.5px] font-bold uppercase tracking-[.12em] text-pink-500 mb-2 block">Market & Regulation</span>
    <p class="text-[13.5px] font-semibold text-[#1e0a3c] leading-snug">Consumer Protection Laws</p>
</a>
@endsection