@extends('layouts.insurance-category')
@section('title',       'Auto Insurance Market Analysis 2026 – FinReview')
@section('description', 'Auto insurance market analysis — telematics pricing, EV transition impact, frequency/severity trends, and competitive dynamics.')
@section('hero_img',    'https://images.unsplash.com/photo-1449824913935-59a10b8d2000?w=1600&q=85&auto=format&fit=crop')
@section('breadcrumb',  'Auto Insurance Market')
@section('badge',       'Insurance Categories')
@section('extra_badges')
    <span class="text-[rgba(230,230,230,.85)] text-[11px] px-3 py-1.5 rounded-lg border border-[rgba(255,255,255,.15)]" style="background:rgba(255,255,255,.1)">Telematics</span>
    <span class="text-[rgba(230,230,230,.85)] text-[11px] px-3 py-1.5 rounded-lg border border-[rgba(255,255,255,.15)]" style="background:rgba(255,255,255,.1)">EV Transition</span>
@endsection
@section('hero_title',    'Auto Insurance Market: Telematics, EV Disruption & Frequency/Severity Dynamics')
@section('hero_subtitle', 'The largest P&C line by premium — navigating inflation-driven severity, post-COVID frequency normalization, and structural disruption from EVs and autonomous vehicles.')
@section('meta',          'February 2026 · FinReview Research · 17 min read')
@section('intro_title', 'Segment Overview')
@section('intro_body',  'Private passenger auto is the largest P&C line in the U.S. ($320B+ in net written premium). After posting the worst combined ratios in decades in 2022–2023, the segment is recovering through aggressive rate action — but EV penetration and telematics are structurally reshaping how risk is priced at the individual driver level.')

@section('page_content')

<section class="max-w-screen-xl mx-auto py-12">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-7">
        @foreach([
            ['Personal Auto',   'Covers private passenger vehicles. Mandatory liability + optional collision/comprehensive. Largest line by policy count.',  'https://images.unsplash.com/photo-1552519507-da3b142c6e3d?w=600&q=80&auto=format&fit=crop'],
            ['Commercial Auto', 'Fleet coverage for businesses. Higher severity, complex cargo and non-owned exposures. Sustained hard market since 2018.',  'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?w=600&q=80&auto=format&fit=crop'],
            ['Rideshare / TNC', 'Uber, Lyft, and gig economy. Hybrid personal/commercial coverage. Specialized TNC endorsements now widely available.',    'https://images.unsplash.com/photo-1478720568477-152d9b164e26?w=600&q=80&auto=format&fit=crop'],
        ] as $c)
        <div class="bg-white border border-[#e5e7eb] rounded-2xl overflow-hidden hover:-translate-y-1.5 hover:border-[#4f46e5] transition-all duration-300 group">
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
    <div class="flex items-center flex-col lg:flex-row max-w-screen-xl mx-auto py-12 gap-10">
        <div class="flex-1">
            <p class="text-[11px] font-black uppercase tracking-[.16em] text-[#4f46e5] mb-5">Telematics & UBI</p>
            <h2 class="font-bold text-white leading-snug mb-5 familyfont" style="font-size:clamp(24px,2.8vw,34px)">
                Usage-Based Insurance: Pricing the Individual Driver
            </h2>
            <p class="text-[#6b7280] text-[15px] leading-[1.85] mb-4">
                Telematics programs collect real-time driving data — hard braking, speed, mileage, time-of-day — to price risk at the individual driver level, rather than relying solely on demographic proxies. Progressive Snapshot pioneered the model; it now represents 60%+ of new personal auto business at major carriers.
            </p>
            <p class="text-[#6b7280] text-[15px] leading-[1.85] mb-8">
                Safe drivers can save 20–40% versus standard rates. High-risk drivers see surcharges that more accurately reflect their actual risk — improving loss ratios and reducing cross-subsidy between policyholder classes.
            </p>
            <a href="#" class="inline-flex items-center gap-2 text-[#4f46e5] font-semibold text-[14px] hover:gap-3.5 transition-all duration-200">
                <svg class="w-4 h-4 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                More about telematics pricing
            </a>
        </div>
        <div class="w-full lg:w-[45%] shrink-0 self-stretch">
            <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=900&q=85&auto=format&fit=crop"
                 alt="Telematics Driving" class="w-full h-full object-cover" style="min-height:380px">
        </div>
    </div>
</section>

