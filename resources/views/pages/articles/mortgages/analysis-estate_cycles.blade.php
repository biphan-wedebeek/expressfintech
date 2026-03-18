@extends('layouts.mortgage')
@section('title','Real Estate Cycles')
@section('hero_tag','Market Analysis')
@section('hero_tag2','Cycle Theory')
@section('hero_title','Real Estate Market Cycles Pattern Recognition & Timing')
@section('hero_subtitle','The four phases of real estate cycles — historical analogues, leading indicators, and how to position mortgage and investment decisions based on cycle identification.')
@section('hero_date', seoUpdateMonth('mortgages-analysis-estate'))
@section('hero_read_time','12 min read')
@section('hero_img','https://images.unsplash.com/photo-1516156008625-3a9d6067fab5?w=800&q=80')
@section('article_badge','Market Analysis')
@section('last_updated', seoUpdateMonth('mortgages-analysis-estate'))
@section('nav_cycles','on')
@section('hero_stats')
<div class="hstat"><div class="hstat-v">18yr</div><div class="hstat-l">Avg US real estate cycle</div></div>
<div class="hstat"><div class="hstat-v">{{ now()->year }}</div><div class="hstat-l">Current: Late expansion phase</div></div>
<div class="hstat"><div class="hstat-v">2028?</div><div class="hstat-l">Projected cycle peak</div></div>
@endsection
@section('content')
<div class="sec">
    <div class="sec-hd"><div class="sec-num">01</div><h2>The Four Phases of Real Estate Cycles</h2></div>
    <div class="steps">
        <div class="step"><div class="step-l"><div class="step-dot">1</div></div><div class="step-box"><div class="step-title">Recovery Phase</div><div class="step-body">Follows the trough of a downturn. Vacancy rates are high, rents are flat, prices stabilize. Smart capital begins accumulating distressed assets. Occupancy gradually improves but new construction is minimal due to negative developer sentiment.</div></div></div>
        <div class="step"><div class="step-l"><div class="step-dot">2</div></div><div class="step-box"><div class="step-title">Expansion Phase</div><div class="step-body">Demand absorbs existing supply. Vacancy falls, rents rise, prices appreciate. Construction activity increases but remains below demand — this gap is the profit window. Employment growth fuels housing demand. Most investors are optimistic.</div></div></div>
        <div class="step"><div class="step-l"><div class="step-dot">3</div></div><div class="step-box"><div class="step-title">Hypersupply Phase</div><div class="step-body">Construction completions exceed demand absorption. Vacancy rates begin rising despite rising prices — the lead indicator of the turn. New projects approved during expansion peak come online. Rents flatten, concessions emerge.</div></div></div>
        <div class="step"><div class="step-l"><div class="step-dot">4</div></div><div class="step-box"><div class="step-title">Recession Phase</div><div class="step-body">Oversupply drives vacancy, rent declines, and price corrections. Distressed sales emerge. Construction halts. Capital retreats. Duration and severity depend on the degree of preceding hypersupply and the macro environment.</div></div></div>
    </div>
</div>
<div class="sec">
    <div class="sec-hd"><div class="sec-num">02</div><h2>Where Are We in the {{ now()->year }} Cycle?</h2></div>
    <p>The current US residential market exhibits characteristics of <strong>late expansion</strong> — strong price appreciation, compressed supply, high demand, but affordability constraints and elevated rates signaling stress. The absence of the typical hypersupply dynamic (driven by zoning constraints and construction costs) suggests the next phase may differ from historical patterns.</p>
    <div class="callout">
        <h3>A Cycle Unlike Any Other</h3>
        <p>The "lock-in effect" from 2020–2021 ultra-low rates has created a structurally distorted cycle. Normally, high rates cool prices by reducing demand. In 2023–{{ now()->year }}, high rates suppressed both demand AND supply simultaneously, preventing the typical price correction. This is the first time in modern history rates served as a floor rather than a ceiling for prices.</p>
    </div>
</div>
<div class="sec">
    <div class="sec-hd"><div class="sec-num">03</div><h2>Historical Cycle Comparison</h2></div>
    <div class="tbl-wrap">
        <div class="tbl-head"><span>US Real Estate Cycle — Historical Benchmarks</span><span class="tbl-badge">1970–{{ now()->year }}</span></div>
        <table>
            <thead><tr><th>Cycle Period</th><th>Peak Year</th><th>Trough Year</th><th>Price Decline</th><th>Recovery Time</th></tr></thead>
            <tbody>
                <tr><td>1970s Cycle</td><td>1978</td><td>1982</td><td class="a">–10% real</td><td>4 years</td></tr>
                <tr><td>S&L / RTC Crisis</td><td>1989</td><td>1993</td><td class="r">–15 to –30%</td><td>8 years (some markets)</td></tr>
                <tr><td>Dot-com Era</td><td>2006</td><td>2012</td><td class="r">–33% national</td><td>9 years</td></tr>
                <tr><td>COVID / Post-COVID</td><td>2022</td><td>2023*</td><td class="a">–7% mild correction</td><td>Rapid (1 year)</td></tr>
                <tr><td>Current Cycle</td><td>2028?</td><td>TBD</td><td class="g">–0 to –10% projected</td><td>Constrained by supply</td></tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
@section('related')
<div class="card"><img src="https://images.unsplash.com/photo-1516156008625-3a9d6067fab5?w=600&q=80" alt=""><div class="card-body"><div class="card-tag">Market Analysis</div><h4>Housing Price Trends</h4><p>Current price dynamics in the context of the current cycle phase.</p></div></div>
<div class="card"><img src="https://images.unsplash.com/photo-1488590528505-98d2b5aba04b?w=600&q=80" alt=""><div class="card-body"><div class="card-tag">Market Analysis</div><h4>Rate Forecasting {{ now()->year }}</h4><p>Rate trajectory and its interaction with cycle dynamics going into 2027.</p></div></div>
<div class="card"><img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=600&q=80" alt=""><div class="card-body"><div class="card-tag">Market Analysis</div><h4>Regulatory Impact</h4><p>How zoning, lending regulation, and policy intervention affect cycle dynamics.</p></div></div>
@endsection