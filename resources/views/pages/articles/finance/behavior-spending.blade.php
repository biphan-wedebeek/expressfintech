@extends('layouts.personal-finance')

@section('title', 'Spending Behavior — Why We Overspend')
@section('breadcrumb', 'Spending')
@section('eyebrow', 'Behavior · Psychology')
@section('page_title', 'The Psychology of Spending')
@section('page_lead', 'Understanding why we spend is more powerful than any budget. Spending behavior is driven by emotion, environment, and social influence — not rational calculation.')

@section('content')

<section class="bg-emerald-50 border-b border-emerald-100 py-20">
<div class="max-w-7xl mx-auto px-6 lg:px-12">

<div class="grid lg:grid-cols-2 gap-14 items-start">

<div>

<div class="flex items-center gap-3 mb-4 uppercase tracking-[0.25em] text-emerald-600 text-xs font-semibold">
<span class="w-6 h-px bg-emerald-500"></span>
Behavioral Finance
</div>

<h2 class="fonttitle text-emerald-900 text-3xl md:text-4xl mb-8">
Why Smart People Overspend
</h2>

<p class="text-emerald-900/70 leading-relaxed mb-5">
Spending is rarely a math problem. It is an emotional one. Retail environments are engineered to trigger purchases. Notifications, sales deadlines, and social comparison all activate spending impulses that bypass rational thought.
</p>

<p class="text-emerald-900/70 leading-relaxed mb-5">
The most effective intervention is not willpower — it is <strong class="text-emerald-900">friction</strong>. Adding steps between impulse and purchase (waiting periods, unsubscribing from marketing, removing saved cards) dramatically reduces unplanned spending.
</p>

<div class="border border-emerald-200 bg-emerald-100/40 p-6 rounded">

<div class="uppercase tracking-[0.2em] text-xs text-emerald-600 font-semibold mb-2">
The 48-Hour Rule
</div>

<p class="text-emerald-900/70 text-sm leading-relaxed">
Before any non-essential purchase over $50, wait 48 hours. Research shows that about 70% of impulse purchases are abandoned when a waiting period is introduced.
</p>

</div>

</div>


<div>

<div class="border-l-4 border-amber-500 bg-white shadow-sm p-7 mb-6">

<div class="fonttitle text-5xl text-amber-500 mb-2">
70%
</div>

<div class="text-xs uppercase tracking-wide text-emerald-900/60">
Of impulse purchases abandoned with a 48-hour waiting rule
</div>

</div>


<ul class="space-y-3 text-emerald-900/70 text-sm">

<li class="flex gap-3">
<span class="text-emerald-600 font-semibold">→</span>
<span>Unsubscribe from all retail marketing emails</span>
</li>

<li class="flex gap-3">
<span class="text-emerald-600 font-semibold">→</span>
<span>Remove saved payment methods from shopping sites</span>
</li>

<li class="flex gap-3">
<span class="text-emerald-600 font-semibold">→</span>
<span>Use cash or a separate debit card for discretionary spending</span>
</li>

<li class="flex gap-3">
<span class="text-emerald-600 font-semibold">→</span>
<span>Identify your personal spending triggers (stress, boredom, social)</span>
</li>

<li class="flex gap-3">
<span class="text-emerald-600 font-semibold">→</span>
<span>Track every purchase — awareness alone reduces spending</span>
</li>

</ul>

</div>

</div>

</div>
</section>



<section class="bg-white border-b border-emerald-100 py-20">

<div class="max-w-7xl mx-auto px-6 lg:px-12">

<div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">

<div class="bg-emerald-50 hover:bg-emerald-100 transition p-7 rounded">
<div class="text-4xl font-bold text-emerald-200 mb-4">01</div>
<div class="font-semibold text-emerald-900 mb-2">Audit Your Last 90 Days</div>
<p class="text-sm text-emerald-900/70">
Pull every transaction from the last 3 months. Categorise. Most people are surprised by both totals and patterns.
</p>
</div>

<div class="bg-emerald-50 hover:bg-emerald-100 transition p-7 rounded">
<div class="text-4xl font-bold text-emerald-200 mb-4">02</div>
<div class="font-semibold text-emerald-900 mb-2">Identify Emotional Triggers</div>
<p class="text-sm text-emerald-900/70">
Map your discretionary purchases to days and moods. Most overspending concentrates in a few emotional states.
</p>
</div>

<div class="bg-emerald-50 hover:bg-emerald-100 transition p-7 rounded">
<div class="text-4xl font-bold text-emerald-200 mb-4">03</div>
<div class="font-semibold text-emerald-900 mb-2">Add Friction to Impulses</div>
<p class="text-sm text-emerald-900/70">
Remove saved cards. Add checkout delays. Use cash for high-risk spending categories.
</p>
</div>

<div class="bg-emerald-50 hover:bg-emerald-100 transition p-7 rounded">
<div class="text-4xl font-bold text-emerald-200 mb-4">04</div>
<div class="font-semibold text-emerald-900 mb-2">Design Your Environment</div>
<p class="text-sm text-emerald-900/70">
Automate savings first — what remains becomes the spending budget naturally.
</p>
</div>

</div>

</div>
</section>

@endsection



@section('related')

<section class="bg-emerald-50 border-t border-emerald-100 pt-16">

<div class="max-w-7xl mx-auto px-6 lg:px-12">

<div class="uppercase tracking-[0.25em] text-xs font-semibold text-emerald-600 mb-10">
Related Articles
</div>

<div class="grid md:grid-cols-3 gap-6">

<a href="{{route('finance.planning.budget')}}" class="block bg-white p-7 hover:bg-emerald-50 transition rounded shadow-sm">
<div class="text-xs uppercase tracking-widest text-emerald-600 mb-2">Budgeting</div>
<div class="fonttitle text-lg text-emerald-900 mb-2">The 50/30/20 Rule</div>
<p class="text-sm text-emerald-900/70 mb-4">
Structure your spending before addressing the psychology.
</p>
<div class="text-xs uppercase tracking-wider text-emerald-600">Read More →</div>
</a>

<a href="{{route('finance.behavior.psychology')}}" class="block bg-white p-7 hover:bg-emerald-50 transition rounded shadow-sm">
<div class="text-xs uppercase tracking-widest text-emerald-600 mb-2">Psychology</div>
<div class="fonttitle text-lg text-emerald-900 mb-2">Money Psychology</div>
<p class="text-sm text-emerald-900/70 mb-4">
The deeper cognitive patterns behind financial decisions.
</p>
<div class="text-xs uppercase tracking-wider text-emerald-600">Read More →</div>
</a>

<a href="{{route('finance.behavior.decision_bias')}}" class="block bg-white p-7 hover:bg-emerald-50 transition rounded shadow-sm">
<div class="text-xs uppercase tracking-widest text-emerald-600 mb-2">Bias</div>
<div class="fonttitle text-lg text-emerald-900 mb-2">Decision Bias in Finance</div>
<p class="text-sm text-emerald-900/70 mb-4">
How cognitive biases silently undermine financial decisions.
</p>
<div class="text-xs uppercase tracking-wider text-emerald-600">Read More →</div>
</a>

</div>

</div>
</section>

@endsection