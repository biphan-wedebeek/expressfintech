{{-- resources/views/pages/articles/cards/market.comparison.blade.php --}}
@extends('layouts.credit-cards')

@section('title', 'Card Network Comparison')
@section('breadcrumb_section', 'Market & Regulation')
@section('breadcrumb_current', 'Card Network Comparison')
@section('hero_section_label', 'Market & Regulation')
@section('hero_title', 'Card Network Comparison')
@section('hero_subtitle', 'Visa, Mastercard, American Express, and Discover — how the four major card networks differ in structure, reach, fee economics, and acceptance worldwide.')
@section('hero_date', now()->format('F Y'))
@section('hero_read_time', '9 min read')
@section('article_badge', 'Market & Regulation')
@section('last_updated', now()->format('F Y'))
@section('nav_comparison', 'active')

@section('hero_stats')
<div class="hero-stat rounded-xl px-5 py-4 text-center min-w-[130px]">
    <p class="text-[26px] font-bold text-white fonttitle">200+</p>
    <p class="text-[11.5px] text-purple-300/70 leading-tight mt-1">Countries with Visa/MC</p>
</div>
<div class="hero-stat rounded-xl px-5 py-4 text-center min-w-[130px]">
    <p class="text-[26px] font-bold text-white fonttitle">$16T</p>
    <p class="text-[11.5px] text-purple-300/70 leading-tight mt-1">Annual Visa volume</p>
</div>
@endsection

@section('sidebar_stats')
<div class="space-y-3">
    @foreach([
    ['Visa market share', '52%'],
    ['Mastercard share', '25%'],
    ['Amex share', '17%'],
    ['Discover share', '4%'],
    ] as [$l, $v])
    <div class="cc-card flex items-center justify-between p-3 rounded-xl bg-[#f7f5ff] border border-[#e8e2f8]">
        <p class="text-[11px] text-[#9ca3af] font-mono-sp">{{ $l }}</p>
        <p class="text-[15px] font-bold text-[#1e0a3c]">{{ $v }}</p>
    </div>
    @endforeach
</div>
@endsection

@section('toc')
<a href="#models" class="toc-link text-[13px] text-[#6b7280] hover:text-violet-700 block">Open vs Closed Loop</a>
<a href="#networks" class="toc-link text-[13px] text-[#6b7280] hover:text-violet-700 block">The Four Networks</a>
<a href="#compare" class="toc-link text-[13px] text-[#6b7280] hover:text-violet-700 block">Side-by-Side Comparison</a>
<a href="#emerging" class="toc-link text-[13px] text-[#6b7280] hover:text-violet-700 block">Emerging Competitors</a>
<a href="#choose" class="toc-link text-[13px] text-[#6b7280] hover:text-violet-700 block">Which Network to Choose</a>
@endsection

@section('right_panel')
<div class="bg-white rounded-2xl border border-[#e8e2f8] p-5" style="box-shadow:0 2px 14px rgba(30,10,60,.07)">
    <p class="text-[10.5px] font-bold uppercase tracking-[.14em] text-violet-700 mb-4">Global Acceptance</p>
    <div class="space-y-3">
        @foreach([
        ['Visa', '46M merchants', 95],
        ['Mastercard', '44M merchants', 92],
        ['Amex', '36M merchants', 75],
        ['Discover', '27M merchants', 55],
        ] as [$net, $merchants, $pct])
        <div>
            <div class="flex justify-between text-[12px] mb-1">
                <span class="font-semibold text-[#1e0a3c]">{{ $net }}</span>
                <span class="text-[#9ca3af]">{{ $merchants }}</span>
            </div>
            <div class="h-1.5 bg-[#f0ebff] rounded-full overflow-hidden">
                <div class="h-full rounded-full"
                    style="width:{{ $pct }}%;background:linear-gradient(90deg,#7c3aed,#a78bfa)"></div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<div class="bg-[#1e0a3c] rounded-2xl p-5 text-white">
    <p class="text-[10.5px] font-bold uppercase tracking-[.14em] text-purple-400 mb-3">{{ now()->year }} Purchase Volume</p>
    @foreach([
    ['Visa', '$16.4T'],
    ['Mastercard', '$9.1T'],
    ['Amex', '$1.9T'],
    ['UnionPay', '$15.2T'],
    ] as [$net, $vol])
    <div class="flex items-center justify-between py-2 border-b border-white/10 last:border-0">
        <span class="text-[13px] text-white/70">{{ $net }}</span>
        <span class="text-[13px] font-mono-sp font-bold text-purple-300">{{ $vol }}</span>
    </div>
    @endforeach
    <p class="text-[11px] text-white/30 mt-2">*UnionPay primarily domestic China</p>
