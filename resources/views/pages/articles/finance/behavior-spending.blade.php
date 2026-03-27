@extends('layouts.personal-finance')

@section('title', 'Spending Behavior — Why We Overspend')
@section('breadcrumb', 'Spending')
@section('eyebrow', 'Behavior · Psychology')
@section('page_title', 'The Psychology of Spending')
@section('page_lead', 'Understanding why we spend is more powerful than any budget. Spending behavior is driven by emotion, environment, and social influence — not rational calculation.')

@section('content')

<section class="bg-surface border-b border-[var(--border)] py-20">
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

                <p class="text-muted leading-relaxed mb-5">
                    Spending is rarely a math problem. It is an emotional one. Retail environments are engineered to trigger purchases. Notifications, sales deadlines, and social comparison all activate spending impulses that bypass rational thought.
                </p>

                <p class="text-muted leading-relaxed mb-5">
                    The most effective intervention is not willpower — it is <strong class="text-emerald-900">friction</strong>. Adding steps between impulse and purchase (waiting periods, unsubscribing from marketing, removing saved cards) dramatically reduces unplanned spending.
                </p>

                <div class="border border-emerald-200 bg-emerald-100/40 p-6 rounded">

                    <div class="uppercase tracking-[0.2em] text-xs text-emerald-600 font-semibold mb-2">
                        The 48-Hour Rule
                    </div>

                    <p class="text-muted text-sm leading-relaxed">
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

                <ul class="space-y-3 text-muted text-sm">
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

<section class="bg-white border-b border-[var(--border)] py-20">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach([
            ['01','Audit Your Last 90 Days','Pull every transaction from the last 3 months. Categorise. Most people are surprised by both totals and patterns.'],
            ['02','Identify Emotional Triggers','Map your discretionary purchases to days and moods. Most overspending concentrates in a few emotional states.'],
            ['03','Add Friction to Impulses','Remove saved cards. Add checkout delays. Use cash for high-risk spending categories.'],
            ['04','Design Your Environment','Automate savings first — what remains becomes the spending budget naturally.'],
            ] as [$n,$title,$body])

            <div class="bg-surface p-7 border border-[var(--border)] hover:border-emerald-400 transition">
                <div class="text-4xl font-bold text-emerald-500 opacity-40 mb-4"> {{ $n }} </div>
                <div class="font-semibold mb-2 text-[var(--text-primary)]"> {{ $title }} </div>
                <div class="text-sm text-muted leading-relaxed"> {{ $body }} </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection

@section('related')

<section class="bg-white border-t border-[var(--border)] py-16">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="text-[10px] font-bold tracking-[0.26em] uppercase text-emerald-600 mb-8">
            Related Articles
        </div>
        <div class="grid md:grid-cols-3 gap-6">
            @foreach([
            ['finance.planning.budget','Budgeting','The 50/30/20 Rule','Structure your spending before addressing the psychology.'],
            ['finance.behavior.psychology','Psychology','Money Psychology','The deeper cognitive patterns behind financial decisions.'],
            ['finance.behavior.decision_bias','Bias','Decision Bias in Finance','How cognitive biases silently undermine financial decisions.'],
            ] as [$route,$cat,$title,$body])

            <a href="{{ route($route) }}" class="block border border-[var(--border)] bg-surface p-6 hover:shadow-md transition">
                <div class="text-xs uppercase tracking-wider text-emerald-600 font-semibold mb-2"> {{ $cat }} </div>
                <div class="fonttitle text-lg font-bold mb-2"> {{ $title }} </div>
                <p class="text-sm text-muted mb-4"> {{ $body }} </p>
                <span class="text-xs uppercase tracking-wider text-emerald-600 font-semibold">
                    Read More →
                </span>
            </a>
            @endforeach
        </div>
    </div>
</section>
@endsection