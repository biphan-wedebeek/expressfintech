 @extends('layouts.personal-finance')

@section('title', 'Decision Bias — Cognitive Errors That Cost Money')
@section('breadcrumb', 'Bias')
@section('eyebrow', 'Behavior · Cognitive Science')
@section('page_title', 'Decision Bias in Finance')
@section('page_lead', 'Every investor has biases. The ones who are unaware of them pay the highest price. Recognising your cognitive errors is the most direct path to better financial decisions.')

@section('content')

<section class="bg-surface border-b border-[var(--border)] py-20">
<div class="max-w-7xl mx-auto px-6 lg:px-12">

<div class="grid grid-cols-1 lg:grid-cols-2 gap-14 items-start">

<div>

<div class="flex items-center gap-3 mb-4 text-[10px] font-bold tracking-[0.26em] uppercase text-indigo">
<span class="w-[22px] h-[1px] bg-indigo block"></span>
Cognitive Finance
</div>

<h2 class="fonttitle text-4xl lg:text-5xl text-navy mb-8 leading-tight">
The Biases That Cost You Money
</h2>

<p class="text-[15px] text-muted leading-relaxed mb-5">
Cognitive biases are not signs of low intelligence — they are shortcuts the brain evolved for survival, not for financial markets. In finance, these shortcuts systematically destroy wealth.
</p>

<p class="text-[15px] text-muted leading-relaxed mb-6">
<strong class="text-navy">Loss aversion</strong> is the most costly: losses feel 2× more painful than equivalent gains feel good. This causes investors to hold losing positions too long and sell winning ones too early — the exact opposite of optimal strategy.
</p>

<div class="border border-indigo/20 bg-indigo-light p-6 rounded-md">
<div class="text-[10px] font-bold tracking-[0.22em] uppercase text-indigo mb-2">
The Cost of Bias
</div>

<p class="text-[13px] text-muted leading-relaxed">
DALBAR studies consistently show that the average retail investor earns 2–3% less per year than the index they invest in — not because of fees, but because of biased buy/sell timing decisions.
</p>
</div>

</div>

<div>

<div class="border-l-4 border-red-400 bg-white shadow-sm p-7 mb-4">
<div class="fonttitle text-5xl font-black text-red-400 mb-2">
2–3%
</div>

<div class="text-xs text-muted uppercase tracking-wider">
Annual return lost by average investor due to biased timing — per DALBAR
</div>
</div>

<ul class="space-y-3">

<li class="flex gap-3 text-[14px] text-muted leading-relaxed">
<span class="text-indigo font-semibold">→</span>
<span><strong class="text-navy">Loss Aversion</strong>: overweighting losses vs equal gains</span>
</li>

<li class="flex gap-3 text-[14px] text-muted leading-relaxed">
<span class="text-indigo font-semibold">→</span>
<span><strong class="text-navy">Recency Bias</strong>: assuming recent trends will continue forever</span>
</li>

<li class="flex gap-3 text-[14px] text-muted leading-relaxed">
<span class="text-indigo font-semibold">→</span>
<span><strong class="text-navy">Overconfidence</strong>: overestimating your stock-picking ability</span>
</li>

<li class="flex gap-3 text-[14px] text-muted leading-relaxed">
<span class="text-indigo font-semibold">→</span>
<span><strong class="text-navy">Anchoring</strong>: over-relying on the first number you see (purchase price)</span>
</li>

<li class="flex gap-3 text-[14px] text-muted leading-relaxed">
<span class="text-indigo font-semibold">→</span>
<span><strong class="text-navy">Herd Mentality</strong>: buying at peaks because everyone else is buying</span>
</li>

</ul>

</div>

</div>
</div>
</section>


<section class="bg-white border-b border-[var(--border)] py-20">
<div class="max-w-7xl mx-auto px-6 lg:px-12">

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

<div class="bg-surface p-8 border border-[var(--border)] hover:border-indigo transition">
<div class="text-5xl font-extrabold text-indigo/20 mb-4">01</div>
<div class="font-semibold text-navy mb-2">Acknowledge You Have Biases</div>
<p class="text-sm text-muted leading-relaxed">
No one is immune. The goal is not to eliminate bias but to design systems that minimise its impact.
</p>
</div>

<div class="bg-surface p-8 border border-[var(--border)] hover:border-indigo transition">
<div class="text-5xl font-extrabold text-indigo/20 mb-4">02</div>
<div class="font-semibold text-navy mb-2">Automate Buy Decisions</div>
<p class="text-sm text-muted leading-relaxed">
Dollar-cost averaging removes timing decisions entirely. Automated monthly purchases happen regardless of how you feel.
</p>
</div>

<div class="bg-surface p-8 border border-[var(--border)] hover:border-indigo transition">
<div class="text-5xl font-extrabold text-indigo/20 mb-4">03</div>
<div class="font-semibold text-navy mb-2">Write an Investment Policy</div>
<p class="text-sm text-muted leading-relaxed">
Document your strategy and rules before market volatility hits. Refer to it when emotions urge deviation.
</p>
</div>

<div class="bg-surface p-8 border border-[var(--border)] hover:border-indigo transition">
<div class="text-5xl font-extrabold text-indigo/20 mb-4">04</div>
<div class="font-semibold text-navy mb-2">Review Annually, Not Daily</div>
<p class="text-sm text-muted leading-relaxed">
Checking portfolio value daily activates loss aversion constantly. Quarterly or annual reviews reduce emotional interference.
</p>
</div>

</div>

</div>
</section>

@endsection


@section('related')

<section class="bg-surface border-t border-[var(--border)] pt-16">
<div class="max-w-7xl mx-auto px-6 lg:px-12">

<div class="text-[10px] font-bold tracking-[0.26em] uppercase text-indigo mb-10">
Related Articles
</div>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">

<a href="{{route('finance.behavior.psychology')}}" class="bg-white border border-[var(--border)] p-8 hover:shadow-md transition block">

<div class="text-xs uppercase tracking-widest text-indigo mb-2">
Psychology
</div>

<div class="fonttitle text-lg text-navy mb-2">
Money Psychology
</div>

<p class="text-sm text-muted mb-4">
The foundational mindset behind decision biases.
</p>

<div class="text-xs uppercase tracking-widest text-indigo">
Read More →
</div>

</a>

<a href="{{route('finance.planning.tax')}}" class="bg-white border border-[var(--border)] p-8 hover:shadow-md transition block">

<div class="text-xs uppercase tracking-widest text-indigo mb-2">
Investing
</div>

<div class="fonttitle text-lg text-navy mb-2">
Investing Strategy
</div>

<p class="text-sm text-muted mb-4">
Building a bias-resistant investment framework.
</p>

<div class="text-xs uppercase tracking-widest text-indigo">
Read More →
</div>

</a>

<a href="{{route('finance.behavior.risk_tolerance')}}" class="bg-white border border-[var(--border)] p-8 hover:shadow-md transition block">

<div class="text-xs uppercase tracking-widest text-indigo mb-2">
Risk
</div>

<div class="fonttitle text-lg text-navy mb-2">
Risk Tolerance
</div>

<p class="text-sm text-muted mb-4">
How biases inflate or deflate perceived risk tolerance.
</p>

<div class="text-xs uppercase tracking-widest text-indigo">
Read More →
</div>

</a>

</div>

</div>
</section>

@endsection