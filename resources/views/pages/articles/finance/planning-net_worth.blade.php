@extends('layouts.personal-finance')

@section('title', 'Net Worth — Track Your True Financial Score')
@section('breadcrumb', 'Net Worth')
@section('eyebrow', 'Planning · Reference')
@section('page_title', 'Track Your Net Worth')
@section('page_lead', 'Net worth is the most important financial metric. It reflects the true result of every financial decision you make.')

@section('content')

<section class="bg-surface border-b border-[var(--border)] py-20">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="grid lg:grid-cols-2 gap-14 items-start">
            <div>
                <div class="flex items-center gap-3 mb-4 text-[10px] font-bold tracking-[0.26em] uppercase text-emerald-600">
                    <span class="w-6 h-px bg-emerald-600"></span>
                    Your Financial Scorecard
                </div>

                <h2 class="fonttitle text-3xl lg:text-4xl font-bold mb-8">
                    What Is Net Worth and Why It Matters
                </h2>

                <p class="text-muted leading-relaxed mb-4">
                    Net worth is simply <strong class="text-[var(--text-primary)]">Assets − Liabilities</strong>.
                    Everything you own minus everything you owe.
                </p>

                <p class="text-muted leading-relaxed mb-6">
                    Income measures money flowing in.
                    Net worth measures the total result of your financial decisions.
                </p>

                <div class="border border-emerald-200 bg-emerald-50 p-6 rounded-lg">

                    <div class="text-xs uppercase tracking-wider text-emerald-700 font-semibold mb-2">
                        Benchmark by Age
                    </div>

                    <p class="text-sm text-muted">
                        At age 40 a typical target is <strong>2× annual income</strong>.
                        At age 50 around <strong>4× income</strong>.
                        These are directional guides, not strict rules.
                    </p>
                </div>
            </div>

            <div>
                <div class="border border-[var(--border)] bg-white">
                    <div class="bg-surface border-b border-[var(--border)] px-6 py-3 text-xs uppercase tracking-wider font-semibold">
                        Net Worth Formula
                    </div>

                    <div class="p-8 text-center">

                        <div class="fonttitle text-2xl italic text-emerald-600 mb-2">
                            Assets − Liabilities = Net Worth
                        </div>

                        <div class="text-xs text-muted">
                            Calculate monthly and track the trend.
                        </div>
                    </div>
                </div>

                <ul class="mt-6 space-y-3 text-sm text-muted">
                    <li class="flex gap-3">
                        <span class="text-emerald-600 font-bold">→</span>
                        <span><strong>Assets</strong>: cash, investments, property, valuables</span>
                    </li>

                    <li class="flex gap-3">
                        <span class="text-emerald-600 font-bold">→</span>
                        <span><strong>Liabilities</strong>: mortgage, loans, credit cards</span>
                    </li>

                    <li class="flex gap-3">
                        <span class="text-emerald-600 font-bold">→</span>
                        <span>Track monthly rather than annually</span>
                    </li>

                    <li class="flex gap-3">
                        <span class="text-emerald-600 font-bold">→</span>
                        <span>Use a spreadsheet or finance tracking app</span>
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
            Milestone Benchmarks
        </div>

        <h2 class="fonttitle text-3xl lg:text-4xl font-bold mb-10">
            Net Worth Targets by Age
        </h2>

        <div class="overflow-hidden border border-[var(--border)] rounded-lg">
            <table class="w-full text-sm">
                <thead class="bg-surface text-left text-xs uppercase tracking-wider text-muted">
                    <tr>
                        <th class="px-6 py-3">Age</th>
                        <th class="px-6 py-3">Target Net Worth</th>
                        <th class="px-6 py-3">Key Milestone</th>
                        <th class="px-6 py-3">Action Priority</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-[var(--border)]">
                    <tr class="hover:bg-surface">
                        <td class="px-6 py-4 font-semibold">25</td>
                        <td class="px-6 py-4 text-emerald-600 font-semibold">0.25× income</td>
                        <td class="px-6 py-4 text-muted">Emergency fund + no credit card debt</td>
                        <td class="px-6 py-4 text-muted">Build savings habit</td>
                    </tr>

                    <tr class="hover:bg-surface">
                        <td class="px-6 py-4 font-semibold">30</td>
                        <td class="px-6 py-4 text-emerald-600 font-semibold">1× income</td>
                        <td class="px-6 py-4 text-muted">Emergency fund + retirement started</td>
                        <td class="px-6 py-4 text-muted">Max tax-advantaged accounts</td>
                    </tr>

                    <tr class="hover:bg-surface">
                        <td class="px-6 py-4 font-semibold">40</td>
                        <td class="px-6 py-4 text-emerald-600 font-semibold">2× income</td>
                        <td class="px-6 py-4 text-muted">Mortgage controlled + strong portfolio</td>
                        <td class="px-6 py-4 text-muted">Diversify investments</td>
                    </tr>

                    <tr class="hover:bg-surface">
                        <td class="px-6 py-4 font-semibold">50</td>
                        <td class="px-6 py-4 text-emerald-600 font-semibold">4× income</td>
                        <td class="px-6 py-4 text-muted">Retirement on track</td>
                        <td class="px-6 py-4 text-muted">Reduce risk exposure</td>
                    </tr>

                    <tr class="hover:bg-surface">
                        <td class="px-6 py-4 font-semibold">60</td>
                        <td class="px-6 py-4 text-emerald-600 font-semibold">6× income</td>
                        <td class="px-6 py-4 text-muted">FIRE number approaching</td>
                        <td class="px-6 py-4 text-muted">Plan withdrawal strategy</td>
                    </tr>
                </tbody>
            </table>
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
                    The 50/30/20 Rule
                </div>

                <p class="text-sm text-muted mb-4">
                    A budgeting system designed to grow net worth over time.
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
                    Start Recognizing Bias
                </div>

                <p class="text-sm text-muted mb-4">
                    Financial biases can influence decisions and lead to poor investment outcomes.Investments are the largest long-term net worth driver.
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
                    Your retirement portfolio becomes your largest net worth component.
                </p>

                <span class="text-xs uppercase tracking-wider text-emerald-600 font-semibold">
                    Read More →
                </span>
            </a>
        </div>
    </div>
</section>

@endsection