</div>

@if($banners_right->isNotEmpty())
    <div class="w-full space-y-3 my-8">
        @foreach($banners_right as $banner)
        <div id="banner-{{ $banner->id }}" class="scroll-mt-20">
            <a href="{{ request()->url() }}#banner-{{ $banner->id }}" rel="noopener noreferrer sponsored" title="{{ $banner->title }}"
               onclick="event.preventDefault(); window.open('{{ $banner->tracking_url }}', '_blank');">
                <div class="overflow-hidden rounded-sm border border-[var(--border)] hover:shadow-md transition-shadow duration-200 cursor-pointer">
                    <img src="{{ asset('storage/' . (is_array($banner->image_url) ? $banner->image_url[0] : $banner->image_url)) }}"
                        alt="{{ $banner->title ?? 'Advertisement' }}" class="w-full object-cover block" loading="lazy">
                </div>
            </a>
        </div>
        @endforeach
    </div>
@endif

@endsection

@section('content')

<p class="text-[17px] text-[#1e0a3c] font-medium leading-relaxed mb-8 pb-6 border-b border-[#f5f0ff]">
    The card network you use affects where your card is accepted, how much merchants pay to accept it, what fraud protection you receive, and ultimately what rewards programs are available. The four major networks — Visa, Mastercard, American Express, and Discover — have fundamentally different business models that shape the entire credit card industry.
</p>

<h2 id="models">Open-Loop vs Closed-Loop Networks</h2>
<p>
    The most fundamental structural difference in card networks is between the open-loop and closed-loop models. This distinction determines who issues cards, who processes transactions, and how economics flow through the system.
</p>

<div class="grid grid-cols-2 gap-5 my-7">
    <div class="cc-card p-6 rounded-2xl bg-[#f7f5ff] border border-violet-200">
        <div class="flex items-center gap-3 mb-4">
            <div class="w-10 h-10 rounded-xl bg-violet-100 flex items-center justify-center shrink-0">
                <svg class="w-5 h-5 text-violet-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244" />
                </svg>
            </div>
            <div>
                <h3 class="!mt-0 !mb-0 text-[14px] text-violet-800">Open-Loop</h3>
                <p class="text-[11.5px] text-[#9ca3af] font-mono-sp">Visa · Mastercard</p>
            </div>
        </div>
        <p class="!text-[13px] !mb-3 text-[#6b7280]">The network provides the rails and rules, but banks (issuers) issue the cards and set the terms. Merchants work with acquirer banks to accept payments. The network earns a small fee on each transaction volume.</p>
        <p class="text-[12px] font-semibold text-violet-700">Massive scale · Bank partnerships · Lower merchant fees</p>
    </div>
    <div class="cc-card p-6 rounded-2xl bg-[#f7f5ff] border border-indigo-200">
        <div class="flex items-center gap-3 mb-4">
            <div class="w-10 h-10 rounded-xl bg-indigo-100 flex items-center justify-center shrink-0">
                <svg class="w-5 h-5 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                </svg>
            </div>
            <div>
                <h3 class="!mt-0 !mb-0 text-[14px] text-indigo-700">Closed-Loop</h3>
                <p class="text-[11.5px] text-[#9ca3af] font-mono-sp">Amex · Discover</p>
            </div>
        </div>
        <p class="!text-[13px] !mb-3 text-[#6b7280]">The network issues cards directly to consumers AND processes merchant transactions. This vertical integration gives them full data visibility and higher margins — but historically limited acceptance versus open-loop networks.</p>
        <p class="text-[12px] font-semibold text-indigo-600">Full data ownership · Higher margins · Premium positioning</p>
    </div>
