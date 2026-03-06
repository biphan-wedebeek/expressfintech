@extends('layouts.insurance-insights')

@section('title',        'Insurance Market Trends 2026 – FinReview')
@section('description',  'How rising premiums, climate repricing, and digital distribution are reshaping the global insurance market in 2026.')
@section('hero_img',     'https://images.pexels.com/photos/5302043/pexels-photo-5302043.jpeg?auto=compress&cs=tinysrgb&w=1600')
@section('breadcrumb',   'Insurance Market Trends')
@section('badge',        'Industry Insights')
@section('hero_title',   'Insurance Market Trends: What\'s Reshaping the Industry in 2026')
@section('hero_subtitle','From climate-driven premium spikes to the accelerating shift toward digital-first distribution — here is what is structurally changing across the global insurance market right now.')
@section('hero_cta',     'Read Full Analysis')
@section('card_title',   'Global Insurance Market 2025')

@section('hero_stats')
    @foreach([
        ['$7.5T', 'Global Premium Volume',   '↑ +6.8% YoY'],
        ['+18%',  'Avg. Rate Increase P&C',   '↑ Hard Market'],
        ['54%',   'Medicare Adv. Penetration','↑ Record High'],
        ['$100B+','ILS Outstanding',          '↑ +22% vs 2023'],
    ] as [$val, $lbl, $chg])
    <div class="pb-6" style="border-bottom:1px solid rgba(255,255,255,.08)">
        <div class="text-white font-bold mb-1" style="font-family:'Playfair Display',serif; font-size:32px; line-height:1">{{ $val }}</div>
        <div class="text-[13px] mb-1" style="color:rgba(255,255,255,.5)">{{ $lbl }}</div>
        <div class="text-[12px] font-semibold" style="color:#4ade80">{{ $chg }}</div>
    </div>
    @endforeach
@endsection

