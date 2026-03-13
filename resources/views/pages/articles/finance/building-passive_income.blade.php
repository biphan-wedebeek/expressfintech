 @extends('layouts.personal-finance')

 @section('title', 'Passive Income — Build Streams That Work for You')
 @section('breadcrumb', 'Passive Income')
 @section('eyebrow', 'Building Wealth · Income')
 @section('page_title', 'Passive Income Streams')
 @section('page_lead', 'Passive income is the result of allocating capital efficiently. Every invested dollar becomes a worker generating income while you sleep.')

 @section('content')

 <section class="bg-surface border-b border-[var(--border)] py-20">

     <div class="max-w-7xl mx-auto px-6 lg:px-12">

         <div class="grid lg:grid-cols-2 gap-14 items-start">

             <div>

                 <div class="flex items-center gap-3 mb-4 text-[10px] font-bold tracking-[0.26em] uppercase text-emerald-600">
                     <span class="w-6 h-px bg-emerald-600"></span>
                     The Concept
                 </div>

                 <h2 class="fonttitle text-3xl lg:text-4xl font-bold mb-8">
                     What Actually Counts as Passive Income
                 </h2>

                 <p class="text-muted mb-4 leading-relaxed">
                     True passive income requires upfront capital or effort and then produces income with minimal ongoing work.
                 </p>

                 <p class="text-muted mb-6 leading-relaxed">
                     For most investors, the most reliable sources are <strong>dividend-paying index funds</strong> and <strong>REITs</strong>. They provide diversification, accessibility, and low maintenance.
                 </p>

                 <div class="border border-emerald-200 bg-emerald-50 p-6 rounded-lg">

                     <div class="text-xs uppercase tracking-wider text-emerald-700 font-semibold mb-2">
                         Compounding Income
                     </div>

                     <p class="text-sm text-muted">
                         A $100,000 portfolio yielding 4% produces <strong>$4,000 per year</strong>. With reinvestment and 7% total returns, it can grow to nearly $387,000 after 20 years.
                     </p>

                 </div>

             </div>



             <div>

                 <div class="border-l-4 border-emerald-500 bg-white p-6 mb-4">

                     <div class="fonttitle text-5xl font-black text-emerald-600 mb-2">
                         4–7%
                     </div>

                     <div class="text-xs uppercase tracking-wider text-muted">
                         Typical annual yield from diversified dividend portfolios
                     </div>

                 </div>


                 <ul class="space-y-3 text-sm text-muted">

                     <li class="flex gap-3">
                         <span class="text-emerald-600 font-bold">→</span>
                         <span><strong>Dividend index funds</strong> — low cost, diversified</span>
                     </li>

                     <li class="flex gap-3">
                         <span class="text-emerald-600 font-bold">→</span>
                         <span><strong>REITs</strong> — real estate exposure without property management</span>
                     </li>

                     <li class="flex gap-3">
                         <span class="text-emerald-600 font-bold">→</span>
                         <span><strong>High-yield savings</strong> — ~4–5% in recent interest cycles</span>
                     </li>

                     <li class="flex gap-3">
                         <span class="text-emerald-600 font-bold">→</span>
                         <span><strong>Rental property</strong> — higher yield but more effort</span>
                     </li>

                     <li class="flex gap-3">
                         <span class="text-emerald-600 font-bold">→</span>
                         <span><strong>Digital products</strong> — courses, templates, SaaS</span>
                     </li>

                 </ul>

             </div>

         </div>

     </div>

 </section>



 <section class="bg-white border-b border-[var(--border)] py-20">

     <div class="max-w-7xl mx-auto px-6 lg:px-12">

         <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">

             <div class="bg-surface border border-[var(--border)] p-6 hover:shadow-md transition">

                 <div class="text-4xl font-black text-emerald-200 mb-4">01</div>

                 <h3 class="font-semibold mb-2">
                     Invest in Dividend ETFs
                 </h3>

                 <p class="text-sm text-muted">
                     Funds like dividend ETFs diversify income across hundreds of companies.
                 </p>

             </div>


             <div class="bg-surface border border-[var(--border)] p-6 hover:shadow-md transition">

                 <div class="text-4xl font-black text-emerald-200 mb-4">02</div>

                 <h3 class="font-semibold mb-2">
                     Add REIT Exposure
                 </h3>

                 <p class="text-sm text-muted">
                     Real estate investment trusts distribute most income as dividends.
                 </p>

             </div>


             <div class="bg-surface border border-[var(--border)] p-6 hover:shadow-md transition">

                 <div class="text-4xl font-black text-emerald-200 mb-4">03</div>

                 <h3 class="font-semibold mb-2">
                     Maximise HYSA Yield
                 </h3>

                 <p class="text-sm text-muted">
                     High-yield savings accounts provide safe passive income on cash reserves.
                 </p>

             </div>


             <div class="bg-surface border border-[var(--border)] p-6 hover:shadow-md transition">

                 <div class="text-4xl font-black text-emerald-200 mb-4">04</div>

                 <h3 class="font-semibold mb-2">
                     Explore Rental Property
                 </h3>

                 <p class="text-sm text-muted">
                     Buy-and-hold real estate can generate strong cash flow over time.
                 </p>

             </div>

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

             <a href="{{route('finance.behavior.decision_bias')}}" class="block bg-surface border border-[var(--border)] p-6 hover:shadow-md transition">

                 <div class="text-xs uppercase tracking-wider text-emerald-600 font-semibold mb-2">
                     Financial Decision Bias
                 </div>

                 <div class="fonttitle text-lg font-bold mb-2">
                     Confirmation Bias
                 </div>

                 <p class="text-sm text-muted mb-4">
                     People often favor information that confirms their existing financial beliefs.
                 </p>

                 <span class="text-xs uppercase tracking-wider text-emerald-600 font-semibold">
                     Read More →
                 </span>

             </a>


             <a href="{{route('finance.building.diversification')}}" class="block bg-surface border border-[var(--border)] p-6 hover:shadow-md transition">

                 <div class="text-xs uppercase tracking-wider text-emerald-600 font-semibold mb-2">
                     Diversification
                 </div>

                 <div class="fonttitle text-lg font-bold mb-2">
                     Diversify Your Income Streams
                 </div>

                 <p class="text-sm text-muted mb-4">
                     Multiple income streams reduce financial concentration risk.
                 </p>

                 <span class="text-xs uppercase tracking-wider text-emerald-600 font-semibold">
                     Read More →
                 </span>

             </a>


             <a href="{{route('finance.building.independence')}}" class="block bg-surface border border-[var(--border)] p-6 hover:shadow-md transition">

                 <div class="text-xs uppercase tracking-wider text-emerald-600 font-semibold mb-2">
                     Independence
                 </div>

                 <div class="fonttitle text-lg font-bold mb-2">
                     Financial Independence
                 </div>

                 <p class="text-sm text-muted mb-4">
                     Passive income that covers expenses leads to financial freedom.
                 </p>

                 <span class="text-xs uppercase tracking-wider text-emerald-600 font-semibold">
                     Read More →
                 </span>

             </a>

         </div>

     </div>

 </section>

 @endsection