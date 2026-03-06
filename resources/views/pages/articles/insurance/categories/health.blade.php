@extends('layouts.insurance-category')

@section('title',       'Health Insurance Systems 2026 – FinReview')
@section('description', 'Analysis of global health insurance systems — medical cost inflation, managed care models, MLR regulation, and risk adjustment mechanisms.')
@section('hero_img',    'https://images.unsplash.com/photo-1559757148-5c350d0d3c56?w=1600&q=85&auto=format&fit=crop')
@section('breadcrumb',  'Health Insurance Systems')
@section('badge',       'Insurance Categories')
@section('extra_badges')
    <span class="text-[rgba(230,230,230,.85)] text-[11px] px-3 py-1.5 rounded-lg border border-[rgba(255,255,255,.15)]" style="background:rgba(255,255,255,.1)">Managed Care</span>
    <span class="text-[rgba(230,230,230,.85)] text-[11px] px-3 py-1.5 rounded-lg border border-[rgba(255,255,255,.15)]" style="background:rgba(255,255,255,.1)">Medical Inflation</span>
@endsection
@section('hero_title',    'Health Insurance Systems: Risk Pooling, Medical Inflation & Managed Care')
@section('hero_subtitle', 'How health insurers balance medical cost escalation, regulatory mandates, and network economics across employer-sponsored, individual, and government-sponsored markets.')
@section('meta',          'March 2026 · FinReview Research · 18 min read')
@section('intro_title', 'Segment Overview')
@section('intro_body',  'Health insurance is the most politically complex and operationally intensive insurance line. Medical cost inflation, regulatory mandates (MLR floors, ACA provisions), and provider network leverage define competitive dynamics. In the U.S. alone, the market exceeds $1.3 trillion in premiums annually.')

@section('page_content')

