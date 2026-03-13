 @extends('layouts.personal-finance')

 @section('title', 'Getting Out of Debt — Avalanche vs Snowball')
 @section('breadcrumb', 'Escape Debt')
 @section('eyebrow', 'Chapter 03 · Debt')
 @section('page_title', 'Defeating Debt')
 @section('page_lead', 'Not all debt is equal. Understanding the difference between productive, manageable, and destructive debt is the first step to escaping it permanently.')

 @section('content')

 <section class="bg-surface border-b border-[var(--border)] py-20">

     <div class="max-w-7xl mx-auto px-6 lg:px-12">

         <div class="grid lg:grid-cols-2 gap-14 items-start">

             <div>

                 <div class="flex items-center gap-3 mb-4 text-[10px] font-bold tracking-[0.26em] uppercase text-emerald-600">
                     <span class="w-6 h-px bg-emerald-600"></span>
                     Debt Classification
                 </div>

                 <h2 class="fonttitle text-3xl lg:text-4xl font-bold mb-8">
                     Not All Debt Is Created Equal
                 </h2>

                 <p class="text-muted mb-4 leading-relaxed">
                     Credit card debt at 22% APR can destroy wealth. A mortgage at 6–7% may actually be a productive financial tool. The strategy depends heavily on the interest rate.
                 </p>

                 <p class="text-muted mb-4 leading-relaxed">
                     The <strong>Avalanche Method</strong> focuses on the highest-interest debt first while maintaining minimum payments elsewhere. This is mathematically optimal and minimizes total interest paid.
                 </p>

                 <p class="text-muted mb-6 leading-relaxed">
                     The <strong>Snowball Method</strong> targets the smallest balance first. Psychologically powerful, it builds motivation through early wins and often leads to higher completion rates.
                 </p>

                 <div class="border border-emerald-200 bg-emerald-50 p-6 rounded-lg">

                     <div class="text-xs uppercase tracking-wider text-emerald-700 font-semibold mb-2">
                         Rule of Thumb
                     </div>

                     <p class="text-sm text-muted">
                         Any debt above <strong>6% APR</strong> should usually be repaid before investing outside employer-matched retirement accounts.
                     </p>

                 </div>

             </div>


             <div class="space-y-4">

                 <div class="border border-[var(--border)] bg-white p-6">

                     <div class="text-xs uppercase tracking-wider text-emerald-600 font-semibold mb-2">
                         Avalanche Method
                     </div>

                     <p class="text-sm text-muted">
                         Pay the <strong>highest interest rate first</strong>. This minimises total interest and is mathematically optimal.
                     </p>

                 </div>


                 <div class="border border-[var(--border)] bg-white p-6">

                     <div class="text-xs uppercase tracking-wider text-amber-600 font-semibold mb-2">
                         Snowball Method
                     </div>

                     <p class="text-sm text-muted">
                         Pay the <strong>smallest balance first</strong>. Momentum from quick wins keeps motivation high.
                     </p>

                 </div>

             </div>

         </div>

     </div>

 </section>



 <section class="bg-white border-b border-[var(--border)] py-20">

     <div class="max-w-7xl mx-auto px-6 lg:px-12">

         <div class="flex items-center gap-3 mb-4 text-[10px] font-bold tracking-[0.26em] uppercase text-emerald-600">
             <span class="w-6 h-px bg-emerald-600"></span>
             Debt by Type
         </div>

         <h2 class="fonttitle text-3xl lg:text-4xl font-bold mb-10">
             Debt Classification Framework
         </h2>


         <div class="border border-[var(--border)] rounded-lg overflow-hidden">

             <div class="flex items-center justify-between px-6 py-4 bg-surface border-b border-[var(--border)]">
                 <span class="text-xs uppercase tracking-wider font-semibold">
                     Debt Type Reference
                 </span>
                 <span class="text-xs uppercase tracking-wider text-emerald-600">
                     2026
                 </span>
             </div>

             <table class="w-full text-sm">

                 <thead class="bg-surface text-left text-xs uppercase tracking-wider text-muted">

                     <tr>
                         <th class="px-6 py-3">Debt Type</th>
                         <th class="px-6 py-3">Typical APR</th>
                         <th class="px-6 py-3">Priority</th>
                         <th class="px-6 py-3">Strategy</th>
                         <th class="px-6 py-3">Risk Level</th>
                     </tr>

                 </thead>

                 <tbody class="divide-y divide-[var(--border)]">

                     <tr class="hover:bg-surface">
                         <td class="px-6 py-4 font-semibold">Credit Card</td>
                         <td class="px-6 py-4 text-red-500 font-semibold">18–29%</td>
                         <td class="px-6 py-4 text-red-500">Critical</td>
                         <td class="px-6 py-4 text-muted">Avalanche first</td>
                         <td class="px-6 py-4 text-red-500 font-semibold">Destructive</td>
                     </tr>

                     <tr class="hover:bg-surface">
                         <td class="px-6 py-4 font-semibold">Personal Loan</td>
                         <td class="px-6 py-4 text-amber-600 font-semibold">8–15%</td>
                         <td class="px-6 py-4 text-amber-600">High</td>
                         <td class="px-6 py-4 text-muted">Pay aggressively</td>
                         <td class="px-6 py-4 text-amber-600 font-semibold">Moderate</td>
                     </tr>

                     <tr class="hover:bg-surface">
                         <td class="px-6 py-4 font-semibold">Auto Loan</td>
                         <td class="px-6 py-4 text-amber-600 font-semibold">6–12%</td>
                         <td class="px-6 py-4 text-amber-600">Medium</td>
                         <td class="px-6 py-4 text-muted">Standard payments</td>
                         <td class="px-6 py-4 text-amber-600 font-semibold">Manageable</td>
                     </tr>

                     <tr class="hover:bg-surface">
                         <td class="px-6 py-4 font-semibold">Student Loan</td>
                         <td class="px-6 py-4 text-blue-500 font-semibold">4–7%</td>
                         <td class="px-6 py-4 text-blue-500">Low–Med</td>
                         <td class="px-6 py-4 text-muted">Income-based plans</td>
                         <td class="px-6 py-4 text-blue-500 font-semibold">Low</td>
                     </tr>

                     <tr class="hover:bg-surface">
                         <td class="px-6 py-4 font-semibold">Mortgage</td>
                         <td class="px-6 py-4 text-emerald-600 font-semibold">6–7%</td>
                         <td class="px-6 py-4 text-emerald-600">Low</td>
                         <td class="px-6 py-4 text-muted">Maintain schedule</td>
                         <td class="px-6 py-4 text-emerald-600 font-semibold">Productive</td>
                     </tr>

                 </tbody>

             </table>

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

             <a href="{{route('finance.planning.budget')}}" class="block bg-surface border border-[var(--border)] p-6 hover:shadow-md transition">

                 <div class="text-xs uppercase tracking-wider text-emerald-600 font-semibold mb-2">
                     Budgeting
                 </div>

                 <div class="fonttitle text-lg font-bold mb-2">
                     50/30/20 Budgeting
                 </div>

                 <p class="text-sm text-muted mb-4">
                     Allocate your 20% income portion toward systematic debt payoff.
                 </p>

                 <span class="text-xs uppercase tracking-wider text-emerald-600 font-semibold">
                     Read More →
                 </span>

             </a>


             <a href="{{route('finance.planning.emergency_fund')}}" class="block bg-surface border border-[var(--border)] p-6 hover:shadow-md transition">

                 <div class="text-xs uppercase tracking-wider text-emerald-600 font-semibold mb-2">
                     Emergency Fund
                 </div>

                 <div class="fonttitle text-lg font-bold mb-2">
                     Build Your Emergency Fund
                 </div>

                 <p class="text-sm text-muted mb-4">
                     A starter emergency fund prevents new debt while paying off old balances.
                 </p>

                 <span class="text-xs uppercase tracking-wider text-emerald-600 font-semibold">
                     Read More →
                 </span>

             </a>


             <a href="{{route('finance.behavior.decision_bias')}}" class="block bg-surface border border-[var(--border)] p-6 hover:shadow-md transition">

                 <div class="text-xs uppercase tracking-wider text-emerald-600 font-semibold mb-2">
                     Financial Decision Bias
                 </div>

                 <div class="fonttitle text-lg font-bold mb-2">
                     Recognize Decision Bias
                 </div>

                 <p class="text-sm text-muted mb-4">
                     Biases can influence financial choices and lead to poor financial decisions.
                 </p>

                 <span class="text-xs uppercase tracking-wider text-emerald-600 font-semibold">
                     Read More →
                 </span>

             </a>

         </div>

     </div>

 </section>

 @endsection