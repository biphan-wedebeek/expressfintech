@extends('layouts.personal-finance')

@section('title', 'Retirement Planning — Your Number & Timeline')
@section('breadcrumb', 'Retirement')
@section('eyebrow', 'Chapter 05 · Planning')
@section('page_title', 'Retirement Planning')
@section('page_lead', 'Retirement is not an age — it is a number. The goal is to accumulate enough assets that your investment returns permanently exceed your annual spending needs.')

@section('content')

<section class="bg-surface border-b border-[var(--border)] py-20">

    <div class="max-w-7xl mx-auto px-6 lg:px-12">

        <div class="grid lg:grid-cols-2 gap-14 items-start">

            <div>

                <div class="flex items-center gap-3 mb-4 text-[10px] font-bold tracking-[0.26em] uppercase text-emerald-600">
                    <span class="w-6 h-px bg-emerald-600"></span>
                    The Goal
                </div>

                <h2 class="fonttitle text-3xl lg:text-4xl font-bold mb-8">
                    Retirement is a Number, Not an Age
                </h2>

                <p class="text-muted leading-relaxed mb-4">
                    The goal is to accumulate enough assets that investment returns exceed your annual spending needs permanently.
                </p>

                <p class="text-muted leading-relaxed mb-6">
                    The <strong class="text-[var(--text-primary)]">4% Rule</strong> allows a safe withdrawal rate.
                    Multiply your annual expenses by <strong class="text-emerald-600">25</strong> to estimate your retirement target.
                </p>

                <div class="border border-emerald-200 bg-emerald-50 p-6 rounded-lg">

                    <div class="text-xs uppercase tracking-wider text-emerald-700 font-semibold mb-2">
                        Your Retirement Number
                    </div>

                    <p class="text-sm text-muted">
                        Annual expenses × 25 = portfolio target.
                        Spending $60,000/year requires roughly <strong class="text-[var(--text-primary)]">$1.5 million</strong>.
                    </p>

                </div>

            </div>


            <div class="flex flex-col gap-6">

                <div class="border-l-4 border-emerald-500 bg-white p-8 shadow-sm">

                    <div class="fonttitle text-5xl font-black text-emerald-600 mb-2">
                        25×
                    </div>

                    <div class="text-xs uppercase tracking-wider text-muted">
                        Annual spending target
                    </div>

                </div>

                <div class="border-l-4 border-amber-500 bg-white p-8 shadow-sm">

                    <div class="fonttitle text-5xl font-black text-amber-500 mb-2">
                        4%
                    </div>

                    <div class="text-xs uppercase tracking-wider text-muted">
                        Safe withdrawal rate
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>



<section class="bg-white border-b border-[var(--border)] py-20">

    <div class="max-w-7xl mx-auto px-6 lg:px-12">

        <div class="flex items-center gap-3 mb-4 text-[10px] font-bold tracking-[0.26em] uppercase text-emerald-600">
            <span class="w-6 h-px bg-emerald-600"></span>
            The Power of Time
        </div>

        <h2 class="fonttitle text-3xl lg:text-4xl font-bold mb-8">
            Why Starting Early Changes Everything
        </h2>

        <div class="grid lg:grid-cols-2 gap-12 items-start">

            <div>

                <p class="text-muted leading-relaxed mb-6">
                    Saving early dramatically increases retirement wealth through compound returns.
                </p>

                <ul class="space-y-3 text-sm text-muted">

                    <li class="flex gap-3">
                        <span class="text-emerald-600 font-bold">→</span>
                        <span>Max your <strong>employer retirement match</strong></span>
                    </li>

                    <li class="flex gap-3">
                        <span class="text-emerald-600 font-bold">→</span>
                        <span><strong>401(k) limit 2026</strong>: $23,000</span>
                    </li>

                    <li class="flex gap-3">
                        <span class="text-emerald-600 font-bold">→</span>
                        <span><strong>Roth IRA limit 2026</strong>: $7,000</span>
                    </li>

                    <li class="flex gap-3">
                        <span class="text-emerald-600 font-bold">→</span>
                        <span><strong>HSA limit 2026</strong>: $4,150</span>
                    </li>

                    <li class="flex gap-3">
                        <span class="text-emerald-600 font-bold">→</span>
                        <span>Target saving <strong>10–15% of income</strong></span>
                    </li>

                </ul>

            </div>


            <div class="flex flex-col gap-6">

                <div class="border-l-4 border-amber-500 bg-white p-8 shadow-sm">

                    <div class="fonttitle text-5xl font-black text-amber-500 mb-2">
                        $1.3M
                    </div>

                    <div class="text-xs uppercase tracking-wider text-muted">
                        Saving $500/mo starting age 25
                    </div>

                </div>

                <div class="border-l-4 border-red-500 bg-white p-8 shadow-sm">

                    <div class="fonttitle text-5xl font-black text-red-500 mb-2">
                        $612K
                    </div>

                    <div class="text-xs uppercase tracking-wider text-muted">
                        Starting age 35
                    </div>

                </div>

            </div>

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
                    Overconfidence Bias
                </div>

                <p class="text-sm text-muted mb-4">
                    Investors often overestimate their knowledge and ability to predict the market.
                </p>

                <span class="text-xs uppercase tracking-wider text-emerald-600 font-semibold">
                    Read More →
                </span>

            </a>


            <a href="{{ route('finance.planning.tax') }}" class="block bg-surface border border-[var(--border)] p-6 hover:shadow-md transition">

                <div class="text-xs uppercase tracking-wider text-emerald-600 font-semibold mb-2">
                    Tax Strategy
                </div>

                <div class="fonttitle text-lg font-bold mb-2">
                    Tax-Advantaged Accounts Explained
                </div>

                <p class="text-sm text-muted mb-4">
                    The correct order for maximizing after-tax wealth.
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
                    FIRE: Financial Independence by 45
                </div>

                <p class="text-sm text-muted mb-4">
                    The mathematics behind early retirement.
                </p>

                <span class="text-xs uppercase tracking-wider text-emerald-600 font-semibold">
                    Read More →
                </span>

            </a>

        </div>

    </div>

</section>

@endsection