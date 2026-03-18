 @extends('layouts.personal-finance')

 @section('title', 'Money Psychology — The Mental Game of Finance')
 @section('breadcrumb', 'Psychology')
 @section('eyebrow', 'Behavior · Mindset')
 @section('page_title', 'Money Psychology')
 @section('page_lead', 'Financial success is 80% behavior and 20% knowledge. The maths of personal finance is simple. The psychology is hard. Understanding the mental game changes everything.')

 @section('content')

 <section class="bg-emerald-50 border-b border-emerald-100 py-20">
     <div class="max-w-7xl mx-auto px-6 lg:px-12">
         <div class="grid lg:grid-cols-2 gap-14 items-start">
             <div>
                 <div class="flex items-center gap-3 mb-4 uppercase tracking-[0.25em] text-emerald-600 text-xs font-semibold">
                     <span class="w-6 h-px bg-emerald-500"></span>
                     The Mental Game
                 </div>

                 <h2 class="fonttitle text-emerald-900 text-3xl md:text-4xl mb-8">
                     How Your Mind Manages — and Mismanages — Money
                 </h2>

                 <p class="text-emerald-900/70 leading-relaxed mb-5">
                     Money carries enormous psychological weight: security, status, identity, and freedom are all bound to it.
                     These emotional associations shape financial decisions far more than knowledge or strategy.
                 </p>

                 <p class="text-emerald-900/70 leading-relaxed mb-5">
                     <strong class="text-emerald-900">Money scripts</strong> — deeply held beliefs about money formed in childhood — drive adult financial behaviour unconsciously.
                     Identifying your scripts is the first step to overriding them with intentional choices.
                 </p>

                 <div class="border border-emerald-200 bg-emerald-100/40 p-6 rounded">
                     <div class="uppercase tracking-[0.2em] text-xs text-emerald-600 font-semibold mb-2">
                         Key Insight
                     </div>

                     <p class="text-emerald-900/70 text-sm leading-relaxed">
                         The most financially successful people are not the most knowledgeable — they are the most consistent.
                         Automating decisions removes psychology from the equation, which is why automation is one of the most powerful personal finance tools.
                     </p>
                 </div>
             </div>

             <div>
                 <div class="border-l-4 border-emerald-500 bg-white shadow-sm p-7 mb-6">
                     <div class="fonttitle text-5xl text-emerald-600 mb-2">
                         80%
                     </div>

                     <div class="text-xs uppercase tracking-wide text-emerald-900/60">
                         Of financial outcomes are determined by behaviour, not knowledge
                     </div>
                 </div>

                 <ul class="space-y-3 text-emerald-900/70 text-sm">

                     <li class="flex gap-3">
                         <span class="text-emerald-600 font-semibold">→</span>
                         <span><strong class="text-emerald-900">Money avoidance</strong>: associating money with greed or shame</span>
                     </li>

                     <li class="flex gap-3">
                         <span class="text-emerald-600 font-semibold">→</span>
                         <span><strong class="text-emerald-900">Money worship</strong>: believing more money solves all problems</span>
                     </li>

                     <li class="flex gap-3">
                         <span class="text-emerald-600 font-semibold">→</span>
                         <span><strong class="text-emerald-900">Money status</strong>: using spending to signal social position</span>
                     </li>

                     <li class="flex gap-3">
                         <span class="text-emerald-600 font-semibold">→</span>
                         <span><strong class="text-emerald-900">Money vigilance</strong>: over-frugality, anxiety about spending</span>
                     </li>

                     <li class="flex gap-3">
                         <span class="text-emerald-600 font-semibold">→</span>
                         <span>Automation bypasses all four — good defaults remove the decision</span>
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
                 <div class="font-semibold text-emerald-900 mb-2">Identify Your Money Script</div>
                 <p class="text-sm text-emerald-900/70">
                     Which pattern dominates: avoidance, worship, status, or vigilance? Self-awareness is the first step toward change.
                 </p>
             </div>

             <div class="bg-emerald-50 hover:bg-emerald-100 transition p-7 rounded">
                 <div class="text-4xl font-bold text-emerald-200 mb-4">02</div>
                 <div class="font-semibold text-emerald-900 mb-2">Automate Every Key Decision</div>
                 <p class="text-sm text-emerald-900/70">
                     Savings transfers, automatic investing, and bill autopay remove reliance on willpower.
                 </p>
             </div>

             <div class="bg-emerald-50 hover:bg-emerald-100 transition p-7 rounded">
                 <div class="text-4xl font-bold text-emerald-200 mb-4">03</div>
                 <div class="font-semibold text-emerald-900 mb-2">Separate Needs From Identity</div>
                 <p class="text-sm text-emerald-900/70">
                     Lifestyle inflation is often status spending in disguise. Separate identity from consumption.
                 </p>
             </div>

             <div class="bg-emerald-50 hover:bg-emerald-100 transition p-7 rounded">
                 <div class="text-4xl font-bold text-emerald-200 mb-4">04</div>
                 <div class="font-semibold text-emerald-900 mb-2">Celebrate Process, Not Outcomes</div>
                 <p class="text-sm text-emerald-900/70">
                     Focus on savings rate and consistency. Market returns are outside your control.
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
             <a href="{{route('finance.behavior.spending')}}" class="block bg-white p-7 hover:bg-emerald-50 transition rounded shadow-sm">
                 <div class="text-xs uppercase tracking-widest text-emerald-600 mb-2">Spending</div>
                 <div class="fonttitle text-lg text-emerald-900 mb-2">The Psychology of Spending</div>
                 <p class="text-sm text-emerald-900/70 mb-4">
                     Translate mindset insights into spending habit changes.
                 </p>
                 <div class="text-xs uppercase tracking-wider text-emerald-600">Read More →</div>
             </a>

             <a href="{{route('finance.behavior.decision_bias')}}" class="block bg-white p-7 hover:bg-emerald-50 transition rounded shadow-sm">
                 <div class="text-xs uppercase tracking-widest text-emerald-600 mb-2">Bias</div>
                 <div class="fonttitle text-lg text-emerald-900 mb-2">Cognitive Biases in Finance</div>
                 <p class="text-sm text-emerald-900/70 mb-4">
                     The mental shortcuts that often cost money.
                 </p>
                 <div class="text-xs uppercase tracking-wider text-emerald-600">Read More →</div>
             </a>

             <a href="{{route('finance.behavior.risk_tolerance')}}" class="block bg-white p-7 hover:bg-emerald-50 transition rounded shadow-sm">
                 <div class="text-xs uppercase tracking-widest text-emerald-600 mb-2">Risk</div>
                 <div class="fonttitle text-lg text-emerald-900 mb-2">Risk Tolerance</div>
                 <p class="text-sm text-emerald-900/70 mb-4">
                     How psychology shapes your investment risk profile.
                 </p>
                 <div class="text-xs uppercase tracking-wider text-emerald-600">Read More →</div>
             </a>
         </div>
     </div>
 </section>

 @endsection