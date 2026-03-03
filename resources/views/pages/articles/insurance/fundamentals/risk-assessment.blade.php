@extends('layouts.deep-analysis')

@section('title', 'Risk Assessment Models in Insurance – FinReview')
@section('description', 'How actuaries quantify, model, and price insurance risk using statistical frameworks, catastrophe models, and predictive analytics.')
@section('feature_label', 'Actuarial Science & Risk Modeling Report 2026')
@section('breadcrumb', 'Risk Assessment Models')
@section('badge', 'Insurance Fundamentals')
@section('hero_title', 'Risk Assessment Models: How Insurers Quantify Uncertainty')
@section('hero_subtitle', 'From traditional actuarial tables to AI-driven predictive analytics — a complete breakdown of how modern insurers evaluate, model, and price risk across all lines.')
@section('meta', 'March 2026 · FinReview Research · 15 min read')

@section('extra_badges')
    <span class="text-[#6b6560] bg-white text-[11px] font-medium px-3 py-1.5 rounded-lg border border-white/10">Actuarial Science</span>
@endsection

@section('sidebar_toc')
    <li><a href="#foundations" class="text-[13px] text-[#6b6560] hover:text-[#c9a96e] transition-colors">Foundations</a></li>
    <li><a href="#models"      class="text-[13px] text-[#6b6560] hover:text-[#c9a96e] transition-colors">Core Models</a></li>
    <li><a href="#catmodels"   class="text-[13px] text-[#6b6560] hover:text-[#c9a96e] transition-colors">Catastrophe Modeling</a></li>
    <li><a href="#ai"          class="text-[13px] text-[#6b6560] hover:text-[#c9a96e] transition-colors">AI & Predictive Analytics</a></li>
    <li><a href="#limits"      class="text-[13px] text-[#6b6560] hover:text-[#c9a96e] transition-colors">Model Limitations</a></li>
@endsection

@section('page_content')

<section id="foundations" class="mb-20 scroll-mt-28">
    <h2 class="text-[28px] font-bold text-[#1a1a1a] border-l-4 border-[#c9a96e] pl-4 mb-6 familyfont">Foundations of Risk Assessment</h2>
    <p class="text-[#6b6560] text-[15.5px] leading-[1.85] mb-5">
        Insurance risk assessment is the process of evaluating the probability and severity of potential losses for a given policyholder or portfolio. Actuaries combine historical loss data, demographic factors, behavioral signals, and environmental variables to produce expected loss estimates that form the basis of premium pricing.
    </p>
    <div class="grid grid-cols-3 gap-5 mt-8">
        @foreach([
            ['Frequency', 'How often does a loss event occur per unit of exposure?'],
            ['Severity',  'What is the average financial magnitude of each loss event?'],
            ['Correlation','How do losses co-move across policyholders — independence vs. systemic?'],
        ] as $m)
        <div class="rounded-xl border border-[#2a2f3a] p-6" style="background:#1a1d24">
            <div class="text-[#c9a96e] font-bold text-[15px] mb-2 familyfont">{{ $m[0] }}</div>
            <div class="text-[13px] text-[#888] leading-relaxed">{{ $m[1] }}</div>
        </div>
        @endforeach
    </div>
</section>

