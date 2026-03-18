@extends('layouts.mortgage')
@section('title','FHA & VA Loans')
@section('hero_tag','Mortgage Products')
@section('hero_tag2','Government-Backed')
@section('hero_title','FHA & VA Loans: Government-Backed Mortgages')
@section('hero_subtitle','Complete analysis of FHA and VA loan programs — eligibility, costs, benefits, and how they compare for first-time buyers and veterans in '. now()->year )
@section('hero_date', seoUpdateMonth('mortgages-product-fha'))
@section('hero_read_time','11 min read')
@section('hero_img','https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?w=800&q=80')
@section('article_badge','Mortgage Products')
@section('last_updated', seoUpdateMonth('mortgages-product-fha'))
@section('nav_fha_va','on')
@section('hero_stats')
<div class="hstat"><div class="hstat-v">3.5%</div><div class="hstat-l">FHA minimum down payment</div></div>
<div class="hstat"><div class="hstat-v">0%</div><div class="hstat-l">VA down payment required</div></div>
<div class="hstat"><div class="hstat-v">580</div><div class="hstat-l">FHA minimum credit score</div></div>
@endsection
@section('content')
<div class="sec">
    <div class="sec-hd"><div class="sec-num">01</div><h2>FHA Loans — Federal Housing Administration</h2></div>
    <p>FHA loans are insured by the Federal Housing Administration, allowing lenders to offer more flexible qualification criteria. First introduced in 1934 to stimulate housing market activity, FHA loans remain the primary vehicle for first-time buyers and those with limited savings or credit history.</p>
    <ul>
        <li><strong>Minimum 3.5% down payment</strong> with a credit score of 580+</li>
        <li><strong>10% down payment</strong> accepted for scores 500–579</li>
        <li><strong>DTI limits</strong> — Front-end 31% / Back-end 43% (up to 57% with strong compensating factors)</li>
        <li><strong>MIP (Mortgage Insurance Premium)</strong> — 1.75% upfront + annual 0.55–1.05% depending on term and LTV</li>
        <li><strong>Loan limits</strong> — $524,225 standard; $1,149,825 high-cost areas ({{ now()->year }})</li>
    </ul>
    <div class="callout">
        <h3>The FHA MIP Trap</h3>
        <p>Unlike conventional PMI which cancels at 80% LTV, FHA MIP is typically paid for the life of the loan (for loans originated after June 2013 with &lt;10% down). On a $350K loan at 0.55% annual MIP, that's $1,925/year for 30 years — $57,750 in total MIP. Refinancing into a conventional loan once LTV reaches 80% is often the optimal exit strategy.</p>
    </div>
</div>
<div class="sec">
    <div class="sec-hd"><div class="sec-num">02</div><h2>VA Loans — Department of Veterans Affairs</h2></div>
    <p>VA loans are guaranteed by the Department of Veterans Affairs for eligible veterans, active-duty service members, National Guard, and qualifying surviving spouses. They offer the most favorable terms available in the US mortgage market for those who qualify.</p>
    <ul>
        <li><strong>No down payment required</strong> — 100% financing on primary residences</li>
        <li><strong>No PMI</strong> — The VA guarantee eliminates private mortgage insurance entirely</li>
        <li><strong>No loan limits</strong> — VA-eligible borrowers can finance any amount; lenders may still have overlays</li>
        <li><strong>VA Funding Fee</strong> — One-time fee of 1.25–3.3% of loan amount (varies by use and down payment); exempt if receiving VA disability compensation</li>
        <li><strong>Credit</strong> — VA sets no minimum but most lenders require 620+</li>
    </ul>
    <div class="hl">
        <div class="hl-lbl">VA vs FHA — Who Wins?</div>
        <p>For eligible veterans, VA loans almost always outperform FHA: no down payment, no PMI, lower rates, and no lifetime insurance cost. The VA funding fee is a one-time upfront cost vs decades of FHA MIP payments.</p>
    </div>
</div>
<div class="sec">
    <div class="sec-hd"><div class="sec-num">03</div><h2>FHA vs VA — Side-by-Side</h2></div>
    <div class="tbl-wrap">
        <div class="tbl-head"><span>FHA vs VA — Key Parameter Comparison</span><span class="tbl-badge">{{ now()->year }}</span></div>
        <table>
            <thead><tr><th>Feature</th><th>FHA</th><th>VA</th></tr></thead>
            <tbody>
                <tr><td>Down Payment</td><td class="a">3.5% (580+ score)</td><td class="g">0%</td></tr>
                <tr><td>Insurance/Guarantee</td><td class="r">Lifetime MIP</td><td class="g">Funding fee (once)</td></tr>
                <tr><td>Min. Credit Score</td><td class="g">580</td><td class="a">620 (lender overlay)</td></tr>
                <tr><td>Loan Limits</td><td class="r">$524,225 standard</td><td class="g">No limit</td></tr>
                <tr><td>Occupancy</td><td>Primary only</td><td>Primary only</td></tr>
                <tr><td>Property Standards</td><td class="r">Strict (FHA appraisal)</td><td class="r">Must pass VA appraisal</td></tr>
                <tr><td>Eligibility</td><td class="g">Anyone</td><td class="r">Veterans / service members</td></tr>
                <tr><td>Typical Rate vs Conventional</td><td class="a">+0.1–0.3%</td><td class="g">–0.1–0.2%</td></tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
@section('related')
<div class="card"><img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?w=600&q=80" alt=""><div class="card-body"><div class="card-tag">Products</div><h4>Conventional Loans</h4><p>Standard conforming mortgage options for borrowers with strong credit and down payment.</p></div></div>
<div class="card"><img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?w=600&q=80" alt=""><div class="card-body"><div class="card-tag">Fundamentals</div><h4>Mortgage Underwriting</h4><p>How FHA and VA applications are evaluated differently from conventional underwriting.</p></div></div>
<div class="card"><img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?w=600&q=80" alt=""><div class="card-body"><div class="card-tag">Strategy</div><h4>Refinance Strategies</h4><p>When to exit FHA MIP by refinancing into conventional — and how to time it.</p></div></div>
@endsection