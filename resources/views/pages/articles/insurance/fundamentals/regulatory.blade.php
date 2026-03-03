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
    <span class="text-[#6b6560] bg-white text-[11px] font-medium px-3 py-1.5 rounded-lg border border-white/10">Regulation</span>
@endsection
@section('sidebar_toc')
    <li><a href="#us"       class="text-[13px] text-[#6b6560] hover:text-[#c9a96e] transition-colors">U.S. Framework</a></li>
    <li><a href="#global"   class="text-[13px] text-[#6b6560] hover:text-[#c9a96e] transition-colors">Global Frameworks</a></li>
    <li><a href="#solvency" class="text-[13px] text-[#6b6560] hover:text-[#c9a96e] transition-colors">Solvency Requirements</a></li>
    <li><a href="#trends"   class="text-[13px] text-[#6b6560] hover:text-[#c9a96e] transition-colors">Emerging Trends</a></li>
@endsection
@section('page_content')

<section id="us" class="mb-20 scroll-mt-28">
    <h2 class="text-[28px] font-bold text-[#1a1a1a] border-l-4 border-[#c9a96e] pl-4 mb-6 familyfont">U.S. Regulatory Framework</h2>
    <p class="text-[#6b6560] text-[15.5px] leading-[1.85] mb-6">The U.S. operates a state-based regulatory system — the only major economy without a federal insurance regulator. Each of the 50 states and D.C. maintains its own insurance department with authority over licensing, rate approval, market conduct, and solvency.</p>
    <div class="space-y-4">
        @foreach([
            ['NAIC', 'National Association of Insurance Commissioners', 'Coordinates state regulatory activity, develops model laws and regulations, maintains financial databases (IRIS ratios). Has no direct regulatory authority — influence is through model adoption.'],
            ['State Insurance Departments', 'Primary Regulator', 'License carriers and agents, approve rates and forms, conduct market conduct exams, oversee receiverships. 56 separate jurisdictions with varying stringency.'],
            ['Risk-Based Capital (RBC)', 'Solvency Standard', 'Capital requirements tied to risk profile. Four action levels (Company Action Level, Regulatory Action Level, Authorized Control Level, Mandatory Control Level) trigger increasing regulatory intervention.'],
            ['FHFA / Federal Programs', 'Limited Federal Role', 'TRIA (terrorism reinsurance), NFIP (flood), crop insurance — narrow federal programs where private market fails.'],
        ] as $row)
        <div class="rounded-xl border border-[#2a2f3a] p-6 flex items-start gap-6" style="background:#1a1d24">
            <div class="shrink-0 text-center">
                <div class="text-[#c9a96e] font-bold text-[14px]">{{ $row[0] }}</div>
                <div class="text-[11px] text-[#555] mt-0.5">{{ $row[1] }}</div>
            </div>
            <div class="w-px bg-[#2a2f3a] self-stretch shrink-0"></div>
            <div class="text-[13.5px] text-[#6b6560] leading-relaxed">{{ $row[2] }}</div>
        </div>
        @endforeach
    </div>
</section>

