{{-- resources/views/pages/articles/cards/mechanics.scoring.blade.php --}}
@extends('layouts.credit-cards')

@section('title', 'Credit Scoring Models')
@section('breadcrumb_section', 'Card Mechanics')
@section('breadcrumb_current', 'Credit Scoring Models')
@section('hero_section_label', 'Card Mechanics')
@section('hero_title', 'Credit Scoring Models')
@section('hero_subtitle', 'How FICO, VantageScore and proprietary models work — the algorithms behind every credit card approval, limit, and interest rate you receive.')
@section('hero_date',now()->format('F Y'))
@section('hero_read_time', '9 min read')
@section('article_badge', 'Card Mechanics')
@section('last_updated',now()->format('F Y'))
@section('nav_scoring', 'active')

@section('hero_stats')
    <div class="hero-stat rounded-xl px-5 py-4 text-center min-w-[130px]">
        <p class="text-[26px] font-bold text-white fonttitle">850</p>
        <p class="text-[11.5px] text-purple-300/70 leading-tight mt-1">Max FICO score</p>
    </div>
    <div class="hero-stat rounded-xl px-5 py-4 text-center min-w-[130px]">
        <p class="text-[26px] font-bold text-white fonttitle">90%+</p>
        <p class="text-[11.5px] text-purple-300/70 leading-tight mt-1">Lenders use FICO</p>
    </div>
@endsection

@section('sidebar_stats')
    <div class="space-y-3">
        @foreach([['Avg. US FICO Score','714','violet'],['Subprime Threshold','< 580','red'],['Prime Threshold','> 670','emerald']] as [$label,$val,$c])
        <div class="cc-card flex items-center justify-between p-3 rounded-xl bg-[#f7f5ff] border border-[#e8e2f8]">
            <p class="text-[11px] text-[#9ca3af] font-mono-sp">{{ $label }}</p>
            <p class="text-[16px] font-bold text-[#1e0a3c]">{{ $val }}</p>
        </div>
        @endforeach
    </div>
@endsection

@section('toc')
    <a href="#overview" class="toc-link text-[13px] text-[#6b7280] hover:text-violet-700 block">Overview</a>
    <a href="#fico" class="toc-link text-[13px] text-[#6b7280] hover:text-violet-700 block">FICO Score Anatomy</a>
    <a href="#vantage" class="toc-link text-[13px] text-[#6b7280] hover:text-violet-700 block">VantageScore</a>
    <a href="#factors" class="toc-link text-[13px] text-[#6b7280] hover:text-violet-700 block">Score Factors</a>
    <a href="#improve" class="toc-link text-[13px] text-[#6b7280] hover:text-violet-700 block">Improving Your Score</a>
    <a href="#outlook" class="toc-link text-[13px] text-[#6b7280] hover:text-violet-700 block">AI & Future Models</a>
@endsection

@section('content')
<p class="text-[17px] text-[#1e0a3c] font-medium leading-relaxed mb-8 pb-6 border-b border-[#f5f0ff]">
    Your credit score is a three-digit number with outsized influence on your financial life — determining whether you're approved for a card, what interest rate you pay, and what credit limit you receive. Understanding the models behind it gives you the power to actively manage it.
</p>

<h2 id="overview">What Is a Credit Score?</h2>
<p>A credit score is a statistical prediction of your likelihood of repaying debt. Lenders use it as a rapid, standardized proxy for creditworthiness — replacing the need for manual file review on millions of applications with a single comparable number.</p>
<p>In the United States, scores are generated from data held at the three major credit bureaus — Equifax, Experian, and TransUnion — using scoring models developed by analytics companies. The dominant model is <strong>FICO</strong> (Fair Isaac Corporation), though <strong>VantageScore</strong> has gained significant ground since its 2006 launch.</p>

<h2 id="fico">FICO Score Anatomy</h2>
<p>FICO scores range from 300 to 850. The model weighs five categories of credit behavior, each contributing a defined percentage of your total score:</p>

<div class="my-7 space-y-3">
    @foreach([
        ['35%','Payment History','The most important factor. Any missed or late payments — even by a single day on a reported account — directly damage your score. Collections, charge-offs, and bankruptcies carry the heaviest penalties.','violet'],
        ['30%','Amounts Owed (Utilization)','Your credit utilization ratio: total revolving balances divided by total credit limits. Keeping utilization below 30% is standard advice; below 10% is optimal for top-tier scores.','purple'],
        ['15%','Length of Credit History','Average age of all accounts, age of oldest and newest accounts. Longer histories indicate stable borrowing behavior. Opening new accounts reduces this metric.','indigo'],
        ['10%','Credit Mix','Having diverse credit types — revolving (cards), installment (loans), mortgage — demonstrates you can manage different obligations. A thin file hurts here.','blue'],
        ['10%','New Credit','Recent applications generate hard inquiries, each temporarily reducing your score by ~5 points. Multiple inquiries in a short window signal financial stress.','sky'],
    ] as [$pct, $title, $desc, $c])
    <div class="cc-card flex gap-4 p-4 rounded-2xl bg-[#f7f5ff] border border-[#e8e2f8]">
        <div class="w-14 h-14 rounded-xl bg-violet-100 flex items-center justify-center shrink-0">
            <span class="fonttitle text-[15px] font-bold text-violet-700">{{ $pct }}</span>
        </div>
        <div>
            <p class="text-[13.5px] font-semibold text-[#1e0a3c] mb-1">{{ $title }}</p>
            <p class="text-[13px] text-[#6b7280] !mb-0 leading-relaxed">{{ $desc }}</p>
        </div>
    </div>
    @endforeach
