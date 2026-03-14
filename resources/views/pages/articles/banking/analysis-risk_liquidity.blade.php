@extends('layouts.backing')

@section('title', 'Risk & Liquidity Management')
@section('description', 'Credit risk, market risk, liquidity coverage ratios, and the stress testing frameworks that govern bank risk governance.')
@section('content')

<section class="relative min-h-[80vh] flex flex-col justify-end bg-[var(--navy)] overflow-hidden px-8 md:px-16 pb-16 pt-18">
    <div class="absolute top-0 right-0 fonttitle font-black leading-none text-white/[0.03] select-none pointer-events-none tracking-tight" style="font-size:clamp(160px,28vw,380px)">RLM</div>
    <div class="absolute inset-0 pointer-events-none" style="background:radial-gradient(ellipse 65% 55% at 72% 15%,rgba(79,70,229,0.13) 0%,transparent 60%),radial-gradient(ellipse 40% 40% at 8% 85%,rgba(15,31,53,0.5) 0%,transparent 55%)"></div>
    <div class="relative z-10 max-w-7xl mx-auto w-full">
        <div class="flex items-center gap-3 mb-6">
            <span class="w-8 h-px bg-[var(--indigo-mid)]"></span>
            <span class="text-[var(--indigo-mid)] text-[10px] font-bold tracking-[0.28em] uppercase">Banking Industry Analysis · Express Fintech {{ now()->year }}</span>
        </div>
        <h1 class="hero-title mb-8">Risk &<br><em class="text-[var(--indigo-mid)] not-italic">Liquidity</em><br><span class="text-white/20">Management</span></h1>
        <div class="flex flex-wrap gap-3 mb-10">
            @foreach([['Credit','NPL & Provisions'],['Liquidity','LCR / NSFR'],['Market','VaR & Stress'],['Operational','Non-financial Risk']] as [$l,$s])
            <div class="bg-[var(--indigo)]/10 border border-[var(--indigo)]/30 px-5 py-2.5 flex flex-col items-center gap-0.5">
                <span class="text-[var(--indigo-mid)] text-[13px] font-bold tracking-widest uppercase">{{ $l }}</span>
                <span class="text-white/30 text-[9px] tracking-wider">{{ $s }}</span>
            </div>
            @endforeach
        </div>
        <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-6">
            <p class="max-w-lg text-white/50 text-sm font-light leading-relaxed border-l border-[var(--indigo-mid)] pl-4">Risk management is the infrastructure of banking — the frameworks, models, and governance processes that determine whether a bank can survive economic stress and continue serving its customers and shareholders across cycles.</p>
            <div class="flex flex-col items-start md:items-end gap-1.5 flex-shrink-0 text-[10px] tracking-widest uppercase">
                <span class="text-white/35">{{ seoUpdateDate('analysis-risk-liquidity') }}</span>
                <span class="text-white/35"><b class="text-white/60">Read</b> 9 min</span>
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
        @foreach([['#overview','Overview',true],['#credit','Credit Risk',false],['#liquidity','Liquidity Risk',false],['#market','Market & Op Risk',false],['#outlook','Outlook',false]] as [$href,$label,$active])
        <a href="{{ $href }}" class="flex-shrink-0 text-[10px] font-bold tracking-[0.18em] uppercase px-5 py-4 border-b-2 whitespace-nowrap transition-colors duration-200 no-underline {{ $active ? 'text-[var(--indigo)] border-[var(--indigo)]' : 'text-[var(--text-muted)] border-transparent hover:text-[var(--navy)]' }}">{{ $label }}</a>
        @endforeach
    </div>
</nav>

