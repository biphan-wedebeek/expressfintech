@extends('layouts.personal-finance')

@section('title', 'Online Background Check — Search Billions of Public Records')
@section('breadcrumb', 'Background Check')
@section('eyebrow', 'Behavior · Background Screening')
@section('page_title', 'Online Background Check')
@section('page_lead', 'Billions of public records — social media, photos, court filings, civil judgments, contact information and more — compiled into a single, easy-to-read report. Due diligence used to take weeks. Now it takes minutes.')

@section('content')

<section class="bg-surface border-b border-[var(--border)] py-20">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="grid lg:grid-cols-2 gap-14 items-start">
            <div>
                <div class="flex items-center gap-3 mb-4 uppercase tracking-[0.25em] text-emerald-600 text-xs font-semibold">
                    <span class="w-6 h-px bg-emerald-500"></span>
                    Public Records, Instantly
                </div>

                <h2 class="fonttitle text-emerald-900 text-3xl md:text-4xl mb-8">
                    What an Online Background Check Actually Uncovers
                </h2>

                <p class="text-muted leading-relaxed mb-5">
                    Most financial mistakes involving other people share a common root: incomplete information.
                    Whether you are lending money, meeting someone from an online marketplace, or entering a new
                    relationship — knowing someone's public record history is a basic act of financial self-protection.
                </p>

                <p class="text-muted leading-relaxed mb-5">
                    An <strong class="text-emerald-900">online background check</strong> scans billions of public records
                    across government databases, court systems, social platforms, and more — then compiles everything
                    into a structured, easy-to-read report. What once required lawyers and weeks of paperwork now
                    takes a few minutes and a name.
                </p>

                <div class="border border-emerald-200 bg-emerald-100/40 p-6 rounded">
                    <div class="uppercase tracking-[0.2em] text-xs text-emerald-600 font-semibold mb-2">
                        Key Insight
                    </div>
                    <p class="text-muted text-sm leading-relaxed">
                        Public records are legally accessible to anyone — but most people never look.
                        Employers, landlords, and lenders already run these checks before making decisions that involve you.
                        Knowing what they see — and knowing the same about others — is simply informed decision-making.
                    </p>
                </div>

                <div class="mt-8 flex flex-col sm:flex-row gap-4">
                    <a href="{{ $url_button->isNotEmpty() ? $url_button->first()->tracking_url : 'https://www.truthfinder.com/?utm_source=RH7F&traffic%5Bsource%5D=RH7F&utm_medium=&traffic%5Bmedium%5D=&utm_' }}" target="_blank" rel="nofollow noopener"
                        class="inline-block bg-emerald-600 hover:bg-emerald-700 text-white text-sm font-semibold uppercase tracking-widest px-6 py-3 rounded transition text-center">
                        Run a Background Check →
                    </a>
                    <a href="{{ $url_button->isNotEmpty() ? $url_button->first()->tracking_url : 'https://www.truthfinder.com/?utm_source=RH7F&traffic%5Bsource%5D=RH7F&utm_medium=&traffic%5Bmedium%5D=&utm_' }}" target="_blank" rel="nofollow noopener"
                        class="inline-block border border-emerald-600 text-emerald-700 hover:bg-emerald-50 text-sm font-semibold uppercase tracking-widest px-6 py-3 rounded transition text-center">
                        Check Your Own Record →
                    </a>
                </div>
            </div>

            <div>
                <div class="grid grid-cols-2 gap-4 mb-6">
                    <div class="border-l-4 border-emerald-500 bg-white shadow-sm p-6">
                        <div class="fonttitle text-4xl text-emerald-600 mb-1">A+</div>
                        <div class="text-xs uppercase tracking-wide text-emerald-900/60">Rated by the Better Business Bureau</div>
                    </div>
                    <div class="border-l-4 border-emerald-500 bg-white shadow-sm p-6">
                        <div class="fonttitle text-4xl text-emerald-600 mb-1">60K+</div>
                        <div class="text-xs uppercase tracking-wide text-emerald-900/60">Verified 5-Star Reviews from real users</div>
                    </div>
                </div>

                <div class="bg-white border border-[var(--border)] p-6">
                    <div class="text-xs uppercase tracking-[0.2em] text-emerald-600 font-semibold mb-4">
                        Records a Report May Include
                    </div>
                    <ul class="space-y-3 text-muted text-sm">
                        <li class="flex gap-3">
                            <span class="text-emerald-600 font-semibold">→</span>
                            <span><strong class="text-emerald-900">Court & Police Records</strong>: felonies, misdemeanors, traffic citations, mugshots</span>
                        </li>
                        <li class="flex gap-3">
                            <span class="text-emerald-600 font-semibold">→</span>
                            <span><strong class="text-emerald-900">Financial Assets</strong>: property records, civil judgments, bankruptcies</span>
                        </li>
                        <li class="flex gap-3">
                            <span class="text-emerald-600 font-semibold">→</span>
                            <span><strong class="text-emerald-900">Contact Information</strong>: phone numbers, email addresses, current and past addresses</span>
                        </li>
                        <li class="flex gap-3">
                            <span class="text-emerald-600 font-semibold">→</span>
                            <span><strong class="text-emerald-900">Social Media & Photos</strong>: linked accounts and public profile activity</span>
                        </li>
                        <li class="flex gap-3">
                            <span class="text-emerald-600 font-semibold">→</span>
                            <span><strong class="text-emerald-900">Birth, Death & Education Records</strong>: verified personal history</span>
                        </li>
                        <li class="flex gap-3">
                            <span class="text-emerald-600 font-semibold">→</span>
                            <span><strong class="text-emerald-900">Possible Relatives</strong>: known associates and family connections</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-white border-b border-[var(--border)] py-20">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="mb-12">
            <div class="text-[10px] font-bold tracking-[0.26em] uppercase text-emerald-600 mb-3">
                When It Matters Most
            </div>
            <h2 class="fonttitle text-emerald-900 text-2xl md:text-3xl">
                Four Situations Where a Background Check Protects You
            </h2>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach([
            ['01', 'Online Dating', 'Verify age, identity, and criminal history before meeting someone in person. A profile photo is not proof of identity.'],
            ['02', 'Marketplace Buyers & Sellers', 'Before sharing your address or handing over cash, confirm who you are actually dealing with via public records.'],
            ['03', 'New Neighbours & Tenants', 'Moving to a new area or renting out a property? A background report gives public record context before you commit.'],
            ['04', 'Financial & Business Partners', 'Before any shared account, informal loan, or joint investment — verify the other party has a clean public record history.'],
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

<section class="bg-surface border-b border-[var(--border)] py-20">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="grid lg:grid-cols-2 gap-14 items-center">
            <div>
                <div class="text-[10px] font-bold tracking-[0.26em] uppercase text-emerald-600 mb-3">
                    Search Options
                </div>
                <h2 class="fonttitle text-emerald-900 text-2xl md:text-3xl mb-6">
                    Four Ways to Start a Search
                </h2>
                <p class="text-muted leading-relaxed">
                    Whether you have a name, a phone number, an address, or just an email — each search type scans
                    billions of public records and returns a structured report within minutes.
                </p>
            </div>

            <div class="divide-y divide-[var(--border)]">
                @foreach([
                ['By Name', 'Enter a first and last name — add a state to narrow results instantly.'],
                ['By Phone Number', 'Reverse lookup identifies the owner of any number and their linked records.'],
                ['By Address', 'Reveals current and past residents at any property across the country.'],
                ['By Email', 'Connects an email address to a real identity before any financial engagement.'],
                ] as $i => [$title, $body])
                <div class="flex items-start gap-6 py-5">
                    <div class="text-xl font-bold text-emerald-500 opacity-40 w-8 flex-shrink-0 mt-0.5">
                        {{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}
                    </div>
                    <div>
                        <div class="font-semibold text-emerald-900 mb-1">{{ $title }}</div>
                        <p class="text-sm text-muted leading-relaxed">{{ $body }}</p>
                    </div>
                </div>
                @endforeach
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
            ['finance.behavior.identity_protection', 'Identity', 'Identity Protection', 'Practical steps to protect your personal and financial identity online.'],
            ['finance.behavior.public_records', 'Records', 'Public Records Lookup', 'How to search public records to verify anyone before you trust them financially.'],
            ['finance.behavior.consumer_trends', 'Trends', 'Consumer Trends', 'How shifting behaviours affect your financial decisions and risks.'],
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