@extends('layouts.insurance-category')

@section('title',       'Life Insurance Analysis 2026 – FinReview')
@section('description', 'Structural analysis of the life insurance market — mortality modeling, duration matching, embedded value, and growth outlook.')
@section('hero_img',    'https://images.unsplash.com/photo-1559526324-4b87b5e36e44?w=1600&q=85&auto=format&fit=crop')
@section('breadcrumb',  'Life Insurance Analysis')
@section('badge',       'Insurance Categories')
@section('extra_badges')
    <span class="text-[rgba(230,230,230,.85)] text-[11px] px-3 py-1.5 rounded-lg border border-[rgba(255,255,255,.15)]" style="background:rgba(255,255,255,.1)">Life & Protection</span>
    <span class="text-[rgba(230,230,230,.85)] text-[11px] px-3 py-1.5 rounded-lg border border-[rgba(255,255,255,.15)]" style="background:rgba(255,255,255,.1)">Long-tail Risk</span>
@endsection
@section('hero_title',    'Life Insurance: Structural Model, Mortality Risk & Embedded Value')
@section('hero_subtitle', 'A capital-intensive, long-duration segment where actuarial precision, yield curve sensitivity, and distribution efficiency determine competitive advantage.')
@section('meta',          'March 2026 · FinReview Research · 20 min read')
@section('intro_title', 'Segment Overview')
@section('intro_body',  'Life insurance is the largest global insurance segment by premium volume, representing ~55% of total industry premiums. It operates on fundamentally different economics than P&C: liabilities are long-duration, investment returns dominate underwriting income, and mortality/longevity risk management is the primary actuarial challenge.')

@section('page_content')

<section class="max-w-screen-xl mx-auto py-12">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-7">
        @foreach([
            ['Term Life',      'Pure death benefit, no cash value. Lowest premium, highest mortality risk concentration. Largest by policy count.',  'https://images.unsplash.com/photo-1588776814546-1ffcf47267a5?w=600&q=80&auto=format&fit=crop'],
            ['Whole Life',     'Permanent coverage + guaranteed cash value. Predictable long-term liability profile favored by estate planners.',    'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=600&q=80&auto=format&fit=crop'],
            ['Universal Life', 'Flexible premium + adjustable death benefit. IUL/VUL variants expose carriers to lapse and investment return risk.', 'https://images.unsplash.com/photo-1551836022-d5d88e9218df?w=600&q=80&auto=format&fit=crop'],
        ] as $c)
        <div class="bg-[#ffffff] border border-[#e5e7eb] rounded-2xl overflow-hidden hover:-translate-y-1.5 hover:border-[#4f46e5] transition-all duration-300 group">
            <div class="h-44 overflow-hidden">
                <img src="{{ $c[2] }}" alt="{{ $c[0] }}" class="w-full h-full object-cover opacity-100 group-hover:opacity-100 group-hover:scale-105 transition-all duration-500">
            </div>
            <div class="p-7">
                <h3 class="font-bold text-[#4f46e5] text-[17px] mb-3" style="font-family:'Playfair Display',serif">{{ $c[0] }}</h3>
                <p class="text-[#6b7280] text-[14px] leading-relaxed">{{ $c[1] }}</p>
                <a href="#" class="inline-flex items-center gap-1.5 text-[#4f46e5] text-[13px] font-semibold mt-5 opacity-0 group-hover:opacity-100 transition-opacity">
                    <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    More about
                </a>
            </div>
        </div>
        @endforeach
    </div>
</section>

<section class="bg-surface">
    <div class="flex items-center gap-0 flex-col lg:flex-row max-w-screen-xl mx-auto py-12">

        <div class="flex-1 pr-5 lg:pr-12">
            <p class="text-[11px] font-black uppercase tracking-[0.16em] text-[#4f46e5] mb-5">Duration Management</p>
            <h2 class="font-bold text-white leading-snug mb-5" style="font-family:'Playfair Display',serif; font-size:clamp(24px,2.8vw,34px)">
                How Life Insurers Navigate the Yield Curve
            </h2>
            <p class="text-[#6b7280] text-[15px] leading-[1.85] mb-4">
                Life insurers hold the longest liability durations of any financial institution — average liability duration exceeds 15 years for whole life blocks. A 100bps parallel yield curve shift changes embedded value by 8–15%.
            </p>
            <p class="text-[#6b7280] text-[15px] leading-[1.85] mb-8">
                Rising rate environments boost new money yields but compress the present value of existing in-force blocks — creating complex ALM trade-offs for CFOs managing multi-decade obligations.
            </p>
            <a href="#" class="inline-flex items-center gap-2 text-[#4f46e5] font-semibold text-[14px] hover:gap-3.5 transition-all duration-200">
                <svg class="w-4 h-4 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                More about duration risk
            </a>
        </div>

        <div class="w-full lg:w-[45%] shrink-0 self-stretch">
            <img src="https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?w=900&q=85&auto=format&fit=crop"
                 alt="Yield Curve & Portfolio Management"
                 class="w-full h-full object-cover" style="min-height:380px">
        </div>

    </div>
