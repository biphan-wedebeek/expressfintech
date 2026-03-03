@extends('layouts.deep-analysis')
@section('title', 'The Insurance Underwriting Process – FinReview')
@section('description', 'Step-by-step breakdown of the insurance underwriting process, from application to policy issuance.')
@section('feature_label', 'Insurance Underwriting Report 2026')
@section('breadcrumb', 'Underwriting Process')
@section('badge', 'Insurance Fundamentals')
@section('hero_title', 'The Underwriting Process: From Application to Policy')
@section('hero_subtitle', 'How insurers evaluate applicants, classify risk, and determine whether and at what price to offer coverage — the complete underwriting workflow.')
@section('meta', 'February 2026 · FinReview Research · 14 min read')
@section('extra_badges')
    <span class="text-[#6b6560] bg-white text-[11px] font-medium px-3 py-1.5 rounded-lg border border-white/10">Underwriting</span>
@endsection
@section('sidebar_toc')
    <li><a href="#overview"  class="text-[13px] text-[#6b6560] hover:text-[#c9a96e] transition-colors">Overview</a></li>
    <li><a href="#workflow"  class="text-[13px] text-[#6b6560] hover:text-[#c9a96e] transition-colors">Workflow Steps</a></li>
    <li><a href="#classes"   class="text-[13px] text-[#6b6560] hover:text-[#c9a96e] transition-colors">Risk Classification</a></li>
    <li><a href="#digital"   class="text-[13px] text-[#6b6560] hover:text-[#c9a96e] transition-colors">Digital Underwriting</a></li>
@endsection
@section('page_content')

<section id="overview" class="mb-20 scroll-mt-28">
    <h2 class="text-[28px] font-bold text-[#1a1a1a] border-l-4 border-[#c9a96e] pl-4 mb-6 familyfont">Overview</h2>
    <p class="text-[#6b6560] text-[15.5px] leading-[1.85] mb-5">Underwriting is the process by which an insurer evaluates the risk of insuring a person or asset, determines eligibility, and sets the premium. It is the core revenue-generating function of any insurance carrier.</p>
    <div class="grid grid-cols-3 gap-5 mt-8">
        @foreach([['Accept','Offer coverage at quoted premium'],['Modify','Offer with exclusions, higher deductible, or surcharge'],['Decline','Reject — risk outside appetite or unpriceable']] as $m)
        <div class="rounded-xl border border-[#2a2f3a] p-6 text-center" style="background:#1a1d24">
            <div class="text-[#c9a96e] font-bold text-[17px] mb-2">{{ $m[0] }}</div>
            <div class="text-[13px] text-[#888]">{{ $m[1] }}</div>
        </div>
        @endforeach
    </div>
</section>

<section id="workflow" class="mb-20 scroll-mt-28">
    <h2 class="text-[28px] font-bold text-[#1a1a1a] border-l-4 border-[#c9a96e] pl-4 mb-6 familyfont">Underwriting Workflow</h2>
    <div class="space-y-4">
        @foreach([
            ['01','Application & Data Collection','Applicant submits information. Underwriter pulls credit scores, claims history (CLUE report), MVR, inspection reports.'],
            ['02','Risk Evaluation','Data is scored against underwriting guidelines. Automated rules engines handle standard risks; complex risks go to manual review.'],
            ['03','Risk Classification','Applicant assigned to a rate class (preferred, standard, substandard). Class determines base rate applied.'],
            ['04','Premium Calculation','Base rate × rating factors (territory, deductible, coverage limits, discounts) = final quoted premium.'],
            ['05','Decision & Policy Issuance','Accept → policy issued. Modify → counter-offer with adjusted terms. Decline → adverse action notice required.'],
            ['06','Ongoing Monitoring','Policy performance tracked. Renewal underwriting reassesses risk annually. Adverse trends trigger mid-term action.'],
        ] as $step)
        <div class="flex items-start gap-5 rounded-xl border border-[#2a2f3a] overflow-hidden" style="background:#15181f">
            <div class="w-16 shrink-0 flex items-center justify-center py-6 self-stretch" style="background:#1a1d24">
                <span class="text-[#c9a96e] font-black text-[15px]" style="font-family:'Playfair Display',serif">{{ $step[0] }}</span>
            </div>
            <div class="py-5 pr-6">
                <div class="text-[15px] font-bold text-white mb-1.5">{{ $step[1] }}</div>
                <div class="text-[13.5px] text-[#6b6560] leading-relaxed">{{ $step[2] }}</div>
            </div>
        </div>
        @endforeach
    </div>
</section>

