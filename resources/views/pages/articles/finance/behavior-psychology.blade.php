 @extends('layouts.personal-finance')

 @section('title', 'Money Psychology — The Mental Game of Finance')
 @section('breadcrumb', 'Psychology')
 @section('eyebrow', 'Behavior · Mindset')
 @section('page_title', 'Money Psychology')
 @section('page_lead', 'Financial success is 80% behavior and 20% knowledge. The maths of personal finance is simple. The psychology is hard. Understanding the mental game changes everything.')

 @section('content')

 <section class="bg-surface border-b border-[var(--border)] py-20">
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

                 <p class="text-muted leading-relaxed mb-5">
                     Money carries enormous psychological weight: security, status, identity, and freedom are all bound to it.
                     These emotional associations shape financial decisions far more than knowledge or strategy.
                 </p>

                 <p class="text-muted leading-relaxed mb-5">
                     <strong class="text-emerald-900">Money scripts</strong> — deeply held beliefs about money formed in childhood — drive adult financial behaviour unconsciously.
                     Identifying your scripts is the first step to overriding them with intentional choices.
                 </p>

                 <div class="border border-emerald-200 bg-emerald-100/40 p-6 rounded">
                     <div class="uppercase tracking-[0.2em] text-xs text-emerald-600 font-semibold mb-2">
                         Key Insight
                     </div>

                     <p class="text-muted text-sm leading-relaxed">
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

                 <ul class="space-y-3 text-muted text-sm">
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


 <section class="bg-white border-b border-[var(--border)] py-20">
     <div class="max-w-7xl mx-auto px-6 lg:px-12">
         <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
             @foreach([
             ['01','Identify Your Money Script','Which pattern dominates: avoidance, worship, status, or vigilance? Self-awareness is the first step toward change.'],
             ['02','Automate Every Key Decision','Savings transfers, automatic investing, and bill autopay remove reliance on willpower.'],
             ['03','Separate Needs From Identity','Lifestyle inflation is often status spending in disguise. Separate identity from consumption.'],
             ['04','Celebrate Process, Not Outcomes','Focus on savings rate and consistency. Market returns are outside your control.'],
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
             ['finance.behavior.spending','Spending','The Psychology of Spending','Translate mindset insights into spending habit changes.'],
             ['finance.behavior.decision_bias','Bias','Cognitive Biases in Finance','The mental shortcuts that often cost money.'],
             ['finance.behavior.risk_tolerance','Risk','Risk Tolerance','How psychology shapes your investment risk profile.'],
             ] as [$route,$cat,$title,$body])

             <a href="{{ route($route) }}" class="block border border-[var(--border)] bg-surface p-6 hover:shadow-md transition">

                 <div class="text-xs uppercase tracking-wider text-emerald-600 font-semibold mb-2">
                     {{ $cat }}
                 </div>

                 <div class="fonttitle text-lg font-bold mb-2">
                     {{ $title }}
                 </div>

                 <p class="text-sm text-muted mb-4">
                     {{ $body }}
                 </p>

                 <span class="text-xs uppercase tracking-wider text-emerald-600 font-semibold">
                     Read More →
                 </span>
             </a>

             @endforeach

         </div>
     </div>
 </section>
 @endsection