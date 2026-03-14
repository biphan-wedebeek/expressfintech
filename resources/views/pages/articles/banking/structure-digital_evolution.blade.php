@extends('layouts.backing')

@section('title', 'Digital Banking Evolution')
@section('description', 'From branch-centric to mobile-first — the structural shift redefining retail banking through fintech, neobanks, and AI.')
@section('content')

<section class="relative min-h-[80vh] flex flex-col justify-end bg-[var(--navy)] overflow-hidden px-8 md:px-18 pb-16 pt-18">
    <div class="absolute top-0 right-0 fonttitle font-black leading-none text-white/[0.03] select-none pointer-events-none tracking-tight" style="font-size:clamp(160px,28vw,380px)">DIG</div>
    <div class="absolute inset-0 pointer-events-none" style="background:radial-gradient(ellipse 65% 55% at 72% 15%,rgba(79,70,229,0.13) 0%,transparent 60%),radial-gradient(ellipse 40% 40% at 8% 85%,rgba(15,31,53,0.5) 0%,transparent 55%)"></div>
    <div class="relative z-10 max-w-7xl mx-auto w-full">
        <div class="flex items-center gap-3 mb-6">
            <span class="w-8 h-px bg-[var(--indigo-mid)]"></span>
            <span class="text-[var(--indigo-mid)] text-[10px] font-bold tracking-[0.28em] uppercase">Banking Structure · Express Fintech {{ now()->year }}</span>
        </div>
        <h1 class="hero-title mb-8">Digital<br><em class="text-[var(--indigo-mid)] not-italic">Banking</em><br><span class="text-white/20">Evolution</span></h1>
        <div class="flex flex-wrap gap-3 mb-10">
            @foreach([['Neobanks','Digital-Native'],['Fintech','Disruption'],['AI','Automation'],['Open API','Ecosystem']] as [$l,$s])
            <div class="bg-[var(--indigo)]/10 border border-[var(--indigo)]/30 px-5 py-2.5 flex flex-col items-center gap-0.5">
                <span class="text-[var(--indigo-mid)] text-[13px] font-bold tracking-widest uppercase">{{ $l }}</span>
                <span class="text-white/30 text-[9px] tracking-wider">{{ $s }}</span>
            </div>
            @endforeach
        </div>
        <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-6">
            <p class="max-w-lg text-white/50 text-sm font-light leading-relaxed border-l border-[var(--indigo-mid)] pl-4">The digitisation of banking is not merely a channel shift — it is a fundamental restructuring of cost curves, competitive dynamics, and customer expectations that is reshaping the entire industry.</p>
            <div class="flex flex-col items-start md:items-end gap-1.5 flex-shrink-0 text-[10px] tracking-widest uppercase">
                <span class="text-white/35">{{ seoUpdateDate('structure-digital-evolution') }}</span>
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
        @foreach([['#overview','Overview',true],['#drivers','Key Drivers',false],['#neobanks','Neobanks',false],['#ai','AI & Automation',false],['#outlook','Outlook',false]] as [$href,$label,$active])
        <a href="{{ $href }}" class="flex-shrink-0 text-[10px] font-bold tracking-[0.18em] uppercase px-5 py-4 border-b-2 whitespace-nowrap transition-colors duration-200 no-underline {{ $active ? 'text-[var(--indigo)] border-[var(--indigo)]' : 'text-[var(--text-muted)] border-transparent hover:text-[var(--navy)]' }}">{{ $label }}</a>
        @endforeach
    </div>
</nav>

