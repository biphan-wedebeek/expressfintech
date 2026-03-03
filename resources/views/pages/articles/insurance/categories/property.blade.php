@extends('layouts.insurance-category')
@section('title', 'Property & Casualty Insurance 2026 – FinReview')
@section('description', 'P&C market analysis — catastrophe modeling, underwriting cycles, combined ratios, climate risk repricing, and carrier market exits.')
@section('hero_img', 'https://images.unsplash.com/photo-1582407947304-fd86f028f716?w=1600&q=85&auto=format&fit=crop')
@section('breadcrumb', 'Property & Casualty')
@section('badge', 'Insurance Categories')
@section('extra_badges')
<span class="text-[#e6e6e6d9] text-[11px] px-3 py-1.5 rounded-lg border border-[#ffffff26] bg-[#ffffff1a]">Catastrophe Risk</span>
<span class="text-[#e6e6e6d9] text-[11px] px-3 py-1.5 rounded-lg border border-[#ffffff26] bg-[#ffffff1a]">Hard Market</span>
@endsection
@section('hero_title', 'Property & Casualty: Catastrophe Exposure, Underwriting Cycles & Climate Repricing')
@section('hero_subtitle', 'The P&C segment faces its most significant structural repricing in 30 years — driven by climate volatility, reinsurance cost escalation, and carrier market exits across Florida, California, and Louisiana.')
@section('meta', 'March 2026 · FinReview Research · 19 min read')
@section('intro_title', 'Segment Overview')
@section('intro_body', 'Property & Casualty is the most cyclically volatile major insurance segment. The 2024–2025 hard market produced the steepest premium increases since the early 2000s. Climate risk repricing is no longer gradual — it is structural, forcing carriers to fundamentally reassess which risks they will write at any price.')

@section('page_content')

<section class="py-12">
    <p class="text-[11px] font-black uppercase tracking-[0.16em] text-[#c9a96e] mb-10 text-center">P&C Market — Key Metrics 2025</p>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center max-w-screen-xl mx-auto">
        @foreach([['+18.3%','Avg Premium Increase'],['97.8%','Industry Combined Ratio'],['$820B','U.S. Net Written Premium'],['12','Carrier Market Exits']] as $m)
        <div>
            <div class="font-extrabold text-[#c9a96e] mb-2 familyfont" style="font-size:clamp(28px,3vw,40px)">{{ $m[0] }}</div>
            <div class="text-[12px] text-[#555] uppercase tracking-widest">{{ $m[1] }}</div>
        </div>
        @endforeach
    </div>
</section>

<section class="bg-[#0e1118]">
    <div class="flex items-center gap-0 flex-col lg:flex-row max-w-screen-xl mx-auto">
        <div class="flex-1 py-12 lg:py-16 pr-8">
            <p class="text-[11px] font-black uppercase tracking-[.16em] text-[#c9a96e] mb-5">Underwriting Cycles</p>
            <h2 class="font-bold text-white leading-snug mb-5 familyfont" style="font-size:clamp(24px,2.8vw,34px)">
                The Hard Market: Rates Up 35–60% Since 2022
            </h2>
            <p class="text-[#b8b8b8] text-[15px] leading-[1.85] mb-4">
                The P&C market oscillates between soft markets (excess capacity, falling rates) and hard markets (capacity withdrawal, rising rates). The current hard market began in 2022 and has produced cumulative premium increases of 35–60% in property lines — the steepest cycle in three decades.
            </p>
            <p class="text-[#b8b8b8] text-[15px] leading-[1.85] mb-8">
                The catalyst: consecutive years of above-expectation catastrophe losses combined with 40–60% reinsurance cost increases at the January 2023 and 2024 renewal seasons. Primary carriers had no choice but to pass costs through.
            </p>
            <a href="#" class="inline-flex items-center gap-2 text-[#c9a96e] font-semibold text-[14px] hover:gap-3.5 transition-all duration-200">
                <svg class="w-4 h-4 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14M12 5l7 7-7 7" />
                </svg>
                More about underwriting cycles
            </a>
        </div>
        <div class="w-full lg:w-[45%] shrink-0 self-stretch">
            <img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?w=900&q=85&auto=format&fit=crop"
                alt="Property Underwriting" class="w-full h-full object-cover" style="min-height:380px">
        </div>
    </div>
