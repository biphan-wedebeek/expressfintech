@extends('layouts.backing')

@section('title', 'Treasury Services')
@section('description', 'Bank treasury operations — asset/liability management, liquidity buffers, interest rate risk hedging, and investment portfolios.')
@section('content')

<section class="relative min-h-[80vh] flex flex-col justify-end bg-[var(--navy)] overflow-hidden px-8 md:px-16 pb-16 pt-18">
    <div class="absolute top-0 right-0 fonttitle font-black leading-none text-white/[0.03] select-none pointer-events-none tracking-tight" style="font-size:clamp(160px,28vw,380px)">ALM</div>
    <div class="absolute inset-0 pointer-events-none" style="background:radial-gradient(ellipse 65% 55% at 72% 15%,rgba(79,70,229,0.13) 0%,transparent 60%),radial-gradient(ellipse 40% 40% at 8% 85%,rgba(15,31,53,0.5) 0%,transparent 55%)"></div>
    <div class="relative z-10 max-w-7xl mx-auto w-full">
        <div class="flex items-center gap-3 mb-6">
            <span class="w-8 h-px bg-[var(--indigo-mid)]"></span>
            <span class="text-[var(--indigo-mid)] text-[10px] font-bold tracking-[0.28em] uppercase">Banking Products · Express Fintech {{ now()->year }}</span>
        </div>
        <h1 class="hero-title mb-8">Treasury<br><em class="text-[var(--indigo-mid)] not-italic">Services</em><br><span class="text-white/20">& ALM</span></h1>
        <div class="flex flex-wrap gap-3 mb-10">
            @foreach([['ALM','Asset/Liability'],['LCR','Liquidity Buffer'],['Duration','Rate Risk'],['IRRBB','Interest Risk']] as [$l,$s])
            <div class="bg-[var(--indigo)]/10 border border-[var(--indigo)]/30 px-5 py-2.5 flex flex-col items-center gap-0.5">
                <span class="text-[var(--indigo-mid)] text-[13px] font-bold tracking-widest uppercase">{{ $l }}</span>
                <span class="text-white/30 text-[9px] tracking-wider">{{ $s }}</span>
            </div>
            @endforeach
        </div>
        <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-6">
            <p class="max-w-lg text-white/50 text-sm font-light leading-relaxed border-l border-[var(--indigo-mid)] pl-4">Bank treasury is the invisible engine of profitability — managing the structural interest rate risk embedded in the balance sheet, maintaining regulatory liquidity buffers, and optimising the investment portfolio to maximise risk-adjusted returns.</p>
            <div class="flex flex-col items-start md:items-end gap-1.5 flex-shrink-0 text-[10px] tracking-widest uppercase">
                <span class="text-white/35">{{ seoUpdateDate('products-treasury-services') }}</span>
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
        @foreach([['#overview','Overview',true],['#alm','ALM Framework',false],['#liquidity','Liquidity Management',false],['#irrbb','Interest Rate Risk',false],['#outlook','Outlook',false]] as [$href,$label,$active])
        <a href="{{ $href }}" class="flex-shrink-0 text-[10px] font-bold tracking-[0.18em] uppercase px-5 py-4 border-b-2 whitespace-nowrap transition-colors duration-200 no-underline {{ $active ? 'text-[var(--indigo)] border-[var(--indigo)]' : 'text-[var(--text-muted)] border-transparent hover:text-[var(--navy)]' }}">{{ $label }}</a>
        @endforeach
    </div>
</nav>

