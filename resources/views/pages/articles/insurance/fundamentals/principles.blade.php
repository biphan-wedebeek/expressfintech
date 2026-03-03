@extends('layouts.deep-analysis')

@section('title', 'Insurance Principles: Structural Foundations – FinReview')
@section('description', 'Deep structural analysis of insurance principles, risk pooling, and the fundamental mechanics that underpin modern insurance markets.')
@section('feature_label', 'Global Insurance Solvency Report 2026')
@section('breadcrumb', 'Insurance Principles')
@section('badge', 'Insurance Fundamentals')
@section('hero_title', 'Insurance Principles: Structural Foundations')
@section('hero_subtitle', 'Deep structural analysis of underwriting systems, capital buffers, and systemic risk redistribution across modern insurance markets.')
@section('meta', 'March 2026 · FinReview Research · 18 min read')

@section('extra_badges')
<span class="text-[#6b6560] bg-white text-[11px] font-medium px-3 py-1.5 rounded-lg border border-white/10">Insurance Principles</span>
@endsection

@section('sidebar_toc')
<li><a href="#intro" class="text-[13px] text-[#6b6560] hover:text-[#c9a96e] transition-colors">Introduction</a></li>
<li><a href="#pooling" class="text-[13px] text-[#6b6560] hover:text-[#c9a96e] transition-colors">Risk Pooling</a></li>
<li><a href="#capital" class="text-[13px] text-[#6b6560] hover:text-[#c9a96e] transition-colors">Capital Structure</a></li>
<li><a href="#metrics" class="text-[13px] text-[#6b6560] hover:text-[#c9a96e] transition-colors">Industry Metrics</a></li>
<li><a href="#outlook" class="text-[13px] text-[#6b6560] hover:text-[#c9a96e] transition-colors">Strategic Outlook</a></li>
@endsection

@section('page_content')

{{-- ── INTRO ── --}}
<section id="intro" class="mb-20 scroll-mt-28">
    <h2 class="text-[28px] font-bold text-[#1a1a1a] border-l-4 border-[#c9a96e] pl-4 mb-6 familyfont">
        Introduction
    </h2>
    <p class="text-[#6b6560] text-[15.5px] leading-[1.85] mb-5">
        Insurance markets redistribute financial uncertainty across diversified capital pools. At its core, insurance is a mechanism of <strong class="text-[#1a1a1a]">risk transfer</strong> — policyholders exchange a certain, smaller cost (the premium) for protection against an uncertain, potentially catastrophic loss.
    </p>
    <p class="text-[#6b6560] text-[15.5px] leading-[1.85] mb-5">
        This fundamental principle, first formalized in 17th-century marine insurance at Lloyd's of London, has evolved into a $6.5 trillion global industry spanning life, health, property, casualty, and specialty lines.
    </p>

    {{-- Key metrics strip --}}
    <div class="grid grid-cols-3 gap-5 mt-10">
        @foreach([
        ['$6.5T', 'Global insurance market size (2025)'],
        ['3.1%', 'Average global premium growth YoY'],
        ['67%', 'Combined ratio target for profitability'],
        ] as $m)
        <div class="rounded-xl border border-[#2a2f3a] p-6 text-center" style="background:#1a1d24">
            <div class="text-[36px] font-extrabold text-[#c9a96e] mb-2 familyfont">{{ $m[0] }}</div>
            <div class="text-[12px] text-[#666] leading-tight">{{ $m[1] }}</div>
        </div>
        @endforeach
    </div>
</section>

{{-- ── MID BANNER ── --}}
<div class="rounded-2xl border border-[#2a2f3a] p-14 mb-20 relative overflow-hidden"
    style="background:linear-gradient(145deg,#1a1d24,#12151b)">
    <div class="absolute top-0 right-0 w-64 h-64 opacity-5" style="background:radial-gradient(circle, #c9a96e, transparent)"></div>
    <h3 class="text-[26px] font-bold text-[#c9a96e] mb-4 familyfont">
        Structural Transformation in Insurance
    </h3>
    <p class="text-[#6b6560] max-w-[680px] text-[15px] leading-relaxed">
        AI-driven underwriting, climate volatility repricing, and evolving capital regulation are fundamentally redefining global insurance economics. Carriers that fail to adapt their risk models face existential margin pressure.
    </p>
</div>