</div>

<h2 id="vantage">VantageScore vs FICO</h2>
<div class="my-6 overflow-hidden rounded-2xl border border-[#e8e2f8]">
    <table class="w-full border-collapse text-[13.5px]">
        <thead>
            <tr style="background:linear-gradient(135deg,#1e0a3c,#2d1060)">
                <th class="text-left px-5 py-4 text-[11px] font-bold uppercase tracking-[.13em] text-purple-300 w-[30%]">Dimension</th>
                <th class="text-left px-5 py-4 text-[11px] font-bold uppercase tracking-[.13em] text-purple-200/80">FICO Score</th>
                <th class="text-left px-5 py-4 text-[11px] font-bold uppercase tracking-[.13em] text-purple-200/80">VantageScore</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-[#f5f0ff]">
            @foreach([
                ['Score Range','300–850','300–850'],
                ['Min. History Required','6 months','1 month'],
                ['Market Penetration','90%+ of lenders','Growing rapidly'],
                ['Thin File Handling','Limited','Better (trended data)'],
                ['Inquiry Treatment','Each counts','Rate-shopping window'],
                ['Creator','Fair Isaac Corp.','Equifax + Experian + TU'],
            ] as [$dim,$fico,$vs])
            <tr class="hover:bg-[#fdfbff] transition-colors">
                <td class="px-5 py-3.5 font-semibold text-[#1e0a3c] bg-[#fdfbff]">{{ $dim }}</td>
                <td class="px-5 py-3.5 text-[#374151]">{{ $fico }}</td>
                <td class="px-5 py-3.5 text-[#374151]">{{ $vs }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<h2 id="factors">Score Range Benchmarks</h2>
<div class="grid grid-cols-5 gap-2 my-7">
    @foreach([
        ['300–579','Poor','bg-red-100 border-red-200 text-red-700'],
        ['580–669','Fair','bg-orange-100 border-orange-200 text-orange-700'],
        ['670–739','Good','bg-yellow-100 border-yellow-200 text-yellow-700'],
        ['740–799','Very Good','bg-blue-100 border-blue-200 text-blue-700'],
        ['800–850','Exceptional','bg-violet-100 border-violet-200 text-violet-700'],
    ] as [$range,$label,$cls])
    <div class="cc-card p-4 rounded-2xl border text-center {{ $cls }}">
        <p class="text-[11.5px] font-bold mb-1">{{ $label }}</p>
        <p class="text-[11px] font-mono-sp">{{ $range }}</p>
    </div>
    @endforeach
</div>

<h2 id="improve">Strategies to Improve Your Score</h2>
<ul>
    <li><strong>Never miss a payment</strong> — Set up autopay for at least the minimum on every account. One 30-day late can drop a good score by 60–110 points.</li>
    <li><strong>Reduce utilization aggressively</strong> — Pay balances down before statement close date to report lower utilization to bureaus.</li>
    <li><strong>Keep old accounts open</strong> — Closing old cards shortens credit history and reduces available credit (increasing utilization).</li>
    <li><strong>Dispute errors</strong> — Up to 25% of credit reports contain errors. File disputes with bureaus for accounts you don't recognize or incorrect late payments.</li>
    <li><strong>Limit hard inquiries</strong> — Space out new card applications by at least 6 months to minimize inquiry impact.</li>
</ul>

<div class="my-7 p-6 rounded-2xl border-l-4 border-violet-500" style="background:linear-gradient(135deg,#f5f3ff,#ede9fe)">
    <p class="text-[13.5px] font-semibold text-[#4c1d95] mb-1">AI-Powered Scoring — {{ now()->year }}</p>
    <p class="text-[13.5px] text-[#5b21b6] !mb-0 leading-relaxed">Lenders are increasingly deploying proprietary ML models that incorporate cashflow data (bank account transactions), rent payment history, and telecom payment records — reaching consumers with thin credit files that traditional FICO models score poorly. This is expanding credit access while adding complexity to the scoring landscape.</p>
</div>

@endsection

@section('related')
<a href="{{ route('cards.mechanics-apr') }}" class="block bg-white rounded-xl border border-[#e8e2f8] p-4 hover:border-violet-300 hover:shadow-md transition-all">
    <span class="text-[10.5px] font-bold uppercase tracking-[.12em] text-violet-600 mb-2 block">Card Mechanics</span>
    <p class="text-[13.5px] font-semibold text-[#1e0a3c] leading-snug">APR & Interest Calculation</p>
</a>
<a href="{{ route('cards.mechanics-risk_based') }}" class="block bg-white rounded-xl border border-[#e8e2f8] p-4 hover:border-violet-300 hover:shadow-md transition-all">
    <span class="text-[10.5px] font-bold uppercase tracking-[.12em] text-violet-600 mb-2 block">Card Mechanics</span>
    <p class="text-[13.5px] font-semibold text-[#1e0a3c] leading-snug">Risk-based Pricing Models</p>
</a>
<a href="{{ route('cards.strategy-strategy') }}" class="block bg-white rounded-xl border border-[#e8e2f8] p-4 hover:border-violet-300 hover:shadow-md transition-all">
    <span class="text-[10.5px] font-bold uppercase tracking-[.12em] text-indigo-500 mb-2 block">Card Strategy</span>
    <p class="text-[13.5px] font-semibold text-[#1e0a3c] leading-snug">Credit Utilization Strategy</p>
</a>
@endsection