@extends('layouts.insurance')
@section('title','Seven Principles of Insurance')
@section('cover_kicker','Insurance Fundamentals · Deep Analysis')
@section('cover_h1_line1','Seven')
@section('cover_h1_em','Principles')
@section('cover_deck','The legal and contractual foundations governing every insurance contract — from indemnity and insurable interest to subrogation and loss minimisation.')
@section('cover_date','March 2026')
@section('cover_read','18 min')
@section('cover_topic','Core Principles')
@section('cover_img','https://images.unsplash.com/photo-1450101499163-c8848c66ca85?w=800&q=80')
@section('cover_stats')
<div class="bg-[var(--navy)] py-[14px] px-[18px]"><div class="font-['Cormorant_Garamond'] text-2xl font-bold text-[var(--white)] leading-none">$7.5T</div><div class="text-[9.5px] text-white/35 uppercase tracking-[0.1em] mt-[3px]">Global Premium Volume</div></div>
<div class="bg-[var(--navy)] py-[14px] px-[18px]"><div class="font-['Cormorant_Garamond'] text-2xl font-bold text-[var(--white)] leading-none">94.2%</div><div class="text-[9.5px] text-white/35 uppercase tracking-[0.1em] mt-[3px]">Combined Ratio</div></div>
<div class="bg-[var(--navy)] py-[14px] px-[18px]"><div class="font-['Cormorant_Garamond'] text-2xl font-bold text-[var(--white)] leading-none">+18%</div><div class="text-[9.5px] text-white/35 uppercase tracking-[0.1em] mt-[3px]">P&C Rate Growth</div></div>
<div class="bg-[var(--navy)] py-[14px] px-[18px]"><div class="font-['Cormorant_Garamond'] text-2xl font-bold text-[var(--white)] leading-none">$8.2B</div><div class="text-[9.5px] text-white/35 uppercase tracking-[0.1em] mt-[3px]">Subrogation Recovery</div></div>
@endsection
@section('block_label','The Seven Principles')
@section('content')

<div class="p-item" id="indemnity">
    <div class="p-index"><div class="p-index-num">01</div><div class="p-index-line"></div></div>
    <div class="p-body">
        <div class="p-tag">Principle 01 of 07</div>
        <h2 class="p-title">Principle of <em>Indemnity</em></h2>
        <p class="p-text">The cornerstone of insurance contract law. Indemnity establishes that insurance exists solely to restore the insured to the same financial position before the loss — <strong>no better, no worse</strong>. The insurer's liability is capped at the actual loss sustained, regardless of the policy face value.</p>
        <img class="p-img" src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=900&q=80" alt="Property claims">
        <p class="p-img-caption">Property indemnity valuation — ACV vs RCV disputes represent 34% of all post-claim litigation</p>
        <p class="p-text">For property insurance this means the lesser of <strong>Actual Cash Value (ACV)</strong> or <strong>Replacement Cost Value (RCV)</strong>, depending on the policy structure. Depreciation methodology is the most frequently contested element in property indemnity claims.</p>
        <div class="p-note">
            <div class="p-note-label">Research Insight</div>
            <p>Analysis of 3,200 settled claims found ACV depreciation disputes account for <strong>34% of post-claim litigation</strong> — the highest of any single coverage issue across all property lines.</p>
        </div>
    </div>
</div>

<div class="p-item" id="insurable">
    <div class="p-index"><div class="p-index-num">02</div><div class="p-index-line"></div></div>
    <div class="p-body">
        <div class="p-tag">Principle 02 of 07</div>
        <h2 class="p-title">Insurable <em>Interest</em></h2>
        <p class="p-text">The policyholder must hold a genuine, legally recognised financial stake in the subject matter of insurance. Without it, the contract is void from inception. The doctrine prevents wagering disguised as risk transfer and ensures the insured has a real incentive to prevent the loss from occurring.</p>
        <p class="p-text">In <strong>life insurance</strong>, insurable interest must exist at inception. In <strong>property and marine insurance</strong>, it must exist at both inception and at the time of loss. The landmark English case <em>Lucena v Craufurd</em> (1806) remains the defining judicial statement on the doctrine.</p>
        <div class="p-quote">
            <p>"Insurance exists to indemnify, not to enrich. The moment a policy creates profit from loss, it ceases to be insurance and becomes a wager."</p>
            <cite>— Principles of Insurance Law, 14th Edition</cite>
        </div>
    </div>
</div>

