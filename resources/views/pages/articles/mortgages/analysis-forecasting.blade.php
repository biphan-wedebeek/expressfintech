@extends('layouts.mortgage')
@section('title','Rate Forecasting ' . now()->year)
@section('hero_tag','Market Analysis')
@section('hero_tag2','Rate Outlook')
@section('hero_title','Mortgage Rate Forecasting ' . now()->year . '–' . (now()->year + 1) . ' Outlook')
@section('hero_subtitle','Scenarios for 30-year fixed and ARM rates through '. (now()->year + 1) .' — Fed policy trajectory, inflation persistence, and the variables that will determine the next rate move.')
@section('hero_date', seoUpdateMonth('mortgages-analysis-foreca'))
@section('hero_read_time','11 min read')
@section('hero_img','https://images.unsplash.com/photo-1488590528505-98d2b5aba04b?w=800&q=80')
@section('article_badge','Market Analysis')
@section('last_updated', seoUpdateMonth('mortgages-analysis-foreca'))
@section('nav_forecasting','on')
@section('hero_stats')
<div class="hstat"><div class="hstat-v">6.8%</div><div class="hstat-l">30-yr fixed, March {{ now()->year }}</div></div>
<div class="hstat"><div class="hstat-v">2–3</div><div class="hstat-l">Expected Fed cuts {{ now()->year }}</div></div>
<div class="hstat"><div class="hstat-v">5.75–6.25%</div><div class="hstat-l">Consensus {{(now()->year + 1)}} target range</div></div>
@endsection
@section('content')
<div class="sec">
    <div class="sec-hd"><div class="sec-num">01</div><h2>Current Rate Context</h2></div>
    <p>As of March {{ now()->year }}, the 30-year fixed mortgage rate stands at approximately 6.8% — down from the cycle peak of 8.0% in October 2023 but still well above the 2020–2021 sub-3% lows. The Federal Reserve has begun a rate-cutting cycle, having reduced the Fed Funds Rate by 100bps from its 5.25–5.5% peak, but mortgage rates have not fallen proportionally due to persistent MBS spread widening.</p>
    <div class="hl">
        <div class="hl-lbl">Key Insight: Fed Cuts ≠ Mortgage Rate Drops</div>
        <p>The Fed's rate cuts affect short-term rates most directly. 30-year mortgage rates track the 10-year Treasury, which has moved less aggressively than the short end — reflecting the "higher for longer" view that inflation will remain above the 2% target through {{ now()->year }}.</p>
    </div>
</div>
<div class="sec">
    <div class="sec-hd"><div class="sec-num">02</div><h2>Rate Forecast Scenarios — {{ now()->year . '–' . (now()->year + 1) }}</h2></div>
    <div class="tbl-wrap">
        <div class="tbl-head"><span>30-Year Fixed Rate Scenarios</span><span class="tbl-badge">Consensus Model</span></div>
        <table>
            <thead><tr><th>Scenario</th><th>Probability</th><th>Q4 {{ now()->year }}</th><th>Q4 {{( now()->year +1) }}</th><th>Driver</th></tr></thead>
            <tbody>
                <tr><td class="g">Bull (Rates Fall)</td><td>25%</td><td class="g">5.75%</td><td class="g">5.25%</td><td>Inflation collapses, Fed cuts 4–5x</td></tr>
                <tr><td class="a">Base Case</td><td>55%</td><td class="a">6.2%</td><td class="a">5.8%</td><td>Gradual cuts, MBS spread tightens</td></tr>
                <tr><td class="r">Bear (Rates Persist)</td><td>20%</td><td class="r">7.2%</td><td class="r">7.0%</td><td>Re-acceleration of inflation, Fed pauses</td></tr>
            </tbody>
        </table>
    </div>
</div>
<div class="sec">
    <div class="sec-hd"><div class="sec-num">03</div><h2>Key Variables to Watch</h2></div>
    <ul>
        <li><strong>Core PCE inflation</strong> — The Fed's preferred inflation measure. Sustained readings above 2.5% will delay or reverse rate cuts.</li>
        <li><strong>Non-farm payrolls</strong> — A strong labor market reduces urgency for cuts; unemployment above 4.5% would accelerate them.</li>
        <li><strong>10-year Treasury demand</strong> — Foreign central bank purchases (particularly China and Japan) impact Treasury yields directly.</li>
        <li><strong>Fed QT pace</strong> — The Fed's ongoing reduction of its $2.2T MBS portfolio puts upward pressure on MBS spreads. Any acceleration is negative for mortgage rates.</li>
        <li><strong>Fiscal deficit</strong> — Large Treasury issuance competes with MBS for investor capital — persistently bearish for rates if supply continues at current pace.</li>
    </ul>
    <div class="callout">
        <h3>When to Lock vs Float Your Rate</h3>
        <p>In a volatile rate environment, floating your rate (waiting to lock) is a directional bet on rates falling. Given the current balance of risks, most borrowers closing within 45 days should lock immediately — protecting against the 20% bear scenario while accepting foregone savings in the bull scenario. Refinance borrowers with more time flexibility can consider floating with a lock target in mind.</p>
    </div>
</div>
@endsection
@section('related')
<div class="card"><img src="https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?w=600&q=80" alt=""><div class="card-body"><div class="card-tag">Fundamentals</div><h4>Interest Rate Mechanisms</h4><p>How Fed policy and Treasury markets transmit into mortgage rate pricing.</p></div></div>
<div class="card"><img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?w=600&q=80" alt=""><div class="card-body"><div class="card-tag">Market Analysis</div><h4>Mortgage-backed Securities</h4><p>MBS spreads and their role in the gap between Fed cuts and mortgage rate relief.</p></div></div>
<div class="card"><img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?w=600&q=80" alt=""><div class="card-body"><div class="card-tag">Products</div><h4>Refinance Strategies</h4><p>Break-even analysis for refinancing decisions across rate forecast scenarios.</p></div></div>
@endsection