@extends('layouts.insurance-insights')

@section('title', 'InsurTech Innovations 2026 – FinReview')
@section('description', 'How AI underwriting, telematics, embedded insurance, and parametric products are disrupting the traditional insurance value chain.')
@section('hero_img', 'https://ix-marketing.imgix.net/footer-image.png?auto=format,compress&w=1946')
@section('breadcrumb', 'InsurTech Innovations')
@section('badge', 'Industry Insights')
@section('hero_title', 'InsurTech Innovations: AI, Embedded Insurance & the New Value Chain')
@section('hero_subtitle','From AI-powered underwriting to real-time telematics and parametric products — InsurTech is not nibbling at the edges of insurance; it is dismantling and rebuilding the entire value chain.')
@section('hero_cta', 'Explore InsurTech Analysis')
@section('card_title', 'InsurTech Market 2025')

@section('hero_stats')
@foreach([
['$14.8B','InsurTech VC Funding 2025', '↑ +34% YoY'],
['40%+', 'Digital Origination Share', '↑ Record High'],
['3×', 'Embedded Insurance Growth', '↑ vs Market'],
['62%', 'Progressive UBI Penetration','↑ Industry Lead'],
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
        <div class="grid gap-14 items-center" style="grid-template-columns:1fr 1fr"> {{-- gap-24→gap-14 --}}
            <div>
                <p class="text-[11px] font-bold uppercase tracking-[.14em] mb-4" style="color:#4f46e5">The Disruption Thesis</p>
                <h2 class="font-bold mb-5" style="font-family:'Playfair Display',serif; font-size:clamp(28px,3.5vw,42px); color:#0f1f35; line-height:1.2">
                    The Insurance Value Chain Is Being Rebuilt from Scratch
                </h2>
                <p class="text-[16px] leading-relaxed mb-4" style="color:#6b7280">
                    InsurTech disruption is not about building better apps for existing products. The most consequential innovations are attacking the fundamental economics of insurance: risk selection, pricing accuracy, distribution cost, and claims efficiency.
                </p>
                <p class="text-[16px] leading-relaxed mb-8" style="color:#6b7280">
                    AI underwriting models that ingest 50,000+ variables per risk are replacing actuarial tables built on age and address. Telematics turns every driver into their own risk class of one. Parametric products eliminate loss adjustment entirely.
                </p>
                <ul class="space-y-3.5">
                    @foreach([
                    'AI pricing models reducing adverse selection by 15–25%',
                    'Parametric products achieving sub-24hr claims settlement',
                    'Embedded insurance CAC of $180 vs $680 for agent channel',
                    'Blockchain-based smart contracts automating claims triggers',
                    ] as $item)
                    <li class="flex items-start gap-3.5 text-[15px]" style="color:#374151">
                        <span class="shrink-0 w-[22px] h-[22px] rounded-full flex items-center justify-center mt-0.5"
                            style="background:rgba(79,70,229,.15); border:1.5px solid #4f46e5">
                            <svg width="11" height="11" viewBox="0 0 16 16" fill="none">
                                <path d="M3 8l3.5 3.5L13 5" stroke="#4f46e5" stroke-width="1.8" stroke-linecap="round" />
                            </svg>
                        </span>
                        {{ $item }}
                    </li>
                    @endforeach
                </ul>
            </div>

            {{-- CHỈ SỬA PHẦN NÀY --}}
            <div class="relative">
                <div class="overflow-hidden rounded-2xl" style="max-height:480px"> {{-- wrapper giới hạn chiều cao --}}
                    <img src="https://images.pexels.com/photos/3861964/pexels-photo-3861964.jpeg?auto=compress&cs=tinysrgb&w=1200"
                        alt="InsurTech Innovation"
                        class="w-full h-full object-cover object-center block" {{-- object-cover tự crop --}}
                        style="box-shadow:0 20px 60px rgba(11,15,25,.12)">
                </div>
                <div class="absolute rounded-2xl px-6 py-5 text-white" style="bottom:-20px;left:-20px;background:#1a3050;border:1px solid rgba(79,70,229,.2);box-shadow:0 20px 60px rgba(11,15,25,.12)">
                    <div class="font-bold mb-1" style="font-family:'Playfair Display',serif; font-size:34px; color:#4f46e5; line-height:1">$14.8B</div>
                    <div class="text-[13px]" style="color:rgba(255,255,255,.65)">InsurTech VC Funding 2025</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-surface py-12">
    <div class="max-w-screen-xl mx-auto">
        <div class="text-center mb-6">
            <p class="text-[11px] font-bold uppercase tracking-[.14em] mb-3" style="color:#4f46e5">Innovation Areas</p>
            <h2 class="font-bold mb-4" style="font-family:'Playfair Display',serif; font-size:clamp(26px,3.5vw,40px); color:#0f1f35">
                Six InsurTech Vectors Reshaping the Industry
            </h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-7">
            @foreach([
            ['🤖','AI Underwriting','Machine learning models ingesting satellite imagery, IoT sensor data, social signals, and telematics produce risk assessments with 15–25% lower adverse selection than traditional actuarial methods.','Underwriting'],
            ['📡','Telematics / UBI','Real-time driving behavior data enables per-driver pricing. Progressive now runs >62% of new personal auto through Snapshot. Best drivers save 30–40%; worst pay true-risk rates.','Auto / IoT'],
            ['🔗','Embedded Insurance','Insurance sold at point of transaction — car purchase, travel booking, mortgage closing. 3× market growth rate. Acquisition cost $180 vs $680 agent channel.','Distribution'],
            ['⚡','Parametric Products','Policies that pay automatically when a defined parameter is triggered (wind speed, earthquake magnitude, rainfall level). Claims settled in hours, not months.','Claims Tech'],
            ['🧠','AI Claims','Computer vision and NLP processing claims documents, images, and medical records to auto-approve routine claims. Lemonade AI Jim processes certain claims in 3 seconds.','Claims Tech'],
            ['🌐','Blockchain / DeFi','Smart contract-based insurance policies with automatic payout execution. Nexus Mutual and Etherisc pioneering decentralized risk pools for parametric and crypto-native products.','DeFi / Web3'],
            ] as [$icon,$title,$body,$tag])
            <div class="bg-white rounded-2xl p-9 relative overflow-hidden transition-all duration-300 group hover:-translate-y-1.5"
                style="border:1px solid transparent;box-shadow:0 4px 24px rgba(11,15,25,.06)"
                onmouseover="this.style.borderColor='rgba(79,70,229,.2)';this.style.boxShadow='0 20px 60px rgba(11,15,25,.12)'"
                onmouseout="this.style.borderColor='transparent';this.style.boxShadow='0 4px 24px rgba(11,15,25,.06)'">
                <div class="absolute top-0 left-0 right-0 h-[3px] opacity-0 group-hover:opacity-100 transition-opacity"
                    style="background:linear-gradient(90deg,#4f46e5,#818cf8)"></div>
                <div class="w-[52px] h-[52px] rounded-[14px] flex items-center justify-center text-[22px] mb-6"
                    style="background:linear-gradient(135deg,#0f1f35,#1a3050)">{{ $icon }}</div>
                <h3 class="font-bold mb-3" style="font-family:'Playfair Display',serif; font-size:20px; color:#0f1f35">{{ $title }}</h3>
                <p class="text-[15px] leading-relaxed mb-5" style="color:#6b7280">{{ $body }}</p>
                <span class="inline-block text-[11px] font-bold uppercase tracking-[.1em] px-3 py-1 rounded-full"
                    style="background:#eef2ff;color:#4f46e5;border:1px solid rgba(79,70,229,.2)">{{ $tag }}</span>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="bg-navy py-12">
    <div class="max-w-screen-xl mx-auto">
        <div class="grid gap-20 items-center" style="grid-template-columns:1fr 1fr">
            <div class="relative">
                <img src="https://images.pexels.com/photos/8386434/pexels-photo-8386434.jpeg?auto=compress&cs=tinysrgb&w=1200"
                    alt="AI Underwriting" class="w-full rounded-2xl block" style="box-shadow:0 20px 60px rgba(0,0,0,.4)">
                <div class="absolute inset-0 rounded-2xl" style="background:linear-gradient(to top,rgba(11,15,25,.5) 0%,transparent 60%)"></div>
            </div>
            <div>
                <p class="text-[11px] font-bold uppercase tracking-[.14em] mb-4" style="color:#4f46e5">Deep Dive: AI Underwriting</p>
                <h2 class="familyfont font-bold text-white! mb-5" style="font-size:clamp(26px,3vw,38px); line-height:1.2">
                    50,000+ Variables vs. 40 Traditional Rating Factors
                </h2>
                <p class="text-[16px] leading-relaxed mb-4" style="color:rgba(255,255,255,.6)">
                    Traditional actuarial pricing uses 30–50 rating factors — age, location, credit score, prior claims. Modern ML underwriting models ingest 50,000+ variables per risk, including satellite imagery of property conditions, IoT sensor data, real-time behavioral signals, and natural language processing of application responses.
                </p>
                <p class="text-[16px] leading-relaxed mb-10" style="color:rgba(255,255,255,.6)">
                    The result: 15–25% reduction in adverse selection on targeted risks, tighter loss ratio variance, and the ability to profitably insure risks that traditional models would either decline or massively overprice.
                </p>
                <div class="grid grid-cols-2 gap-5">
                    @foreach([
                    ['50K+','Variables per Risk'],
                    ['-20%','Adverse Selection'],
                    ['3sec','Lemonade Claim AI'],
                    ['$180','Digital CAC'],
                    ] as [$v,$l])
                    <div class="rounded-xl px-5 py-5" style="background:#1a3050;border-left:3px solid #4f46e5">
                        <div class="font-bold text-white mb-1" style="font-family:'Playfair Display',serif; font-size:26px; line-height:1">{{ $v }}</div>
                        <div class="text-[12px]" style="color:rgba(255,255,255,.5)">{{ $l }}</div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-white py-12">
    <div class="max-w-screen-xl mx-auto">
        <div class="text-center mb-12">
            <p class="text-[11px] font-bold uppercase tracking-[.14em] mb-3" style="color:#4f46e5">Company Profiles</p>
            <h2 class="font-bold" style="font-family:'Playfair Display',serif; font-size:clamp(24px,3vw,36px); color:#0f1f35">
                Notable InsurTech Companies — 2025
            </h2>
        </div>
        <div class="rounded-2xl overflow-hidden" style="border:1px solid #e5e7eb">
            <div class="px-6 py-3.5" style="background:#f4f5f7; border-bottom:1px solid #e5e7eb">
                <span class="text-[11px] font-bold uppercase tracking-[.12em]" style="color:#4f46e5">InsurTech Landscape — Selected Companies 2025</span>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-[14px]">
                    <thead style="background:#f9fafb; border-bottom:1px solid #e5e7eb">
                        <tr>
                            @foreach(['Company','Segment','Innovation Focus','Valuation','Status'] as $h)
                            <th class="px-6 py-3.5 text-left text-[11px] font-bold uppercase tracking-wider" style="color:#9ca3af">{{ $h }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @foreach([
                        ['Lemonade', 'Home/Renters','AI claims (Jim), behavioral economics','$1.6B', 'Public','amber'],
                        ['Root', 'Auto', 'Telematics-first UBI pricing', '$0.9B', 'Public','amber'],
                        ['Next Insurance','Commercial', 'SMB digital-first underwriting', '$2.7B', 'Private','green'],
                        ['Kin', 'Home', 'Climate-risk property, direct-to-consumer','$1.0B','Private','green'],
                        ['Pie Insurance','Workers Comp','API-driven SMB workers comp', '$1.3B', 'Private','green'],
                        ['Nexus Mutual', 'DeFi/Crypto', 'Blockchain risk pools, smart contracts','$0.4B','Decentralized','amber'],
                        ] as $r)
                        <tr class="transition-colors hover:bg-[#f9fafb]" style="border-bottom:1px solid #f3f4f6">
                            <td class="px-6 py-4 font-semibold" style="color:#0f1f35">{{ $r[0] }}</td>
                            <td class="px-6 py-4 text-[13px]" style="color:#6b7280">{{ $r[1] }}</td>
                            <td class="px-6 py-4 text-[13px]" style="color:#374151">{{ $r[2] }}</td>
                            <td class="px-6 py-4 font-bold" style="color:#4f46e5">{{ $r[3] }}</td>
                            <td class="px-6 py-4">
                                <span class="text-[11px] font-bold px-2.5 py-1 rounded-full {{ $r[5]==='green'?'text-green-700 bg-green-50':'text-amber-700 bg-amber-50' }}">
                                    {{ $r[4] }}
                                </span>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<section class="bg-surface py-12">
    <div class="max-w-screen-xl mx-auto space-y-6 pt-0">
        <div class="flex items-stretch rounded-2xl overflow-hidden" style="border:1px solid #e5e7eb; background:linear-gradient(135deg,#0f1f35,#1a3050)">
            <div class="hidden lg:block relative shrink-0" style="width:380px">
                <img src="https://images.pexels.com/photos/3184291/pexels-photo-3184291.jpeg?auto=compress&cs=tinysrgb&w=800"
                    alt="Digital Insurance" class="w-full h-full object-cover">
                <div class="absolute inset-0" style="background:linear-gradient(to right,transparent 50%,#0f1f35)"></div>
            </div>
            <div class="flex-1 px-12 py-14 flex flex-col justify-center">
                <span class="text-[10px] font-black uppercase tracking-[.2em] mb-4 flex items-center gap-2" style="color:#4f46e5">
                    <span class="inline-block w-8 h-px" style="background:#4f46e5"></span>
                    InsurTech Consultation
                </span>
                <h3 class="familyfont font-bold text-white! leading-tight mb-4" style="font-size:clamp(22px,2.5vw,30px)">
                    Is Your Carrier Leveraging<br>AI to Price Your Risk Fairly?
                </h3>
                <p class="text-[14.5px] leading-relaxed mb-8 max-w-[700px]" style="color:rgba(255,255,255,.6)">
                    InsurTech carriers use behavioral data to reward safe, low-risk customers with dramatically lower premiums. Our analysts can identify if you qualify for telematics or AI-priced products that could cut your premium 20–40%.
                </p>
                <div class="flex items-center gap-5 flex-wrap">
                    <a href="{{ route('consultation') }}"
                        class="inline-flex items-center gap-2.5 font-bold text-[14px] px-8 py-3.5 rounded-full transition-all hover:-translate-y-0.5"
                        style="background:#4f46e5; color:#fff">
                        Check Your Eligibility
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg>
                    </a>
                    <a href="{{ route('reviews') }}" class="text-[14px] font-medium" style="color:rgba(255,255,255,.5)"
                        onmouseover="this.style.color='#4f46e5'" onmouseout="this.style.color='rgba(255,255,255,.5)'">
                        Browse InsurTech reviews →
                    </a>
                </div>
            </div>
        </div>

        <div class="flex items-stretch rounded-2xl overflow-hidden bg-white" style="border:1px solid #e5e7eb;">
            <div class="flex-1 px-12 py-12 flex flex-col justify-center">
                <span class="text-[10px] font-black uppercase tracking-[.2em] mb-4 flex items-center gap-2" style="color:#4f46e5">
                    <span class="inline-block w-8 h-px" style="background:#4f46e5"></span>
                    2026 InsurTech Report
                </span>
                <h3 class="font-bold leading-tight mb-4" style="font-family:'Playfair Display',serif; font-size:clamp(22px,2.5vw,30px); color:#0f1f35">
                    InsurTech Landscape Report:<br>AI, Embedded & Parametric 2026
                </h3>
                <p class="text-[14.5px] leading-relaxed mb-8 max-w-[500px]" style="color:#6b7280">
                    150+ companies profiled. Funding trends, valuation multiples, technology adoption curves, and a 3-year forecast for each of the six InsurTech vectors driving industry transformation.
                </p>
                <div class="flex items-center gap-5 flex-wrap">
                    <a href="{{ route('insurance.insights.reports') }}"
                        class="inline-flex items-center gap-2.5 font-bold text-[14px] px-8 py-3.5 rounded-full transition-all hover:-translate-y-0.5"
                        style="border:2px solid #4f46e5; color:#4f46e5"
                        onmouseover="this.style.background='#4f46e5';this.style.color='#0f1f35'"
                        onmouseout="this.style.background='transparent';this.style.color='#4f46e5'">
                        Download Report
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4" />
                            <polyline points="7 10 12 15 17 10" />
                            <line x1="12" y1="15" x2="12" y2="3" />
                        </svg>
                    </a>
                    <a href="{{ route('consultation') }}" class="text-[14px] font-medium" style="color:#6b7280"
                        onmouseover="this.style.color='#4f46e5'" onmouseout="this.style.color='#6b7280'">
                        Speak to an analyst →
                    </a>
                </div>
            </div>
            <div class="hidden lg:block relative shrink-0" style="width:380px">
                <img src="https://images.pexels.com/photos/590022/pexels-photo-590022.jpeg?auto=compress&cs=tinysrgb&w=800"
                    alt="InsurTech Research" class="w-full h-full object-cover opacity-80">
                <div class="absolute inset-0" style="background:linear-gradient(to left,transparent 50%,#ffffff)"></div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('related_cards')
@foreach([
['Insurance Market Trends', 'The macro forces — climate repricing, medical inflation — that InsurTech is responding to.', route('insurance.insights.trends')],
['Auto Insurance Market', 'Telematics and UBI in practice — how Progressive Snapshot is changing personal auto.', route('insurance.categories.auto')],
['Global Insurance Reports','Quantitative market data across 28 countries and six major insurance lines.', route('insurance.insights.reports')],
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