<div class="p-item" id="faith">
    <div class="p-index"><div class="p-index-num">03</div><div class="p-index-line"></div></div>
    <div class="p-body">
        <div class="p-tag">Principle 03 of 07</div>
        <h2 class="p-title">Utmost <em>Good Faith</em></h2>
        <p class="p-text">Unlike contracts governed by <em>caveat emptor</em>, insurance demands <em>uberrimae fidei</em> — utmost good faith from both parties. The insured must disclose all <strong>material facts</strong>; the insurer equally. A material fact is anything that would influence a prudent underwriter's decision to accept or price the risk.</p>
        <p class="p-text">Concealment or misrepresentation entitles the insurer to void the contract <em>ab initio</em>. The Insurance Act 2015 introduced more proportionate remedies for non-fraudulent breach — allowing partial payment rather than automatic avoidance in certain cases.</p>
        <div class="p-note">
            <div class="p-note-label">Regulatory Update 2025</div>
            <p>Regulators in key markets are increasing scrutiny of insurer disclosure obligations — making the duty of utmost good faith <strong>genuinely bilateral</strong> for the first time in many jurisdictions.</p>
        </div>
    </div>
</div>

<div class="p-item" id="proximate">
    <div class="p-index"><div class="p-index-num">04</div><div class="p-index-line"></div></div>
    <div class="p-body">
        <div class="p-tag">Principle 04 of 07</div>
        <h2 class="p-title">Proximate <em>Cause</em></h2>
        <p class="p-text">The proximate cause principle determines the dominant, operative cause of a loss in a chain of events. Insurers are liable only for losses caused by <strong>covered perils</strong>. The test — <em>causa proxima non remota spectatur</em> — holds that the proximate, not the remote, cause governs.</p>
        <p class="p-text">Where an insured peril and an excluded peril combine to cause a loss, liability depends entirely on which was the dominant cause. This determination drives significant coverage litigation in complex property and <strong>business interruption</strong> claims.</p>
        <div class="p-quote">
            <p>"The proximate cause is not the last link in the chain — it is the dominant, effective cause that sets the loss in motion."</p>
            <cite>— Leyland Shipping Co v Norwich Union [1918]</cite>
        </div>
    </div>
</div>

<div class="p-item" id="subrogation">
    <div class="p-index"><div class="p-index-num">05</div><div class="p-index-line"></div></div>
    <div class="p-body">
        <div class="p-tag">Principle 05 of 07</div>
        <h2 class="p-title">Subrogation</h2>
        <p class="p-text">After fully indemnifying the insured, the insurer acquires the right to step into the insured's legal shoes and pursue recovery from the negligent third party who caused the loss. This prevents <strong>double recovery</strong> by the insured and allows insurers to recover paid claims costs.</p>
        <img class="p-img" src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?w=900&q=80" alt="Legal proceedings">
        <p class="p-img-caption">Subrogation — insurers pursuing recovery from third parties in construction defect and liability claims</p>
        <p class="p-text">The right of subrogation only arises after <strong>full indemnification</strong>. In 2025, subrogation recoveries in the US property market exceeded $8.2 billion — with construction defect and product liability claims representing the largest recovery categories.</p>
    </div>
</div>

<div class="p-item" id="contribution">
    <div class="p-index"><div class="p-index-num">06</div><div class="p-index-line"></div></div>
    <div class="p-body">
        <div class="p-tag">Principle 06 of 07</div>
        <h2 class="p-title">Contribution</h2>
        <p class="p-text">Where a single risk is covered by two or more policies, the principle of contribution prevents the insured from claiming the full loss from each insurer independently. Each insurer contributes <strong>proportionally</strong> — ensuring combined payments do not exceed the actual loss.</p>
        <p class="p-text">The <strong>independent liability method</strong> calculates each insurer's theoretical maximum, then splits the actual loss proportionally. The <strong>rateable proportion method</strong> divides the loss in direct proportion to each policy's sum insured. Contribution clauses in policy wordings specify which method applies.</p>
    </div>
</div>

<div class="p-item" id="loss">
    <div class="p-index"><div class="p-index-num">07</div><div class="p-index-line"></div></div>
    <div class="p-body">
        <div class="p-tag">Principle 07 of 07</div>
        <h2 class="p-title">Loss <em>Minimisation</em></h2>
        <p class="p-text">Upon the occurrence of an insured event, the insured holds a legal and contractual duty to take all <strong>reasonable steps</strong> to minimise or contain the loss. Failure to mitigate exposes the insured to a proportional reduction in their claim.</p>
        <p class="p-text">Reasonable mitigation costs incurred are recoverable under the policy — even where they exceed the property's insured value. Leading commercial property insurers report that proactive emergency response services reduce average claims severity by <strong>22–31%</strong>.</p>
        <div class="p-note">
            <div class="p-note-label">Market Practice</div>
            <p>Insurers increasingly deploy emergency response teams as part of their value proposition — actively supporting the insured's duty while reducing claims severity across their portfolio.</p>
        </div>
    </div>
