@extends('layouts.personal-finance')

@section('title', 'Emergency Fund — Build Your Financial Firewall')
@section('breadcrumb', 'Emergency Fund')
@section('eyebrow', 'Chapter 02 · Planning')
@section('page_title', 'Emergency Fund')
@section('page_lead', 'Before investing a single dollar — before paying down low-interest debt, before anything — you need a financial firewall. This is the one rule with no exceptions.')

@section('content')

<section class="bg-surface border-b border-[var(--border)] py-20">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="grid lg:grid-cols-2 gap-14 items-start">
            <div>
                <div class="flex items-center gap-3 mb-4 text-[10px] font-bold tracking-[0.26em] uppercase text-emerald-600">
                    <span class="w-6 h-px bg-emerald-600"></span>
                    The Foundation
                </div>

                <h2 class="fonttitle text-3xl lg:text-4xl font-bold mb-8">
                    Emergency Fund: Your Financial Firewall
                </h2>

                <p class="text-muted leading-relaxed mb-4">
                    An emergency fund is <strong class="text-[var(--text-primary)]">3 to 6 months of essential living expenses</strong> held in a liquid account.
                </p>

                <p class="text-muted leading-relaxed mb-4">
                    Without an emergency fund, unexpected expenses are paid with debt. That debt carries interest. That interest compounds.
                </p>

                <div class="py-8 my-8 border-y border-[var(--border)]">

                    <div class="fonttitle italic text-xl text-[var(--text-primary)] leading-relaxed">
                        "An emergency fund gives you the freedom to make financial decisions from strength, not desperation."
                    </div>

                    <div class="mt-3 text-xs uppercase tracking-wider text-amber-600">
                        — Personal Finance Principle
                    </div>

                </div>

                <p class="text-muted leading-relaxed">
                    Start with a <strong class="text-[var(--text-primary)]">$1,000 starter fund</strong>.
                    Once debt is gone, build the full buffer.
                </p>
            </div>

            <div>
                <div class="border-l-4 border-amber-500 bg-white p-8 shadow-sm mb-6">
                    <div class="fonttitle text-5xl font-black text-amber-500 mb-2">
                        3–6×
                    </div>

                    <div class="text-xs uppercase tracking-wider text-muted">
                        Monthly essential expenses held in savings
                    </div>
                </div>

                <ul class="space-y-3 text-sm text-muted">

                    <li class="flex gap-3">
                        <span class="text-emerald-600 font-bold">→</span>
                        <span>Use a <strong class="text-[var(--text-primary)]">high-yield savings account</strong></span>
                    </li>

                    <li class="flex gap-3">
                        <span class="text-emerald-600 font-bold">→</span>
                        <span>Never invest your emergency fund in stocks or crypto</span>
                    </li>

                    <li class="flex gap-3">
                        <span class="text-emerald-600 font-bold">→</span>
                        <span>Replenish immediately after withdrawals</span>
                    </li>

                    <li class="flex gap-3">
                        <span class="text-emerald-600 font-bold">→</span>
                        <span>Freelancers should target <strong>6–12 months</strong></span>
                    </li>

                    <li class="flex gap-3">
                        <span class="text-emerald-600 font-bold">→</span>
                        <span>A starter fund of $1,000 is better than zero</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="bg-white border-b border-[var(--border)] py-20">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="flex items-center gap-3 mb-4 text-[10px] font-bold tracking-[0.26em] uppercase text-emerald-600">
            <span class="w-6 h-px bg-emerald-600"></span>
            Build Your Fund
        </div>

        <h2 class="fonttitle text-3xl lg:text-4xl font-bold mb-10">
            3-Phase Emergency Fund Strategy
        </h2>

        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">

            @foreach([
            ['01','Starter Fund — $1,000','Build $1,000 first if you have high-interest debt.'],
            ['02','1-Month Buffer','Grow savings to one month of expenses.'],
            ['03','Full Fund — 3 Months','Standard emergency fund target.'],
            ['04','Extended Fund — 6–12 Months','For freelancers and unstable income.'],
            ] as [$n,$title,$body])

            <div class="bg-surface border border-[var(--border)] p-7 hover:border-emerald-400 transition">

                <div class="text-4xl font-bold text-emerald-500 opacity-40 mb-4">
                    {{ $n }}
                </div>

                <div class="font-semibold text-[var(--text-primary)] mb-2">
                    {{ $title }}
                </div>

                <div class="text-sm text-muted leading-relaxed">
                    {{ $body }}
                </div>

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
            <a href="{{ route('finance.planning.budget') }}" class="block bg-surface border border-[var(--border)] p-6 hover:shadow-md transition">

                <div class="text-xs uppercase tracking-wider text-emerald-600 font-semibold mb-2">
                    Budgeting
                </div>

                <div class="fonttitle text-lg font-bold mb-2">
                    The 50/30/20 Rule Explained
                </div>

                <p class="text-sm text-muted mb-4">
                    Allocate the 20% that funds your emergency savings.
                </p>

                <span class="text-xs uppercase tracking-wider text-emerald-600 font-semibold">
                    Read More →
                </span>
            </a>

            <a href="{{ route('finance.building.debt') }}" class="block bg-surface border border-[var(--border)] p-6 hover:shadow-md transition">

                <div class="text-xs uppercase tracking-wider text-emerald-600 font-semibold mb-2">
                    Debt
                </div>

                <div class="fonttitle text-lg font-bold mb-2">
                    Defeating Debt: Avalanche vs Snowball
                </div>

                <p class="text-sm text-muted mb-4">
                    Once your starter fund is set, eliminate high-interest debt.
                </p>

                <span class="text-xs uppercase tracking-wider text-emerald-600 font-semibold">
                    Read More →
                </span>
            </a>

            <a href="{{ route('finance.behavior.decision_bias') }}" class="block bg-surface border border-[var(--border)] p-6 hover:shadow-md transition">

                <div class="text-xs uppercase tracking-wider text-emerald-600 font-semibold mb-2">
                    Financial Decision Bias
                </div>

                <div class="fonttitle text-lg font-bold mb-2">
                    Understanding Financial Decision Bias
                </div>

                <p class="text-sm text-muted mb-4">
                    Common biases that affect financial decisions.
                </p>

                <span class="text-xs uppercase tracking-wider text-emerald-600 font-semibold">
                    Read More →
                </span>
            </a>
        </div>
    </div>
</section>

@endsection