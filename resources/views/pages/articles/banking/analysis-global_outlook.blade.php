@extends('layouts.backing')

@section('title', 'Global Banking Outlook')
@section('description', 'Macro forces, geopolitical shifts, digital disruption, and regulatory evolution shaping the global banking industry through 2026 and beyond.')
@section('content')

<section class="relative min-h-[80vh] flex flex-col justify-end bg-[var(--navy)] overflow-hidden px-8 md:px-16 pb-16 pt-18">
    <div class="absolute top-0 right-0 fonttitle font-black leading-none text-white/[0.03] select-none pointer-events-none tracking-tight" style="font-size:clamp(160px,28vw,380px)">GBK</div>
    <div class="absolute inset-0 pointer-events-none" style="background:radial-gradient(ellipse 65% 55% at 72% 15%,rgba(79,70,229,0.13) 0%,transparent 60%),radial-gradient(ellipse 40% 40% at 8% 85%,rgba(15,31,53,0.5) 0%,transparent 55%)"></div>
    <div class="relative z-10 max-w-7xl mx-auto w-full">
        <div class="flex items-center gap-3 mb-6">
            <span class="w-8 h-px bg-[var(--indigo-mid)]"></span>
            <span class="text-[var(--indigo-mid)] text-[10px] font-bold tracking-[0.28em] uppercase">Banking Industry Analysis · Express Fintech {{ now()->year }}</span>
        </div>
        <h1 class="hero-title mb-8">Global<br><em class="text-[var(--indigo-mid)] not-italic">Banking</em><br><span class="text-white/20">Outlook</span></h1>
        <div class="flex flex-wrap gap-3 mb-10">
            @foreach([['Macro','Rate & Growth'],['Geo','Fragmentation'],['Tech','AI & Digital'],['Reg','Basel IV']] as [$l,$s])
            <div class="bg-[var(--indigo)]/10 border border-[var(--indigo)]/30 px-5 py-2.5 flex flex-col items-center gap-0.5">
                <span class="text-[var(--indigo-mid)] text-[13px] font-bold tracking-widest uppercase">{{ $l }}</span>
                <span class="text-white/30 text-[9px] tracking-wider">{{ $s }}</span>
            </div>
            @endforeach
        </div>
        <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-6">
            <p class="max-w-lg text-white/50 text-sm font-light leading-relaxed border-l border-[var(--indigo-mid)] pl-4">Five structural forces are converging to reshape global banking — rate normalisation, geopolitical fragmentation, AI transformation, regulatory tightening, and the rise of non-bank financial intermediaries.</p>
            <div class="flex flex-col items-start md:items-end gap-1.5 flex-shrink-0 text-[10px] tracking-widest uppercase">
                <span class="text-white/35">{{ seoUpdateDate('analysis-global-outlook') }}</span>
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
        @foreach([['#macro','Macro Environment',true],['#regions','Regional Outlook',false],['#tech','Technology Shift',false],['#regulation','Regulation',false],['#outlook','Scenarios',false]] as [$href,$label,$active])
        <a href="{{ $href }}" class="flex-shrink-0 text-[10px] font-bold tracking-[0.18em] uppercase px-5 py-4 border-b-2 whitespace-nowrap transition-colors duration-200 no-underline {{ $active ? 'text-[var(--indigo)] border-[var(--indigo)]' : 'text-[var(--text-muted)] border-transparent hover:text-[var(--navy)]' }}">{{ $label }}</a>
        @endforeach
    </div>
</nav>

