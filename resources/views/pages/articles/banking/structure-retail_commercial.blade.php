@extends('layouts.backing')

@section('title', 'Retail vs Commercial Banking')
@section('description', 'Understanding the key differences between retail and commercial banking — services, clients, revenue models, and risk profiles.')
@section('content')

<section class="relative min-h-[80vh] flex flex-col justify-end bg-[var(--navy)] overflow-hidden px-8 md:px-18 pb-16 pt-18">
    <div class="absolute top-0 right-0 fonttitle font-black leading-none text-white/[0.03] select-none pointer-events-none tracking-tight"
        style="font-size:clamp(160px,28vw,380px)">RCB</div>
    <div class="absolute inset-0 pointer-events-none"
        style="background:radial-gradient(ellipse 65% 55% at 72% 15%,rgba(79,70,229,0.13) 0%,transparent 60%),radial-gradient(ellipse 40% 40% at 8% 85%,rgba(15,31,53,0.5) 0%,transparent 55%)"></div>

    <div class="relative z-10 max-w-7xl mx-auto w-full">
        <div class="flex items-center gap-3 mb-6">
            <span class="w-8 h-px bg-[var(--indigo-mid)]"></span>
            <span class="text-[var(--indigo-mid)] text-[10px] font-bold tracking-[0.28em] uppercase">Banking Structure · Express Fintech Updated {{ now()->year }}</span>
        </div>

        <h1 class="hero-title mb-8">
            Retail vs<br>
            <em class="text-[var(--indigo-mid)] not-italic">Commercial</em><br>
            <span class="text-white/20">Banking</span>
        </h1>

        <div class="flex flex-wrap gap-3 mb-10">
            @foreach([
            ['label'=>'Retail', 'sub'=>'Consumer Focus'],
            ['label'=>'Commercial', 'sub'=>'Business Focus'],
            ['label'=>'Revenue', 'sub'=>'Models'],
            ['label'=>'Risk', 'sub'=>'Profiles'],
            ] as $pill)
            <div class="bg-[var(--indigo)]/10 border border-[var(--indigo)]/30 px-5 py-2.5 flex flex-col items-center gap-0.5">
                <span class="text-[var(--indigo-mid)] text-[13px] font-bold tracking-widest uppercase">{{ $pill['label'] }}</span>
                <span class="text-white/30 text-[9px] tracking-wider">{{ $pill['sub'] }}</span>
            </div>
            @endforeach
        </div>

        <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-6">
            <p class="max-w-lg text-white/50 text-sm font-light leading-relaxed border-l border-[var(--indigo-mid)] pl-4">
                Retail and commercial banks serve fundamentally different client segments — understanding their distinct structures, revenue drivers, and risk frameworks is essential to banking analysis.
            </p>
            <div class="flex flex-col items-start md:items-end gap-1.5 flex-shrink-0 text-[10px] tracking-widest uppercase">
                <span class="text-white/35">{{ seoUpdateDate('structure-retail-commercial') }}</span>
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
        @foreach([
        ['#overview', 'Overview', true],
        ['#retail', 'Retail Banking', false],
        ['#commercial', 'Commercial Banking',false],
        ['#comparison', 'Comparison', false],
        ['#outlook', 'Outlook', false],
        ] as [$href, $label, $active])
        <a href="{{ $href }}"
            class="flex-shrink-0 text-[10px] font-bold tracking-[0.18em] uppercase px-5 py-4
                  border-b-2 whitespace-nowrap transition-colors duration-200 no-underline
                  {{ $active
                      ? 'text-[var(--indigo)] border-[var(--indigo)]'
                      : 'text-[var(--text-muted)] border-transparent hover:text-[var(--navy)]' }}">
            {{ $label }}
        </a>
        @endforeach
    </div>
</nav>

