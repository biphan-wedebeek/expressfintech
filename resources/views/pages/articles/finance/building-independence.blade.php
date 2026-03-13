 @extends('layouts.personal-finance')

 @section('title', 'Financial Independence — The FIRE Framework')
 @section('breadcrumb', 'Independence')
 @section('eyebrow', 'Building Wealth · FIRE')
 @section('page_title', 'Financial Independence')
 @section('page_lead', 'Financial independence means your investment income permanently covers your living expenses. You choose whether to work — you are never forced to.')

 @section('content')

 <section class="bg-emerald-50 border-b border-emerald-100 py-20">
     <div class="max-w-7xl mx-auto px-6 lg:px-12">

         <div class="grid lg:grid-cols-2 gap-14 items-start">

             <div>

                 <div class="flex items-center gap-3 mb-4 uppercase tracking-[0.25em] text-emerald-600 text-xs font-semibold">
                     <span class="w-6 h-px bg-emerald-500"></span>
                     The FIRE Framework
                 </div>

                 <h2 class="fonttitle text-emerald-900 text-3xl md:text-4xl mb-8">
                     Financial Independence, Retire Early
                 </h2>

                 <p class="text-emerald-900/70 leading-relaxed mb-5">
                     FIRE is built on one equation: accumulate 25× your annual expenses. At that portfolio size, the 4% withdrawal rule provides income indefinitely — funded entirely by investment returns while principal stays intact.
                 </p>

                 <p class="text-emerald-900/70 leading-relaxed mb-5">
                     The lever that matters most is not income — it is
                     <strong class="text-emerald-900">savings rate</strong>.
                     Someone saving 50% of income reaches financial independence in roughly 17 years regardless of what they earn. At 70% savings rate: 8.5 years.
                 </p>

                 <div class="border border-emerald-200 bg-emerald-100/40 p-6 rounded">

                     <div class="uppercase tracking-[0.2em] text-xs text-emerald-600 font-semibold mb-2">
                         FIRE Number
                     </div>

                     <p class="text-emerald-900/70 text-sm leading-relaxed">
                         Annual expenses × 25 = target portfolio. Spending $50,000/year? Your FIRE number is
                         <strong class="text-emerald-900">$1.25 million</strong>.
                         Reducing spending to $40,000 cuts your target to $1M — a $250K reduction in required savings.
                     </p>

                 </div>

             </div>


             <div>

                 <div class="border-l-4 border-emerald-500 bg-white shadow-sm p-7 mb-4">

                     <div class="fonttitle text-5xl text-emerald-600 mb-2">
                         25×
                     </div>

                     <div class="text-xs uppercase tracking-wide text-emerald-900/60">
                         Annual spending = FIRE portfolio target
                     </div>

                 </div>

                 <div class="border-l-4 border-yellow-400 bg-white shadow-sm p-7 mb-4">

                     <div class="fonttitle text-5xl text-yellow-500 mb-2">
                         4%
                     </div>

                     <div class="text-xs uppercase tracking-wide text-emerald-900/60">
                         Safe annual withdrawal rate based on historical market data
                     </div>

                 </div>

                 <ul class="space-y-3 text-emerald-900/70 text-sm">

                     <li class="flex gap-3">
                         <span class="text-emerald-600 font-semibold">→</span>
                         <span>Lean FIRE: extreme frugality, sub-$40K annual spending</span>
                     </li>

                     <li class="flex gap-3">
                         <span class="text-emerald-600 font-semibold">→</span>
                         <span><strong class="text-emerald-900">Classic FIRE</strong>: $50–80K/year, ~25× portfolio</span>
                     </li>

                     <li class="flex gap-3">
                         <span class="text-emerald-600 font-semibold">→</span>
                         <span>Fat FIRE: $100K+ annual spending, larger portfolio</span>
                     </li>

                     <li class="flex gap-3">
                         <span class="text-emerald-600 font-semibold">→</span>
                         <span>Barista FIRE: semi-retire with part-time income supplement</span>
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
                 <div class="font-semibold text-emerald-900 mb-2">Calculate Your FIRE Number</div>
                 <p class="text-sm text-emerald-900/70">
                     Annual expenses × 25 = target. Track your number monthly as investments grow toward it.
                 </p>
             </div>

             <div class="bg-emerald-50 hover:bg-emerald-100 transition p-7 rounded">
                 <div class="text-4xl font-bold text-emerald-200 mb-4">02</div>
                 <div class="font-semibold text-emerald-900 mb-2">Maximise Savings Rate</div>
                 <p class="text-sm text-emerald-900/70">
                     Every 1% increase in savings rate shortens your path to FI. The savings rate, not income, determines the timeline.
                 </p>
             </div>

             <div class="bg-emerald-50 hover:bg-emerald-100 transition p-7 rounded">
                 <div class="text-4xl font-bold text-emerald-200 mb-4">03</div>
                 <div class="font-semibold text-emerald-900 mb-2">Invest in Low-Cost Index Funds</div>
                 <p class="text-sm text-emerald-900/70">
                     VTSAX, VTI, or equivalent. Broad market exposure, minimal fees. The engine of every FIRE portfolio.
                 </p>
             </div>

             <div class="bg-emerald-50 hover:bg-emerald-100 transition p-7 rounded">
                 <div class="text-4xl font-bold text-emerald-200 mb-4">04</div>
                 <div class="font-semibold text-emerald-900 mb-2">Optimise Tax Strategy</div>
                 <p class="text-sm text-emerald-900/70">
                     Tax-advantaged accounts, Roth conversions, and capital gains harvesting can add years to your runway.
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

             <a href="{{route('finance.planning.retirement')}}" class="block bg-white p-7 hover:bg-emerald-50 transition rounded shadow-sm">

                 <div class="text-xs uppercase tracking-widest text-emerald-600 mb-2">
                     Retirement
                 </div>

                 <div class="fonttitle text-lg text-emerald-900 mb-2">
                     Retirement Planning
                 </div>

                 <p class="text-sm text-emerald-900/70 mb-4">
                     FIRE is an accelerated version of traditional retirement planning.
                 </p>

                 <div class="text-xs uppercase tracking-wider text-emerald-600">
                     Read More →
                 </div>

             </a>


             <a href="{{route('finance.behavior.decision_bias')}}" class="block bg-white p-7 hover:bg-emerald-50 transition rounded shadow-sm">

                 <div class="text-xs uppercase tracking-widest text-emerald-600 mb-2">
                     Financial Decision Bias
                 </div>

                 <div class="fonttitle text-lg text-emerald-900 mb-2">
                     Overconfidence Bias
                 </div>

                 <p class="text-sm text-emerald-900/70 mb-4">
                     Investors often overestimate their knowledge and ability to predict financial outcomes.
                 </p>

                 <div class="text-xs uppercase tracking-wider text-emerald-600">
                     Read More →
                 </div>

             </a>


             <a href="{{route('finance.building.passive_income')}}" class="block bg-white p-7 hover:bg-emerald-50 transition rounded shadow-sm">

                 <div class="text-xs uppercase tracking-widest text-emerald-600 mb-2">
                     Passive Income
                 </div>

                 <div class="fonttitle text-lg text-emerald-900 mb-2">
                     Build Passive Income Streams
                 </div>

                 <p class="text-sm text-emerald-900/70 mb-4">
                     Multiple income streams accelerate the FIRE journey.
                 </p>

                 <div class="text-xs uppercase tracking-wider text-emerald-600">
                     Read More →
                 </div>

             </a>

         </div>

     </div>
 </section>

 @endsection