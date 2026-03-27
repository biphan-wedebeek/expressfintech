 @extends('layouts.personal-finance')

 @section('title', 'Diversification — Don\'t Put All Eggs in One Basket')
 @section('breadcrumb', 'Diversification')
 @section('eyebrow', 'Building Wealth · Risk Management')
 @section('page_title', 'Diversification Strategy')
 @section('page_lead', 'Diversification is the only free lunch in investing. By spreading risk across asset classes, geographies, and sectors, you reduce volatility without necessarily reducing long-term returns.')

 @section('content')

 <section class="bg-surface border-b border-[var(--border)] py-20">
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

                 <p class="text-muted leading-relaxed mb-5">
                     Concentration risk is the most common cause of wealth destruction in personal portfolios. When one stock, one sector, or one asset class represents more than 10% of your net worth, a single bad outcome can be catastrophic.
                 </p>

                 <p class="text-muted leading-relaxed mb-5">
                     A properly diversified portfolio holds
                     <strong class="text-emerald-900">domestic equities, international equities, bonds, and alternative assets</strong>.
                     Each behaves differently in different economic environments — smoothing the overall ride.
                 </p>

                 <div class="border border-emerald-200 bg-emerald-100/40 p-6 rounded">

                     <div class="uppercase tracking-[0.2em] text-xs text-emerald-600 font-semibold mb-2">
                         Correlation Principle
                     </div>

                     <p class="text-muted text-sm leading-relaxed">
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

                 <ul class="space-y-3 text-muted text-sm">
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

 <section class="bg-white border-b border-[var(--border)] py-20">
     <div class="max-w-7xl mx-auto px-6 lg:px-12">
         <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
             @foreach([
             ['01','Start with a 3-Fund Portfolio','US total market + international total market + US bond index. Simple, ultra-diversified, nearly zero fees.'],
             ['02','Add International Exposure','US markets represent ~60% of global market cap. International exposure captures the other 40% of global growth.'],
             ['03','Include Fixed Income','Bonds reduce portfolio volatility. As retirement approaches, shift from 80/20 stocks-bonds toward more conservative allocations.'],
             ['04','Rebalance Annually','Drift from target allocations creates unintended concentration. A once-yearly rebalance restores balance efficiently. '],
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
             ['finance.behavior.decision_bias','Financial Decision Bias','Anchoring Bias','People rely too heavily on the first piece of financial information they receive.'],
             ['finance.planning.retirement','Retirement','Asset Allocation by Age','How diversification ratios shift over a lifetime.'],
             ['finance.building.long_term','Long-Term','Long-Term Wealth Building','Diversification is the foundation of sustainable compounding.'],
             ] as [$route,$cat,$title,$body])
             <a href="{{ route($route) }}" class="block border border-[var(--border)] bg-surface p-6 hover:shadow-md transition">
                 <div class="text-xs uppercase tracking-wider text-emerald-600 font-semibold mb-2"> {{ $cat }} </div>
                 <div class="fonttitle text-lg font-bold mb-2"> {{ $title }} </div>
                 <p class="text-sm text-muted mb-4"> {{ $body }} </p>
                 <span class="text-xs uppercase tracking-wider text-emerald-600 font-semibold">
                     Read More →
                 </span>
             </a>
             @endforeach
         </div>
     </div>
 </section>

 @endsection