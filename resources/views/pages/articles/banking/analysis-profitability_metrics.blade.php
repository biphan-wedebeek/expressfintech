@extends('layouts.backing')

@section('title', 'Banking Profitability Metrics')
@section('description', 'ROA, ROE, NIM, CIR — the six ratios that define banking profitability and how to interpret them across market cycles.')
@section('content')

<section class="relative min-h-[80vh] flex flex-col justify-end bg-[var(--navy)] overflow-hidden px-8 md:px-16 pb-16 pt-18">
    <div class="absolute top-0 right-0 fonttitle font-black leading-none text-white/[0.03] select-none pointer-events-none tracking-tight" style="font-size:clamp(160px,28vw,380px)">ROE</div>
    <div class="absolute inset-0 pointer-events-none" style="background:radial-gradient(ellipse 65% 55% at 72% 15%,rgba(79,70,229,0.13) 0%,transparent 60%),radial-gradient(ellipse 40% 40% at 8% 85%,rgba(15,31,53,0.5) 0%,transparent 55%)"></div>
    <div class="relative z-10 max-w-7xl mx-auto w-full">
        <div class="flex items-center gap-3 mb-6">
            <span class="w-8 h-px bg-[var(--indigo-mid)]"></span>
            <span class="text-[var(--indigo-mid)] text-[10px] font-bold tracking-[0.28em] uppercase">Banking Industry Analysis · Express Fintech {{ now()->year }}</span>
        </div>
        <h1 class="hero-title mb-8">Profitability<br><em class="text-[var(--indigo-mid)] not-italic">Metrics</em><br><span class="text-white/20">in Banking</span></h1>
        <div class="flex flex-wrap gap-3 mb-10">
            @foreach([['ROA','Return on Assets'],['ROE','Return on Equity'],['NIM','Net Interest Margin'],['CIR','Cost-to-Income']] as [$l,$s])
            <div class="bg-[var(--indigo)]/10 border border-[var(--indigo)]/30 px-5 py-2.5 flex flex-col items-center gap-0.5">
                <span class="text-[var(--indigo-mid)] text-[13px] font-bold tracking-widest uppercase">{{ $l }}</span>
                <span class="text-white/30 text-[9px] tracking-wider">{{ $s }}</span>
            </div>
            @endforeach
        </div>
        <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-6">
            <p class="max-w-lg text-white/50 text-sm font-light leading-relaxed border-l border-[var(--indigo-mid)] pl-4">Bank profitability metrics help analysts evaluate financial performance, operational efficiency, and long-term sustainability of financial institutions across rate cycles and competitive environments.</p>
            <div class="flex flex-col items-start md:items-end gap-1.5 flex-shrink-0 text-[10px] tracking-widest uppercase">
                <span class="text-white/35">{{ seoUpdateDate('analysis-profitability-metrics') }}</span>
                <span class="text-white/35"><b class="text-white/60">Read</b> 10 min</span>
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
        @foreach([['#overview','Overview',true],['#metrics','Key Metrics',false],['#drivers','Drivers',false],['#comparison','Comparison',false],['#outlook','Outlook',false]] as [$href,$label,$active])
        <a href="{{ $href }}" class="flex-shrink-0 text-[10px] font-bold tracking-[0.18em] uppercase px-5 py-4 border-b-2 whitespace-nowrap transition-colors duration-200 no-underline {{ $active ? 'text-[var(--indigo)] border-[var(--indigo)]' : 'text-[var(--text-muted)] border-transparent hover:text-[var(--navy)]' }}">{{ $label }}</a>
        @endforeach
    </div>
</nav>