<section class="max-w-screen-xl mx-auto py-12">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-7">
        @foreach([
            ['Employer-Sponsored', 'Largest U.S. channel (~155M lives). ASO arrangements shift medical risk to employer. Stable but slow-growing.', 'https://images.unsplash.com/photo-1497366216548-37526070297c?w=600&q=80&auto=format&fit=crop'],
            ['Individual / ACA',   'Heavily regulated — MLR floors (80%), guaranteed issue, community rating. Subsidized through ACA exchanges.',       'https://images.unsplash.com/photo-1450101499163-c8848c66ca85?w=600&q=80&auto=format&fit=crop'],
            ['Medicare / Medicaid','Medicare Advantage now >54% of Medicare beneficiaries. Medicaid managed care under state contracts.',              'https://images.unsplash.com/photo-1576091160550-2173dba999ef?w=600&q=80&auto=format&fit=crop'],
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
    <div class="flex items-center flex-col lg:flex-row max-w-screen-xl mx-auto py-12">
        <div class="flex-1 pr-5 lg:pr-12">
            <p class="text-[11px] font-black uppercase tracking-[.16em] text-[#4f46e5] mb-5">Medical Cost Dynamics</p>
            <h2 class="font-bold text-white leading-snug mb-5" style="font-family:'Playfair Display',serif; font-size:clamp(24px,2.8vw,34px)">
                Medical Cost Inflation: The Structural Pressure on Margins
            </h2>
            <p class="text-[#6b7280] text-[15px] leading-[1.85] mb-4">
                Medical trend — the annual rate of health cost increase — has run persistently above general inflation for decades. Hospital price growth (+7.2% in 2025), specialty drug spend (GLP-1 agents alone adding ~$800/member/year), and behavioral health utilization are the three primary 2025–2026 cost drivers.
            </p>
            <p class="text-[#6b7280] text-[15px] leading-[1.85] mb-8">
                Carriers with superior network leverage, better risk coding accuracy, and tighter utilization management consistently run MLRs 3–5pp below peers — translating directly to margin advantage in a regulated, rate-capped environment.
            </p>
            <a href="#" class="inline-flex items-center gap-2 text-[#4f46e5] font-semibold text-[14px] hover:gap-3.5 transition-all duration-200">
                <svg class="w-4 h-4 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                More about medical cost inflation
            </a>
        </div>
        <div class="w-full lg:w-[45%] shrink-0 self-stretch">
            <img src="https://images.unsplash.com/photo-1579621970795-87facc2f976d?w=900&q=85&auto=format&fit=crop"
                 alt="Medical Cost Inflation" class="w-full h-full object-cover" style="min-height:380px">
        </div>
    </div>
</section>


<section class="bg-white py-12 border-y border-[#f0f1f5]">
    <p class="text-[11px] font-black uppercase tracking-[.16em] text-[#4f46e5] mb-10 text-center">Health Insurance — Key Market Metrics 2025</p>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center max-w-screen-xl mx-auto">
        @foreach([['6.8%','Medical Cost Trend'],['82.1%','Avg MLR (Commercial)'],['$1.3T','U.S. Premium Volume'],['54%','Medicare Adv. Share']] as $m)
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
            <span class="text-[11px] font-bold uppercase tracking-[.12em] text-[#4f46e5]">MLR Performance — Major U.S. Health Insurers 2025</span>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-[13.5px]">
                <thead class="bg-[#f4f5f7] border-b border-[#e5e7eb]">
                    <tr>
                        <th class="text-left px-6 py-3 text-[11px] font-bold uppercase tracking-wider text-[#6b7280]">Carrier</th>
                        <th class="text-right px-6 py-3 text-[11px] font-bold uppercase tracking-wider text-[#6b7280]">MLR (%)</th>
                        <th class="text-right px-6 py-3 text-[11px] font-bold uppercase tracking-wider text-[#6b7280]">Rebates Paid</th>
                        <th class="text-right px-6 py-3 text-[11px] font-bold uppercase tracking-wider text-[#6b7280]">Op. Margin</th>
                        <th class="text-right px-6 py-3 text-[11px] font-bold uppercase tracking-wider text-[#6b7280]">Medicare Adv. Lives</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-[#f3f4f6]">
                    @foreach([
                        ['UnitedHealth', '84.3%','$0',   '8.2%','9.0M'],
                        ['Elevance',     '86.1%','$0',   '5.8%','2.0M'],
                        ['Humana',       '89.2%','$0',   '2.1%','5.7M'],
                        ['Cigna',        '83.4%','$0',   '6.4%','0.6M'],
                        ['CVS/Aetna',    '87.8%','$12M', '3.9%','3.8M'],
                        ['Centene',      '88.5%','$38M', '3.1%','1.1M'],
                    ] as $r)
                    <tr class="bg-[#ffffff] hover:bg-[#f0f1f5] transition-colors">
                        <td class="px-6 py-4 font-semibold text-[#4f46e5]">{{ $r[0] }}</td>
                        <td class="px-6 py-4 text-right {{ (float)$r[1] > 87 ? 'text-red-400' : 'text-amber-400' }} font-bold">{{ $r[1] }}</td>
                        <td class="px-6 py-4 text-right text-[#6b7280]">{{ $r[2] }}</td>
                        <td class="px-6 py-4 text-right text-green-400 font-semibold">{{ $r[3] }}</td>
                        <td class="px-6 py-4 text-right text-[#4f46e5] font-bold">{{ $r[4] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>

<section class="bg-surface">
    <div class="flex items-center flex-col lg:flex-row-reverse max-w-screen-xl mx-auto py-12">
        <div class="flex-1 pl-5 lg:pl-12">
            <p class="text-[11px] font-black uppercase tracking-[.16em] text-[#4f46e5] mb-5">Managed Care Models</p>
            <h2 class="font-bold text-white leading-snug mb-5" style="font-family:'Playfair Display',serif; font-size:clamp(24px,2.8vw,34px)">
                HMO, PPO, EPO & Medicare Advantage
            </h2>
            <p class="text-[#6b7280] text-[15px] leading-[1.85] mb-4">
                Network architecture is the primary lever for managing medical costs. Tighter networks (HMO, EPO) deliver 15–25% lower premiums but restrict provider choice. PPO structures offer flexibility at a cost.
            </p>
            <p class="text-[#6b7280] text-[15px] leading-[1.85] mb-8">
                Medicare Advantage — where private insurers accept capitated CMS payments per beneficiary — is the fastest-growing health segment, now covering 54% of all Medicare beneficiaries and generating the highest per-member margins in the market.
            </p>
            <a href="#" class="inline-flex items-center gap-2 text-[#4f46e5] font-semibold text-[14px] hover:gap-3.5 transition-all duration-200">
                <svg class="w-4 h-4 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                More about managed care
            </a>
        </div>
        <div class="w-full lg:w-[45%] shrink-0 self-stretch">
            <img src="https://images.unsplash.com/photo-1631217868264-e5b90bb7e133?w=900&q=85&auto=format&fit=crop"
                 alt="Managed Care" class="w-full h-full object-cover" style="min-height:380px">
        </div>
    </div>
</section>

<section class="max-w-screen-xl mx-auto py-12">
    <div class="space-y-4">
        @foreach([
            ['HMO','Primary care gatekeeper model. Lowest premium, tightest network. Capitation payments align provider incentives toward prevention and low utilization.'],
            ['PPO','Broad in-network access + out-of-network option. Most popular employer plan. Higher premium, lower administrative friction, no referral required.'],
            ['EPO','PPO-like network breadth but no out-of-network coverage (except emergencies). Lower premium than PPO. Fastest-growing individual market plan type.'],
            ['Medicare Advantage','Private alternative to traditional Medicare. Capitated CMS payment per beneficiary. Now 54% of Medicare — highest-margin health segment for carriers.'],
        ] as $idx => $s)
        <div class="rounded-xl border border-[#e5e7eb] overflow-hidden">
            <div class="flex items-center gap-3 px-6 py-3.5 bg-[#ffffff] border-b border-[#e5e7eb]">
                <span class="text-[#4f46e5] font-black text-[13px]" style="font-family:'Playfair Display',serif">{{ sprintf('%02d',$idx+1) }}</span>
                <span class="text-[14px] font-bold text-[#4f46e5]">{{ $s[0] }}</span>
            </div>
            <div class="px-6 py-4 bg-[#f8f9fb] text-[13.5px] text-[#6b7280] leading-[1.75]">{{ $s[1] }}</div>
        </div>
        @endforeach
    </div>
</section>

<section class="max-w-screen-xl mx-auto py-6">
    <div class="flex items-stretch rounded-2xl overflow-hidden border border-[#e5e7eb]" style="background:linear-gradient(135deg,#f0f1f5,#f8f9fb)">
        <div class="hidden lg:block w-[400px] shrink-0 relative">
            <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?w=800&q=85&auto=format&fit=crop"
                 alt="Health Insurance Advice" class="w-full h-full object-cover">
            <div class="absolute inset-0" style="background:linear-gradient(to right,transparent 40%,rgba(248,249,251,.95))"></div>
        </div>
        <div class="flex-1 px-12 py-6 flex flex-col justify-center">
            <span class="text-[10px] font-black uppercase tracking-[.2em] text-[#4f46e5] mb-4 flex items-center gap-2">
                <span class="w-8 h-px bg-[#4f46e5] inline-block"></span>
                Plan Comparison
            </span>
            <h3 class="font-bold text-white leading-tight mb-5" style="font-family:'Playfair Display',serif; font-size:clamp(22px,2.5vw,30px)">
                Confused by HMO, PPO, or<br>Medicare Advantage?
            </h3>
            <p class="text-[#6b7280] text-[14.5px] leading-relaxed mb-8 max-w-[700px]">
                Our certified health insurance analysts compare plans side-by-side across premium, network, deductibles, and out-of-pocket costs — and recommend the best fit for your situation, free of charge.
            </p>
            <div class="flex items-center gap-5 flex-wrap">
                <a href="{{ route('consultation') }}"
                   class="inline-flex items-center gap-2.5 bg-[#4f46e5] hover:bg-[#4338ca] text-[#0f1f35] font-bold text-[14px] px-8 py-3.5 rounded-xl transition-all hover:-translate-y-0.5 shadow-lg">
                    Get Free Consultation
                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
                <a href="{{ route('reviews') }}" class="text-[#6b7280] hover:text-[#4f46e5] text-[14px] font-medium transition-colors">Browse all reviews →</a>
            </div>
        </div>
    </div>
</section>

<section class="max-w-screen-xl mx-auto py-6">
    <div class="flex items-stretch rounded-2xl overflow-hidden border border-[#e5e7eb]" style="background:linear-gradient(135deg,#f8f9fb,#f0f1f5)">
        <div class="flex-1 px-12 py-6 flex flex-col justify-center">
            <span class="text-[10px] font-black uppercase tracking-[.2em] text-[#4f46e5] mb-4 flex items-center gap-2">
                <span class="w-8 h-px bg-[#4f46e5] inline-block"></span>
                2026 Industry Report
            </span>
            <h3 class="font-bold text-white leading-tight mb-5" style="font-family:'Playfair Display',serif; font-size:clamp(22px,2.5vw,30px)">
                U.S. Health Insurance<br>Market Outlook 2026
            </h3>
            <p class="text-[#6b7280] text-[14.5px] leading-relaxed mb-8 max-w-[700px]">
                GLP-1 drug costs, Medicare Advantage bid pressure, and ACA enrollment trends are reshaping the $1.3 trillion U.S. health insurance market. Download our full 2026 analysis.
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
                 alt="Health Market Report" class="w-full h-full object-cover opacity-80">
            <div class="absolute inset-0" style="background:linear-gradient(to left,transparent 40%,rgba(248,249,251,.95))"></div>
        </div>
    </div>
</section>

@endsection

@section('related_cards')
    @foreach([
        ['Life Insurance Analysis', 'Long-term capital management and mortality risk — contrast with health\'s short-term cost dynamics.',   route('insurance.categories.life')],
        ['Property & Casualty',     'How P&C underwriting cycles and catastrophe risk differ structurally from health insurance.',            route('insurance.categories.property')],
        ['Regulatory Framework',    'ACA, MLR mandates, CMS risk adjustment, and state-level health insurance regulation.',                  route('insurance.fundamentals.regulatory')],
    ] as $r)
    <a href="{{ $r[2] }}" class="block bg-[#ffffff] p-7 rounded-xl border border-[#e5e7eb] hover:border-[#4f46e5] transition-colors">
        <h4 class="font-bold text-[#4f46e5] text-[15px] mb-2.5" style="font-family:'Playfair Display',serif">{{ $r[0] }}</h4>
        <p class="text-[#6b7280] text-[13.5px] leading-relaxed">{{ $r[1] }}</p>
    </a>
    @endforeach
@endsection
@section('cta_title','')