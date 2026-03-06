@extends('layouts.deep-analysis')
@section('title', 'Insurance Regulatory Framework – FinReview')
@section('description', 'How insurance markets are regulated globally — state vs. federal oversight, Solvency II, NAIC, and the evolving regulatory landscape.')
@section('feature_label', 'Global Insurance Regulatory Report 2026')
@section('breadcrumb', 'Regulatory Framework')
@section('badge', 'Insurance Fundamentals')
@section('hero_title', 'Insurance Regulatory Framework: Oversight, Solvency, and Consumer Protection')
@section('hero_subtitle', 'From state-based U.S. regulation to EU Solvency II — a comprehensive analysis of the frameworks that govern how insurers operate, price, and maintain financial strength.')
@section('meta', 'January 2026 · FinReview Research · 16 min read')
@section('extra_badges')
    <span class="bg-white/10 text-navy text-[11px] font-medium px-3 py-1.5 rounded-lg border border-white/10">Regulation</span>
@endsection
@section('sidebar_toc')
    <li><a href="#us"       class="text-[13px] text-[#888] hover:text-[#4f46e5] transition-colors">U.S. Framework</a></li>
    <li><a href="#global"   class="text-[13px] text-[#888] hover:text-[#4f46e5] transition-colors">Global Frameworks</a></li>
    <li><a href="#solvency" class="text-[13px] text-[#888] hover:text-[#4f46e5] transition-colors">Solvency Requirements</a></li>
    <li><a href="#trends"   class="text-[13px] text-[#888] hover:text-[#4f46e5] transition-colors">Emerging Trends</a></li>
@endsection
@section('page_content')

<section id="us" class="mb-20 scroll-mt-28">
    <h2 class="familyfont text-[28px] font-bold border-l-4 border-[#4f46e5] pl-4 mb-6">U.S. Regulatory Framework</h2>
    <p class="text-[#6b7280] text-[15.5px] leading-[1.85] mb-6">The U.S. operates a state-based regulatory system — the only major economy without a federal insurance regulator. Each of the 50 states and D.C. maintains its own insurance department with authority over licensing, rate approval, market conduct, and solvency.</p>
    <div class="space-y-4">
        @foreach([
            ['NAIC', 'National Association of Insurance Commissioners', 'Coordinates state regulatory activity, develops model laws and regulations, maintains financial databases (IRIS ratios). Has no direct regulatory authority — influence is through model adoption.'],
            ['State Insurance Departments', 'Primary Regulator', 'License carriers and agents, approve rates and forms, conduct market conduct exams, oversee receiverships. 56 separate jurisdictions with varying stringency.'],
            ['Risk-Based Capital (RBC)', 'Solvency Standard', 'Capital requirements tied to risk profile. Four action levels (Company Action Level, Regulatory Action Level, Authorized Control Level, Mandatory Control Level) trigger increasing regulatory intervention.'],
            ['FHFA / Federal Programs', 'Limited Federal Role', 'TRIA (terrorism reinsurance), NFIP (flood), crop insurance — narrow federal programs where private market fails.'],
        ] as $row)
        <div class="bg-white rounded-xl border border-[#e5e7eb] p-6 flex items-start gap-6">
            <div class="shrink-0 text-center">
                <div class="text-navy font-bold text-[14px]">{{ $row[0] }}</div>
                <div class="text-[11px] text-[#555] mt-0.5">{{ $row[1] }}</div>
            </div>
            <div class="w-px bg-[#e5e7eb] self-stretch shrink-0"></div>
            <div class="text-[13.5px] text-[#6b7280] leading-relaxed">{{ $row[2] }}</div>
        </div>
        @endforeach
    </div>
</section>

