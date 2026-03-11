{{-- resources/views/pages/articles/cards/strategy.cashback.blade.php --}}
@extends('layouts.credit-cards')
@section('title','Cashback vs Points')
@section('breadcrumb_section','Card Strategy')
@section('breadcrumb_current','Cashback vs Points')
@section('hero_section_label','Card Strategy')
@section('hero_title','Cashback vs Points')
@section('hero_subtitle','A data-driven framework for deciding which reward type delivers more value for your spending profile — and when the answer changes.')
@section('hero_date','March 2026')
@section('hero_read_time','8 min read')
@section('article_badge','Card Strategy')
@section('last_updated','March 2026')
@section('nav_cashback','active')
@section('hero_stats')
<div class="hero-stat rounded-xl px-5 py-4 text-center min-w-[130px]">
    <p class="text-[26px] font-bold text-white fonttitle">2–3¢</p>
    <p class="text-[11.5px] text-purple-300/70 leading-tight mt-1">Max points CPP (travel)</p>
</div>
<div class="hero-stat rounded-xl px-5 py-4 text-center min-w-[130px]">
    <p class="text-[26px] font-bold text-white fonttitle">1.5%</p>
    <p class="text-[11.5px] text-purple-300/70 leading-tight mt-1">Best flat cashback rate</p>
</div>
@endsection
@section('sidebar_stats')
<div class="space-y-3">
    @foreach([['Best flat cashback','2% (Citi DC)'],['Best travel CPP','~2.5¢/pt'],['Break-even CPP','1.5¢']] as [$l,$v])
    <div class="cc-card flex items-center justify-between p-3 rounded-xl bg-[#f7f5ff] border border-[#e8e2f8]">
        <p class="text-[11px] text-[#9ca3af] font-mono-sp">{{ $l }}</p>
        <p class="text-[14px] font-bold text-[#1e0a3c]">{{ $v }}</p>
    </div>
    @endforeach
</div>
@endsection
@section('content')
<p class="text-[17px] text-[#1e0a3c] font-medium leading-relaxed mb-8 pb-6 border-b border-[#f5f0ff]">
    The cashback vs points debate has a clear answer for most people — but it depends on one key variable: how much effort you're willing to invest in redemption. Cashback wins on simplicity; points win on ceiling value.
</p>
<h2>The Core Trade-off</h2>
<p>Cashback gives you a guaranteed, known return — 1.5–2% on every dollar. It never expires, it never devalues overnight, and it requires no planning. Points programs offer potentially 2–4× the value of cashback, but only when redeemed optimally through transfer partners for premium cabin travel or aspirational hotels.</p>
<div class="my-6 overflow-hidden rounded-2xl border border-[#e8e2f8]">
    <table class="w-full border-collapse text-[13.5px]">
        <thead>
            <tr style="background:linear-gradient(135deg,#1e0a3c,#2d1060)">
                <th class="text-left px-5 py-4 text-[11px] font-bold uppercase tracking-[.13em] text-purple-300">Factor</th>
                <th class="text-left px-5 py-4 text-[11px] font-bold uppercase tracking-[.13em] text-purple-200/80">Cashback</th>
                <th class="text-left px-5 py-4 text-[11px] font-bold uppercase tracking-[.13em] text-purple-200/80">Points/Miles</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-[#f5f0ff]">
            @foreach([
                ['Ceiling value','Fixed 1.5–2%','2–4¢/pt possible'],
                ['Complexity','None','High (transfer partners)'],
                ['Devaluation risk','None','Moderate (program changes)'],
                ['Flexibility','Spend on anything','Best for travel'],
                ['Signup bonus value','$200–$500','$800–$2,000+'],
                ['Best for','Simplicity seekers','Travel optimizers'],
            ] as [$f,$c,$p])
            <tr class="hover:bg-[#fdfbff] transition-colors">
                <td class="px-5 py-3.5 font-semibold text-[#1e0a3c] bg-[#fdfbff]">{{ $f }}</td>
                <td class="px-5 py-3.5 text-[#374151]">{{ $c }}</td>
                <td class="px-5 py-3.5 text-[#374151]">{{ $p }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<h2>Decision Framework</h2>
<ul>
    <li><strong>Choose cashback if:</strong> you don't travel frequently, you value simplicity, your spend is under $2,000/month, or you're new to rewards cards.</li>
    <li><strong>Choose points if:</strong> you travel at least once a year, you're willing to learn transfer partners, and you can commit to a card eco-system (Chase, Amex, or Citi).</li>
    <li><strong>Hybrid approach:</strong> Many optimizers use a points card for travel/dining spend and a 2% cashback card as a catch-all for everything else.</li>
</ul>
<div class="my-7 p-6 rounded-2xl border-l-4 border-violet-500" style="background:linear-gradient(135deg,#f5f3ff,#ede9fe)">
    <p class="text-[13.5px] font-semibold text-[#4c1d95] mb-1">The 1.5¢ Break-even Rule</p>
    <p class="text-[13.5px] text-[#5b21b6] !mb-0 leading-relaxed">If you consistently redeem points for less than 1.5¢ each — the equivalent of a 1.5% return — you'd be better off with a flat 2% cashback card. Use this as your benchmark: every points redemption should clear 1.5¢/pt to justify the ecosystem complexity over simple cashback.</p>
</div>
@endsection
@section('related')
<a href="{{ route('cards.strategy-reward') }}" class="block bg-white rounded-xl border border-[#e8e2f8] p-4 hover:border-violet-300 hover:shadow-md transition-all">
    <span class="text-[10.5px] font-bold uppercase tracking-[.12em] text-indigo-500 mb-2 block">Card Strategy</span>
    <p class="text-[13.5px] font-semibold text-[#1e0a3c] leading-snug">Reward Program Economics</p>
</a>
<a href="{{ route('cards.strategy-tactics') }}" class="block bg-white rounded-xl border border-[#e8e2f8] p-4 hover:border-violet-300 hover:shadow-md transition-all">
    <span class="text-[10.5px] font-bold uppercase tracking-[.12em] text-indigo-500 mb-2 block">Card Strategy</span>
    <p class="text-[13.5px] font-semibold text-[#1e0a3c] leading-snug">Card Churning Tactics</p>
</a>
<a href="{{ route('cards.strategy-analysis') }}" class="block bg-white rounded-xl border border-[#e8e2f8] p-4 hover:border-violet-300 hover:shadow-md transition-all">
    <span class="text-[10.5px] font-bold uppercase tracking-[.12em] text-indigo-500 mb-2 block">Card Strategy</span>
    <p class="text-[13.5px] font-semibold text-[#1e0a3c] leading-snug">Balance Transfer Analysis</p>
</a>
@endsection