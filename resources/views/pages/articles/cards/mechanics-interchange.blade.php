{{-- resources/views/pages/articles/cards/mechanics.interchange.blade.php --}}
@extends('layouts.credit-cards')
@section('title', 'Interchange Fees')
@section('breadcrumb_section', 'Card Mechanics')
@section('breadcrumb_current', 'Interchange Fees')
@section('hero_section_label', 'Card Mechanics')
@section('hero_title', 'Interchange Fees')
@section('hero_subtitle', 'The hidden fee every merchant pays on every card transaction — how it funds rewards programs and why it is one of the most contested areas in payments regulation.')
@section('hero_date', 'March 2026')
@section('hero_read_time', '8 min read')
@section('article_badge', 'Card Mechanics')
@section('last_updated', 'March 2026')
@section('nav_interchange', 'active')
@section('hero_stats')
    <div class="hero-stat rounded-xl px-5 py-4 text-center min-w-[130px]">
        <p class="text-[26px] font-bold text-white fonttitle">1.5–2.5%</p>
        <p class="text-[11.5px] text-purple-300/70 leading-tight mt-1">Typical interchange rate</p>
    </div>
    <div class="hero-stat rounded-xl px-5 py-4 text-center min-w-[130px]">
        <p class="text-[26px] font-bold text-white fonttitle">$90B+</p>
        <p class="text-[11.5px] text-purple-300/70 leading-tight mt-1">Annual US interchange fees</p>
    </div>
@endsection
@section('sidebar_stats')
    <div class="space-y-3">
        @foreach([['Visa/MC Credit','1.5–2.5%'],['Debit (regulated)','~0.21%'],['AmEx typical','2.3–3.0%']] as [$l,$v])
        <div class="cc-card flex items-center justify-between p-3 rounded-xl bg-[#f7f5ff] border border-[#e8e2f8]">
            <p class="text-[11px] text-[#9ca3af] font-mono-sp">{{ $l }}</p>
            <p class="text-[15px] font-bold text-[#1e0a3c]">{{ $v }}</p>
        </div>
        @endforeach
    </div>
@endsection
@section('content')
<p class="text-[17px] text-[#1e0a3c] font-medium leading-relaxed mb-8 pb-6 border-b border-[#f5f0ff]">
    Every time you swipe, tap, or insert a credit card, a fee flows invisibly from the merchant to the card ecosystem. Interchange — the largest component of that fee — is the engine that funds reward programs, airline miles, and cashback offers. Understanding it explains why your card issuer wants you to use your card for everything.
</p>

<h2>The Four-Party Model</h2>
<p>Modern card transactions involve four parties, each with a role in routing and settling the payment:</p>
<div class="my-6 grid grid-cols-4 gap-3">
    @foreach([
        ['1','Cardholder','Makes purchase with card'],
        ['2','Merchant','Accepts the card payment'],
        ['3','Acquirer','Merchant\'s bank, processes transactions'],
        ['4','Issuer','Cardholder\'s bank, authorizes & pays'],
    ] as [$n,$p,$d])
    <div class="cc-card p-4 rounded-2xl bg-[#f7f5ff] border border-[#e8e2f8] text-center">
        <div class="w-8 h-8 rounded-full bg-violet-100 flex items-center justify-center mx-auto mb-2 text-[12px] font-bold text-violet-700">{{ $n }}</div>
        <p class="text-[13px] font-semibold text-[#1e0a3c] mb-1">{{ $p }}</p>
        <p class="text-[12px] text-[#9ca3af]">{{ $d }}</p>
    </div>
    @endforeach
</div>

<h2>Fee Flow on a $100 Transaction</h2>
<div class="my-5 space-y-2">
    @foreach([
        ['Merchant charges customer','$100.00','bg-[#f7f5ff]'],
        ['Acquirer deducts MDR (~2.2%)','–$2.20','bg-[#f7f5ff]'],
        ['Network fee (~0.10%)','–$0.10','bg-[#f7f5ff]'],
        ['Interchange to issuer (~1.8%)','–$1.80','bg-violet-50'],
        ['Merchant net received','$97.80','bg-violet-100 font-bold'],
    ] as [$step,$amt,$bg])
    <div class="flex items-center justify-between px-4 py-3 rounded-xl border border-[#e8e2f8] {{ $bg }}">
        <span class="text-[13px] text-[#374151]">{{ $step }}</span>
        <span class="font-mono-sp text-[13.5px] font-bold text-violet-700">{{ $amt }}</span>
    </div>
    @endforeach
</div>

<h2>Why Interchange Rates Vary</h2>
<p>Interchange is not a flat fee — Visa alone publishes hundreds of rate tiers. The main variables are:</p>
<ul>
    <li><strong>Card type</strong> — Rewards cards carry higher interchange than basic cards; premium cards (Sapphire Reserve, Amex Platinum) carry the highest rates.</li>
    <li><strong>Transaction type</strong> — Card-present (swipe/tap) is lower risk than card-not-present (online). CNP transactions attract a higher rate to compensate for fraud risk.</li>
    <li><strong>Merchant category</strong> — Supermarkets and gas stations are capped at lower rates by negotiation. Airlines and hotels pay higher rates.</li>
    <li><strong>Card network</strong> — AmEx (closed-loop) typically charges higher rates but also handles more of the processing value chain.</li>
</ul>

<div class="my-7 p-6 rounded-2xl border-l-4 border-violet-500" style="background:linear-gradient(135deg,#f5f3ff,#ede9fe)">
    <p class="text-[13.5px] font-semibold text-[#4c1d95] mb-1">The Rewards Funding Loop</p>
    <p class="text-[13.5px] text-[#5b21b6] !mb-0 leading-relaxed">Premium rewards cards generate ~2–3% interchange per transaction. Issuers rebate ~1–1.5% back to cardholders as points/cashback and keep the remainder as profit. This is why premium cards require high spend to justify their annual fees — and why merchants have lobbied intensively to cap interchange rates (EU cap: 0.3% credit, 0.2% debit).</p>
</div>
@endsection
@section('related')
<a href="{{ route('cards.strategy-reward') }}" class="block bg-white rounded-xl border border-[#e8e2f8] p-4 hover:border-violet-300 hover:shadow-md transition-all">
    <span class="text-[10.5px] font-bold uppercase tracking-[.12em] text-indigo-500 mb-2 block">Card Strategy</span>
    <p class="text-[13.5px] font-semibold text-[#1e0a3c] leading-snug">Reward Program Economics</p>
</a>
<a href="{{ route('cards.strategy-cashback') }}" class="block bg-white rounded-xl border border-[#e8e2f8] p-4 hover:border-violet-300 hover:shadow-md transition-all">
    <span class="text-[10.5px] font-bold uppercase tracking-[.12em] text-indigo-500 mb-2 block">Card Strategy</span>
    <p class="text-[13.5px] font-semibold text-[#1e0a3c] leading-snug">Cashback vs Points</p>
</a>
<a href="{{ route('cards.market-comparison') }}" class="block bg-white rounded-xl border border-[#e8e2f8] p-4 hover:border-violet-300 hover:shadow-md transition-all">
    <span class="text-[10.5px] font-bold uppercase tracking-[.12em] text-pink-500 mb-2 block">Market</span>
    <p class="text-[13.5px] font-semibold text-[#1e0a3c] leading-snug">Card Network Comparison</p>
</a>
@endsection