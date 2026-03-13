@extends('layouts.personal-finance')

@section('title', 'Long-Term Wealth — Compounding Over Decades')
@section('breadcrumb', 'Long-Term')
@section('eyebrow', 'Building Wealth · Compounding')
@section('page_title', 'Long-Term Wealth Building')
@section('page_lead', 'Wealth is not built in a year — it is built in decades. The most important variable is not rate of return or stock selection. It is time in the market.')

@section('content')

<section class="bg-emerald-50 border-b border-emerald-100 py-20">
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

                <p class="text-emerald-900/70 leading-relaxed mb-5">
                    Einstein reportedly called compound interest the eighth wonder of the world. Whether or not he said it, the maths is undeniable. A single $10,000 investment earning 8% annually becomes
                    <strong class="text-emerald-900">$100,627</strong>
                    in 30 years — without adding another dollar.
                </p>

                <p class="text-emerald-900/70 leading-relaxed mb-5">
                    The formula:
                    <span class="text-emerald-600 italic">A = P(1 + r/n)^nt</span>.
                    But the practical insight is simpler: start early, contribute consistently, never interrupt compounding with panic selling.
                </p>

                <div class="border border-emerald-200 bg-emerald-100/40 p-6 rounded">

                    <div class="uppercase tracking-[0.2em] text-xs text-emerald-600 font-semibold mb-2">
                        Rule of 72
                    </div>

                    <p class="text-emerald-900/70 text-sm leading-relaxed">
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

                <ul class="space-y-3 text-emerald-900/70 text-sm">

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



<section class="bg-white border-b border-emerald-100 py-20">

    <div class="max-w-7xl mx-auto px-6 lg:px-12">

        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">

            <div class="bg-emerald-50 hover:bg-emerald-100 transition p-7 rounded">

                <div class="text-4xl font-bold text-emerald-200 mb-4">
                    10Y
                </div>

                <div class="font-semibold text-emerald-900 mb-2">
                    After 10 Years — $21,589
                </div>

                <p class="text-sm text-emerald-900/70">
                    A $10,000 investment at 8% has more than doubled. The compounding curve has begun to accelerate.
                </p>

            </div>


            <div class="bg-emerald-50 hover:bg-emerald-100 transition p-7 rounded">

                <div class="text-4xl font-bold text-emerald-200 mb-4">
                    20Y
                </div>

                <div class="font-semibold text-emerald-900 mb-2">
                    After 20 Years — $46,610
                </div>

                <p class="text-sm text-emerald-900/70">
                    The same investment is now worth 4.6× the original. Each dollar now earns far more than it did in year one.
                </p>

            </div>


            <div class="bg-emerald-50 hover:bg-emerald-100 transition p-7 rounded">

                <div class="text-4xl font-bold text-emerald-200 mb-4">
                    30Y
                </div>

                <div class="font-semibold text-emerald-900 mb-2">
                    After 30 Years — $100,627
                </div>

                <p class="text-sm text-emerald-900/70">
                    10× the original investment. This is the exponential phase — the final decade accounts for more growth than the first two combined.
                </p>

            </div>


            <div class="bg-emerald-50 hover:bg-emerald-100 transition p-7 rounded">

                <div class="text-4xl font-bold text-emerald-200 mb-4">
                    40Y
                </div>

                <div class="font-semibold text-emerald-900 mb-2">
                    After 40 Years — $217,245
                </div>

                <p class="text-sm text-emerald-900/70">
                    Starting a decade earlier nearly doubles the outcome. Time is the only variable that cannot be purchased.
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


            <a href="{{route('finance.behavior.decision_bias')}}" class="block bg-white p-7 hover:bg-emerald-50 transition rounded shadow-sm">

                <div class="text-xs uppercase tracking-widest text-emerald-600 mb-2">
                    Financial Decision Bias
                </div>

                <div class="fonttitle text-lg text-emerald-900 mb-2">
                    Loss Aversion
                </div>

                <p class="text-sm text-emerald-900/70 mb-4">
                    People tend to fear losses more than they value gains in financial decisions.
                </p>

                <div class="text-xs uppercase tracking-wider text-emerald-600">
                    Read More →
                </div>

            </a>


            <a href="{{route('finance.planning.retirement')}}" class="block bg-white p-7 hover:bg-emerald-50 transition rounded shadow-sm">

                <div class="text-xs uppercase tracking-widest text-emerald-600 mb-2">
                    Retirement
                </div>

                <div class="fonttitle text-lg text-emerald-900 mb-2">
                    Retirement Planning
                </div>

                <p class="text-sm text-emerald-900/70 mb-4">
                    Long-term wealth building and retirement planning are the same journey.
                </p>

                <div class="text-xs uppercase tracking-wider text-emerald-600">
                    Read More →
                </div>

            </a>


            <a href="{{route('finance.building.independence')}}" class="block bg-white p-7 hover:bg-emerald-50 transition rounded shadow-sm">

                <div class="text-xs uppercase tracking-widest text-emerald-600 mb-2">
                    Independence
                </div>

                <div class="fonttitle text-lg text-emerald-900 mb-2">
                    Financial Independence
                </div>

                <p class="text-sm text-emerald-900/70 mb-4">
                    FIRE is long-term wealth building on an accelerated timeline.
                </p>

                <div class="text-xs uppercase tracking-wider text-emerald-600">
                    Read More →
                </div>

            </a>

        </div>

    </div>
</section>

@endsection