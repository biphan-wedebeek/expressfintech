{{-- resources/views/pages/articles/cards/mechanics.arp.blade.php --}}
@extends('layouts.credit-cards')
@section('title', 'APR & Interest Calculation')
@section('breadcrumb_section', 'Card Mechanics')
@section('breadcrumb_current', 'APR & Interest Calculation')
@section('hero_section_label', 'Card Mechanics')
@section('hero_title', 'APR & Interest Calculation')
@section('hero_subtitle', 'The exact math behind how credit card interest compounds daily — and why carrying a balance is one of the most expensive financial decisions you can make.')
@section('hero_date', now()->format('F Y'))
@section('hero_read_time', '8 min read')
@section('article_badge', 'Card Mechanics')
@section('last_updated', now()->format('F Y'))
@section('nav_apr', 'active')
@section('hero_stats')
<div class="hero-stat rounded-xl px-5 py-4 text-center min-w-[130px]">
    <p class="text-[26px] font-bold text-white fonttitle">24.6%</p>
    <p class="text-[11.5px] text-purple-300/70 leading-tight mt-1">Avg. APR {{ now()->year }} (US)</p>
</div>
<div class="hero-stat rounded-xl px-5 py-4 text-center min-w-[130px]">
    <p class="text-[26px] font-bold text-white fonttitle">Daily</p>
    <p class="text-[11.5px] text-purple-300/70 leading-tight mt-1">Compounding cycle</p>
</div>
@endsection
@section('sidebar_stats')
<div class="space-y-3">
    @php $year = now()->year; @endphp
    @foreach([["Avg. APR ({$year})",'24.6%'],['Penalty APR (max)','29.99%'],['0% Intro Avg. Period','15 months']] as [$l,$v])
    <div class="cc-card flex items-center justify-between p-3 rounded-xl bg-[#f7f5ff] border border-[#e8e2f8]">
        <p class="text-[11px] text-[#9ca3af] font-mono-sp">{{ $l }}</p>
        <p class="text-[16px] font-bold text-[#1e0a3c]">{{ $v }}</p>
    </div>
    @endforeach
</div>
@endsection
@section('content')
<p class="text-[17px] text-[#1e0a3c] font-medium leading-relaxed mb-8 pb-6 border-b border-[#f5f0ff]">
    The Annual Percentage Rate on a credit card is the single most important number for any cardholder who doesn't pay in full every month. Understanding exactly how it's applied — and how quickly interest compounds — is essential to making informed decisions about carrying a balance.
</p>

<h2>APR vs Interest Rate</h2>
<p>The APR (Annual Percentage Rate) represents the yearly cost of borrowing, including interest and certain fees, expressed as a percentage. For credit cards specifically, APR equals the interest rate — unlike mortgages where APR incorporates closing costs. Credit card issuers are required by the Truth in Lending Act (TILA) to disclose APR prominently.</p>

<h2>Daily Periodic Rate — The Math</h2>
<p>Credit cards charge interest daily, not annually. The daily periodic rate (DPR) is:</p>
<div class="my-5 p-5 rounded-2xl bg-[#1e0a3c] text-center">
    <p class="text-[13px] text-purple-300/70 font-mono-sp mb-2">Daily Periodic Rate</p>
    <p class="text-[22px] fonttitle font-bold text-white">DPR = APR ÷ 365</p>
    <p class="text-[13px] text-purple-300/60 font-mono-sp mt-2">e.g. 24% APR → DPR = 0.06575% per day</p>
</div>

<h3>Worked Example</h3>
<p>On a $2,000 balance at 24% APR, carrying for 30 days:</p>
<div class="my-5 space-y-2">
    @foreach([
    ['DPR','24% ÷ 365 = 0.0657% / day'],
    ['Daily Interest','$2,000 × 0.000657 = $1.31 / day'],
    ['30-day Interest','$1.31 × 30 = $39.34'],
    ['Effective Monthly Rate','1.97%'],
    ['Annual Cost at this pace','~$472 on $2,000 balance'],
    ] as [$step, $calc])
    <div class="flex items-center justify-between px-4 py-3 rounded-xl bg-[#f7f5ff] border border-[#e8e2f8]">
        <span class="text-[13px] font-medium text-[#374151]">{{ $step }}</span>
        <span class="font-mono-sp text-[13px] text-violet-700 font-bold">{{ $calc }}</span>
    </div>
    @endforeach
