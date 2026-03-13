@extends('layouts.insurance')
@section('title','Premium Calculation Framework')
@section('cover_kicker','Insurance Fundamentals · Pricing')
@section('cover_h1_line1','Premium')
@section('cover_h1_em','Calculation')
@section('cover_deck','The mathematical journey from pure premium to final rate — how actuaries build, load, and validate insurance pricing structures across all lines of business.')
@section('cover_date','March 2026')
@section('cover_read','12 min')
@section('cover_topic','Actuarial Pricing')
@section('cover_img','https://images.unsplash.com/photo-1554224155-6726b3ff858f?w=800&q=80')
@section('cover_stats')
<div class="bg-[var(--navy)] py-[14px] px-[18px]"><div class="font-['Cormorant_Garamond'] text-2xl font-bold text-[var(--white)] leading-none">$7.5T</div><div class="text-[9.5px] text-white/35 uppercase tracking-[0.1em] mt-[3px]">Global Written Premiums</div></div>
<div class="bg-[var(--navy)] py-[14px] px-[18px]"><div class="font-['Cormorant_Garamond'] text-2xl font-bold text-[var(--white)] leading-none">62–68%</div><div class="text-[9.5px] text-white/35 uppercase tracking-[0.1em] mt-[3px]">Typical Loss Ratio Target</div></div>
<div class="bg-[var(--navy)] py-[14px] px-[18px]"><div class="font-['Cormorant_Garamond'] text-2xl font-bold text-[var(--white)] leading-none">25–30%</div><div class="text-[9.5px] text-white/35 uppercase tracking-[0.1em] mt-[3px]">Expense Ratio (P&C)</div></div>
<div class="bg-[var(--navy)] py-[14px] px-[18px]"><div class="font-['Cormorant_Garamond'] text-2xl font-bold text-[var(--white)] leading-none">5–8%</div><div class="text-[9.5px] text-white/35 uppercase tracking-[0.1em] mt-[3px]">Target Underwriting Margin</div></div>
@endsection
@section('block_label','Premium Construction — Step by Step')
@section('content')

<div class="p-item">
    <div class="p-index"><div class="p-index-num">01</div><div class="p-index-line"></div></div>
    <div class="p-body">
        <div class="p-tag">Foundation</div>
        <h2 class="p-title">The <em>Pure Premium</em></h2>
        <p class="p-text">The pure premium (also called the "loss cost") is the actuarially expected loss per unit of exposure — <strong>before any loadings for expenses, profit, or contingency</strong>. It answers one question: how much should this risk cost in losses, on average, per year?</p>
        <p class="p-text">Pure premium = <strong>Expected Loss Frequency × Expected Loss Severity</strong>. For a homeowner's policy: if a home has a 2% probability of filing a claim in any year and the average claim costs $25,000, the pure premium is $500/year ($0.02 × $25,000).</p>
        <div class="p-note">
            <div class="p-note-label">Data Dependency</div>
            <p>Pure premium credibility depends directly on the depth of historical loss experience. Personal lines with millions of policies achieve high credibility with 3–5 years of data. Specialty lines may require 10+ years or benchmark industry data to produce stable loss cost estimates.</p>
        </div>
    </div>
</div>

<div class="p-item">
    <div class="p-index"><div class="p-index-num">02</div><div class="p-index-line"></div></div>
    <div class="p-body">
        <div class="p-tag">Development & Trending</div>
        <h2 class="p-title">Loss Development & <em>Trend Factors</em></h2>
        <p class="p-text">Historical loss data must be adjusted to reflect the future period for which rates will apply. Two adjustments are critical:</p>
        <p class="p-text"><strong>Loss development</strong> — Reported claims grow over time as late-reported claims emerge and open claims develop to ultimate values. Actuaries apply development factors (derived from loss triangles) to bring historical loss data to estimated ultimate values.</p>
        <p class="p-text"><strong>Trend factors</strong> — Losses are trended forward to the policy period using historical inflation indices. A loss from 3 years ago must be inflated to reflect current repair costs, medical inflation, litigation trends, and social inflation — the latter now running 6–9% annually in commercial liability lines.</p>
        <div class="p-quote">
            <p>"Social inflation — the rising cost of litigation, jury verdicts, and legal system abuse — is the most significant unmodelled risk in liability pricing today."</p>
            <cite>— Swiss Re Institute, Casualty Report 2025</cite>
        </div>
    </div>
</div>

<div class="p-item">
    <div class="p-index"><div class="p-index-num">03</div><div class="p-index-line"></div></div>
    <div class="p-body">
        <div class="p-tag">Loading Structure</div>
        <h2 class="p-title">From Pure Premium to <em>Gross Rate</em></h2>
        <p class="p-text">The gross premium is constructed by dividing the pure premium by the permissible loss ratio — which implicitly applies all loadings simultaneously:</p>
        <p class="p-text"><strong>Gross Premium = Pure Premium ÷ Permissible Loss Ratio</strong></p>
        <p class="p-text">If the pure premium is $500 and the target combined ratio is 92% (meaning the permissible loss ratio is 68%), the gross premium = $500 ÷ 0.68 = $735. The $235 margin covers: acquisition costs (~15%), overhead (~10%), profit/contingency (~7%).</p>
        <div class="p-note">
            <div class="p-note-label">Regulatory Constraint</div>
            <p>In regulated personal lines markets (auto, homeowners), actuarially justified rates must be filed and approved by state departments of insurance before implementation — a process that can take 60–180 days and creates a lag between loss deterioration and rate adequacy recovery.</p>
        </div>
    </div>