</div>

@endsection

@section('metrics_band')
<div class="mitem"><div class="mitem-v">$7.5T</div><div class="mitem-l">Global Premium Volume 2025</div></div>
<div class="mitem"><div class="mitem-v">+18%</div><div class="mitem-l">Average P&C Rate Increase</div></div>
<div class="mitem"><div class="mitem-v">94.2%</div><div class="mitem-l">Combined Ratio ex-CAT</div></div>
<div class="mitem"><div class="mitem-v">$8.2B</div><div class="mitem-l">US Subrogation Recoveries</div></div>
@endsection

@section('process_title','The Underwriting Process')
@section('process_subtitle','Four Stages')
@section('process')
<div class="pstep"><div class="pstep-n">01</div><div class="pstep-title">Risk Identification & Submission</div><div class="pstep-body">Broker submits a complete risk presentation — material facts, claims history, property schedules and coverage requirements.</div></div>
<div class="pstep"><div class="pstep-n">02</div><div class="pstep-title">Risk Evaluation & Modelling</div><div class="pstep-body">Actuarial models quantify expected loss frequency and severity using catastrophe models and benchmark loss development data.</div></div>
<div class="pstep"><div class="pstep-n">03</div><div class="pstep-title">Terms, Pricing & Quotation</div><div class="pstep-body">Technical price, sublimits, deductible structure and exclusions set — balancing competitive positioning against the target combined ratio.</div></div>
<div class="pstep"><div class="pstep-n">04</div><div class="pstep-title">Binding & Policy Issuance</div><div class="pstep-body">Risk bound, full policy documentation issued and exposure recorded for ongoing monitoring and reinsurance reporting.</div></div>
@endsection

@section('table_title','Principles — Application Matrix')
@section('ins_table')
<table>
    <thead><tr><th>Principle</th><th>Property</th><th>Life</th><th>Liability</th><th>Marine</th><th>Cyber</th></tr></thead>
    <tbody>
        <tr><td>Indemnity</td><td class="g">Core</td><td class="a">Modified</td><td class="g">Core</td><td class="g">Core</td><td class="g">Core</td></tr>
        <tr><td>Insurable Interest</td><td class="g">Required</td><td class="g">Required</td><td class="g">Required</td><td class="g">Required</td><td class="a">Evolving</td></tr>
        <tr><td>Utmost Good Faith</td><td class="g">Strict</td><td class="g">Strict</td><td class="g">Strict</td><td class="g">Strict</td><td class="g">Strict</td></tr>
        <tr><td>Proximate Cause</td><td class="g">Core</td><td class="a">Modified</td><td class="g">Core</td><td class="g">Core</td><td class="a">Complex</td></tr>
        <tr><td>Subrogation</td><td class="g">Active</td><td class="r">N/A</td><td class="a">Limited</td><td class="g">Active</td><td class="a">Emerging</td></tr>
        <tr><td>Contribution</td><td class="g">Active</td><td class="r">Rare</td><td class="g">Active</td><td class="g">Active</td><td class="a">Emerging</td></tr>
        <tr><td>Loss Minimisation</td><td class="g">Required</td><td class="r">N/A</td><td class="g">Required</td><td class="g">Required</td><td class="g">Required</td></tr>
    </tbody>
</table>
@endsection

@section('related_count','Three Articles')
@section('related')
<div class="rcard"><img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=600&q=70" alt="Risk"><div class="rcard-body"><div class="rcard-cat">Actuarial Science</div><div class="rcard-title">ML-Driven Risk Assessment Models</div><p>How machine learning is replacing credibility-weighted approaches to loss frequency forecasting across commercial lines.</p></div></div>
<div class="rcard"><img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=600&q=70" alt="Underwriting"><div class="rcard-body"><div class="rcard-cat">Underwriting</div><div class="rcard-title">Digital Platforms Cut Turnaround by 40%</div><p>The shift to digital submission platforms has improved data quality and speed for complex commercial risk assessment.</p></div></div>
<div class="rcard"><img src="https://images.unsplash.com/photo-1516156008625-3a9d6067fab5?w=600&q=70" alt="Cyber"><div class="rcard-body"><div class="rcard-cat">Cyber Insurance</div><div class="rcard-title">Emerging Principles in Cyber Liability</div><p>How the seven core principles are being adapted for the unique characteristics of cyber risk and digital asset loss.</p></div></div>
@endsection