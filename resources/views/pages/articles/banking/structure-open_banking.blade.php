@extends('layouts.backing')

@section('title', 'Open Banking')
@section('description', 'API-driven data sharing is transforming the competitive landscape — enabling fintech integration and shifting power toward customers.')
@section('content')

<section class="relative min-h-[80vh] flex flex-col justify-end bg-[var(--navy)] overflow-hidden px-8 md:px-18 pb-16 pt-18">
    <div class="absolute top-0 right-0 fonttitle font-black leading-none text-white/[0.03] select-none pointer-events-none tracking-tight" style="font-size:clamp(160px,28vw,380px)">OPN</div>
    <div class="absolute inset-0 pointer-events-none" style="background:radial-gradient(ellipse 65% 55% at 72% 15%,rgba(79,70,229,0.13) 0%,transparent 60%),radial-gradient(ellipse 40% 40% at 8% 85%,rgba(15,31,53,0.5) 0%,transparent 55%)"></div>
    <div class="relative z-10 max-w-7xl mx-auto w-full">
        <div class="flex items-center gap-3 mb-6">
            <span class="w-8 h-px bg-[var(--indigo-mid)]"></span>
            <span class="text-[var(--indigo-mid)] text-[10px] font-bold tracking-[0.28em] uppercase">Banking Structure · Express Fintech {{ now()->year }}</span>
        </div>
        <h1 class="hero-title mb-8">Open<br><em class="text-[var(--indigo-mid)] not-italic">Banking</em><br><span class="text-white/20">Framework</span></h1>
        <div class="flex flex-wrap gap-3 mb-10">
            @foreach([['APIs','Data Sharing'],['PSD2','Regulation'],['BaaS','Platform'],['Consent','Customer Control']] as [$l,$s])
            <div class="bg-[var(--indigo)]/10 border border-[var(--indigo)]/30 px-5 py-2.5 flex flex-col items-center gap-0.5">
                <span class="text-[var(--indigo-mid)] text-[13px] font-bold tracking-widest uppercase">{{ $l }}</span>
                <span class="text-white/30 text-[9px] tracking-wider">{{ $s }}</span>
            </div>
            @endforeach
        </div>
        <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-6">
            <p class="max-w-lg text-white/50 text-sm font-light leading-relaxed border-l border-[var(--indigo-mid)] pl-4">Open banking dismantles the traditional data moat of incumbent banks — mandating that customer financial data flow freely via standardised APIs, fundamentally altering competitive dynamics across the industry.</p>
            <div class="flex flex-col items-start md:items-end gap-1.5 flex-shrink-0 text-[10px] tracking-widest uppercase">
                <span class="text-white/35">{{ seoUpdateDate('structure-open-banking') }}</span>
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
        @foreach([['#overview','Overview',true],['#regulation','Regulation',false],['#apis','API Ecosystem',false],['#impact','Market Impact',false],['#outlook','Outlook',false]] as [$href,$label,$active])
        <a href="{{ $href }}" class="flex-shrink-0 text-[10px] font-bold tracking-[0.18em] uppercase px-5 py-4 border-b-2 whitespace-nowrap transition-colors duration-200 no-underline {{ $active ? 'text-[var(--indigo)] border-[var(--indigo)]' : 'text-[var(--text-muted)] border-transparent hover:text-[var(--navy)]' }}">{{ $label }}</a>
        @endforeach
    </div>
</nav>