</div>

<div class="p-item">
    <div class="p-index"><div class="p-index-num">04</div><div class="p-index-line"></div></div>
    <div class="p-body">
        <div class="p-tag">Risk Classification</div>
        <h2 class="p-title">Rating Variables & <em>Risk Segmentation</em></h2>
        <p class="p-text">A single base rate is refined through risk classification — applying relativities for characteristics that predict loss experience. In personal auto: vehicle age and type, driver age, credit score, claims history, territory, and telematics score. In commercial property: construction type, occupancy, protection class, and geographic hazard scores.</p>
        <p class="p-text">Regulatory constraints on rating variables vary significantly by state and line. Credit scoring is prohibited in some states for homeowners; gender cannot be used in personal auto in some EU markets. These constraints limit actuarial precision and create cross-subsidies between risk segments.</p>
    </div>
</div>

@endsection
@section('metrics_band')
<div class="mitem"><div class="mitem-v">$7.5T</div><div class="mitem-l">Global Written Premiums 2025</div></div>
<div class="mitem"><div class="mitem-v">68%</div><div class="mitem-l">Typical Permissible Loss Ratio</div></div>
<div class="mitem"><div class="mitem-v">6–9%</div><div class="mitem-l">Social Inflation Annual Rate</div></div>
<div class="mitem"><div class="mitem-v">92%</div><div class="mitem-l">Target Combined Ratio</div></div>
@endsection
@section('process_title','Premium Calculation Workflow')
@section('process_subtitle','Four Steps')
@section('process')
<div class="pstep"><div class="pstep-n">01</div><div class="pstep-title">Historical Loss Analysis</div><div class="pstep-body">Compile exposure and loss data; apply development factors from loss triangles to estimate ultimate losses at each historical evaluation period.</div></div>
<div class="pstep"><div class="pstep-n">02</div><div class="pstep-title">Trend & Development</div><div class="pstep-body">Trend loss experience to future policy period using frequency and severity trend indices. Adjust for known changes in coverage, mix, or legal environment.</div></div>
<div class="pstep"><div class="pstep-n">03</div><div class="pstep-title">Pure Premium Derivation</div><div class="pstep-body">Blend trended experience with industry benchmarks using credibility weighting. Derive indicated pure premiums by rating variable and segment.</div></div>
<div class="pstep"><div class="pstep-n">04</div><div class="pstep-title">Rate Construction & Filing</div><div class="pstep-body">Apply expense and profit loadings; test competitive positioning; file with regulators if required; implement in rating engine.</div></div>
@endsection
@section('table_title','Premium Components — Line of Business Breakdown')
@section('ins_table')
<table>
    <thead><tr><th>Line</th><th>Target Loss Ratio</th><th>Expense Ratio</th><th>Profit Margin</th><th>Combined Ratio Target</th></tr></thead>
    <tbody>
        <tr><td>Personal Auto</td><td class="a">62%</td><td class="a">28%</td><td class="g">10%</td><td class="g">90%</td></tr>
        <tr><td>Homeowners</td><td class="a">60%</td><td class="a">30%</td><td class="g">10%</td><td class="g">90%</td></tr>
        <tr><td>Commercial Property</td><td class="g">58%</td><td class="a">26%</td><td class="g">16%</td><td class="g">84%</td></tr>
        <tr><td>General Liability</td><td class="a">65%</td><td class="a">27%</td><td class="a">8%</td><td class="a">92%</td></tr>
        <tr><td>Cyber</td><td class="g">55%</td><td class="r">35%</td><td class="a">10%</td><td class="a">90%</td></tr>
        <tr><td>Workers Comp</td><td class="g">68%</td><td class="g">22%</td><td class="g">10%</td><td class="g">90%</td></tr>
    </tbody>
</table>
@endsection
@section('related')
<div class="rcard"><img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=600&q=70" alt="Risk"><div class="rcard-body"><div class="rcard-cat">Fundamentals</div><div class="rcard-title">Risk Assessment Models</div><p>The frequency and severity models that produce the pure premium estimate at the heart of pricing.</p></div></div>
<div class="rcard"><img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=600&q=70" alt="Underwriting"><div class="rcard-body"><div class="rcard-cat">Fundamentals</div><div class="rcard-title">Insurance Underwriting</div><p>How technical rates interact with underwriting judgement and portfolio considerations.</p></div></div>
<div class="rcard"><img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=600&q=70" alt="Regulatory"><div class="rcard-body"><div class="rcard-cat">Fundamentals</div><div class="rcard-title">Regulatory Framework</div><p>State filing requirements, rate review standards, and the regulatory constraints on actuarial pricing.</p></div></div>
@endsection