<section id="classes" class="mb-20 scroll-mt-28">
    <h2 class="text-[28px] font-bold text-[#1a1a1a] border-l-4 border-[#c9a96e] pl-4 mb-6 familyfont">Risk Classification</h2>
    <div class="rounded-xl border border-[#2a2f3a] overflow-hidden">
        <div class="px-6 py-3 border-b border-[#2a2f3a]" style="background:#12151b">
            <span class="text-[11px] font-bold uppercase tracking-[0.12em] text-[#c9a96e]">Standard Risk Classification Tiers — Personal Lines</span>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-[13.5px]">
                <thead style="background:#12151b"><tr class="border-b border-[#2a2f3a]">
                    <th class="text-left px-6 py-3 text-[11px] font-bold uppercase text-[#888] tracking-wider">Tier</th>
                    <th class="text-left px-6 py-3 text-[11px] font-bold uppercase text-[#888] tracking-wider">Profile</th>
                    <th class="text-right px-6 py-3 text-[11px] font-bold uppercase text-[#888] tracking-wider">Rate Modifier</th>
                    <th class="text-right px-6 py-3 text-[11px] font-bold uppercase text-[#888] tracking-wider">% of Market</th>
                </tr></thead>
                <tbody class="divide-y divide-[#2a2f3a]">
                    @foreach([
                        ['Preferred Plus','Clean record, excellent credit, no recent claims','0.75×','18%'],
                        ['Preferred','Good record, good credit, 1 minor claim in 5yr','0.90×','27%'],
                        ['Standard','Average risk profile, 1–2 claims','1.00×','35%'],
                        ['Substandard','Multiple claims, poor credit, violations','1.30–1.60×','15%'],
                        ['High Risk / Assigned','Outside standard market appetite','1.80×+','5%'],
                    ] as $row)
                    <tr style="background:#15181f" class="hover:bg-[#1a1d24] transition-colors">
                        <td class="px-6 py-4 font-semibold text-[#e6e6e6]">{{ $row[0] }}</td>
                        <td class="px-6 py-4 text-[#888]">{{ $row[1] }}</td>
                        <td class="px-6 py-4 text-right font-bold text-[#c9a96e]">{{ $row[2] }}</td>
                        <td class="px-6 py-4 text-right text-[#888]">{{ $row[3] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>

<section id="digital" class="scroll-mt-28">
    <h2 class="text-[28px] font-bold text-[#1a1a1a] border-l-4 border-[#c9a96e] pl-4 mb-6 familyfont">Digital & Automated Underwriting</h2>
    <p class="text-[#6b6560] text-[15.5px] leading-[1.85] mb-6">Straight-through processing (STP) now handles 60–80% of personal lines applications in digital-first carriers. AI models evaluate hundreds of data points in milliseconds, replacing workflows that once took days.</p>
    <div class="grid grid-cols-2 gap-5">
        @foreach([
            ['Traditional Underwriting','Manual review, 3–5 day turnaround, 50–100 data points, high labor cost'],
            ['Digital / AI Underwriting','Automated decision, '<'60 seconds, 500–2,000+ data points, 40–60% cost reduction'],
            ['Telematics (Auto)',        'Real-time driving data scores behavior — hard braking, mileage, time-of-day — enabling usage-based insurance (UBI)'],
            ['Aerial Imagery (Home)',    'AI analyzes satellite/drone imagery for roof condition, tree proximity, pool presence — reducing on-site inspections by 70%'],
        ] as $item)
        <div class="rounded-xl border border-[#2a2f3a] p-6" style="background:#1a1d24">
            <div class="text-[#c9a96e] font-bold text-[14px] mb-2">{{ $item[0] }}</div>
            <div class="text-[13px] text-[#888] leading-relaxed">{{ $item[1] }}</div>
        </div>
        @endforeach
    </div>
</section>

@endsection
@section('insight_cards')
    @foreach([['Straight-Through Processing','STP rates of 60–80% in personal lines dramatically reduce underwriting expenses and improve customer experience.'],['Adverse Selection Control','Robust underwriting guidelines and data-driven risk scoring are the primary defense against adverse selection.'],['Reinsurance Alignment','Underwriting appetite must align with reinsurance treaty terms — writing outside treaty parameters creates retained accumulation risk.']] as $c)
    <div class="rounded-2xl border border-[#2a2f3a] p-10 transition-all duration-300 hover:-translate-y-2 hover:border-[#c9a96e]" style="background:#1a1d24">
        <h4 class="text-[17px] font-bold text-[#c9a96e] mb-4" style="font-family:'Playfair Display',serif">{{ $c[0] }}</h4>
        <p class="text-[#6b6560] text-[14px] leading-relaxed">{{ $c[1] }}</p>
    </div>
    @endforeach
@endsection
@section('cta_title','Underwriting Deep Research')
@section('cta_desc','Access our underwriting guideline benchmarking database, automation ROI models, and carrier STP rate comparisons.')
@section('cta_btn','Access Full Research')