</section>

<section class="bg-white py-14 border-y border-[#f0f1f5]">
    <p class="text-[11px] font-black uppercase tracking-[0.16em] text-[#4f46e5] mb-10 text-center">Life Insurance — Key Market Metrics 2025</p>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center max-w-screen-xl mx-auto ">
        @foreach([['$3.2T','Global Premiums'],['~55%','Total Insurance Share'],['Low','Loss Volatility'],['Stable','Growth Profile']] as $m)
        <div>
            <div class="font-extrabold text-[#4f46e5] mb-2" style="font-family:'Playfair Display',serif; font-size:clamp(28px,3vw,40px)">{{ $m[0] }}</div>
            <div class="text-[12px] text-[#6b7280] uppercase tracking-widest">{{ $m[1] }}</div>
        </div>
        @endforeach
    </div>
</section>

<section class="bg-surface">
    <div class="flex items-center gap-0 flex-col lg:flex-row-reverse max-w-screen-xl mx-auto py-12">
        <div class="flex-1 pl-5 lg:pl-12">
            <p class="text-[11px] font-black uppercase tracking-[0.16em] text-[#4f46e5] mb-5">Actuarial Science</p>
            <h2 class="font-bold text-white leading-snug mb-5" style="font-family:'Playfair Display',serif; font-size:clamp(24px,2.8vw,34px)">
                Mortality Modeling & Longevity Trends
            </h2>
            <p class="text-[#6b7280] text-[15px] leading-[1.85] mb-4">
                Modern life insurers use generational mortality tables (SOA VBT 2015+, CMI in UK) supplemented with medical underwriting for large policies. Preferred vs. standard mortality rates differ by up to 6× at ages 50–64.
            </p>
            <p class="text-[#6b7280] text-[15px] leading-[1.85] mb-8">
                The structural risk: longevity improvements consistently outpacing model assumptions — creating reserve shortfalls in annuity and pension risk transfer blocks that can take decades to emerge.
            </p>
            <a href="#" class="inline-flex items-center gap-2 text-[#4f46e5] font-semibold text-[14px] hover:gap-3.5 transition-all duration-200">
                <svg class="w-4 h-4 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                More about mortality modeling
            </a>
        </div>

        <div class="w-full lg:w-[45%] shrink-0 self-stretch">
            <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?w=900&q=85&auto=format&fit=crop"
                 alt="Mortality Risk & Longevity"
                 class="w-full h-full object-cover" style="min-height:380px">
        </div>
    </div>
</section>