<section class="py-20 px-8 md:px-16 bg-[var(--bg-surface)] border-b border-[var(--border)] relative overflow-hidden" id="overview">
    <div class="absolute top-0 right-10 fonttitle font-black leading-none text-[var(--navy)]/[0.04] select-none pointer-events-none" style="font-size:180px">01</div>
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="flex items-center gap-2.5 mb-3"><span class="w-6 h-px bg-[var(--indigo)]"></span><span class="text-[var(--indigo)] text-[10px] font-bold tracking-[0.28em] uppercase">Chapter 01</span></div>
        <h2 class="fonttitle text-4xl md:text-[50px] font-bold leading-tight tracking-tight text-[var(--navy)] mb-4">The Risk <em class="text-[var(--indigo)]">Framework</em></h2>
        <p class="text-[var(--text-muted)] text-sm font-light leading-relaxed max-w-2xl mb-12">Bank risk falls into four primary categories — credit, liquidity, market, and operational. Each requires distinct measurement frameworks, governance structures, and capital allocation to manage effectively.</p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-14">
            <div>
                <p class="text-[var(--text-body)] text-sm font-light leading-relaxed mb-4"><strong class="font-semibold text-[var(--navy)]">Credit risk</strong> — the risk that borrowers default — is the largest single risk for most banks, absorbing 70–80% of regulatory capital. It is managed through underwriting standards, portfolio diversification, and provisioning models.</p>
                <p class="text-[var(--text-body)] text-sm font-light leading-relaxed mb-4"><strong class="font-semibold text-[var(--navy)]">Liquidity risk</strong> — the risk of being unable to meet obligations — is existential. SVB demonstrated in 2023 that a solvent bank can fail in 48 hours if liquidity management fails. Basel III's LCR and NSFR ratios are the regulatory response.</p>
                <div class="border border-[var(--indigo)]/25 bg-[var(--indigo-light)] px-5 py-4 mt-6">
                    <div class="text-[var(--indigo)] text-[9px] font-bold tracking-[0.22em] uppercase mb-1.5">Three Lines Model</div>
                    <p class="text-[var(--text-body)] text-sm leading-relaxed">Best-practice risk governance follows the <strong class="text-[var(--navy)] font-semibold">Three Lines of Defence</strong>: business units own risk (1st line), Risk Management functions independently oversee it (2nd line), and Internal Audit provides independent assurance (3rd line).</p>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-3">
                @foreach([
                ['Credit Risk', '70–80% of regulatory capital','indigo'],
                ['Liquidity Risk', 'LCR min 100% — SVB lesson', 'navy'],
                ['Market Risk', 'VaR + stressed VaR models', 'navy-soft'],
                ['Op Risk', '~15% of total RWA on avg', 'indigo'],
                ] as [$t,$v,$c])
                <div class="p-5 bg-white border-l-4 border-[var(--{{ $c }})] shadow-[var(--shadow-sm)]">
                    <div class="text-[var(--navy)] text-[12px] font-semibold mb-1.5">{{ $t }}</div>
                    <div class="text-[var(--text-muted)] text-[11px] leading-relaxed">{{ $v }}</div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section class="py-20 px-8 md:px-16 bg-white border-b border-[var(--border)] relative overflow-hidden" id="credit">
    <div class="absolute top-0 right-10 fonttitle font-black leading-none text-[var(--navy)]/[0.03] select-none pointer-events-none" style="font-size:180px">02</div>
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="flex items-center gap-2.5 mb-3"><span class="w-6 h-px bg-[var(--indigo)]"></span><span class="text-[var(--indigo)] text-[10px] font-bold tracking-[0.28em] uppercase">Chapter 02</span></div>
        <h2 class="fonttitle text-4xl md:text-[50px] font-bold leading-tight tracking-tight text-[var(--navy)] mb-4">Credit Risk <em class="text-[var(--indigo)]">Framework</em></h2>
        <p class="text-[var(--text-muted)] text-sm font-light leading-relaxed max-w-2xl mb-12">Credit risk management encompasses origination standards, portfolio monitoring, impairment measurement, and workout — spanning the full loan lifecycle.</p>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-px bg-[var(--border)]">
            @foreach([
            ['01','PD / LGD / EAD', 'The three components of expected credit loss — Probability of Default, Loss Given Default, and Exposure at Default. Together they determine loan-level provisioning requirements.'],
            ['02','CECL / IFRS 9', 'Forward-looking expected credit loss standards replaced incurred loss models post-2018. Banks now provision for lifetime expected losses based on macroeconomic forecasts.'],
            ['03','Stress Testing', 'Annual DFAST / EBA stress tests subject bank portfolios to severe recession scenarios — determining capital adequacy and informing dividend / buyback approvals.'],
            ['04','NPL Resolution', 'Early warning systems identify deteriorating credits for proactive restructuring. Speed of NPL recognition and workout execution are key to minimising ultimate credit losses.'],
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
        <h2 class="fonttitle text-4xl md:text-[50px] font-bold leading-tight tracking-tight text-[var(--navy)] mb-4">Liquidity <em class="text-[var(--indigo)]">Risk</em></h2>
        <p class="text-[var(--text-muted)] text-sm font-light leading-relaxed max-w-2xl mb-10">Liquidity risk management has two dimensions — short-term survival (LCR) and structural funding stability (NSFR). Both were tightened significantly after the 2008 and 2023 bank failures.</p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-14">
            <ul class="space-y-3">
                @foreach([
                ['LCR (30-day)', 'Bank must hold HQLA sufficient to cover net outflows in a 30-day stress scenario. Minimum 100%; major banks average 120–130%.'],
                ['NSFR (1-year)', 'Available stable funding must exceed required stable funding over a 1-year horizon. Prevents over-reliance on short-term wholesale funding.'],
                ['Intraday liquidity', 'Real-time monitoring of intraday cash positions — SVB demonstrated that digital bank runs can exhaust intraday liquidity in hours.'],
                ['Contingency plans', 'Recovery and Resolution Plans (living wills) require banks to document how they can be safely wound down without systemic contagion.'],
                ['Liquidity stress testing','Internal scenarios supplement regulatory minimums — banks model severe outflows across multiple stress horizons simultaneously.'],
                ] as [$t,$b])
                <li class="flex gap-3 items-start text-sm font-light text-[var(--text-muted)] leading-relaxed">
                    <span class="text-[var(--indigo)] font-semibold mt-0.5 flex-shrink-0">→</span>
                    <span><strong class="text-[var(--navy)] font-semibold">{{ $t }}</strong> — {{ $b }}</span>
                </li>
                @endforeach
            </ul>
            <div class="border border-[var(--border)] overflow-hidden shadow-[var(--shadow-sm)]">
                <div class="bg-[var(--bg-surface)] px-5 py-3 border-b border-[var(--border)]">
                    <h4 class="text-[var(--navy)] text-xs font-bold tracking-[0.16em] uppercase">Liquidity Ratios — US Banks Q4 2025</h4>
                </div>
                <table class="w-full text-sm border-collapse">
                    <thead>
                        <tr class="bg-[var(--bg-muted)] border-b border-[var(--border)]">
                            <th class="text-left px-5 py-2.5 text-[var(--text-muted)] text-[9.5px] font-bold tracking-[0.12em] uppercase">Bank</th>
                            <th class="text-left px-5 py-2.5 text-[var(--text-muted)] text-[9.5px] font-bold tracking-[0.12em] uppercase">LCR</th>
                            <th class="text-left px-5 py-2.5 text-[var(--text-muted)] text-[9.5px] font-bold tracking-[0.12em] uppercase">NSFR</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach([
                        ['JPMorgan Chase', '117%','122%'],
                        ['Bank of America','118%','131%'],
                        ['Wells Fargo', '125%','120%'],
                        ['Goldman Sachs', '131%','114%'],
                        ['Regulatory Min', '100%','100%'],
                        ] as [$b,$l,$n])
                        <tr class="border-b border-[var(--border)]/60 hover:bg-[var(--bg-surface)] transition-colors">
                            <td class="px-5 py-3 font-semibold text-[var(--navy)] text-[13px]">{{ $b }}</td>
                            <td class="px-5 py-3 text-emerald-600 font-semibold text-[13px]">{{ $l }}</td>
                            <td class="px-5 py-3 text-emerald-600 font-semibold text-[13px]">{{ $n }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<section class="py-20 px-8 md:px-16 bg-white border-b border-[var(--border)] relative overflow-hidden" id="market">
    <div class="absolute top-0 right-10 fonttitle font-black leading-none text-[var(--navy)]/[0.03] select-none pointer-events-none" style="font-size:180px">04</div>
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="flex items-center gap-2.5 mb-3"><span class="w-6 h-px bg-[var(--indigo)]"></span><span class="text-[var(--indigo)] text-[10px] font-bold tracking-[0.28em] uppercase">Chapter 04</span></div>
        <h2 class="fonttitle text-4xl md:text-[50px] font-bold leading-tight tracking-tight text-[var(--navy)] mb-4">Market & <em class="text-[var(--indigo)]">Operational Risk</em></h2>
        <p class="text-[var(--text-muted)] text-sm font-light leading-relaxed max-w-2xl mb-12">Beyond credit and liquidity, banks face market risk from trading positions and operational risk from process failures, cyber attacks, and conduct issues.</p>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-px bg-[var(--border)]">
            @foreach([
            ['01','Value at Risk (VaR)', 'Statistical measure of maximum potential trading loss at a given confidence level (99%). Supplemented by stressed VaR and Expected Shortfall post-Basel III.'],
            ['02','FRTB', 'Fundamental Review of the Trading Book — Basel IV overhaul of market risk capital that significantly increases capital for complex trading positions.'],
            ['03','Operational Risk', 'Risk of loss from inadequate processes, systems, human error, or external events. Measured via Advanced Measurement Approach or Standardised Approach under Basel.'],
            ['04','Cyber & Conduct', 'Cyber risk and conduct risk are the fastest-growing operational risk categories — requiring board-level attention and increasingly significant regulatory capital allocation.'],
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
        <h2 class="fonttitle text-4xl md:text-[50px] font-bold leading-tight tracking-tight text-[var(--navy)] mb-4">Risk <em class="text-[var(--indigo)]">Outlook {{ now()->year }}</em></h2>
        <p class="text-[var(--text-muted)] text-sm font-light leading-relaxed max-w-2xl mb-10">The {{ now()->year }} risk landscape is dominated by credit stress in CRE, tightening liquidity regulation post-SVB, and the emerging challenge of AI model governance.</p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-14">
            <ul class="space-y-3">
                @php
                $year = now()->year;
                $next0 = $year -1;
                @endphp
                @foreach([
                ['CRE credit cycle', "Office loan NPL surge the defining credit event of {$next0}–{$year} — US regional banks with heavy CRE concentration under most pressure."],
                ['Enhanced LCR scope', 'US regulators expanding enhanced LCR requirements to banks above $100B — previously only applying to G-SIBs.'],
                ['AI model risk', 'Regulators issuing guidance on AI model governance — banks must validate, monitor, and explain AI-driven credit and risk decisions.'],
                ['Climate stress tests','Mandatory climate scenario analysis being introduced by ECB, PRA, and APRA — requiring banks to model physical and transition risks on portfolios.'],
                ['Geopolitical risk', 'Sanctions compliance costs rising sharply — geopolitical fragmentation creating new concentration and counterparty risks in cross-border exposures.'],
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
                    <p class="text-[var(--text-body)] text-sm leading-relaxed">Banks with <strong class="text-[var(--navy)] font-semibold">robust early warning systems and proactive NPL recognition</strong> will outperform in the {{ now()->year }} credit stress — speed of problem identification and workout execution are the key differentiators in credit downcycles.</p>
                </div>
                <div class="flex flex-wrap gap-2">
                    @foreach(['Credit Risk','LCR','NSFR','CRE Stress','CECL','FRTB'] as $tag)
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
        ['Banking Analysis', route('banking.analysis-profitability_metrics'),'Profitability Metrics', 'How risk costs flow through to ROA, ROE, and CIR.'],
        ['Banking Analysis', route('banking.analysis-nim_capital'), 'NIM & Capital Ratios', 'Capital requirements and their interaction with NIM and ROE.'],
        ['Banking Products', route('banking.products-lending_framework'), 'Lending Framework', 'Credit risk starts at origination — how banks underwrite and price loans.'],
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