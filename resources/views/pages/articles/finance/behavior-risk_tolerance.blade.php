@extends('layouts.personal-finance')

@section('title', 'Risk Tolerance — Know Your True Risk Profile')
@section('breadcrumb', 'Risk')
@section('eyebrow', 'Behavior · Risk Management')
@section('page_title', 'Risk Tolerance')
@section('page_lead', 'Risk tolerance is not how you feel about markets when they are rising — it is how you behave when they fall 30%. Knowing your true tolerance prevents catastrophic decisions at the worst moments.')

@section('content')

<section class="bg-surface border-b border-[var(--border)] py-20">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-14 items-start">
            <div>
                <div class="flex items-center gap-3 mb-4 text-[10px] font-bold tracking-[0.26em] uppercase text-indigo">
                    <span class="w-[22px] h-[1px] bg-indigo block"></span>
                    Know Your Profile
                </div>

                <h2 class="fonttitle text-4xl lg:text-5xl text-navy mb-8 leading-tight">
                    Risk Tolerance vs Risk Capacity
                </h2>

                <p class="text-[15px] text-muted leading-relaxed mb-5">
                    <strong class="text-navy">Risk tolerance</strong> is psychological — how much volatility you can stomach emotionally.
                    <strong class="text-navy">Risk capacity</strong> is mathematical — how much loss your financial situation can absorb without derailing goals.
                    Both matter, but capacity sets the ceiling.
                </p>

                <p class="text-[15px] text-muted leading-relaxed mb-6">
                    The most common mistake: overestimating tolerance during bull markets, then panic-selling during crashes.
                    A 30% portfolio drop on $500,000 is $150,000 gone on paper — experiencing that loss viscerally is different from knowing it intellectually.
                </p>

                <div class="border border-indigo/20 bg-indigo-light p-6 rounded-md">
                    <div class="text-[10px] font-bold tracking-[0.22em] uppercase text-indigo mb-2">
                        The Real Test
                    </div>

                    <p class="text-[13px] text-muted leading-relaxed">
                        Your true risk tolerance is revealed not by questionnaire but by your reaction to a real 20–30% drawdown.
                        If you cannot sleep, your allocation is too aggressive — regardless of what your target date fund recommends.
                    </p>
                </div>
            </div>

            <div>
                <div class="border-l-4 border-indigo bg-white shadow-sm p-7 mb-4">
                    <div class="fonttitle text-5xl font-black text-indigo mb-2">
                        30%
                    </div>
                    <div class="text-xs text-muted uppercase tracking-wider">
                        Peak-to-trough drop in S&P 500 during 2020 COVID crash — recovered in 6 months
                    </div>
                </div>

                <ul class="space-y-3">
                    <li class="flex gap-3 text-[14px] text-muted leading-relaxed">
                        <span class="text-indigo font-semibold">→</span>
                        <span><strong class="text-navy">Aggressive</strong>: 80–100% equity, tolerates 30–50% drawdowns</span>
                    </li>

                    <li class="flex gap-3 text-[14px] text-muted leading-relaxed">
                        <span class="text-indigo font-semibold">→</span>
                        <span><strong class="text-navy">Moderate</strong>: 60/40 stocks-bonds, tolerates 20–30% drawdowns</span>
                    </li>

                    <li class="flex gap-3 text-[14px] text-muted leading-relaxed">
                        <span class="text-indigo font-semibold">→</span>
                        <span><strong class="text-navy">Conservative</strong>: 40/60 or less equity, prioritises capital preservation</span>
                    </li>

                    <li class="flex gap-3 text-[14px] text-muted leading-relaxed">
                        <span class="text-indigo font-semibold">→</span>
                        <span>Match allocation to the profile that lets you sleep during crashes</span>
                    </li>

                    <li class="flex gap-3 text-[14px] text-muted leading-relaxed">
                        <span class="text-indigo font-semibold">→</span>
                        <span>Never override your true tolerance — the cost of panic-selling is permanent</span>
                    </li>
                </ul>

                <a href="{{ request()->url() }}" class="block mt-6 rounded-md overflow-hidden">
                    <div class="w-full aspect-[23/9] bg-gray-100">
                        <img
                            src="{{ asset('images/pages/banner1.png') }}"
                            alt="Banner"
                            class="w-full h-full object-cover">
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="bg-white border-b border-[var(--border)] py-20">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-surface p-8 border border-[var(--border)] hover:border-indigo transition">
                <div class="text-5xl font-extrabold text-indigo/20 mb-4">
                    01
                </div>

                <div class="font-semibold text-navy mb-2">
                    Assess Your Capacity First
                </div>

                <p class="text-sm text-muted leading-relaxed">
                    Calculate: if your portfolio fell 30%, would you miss any financial goals? If yes, your capacity limits your allocation.
                </p>
            </div>

            <div class="bg-surface p-8 border border-[var(--border)] hover:border-indigo transition">
                <div class="text-5xl font-extrabold text-indigo/20 mb-4">
                    02
                </div>

                <div class="font-semibold text-navy mb-2">
                    Stress-Test Your Psychology
                </div>

                <p class="text-sm text-muted leading-relaxed">
                    Imagine a 40% drop. Would you add more, hold, or sell? Honest self-assessment sets your true tolerance ceiling.
                </p>
            </div>

            <div class="bg-surface p-8 border border-[var(--border)] hover:border-indigo transition">
                <div class="text-5xl font-extrabold text-indigo/20 mb-4">
                    03
                </div>

                <div class="font-semibold text-navy mb-2">
                    Choose the Right Allocation
                </div>

                <p class="text-sm text-muted leading-relaxed">
                    Conservative, moderate, or aggressive — pick the allocation you will hold through the worst markets, not the best ones.
                </p>
            </div>

            <div class="bg-surface p-8 border border-[var(--border)] hover:border-indigo transition">
                <div class="text-5xl font-extrabold text-indigo/20 mb-4">
                    04
                </div>

                <div class="font-semibold text-navy mb-2">
                    Review at Life Events
                </div>

                <p class="text-sm text-muted leading-relaxed">
                    Risk capacity changes with age, income, dependents, and debt. Reassess allocation after any major life change.
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

            <a href="{{route('finance.planning.tax')}}" class="bg-white border border-[var(--border)] p-8 hover:shadow-md transition block">

                <div class="text-xs uppercase tracking-widest text-indigo mb-2">
                    Investing
                </div>

                <div class="fonttitle text-lg text-navy mb-2">
                    Investment Strategy
                </div>

                <p class="text-sm text-muted mb-4">
                    Translate your risk profile into a concrete portfolio.
                </p>

                <div class="text-xs uppercase tracking-widest text-indigo">
                    Read More →
                </div>
            </a>

            <a href="{{route('finance.building.diversification')}}" class="bg-white border border-[var(--border)] p-8 hover:shadow-md transition block">
                <div class="text-xs uppercase tracking-widest text-indigo mb-2">
                    Diversification
                </div>

                <div class="fonttitle text-lg text-navy mb-2">
                    Diversification
                </div>

                <p class="text-sm text-muted mb-4">
                    Diversification reduces risk without proportionally reducing returns.
                </p>

                <div class="text-xs uppercase tracking-widest text-indigo">
                    Read More →
                </div>
            </a>

            <a href="{{route('finance.behavior.decision_bias')}}" class="bg-white border border-[var(--border)] p-8 hover:shadow-md transition block">
                <div class="text-xs uppercase tracking-widest text-indigo mb-2">
                    Bias
                </div>

                <div class="fonttitle text-lg text-navy mb-2">
                    Cognitive Biases
                </div>

                <p class="text-sm text-muted mb-4">
                    How biases skew perceived vs actual risk tolerance.
                </p>

                <div class="text-xs uppercase tracking-widest text-indigo">
                    Read More →
                </div>
            </a>
        </div>
    </div>
</section>

@endsection