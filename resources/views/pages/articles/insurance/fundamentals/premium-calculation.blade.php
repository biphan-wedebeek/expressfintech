@extends('layouts.deep-analysis')
@section('title', 'Premium Calculation Methods in Insurance – FinReview')
@section('description', 'How insurers calculate premiums — rate factors, experience rating, expense loading, and profit margin components explained.')
@section('feature_label', 'Insurance Pricing & Ratemaking Report 2026')
@section('breadcrumb', 'Premium Calculation Methods')
@section('badge', 'Insurance Fundamentals')
@section('hero_title', 'Premium Calculation Methods: The Science of Insurance Pricing')
@section('hero_subtitle', 'From pure premium to final charged premium — a complete walkthrough of ratemaking methodology, rating factors, expense loading, and profit margin construction.')
@section('meta', 'February 2026 · FinReview Research · 13 min read')
@section('extra_badges')
    <span class="text-[#6b6560] bg-white text-[11px] font-medium px-3 py-1.5 rounded-lg border border-white/10">Ratemaking</span>
@endsection
@section('sidebar_toc')
    <li><a href="#components" class="text-[13px] text-[#6b6560] hover:text-[#c9a96e] transition-colors">Premium Components</a></li>
    <li><a href="#formula"    class="text-[13px] text-[#6b6560] hover:text-[#c9a96e] transition-colors">The Pricing Formula</a></li>
    <li><a href="#factors"    class="text-[13px] text-[#6b6560] hover:text-[#c9a96e] transition-colors">Rating Factors</a></li>
    <li><a href="#methods"    class="text-[13px] text-[#6b6560] hover:text-[#c9a96e] transition-colors">Ratemaking Methods</a></li>
@endsection
@section('page_content')

<section id="components" class="mb-20 scroll-mt-28">
    <h2 class="text-[28px] font-bold text-[#1a1a1a] border-l-4 border-[#c9a96e] pl-4 mb-6 familyfont">Premium Components</h2>
    <div class="space-y-3">
        @foreach([
            ['Pure Premium (Expected Loss)', 'The actuarial estimate of expected claims cost per unit of exposure. This is the technical floor — below this, the insurer expects to lose money on underwriting alone.', '~60–65%'],
            ['Loss Adjustment Expenses (LAE)', 'Costs of investigating and settling claims — claims adjusters, legal fees, forensic services. Typically 8–12% of pure premium.', '~10%'],
            ['Underwriting Expenses', 'Agent commissions (15–20%), policy issuance costs, marketing, overhead. Major driver of expense ratio.', '~20%'],
            ['Profit & Contingency Loading', 'Target underwriting profit margin plus reserve for model uncertainty. Regulators scrutinize this component in rate filings.', '~5%'],
        ] as $idx => $row)
        <div class="rounded-xl border border-[#2a2f3a] p-5 flex items-start gap-5" style="background:#1a1d24">
            <div class="text-right w-12 shrink-0">
                <span class="text-[#c9a96e] font-black text-[15px]" style="font-family:'Playfair Display',serif">{{ sprintf('%02d', $idx+1) }}</span>
            </div>
            <div class="flex-1">
                <div class="flex items-center justify-between mb-1.5">
                    <span class="text-[15px] font-bold text-white">{{ $row[0] }}</span>
                    <span class="text-[13px] font-bold text-[#c9a96e]">{{ $row[2] }}</span>
                </div>
                <div class="text-[13.5px] text-[#6b6560] leading-relaxed">{{ $row[1] }}</div>
            </div>
        </div>
        @endforeach
    </div>
</section>