{{-- ── RISK POOLING ── --}}
<section id="pooling" class="mb-20 scroll-mt-28">
    <h2 class="text-[28px] font-bold text-[#1a1a1a] border-l-4 border-[#c9a96e] pl-4 mb-6 familyfont">
        Risk Pooling Model
    </h2>
    <p class="text-[#6b6560] text-[15.5px] leading-[1.85] mb-5">
        The law of large numbers enables predictive aggregate loss forecasting. When a sufficient number of statistically independent risks are pooled, the actual loss experience converges toward the expected loss — making risk quantifiable and priceable.
    </p>

    <div class="rounded-xl border border-[#2a2f3a] overflow-hidden mb-8">
        <div class="px-6 py-3 border-b border-[#2a2f3a]" style="background:#12151b">
            <span class="text-[11px] font-bold uppercase tracking-[0.12em] text-[#c9a96e]">Risk Pooling Mechanics</span>
        </div>
        <div class="divide-y divide-[#2a2f3a]">
            @foreach([
            ['Law of Large Numbers', 'As pool size increases, actual losses converge toward expected losses, reducing variance per policy.'],
            ['Independence Assumption', 'Pooled risks must be sufficiently uncorrelated — systemic events (pandemics, catastrophes) violate this, requiring reinsurance.'],
            ['Adverse Selection', 'High-risk individuals disproportionately seek coverage; addressed through underwriting, risk classification, and mandatory pools.'],
            ['Moral Hazard', 'Insurance coverage may alter risk-taking behavior; mitigated through deductibles, co-payments, and policy exclusions.'],
            ] as $row)
            <div class="px-6 py-4 flex items-start gap-5" style="background:#15181f">
                <div class="w-[180px] shrink-0 text-[13.5px] font-semibold text-[#c9a96e]">{{ $row[0] }}</div>
                <div class="text-[13.5px] text-[#6b6560] leading-relaxed">{{ $row[1] }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ── CAPITAL STRUCTURE ── --}}
<section id="capital" class="mb-20 scroll-mt-28">
    <h2 class="text-[28px] font-bold text-[#1a1a1a] border-l-4 border-[#c9a96e] pl-4 mb-6 familyfont">
        Capital Structure & Solvency
    </h2>
    <p class="text-[#6b6560] text-[15.5px] leading-[1.85] mb-5">
        Insurers must maintain sufficient capital to meet policyholder obligations even in extreme loss scenarios. Regulatory frameworks (Solvency II in Europe, RBC in the U.S.) mandate minimum capital requirements calibrated to risk exposure.
    </p>

    {{-- Capital tiers --}}
    <div class="space-y-3 mb-8">
        @foreach([
        ['Tier 1 Capital', '100%', 'bg-[#c9a96e]', 'Common equity, retained earnings — highest quality, fully loss-absorbing'],
        ['Tier 2 Capital', '65%', 'bg-[#a08040]', 'Subordinated debt, certain reserves — conditional loss absorption'],
        ['Tier 3 Capital', '35%', 'bg-[#5a4820]', 'Short-term subordinated debt — limited recognition, highly restricted'],
        ] as $tier)
        <div class="rounded-xl border border-[#2a2f3a] p-5 flex items-center gap-5" style="background:#1a1d24">
            <div class="w-[120px] shrink-0 text-[13px] font-bold text-white">{{ $tier[0] }}</div>
            <div class="flex-1 bg-[#12151b] rounded-full h-2.5 overflow-hidden">
                <div class="h-full rounded-full {{ $tier[2] }}" style="width:{{ $tier[1] }}"></div>
            </div>
            <div class="w-10 text-right text-[13px] font-bold text-[#c9a96e]">{{ $tier[1] }}</div>
            <div class="flex-1 text-[12.5px] text-[#666]">{{ $tier[3] }}</div>
        </div>
        @endforeach
    </div>
</section>

