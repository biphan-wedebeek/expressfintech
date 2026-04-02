@extends('layouts.personal-finance')

@section('title', 'Public Records Lookup — Verify Anyone Before You Trust Them')
@section('breadcrumb', 'Public Records Lookup')
@section('eyebrow', 'Behavior · People Verification')
@section('page_title', 'Public Records Lookup')
@section('page_lead', 'Before you lend money, meet a stranger, or reconnect with someone from the past — knowing who you are dealing with is a basic act of financial self-protection. A public records search turns scattered data into a single, readable report.')

@section('content')

<section class="bg-surface border-b border-[var(--border)] py-20">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="grid lg:grid-cols-2 gap-14 items-start">
            <div>
                <div class="flex items-center gap-3 mb-4 uppercase tracking-[0.25em] text-emerald-600 text-xs font-semibold">
                    <span class="w-6 h-px bg-emerald-500"></span>
                    Know Who You Are Dealing With
                </div>

                <h2 class="fonttitle text-emerald-900 text-3xl md:text-4xl mb-8">
                    What a Public Records Search Actually Reveals — and Why It Matters Financially
                </h2>

                <p class="text-muted leading-relaxed mb-5">
                    Most financial mistakes involving other people are not caused by bad luck — they are caused by incomplete information.
                    Lending money to someone with a history of civil judgments, sending a deposit to an unverified seller, or entering a joint financial arrangement with a stranger are all preventable risks.
                </p>

                <p class="text-muted leading-relaxed mb-5">
                    A <strong class="text-emerald-900">public records search</strong> aggregates publicly available records — court filings, address history, contact information, criminal records, and social profiles — into a single, structured report.
                    It does not replace judgment, but it removes the information gap that scammers, fraudsters, and unreliable parties rely on.
                </p>

                <div class="border border-emerald-200 bg-emerald-100/40 p-6 rounded">
                    <div class="uppercase tracking-[0.2em] text-xs text-emerald-600 font-semibold mb-2">
                        Key Insight
                    </div>
                    <p class="text-muted text-sm leading-relaxed">
                        Between 2016 and 2021, the total number of annual fraud and identity theft reports to the FTC nearly doubled.
                        Verifying the people you interact with financially is no longer optional — it is a standard due-diligence step.
                    </p>
                </div>
            </div>

            <div>
                <div class="bg-white border border-[var(--border)] p-6 mb-6">
                    <div class="text-xs uppercase tracking-[0.2em] text-emerald-600 font-semibold mb-4">
                        How the Search Works
                    </div>
                    <div class="divide-y divide-[var(--border)]">
                        @foreach([
                        ['Step 1 — Enter a Name', 'Type in the first and last name of the person you are looking for.'],
                        ['Step 2 — Add Age & City', 'Narrow the results by providing an approximate age and city or state.'],
                        ['Step 3 — Select & View', 'Pick the matching record and the full report is compiled instantly.'],
                        ] as [$step, $desc])
                        <div class="py-4 flex gap-4 items-start">
                            <span class="text-emerald-600 font-semibold text-sm flex-shrink-0">→</span>
                            <div>
                                <div class="font-semibold text-emerald-900 text-sm mb-0.5">{{ $step }}</div>
                                <div class="text-xs text-muted">{{ $desc }}</div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <ul class="space-y-3 text-muted text-sm">
                    <li class="flex gap-3">
                        <span class="text-emerald-600 font-semibold">→</span>
                        <span><strong class="text-emerald-900">Criminal & court records</strong>: felonies, misdemeanors, traffic citations, mugshots</span>
                    </li>
                    <li class="flex gap-3">
                        <span class="text-emerald-600 font-semibold">→</span>
                        <span><strong class="text-emerald-900">Address & contact info</strong>: current and past addresses, phone numbers, email</span>
                    </li>
                    <li class="flex gap-3">
                        <span class="text-emerald-600 font-semibold">→</span>
                        <span><strong class="text-emerald-900">Social media profiles</strong>: linked accounts and public activity</span>
                    </li>
                    <li class="flex gap-3">
                        <span class="text-emerald-600 font-semibold">→</span>
                        <span><strong class="text-emerald-900">Civil judgments & property</strong>: financial disputes, liens, assets</span>
                    </li>
                    <li class="flex gap-3">
                        <span class="text-emerald-600 font-semibold">→</span>
                        <span>Searches are confidential — the subject is never notified</span>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</section>