<section class="py-20 px-8 md:px-16 bg-[var(--bg-surface)] border-b border-[var(--border)] relative overflow-hidden" id="overview">
    <div class="absolute top-0 right-10 fonttitle font-black leading-none text-[var(--navy)]/[0.04] select-none pointer-events-none" style="font-size:180px">01</div>
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="flex items-center gap-2.5 mb-3"><span class="w-6 h-px bg-[var(--indigo)]"></span><span class="text-[var(--indigo)] text-[10px] font-bold tracking-[0.28em] uppercase">Chapter 01</span></div>
        <h2 class="fonttitle text-4xl md:text-[50px] font-bold leading-tight tracking-tight text-[var(--navy)] mb-4">The Digital <em class="text-[var(--indigo)]">Shift</em></h2>
        <p class="text-[var(--text-muted)] text-sm font-light leading-relaxed max-w-2xl mb-12">Banking is undergoing its most profound structural transformation since the introduction of ATMs — driven simultaneously by customer behaviour, technology capability, and new entrants.</p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-14">
            <div>
                <p class="text-[var(--text-body)] text-sm font-light leading-relaxed mb-4">The transition from <strong class="font-semibold text-[var(--navy)]">branch-centric to mobile-first</strong> banking has compressed cost curves dramatically. Digital-native banks operate at cost-to-income ratios of 35–42%, versus 55–65% for legacy incumbents — a structural advantage that compounds over time.</p>
                <p class="text-[var(--text-body)] text-sm font-light leading-relaxed mb-4">Meanwhile, <strong class="font-semibold text-[var(--navy)]">fintech challengers</strong> have unbundled the traditional bank product stack — attacking the most profitable segments (payments, personal lending, FX) with superior UX and lower prices, forcing incumbents to respond through their own digital investment or acquisition.</p>
                <div class="border border-[var(--indigo)]/25 bg-[var(--indigo-light)] px-5 py-4 mt-6">
                    <div class="text-[var(--indigo)] text-[9px] font-bold tracking-[0.22em] uppercase mb-1.5">Scale of Change</div>
                    <p class="text-[var(--text-body)] text-sm leading-relaxed">Global digital banking users surpassed <strong class="text-[var(--navy)] font-semibold">3.6 billion</strong> in 2025. Mobile banking transactions now account for <strong class="text-[var(--navy)] font-semibold">over 70%</strong> of all retail banking interactions at major global banks.</p>
                </div>
            </div>
            <div class="flex flex-col gap-3">
                @foreach([['3.6B','Digital banking users globally — 2025','indigo'],['35–42%','CIR for top digital-native banks','navy'],['$380B','Global fintech investment 2020–2025','navy-soft']] as [$v,$l,$c])
                <div class="p-7 bg-white border-l-4 border-[var(--{{ $c }})] shadow-[var(--shadow-sm)]">
                    <div class="fonttitle text-5xl font-black text-[var(--{{ $c }})] leading-none mb-1.5">{{ $v }}</div>
                    <div class="text-[var(--text-muted)] text-[11px] uppercase tracking-widest">{{ $l }}</div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section class="py-20 px-8 md:px-16 bg-white border-b border-[var(--border)] relative overflow-hidden" id="drivers">
    <div class="absolute top-0 right-10 fonttitle font-black leading-none text-[var(--navy)]/[0.03] select-none pointer-events-none" style="font-size:180px">02</div>
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="flex items-center gap-2.5 mb-3"><span class="w-6 h-px bg-[var(--indigo)]"></span><span class="text-[var(--indigo)] text-[10px] font-bold tracking-[0.28em] uppercase">Chapter 02</span></div>
        <h2 class="fonttitle text-4xl md:text-[50px] font-bold leading-tight tracking-tight text-[var(--navy)] mb-4">Key <em class="text-[var(--indigo)]">Drivers</em></h2>
        <p class="text-[var(--text-muted)] text-sm font-light leading-relaxed max-w-2xl mb-12">Four structural forces are accelerating digital banking adoption and reshaping competitive dynamics.</p>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-px bg-[var(--border)]">
            @foreach([
            ['01','Customer Behaviour', 'Digital-native millennials and Gen-Z now form the largest banking demographic. They demand mobile-first, real-time, and frictionless experiences as baseline expectations.'],
            ['02','Cloud Infrastructure','Cloud adoption has slashed the cost of building and scaling banking technology — enabling neobanks to launch with 10× lower IT capex than legacy peers.'],
            ['03','API Ecosystems', 'Open banking mandates and BaaS (Banking-as-a-Service) platforms enable rapid product innovation and distribution through third-party channels.'],
            ['04','Regulatory Support', 'PSD2 in Europe and open banking frameworks globally have forced data portability — leveling the playing field for challengers against incumbent data moats.'],
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

<section class="py-20 px-8 md:px-16 bg-[var(--bg-surface)] border-b border-[var(--border)] relative overflow-hidden" id="neobanks">
    <div class="absolute top-0 right-10 fonttitle font-black leading-none text-[var(--navy)]/[0.04] select-none pointer-events-none" style="font-size:180px">03</div>
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="flex items-center gap-2.5 mb-3"><span class="w-6 h-px bg-[var(--navy)]"></span><span class="text-[var(--navy)] text-[10px] font-bold tracking-[0.28em] uppercase">Chapter 03</span></div>
        <h2 class="fonttitle text-4xl md:text-[50px] font-bold leading-tight tracking-tight text-[var(--navy)] mb-4">Neobanks & <em class="text-[var(--indigo)]">Challengers</em></h2>
        <p class="text-[var(--text-muted)] text-sm font-light leading-relaxed max-w-2xl mb-10">Digital-native banks have accumulated hundreds of millions of customers — but profitability remains the defining challenge.</p>
        <div class="border border-[var(--border)] overflow-hidden shadow-[var(--shadow-sm)] mb-10">
            <div class="bg-[var(--bg-surface)] px-5 py-3 flex items-center justify-between border-b border-[var(--border)]">
                <h4 class="text-[var(--navy)] text-xs font-bold tracking-[0.16em] uppercase">Neobank Landscape — 2025</h4>
                <span class="text-[var(--indigo)] text-[10px] tracking-widest uppercase">Selected Players</span>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-sm border-collapse">
                    <thead>
                        <tr class="bg-[var(--bg-muted)] border-b border-[var(--border)]">
                            <th class="text-left px-5 py-3 text-[var(--text-muted)] text-[9.5px] font-bold tracking-[0.12em] uppercase">Bank</th>
                            <th class="text-left px-5 py-3 text-[var(--text-muted)] text-[9.5px] font-bold tracking-[0.12em] uppercase">Customers</th>
                            <th class="text-left px-5 py-3 text-[var(--text-muted)] text-[9.5px] font-bold tracking-[0.12em] uppercase">CIR</th>
                            <th class="text-left px-5 py-3 text-[var(--text-muted)] text-[9.5px] font-bold tracking-[0.12em] uppercase">Profitable?</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach([
                        ['Nubank (Brazil)','105M','38%','Yes — since 2023'],
                        ['Revolut (UK)', '45M', '42%','Yes — since 2021'],
                        ['Chime (US)', '38M', '51%','Near breakeven'],
                        ['N26 (Germany)', '8M', '68%','Not yet'],
                        ['Monzo (UK)', '9M', '61%','Yes — since 2024'],
                        ] as [$b,$c,$cir,$p])
                        <tr class="border-b border-[var(--border)]/60 hover:bg-[var(--bg-surface)] transition-colors">
                            <td class="px-5 py-3 font-semibold text-[var(--navy)] text-[13px]">{{ $b }}</td>
                            <td class="px-5 py-3 text-[var(--text-body)] text-[13px]">{{ $c }}</td>
                            <td class="px-5 py-3 text-[var(--indigo)] font-semibold text-[13px]">{{ $cir }}</td>
                            <td class="px-5 py-3 text-[var(--text-body)] text-[13px]">{{ $p }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<section class="py-20 px-8 md:px-16 bg-white border-b border-[var(--border)] relative overflow-hidden" id="ai">
    <div class="absolute top-0 right-10 fonttitle font-black leading-none text-[var(--navy)]/[0.03] select-none pointer-events-none" style="font-size:180px">04</div>
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="flex items-center gap-2.5 mb-3"><span class="w-6 h-px bg-[var(--indigo)]"></span><span class="text-[var(--indigo)] text-[10px] font-bold tracking-[0.28em] uppercase">Chapter 04</span></div>
        <h2 class="fonttitle text-4xl md:text-[50px] font-bold leading-tight tracking-tight text-[var(--navy)] mb-4">AI & <em class="text-[var(--indigo)]">Automation</em></h2>
        <p class="text-[var(--text-muted)] text-sm font-light leading-relaxed max-w-2xl mb-12">Artificial intelligence is the next major cost and revenue lever — early movers are opening a structural efficiency gap.</p>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-px bg-[var(--border)]">
            @foreach([
            ['01','Credit Decisioning', 'ML models process thousands of data points in milliseconds — enabling faster approvals, lower NPLs, and expanded credit access to thin-file customers.'],
            ['02','Fraud Detection', 'Real-time transaction monitoring using neural networks has reduced fraud losses by 20–40% at banks with mature AI programmes.'],
            ['03','Customer Service', 'Generative AI assistants now handle 60–80% of routine customer queries at leading digital banks — significantly reducing cost-to-serve.'],
            ['04','Cost Reduction', 'McKinsey estimates AI could deliver $200–$340B in annual value for global banking through productivity gains and cost reduction by 2030.'],
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
        <h2 class="fonttitle text-4xl md:text-[50px] font-bold leading-tight tracking-tight text-[var(--navy)] mb-4">Digital <em class="text-[var(--indigo)]">Outlook {{ now()->year }}</em></h2>
        <p class="text-[var(--text-muted)] text-sm font-light leading-relaxed max-w-2xl mb-10">The pace of digital transformation will accelerate — the gap between leaders and laggards is becoming a structural, not cyclical, performance divide.</p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-14">
            <ul class="space-y-3">
                @php $year = now()->year; @endphp
                @foreach([
                ['Embedded finance', 'Banking products embedded into non-financial platforms (e-commerce, mobility, healthcare) will grow to $7T by 2030.'],
                ['GenAI deployment', "Banks deploying generative AI at scale in {$year} — targeting compliance, code generation, and personalised advice."],
                ['Branch rationalisation','Top-5 US banks closed 2,400 branches between 2020–2025. Further consolidation expected as digital reaches 85%+ penetration.'],
                ['Consolidation', 'M&A activity accelerating — larger digital banks acquiring specialised fintechs to fill product gaps and expand distribution.'],
                ['Regulatory scrutiny', 'Regulators globally tightening oversight of AI models in credit and the operational risks of cloud-concentration.'],
                ] as [$t,$b])
                <li class="flex gap-3 items-start text-sm font-light text-[var(--text-muted)] leading-relaxed">
                    <span class="text-[var(--indigo)] font-semibold mt-0.5 flex-shrink-0">→</span>
                    <span><strong class="text-[var(--navy)] font-semibold">{{ $t }}</strong> — {{ $b }}</span>
                </li>
                @endforeach
            </ul>
            <div>
                <div class="border border-[var(--indigo)]/20 bg-[var(--indigo-light)] px-5 py-5 mb-6">
                    <div class="text-[var(--indigo)] text-[9.5px] font-bold tracking-[0.22em] uppercase mb-2">Key Insight</div>
                    <p class="text-[var(--text-body)] text-sm leading-relaxed">By {{ now()->year + 1 }}, <strong class="text-[var(--navy)] font-semibold">CIR will be the primary valuation differentiator</strong> among retail banks — institutions that have made the digital investment will trade at a structural premium to those still carrying legacy cost structures.</p>
                </div>
                <div class="flex flex-wrap gap-2">
                    @foreach(['Neobanks','Open Banking','AI in Banking','Embedded Finance','BaaS','Digital CIR'] as $tag)
                    <span class="text-[10px] font-bold tracking-[0.16em] uppercase px-3.5 py-1.5 border border-[var(--border)] text-[var(--text-muted)] hover:border-[var(--indigo)] hover:text-[var(--indigo)] transition-colors cursor-default">{{ $tag }}</span>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-[var(--bg-surface)] border-t border-[var(--border)]">
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 divide-y md:divide-y-0 md:divide-x divide-[var(--border)]">
        @php $year = now()->year; @endphp
        @foreach([
        ['Banking Structure', route('banking.structure-open_banking'), 'Open Banking', 'API-driven data sharing transforming the competitive banking landscape.'],
        ['Banking Structure', route('banking.structure-retail_commercial'), 'Retail vs Commercial', 'Key structural differences across the two main banking segments.'],
        ['Banking Analysis', route('banking.analysis-global_outlook'), 'Global Banking Outlook', "Macro forces and trends shaping banking profitability in {$year}."],
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