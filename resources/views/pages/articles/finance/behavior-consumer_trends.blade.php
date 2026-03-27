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
                <div class="flex items-center gap-3 mb-4 text-[10px] font-bold tracking-[0.26em] uppercase text-emerald-600">
                    <span class="w-6 h-px bg-emerald-600"></span>
                    {{ now()->year }} Landscape
                </div>
                <h2 class="fonttitle text-3xl lg:text-4xl font-bold leading-tight mb-6">
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

                <div class="border border-emerald-200 bg-emerald-50 p-6 rounded-lg">
                    <div class="text-[10px] uppercase tracking-[0.2em] text-emerald-700 font-semibold mb-2">
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
                <div class="border-l-4 border-yellow-500 bg-white p-8 shadow-sm">
                    <div class="fonttitle text-6xl font-black text-yellow-500 mb-2">
                        $273
                    </div>

                    <div class="text-xs uppercase tracking-[0.1em] text-muted">
                        Average US household monthly subscription spend — audit yours
                    </div>
                </div>

                <ul class="space-y-3">
                    <li class="flex gap-3 text-[14px] text-muted leading-relaxed">
                        <span class="text-emerald-600 font-semibold">→</span>
                        <span>Cancel subscriptions you have not used in 60 days</span>
                    </li>

                    <li class="flex gap-3 text-[14px] text-muted leading-relaxed">
                        <span class="text-emerald-600 font-semibold">→</span>
                        <span>Review annual subscriptions before auto-renewal</span>
                    </li>

                    <li class="flex gap-3 text-[14px] text-muted leading-relaxed">
                        <span class="text-emerald-600 font-semibold">→</span>
                        <span>Negotiate — most services offer retention discounts when you cancel</span>
                    </li>

                    <li class="flex gap-3 text-[14px] text-muted leading-relaxed">
                        <span class="text-emerald-600 font-semibold">→</span>
                        <span>Share family plans across households where legally permitted</span>
                    </li>

                    <li class="flex gap-3 text-[14px] text-muted leading-relaxed">
                        <span class="text-emerald-600 font-semibold">→</span>
                        <span>Track subscriptions with a dedicated row in your monthly budget</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="bg-white border-b border-[var(--border)] py-20">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach([
            ['01','Audit All Subscriptions','Pull every recurring charge from the last 2 months. List service, amount, and last date used. Most people find 3–5 forgotten ones.'],
            ['02','Categorise Spending by Value','Essential (utilities, insurance), high-value (used weekly), low-value (used rarely). Cancel all low-value immediately.'],
            ['03','Monitor Inflation by Category','Housing, food, and energy inflate faster than headline CPI. Track your personal inflation rate, not the national average.'],
            ['04','Align Spending With Goals','Map every major spending category to a life goal. Spending that maps to no goal is a candidate for reduction.'],
            ] as [$n,$title,$body])

            <div class="bg-surface p-7 border border-[var(--border)] hover:border-emerald-400 transition">
                <div class="text-4xl font-bold text-emerald-500 opacity-40 mb-4"> {{ $n }} </div>
                <div class="font-semibold mb-2 text-[var(--text-primary)]"> {{ $title }} </div>
                <div class="text-sm text-muted leading-relaxed"> {{ $body }} </div>
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
            ['finance.planning.budget','Budgeting','The 50/30/20 Rule','Apply behavioural insights to your monthly budget structure.'],
            ['finance.behavior.spending','Spending','Spending Behavior','Translate consumer trend awareness into personal spending changes.'],
            ['finance.behavior.psychology','Psychology','Money Psychology','The psychological drivers behind consumer trend participation.'],
            ] as [$route,$cat,$title,$body])

            <a href="{{ route($route) }}" class="block border border-[var(--border)] bg-surface p-6 hover:shadow-md transition">
                <div class="text-xs uppercase tracking-wider text-emerald-600 font-semibold mb-2"> {{ $cat }} </div>
                <div class="fonttitle text-lg font-bold mb-2"> {{ $title }} </div>
                <p class="text-sm text-muted mb-4"> {{ $body }} </p>
                <span class="text-xs uppercase tracking-wider text-emerald-600 font-semibold"> Read More → </span>
            </a>
            @endforeach
        </div>
    </div>
</section>
@endsection