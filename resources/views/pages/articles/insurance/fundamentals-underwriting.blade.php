@extends('layouts.insurance')
@section('title','Insurance Underwriting')
@section('cover_kicker','Insurance Fundamentals · Underwriting')
@section('cover_h1_line1','Insurance')
@section('cover_h1_em','Underwriting')
@section('cover_deck','The art and science of risk selection — how underwriters evaluate, accept, price, and structure insurance coverage for individual and portfolio risk management.')
@section('cover_date', seoUpdateMonth('insurance-funda-underwriting'))
@section('cover_read','13 min')
@section('cover_topic','Underwriting Process')
@section('cover_img','https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=800&q=80')
@section('cover_stats')
<div class="bg-[var(--navy)] py-[14px] px-[18px]"><div class="font-['Cormorant_Garamond'] text-2xl font-bold text-[var(--white)] leading-none">94.2%</div><div class="text-[9.5px] text-white/35 uppercase tracking-[0.1em] mt-[3px]">Target Combined Ratio</div></div>
<div class="bg-[var(--navy)] py-[14px] px-[18px]"><div class="font-['Cormorant_Garamond'] text-2xl font-bold text-[var(--white)] leading-none">–40%</div><div class="text-[9.5px] text-white/35 uppercase tracking-[0.1em] mt-[3px]">Turnaround via Digital Platforms</div></div>
<div class="bg-[var(--navy)] py-[14px] px-[18px]"><div class="font-['Cormorant_Garamond'] text-2xl font-bold text-[var(--white)] leading-none">$2.1T</div><div class="text-[9.5px] text-white/35 uppercase tracking-[0.1em] mt-[3px]">Commercial P&C Premiums Written</div></div>
<div class="bg-[var(--navy)] py-[14px] px-[18px]"><div class="font-['Cormorant_Garamond'] text-2xl font-bold text-[var(--white)] leading-none">72%</div><div class="text-[9.5px] text-white/35 uppercase tracking-[0.1em] mt-[3px]">Submissions Never Quoted</div></div>
@endsection
@section('block_label','Underwriting — Four Core Disciplines')
@section('content')

<div class="p-item">
    <div class="p-index"><div class="p-index-num">01</div><div class="p-index-line"></div></div>
    <div class="p-body">
        <div class="p-tag">Risk Selection</div>
        <h2 class="p-title">The Underwriter's <em>Primary Mandate</em></h2>
        <p class="p-text">Underwriting is fundamentally a <strong>risk selection</strong> exercise. The underwriter's role is not to insure every risk submitted — it is to construct a portfolio of risks whose expected losses, after expenses, generate an adequate return on capital. Adverse selection is the existential threat: a portfolio that attracts disproportionate bad risks will collapse under its own loss experience.</p>
        <p class="p-text">The acceptance decision integrates three dimensions: <strong>risk quality</strong> (does the exposure meet appetite?), <strong>portfolio fit</strong> (does it diversify or concentrate the book?), and <strong>rate adequacy</strong> (does the premium cover expected loss plus an acceptable margin?).</p>
        <div class="p-note">
            <div class="p-note-label">Market Reality</div>
            <p>Leading commercial lines underwriters decline or exclude approximately <strong>72% of submissions</strong> without quoting — a ratio that reflects the importance of broker relationships, pre-screening, and clear appetite communication in efficient market functioning.</p>
        </div>
    </div>
</div>

<div class="p-item">
    <div class="p-index"><div class="p-index-num">02</div><div class="p-index-line"></div></div>
    <div class="p-body">
        <div class="p-tag">The Combined Ratio</div>
        <h2 class="p-title">Measuring <em>Underwriting Profitability</em></h2>
        <p class="p-text">The combined ratio is the single most important metric in P&C underwriting. It expresses the sum of the <strong>loss ratio</strong> (losses ÷ premium) and the <strong>expense ratio</strong> (expenses ÷ premium). A combined ratio below 100% indicates an underwriting profit; above 100% indicates a loss.</p>
        <div class="p-quote">
            <p>"Combined Ratio = (Incurred Losses + LAE) ÷ Earned Premium + Operating Expenses ÷ Written Premium"</p>
            <cite>— Industry standard formula, all P&C lines</cite>
        </div>
        <p class="p-text">Most major commercial P&C insurers target a combined ratio of 92–96%, with the remaining 4–8% representing underwriting profit before investment income. The investment portfolio provides a critical buffer — but hard market conditions force a return to underwriting discipline as interest rates and investment returns fluctuate.</p>
    </div>
</div>

<div class="p-item" id="section-03">
    <div class="p-index"><div class="p-index-num">03</div><div class="p-index-line"></div></div>
    <div class="p-body">
        <div class="p-tag">Digital Transformation</div>
        <h2 class="p-title">Straight-Through Processing & <em>Digital Underwriting</em></h2>
        <p class="p-text">The most significant operational shift in underwriting over the past decade is the emergence of <strong>straight-through processing (STP)</strong> for lower-complexity risks. Rules-based engines with ML overlays can now quote, bind, and issue policies for SME commercial risks in minutes — without human underwriter involvement.</p>
        <img class="p-img" src="https://images.unsplash.com/photo-1518770660439-4636190af475?w=900&q=80" alt="Digital underwriting">
        <p class="p-img-caption">Digital submission platforms — reducing manual data entry and improving risk data quality at point of submission</p>
        <p class="p-text">Digital platforms have reduced average submission-to-quote turnaround by 40% across commercial SME lines. The human underwriter increasingly focuses on complex, bespoke, and large-account risks where judgement adds value that algorithms cannot replicate.</p>
    </div>