<section id="formula" class="mb-20 scroll-mt-28">
    <h2 class="text-[28px] font-bold text-[#1a1a1a] border-l-4 border-[#c9a96e] pl-4 mb-6 familyfont">The Pricing Formula</h2>
    <div class="rounded-2xl border border-[#2a2f3a] p-10 text-center mb-8" style="background:linear-gradient(145deg,#1a1d24,#12151b)">
        <p class="text-[12px] uppercase text-[#666] tracking-widest mb-4">Standard Ratemaking Formula</p>
        <div class="text-[22px] font-bold text-white mb-6" style="font-family:'Playfair Display',serif">
            Indicated Rate = <span class="text-[#c9a96e]">Pure Premium + LAE</span> ÷ <span class="text-green-400">(1 − Expense % − Profit %)</span>
        </div>
        <div class="grid grid-cols-3 gap-6 mt-8 text-left">
            @foreach([['Example: Auto Policy',''],['Pure Premium + LAE','$620'],['÷ (1 − 28% − 5%)','÷ 0.67'],['= Indicated Rate','$925']] as $r)
            <div></div>
            @endforeach
        </div>
        <div class="inline-block text-left rounded-xl border border-[#2a2f3a] p-6 mt-4" style="background:#15181f">
            <p class="text-[12px] uppercase text-[#666] tracking-widest mb-3">Worked Example — Auto Insurance</p>
            @foreach([['Pure Premium + LAE','$620','text-[#6b6560]'],['Expense loading (28%)','included in denominator','text-[#888]'],['Profit loading (5%)','included in denominator','text-[#888]'],['Indicated Rate','$620 ÷ 0.67 = $925','text-[#c9a96e] font-bold']] as $row)
            <div class="flex justify-between gap-8 py-2 border-b border-[#2a2f3a] last:border-0 text-[13.5px]">
                <span class="text-[#888]">{{ $row[0] }}</span>
                <span class="{{ $row[2] }}">{{ $row[1] }}</span>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section id="factors" class="mb-20 scroll-mt-28">
    <h2 class="text-[28px] font-bold text-[#1a1a1a] border-l-4 border-[#c9a96e] pl-4 mb-6 familyfont">Rating Factors</h2>
    <p class="text-[#6b6560] text-[15.5px] leading-[1.85] mb-6">Individual rates are the base rate multiplied by a series of rating factors reflecting the risk characteristics of each policyholder. These factors are actuarially derived from historical loss experience.</p>
    <div class="rounded-xl border border-[#2a2f3a] overflow-hidden">
        <div class="px-6 py-3 border-b border-[#2a2f3a]" style="background:#12151b">
            <span class="text-[11px] font-bold uppercase tracking-[0.12em] text-[#c9a96e]">Common Rating Factors — Homeowners Insurance</span>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-[13.5px]">
                <thead style="background:#12151b"><tr class="border-b border-[#2a2f3a]">
                    <th class="text-left px-6 py-3 text-[11px] font-bold uppercase text-[#888] tracking-wider">Factor</th>
                    <th class="text-left px-6 py-3 text-[11px] font-bold uppercase text-[#888] tracking-wider">Range</th>
                    <th class="text-right px-6 py-3 text-[11px] font-bold uppercase text-[#888] tracking-wider">Rate Impact</th>
                </tr></thead>
                <tbody class="divide-y divide-[#2a2f3a]">
                    @foreach([
                        ['Geographic territory','Coastal vs. inland zone','±40–60%'],
                        ['Construction type','Frame vs. masonry vs. fire-resistive','±15–25%'],
                        ['Age of home','New vs. 30+ years old','±10–20%'],
                        ['Credit-based insurance score','Excellent vs. poor credit','±20–35%'],
                        ['Claims history (5 years)','0 claims vs. 2+ claims','±15–30%'],
                        ['Coverage amount','Replacement cost vs. ACV','±8–12%'],
                        ['Deductible','$500 vs. $2,500','-15 to -22%'],
                        ['Protective devices','Alarm, sprinkler, deadbolt','-5 to -15%'],
                    ] as $row)
                    <tr style="background:#15181f" class="hover:bg-[#1a1d24] transition-colors">
                        <td class="px-6 py-4 font-medium text-[#e6e6e6]">{{ $row[0] }}</td>
                        <td class="px-6 py-4 text-[#888]">{{ $row[1] }}</td>
                        <td class="px-6 py-4 text-right font-bold text-[#c9a96e]">{{ $row[2] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>

<section id="methods" class="scroll-mt-28">
    <h2 class="text-[28px] font-bold text-[#1a1a1a] border-l-4 border-[#c9a96e] pl-4 mb-6 familyfont">Ratemaking Methods</h2>
    <div class="space-y-4">
        @foreach([
            ['Pure Premium Method','Calculates rate directly from loss costs per unit of exposure. Most intuitive method; works well with homogeneous, high-volume books.'],
            ['Loss Ratio Method','Compares actual loss ratio to target loss ratio to determine indicated rate change. Widely used for renewal pricing and rate filings.'],
            ['Experience Rating','Adjusts individual account rates based on their own loss history vs. expected. Common in commercial lines. Formula: Modified Rate = Manual Rate × (Z·A/E + (1-Z))'],
            ['Schedule Rating','Manual adjustments (credits/debits) applied by underwriters for risk characteristics not captured in formula — management quality, risk control, unusual hazards.'],
        ] as $idx => $row)
        <div class="rounded-xl border border-[#2a2f3a] overflow-hidden" style="background:#15181f">
            <div class="px-6 py-3 border-b border-[#2a2f3a] flex items-center gap-3" style="background:#1a1d24">
                <span class="text-[#c9a96e] font-black text-[13px]">{{ sprintf('%02d', $idx+1) }}</span>
                <span class="text-[14px] font-bold text-white">{{ $row[0] }}</span>
            </div>
            <div class="px-6 py-4 text-[13.5px] text-[#6b6560] leading-relaxed">{{ $row[1] }}</div>
        </div>
        @endforeach
    </div>
</section>

@endsection
@section('insight_cards')
    @foreach([['Credibility Weighting','The more data, the more weight given to own experience. Small accounts rely heavily on industry manual rates.'],['Investment Income Credit','Insurers earn investment income on held reserves — regulators allow this to offset premiums, reducing charged rates.'],['Rate Adequacy Monitoring','Actuaries track loss ratio development quarterly — deterioration triggers rate action before reserve deficiency emerges.']] as $c)
    <div class="rounded-2xl border border-[#2a2f3a] p-10 transition-all duration-300 hover:-translate-y-2 hover:border-[#c9a96e]" style="background:#1a1d24">
        <h4 class="text-[17px] font-bold text-[#c9a96e] mb-4" style="font-family:'Playfair Display',serif">{{ $c[0] }}</h4>
        <p class="text-[#6b6560] text-[14px] leading-relaxed">{{ $c[1] }}</p>
    </div>
    @endforeach
@endsection
@section('cta_title','Ratemaking Deep Research')
@section('cta_desc','Access our full rate filing database, pricing model benchmarks, and regulatory approval trend analysis across all 50 states.')
@section('cta_btn','Access Full Research')