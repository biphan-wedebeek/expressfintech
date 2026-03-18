@extends('layouts.mortgage')
@section('title','Loan-to-Value Ratio')
@section('hero_tag','Mortgage Fundamentals')
@section('hero_tag2','LTV & Equity')
@section('hero_title','Loan-to-Value Ratio: Collateral, Equity & Risk')
@section('hero_subtitle','How LTV affects mortgage approval, interest rates, PMI requirements, and the path to building real equity in your home.')
@section('hero_date', now()->format('F Y'))
@section('hero_read_time','9 min read')
@section('hero_img','https://images.unsplash.com/photo-1554224155-6726b3ff858f?w=800&q=80')
@section('article_badge','Mortgage Fundamentals')
@section('last_updated', now()->format('F Y'))
@section('nav_ratio','on')
@section('hero_stats')
<div class="hstat"><div class="hstat-v">80%</div><div class="hstat-l">Conventional LTV limit</div></div>
<div class="hstat"><div class="hstat-v">96.5%</div><div class="hstat-l">Max FHA LTV</div></div>
<div class="hstat"><div class="hstat-v">20%</div><div class="hstat-l">Down payment to avoid PMI</div></div>
@endsection
@section('content')
<div class="sec">
    <div class="sec-hd"><div class="sec-num">01</div><h2>How LTV Is Calculated</h2></div>
    <p>The Loan-to-Value ratio expresses the mortgage amount as a percentage of the property's appraised value or purchase price (lenders use the lower of the two).</p>
    <div class="callout">
        <h3>LTV Formula</h3>
        <p>LTV = Loan Amount ÷ Appraised Value × 100 &nbsp;|&nbsp; Example: $320,000 loan on $400,000 home = 80% LTV</p>
    </div>
    <p>A lower LTV means the borrower has more equity, reducing lender risk. In default, a property must be sold for at least the outstanding loan amount for the lender to recover their funds — hence why high LTVs require mortgage insurance.</p>
</div>
<div class="sec">
    <div class="sec-hd"><div class="sec-num">02</div><h2>LTV Thresholds & Their Consequences</h2></div>
    <div class="tbl-wrap">
        <div class="tbl-head"><span>LTV Thresholds — Impact on Rate, PMI & Products</span><span class="tbl-badge">{{ now()->year }}</span></div>
        <table>
            <thead><tr><th>LTV Range</th><th>Down Payment</th><th>PMI Required</th><th>Rate Impact</th><th>Products Available</th></tr></thead>
            <tbody>
                <tr><td>≤ 60%</td><td class="g">40%+</td><td class="g">No</td><td class="g">Best rates</td><td>All products</td></tr>
                <tr><td>61–75%</td><td class="g">25–39%</td><td class="g">No</td><td class="g">Very good</td><td>All products</td></tr>
                <tr><td>76–80%</td><td class="a">20–24%</td><td class="g">No</td><td class="a">Standard</td><td>Conventional, jumbo</td></tr>
                <tr><td>81–95%</td><td class="r">5–19%</td><td class="r">Yes</td><td class="r">+0.2–0.5%</td><td>Conventional, FHA</td></tr>
                <tr><td>96.5%</td><td class="r">3.5%</td><td class="r">Yes (lifetime)</td><td class="r">FHA rate</td><td>FHA only</td></tr>
                <tr><td>100%</td><td class="g">0%</td><td class="g">No (fee instead)</td><td class="a">VA rate</td><td>VA / USDA only</td></tr>
            </tbody>
        </table>
    </div>
</div>
<div class="sec">
    <div class="sec-hd"><div class="sec-num">03</div><h2>Private Mortgage Insurance (PMI)</h2></div>
    <p>PMI protects the lender (not the borrower) if the borrower defaults when LTV exceeds 80%. PMI costs typically range from 0.5–1.5% of the loan amount annually, added to the monthly mortgage payment.</p>
    <ul>
        <li><strong>Cancellation</strong> — Under the Homeowners Protection Act, PMI must be automatically canceled when LTV reaches 78% based on the original amortization schedule.</li>
        <li><strong>Request cancellation at 80%</strong> — You can request cancellation once LTV hits 80% through payments, and the lender may also accept an updated appraisal showing appreciation-driven LTV improvement.</li>
        <li><strong>FHA MIP</strong> — FHA mortgage insurance premiums are paid for the life of the loan (originated after 2013 with &lt;10% down) — a significant long-term cost.</li>
    </ul>
    <div class="hl">
        <div class="hl-lbl">PMI Cost Example</div>
        <p>On a $380,000 loan with 1% annual PMI, the monthly cost is $317 — an additional $3,800/year until LTV reaches 78%. At 4 years to reach 78% LTV, that's ~$15,200 in PMI payments alone.</p>
    </div>
</div>
<div class="sec">
    <div class="sec-hd"><div class="sec-num">04</div><h2>CLTV — Combined Loan-to-Value</h2></div>
    <p>When a borrower takes both a first mortgage and a second mortgage (HELOC or piggyback loan), lenders calculate the Combined LTV (CLTV) — the total of all loans as a percentage of property value. Lenders typically cap CLTV at 80–90% for conventional products.</p>
    <p>The 80/10/10 "piggyback" structure — 80% first mortgage, 10% second mortgage, 10% down — is used to avoid PMI while borrowing above 80% LTV.</p>
</div>
@endsection
@section('related')
<div class="card"><img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?w=600&q=80" alt=""><div class="card-body"><div class="card-tag">Fundamentals</div><h4>Mortgage Underwriting</h4><p>How LTV is evaluated alongside credit and income in the underwriting decision.</p></div></div>
<div class="card"><img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?w=600&q=80" alt=""><div class="card-body"><div class="card-tag">Products</div><h4>Conventional Loans</h4><p>LTV thresholds, PMI requirements, and conforming loan limits for {{ now()->year }}.</p></div></div>
<div class="card"><img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?w=600&q=80" alt=""><div class="card-body"><div class="card-tag">Strategy</div><h4>Refinance Strategies</h4><p>Using LTV improvement through appreciation or paydown to access better rates.</p></div></div>
@endsection