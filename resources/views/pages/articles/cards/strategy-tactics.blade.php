{{-- resources/views/pages/articles/cards/strategy.tactics.blade.php --}}
@extends('layouts.credit-cards')
@section('title','Card Churning Tactics')
@section('breadcrumb_section','Card Strategy')
@section('breadcrumb_current','Card Churning Tactics')
@section('hero_section_label','Card Strategy')
@section('hero_title','Card Churning Tactics')
@section('hero_subtitle','The systematic strategy of opening and closing credit cards to capture signup bonuses repeatedly — the rules, the risks, and the issuer restrictions you must know.')
@section('hero_date',now()->format('F Y'))
@section('hero_read_time','9 min read')
@section('article_badge','Card Strategy')
@section('last_updated',now()->format('F Y'))
@section('nav_tactics','active')
@section('hero_stats')
<div class="hero-stat rounded-xl px-5 py-4 text-center min-w-[130px]">
    <p class="text-[26px] font-bold text-white fonttitle">$3K+</p>
    <p class="text-[11.5px] text-purple-300/70 leading-tight mt-1">Annual value (advanced churner)</p>
</div>
<div class="hero-stat rounded-xl px-5 py-4 text-center min-w-[130px]">
    <p class="text-[26px] font-bold text-white fonttitle">5/24</p>
    <p class="text-[11.5px] text-purple-300/70 leading-tight mt-1">Chase's key restriction</p>
</div>
@endsection
@section('sidebar_stats')
<div class="space-y-3">
    @foreach([['Chase 5/24 Rule','5 cards / 24 months'],['Amex Lifetime Rule','1 bonus per card'],['Cooling Period','12–24 months']] as [$l,$v])
    <div class="cc-card flex items-center justify-between p-3 rounded-xl bg-[#f7f5ff] border border-[#e8e2f8]">
        <p class="text-[11px] text-[#9ca3af] font-mono-sp">{{ $l }}</p>
        <p class="text-[14px] font-bold text-[#1e0a3c]">{{ $v }}</p>
    </div>
    @endforeach
</div>
@endsection
@section('content')
<p class="text-[17px] text-[#1e0a3c] font-medium leading-relaxed mb-8 pb-6 border-b border-[#f5f0ff]">
    Card churning — the practice of repeatedly applying for credit cards to collect signup bonuses — occupies a gray zone between aggressive optimization and activity issuers actively try to prevent. Done strategically, it can generate thousands of dollars in travel value annually. Done carelessly, it can damage your credit and result in account shutdowns.
</p>
<h2>Key Issuer Restrictions</h2>
<div class="my-6 overflow-hidden rounded-2xl border border-[#e8e2f8]">
    <table class="w-full border-collapse text-[13.5px]">
        <thead>
            <tr style="background:linear-gradient(135deg,#1e0a3c,#2d1060)">
                <th class="text-left px-5 py-4 text-[11px] font-bold uppercase tracking-[.13em] text-purple-300">Issuer</th>
                <th class="text-left px-5 py-4 text-[11px] font-bold uppercase tracking-[.13em] text-purple-200/80">Key Rule</th>
                <th class="text-left px-5 py-4 text-[11px] font-bold uppercase tracking-[.13em] text-purple-200/80">Impact on Churning</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-[#f5f0ff]">
            @foreach([
                ['Chase','5/24 Rule — denied if 5+ new accounts in 24 months','Highly restrictive; get Chase cards first'],
                ['Amex','One bonus per card per lifetime','Limits repeat harvesting'],
                ['Citi','No bonus if same card opened in 24–48 months','Card-specific cooling periods'],
                ['Capital One','1 card per 6 months; internal velocity limits','Moderate restriction'],
                ['Discover','One card at a time','Low impact; only 2–3 cards total'],
            ] as [$iss,$rule,$impact])
            <tr class="hover:bg-[#fdfbff] transition-colors">
                <td class="px-5 py-3.5 font-semibold text-[#1e0a3c] bg-[#fdfbff]">{{ $iss }}</td>
                <td class="px-5 py-3.5 text-[#374151] text-[13px]">{{ $rule }}</td>
                <td class="px-5 py-3.5 text-[#6b7280] text-[13px]">{{ $impact }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<h2>The Churner's Sequencing Strategy</h2>
<p>The optimal card application sequence — commonly discussed in the r/churning and Points Guy communities — follows issuer restriction logic:</p>
<ul>
    <li><strong>Start with Chase</strong> — 5/24 is the most restrictive rule. Exhaust your preferred Chase cards before applying to other issuers (which generally don't count toward 5/24).</li>
    <li><strong>Add Amex business cards</strong> — Amex business cards typically don't appear on personal credit reports and don't count toward 5/24, letting you stay under the Chase limit.</li>
    <li><strong>Bank account bonuses as supplements</strong> — Opening checking/savings accounts for bonuses ($200–$500) parallels card churning and doesn't affect credit at all.</li>
    <li><strong>Minimum spend planning</strong> — Map your regular expenses to bonus spend requirements. Never manufacture spend unless you fully understand the risks.</li>
</ul>
<div class="my-7 p-6 rounded-2xl border-l-4 border-amber-400" style="background:linear-gradient(135deg,#fffbeb,#fef9e7)">
    <p class="text-[13.5px] font-semibold text-[#92400e] mb-1">Risks & Ethics</p>
    <p class="text-[13.5px] text-[#78350f] !mb-0 leading-relaxed">Card churning at high velocity can trigger issuer fraud reviews, account shutdowns, and in extreme cases, clawback of earned bonuses. Maintain genuine spend history on kept accounts and never misrepresent income or business status on applications. The long-term relationship with an issuer is often worth more than one additional bonus.</p>
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
<a href="{{ route('cards.market-consumer') }}" class="block bg-white rounded-xl border border-[#e8e2f8] p-4 hover:border-violet-300 hover:shadow-md transition-all">
    <span class="text-[10.5px] font-bold uppercase tracking-[.12em] text-pink-500 mb-2 block">Market & Regulation</span>
    <p class="text-[13.5px] font-semibold text-[#1e0a3c] leading-snug">Consumer Protection Laws</p>
</a>
@endsection