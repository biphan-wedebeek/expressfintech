@extends('layouts.personal-finance')

@section('title', 'Tax Strategy — Legal Tax Reduction Frameworks')
@section('breadcrumb', 'Tax Planning')
@section('eyebrow', 'Chapter 06 · Planning')
@section('page_title', 'Tax Strategy')
@section('page_lead', 'Tax planning is legal. Tax evasion is not. Strategy, timing and knowledge can save hundreds of thousands of dollars over a lifetime.')

@section('content')

<section class="bg-surface border-b border-[var(--border)] py-20">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="grid lg:grid-cols-2 gap-14 items-start">
            <div>
                <div class="flex items-center gap-3 mb-4 text-[10px] font-bold tracking-[0.26em] uppercase text-emerald-600">
                    <span class="w-6 h-px bg-emerald-600"></span>
                    Legal Optimisation
                </div>

                <h2 class="fonttitle text-3xl lg:text-4xl font-bold mb-8">
                    Tax Strategy: Legal, Powerful, Essential
                </h2>

                <p class="text-muted leading-relaxed mb-4">
                    Tax planning is legal. Tax evasion is not. The difference between them is strategy and knowledge.
                </p>

                <p class="text-muted leading-relaxed mb-6">
                    The US tax system is <strong class="text-[var(--text-primary)]">progressive</strong>.
                    Higher tax brackets apply only to the income within that bracket.
                </p>

                <div class="border border-emerald-200 bg-emerald-50 p-6 rounded-lg">

                    <div class="text-xs uppercase tracking-wider text-emerald-700 font-semibold mb-2">
                        Tax Hack
                    </div>

                    <p class="text-sm text-muted">
                        Capital gains on assets held <strong class="text-[var(--text-primary)]">over 12 months</strong>
                        are taxed at lower long-term rates (0%, 15%, or 20%).
                        Holding investments longer can dramatically reduce taxes.
                    </p>
                </div>
            </div>

            <div class="flex flex-col divide-y divide-[var(--border)]">
                <div class="flex gap-4 py-4">
                    <span class="text-emerald-600 font-bold">✓</span>
                    <p class="text-sm text-muted">
                        <strong>Maximise 401(k)</strong> — reduce taxable income by up to $23,000 in {{ now()->year }}
                    </p>
                </div>

                <div class="flex gap-4 py-4">
                    <span class="text-emerald-600 font-bold">✓</span>
                    <p class="text-sm text-muted">
                        <strong>Contribute to an HSA</strong> — the only triple tax-advantaged account
                    </p>
                </div>

                <div class="flex gap-4 py-4">
                    <span class="text-emerald-600 font-bold">✓</span>
                    <p class="text-sm text-muted">
                        <strong>Hold investments 12+ months</strong> to qualify for long-term capital gains
                    </p>
                </div>

                <div class="flex gap-4 py-4">
                    <span class="text-emerald-600 font-bold">✓</span>
                    <p class="text-sm text-muted">
                        <strong>Tax-loss harvesting</strong> — offset gains before December 31
                    </p>
                </div>

                <div class="flex gap-4 py-4">
                    <span class="text-emerald-600 font-bold">✓</span>
                    <p class="text-sm text-muted">
                        <strong>Roth conversion ladder</strong> in low-income years
                    </p>
                </div>

                <div class="flex gap-4 py-4">
                    <span class="text-emerald-600 font-bold">✓</span>
                    <p class="text-sm text-muted">
                        <strong>Bunch deductions</strong> to alternate between itemizing and standard deduction
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-white border-b border-[var(--border)] py-20">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="flex items-center gap-3 mb-4 text-[10px] font-bold tracking-[0.26em] uppercase text-emerald-600">
            <span class="w-6 h-px bg-emerald-600"></span>
            Accounts First
        </div>

        <h2 class="fonttitle text-3xl lg:text-4xl font-bold mb-10">
            The Tax-Advantaged Account Hierarchy
        </h2>

        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">

            @foreach([
            ['01','401(k) to Employer Match','Always capture the full employer match first. It is a guaranteed return.'],
            ['02','Max Your HSA','Triple tax advantage: deductible contributions, tax-free growth, tax-free medical withdrawals.'],
            ['03','Max Your Roth IRA','$7,000 annual limit. Tax-free growth and withdrawals in retirement.'],
            ['04','Back to 401(k)','After IRA is maxed, contribute up to the $23,000 annual limit.']
            ] as [$n,$title,$body])

            <div class="bg-surface border border-[var(--border)] p-7 hover:border-emerald-400 transition">
                <div class="text-4xl font-bold text-emerald-500 opacity-40 mb-4">
                    {{ $n }}
                </div>

                <div class="font-semibold text-[var(--text-primary)] mb-2">
                    {{ $title }}
                </div>

                <p class="text-sm text-muted leading-relaxed">
                    {{ $body }}
                </p>
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
            <a href="{{ route('finance.behavior.decision_bias') }}" class="block bg-surface border border-[var(--border)] p-6 hover:shadow-md transition">
                <div class="text-xs uppercase tracking-wider text-emerald-600 font-semibold mb-2">
                    Financial Decision Bias
                </div>

                <div class="fonttitle text-lg font-bold mb-2">
                    Confirmation Bias
                </div>

                <p class="text-sm text-muted mb-4">
                    People tend to favor information that confirms their existing beliefs.
                </p>

                <span class="text-xs uppercase tracking-wider text-emerald-600 font-semibold">
                    Read More →
                </span>
            </a>

            <a href="{{ route('finance.planning.retirement') }}" class="block bg-surface border border-[var(--border)] p-6 hover:shadow-md transition">
                <div class="text-xs uppercase tracking-wider text-emerald-600 font-semibold mb-2">
                    Retirement
                </div>

                <div class="fonttitle text-lg font-bold mb-2">
                    Retirement Planning
                </div>

                <p class="text-sm text-muted mb-4">
                    401(k) and IRA strategy is central to retirement planning.
                </p>

                <span class="text-xs uppercase tracking-wider text-emerald-600 font-semibold">
                    Read More →
                </span>
            </a>

            <a href="{{ route('finance.building.independence') }}" class="block bg-surface border border-[var(--border)] p-6 hover:shadow-md transition">
                <div class="text-xs uppercase tracking-wider text-emerald-600 font-semibold mb-2">
                    Independence
                </div>

                <div class="fonttitle text-lg font-bold mb-2">
                    FIRE & Financial Independence
                </div>

                <p class="text-sm text-muted mb-4">
                    Tax optimisation accelerates the path to financial freedom.
                </p>

                <span class="text-xs uppercase tracking-wider text-emerald-600 font-semibold">
                    Read More →
                </span>
            </a>
        </div>
    </div>
</section>

@endsection