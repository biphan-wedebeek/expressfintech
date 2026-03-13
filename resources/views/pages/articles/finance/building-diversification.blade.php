 @extends('layouts.personal-finance')

 @section('title', 'Diversification — Don\'t Put All Eggs in One Basket')
 @section('breadcrumb', 'Diversification')
 @section('eyebrow', 'Building Wealth · Risk Management')
 @section('page_title', 'Diversification Strategy')
 @section('page_lead', 'Diversification is the only free lunch in investing. By spreading risk across asset classes, geographies, and sectors, you reduce volatility without necessarily reducing long-term returns.')

 @section('content')

 <section class="bg-emerald-50 border-b border-emerald-100 py-20">
     <div class="max-w-7xl mx-auto px-6 lg:px-12">

         <div class="grid lg:grid-cols-2 gap-14 items-start">

             <div>

                 <div class="flex items-center gap-3 mb-4 uppercase tracking-[0.25em] text-emerald-600 text-xs font-semibold">
                     <span class="w-6 h-px bg-emerald-500"></span>
                     Risk Management
                 </div>

                 <h2 class="fonttitle text-emerald-900 text-3xl md:text-4xl mb-8">
                     Why Diversification Protects Wealth
                 </h2>

                 <p class="text-emerald-900/70 leading-relaxed mb-5">
                     Concentration risk is the most common cause of wealth destruction in personal portfolios. When one stock, one sector, or one asset class represents more than 10% of your net worth, a single bad outcome can be catastrophic.
                 </p>

                 <p class="text-emerald-900/70 leading-relaxed mb-5">
                     A properly diversified portfolio holds
                     <strong class="text-emerald-900">domestic equities, international equities, bonds, and alternative assets</strong>.
                     Each behaves differently in different economic environments — smoothing the overall ride.
                 </p>

                 <div class="border border-emerald-200 bg-emerald-100/40 p-6 rounded">

                     <div class="uppercase tracking-[0.2em] text-xs text-emerald-600 font-semibold mb-2">
                         Correlation Principle
                     </div>

                     <p class="text-emerald-900/70 text-sm leading-relaxed">
                         When stocks fall, bonds often rise. When US markets struggle, international markets may outperform.
                         Low-correlation assets in a portfolio reduce total volatility without proportionally reducing expected returns.
                     </p>

                 </div>

             </div>


             <div>

                 <div class="border-l-4 border-emerald-500 bg-white shadow-sm p-7 mb-6">

                     <div class="fonttitle text-5xl text-emerald-600 mb-2">
                         0.01%
                     </div>

                     <div class="text-xs uppercase tracking-wide text-emerald-900/60">
                         Average expense ratio of broad index ETFs — diversification at near-zero cost
                     </div>

                 </div>

                 <ul class="space-y-3 text-emerald-900/70 text-sm">

                     <li class="flex gap-3">
                         <span class="text-emerald-600 font-semibold">→</span>
                         <span><strong class="text-emerald-900">Domestic equity</strong> — US total market (VTI, FSKAX)</span>
                     </li>

                     <li class="flex gap-3">
                         <span class="text-emerald-600 font-semibold">→</span>
                         <span><strong class="text-emerald-900">International equity</strong> — developed and emerging markets</span>
                     </li>

                     <li class="flex gap-3">
                         <span class="text-emerald-600 font-semibold">→</span>
                         <span><strong class="text-emerald-900">Bonds</strong> — stability and income, especially near retirement</span>
                     </li>

                     <li class="flex gap-3">
                         <span class="text-emerald-600 font-semibold">→</span>
                         <span><strong class="text-emerald-900">REITs</strong> — real estate exposure without direct ownership</span>
                     </li>

                     <li class="flex gap-3">
                         <span class="text-emerald-600 font-semibold">→</span>
                         <span><strong class="text-emerald-900">Rebalance annually</strong> — restore target allocations after drift</span>
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
                 <div class="font-semibold text-emerald-900 mb-2">Start with a 3-Fund Portfolio</div>
                 <p class="text-sm text-emerald-900/70">
                     US total market + international total market + US bond index. Simple, ultra-diversified, nearly zero fees.
                 </p>
             </div>

             <div class="bg-emerald-50 hover:bg-emerald-100 transition p-7 rounded">
                 <div class="text-4xl font-bold text-emerald-200 mb-4">02</div>
                 <div class="font-semibold text-emerald-900 mb-2">Add International Exposure</div>
                 <p class="text-sm text-emerald-900/70">
                     US markets represent ~60% of global market cap. International exposure captures the other 40% of global growth.
                 </p>
             </div>

             <div class="bg-emerald-50 hover:bg-emerald-100 transition p-7 rounded">
                 <div class="text-4xl font-bold text-emerald-200 mb-4">03</div>
                 <div class="font-semibold text-emerald-900 mb-2">Include Fixed Income</div>
                 <p class="text-sm text-emerald-900/70">
                     Bonds reduce portfolio volatility. As retirement approaches, shift from 80/20 stocks-bonds toward more conservative allocations.
                 </p>
             </div>

             <div class="bg-emerald-50 hover:bg-emerald-100 transition p-7 rounded">
                 <div class="text-4xl font-bold text-emerald-200 mb-4">04</div>
                 <div class="font-semibold text-emerald-900 mb-2">Rebalance Annually</div>
                 <p class="text-sm text-emerald-900/70">
                     Drift from target allocations creates unintended concentration. A once-yearly rebalance restores balance efficiently.
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
                 <div class="text-xs uppercase tracking-widest text-emerald-600 mb-2">Financial Decision Bias</div>

                 <div class="fonttitle text-lg text-emerald-900 mb-2">Anchoring Bias</div>

                 <p class="text-sm text-emerald-900/70 mb-4">
                     People rely too heavily on the first piece of financial information they receive.
                 </p>
                 <div class="text-xs uppercase tracking-wider text-emerald-600">Read More →</div>
             </a>

             <a href="{{route('finance.planning.retirement')}}" class="block bg-white p-7 hover:bg-emerald-50 transition rounded shadow-sm">
                 <div class="text-xs uppercase tracking-widest text-emerald-600 mb-2">Retirement</div>
                 <div class="fonttitle text-lg text-emerald-900 mb-2">Asset Allocation by Age</div>
                 <p class="text-sm text-emerald-900/70 mb-4">
                     How diversification ratios shift over a lifetime.
                 </p>
                 <div class="text-xs uppercase tracking-wider text-emerald-600">Read More →</div>
             </a>

             <a href="{{route('finance.building.long_term')}}" class="block bg-white p-7 hover:bg-emerald-50 transition rounded shadow-sm">
                 <div class="text-xs uppercase tracking-widest text-emerald-600 mb-2">Long-Term</div>
                 <div class="fonttitle text-lg text-emerald-900 mb-2">Long-Term Wealth Building</div>
                 <p class="text-sm text-emerald-900/70 mb-4">
                     Diversification is the foundation of sustainable compounding.
                 </p>
                 <div class="text-xs uppercase tracking-wider text-emerald-600">Read More →</div>
             </a>

         </div>

     </div>
 </section>

 @endsection