<section class="max-w-screen-xl mx-auto py-12">
    <div class="rounded-2xl border border-[#e5e7eb] overflow-hidden">
        <div class="bg-[#f4f5f7] border-b border-[#e5e7eb] px-6 py-3.5">
            <span class="text-[11px] font-bold uppercase tracking-[0.12em] text-[#4f46e5]">Mortality Table Comparison — Selected Populations</span>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-[13.5px]">
                <thead class="bg-[#f4f5f7] border-b border-[#e5e7eb]">
                    <tr>
                        <th class="text-left px-6 py-3 text-[11px] font-bold uppercase tracking-wider text-[#6b7280]">Age Band</th>
                        <th class="text-left px-6 py-3 text-[11px] font-bold uppercase tracking-wider text-[#6b7280]">Standard (VBT 2015)</th>
                        <th class="text-right px-6 py-3 text-[11px] font-bold uppercase tracking-wider text-[#6b7280]">Preferred Best</th>
                        <th class="text-right px-6 py-3 text-[11px] font-bold uppercase tracking-wider text-[#6b7280]">Smoker</th>
                        <th class="text-right px-6 py-3 text-[11px] font-bold uppercase tracking-wider text-[#6b7280]">Rate Differential</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-[#f3f4f6]">
                    @foreach([
                        ['40–44','1.82 per 1,000','0.91 per 1,000','5.46 per 1,000','6×'],
                        ['50–54','3.74 per 1,000','1.87 per 1,000','11.22 per 1,000','6×'],
                        ['60–64','9.85 per 1,000','4.93 per 1,000','29.55 per 1,000','6×'],
                        ['70–74','26.4 per 1,000','13.2 per 1,000','52.8 per 1,000','4×'],
                    ] as $r)
                    <tr class="bg-[#ffffff] hover:bg-[#f0f1f5] transition-colors">
                        <td class="px-6 py-4 font-semibold text-[#4f46e5]">{{ $r[0] }}</td>
                        <td class="px-6 py-4 text-[#6b7280]">{{ $r[1] }}</td>
                        <td class="px-6 py-4 text-right text-green-400 font-semibold">{{ $r[2] }}</td>
                        <td class="px-6 py-4 text-right text-red-400 font-semibold">{{ $r[3] }}</td>
                        <td class="px-6 py-4 text-right text-[#4f46e5] font-bold">{{ $r[4] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>

<section class="bg-[#f8f9fb]">
    <div class="flex items-center gap-0 flex-col lg:flex-row max-w-screen-xl mx-auto py-12">
        <div class="pr-5 lg:pr-12">
            <p class="text-[11px] font-black uppercase tracking-[0.16em] text-[#4f46e5] mb-5">Valuation Framework</p>
            <h2 class="font-bold text-white leading-snug mb-5" style="font-family:'Playfair Display',serif; font-size:clamp(24px,2.8vw,34px)">
                Embedded Value: The Life Insurance Scorecard
            </h2>
            <p class="text-[#6b7280] text-[15px] leading-[1.85] mb-4">
                Embedded Value (EV) represents the present value of future profits from the in-force policy book plus adjusted net worth. It is the primary M&A valuation and investor reporting metric across global life markets.
            </p>
            <p class="text-[#6b7280] text-[15px] leading-[1.85] mb-8">
                Value of New Business (VNB) margin — VNB ÷ Annualized Premium Equivalent — measures growth efficiency. Asian life insurers like AIA and Ping An achieve margins 2–3× higher than Western peers due to distribution leverage and product mix.
            </p>
            <a href="#" class="inline-flex items-center gap-2 text-[#4f46e5] font-semibold text-[14px] hover:gap-3.5 transition-all duration-200">
                <svg class="w-4 h-4 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                More about embedded value
            </a>
        </div>

        <div class="w-full lg:w-[45%] shrink-0 self-stretch">
            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=900&q=85&auto=format&fit=crop"
                 alt="Embedded Value Analysis"
                 class="w-full h-full object-cover" style="min-height:380px">
        </div>

    </div>
</section>

<section class="max-w-screen-xl mx-auto py-12">
    <div class="rounded-2xl border border-[#e5e7eb] overflow-hidden">
        <div class="bg-[#f4f5f7] border-b border-[#e5e7eb] px-6 py-3.5">
            <span class="text-[11px] font-bold uppercase tracking-[0.12em] text-[#4f46e5]">Selected Life Insurer EV Metrics — 2025</span>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-[13.5px]">
                <thead class="bg-[#f4f5f7] border-b border-[#e5e7eb]">
                    <tr>
                        <th class="text-left px-6 py-3 text-[11px] font-bold uppercase tracking-wider text-[#6b7280]">Carrier</th>
                        <th class="text-right px-6 py-3 text-[11px] font-bold uppercase tracking-wider text-[#6b7280]">EV (USD bn)</th>
                        <th class="text-right px-6 py-3 text-[11px] font-bold uppercase tracking-wider text-[#6b7280]">VNB Margin</th>
                        <th class="text-right px-6 py-3 text-[11px] font-bold uppercase tracking-wider text-[#6b7280]">RoEV</th>
                        <th class="text-right px-6 py-3 text-[11px] font-bold uppercase tracking-wider text-[#6b7280]">P/EV</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-[#f3f4f6]">
                    @foreach([
                        ['Prudential (US)', '48.2','12.4%','10.8%','0.72×'],
                        ['AIA Group',       '67.5','38.2%','14.6%','1.15×'],
                        ['Ping An Life',    '92.1','24.8%','11.2%','0.58×'],
                        ['Manulife',        '39.8','18.6%','12.4%','0.85×'],
                        ['Sun Life',        '28.4','22.1%','13.8%','0.91×'],
                    ] as $r)
                    <tr class="bg-[#ffffff] hover:bg-[#f0f1f5] transition-colors">
                        <td class="px-6 py-4 font-semibold text-[#4f46e5]">{{ $r[0] }}</td>
                        <td class="px-6 py-4 text-right text-[#4f46e5] font-bold">${{ $r[1] }}</td>
                        <td class="px-6 py-4 text-right text-[#6b7280]">{{ $r[2] }}</td>
                        <td class="px-6 py-4 text-right text-green-400 font-semibold">{{ $r[3] }}</td>
                        <td class="px-6 py-4 text-right text-[#6b7280]">{{ $r[4] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>

<section class="max-w-screen-xl mx-auto py-6">
    <div class="flex items-stretch rounded-2xl overflow-hidden border border-[#e5e7eb]"
         style="background:linear-gradient(135deg,#f0f1f5,#f8f9fb)">

        <div class="hidden lg:block w-[400px] shrink-0 relative">
            <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?w=800&q=85&auto=format&fit=crop"
                 alt="Life Insurance Consultation"
                 class="w-full h-full object-cover">
            <div class="absolute inset-0" style="background:linear-gradient(to right,transparent 40%,rgba(248,249,251,.95))"></div>
        </div>

        <div class="flex-1 px-12 py-6 flex flex-col justify-center">
            <span class="text-[10px] font-black uppercase tracking-[0.2em] text-[#4f46e5] mb-4 flex items-center gap-2">
                <span class="w-8 h-px bg-[#4f46e5] inline-block"></span>
                Free Consultation
            </span>
            <h3 class="font-bold text-white leading-tight mb-5" style="font-family:'Playfair Display',serif; font-size:clamp(22px,2.5vw,30px)">
                Not Sure Which Life Insurance<br>Policy Fits Your Family?
            </h3>
            <p class="text-[#6b7280] text-[14.5px] leading-relaxed mb-8 max-w-[700px]">
                Our certified analysts review your income, dependents, and long-term goals to recommend the right coverage — Term, Whole, or Universal Life — completely free, no obligations.
            </p>
            <div class="flex items-center gap-5 flex-wrap">
                <a href="{{ route('consultation') }}"
                   class="inline-flex items-center gap-2.5 bg-[#4f46e5] hover:bg-[#4338ca] text-[#0f1f35] font-bold text-[14px] px-8 py-3.5 rounded-xl transition-all hover:-translate-y-0.5 shadow-lg">
                    Get Free Consultation
                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
                <a href="{{ route('reviews') }}"
                   class="text-[#6b7280] hover:text-[#4f46e5] text-[14px] font-medium transition-colors">
                    Browse all reviews →
                </a>
            </div>
        </div>
    </div>
</section>

<section class="max-w-screen-xl mx-auto pt-6">
    <div class="flex items-stretch rounded-2xl overflow-hidden border border-[#e5e7eb]"
         style="background:linear-gradient(135deg,#f8f9fb,#f0f1f5)">

        <div class="flex-1 px-12 py-6 flex flex-col justify-center">
            <span class="text-[10px] font-black uppercase tracking-[0.2em] text-[#4f46e5] mb-4 flex items-center gap-2">
                <span class="w-8 h-px bg-[#4f46e5] inline-block"></span>
                2026 Industry Report
            </span>
            <h3 class="font-bold text-white leading-tight mb-5" style="font-family:'Playfair Display',serif; font-size:clamp(22px,2.5vw,30px)">
                Global Life Insurance<br>Market Outlook 2026
            </h3>
            <p class="text-[#6b7280] text-[14.5px] leading-relaxed mb-8 max-w-[700px]">
                Rising interest rates, longevity risk, and digital distribution are reshaping the $3.2 trillion life insurance market. Download our full report covering 28 markets and 5-year projections.
            </p>
            <div class="flex items-center gap-5 flex-wrap">
                <a href="{{ route('reviews') }}"
                   class="inline-flex items-center gap-2.5 border border-[#4f46e5] text-[#4f46e5] hover:bg-[#4f46e5] hover:text-[#0f1f35] font-bold text-[14px] px-8 py-3.5 rounded-xl transition-all hover:-translate-y-0.5">
                    Download Report
                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                </a>
                <a href="{{ route('consultation') }}"
                   class="text-[#6b7280] hover:text-[#4f46e5] text-[14px] font-medium transition-colors">
                    Speak to an analyst →
                </a>
            </div>
        </div>

        <div class="hidden lg:block w-[400px] shrink-0 relative">
            <img src="https://images.unsplash.com/photo-1504868584819-f8e8b4b6d7e3?w=800&q=85&auto=format&fit=crop"
                 alt="Market Research Report"
                 class="w-full h-full object-cover opacity-80">
            <div class="absolute inset-0" style="background:linear-gradient(to left,transparent 40%,rgba(248,249,251,.95))"></div>
        </div>
    </div>
</section>

@endsection

@section('related_cards')
    @foreach([
        ['Health Insurance Systems',  'Medical inflation dynamics and risk pooling mechanics in managed care.',               route('insurance.categories.health')],
        ['Reinsurance Structure',     'How life reinsurance redistributes mortality concentration and catastrophe exposure.', route('insurance.categories.reinsurance')],
        ['Insurance Principles',      'Foundational risk pooling and capital structure concepts underlying all lines.',       route('insurance.fundamentals.principles')],
    ] as $r)
    <a href="{{ $r[2] }}" class="bg-white rounded-2xl border border-[#e5e7eb] p-10 transition-all duration-300 hover:-translate-y-2 hover:border-[#4f46e5] cursor-pointer">
        <h4>{{ $r[0] }}</h4>
        <p>{{ $r[1] }}</p>
    </a>
    @endforeach
@endsection

@section('cta_title', '')
@section('cta_desc', '')
@section('cta_btn', '')