@extends('layouts.backing')

@section('title', 'NIM & Capital Ratios')
@section('description', 'Net interest margin dynamics and Basel III capital ratios — how they interact to determine a bank\'s sustainable profitability envelope.')
@section('content')

<section class="relative min-h-[80vh] flex flex-col justify-end bg-[var(--navy)] overflow-hidden px-8 md:px-16 pb-16 pt-18">
    <div class="absolute top-0 right-0 fonttitle font-black leading-none text-white/[0.03] select-none pointer-events-none tracking-tight" style="font-size:clamp(160px,28vw,380px)">NIM</div>
    <div class="absolute inset-0 pointer-events-none" style="background:radial-gradient(ellipse 65% 55% at 72% 15%,rgba(79,70,229,0.13) 0%,transparent 60%),radial-gradient(ellipse 40% 40% at 8% 85%,rgba(15,31,53,0.5) 0%,transparent 55%)"></div>
    <div class="relative z-10 max-w-7xl mx-auto w-full">
        <div class="flex items-center gap-3 mb-6">
            <span class="w-8 h-px bg-[var(--indigo-mid)]"></span>
            <span class="text-[var(--indigo-mid)] text-[10px] font-bold tracking-[0.28em] uppercase">Banking Industry Analysis · Express Fintech {{ now()->year }}</span>
        </div>
        <h1 class="hero-title mb-8">NIM &<br><em class="text-[var(--indigo-mid)] not-italic">Capital</em><br><span class="text-white/20">Ratios</span></h1>
        <div class="flex flex-wrap gap-3 mb-10">
            @foreach([['NIM','Net Interest Margin'],['CET1','Core Capital'],['LCR','Liquidity'],['Basel III','Framework']] as [$l,$s])
            <div class="bg-[var(--indigo)]/10 border border-[var(--indigo)]/30 px-5 py-2.5 flex flex-col items-center gap-0.5">
                <span class="text-[var(--indigo-mid)] text-[13px] font-bold tracking-widest uppercase">{{ $l }}</span>
                <span class="text-white/30 text-[9px] tracking-wider">{{ $s }}</span>
            </div>
            @endforeach
        </div>
        <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-6">
            <p class="max-w-lg text-white/50 text-sm font-light leading-relaxed border-l border-[var(--indigo-mid)] pl-4">NIM and capital ratios are the twin engines of bank analysis — NIM determines the revenue potential of the business model, while capital ratios set the floor on risk capacity and the ceiling on leverage-driven returns.</p>
            <div class="flex flex-col items-start md:items-end gap-1.5 flex-shrink-0 text-[10px] tracking-widest uppercase">
                <span class="text-white/35">{{ seoUpdateDate('analysis-nim-capital') }}</span>
                <span class="text-white/35"><b class="text-white/60">Read</b> 8 min</span>
                <span class="text-white/35"><b class="text-white/60">By</b> EF Research</span>
            </div>
        </div>
    </div>
    <div class="absolute bottom-6 left-1/2 -translate-x-1/2 flex flex-col items-center gap-1.5">
        <div class="w-px h-10 bg-gradient-to-b from-white/20 to-transparent animate-pulse"></div>
        <p class="text-[8px] tracking-[0.2em] uppercase text-white/20">Scroll</p>
    </div>
</section>

<nav class="sticky top-0 z-50 bg-white border-b border-[var(--border)] shadow-[var(--shadow-sm)]">
    <div class="max-w-7xl mx-auto px-6 flex overflow-x-auto" style="scrollbar-width:none">
        @foreach([['#overview','Overview',true],['#nim','NIM Deep Dive',false],['#capital','Capital Ratios',false],['#interaction','NIM vs Capital',false],['#outlook','Outlook',false]] as [$href,$label,$active])
        <a href="{{ $href }}" class="flex-shrink-0 text-[10px] font-bold tracking-[0.18em] uppercase px-5 py-4 border-b-2 whitespace-nowrap transition-colors duration-200 no-underline {{ $active ? 'text-[var(--indigo)] border-[var(--indigo)]' : 'text-[var(--text-muted)] border-transparent hover:text-[var(--navy)]' }}">{{ $label }}</a>
        @endforeach
    </div>