{{-- ── METRICS ── --}}
<section id="metrics" class="mb-20 scroll-mt-28">
    <h2 class="text-[28px] font-bold text-[#1a1a1a] border-l-4 border-[#c9a96e] pl-4 mb-6 familyfont">
        Industry Metrics
    </h2>
    <p class="text-[#6b6560] text-[15.5px] leading-[1.85] mb-6">
        Loss ratios, combined ratios, and solvency buffers are the primary measures of insurance industry resilience and profitability.
    </p>

    <div class="rounded-xl border border-[#2a2f3a] overflow-hidden">
        <div class="px-6 py-3 border-b border-[#2a2f3a]" style="background:#12151b">
            <span class="text-[11px] font-bold uppercase tracking-[0.12em] text-[#c9a96e]">Key Performance Indicators — Property & Casualty Sector 2025</span>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-[13.5px]">
                <thead style="background:#12151b">
                    <tr class="border-b border-[#2a2f3a]">
                        <th class="text-left px-6 py-3 font-bold text-[#888] text-[11px] uppercase tracking-wider">Metric</th>
                        <th class="text-right px-6 py-3 font-bold text-[#888] text-[11px] uppercase tracking-wider">Industry Avg</th>
                        <th class="text-right px-6 py-3 font-bold text-[#888] text-[11px] uppercase tracking-wider">Target</th>
                        <th class="text-right px-6 py-3 font-bold text-[#888] text-[11px] uppercase tracking-wider">Trend</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-[#2a2f3a]">
                    @foreach([
                    ['Loss Ratio', '63.2%', '< 65%', '↑ +2.1pp' , 'red' ],
                        ['Expense Ratio', '26.8%' , '< 30%' , '→ Stable' , 'gray' ],
                        ['Combined Ratio', '90.0%' , '< 100%' ,'↑ +2.1pp', 'amber' ],
                        ['Return on Equity', '12.4%' , '> 10%' , '↓ -0.8pp' , 'green' ],
                        ['Solvency Ratio', '218%' , '> 150%' ,'→ Stable', 'green' ],
                        ['Investment Yield', '4.1%' , '> 3.5%' ,'↑ +0.6pp', 'green' ],
                        ] as $row)
                        <tr style="background:#15181f" class="hover:bg-[#1a1d24] transition-colors">
                        <td class="px-6 py-4 font-semibold text-[#e6e6e6]">{{ $row[0] }}</td>
                        <td class="px-6 py-4 text-right font-bold text-[#c9a96e]">{{ $row[1] }}</td>
                        <td class="px-6 py-4 text-right text-[#666]">{{ $row[2] }}</td>
                        <td class="px-6 py-4 text-right text-[13px] font-semibold {{ $row[4]==='green'?'text-green-400':($row[4]==='red'?'text-red-400':($row[4]==='amber'?'text-amber-400':'text-[#666]')) }}">{{ $row[3] }}</td>
                        </tr>
                        @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>

{{-- ── OUTLOOK ── --}}
<section id="outlook" class="scroll-mt-28">
    <h2 class="text-[28px] font-bold text-[#1a1a1a] border-l-4 border-[#c9a96e] pl-4 mb-6 familyfont">
        Strategic Outlook
    </h2>
    <p class="text-[#6b6560] text-[15.5px] leading-[1.85] mb-5">
        Capital efficiency and digital underwriting will shape next-decade profitability. Three forces are converging to restructure competitive dynamics across the industry.
    </p>
    <div class="grid grid-cols-1 gap-4">
        @foreach([
        ['Climate Risk Repricing', 'Physical climate risk is forcing actuarial model overhauls. Insurers underexposed to coastal and wildfire risks are gaining competitive advantage through selective underwriting.'],
        ['AI-Driven Underwriting', 'Machine learning models now process thousands of non-traditional data points per applicant, improving loss prediction accuracy by 15–30% vs. traditional actuarial tables.'],
        ['Regulatory Tightening', 'Solvency II reforms and IFRS 17 implementation are increasing capital requirements and reporting transparency, raising barriers to entry and consolidating market share among top-tier carriers.'],
        ] as $item)
        <div class="rounded-xl border border-[#2a2f3a] p-6 flex items-start gap-5" style="background:#1a1d24">
            <div class="w-2 h-2 rounded-full bg-[#c9a96e] shrink-0 mt-2"></div>
            <div>
                <h4 class="text-[15px] font-bold text-[#c9a96e] mb-2">{{ $item[0] }}</h4>
                <p class="text-[13.5px] text-[#6b6560] leading-relaxed">{{ $item[1] }}</p>
            </div>
        </div>
        @endforeach
    </div>
</section>

@endsection

@section('insight_cards')
@foreach([
['Capital Allocation', 'Insurers must rebalance capital buffers amid rising catastrophe exposure and increased reinsurance costs across all lines.'],
['Technology Shift', 'AI-driven underwriting improves pricing precision by 15–30% and reduces fraud detection time from days to seconds.'],
['Regulatory Pressure','Solvency II reforms and IFRS 17 standards are tightening reporting transparency and raising minimum capital thresholds.'],
] as $card)
<div class="rounded-2xl border border-[#2a2f3a] p-10 transition-all duration-300 hover:-translate-y-2 hover:border-[#c9a96e] cursor-pointer" style="background:#1a1d24">
    <h4 class="text-[17px] font-bold text-[#c9a96e] mb-4 familyfont">{{ $card[0] }}</h4>
    <p class="text-[#6b6560] text-[14px] leading-relaxed">{{ $card[1] }}</p>
</div>
@endforeach
@endsection

@section('cta_title', 'Extended Insurance Research')
@section('cta_desc', 'Access deeper solvency modeling frameworks, catastrophe risk forecasting models, and capital adequacy simulations used by institutional insurers and regulators worldwide.')
@section('cta_btn', 'Access Full Research')