</section>

<section class="pt-12 max-w-screen-xl mx-auto">
    <div class="bg-white border border-[#e8e0d8] rounded-2xl p-6 hover:border-[#c9a96e] hover:shadow-lg transition-all duration-300 group overflow-hidden">
        <div class="pb-2.5">
            <span class="text-[11px] font-bold uppercase tracking-[.12em] text-[#c9a96e]">P&C Combined Ratio by Line — Industry Average 2025</span>
        </div>
        <div class="overflow-x-auto border border-[#e8e0d8] rounded-2xl">
            <table class="w-full text-[13.5px]">
                <thead class="bg-[#eedfd0] border-b border-[#e8e0d8]">
                    <tr>
                        <th class="text-left px-6 py-3 text-[11px] font-bold uppercase tracking-wider text-[#1a1a1a]">Line of Business</th>
                        <th class="text-center px-6 py-3 text-[11px] font-bold uppercase tracking-wider text-[#1a1a1a]">Combined Ratio</th>
                        <th class="text-center px-6 py-3 text-[11px] font-bold uppercase tracking-wider text-[#1a1a1a]">Loss Ratio</th>
                        <th class="text-center px-6 py-3 text-[11px] font-bold uppercase tracking-wider text-[#1a1a1a]">YoY Change</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-[#1e2330]">
                    @foreach([
                    ['Homeowners', '112.4%','84.2%','↑ +8.3pp','red'],
                    ['Commercial Property', '98.6%', '70.4%','↑ +3.1pp','amber'],
                    ['Private Passenger Auto','104.2%','77.1%','↑ +5.8pp','red'],
                    ['Workers Comp', '87.3%', '60.1%','↓ -1.4pp','green'],
                    ['General Liability', '96.8%', '68.9%','↑ +1.2pp','amber'],
                    ['Cyber', '89.4%', '61.2%','↓ -8.6pp','green'],
                    ] as $r)
                    <tr class="bg-[#f9f7f4] hover:bg-[#f5f0eb] transition-colors">
                        <td class="px-6 py-4 font-semibold text-[#6b6560]">{{ $r[0] }}</td>
                        <td class="px-6 py-4 text-center font-bold {{ $r[4]==='red'?'text-red-400':($r[4]==='green'?'text-green-400':'text-amber-400') }}">{{ $r[1] }}</td>
                        <td class="px-6 py-4 text-center text-[#6b6560]">{{ $r[2] }}</td>
                        <td class="px-6 py-4 text-center font-semibold {{ $r[4]==='red'?'text-red-400':($r[4]==='green'?'text-green-400':'text-amber-400') }}">{{ $r[3] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>

<section class="max-w-screen-xl mx-auto py-12">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-7">
        @foreach([
        ['Personal Lines', 'Homeowners, auto, renters. Climate risk repricing restructuring economics in coastal and wildfire-exposed states.', 'https://images.unsplash.com/photo-1570129477492-45c003edd2be?w=600&q=80&auto=format&fit=crop'],
        ['Commercial Lines', 'Business property, general liability, D&O, E&O. Complex underwriting, higher premium, more negotiable terms.', 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=600&q=80&auto=format&fit=crop'],
        ['Specialty Lines', 'E&S market, marine, aviation, cyber. Non-admitted flexibility. Fastest-growing P&C segment at 18% CAGR since 2020.', 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=600&q=80&auto=format&fit=crop'],
        ] as $c)
        <div class="bg-[#151922] border border-[#232833] rounded-2xl overflow-hidden hover:-translate-y-1.5 hover:border-[#c9a96e] transition-all duration-300 group">
            <div class="h-44 overflow-hidden">
                <img src="{{ $c[2] }}" alt="{{ $c[0] }}" class="w-full h-full object-cover opacity-70 group-hover:opacity-90 group-hover:scale-105 transition-all duration-500">
            </div>
            <div class="p-7">
                <h3 class="font-bold text-[#c9a96e] text-[17px] mb-3" style="font-family:'Playfair Display',serif">{{ $c[0] }}</h3>
                <p class="text-[#888] text-[14px] leading-relaxed">{{ $c[1] }}</p>
                <a href="#" class="inline-flex items-center gap-1.5 text-[#c9a96e] text-[13px] font-semibold mt-5 opacity-0 group-hover:opacity-100 transition-opacity">
                    <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14M12 5l7 7-7 7" />
                    </svg>
                    More about
                </a>
            </div>
        </div>
        @endforeach
    </div>
</section>

<section class="bg-[#0e1118]">
    <div class="flex items-center flex-col lg:flex-row-reverse max-w-screen-xl mx-auto">
        <div class="flex-1 pl-8 py-12 lg:py-16">
            <p class="text-[11px] font-black uppercase tracking-[.16em] text-[#c9a96e] mb-5">Climate Risk</p>
            <h2 class="font-bold text-white leading-snug mb-5" style="font-family:'Playfair Display',serif; font-size:clamp(24px,2.8vw,34px)">
                12 Carriers Have Exited FL, CA & LA Since 2024
            </h2>
            <p class="text-[#b8b8b8] text-[15px] leading-[1.85] mb-4">
                State Farm, Allstate, Farmers, and nine other carriers have fully or partially exited California, Florida, or Louisiana since 2024. This isn't rate action — it's a fundamental withdrawal from markets where risk can no longer be adequately priced given regulatory constraints.
            </p>
            <p class="text-[#b8b8b8] text-[15px] leading-[1.85] mb-8">
                State-backed insurers of last resort (California FAIR Plan, Citizens in Florida) are absorbing the displaced policies — growing 30–40% annually and raising systemic questions about their own capital adequacy.
            </p>
            <a href="#" class="inline-flex items-center gap-2 text-[#c9a96e] font-semibold text-[14px] hover:gap-3.5 transition-all duration-200">
                <svg class="w-4 h-4 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14M12 5l7 7-7 7" />
                </svg>
                More about climate risk repricing
            </a>
        </div>
        <div class="w-full lg:w-[45%] shrink-0 self-stretch">
            <img src="https://ix-marketing.imgix.net/case-study_exposure2.png?auto=format,compress&w=1946"
                alt="Climate Risk" class="w-full h-full object-cover" style="min-height:380px">
        </div>
    </div>
</section>

<section class="py-12 max-w-screen-xl mx-auto">
    <div class="flex items-stretch rounded-2xl overflow-hidden border border-[#2a2f3a]" style="background:linear-gradient(135deg,#1a1d24,#12161d)">
        <div class="hidden lg:block w-[400px] shrink-0 relative">
            <img src="https://images.unsplash.com/photo-1560472354-b33ff0c44a43?w=800&q=85&auto=format&fit=crop"
                alt="Home Insurance Review" class="w-full h-full object-cover">
            <div class="absolute inset-0" style="background:linear-gradient(to right,transparent 55%,#1a1d24)"></div>
        </div>
        <div class="flex-1 px-12 py-14 flex flex-col justify-center">
            <span class="text-[10px] font-black uppercase tracking-[.2em] text-[#c9a96e] mb-4 flex items-center gap-2">
                <span class="w-8 h-px bg-[#c9a96e] inline-block"></span>
                Free Home Insurance Review
            </span>
            <h3 class="font-bold text-white leading-tight mb-5" style="font-family:'Playfair Display',serif; font-size:clamp(22px,2.5vw,30px)">
                Are You Paying Too Much<br>for Home Insurance?
            </h3>
            <p class="text-[#888] text-[14.5px] leading-relaxed mb-8 max-w-[500px]">
                Rates have jumped 18–42% in the past two years. Our analysts compare your current policy against 30+ carriers and identify savings opportunities — at no cost to you.
            </p>
            <div class="flex items-center gap-5 flex-wrap">
                <a href="{{ route('consultation') }}"
                    class="inline-flex items-center gap-2.5 bg-[#c9a96e] hover:bg-[#b8934a] text-[#0c0f14] font-bold text-[14px] px-8 py-3.5 rounded-xl transition-all hover:-translate-y-0.5 shadow-lg">
                    Get Free Review
                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14M12 5l7 7-7 7" />
                    </svg>
                </a>
                <a href="{{ route('reviews') }}" class="text-[#666] hover:text-[#c9a96e] text-[14px] font-medium transition-colors">Browse all reviews →</a>
            </div>
        </div>
    </div>
</section>

<section class="max-w-screen-xl mx-auto">
    <div class="flex items-stretch rounded-2xl overflow-hidden border border-[#2a2f3a]" style="background:linear-gradient(135deg,#12161d,#1a1d24)">
        <div class="flex-1 px-12 py-14 flex flex-col justify-center">
            <span class="text-[10px] font-black uppercase tracking-[.2em] text-[#c9a96e] mb-4 flex items-center gap-2">
                <span class="w-8 h-px bg-[#c9a96e] inline-block"></span>
                2026 P&C Report
            </span>
            <h3 class="font-bold text-white leading-tight mb-5" style="font-family:'Playfair Display',serif; font-size:clamp(22px,2.5vw,30px)">
                P&C Market Hard/Soft Cycle<br>Outlook: 2026–2030
            </h3>
            <p class="text-[#888] text-[14.5px] leading-relaxed mb-8 max-w-[500px]">
                Our 5-year forward analysis covers catastrophe frequency projections, reinsurance capacity trends, and state-by-state regulatory outlook for homeowners and commercial property.
            </p>
            <div class="flex items-center gap-5 flex-wrap">
                <a href="{{ route('reviews') }}"
                    class="inline-flex items-center gap-2.5 border border-[#c9a96e] text-[#c9a96e] hover:bg-[#c9a96e] hover:text-[#0c0f14] font-bold text-[14px] px-8 py-3.5 rounded-xl transition-all hover:-translate-y-0.5">
                    Download Report
                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4" />
                        <polyline points="7 10 12 15 17 10" />
                        <line x1="12" y1="15" x2="12" y2="3" />
                    </svg>
                </a>
                <a href="{{ route('consultation') }}" class="text-[#666] hover:text-[#c9a96e] text-[14px] font-medium transition-colors">Speak to an analyst →</a>
            </div>
        </div>
        <div class="hidden lg:block w-[400px] shrink-0 relative">
            <img src="https://images.unsplash.com/photo-1504868584819-f8e8b4b6d7e3?w=800&q=85&auto=format&fit=crop"
                alt="P&C Research" class="w-full h-full object-cover opacity-80">
            <div class="absolute inset-0" style="background:linear-gradient(to left,transparent 55%,#12161d)"></div>
        </div>
    </div>
</section>

@endsection

@section('related_cards')
@foreach([
['Reinsurance Structure', 'How catastrophe losses flow through reinsurance layers and ILS markets.', route('insurance.categories.reinsurance')],
['Auto Insurance Market', 'Frequency/severity dynamics and EV transition disruption in personal auto.', route('insurance.categories.auto')],
['Risk Assessment Models', 'Catastrophe model vendors and PML estimation methodologies.', route('insurance.fundamentals.risk-assessment')],
] as $r)
<a href="{{ $r[2] }}" class="block bg-[#151922] p-7 rounded-xl border border-[#232833] hover:border-[#c9a96e] transition-colors">
    <h4 class="font-bold text-[#c9a96e] text-[15px] mb-2.5" style="font-family:'Playfair Display',serif">{{ $r[0] }}</h4>
    <p class="text-[#888] text-[13.5px] leading-relaxed">{{ $r[1] }}</p>
</a>
@endforeach
@endsection
@section('cta_title','')