@section('page_content')
<section class="bg-white">
    <div class="max-w-screen-xl mx-auto py-12">
        <div class="grid gap-24 items-center" style="grid-template-columns:1fr 1fr">
            <div>
                <p class="text-[11px] font-bold uppercase tracking-[.14em] mb-4" style="color:#4f46e5">Our Approach</p>
                <h2 class="font-bold mb-5" style="font-family:'Playfair Display',serif; font-size:clamp(28px,3.5vw,42px); color:#0f1f35; line-height:1.2">
                    Three Forces Driving a Structural Reset
                </h2>
                <p class="text-[16px] leading-relaxed mb-4" style="color:#6b7280">
                    The global insurance market is undergoing its most significant structural shift in three decades. Climate risk repricing, persistent medical inflation, and the digitization of distribution are no longer cyclical headwinds — they are permanent features of the landscape.
                </p>
                <p class="text-[16px] leading-relaxed mb-8" style="color:#6b7280">
                    Carriers that correctly model these forces — and adjust their product, pricing, and capital strategies accordingly — will build durable franchises. Those that don't are already exiting markets.
                </p>
                <ul class="space-y-3.5 mt-2">
                    @foreach([
                        'Climate-driven P&C premium inflation — 18–42% in exposed states',
                        'Medical cost trend at 6.8%, outpacing general CPI by 350bps',
                        'Digital channels now originating >40% of new personal lines',
                        'ILS market doubling — capital markets absorbing peak catastrophe risk',
                    ] as $item)
                    <li class="flex items-start gap-3.5 text-[15px]" style="color:#374151">
                        <span class="shrink-0 w-[22px] h-[22px] rounded-full flex items-center justify-center mt-0.5"
                              style="background:rgba(79,70,229,.15); border:1.5px solid #4f46e5">
                            <svg width="11" height="11" viewBox="0 0 16 16" fill="none"><path d="M3 8l3.5 3.5L13 5" stroke="#4f46e5" stroke-width="1.8" stroke-linecap="round"/></svg>
                        </span>
                        {{ $item }}
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="relative">
                <img src="https://images.pexels.com/photos/5302087/pexels-photo-5302087.jpeg?auto=compress&cs=tinysrgb&w=1200"
                     alt="Insurance Market Analysis" class="w-full rounded-2xl block" style="box-shadow:0 20px 60px rgba(11,15,25,.12)">
                <div class="absolute rounded-2xl px-6 py-5 text-white" style="bottom:-20px;left:-20px;background:#1a3050;border:1px solid rgba(79,70,229,.2);box-shadow:0 20px 60px rgba(11,15,25,.12)">
                    <div class="font-bold mb-1" style="font-family:'Playfair Display',serif; font-size:34px; color:#4f46e5; line-height:1">$7.5T</div>
                    <div class="text-[13px]" style="color:rgba(255,255,255,.65)">Global Insurance Premium 2025</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-surface py-12">
    <div class="max-w-screen-xl mx-auto">
        <div class="text-center mb-6">
            <p class="text-[11px] font-bold uppercase tracking-[.14em] mb-3" style="color:#4f46e5">Focus Areas</p>
            <h2 class="font-bold mb-4" style="font-family:'Playfair Display',serif; font-size:clamp(26px,3.5vw,40px); color:#0f1f35">
                The Six Defining Trends of 2026
            </h2>
            <p class="text-[16px] max-w-[520px] mx-auto" style="color:#6b7280">
                Comprehensive analysis of the forces reshaping insurance markets across all major lines and geographies.
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-7">
            @foreach([
                ['🌪️','Climate Repricing','P&C carriers are exiting — not just repricing — in climate-exposed states. 12 carriers left FL/CA/LA since 2024, shifting risk to state-backed insurers of last resort.','Hard Market'],
                ['🏥','Medical Inflation','GLP-1 drugs, behavioral health, and rising provider pricing are driving medical trend to 6.8% — well above CPI. Carriers with superior network leverage are pulling ahead.','Health Sector'],
                ['📱','Digital Distribution','Digital channels now originate >40% of new personal lines policies. Embedded insurance (at point of sale) is growing fastest — 3× industry average.','InsurTech'],
                ['💊','Longevity Risk','Life insurers face growing longevity exposure as mortality improvements slow their Embedded Value accretion. Reinsurance of longevity risk is a growing structural solution.','Life Sector'],
                ['🔒','Cyber Insurance','After 3 years of underwriting losses, cyber has found pricing discipline. Combined ratios improved from 115% (2021) to 89% (2025). But systemic aggregation risk remains unresolved.','Specialty Lines'],
                ['🌏','Emerging Markets','Asia-Pacific insurance penetration rising from 3.8% to 5.2% of GDP by 2030. Middle-income consumers in India, Vietnam, and Indonesia are the fastest-growing customer cohort globally.','Global Growth'],
            ] as [$icon, $title, $body, $tag])
            <div class="bg-white rounded-2xl p-9 relative overflow-hidden transition-all duration-300 group hover:-translate-y-1.5"
                 style="border:1px solid transparent; box-shadow:0 4px 24px rgba(11,15,25,.06)"
                 onmouseover="this.style.borderColor='rgba(79,70,229,.2)';this.style.boxShadow='0 20px 60px rgba(11,15,25,.12)'"
                 onmouseout="this.style.borderColor='transparent';this.style.boxShadow='0 4px 24px rgba(11,15,25,.06)'">
                {{-- gold top line on hover --}}
                <div class="absolute top-0 left-0 right-0 h-[3px] opacity-0 group-hover:opacity-100 transition-opacity"
                     style="background:linear-gradient(90deg,#4f46e5,#818cf8)"></div>
                <div class="w-[52px] h-[52px] rounded-[14px] flex items-center justify-center text-[22px] mb-6"
                     style="background:linear-gradient(135deg,#0f1f35,#1a3050)">{{ $icon }}</div>
                <h3 class="font-bold mb-3" style="font-family:'Playfair Display',serif; font-size:20px; color:#0f1f35">{{ $title }}</h3>
                <p class="text-[15px] leading-relaxed mb-5" style="color:#6b7280">{{ $body }}</p>
                <span class="inline-block text-[11px] font-bold uppercase tracking-[.1em] px-3 py-1 rounded-full"
                      style="background:#eef2ff; color:#4f46e5; border:1px solid rgba(79,70,229,.2)">{{ $tag }}</span>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="bg-navy py-12">
    <div class="max-w-screen-xl mx-auto">
        <div class="grid gap-20 items-center" style="grid-template-columns:1fr 1fr">
            <div>
                <p class="text-[11px] font-bold uppercase tracking-[.14em] mb-4" style="color:#4f46e5">Deep Dive</p>
                <h2 class="familyfont font-bold text-white! mb-5" style="font-size:clamp(26px,3vw,38px); line-height:1.2">
                    Climate Risk: The Market Is Not Softening — It Is Exiting
                </h2>
                <p class="text-[16px] leading-relaxed mb-4" style="color:rgba(255,255,255,.6)">
                    The conventional insurance cycle narrative — hard market follows soft, rates rise and then fall — does not apply to climate-exposed personal property. This is not a pricing cycle; it is a structural withdrawal of private capacity from geographies where risk cannot be adequately priced under regulatory constraints.
                </p>
                <p class="text-[16px] leading-relaxed mb-10" style="color:rgba(255,255,255,.6)">
                    State-backed insurers of last resort are absorbing the displaced policies, growing 30–40% annually and raising systemic capital adequacy concerns that extend well beyond any single hurricane season.
                </p>
                <div class="grid grid-cols-2 gap-5">
                    @foreach([
                        ['12','Carrier Exits FL/CA/LA'],
                        ['+38%','Citizens FL Growth 2024'],
                        ['$135B','2024 Global Cat Losses'],
                        ['60%','Reinsurance Rate Rise'],
                    ] as [$v, $l])
                    <div class="rounded-xl px-5 py-5" style="background:#1a3050; border-left:3px solid #4f46e5">
                        <div class="font-bold mb-1" style="font-family:'Playfair Display',serif; font-size:26px; color:#0f1f35; color:#fff">{{ $v }}</div>
                        <div class="text-[12px]" style="color:rgba(255,255,255,.5)">{{ $l }}</div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="relative">
                <img src="https://images.pexels.com/photos/1739855/pexels-photo-1739855.jpeg?auto=compress&cs=tinysrgb&w=1200"
                     alt="Climate Risk" class="w-full rounded-2xl block" style="box-shadow:0 20px 60px rgba(0,0,0,.4)">
                <div class="absolute inset-0 rounded-2xl" style="background:linear-gradient(to top,rgba(11,15,25,.6) 0%,transparent 60%)"></div>
            </div>
        </div>
    </div>
