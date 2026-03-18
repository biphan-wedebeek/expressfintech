{{-- resources/views/pages/articles/cards/strategy.reward.blade.php --}}
@extends('layouts.credit-cards')
@section('title', 'Reward Program Economics')
@section('breadcrumb_section', 'Card Strategy')
@section('breadcrumb_current', 'Reward Program Economics')
@section('hero_section_label', 'Card Strategy')
@section('hero_title', 'Reward Program Economics')
@section('hero_subtitle', 'The financial mechanics behind points, miles, and cashback programs — how issuers profit from rewards and how savvy cardholders maximize value extraction.')
@section('hero_date', now()->format('F Y'))
@section('hero_read_time', '9 min read')
@section('article_badge', 'Card Strategy')
@section('last_updated', now()->format('F Y'))
@section('nav_reward', 'active')
@section('hero_stats')
    <div class="hero-stat rounded-xl px-5 py-4 text-center min-w-[130px]">
        <p class="text-[26px] font-bold text-white fonttitle">$50B+</p>
        <p class="text-[11.5px] text-purple-300/70 leading-tight mt-1">Annual rewards issued (US)</p>
    </div>
    <div class="hero-stat rounded-xl px-5 py-4 text-center min-w-[130px]">
        <p class="text-[26px] font-bold text-white fonttitle">30%</p>
        <p class="text-[11.5px] text-purple-300/70 leading-tight mt-1">Points never redeemed</p>
    </div>
@endsection
@section('sidebar_stats')
    <div class="space-y-3">
        @foreach([['Breakage Rate','~30%'],['Avg. CPP (Chase UR)','~1.9¢'],['Top Signup Bonuses','100K–200K pts']] as [$l,$v])
        <div class="cc-card flex items-center justify-between p-3 rounded-xl bg-[#f7f5ff] border border-[#e8e2f8]">
            <p class="text-[11px] text-[#9ca3af] font-mono-sp">{{ $l }}</p>
            <p class="text-[14px] font-bold text-[#1e0a3c]">{{ $v }}</p>
        </div>
        @endforeach
    </div>
@endsection
@section('content')
<p class="text-[17px] text-[#1e0a3c] font-medium leading-relaxed mb-8 pb-6 border-b border-[#f5f0ff]">
    Reward programs are simultaneously one of the most valuable consumer finance tools and one of the most profitable issuer products. The economics work because issuers capture interchange, carry interest from revolvers, and benefit from "breakage" — points that are earned but never redeemed. Understanding the profit model helps you extract maximum value.
</p>

<h2>The Economics for Issuers</h2>
<p>For every dollar spent on a premium rewards card, the issuer collects roughly 2–2.5% in interchange. From this, they spend approximately:</p>
<div class="my-6 space-y-2">
    @foreach([
        ['Rewards cost to cardholder','~1.0–1.5%','violet'],
        ['Fraud losses','~0.1%','red'],
        ['Processing & overhead','~0.3%','amber'],
        ['Issuer net margin','~0.4–0.8%','emerald'],
    ] as [$item,$pct,$c])
    <div class="flex items-center justify-between px-4 py-3 rounded-xl bg-[#f7f5ff] border border-[#e8e2f8]">
        <span class="text-[13px] text-[#374151]">{{ $item }}</span>
        <span class="font-mono-sp text-[13.5px] font-bold text-violet-700">{{ $pct }}</span>
    </div>
    @endforeach
</div>

