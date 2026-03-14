@extends('layouts.backing')

@section('title', 'Central Banking Systems')
@section('description', 'How central banks shape monetary policy, regulate financial institutions, and act as lenders of last resort in the global economy.')
@section('content')

<section class="relative min-h-[80vh] flex flex-col justify-end bg-[var(--navy)] overflow-hidden px-8 md:px-18 pb-16 pt-18">
    <div class="absolute top-0 right-0 fonttitle font-black leading-none text-white/[0.03] select-none pointer-events-none tracking-tight"
        style="font-size:clamp(160px,28vw,380px)">CB</div>
    <div class="absolute inset-0 pointer-events-none"
        style="background:radial-gradient(ellipse 65% 55% at 72% 15%,rgba(79,70,229,0.13) 0%,transparent 60%),radial-gradient(ellipse 40% 40% at 8% 85%,rgba(15,31,53,0.5) 0%,transparent 55%)"></div>

    <div class="relative z-10 max-w-7xl mx-auto w-full">
        <div class="flex items-center gap-3 mb-6">
            <span class="w-8 h-px bg-[var(--indigo-mid)]"></span>
            <span class="text-[var(--indigo-mid)] text-[10px] font-bold tracking-[0.28em] uppercase">Banking Structure · Express Fintech {{ now()->year }}</span>
        </div>
        <h1 class="hero-title mb-8">
            Central<br>
            <em class="text-[var(--indigo-mid)] not-italic">Banking</em><br>
            <span class="text-white/20">Systems</span>
        </h1>
        <div class="flex flex-wrap gap-3 mb-10">
            @foreach([['Policy','Monetary Tools'],['Regulation','Supervision'],['Stability','Systemic Risk'],['CBDC','Digital Currency']] as [$l,$s])
            <div class="bg-[var(--indigo)]/10 border border-[var(--indigo)]/30 px-5 py-2.5 flex flex-col items-center gap-0.5">
                <span class="text-[var(--indigo-mid)] text-[13px] font-bold tracking-widest uppercase">{{ $l }}</span>
                <span class="text-white/30 text-[9px] tracking-wider">{{ $s }}</span>
            </div>
            @endforeach
        </div>
        <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-6">
            <p class="max-w-lg text-white/50 text-sm font-light leading-relaxed border-l border-[var(--indigo-mid)] pl-4">
                Central banks are the architects of monetary conditions — their rate decisions, reserve requirements, and intervention tools directly determine the profitability environment for all commercial banks.
            </p>
            <div class="flex flex-col items-start md:items-end gap-1.5 flex-shrink-0 text-[10px] tracking-widest uppercase">
                <span class="text-white/35">{{ seoUpdateDate('structure-central-banking') }}</span>
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
        @foreach([['#overview','Overview',true],['#mandate','Mandate',false],['#tools','Policy Tools',false],['#supervision','Supervision',false],['#outlook','Outlook',false]] as [$href,$label,$active])
        <a href="{{ $href }}" class="flex-shrink-0 text-[10px] font-bold tracking-[0.18em] uppercase px-5 py-4 border-b-2 whitespace-nowrap transition-colors duration-200 no-underline {{ $active ? 'text-[var(--indigo)] border-[var(--indigo)]' : 'text-[var(--text-muted)] border-transparent hover:text-[var(--navy)]' }}">{{ $label }}</a>
        @endforeach
    </div>
</nav>