<section id="global" class="mb-20 scroll-mt-28">
    <h2 class="text-[28px] font-bold text-[#1a1a1a] border-l-4 border-[#c9a96e] pl-4 mb-6 familyfont">Global Regulatory Frameworks</h2>
    <div class="rounded-xl border border-[#2a2f3a] overflow-hidden">
        <div class="px-6 py-3 border-b border-[#2a2f3a]" style="background:#12151b">
            <span class="text-[11px] font-bold uppercase tracking-[0.12em] text-[#c9a96e]">Major Regulatory Regimes by Region</span>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-[13.5px]">
                <thead style="background:#12151b"><tr class="border-b border-[#2a2f3a]">
                    <th class="text-left px-6 py-3 text-[11px] font-bold uppercase text-[#888] tracking-wider">Region</th>
                    <th class="text-left px-6 py-3 text-[11px] font-bold uppercase text-[#888] tracking-wider">Framework</th>
                    <th class="text-left px-6 py-3 text-[11px] font-bold uppercase text-[#888] tracking-wider">Key Feature</th>
                    <th class="text-right px-6 py-3 text-[11px] font-bold uppercase text-[#888] tracking-wider">Stringency</th>
                </tr></thead>
                <tbody class="divide-y divide-[#2a2f3a]">
                    @foreach([
                        ['European Union','Solvency II','3-pillar risk-based capital framework. Market-consistent valuation. ORSA requirement.','Very High'],
                        ['United Kingdom','PRA / FCA','Post-Brexit adapted Solvency II. Prudential + conduct regulators separate.','Very High'],
                        ['United States','State-based / RBC','50-state system. NAIC model laws. No federal regulator.','High (variable)'],
                        ['China','C-ROSS II','China Risk-Oriented Solvency System. Rapidly converging with Solvency II principles.','High'],
                        ['Bermuda','BMA / BSCR','Major reinsurance hub. Bermuda Solvency Capital Requirement equivalent to Solvency II.','High'],
                        ['Emerging Markets','Varies','Basel-influenced frameworks. Often less mature solvency monitoring.','Low-Medium'],
                    ] as $row)
                    <tr style="background:#15181f" class="hover:bg-[#1a1d24] transition-colors">
                        <td class="px-6 py-4 font-semibold text-[#e6e6e6]">{{ $row[0] }}</td>
                        <td class="px-6 py-4 text-[#c9a96e] font-medium">{{ $row[1] }}</td>
                        <td class="px-6 py-4 text-[#888]">{{ $row[2] }}</td>
                        <td class="px-6 py-4 text-right text-[#e6e6e6] font-semibold">{{ $row[3] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>

<section id="solvency" class="mb-20 scroll-mt-28">
    <h2 class="text-[28px] font-bold text-[#1a1a1a] border-l-4 border-[#c9a96e] pl-4 mb-6 familyfont">Solvency Requirements</h2>
    <p class="text-[#6b6560] text-[15.5px] leading-[1.85] mb-6">Solvency regulation ensures insurers can meet policyholder obligations even in severe adverse scenarios. Modern frameworks use risk-sensitive capital requirements rather than simple premium-to-surplus ratios.</p>
    <div class="grid grid-cols-3 gap-5">
        @foreach([['SCR (Solvency Capital Req.)','Capital to survive a 1-in-200 year loss event. Solvency II target. Average EU insurer holds 220% of SCR.'],['MCR (Minimum Capital Req.)','Hard floor — breach triggers automatic supervisory intervention. Set at 25–45% of SCR.'],['ORSA','Own Risk & Solvency Assessment. Forward-looking internal capital adequacy review, at least annually.']] as $m)
        <div class="rounded-xl border border-[#2a2f3a] p-6" style="background:#1a1d24">
            <div class="text-[#c9a96e] font-bold text-[15px] mb-3" style="font-family:'Playfair Display',serif">{{ $m[0] }}</div>
            <div class="text-[13px] text-[#888] leading-relaxed">{{ $m[1] }}</div>
        </div>
        @endforeach
    </div>
</section>

<section id="trends" class="scroll-mt-28">
    <h2 class="text-[28px] font-bold text-[#1a1a1a] border-l-4 border-[#c9a96e] pl-4 mb-6 familyfont">Emerging Regulatory Trends</h2>
    <div class="space-y-3">
        @foreach([
            ['Climate Risk Disclosure','Regulators globally now require insurers to disclose physical and transition climate risks in their portfolios. TCFD-aligned reporting becoming mandatory in EU and U.K.'],
            ['Algorithmic Fairness','Increasing scrutiny of AI and credit-based underwriting for disparate impact on protected classes. Several states have restricted credit scoring in personal lines.'],
            ['Cyber Insurance Oversight','Rapid premium growth and lack of historical data create regulatory concern about reserve adequacy and systemic accumulation risk in cyber lines.'],
            ['IFRS 17','New accounting standard (effective 2023) fundamentally changes how insurance contracts are measured and reported — increasing transparency but adding complexity.'],
        ] as $item)
        <div class="flex items-start gap-5 rounded-xl border border-[#2a2f3a] p-5" style="background:#1a1d24">
            <div class="w-2 h-2 rounded-full bg-[#c9a96e] shrink-0 mt-2"></div>
            <div>
                <div class="text-[14.5px] font-bold text-white mb-1.5">{{ $item[0] }}</div>
                <div class="text-[13.5px] text-[#6b6560] leading-relaxed">{{ $item[1] }}</div>
            </div>
        </div>
        @endforeach
    </div>
</section>

@endsection
@section('insight_cards')
    @foreach([['Rate Filing Process','Most states require prior approval for personal lines rate changes. Carriers must file actuarial support; regulators have 30–60 days to approve or reject.'],['Market Conduct Exams','State departments conduct periodic exams of claims handling, underwriting practices, and producer oversight — violations result in fines and corrective action.'],['Guaranty Funds','Each state maintains an insurance guaranty fund that pays claims of insolvent insurers up to statutory limits — typically $300K–$500K per claim.']] as $c)
    <div class="rounded-2xl border border-[#2a2f3a] p-10 transition-all duration-300 hover:-translate-y-2 hover:border-[#c9a96e]" style="background:#1a1d24">
        <h4 class="text-[17px] font-bold text-[#c9a96e] mb-4" style="font-family:'Playfair Display',serif">{{ $c[0] }}</h4>
        <p class="text-[#6b6560] text-[14px] leading-relaxed">{{ $c[1] }}</p>
    </div>
    @endforeach
@endsection
@section('cta_title','Regulatory Intelligence Research')
@section('cta_desc','Access our state-by-state rate approval tracker, solvency ratio database, and regulatory action monitoring service.')
@section('cta_btn','Access Full Research')