<h2>How Reward Currencies Are Valued</h2>
<div class="my-6 overflow-hidden rounded-2xl border border-[#e8e2f8]">
    <table class="w-full border-collapse text-[13.5px]">
        <thead>
            <tr style="background:linear-gradient(135deg,#1e0a3c,#2d1060)">
                <th class="text-left px-5 py-4 text-[11px] font-bold uppercase tracking-[.13em] text-purple-300">Program</th>
                <th class="text-left px-5 py-4 text-[11px] font-bold uppercase tracking-[.13em] text-purple-200/80">Base Redemption</th>
                <th class="text-left px-5 py-4 text-[11px] font-bold uppercase tracking-[.13em] text-purple-200/80">Optimal CPP</th>
                <th class="text-left px-5 py-4 text-[11px] font-bold uppercase tracking-[.13em] text-purple-200/80">Best Use Case</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-[#f5f0ff]">
            @foreach([
                ['Chase Ultimate Rewards','1¢ (cash)','1.5–2.0¢','Transfer to Hyatt/United'],
                ['Amex Membership Rewards','0.6¢ (cash)','1.5–2.2¢','Transfer to Air France/Delta'],
                ['Capital One Miles','1¢','1.0–1.7¢','Transfer to Turkish/Wyndham'],
                ['Citi ThankYou','1¢ (cash)','1.4–1.9¢','Transfer to Turkish/Avianca'],
            ] as [$prog,$base,$opt,$use])
            <tr class="hover:bg-[#fdfbff] transition-colors">
                <td class="px-5 py-3.5 font-semibold text-[#1e0a3c] bg-[#fdfbff]">{{ $prog }}</td>
                <td class="px-5 py-3.5 font-mono-sp text-[#374151]">{{ $base }}</td>
                <td class="px-5 py-3.5 font-mono-sp font-bold text-violet-700">{{ $opt }}</td>
                <td class="px-5 py-3.5 text-[#6b7280] text-[13px]">{{ $use }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<h2>Maximizing Reward Value</h2>
<ul>
    <li><strong>Prioritize transfer partners</strong> — Transferring to airline and hotel programs almost always yields 50–100%+ more value than cash redemptions.</li>
    <li><strong>Capture signup bonuses</strong> — A 80,000-point signup bonus worth $1,200+ in travel is often the single highest-value action available to a creditworthy consumer.</li>
    <li><strong>Stack category bonuses</strong> — Using the right card for each spend category (dining card for restaurants, gas card for fuel) maximizes earn rate across your wallet.</li>
    <li><strong>Avoid letting points expire</strong> — Most programs require account activity every 12–18 months. Set a reminder to make a small purchase if you're not actively spending.</li>
</ul>

<div class="my-7 p-6 rounded-2xl border-l-4 border-violet-500" style="background:linear-gradient(135deg,#f5f3ff,#ede9fe)">
    <p class="text-[13.5px] font-semibold text-[#4c1d95] mb-1">Breakage — The Hidden Profit Center</p>
    <p class="text-[13.5px] text-[#5b21b6] !mb-0 leading-relaxed">Issuers and airlines count on approximately 20–35% of points never being redeemed ("breakage"). This pure profit is baked into reward program economics — which is why programs are always more generous in earning than in burning. The cardholder who accumulates miles and never uses them is the most profitable rewards customer of all.</p>
</div>
@endsection
@section('related')
<a href="{{ route('cards.strategy-cashback') }}" class="block bg-white rounded-xl border border-[#e8e2f8] p-4 hover:border-violet-300 hover:shadow-md transition-all">
    <span class="text-[10.5px] font-bold uppercase tracking-[.12em] text-indigo-500 mb-2 block">Card Strategy</span>
    <p class="text-[13.5px] font-semibold text-[#1e0a3c] leading-snug">Cashback vs Points Analysis</p>
</a>
<a href="{{ route('cards.mechanics-interchange') }}" class="block bg-white rounded-xl border border-[#e8e2f8] p-4 hover:border-violet-300 hover:shadow-md transition-all">
    <span class="text-[10.5px] font-bold uppercase tracking-[.12em] text-violet-600 mb-2 block">Card Mechanics</span>
    <p class="text-[13.5px] font-semibold text-[#1e0a3c] leading-snug">Interchange Fees & Rewards Funding</p>
</a>
<a href="{{ route('cards.strategy-tactics') }}" class="block bg-white rounded-xl border border-[#e8e2f8] p-4 hover:border-violet-300 hover:shadow-md transition-all">
    <span class="text-[10.5px] font-bold uppercase tracking-[.12em] text-indigo-500 mb-2 block">Card Strategy</span>
    <p class="text-[13.5px] font-semibold text-[#1e0a3c] leading-snug">Card Churning Tactics</p>
</a>
@endsection