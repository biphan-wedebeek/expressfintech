@extends('layouts.insurance-insights')

@section('title', 'Global Insurance Reports 2026 – FinReview')
@section('description', 'Comprehensive global insurance market research — 28 markets, 6 lines, 5-year forecasts. Data-driven analysis for investors, carriers, and advisors.')
@section('hero_img', 'https://images.pexels.com/photos/1098460/pexels-photo-1098460.jpeg?auto=compress&cs=tinysrgb&w=1600')
@section('breadcrumb', 'Global Insurance Reports')
@section('badge', 'Industry Insights')
@section('hero_title', 'Global Insurance Reports: 28 Markets, Six Lines, One Platform')
@section('hero_subtitle','Quantitative market intelligence across the full global insurance landscape — premium volumes, combined ratios, penetration rates, and 5-year growth forecasts updated annually.')
@section('hero_cta', 'Browse All Reports')
@section('card_title', 'Report Library — 2026')

@section('hero_stats')
@foreach([
['28', 'Markets Covered', '↑ +4 New 2026'],
['6', 'Insurance Lines', '↑ Full Coverage'],
['Annual','Publication Cycle', '↑ + Quarterly Updates'],
['2030', 'Forecast Horizon', '↑ 5-Year View'],
] as [$val, $lbl, $chg])
<div class="pb-6" style="border-bottom:1px solid rgba(255,255,255,.08)">
    <div class="text-white font-bold mb-1" style="font-family:'Playfair Display',serif; font-size:32px; line-height:1">{{ $val }}</div>
    <div class="text-[13px] mb-1" style="color:rgba(255,255,255,.5)">{{ $lbl }}</div>
    <div class="text-[12px] font-semibold" style="color:#4ade80">{{ $chg }}</div>
</div>
@endforeach
@endsection

@section('page_content')