</nav>

<section class="py-20 px-8 md:px-16 bg-[var(--bg-surface)] border-b border-[var(--border)] relative overflow-hidden" id="overview">
    <div class="absolute top-0 right-10 fonttitle font-black leading-none text-[var(--navy)]/[0.04] select-none pointer-events-none" style="font-size:180px">01</div>
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="flex items-center gap-2.5 mb-3"><span class="w-6 h-px bg-[var(--indigo)]"></span><span class="text-[var(--indigo)] text-[10px] font-bold tracking-[0.28em] uppercase">Chapter 01</span></div>
        <h2 class="fonttitle text-4xl md:text-[50px] font-bold leading-tight tracking-tight text-[var(--navy)] mb-4">The Profitability <em class="text-[var(--indigo)]">Framework</em></h2>
        <p class="text-[var(--text-muted)] text-sm font-light leading-relaxed max-w-2xl mb-12">NIM and capital ratios are not independent metrics — they are deeply interrelated. Higher capital requirements compress ROE even when NIM is strong; conversely, NIM expansion only translates to ROE improvement if capital is efficiently deployed.</p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-14">
            <div>
                <p class="text-[var(--text-body)] text-sm font-light leading-relaxed mb-4">The relationship is expressed in the <strong class="font-semibold text-[var(--navy)]">DuPont decomposition of ROE</strong>: ROE = Net Profit Margin × Asset Utilisation × Equity Multiplier. NIM drives asset utilisation; capital requirements determine the equity multiplier — making both levers essential to ROE optimisation.</p>
                <p class="text-[var(--text-body)] text-sm font-light leading-relaxed mb-4">A bank can have excellent NIM but poor ROE if it is over-capitalised. Conversely, a bank can have thin NIM but acceptable ROE through efficient capital deployment and fee income diversification — as many European banks demonstrate.</p>
                <div class="border border-[var(--indigo)]/25 bg-[var(--indigo-light)] px-5 py-4 mt-6">
                    <div class="text-[var(--indigo)] text-[9px] font-bold tracking-[0.22em] uppercase mb-1.5">The Trade-off</div>
                    <p class="text-[var(--text-body)] text-sm leading-relaxed">Every additional 1% of CET1 capital held above regulatory minimums reduces ROE by approximately <strong class="text-[var(--navy)] font-semibold">1.0–1.5 percentage points</strong> — making capital optimisation a critical lever for shareholder value creation.</p>
                </div>
            </div>
            <div class="flex flex-col gap-3">
                @foreach([['3.4%','US avg NIM — Q4 2025','indigo'],['13.2%','Avg CET1 ratio — US major banks 2025','navy'],['11.4%','Global avg bank ROE — 2025','navy-soft']] as [$v,$l,$c])
                <div class="p-7 bg-white border-l-4 border-[var(--{{ $c }})] shadow-[var(--shadow-sm)]">
                    <div class="fonttitle text-5xl font-black text-[var(--{{ $c }})] leading-none mb-1.5">{{ $v }}</div>
                    <div class="text-[var(--text-muted)] text-[11px] uppercase tracking-widest">{{ $l }}</div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section class="py-20 px-8 md:px-16 bg-white border-b border-[var(--border)] relative overflow-hidden" id="nim">
    <div class="absolute top-0 right-10 fonttitle font-black leading-none text-[var(--navy)]/[0.03] select-none pointer-events-none" style="font-size:180px">02</div>
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="flex items-center gap-2.5 mb-3"><span class="w-6 h-px bg-[var(--indigo)]"></span><span class="text-[var(--indigo)] text-[10px] font-bold tracking-[0.28em] uppercase">Chapter 02</span></div>
        <h2 class="fonttitle text-4xl md:text-[50px] font-bold leading-tight tracking-tight text-[var(--navy)] mb-4">NIM <em class="text-[var(--indigo)]">Deep Dive</em></h2>
        <p class="text-[var(--text-muted)] text-sm font-light leading-relaxed max-w-2xl mb-12">Net Interest Margin = (Interest Income − Interest Expense) ÷ Average Earning Assets. Every component is a management and market-driven variable.</p>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-px bg-[var(--border)]">
            @foreach([
            ['01','Asset Yield', 'The average return on all earning assets (loans + securities). Determined by loan mix, pricing discipline, and the rate environment at origination.'],
            ['02','Funding Cost', 'The blended cost of all funding — CASA deposits, term deposits, wholesale funding. Deposit franchise quality is the primary determinant.'],
            ['03','Asset Sensitivity','Banks with more variable-rate assets than liabilities expand NIM when rates rise. Asset sensitivity is measured by the repricing gap analysis.'],
            ['04','Mix Effect', 'Shifting from lower-yield mortgages to higher-yield consumer credit improves NIM — but increases credit risk. Portfolio mix is a key management lever.'],
            ] as [$n,$t,$b])
            <div class="bg-[var(--bg-surface)] p-7 border-t-2 border-transparent hover:border-[var(--indigo)] hover:bg-white transition-all duration-200">
                <div class="fonttitle text-4xl font-black text-[var(--indigo)] opacity-20 leading-none mb-3">{{ $n }}</div>
                <div class="text-[var(--navy)] text-[13px] font-semibold mb-2">{{ $t }}</div>
                <div class="text-[var(--text-muted)] text-[12.5px] font-light leading-relaxed">{{ $b }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="py-20 px-8 md:px-16 bg-[var(--bg-surface)] border-b border-[var(--border)] relative overflow-hidden" id="capital">
    <div class="absolute top-0 right-10 fonttitle font-black leading-none text-[var(--navy)]/[0.04] select-none pointer-events-none" style="font-size:180px">03</div>
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="flex items-center gap-2.5 mb-3"><span class="w-6 h-px bg-[var(--navy)]"></span><span class="text-[var(--navy)] text-[10px] font-bold tracking-[0.28em] uppercase">Chapter 03</span></div>
        <h2 class="fonttitle text-4xl md:text-[50px] font-bold leading-tight tracking-tight text-[var(--navy)] mb-4">Capital <em class="text-[var(--indigo)]">Ratios</em></h2>
        <p class="text-[var(--text-muted)] text-sm font-light leading-relaxed max-w-2xl mb-10">Basel III created a multi-layer capital framework — each ratio serving a distinct purpose in ensuring banks can absorb losses without systemic contagion.</p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-14">
            <div>
                <p class="text-[var(--text-body)] text-sm font-light leading-relaxed mb-4"><strong class="font-semibold text-[var(--navy)]">CET1 (Common Equity Tier 1)</strong> is the highest quality capital — ordinary shares and retained earnings. The minimum is 4.5% of risk-weighted assets, with a capital conservation buffer of 2.5% on top, bringing the effective minimum to 7.0%.</p>
                <p class="text-[var(--text-body)] text-sm font-light leading-relaxed mb-4">Systemically Important Banks (G-SIBs) carry additional capital surcharges of <strong class="font-semibold text-[var(--navy)]">1.0–3.5%</strong> reflecting their too-big-to-fail status. JPMorgan Chase carries the highest G-SIB surcharge at 4.5% (including buffers), requiring CET1 well above 12%.</p>
            </div>
            <div class="border border-[var(--border)] overflow-hidden shadow-[var(--shadow-sm)]">
                <div class="bg-[var(--bg-surface)] px-5 py-3 border-b border-[var(--border)]">
                    <h4 class="text-[var(--navy)] text-xs font-bold tracking-[0.16em] uppercase">Basel III Capital Stack</h4>
                </div>
                <table class="w-full text-sm border-collapse">
                    <thead>
                        <tr class="bg-[var(--bg-muted)] border-b border-[var(--border)]">
                            <th class="text-left px-5 py-2.5 text-[var(--text-muted)] text-[9.5px] font-bold tracking-[0.12em] uppercase">Ratio</th>
                            <th class="text-left px-5 py-2.5 text-[var(--text-muted)] text-[9.5px] font-bold tracking-[0.12em] uppercase">Min</th>
                            <th class="text-left px-5 py-2.5 text-[var(--text-muted)] text-[9.5px] font-bold tracking-[0.12em] uppercase">+Buffer</th>
                            <th class="text-left px-5 py-2.5 text-[var(--text-muted)] text-[9.5px] font-bold tracking-[0.12em] uppercase">Target</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach([
                        ['CET1', '4.5%','+ 2.5%','> 12%'],
                        ['Tier 1', '6.0%','+ 2.5%','> 14%'],
                        ['Total Capital','8.0%','+ 2.5%','> 16%'],
                        ['Leverage Ratio','3.0%','—', '> 5%'],
                        ] as [$r,$m,$b,$t])
                        <tr class="border-b border-[var(--border)]/60 hover:bg-[var(--bg-surface)] transition-colors">
                            <td class="px-5 py-3 font-semibold text-[var(--navy)] text-[13px]">{{ $r }}</td>
                            <td class="px-5 py-3 text-red-500 font-semibold text-[13px]">{{ $m }}</td>
                            <td class="px-5 py-3 text-amber-500 text-[13px]">{{ $b }}</td>
                            <td class="px-5 py-3 text-emerald-600 font-semibold text-[13px]">{{ $t }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<section class="py-20 px-8 md:px-16 bg-white border-b border-[var(--border)] relative overflow-hidden" id="interaction">
    <div class="absolute top-0 right-10 fonttitle font-black leading-none text-[var(--navy)]/[0.03] select-none pointer-events-none" style="font-size:180px">04</div>
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="flex items-center gap-2.5 mb-3"><span class="w-6 h-px bg-[var(--indigo)]"></span><span class="text-[var(--indigo)] text-[10px] font-bold tracking-[0.28em] uppercase">Chapter 04</span></div>
        <h2 class="fonttitle text-4xl md:text-[50px] font-bold leading-tight tracking-tight text-[var(--navy)] mb-4">NIM vs Capital <em class="text-[var(--indigo)]">Interaction</em></h2>
        <p class="text-[var(--text-muted)] text-sm font-light leading-relaxed max-w-2xl mb-12">The highest ROE outcomes emerge when NIM expansion coincides with efficient capital deployment — understanding the interaction is central to bank equity analysis.</p>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-px bg-[var(--border)]">
            @foreach([
            ['01','High NIM + Low Capital', 'The ideal scenario — strong asset yields funded cheaply with minimal equity drag. Typical of well-positioned US regional banks with strong CASA franchises.'],
            ['02','High NIM + High Capital', 'Strong revenues but ROE capped by over-capitalisation. Excess capital should be returned via buybacks or dividends to restore ROE to target.'],
            ['03','Low NIM + Low Capital', 'European universal banks — thin spreads but efficient capital use. Fee income and non-interest revenue compensate. Fragile in rate compression cycles.'],
            ['04','Low NIM + High Capital', 'The worst outcome — constrained revenue AND capital drag on ROE. Typically characterised by weak deposit franchise and high regulatory burden.'],
            ] as [$n,$t,$b])
            <div class="bg-[var(--bg-surface)] p-7 border-t-2 border-transparent hover:border-[var(--indigo)] hover:bg-white transition-all duration-200">
                <div class="fonttitle text-4xl font-black text-[var(--indigo)] opacity-20 leading-none mb-3">{{ $n }}</div>
                <div class="text-[var(--navy)] text-[13px] font-semibold mb-2">{{ $t }}</div>
                <div class="text-[var(--text-muted)] text-[12.5px] font-light leading-relaxed">{{ $b }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="py-20 px-8 md:px-16 bg-[var(--bg-surface)] border-b border-[var(--border)] relative overflow-hidden" id="outlook">
    <div class="absolute top-0 right-10 fonttitle font-black leading-none text-[var(--navy)]/[0.04] select-none pointer-events-none" style="font-size:180px">05</div>
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="flex items-center gap-2.5 mb-3"><span class="w-6 h-px bg-[var(--navy)]"></span><span class="text-[var(--navy)] text-[10px] font-bold tracking-[0.28em] uppercase">Chapter 05</span></div>
        <h2 class="fonttitle text-4xl md:text-[50px] font-bold leading-tight tracking-tight text-[var(--navy)] mb-4">NIM & Capital <em class="text-[var(--indigo)]">Outlook {{ now()->year }}</em></h2>
        <p class="text-[var(--text-muted)] text-sm font-light leading-relaxed max-w-2xl mb-10">Rate cuts compress NIM while Basel IV lifts capital requirements — navigating both headwinds simultaneously will test management quality across the sector.</p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-14">
            <ul class="space-y-3">
                @php $year = now()->year; @endphp
                @foreach([
                ['NIM normalisation', "US bank NIM expected to compress 20–40bps through {$year} as the rate cycle turns — reversing some of the 2022–2024 expansion."],
                ['Basel IV impact', 'Final Basel IV rules adding 10–15% to risk-weighted assets for many banks — requiring either capital raises or balance sheet optimisation.'],
                ['Buyback acceleration','Banks with strong capital generation accelerating returns via buybacks to offset ROE pressure from NIM compression.'],
                ['Deposit repricing', 'Liability-sensitive balance sheets will see faster cost of funds decline in rate cuts — protecting NIM for some institutions.'],
                ['IRRBB hedging cost', 'Increased interest rate hedging following SVB reducing NIM sensitivity — but at a cost to reported NIM levels.'],
                ] as [$t,$b])
                <li class="flex gap-3 items-start text-sm font-light text-[var(--text-muted)] leading-relaxed">
                    <span class="text-[var(--indigo)] font-semibold mt-0.5 flex-shrink-0">→</span>
                    <span><strong class="text-[var(--navy)] font-semibold">{{ $t }}</strong> — {{ $b }}</span>
                </li>
                @endforeach
            </ul>
            <div>
                <div class="border border-[var(--indigo)]/20 bg-[var(--indigo-light)] px-5 py-5 mb-6">
                    <div class="text-[var(--indigo)] text-[9.5px] font-bold tracking-[0.22em] uppercase mb-2">Analyst Framework</div>
                    <p class="text-[var(--text-body)] text-sm leading-relaxed">In a NIM compression cycle, focus on <strong class="text-[var(--navy)] font-semibold">fee income as % of total revenue, CIR improvement trajectory, and excess capital return capacity</strong> — these three factors determine which banks can sustain ROE above cost of equity despite NIM headwinds.</p>
                </div>
                <div class="flex flex-wrap gap-2">
                    @foreach(['NIM Compression','Basel IV','CET1','DuPont Analysis','IRRBB','Rate Sensitivity'] as $tag)
                    <span class="text-[10px] font-bold tracking-[0.16em] uppercase px-3.5 py-1.5 border border-[var(--border)] text-[var(--text-muted)] hover:border-[var(--indigo)] hover:text-[var(--indigo)] transition-colors cursor-default">{{ $tag }}</span>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-[var(--bg-surface)] border-t border-[var(--border)]">
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 divide-y md:divide-y-0 md:divide-x divide-[var(--border)]">
        @foreach([
        ['Banking Analysis', route('banking.analysis-profitability_metrics'),'Profitability Metrics', 'The full suite of six ratios used to measure bank financial performance.'],
        ['Banking Analysis', route('banking.analysis-risk_liquidity'), 'Risk & Liquidity', 'How capital and liquidity interact with credit and market risk.'],
        ['Banking Products', route('banking.products-treasury_services'), 'Treasury Services', 'ALM and IRRBB — the treasury levers that directly drive NIM.'],
        ] as [$cat,$href,$title,$desc])
        <a href="{{ $href }}" class="block p-7 hover:bg-white transition-colors duration-200 no-underline group">
            <div class="text-[var(--indigo)] text-[10px] font-bold tracking-[0.2em] uppercase mb-2.5">{{ $cat }}</div>
            <div class="fonttitle text-lg font-bold text-[var(--navy)] leading-snug mb-2 group-hover:text-[var(--indigo)] transition-colors">{{ $title }}</div>
            <div class="text-[var(--text-muted)] text-xs font-light leading-relaxed mb-3">{{ $desc }}</div>
            <span class="text-[var(--indigo)] text-[10px] font-bold tracking-[0.18em] uppercase">Read Article →</span>
        </a>
        @endforeach
    </div>
</section>

@endsection