<section class="py-20 px-8 md:px-16 bg-[var(--bg-surface)] border-b border-[var(--border)] relative overflow-hidden" id="macro">
    <div class="absolute top-0 right-10 fonttitle font-black leading-none text-[var(--navy)]/[0.04] select-none pointer-events-none" style="font-size:180px">01</div>
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="flex items-center gap-2.5 mb-3"><span class="w-6 h-px bg-[var(--indigo)]"></span><span class="text-[var(--indigo)] text-[10px] font-bold tracking-[0.28em] uppercase">Chapter 01</span></div>
        <h2 class="fonttitle text-4xl md:text-[50px] font-bold leading-tight tracking-tight text-[var(--navy)] mb-4">Macro <em class="text-[var(--indigo)]">Environment</em></h2>
        <p class="text-[var(--text-muted)] text-sm font-light leading-relaxed max-w-2xl mb-12">After the most aggressive rate hiking cycle in four decades, central banks are pivoting — reshaping the profitability calculus for every banking system globally.</p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-14">
            <div>
                <p class="text-[var(--text-body)] text-sm font-light leading-relaxed mb-4">The <strong class="font-semibold text-[var(--navy)]">2022–2024 rate cycle</strong> was a rare golden era for bank NIM — the fastest rate rise in 40 years created an unprecedented tailwind for asset-sensitive institutions. Global bank ROE reached post-GFC highs, with US banks averaging 11–17% ROE in 2024–2025.</p>
                <p class="text-[var(--text-body)] text-sm font-light leading-relaxed mb-4">The pivot to rate cuts beginning in late 2024 introduces a new phase: <strong class="font-semibold text-[var(--navy)]">NIM normalisation</strong>. Banks must now grow fee income, cut costs through technology investment, and manage credit quality deterioration — particularly in commercial real estate — to sustain earnings through the cycle turn.</p>
                <div class="border border-[var(--indigo)]/25 bg-[var(--indigo-light)] px-5 py-4 mt-6">
                    <div class="text-[var(--indigo)] text-[9px] font-bold tracking-[0.22em] uppercase mb-1.5">The Key Question</div>
                    <p class="text-[var(--text-body)] text-sm leading-relaxed">Can banks maintain <strong class="text-[var(--navy)] font-semibold">ROE above cost of equity (10–12%)</strong> as NIM compresses? Fee income diversification, cost efficiency through AI, and capital return discipline will determine the answer at an individual institution level.</p>
                </div>
            </div>
            <div class="flex flex-col gap-3">
                @php $year = now()->year; @endphp
                @foreach([
                ['−150bps',"Expected Fed funds rate cut by end {$year}",'indigo'],
                ['3.1%', "Global bank avg NIM forecast — {$year}",'navy'],
                ['$8.9T', 'Global bank profit pool — 2025 record high','navy-soft'],
                ] as [$v,$l,$c])
                <div class="p-7 bg-white border-l-4 border-[var(--{{ $c }})] shadow-[var(--shadow-sm)]">
                    <div class="fonttitle text-5xl font-black text-[var(--{{ $c }})] leading-none mb-1.5">{{ $v }}</div>
                    <div class="text-[var(--text-muted)] text-[11px] uppercase tracking-widest">{{ $l }}</div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section class="py-20 px-8 md:px-16 bg-white border-b border-[var(--border)] relative overflow-hidden" id="regions">
    <div class="absolute top-0 right-10 fonttitle font-black leading-none text-[var(--navy)]/[0.03] select-none pointer-events-none" style="font-size:180px">02</div>
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="flex items-center gap-2.5 mb-3"><span class="w-6 h-px bg-[var(--indigo)]"></span><span class="text-[var(--indigo)] text-[10px] font-bold tracking-[0.28em] uppercase">Chapter 02</span></div>
        <h2 class="fonttitle text-4xl md:text-[50px] font-bold leading-tight tracking-tight text-[var(--navy)] mb-4">Regional <em class="text-[var(--indigo)]">Outlook</em></h2>
        <p class="text-[var(--text-muted)] text-sm font-light leading-relaxed max-w-2xl mb-10">Each major banking system faces a distinct set of opportunities and structural challenges in {{ now()->year }}.</p>
        <div class="border border-[var(--border)] overflow-hidden shadow-[var(--shadow-sm)] mb-10">
            <div class="bg-[var(--bg-surface)] px-5 py-3 flex items-center justify-between border-b border-[var(--border)]">
                <h4 class="text-[var(--navy)] text-xs font-bold tracking-[0.16em] uppercase">Regional Banking Snapshot — {{ now()->year }}</h4>
                <span class="text-[var(--indigo)] text-[10px] tracking-widest uppercase">EF Research</span>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-sm border-collapse">
                    <thead>
                        <tr class="bg-[var(--bg-muted)] border-b border-[var(--border)]">
                            <th class="text-left px-5 py-3 text-[var(--text-muted)] text-[9.5px] font-bold tracking-[0.12em] uppercase">Region</th>
                            <th class="text-left px-5 py-3 text-[var(--text-muted)] text-[9.5px] font-bold tracking-[0.12em] uppercase">Avg ROE</th>
                            <th class="text-left px-5 py-3 text-[var(--text-muted)] text-[9.5px] font-bold tracking-[0.12em] uppercase">NIM</th>
                            <th class="text-left px-5 py-3 text-[var(--text-muted)] text-[9.5px] font-bold tracking-[0.12em] uppercase">Key Risk</th>
                            <th class="text-left px-5 py-3 text-[var(--text-muted)] text-[9.5px] font-bold tracking-[0.12em] uppercase">Outlook</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach([
                        ['United States', '12–15%', '3.2–3.6%', 'CRE credit losses', 'Cautious positive'],
                        ['Eurozone', '9–11%', '1.5–2.2%', 'Rate cut NIM compression', 'Neutral'],
                        ['United Kingdom', '10–13%', '2.0–2.8%', 'Mortgage book repricing', 'Neutral positive'],
                        ['Japan', '6–9%', '0.8–1.2%', 'BoJ rate normalisation pace','Improving'],
                        ['China', '9–11%', '1.8–2.2%', 'Property sector NPL overhang','Cautious'],
                        ['India', '14–17%', '3.2–3.8%', 'Loan growth sustainability', 'Positive'],
                        ['Southeast Asia', '12–15%', '3.5–4.5%', 'FX and geopolitical risk', 'Positive'],
                        ] as [$r,$roe,$nim,$risk,$out])
                        <tr class="border-b border-[var(--border)]/60 hover:bg-[var(--bg-surface)] transition-colors">
                            <td class="px-5 py-3 font-semibold text-[var(--navy)] text-[13px]">{{ $r }}</td>
                            <td class="px-5 py-3 text-[var(--indigo)] font-semibold text-[13px]">{{ $roe }}</td>
                            <td class="px-5 py-3 text-[var(--text-body)] text-[13px]">{{ $nim }}</td>
                            <td class="px-5 py-3 text-[var(--text-muted)] text-[12px]">{{ $risk }}</td>
                            <td class="px-5 py-3 text-[13px] font-semibold
                                @if(str_contains($out,'Positive')) text-emerald-600
                                @elseif(str_contains($out,'Cautious')) text-amber-500
                                @else text-[var(--text-body)] @endif">{{ $out }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<section class="py-20 px-8 md:px-16 bg-[var(--bg-surface)] border-b border-[var(--border)] relative overflow-hidden" id="tech">
    <div class="absolute top-0 right-10 fonttitle font-black leading-none text-[var(--navy)]/[0.04] select-none pointer-events-none" style="font-size:180px">03</div>
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="flex items-center gap-2.5 mb-3"><span class="w-6 h-px bg-[var(--navy)]"></span><span class="text-[var(--navy)] text-[10px] font-bold tracking-[0.28em] uppercase">Chapter 03</span></div>
        <h2 class="fonttitle text-4xl md:text-[50px] font-bold leading-tight tracking-tight text-[var(--navy)] mb-4">Technology <em class="text-[var(--indigo)]">Transformation</em></h2>
        <p class="text-[var(--text-muted)] text-sm font-light leading-relaxed max-w-2xl mb-12">AI, cloud, and real-time payments infrastructure are restructuring banking economics — creating a structural cost gap between technology leaders and legacy laggards that widens every year.</p>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-px bg-[var(--border)]">
            @foreach([
            ['01','Generative AI', 'Banks deploying LLMs for customer service, compliance document review, code generation, and fraud detection — with early movers reporting 15–30% productivity gains in targeted functions.'],
            ['02','Cloud Migration', 'Migration from legacy mainframes to cloud infrastructure reducing IT costs by 20–35% while enabling API-first product architecture that accelerates time-to-market for new products.'],
            ['03','Real-time Payments', 'ISO 20022, FedNow, and linked RTP networks enabling 24/7 instant settlement — reducing float income but improving cash management product value propositions.'],
            ['04','Embedded Finance', 'Banking services embedded in non-financial platforms via BaaS APIs — enabling banks to reach customers at the point of financial need without owning the distribution relationship.'],
            ] as [$n,$t,$b])
            <div class="bg-white p-7 border-t-2 border-transparent hover:border-[var(--indigo)] hover:bg-[var(--indigo-light)] transition-all duration-200">
                <div class="fonttitle text-4xl font-black text-[var(--indigo)] opacity-20 leading-none mb-3">{{ $n }}</div>
                <div class="text-[var(--navy)] text-[13px] font-semibold mb-2">{{ $t }}</div>
                <div class="text-[var(--text-muted)] text-[12.5px] font-light leading-relaxed">{{ $b }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="py-20 px-8 md:px-16 bg-white border-b border-[var(--border)] relative overflow-hidden" id="regulation">
    <div class="absolute top-0 right-10 fonttitle font-black leading-none text-[var(--navy)]/[0.03] select-none pointer-events-none" style="font-size:180px">04</div>
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="flex items-center gap-2.5 mb-3"><span class="w-6 h-px bg-[var(--indigo)]"></span><span class="text-[var(--indigo)] text-[10px] font-bold tracking-[0.28em] uppercase">Chapter 04</span></div>
        <h2 class="fonttitle text-4xl md:text-[50px] font-bold leading-tight tracking-tight text-[var(--navy)] mb-4">Regulatory <em class="text-[var(--indigo)]">Landscape</em></h2>
        <p class="text-[var(--text-muted)] text-sm font-light leading-relaxed max-w-2xl mb-12">Basel IV, climate stress testing, AI governance, and stablecoin regulation are converging to increase the regulatory burden — and the compliance cost — of banking in 2025–2027.</p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-14">
            <ul class="space-y-4">
                @foreach([
                ['Basel IV (FRTB)', 'Final implementation adding 10–15% to RWA for most banks — requiring balance sheet optimisation or capital raises.'],
                ['Stablecoin Frameworks','US, EU, and UK regulatory frameworks creating a licensed pathway for bank-issued stablecoins and strict reserve requirements for private issuers.'],
                ['AI Model Governance', 'SR 11-7 equivalent guidance on AI — requiring model validation, explainability, and bias testing for AI-driven credit and pricing decisions.'],
                ['Climate Disclosure', 'SEC climate rule (US) and CSRD (EU) mandating detailed Scope 1/2/3 emissions reporting and climate scenario analysis for financial institutions.'],
                ['Open Finance', 'Extension of open banking data-sharing obligations to investment, insurance, and pension data — expanding PSD2-style frameworks into broader financial services.'],
                ] as [$t,$b])
                <li class="flex gap-3 items-start text-sm font-light text-[var(--text-muted)] leading-relaxed">
                    <span class="text-[var(--indigo)] font-semibold mt-0.5 flex-shrink-0">→</span>
                    <span><strong class="text-[var(--navy)] font-semibold">{{ $t }}</strong> — {{ $b }}</span>
                </li>
                @endforeach
            </ul>
            <div class="border border-[var(--border)] overflow-hidden shadow-[var(--shadow-sm)]">
                <div class="bg-[var(--bg-surface)] px-5 py-3 border-b border-[var(--border)]">
                    <h4 class="text-[var(--navy)] text-xs font-bold tracking-[0.16em] uppercase">Regulatory Timeline 2025–2027</h4>
                </div>
                <div class="flex flex-col divide-y divide-[var(--border)]">
                    @foreach([
                    ['2025','Basel IV RWA floors','Phased in across EU and US'],
                    ['2025','DORA (EU)','Digital Operational Resilience Act implementation'],
                    ['2025','MiCA stablecoin rules','EU Markets in Crypto-Assets in full effect'],
                    ['2026','FRTB final','Fundamental Review of Trading Book effective'],
                    ['2026','Basel IV leverage','Enhanced leverage ratio requirements'],
                    ['2027','CSRD full scope','All large EU financial institutions in scope'],
                    ] as [$yr,$rule,$note])
                    <div class="flex items-start gap-4 px-5 py-3 hover:bg-[var(--bg-surface)] transition-colors">
                        <span class="text-[var(--indigo)] text-[11px] font-black tracking-widest flex-shrink-0 mt-0.5">{{ $yr }}</span>
                        <div>
                            <div class="text-[var(--navy)] text-[13px] font-semibold">{{ $rule }}</div>
                            <div class="text-[var(--text-muted)] text-[11.5px] font-light">{{ $note }}</div>
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
        <h2 class="fonttitle text-4xl md:text-[50px] font-bold leading-tight tracking-tight text-[var(--navy)] mb-4">Scenario <em class="text-[var(--indigo)]">Analysis {{ now()->year }}</em></h2>
        <p class="text-[var(--text-muted)] text-sm font-light leading-relaxed max-w-2xl mb-10">Three macro scenarios shape the range of outcomes for global banking profitability through the end of {{ now()->year }}.</p>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-px bg-[var(--border)] mb-12">
            @foreach([
            ['Soft Landing','Probability: 50%','emerald','Global growth 2.5–3.0%, inflation contained, gradual Fed cuts. Banks absorb NIM compression via fee income growth and CIR improvement. ROE moderates to 10–12% but stays above cost of equity. CRE losses manageable.'],
            ['Stagflation Resurge','Probability: 25%','amber','Inflation re-accelerates — cuts reversed. Short-term NIM support but credit quality deteriorates faster. Consumer and SME stress amplifies. Provisioning charges weigh on earnings. ROE 8–11%.'],
            ['Recession','Probability: 25%','red','Growth recession in US or EU. CRE NPLs surge, consumer credit deteriorates, credit card losses spike. Provisioning charges overwhelm NIM benefit from any rate cuts. ROE dips to 6–9% for 1–2 years.'],
            ] as [$title,$prob,$c,$body])
            <div class="bg-white p-8">
                <div class="text-{{ $c }}-500 text-[10px] font-bold tracking-[0.22em] uppercase mb-2">{{ $prob }}</div>
                <div class="fonttitle text-2xl font-bold text-[var(--navy)] mb-3">{{ $title }}</div>
                <div class="w-8 h-0.5 bg-{{ $c }}-500 mb-4"></div>
                <p class="text-[var(--text-muted)] text-[12.5px] font-light leading-relaxed">{{ $body }}</p>
            </div>
            @endforeach
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-14">
            <div>
                <div class="border border-[var(--indigo)]/20 bg-[var(--indigo-light)] px-5 py-5 mb-6">
                    <div class="text-[var(--indigo)] text-[9.5px] font-bold tracking-[0.22em] uppercase mb-2">EF Research Base Case</div>
                    <p class="text-[var(--text-body)] text-sm leading-relaxed">We assign <strong class="text-[var(--navy)] font-semibold">50% probability to a soft landing</strong> — with global bank ROE settling in the 10–12% range by {{ now()->year }} year-end as NIM normalises. Banks with strong fee income streams, AI-driven cost advantages, and clean credit books will sustain returns comfortably above sector average.</p>
                </div>
                <div class="flex flex-wrap gap-2">
                    @foreach(['Rate Cycle','CRE Risk','AI Transformation','Basel IV','Fintech Competition','EM Growth'] as $tag)
                    <span class="text-[10px] font-bold tracking-[0.16em] uppercase px-3.5 py-1.5 border border-[var(--border)] text-[var(--text-muted)] hover:border-[var(--indigo)] hover:text-[var(--indigo)] transition-colors cursor-default">{{ $tag }}</span>
                    @endforeach
                </div>
            </div>
            <ul class="space-y-3">
                @foreach([
                ['Winners in the base case', 'US diversified banks, SE Asian retail banks, digital-native challengers with sub-45% CIR.'],
                ['Laggards in the base case', 'US regionals with heavy CRE, European banks with thin NIM and low fee income, banks with poor digital investment track records.'],
                ['Wildcard upside', 'AI-driven cost savings exceed expectations — CIR drops faster than anticipated, supporting ROE above 13% for early movers.'],
                ['Wildcard downside', 'CRE losses larger than consensus — a cluster of US regional bank failures triggers contagion and tighter credit conditions.'],
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

<section class="bg-[var(--bg-surface)] border-t border-[var(--border)]">
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 divide-y md:divide-y-0 md:divide-x divide-[var(--border)]">
        @foreach([
        ['Banking Analysis', route('banking.analysis-profitability_metrics'),'Profitability Metrics', 'Core ratios shaping bank performance across the cycle.'],
        ['Banking Analysis', route('banking.analysis-risk_liquidity'), 'Risk & Liquidity', 'Credit, liquidity, and operational risk framework.'],
        ['Banking Analysis', route('banking.analysis-nim_capital'), 'NIM & Capital Ratios', 'How macro scenarios translate to NIM and capital outcomes.'],
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