<section id="global" class="mb-20 scroll-mt-28">
    <h2 class="familyfont text-[28px] font-bold border-l-4 border-[#4f46e5] pl-4 mb-6">Global Regulatory Frameworks</h2>
    <div class="rounded-xl border border-[#e5e7eb] overflow-hidden">
        <div class="px-6 py-3 border-b border-[#e5e7eb]" style="background:#f8f9fb">
            <span class="text-[11px] font-bold uppercase tracking-[0.12em] text-[#4f46e5]">Major Regulatory Regimes by Region</span>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-[13.5px]">
                <thead style="background:#f8f9fb"><tr class="border-b border-[#e5e7eb]">
                    <th class="text-left px-6 py-3 text-[11px] font-bold uppercase text-[#888] tracking-wider">Region</th>
                    <th class="text-left px-6 py-3 text-[11px] font-bold uppercase text-[#888] tracking-wider">Framework</th>
                    <th class="text-left px-6 py-3 text-[11px] font-bold uppercase text-[#888] tracking-wider">Key Feature</th>
                    <th class="text-right px-6 py-3 text-[11px] font-bold uppercase text-[#888] tracking-wider">Stringency</th>
                </tr></thead>
                <tbody class="divide-y divide-[#e5e7eb]">
                    @foreach([
                        ['European Union','Solvency II','3-pillar risk-based capital framework. Market-consistent valuation. ORSA requirement.','Very High'],
                        ['United Kingdom','PRA / FCA','Post-Brexit adapted Solvency II. Prudential + conduct regulators separate.','Very High'],
                        ['United States','State-based / RBC','50-state system. NAIC model laws. No federal regulator.','High (variable)'],
                        ['China','C-ROSS II','China Risk-Oriented Solvency System. Rapidly converging with Solvency II principles.','High'],
                        ['Bermuda','BMA / BSCR','Major reinsurance hub. Bermuda Solvency Capital Requirement equivalent to Solvency II.','High'],
                        ['Emerging Markets','Varies','Basel-influenced frameworks. Often less mature solvency monitoring.','Low-Medium'],
                    ] as $row)
                    <tr style="background:#ffffff" class="hover:bg-[#f0f1f5] transition-colors">
                        <td class="px-6 py-4 font-semibold text-navy">{{ $row[0] }}</td>
                        <td class="px-6 py-4 text-[#4f46e5] font-medium">{{ $row[1] }}</td>
                        <td class="px-6 py-4 text-[#888]">{{ $row[2] }}</td>
                        <td class="px-6 py-4 text-right text-navy font-semibold">{{ $row[3] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>

<section id="solvency" class="mb-20 scroll-mt-28">
    <h2 class="familyfont text-[28px] font-bold border-l-4 border-[#4f46e5] pl-4 mb-6">Solvency Requirements</h2>
    <p class="text-[#6b7280] text-[15.5px] leading-[1.85] mb-6">Solvency regulation ensures insurers can meet policyholder obligations even in severe adverse scenarios. Modern frameworks use risk-sensitive capital requirements rather than simple premium-to-surplus ratios.</p>
    <div class="grid grid-cols-3 gap-5">
        @foreach([['SCR (Solvency Capital Req.)','Capital to survive a 1-in-200 year loss event. Solvency II target. Average EU insurer holds 220% of SCR.'],['MCR (Minimum Capital Req.)','Hard floor — breach triggers automatic supervisory intervention. Set at 25–45% of SCR.'],['ORSA','Own Risk & Solvency Assessment. Forward-looking internal capital adequacy review, at least annually.']] as $m)
        <div class="bg-white rounded-xl border border-[#e5e7eb] p-6">
            <div class="familyfont font-bold text-[15px] mb-3">{{ $m[0] }}</div>
            <div class="text-[13px] text-[#888] leading-relaxed">{{ $m[1] }}</div>
        </div>
        @endforeach
    </div>
</section>

<section id="trends" class="scroll-mt-28">
    <h2 class="familyfont text-[28px] font-bold border-l-4 border-[#4f46e5] pl-4 mb-6">Emerging Regulatory Trends</h2>
    <div class="space-y-3">
        @foreach([
            ['Climate Risk Disclosure','Regulators globally now require insurers to disclose physical and transition climate risks in their portfolios. TCFD-aligned reporting becoming mandatory in EU and U.K.'],
            ['Algorithmic Fairness','Increasing scrutiny of AI and credit-based underwriting for disparate impact on protected classes. Several states have restricted credit scoring in personal lines.'],
            ['Cyber Insurance Oversight','Rapid premium growth and lack of historical data create regulatory concern about reserve adequacy and systemic accumulation risk in cyber lines.'],
            ['IFRS 17','New accounting standard (effective 2023) fundamentally changes how insurance contracts are measured and reported — increasing transparency but adding complexity.'],
        ] as $item)
        <div class="bg-white flex items-start gap-5 rounded-xl border border-[#e5e7eb] p-5">
            <div class="w-2 h-2 rounded-full bg-[#4f46e5] shrink-0 mt-2"></div>
            <div>
                <div class="text-[14.5px] font-bold text-navy mb-1.5">{{ $item[0] }}</div>
                <div class="text-[13.5px] text-[#6b7280] leading-relaxed">{{ $item[1] }}</div>
            </div>
        </div>
        @endforeach
    </div>
</section>

@endsection
@section('insight_cards')
    @foreach([['Rate Filing Process','Most states require prior approval for personal lines rate changes. Carriers must file actuarial support; regulators have 30–60 days to approve or reject.'],['Market Conduct Exams','State departments conduct periodic exams of claims handling, underwriting practices, and producer oversight — violations result in fines and corrective action.'],['Guaranty Funds','Each state maintains an insurance guaranty fund that pays claims of insolvent insurers up to statutory limits — typically $300K–$500K per claim.']] as $c)
    <div class="bg-white rounded-2xl border border-[#e5e7eb] p-10 transition-all duration-300 hover:-translate-y-2 hover:border-[#4f46e5]">
        <h4 class="familyfont text-[17px] font-bold mb-4">{{ $c[0] }}</h4>
        <p class="text-[#6b7280] text-[14px] leading-relaxed">{{ $c[1] }}</p>
    </div>
    @endforeach
@endsection
@section('cta_title','Regulatory Intelligence Research')
@section('cta_desc','Access our state-by-state rate approval tracker, solvency ratio database, and regulatory action monitoring service.')
@section('cta_btn','Access Full Research')