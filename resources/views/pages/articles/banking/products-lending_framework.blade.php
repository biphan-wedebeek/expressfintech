@extends('layouts.backing')

@section('title', 'Lending Framework')
@section('description', 'How banks structure, price, and manage their loan portfolios — from retail mortgages to leveraged corporate finance.')
@section('content')

<section class="relative min-h-[80vh] flex flex-col justify-end bg-[var(--navy)] overflow-hidden px-8 md:px-16 pb-16 pt-18">
    <div class="absolute top-0 right-0 fonttitle font-black leading-none text-white/[0.03] select-none pointer-events-none tracking-tight" style="font-size:clamp(160px,28vw,380px)">LND</div>
    <div class="absolute inset-0 pointer-events-none" style="background:radial-gradient(ellipse 65% 55% at 72% 15%,rgba(79,70,229,0.13) 0%,transparent 60%),radial-gradient(ellipse 40% 40% at 8% 85%,rgba(15,31,53,0.5) 0%,transparent 55%)"></div>
    <div class="relative z-10 max-w-7xl mx-auto w-full">
        <div class="flex items-center gap-3 mb-6">
            <span class="w-8 h-px bg-[var(--indigo-mid)]"></span>
            <span class="text-[var(--indigo-mid)] text-[10px] font-bold tracking-[0.28em] uppercase">Banking Products · Express Fintech {{ now()->year }}</span>
        </div>
        <h1 class="hero-title mb-8">Lending<br><em class="text-[var(--indigo-mid)] not-italic">Framework</em><br><span class="text-white/20">& Pricing</span></h1>
        <div class="flex flex-wrap gap-3 mb-10">
            @foreach([['Credit','Underwriting'],['Pricing','Risk-adjusted'],['NPL','Portfolio Quality'],['LTV','Collateral']] as [$l,$s])
            <div class="bg-[var(--indigo)]/10 border border-[var(--indigo)]/30 px-5 py-2.5 flex flex-col items-center gap-0.5">
                <span class="text-[var(--indigo-mid)] text-[13px] font-bold tracking-widest uppercase">{{ $l }}</span>
                <span class="text-white/30 text-[9px] tracking-wider">{{ $s }}</span>
            </div>
            @endforeach
        </div>
        <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-6">
            <p class="max-w-lg text-white/50 text-sm font-light leading-relaxed border-l border-[var(--indigo-mid)] pl-4">Lending is the primary revenue engine of banking — but also the primary source of credit risk. How banks originate, price, and manage loans determines both profitability and long-term resilience.</p>
            <div class="flex flex-col items-start md:items-end gap-1.5 flex-shrink-0 text-[10px] tracking-widest uppercase">
                <span class="text-white/35">{{ seoUpdateDate('products-lending-framework') }}</span>
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
        @foreach([['#overview','Overview',true],['#products','Loan Products',false],['#pricing','Pricing',false],['#risk','Credit Risk',false],['#outlook','Outlook',false]] as [$href,$label,$active])
        <a href="{{ $href }}" class="flex-shrink-0 text-[10px] font-bold tracking-[0.18em] uppercase px-5 py-4 border-b-2 whitespace-nowrap transition-colors duration-200 no-underline {{ $active ? 'text-[var(--indigo)] border-[var(--indigo)]' : 'text-[var(--text-muted)] border-transparent hover:text-[var(--navy)]' }}">{{ $label }}</a>
        @endforeach
    </div>
</nav>