<section class="py-20 px-8 md:px-16 bg-[var(--bg-surface)] border-b border-[var(--border)] relative overflow-hidden" id="overview">
    <div class="absolute top-0 right-10 fonttitle font-black leading-none text-[var(--navy)]/[0.04] select-none pointer-events-none" style="font-size:180px">01</div>
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="flex items-center gap-2.5 mb-3"><span class="w-6 h-px bg-[var(--indigo)]"></span><span class="text-[var(--indigo)] text-[10px] font-bold tracking-[0.28em] uppercase">Chapter 01</span></div>
        <h2 class="fonttitle text-4xl md:text-[50px] font-bold leading-tight tracking-tight text-[var(--navy)] mb-4">System <em class="text-[var(--indigo)]">Overview</em></h2>
        <p class="text-[var(--text-muted)] text-sm font-light leading-relaxed max-w-2xl mb-12">Central banks occupy the apex of the financial system — issuing currency, setting benchmark interest rates, and serving as lender of last resort during financial stress.</p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-14">
            <div>
                <p class="text-[var(--text-body)] text-sm font-light leading-relaxed mb-4">The world's most systemically important central banks — the <strong class="font-semibold text-[var(--navy)]">Federal Reserve (Fed)</strong>, <strong class="font-semibold text-[var(--navy)]">European Central Bank (ECB)</strong>, <strong class="font-semibold text-[var(--navy)]">Bank of England (BoE)</strong>, and <strong class="font-semibold text-[var(--navy)]">Bank of Japan (BoJ)</strong> — collectively influence credit conditions for billions of people and trillions of dollars in assets.</p>
                <p class="text-[var(--text-body)] text-sm font-light leading-relaxed mb-4">Their primary mandate across most jurisdictions is <strong class="font-semibold text-[var(--navy)]">price stability</strong> — typically a 2% inflation target — with secondary mandates around employment and financial stability.</p>
                <div class="border border-[var(--indigo)]/25 bg-[var(--indigo-light)] px-5 py-4 mt-6">
                    <div class="text-[var(--indigo)] text-[9px] font-bold tracking-[0.22em] uppercase mb-1.5">{{ now()->year }} Context</div>
                    <p class="text-[var(--text-body)] text-sm leading-relaxed">The Fed began its rate-cut cycle in late 2024, with rates expected to settle at <strong class="text-[var(--navy)] font-semibold">3.75–4.25%</strong> by end-{{ now()->year }} — a significant shift from the 5.25–5.50% peak of the 2022–2024 tightening cycle.</p>
                </div>
            </div>
            <div class="flex flex-col gap-3">
                @foreach([['185+','Central banks operating globally','indigo'],['$8.9T','Fed balance sheet peak — 2022','navy'],['2.0%','Standard inflation target — major CBs','navy-soft']] as [$v,$l,$c])
                <div class="p-7 bg-white border-l-4 border-[var(--{{ $c }})] shadow-[var(--shadow-sm)]">
                    <div class="fonttitle text-5xl font-black text-[var(--{{ $c }})] leading-none mb-1.5">{{ $v }}</div>
                    <div class="text-[var(--text-muted)] text-[11px] uppercase tracking-widest">{{ $l }}</div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section class="py-20 px-8 md:px-16 bg-white border-b border-[var(--border)] relative overflow-hidden" id="mandate">
    <div class="absolute top-0 right-10 fonttitle font-black leading-none text-[var(--navy)]/[0.03] select-none pointer-events-none" style="font-size:180px">02</div>
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="flex items-center gap-2.5 mb-3"><span class="w-6 h-px bg-[var(--indigo)]"></span><span class="text-[var(--indigo)] text-[10px] font-bold tracking-[0.28em] uppercase">Chapter 02</span></div>
        <h2 class="fonttitle text-4xl md:text-[50px] font-bold leading-tight tracking-tight text-[var(--navy)] mb-4">Core <em class="text-[var(--indigo)]">Mandate</em></h2>
        <p class="text-[var(--text-muted)] text-sm font-light leading-relaxed max-w-2xl mb-12">Central bank objectives vary by charter but converge around three core pillars that define their role in the economy.</p>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-px bg-[var(--border)]">
            @foreach([
            ['01','Price Stability', 'Maintaining inflation near the 2% target is the primary mandate for most central banks. The primary instrument is the policy interest rate.'],
            ['02','Financial Stability', 'Preventing systemic crises through macro-prudential policy, stress testing, and emergency liquidity facilities for solvent but illiquid institutions.'],
            ['03','Full Employment', 'The Fed uniquely carries a full employment mandate alongside price stability — creating potential tension when inflation and unemployment diverge.'],
            ] as [$n,$t,$b])
            <div class="bg-[var(--bg-surface)] p-8 border-t-2 border-transparent hover:border-[var(--indigo)] hover:bg-white transition-all duration-200">
                <div class="fonttitle text-4xl font-black text-[var(--indigo)] opacity-20 leading-none mb-3">{{ $n }}</div>
                <div class="text-[var(--navy)] text-[13px] font-semibold mb-2">{{ $t }}</div>
                <div class="text-[var(--text-muted)] text-[12.5px] font-light leading-relaxed">{{ $b }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="py-20 px-8 md:px-16 bg-[var(--bg-surface)] border-b border-[var(--border)] relative overflow-hidden" id="tools">
    <div class="absolute top-0 right-10 fonttitle font-black leading-none text-[var(--navy)]/[0.04] select-none pointer-events-none" style="font-size:180px">03</div>
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="flex items-center gap-2.5 mb-3"><span class="w-6 h-px bg-[var(--navy)]"></span><span class="text-[var(--navy)] text-[10px] font-bold tracking-[0.28em] uppercase">Chapter 03</span></div>
        <h2 class="fonttitle text-4xl md:text-[50px] font-bold leading-tight tracking-tight text-[var(--navy)] mb-4">Policy <em class="text-[var(--indigo)]">Tools</em></h2>
        <p class="text-[var(--text-muted)] text-sm font-light leading-relaxed max-w-2xl mb-12">The central bank toolkit has expanded significantly since the 2008 financial crisis — moving well beyond traditional rate policy.</p>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-px bg-[var(--border)]">
            @foreach([
            ['01','Policy Rate', 'The primary tool. Setting the overnight lending rate transmits through the economy via mortgage rates, business loans, and savings rates.'],
            ['02','Reserve Requirements','Minimum reserves banks must hold. Raising requirements tightens credit; lowering them expands the money supply.'],
            ['03','Quantitative Easing', 'Asset purchases inject liquidity and compress long-term yields when short rates are at the zero lower bound.'],
            ['04','Forward Guidance', 'Communication about future rate intentions shapes market expectations and can ease or tighten conditions without any actual rate change.'],
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

<section class="py-20 px-8 md:px-16 bg-white border-b border-[var(--border)] relative overflow-hidden" id="supervision">
    <div class="absolute top-0 right-10 fonttitle font-black leading-none text-[var(--navy)]/[0.03] select-none pointer-events-none" style="font-size:180px">04</div>
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="flex items-center gap-2.5 mb-3"><span class="w-6 h-px bg-[var(--indigo)]"></span><span class="text-[var(--indigo)] text-[10px] font-bold tracking-[0.28em] uppercase">Chapter 04</span></div>
        <h2 class="fonttitle text-4xl md:text-[50px] font-bold leading-tight tracking-tight text-[var(--navy)] mb-4">Regulatory <em class="text-[var(--indigo)]">Supervision</em></h2>
        <p class="text-[var(--text-muted)] text-sm font-light leading-relaxed max-w-2xl mb-10">Central banks supervise commercial banks to ensure capital adequacy, liquidity, and sound risk management practices.</p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-14">
            <ul class="space-y-3">
                @foreach([
                ['Stress Testing', 'Annual exercises assess whether banks can survive severe macroeconomic scenarios — informing dividend and buyback approvals.'],
                ['Basel III / IV', 'International capital standards requiring minimum CET1 ratios, liquidity coverage, and net stable funding ratios.'],
                ['On-site Examinations','Supervisors conduct deep-dives into loan quality, model governance, and operational risk controls.'],
                ['Macroprudential', 'Countercyclical capital buffers and loan-to-value caps target systemic vulnerabilities in real estate and credit cycles.'],
                ] as [$t,$b])
                <li class="flex gap-3 items-start text-sm font-light text-[var(--text-muted)] leading-relaxed">
                    <span class="text-[var(--indigo)] font-semibold mt-0.5 flex-shrink-0">→</span>
                    <span><strong class="text-[var(--navy)] font-semibold">{{ $t }}</strong> — {{ $b }}</span>
                </li>
                @endforeach
            </ul>
            <div class="border border-[var(--border)] overflow-hidden shadow-[var(--shadow-sm)]">
                <div class="bg-[var(--bg-surface)] px-5 py-3 border-b border-[var(--border)]">
                    <h4 class="text-[var(--navy)] text-xs font-bold tracking-[0.16em] uppercase">Key Regulatory Ratios</h4>
                </div>
                <table class="w-full text-sm border-collapse">
                    <thead>
                        <tr class="bg-[var(--bg-muted)] border-b border-[var(--border)]">
                            <th class="text-left px-5 py-2.5 text-[var(--text-muted)] text-[9.5px] font-bold tracking-[0.12em] uppercase">Ratio</th>
                            <th class="text-left px-5 py-2.5 text-[var(--text-muted)] text-[9.5px] font-bold tracking-[0.12em] uppercase">Minimum</th>
                            <th class="text-left px-5 py-2.5 text-[var(--text-muted)] text-[9.5px] font-bold tracking-[0.12em] uppercase">Well-Capitalised</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach([['CET1 Ratio','4.5%','> 12%'],['Tier 1 Capital','6.0%','> 14%'],['Total Capital','8.0%','> 16%'],['LCR','100%','> 120%'],['NSFR','100%','> 110%']] as [$r,$m,$w])
                        <tr class="border-b border-[var(--border)]/60 hover:bg-[var(--bg-surface)] transition-colors">
                            <td class="px-5 py-3 font-semibold text-[var(--navy)] text-[13px]">{{ $r }}</td>
                            <td class="px-5 py-3 text-[var(--indigo)] font-semibold text-[13px]">{{ $m }}</td>
                            <td class="px-5 py-3 text-[var(--text-body)] text-[13px]">{{ $w }}</td>
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
        <h2 class="fonttitle text-4xl md:text-[50px] font-bold leading-tight tracking-tight text-[var(--navy)] mb-4">Policy <em class="text-[var(--indigo)]">Outlook {{ now()->year }}</em></h2>
        <p class="text-[var(--text-muted)] text-sm font-light leading-relaxed max-w-2xl mb-10">Central banks face a delicate balancing act as inflation normalises and growth risks re-emerge heading into {{ now()->year }}.</p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-14">
            <ul class="space-y-3">
                @php
                $year = now()->year;
                $next2 = $year + 2;
                @endphp
                @foreach([
                ['Rate normalisation', "Fed expected to cut 2–3 more times in {$year}, settling near neutral rate of 3.5–4.0%."],
                ['QT continuation', 'Quantitative tightening continues, gradually shrinking balance sheets toward pre-pandemic levels.'],
                ['Digital currency', 'CBDC pilots accelerating — potential structural shift in how central banks interact with the economy.'],
                ['Climate risk', 'Central banks integrating climate scenario analysis into supervisory stress tests and risk frameworks.'],
                ['Basel IV rollout', "Final Basel IV standards phasing in through {$year}–{$next2}, lifting capital requirements for many European banks."],
                ] as [$t,$b])
                <li class="flex gap-3 items-start text-sm font-light text-[var(--text-muted)] leading-relaxed">
                    <span class="text-[var(--indigo)] font-semibold mt-0.5 flex-shrink-0">→</span>
                    <span><strong class="text-[var(--navy)] font-semibold">{{ $t }}</strong> — {{ $b }}</span>
                </li>
                @endforeach
            </ul>
            <div>
                <div class="border border-[var(--indigo)]/20 bg-[var(--indigo-light)] px-5 py-5 mb-6">
                    <div class="text-[var(--indigo)] text-[9.5px] font-bold tracking-[0.22em] uppercase mb-2">Key Watch</div>
                    <p class="text-[var(--text-body)] text-sm leading-relaxed">The pace of <strong class="text-[var(--navy)] font-semibold">Fed balance sheet reduction</strong> in {{ now()->year }} will be a critical determinant of long-term yield levels and therefore bank NIM — slower QT is broadly positive for bank profitability.</p>
                </div>
                <div class="flex flex-wrap gap-2">
                    @foreach(['Fed Policy','ECB Rates','Quantitative Tightening','Basel IV','CBDC'] as $tag)
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
        ['Banking Structure', route('banking.structure-retail_commercial'), 'Retail vs Commercial Banking', 'Key differences in client segments, products, and revenue models.'],
        ['Banking Structure', route('banking.structure-digital_evolution'), 'Digital Banking Evolution', 'The shift from branch-centric to mobile-first banking.'],
        ['Banking Analysis', route('banking.analysis-nim_capital'), 'NIM & Capital Ratios', 'Deep dive into net interest margin drivers and Basel capital requirements.'],
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