@extends('layouts.backing')

@section('title', 'Cross-border Payments')
@section('description', 'SWIFT, correspondent banking, and the rise of real-time cross-border rails — how money moves across currencies and jurisdictions.')
@section('content')

<section class="relative min-h-[80vh] flex flex-col justify-end bg-[var(--navy)] overflow-hidden px-8 md:px-16 pb-16 pt-18">
    <div class="absolute top-0 right-0 fonttitle font-black leading-none text-white/[0.03] select-none pointer-events-none tracking-tight" style="font-size:clamp(160px,28vw,380px)">FX</div>
    <div class="absolute inset-0 pointer-events-none" style="background:radial-gradient(ellipse 65% 55% at 72% 15%,rgba(79,70,229,0.13) 0%,transparent 60%),radial-gradient(ellipse 40% 40% at 8% 85%,rgba(15,31,53,0.5) 0%,transparent 55%)"></div>
    <div class="relative z-10 max-w-7xl mx-auto w-full">
        <div class="flex items-center gap-3 mb-6">
            <span class="w-8 h-px bg-[var(--indigo-mid)]"></span>
            <span class="text-[var(--indigo-mid)] text-[10px] font-bold tracking-[0.28em] uppercase">Banking Products · Express Fintech {{ now()->year }}</span>
        </div>
        <h1 class="hero-title mb-8">Cross-border<br><em class="text-[var(--indigo-mid)] not-italic">Payments</em><br><span class="text-white/20">& FX</span></h1>
        <div class="flex flex-wrap gap-3 mb-10">
            @foreach([['SWIFT','Messaging'],['Correspondent','Banking'],['FX','Conversion'],['Real-time','New Rails']] as [$l,$s])
            <div class="bg-[var(--indigo)]/10 border border-[var(--indigo)]/30 px-5 py-2.5 flex flex-col items-center gap-0.5">
                <span class="text-[var(--indigo-mid)] text-[13px] font-bold tracking-widest uppercase">{{ $l }}</span>
                <span class="text-white/30 text-[9px] tracking-wider">{{ $s }}</span>
            </div>
            @endforeach
        </div>
        <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-6">
            <p class="max-w-lg text-white/50 text-sm font-light leading-relaxed border-l border-[var(--indigo-mid)] pl-4">Cross-border payments process $156 trillion annually — but remain slow, expensive, and opaque. New infrastructure is fundamentally disrupting the correspondent banking model that has dominated for decades.</p>
            <div class="flex flex-col items-start md:items-end gap-1.5 flex-shrink-0 text-[10px] tracking-widest uppercase">
                <span class="text-white/35">{{ seoUpdateDate('products-crossborder-payment') }}</span>
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
        @foreach([['#overview','Overview',true],['#correspondent','Correspondent Banking',false],['#swift','SWIFT & ISO 20022',false],['#newrails','New Rails',false],['#outlook','Outlook',false]] as [$href,$label,$active])
        <a href="{{ $href }}" class="flex-shrink-0 text-[10px] font-bold tracking-[0.18em] uppercase px-5 py-4 border-b-2 whitespace-nowrap transition-colors duration-200 no-underline {{ $active ? 'text-[var(--indigo)] border-[var(--indigo)]' : 'text-[var(--text-muted)] border-transparent hover:text-[var(--navy)]' }}">{{ $label }}</a>
        @endforeach
    </div>
</nav>

