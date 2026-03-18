@extends('layouts.personal-finance')

@section('title', 'Consumer Trends — How Markets Shape Your Spending')
@section('breadcrumb', 'Consumer Trends')
@section('eyebrow', 'Behavior · Market Context')
@section('page_title', 'Consumer Trends'.now()->year)
@section('page_lead', 'Understanding macro consumer trends protects your purchasing power, informs your investment thesis, and reveals the structural forces shaping what you earn and what you pay.')

@section('content')

<section class="bg-surface border-b border-[var(--border)] py-20">

    <div class="max-w-7xl mx-auto px-6 lg:px-12">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-14 items-start">

            <div>

                <div class="flex items-center gap-3 mb-4 text-[10px] font-bold tracking-[0.26em] uppercase text-indigo">
                    <span class="w-[22px] h-[1px] bg-indigo block"></span>
                    {{ now()->year }} Landscape
                </div>

                <h2 class="fonttitle text-4xl lg:text-5xl text-navy mb-8 leading-tight">
                    The Forces Reshaping Consumer Finance
                </h2>

                <p class="text-[15px] text-muted leading-relaxed mb-5">
                    Consumer spending patterns in {{ now()->year }} are shaped by three dominant forces:
                    <strong class="text-navy">post-pandemic normalisation</strong>,
                    <strong class="text-navy">AI-driven productivity shifts</strong>,
                    and the ongoing <strong class="text-navy">cost-of-living pressure</strong>
                    in housing and food.
                    Each creates both risks and opportunities for the informed consumer.
                </p>

                <p class="text-[15px] text-muted leading-relaxed mb-6">
                    The most important trend for personal finances:
                    <strong class="text-navy">subscription fatigue</strong>.
                    The average household now pays for 6–10 subscription services,
                    with most unable to accurately recall their total monthly subscription cost.
                    Auditing recurring charges is now a standard annual financial task.
                </p>

                <div class="border border-indigo/20 bg-indigo-light p-6 rounded-md">

                    <div class="text-[10px] font-bold tracking-[0.22em] uppercase text-indigo mb-2">
                        Subscription Audit
                    </div>

                    <p class="text-[13px] text-muted leading-relaxed">
                        The average US household spends <strong class="text-navy">$273/month</strong>
                        on subscriptions in {{ now()->year }}, up from $86 in 2018.
                        Most households can cut 30–40% without noticing the loss.
                    </p>

                </div>

            </div>

            <div>

                <div class="border-l-4 border-indigo bg-white shadow-sm p-7 mb-4">

                    <div class="fonttitle text-5xl font-black text-indigo mb-2">
                        $273
                    </div>

                    <div class="text-xs text-muted uppercase tracking-wider">
                        Average US household monthly subscription spend — audit yours
                    </div>

                </div>

                <ul class="space-y-3">

                    <li class="flex gap-3 text-[14px] text-muted leading-relaxed">
                        <span class="text-indigo font-semibold">→</span>
                        <span>Cancel subscriptions you have not used in 60 days</span>
                    </li>

                    <li class="flex gap-3 text-[14px] text-muted leading-relaxed">
                        <span class="text-indigo font-semibold">→</span>
                        <span>Review annual subscriptions before auto-renewal</span>
                    </li>

                    <li class="flex gap-3 text-[14px] text-muted leading-relaxed">
                        <span class="text-indigo font-semibold">→</span>
                        <span>Negotiate — most services offer retention discounts when you cancel</span>
                    </li>

                    <li class="flex gap-3 text-[14px] text-muted leading-relaxed">
                        <span class="text-indigo font-semibold">→</span>
                        <span>Share family plans across households where legally permitted</span>
                    </li>

                    <li class="flex gap-3 text-[14px] text-muted leading-relaxed">
                        <span class="text-indigo font-semibold">→</span>
                        <span>Track subscriptions with a dedicated row in your monthly budget</span>
                    </li>

                </ul>

            </div>

        </div>

    </div>

</section>


