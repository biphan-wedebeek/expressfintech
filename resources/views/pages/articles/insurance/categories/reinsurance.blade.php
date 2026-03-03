@extends('layouts.insurance-category')
@section('title', 'Reinsurance Structure & Capital Flow 2026 – FinReview')
@section('description', 'How reinsurance redistributes catastrophe exposure — treaty vs. facultative, ILS market, retrocession, and impact on primary insurance pricing.')
@section('hero_img', 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=1600&q=85&auto=format&fit=crop')
@section('breadcrumb', 'Reinsurance Structure')
@section('badge', 'Insurance Categories')
@section('extra_badges')
<span class="text-[#e6e6e6d9] text-[11px] px-3 py-1.5 rounded-lg border border-[#ffffff26] bg-[#ffffff1a]">ILS / Cat Bonds</span>
<span class="text-[#e6e6e6d9] text-[11px] px-3 py-1.5 rounded-lg border border-[#ffffff26] bg-[#ffffff1a]">Capital Markets</span>
@endsection
@section('hero_title', 'Reinsurance Structure: Capital Flow, Treaty Architecture & ILS Market')
@section('hero_subtitle', 'Reinsurance is the shock absorber of the global insurance system — how catastrophe risk is layered, priced, and redistributed through treaty programs and capital market instruments.')
@section('meta', 'February 2026 · FinReview Research · 21 min read')
@section('intro_title', 'Segment Overview')
@section('intro_body', 'The global reinsurance market represents ~$350B in annual premium and fundamentally determines the capacity and pricing of primary insurance markets worldwide. When reinsurance costs rise 40–60% as they did in 2023–2024 — primary insurers pass costs directly to policyholders or exit unprofitable markets.')

@section('page_content')

<section class="max-w-screen-xl mx-auto py-12">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-7">
        @foreach([
        ['Treaty Reinsurance', 'Automatic coverage for an entire class of business. Pro-rata or excess of loss structures. Dominant form by premium volume.', 'https://images.unsplash.com/photo-1450101499163-c8848c66ca85?w=600&q=80&auto=format&fit=crop'],
        ['Facultative Reinsurance', 'Individual risk placement, negotiated per policy. Used for large or unusual risks outside treaty appetite.', 'https://images.unsplash.com/photo-1521791136064-7986c2920216?w=600&q=80&auto=format&fit=crop'],
        ['ILS / Cat Bonds', 'Capital market instruments transferring insured risk directly to investors. $100B+ outstanding. Fastest-growing reinsurance channel.', 'https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?w=600&q=80&auto=format&fit=crop'],
        ] as $c)
        <div class="bg-[#151922] border border-[#232833] rounded-2xl overflow-hidden hover:-translate-y-1.5 hover:border-[#c9a96e] transition-all duration-300 group">
            <div class="h-44 overflow-hidden">
                <img src="{{ $c[2] }}" alt="{{ $c[0] }}" class="w-full h-full object-cover opacity-70 group-hover:opacity-90 group-hover:scale-105 transition-all duration-500">
            </div>
            <div class="p-7">
                <h3 class="font-bold text-[#c9a96e] text-[17px] mb-3" style="font-family:'Playfair Display',serif">{{ $c[0] }}</h3>
                <p class="text-[#888] text-[14px] leading-relaxed">{{ $c[1] }}</p>
            </div>
        </div>
        @endforeach
    </div>
</section>

<section class="bg-[#0e1118]">
    <div class="flex items-center flex-col lg:flex-row max-w-screen-xl mx-auto">
        <div class="flex-1 py-12 lg:py-16 pr-8">
            <p class="text-[11px] font-black uppercase tracking-[.16em] text-[#c9a96e] mb-5">Treaty Architecture</p>
            <h2 class="font-bold text-white leading-snug mb-5 familyfont" style="font-size:clamp(24px,2.8vw,34px)">
                The Reinsurance Tower: How Catastrophe Risk is Layered
            </h2>
            <p class="text-[#b8b8b8] text-[15px] leading-[1.85] mb-4">
                Property catastrophe programs are structured as vertical layers. The primary insurer retains the first loss (retention), and successive reinsurance layers respond to losses in excess of each attachment point. A typical $500M tower might have 4–6 layers, each placed with different reinsurers at different prices.
            </p>
            <p class="text-[#b8b8b8] text-[15px] leading-[1.85] mb-8">
                Higher layers — which only attach in extreme events — are increasingly being placed as catastrophe bonds with capital market investors, who accept the risk in exchange for above-market yields. This blending of traditional and capital market capacity has grown dramatically since 2020.
            </p>
            <a href="#" class="inline-flex items-center gap-2 text-[#c9a96e] font-semibold text-[14px] hover:gap-3.5 transition-all duration-200">
                <svg class="w-4 h-4 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14M12 5l7 7-7 7" />
                </svg>
                More about treaty architecture
            </a>
        </div>
        <div class="w-full lg:w-[45%] shrink-0 self-stretch">
            <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=900&q=85&auto=format&fit=crop"
                alt="Reinsurance Tower" class="w-full h-full object-cover" style="min-height:380px">
        </div>
    </div>
</section>

<section class="py-12">
    <p class="text-[11px] font-black uppercase tracking-[.16em] text-[#c9a96e] mb-10 text-center">Global Reinsurance — Key Metrics 2025</p>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center max-w-screen-xl mx-auto">
        @foreach([['$350B','Global Reinsurance Premium'],['$100B+','ILS Outstanding'],['60%','2023–24 Rate Increase'],['10','Top Reinsurers Market Share']] as $m)
        <div>
            <div class="font-extrabold text-[#c9a96e] mb-2 familyfont" style="font-size:clamp(28px,3vw,40px)">{{ $m[0] }}</div>
            <div class="text-[12px] text-[#555] uppercase tracking-widest">{{ $m[1] }}</div>
        </div>
        @endforeach
    </div>
</section>

<section class="py-12 max-w-screen-xl mx-auto">
    <div class="bg-white border border-[#e8e0d8] rounded-2xl p-6 hover:border-[#c9a96e] hover:shadow-lg transition-all duration-300 group overflow-hidden">
        <div class="pb-2.5">
            <span class="text-[11px] font-bold uppercase tracking-[.12em] text-[#c9a96e]">Top Global Reinsurers by Net Premium Written — 2025</span>
        </div>
        <div class="overflow-x-auto border border-[#e8e0d8] rounded-2xl">
            <table class="w-full text-[13.5px]">
                <thead class="bg-[#eedfd0] border-b border-[#e8e0d8]">
                    <tr>
                        <th class="text-left px-6 py-3 text-[11px] font-bold uppercase tracking-wider text-[#1a1a1a]">#</th>
                        <th class="text-center px-6 py-3 text-[11px] font-bold uppercase tracking-wider text-[#1a1a1a]">Reinsurer</th>
                        <th class="text-center px-6 py-3 text-[11px] font-bold uppercase tracking-wider text-[#1a1a1a]">Domicile</th>
                        <th class="text-center px-6 py-3 text-[11px] font-bold uppercase tracking-wider text-[#1a1a1a]">NPW (USD bn)</th>
                        <th class="text-center px-6 py-3 text-[11px] font-bold uppercase tracking-wider text-[#1a1a1a]">Combined Ratio</th>
                        <th class="text-center px-6 py-3 text-[11px] font-bold uppercase tracking-wider text-[#1a1a1a]">Rating</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-[#1e2330]">
                    @foreach([
                    ['1','Munich Re', 'Germany', '45.2','89.4%','AA'],
                    ['2','Swiss Re', 'Switzerland', '38.6','92.1%','AA-'],
                    ['3','Hannover Re', 'Germany', '26.8','91.8%','AA-'],
                    ['4','Berkshire', 'U.S.', '24.1','88.2%','AA+'],
                    ['5','SCOR', 'France', '18.3','95.4%','A+'],
                    ['6','Lloyd\'s of London','U.K.', '55.0','95.2%','A+'],
                    ['7','RenaissanceRe', 'Bermuda', '8.9', '82.6%','A+'],
                    ] as $r)
                    <tr class="bg-[#f9f7f4] hover:bg-[#f5f0eb] transition-colors">
                        <td class="px-6 py-4 text-[#6b6560]">{{ $r[0] }}</td>
                        <td class="px-6 py-4 text-center font-semibold text-[#6b6560]">{{ $r[1] }}</td>
                        <td class="px-6 py-4 text-center text-[#6b6560]">{{ $r[2] }}</td>
                        <td class="px-6 py-4 text-center text-[#c9a96e] font-bold">${{ $r[3] }}</td>
                        <td class="px-6 py-4 text-center {{ (float)$r[4]>93?'text-amber-400':'text-green-400' }} font-semibold">{{ $r[4] }}</td>
                        <td class="px-6 py-4 text-center font-semibold text-[#6b6560]">{{ $r[5] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>

<section class="bg-[#0e1118]">
    <div class="flex items-center gap-0 flex-col lg:flex-row max-w-screen-xl mx-auto">
        <div class="flex-1 py-12 lg:py-16 pr-8">
            <p class="text-[11px] font-black uppercase tracking-[.16em] text-[#c9a96e] mb-5">ILS & Cat Bonds</p>
            <h2 class="font-bold text-white leading-snug mb-5 familyfont" style="font-size:clamp(24px,2.8vw,34px)">
                $100B+ of Catastrophe Risk in Capital Markets
            </h2>
            <p class="text-[#b8b8b8] text-[15px] leading-[1.85] mb-4">
                Insurance-Linked Securities allow reinsurance risk to be transferred directly to capital market investors. Cat bonds are the dominant instrument — investors receive above-market yields but risk losing principal if a defined catastrophe trigger is met.
            </p>
            <p class="text-[#b8b8b8] text-[15px] leading-[1.85] mb-8">
                2025 cat bond spreads: 5–7% above T-bills for U.S. hurricane risk. The asset class has attracted pension funds, hedge funds, and dedicated ILS managers seeking low-correlation, diversifying returns. The ILS market has grown from $20B (2010) to $100B+ (2025).
            </p>
            <a href="#" class="inline-flex items-center gap-2 text-[#c9a96e] font-semibold text-[14px] hover:gap-3.5 transition-all duration-200">
                <svg class="w-4 h-4 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14M12 5l7 7-7 7" />
                </svg>
                More about ILS & cat bonds
            </a>
        </div>
        <div class="w-full lg:w-[45%] shrink-0 self-stretch">
            <img src="https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?w=900&q=85&auto=format&fit=crop"
                alt="ILS Capital Markets" class="w-full h-full object-cover" style="min-height:380px">
        </div>
    </div>
</section>

<section class="max-w-screen-xl mx-auto py-12">
    <div class="flex items-stretch rounded-2xl overflow-hidden border border-[#2a2f3a]" style="background:linear-gradient(135deg,#1a1d24,#12161d)">
        <div class="hidden lg:block w-[400px] shrink-0 relative">
            <img src="https://images.unsplash.com/photo-1559526324-4b87b5e36e44?w=800&q=85&auto=format&fit=crop"
                alt="Reinsurance Consultation" class="w-full h-full object-cover">
            <div class="absolute inset-0" style="background:linear-gradient(to right,transparent 55%,#1a1d24)"></div>
        </div>
        <div class="flex-1 px-12 py-14 flex flex-col justify-center">
            <span class="text-[10px] font-black uppercase tracking-[.2em] text-[#c9a96e] mb-4 flex items-center gap-2">
                <span class="w-8 h-px bg-[#c9a96e] inline-block"></span>
                Expert Analysis
            </span>
            <h3 class="font-bold text-white leading-tight mb-5 familyfont" style="font-size:clamp(22px,2.5vw,30px)">
                Is Your Reinsurance Program<br>Optimally Structured?
            </h3>
            <p class="text-[#888] text-[14.5px] leading-relaxed mb-8 max-w-[500px]">
                Our reinsurance specialists benchmark your treaty structure against peers, identify attachment point inefficiencies, and evaluate ILS alternatives — for carriers, MGAs, and captive programs.
            </p>
            <div class="flex items-center gap-5 flex-wrap">
                <a href="{{ route('consultation') }}"
                    class="inline-flex items-center gap-2.5 bg-[#c9a96e] hover:bg-[#b8934a] text-[#0c0f14] font-bold text-[14px] px-8 py-3.5 rounded-xl transition-all hover:-translate-y-0.5 shadow-lg">
                    Get Expert Analysis
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
                2026 Reinsurance Report
            </span>
            <h3 class="font-bold text-white leading-tight mb-5 familyfont" style="font-size:clamp(22px,2.5vw,30px)">
                Global Reinsurance Pricing<br>& Capacity Outlook 2026
            </h3>
            <p class="text-[#888] text-[14.5px] leading-relaxed mb-8 max-w-[500px]">
                After two years of hard market conditions, are rates peaking? Download our 2026 reinsurance market forecast covering capacity, pricing trends, ILS growth, and retrocession market dynamics.
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
                alt="Reinsurance Research" class="w-full h-full object-cover opacity-80">
            <div class="absolute inset-0" style="background:linear-gradient(to left,transparent 55%,#12161d)"></div>
        </div>
    </div>
</section>

@endsection

@section('related_cards')
@foreach([
['Property & Casualty', 'How catastrophe losses flow through the P&C primary market before reaching reinsurers.', route('insurance.categories.property')],
['Life Insurance Analysis','Life reinsurance — mortality risk transfer and financial reinsurance structures.', route('insurance.categories.life')],
['Risk Assessment Models', 'Catastrophe model vendors and PML estimation used in reinsurance treaty pricing.', route('insurance.fundamentals.risk-assessment')],
] as $r)
<a href="{{ $r[2] }}" class="block bg-[#151922] p-7 rounded-xl border border-[#232833] hover:border-[#c9a96e] transition-colors">
    <h4 class="font-bold text-[#c9a96e] text-[15px] mb-2.5" style="font-family:'Playfair Display',serif">{{ $r[0] }}</h4>
    <p class="text-[#888] text-[13.5px] leading-relaxed">{{ $r[1] }}</p>
</a>
@endforeach
@endsection
@section('cta_title','')