<section class="py-20 px-8 md:px-16 bg-[var(--bg-surface)] border-b border-[var(--border)] relative overflow-hidden" id="overview">
    <div class="absolute top-0 right-10 fonttitle font-black leading-none text-[var(--navy)]/[0.04] select-none pointer-events-none" style="font-size:180px">01</div>
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="flex items-center gap-2.5 mb-3">
            <span class="w-6 h-px bg-[var(--indigo)]"></span>
            <span class="text-[var(--indigo)] text-[10px] font-bold tracking-[0.28em] uppercase">Chapter 01</span>
        </div>
        <h2 class="fonttitle text-4xl md:text-[50px] font-bold leading-tight tracking-tight text-[var(--navy)] mb-4">
            Industry <em class="text-[var(--indigo)]">Overview</em>
        </h2>
        <p class="text-[var(--text-muted)] text-sm font-light leading-relaxed max-w-2xl mb-12">
            The banking sector divides broadly into retail and commercial segments — each with distinct client bases, product suites, and profitability drivers.
        </p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-14">
            <div>
                <p class="text-[var(--text-body)] text-sm font-light leading-relaxed mb-4">
                    <strong class="font-semibold text-[var(--navy)]">Retail banking</strong> serves individual consumers
                    and households — delivering savings accounts, mortgages, personal loans, and payment services
                    through branch networks and increasingly through digital channels.
                </p>
                <p class="text-[var(--text-body)] text-sm font-light leading-relaxed mb-4">
                    <strong class="font-semibold text-[var(--navy)]">Commercial banking</strong> targets businesses —
                    from SMEs to large corporates — providing credit facilities, cash management, trade finance,
                    and treasury services calibrated to corporate financial needs.
                </p>
                <div class="border border-[var(--indigo)]/25 bg-[var(--indigo-light)] px-5 py-4 mt-6">
                    <div class="text-[var(--indigo)] text-[9px] font-bold tracking-[0.22em] uppercase mb-1.5">Key Data</div>
                    <p class="text-[var(--text-body)] text-sm leading-relaxed">
                        Retail banking generates approximately <strong class="text-[var(--navy)] font-semibold">55%</strong>
                        of global bank revenues; commercial banking contributes the remaining
                        <strong class="text-[var(--navy)] font-semibold">45%</strong> — with outsized profit contribution
                        from commercial segments due to lower funding costs.
                    </p>
                </div>
            </div>
            <div class="flex flex-col gap-3">
                @foreach([
                ['55%', 'Retail share of global bank revenues', 'indigo'],
                ['$2.4T','Commercial lending outstanding — US 2025', 'navy'],
                ['3.2×', 'Higher avg ticket size — commercial vs retail', 'navy-soft'],
                ] as [$val, $label, $color])
                <div class="p-7 bg-white border-l-4 border-[var(--{{ $color }})] shadow-[var(--shadow-sm)]">
                    <div class="fonttitle text-5xl font-black text-[var(--{{ $color }})] leading-none mb-1.5">{{ $val }}</div>
                    <div class="text-[var(--text-muted)] text-[11px] uppercase tracking-widest">{{ $label }}</div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section class="py-20 px-8 md:px-16 bg-white border-b border-[var(--border)] relative overflow-hidden" id="retail">
    <div class="absolute top-0 right-10 fonttitle font-black leading-none text-[var(--navy)]/[0.03] select-none pointer-events-none" style="font-size:180px">02</div>
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="flex items-center gap-2.5 mb-3">
            <span class="w-6 h-px bg-[var(--indigo)]"></span>
            <span class="text-[var(--indigo)] text-[10px] font-bold tracking-[0.28em] uppercase">Chapter 02</span>
        </div>
        <h2 class="fonttitle text-4xl md:text-[50px] font-bold leading-tight tracking-tight text-[var(--navy)] mb-4">
            Retail <em class="text-[var(--indigo)]">Banking</em>
        </h2>
        <p class="text-[var(--text-muted)] text-sm font-light leading-relaxed max-w-2xl mb-12">
            Consumer-facing banking built on deposit franchises, mass-market credit products, and digital convenience.
        </p>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-px bg-[var(--border)]">
            @foreach([
            ['01','Core Products', 'Savings & checking accounts, mortgages, personal loans, credit cards, and basic investment products targeted at individual consumers.'],
            ['02','Revenue Model', 'Net interest margin on consumer loans and mortgages, fee income from cards and account services, and wealth management cross-sell.'],
            ['03','Risk Profile', 'Highly granular — millions of small exposures. Credit risk managed through scoring models and diversification rather than individual underwriting.'],
            ['04','Distribution', 'Branch networks remain relevant for complex products; digital channels now handle 80%+ of routine transactions at leading banks.'],
            ] as [$num, $title, $body])
            <div class="bg-[var(--bg-surface)] p-7 border-t-2 border-transparent hover:border-[var(--indigo)] hover:bg-white transition-all duration-200">
                <div class="fonttitle text-4xl font-black text-[var(--indigo)] opacity-20 leading-none mb-3">{{ $num }}</div>
                <div class="text-[var(--navy)] text-[13px] font-semibold mb-2">{{ $title }}</div>
                <div class="text-[var(--text-muted)] text-[12.5px] font-light leading-relaxed">{{ $body }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="py-20 px-8 md:px-16 bg-[var(--bg-surface)] border-b border-[var(--border)] relative overflow-hidden" id="commercial">
    <div class="absolute top-0 right-10 fonttitle font-black leading-none text-[var(--navy)]/[0.04] select-none pointer-events-none" style="font-size:180px">03</div>
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="flex items-center gap-2.5 mb-3">
            <span class="w-6 h-px bg-[var(--navy)]"></span>
            <span class="text-[var(--navy)] text-[10px] font-bold tracking-[0.28em] uppercase">Chapter 03</span>
        </div>
        <h2 class="fonttitle text-4xl md:text-[50px] font-bold leading-tight tracking-tight text-[var(--navy)] mb-4">
            Commercial <em class="text-[var(--indigo)]">Banking</em>
        </h2>
        <p class="text-[var(--text-muted)] text-sm font-light leading-relaxed max-w-2xl mb-12">
            Business-focused banking where relationship depth, credit expertise, and product breadth drive wallet share.
        </p>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-px bg-[var(--border)]">
            @foreach([
            ['01','Core Products', 'Revolving credit facilities, term loans, trade finance, cash management, FX hedging, and capital markets access for mid-to-large corporates.'],
            ['02','Revenue Model', 'Loan spreads, fees on credit facilities, transaction banking revenues from cash management, and fee income from advisory and capital markets.'],
            ['03','Risk Profile', 'Concentrated exposures requiring deep individual underwriting. Sector concentration risk must be actively managed through portfolio construction.'],
            ['04','Relationship Model', 'Relationship managers are the primary distribution channel. Long-term client relationships often span multiple product lines and decades.'],
            ] as [$num, $title, $body])
            <div class="bg-white p-7 border-t-2 border-transparent hover:border-[var(--navy)] hover:bg-[var(--indigo-light)] transition-all duration-200">
                <div class="fonttitle text-4xl font-black text-[var(--navy)] opacity-20 leading-none mb-3">{{ $num }}</div>
                <div class="text-[var(--navy)] text-[13px] font-semibold mb-2">{{ $title }}</div>
                <div class="text-[var(--text-muted)] text-[12.5px] font-light leading-relaxed">{{ $body }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="py-20 px-8 md:px-16 bg-white border-b border-[var(--border)] relative overflow-hidden" id="comparison">
    <div class="absolute top-0 right-10 fonttitle font-black leading-none text-[var(--navy)]/[0.03] select-none pointer-events-none" style="font-size:180px">04</div>
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="flex items-center gap-2.5 mb-3">
            <span class="w-6 h-px bg-[var(--indigo)]"></span>
            <span class="text-[var(--indigo)] text-[10px] font-bold tracking-[0.28em] uppercase">Chapter 04</span>
        </div>
        <h2 class="fonttitle text-4xl md:text-[50px] font-bold leading-tight tracking-tight text-[var(--navy)] mb-4">
            Side-by-Side <em class="text-[var(--indigo)]">Comparison</em>
        </h2>
        <p class="text-[var(--text-muted)] text-sm font-light leading-relaxed max-w-2xl mb-10">
            Key structural differences that shape strategy, valuation, and risk management across both segments.
        </p>

        <div class="border border-[var(--border)] overflow-hidden shadow-[var(--shadow-sm)]">
            <div class="bg-[var(--bg-surface)] px-5 py-3 flex items-center justify-between border-b border-[var(--border)]">
                <h4 class="text-[var(--navy)] text-xs font-bold tracking-[0.16em] uppercase">Comparison Matrix</h4>
                <span class="text-[var(--indigo)] text-[10px] tracking-widest uppercase">{{ (now()->year - 1) . '–' . now()->year }}</span>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-sm border-collapse">
                    <thead>
                        <tr class="bg-[var(--bg-muted)] border-b border-[var(--border)]">
                            <th class="text-left px-5 py-3 text-[var(--text-muted)] text-[9.5px] font-bold tracking-[0.12em] uppercase">Dimension</th>
                            <th class="text-left px-5 py-3 text-[var(--indigo)] text-[9.5px] font-bold tracking-[0.12em] uppercase">Retail Banking</th>
                            <th class="text-left px-5 py-3 text-[var(--navy)] text-[9.5px] font-bold tracking-[0.12em] uppercase">Commercial Banking</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach([
                        ['Clients', 'Individuals & households', 'Businesses — SME to large corporate'],
                        ['Avg loan size', '$15K–$400K (mortgages)', '$500K–$50M+'],
                        ['Credit approach', 'Scoring model / automated', 'Individual underwriting / RM judgment'],
                        ['Key revenue', 'NIM + card fees', 'Loan spreads + transaction banking fees'],
                        ['ROE profile', '10–14% typical', '12–18% for top performers'],
                        ['NIM range', '2.5–4.0%', '2.0–3.5%'],
                        ['Distribution', 'Branch + digital', 'Relationship Manager model'],
                        ['Regulation', 'Consumer protection / AML', 'Capital requirements / Basel III'],
                        ] as [$dim, $retail, $commercial])
                        <tr class="border-b border-[var(--border)]/60 hover:bg-[var(--bg-surface)] transition-colors">
                            <td class="px-5 py-3 font-semibold text-[var(--navy)] text-[13px]">{{ $dim }}</td>
                            <td class="px-5 py-3 text-[var(--text-body)] text-[13px]">{{ $retail }}</td>
                            <td class="px-5 py-3 text-[var(--text-body)] text-[13px]">{{ $commercial }}</td>
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
        <div class="flex items-center gap-2.5 mb-3">
            <span class="w-6 h-px bg-[var(--navy)]"></span>
            <span class="text-[var(--navy)] text-[10px] font-bold tracking-[0.28em] uppercase">Chapter 05</span>
        </div>
        <h2 class="fonttitle text-4xl md:text-[50px] font-bold leading-tight tracking-tight text-[var(--navy)] mb-4">
            Strategic <em class="text-[var(--indigo)]">Outlook</em>
        </h2>
        <p class="text-[var(--text-muted)] text-sm font-light leading-relaxed max-w-2xl mb-12">
            Convergence pressures, digital disruption, and margin compression are blurring historical boundaries between retail and commercial banking.
        </p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-14">
            <ul class="space-y-3">
                @php $year = now()->year; @endphp
                @foreach([
                ['Digital convergence', 'Retail digital platforms expanding into SME banking — blurring the boundary at the lower end of commercial.'],
                ['NIM compression', "Rate cut cycle in {$year} will disproportionately impact retail banks with high fixed-rate mortgage books."],
                ['AI credit scoring', 'Machine learning enabling commercial banks to serve smaller businesses cost-effectively.'],
                ['Cross-sell intensity', 'Banks with both franchises leverage deposit relationships to deepen commercial wallet share.'],
                ['ESG lending', 'Commercial banks face growing pressure to integrate sustainability criteria into corporate lending.'],
                ] as [$title, $body])
                <li class="flex gap-3 items-start text-sm font-light text-[var(--text-muted)] leading-relaxed">
                    <span class="text-[var(--indigo)] font-semibold mt-0.5 flex-shrink-0">→</span>
                    <span><strong class="text-[var(--navy)] font-semibold">{{ $title }}</strong> — {{ $body }}</span>
                </li>
                @endforeach
            </ul>
            <div>
                <div class="border border-[var(--indigo)]/20 bg-[var(--indigo-light)] px-5 py-5 mb-6">
                    <div class="text-[var(--indigo)] text-[9.5px] font-bold tracking-[0.22em] uppercase mb-2">Key Insight</div>
                    <p class="text-[var(--text-body)] text-sm leading-relaxed">
                        The most <strong class="text-[var(--navy)] font-semibold">resilient banking models in {{ now()->year }}</strong>
                        combine a strong retail deposit franchise as low-cost funding with a disciplined commercial lending book —
                        achieving NIM stability across rate cycles while maintaining fee income diversification.
                    </p>
                </div>
                <div class="flex flex-wrap gap-2">
                    @foreach(['Retail Banking','Commercial Banking','NIM Trends','Digital Banking','Credit Scoring','SME Finance'] as $tag)
                    <span class="text-[10px] font-bold tracking-[0.16em] uppercase px-3.5 py-1.5
                                 border border-[var(--border)] text-[var(--text-muted)]
                                 hover:border-[var(--indigo)] hover:text-[var(--indigo)] transition-colors cursor-default">{{ $tag }}</span>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-[var(--bg-surface)] border-t border-[var(--border)]">
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 divide-y md:divide-y-0 md:divide-x divide-[var(--border)]">
        @foreach([
        ['Banking Structure', route('banking.structure-central_banking'), 'Central Banking Systems', 'How central banks shape monetary policy and regulate the broader banking system.'],
        ['Banking Structure', route('banking.structure-digital_evolution'), 'Digital Banking Evolution', 'From branch-centric to mobile-first — the structural shift redefining retail banking.'],
        ['Banking Products', route('banking.products-lending_framework'), 'Lending Framework', 'How banks structure, price, and manage their loan portfolios across segments.'],
        ] as [$cat, $href, $title, $desc])
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