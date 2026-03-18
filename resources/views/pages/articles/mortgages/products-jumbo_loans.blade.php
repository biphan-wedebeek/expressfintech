@extends('layouts.mortgage')
@section('title','Jumbo Loans')
@section('hero_tag','Mortgage Products')
@section('hero_tag2','Non-Conforming')
@section('hero_title','Jumbo Loans: High-Value Property Financing')
@section('hero_subtitle','Mortgages above the conforming loan limit — how jumbo underwriting differs, why rates behave differently, and what lenders require for high-value property financing.')
@section('hero_date', seoUpdateMonth('mortgages-product-jumbo'))
@section('hero_read_time','9 min read')
@section('hero_img','https://images.unsplash.com/photo-1512917774080-9991f1c4c750?w=800&q=80')
@section('article_badge','Mortgage Products')
@section('last_updated', seoUpdateMonth('mortgages-product-jumbo'))
@section('nav_jumbo','on')
@section('hero_stats')
<div class="hstat"><div class="hstat-v">$806,500+</div><div class="hstat-l">Jumbo threshold {{ now()->year }}</div></div>
<div class="hstat"><div class="hstat-v">700+</div><div class="hstat-l">Credit score required</div></div>
<div class="hstat"><div class="hstat-v">20%</div><div class="hstat-l">Typical minimum down</div></div>
@endsection
@section('content')
<div class="sec">
    <div class="sec-hd"><div class="sec-num">01</div><h2>What Makes a Loan "Jumbo"?</h2></div>
    <p>A jumbo loan is any mortgage exceeding the conforming loan limits set by the FHFA — $806,500 for standard areas and up to $1,209,750 in designated high-cost markets in {{ now()->year }}. Because they exceed Fannie Mae and Freddie Mac purchase limits, jumbo loans cannot be securitized in standard agency MBS markets.</p>
    <p>Without the ability to sell to Fannie/Freddie, lenders hold jumbo loans on their own balance sheets or sell to private investors — requiring higher capital reserves and creating stricter qualification standards.</p>
    <div class="callout">
        <h3>Why Jumbo Rates Are Sometimes Lower</h3>
        <p>Historically, jumbo rates ran 0.25–0.5% above conforming rates due to the lack of agency backing. Post-2020, this relationship inverted in many periods — jumbo rates fell below conforming rates because wealthy borrowers with large down payments represent lower default risk, and banks actively competed for their deposits and relationships alongside the mortgage.</p>
    </div>
</div>
<div class="sec">
    <div class="sec-hd"><div class="sec-num">02</div><h2>Jumbo Qualification Standards</h2></div>
    <div class="tbl-wrap">
        <div class="tbl-head"><span>Jumbo Loan Requirements — Typical {{ now()->year }}</span><span class="tbl-badge">Portfolio Lender Standards</span></div>
        <table>
            <thead><tr><th>Criterion</th><th>Standard Jumbo</th><th>Super Jumbo (&gt;$2M)</th></tr></thead>
            <tbody>
                <tr><td>Minimum Credit Score</td><td class="a">700</td><td class="r">720–740+</td></tr>
                <tr><td>Down Payment</td><td class="a">20%</td><td class="r">25–30%</td></tr>
                <tr><td>DTI Limit</td><td class="a">43%</td><td class="r">38–40%</td></tr>
                <tr><td>Cash Reserves Post-Close</td><td class="a">12 months PITI</td><td class="r">18–24 months PITI</td></tr>
                <tr><td>Income Documentation</td><td>2 years full docs</td><td>2 years + asset statements</td></tr>
                <tr><td>PMI</td><td class="g">Rarely required</td><td class="g">Rarely required</td></tr>
                <tr><td>Appraisals</td><td>1 appraisal</td><td class="r">2 independent appraisals</td></tr>
            </tbody>
        </table>
    </div>
</div>
<div class="sec">
    <div class="sec-hd"><div class="sec-num">03</div><h2>Key Risks & Considerations</h2></div>
    <ul>
        <li><strong>Illiquid market</strong> — In financial crises, jumbo secondary markets freeze first. Lenders may withdraw jumbo products entirely during severe market stress (as seen in 2020 and 2023).</li>
        <li><strong>Rate volatility</strong> — Without agency backing, jumbo spreads fluctuate more with credit market conditions. Locking early is critical in volatile environments.</li>
        <li><strong>Relationship banking advantage</strong> — Major banks (JPMorgan, Wells Fargo, Bank of America) often offer relationship-based jumbo pricing to customers who bring significant deposit or investment accounts — sometimes 0.25–0.5% below market.</li>
        <li><strong>Concentration risk for borrower</strong> — A $2M+ mortgage represents enormous single-asset concentration. Ensure the property is a liquid asset in your target market before committing.</li>
    </ul>
</div>
@endsection
@section('related')
<div class="card"><img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?w=600&q=80" alt=""><div class="card-body"><div class="card-tag">Products</div><h4>Conventional Loans</h4><p>Conforming loan options for purchases below the $806,500 threshold.</p></div></div>
<div class="card"><img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?w=600&q=80" alt=""><div class="card-body"><div class="card-tag">Fundamentals</div><h4>Mortgage Underwriting</h4><p>How jumbo underwriting differs from conforming — the Four Cs under stricter scrutiny.</p></div></div>
<div class="card"><img src="https://images.unsplash.com/photo-1488590528505-98d2b5aba04b?w=600&q=80" alt=""><div class="card-body"><div class="card-tag">Market Analysis</div><h4>Housing Price Trends</h4><p>Luxury market dynamics and their impact on jumbo mortgage demand and pricing.</p></div></div>
@endsection