<section class="bg-white border-b border-[var(--border)] py-20">

    <div class="max-w-7xl mx-auto px-6 lg:px-12">

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

            <div class="bg-surface p-8 border border-[var(--border)] hover:border-indigo transition">

                <div class="text-5xl font-extrabold text-indigo/20 mb-4">
                    01
                </div>

                <div class="font-semibold text-navy mb-2">
                    Audit All Subscriptions
                </div>

                <p class="text-sm text-muted leading-relaxed">
                    Pull every recurring charge from the last 2 months.
                    List service, amount, and last date used.
                    Most people find 3–5 forgotten ones.
                </p>

            </div>


            <div class="bg-surface p-8 border border-[var(--border)] hover:border-indigo transition">

                <div class="text-5xl font-extrabold text-indigo/20 mb-4">
                    02
                </div>

                <div class="font-semibold text-navy mb-2">
                    Categorise Spending by Value
                </div>

                <p class="text-sm text-muted leading-relaxed">
                    Essential (utilities, insurance), high-value (used weekly),
                    low-value (used rarely). Cancel all low-value immediately.
                </p>

            </div>


            <div class="bg-surface p-8 border border-[var(--border)] hover:border-indigo transition">

                <div class="text-5xl font-extrabold text-indigo/20 mb-4">
                    03
                </div>

                <div class="font-semibold text-navy mb-2">
                    Monitor Inflation by Category
                </div>

                <p class="text-sm text-muted leading-relaxed">
                    Housing, food, and energy inflate faster than headline CPI.
                    Track your personal inflation rate, not the national average.
                </p>

            </div>


            <div class="bg-surface p-8 border border-[var(--border)] hover:border-indigo transition">

                <div class="text-5xl font-extrabold text-indigo/20 mb-4">
                    04
                </div>

                <div class="font-semibold text-navy mb-2">
                    Align Spending With Goals
                </div>

                <p class="text-sm text-muted leading-relaxed">
                    Map every major spending category to a life goal.
                    Spending that maps to no goal is a candidate for reduction.
                </p>

            </div>

        </div>

    </div>

</section>

@endsection


@section('related')

<section class="bg-surface border-t border-[var(--border)] pt-16">

    <div class="max-w-7xl mx-auto px-6 lg:px-12">

        <div class="text-[10px] font-bold tracking-[0.26em] uppercase text-indigo mb-10">
            Related Articles
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            <a href="{{route('finance.planning.budget')}}" class="bg-white border border-[var(--border)] p-8 hover:shadow-md transition block">

                <div class="text-xs uppercase tracking-widest text-indigo mb-2">
                    Budgeting
                </div>

                <div class="fonttitle text-lg text-navy mb-2">
                    The 50/30/20 Rule
                </div>

                <p class="text-sm text-muted mb-4">
                    Apply behavioural insights to your monthly budget structure.
                </p>

                <div class="text-xs uppercase tracking-widest text-indigo">
                    Read More →
                </div>

            </a>


            <a href="{{route('finance.behavior.spending')}}" class="bg-white border border-[var(--border)] p-8 hover:shadow-md transition block">

                <div class="text-xs uppercase tracking-widest text-indigo mb-2">
                    Spending
                </div>

                <div class="fonttitle text-lg text-navy mb-2">
                    Spending Behavior
                </div>

                <p class="text-sm text-muted mb-4">
                    Translate consumer trend awareness into personal spending changes.
                </p>

                <div class="text-xs uppercase tracking-widest text-indigo">
                    Read More →
                </div>

            </a>


            <a href="{{route('finance.behavior.psychology')}}" class="bg-white border border-[var(--border)] p-8 hover:shadow-md transition block">

                <div class="text-xs uppercase tracking-widest text-indigo mb-2">
                    Psychology
                </div>

                <div class="fonttitle text-lg text-navy mb-2">
                    Money Psychology
                </div>

                <p class="text-sm text-muted mb-4">
                    The psychological drivers behind consumer trend participation.
                </p>

                <div class="text-xs uppercase tracking-widest text-indigo">
                    Read More →
                </div>

            </a>

        </div>

    </div>

</section>

@endsection