<section class="bg-navy border-b border-[var(--border)] overflow-hidden ">
    <div class="max-w-7xl mx-auto">
        <div class="grid lg:grid-cols-2 gap-14 items-start">
            <div class="text-white px-10 lg:px-16 py-16 flex flex-col justify-center">
                <div class="text-xs uppercase tracking-[0.26em] text-emerald-400 font-bold mb-3">
                    How It Works
                </div>
                <h2 class="fonttitle text-white! text-2xl md:text-3xl mb-10 leading-snug">
                    Three Steps From a Name<br>to a Full Report
                </h2>

                <div class="space-y-7">
                    @foreach([
                    ['1', 'Enter a Name', 'Type in the first and last name. Add a city or state to narrow the results.'],
                    ['2', 'Review the Results', 'A list of matching records appears. Select the individual you are searching for.'],
                    ['3', 'Read the Report', 'Clear sections: personal details, address history, criminal records, contact info, and social profiles.'],
                    ] as [$n, $title, $body])
                    <div class="flex gap-5 items-start">
                        <div class="w-8 h-8 rounded-full bg-emerald-500 flex-shrink-0 flex items-center justify-center text-white font-bold text-sm">
                            {{ $n }}
                        </div>
                        <div>
                            <div class="font-semibold text-white mb-1">{{ $title }}</div>
                            <p class="text-gray-400 text-sm leading-relaxed">{{ $body }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="mt-8">
                    <a href="{{ $url_button->isNotEmpty() ? $url_button->first()->tracking_url : 'https://www.truthfinder.com/search/?utm_source=RH7F&traffic' }}" target="_blank" rel="nofollow noopener"
                        class="inline-block bg-emerald-600 hover:bg-emerald-700 text-white text-sm font-semibold uppercase tracking-widest px-8 py-3 rounded text-center transition-all duration-300 transform hover:scale-105">
                        Search Now →
                    </a>
                </div>
            </div>
            <a href="{{ $url_button->isNotEmpty() ? $url_button->first()->tracking_url : 'https://www.truthfinder.com/search/?utm_source=RH7F&traffic' }}"
                target="_blank" rel="nofollow noopener"
                class="flex items-center justify-center h-full group">

                <div class="w-full max-w-[520px]">
                    <img src="{{ $url_button->isNotEmpty() ? $url_button->first()->image_url : 'https://inspirationfeed.com/wp-content/uploads/2024/06/Public-Records-Searches.jpg' }}"
                        alt="Public Records Search"
                        class="w-full h-auto object-cover transition-transform duration-500 group-hover:scale-105">
                </div>

            </a>
        </div>
    </div>
</section>

<section class="bg-white border-b border-[var(--border)] py-20">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach([
            ['01', 'Verify Before You Lend', 'Before lending money to a friend or family member, understanding their financial and legal history reduces the emotional cost of a bad decision.'],
            ['02', 'Screen Online Sellers & Buyers','Marketplace fraud is rising. Confirming an identity before exchanging money or sharing your address is standard due diligence.'],
            ['03', 'Check a New Contact', 'Meeting someone new through dating apps, business introductions, or online communities? A quick records check closes the information gap before trust is extended.'],
            ['04', 'Run a Self-Check', 'Knowing what others can find about you online is the first step to managing your digital financial reputation and correcting inaccurate records.'],
            ] as [$n, $title, $body])
            <div class="bg-surface p-7 border border-[var(--border)] hover:border-emerald-400 transition">
                <div class="text-4xl font-bold text-emerald-500 opacity-40 mb-4">{{ $n }}</div>
                <div class="font-semibold mb-2 text-[var(--text-primary)]">{{ $title }}</div>
                <div class="text-sm text-muted leading-relaxed">{{ $body }}</div>
            </div>
            @endforeach
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
            ['finance.behavior.identity_protection', 'Identity', 'Identity Protection', 'Practical steps to protect your personal and financial identity online.'],
            ['finance.behavior.consumer_trends', 'Trends', 'Consumer Trends', 'How shifting behaviours affect your financial decisions and risks.'],
            ['finance.behavior.decision_bias', 'Bias', 'Cognitive Biases in Finance', 'The mental shortcuts that often cost money.'],
            ] as [$route, $cat, $title, $body])
            <a href="{{ route($route) }}" class="block border border-[var(--border)] bg-surface p-6 hover:shadow-md transition">
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