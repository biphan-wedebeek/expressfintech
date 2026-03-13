@extends('layouts.insurance')
@section('title','Risk Assessment in Insurance')
@section('cover_kicker','Insurance Fundamentals · Actuarial Science')
@section('cover_h1_line1','Risk')
@section('cover_h1_em','Assessment')
@section('cover_deck','How insurers quantify, model, and price risk — the statistical and actuarial frameworks that transform uncertain future losses into calculable premiums.')
@section('cover_date','March 2026')
@section('cover_read','14 min')
@section('cover_topic','Actuarial Methods')
@section('cover_img','https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=800&q=80')
@section('cover_stats')
<div class="bg-[var(--navy)] py-[14px] px-[18px]"><div class="font-['Cormorant_Garamond'] text-2xl font-bold text-[var(--white)] leading-none">99.7%</div><div class="text-[9.5px] text-white/35 uppercase tracking-[0.1em] mt-[3px]">VaR Confidence Level</div></div>
<div class="bg-[var(--navy)] py-[14px] px-[18px]"><div class="font-['Cormorant_Garamond'] text-2xl font-bold text-[var(--white)] leading-none">$420B</div><div class="text-[9.5px] text-white/35 uppercase tracking-[0.1em] mt-[3px]">2025 Insured CAT Losses</div></div>
<div class="bg-[var(--navy)] py-[14px] px-[18px]"><div class="font-['Cormorant_Garamond'] text-2xl font-bold text-[var(--white)] leading-none">+30%</div><div class="text-[9.5px] text-white/35 uppercase tracking-[0.1em] mt-[3px]">ML Model Adoption Rate</div></div>
<div class="bg-[var(--navy)] py-[14px] px-[18px]"><div class="font-['Cormorant_Garamond'] text-2xl font-bold text-[var(--white)] leading-none">4.2x</div><div class="text-[9.5px] text-white/35 uppercase tracking-[0.1em] mt-[3px]">Cyber Risk Growth</div></div>
@endsection
@section('block_label','Risk Assessment Framework')
@section('content')

<div class="p-item">
    <div class="p-index"><div class="p-index-num">01</div><div class="p-index-line"></div></div>
    <div class="p-body">
        <div class="p-tag">Foundation</div>
        <h2 class="p-title">The <em>Law of Large Numbers</em></h2>
        <p class="p-text">Insurance is mathematically viable only when losses are predictable in aggregate. The law of large numbers holds that as the number of similar, independent exposures in a pool increases, the <strong>actual loss experience converges toward the expected loss</strong>. This is the statistical engine that makes insurance economically rational.</p>
        <p class="p-text">An insurer covering 10,000 homes faces far more predictable aggregate losses than one covering 100. Portfolio size is not just a competitive advantage — it is a fundamental requirement for actuarial stability.</p>
        <div class="p-note">
            <div class="p-note-label">Actuarial Insight</div>
            <p>Coefficient of variation (standard deviation ÷ mean) falls as portfolio size grows. A portfolio of 10,000 exposures typically achieves a CoV under 5% — sufficient predictability to set stable premiums with modest contingency loading.</p>
        </div>
    </div>
</div>

<div class="p-item">
    <div class="p-index"><div class="p-index-num">02</div><div class="p-index-line"></div></div>
    <div class="p-body">
        <div class="p-tag">Quantification</div>
        <h2 class="p-title">Loss Frequency & <em>Severity Modelling</em></h2>
        <p class="p-text">Risk is decomposed into two independent probability distributions: <strong>frequency</strong> (how often losses occur) and <strong>severity</strong> (how large losses are when they occur). Combined through simulation, they produce the aggregate loss distribution that drives pricing and reserving.</p>
        <p class="p-text">Common distributions: <strong>Poisson</strong> for frequency (rare, independent events), <strong>lognormal or Pareto</strong> for severity (heavy-tailed property losses), and <strong>Normal approximation</strong> for homogeneous personal lines portfolios at scale.</p>
        <div class="p-quote">
            <p>"Actuaries do not predict the future. They quantify uncertainty — transforming ambiguity into distributions, and distributions into decisions."</p>
            <cite>— Casualty Actuarial Society, 2025 Practice Note</cite>
        </div>
    </div>
</div>

<div class="p-item">
    <div class="p-index"><div class="p-index-num">03</div><div class="p-index-line"></div></div>
    <div class="p-body">
        <div class="p-tag">Catastrophe Risk</div>
        <h2 class="p-title">CAT Modelling & <em>Tail Risk</em></h2>
        <p class="p-text">Catastrophic events — hurricanes, earthquakes, wildfires — create correlated losses across entire portfolios simultaneously, violating the independence assumption underlying standard actuarial models. Specialist catastrophe models (RMS, AIR, Verisk) simulate millions of event scenarios to estimate tail-risk exposures.</p>
        <img class="p-img" src="https://images.unsplash.com/photo-1504711434969-e33886168f5c?w=900&q=80" alt="Catastrophe modelling">
        <p class="p-img-caption">Catastrophe modelling — 2025 insured CAT losses exceeded $420B driven by Atlantic hurricanes and wildfire events</p>
        <p class="p-text">The <strong>1-in-200-year Probable Maximum Loss (PML)</strong> is the regulatory and commercial benchmark for reinsurance purchasing decisions. Solvency II and IFRS 17 mandate explicit capital provisioning for these tail scenarios.</p>
    </div>