<section id="models" class="mb-20 scroll-mt-28">
    <h2 class="text-[28px] font-bold text-[#1a1a1a] border-l-4 border-[#c9a96e] pl-4 mb-6 familyfont">Core Actuarial Models</h2>
    <div class="space-y-4">
        @foreach([
            ['Generalized Linear Models (GLM)', 'The industry standard for personal lines pricing. GLMs model loss frequency and severity as functions of policyholder characteristics (age, location, claim history) using Poisson and Gamma distributions respectively.'],
            ['Credibility Theory', 'Blends an insurer\'s own experience data with broader industry data to produce more stable estimates for small portfolios. Formula: Z·X + (1-Z)·M where Z is the credibility weight.'],
            ['Loss Development Triangles', 'Used to project ultimate incurred losses from historical paid/reported data. Essential for long-tail lines (liability, workers\' comp) where claims may take years to fully develop.'],
            ['Survival Analysis', 'Models time-to-event distributions (e.g., time to claim, policyholder churn). Kaplan-Meier and Cox proportional hazards models are standard tools.'],
            ['Monte Carlo Simulation', 'Generates thousands of scenarios by sampling from loss distributions to estimate aggregate risk, tail risk (VaR, TVaR), and required capital buffers.'],
        ] as $idx => $row)
        <div class="rounded-xl border border-[#2a2f3a] overflow-hidden" style="background:#15181f">
            <div class="px-6 py-3 border-b border-[#2a2f3a] flex items-center gap-3" style="background:#1a1d24">
                <span class="text-[#c9a96e] font-black text-[13px]">0{{ $idx+1 }}</span>
                <span class="text-[14px] font-bold text-white">{{ $row[0] }}</span>
            </div>
            <div class="px-6 py-4 text-[13.5px] text-[#6b6560] leading-relaxed">{{ $row[1] }}</div>
        </div>
        @endforeach
    </div>
</section>