</div>

<div class="p-item">
    <div class="p-index"><div class="p-index-num">04</div><div class="p-index-line"></div></div>
    <div class="p-body">
        <div class="p-tag">Cycle Management</div>
        <h2 class="p-title">Hard & Soft Markets: <em>Underwriting Discipline</em></h2>
        <p class="p-text">The insurance market moves in cycles driven by capacity, competition, and loss experience. In a <strong>soft market</strong>, excess capacity drives rate competition and loosened terms — underwriting discipline erodes. In a <strong>hard market</strong>, post-CAT loss capacity withdrawal drives rate increases, tightened terms, and reduced coverage availability.</p>
        <p class="p-text">2023–{{ now()->year }} represents one of the most sustained hard market cycles since the post-9/11 hardening. Average commercial P&C rates increased 15–22% across major lines, with property cat and cyber experiencing 30–50%+ rate movement in peak stress years.</p>
        <div class="p-note">
            <div class="p-note-label">{{ now()->year }} Cycle Position</div>
            <p>The market is transitioning from hard to <strong>moderating</strong> — rates continue rising but at a slowing pace. Property cat remains technically stressed; liability is showing early signs of softening in lower-hazard segments. Cyber is stabilising after 2021–2023 volatility.</p>
        </div>
    </div>
</div>

@endsection
@section('metrics_band')
<div class="mitem"><div class="mitem-v">94.2%</div><div class="mitem-l">Average Target Combined Ratio</div></div>
<div class="mitem"><div class="mitem-v">–40%</div><div class="mitem-l">Digital Turnaround Improvement</div></div>
<div class="mitem"><div class="mitem-v">+18%</div><div class="mitem-l">Avg Commercial Rate Increase</div></div>
<div class="mitem"><div class="mitem-v">72%</div><div class="mitem-l">Submissions Declined Without Quote</div></div>
@endsection
@section('process_title','Underwriting Decision Workflow')
@section('process_subtitle','Four Stages')
@section('process')
<div class="pstep"><div class="pstep-n">01</div><div class="pstep-title">Submission & Triage</div><div class="pstep-body">Risk submission received from broker — triaged against appetite criteria. Off-appetite risks declined; in-appetite risks assigned to appropriate underwriting tier.</div></div>
<div class="pstep"><div class="pstep-n">02</div><div class="pstep-title">Risk Evaluation</div><div class="pstep-body">Underwriter reviews material facts, claims history, site surveys, and third-party data. Technical rate calculated using approved rating algorithms and benchmarks.</div></div>
<div class="pstep"><div class="pstep-n">03</div><div class="pstep-title">Terms & Conditions</div><div class="pstep-body">Coverage structure, sublimits, deductibles, and exclusions negotiated. Reinsurance panel notified for large or unusual risks requiring facultative protection.</div></div>
<div class="pstep"><div class="pstep-n">04</div><div class="pstep-title">Bind & Monitor</div><div class="pstep-body">Risk bound; policy issued. Exposure added to portfolio accumulation monitoring. Annual renewal cycle initiated 90–120 days before expiry.</div></div>
@endsection
@section('table_title','Underwriting — Line of Business Summary')
@section('ins_table')
<table>
    <thead><tr><th>Line</th><th>2025 Combined Ratio</th><th>Rate Movement</th><th>STP Capability</th><th>Market Trend</th></tr></thead>
    <tbody>
        <tr><td>Property Cat</td><td class="r">108%</td><td class="g">+25–40%</td><td class="r">Low</td><td class="g">Hardening</td></tr>
        <tr><td>General Liability</td><td class="a">97%</td><td class="a">+8–12%</td><td class="a">Medium</td><td class="a">Moderating</td></tr>
        <tr><td>Workers Comp</td><td class="g">88%</td><td class="a">Flat</td><td class="g">High</td><td class="a">Soft</td></tr>
        <tr><td>Cyber</td><td class="a">91%</td><td class="a">–5–+10%</td><td class="a">Growing</td><td class="a">Stabilising</td></tr>
        <tr><td>Personal Auto</td><td class="r">106%</td><td class="g">+15–22%</td><td class="g">Very High</td><td class="g">Hardening</td></tr>
        <tr><td>Directors & Officers</td><td class="g">89%</td><td class="a">–3–+5%</td><td class="r">Low</td><td class="a">Softening</td></tr>
    </tbody>
</table>
@endsection
@section('related')
<div class="rcard"><img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=600&q=70" alt="Risk"><div class="rcard-body"><div class="rcard-cat">Fundamentals</div><div class="rcard-title">Risk Assessment Models</div><p>The actuarial and ML frameworks that feed the underwriting pricing decision.</p></div></div>
<div class="rcard"><img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?w=600&q=70" alt="Premium"><div class="rcard-body"><div class="rcard-cat">Fundamentals</div><div class="rcard-title">Premium Calculation Framework</div><p>From technical rate to final premium — expense loads, profit margins, and competitive positioning.</p></div></div>
<div class="rcard"><img src="https://images.unsplash.com/photo-1516156008625-3a9d6067fab5?w=600&q=70" alt="Reinsurance"><div class="rcard-body"><div class="rcard-cat">Categories</div><div class="rcard-title">Reinsurance Structures</div><p>How underwriters use reinsurance to manage accumulation, tail risk, and capital efficiency.</p></div></div>
@endsection