@extends('layouts.backing')

@section('title', 'Deposit Products Analysis')
@section('description', 'Current accounts, savings products, and term deposits — the liability foundation that funds bank lending and determines funding cost.')
@section('content')

<section class="relative min-h-[80vh] flex flex-col justify-end bg-[var(--navy)] overflow-hidden px-8 md:px-16 pb-16 pt-18">
    <div class="absolute top-0 right-0 fonttitle font-black leading-none text-white/[0.03] select-none pointer-events-none tracking-tight" style="font-size:clamp(160px,28vw,380px)">DEP</div>
    <div class="absolute inset-0 pointer-events-none" style="background:radial-gradient(ellipse 65% 55% at 72% 15%,rgba(79,70,229,0.13) 0%,transparent 60%),radial-gradient(ellipse 40% 40% at 8% 85%,rgba(15,31,53,0.5) 0%,transparent 55%)"></div>
    <div class="relative z-10 max-w-7xl mx-auto w-full">
        <div class="flex items-center gap-3 mb-6">
            <span class="w-8 h-px bg-[var(--indigo-mid)]"></span>
            <span class="text-[var(--indigo-mid)] text-[10px] font-bold tracking-[0.28em] uppercase">Banking Products · Express Fintech {{ now()->year }}</span>
        </div>
        <h1 class="hero-title mb-8">Deposit<br><em class="text-[var(--indigo-mid)] not-italic">Products</em><br><span class="text-white/20">Analysis</span></h1>
        <div class="flex flex-wrap gap-3 mb-10">
            @foreach([['CASA','Current & Savings'],['Term','Fixed Deposits'],['CoF','Cost of Funds'],['LDR','Loan-to-Deposit']] as [$l,$s])
            <div class="bg-[var(--indigo)]/10 border border-[var(--indigo)]/30 px-5 py-2.5 flex flex-col items-center gap-0.5">
                <span class="text-[var(--indigo-mid)] text-[13px] font-bold tracking-widest uppercase">{{ $l }}</span>
                <span class="text-white/30 text-[9px] tracking-wider">{{ $s }}</span>
            </div>
            @endforeach
        </div>
        <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-6">
            <p class="max-w-lg text-white/50 text-sm font-light leading-relaxed border-l border-[var(--indigo-mid)] pl-4">Deposits are the lifeblood of banking — providing the low-cost funding that enables lending, generating fee income, and anchoring the customer relationship that drives lifetime value.</p>
            <div class="flex flex-col items-start md:items-end gap-1.5 flex-shrink-0 text-[10px] tracking-widest uppercase">
                <span class="text-white/35">{{ seoUpdateDate('products-deposit-analysis') }}</span>
                <span class="text-white/35"><b class="text-white/60">Read</b> 7 min</span>
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
        @foreach([['#overview','Overview',true],['#types','Product Types',false],['#funding','Funding Cost',false],['#comparison','Benchmarks',false],['#outlook','Outlook',false]] as [$href,$label,$active])
        <a href="{{ $href }}" class="flex-shrink-0 text-[10px] font-bold tracking-[0.18em] uppercase px-5 py-4 border-b-2 whitespace-nowrap transition-colors duration-200 no-underline {{ $active ? 'text-[var(--indigo)] border-[var(--indigo)]' : 'text-[var(--text-muted)] border-transparent hover:text-[var(--navy)]' }}">{{ $label }}</a>
        @endforeach
    </div>
</nav>

