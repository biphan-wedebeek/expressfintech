@extends('layouts.personal-finance')

@section('title', 'TruthFinder Review — Identity Protection & Background Check Guide')
@section('breadcrumb', 'Identity Protection')
@section('eyebrow', 'Behavior · Identity Protection')
@section('page_title', 'TruthFinder Review ' . now()->year)
@section('page_lead', 'A detailed look at TruthFinder — one of the most widely used background check and people-search services in the US. Understand what it does, who it is for, and whether it belongs in your personal security toolkit.')

@section('content')

<section class="bg-surface border-b border-[var(--border)] py-20">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-14 items-center">
            <div>
                <div class="flex items-center gap-3 mb-4 text-[10px] font-bold tracking-[0.26em] uppercase text-emerald-600">
                    <span class="w-6 h-px bg-emerald-600"></span>
                    Identity Protection · {{ now()->year }}
                </div>
                <h2 class="fonttitle text-3xl lg:text-4xl font-bold leading-tight mb-6">
                    What Is TruthFinder — And Should You Use It?
                </h2>

                <p class="text-[15px] text-muted leading-relaxed mb-5">
                    TruthFinder is an <strong class="text-navy">online people-search and background check service</strong>.
                    It aggregates data from billions of US public records — court filings,
                    social media profiles, address histories, criminal records, and more —
                    and compiles them into a single readable report.
                </p>

                <p class="text-[15px] text-muted leading-relaxed mb-8">
                    From a personal finance perspective, it sits in the
                    <strong class="text-navy">identity protection</strong> category:
                    tools that help you verify who you are dealing with, monitor what data
                    exists about you online, and reduce your exposure to fraud and identity theft.
                </p>

                <div class="flex flex-wrap items-center gap-4">
                    <a href="{{ $url_button->isNotEmpty() ? $url_button->first()->tracking_url : 'https://www.truthfinder.com/p/home/' }}"
                        target="_blank" rel="noopener noreferrer nofollow"
                        class="inline-flex items-center gap-2 bg-emerald-600 hover:bg-emerald-700 text-white font-semibold text-[14px] px-7 py-3.5 rounded-lg transition-all hover:shadow-lg hover:shadow-emerald-500/25">
                        Visit TruthFinder
                        <svg class="w-4 h-4 shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6" />
                            <polyline points="15 3 21 3 21 9" />
                            <line x1="10" y1="14" x2="21" y2="3" />
                        </svg>
                    </a>
                    <span class="text-[12px] text-muted italic">Official site — opens in new tab</span>
                </div>
            </div>

            <div class="space-y-5">
                <div class="bg-white border border-[var(--border)] rounded-xl p-8 shadow-sm">
                    <div class="flex items-end gap-3 mb-3">
                        <div class="fonttitle text-6xl font-black text-emerald-500 leading-none">4.5</div>
                        <div class="text-2xl font-bold text-muted mb-1">/5</div>
                    </div>
                    <div class="text-xs uppercase tracking-[0.12em] text-muted mb-6">
                        Consumer Affairs — 300+ verified reviews
                    </div>
                    <div class="grid grid-cols-2 gap-3">
                        @foreach([
                        ['Ease of Use', '★★★★★'],
                        ['Data Depth', '★★★★☆'],
                        ['Report Speed', '★★★★★'],
                        ['Support', '★★★★☆'],
                        ] as [$label, $stars])
                        <div class="flex items-center justify-between bg-surface rounded-lg px-3 py-2.5">
                            <span class="text-[12px] text-muted">{{ $label }}</span>
                            <span class="text-emerald-500 tracking-wider text-[11px]">{{ $stars }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="border border-emerald-200 bg-emerald-50 p-5 rounded-lg">
                    <div class="text-[10px] uppercase tracking-[0.2em] text-emerald-700 font-semibold mb-2">
                        Important Restriction
                    </div>
                    <p class="text-[13px] text-muted leading-relaxed">
                        TruthFinder <strong class="text-navy">is not FCRA-compliant</strong>.
                        It cannot legally be used for employment screening, tenant decisions,
                        insurance underwriting, or credit decisions. Personal use only.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-white border-b border-[var(--border)] py-20">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="text-[10px] font-bold tracking-[0.26em] uppercase text-emerald-600 mb-2"> Core Features </div>
        <h2 class="fonttitle text-2xl lg:text-3xl font-bold mb-10">What TruthFinder Actually Provides</h2>
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
            @foreach([
            ['01', 'People Search', 'Search by name, address, phone, or email. Reports include criminal records, address history, social media profiles, employment history, and known associates.'],
            ['02', 'Reverse Phone Lookup', 'Enter an unknown number and receive the owner\'s name, aliases, location history, and associated social profiles. Ideal for identifying spam calls.'],
            ['03', 'Dark Web Monitoring', 'Scans known illegal data-trading sites to check whether your passwords, SSN, or card numbers have been exposed in a data breach.'],
            ['04', 'Self-Monitoring', 'Run a report on yourself to see exactly what others can find — and suppress inaccurate or unwanted records from public view.'],
            ] as [$n, $title, $body])
            <div class="bg-surface p-7 border border-[var(--border)] hover:border-emerald-400 transition rounded-lg">
                <div class="text-4xl font-bold text-emerald-500 opacity-30 mb-4">{{ $n }}</div>
                <div class="font-semibold mb-2 text-[var(--text-primary)]">{{ $title }}</div>
                <div class="text-sm text-muted leading-relaxed">{{ $body }}</div>
            </div>
            @endforeach
        </div>

        <div class="flex flex-col sm:flex-row items-start sm:items-center gap-5 p-7 bg-navy rounded-xl">
            <div class="flex-1">
                <div class="text-white font-semibold text-[15px] mb-1">Ready to try TruthFinder?</div>
                <div class="text-gray-300 text-[13px]">Access people search, dark web monitoring, and self-monitoring tools in one subscription.</div>
            </div>
            <a href="{{ $url_button->isNotEmpty() ? $url_button->first()->tracking_url : 'https://www.truthfinder.com/p/home/' }}"
                target="_blank" rel="noopener noreferrer nofollow"
                class="shrink-0 inline-flex items-center gap-2 bg-emerald-500 hover:bg-emerald-400 text-white font-semibold text-[13.5px] px-6 py-3 rounded-lg transition-all whitespace-nowrap">
                Get Started
                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6" />
                    <polyline points="15 3 21 3 21 9" />
                    <line x1="10" y1="14" x2="21" y2="3" />
                </svg>
            </a>
        </div>
    </div>
</section>

<section class="bg-surface border-b border-[var(--border)] py-20">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="text-[10px] font-bold tracking-[0.26em] uppercase text-emerald-600 mb-2">
            Assessment
        </div>
        <h2 class="fonttitle text-2xl lg:text-3xl font-bold mb-10">Strengths & Limitations</h2>
        <div class="grid md:grid-cols-2 gap-8">
            <div class="p-8 border border-emerald-200 bg-emerald-50 rounded-xl">
                <div class="text-[10px] uppercase tracking-[0.2em] text-emerald-700 font-semibold mb-5">
                    ✓ Strengths
                </div>
                <ul class="space-y-3">
                    @foreach([
                    'Searches billions of US public records instantly',
                    'Deep web scan — goes further than standard search engines',
                    'Dark web monitoring not commonly offered by competitors at this tier',
                    'Self-monitoring gives you control over your own digital footprint',
                    'Reports are well-structured and easy to read for non-technical users',
                    '24/7 live customer support via toll-free number and email',
                    ] as $pro)
                    <li class="flex gap-3 text-[14px] text-muted leading-relaxed">
                        <span class="text-emerald-600 font-bold shrink-0 mt-0.5">✓</span>
                        <span>{{ $pro }}</span>
                    </li>
                    @endforeach
                </ul>
            </div>

            <div class="p-8 border border-red-200 bg-red-50 rounded-xl">
                <div class="text-[10px] uppercase tracking-[0.2em] text-red-600 font-semibold mb-5">
                    ✗ Limitations
                </div>
                <ul class="space-y-3">
                    @foreach([
                    'Not FCRA-compliant — illegal for hiring, renting, or credit decisions',
                    'Report data accuracy varies depending on public record source quality',
                    'Reverse email lookup reported as unreliable by multiple users',
                    'Cancellation requires a phone call — no self-service option available',
                    'FTC has previously flagged the company for data accuracy concerns',
                    'Report loading can be slow for less common names or older records',
                    ] as $con)
                    <li class="flex gap-3 text-[14px] text-muted leading-relaxed">
                        <span class="text-red-500 font-bold shrink-0 mt-0.5">✗</span>
                        <span>{{ $con }}</span>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="bg-white border-b border-[var(--border)] py-20">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="text-[10px] font-bold tracking-[0.26em] uppercase text-emerald-600 mb-2">
            Suitability
        </div>
        <h2 class="fonttitle text-2xl lg:text-3xl font-bold mb-10">Who Is TruthFinder For?</h2>
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach([
            ['✓', 'Good fit', 'Reconnecting with lost contacts', 'Find updated contact info for family members, old friends, or acquaintances you have lost touch with.', 'emerald'],
            ['✓', 'Good fit', 'Informal personal verification', 'Vet someone you met online — a date, a private seller, a freelancer — before meeting in person or sharing personal details.', 'emerald'],
            ['✓', 'Good fit', 'Monitoring your own record', 'See exactly what data is publicly attached to your name and suppress inaccurate entries through the self-monitoring tool.', 'emerald'],
            ['✓', 'Good fit', 'Identifying unknown callers', 'Reverse phone lookup is the most-used feature — useful for identifying spam callers or unfamiliar numbers.', 'emerald'],
            ['✗', 'Not suitable', 'Employment background screening', 'FCRA law prohibits using TruthFinder for hiring decisions. Use an accredited consumer reporting agency instead.', 'red'],
            ['✗', 'Not suitable', 'Tenant or credit screening', 'Landlords and lenders must use FCRA-compliant services. Using TruthFinder for these decisions is a legal violation.', 'red'],
            ] as [$icon, $badge, $title, $body, $color])
            <div class="p-7 border border-[var(--border)] hover:border-{{ $color }}-400 transition rounded-xl bg-surface">
                <span class="inline-block text-[10px] font-bold px-2.5 py-1 rounded-md mb-3
                    {{ $color === 'emerald' ? 'text-emerald-700 bg-emerald-100' : 'text-red-600 bg-red-100' }}">
                    {{ $icon }} {{ $badge }}
                </span>
                <div class="font-semibold mb-2 text-[var(--text-primary)] text-[14px]">{{ $title }}</div>
                <div class="text-sm text-muted leading-relaxed">{{ $body }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="bg-surface border-b border-[var(--border)] py-20">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-14 items-center">
            <div>
                <div class="text-[10px] font-bold tracking-[0.26em] uppercase text-emerald-600 mb-2"> Final Verdict </div>
                <h2 class="fonttitle text-2xl lg:text-3xl font-bold mb-6"> Is TruthFinder Worth It? </h2>

                <p class="text-[15px] text-muted leading-relaxed mb-5">
                    TruthFinder is a <strong class="text-navy">legitimate, well-established service</strong>
                    for personal-use background research. Its dark web monitoring and self-monitoring
                    features genuinely differentiate it from simpler people-search tools.
                </p>

                <p class="text-[15px] text-muted leading-relaxed mb-5">
                    The main practical concerns: cancellation requires a phone call, and report accuracy
                    varies by subject. If you need ongoing identity monitoring, compare it against
                    dedicated services such as LifeLock or Aura which also offer FCRA-compliant features.
                </p>

                <div class="pl-6 py-1 mb-8">
                    <p class="text-[15px] text-muted leading-relaxed">
                        <strong class="text-navy">Bottom line:</strong> Use TruthFinder for personal curiosity,
                        informal vetting, or self-monitoring. Never for legally regulated screening decisions.
                    </p>
                </div>

                <a href="{{ $url_button->isNotEmpty() ? $url_button->first()->tracking_url : 'https://www.truthfinder.com/p/home/' }}"
                    target="_blank" rel="noopener noreferrer nofollow"
                    class="inline-flex items-center gap-2 bg-emerald-600 hover:bg-emerald-700 text-white font-semibold text-[14px] px-7 py-3.5 rounded-lg transition-all hover:shadow-lg hover:shadow-emerald-500/25">
                    Visit TruthFinder Official Site
                    <svg class="w-4 h-4 shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6" />
                        <polyline points="15 3 21 3 21 9" />
                        <line x1="10" y1="14" x2="21" y2="3" />
                    </svg>
                </a>
            </div>

            <div class="bg-white border border-[var(--border)] rounded-xl p-8 shadow-sm">
                <div class="text-[10px] uppercase tracking-[0.2em] text-emerald-700 font-semibold mb-6">
                    Quick Summary
                </div>
                <div class="space-y-1">
                    @foreach([
                    ['Best For', 'Personal research, informal vetting, self-monitoring'],
                    ['Not For', 'Employment, tenant, or credit screening (illegal)'],
                    ['Standout Feature','Dark web monitoring + self-record suppression'],
                    ['Data Coverage', 'Billions of US public records'],
                    ['Support', '24/7 via phone and email'],
                    ['Our Rating', '4.5 / 5 — Recommended for personal use'],
                    ] as [$label, $value])
                    <div class="flex gap-4 py-3.5 border-b border-[var(--border)] last:border-0">
                        <div class="text-[11px] font-bold text-navy uppercase tracking-wide w-36 shrink-0 mt-0.5">{{ $label }}</div>
                        <div class="text-[13px] text-muted leading-relaxed">{{ $value }}</div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('related')
<section class="bg-white border-t border-[var(--border)] py-16">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="text-[10px] font-bold tracking-[0.26em] uppercase text-emerald-600 mb-8">
            Related Articles
        </div>
        <div class="grid md:grid-cols-3 gap-6">
            @foreach([
            ['finance.behavior.risk_tolerance', 'Risk', 'Risk Tolerance', 'Understand your personal risk profile — and how identity exposure feeds financial risk.'],
            ['finance.behavior.decision_bias', 'Bias', 'Financial Decision Bias', 'Why people underestimate identity theft risk and over-trust digital services.'],
            ['finance.behavior.consumer_trends','Consumer', 'Consumer Trends', 'Subscription fatigue, data exposure, and the rising cost of personal digital security.'],
            ] as [$route, $cat, $title, $body])
            <a href="{{ route($route) }}" class="block border border-[var(--border)] bg-surface p-6 hover:shadow-md transition rounded-lg">
                <div class="text-xs uppercase tracking-wider text-emerald-600 font-semibold mb-2">{{ $cat }}</div>
                <div class="fonttitle text-lg font-bold mb-2">{{ $title }}</div>
                <p class="text-sm text-muted mb-4">{{ $body }}</p>
                <span class="text-xs uppercase tracking-wider text-emerald-600 font-semibold">Read More →</span>
            </a>
            @endforeach
        </div>
    </div>
</section>
@endsection