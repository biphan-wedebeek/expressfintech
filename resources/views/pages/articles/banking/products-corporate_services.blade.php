@extends('layouts.backing')

@section('title', 'Corporate Banking Services')
@section('description', 'Cash management, trade finance, FX, and capital markets access — the full product suite serving corporate treasury needs.')
@section('content')

<section class="relative min-h-[80vh] flex flex-col justify-end bg-[var(--navy)] overflow-hidden px-8 md:px-16 pb-16 pt-18">
    <div class="absolute top-0 right-0 fonttitle font-black leading-none text-white/[0.03] select-none pointer-events-none tracking-tight" style="font-size:clamp(160px,28vw,380px)">CRP</div>
    <div class="absolute inset-0 pointer-events-none" style="background:radial-gradient(ellipse 65% 55% at 72% 15%,rgba(79,70,229,0.13) 0%,transparent 60%),radial-gradient(ellipse 40% 40% at 8% 85%,rgba(15,31,53,0.5) 0%,transparent 55%)"></div>
    <div class="relative z-10 max-w-7xl mx-auto w-full">
        <div class="flex items-center gap-3 mb-6">
            <span class="w-8 h-px bg-[var(--indigo-mid)]"></span>
            <span class="text-[var(--indigo-mid)] text-[10px] font-bold tracking-[0.28em] uppercase">Banking Products · Express Fintech {{ now()->year }}</span>
        </div>
        <h1 class="hero-title mb-8">Corporate<br><em class="text-[var(--indigo-mid)] not-italic">Banking</em><br><span class="text-white/20">Services</span></h1>
        <div class="flex flex-wrap gap-3 mb-10">
            @foreach([['Cash Mgmt','Treasury'],['Trade','Finance'],['FX','Hedging'],['DCM','Capital Markets']] as [$l,$s])
            <div class="bg-[var(--indigo)]/10 border border-[var(--indigo)]/30 px-5 py-2.5 flex flex-col items-center gap-0.5">
                <span class="text-[var(--indigo-mid)] text-[13px] font-bold tracking-widest uppercase">{{ $l }}</span>
                <span class="text-white/30 text-[9px] tracking-wider">{{ $s }}</span>
            </div>
            @endforeach
        </div>
        <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-6">
            <p class="max-w-lg text-white/50 text-sm font-light leading-relaxed border-l border-[var(--indigo-mid)] pl-4">Corporate banking is a high-value, relationship-driven business where wallet share is built through product breadth, execution quality, and the ability to serve a client's entire financial lifecycle.</p>
            <div class="flex flex-col items-start md:items-end gap-1.5 flex-shrink-0 text-[10px] tracking-widest uppercase">
                <span class="text-white/35">{{ seoUpdateDate('products-coporate-services') }}</span>
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
        @foreach([['#overview','Overview',true],['#products','Product Suite',false],['#cash','Cash Management',false],['#trade','Trade Finance',false],['#outlook','Outlook',false]] as [$href,$label,$active])
        <a href="{{ $href }}" class="flex-shrink-0 text-[10px] font-bold tracking-[0.18em] uppercase px-5 py-4 border-b-2 whitespace-nowrap transition-colors duration-200 no-underline {{ $active ? 'text-[var(--indigo)] border-[var(--indigo)]' : 'text-[var(--text-muted)] border-transparent hover:text-[var(--navy)]' }}">{{ $label }}</a>
        @endforeach
    </div>
</nav>