<section class="py-20 px-8 md:px-16 bg-[var(--bg-surface)] border-b border-[var(--border)] relative overflow-hidden" id="overview">
    <div class="absolute top-0 right-10 fonttitle font-black leading-none text-[var(--navy)]/[0.04] select-none pointer-events-none" style="font-size:180px">01</div>
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="flex items-center gap-2.5 mb-3"><span class="w-6 h-px bg-[var(--indigo)]"></span><span class="text-[var(--indigo)] text-[10px] font-bold tracking-[0.28em] uppercase">Chapter 01</span></div>
        <h2 class="fonttitle text-4xl md:text-[50px] font-bold leading-tight tracking-tight text-[var(--navy)] mb-4">Industry <em class="text-[var(--indigo)]">Overview</em></h2>
        <p class="text-[var(--text-muted)] text-sm font-light leading-relaxed max-w-2xl mb-12">The global banking industry operates within a highly regulated environment where profitability is shaped by interest rate cycles, credit quality, and an accelerating shift toward digital business models.</p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-14">
            <div>
                <p class="text-[var(--text-body)] text-sm font-light leading-relaxed mb-4">Banks generate revenue through <strong class="font-semibold text-[var(--navy)]">interest income</strong> (the spread between lending and deposit rates), <strong class="font-semibold text-[var(--navy)]">non-interest income</strong> (fees and commissions), and <strong class="font-semibold text-[var(--navy)]">investment activities</strong>. How these streams interact with a bank's cost structure determines its true profitability.</p>
                <p class="text-[var(--text-body)] text-sm font-light leading-relaxed mb-4">The post-2008 <strong class="font-semibold text-[var(--navy)]">Basel III framework</strong> reshaped how banks are measured — introducing stricter capital adequacy, liquidity coverage, and leverage constraints that compress returns but improve systemic stability.</p>
                <div class="border border-[var(--indigo)]/25 bg-[var(--indigo-light)] px-5 py-4 mt-6">
                    <div class="text-[var(--indigo)] text-[9px] font-bold tracking-[0.22em] uppercase mb-1.5">Key Data</div>
                    <p class="text-[var(--text-body)] text-sm leading-relaxed">Global bank ROE averaged <strong class="text-[var(--navy)] font-semibold">11.4%</strong> in 2025 — the highest since 2007 — driven by higher-for-longer interest rates across developed markets.</p>
                </div>
            </div>
            <div class="flex flex-col gap-3">
                @foreach([['11.4%','Global average bank ROE — 2025','indigo'],['$8.9T','Global bank net income pool — 2025','navy'],['3.4%','US commercial bank average NIM — 2025','navy-soft']] as [$v,$l,$c])
                <div class="p-7 bg-white border-l-4 border-[var(--{{ $c }})] shadow-[var(--shadow-sm)]">
                    <div class="fonttitle text-5xl font-black text-[var(--{{ $c }})] leading-none mb-1.5">{{ $v }}</div>
                    <div class="text-[var(--text-muted)] text-[11px] uppercase tracking-widest">{{ $l }}</div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section class="py-20 px-8 md:px-16 bg-white border-b border-[var(--border)] relative overflow-hidden" id="metrics">
    <div class="absolute top-0 right-10 fonttitle font-black leading-none text-[var(--navy)]/[0.03] select-none pointer-events-none" style="font-size:180px">02</div>
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="flex items-center gap-2.5 mb-3"><span class="w-6 h-px bg-[var(--indigo)]"></span><span class="text-[var(--indigo)] text-[10px] font-bold tracking-[0.28em] uppercase">Chapter 02</span></div>
        <h2 class="fonttitle text-4xl md:text-[50px] font-bold leading-tight tracking-tight text-[var(--navy)] mb-4">Key Profitability <em class="text-[var(--indigo)]">Metrics</em></h2>
        <p class="text-[var(--text-muted)] text-sm font-light leading-relaxed max-w-2xl mb-12">Six ratios form the analytical core of bank profitability assessment — each measuring a distinct dimension of performance.</p>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-px bg-[var(--border)] mb-px">
            @foreach([
            ['ROA','Return on Assets', 'Metric 01','How efficiently a bank generates profit from its total asset base. Net Income ÷ Total Assets. Benchmark: above 1.0% is strong.'],
            ['ROE','Return on Equity', 'Metric 02','How effectively shareholder capital generates earnings. Net Income ÷ Avg Equity. Target: above 12% for sustainable returns.'],
            ['NIM','Net Interest Margin', 'Metric 03','The spread between interest income and interest paid to depositors. Core lending profitability signal. Strong: above 3.0%.'],
            ] as [$abbr,$name,$tag,$body])
            <div class="bg-[var(--bg-surface)] p-8 border-t-2 border-transparent hover:border-[var(--indigo)] hover:bg-white transition-all duration-200">
                <div class="text-[var(--indigo)] text-[10px] font-bold tracking-[0.22em] uppercase mb-2.5">{{ $tag }}</div>
                <div class="fonttitle text-5xl font-black text-[var(--navy)] leading-none mb-2">{{ $abbr }}</div>
                <div class="text-[var(--navy)] text-[13px] font-semibold mb-2">{{ $name }}</div>
                <div class="text-[var(--text-muted)] text-[12.5px] font-light leading-relaxed">{{ $body }}</div>
            </div>
            @endforeach
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-px bg-[var(--border)]">
            @foreach([
            ['CIR', 'Cost-to-Income Ratio', 'Metric 04','Operating expenses as a share of income. Best-in-class banks achieve below 50%. Digital-native banks operate at 35–42%.'],
            ['NPL', 'Non-Performing Loans', 'Metric 05','Share of loans past 90 days due. Measures credit quality and underwriting discipline. Healthy: below 1.5%. Stress: above 3%.'],
            ['CET1','Common Equity Tier 1', 'Metric 06','Primary regulatory capital ratio under Basel III. Minimum 8%. Well-capitalised: above 12%, providing buffer for economic shocks.'],
            ] as [$abbr,$name,$tag,$body])
            <div class="bg-[var(--bg-surface)] p-8 border-t-2 border-transparent hover:border-[var(--navy)] hover:bg-white transition-all duration-200">
                <div class="text-[var(--navy)] text-[10px] font-bold tracking-[0.22em] uppercase mb-2.5">{{ $tag }}</div>
                <div class="fonttitle text-5xl font-black text-[var(--navy)] leading-none mb-2">{{ $abbr }}</div>
                <div class="text-[var(--navy)] text-[13px] font-semibold mb-2">{{ $name }}</div>
                <div class="text-[var(--text-muted)] text-[12.5px] font-light leading-relaxed">{{ $body }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="py-20 px-8 md:px-16 bg-[var(--bg-surface)] border-b border-[var(--border)] relative overflow-hidden" id="drivers">
    <div class="absolute top-0 right-10 fonttitle font-black leading-none text-[var(--navy)]/[0.04] select-none pointer-events-none" style="font-size:180px">03</div>
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="flex items-center gap-2.5 mb-3"><span class="w-6 h-px bg-[var(--navy)]"></span><span class="text-[var(--navy)] text-[10px] font-bold tracking-[0.28em] uppercase">Chapter 03</span></div>
        <h2 class="fonttitle text-4xl md:text-[50px] font-bold leading-tight tracking-tight text-[var(--navy)] mb-4">Performance <em class="text-[var(--indigo)]">Drivers</em></h2>
        <p class="text-[var(--text-muted)] text-sm font-light leading-relaxed max-w-2xl mb-12">Macro conditions set the ceiling on bank profitability — management quality, technology investment, and risk discipline determine where within that range a bank actually lands.</p>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-px bg-[var(--border)]">
            @foreach([
            ['01','Interest Rate Environment','The most powerful external driver. Rising rates expand NIM for asset-sensitive banks; flat or inverted curves compress it sector-wide.'],
            ['02','Loan Portfolio Quality', 'NPL ratios and credit loss provisions directly reduce net income. Underwriting standards and portfolio diversification are the primary levers.'],
            ['03','Operating Efficiency', 'CIR is the key metric. Banks investing in digital infrastructure are opening a structural gap over legacy peers year by year.'],
            ['04','Regulatory Capital', 'Basel III CET1 requirements constrain leverage and ROE. Excess capital creates drag unless deployed through lending, buybacks, or dividends.'],
            ] as [$n,$t,$b])
            <div class="bg-white p-7 border-t-2 border-transparent hover:border-[var(--navy)] hover:bg-[var(--indigo-light)] transition-all duration-200">
                <div class="fonttitle text-4xl font-black text-[var(--navy)] opacity-20 leading-none mb-3">{{ $n }}</div>
                <div class="text-[var(--navy)] text-[13px] font-semibold mb-2">{{ $t }}</div>
                <div class="text-[var(--text-muted)] text-[12.5px] font-light leading-relaxed">{{ $b }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="py-20 px-8 md:px-16 bg-white border-b border-[var(--border)] relative overflow-hidden" id="comparison">
    <div class="absolute top-0 right-10 fonttitle font-black leading-none text-[var(--navy)]/[0.03] select-none pointer-events-none" style="font-size:180px">04</div>
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="flex items-center gap-2.5 mb-3"><span class="w-6 h-px bg-[var(--indigo)]"></span><span class="text-[var(--indigo)] text-[10px] font-bold tracking-[0.28em] uppercase">Chapter 04</span></div>
        <h2 class="fonttitle text-4xl md:text-[50px] font-bold leading-tight tracking-tight text-[var(--navy)] mb-4">Bank Profitability <em class="text-[var(--indigo)]">Comparison</em></h2>
        <p class="text-[var(--text-muted)] text-sm font-light leading-relaxed max-w-2xl mb-10">Benchmark thresholds distinguish high-performing institutions from average or stressed ones across all key metrics.</p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-14">
            <div>
                <div class="border border-[var(--border)] overflow-hidden shadow-[var(--shadow-sm)]">
                    <div class="bg-[var(--bg-surface)] px-5 py-3 flex items-center justify-between border-b border-[var(--border)]">
                        <h4 class="text-[var(--navy)] text-xs font-bold tracking-[0.16em] uppercase">Benchmark Matrix</h4>
                        <span class="text-[var(--indigo)] text-[10px] tracking-widest uppercase">Q1 {{ now()->year }}</span>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-sm border-collapse">
                            <thead>
                                <tr class="bg-[var(--bg-muted)] border-b border-[var(--border)]">
                                    <th class="text-left px-5 py-3 text-[var(--text-muted)] text-[9.5px] font-bold tracking-[0.12em] uppercase">Metric</th>
                                    <th class="text-left px-5 py-3 text-emerald-600 text-[9.5px] font-bold tracking-[0.12em] uppercase">Strong</th>
                                    <th class="text-left px-5 py-3 text-amber-500 text-[9.5px] font-bold tracking-[0.12em] uppercase">Average</th>
                                    <th class="text-left px-5 py-3 text-red-500 text-[9.5px] font-bold tracking-[0.12em] uppercase">Weak</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach([
                                ['ROA', '> 1.5%', '0.8–1.5%','< 0.8%'],
                                    ['ROE', '> 15%' , '10–15%' , '< 10%' ],
                                    ['NIM', '> 3.0%' , '2.0–3.0%' ,'< 2.0%'],
                                    ['CIR', '< 50%' , '50–65%' , '> 65%' ],
                                    ['NPL', '< 1.0%' , '1.0–3.0%' ,'> 3.0%'],
                                    ['CET1','> 13%', '10–13%', '< 10%'],
                                        ] as [$m,$s,$a,$w])
                                        <tr class="border-b border-[var(--border)]/60 hover:bg-[var(--bg-surface)] transition-colors">
                                        <td class="px-5 py-3 font-semibold text-[var(--navy)] text-[13px]">{{ $m }}</td>
                                        <td class="px-5 py-3 text-emerald-600 font-semibold text-[13px]">{{ $s }}</td>
                                        <td class="px-5 py-3 text-amber-500 font-semibold text-[13px]">{{ $a }}</td>
                                        <td class="px-5 py-3 text-red-500 font-semibold text-[13px]">{{ $w }}</td>
                                        </tr>
                                        @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div>
                <div class="text-[var(--indigo)] text-[10px] font-bold tracking-[0.2em] uppercase mb-5">ROE by Institution — 2025</div>
                <div class="flex flex-col gap-4">
                    @foreach([
                    ['JPMorgan Chase', '17.1%', 100],
                    ['Goldman Sachs', '13.6%', 80],
                    ['Wells Fargo', '12.8%', 75],
                    ['Bank of America','11.2%', 65],
                    ['European Avg', '9.4%', 55],
                    ] as [$name,$val,$pct])
                    <div>
                        <div class="flex justify-between items-baseline mb-1.5">
                            <span class="text-[var(--text-body)] text-xs">{{ $name }}</span>
                            <span class="text-[var(--indigo)] text-xs font-bold tracking-wide">{{ $val }}</span>
                        </div>
                        <div class="h-px bg-[var(--border)] relative">
                            <div class="absolute left-0 top-0 h-full bg-[var(--indigo)]" style="width:{{ $pct }}%"></div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-20 px-8 md:px-16 bg-[var(--bg-surface)] border-b border-[var(--border)] relative overflow-hidden" id="outlook">
    <div class="absolute top-0 right-10 fonttitle font-black leading-none text-[var(--navy)]/[0.04] select-none pointer-events-none" style="font-size:180px">05</div>
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="flex items-center gap-2.5 mb-3"><span class="w-6 h-px bg-[var(--navy)]"></span><span class="text-[var(--navy)] text-[10px] font-bold tracking-[0.28em] uppercase">Chapter 05</span></div>
        <h2 class="fonttitle text-4xl md:text-[50px] font-bold leading-tight tracking-tight text-[var(--navy)] mb-4">Industry <em class="text-[var(--indigo)]">Outlook</em></h2>
        <p class="text-[var(--text-muted)] text-sm font-light leading-relaxed max-w-2xl mb-10">A shifting rate environment, evolving regulation, and digital disruption are reshaping the profitability landscape heading into {{ now()->year }}.</p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-14">
            <ul class="space-y-3">
                @php $year = now()->year; @endphp
                @foreach([
                ['NIM compression', 'As central banks pivot to rate cuts, banks that expanded NIM in 2022–2024 will face earnings normalisation.'],
                ['Digital CIR gap', 'Banks investing in technology are harvesting CIR savings through automation — creating a durable competitive moat.'],
                ['CRE credit stress', "Commercial real estate loan portfolios remain the most significant credit quality risk for US regional banks in {$year}."],
                ['AI adoption', 'AI adoption reducing costs by 15–25% for early movers — flowing directly into improved CIR and ROE.'],
                ['Capital deployment', 'Banks with excess CET1 capital accelerating buybacks and dividends — supporting ROE without balance sheet growth.'],
                ] as [$t,$b])
                <li class="flex gap-3 items-start text-sm font-light text-[var(--text-muted)] leading-relaxed">
                    <span class="text-[var(--indigo)] font-semibold mt-0.5 flex-shrink-0">→</span>
                    <span><strong class="text-[var(--navy)] font-semibold">{{ $t }}</strong> — {{ $b }}</span>
                </li>
                @endforeach
            </ul>
            <div>
                <div class="border border-[var(--indigo)]/20 bg-[var(--indigo-light)] px-5 py-5 mb-6">
                    <div class="text-[var(--indigo)] text-[9.5px] font-bold tracking-[0.22em] uppercase mb-2">Key Risk {{ now()->year }}</div>
                    <p class="text-[var(--text-body)] text-sm leading-relaxed"><strong class="text-[var(--navy)] font-semibold">Commercial real estate (CRE)</strong> loan portfolios remain the most significant credit quality risk for US regional banks — office vacancy above 20% threatens collateral values materially, with loan maturities in 2025–2027 forcing reckoning.</p>
                </div>
                <div class="flex flex-wrap gap-2">
                    @foreach(['ROE','NIM','CIR','Basel III','CRE Risk','AI in Banking'] as $tag)
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
        ['Banking Analysis', route('banking.analysis-nim_capital'), 'NIM & Capital Ratios', 'Deep dive into net interest margin drivers and Basel capital requirements.'],
        ['Banking Analysis', route('banking.analysis-risk_liquidity'), 'Risk & Liquidity', 'Credit risk frameworks, stress testing, and liquidity management.'],
        ['Banking Analysis', route('banking.analysis-global_outlook'), 'Global Banking Outlook', 'Macro forces shaping banking profitability across cycles.'],
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