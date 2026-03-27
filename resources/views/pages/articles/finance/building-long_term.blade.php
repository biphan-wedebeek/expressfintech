@extends('layouts.personal-finance')

@section('title', 'Long-Term Wealth — Compounding Over Decades')
@section('breadcrumb', 'Long-Term')
@section('eyebrow', 'Building Wealth · Compounding')
@section('page_title', 'Long-Term Wealth Building')
@section('page_lead', 'Wealth is not built in a year — it is built in decades. The most important variable is not rate of return or stock selection. It is time in the market.')

@section('content')

<section class="bg-surface border-b border-[var(--border)] py-20">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="grid lg:grid-cols-2 gap-14 items-start">
            <div>
                <div class="flex items-center gap-3 mb-4 uppercase tracking-[0.25em] text-emerald-600 text-xs font-semibold">
                    <span class="w-6 h-px bg-emerald-500"></span>
                    Compound Growth
                </div>

                <h2 class="fonttitle text-emerald-900 text-3xl md:text-4xl mb-8">
                    The Most Powerful Force in Finance
                </h2>

                <p class="text-muted leading-relaxed mb-5">
                    Einstein reportedly called compound interest the eighth wonder of the world. Whether or not he said it, the maths is undeniable. A single $10,000 investment earning 8% annually becomes
                    <strong class="text-emerald-900">$100,627</strong>
                    in 30 years — without adding another dollar.
                </p>

                <p class="text-muted leading-relaxed mb-5">
                    The formula:
                    <span class="text-emerald-600 italic">A = P(1 + r/n)^nt</span>.
                    But the practical insight is simpler: start early, contribute consistently, never interrupt compounding with panic selling.
                </p>

                <div class="border border-emerald-200 bg-emerald-100/40 p-6 rounded">

                    <div class="uppercase tracking-[0.2em] text-xs text-emerald-600 font-semibold mb-2">
                        Rule of 72
                    </div>

                    <p class="text-muted text-sm leading-relaxed">
                        Divide 72 by your expected annual return to find how many years it takes to double your money.
                        At 8%: 72 ÷ 8 =
                        <strong class="text-emerald-900">9 years</strong>
                        to double. At 6%: 12 years.
                    </p>
                </div>
            </div>

            <div>
                <div class="border-l-4 border-emerald-500 bg-white shadow-sm p-7 mb-6">
                    <div class="fonttitle text-5xl text-emerald-600 mb-2">
                        $100K
                    </div>

                    <div class="text-xs uppercase tracking-wide text-emerald-900/60">
                        $10,000 invested at 8% over 30 years — 10× growth
                    </div>
                </div>

                <ul class="space-y-3 text-muted text-sm">
                    <li class="flex gap-3">
                        <span class="text-emerald-600 font-semibold">→</span>
                        <span>Start investing the moment you have an emergency fund</span>
                    </li>

                    <li class="flex gap-3">
                        <span class="text-emerald-600 font-semibold">→</span>
                        <span>Never sell during market downturns — time heals volatility</span>
                    </li>

                    <li class="flex gap-3">
                        <span class="text-emerald-600 font-semibold">→</span>
                        <span>Reinvest dividends automatically to maximise compounding</span>
                    </li>

                    <li class="flex gap-3">
                        <span class="text-emerald-600 font-semibold">→</span>
                        <span>Keep fees below 0.2% annually — they compound too (against you)</span>
                    </li>

                    <li class="flex gap-3">
                        <span class="text-emerald-600 font-semibold">→</span>
                        <span>Add consistently — monthly contributions compound alongside principal</span>
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
            ['10Y','After 10 Years — $21,589','A $10,000 investment at 8% has more than doubled. The compounding curve has begun to accelerate.'],
            ['20Y','After 20 Years — $46,610','The same investment is now worth 4.6× the original. Each dollar now earns far more than it did in year one.'],
            ['30Y','After 30 Years — $100,627','10× the original investment. This is the exponential phase — the final decade accounts for more growth than the first two combined.'],
            ['40Y','After 40 Years — $217,245','Starting a decade earlier nearly doubles the outcome. Time is the only variable that cannot be purchased. '],
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
            ['finance.behavior.decision_bias','Financial Decision Bias','Loss Aversion ','People tend to fear losses more than they value gains in financial decisions.'],
            ['finance.planning.retirement','Retirement','Retirement Planning','Long-term wealth building and retirement planning are the same journey.'],
            ['finance.building.independence','Independence','Financial Independence','FIRE is long-term wealth building on an accelerated timeline.'],
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