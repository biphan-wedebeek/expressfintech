@extends('layouts.mortgage')
@section('title','Fixed vs Variable Rate Mortgages')
@section('hero_tag','Mortgage Fundamentals')
@section('hero_tag2','Rate Structures')
@section('hero_title','Fixed vs Variable Rate Mortgages Explained')
@section('hero_subtitle','A rigorous comparison of fixed and variable (adjustable) mortgage rate structures — how each works, how they are priced, and how to choose between them.')
@section('hero_date', now()->format('F Y'))
@section('hero_read_time','11 min read')
@section('hero_img','https://images.unsplash.com/photo-1554224154-26032ffc0d07?w=800&q=80')
@section('hero_img_alt','Fixed vs variable rate mortgage')
@section('article_badge','Mortgage Fundamentals')
@section('last_updated', now()->format('F Y'))
@section('nav_structure','on')
@section('hero_stats')
<div class="hstat"><div class="hstat-v">6.8%</div><div class="hstat-l">Avg 30-yr Fixed {{ now()->year }}</div></div>
<div class="hstat"><div class="hstat-v">6.1%</div><div class="hstat-l">Avg 5/1 ARM {{ now()->year }}</div></div>
<div class="hstat"><div class="hstat-v">0.7%</div><div class="hstat-l">Initial Rate Spread</div></div>
@endsection
@section('content')
<div class="sec">
    <div class="sec-hd"><div class="sec-num">01</div><h2>What Is a Fixed-Rate Mortgage?</h2></div>
    <p>A fixed-rate mortgage locks the interest rate for the entire loan term — typically 15 or 30 years. Monthly payments remain identical throughout, making budgeting straightforward and providing complete protection against rate increases.</p>
    <p>Fixed rates are priced based on the 10-year US Treasury yield plus a spread that reflects mortgage prepayment risk and lender profit margin. When Treasury yields rise, fixed mortgage rates follow.</p>
    <div class="hl">
        <div class="hl-lbl">Key Advantage</div>
        <p>Fixed-rate mortgages eliminate interest rate risk entirely for the borrower. In a rising rate environment, locking in a fixed rate can save tens of thousands over the loan term.</p>
    </div>
</div>
<div class="sec">
    <div class="sec-hd"><div class="sec-num">02</div><h2>What Is a Variable-Rate (ARM) Mortgage?</h2></div>
    <p>Adjustable-rate mortgages (ARMs) begin with a fixed introductory period — typically 5, 7, or 10 years — then adjust annually based on a benchmark index (SOFR, 1-year Treasury) plus a margin set by the lender. The 5/1 ARM adjusts every year after the initial 5-year fixed period.</p>
    <p>Caps limit how much the rate can move: a typical 2/2/5 cap structure means the rate cannot rise more than 2% at first adjustment, 2% at any subsequent adjustment, and 5% above the initial rate ever.</p>
    <div class="callout">
        <h3>Understanding ARM Caps</h3>
        <p>A 5/1 ARM starting at 6.1% with 2/2/5 caps can never exceed 11.1%. At first adjustment after 5 years, the maximum rate is 8.1%. Understanding caps transforms ARM risk from abstract to quantifiable.</p>
    </div>
</div>
<div class="sec">
    <div class="sec-hd"><div class="sec-num">03</div><h2>Side-by-Side Comparison</h2></div>
    <div class="tbl-wrap">
        <div class="tbl-head"><span>Fixed vs Adjustable Rate — Key Parameters</span><span class="tbl-badge">{{ now()->year }}</span></div>
        <table>
            <thead><tr><th>Feature</th><th>30-yr Fixed</th><th>15-yr Fixed</th><th>5/1 ARM</th><th>7/1 ARM</th></tr></thead>
            <tbody>
                <tr><td>Initial Rate ({{ now()->year }})</td><td class="a">6.8%</td><td class="g">6.1%</td><td class="g">6.1%</td><td class="a">6.3%</td></tr>
                <tr><td>Rate Certainty</td><td class="g">30 years</td><td class="g">15 years</td><td class="a">5 years</td><td class="a">7 years</td></tr>
                <tr><td>Monthly Payment ($400K)</td><td class="a">$2,617</td><td class="g">$3,390</td><td class="g">$2,440</td><td class="a">$2,492</td></tr>
                <tr><td>Rate Risk</td><td class="g">None</td><td class="g">None</td><td class="r">After yr 5</td><td class="r">After yr 7</td></tr>
                <tr><td>Best For</td><td>Long-term owners</td><td>Rapid payoff</td><td>Short horizon</td><td>Medium horizon</td></tr>
            </tbody>
        </table>
    </div>
</div>
<div class="divider"></div>
<div class="sec">
    <div class="sec-hd"><div class="sec-num">04</div><h2>Break-Even Analysis</h2></div>
    <p>The choice between fixed and ARM depends on your time horizon. An ARM saves money if you sell or refinance before the rate adjusts significantly. The break-even point — where fixed and ARM total costs cross — is typically 7–10 years into a 30-year mortgage at current rate spreads.</p>
    <ul>
        <li><strong>Plan to sell in &lt;5 years</strong> — ARM is almost always cheaper; you capture the lower initial rate and exit before adjustments.</li>
        <li><strong>Plan to hold 7–15 years</strong> — Depends on rate direction; ARM may or may not win depending on how rates move.</li>
        <li><strong>Plan to hold 15–30 years</strong> — Fixed rate almost always wins on total cost certainty and protection against rate spikes.</li>
    </ul>
    <div class="hl">
        <div class="hl-lbl">{{ now()->year }} Context</div>
        <p>With rates at generational highs in {{ (now()->year - 3) . '–' . now()->year }}, many borrowers who took ARMs expecting to refinance into lower fixed rates are now holding. The rate forecast matters enormously in this decision — consider your personal rate sensitivity before choosing ARM.</p>
    </div>
</div>
@endsection
@section('related')
<div class="card"><img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?w=600&q=80" alt=""><div class="card-body"><div class="card-tag">Fundamentals</div><h4>Amortization Structure Explained</h4><p>How mortgage payments split between principal and interest over time — and why early payments are mostly interest.</p></div></div>
<div class="card"><img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?w=600&q=80" alt=""><div class="card-body"><div class="card-tag">Products</div><h4>Adjustable-Rate Mortgages Guide</h4><p>Deep-dive into ARM products, cap structures, and index benchmarks for {{ now()->year }}.</p></div></div>
<div class="card"><img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=600&q=80" alt=""><div class="card-body"><div class="card-tag">Market Analysis</div><h4>Rate Forecasting {{ now()->year }}</h4><p>Fed policy trajectory and its impact on 30-year fixed and ARM rates through {{ (now()->year +1) }}.</p></div></div>
@endsection