<section class="py-20 px-8 md:px-16 bg-[var(--bg-surface)] border-b border-[var(--border)] relative overflow-hidden" id="overview">
    <div class="absolute top-0 right-10 fonttitle font-black leading-none text-[var(--navy)]/[0.04] select-none pointer-events-none" style="font-size:180px">01</div>
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="flex items-center gap-2.5 mb-3"><span class="w-6 h-px bg-[var(--indigo)]"></span><span class="text-[var(--indigo)] text-[10px] font-bold tracking-[0.28em] uppercase">Chapter 01</span></div>
        <h2 class="fonttitle text-4xl md:text-[50px] font-bold leading-tight tracking-tight text-[var(--navy)] mb-4">Corporate <em class="text-[var(--indigo)]">Banking Model</em></h2>
        <p class="text-[var(--text-muted)] text-sm font-light leading-relaxed max-w-2xl mb-12">Corporate banking generates revenues through a combination of lending spreads, transaction banking fees, and capital markets mandates — with the best banks earning fee income that is multiples of their credit exposure.</p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-14">
            <div>
                <p class="text-[var(--text-body)] text-sm font-light leading-relaxed mb-4">The corporate banking model is fundamentally a <strong class="font-semibold text-[var(--navy)]">relationship business</strong>. A Relationship Manager (RM) coordinates a team of product specialists — cash management, trade finance, FX, debt capital markets — to serve the total financial needs of an assigned corporate client portfolio.</p>
                <p class="text-[var(--text-body)] text-sm font-light leading-relaxed mb-4"><strong class="font-semibold text-[var(--navy)]">Revenue per client</strong> scales with product penetration. A corporate client using only a revolving credit facility generates significantly less wallet than one using lending, cash management, FX, and capital markets services simultaneously — driving the bank's cross-sell strategy.</p>
                <div class="border border-[var(--indigo)]/25 bg-[var(--indigo-light)] px-5 py-4 mt-6">
                    <div class="text-[var(--indigo)] text-[9px] font-bold tracking-[0.22em] uppercase mb-1.5">Revenue Mix</div>
                    <p class="text-[var(--text-body)] text-sm leading-relaxed">Top-tier corporate banks earn <strong class="text-[var(--navy)] font-semibold">45–55% of revenue from fee-based services</strong> (cash management, trade, FX, advisory) — reducing dependence on credit margins and delivering more stable, capital-light income.</p>
                </div>
            </div>
            <div class="flex flex-col gap-3">
                @foreach([['45–55%','Fee income share at top corporate banks','indigo'],['$1.2T','Global transaction banking revenues — 2025','navy'],['12–18%','ROE target range — corporate banking divisions','navy-soft']] as [$v,$l,$c])
                <div class="p-7 bg-white border-l-4 border-[var(--{{ $c }})] shadow-[var(--shadow-sm)]">
                    <div class="fonttitle text-5xl font-black text-[var(--{{ $c }})] leading-none mb-1.5">{{ $v }}</div>
                    <div class="text-[var(--text-muted)] text-[11px] uppercase tracking-widest">{{ $l }}</div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section class="py-20 px-8 md:px-16 bg-white border-b border-[var(--border)] relative overflow-hidden" id="products">
    <div class="absolute top-0 right-10 fonttitle font-black leading-none text-[var(--navy)]/[0.03] select-none pointer-events-none" style="font-size:180px">02</div>
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="flex items-center gap-2.5 mb-3"><span class="w-6 h-px bg-[var(--indigo)]"></span><span class="text-[var(--indigo)] text-[10px] font-bold tracking-[0.28em] uppercase">Chapter 02</span></div>
        <h2 class="fonttitle text-4xl md:text-[50px] font-bold leading-tight tracking-tight text-[var(--navy)] mb-4">Core <em class="text-[var(--indigo)]">Product Suite</em></h2>
        <p class="text-[var(--text-muted)] text-sm font-light leading-relaxed max-w-2xl mb-12">Each product solves a distinct corporate financial need — and together they form the basis of a full-service corporate banking relationship.</p>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-px bg-[var(--border)]">
            @foreach([
            ['01','Lending', 'Revolving credit facilities, term loans, acquisition finance. The anchor product that opens the relationship — often priced at thin margins to win the broader wallet.'],
            ['02','Cash Management', 'Account services, liquidity sweeping, payment processing, collections. High-fee, low-capital, sticky revenue stream. The crown jewel of transaction banking.'],
            ['03','Trade Finance', 'Letters of credit, guarantees, receivables finance. Enables international commerce by mitigating payment risk. Growing rapidly in emerging market corridors.'],
            ['04','FX & Hedging', 'Currency conversion, forward contracts, options. Every multinational requires FX services — providing high-frequency, relationship-deepening revenue for corporate banks.'],
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

<section class="py-20 px-8 md:px-16 bg-[var(--bg-surface)] border-b border-[var(--border)] relative overflow-hidden" id="cash">
    <div class="absolute top-0 right-10 fonttitle font-black leading-none text-[var(--navy)]/[0.04] select-none pointer-events-none" style="font-size:180px">03</div>
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="flex items-center gap-2.5 mb-3"><span class="w-6 h-px bg-[var(--navy)]"></span><span class="text-[var(--navy)] text-[10px] font-bold tracking-[0.28em] uppercase">Chapter 03</span></div>
        <h2 class="fonttitle text-4xl md:text-[50px] font-bold leading-tight tracking-tight text-[var(--navy)] mb-4">Cash <em class="text-[var(--indigo)]">Management Deep Dive</em></h2>
        <p class="text-[var(--text-muted)] text-sm font-light leading-relaxed max-w-2xl mb-12">Transaction banking — particularly cash management — is the most strategically valuable corporate banking product for its combination of fee income, deposit generation, and relationship stickiness.</p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-14">
            <div>
                <p class="text-[var(--text-body)] text-sm font-light leading-relaxed mb-4">Corporate cash management encompasses <strong class="font-semibold text-[var(--navy)]">payments, collections, liquidity management, and account services</strong>. A corporate treasurer using a bank's cash management platform processes thousands of transactions daily — creating deep operational integration that makes switching extremely costly.</p>
                <p class="text-[var(--text-body)] text-sm font-light leading-relaxed mb-4">The economics are highly attractive: cash management generates <strong class="font-semibold text-[var(--navy)]">fee income with minimal credit risk</strong>, requires little regulatory capital, and anchors large corporate deposit balances that fund the bank's lending at near-zero cost.</p>
            </div>
            <ul class="space-y-3">
                @foreach([
                ['Notional pooling', 'Netting cash positions across multiple entities and currencies — minimising external borrowing and maximising interest earned.'],
                ['Virtual accounts', 'Enabling corporates to manage receivables by customer without proliferating physical bank accounts.'],
                ['API connectivity', 'Real-time payment initiation and balance reporting via direct API integration with the corporate ERP system.'],
                ['Multi-bank reporting','Consolidating balances across all banking relationships into a single treasury management platform view.'],
                ['FX overlay', 'Automatic currency conversion and hedging integrated into the cash management platform for multinational treasurers.'],
                ] as [$t,$b])
                <li class="flex gap-3 items-start text-sm font-light text-[var(--text-muted)] leading-relaxed">
                    <span class="text-[var(--indigo)] font-semibold mt-0.5 flex-shrink-0">→</span>
                    <span><strong class="text-[var(--navy)] font-semibold">{{ $t }}</strong> — {{ $b }}</span>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>

<section class="py-20 px-8 md:px-16 bg-white border-b border-[var(--border)] relative overflow-hidden" id="trade">
    <div class="absolute top-0 right-10 fonttitle font-black leading-none text-[var(--navy)]/[0.03] select-none pointer-events-none" style="font-size:180px">04</div>
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="flex items-center gap-2.5 mb-3"><span class="w-6 h-px bg-[var(--indigo)]"></span><span class="text-[var(--indigo)] text-[10px] font-bold tracking-[0.28em] uppercase">Chapter 04</span></div>
        <h2 class="fonttitle text-4xl md:text-[50px] font-bold leading-tight tracking-tight text-[var(--navy)] mb-4">Trade <em class="text-[var(--indigo)]">Finance</em></h2>
        <p class="text-[var(--text-muted)] text-sm font-light leading-relaxed max-w-2xl mb-10">Trade finance bridges the gap between the moment goods ship and the moment payment is received — enabling $18 trillion in annual global trade.</p>
        <div class="border border-[var(--border)] overflow-hidden shadow-[var(--shadow-sm)]">
            <div class="bg-[var(--bg-surface)] px-5 py-3 flex items-center justify-between border-b border-[var(--border)]">
                <h4 class="text-[var(--navy)] text-xs font-bold tracking-[0.16em] uppercase">Trade Finance Product Matrix</h4>
                <span class="text-[var(--indigo)] text-[10px] tracking-widest uppercase">2025</span>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-sm border-collapse">
                    <thead>
                        <tr class="bg-[var(--bg-muted)] border-b border-[var(--border)]">
                            <th class="text-left px-5 py-3 text-[var(--text-muted)] text-[9.5px] font-bold tracking-[0.12em] uppercase">Product</th>
                            <th class="text-left px-5 py-3 text-[var(--text-muted)] text-[9.5px] font-bold tracking-[0.12em] uppercase">Risk Mitigated</th>
                            <th class="text-left px-5 py-3 text-[var(--text-muted)] text-[9.5px] font-bold tracking-[0.12em] uppercase">Typical User</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach([
                        ['Letter of Credit', 'Payment risk for exporter', 'Importers / Exporters'],
                        ['Bank Guarantee', 'Performance / contract risk', 'Construction / Services'],
                        ['Documentary Collection','Settlement risk', 'Established trading pairs'],
                        ['Supply Chain Finance','Supplier liquidity risk', 'Large buyers (Walmart, Apple)'],
                        ['Export Credit', 'Country / buyer risk', 'Capital goods exporters'],
                        ] as [$p,$r,$u])
                        <tr class="border-b border-[var(--border)]/60 hover:bg-[var(--bg-surface)] transition-colors">
                            <td class="px-5 py-3 font-semibold text-[var(--navy)] text-[13px]">{{ $p }}</td>
                            <td class="px-5 py-3 text-[var(--indigo)] text-[13px]">{{ $r }}</td>
                            <td class="px-5 py-3 text-[var(--text-body)] text-[13px]">{{ $u }}</td>
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
        <h2 class="fonttitle text-4xl md:text-[50px] font-bold leading-tight tracking-tight text-[var(--navy)] mb-4">Corporate Banking <em class="text-[var(--indigo)]">Outlook</em></h2>
        <p class="text-[var(--text-muted)] text-sm font-light leading-relaxed max-w-2xl mb-10">Technology, geopolitics, and the shift to fee-based models are reshaping the corporate banking competitive landscape.</p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-14">
            <ul class="space-y-3">
                @foreach([
                ['Real-time treasury', 'Instant payment rails enabling real-time cash pooling globally — eliminating intraday funding costs for large corporates.'],
                ['Supply chain finance','ESG-linked SCF programmes growing rapidly as large buyers incentivise supplier sustainability through preferential financing rates.'],
                ['Nearshoring effect', 'Supply chain reconfiguration driving trade finance volumes on new corridors — Mexico, India, Vietnam gaining share.'],
                ['Fintech competition', 'B2B payment and treasury fintechs eroding fee income from payments and FX at the SME end of the corporate market.'],
                ['AI in compliance', 'KYC and AML automation reducing onboarding costs — a key operational lever for improving corporate banking ROE.'],
                ] as [$t,$b])
                <li class="flex gap-3 items-start text-sm font-light text-[var(--text-muted)] leading-relaxed">
                    <span class="text-[var(--indigo)] font-semibold mt-0.5 flex-shrink-0">→</span>
                    <span><strong class="text-[var(--navy)] font-semibold">{{ $t }}</strong> — {{ $b }}</span>
                </li>
                @endforeach
            </ul>
            <div>
                <div class="border border-[var(--indigo)]/20 bg-[var(--indigo-light)] px-5 py-5 mb-6">
                    <div class="text-[var(--indigo)] text-[9.5px] font-bold tracking-[0.22em] uppercase mb-2">Strategic Insight</div>
                    <p class="text-[var(--text-body)] text-sm leading-relaxed">Banks that invest in <strong class="text-[var(--navy)] font-semibold">API-first treasury platforms</strong> and real-time payment capabilities are opening a structural lead in cash management wallet share — the most capital-efficient, high-ROE segment of corporate banking.</p>
                </div>
                <div class="flex flex-wrap gap-2">
                    @foreach(['Cash Management','Trade Finance','Transaction Banking','FX Hedging','Supply Chain','BaaS'] as $tag)
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
        ['Banking Products', route('banking.products-crossborder_payments'), 'Cross-border Payments', 'SWIFT, correspondent banking, and real-time cross-border rails.'],
        ['Banking Products', route('banking.products-treasury_services'), 'Treasury Services', 'ALM, liquidity buffers, and interest rate risk management.'],
        ['Banking Structure', route('banking.structure-retail_commercial'), 'Retail vs Commercial', 'How commercial banking compares structurally to retail banking.'],
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