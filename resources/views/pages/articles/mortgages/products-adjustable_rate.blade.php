@extends('layouts.mortgage')
@section('title','Adjustable-Rate Mortgages')
@section('hero_tag','Mortgage Products')
@section('hero_tag2','ARM Products')
@section('hero_title','Adjustable-Rate Mortgages: Deep Dive Into ARM Products')
@section('hero_subtitle','Cap structures, index benchmarks, payment scenarios, and the strategic calculus for choosing ARM products in 2026\'s rate environment.')
@section('hero_date','March 2026')
@section('hero_read_time','11 min read')
@section('hero_img','https://images.unsplash.com/photo-1563986768609-322da13575f3?w=800&q=80')
@section('article_badge','Mortgage Products')
@section('last_updated','March 2026')
@section('nav_adjustable','on')
@section('hero_stats')
<div class="hstat"><div class="hstat-v">5/1</div><div class="hstat-l">Most popular ARM type</div></div>
<div class="hstat"><div class="hstat-v">SOFR</div><div class="hstat-l">Primary ARM benchmark index</div></div>
<div class="hstat"><div class="hstat-v">2/2/5</div><div class="hstat-l">Most common cap structure</div></div>
@endsection
@section('content')
<div class="sec">
    <div class="sec-hd"><div class="sec-num">01</div><h2>ARM Anatomy</h2></div>
    <p>An adjustable-rate mortgage (ARM) has three core components: an initial fixed period, an adjustment frequency, and a benchmark index + margin that determines the rate after the fixed period ends.</p>
    <div class="tbl-wrap">
        <div class="tbl-head"><span>Common ARM Products — Structure & Use Case</span><span class="tbl-badge">2026</span></div>
        <table>
            <thead><tr><th>Product</th><th>Fixed Period</th><th>Adjusts Every</th><th>Typical Rate (2026)</th><th>Best For</th></tr></thead>
            <tbody>
                <tr><td>3/1 ARM</td><td class="r">3 years</td><td>1 year</td><td class="g">5.8%</td><td>Short-term holds</td></tr>
                <tr><td>5/1 ARM</td><td class="a">5 years</td><td>1 year</td><td class="g">6.1%</td><td>5–7 year horizon</td></tr>
                <tr><td>7/1 ARM</td><td class="a">7 years</td><td>1 year</td><td class="a">6.3%</td><td>Medium horizon</td></tr>
                <tr><td>10/1 ARM</td><td class="g">10 years</td><td>1 year</td><td class="a">6.5%</td><td>Long-ish horizon</td></tr>
                <tr><td>5/6 ARM</td><td class="a">5 years</td><td>6 months</td><td class="g">6.0%</td><td>SOFR-indexed loans</td></tr>
            </tbody>
        </table>
    </div>
</div>
<div class="sec">
    <div class="sec-hd"><div class="sec-num">02</div><h2>Cap Structures Explained</h2></div>
    <p>ARM caps limit how much the rate can increase. The standard cap structure is expressed as three numbers: <strong>Initial / Periodic / Lifetime</strong>.</p>
    <div class="steps">
        <div class="step"><div class="step-l"><div class="step-dot">1</div></div><div class="step-box"><div class="step-title">Initial Cap (First Adjustment)</div><div class="step-body">Maximum rate change at the first adjustment after the fixed period ends. Typically 2% or 5%. A 2/2/5 ARM starting at 6.1% cannot exceed 8.1% at the first adjustment.</div></div></div>
        <div class="step"><div class="step-l"><div class="step-dot">2</div></div><div class="step-box"><div class="step-title">Periodic Cap (Each Subsequent Adjustment)</div><div class="step-body">Maximum change at each annual adjustment after the first. Typically 1% or 2%. Limits the speed of rate increases even if the index moves sharply.</div></div></div>
        <div class="step"><div class="step-l"><div class="step-dot">3</div></div><div class="step-box"><div class="step-title">Lifetime Cap (Total Maximum)</div><div class="step-body">The absolute maximum the rate can ever reach above the initial rate. Typically 5–6%. A 6.1% ARM with a 5% lifetime cap can never exceed 11.1% — ever.</div></div></div>
    </div>
</div>
<div class="sec">
    <div class="sec-hd"><div class="sec-num">03</div><h2>Index Benchmarks</h2></div>
    <p>After the fixed period, ARM rates are calculated as: <strong>Index + Margin = Fully-Indexed Rate</strong>. The margin (typically 2.25–3.0%) is fixed at origination; the index floats with market rates.</p>
    <ul>
        <li><strong>SOFR (Secured Overnight Financing Rate)</strong> — The dominant ARM index since 2023, replacing LIBOR. Based on overnight Treasury repo transactions. Most new ARMs use 30-day average SOFR.</li>
        <li><strong>1-Year CMT (Constant Maturity Treasury)</strong> — Still used by some lenders for 5/1 and 7/1 ARMs. Tracks 1-year Treasury yield.</li>
        <li><strong>11th District COFI</strong> — Cost of Funds Index, primarily used by West Coast savings institutions. Slower-moving than SOFR.</li>
    </ul>
    <div class="hl">
        <div class="hl-lbl">Example: 5/1 ARM at Year 6</div>
        <p>Originated at 6.1% (SOFR 3.1% + 3.0% margin). At first adjustment: SOFR is now 4.5%. New rate = 4.5% + 3.0% = 7.5%, but initial cap of 2% limits increase to 8.1%. Actual rate set at 7.5% — within the cap, so no cap applies here.</p>
    </div>
</div>
@endsection
@section('related')
<div class="card"><img src="https://images.unsplash.com/photo-1554224154-26032ffc0d07?w=600&q=80" alt=""><div class="card-body"><div class="card-tag">Fundamentals</div><h4>Fixed vs Variable Rate</h4><p>Strategic comparison between fixed-rate certainty and ARM savings potential.</p></div></div>
<div class="card"><img src="https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?w=600&q=80" alt=""><div class="card-body"><div class="card-tag">Fundamentals</div><h4>Interest Rate Mechanisms</h4><p>How SOFR and Treasury yields feed into ARM index rate changes.</p></div></div>
<div class="card"><img src="https://images.unsplash.com/photo-1488590528505-98d2b5aba04b?w=600&q=80" alt=""><div class="card-body"><div class="card-tag">Market Analysis</div><h4>Rate Forecasting 2026</h4><p>Forward rate projections and what they mean for current ARM holders.</p></div></div>
@endsection