</div>

<h2 id="networks">The Four Major Networks</h2>

<div class="grid grid-cols-2 gap-5 my-7">
    @foreach([
    ['V','Visa','#1A56DB','Founded 1958. World\'s largest payment network by transaction volume. Operates in 200+ countries with 46M+ merchant acceptance points. Revenue model: transaction fees to issuers and acquirers. Visa does not issue cards or extend credit directly — they sell network access to banks.'],
    ['MC','Mastercard','#EB001B','Founded 1966 as Interbank. Functionally near-identical to Visa in structure and global reach. Key differentiator: historically stronger in Europe and stronger debit network. Competes aggressively on premium card co-brands and B2B payment services.'],
    ['AX','Amex','#007AC1','Founded 1850 as express mail. Pivoted to charge cards in 1958. Closed-loop model gives Amex direct cardholder relationships and merchant data. Known for premium rewards, highest merchant fees (~2.3–3.0%), and affluent cardholder demographics that justify merchant participation.'],
    ['D','Discover','#FF6600','Founded 1985 by Sears. Smallest of the four major networks. First to offer cashback rewards (1986). US-centric but operates internationally via alliances with other networks (UnionPay in China, JCB in Japan). Acquired by Capital One in 2024, pending integration.'],
    ] as [$abbr, $name, $color, $desc])
    <div class="cc-card p-5 rounded-2xl bg-[#f7f5ff] border border-[#e8e2f8]">
        <div class="flex items-center gap-3 mb-3">
            <div class="w-10 h-10 rounded-xl flex items-center justify-center text-white text-[12px] font-bold shrink-0"
                style="background:{{ $color }}">{{ $abbr }}</div>
            <h3 class="!mt-0 !mb-0 text-[14px] text-[#1e0a3c]">{{ $name }}</h3>
        </div>
        <p class="!text-[13px] !mb-0 text-[#6b7280] leading-relaxed">{{ $desc }}</p>
    </div>
    @endforeach
</div>

