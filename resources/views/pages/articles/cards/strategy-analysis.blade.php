{{-- resources/views/pages/articles/cards/strategy.analysis.blade.php --}}
@extends('layouts.credit-cards')
@section('title','Balance Transfer Analysis')
@section('breadcrumb_section','Card Strategy')
@section('breadcrumb_current','Balance Transfer Analysis')
@section('hero_section_label','Card Strategy')
@section('hero_title','Balance Transfer Analysis')
@section('hero_subtitle','How to use 0% APR balance transfer offers to eliminate credit card debt faster — the math, the traps, and the strategy for making transfers work.')
@section('hero_date',now()->format('F Y'))
@section('hero_read_time','8 min read')
@section('article_badge','Card Strategy')
@section('last_updated',now()->format('F Y'))
@section('nav_analysis','active')
@section('hero_stats')
<div class="hero-stat rounded-xl px-5 py-4 text-center min-w-[130px]">
    <p class="text-[26px] font-bold text-white fonttitle">21 mo</p>
    <p class="text-[11.5px] text-purple-300/70 leading-tight mt-1">Longest 0% intro offer</p>
</div>
<div class="hero-stat rounded-xl px-5 py-4 text-center min-w-[130px]">
    <p class="text-[26px] font-bold text-white fonttitle">3–5%</p>
    <p class="text-[11.5px] text-purple-300/70 leading-tight mt-1">Typical transfer fee</p>
</div>
@endsection
@section('sidebar_stats')
<div class="space-y-3">
    @foreach([['Longest 0% Period','21 months'],['Transfer Fee Range','3–5%'],['Avg. Balance Transferred','$5,800']] as [$l,$v])
    <div class="cc-card flex items-center justify-between p-3 rounded-xl bg-[#f7f5ff] border border-[#e8e2f8]">
        <p class="text-[11px] text-[#9ca3af] font-mono-sp">{{ $l }}</p>
        <p class="text-[14px] font-bold text-[#1e0a3c]">{{ $v }}</p>
    </div>
    @endforeach
</div>
@endsection
@section('content')
<p class="text-[17px] text-[#1e0a3c] font-medium leading-relaxed mb-8 pb-6 border-b border-[#f5f0ff]">
    A balance transfer moves high-interest credit card debt to a new card offering 0% APR for an introductory period — typically 12–21 months. Done correctly, it can save thousands in interest and dramatically accelerate debt payoff. Done carelessly, it can leave you deeper in debt.
</p>
<h2>The Math of a Balance Transfer</h2>
<p>Example: $5,000 balance at 24% APR on current card. Transfer to a card with 0% APR for 18 months, 3% transfer fee:</p>
<div class="my-5 space-y-2">
    @foreach([
        ['Interest cost: 18 months at 24%','$1,800 (approx)','red'],
        ['Transfer fee (3% of $5,000)','$150','amber'],
        ['Interest during 0% period','$0','emerald'],
        ['Net savings','$1,650','violet'],
    ] as [$step,$val,$c])
    <div class="flex items-center justify-between px-4 py-3 rounded-xl bg-[#f7f5ff] border border-[#e8e2f8]">
        <span class="text-[13px] text-[#374151]">{{ $step }}</span>
        <span class="font-mono-sp text-[13.5px] font-bold text-violet-700">{{ $val }}</span>
    </div>
    @endforeach
</div>
<h2>Critical Rules for Success</h2>
<ul>
    <li><strong>Never miss a payment</strong> — A single missed payment triggers the penalty APR on the entire transferred balance, negating all savings instantly.</li>
    <li><strong>Don't use the new card for purchases</strong> — Many cards apply payments to the 0% balance first; new purchases accrue interest immediately.</li>
    <li><strong>Have a payoff plan</strong> — Divide the total balance by the number of 0% months. That's your monthly payment target. If you can't clear the balance in time, reconsider.</li>
    <li><strong>Apply before you need it</strong> — Opening a new card temporarily reduces your score. Apply during a period of score strength.</li>
</ul>
<h2>Best Transfers of {{ now()->year }}</h2>
<div class="my-6 overflow-hidden rounded-2xl border border-[#e8e2f8]">
    <table class="w-full border-collapse text-[13.5px]">
        <thead>
            <tr style="background:linear-gradient(135deg,#1e0a3c,#2d1060)">
                <th class="text-left px-5 py-4 text-[11px] font-bold uppercase tracking-[.13em] text-purple-300">Card</th>
                <th class="text-left px-5 py-4 text-[11px] font-bold uppercase tracking-[.13em] text-purple-200/80">0% Period</th>
                <th class="text-left px-5 py-4 text-[11px] font-bold uppercase tracking-[.13em] text-purple-200/80">Transfer Fee</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-[#f5f0ff]">
            @foreach([['Citi Diamond Preferred','21 months','5% (min $5)'],['Citi Simplicity','21 months','5% (min $5)'],['BankAmericard','21 months','3%'],['Wells Fargo Reflect','21 months','5% (min $5)'],['Discover it Balance Transfer','18 months','3%']] as [$c,$p,$f])
            <tr class="hover:bg-[#fdfbff] transition-colors">
                <td class="px-5 py-3.5 font-semibold text-[#1e0a3c] bg-[#fdfbff]">{{ $c }}</td>
                <td class="px-5 py-3.5 font-mono-sp font-bold text-violet-700">{{ $p }}</td>
                <td class="px-5 py-3.5 text-[#374151]">{{ $f }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
@section('related')
<a href="{{ route('cards.mechanics-apr') }}" class="block bg-white rounded-xl border border-[#e8e2f8] p-4 hover:border-violet-300 hover:shadow-md transition-all">
    <span class="text-[10.5px] font-bold uppercase tracking-[.12em] text-violet-600 mb-2 block">Card Mechanics</span>
    <p class="text-[13.5px] font-semibold text-[#1e0a3c] leading-snug">APR & Interest Calculation</p>
</a>
<a href="{{ route('cards.strategy-strategy') }}" class="block bg-white rounded-xl border border-[#e8e2f8] p-4 hover:border-violet-300 hover:shadow-md transition-all">
    <span class="text-[10.5px] font-bold uppercase tracking-[.12em] text-indigo-500 mb-2 block">Card Strategy</span>
    <p class="text-[13.5px] font-semibold text-[#1e0a3c] leading-snug">Credit Utilization Strategy</p>
</a>
<a href="{{ route('cards.strategy-tactics') }}" class="block bg-white rounded-xl border border-[#e8e2f8] p-4 hover:border-violet-300 hover:shadow-md transition-all">
    <span class="text-[10.5px] font-bold uppercase tracking-[.12em] text-indigo-500 mb-2 block">Card Strategy</span>
    <p class="text-[13.5px] font-semibold text-[#1e0a3c] leading-snug">Card Churning Tactics</p>
</a>
@endsection