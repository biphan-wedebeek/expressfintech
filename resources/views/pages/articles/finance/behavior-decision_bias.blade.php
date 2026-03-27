 @extends('layouts.personal-finance')

 @section('title', 'Decision Bias — Cognitive Errors That Cost Money')
 @section('breadcrumb', 'Bias')
 @section('eyebrow', 'Behavior · Cognitive Science')
 @section('page_title', 'Decision Bias in Finance')
 @section('page_lead', 'Every investor has biases. The ones who are unaware of them pay the highest price. Recognising your cognitive errors is the most direct path to better financial decisions.')

 @section('content')

 <section class="bg-surface border-b border-[var(--border)] py-20">
     <div class="max-w-7xl mx-auto px-6 lg:px-12">
         <div class="grid grid-cols-1 lg:grid-cols-2 gap-14 items-start">
             <div>
                 <div class="flex items-center gap-3 mb-4 text-[10px] font-bold tracking-[0.26em] uppercase text-emerald-600">
                     <span class="w-6 h-px bg-emerald-600"></span>
                     Cognitive Finance
                 </div>

                 <h2 class="fonttitle text-3xl lg:text-4xl font-bold leading-tight mb-6">
                     The Biases That Cost You Money
                 </h2>

                 <p class="text-[15px] text-muted leading-relaxed mb-5">
                     Cognitive biases are not signs of low intelligence — they are shortcuts the brain evolved for survival, not for financial markets. In finance, these shortcuts systematically destroy wealth.
                 </p>

                 <p class="text-[15px] text-muted leading-relaxed mb-6">
                     <strong class="text-navy">Loss aversion</strong> is the most costly: losses feel 2× more painful than equivalent gains feel good. This causes investors to hold losing positions too long and sell winning ones too early — the exact opposite of optimal strategy.
                 </p>

                 <div class="border border-emerald-200 bg-emerald-50 p-6 rounded-lg">
                     <div class="text-[10px] uppercase tracking-[0.2em] text-emerald-700 font-semibold mb-2">
                         The Cost of Bias
                     </div>

                     <p class="text-[13px] text-muted leading-relaxed">
                         DALBAR studies consistently show that the average retail investor earns 2–3% less per year than the index they invest in — not because of fees, but because of biased buy/sell timing decisions.
                     </p>
                 </div>
             </div>

             <div>
                 <div class="border-l-4 border-red-400 bg-white shadow-sm p-7 mb-4">
                     <div class="fonttitle text-5xl font-black text-red-400 mb-2">
                         2–3%
                     </div>

                     <div class="text-xs text-muted uppercase tracking-wider">
                         Annual return lost by average investor due to biased timing — per DALBAR
                     </div>
                 </div>

                 <ul class="space-y-3">

                     <li class="flex gap-3 text-[14px] text-muted leading-relaxed">
                         <span class="text-emerald-600 font-semibold">→</span>
                         <span><strong class="text-navy">Loss Aversion</strong>: overweighting losses vs equal gains</span>
                     </li>

                     <li class="flex gap-3 text-[14px] text-muted leading-relaxed">
                         <span class="text-emerald-600 font-semibold">→</span>
                         <span><strong class="text-navy">Recency Bias</strong>: assuming recent trends will continue forever</span>
                     </li>

                     <li class="flex gap-3 text-[14px] text-muted leading-relaxed">
                         <span class="text-emerald-600 font-semibold">→</span>
                         <span><strong class="text-navy">Overconfidence</strong>: overestimating your stock-picking ability</span>
                     </li>

                     <li class="flex gap-3 text-[14px] text-muted leading-relaxed">
                         <span class="text-emerald-600 font-semibold">→</span>
                         <span><strong class="text-navy">Anchoring</strong>: over-relying on the first number you see (purchase price)</span>
                     </li>

                     <li class="flex gap-3 text-[14px] text-muted leading-relaxed">
                         <span class="text-emerald-600 font-semibold">→</span>
                         <span><strong class="text-navy">Herd Mentality</strong>: buying at peaks because everyone else is buying</span>
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
             ['01','Acknowledge You Have Biases','No one is immune. The goal is not to eliminate bias but to design systems that minimise its impact.'],
             ['02','Automate Buy Decisions','Dollar-cost averaging removes timing decisions entirely. Automated monthly purchases happen regardless of how you feel.'],
             ['03','Write an Investment Policy','Document your strategy and rules before market volatility hits. Refer to it when emotions urge deviation.'],
             ['04','Review Annually, Not Daily','Checking portfolio value daily activates loss aversion constantly. Quarterly or annual reviews reduce emotional interference.'],
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
             ['finance.behavior.psychology','Psychology','Money Psychology','The foundational mindset behind decision biases.'],
             ['finance.planning.tax','Investing','Investing Strategy','Building a bias-resistant investment framework.'],
             ['finance.behavior.risk_tolerance','Risk','Risk Tolerance','How biases inflate or deflate perceived risk tolerance.'],
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