@extends('layouts.mortgage')
@section('title','Mortgage-backed Securities')
@section('hero_tag','Market Analysis')
@section('hero_tag2','MBS Markets')
@section('hero_title','Mortgage-backed Securities: How Mortgages Become Bonds')
@section('hero_subtitle','The securitization chain from mortgage origination to MBS — how Fannie, Freddie, and Ginnie Mae operate, and why MBS spreads directly affect the rate on your loan.')
@section('hero_date','March 2026')
@section('hero_read_time','12 min read')
@section('hero_img','https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?w=800&q=80')
@section('article_badge','Market Analysis')
@section('last_updated','March 2026')
@section('nav_securities','on')
@section('hero_stats')
<div class="hstat"><div class="hstat-v">$12T</div><div class="hstat-l">Total MBS outstanding</div></div>
<div class="hstat"><div class="hstat-v">70%+</div><div class="hstat-l">US mortgages securitized</div></div>
<div class="hstat"><div class="hstat-v">+1.7%</div><div class="hstat-l">Current MBS-Treasury spread</div></div>
@endsection
@section('content')
<div class="sec">
    <div class="sec-hd"><div class="sec-num">01</div><h2>What Are Mortgage-backed Securities?</h2></div>
    <p>When you take out a mortgage, your lender typically doesn't hold it for 30 years. Instead, they sell it into the secondary market — where it is pooled with thousands of similar mortgages and issued as a bond (MBS) to investors seeking fixed income. This securitization process allows lenders to recycle capital, dramatically expanding mortgage availability.</p>
    <div class="steps">
        <div class="step"><div class="step-l"><div class="step-dot">1</div></div><div class="step-box"><div class="step-title">Mortgage Origination</div><div class="step-body">Lender underwrites and funds the loan, collecting a fee. The loan is immediately eligible for sale if it meets agency guidelines.</div></div></div>
        <div class="step"><div class="step-l"><div class="step-dot">2</div></div><div class="step-box"><div class="step-title">Loan Sale to Agency</div><div class="step-body">Lender sells conforming loans to Fannie Mae or Freddie Mac, or FHA/VA loans to Ginnie Mae, receiving cash to fund new originations.</div></div></div>
        <div class="step"><div class="step-l"><div class="step-dot">3</div></div><div class="step-box"><div class="step-title">Securitization into MBS</div><div class="step-body">The agency pools thousands of loans and issues MBS with different tranches. Agency MBS carry an implicit or explicit government guarantee.</div></div></div>
        <div class="step"><div class="step-l"><div class="step-dot">4</div></div><div class="step-box"><div class="step-title">Sale to Investors</div><div class="step-body">MBS are purchased by pension funds, central banks, insurance companies, and the Fed. Monthly mortgage payments flow through to MBS investors as principal and interest.</div></div></div>
    </div>
</div>
<div class="sec">
    <div class="sec-hd"><div class="sec-num">02</div><h2>The GSEs — Fannie, Freddie & Ginnie</h2></div>
    <div class="tbl-wrap">
        <div class="tbl-head"><span>Agency Comparison</span><span class="tbl-badge">2026</span></div>
        <table>
            <thead><tr><th>Agency</th><th>Type</th><th>Loans Backed</th><th>Government Status</th><th>MBS Share</th></tr></thead>
            <tbody>
                <tr><td>Fannie Mae (FNMA)</td><td>GSE (conservatorship)</td><td>Conventional conforming</td><td>Implicit guarantee</td><td class="g">~38%</td></tr>
                <tr><td>Freddie Mac (FHLMC)</td><td>GSE (conservatorship)</td><td>Conventional conforming</td><td>Implicit guarantee</td><td class="a">~22%</td></tr>
                <tr><td>Ginnie Mae (GNMA)</td><td>Government agency</td><td>FHA, VA, USDA</td><td class="g">Full guarantee</td><td>~22%</td></tr>
            </tbody>
        </table>
    </div>
</div>
<div class="sec">
    <div class="sec-hd"><div class="sec-num">03</div><h2>MBS Spreads & Mortgage Rates</h2></div>
    <p>MBS trade at a yield spread above comparable US Treasury notes to compensate for prepayment risk — the risk that homeowners refinance or sell early, returning principal sooner than expected and disrupting cash flow to investors.</p>
    <div class="callout">
        <h3>Why Spreads Move Rates Without Treasury Yields Moving</h3>
        <p>In Q4 2022, the 10-year Treasury yield was ~3.8%, but 30-year mortgage rates hit 7.1% — a spread of over 3% vs the historical 1.5–1.7%. The Fed's MBS balance sheet reduction (quantitative tightening) removed a major buyer from the market, pushing spreads wide. The spread is as important as the Treasury yield itself for mortgage pricing.</p>
    </div>
</div>
@endsection
@section('related')
<div class="card"><img src="https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?w=600&q=80" alt=""><div class="card-body"><div class="card-tag">Fundamentals</div><h4>Interest Rate Mechanisms</h4><p>How MBS spreads transmit into the mortgage rates offered to individual borrowers.</p></div></div>
<div class="card"><img src="https://images.unsplash.com/photo-1488590528505-98d2b5aba04b?w=600&q=80" alt=""><div class="card-body"><div class="card-tag">Market Analysis</div><h4>Rate Forecasting 2026</h4><p>Fed QT and MBS market dynamics — rate forecast scenarios for 2026–2027.</p></div></div>
<div class="card"><img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=600&q=80" alt=""><div class="card-body"><div class="card-tag">Market Analysis</div><h4>Regulatory Impact</h4><p>GSE reform proposals and their potential impact on MBS markets and mortgage pricing.</p></div></div>
@endsection