<section class="py-20 px-8 md:px-16 bg-[var(--bg-surface)] border-b border-[var(--border)] relative overflow-hidden" id="overview">
    <div class="absolute top-0 right-10 fonttitle font-black leading-none text-[var(--navy)]/[0.04] select-none pointer-events-none" style="font-size:180px">01</div>
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="flex items-center gap-2.5 mb-3"><span class="w-6 h-px bg-[var(--indigo)]"></span><span class="text-[var(--indigo)] text-[10px] font-bold tracking-[0.28em] uppercase">Chapter 01</span></div>
        <h2 class="fonttitle text-4xl md:text-[50px] font-bold leading-tight tracking-tight text-[var(--navy)] mb-4">The Lending <em class="text-[var(--indigo)]">Engine</em></h2>
        <p class="text-[var(--text-muted)] text-sm font-light leading-relaxed max-w-2xl mb-12">Loans typically represent 55–70% of total bank assets and generate the majority of net interest income. Loan portfolio composition, pricing discipline, and credit quality management are the central determinants of banking profitability.</p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-14">
            <div>
                <p class="text-[var(--text-body)] text-sm font-light leading-relaxed mb-4">The fundamental lending economics are straightforward: banks <strong class="font-semibold text-[var(--navy)]">borrow short and lend long</strong>, earning the spread between deposit rates and loan rates. Managing this maturity transformation — and the interest rate and credit risks it creates — is the essence of bank management.</p>
                <p class="text-[var(--text-body)] text-sm font-light leading-relaxed mb-4">Loan pricing must cover four components: <strong class="font-semibold text-[var(--navy)]">cost of funds + credit risk premium + operating cost + return on equity target</strong>. Banks that price correctly through cycles build durable franchise value; those that chase volume at inadequate spreads ultimately destroy capital.</p>
                <div class="border border-[var(--indigo)]/25 bg-[var(--indigo-light)] px-5 py-4 mt-6">
                    <div class="text-[var(--indigo)] text-[9px] font-bold tracking-[0.22em] uppercase mb-1.5">Portfolio Context</div>
                    <p class="text-[var(--text-body)] text-sm leading-relaxed">US commercial bank loans totalled <strong class="text-[var(--navy)] font-semibold">$12.4 trillion</strong> in Q4 2025. Residential mortgages represent the largest single category at 28%, followed by commercial real estate (19%) and commercial & industrial loans (18%).</p>
                </div>
            </div>
            <div class="flex flex-col gap-3">
                @foreach([['$12.4T','US commercial bank loan book — Q4 2025','indigo'],['55–70%','Loans as share of total bank assets','navy'],['3.2%','Average US bank NIM on loan book — 2025','navy-soft']] as [$v,$l,$c])
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
        <h2 class="fonttitle text-4xl md:text-[50px] font-bold leading-tight tracking-tight text-[var(--navy)] mb-4">Loan <em class="text-[var(--indigo)]">Product Spectrum</em></h2>
        <p class="text-[var(--text-muted)] text-sm font-light leading-relaxed max-w-2xl mb-12">From secured retail mortgages to leveraged corporate acquisitions — each loan type carries distinct risk, return, and capital consumption characteristics.</p>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-px bg-[var(--border)]">
            @php
            $year = now()->year;
            $next2 = $year + 2;
            @endphp
            @foreach([
            ['01','Residential Mortgage', 'Long duration (15–30yr), secured on property. Low credit loss historically. Interest rate risk is the primary risk — asset-sensitive in fixed rate portfolios.'],
            ['02','Consumer Credit', 'Personal loans, auto, and credit cards. Higher yield (8–20%) but higher NPL risk. Managed through statistical scoring at scale across millions of accounts.'],
            ['03','Commercial RE', "Income-producing property loans. Vulnerable to vacancy and valuation cycles. CRE is the primary credit stress point for US regional banks in {$year}–{$next2}."],
            ['04','C&I Lending', 'Commercial & Industrial loans — revolvers, term loans to businesses. Relationship-driven, short-to-medium tenor. Credit quality tied to economic cycle.'],
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

<section class="py-20 px-8 md:px-16 bg-[var(--bg-surface)] border-b border-[var(--border)] relative overflow-hidden" id="pricing">
    <div class="absolute top-0 right-10 fonttitle font-black leading-none text-[var(--navy)]/[0.04] select-none pointer-events-none" style="font-size:180px">03</div>
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="flex items-center gap-2.5 mb-3"><span class="w-6 h-px bg-[var(--navy)]"></span><span class="text-[var(--navy)] text-[10px] font-bold tracking-[0.28em] uppercase">Chapter 03</span></div>
        <h2 class="fonttitle text-4xl md:text-[50px] font-bold leading-tight tracking-tight text-[var(--navy)] mb-4">Loan <em class="text-[var(--indigo)]">Pricing</em></h2>
        <p class="text-[var(--text-muted)] text-sm font-light leading-relaxed max-w-2xl mb-12">Risk-adjusted pricing is the discipline that separates banks that create value from those that merely grow the balance sheet.</p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-14">
            <div>
                <p class="text-[var(--text-body)] text-sm font-light leading-relaxed mb-4">The standard loan pricing formula builds from the <strong class="font-semibold text-[var(--navy)]">benchmark rate</strong> (SOFR, Prime, or base rate) plus a <strong class="font-semibold text-[var(--navy)]">credit spread</strong> that compensates for expected loss, unexpected loss (capital cost), and operating costs — leaving a residual return on equity.</p>
                <p class="text-[var(--text-body)] text-sm font-light leading-relaxed mb-4"><strong class="font-semibold text-[var(--navy)]">RAROC (Risk-Adjusted Return on Capital)</strong> is the gold-standard metric for evaluating loan profitability — ensuring that pricing reflects the full economic capital consumed by a loan, not just its nominal spread.</p>
            </div>
            <div class="border border-[var(--border)] overflow-hidden shadow-[var(--shadow-sm)]">
                <div class="bg-[var(--bg-surface)] px-5 py-3 border-b border-[var(--border)]">
                    <h4 class="text-[var(--navy)] text-xs font-bold tracking-[0.16em] uppercase">Indicative Loan Yields — US 2025</h4>
                </div>
                <table class="w-full text-sm border-collapse">
                    <thead>
                        <tr class="bg-[var(--bg-muted)] border-b border-[var(--border)]">
                            <th class="text-left px-5 py-2.5 text-[var(--text-muted)] text-[9.5px] font-bold tracking-[0.12em] uppercase">Product</th>
                            <th class="text-left px-5 py-2.5 text-[var(--text-muted)] text-[9.5px] font-bold tracking-[0.12em] uppercase">Yield Range</th>
                            <th class="text-left px-5 py-2.5 text-[var(--text-muted)] text-[9.5px] font-bold tracking-[0.12em] uppercase">Risk</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach([
                        ['30yr Fixed Mortgage','6.5–7.2%','Low'],
                        ['Auto Loan', '7.0–9.5%','Low-Med'],
                        ['Credit Card', '18–24%', 'High'],
                        ['C&I (Investment Grade)','5.5–7.0%','Low'],
                        ['CRE', '6.5–8.5%','Medium'],
                        ['Leveraged Loan', 'SOFR+350–600bps','High'],
                        ] as [$p,$y,$r])
                        <tr class="border-b border-[var(--border)]/60 hover:bg-[var(--bg-surface)] transition-colors">
                            <td class="px-5 py-3 font-semibold text-[var(--navy)] text-[13px]">{{ $p }}</td>
                            <td class="px-5 py-3 text-[var(--indigo)] font-semibold text-[13px]">{{ $y }}</td>
                            <td class="px-5 py-3 text-[var(--text-body)] text-[13px]">{{ $r }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<section class="py-20 px-8 md:px-16 bg-white border-b border-[var(--border)] relative overflow-hidden" id="risk">
    <div class="absolute top-0 right-10 fonttitle font-black leading-none text-[var(--navy)]/[0.03] select-none pointer-events-none" style="font-size:180px">04</div>
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="flex items-center gap-2.5 mb-3"><span class="w-6 h-px bg-[var(--indigo)]"></span><span class="text-[var(--indigo)] text-[10px] font-bold tracking-[0.28em] uppercase">Chapter 04</span></div>
        <h2 class="fonttitle text-4xl md:text-[50px] font-bold leading-tight tracking-tight text-[var(--navy)] mb-4">Credit Risk <em class="text-[var(--indigo)]">Management</em></h2>
        <p class="text-[var(--text-muted)] text-sm font-light leading-relaxed max-w-2xl mb-12">Originating loans is straightforward; getting paid back is the discipline that defines long-term franchise value.</p>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-px bg-[var(--border)]">
            @foreach([
            ['01','Underwriting Standards', 'The first line of defence. Debt service coverage ratios, LTV limits, and borrower quality thresholds determine portfolio credit quality at origination.'],
            ['02','Portfolio Diversification','Concentration limits by sector, geography, and borrower prevent correlated losses. CRE concentration rules limit single-asset-class exposure.'],
            ['03','Provisioning', 'IFRS 9 and CECL require forward-looking expected credit loss provisioning — booking losses earlier in the cycle based on macro forecast scenarios.'],
            ['04','NPL Management', 'Early identification, restructuring, and workout of problem loans minimises ultimate loss. Speed of NPL recognition is a key differentiator in credit cycles.'],
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
        <h2 class="fonttitle text-4xl md:text-[50px] font-bold leading-tight tracking-tight text-[var(--navy)] mb-4">Credit <em class="text-[var(--indigo)]">Outlook {{ now()->year }}</em></h2>
        <p class="text-[var(--text-muted)] text-sm font-light leading-relaxed max-w-2xl mb-10">Loan growth moderating, credit costs rising, and CRE stress intensifying — the {{ now()->year }} credit landscape demands disciplined underwriting.</p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-14">
            <ul class="space-y-3">
                @php $year = now()->year; @endphp
                @foreach([
                ['CRE stress', 'Office loan NPLs rising sharply — vacancy rates above 20% in major US markets are impairing collateral values for regional bank portfolios.'],
                ['Consumer resilience', 'Consumer credit quality holding up better than feared — low unemployment and wage growth supporting debt service capacity.'],
                ['Loan growth slowing', "Credit demand moderating as higher-for-longer rates suppress refinancing activity. Loan growth expected at 3–5% in {$year}."],
                ['AI underwriting', 'Machine learning models improving NPL prediction accuracy — early movers seeing 15–25% reduction in credit losses.'],
                ['Private credit', 'Non-bank lenders taking share in leveraged and middle-market lending — compressing bank spreads in competitive segments.'],
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
                    <p class="text-[var(--text-body)] text-sm leading-relaxed"><strong class="text-[var(--navy)] font-semibold">Commercial real estate</strong> remains the most significant credit risk for US regional banks — office loan maturities in 2025–2027 will force reckoning with collateral values that have declined 30–50% in some markets.</p>
                </div>
                <div class="flex flex-wrap gap-2">
                    @foreach(['Credit Risk','CRE Loans','NPL Ratio','RAROC','CECL','Private Credit'] as $tag)
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
        ['Banking Products', route('banking.products-deposit_analysis'), 'Deposit Products', 'The liability side — how deposit franchises fund the loan book.'],
        ['Banking Analysis', route('banking.analysis-risk_liquidity'), 'Risk & Liquidity', 'Credit risk frameworks, stress testing, and liquidity management.'],
        ['Banking Analysis', route('banking.analysis-profitability_metrics'), 'Profitability Metrics', 'How loan yield and credit costs flow into ROA and ROE.'],
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