</div>

<div class="p-item">
    <div class="p-index"><div class="p-index-num">04</div><div class="p-index-line"></div></div>
    <div class="p-body">
        <div class="p-tag">Modern Methods</div>
        <h2 class="p-title">Machine Learning in <em>Risk Pricing</em></h2>
        <p class="p-text">Gradient boosting (XGBoost, LightGBM), neural networks, and random forests now supplement — and in some lines, replace — traditional GLM-based ratemaking. Telematics data in auto, satellite imagery in property, and clinical data in health are creating granular risk segmentation impossible with legacy actuarial tools.</p>
        <p class="p-text">Adoption is uneven: personal auto and homeowners have seen the fastest ML penetration; specialty and casualty lines remain predominantly GLM-driven due to data scarcity and model interpretability requirements from regulators.</p>
        <div class="p-note">
            <div class="p-note-label">2026 Market Data</div>
            <p>30% of P&C insurers now deploy ML models in primary rating engines — up from 8% in 2021. Regulatory acceptance of "black box" models remains the primary adoption barrier, with NAIC model governance guidelines under active development.</p>
        </div>
    </div>
</div>

@endsection

@section('metrics_band')
<div class="mitem"><div class="mitem-v">99.7%</div><div class="mitem-l">Standard VaR Confidence (3σ)</div></div>
<div class="mitem"><div class="mitem-v">$420B</div><div class="mitem-l">2025 Global Insured CAT Losses</div></div>
<div class="mitem"><div class="mitem-v">200yr</div><div class="mitem-l">PML Benchmark (Solvency II)</div></div>
<div class="mitem"><div class="mitem-v">30%</div><div class="mitem-l">P&C Insurers with ML Rating</div></div>
@endsection

@section('process_title','Risk Assessment Workflow')
@section('process_subtitle','Four Phases')
@section('process')
<div class="pstep"><div class="pstep-n">01</div><div class="pstep-title">Exposure Identification</div><div class="pstep-body">Define the insured subject matter and enumerate all potential perils — physical, financial, operational, and emerging risks.</div></div>
<div class="pstep"><div class="pstep-n">02</div><div class="pstep-title">Data Collection & Cleansing</div><div class="pstep-body">Gather historical loss data, exposure schedules, external benchmarks, and third-party data sources for model construction.</div></div>
<div class="pstep"><div class="pstep-n">03</div><div class="pstep-title">Statistical Modelling</div><div class="pstep-body">Fit frequency and severity distributions; run catastrophe simulations; validate model against out-of-sample holdout data.</div></div>
<div class="pstep"><div class="pstep-n">04</div><div class="pstep-title">Risk-Adjusted Pricing</div><div class="pstep-body">Translate model output into technical premium; apply expense loading, profit margin, and competitive positioning overlay.</div></div>
@endsection

@section('table_title','Risk Models —Line of Business Comparison')
@section('ins_table')
<table>
    <thead><tr><th>Line of Business</th><th>Frequency Model</th><th>Severity Model</th><th>CAT Risk</th><th>ML Adoption</th><th>Data Quality</th></tr></thead>
    <tbody>
        <tr><td>Personal Auto</td><td class="g">Poisson/NB</td><td class="g">Lognormal</td><td class="g">Low</td><td class="g">High</td><td class="g">Rich</td></tr>
        <tr><td>Homeowners</td><td class="g">Poisson</td><td class="a">Pareto</td><td class="r">High</td><td class="a">Medium</td><td class="a">Good</td></tr>
        <tr><td>Commercial Property</td><td class="a">NB</td><td class="r">Heavy-tail</td><td class="r">Very High</td><td class="a">Growing</td><td class="a">Variable</td></tr>
        <tr><td>Workers Comp</td><td class="g">Poisson</td><td class="a">Weibull</td><td class="g">Low</td><td class="a">Medium</td><td class="g">Good</td></tr>
        <tr><td>Cyber</td><td class="r">Emerging</td><td class="r">Undefined</td><td class="r">Systemic</td><td class="a">Early</td><td class="r">Sparse</td></tr>
        <tr><td>Life / Mortality</td><td class="g">Mortality tables</td><td class="g">Deterministic</td><td class="g">Pandemic risk</td><td class="a">Growing</td><td class="g">Rich</td></tr>
    </tbody>
</table>
@endsection

@section('related')
<div class="rcard"><img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?w=600&q=70" alt="Principles"><div class="rcard-body"><div class="rcard-cat">Fundamentals</div><div class="rcard-title">Seven Principles of Insurance</div><p>The legal foundations governing every insurance contract — indemnity, insurable interest, and utmost good faith.</p></div></div>
<div class="rcard"><img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=600&q=70" alt="Underwriting"><div class="rcard-body"><div class="rcard-cat">Fundamentals</div><div class="rcard-title">Mortgage Underwriting Deep Dive</div><p>How actuarial risk models integrate with underwriter judgement in complex commercial risk assessment.</p></div></div>
<div class="rcard"><img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=600&q=70" alt="Premium"><div class="rcard-body"><div class="rcard-cat">Fundamentals</div><div class="rcard-title">Premium Calculation Framework</div><p>From pure premium to final rate — the mathematical journey of insurance pricing construction.</p></div></div>
@endsection