<section class="py-20 px-8 md:px-16 bg-[var(--bg-surface)] border-b border-[var(--border)] relative overflow-hidden" id="overview">
    <div class="absolute top-0 right-10 fonttitle font-black leading-none text-[var(--navy)]/[0.04] select-none pointer-events-none" style="font-size:180px">01</div>
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="flex items-center gap-2.5 mb-3"><span class="w-6 h-px bg-[var(--indigo)]"></span><span class="text-[var(--indigo)] text-[10px] font-bold tracking-[0.28em] uppercase">Chapter 01</span></div>
        <h2 class="fonttitle text-4xl md:text-[50px] font-bold leading-tight tracking-tight text-[var(--navy)] mb-4">The Deposit <em class="text-[var(--indigo)]">Franchise</em></h2>
        <p class="text-[var(--text-muted)] text-sm font-light leading-relaxed max-w-2xl mb-12">A strong deposit franchise is the single most durable competitive advantage in banking — providing stable, low-cost funding that underpins NIM and insulates banks from wholesale market volatility.</p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-14">
            <div>
                <p class="text-[var(--text-body)] text-sm font-light leading-relaxed mb-4"><strong class="font-semibold text-[var(--navy)]">Deposits fund approximately 70–80%</strong> of total bank assets at most retail-oriented institutions. Unlike wholesale funding, retail deposits are sticky, diversified, and repriced slowly — creating a structural NIM advantage over funding-dependent competitors.</p>
                <p class="text-[var(--text-body)] text-sm font-light leading-relaxed mb-4">The composition of the deposit base matters enormously. <strong class="font-semibold text-[var(--navy)]">CASA (Current Account / Savings Account)</strong> deposits carry near-zero interest cost and represent the highest-quality funding, while term deposits reprice at market rates and offer less insulation in rising rate environments.</p>
                <div class="border border-[var(--indigo)]/25 bg-[var(--indigo-light)] px-5 py-4 mt-6">
                    <div class="text-[var(--indigo)] text-[9px] font-bold tracking-[0.22em] uppercase mb-1.5">Valuation Insight</div>
                    <p class="text-[var(--text-body)] text-sm leading-relaxed">Banks with high CASA ratios trade at a significant premium to book — the deposit franchise is valued as a <strong class="text-[var(--navy)] font-semibold">durable economic moat</strong> that cannot be replicated quickly by competitors or capital market funding.</p>
                </div>
            </div>
            <div class="flex flex-col gap-3">
                @foreach([['70–80%','Deposits as share of total bank funding','indigo'],['~0%','Interest cost on CASA deposits','navy'],['$86T','Global bank deposit base — 2025 estimate','navy-soft']] as [$v,$l,$c])
                <div class="p-7 bg-white border-l-4 border-[var(--{{ $c }})] shadow-[var(--shadow-sm)]">
                    <div class="fonttitle text-5xl font-black text-[var(--{{ $c }})] leading-none mb-1.5">{{ $v }}</div>
                    <div class="text-[var(--text-muted)] text-[11px] uppercase tracking-widest">{{ $l }}</div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section class="py-20 px-8 md:px-16 bg-white border-b border-[var(--border)] relative overflow-hidden" id="types">
    <div class="absolute top-0 right-10 fonttitle font-black leading-none text-[var(--navy)]/[0.03] select-none pointer-events-none" style="font-size:180px">02</div>
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="flex items-center gap-2.5 mb-3"><span class="w-6 h-px bg-[var(--indigo)]"></span><span class="text-[var(--indigo)] text-[10px] font-bold tracking-[0.28em] uppercase">Chapter 02</span></div>
        <h2 class="fonttitle text-4xl md:text-[50px] font-bold leading-tight tracking-tight text-[var(--navy)] mb-4">Product <em class="text-[var(--indigo)]">Types</em></h2>
        <p class="text-[var(--text-muted)] text-sm font-light leading-relaxed max-w-2xl mb-12">Each deposit product occupies a distinct position on the cost, stability, and customer relationship spectrum.</p>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-px bg-[var(--border)]">
            @foreach([
            ['01','Current Account', 'Zero or near-zero interest. High transaction volume anchors the primary banking relationship. Core CASA product — the most valuable deposit type for banks.'],
            ['02','Savings Account', 'Low interest rate, high stickiness. Customers rarely switch savings providers. Provides stable low-cost funding with minimal repricing risk in rising rate cycles.'],
            ['03','Term Deposits', 'Fixed rate for a fixed term — typically 1 month to 5 years. Higher cost than CASA but provides funding certainty. Reprices at maturity, creating rate sensitivity.'],
            ['04','Notice Accounts', 'Intermediate product — higher rate than instant access, lower than fixed term. Requires notice period (7–90 days) before withdrawal. Popular in rising rate environments.'],
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

<section class="py-20 px-8 md:px-16 bg-[var(--bg-surface)] border-b border-[var(--border)] relative overflow-hidden" id="funding">
    <div class="absolute top-0 right-10 fonttitle font-black leading-none text-[var(--navy)]/[0.04] select-none pointer-events-none" style="font-size:180px">03</div>
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="flex items-center gap-2.5 mb-3"><span class="w-6 h-px bg-[var(--navy)]"></span><span class="text-[var(--navy)] text-[10px] font-bold tracking-[0.28em] uppercase">Chapter 03</span></div>
        <h2 class="fonttitle text-4xl md:text-[50px] font-bold leading-tight tracking-tight text-[var(--navy)] mb-4">Funding <em class="text-[var(--indigo)]">Cost Dynamics</em></h2>
        <p class="text-[var(--text-muted)] text-sm font-light leading-relaxed max-w-2xl mb-12">How a bank prices and manages its deposit book directly determines its cost of funds — and ultimately its NIM and profitability.</p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-14">
            <div>
                <p class="text-[var(--text-body)] text-sm font-light leading-relaxed mb-4"><strong class="font-semibold text-[var(--navy)]">Deposit beta</strong> — the proportion of a rate move that a bank passes through to depositors — is the key metric in rising rate cycles. Banks with low deposit betas expand NIM while competitors are forced to reprice faster to retain customers.</p>
                <p class="text-[var(--text-body)] text-sm font-light leading-relaxed mb-4">In the 2022–2024 rate cycle, US bank deposit betas averaged <strong class="font-semibold text-[var(--navy)]">40–45%</strong> — meaning for every 100bps of Fed hikes, banks raised deposit rates by just 40–45bps, capturing the majority of the rate uplift in NIM expansion.</p>
                <ul class="space-y-3 mt-6">
                    @foreach([
                    ['CASA ratio','Higher CASA = lower blended cost of funds. Best-in-class retail banks maintain CASA ratios above 60%.'],
                    ['Deposit beta','Low beta banks retain more NIM uplift in rising cycles — a key differentiator in rate analysis.'],
                    ['Maturity profile','Longer-duration deposit books reprice more slowly — providing NIM stability in volatile rate environments.'],
                    ['Customer stickiness','Primary banking relationships (salary accounts) show the lowest attrition and highest resistance to rate competition.'],
                    ] as [$t,$b])
                    <li class="flex gap-3 items-start text-sm font-light text-[var(--text-muted)] leading-relaxed">
                        <span class="text-[var(--indigo)] font-semibold mt-0.5 flex-shrink-0">→</span>
                        <span><strong class="text-[var(--navy)] font-semibold">{{ $t }}</strong> — {{ $b }}</span>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="border border-[var(--border)] overflow-hidden shadow-[var(--shadow-sm)]">
                <div class="bg-[var(--bg-surface)] px-5 py-3 border-b border-[var(--border)]">
                    <h4 class="text-[var(--navy)] text-xs font-bold tracking-[0.16em] uppercase">Deposit Cost by Product — US 2025</h4>
                </div>
                <table class="w-full text-sm border-collapse">
                    <thead>
                        <tr class="bg-[var(--bg-muted)] border-b border-[var(--border)]">
                            <th class="text-left px-5 py-2.5 text-[var(--text-muted)] text-[9.5px] font-bold tracking-[0.12em] uppercase">Product</th>
                            <th class="text-left px-5 py-2.5 text-[var(--text-muted)] text-[9.5px] font-bold tracking-[0.12em] uppercase">Avg Rate</th>
                            <th class="text-left px-5 py-2.5 text-[var(--text-muted)] text-[9.5px] font-bold tracking-[0.12em] uppercase">Beta</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach([
                        ['Current Account','0.05%','~5%'],
                        ['Savings Account','0.45%','~25%'],
                        ['Money Market', '4.20%','~80%'],
                        ['1-Year CD', '4.75%','~95%'],
                        ['Blended CoF', '1.82%','~42%'],
                        ] as [$p,$r,$b])
                        <tr class="border-b border-[var(--border)]/60 hover:bg-[var(--bg-surface)] transition-colors">
                            <td class="px-5 py-3 font-semibold text-[var(--navy)] text-[13px]">{{ $p }}</td>
                            <td class="px-5 py-3 text-[var(--indigo)] font-semibold text-[13px]">{{ $r }}</td>
                            <td class="px-5 py-3 text-[var(--text-body)] text-[13px]">{{ $b }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<section class="py-20 px-8 md:px-16 bg-white border-b border-[var(--border)] relative overflow-hidden" id="comparison">
    <div class="absolute top-0 right-10 fonttitle font-black leading-none text-[var(--navy)]/[0.03] select-none pointer-events-none" style="font-size:180px">04</div>
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="flex items-center gap-2.5 mb-3"><span class="w-6 h-px bg-[var(--indigo)]"></span><span class="text-[var(--indigo)] text-[10px] font-bold tracking-[0.28em] uppercase">Chapter 04</span></div>
        <h2 class="fonttitle text-4xl md:text-[50px] font-bold leading-tight tracking-tight text-[var(--navy)] mb-4">Deposit <em class="text-[var(--indigo)]">Benchmarks</em></h2>
        <p class="text-[var(--text-muted)] text-sm font-light leading-relaxed max-w-2xl mb-10">Key deposit quality metrics used to differentiate strong from average franchise value.</p>
        <div class="border border-[var(--border)] overflow-hidden shadow-[var(--shadow-sm)]">
            <div class="bg-[var(--bg-surface)] px-5 py-3 flex items-center justify-between border-b border-[var(--border)]">
                <h4 class="text-[var(--navy)] text-xs font-bold tracking-[0.16em] uppercase">Deposit Quality Matrix</h4>
                <span class="text-[var(--indigo)] text-[10px] tracking-widest uppercase">{{ now()->subYear()->year }}–{{ now()->year }}</span>
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
                        ['CASA Ratio', '> 60%', '40–60%', '< 40%'],
                            ['Deposit Beta', '< 30%' , '30–50%' , '> 50%' ],
                            ['LDR', '70–85%' , '85–95%' , '> 100%' ],
                            ['Cost of Deposits', '< 1.0%' , '1.0–2.5%' , '> 2.5%' ],
                            ['Deposit Growth', '> 8% YoY' , '3–8%' , '< 3%' ],
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
</section>

<section class="py-20 px-8 md:px-16 bg-[var(--bg-surface)] border-b border-[var(--border)] relative overflow-hidden" id="outlook">
    <div class="absolute top-0 right-10 fonttitle font-black leading-none text-[var(--navy)]/[0.04] select-none pointer-events-none" style="font-size:180px">05</div>
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="flex items-center gap-2.5 mb-3"><span class="w-6 h-px bg-[var(--navy)]"></span><span class="text-[var(--navy)] text-[10px] font-bold tracking-[0.28em] uppercase">Chapter 05</span></div>
        <h2 class="fonttitle text-4xl md:text-[50px] font-bold leading-tight tracking-tight text-[var(--navy)] mb-4">Deposit <em class="text-[var(--indigo)]">Outlook {{ now()->year }}</em></h2>
        <p class="text-[var(--text-muted)] text-sm font-light leading-relaxed max-w-2xl mb-10">Rate cuts will compress deposit margins — but franchise quality and CASA mix will determine who absorbs the impact most gracefully.</p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-14">
            <ul class="space-y-3">
                @foreach([
                ['CASA migration', 'Rate cuts reduce the opportunity cost of holding current accounts — CASA ratios should recover from 2022–2024 lows.'],
                ['Beta normalisation', 'As rates fall, deposit betas work in reverse — banks with stickier deposit bases will reprice downward more slowly, protecting NIM.'],
                ['Digital competition', 'Fintechs offering 4–5% savings rates attracted $200B+ in deposits during the high-rate cycle. Loyalty will be tested as rates normalise.'],
                ['Deposit insurance', 'Post-SVB regulatory pressure to expand FDIC coverage is reshaping how large depositors manage concentration risk.'],
                ['CBDC risk', 'Central bank digital currencies represent a long-term structural threat to deposit bases if implemented at retail scale.'],
                ] as [$t,$b])
                <li class="flex gap-3 items-start text-sm font-light text-[var(--text-muted)] leading-relaxed">
                    <span class="text-[var(--indigo)] font-semibold mt-0.5 flex-shrink-0">→</span>
                    <span><strong class="text-[var(--navy)] font-semibold">{{ $t }}</strong> — {{ $b }}</span>
                </li>
                @endforeach
            </ul>
            <div>
                <div class="border border-[var(--indigo)]/20 bg-[var(--indigo-light)] px-5 py-5 mb-6">
                    <div class="text-[var(--indigo)] text-[9.5px] font-bold tracking-[0.22em] uppercase mb-2">Key Insight {{ now()->year }}</div>
                    <p class="text-[var(--text-body)] text-sm leading-relaxed">Banks entering the rate-cut cycle with <strong class="text-[var(--navy)] font-semibold">high CASA ratios and primary relationship depth</strong> will outperform on NIM. The deposit franchise — not the loan book — is the primary driver of through-cycle profitability.</p>
                </div>
                <div class="flex flex-wrap gap-2">
                    @foreach(['CASA Ratio','Deposit Beta','Cost of Funds','LDR','NIM','Rate Cuts'] as $tag)
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
        ['Banking Products', route('banking.products-lending_framework'), 'Lending Framework', 'How banks structure, price, and manage their loan portfolios.'],
        ['Banking Analysis', route('banking.analysis-nim_capital'), 'NIM & Capital Ratios', 'How deposit cost feeds directly into net interest margin calculation.'],
        ['Banking Analysis', route('banking.analysis-profitability_metrics'), 'Profitability Metrics', 'ROA, ROE, NIM — the ratios shaped by deposit franchise quality.'],
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