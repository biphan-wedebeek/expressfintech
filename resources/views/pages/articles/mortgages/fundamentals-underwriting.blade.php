@extends('layouts.mortgage')
@section('title','Mortgage Underwriting')
@section('hero_tag','Mortgage Fundamentals')
@section('hero_tag2','Underwriting')
@section('hero_title','Mortgage Underwriting The Approval Decision Process')
@section('hero_subtitle','How lenders evaluate mortgage applications — the credit, income, asset, and property criteria that determine approval, pricing, and loan terms.')
@section('hero_date','March 2026')
@section('hero_read_time','12 min read')
@section('hero_img','https://images.unsplash.com/photo-1450101499163-c8848c66ca85?w=800&q=80')
@section('article_badge','Mortgage Fundamentals')
@section('last_updated','March 2026')
@section('nav_underwriting','on')
@section('hero_stats')
<div class="hstat"><div class="hstat-v">620</div><div class="hstat-l">Min. conventional credit score</div></div>
<div class="hstat"><div class="hstat-v">43%</div><div class="hstat-l">Max back-end DTI</div></div>
<div class="hstat"><div class="hstat-v">45d</div><div class="hstat-l">Avg underwriting time</div></div>
@endsection
@section('content')
<div class="sec">
    <div class="sec-hd"><div class="sec-num">01</div><h2>The Four Pillars of Underwriting</h2></div>
    <p>Mortgage underwriting evaluates four core dimensions — known in the industry as the "Four Cs": Credit, Capacity, Capital, and Collateral. Together, they form the framework for every lending decision.</p>
    <div class="metrics">
        <div class="mc"><div class="mc-v" style="font-size:22px;">Credit</div><div class="mc-l">Credit score, history, derogatory marks, payment behaviour</div></div>
        <div class="mc"><div class="mc-v" style="font-size:22px;">Capacity</div><div class="mc-l">Income verification, DTI ratios, employment stability</div></div>
        <div class="mc"><div class="mc-v" style="font-size:22px;">Capital</div><div class="mc-l">Down payment, reserves, assets available after closing</div></div>
        <div class="mc" style="grid-column:span 3;"><div class="mc-v" style="font-size:22px;">Collateral</div><div class="mc-l">Property appraisal, condition, location, and marketability — determines recovery value in default</div></div>
    </div>
</div>
<div class="sec">
    <div class="sec-hd"><div class="sec-num">02</div><h2>Credit Assessment</h2></div>
    <p>The underwriter reviews the borrower's credit report from all three bureaus (Equifax, Experian, TransUnion) and uses the middle FICO score for qualification. Key items reviewed:</p>
    <ul>
        <li><strong>Payment history</strong> — Any 30/60/90-day lates in the past 24 months are scrutinized; recent lates have greater impact than older ones.</li>
        <li><strong>Collections and charge-offs</strong> — May need to be paid off at closing depending on lender policy and loan type.</li>
        <li><strong>Mortgage lates</strong> — Especially damaging; prior mortgage lates within 12 months can disqualify an application entirely.</li>
        <li><strong>Bankruptcy / foreclosure</strong> — Waiting periods: 2–7 years depending on loan type and type of derogatory event.</li>
    </ul>
    <div class="tbl-wrap">
        <div class="tbl-head"><span>Credit Score Thresholds by Loan Type</span><span class="tbl-badge">2026</span></div>
        <table>
            <thead><tr><th>Loan Type</th><th>Minimum Score</th><th>Best Rate Score</th><th>Notes</th></tr></thead>
            <tbody>
                <tr><td>Conventional</td><td class="a">620</td><td class="g">740+</td><td>PMI required &lt;20% down</td></tr>
                <tr><td>FHA</td><td class="g">580</td><td class="a">640+</td><td>3.5% down; lifetime MIP</td></tr>
                <tr><td>VA</td><td class="a">620*</td><td class="g">680+</td><td>No down payment required</td></tr>
                <tr><td>Jumbo</td><td class="r">700</td><td class="g">760+</td><td>Lender-specific, stricter</td></tr>
            </tbody>
        </table>
    </div>
</div>
<div class="sec">
    <div class="sec-hd"><div class="sec-num">03</div><h2>Income & DTI Analysis</h2></div>
    <p>The debt-to-income ratio compares monthly debt obligations to gross monthly income. Two ratios are calculated:</p>
    <div class="steps">
        <div class="step">
            <div class="step-l"><div class="step-dot">1</div></div>
            <div class="step-box">
                <div class="step-title">Front-End DTI (Housing Ratio)</div>
                <div class="step-body">PITI (Principal + Interest + Taxes + Insurance) ÷ Gross Monthly Income. Conventional limit: typically 28%. FHA: up to 31% with compensating factors.</div>
            </div>
        </div>
        <div class="step">
            <div class="step-l"><div class="step-dot">2</div></div>
            <div class="step-box">
                <div class="step-title">Back-End DTI (Total Debt Ratio)</div>
                <div class="step-body">All monthly debt payments (housing + car + student loans + credit cards) ÷ Gross Monthly Income. Conventional cap: 43–45%. FHA: up to 57% with strong compensating factors.</div>
            </div>
        </div>
        <div class="step">
            <div class="step-l"><div class="step-dot">3</div></div>
            <div class="step-box">
                <div class="step-title">Self-Employed Borrowers</div>
                <div class="step-body">Income is averaged over 2 years of tax returns using net income after business deductions — not gross revenue. Business write-offs that reduce taxable income also reduce qualifying income, a common challenge for self-employed borrowers.</div>
            </div>
        </div>
    </div>
</div>
<div class="sec">
    <div class="sec-hd"><div class="sec-num">04</div><h2>Property Appraisal & Collateral</h2></div>
    <p>An independent appraisal is required on every purchase and refinance. The appraiser determines fair market value using the sales comparison approach (comparing recent nearby sales), the income approach (for investment properties), and the cost approach (rarely used for existing homes).</p>
    <div class="callout">
        <h3>What Happens If the Appraisal Comes In Low?</h3>
        <p>If the appraisal is below the purchase price, the lender will only lend against the appraised value. The buyer must either renegotiate the price, pay the difference in cash, or cancel the contract (if an appraisal contingency was included). Low appraisals are one of the most common deal-killers in rising markets.</p>
    </div>
</div>
@endsection
@section('related')
<div class="card"><img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?w=600&q=80" alt=""><div class="card-body"><div class="card-tag">Fundamentals</div><h4>Loan-to-Value Ratio</h4><p>How the LTV calculation interacts with underwriting requirements and PMI thresholds.</p></div></div>
<div class="card"><img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?w=600&q=80" alt=""><div class="card-body"><div class="card-tag">Products</div><h4>FHA / VA Loans</h4><p>Government-backed alternatives with more flexible underwriting criteria for first-time buyers.</p></div></div>
<div class="card"><img src="https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?w=600&q=80" alt=""><div class="card-body"><div class="card-tag">Products</div><h4>Jumbo Loans</h4><p>Non-conforming loans with stricter underwriting standards for high-value properties.</p></div></div>
@endsection