<section class="py-20 px-8 md:px-16 bg-[var(--bg-surface)] border-b border-[var(--border)] relative overflow-hidden" id="overview">
    <div class="absolute top-0 right-10 fonttitle font-black leading-none text-[var(--navy)]/[0.04] select-none pointer-events-none" style="font-size:180px">01</div>
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="flex items-center gap-2.5 mb-3"><span class="w-6 h-px bg-[var(--indigo)]"></span><span class="text-[var(--indigo)] text-[10px] font-bold tracking-[0.28em] uppercase">Chapter 01</span></div>
        <h2 class="fonttitle text-4xl md:text-[50px] font-bold leading-tight tracking-tight text-[var(--navy)] mb-4">The Payments <em class="text-[var(--indigo)]">Landscape</em></h2>
        <p class="text-[var(--text-muted)] text-sm font-light leading-relaxed max-w-2xl mb-12">Cross-border payments underpin global trade and remittances — yet the infrastructure is often 50 years old, with settlement times of 1–5 days and fees of 1–3% that penalise the most financially vulnerable users.</p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-14">
            <div>
                <p class="text-[var(--text-body)] text-sm font-light leading-relaxed mb-4">The cross-border payments market processes <strong class="font-semibold text-[var(--navy)]">$156 trillion annually</strong> across retail remittances, corporate B2B payments, and financial institution settlement flows. Banks earn revenues through FX spreads, payment fees, and correspondent banking charges — a combined global revenue pool of approximately <strong class="font-semibold text-[var(--navy)]">$240 billion</strong>.</p>
                <p class="text-[var(--text-body)] text-sm font-light leading-relaxed mb-4">The traditional model is under pressure from all directions — real-time payment networks, fintechs like Wise and Airwallex, and central bank initiatives including CBDC cross-border pilots are all competing to displace the incumbent correspondent banking model.</p>
                <div class="border border-[var(--indigo)]/25 bg-[var(--indigo-light)] px-5 py-4 mt-6">
                    <div class="text-[var(--indigo)] text-[9px] font-bold tracking-[0.22em] uppercase mb-1.5">G20 Target</div>
                    <p class="text-[var(--text-body)] text-sm leading-relaxed">The G20 Roadmap for Enhancing Cross-Border Payments targets <strong class="text-[var(--navy)] font-semibold">payments under 1 hour, cost below 1%, 100% traceability</strong> by 2027 — a radical improvement from current benchmarks.</p>
                </div>
            </div>
            <div class="flex flex-col gap-3">
                @foreach([['$156T','Annual cross-border payment flows — 2025','indigo'],['$240B','Global cross-border payments revenue pool','navy'],['1–3%','Average consumer remittance fee — 2025','navy-soft']] as [$v,$l,$c])
                <div class="p-7 bg-white border-l-4 border-[var(--{{ $c }})] shadow-[var(--shadow-sm)]">
                    <div class="fonttitle text-5xl font-black text-[var(--{{ $c }})] leading-none mb-1.5">{{ $v }}</div>
                    <div class="text-[var(--text-muted)] text-[11px] uppercase tracking-widest">{{ $l }}</div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section class="py-20 px-8 md:px-16 bg-white border-b border-[var(--border)] relative overflow-hidden" id="correspondent">
    <div class="absolute top-0 right-10 fonttitle font-black leading-none text-[var(--navy)]/[0.03] select-none pointer-events-none" style="font-size:180px">02</div>
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="flex items-center gap-2.5 mb-3"><span class="w-6 h-px bg-[var(--indigo)]"></span><span class="text-[var(--indigo)] text-[10px] font-bold tracking-[0.28em] uppercase">Chapter 02</span></div>
        <h2 class="fonttitle text-4xl md:text-[50px] font-bold leading-tight tracking-tight text-[var(--navy)] mb-4">Correspondent <em class="text-[var(--indigo)]">Banking</em></h2>
        <p class="text-[var(--text-muted)] text-sm font-light leading-relaxed max-w-2xl mb-12">The traditional cross-border model relies on a chain of correspondent banks, each holding nostro/vostro accounts, to settle international payments.</p>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-px bg-[var(--border)]">
            @foreach([
            ['01','Nostro / Vostro', 'Each bank maintains pre-funded accounts with correspondent banks in foreign currencies — tying up significant liquidity to enable international settlement.'],
            ['02','Payment Chain', 'A payment from Thailand to Brazil may pass through 3–5 correspondent banks, each adding fees and settlement delays along the chain.'],
            ['03','FX Conversion', 'Currency conversion happens at various points in the chain, with each bank earning a spread. Lack of transparency makes true cost difficult for clients to assess.'],
            ['04','De-risking', 'Compliance costs are driving banks to exit correspondent relationships in high-risk corridors — creating payment deserts in vulnerable markets.'],
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

<section class="py-20 px-8 md:px-16 bg-[var(--bg-surface)] border-b border-[var(--border)] relative overflow-hidden" id="swift">
    <div class="absolute top-0 right-10 fonttitle font-black leading-none text-[var(--navy)]/[0.04] select-none pointer-events-none" style="font-size:180px">03</div>
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="flex items-center gap-2.5 mb-3"><span class="w-6 h-px bg-[var(--navy)]"></span><span class="text-[var(--navy)] text-[10px] font-bold tracking-[0.28em] uppercase">Chapter 03</span></div>
        <h2 class="fonttitle text-4xl md:text-[50px] font-bold leading-tight tracking-tight text-[var(--navy)] mb-4">SWIFT & <em class="text-[var(--indigo)]">ISO 20022</em></h2>
        <p class="text-[var(--text-muted)] text-sm font-light leading-relaxed max-w-2xl mb-12">SWIFT connects 11,000+ institutions in 200+ countries — and the ISO 20022 migration is its most significant upgrade in decades, enabling richer data and faster processing.</p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-14">
            <div>
                <p class="text-[var(--text-body)] text-sm font-light leading-relaxed mb-4">SWIFT's <strong class="font-semibold text-[var(--navy)]">GPI (Global Payments Innovation)</strong> initiative has already significantly improved cross-border payment speed — with 50% of GPI payments settling within 30 minutes and 40% within 5 minutes as of 2025.</p>
                <p class="text-[var(--text-body)] text-sm font-light leading-relaxed mb-4">The migration to <strong class="font-semibold text-[var(--navy)]">ISO 20022</strong> — the new universal financial messaging standard — is transforming the data richness of payment messages, enabling straight-through processing, better fraud detection, and compliance automation.</p>
                <div class="border border-[var(--indigo)]/25 bg-[var(--indigo-light)] px-5 py-4 mt-6">
                    <div class="text-[var(--indigo)] text-[9px] font-bold tracking-[0.22em] uppercase mb-1.5">ISO 20022 Impact</div>
                    <p class="text-[var(--text-body)] text-sm leading-relaxed">Richer structured data in ISO 20022 messages enables <strong class="text-[var(--navy)] font-semibold">automated AML screening and compliance checks</strong> — reducing the manual review burden that currently adds cost and delay to international payments.</p>
                </div>
            </div>
            <ul class="space-y-3">
                @foreach([
                ['GPI Tracker', 'End-to-end payment visibility — banks and corporates can track cross-border payments in real time, dramatically improving transparency.'],
                ['Pre-validation', 'SWIFT pre-validation checks beneficiary account details before sending — reducing failed payments by up to 30%.'],
                ['Instant SWIFT', 'SWIFT Go enables low-value instant cross-border payments — targeting the consumer and SME segments traditionally dominated by fintechs.'],
                ['CBDC interlinking','SWIFT exploring interoperability between domestic CBDC networks — potentially enabling instant central bank settlement of cross-border flows.'],
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

<section class="py-20 px-8 md:px-16 bg-white border-b border-[var(--border)] relative overflow-hidden" id="newrails">
    <div class="absolute top-0 right-10 fonttitle font-black leading-none text-[var(--navy)]/[0.03] select-none pointer-events-none" style="font-size:180px">04</div>
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="flex items-center gap-2.5 mb-3"><span class="w-6 h-px bg-[var(--indigo)]"></span><span class="text-[var(--indigo)] text-[10px] font-bold tracking-[0.28em] uppercase">Chapter 04</span></div>
        <h2 class="fonttitle text-4xl md:text-[50px] font-bold leading-tight tracking-tight text-[var(--navy)] mb-4">New <em class="text-[var(--indigo)]">Payment Rails</em></h2>
        <p class="text-[var(--text-muted)] text-sm font-light leading-relaxed max-w-2xl mb-12">Alternative rails are disrupting the correspondent model — offering faster, cheaper, more transparent cross-border settlement.</p>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-px bg-[var(--border)]">
            @foreach([
            ['01','Fintech Multilateral','Wise, Airwallex, and Nium use local payment networks to avoid correspondent chains — settling via local rails and netting FX exposure internally.'],
            ['02','RTP Networks', 'Bilateral real-time payment linkages (e.g., PayNow-PromptPay between Singapore & Thailand) enable instant, low-cost cross-border transfers.'],
            ['03','Stablecoins', 'USD-pegged stablecoins enabling near-instant, 24/7 cross-border settlement at near-zero cost — gaining traction in B2B corridors.'],
            ['04','mCBDC', 'Multi-CBDC platforms (mBridge, Project Dunbar) enabling direct central bank settlement between countries — bypassing the correspondent network entirely.'],
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
        <h2 class="fonttitle text-4xl md:text-[50px] font-bold leading-tight tracking-tight text-[var(--navy)] mb-4">Payments <em class="text-[var(--indigo)]">Outlook {{ now()->year }}</em></h2>
        <p class="text-[var(--text-muted)] text-sm font-light leading-relaxed max-w-2xl mb-10">The $240B cross-border payments revenue pool is under structural pressure — speed, transparency, and cost improvements are compressing margins industry-wide.</p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-14">
            <ul class="space-y-3">
                @php
                $year = now()->year;
                $next2 = $year + 2;
                @endphp
                @foreach([
                ['FX margin compression', 'Fintech competition has reduced retail FX spreads by 60–70% over the past decade — banks must compete on speed and service, not opacity.'],
                ['Stablecoin regulation', "{$year}–{$next2} sees major stablecoin regulatory frameworks in the US, EU, and UK — opening the door for mainstream institutional adoption."],
                ['RTP bilateral expansion','G20 priority corridors seeing rapid real-time payment linkage buildout — particularly in Asia Pacific and between Southeast Asian economies.'],
                ['Sanctions complexity', 'Geopolitical fragmentation increasing compliance burden — sanctions screening costs rising as correspondent banks maintain tighter controls.'],
                ['AI fraud prevention', 'Real-time AI models blocking payment fraud in cross-border flows — reducing losses while accelerating legitimate payment processing.'],
                ] as [$t,$b])
                <li class="flex gap-3 items-start text-sm font-light text-[var(--text-muted)] leading-relaxed">
                    <span class="text-[var(--indigo)] font-semibold mt-0.5 flex-shrink-0">→</span>
                    <span><strong class="text-[var(--navy)] font-semibold">{{ $t }}</strong> — {{ $b }}</span>
                </li>
                @endforeach
            </ul>
            <div>
                <div class="border border-[var(--indigo)]/20 bg-[var(--indigo-light)] px-5 py-5 mb-6">
                    <div class="text-[var(--indigo)] text-[9.5px] font-bold tracking-[0.22em] uppercase mb-2">Key Threat</div>
                    <p class="text-[var(--text-body)] text-sm leading-relaxed">Banks that rely on <strong class="text-[var(--navy)] font-semibold">FX spread opacity</strong> as a primary revenue source will see accelerating margin pressure — transparency mandates (UK PSR, EU FIDA) will force disclosure of total transaction costs including exchange rate markups.</p>
                </div>
                <div class="flex flex-wrap gap-2">
                    @foreach(['SWIFT GPI','ISO 20022','Stablecoins','mCBDC','RTP','FX Margins'] as $tag)
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
        ['Banking Products', route('banking.products-corporate_services'), 'Corporate Banking Services','Cash management, trade finance, and FX for corporate clients.'],
        ['Banking Structure', route('banking.structure-open_banking'), 'Open Banking', 'How API frameworks are reshaping payment distribution.'],
        ['Banking Structure', route('banking.structure-digital_evolution'), 'Digital Banking Evolution', 'How digital infrastructure is transforming payment economics.'],
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