</div>

<h2>Types of APR</h2>
<div class="grid grid-cols-2 gap-4 my-7">
    @foreach([
    ['Purchase APR','The standard rate applied to purchases. Variable — tied to the Prime Rate plus a margin set by the issuer.','violet'],
    ['Balance Transfer APR','Rate on balances moved from another card. Often 0% intro for 12–21 months, then reverts to purchase APR or higher.','indigo'],
    ['Cash Advance APR','The most expensive — typically 25–30%. Begins accruing immediately with no grace period, plus a cash advance fee.','red'],
    ['Penalty APR','Triggered by 2+ late payments. Up to 29.99% and can be applied to existing balance under certain conditions (CARD Act protections apply).','amber'],
    ] as [$title,$desc,$c])
    <div class="cc-card p-5 rounded-2xl bg-[#f7f5ff] border border-[#e8e2f8]">
        <h3 class="!mt-0 text-[13.5px] text-violet-700">{{ $title }}</h3>
        <p class="!text-[13px] !mb-0 text-[#6b7280]">{{ $desc }}</p>
    </div>
    @endforeach
</div>

<h2>Grace Period</h2>
<p>The grace period is your most powerful tool against interest. If you pay your statement balance in full by the due date every month, you pay <strong>zero interest</strong> — you effectively get a 20–55 day interest-free loan on every purchase. The CARD Act of 2009 mandates a minimum 21-day grace period.</p>
<p>The grace period disappears entirely once you carry any balance. The moment you don't pay in full, interest begins accruing on <em>all</em> new purchases from the day of purchase — not the statement date. This is the "double-cycle billing" trap that catches many cardholders.</p>

<div class="my-7 p-6 rounded-2xl border-l-4 border-violet-500" style="background:linear-gradient(135deg,#f5f3ff,#ede9fe)">
    <p class="text-[13.5px] font-semibold text-[#4c1d95] mb-1">The Minimum Payment Trap</p>
    <p class="text-[13.5px] text-[#5b21b6] !mb-0 leading-relaxed">Paying only the minimum on a $3,000 balance at 24% APR takes 17 years to pay off and costs over $4,900 in interest — more than 1.6× the original balance. Credit card statements are now required by law to show the cost of paying only minimums, but many consumers don't read the fine print.</p>
</div>
@endsection
@section('related')
<a href="{{ route('cards.mechanics-scoring') }}" class="block bg-white rounded-xl border border-[#e8e2f8] p-4 hover:border-violet-300 hover:shadow-md transition-all">
    <span class="text-[10.5px] font-bold uppercase tracking-[.12em] text-violet-600 mb-2 block">Card Mechanics</span>
    <p class="text-[13.5px] font-semibold text-[#1e0a3c] leading-snug">Credit Scoring Models</p>
</a>
<a href="{{ route('cards.mechanics-risk_based') }}" class="block bg-white rounded-xl border border-[#e8e2f8] p-4 hover:border-violet-300 hover:shadow-md transition-all">
    <span class="text-[10.5px] font-bold uppercase tracking-[.12em] text-violet-600 mb-2 block">Card Mechanics</span>
    <p class="text-[13.5px] font-semibold text-[#1e0a3c] leading-snug">Risk-based Pricing</p>
</a>
<a href="{{ route('cards.strategy-analysis') }}" class="block bg-white rounded-xl border border-[#e8e2f8] p-4 hover:border-violet-300 hover:shadow-md transition-all">
    <span class="text-[10.5px] font-bold uppercase tracking-[.12em] text-indigo-500 mb-2 block">Card Strategy</span>
    <p class="text-[13.5px] font-semibold text-[#1e0a3c] leading-snug">Balance Transfer Analysis</p>
</a>
@endsection