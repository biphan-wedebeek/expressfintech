@extends('layouts.mortgage')
@section('title','Amortization Structure')
@section('hero_tag','Mortgage Fundamentals')
@section('hero_tag2','Amortization')
@section('hero_title','Amortization Structure: Principal, Interest & Time')
@section('hero_subtitle','The mathematical mechanics of how mortgage payments are structured — why early payments are almost entirely interest, and how the schedule shifts over a 30-year term.')
@section('hero_date',' now()->format('F Y'))
@section('hero_read_time','10 min read')
@section('hero_img','https://images.unsplash.com/photo-1551836022-d5d88e9218df?w=800&q=80')
@section('article_badge','Mortgage Fundamentals')
@section('last_updated', now()->format('F Y'))
@section('nav_mechanisms','on')
@section('hero_stats')
<div class="hstat"><div class="hstat-v">360</div><div class="hstat-l">Payments on 30-yr mortgage</div></div>
<div class="hstat"><div class="hstat-v">~72%</div><div class="hstat-l">Interest at yr 1 payment</div></div>
<div class="hstat"><div class="hstat-v">15yr</div><div class="hstat-l">Midpoint equity crossover</div></div>
@endsection
@section('content')
<div class="sec">
    <div class="sec-hd"><div class="sec-num">01</div><h2>What Is Amortization?</h2></div>
    <p>Amortization is the process of gradually paying off a mortgage through a series of fixed monthly payments. Each payment covers interest owed for the current period plus a portion of the principal balance. Over the life of the loan, the interest portion decreases and the principal portion increases — even though the total payment stays the same.</p>
    <p>This structure is by design: lenders earn more interest when the balance is highest (early in the loan), while the borrower builds equity slowly at first, then rapidly in later years.</p>
    <div class="hl">
        <div class="hl-lbl">Key Formula</div>
        <p>Monthly Payment = P × [r(1+r)ⁿ] / [(1+r)ⁿ − 1] where P = principal, r = monthly rate, n = number of payments</p>
    </div>
</div>
<div class="sec">
    <div class="sec-hd"><div class="sec-num">02</div><h2>Amortization Schedule Example</h2></div>
    <p>For a $400,000 mortgage at 6.8% over 30 years, the monthly payment is $2,617. Here's how the payment splits at key points:</p>
    <div class="tbl-wrap">
        <div class="tbl-head"><span>Amortization Schedule — $400K at 6.8% / 30yr</span><span class="tbl-badge">Illustrative</span></div>
        <table>
            <thead><tr><th>Payment #</th><th>Month</th><th>Interest</th><th>Principal</th><th>Balance Remaining</th></tr></thead>
            <tbody>
                <tr><td>1</td><td>Month 1</td><td class="a">$2,267</td><td class="r">$350</td><td>$399,650</td></tr>
                <tr><td>60</td><td>Year 5</td><td class="a">$2,198</td><td class="r">$419</td><td>$385,700</td></tr>
                <tr><td>120</td><td>Year 10</td><td class="a">$2,097</td><td>$520</td><td>$369,000</td></tr>
                <tr><td>180</td><td>Year 15</td><td class="a">$1,952</td><td>$665</td><td>$346,200</td></tr>
                <tr><td>240</td><td>Year 20</td><td>$1,749</td><td>$868</td><td>$308,500</td></tr>
                <tr><td>300</td><td>Year 25</td><td>$1,449</td><td class="g">$1,168</td><td>$253,400</td></tr>
                <tr><td>360</td><td>Year 30</td><td class="g">$15</td><td class="g">$2,602</td><td>$0</td></tr>
            </tbody>
        </table>
    </div>
    <p style="font-size:12px;color:#9ca3af;margin-top:8px;">Note: Values rounded for illustration. Total interest paid over 30 years: ~$542,000 on a $400,000 loan.</p>
</div>
<div class="sec">
    <div class="sec-hd"><div class="sec-num">03</div><h2>Interest-Only vs Fully Amortizing</h2></div>
    <p>Interest-only mortgages require only interest payments for an initial period (typically 5–10 years), with no principal reduction. At the end of the interest-only period, the remaining balance must be paid off (balloon payment) or the loan resets to a fully amortizing schedule — resulting in significantly higher monthly payments.</p>
    <div class="callout">
        <h3>The Real Cost of Front-Loaded Interest</h3>
        <p>On a $400K loan at 6.8% over 30 years, you'll pay $542,000 in total interest — 135% of the original loan amount. In the first 10 years, you pay $219,000 in interest and only reduce the principal by $31,000. This is why extra principal payments in early years have outsized long-term impact.</p>
    </div>
</div>
<div class="sec">
    <div class="sec-hd"><div class="sec-num">04</div><h2>Accelerating Payoff with Extra Principal</h2></div>
    <p>Making additional principal payments — even small amounts — can shave years off a mortgage and save substantial interest. On a 30-year $400K loan at 6.8%:</p>
    <div class="metrics">
        <div class="mc"><div class="mc-v">$200/mo</div><div class="mc-l">Extra reduces term by ~5 years, saves ~$93K interest</div></div>
        <div class="mc"><div class="mc-v">$500/mo</div><div class="mc-l">Extra reduces term by ~9 years, saves ~$185K interest</div></div>
        <div class="mc"><div class="mc-v">1 extra/yr</div><div class="mc-l">Annual lump sum cuts ~4 years off term</div></div>
    </div>
</div>
@endsection
@section('related')
<div class="card"><img src="https://images.unsplash.com/photo-1554224154-26032ffc0d07?w=600&q=80" alt=""><div class="card-body"><div class="card-tag">Fundamentals</div><h4>Fixed vs Variable Rate</h4><p>How rate structure choice interacts with amortization — fixed vs ARM total cost analysis.</p></div></div>
<div class="card"><img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?w=600&q=80" alt=""><div class="card-body"><div class="card-tag">Strategy</div><h4>Refinance Strategies</h4><p>When refinancing resets the amortization clock — and when it's still worth it.</p></div></div>
<div class="card"><img src="https://images.unsplash.com/photo-1516156008625-3a9d6067fab5?w=600&q=80" alt=""><div class="card-body"><div class="card-tag">Fundamentals</div><h4>Loan-to-Value Ratio</h4><p>How LTV changes as you pay down principal — and when you can cancel PMI.</p></div></div>
@endsection