<section class="py-20 px-8 md:px-16 bg-[var(--bg-surface)] border-b border-[var(--border)] relative overflow-hidden" id="overview">
    <div class="absolute top-0 right-10 fonttitle font-black leading-none text-[var(--navy)]/[0.04] select-none pointer-events-none" style="font-size:180px">01</div>
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="flex items-center gap-2.5 mb-3"><span class="w-6 h-px bg-[var(--indigo)]"></span><span class="text-[var(--indigo)] text-[10px] font-bold tracking-[0.28em] uppercase">Chapter 01</span></div>
        <h2 class="fonttitle text-4xl md:text-[50px] font-bold leading-tight tracking-tight text-[var(--navy)] mb-4">Treasury <em class="text-[var(--indigo)]">Overview</em></h2>
        <p class="text-[var(--text-muted)] text-sm font-light leading-relaxed max-w-2xl mb-12">Bank treasury is responsible for managing the structural financial risks inherent in banking — the mismatch between short-term liabilities (deposits) and long-term assets (loans) that is the fundamental business of banking.</p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-14">
            <div>
                <p class="text-[var(--text-body)] text-sm font-light leading-relaxed mb-4">Treasury's core responsibilities span <strong class="font-semibold text-[var(--navy)]">asset/liability management (ALM)</strong>, liquidity management, interest rate risk in the banking book (IRRBB), and the investment securities portfolio. Poor treasury management destroyed Silicon Valley Bank in 2023 — a $212B institution that failed in 48 hours due to IRRBB mismanagement.</p>
                <p class="text-[var(--text-body)] text-sm font-light leading-relaxed mb-4">Treasury also generates revenue — through <strong class="font-semibold text-[var(--navy)]">the investment portfolio yield spread</strong> over funding costs, and through hedging services provided to commercial banking clients who need to manage their own interest rate and FX exposures.</p>
                <div class="border border-[var(--indigo)]/25 bg-[var(--indigo-light)] px-5 py-4 mt-6">
                    <div class="text-[var(--indigo)] text-[9px] font-bold tracking-[0.22em] uppercase mb-1.5">SVB Lesson</div>
                    <p class="text-[var(--text-body)] text-sm leading-relaxed">SVB's collapse highlighted the existential danger of <strong class="text-[var(--navy)] font-semibold">duration mismatch</strong> — holding long-duration securities funded by short-term deposits without adequate hedging. IRRBB is now the most closely scrutinised risk in bank treasury management.</p>
                </div>
            </div>
            <div class="flex flex-col gap-3">
                @foreach([['LCR','Liquidity Coverage Ratio — regulatory minimum 100%','indigo'],['NSFR','Net Stable Funding Ratio — structural liquidity measure','navy'],['IRRBB','Interest Rate Risk in the Banking Book','navy-soft']] as [$v,$l,$c])
                <div class="p-7 bg-white border-l-4 border-[var(--{{ $c }})] shadow-[var(--shadow-sm)]">
                    <div class="fonttitle text-4xl font-black text-[var(--{{ $c }})] leading-none mb-1.5">{{ $v }}</div>
                    <div class="text-[var(--text-muted)] text-[11px] uppercase tracking-widest leading-relaxed">{{ $l }}</div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section class="py-20 px-8 md:px-16 bg-white border-b border-[var(--border)] relative overflow-hidden" id="alm">
    <div class="absolute top-0 right-10 fonttitle font-black leading-none text-[var(--navy)]/[0.03] select-none pointer-events-none" style="font-size:180px">02</div>
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="flex items-center gap-2.5 mb-3"><span class="w-6 h-px bg-[var(--indigo)]"></span><span class="text-[var(--indigo)] text-[10px] font-bold tracking-[0.28em] uppercase">Chapter 02</span></div>
        <h2 class="fonttitle text-4xl md:text-[50px] font-bold leading-tight tracking-tight text-[var(--navy)] mb-4">ALM <em class="text-[var(--indigo)]">Framework</em></h2>
        <p class="text-[var(--text-muted)] text-sm font-light leading-relaxed max-w-2xl mb-12">Asset/Liability Management balances the maturity, repricing, and cash flow profiles of assets and liabilities to manage NIM stability and interest rate risk.</p>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-px bg-[var(--border)]">
            @foreach([
            ['01','Gap Analysis', 'Measuring the repricing gap between assets and liabilities across time buckets — identifying where the bank is asset-sensitive or liability-sensitive.'],
            ['02','Duration Management','Controlling the duration mismatch between assets and liabilities to limit mark-to-market losses in rising rate scenarios.'],
            ['03','NIM Hedging', 'Using interest rate swaps to convert fixed-rate assets to floating (or vice versa) — managing the bank\'s NIM sensitivity to rate movements.'],
            ['04','Transfer Pricing', 'Internal Funds Transfer Pricing (FTP) charges business lines for the liquidity and duration they consume — ensuring correct product profitability measurement.'],
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

<section class="py-20 px-8 md:px-16 bg-[var(--bg-surface)] border-b border-[var(--border)] relative overflow-hidden" id="liquidity">
    <div class="absolute top-0 right-10 fonttitle font-black leading-none text-[var(--navy)]/[0.04] select-none pointer-events-none" style="font-size:180px">03</div>
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="flex items-center gap-2.5 mb-3"><span class="w-6 h-px bg-[var(--navy)]"></span><span class="text-[var(--navy)] text-[10px] font-bold tracking-[0.28em] uppercase">Chapter 03</span></div>
        <h2 class="fonttitle text-4xl md:text-[50px] font-bold leading-tight tracking-tight text-[var(--navy)] mb-4">Liquidity <em class="text-[var(--indigo)]">Management</em></h2>
        <p class="text-[var(--text-muted)] text-sm font-light leading-relaxed max-w-2xl mb-10">Maintaining adequate liquidity buffers is both a regulatory requirement and an existential necessity — bank runs can materialise in hours in the digital age.</p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-14">
            <div>
                <p class="text-[var(--text-body)] text-sm font-light leading-relaxed mb-4">Basel III introduced two mandatory liquidity ratios: the <strong class="font-semibold text-[var(--navy)]">Liquidity Coverage Ratio (LCR)</strong> — requiring banks to hold sufficient High Quality Liquid Assets (HQLA) to survive a 30-day stress scenario — and the <strong class="font-semibold text-[var(--navy)]">Net Stable Funding Ratio (NSFR)</strong>, measuring structural funding adequacy over a 1-year horizon.</p>
                <p class="text-[var(--text-body)] text-sm font-light leading-relaxed mb-4">The HQLA buffer is costly — holding cash and government bonds at low yields reduces NIM. Treasury's challenge is maintaining <strong class="font-semibold text-[var(--navy)]">minimum regulatory compliance while minimising the carry cost</strong> of excess liquidity.</p>
            </div>
            <div class="border border-[var(--border)] overflow-hidden shadow-[var(--shadow-sm)]">
                <div class="bg-[var(--bg-surface)] px-5 py-3 border-b border-[var(--border)]">
                    <h4 class="text-[var(--navy)] text-xs font-bold tracking-[0.16em] uppercase">Liquidity Requirements</h4>
                </div>
                <table class="w-full text-sm border-collapse">
                    <thead>
                        <tr class="bg-[var(--bg-muted)] border-b border-[var(--border)]">
                            <th class="text-left px-5 py-2.5 text-[var(--text-muted)] text-[9.5px] font-bold tracking-[0.12em] uppercase">Ratio</th>
                            <th class="text-left px-5 py-2.5 text-[var(--text-muted)] text-[9.5px] font-bold tracking-[0.12em] uppercase">Minimum</th>
                            <th class="text-left px-5 py-2.5 text-[var(--text-muted)] text-[9.5px] font-bold tracking-[0.12em] uppercase">US Major Bank Avg</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach([
                        ['LCR', '100%', '127%'],
                        ['NSFR', '100%', '118%'],
                        ['HQLA (% assets)', 'varies','14–22%'],
                        ['Unencumbered Cash','varies','8–15%'],
                        ] as [$r,$m,$a])
                        <tr class="border-b border-[var(--border)]/60 hover:bg-[var(--bg-surface)] transition-colors">
                            <td class="px-5 py-3 font-semibold text-[var(--navy)] text-[13px]">{{ $r }}</td>
                            <td class="px-5 py-3 text-[var(--indigo)] font-semibold text-[13px]">{{ $m }}</td>
                            <td class="px-5 py-3 text-[var(--text-body)] text-[13px]">{{ $a }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<section class="py-20 px-8 md:px-16 bg-white border-b border-[var(--border)] relative overflow-hidden" id="irrbb">
    <div class="absolute top-0 right-10 fonttitle font-black leading-none text-[var(--navy)]/[0.03] select-none pointer-events-none" style="font-size:180px">04</div>
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="flex items-center gap-2.5 mb-3"><span class="w-6 h-px bg-[var(--indigo)]"></span><span class="text-[var(--indigo)] text-[10px] font-bold tracking-[0.28em] uppercase">Chapter 04</span></div>
        <h2 class="fonttitle text-4xl md:text-[50px] font-bold leading-tight tracking-tight text-[var(--navy)] mb-4">Interest Rate Risk <em class="text-[var(--indigo)]">IRRBB</em></h2>
        <p class="text-[var(--text-muted)] text-sm font-light leading-relaxed max-w-2xl mb-12">Managing the bank's sensitivity to interest rate movements is treasury's most consequential risk responsibility — and post-SVB, its most scrutinised.</p>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-px bg-[var(--border)]">
            @foreach([
            ['01','Asset Sensitivity', 'Banks with more floating-rate assets than liabilities benefit from rate rises — NIM expands as assets reprice faster than funding costs.'],
            ['02','Liability Sensitivity','The reverse — more rate-sensitive liabilities than assets. NIM compresses in rising rate environments. Most retail-heavy banks are liability-sensitive.'],
            ['03','EVE Risk', 'Economic Value of Equity — measures the change in net present value of all assets and liabilities under rate shock scenarios. SVB\'s fatal metric.'],
            ['04','NII Sensitivity', 'Net Interest Income at Risk — measures how much NII changes under various rate scenarios over the next 12 months. Key earnings volatility indicator.'],
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
        <h2 class="fonttitle text-4xl md:text-[50px] font-bold leading-tight tracking-tight text-[var(--navy)] mb-4">Treasury <em class="text-[var(--indigo)]">Outlook {{ now()->year }}</em></h2>
        <p class="text-[var(--text-muted)] text-sm font-light leading-relaxed max-w-2xl mb-10">Rate cuts create both opportunity and challenge for bank treasury — NIM compression requires active ALM repositioning.</p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-14">
            <ul class="space-y-3">
                @foreach([
                ['Rate cut repositioning','Asset-sensitive banks repositioning to lock in fixed-rate assets before rates fall further — extending duration in the investment portfolio.'],
                ['HQLA yield improvement','Rising government bond yields have improved the return on mandatory liquidity buffers — partially offsetting NIM compression.'],
                ['Enhanced supervision', 'Post-SVB, regulators globally expanding IRRBB disclosure requirements and stress testing for mid-sized banks.'],
                ['Hedge accounting', 'More banks using fair value hedge accounting to reduce NIM volatility from fixed-rate instruments — improving earnings predictability.'],
                ['Digital liquidity', 'Real-time liquidity monitoring and AI-driven cash flow forecasting improving intraday liquidity efficiency.'],
                ] as [$t,$b])
                <li class="flex gap-3 items-start text-sm font-light text-[var(--text-muted)] leading-relaxed">
                    <span class="text-[var(--indigo)] font-semibold mt-0.5 flex-shrink-0">→</span>
                    <span><strong class="text-[var(--navy)] font-semibold">{{ $t }}</strong> — {{ $b }}</span>
                </li>
                @endforeach
            </ul>
            <div>
                <div class="border border-[var(--indigo)]/20 bg-[var(--indigo-light)] px-5 py-5 mb-6">
                    <div class="text-[var(--indigo)] text-[9.5px] font-bold tracking-[0.22em] uppercase mb-2">Key Watch {{ now()->year }}</div>
                    <p class="text-[var(--text-body)] text-sm leading-relaxed">Banks with <strong class="text-[var(--navy)] font-semibold">liability-sensitive balance sheets</strong> (more floating-rate deposits than assets) will see NIM expand as rates fall — the reverse of the 2022–2024 dynamic. Identifying these banks is a key alpha source in bank equity analysis.</p>
                </div>
                <div class="flex flex-wrap gap-2">
                    @foreach(['ALM','IRRBB','LCR','NSFR','NIM Sensitivity','EVE Risk'] as $tag)
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
        ['Banking Analysis', route('banking.analysis-nim_capital'), 'NIM & Capital Ratios', 'How ALM and treasury decisions flow directly into NIM performance.'],
        ['Banking Analysis', route('banking.analysis-risk_liquidity'), 'Risk & Liquidity', 'Comprehensive framework for credit, market, and liquidity risk.'],
        ['Banking Products', route('banking.products-deposit_analysis'), 'Deposit Products', 'The liability side that treasury manages for funding cost and stability.'],
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