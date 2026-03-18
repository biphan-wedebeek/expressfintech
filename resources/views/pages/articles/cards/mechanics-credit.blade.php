{{-- resources/views/pages/articles/cards/mechanics.credit.blade.php --}}
@extends('layouts.credit-cards')
@section('title', 'Credit Limits')
@section('breadcrumb_section', 'Card Mechanics')
@section('breadcrumb_current', 'Credit Limits')
@section('hero_section_label', 'Card Mechanics')
@section('hero_title', 'Credit Limits')
@section('hero_subtitle', 'How issuers set, adjust, and manage credit limits — and the strategies cardholders use to maximize their available credit while protecting their scores.')
@section('hero_date', seoUpdateMonth('card-mechanics-credit'))
@section('hero_read_time', '7 min read')
@section('article_badge', 'Card Mechanics')
@section('last_updated', seoUpdateMonth('card-mechanics-credit'))
@section('nav_credit', 'active')
@section('hero_stats')
    <div class="hero-stat rounded-xl px-5 py-4 text-center min-w-[130px]">
        <p class="text-[26px] font-bold text-white fonttitle">$31K</p>
        <p class="text-[11.5px] text-purple-300/70 leading-tight mt-1">Avg. US credit limit</p>
    </div>
@endsection
@section('sidebar_stats')
    <div class="space-y-3">
        @foreach([['Avg. US Limit','$31,000'],['Ideal Utilization','< 10%'],['CLI Approval Rate','~65%']] as [$l,$v])
        <div class="cc-card flex items-center justify-between p-3 rounded-xl bg-[#f7f5ff] border border-[#e8e2f8]">
            <p class="text-[11px] text-[#9ca3af] font-mono-sp">{{ $l }}</p>
            <p class="text-[15px] font-bold text-[#1e0a3c]">{{ $v }}</p>
        </div>
        @endforeach
    </div>
@endsection
@section('content')
<p class="text-[17px] text-[#1e0a3c] font-medium leading-relaxed mb-8 pb-6 border-b border-[#f5f0ff]">
    Your credit limit is not arbitrary. It reflects a data-driven risk model that balances the issuer's desire to maximize profitable balances against the risk of cardholder default. Understanding how limits are set — and how to increase them — gives you a significant lever over your credit score and purchasing flexibility.
</p>

<h2>How Issuers Set Initial Limits</h2>
<p>When you apply for a new card, the issuer runs your application through an underwriting model that incorporates:</p>
<div class="grid grid-cols-2 gap-4 my-6">
    @foreach([
        ['Income','Stated and verified income determines debt serviceability. Higher income supports higher limits.'],
        ['Credit Score','FICO/VantageScore predicts default probability. Scores above 740 typically unlock premium limits.'],
        ['Existing Debt','Total revolving and installment balances relative to income (utilization and DTI ratio).'],
        ['Account History','Length of credit history, track record with the same issuer, and product history.'],
    ] as [$t,$d])
    <div class="cc-card p-4 rounded-2xl bg-[#f7f5ff] border border-[#e8e2f8]">
        <h3 class="!mt-0 text-[13.5px] text-violet-700">{{ $t }}</h3>
        <p class="!text-[13px] !mb-0 text-[#6b7280]">{{ $d }}</p>
    </div>
    @endforeach
</div>

<h2>Credit Limit Increases (CLIs)</h2>
<p>Issuers run periodic automatic CLI reviews — often every 6–12 months for accounts in good standing. You can also request manual CLIs. Key factors that improve CLI approval odds:</p>
<ul>
    <li><strong>6+ months of on-time payments</strong> with the issuer before requesting</li>
    <li><strong>Demonstrated spend</strong> — using a meaningful portion of your limit shows the issuer you need more capacity</li>
    <li><strong>Income increase</strong> — updating your income on file at the issuer is the single most effective CLI trigger</li>
    <li><strong>Score improvement</strong> — if your score has risen significantly since account opening, a CLI is likely</li>
</ul>

<h2>Limit vs Utilization Strategy</h2>
<p>Because 30% of your FICO score is driven by utilization, your credit limit directly impacts your score. The calculation is straightforward:</p>
<div class="my-5 p-5 rounded-2xl bg-[#1e0a3c] text-center">
    <p class="text-[13px] text-purple-300/70 font-mono-sp mb-2">Credit Utilization Ratio</p>
    <p class="text-[20px] fonttitle font-bold text-white">Total Balances ÷ Total Limits × 100</p>
    <p class="text-[12px] text-purple-300/55 font-mono-sp mt-2">$2,000 balance on $10,000 limit = 20% utilization</p>
</div>
<p>Increasing your limit (without increasing spend) mechanically reduces your utilization ratio and improves your score. This is why requesting CLIs across all your cards is one of the fastest score-boosting strategies available.</p>

<div class="my-7 p-6 rounded-2xl border-l-4 border-violet-500" style="background:linear-gradient(135deg,#f5f3ff,#ede9fe)">
    <p class="text-[13.5px] font-semibold text-[#4c1d95] mb-1">Soft vs Hard Pull CLIs</p>
    <p class="text-[13.5px] text-[#5b21b6] !mb-0 leading-relaxed">Some issuers (Chase, Discover, AmEx) perform soft pulls for CLI requests — no impact on your score. Others (Citi, Capital One in some cases) do hard pulls. Always confirm which type before requesting. A soft pull CLI is essentially free money for your score — there's rarely a reason not to accept one.</p>
</div>
@endsection
@section('related')
<a href="{{ route('cards.mechanics-scoring') }}" class="block bg-white rounded-xl border border-[#e8e2f8] p-4 hover:border-violet-300 hover:shadow-md transition-all">
    <span class="text-[10.5px] font-bold uppercase tracking-[.12em] text-violet-600 mb-2 block">Card Mechanics</span>
    <p class="text-[13.5px] font-semibold text-[#1e0a3c] leading-snug">Credit Scoring Models</p>
</a>
<a href="{{ route('cards.strategy-strategy') }}" class="block bg-white rounded-xl border border-[#e8e2f8] p-4 hover:border-violet-300 hover:shadow-md transition-all">
    <span class="text-[10.5px] font-bold uppercase tracking-[.12em] text-indigo-500 mb-2 block">Card Strategy</span>
    <p class="text-[13.5px] font-semibold text-[#1e0a3c] leading-snug">Credit Utilization Strategy</p>
</a>
<a href="{{ route('cards.mechanics-risk_based') }}" class="block bg-white rounded-xl border border-[#e8e2f8] p-4 hover:border-violet-300 hover:shadow-md transition-all">
    <span class="text-[10.5px] font-bold uppercase tracking-[.12em] text-violet-600 mb-2 block">Card Mechanics</span>
    <p class="text-[13.5px] font-semibold text-[#1e0a3c] leading-snug">Risk-based Pricing</p>
</a>
@endsection