<section class="bg-white py-12 border-y border-[#f0f1f5]">
    <p class="text-[11px] font-black uppercase tracking-[.16em] text-[#4f46e5] mb-10 text-center">Auto Insurance — Key Market Metrics 2025</p>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center max-w-screen-xl mx-auto">
        @foreach([['$320B','U.S. Net Written Premium'],['104%','Avg Combined Ratio'],['28%','EV Share of New Sales'],['62%','Progressive UBI Penetration']] as $m)
        <div>
            <div class="font-extrabold text-[#4f46e5] mb-2" style="font-family:'Playfair Display',serif; font-size:clamp(28px,3vw,40px)">{{ $m[0] }}</div>
            <div class="text-[12px] text-[#6b7280] uppercase tracking-widest">{{ $m[1] }}</div>
        </div>
        @endforeach
    </div>
</section>


<section class="max-w-screen-xl mx-auto py-12">
    <div class="rounded-2xl border border-[#e5e7eb] overflow-hidden">
        <div class="bg-[#f4f5f7] border-b border-[#e5e7eb] px-6 py-3.5">
            <span class="text-[11px] font-bold uppercase tracking-[.12em] text-[#4f46e5]">Telematics Program Comparison — Major U.S. Carriers</span>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-[13.5px]">
                <thead class="bg-[#f4f5f7] border-b border-[#e5e7eb]">
                    <tr>
                        <th class="text-left px-6 py-3 text-[11px] font-bold uppercase tracking-wider text-[#6b7280]">Carrier</th>
                        <th class="text-left px-6 py-3 text-[11px] font-bold uppercase tracking-wider text-[#6b7280]">Program</th>
                        <th class="text-right px-6 py-3 text-[11px] font-bold uppercase tracking-wider text-[#6b7280]">Max Discount</th>
                        <th class="text-right px-6 py-3 text-[11px] font-bold uppercase tracking-wider text-[#6b7280]">UBI Penetration</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-[#f3f4f6]">
                    @foreach([
                        ['Progressive','Snapshot',  '30%','62%'],
                        ['State Farm', 'Drive Safe', '30%','48%'],
                        ['Allstate',   'Drivewise',  '40%','35%'],
                        ['Nationwide', 'SmartRide',  '40%','28%'],
                        ['Liberty',    'RightTrack', '30%','22%'],
                    ] as $r)
                    <tr class="bg-[#ffffff] hover:bg-[#f0f1f5] transition-colors">
                        <td class="px-6 py-4 font-semibold text-[#1a1a1a]">{{ $r[0] }}</td>
                        <td class="px-6 py-4 text-[#6b7280]">{{ $r[1] }}</td>
                        <td class="px-6 py-4 text-right text-green-400 font-semibold">{{ $r[2] }}</td>
                        <td class="px-6 py-4 text-right text-[#4f46e5] font-bold">{{ $r[3] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>

<section class="bg-surface">
    <div class="flex items-center flex-col lg:flex-row-reverse max-w-screen-xl mx-auto py-12 gap-10">
        <div class="flex-1">
            <p class="text-[11px] font-black uppercase tracking-[.16em] text-[#4f46e5] mb-5">EV Disruption</p>
            <h2 class="font-bold text-white leading-snug mb-5" style="font-family:'Playfair Display',serif; font-size:clamp(24px,2.8vw,34px)">
                Electric Vehicles: Higher Severity, Thinner Data
            </h2>
            <p class="text-[#6b7280] text-[15px] leading-[1.85] mb-4">
                EVs present a structural underwriting challenge: average repair costs are 25–30% higher than ICE equivalents, battery damage from minor collisions can total the vehicle, and the specialized repair network remains thin. Most carriers use ICE rates with EV surcharges as a temporary solution.
            </p>
            <p class="text-[#6b7280] text-[15px] leading-[1.85] mb-8">
                The long-term disruption is larger: L4/L5 autonomous vehicles will shift liability from driver to manufacturer, fundamentally restructuring the $320B personal auto market. The transition is expected to compress personal auto premium by 30–50% over the next 15 years.
            </p>
            <a href="#" class="inline-flex items-center gap-2 text-[#4f46e5] font-semibold text-[14px] hover:gap-3.5 transition-all duration-200">
                <svg class="w-4 h-4 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                More about EV insurance impact
            </a>
        </div>
        <div class="w-full lg:w-[45%] shrink-0 self-stretch">
            <img src="https://images.unsplash.com/photo-1593941707882-a5bba14938c7?w=900&q=85&auto=format&fit=crop"
                 alt="Electric Vehicle Insurance" class="w-full h-full object-cover" style="min-height:380px">
        </div>
    </div>
</section>

<section class="max-w-screen-xl mx-auto py-6">
    <div class="flex items-stretch rounded-2xl overflow-hidden border border-[#e5e7eb]" style="background:linear-gradient(135deg,#f0f1f5,#f8f9fb)">
        <div class="hidden lg:block w-[400px] shrink-0 relative">
            <img src="https://images.unsplash.com/photo-1449824913935-59a10b8d2000?w=800&q=85&auto=format&fit=crop"
                 alt="Auto Insurance Savings" class="w-full h-full object-cover">
            <div class="absolute inset-0" style="background:linear-gradient(to right,transparent 40%,rgba(248,249,251,.95))"></div>
        </div>
        <div class="flex-1 px-12 py-6 flex flex-col justify-center">
            <span class="text-[10px] font-black uppercase tracking-[.2em] text-[#4f46e5] mb-4 flex items-center gap-2">
                <span class="w-8 h-px bg-[#4f46e5] inline-block"></span>
                Free Auto Insurance Review
            </span>
            <h3 class="font-bold text-white leading-tight mb-5" style="font-family:'Playfair Display',serif; font-size:clamp(22px,2.5vw,30px)">
                Could You Save on<br>Your Auto Insurance?
            </h3>
            <p class="text-[#6b7280] text-[14.5px] leading-relaxed mb-8 max-w-[700px]">
                Rates have jumped 20–30% since 2022. Our analysts compare your current policy against 20+ carriers — and identify telematics discounts, bundling savings, and coverage gaps — free of charge.
            </p>
            <div class="flex items-center gap-5 flex-wrap">
                <a href="{{ route('consultation') }}"
                   class="inline-flex items-center gap-2.5 bg-[#4f46e5] hover:bg-[#4338ca] text-[#0f1f35] font-bold text-[14px] px-8 py-3.5 rounded-xl transition-all hover:-translate-y-0.5 shadow-lg">
                    Get Free Review
                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
                <a href="{{ route('reviews') }}" class="text-[#6b7280] hover:text-[#4f46e5] text-[14px] font-medium transition-colors">Browse all reviews →</a>
            </div>
        </div>
    </div>
</section>


<section class="max-w-screen-xl mx-auto pt-6">
    <div class="flex items-stretch rounded-2xl overflow-hidden border border-[#e5e7eb]" style="background:linear-gradient(135deg,#f8f9fb,#f0f1f5)">
        <div class="flex-1 px-12 py-6 flex flex-col justify-center">
            <span class="text-[10px] font-black uppercase tracking-[.2em] text-[#4f46e5] mb-4 flex items-center gap-2">
                <span class="w-8 h-px bg-[#4f46e5] inline-block"></span>
                2026 EV Insurance Report
            </span>
            <h3 class="font-bold text-white leading-tight mb-5" style="font-family:'Playfair Display',serif; font-size:clamp(22px,2.5vw,30px)">
                How EV Adoption Will<br>Reshape Auto Insurance by 2030
            </h3>
            <p class="text-[#6b7280] text-[14.5px] leading-relaxed mb-8 max-w-[700px]">
                Download our full EV insurance impact report — covering repair cost trajectories, telematics integration, autonomous vehicle liability scenarios, and market structure projections.
            </p>
            <div class="flex items-center gap-5 flex-wrap">
                <a href="{{ route('reviews') }}"
                   class="inline-flex items-center gap-2.5 border border-[#4f46e5] text-[#4f46e5] hover:bg-[#4f46e5] hover:text-[#0f1f35] font-bold text-[14px] px-8 py-3.5 rounded-xl transition-all hover:-translate-y-0.5">
                    Download Report
                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                </a>
                <a href="{{ route('consultation') }}" class="text-[#6b7280] hover:text-[#4f46e5] text-[14px] font-medium transition-colors">Speak to an analyst →</a>
            </div>
        </div>
        <div class="hidden lg:block w-[400px] shrink-0 relative">
            <img src="https://images.unsplash.com/photo-1504868584819-f8e8b4b6d7e3?w=800&q=85&auto=format&fit=crop"
                 alt="EV Research" class="w-full h-full object-cover opacity-80">
            <div class="absolute inset-0" style="background:linear-gradient(to left,transparent 40%,rgba(248,249,251,.95))"></div>
        </div>
    </div>
</section>

@endsection

@section('related_cards')
    @foreach([
        ['Property & Casualty',    'Broader P&C market context — underwriting cycles and catastrophe exposure.',     route('insurance.categories.property')],
        ['Reinsurance Structure',  'How commercial auto and fleet risks are ceded to reinsurers.',                   route('insurance.categories.reinsurance')],
        ['Premium Calculation',    'Rating factor methodology and telematics data integration in pricing.',          route('insurance.fundamentals.premium-calculation')],
    ] as $r)
    <a href="{{ $r[2] }}" class="block bg-[#ffffff] p-7 rounded-xl border border-[#e5e7eb] hover:border-[#4f46e5] transition-colors">
        <h4 class="font-bold text-[#4f46e5] text-[15px] mb-2.5" style="font-family:'Playfair Display',serif">{{ $r[0] }}</h4>
        <p class="text-[#6b7280] text-[13.5px] leading-relaxed">{{ $r[1] }}</p>
    </a>
    @endforeach
@endsection
@section('cta_title','')