</section>

<section class="bg-white py-12">
    <div class="max-w-screen-xl mx-auto">
        <div class="text-center mb-6">
            <p class="text-[11px] font-bold uppercase tracking-[.14em] mb-3" style="color:#4f46e5">Market Data</p>
            <h2 class="font-bold" style="font-family:'Playfair Display',serif; font-size:clamp(24px,3vw,36px); color:#0f1f35">
                Premium Growth by Line — Global 2025
            </h2>
        </div>
        <div class="rounded-2xl overflow-hidden" style="border:1px solid #e5e7eb">
            <div class="px-6 py-3.5" style="background:#f4f5f7; border-bottom:1px solid #e5e7eb">
                <span class="text-[11px] font-bold uppercase tracking-[.12em]" style="color:#4f46e5">Insurance Lines — Premium & Combined Ratio 2025</span>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-[14px]">
                    <thead style="background:#f9fafb; border-bottom:1px solid #e5e7eb">
                        <tr>
                            @foreach(['Line of Business','Global Premium','YoY Growth','Combined Ratio','Trend'] as $h)
                            <th class="px-6 py-3.5 text-[11px] font-bold uppercase tracking-wider text-left" style="color:#9ca3af">{{ $h }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @foreach([
                            ['Life & Health',       '$3.8T','+5.2%','91.4%','↑ Stable','green'],
                            ['Property (Personal)', '$820B', '+18.3%','112.4%','↑ Hard','red'],
                            ['Auto (Personal)',     '$580B', '+11.7%','104.2%','↑ Hardening','amber'],
                            ['Commercial P&C',      '$740B', '+8.4%','97.6%','→ Firm','amber'],
                            ['Reinsurance',         '$350B', '+14.1%','92.8%','↑ Hard','green'],
                            ['Specialty / Cyber',   '$180B', '+22.6%','89.4%','↓ Easing','green'],
                        ] as $r)
                        <tr class="transition-colors hover:bg-[#f9fafb]" style="border-bottom:1px solid #f3f4f6">
                            <td class="px-6 py-4 font-semibold" style="color:#0f1f35">{{ $r[0] }}</td>
                            <td class="px-6 py-4 font-bold" style="color:#4f46e5">{{ $r[1] }}</td>
                            <td class="px-6 py-4 font-semibold text-green-600">{{ $r[2] }}</td>
                            <td class="px-6 py-4 font-semibold {{ $r[5]==='red'?'text-red-500':($r[5]==='green'?'text-green-600':'text-amber-500') }}">{{ $r[3] }}</td>
                            <td class="px-6 py-4 font-semibold text-[13px] {{ $r[5]==='red'?'text-red-500':($r[5]==='green'?'text-green-600':'text-amber-500') }}">{{ $r[4] }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<section class="bg-surface py-12">
    <div class="max-w-screen-xl mx-auto">
        <div class="grid gap-20 items-center" style="grid-template-columns:1fr 1fr">
            <div class="relative">
                <img src="https://images.pexels.com/photos/3184287/pexels-photo-3184287.jpeg?auto=compress&cs=tinysrgb&w=1200"
                     alt="Digital Insurance" class="w-full rounded-2xl block" style="box-shadow:0 20px 60px rgba(11,15,25,.12)">
            </div>
            <div>
                <p class="text-[11px] font-bold uppercase tracking-[.14em] mb-4" style="color:#4f46e5">Distribution Shift</p>
                <h2 class="font-bold mb-5" style="font-family:'Playfair Display',serif; font-size:clamp(26px,3vw,38px); color:#0f1f35; line-height:1.2">
                    Digital Channels Now Originate >40% of New Policies
                </h2>
                <p class="text-[16px] leading-relaxed mb-4" style="color:#6b7280">
                    Insurance distribution is undergoing a structural shift. Independent agent networks — which dominated origination for 50+ years — are losing share to digital-direct, comparison platforms, and embedded insurance channels.
                </p>
                <p class="text-[16px] leading-relaxed mb-8" style="color:#6b7280">
                    Embedded insurance — policies sold at point of transaction (car purchase, travel booking, mortgage closing) — is growing at 3× the market average, with platform economics fundamentally changing the acquisition cost equation for carriers.
                </p>
                <div class="grid grid-cols-2 gap-5">
                    @foreach([
                        ['40%+','Digital Channel Share'],
                        ['3×','Embedded Growth Rate'],
                        ['$180','Digital CAC vs $680 Agent'],
                        ['78%','NPS: Digital vs Agent'],
                    ] as [$v,$l])
                    <div class="rounded-xl px-5 py-5" style="background:#ffffff; border-left:3px solid #4f46e5">
                        <div class="font-bold mb-1" style="font-family:'Playfair Display',serif; font-size:26px; color:#0f1f35">{{ $v }}</div>
                        <div class="text-[12px]" style="color:#6b7280">{{ $l }}</div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-white py-12">
    <div class="max-w-screen-xl mx-auto space-y-6">
        <div class="flex items-stretch rounded-2xl overflow-hidden" style="border:1px solid #e5e7eb; background:linear-gradient(135deg,#0f1f35,#1a3050)">
            <div class="hidden lg:block relative shrink-0" style="width:380px">
                <img src="https://images.pexels.com/photos/5711912/pexels-photo-5711912.jpeg?auto=compress&cs=tinysrgb&w=800"
                     alt="Insurance Planning" class="w-full h-full object-cover max-h-86">
                <div class="absolute inset-0" style="background:linear-gradient(to right,transparent 50%,#0f1f35)"></div>
            </div>
            <div class="flex-1 px-12 py-6 flex flex-col justify-center">
                <span class="text-[10px] font-black uppercase tracking-[.2em] mb-4 flex items-center gap-2" style="color:#4f46e5">
                    <span class="inline-block w-8 h-px" style="background:#4f46e5"></span>
                    Free Insurance Review
                </span>
                <h3 class="familyfont font-bold text-white! leading-tight mb-4" style="font-size:clamp(22px,2.5vw,30px)">
                    Is Your Insurance Portfolio<br>Keeping Pace with Market Changes?
                </h3>
                <p class="text-[14.5px] leading-relaxed mb-8 max-w-[700px]" style="color:rgba(255,255,255,.6)">
                    Our analysts benchmark your current coverage against post-hard-market pricing, identify gaps, and surface savings opportunities across home, auto, life, and commercial lines.
                </p>
                <div class="flex items-center gap-5 flex-wrap">
                    <a href="{{ route('consultation') }}"
                       class="inline-flex items-center gap-2.5 font-bold text-[14px] px-8 py-3.5 rounded-full transition-all hover:-translate-y-0.5"
                       style="background:#4f46e5; color:#fff">
                        Get Free Review
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </a>
                    <a href="{{ route('reviews') }}" class="text-[14px] font-medium transition-colors" style="color:rgba(255,255,255,.5)"
                       onmouseover="this.style.color='#4f46e5'" onmouseout="this.style.color='rgba(255,255,255,.5)'">
                        Browse all reviews →
                    </a>
                </div>
            </div>
        </div>

        {{-- Banner 2 --}}
        <div class="flex items-stretch rounded-2xl overflow-hidden" style="border:1px solid #e5e7eb; background:#f4f5f7">
            <div class="flex-1 px-12 py-12 flex flex-col justify-center">
                <span class="text-[10px] font-black uppercase tracking-[.2em] mb-4 flex items-center gap-2" style="color:#4f46e5">
                    <span class="inline-block w-8 h-px" style="background:#4f46e5"></span>
                    2026 Market Report
                </span>
                <h3 class="font-bold leading-tight mb-4" style="font-family:'Playfair Display',serif; font-size:clamp(22px,2.5vw,30px); color:#0f1f35">
                    Global Insurance Market<br>Outlook Report 2026
                </h3>
                <p class="text-[14.5px] leading-relaxed mb-8 max-w-[500px]" style="color:#6b7280">
                    28 markets, 6 major lines, 5-year premium forecast. Our flagship annual research report covers climate repricing, digital transformation, ILS growth, and emerging market expansion — in one comprehensive document.
                </p>
                <div class="flex items-center gap-5 flex-wrap">
                    <a href="{{ route('insurance.insights.reports') }}"
                       class="inline-flex items-center gap-2.5 font-bold text-[14px] px-8 py-3.5 rounded-full transition-all hover:-translate-y-0.5"
                       style="border:2px solid #4f46e5; color:#4f46e5; background:transparent"
                       onmouseover="this.style.background='#4f46e5';this.style.color='#0f1f35'"
                       onmouseout="this.style.background='transparent';this.style.color='#4f46e5'">
                        Download Report
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                    </a>
                    <a href="{{ route('consultation') }}" class="text-[14px] font-medium transition-colors" style="color:#6b7280"
                       onmouseover="this.style.color='#4f46e5'" onmouseout="this.style.color='#6b7280'">
                        Speak to an analyst →
                    </a>
                </div>
            </div>
            <div class="hidden lg:block relative shrink-0" style="width:380px">
                <img src="https://images.pexels.com/photos/590022/pexels-photo-590022.jpeg?auto=compress&cs=tinysrgb&w=800"
                     alt="Insurance Research" class="w-full h-full object-cover opacity-80">
                <div class="absolute inset-0" style="background:linear-gradient(to left,transparent 50%,#f4f5f7)"></div>
            </div>
        </div>

    </div>
</section>

@endsection

@section('related_cards')
    @foreach([
        ['InsurTech Innovations',    'How technology is restructuring insurance distribution, underwriting, and claims.',  route('insurance.insights.insurtech')],
        ['Global Insurance Reports', 'Deep-dive market reports across 28 countries and 6 major insurance lines.',          route('insurance.insights.reports')],
        ['Property & Casualty',      'The P&C hard market in detail — combined ratios, carrier exits, and climate risk.',  route('insurance.categories.property')],
    ] as [$t,$d,$h])
    <a href="{{ $h }}" class="block bg-white p-7 rounded-xl transition-colors group"
       style="border:1px solid #e5e7eb; box-shadow:0 4px 24px rgba(11,15,25,.04)"
       onmouseover="this.style.borderColor='rgba(79,70,229,.4)'" onmouseout="this.style.borderColor='#e5e7eb'">
        <h4 class="font-bold mb-2.5 group-hover:text-[#4f46e5] transition-colors" style="font-family:'Playfair Display',serif; font-size:15px; color:#0f1f35">{{ $t }}</h4>
        <p style="color:#6b7280; font-size:13.5px; line-height:1.7">{{ $d }}</p>
    </a>
    @endforeach
@endsection
@section('cta_title','')