<h2 id="compare">Side-by-Side Comparison</h2>
<div class="my-6 overflow-hidden rounded-2xl border border-[#e8e2f8]">
    <table class="w-full border-collapse text-[13.5px]">
        <thead>
            <tr style="background:linear-gradient(135deg,#1e0a3c,#2d1060)">
                <th class="text-left px-5 py-4 text-[11px] font-bold uppercase tracking-[.13em] text-purple-300 w-[20%]">Dimension</th>
                <th class="text-left px-5 py-4 text-[11px] font-bold uppercase tracking-[.13em] text-purple-200/80">Visa</th>
                <th class="text-left px-5 py-4 text-[11px] font-bold uppercase tracking-[.13em] text-purple-200/80">Mastercard</th>
                <th class="text-left px-5 py-4 text-[11px] font-bold uppercase tracking-[.13em] text-purple-200/80">Amex</th>
                <th class="text-left px-5 py-4 text-[11px] font-bold uppercase tracking-[.13em] text-purple-200/80">Discover</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-[#f5f0ff]">
            @foreach([
            ['Model', 'Open-loop', 'Open-loop', 'Closed-loop', 'Closed-loop'],
            ['US Acceptance', '99%', '99%', '97%', '95%'],
            ['Avg. Fee', '1.5–2.1%', '1.5–2.1%', '2.3–3.0%', '1.5–2.0%'],
            ['Card Issuer', 'Partner banks','Partner banks','Amex itself', 'Discover itself'],
            ['Best For', 'Universal use','Universal use','Premium rewards','Cashback, US use'],
            ['Global Reach', '200+ countries','210+ countries','130+ countries','Asia via UnionPay'],
            ] as [$dim, $v, $mc, $amex, $disc])
            <tr class="hover:bg-[#fdfbff] transition-colors">
                <td class="px-5 py-3.5 font-semibold text-[#1e0a3c] bg-[#fdfbff]">{{ $dim }}</td>
                <td class="px-5 py-3.5 text-[#374151]">{{ $v }}</td>
                <td class="px-5 py-3.5 text-[#374151]">{{ $mc }}</td>
                <td class="px-5 py-3.5 text-[#374151]">{{ $amex }}</td>
                <td class="px-5 py-3.5 text-[#374151]">{{ $disc }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<h2 id="emerging">Emerging Competitors & Challengers</h2>
<p>
    The four-network duopoly (plus Amex and Discover) faces growing competitive pressure from several directions. <strong>UnionPay</strong> — China's state-backed network — processes the highest global transaction volume when domestic Chinese spending is included. <strong>RuPay</strong> (India) has grown to 600M+ cards through government promotion. <strong>Real-time payment networks</strong> like RTP and FedNow are enabling bank-to-bank transfers that bypass card networks entirely for certain use cases.
</p>
<p>
    In the long term, CBDC payment systems being developed by central banks globally could fundamentally restructure the payment landscape, potentially disintermediating card networks for government-to-citizen transactions.
</p>

<h2 id="choose">Which Network Should You Choose?</h2>
<p>
    For most consumers, the network matters less than the card's reward program and issuer. However, specific situations do call for specific networks:
</p>
<ul>
    <li><strong>International travel</strong> — Visa or Mastercard for broadest acceptance; avoid Amex as primary card in developing markets</li>
    <li><strong>Premium travel rewards</strong> — Amex (Platinum, Gold) if you value transfer partners and lounge access</li>
    <li><strong>Simplicity & cashback</strong> — Discover or any Visa/MC cashback card for straightforward rewards</li>
    <li><strong>Business spending</strong> — Amex corporate cards offer superior expense management tooling</li>
</ul>

<div class="my-7 p-6 rounded-2xl border-l-4 border-violet-500" style="background:linear-gradient(135deg,#f5f3ff,#ede9fe)">
    <p class="text-[13.5px] font-semibold text-[#4c1d95] mb-1">Capital One + Discover: {{ now()->year }} Impact</p>
    <p class="text-[13.5px] text-[#5b21b6] !mb-0 leading-relaxed">Capital One's acquisition of Discover (completed 2024) creates a vertically integrated issuer-network combination for the first time since Amex. Capital One now controls its own network rails — enabling lower processing costs, better data, and the ability to offer merchants alternative pricing to Visa/MC. Analysts expect this to intensify competition in the merchant acceptance and co-brand card markets through {{ now()->year . '–' . (now()->year + 2) }}.</p>
</div>

@endsection

@section('related')
<a href="{{ route('cards.mechanics-interchange') }}" class="block bg-white rounded-xl border border-[#e8e2f8] p-4 hover:border-violet-300 hover:shadow-md transition-all">
    <span class="text-[10.5px] font-bold uppercase tracking-[.12em] text-violet-600 mb-2 block">Card Mechanics</span>
    <p class="text-[13.5px] font-semibold text-[#1e0a3c] leading-snug">Interchange Fees & Economics</p>
</a>
<a href="{{ route('cards.market-consumer') }}" class="block bg-white rounded-xl border border-[#e8e2f8] p-4 hover:border-violet-300 hover:shadow-md transition-all">
    <span class="text-[10.5px] font-bold uppercase tracking-[.12em] text-pink-500 mb-2 block">Market & Regulation</span>
    <p class="text-[13.5px] font-semibold text-[#1e0a3c] leading-snug">Consumer Protection Laws</p>
</a>
<a href="{{ route('cards.strategy-reward') }}" class="block bg-white rounded-xl border border-[#e8e2f8] p-4 hover:border-violet-300 hover:shadow-md transition-all">
    <span class="text-[10.5px] font-bold uppercase tracking-[.12em] text-indigo-500 mb-2 block">Card Strategy</span>
    <p class="text-[13.5px] font-semibold text-[#1e0a3c] leading-snug">Reward Program Economics</p>
</a>
@endsection