<section class="bg-white py-12">
    <div class="max-w-screen-xl mx-auto">
        <div class="flex items-stretch rounded-2xl overflow-hidden mb-14" style="border:1px solid #e5e7eb; background:linear-gradient(135deg,#0f1f35,#1a3050); min-height:360px">
            <div class="flex-1 px-14 py-6 flex flex-col justify-center">
                <span class="inline-flex items-center gap-2 text-[10px] font-black uppercase tracking-[.2em] px-3 py-1.5 rounded-full mb-6 w-fit"
                    style="background:rgba(79,70,229,.2);border:1px solid rgba(79,70,229,.4);color:#818cf8">
                    ★ Flagship Report 2026
                </span>
                <h2 class="familyfont font-bold text-white! leading-tight mb-5" style="font-size:clamp(26px,3.5vw,44px)">
                    Global Insurance Market<br>Outlook 2026
                </h2>
                <p class="text-[16px] leading-relaxed mb-8 max-w-[560px]" style="color:rgba(255,255,255,.65)">
                    Our most comprehensive annual publication. 28 country markets, 6 major lines, 5-year premium growth forecasts, combined ratio benchmarks, regulatory risk assessments, and the top 10 structural themes driving 2026–2030 insurance market evolution.
                </p>
            </div>
            <div class="hidden lg:block relative shrink-0" style="width:420px">
                <img src="https://images.pexels.com/photos/590022/pexels-photo-590022.jpeg?auto=compress&cs=tinysrgb&w=900"
                    alt="Global Insurance Report" class="w-full h-full object-cover opacity-60">
                <div class="absolute inset-0" style="background:linear-gradient(to left,transparent 40%,#1a3050)"></div>

                <div class="absolute bottom-8 right-8 text-right">
                    <div class="font-bold text-white mb-1" style="font-family:'Playfair Display',serif; font-size:40px; color:#4f46e5">240+</div>
                    <div class="text-[13px]" style="color:rgba(255,255,255,.6)">Pages of analysis</div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-5">
            @foreach([
            ['📍','28 Markets','North America, Europe, Asia-Pacific, LatAm, MEA'],
            ['📊','6 Lines','Life, Health, P&C, Auto, Reinsurance, Specialty'],
            ['📅','5-Year Forecast','2026–2030 premium growth by market and line'],
            ['🔄','Quarterly Updates','Interim data refreshes at Q1, Q2, Q3 intervals'],
            ] as [$icon,$title,$desc])
            <div class="rounded-xl p-6 text-center" style="background:#f4f5f7; border:1px solid #e5e7eb">
                <div class="text-2xl mb-3">{{ $icon }}</div>
                <div class="font-bold mb-1.5 text-[15px]" style="color:#0f1f35">{{ $title }}</div>
                <div class="text-[13px]" style="color:#6b7280">{{ $desc }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>


<section class="bg-surface py-12">
    <div class="max-w-screen-xl mx-auto">
        <div class="text-center mb-14">
            <p class="text-[11px] font-bold uppercase tracking-[.14em] mb-3" style="color:#4f46e5">Report Library</p>
            <h2 class="font-bold mb-4 familyfont" style="font-size:clamp(26px,3.5vw,40px); color:#0f1f35">
                Specialist Research by Line
            </h2>
            <p class="text-[16px] max-w-[500px] mx-auto" style="color:#6b7280">
                Deep-dive reports for each major insurance segment, updated annually with interim quarterly data releases.
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-7">
            @foreach([
            ['📈','P&C Market Hard Cycle Report 2026','Combined ratio trajectory, reinsurance capacity, carrier market exits, and forward pricing outlook across personal and commercial property lines.', 'Property & Casualty', 'NEW'],
            ['🏥','Global Health Insurance Systems 2026','Medical cost inflation drivers, MLR performance, Medicare Advantage dynamics, and emerging market health coverage expansion.', 'Health Insurance', 'NEW'],
            ['🌍','Life Insurance Embedded Value 2026','EV/VNB analysis across 18 carriers in 12 markets. Yield curve sensitivity, longevity risk, and digital distribution impact on new business margins.','Life Insurance', 'UPDATED'],
            ['🚗','Auto Insurance Disruption 2026','EV repair cost data, telematics UBI penetration by carrier, and 5-year autonomous vehicle liability scenario modelling.', 'Auto Insurance', 'NEW'],
            ['🔗','ILS & Catastrophe Bond Market 2026','$100B+ ILS market structure, cat bond pricing, investor base analysis, and forward capacity outlook for 2027 renewals.', 'Reinsurance / ILS', 'UPDATED'],
            ['💻','InsurTech Investment Landscape 2026','VC funding flows, valuation multiples, technology adoption curves, and M&A activity across 150+ InsurTech companies.', 'InsurTech', 'NEW'],
            ] as [$icon,$title,$body,$tag,$badge])
            <div class="bg-white rounded-2xl overflow-hidden transition-all duration-300 group hover:-translate-y-1.5"
                style="border:1px solid #e5e7eb; box-shadow:0 4px 24px rgba(11,15,25,.06)"
                onmouseover="this.style.borderColor='rgba(79,70,229,.3)';this.style.boxShadow='0 20px 60px rgba(11,15,25,.1)'"
                onmouseout="this.style.borderColor='#e5e7eb';this.style.boxShadow='0 4px 24px rgba(11,15,25,.06)'">
                <div class="h-[3px] w-full" style="background:linear-gradient(90deg,#4f46e5,#818cf8)"></div>
                <div class="p-8">
                    <div class="flex items-start justify-between mb-5">
                        <div class="w-[52px] h-[52px] rounded-[14px] flex items-center justify-center text-[22px]"
                            style="background:linear-gradient(135deg,#0f1f35,#1a3050)">{{ $icon }}</div>
                        <span class="text-[10px] font-bold uppercase tracking-[.1em] px-2.5 py-1 rounded-full"
                            style="background:{{ $badge==='NEW'?'#ecfdf5':'#fef3c7' }};color:{{ $badge==='NEW'?'#065f46':'#92400e' }}">
                            {{ $badge }}
                        </span>
                    </div>
                    <h3 class="font-bold mb-3" style="font-family:'Playfair Display',serif; font-size:18px; color:#0f1f35; line-height:1.3">{{ $title }}</h3>
                    <p class="text-[14px] leading-relaxed mb-5" style="color:#6b7280">{{ $body }}</p>
                    <div class="flex items-center justify-between">
                        <span class="inline-block text-[11px] font-bold uppercase tracking-[.1em] px-3 py-1 rounded-full"
                            style="background:#eef2ff;color:#4f46e5;border:1px solid rgba(79,70,229,.2)">{{ $tag }}</span>
                        <a href="{{ route('consultation') }}"
                            class="inline-flex items-center gap-1.5 text-[13px] font-semibold transition-all group-hover:gap-2.5"
                            style="color:#4f46e5">
                            Download
                            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4" />
                                <polyline points="7 10 12 15 17 10" />
                                <line x1="12" y1="15" x2="12" y2="3" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="bg-navy py-12">
    <div class="max-w-screen-xl mx-auto">
        <div class="text-center mb-12">
            <p class="text-[11px] font-bold uppercase tracking-[.14em] mb-3" style="color:#4f46e5">Regional Data</p>
            <h2 class="familyfont font-bold text-white! mb-4" style="font-size:clamp(24px,3vw,36px)">
                Insurance Penetration by Region — 2025
            </h2>
        </div>
        <div class="rounded-2xl overflow-hidden" style="border:1px solid rgba(255,255,255,.08)">
            <div class="px-6 py-3.5" style="background:rgba(255,255,255,.04); border-bottom:1px solid rgba(255,255,255,.08)">
                <span class="text-[11px] font-bold uppercase tracking-[.12em]" style="color:#4f46e5">Global Insurance Penetration & Premium — 2025</span>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-[14px]">
                    <thead style="background:rgba(255,255,255,.04); border-bottom:1px solid rgba(255,255,255,.08)">
                        <tr>
                            @foreach(['Region','Total Premium','Penetration (% GDP)','YoY Growth','2030 Forecast'] as $h)
                            <th class="px-6 py-3.5 text-left text-[11px] font-bold uppercase tracking-wider" style="color:#4b5563">{{ $h }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @foreach([
                        ['North America', '$2.8T','11.8%','+6.2%','$3.9T'],
                        ['Europe', '$1.9T','8.4%', '+4.8%','$2.5T'],
                        ['Asia-Pacific', '$1.8T','5.6%', '+9.4%','$3.2T'],
                        ['Latin America', '$0.4T','3.2%', '+8.1%','$0.7T'],
                        ['Middle East/Africa','$0.3T','2.1%','+11.3%','$0.6T'],
                        ['Global Total', '$7.5T','7.3%', '+6.8%','$10.9T'],
                        ] as $r)
                        <tr class="hover:bg-white/[.04] transition-colors">
                            @php $isTotal = $r[0] === 'Global Total'; @endphp
                            <td class="px-6 py-4 {{ $isTotal ? 'font-bold' : 'font-semibold' }}"
                                style="color:{{ $isTotal ? '#4f46e5' : '#fff' }}">{{ $r[0] }}</td>
                            <td class="px-6 py-4 font-bold" style="color:#4f46e5">{{ $r[1] }}</td>
                            <td class="px-6 py-4" style="color:rgba(255,255,255,.7)">{{ $r[2] }}</td>
                            <td class="px-6 py-4 font-semibold text-green-400">{{ $r[3] }}</td>
                            <td class="px-6 py-4 font-semibold" style="color:rgba(255,255,255,.6)">{{ $r[4] }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<section class="bg-white py-12">
    <div class="max-w-screen-xl mx-auto">
        <div class="grid gap-20 items-center" style="grid-template-columns:1fr 1fr">
            <div>
                <p class="text-[11px] font-bold uppercase tracking-[.14em] mb-4" style="color:#4f46e5">Who Uses Our Reports</p>
                <h2 class="font-bold mb-6 familyfont" style="font-size:clamp(26px,3vw,38px); line-height:1.2">
                    Research Designed for Professionals, Accessible to Everyone
                </h2>
                <p class="text-[16px] leading-relaxed mb-6" style="color:#6b7280">
                    Our global insurance research is used by investors evaluating carrier stocks, advisors benchmarking client portfolios, regulators tracking market health, and carriers assessing competitive positioning.
                </p>
                <div class="space-y-4 mt-4">
                    @foreach([
                    ['🏦','Institutional Investors','Carrier financial analysis, combined ratio forecasts, and capital adequacy benchmarking.'],
                    ['👤','Financial Advisors','Client coverage review data, market pricing trends, and product comparison frameworks.'],
                    ['🏢','Carriers & MGAs','Competitive benchmarking, line profitability analysis, and market entry/exit intelligence.'],
                    ['📚','Researchers & Academics','Historical data series, penetration rates, and methodology documentation.'],
                    ] as [$icon,$role,$desc])
                    <div class="flex items-start gap-4 p-5 rounded-xl" style="background:#f4f5f7; border:1px solid #e5e7eb">
                        <span class="text-xl shrink-0 mt-0.5">{{ $icon }}</span>
                        <div>
                            <div class="font-semibold mb-1 text-[15px]" style="color:#0f1f35">{{ $role }}</div>
                            <div class="text-[13.5px]" style="color:#6b7280">{{ $desc }}</div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="relative">
                <div class="absolute rounded-2xl" style="inset:-14px -14px auto auto; width:45%; aspect-ratio:1; border:2px solid rgba(79,70,229,.3); border-radius:16px; z-index:-1"></div>
                <img src="https://images.pexels.com/photos/6801648/pexels-photo-6801648.jpeg?auto=compress&cs=tinysrgb&w=1200"
                    alt="Research Users" class="w-full rounded-2xl block" style="box-shadow:0 20px 60px rgba(11,15,25,.12)">
            </div>
        </div>
    </div>
</section>

<section class="bg-surface py-12">
    <div class="max-w-screen-xl mx-auto space-y-6">
        <div class="flex items-stretch rounded-2xl overflow-hidden" style="border:1px solid #e5e7eb; background:linear-gradient(135deg,#0f1f35,#1a3050)">
            <div class="hidden lg:block relative shrink-0" style="width:380px">
                <img src="https://images.pexels.com/photos/1181406/pexels-photo-1181406.jpeg?auto=compress&cs=tinysrgb&w=800"
                    alt="Insurance Analysis" class="w-full h-full object-cover">
                <div class="absolute inset-0" style="background:linear-gradient(to right,transparent 50%,#0f1f35)"></div>
            </div>
            <div class="flex-1 px-12 py-6 flex flex-col justify-center">
                <span class="text-[10px] font-black uppercase tracking-[.2em] mb-4 flex items-center gap-2" style="color:#4f46e5">
                    <span class="inline-block w-8 h-px" style="background:#4f46e5"></span>
                    Free Report Access
                </span>
                <h3 class="familyfont font-bold text-white! leading-tight mb-4" style="font-size:clamp(22px,2.5vw,30px)">
                    Get the Global Insurance<br>Outlook 2026 — Free
                </h3>
                <p class="text-[14.5px] leading-relaxed mb-8 max-w-[600px]" style="color:rgba(255,255,255,.6)">
                    240 pages. 28 markets. Free to qualified professionals. Register now and receive our full 2026 flagship report plus quarterly updates through December 2026.
                </p>
                <div class="flex items-center gap-5 flex-wrap">
                    <a href="{{ route('consultation') }}"
                        class="inline-flex items-center gap-2.5 font-bold text-[14px] px-8 py-3.5 rounded-full transition-all hover:-translate-y-0.5"
                        style="background:#4f46e5; color:#fff">
                        Register & Download
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4" />
                            <polyline points="7 10 12 15 17 10" />
                            <line x1="12" y1="15" x2="12" y2="3" />
                        </svg>
                    </a>
                    <a href="{{ route('reviews') }}" class="text-[14px] font-medium" style="color:rgba(255,255,255,.5)"
                        onmouseover="this.style.color='#4f46e5'" onmouseout="this.style.color='rgba(255,255,255,.5)'">
                        Browse all reviews →
                    </a>
                </div>
            </div>
        </div>

        <div class="bg-white flex items-stretch rounded-2xl overflow-hidden" style="border:1px solid #e5e7eb;">
            <div class="flex-1 px-12 py-6 flex flex-col justify-center">
                <span class="text-[10px] font-black uppercase tracking-[.2em] mb-4 flex items-center gap-2" style="color:#4f46e5">
                    <span class="inline-block w-8 h-px" style="background:#4f46e5"></span>
                    Expert Consultation
                </span>
                <h3 class="font-bold leading-tight mb-4" style="font-family:'Playfair Display',serif; font-size:clamp(22px,2.5vw,30px); color:#0f1f35">
                    Need a Customized Insurance<br>Market Analysis?
                </h3>
                <p class="text-[14.5px] leading-relaxed mb-8 max-w-[600px]" style="color:#6b7280">
                    Our research team produces bespoke market analyses for institutional clients — specific geographies, lines of business, or competitive benchmark reports. Speak with an analyst about your requirements.
                </p>
                <div class="flex items-center gap-5 flex-wrap">
                    <a href="{{ route('consultation') }}"
                        class="inline-flex items-center gap-2.5 font-bold text-[14px] px-8 py-3.5 rounded-full transition-all hover:-translate-y-0.5"
                        style="border:2px solid #4f46e5; color:#4f46e5"
                        onmouseover="this.style.background='#4f46e5';this.style.color='#0f1f35'"
                        onmouseout="this.style.background='transparent';this.style.color='#4f46e5'">
                        Book a Consultation
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg>
                    </a>
                    <a href="{{ route('insurance.insights.trends') }}" class="text-[14px] font-medium" style="color:#6b7280"
                        onmouseover="this.style.color='#4f46e5'" onmouseout="this.style.color='#6b7280'">
                        View Market Trends →
                    </a>
                </div>
            </div>
            <div class="hidden lg:block relative shrink-0" style="width:380px">
                <img src="https://images.pexels.com/photos/3184465/pexels-photo-3184465.jpeg?auto=compress&cs=tinysrgb&w=800"
                    alt="Custom Research" class="w-full h-full object-cover opacity-80">
                <div class="absolute inset-0" style="background:linear-gradient(to left,transparent 50%,#ffffff)"></div>
            </div>
        </div>

    </div>
</section>

@endsection

@section('related_cards')
@foreach([
['Insurance Market Trends', 'The six structural forces reshaping the $7.5T global insurance market in 2026.', route('insurance.insights.trends')],
['InsurTech Innovations', 'How AI underwriting, embedded insurance, and parametric products are disrupting carriers.', route('insurance.insights.insurtech')],
['Reinsurance Structure', 'ILS market analysis — $100B+ in cat bonds and the reinsurers behind the global market.', route('insurance.categories.reinsurance')],
] as [$t,$d,$h])
<a href="{{ $h }}" class="block bg-white p-7 rounded-xl transition-all group"
    style="border:1px solid #e5e7eb;box-shadow:0 4px 24px rgba(11,15,25,.04)"
    onmouseover="this.style.borderColor='rgba(79,70,229,.4)'" onmouseout="this.style.borderColor='#e5e7eb'">
    <h4 class="font-bold mb-2.5 group-hover:text-[#4f46e5] transition-colors" style="font-family:'Playfair Display',serif; font-size:15px; color:#0f1f35">{{ $t }}</h4>
    <p style="color:#6b7280; font-size:13.5px; line-height:1.7">{{ $d }}</p>
</a>
@endforeach
@endsection
@section('cta_title','')