<section id="catmodels" class="mb-20 scroll-mt-28">
    <h2 class="text-[28px] font-bold text-[#1a1a1a] border-l-4 border-[#c9a96e] pl-4 mb-6 familyfont">Catastrophe Modeling</h2>
    <p class="text-[#6b6560] text-[15.5px] leading-[1.85] mb-6">
        Catastrophe models (cat models) simulate the financial impact of large-scale natural disaster events — hurricanes, earthquakes, floods, wildfires. They combine hazard science, exposure data, and vulnerability functions to estimate Probable Maximum Loss (PML).
    </p>
    <div class="rounded-xl border border-[#2a2f3a] overflow-hidden mb-8">
        <div class="px-6 py-3 border-b border-[#2a2f3a]" style="background:#12151b">
            <span class="text-[11px] font-bold uppercase tracking-[0.12em] text-[#c9a96e]">Major Cat Model Vendors & Coverage</span>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-[13.5px]">
                <thead style="background:#12151b">
                    <tr class="border-b border-[#2a2f3a]">
                        <th class="text-left px-6 py-3 font-bold text-[#888] text-[11px] uppercase tracking-wider">Vendor</th>
                        <th class="text-left px-6 py-3 font-bold text-[#888] text-[11px] uppercase tracking-wider">Peril Coverage</th>
                        <th class="text-right px-6 py-3 font-bold text-[#888] text-[11px] uppercase tracking-wider">Market Share</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-[#2a2f3a]">
                    @foreach([
                        ['RMS (Moody\'s)',  'Hurricane, Earthquake, Flood, Wildfire, Pandemic', '~40%'],
                        ['AIR Worldwide',   'Hurricane, Earthquake, Terrorism, Crop',            '~35%'],
                        ['CoreLogic',       'Wildfire, Flood, Hail, Wind',                       '~15%'],
                        ['In-house models', 'Varies by carrier',                                  '~10%'],
                    ] as $row)
                    <tr style="background:#15181f" class="hover:bg-[#1a1d24] transition-colors">
                        <td class="px-6 py-4 font-semibold text-[#e6e6e6]">{{ $row[0] }}</td>
                        <td class="px-6 py-4 text-[#888]">{{ $row[1] }}</td>
                        <td class="px-6 py-4 text-right font-bold text-[#c9a96e]">{{ $row[2] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>

<section id="ai" class="mb-20 scroll-mt-28">
    <h2 class="text-[28px] font-bold text-[#1a1a1a] border-l-4 border-[#c9a96e] pl-4 mb-6 familyfont">AI & Predictive Analytics</h2>
    <p class="text-[#6b6560] text-[15.5px] leading-[1.85] mb-6">
        Machine learning is transforming risk assessment from static actuarial snapshots to dynamic, real-time risk scoring. Gradient boosting (XGBoost, LightGBM), neural networks, and telematics data are enabling granular risk segmentation impossible with traditional methods.
    </p>
    <div class="rounded-xl border border-[#2a2f3a] p-8 mb-6" style="background:linear-gradient(145deg,#1a1d24,#12151b)">
        <h3 class="text-[17px] font-bold text-[#c9a96e] mb-4">AI Impact on Key Metrics</h3>
        <div class="space-y-3">
            @foreach([
                ['Loss prediction accuracy',    '+15–30%', 95],
                ['Fraud detection speed',       '10x faster', 85],
                ['Underwriting cost reduction', '-25–40%', 70],
                ['Risk segmentation granularity','5–10x more segments', 90],
            ] as $row)
            <div class="flex items-center gap-4">
                <div class="w-[200px] text-[13px] text-[#888] shrink-0">{{ $row[0] }}</div>
                <div class="flex-1 bg-[#12151b] rounded-full h-2 overflow-hidden">
                    <div class="h-full bg-[#c9a96e] rounded-full" style="width:{{ $row[2] }}%"></div>
                </div>
                <div class="w-32 text-right text-[13px] font-bold text-green-400">{{ $row[1] }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section id="limits" class="scroll-mt-28">
    <h2 class="text-[28px] font-bold text-[#1a1a1a] border-l-4 border-[#c9a96e] pl-4 mb-6 familyfont">Model Limitations & Risk</h2>
    <p class="text-[#6b6560] text-[15.5px] leading-[1.85] mb-5">All models are wrong — some are useful. Key limitations practitioners must account for:</p>
    <div class="space-y-3">
        @foreach([
            ['Model Risk',         'Models calibrated on historical data may fail when underlying risk dynamics shift (e.g., climate change invalidating 30-year flood return periods).'],
            ['Data Quality',       'Garbage in, garbage out. Incomplete, biased, or outdated exposure data produces systematically mispriced risk.'],
            ['Correlation Risk',   'Models often assume independence between risks. Correlated losses (catastrophes, pandemics) can exceed model expectations by 3–10x.'],
            ['Regulatory Scrutiny','Algorithmic underwriting faces increasing regulatory challenge on fairness and disparate impact grounds — proxies for protected characteristics must be audited.'],
        ] as $item)
        <div class="flex items-start gap-5 rounded-xl border border-[#2a2f3a] p-5" style="background:#1a1d24">
            <svg class="w-5 h-5 text-amber-400 shrink-0 mt-0.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
            <div>
                <div class="text-[14px] font-bold text-amber-400 mb-1">{{ $item[0] }}</div>
                <div class="text-[13.5px] text-[#6b6560] leading-relaxed">{{ $item[1] }}</div>
            </div>
        </div>
        @endforeach
    </div>
</section>

@endsection

@section('insight_cards')
    @foreach([
        ['Frequency × Severity', 'Expected loss = E[N] × E[X]. Separating frequency from severity modeling improves pricing accuracy across heterogeneous portfolios.'],
        ['Tail Risk (TVaR)',     'Tail Value-at-Risk measures expected loss beyond the VaR threshold — critical for reinsurance structuring and capital allocation.'],
        ['Model Validation',    'Backtesting, out-of-sample testing, and Gini coefficient analysis are standard actuarial model validation techniques.'],
    ] as $card)
    <div class="rounded-2xl border border-[#2a2f3a] p-10 transition-all duration-300 hover:-translate-y-2 hover:border-[#c9a96e] cursor-pointer" style="background:#1a1d24">
        <h4 class="text-[17px] font-bold text-[#c9a96e] mb-4" style="font-family:'Playfair Display',serif">{{ $card[0] }}</h4>
        <p class="text-[#6b6560] text-[14px] leading-relaxed">{{ $card[1] }}</p>
    </div>
    @endforeach
@endsection

@section('cta_title', 'Actuarial Modeling Deep Research')
@section('cta_desc', 'Access our full actuarial framework library, cat model comparison reports, and AI underwriting case studies from leading global carriers.')
@section('cta_btn', 'Access Full Research')