<section class="py-20 px-8 md:px-16 bg-[var(--bg-surface)] border-b border-[var(--border)] relative overflow-hidden" id="overview">
    <div class="absolute top-0 right-10 fonttitle font-black leading-none text-[var(--navy)]/[0.04] select-none pointer-events-none" style="font-size:180px">01</div>
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="flex items-center gap-2.5 mb-3"><span class="w-6 h-px bg-[var(--indigo)]"></span><span class="text-[var(--indigo)] text-[10px] font-bold tracking-[0.28em] uppercase">Chapter 01</span></div>
        <h2 class="fonttitle text-4xl md:text-[50px] font-bold leading-tight tracking-tight text-[var(--navy)] mb-4">What is <em class="text-[var(--indigo)]">Open Banking?</em></h2>
        <p class="text-[var(--text-muted)] text-sm font-light leading-relaxed max-w-2xl mb-12">Open banking is a regulatory and technology framework that requires financial institutions to share customer financial data with authorised third parties via standardised APIs — with customer consent.</p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-14">
            <div>
                <p class="text-[var(--text-body)] text-sm font-light leading-relaxed mb-4">For decades, banks held an impenetrable <strong class="font-semibold text-[var(--navy)]">data moat</strong> — customer transaction history, spending patterns, and financial behaviour were locked within proprietary systems. Open banking dismantles this advantage by making data portable and customer-controlled.</p>
                <p class="text-[var(--text-body)] text-sm font-light leading-relaxed mb-4">The result is a <strong class="font-semibold text-[var(--navy)]">platform economy for financial services</strong> — where banks become infrastructure providers and fintechs build customer-facing experiences on top of their data and payment rails.</p>
                <div class="border border-[var(--indigo)]/25 bg-[var(--indigo-light)] px-5 py-4 mt-6">
                    <div class="text-[var(--indigo)] text-[9px] font-bold tracking-[0.22em] uppercase mb-1.5">Adoption 2025</div>
                    <p class="text-[var(--text-body)] text-sm leading-relaxed">Over <strong class="text-[var(--navy)] font-semibold">60 countries</strong> now have open banking frameworks in place or under development. The UK leads with <strong class="text-[var(--navy)] font-semibold">12M+ active open banking users</strong> and 11B+ API calls annually.</p>
                </div>
            </div>
            <div class="flex flex-col gap-3">
                @foreach([['60+','Countries with open banking frameworks — 2025','indigo'],['12M+','Active open banking users — UK alone','navy'],['11B+','Annual open banking API calls — UK 2025','navy-soft']] as [$v,$l,$c])
                <div class="p-7 bg-white border-l-4 border-[var(--{{ $c }})] shadow-[var(--shadow-sm)]">
                    <div class="fonttitle text-5xl font-black text-[var(--{{ $c }})] leading-none mb-1.5">{{ $v }}</div>
                    <div class="text-[var(--text-muted)] text-[11px] uppercase tracking-widest">{{ $l }}</div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section class="py-20 px-8 md:px-16 bg-white border-b border-[var(--border)] relative overflow-hidden" id="regulation">
    <div class="absolute top-0 right-10 fonttitle font-black leading-none text-[var(--navy)]/[0.03] select-none pointer-events-none" style="font-size:180px">02</div>
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="flex items-center gap-2.5 mb-3"><span class="w-6 h-px bg-[var(--indigo)]"></span><span class="text-[var(--indigo)] text-[10px] font-bold tracking-[0.28em] uppercase">Chapter 02</span></div>
        <h2 class="fonttitle text-4xl md:text-[50px] font-bold leading-tight tracking-tight text-[var(--navy)] mb-4">Regulatory <em class="text-[var(--indigo)]">Landscape</em></h2>
        <p class="text-[var(--text-muted)] text-sm font-light leading-relaxed max-w-2xl mb-12">Open banking mandates vary in scope and approach across jurisdictions — from prescriptive API standards to market-led frameworks.</p>
        <div class="border border-[var(--border)] overflow-hidden shadow-[var(--shadow-sm)]">
            <div class="bg-[var(--bg-surface)] px-5 py-3 flex items-center justify-between border-b border-[var(--border)]">
                <h4 class="text-[var(--navy)] text-xs font-bold tracking-[0.16em] uppercase">Global Regulatory Comparison</h4>
                <span class="text-[var(--indigo)] text-[10px] tracking-widest uppercase">2025</span>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-sm border-collapse">
                    <thead>
                        <tr class="bg-[var(--bg-muted)] border-b border-[var(--border)]">
                            <th class="text-left px-5 py-3 text-[var(--text-muted)] text-[9.5px] font-bold tracking-[0.12em] uppercase">Region</th>
                            <th class="text-left px-5 py-3 text-[var(--text-muted)] text-[9.5px] font-bold tracking-[0.12em] uppercase">Framework</th>
                            <th class="text-left px-5 py-3 text-[var(--text-muted)] text-[9.5px] font-bold tracking-[0.12em] uppercase">Approach</th>
                            <th class="text-left px-5 py-3 text-[var(--text-muted)] text-[9.5px] font-bold tracking-[0.12em] uppercase">Maturity</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach([
                        ['UK', 'Open Banking Standard','Prescriptive — CMA9 mandated','Most mature globally'],
                        ['EU', 'PSD2 / PSD3', 'Regulatory — TPP access rights','Advanced'],
                        ['Australia', 'CDR', 'Consumer Data Right — broad scope','Growing rapidly'],
                        ['USA', 'CFPB Rule 1033', 'Market-led with emerging mandate','Early stage'],
                        ['Singapore', 'MAS API Playbook', 'Voluntary industry-led','Developing'],
                        ] as [$r,$f,$a,$m])
                        <tr class="border-b border-[var(--border)]/60 hover:bg-[var(--bg-surface)] transition-colors">
                            <td class="px-5 py-3 font-semibold text-[var(--navy)] text-[13px]">{{ $r }}</td>
                            <td class="px-5 py-3 text-[var(--indigo)] font-semibold text-[13px]">{{ $f }}</td>
                            <td class="px-5 py-3 text-[var(--text-body)] text-[13px]">{{ $a }}</td>
                            <td class="px-5 py-3 text-[var(--text-body)] text-[13px]">{{ $m }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<section class="py-20 px-8 md:px-16 bg-[var(--bg-surface)] border-b border-[var(--border)] relative overflow-hidden" id="apis">
    <div class="absolute top-0 right-10 fonttitle font-black leading-none text-[var(--navy)]/[0.04] select-none pointer-events-none" style="font-size:180px">03</div>
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="flex items-center gap-2.5 mb-3"><span class="w-6 h-px bg-[var(--navy)]"></span><span class="text-[var(--navy)] text-[10px] font-bold tracking-[0.28em] uppercase">Chapter 03</span></div>
        <h2 class="fonttitle text-4xl md:text-[50px] font-bold leading-tight tracking-tight text-[var(--navy)] mb-4">API <em class="text-[var(--indigo)]">Ecosystem</em></h2>
        <p class="text-[var(--text-muted)] text-sm font-light leading-relaxed max-w-2xl mb-12">The API layer is where open banking value is created — enabling a new class of financial products and services built on bank data and rails.</p>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-px bg-[var(--border)]">
            @foreach([
            ['01','Account Aggregation','Third-party apps consolidating a customer\'s accounts across multiple banks into a single dashboard for holistic financial management.'],
            ['02','Payment Initiation', 'TPPs triggering payments directly from bank accounts without card rails — lowering merchant fees and improving conversion.'],
            ['03','Credit Decisioning', 'Lenders accessing real-time transaction data with consent to make more accurate credit assessments for thin-file borrowers.'],
            ['04','BaaS Platforms', 'Banks-as-a-Service providers enabling non-financial companies to embed banking products — accounts, cards, lending — into their own apps.'],
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

<section class="py-20 px-8 md:px-16 bg-white border-b border-[var(--border)] relative overflow-hidden" id="impact">
    <div class="absolute top-0 right-10 fonttitle font-black leading-none text-[var(--navy)]/[0.03] select-none pointer-events-none" style="font-size:180px">04</div>
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="flex items-center gap-2.5 mb-3"><span class="w-6 h-px bg-[var(--indigo)]"></span><span class="text-[var(--indigo)] text-[10px] font-bold tracking-[0.28em] uppercase">Chapter 04</span></div>
        <h2 class="fonttitle text-4xl md:text-[50px] font-bold leading-tight tracking-tight text-[var(--navy)] mb-4">Market <em class="text-[var(--indigo)]">Impact</em></h2>
        <p class="text-[var(--text-muted)] text-sm font-light leading-relaxed max-w-2xl mb-12">Open banking is redistributing revenue pools — creating winners and losers across the value chain.</p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-14">
            <div>
                <p class="text-[var(--text-body)] text-sm font-light leading-relaxed mb-4"><strong class="font-semibold text-[var(--navy)]">Incumbents face fee compression</strong> as open banking enables direct account-to-account payments, reducing card interchange revenue. UK card payment volumes declined for the first time in 2024 as A2A payments gained share.</p>
                <p class="text-[var(--text-body)] text-sm font-light leading-relaxed mb-4"><strong class="font-semibold text-[var(--navy)]">Fintechs gain distribution</strong> — access to bank data and payment rails dramatically lowers the cost and complexity of building competing financial products.</p>
                <div class="border border-[var(--indigo)]/25 bg-[var(--indigo-light)] px-5 py-4 mt-6">
                    <div class="text-[var(--indigo)] text-[9px] font-bold tracking-[0.22em] uppercase mb-1.5">Key Risk for Incumbents</div>
                    <p class="text-[var(--text-body)] text-sm leading-relaxed">Banks risk becoming <strong class="text-[var(--navy)] font-semibold">dumb pipes</strong> — providing the regulated infrastructure while fintechs capture the customer relationship and margin. The strategic response is to compete on data intelligence, not data exclusivity.</p>
                </div>
            </div>
            <ul class="space-y-3">
                @foreach([
                ['Payment revenue loss', 'A2A payments threatening $40–60B of annual card interchange revenue in mature open banking markets.'],
                ['Data monetisation', 'Banks exploring consent-based data analytics products as a new revenue stream — offsetting fee compression.'],
                ['Customer switching', 'Open banking lowers switching friction — increasing churn pressure on incumbents with legacy products.'],
                ['Partnership models', 'Leading banks pivoting to marketplace models — distributing third-party products on their platforms.'],
                ['Regulatory arbitrage', 'BaaS-enabled fintechs can operate with lighter regulatory burden — a structural advantage in some markets.'],
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

<section class="py-20 px-8 md:px-16 bg-[var(--bg-surface)] border-b border-[var(--border)] relative overflow-hidden" id="outlook">
    <div class="absolute top-0 right-10 fonttitle font-black leading-none text-[var(--navy)]/[0.04] select-none pointer-events-none" style="font-size:180px">05</div>
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="flex items-center gap-2.5 mb-3"><span class="w-6 h-px bg-[var(--navy)]"></span><span class="text-[var(--navy)] text-[10px] font-bold tracking-[0.28em] uppercase">Chapter 05</span></div>
        <h2 class="fonttitle text-4xl md:text-[50px] font-bold leading-tight tracking-tight text-[var(--navy)] mb-4">Open Finance <em class="text-[var(--indigo)]">Outlook</em></h2>
        <p class="text-[var(--text-muted)] text-sm font-light leading-relaxed max-w-2xl mb-10">Open banking is evolving into open finance — extending data portability beyond payments into investments, insurance, mortgages, and pensions.</p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-14">
            <ul class="space-y-3">
                @foreach([
                ['Open Finance', 'UK and EU expanding data portability to investments, pensions, and insurance — creating a unified financial data layer.'],
                ['Real-time payments', 'Open banking payment initiation converging with domestic instant payment infrastructure — enabling true real-time commerce.'],
                ['Smart data', 'AI + open banking data enabling hyper-personalised financial advice at scale — the next competitive battleground.'],
                ['Global standards', 'ISO 20022 adoption driving international alignment in API standards — reducing cross-border friction for open banking services.'],
                ] as [$t,$b])
                <li class="flex gap-3 items-start text-sm font-light text-[var(--text-muted)] leading-relaxed">
                    <span class="text-[var(--indigo)] font-semibold mt-0.5 flex-shrink-0">→</span>
                    <span><strong class="text-[var(--navy)] font-semibold">{{ $t }}</strong> — {{ $b }}</span>
                </li>
                @endforeach
            </ul>
            <div>
                <div class="border border-[var(--indigo)]/20 bg-[var(--indigo-light)] px-5 py-5 mb-6">
                    <div class="text-[var(--indigo)] text-[9.5px] font-bold tracking-[0.22em] uppercase mb-2">Strategic Imperative</div>
                    <p class="text-[var(--text-body)] text-sm leading-relaxed">Banks that treat open banking purely as a <strong class="text-[var(--navy)] font-semibold">compliance obligation</strong> will be disrupted. Those that treat it as a <strong class="text-[var(--navy)] font-semibold">platform opportunity</strong> — building data-driven services and ecosystem partnerships — will emerge as structural winners.</p>
                </div>
                <div class="flex flex-wrap gap-2">
                    @foreach(['Open Finance','PSD3','BaaS','A2A Payments','API Standards','Smart Data'] as $tag)
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
        ['Banking Structure', route('banking.structure-digital_evolution'), 'Digital Banking Evolution', 'How neobanks and AI are reshaping the cost and revenue structure of banking.'],
        ['Banking Products', route('banking.products-crossborder_payments'), 'Cross-border Payments', 'SWIFT, correspondent banking, and the rise of real-time cross-border rails.'],
        ['Banking Analysis', route('banking.analysis-global_outlook'), 'Global Banking Outlook', "Macro trends and structural forces shaping banking in {$year}."],
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