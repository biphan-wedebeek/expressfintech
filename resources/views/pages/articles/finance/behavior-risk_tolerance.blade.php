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
                <div class="flex items-center gap-3 mb-4 text-[10px] font-bold tracking-[0.26em] uppercase text-emerald-600">
                    <span class="w-6 h-px bg-emerald-600"></span>
                    Know Your Profile
                </div>

                <h2 class="fonttitle text-3xl lg:text-4xl font-bold leading-tight mb-6">
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

                <div class="border border-emerald-200 bg-emerald-50 p-6 rounded-lg">
                    <div class="text-[10px] uppercase tracking-[0.2em] text-emerald-700 font-semibold mb-2">
                        The Real Test
                    </div>

                    <p class="text-[13px] text-muted leading-relaxed">
                        Your true risk tolerance is revealed not by questionnaire but by your reaction to a real 20–30% drawdown.
                        If you cannot sleep, your allocation is too aggressive — regardless of what your target date fund recommends.
                    </p>
                </div>
            </div>

            <div>
                <div class="border-l-4 border-yellow-500 bg-white p-8 shadow-sm">
                    <div class="fonttitle text-6xl font-black text-yellow-500 mb-2">
                        30%
                    </div>
                    <div class="text-xs uppercase tracking-[0.1em] text-muted">
                        Peak-to-trough drop in S&P 500 during 2020 COVID crash — recovered in 6 months
                    </div>
                </div>

                <ul class="space-y-3">
                    <li class="flex gap-3 text-[14px] text-muted leading-relaxed">
                        <span class="text-emerald-600 font-semibold">→</span>
                        <span><strong class="text-navy">Aggressive</strong>: 80–100% equity, tolerates 30–50% drawdowns</span>
                    </li>

                    <li class="flex gap-3 text-[14px] text-muted leading-relaxed">
                        <span class="text-emerald-600 font-semibold">→</span>
                        <span><strong class="text-navy">Moderate</strong>: 60/40 stocks-bonds, tolerates 20–30% drawdowns</span>
                    </li>

                    <li class="flex gap-3 text-[14px] text-muted leading-relaxed">
                        <span class="text-emerald-600 font-semibold">→</span>
                        <span><strong class="text-navy">Conservative</strong>: 40/60 or less equity, prioritises capital preservation</span>
                    </li>

                    <li class="flex gap-3 text-[14px] text-muted leading-relaxed">
                        <span class="text-emerald-600 font-semibold">→</span>
                        <span>Match allocation to the profile that lets you sleep during crashes</span>
                    </li>

                    <li class="flex gap-3 text-[14px] text-muted leading-relaxed">
                        <span class="text-emerald-600 font-semibold">→</span>
                        <span>Never override your true tolerance — the cost of panic-selling is permanent</span>
                    </li>
                </ul>

                @if($banners_right->isNotEmpty())
                <div class="w-full space-y-3 my-8">
                    @foreach($banners_right as $banner)
                    <div id="banner-{{ $banner->id }}" class="scroll-mt-20">
                        <a href="{{ request()->url() }}#banner-{{ $banner->id }}" rel="noopener noreferrer sponsored" title="{{ $banner->title }}"
                            onclick="event.preventDefault(); window.open('{{ $banner->tracking_url }}', '_blank');">
                            <div class="overflow-hidden rounded-sm border border-[var(--border)] hover:shadow-md transition-shadow duration-200 cursor-pointer">
                                <img src="{{ asset('storage/' . (is_array($banner->image_url) ? $banner->image_url[0] : $banner->image_url)) }}"
                                    alt="{{ $banner->title ?? 'Advertisement' }}" class="w-full object-cover block" loading="lazy">
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
                @endif

            </div>
        </div>
    </div>
</section>

<section class="bg-white border-b border-[var(--border)] py-20">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach([
            ['01','Assess Your Capacity First','Calculate: if your portfolio fell 30%, would you miss any financial goals? If yes, your capacity limits your allocation.'],
            ['02','Stress-Test Your Psychology','Imagine a 40% drop. Would you add more, hold, or sell? Honest self-assessment sets your true tolerance ceiling.'],
            ['03','Choose the Right Allocation','Conservative, moderate, or aggressive — pick the allocation you will hold through the worst markets, not the best ones.'],
            ['04','Review at Life Events ','Risk capacity changes with age, income, dependents, and debt. Reassess allocation after any major life change. '],
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
            ['finance.planning.tax','Investing','Investment Strategy','Translate your risk profile into a concrete portfolio.'],
            ['finance.building.diversification','Diversification','Diversification','Diversification reduces risk without proportionally reducing returns.'],
            ['finance.behavior.decision_bias','Bias','Cognitive Biases','How biases skew perceived vs actual risk tolerance.'],
            ] as [$route,$cat,$title,$body])

            <a href="{{ route($route) }}" class="block border border-[var(--border)] bg-surface p-6 hover:shadow-md transition">
                <div class="text-xs uppercase tracking-wider text-emerald-600 font-semibold mb-2"> {{ $cat }} </div>
                <div class="fonttitle text-lg font-bold mb-2"> {{ $title }} </div>
                <p class="text-sm text-muted mb-4"> {{ $body }} </p>
                <span class="text-xs uppercase tracking-wider text-emerald-600 font-semibold"> Read More → </span>
            </a>
            @endforeach
        </div>
    </div>
</section>
@endsection