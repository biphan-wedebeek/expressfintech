{{-- resources/views/layouts/credit-cards.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name='impact-site-verification' value='e4bf24d0-e930-4ad6-b364-a86751a3d024'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('expressfintech.png') }}">
    <title>@yield('title', 'Credit Cards') — Express Fintech</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .hero-gradient {
            background: linear-gradient(145deg, #1e0a3c 0%, #2d1060 40%, #3b0764 70%, #1e0a3c 100%);
        }

        /* Subtle mesh overlay */
        .mesh-overlay {
            background-image:
                radial-gradient(ellipse at 20% 50%, rgba(167,139,250,0.12) 0%, transparent 60%),
                radial-gradient(ellipse at 80% 20%, rgba(139,92,246,0.10) 0%, transparent 50%),
                radial-gradient(ellipse at 60% 80%, rgba(196,181,253,0.08) 0%, transparent 50%);
        }

        /* Sidebar nav */
        .sidebar-link { border-left: 3px solid transparent; transition: all 0.2s ease; }
        .sidebar-link:hover { border-left-color: #c4b5fd; background: #f5f3ff; color: #7c3aed; }
        .sidebar-link.active {
            background: linear-gradient(90deg, #f5f3ff, #ede9fe);
            color: #7c3aed;
            border-left-color: #7c3aed;
        }

        /* Section group headers */
        .group-header {
            font-size: 9.5px; font-weight: 800; letter-spacing: .16em;
            text-transform: uppercase; color: #a78bfa;
            padding: 0 12px; margin: 4px 0 2px;
        }

        /* Prose */
        .prose-cards h2 {
            font-size: 1.55rem; font-weight: 700;
            color: #1e0a3c;
            margin: 2.5rem 0 1rem;
            padding-bottom: .5rem;
            border-bottom: 2px solid #ede9fe;
        }
        .prose-cards h3 { font-size: 1.05rem; font-weight: 600; color: #4c1d95; margin: 1.75rem 0 .6rem; }
        .prose-cards p { color: #374151; line-height: 1.85; margin-bottom: 1.1rem; }
        .prose-cards ul, .prose-cards ol { padding-left: 1.5rem; margin-bottom: 1.2rem; }
        .prose-cards li { color: #374151; margin-bottom: .45rem; line-height: 1.7; }

        /* Cards */
        .cc-card { transition: transform .2s ease, box-shadow .2s ease; }
        .cc-card:hover { transform: translateY(-3px); box-shadow: 0 12px 32px rgba(30,10,60,.12); }

        /* Table */
        .cc-table tr:hover td { background: #fdfbff; }

        /* Badge */
        .badge-violet {
            background: #ede9fe; color: #5b21b6;
            border: 1px solid rgba(124,58,237,.2);
            font-size: 9.5px; font-weight: 700; letter-spacing: .12em;
            text-transform: uppercase; padding: 3px 9px; border-radius: 20px;
        }

        /* TOC inside article */
        .toc-link { transition: all .15s; }
        .toc-link:hover { color: #7c3aed; padding-left: 4px; }

        /* Animations */
        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(14px); }
            to   { opacity: 1; transform: translateY(0); }
        }
        .fade-up   { animation: fadeUp .5s ease both; }
        .fade-up-2 { animation: fadeUp .5s .1s ease both; }
        .fade-up-3 { animation: fadeUp .5s .2s ease both; }

        /* Hero stat card */
        .hero-stat {
            background: rgba(255,255,255,0.07);
            border: 1px solid rgba(196,181,253,.25);
            backdrop-filter: blur(6px);
        }

        /* Breadcrumb */
        .bsep::before { content: '/'; margin: 0 8px; opacity: .35; }

        /* Scrollbar */
        ::-webkit-scrollbar { width: 4px; }
        ::-webkit-scrollbar-track { background: #f5f3ff; }
        ::-webkit-scrollbar-thumb { background: #c4b5fd; border-radius: 2px; }
    </style>
    @stack('styles')
</head>
<body class="bg-[#f7f5ff] text-[#1e0a3c]">

{{-- ══ HEADER ══ --}}
@include('partials.header')

{{-- ══ HERO ══ --}}
<div class="hero-gradient relative overflow-hidden">
    <div class="mesh-overlay absolute inset-0"></div>

    {{-- Decorative card shapes --}}
    <div class="absolute top-6 right-16 w-48 h-28 rounded-2xl opacity-[0.06] rotate-12"
         style="background:linear-gradient(135deg,#a78bfa,#7c3aed);border:1px solid rgba(196,181,253,.3)"></div>
    <div class="absolute top-14 right-36 w-48 h-28 rounded-2xl opacity-[0.04] rotate-6"
         style="background:linear-gradient(135deg,#c4b5fd,#8b5cf6);border:1px solid rgba(196,181,253,.2)"></div>
    <div class="absolute -bottom-8 left-1/4 w-64 h-64 rounded-full opacity-[0.06]"
         style="background:radial-gradient(circle,#a78bfa,transparent)"></div>

    <div class="max-w-screen-xl mx-auto py-13 relative z-10" style="padding-top:52px;padding-bottom:52px">

        {{-- Breadcrumb --}}
        <nav class="flex items-center text-[11.5px] text-purple-300/60 mb-6 font-mono-sp tracking-wide">
            <a href="{{ route('home') }}" class="hover:text-purple-200 transition-colors">Home</a>
            <span class="bsep"></span>
            <span class="hover:text-purple-200 transition-colors">Credit Cards</span>
            <span class="bsep"></span>
            <span class="text-purple-200/80">@yield('breadcrumb_section', 'Analysis')</span>
            @hasSection('breadcrumb_current')
            <span class="bsep"></span>
            <span class="text-white/50">@yield('breadcrumb_current')</span>
            @endif
        </nav>

        <div class="grid grid-cols-[1fr_auto] gap-10 items-start">
            <div>
                {{-- Section label --}}
                <div class="inline-flex items-center gap-2.5 mb-4 fade-up">
                    <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full text-[10.5px] font-bold uppercase tracking-[.14em]"
                          style="background:rgba(167,139,250,.15);border:1px solid rgba(167,139,250,.3);color:#c4b5fd">
                        @yield('hero_section_label', 'Credit Cards')
                    </span>
                    <span class="text-purple-300/40 text-[11px] font-mono-sp">·</span>
                    <span class="text-purple-300/50 text-[11px] font-mono-sp">Deep Analysis</span>
                </div>

                <h1 class="fonttitle text-4xl md:text-[2.8rem] font-bold text-white! leading-[1.15] mb-4 fade-up">
                    @yield('hero_title', 'Credit Cards Analysis')
                </h1>
                <p class="text-purple-100/60 text-[15.5px] max-w-xl leading-relaxed fade-up-2">
                    @yield('hero_subtitle', 'In-depth expert analysis of credit card mechanics, strategies, and market dynamics.')
                </p>

                {{-- Meta --}}
                <div class="flex items-center gap-6 mt-6 text-[12px] text-purple-300/45 font-mono-sp fade-up-3">
                    <span class="flex items-center gap-1.5">
                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                        @yield('hero_date', now()->format('F Y'))
                    </span>
                    <span class="flex items-center gap-1.5">
                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        @yield('hero_read_time', '8 min read')
                    </span>
                    <span class="flex items-center gap-1.5">
                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        Expert Verified
                    </span>
                </div>
            </div>

            {{-- Hero stat cards --}}
            <div class="hidden lg:flex flex-col gap-3 fade-up-2 shrink-0">
                @yield('hero_stats')
            </div>
        </div>
    </div>
</div>

{{-- ══ MAIN LAYOUT ══ --}}
<div class="max-w-screen-xl mx-auto py-10">
    <div class="flex gap-9">

        {{-- ─── SIDEBAR ─── --}}
        <aside class="w-[258px] shrink-0">
            <div class="sticky top-24 space-y-5">

                {{-- Navigation card --}}
                <div class="bg-white rounded-2xl border border-[#e8e2f8] overflow-hidden"
                     style="box-shadow:0 2px 14px rgba(30,10,60,.07)">

                    {{-- Card Mechanics group --}}
                    <div class="pt-4 pb-2">
                        <p class="group-header">Card Mechanics</p>
                        <nav class="px-2">
                            <a href="{{ route('cards.mechanics-scoring') }}"
                               class="sidebar-link flex items-center gap-2.5 px-3 py-2.5 rounded-lg text-[13px] font-medium text-[#374151] mb-0.5 @yield('nav_scoring')">
                                <svg class="w-3.5 h-3.5 text-[#c4b5fd] shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z"/></svg>
                                Credit Scoring Models
                            </a>
                            <a href="{{ route('cards.mechanics-apr') }}"
                               class="sidebar-link flex items-center gap-2.5 px-3 py-2.5 rounded-lg text-[13px] font-medium text-[#374151] mb-0.5 @yield('nav_apr')">
                                <svg class="w-3.5 h-3.5 text-[#c4b5fd] shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75"/></svg>
                                APR & Interest Calc.
                            </a>
                            <a href="{{ route('cards.mechanics-interchange') }}"
                               class="sidebar-link flex items-center gap-2.5 px-3 py-2.5 rounded-lg text-[13px] font-medium text-[#374151] mb-0.5 @yield('nav_interchange')">
                                <svg class="w-3.5 h-3.5 text-[#c4b5fd] shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M7.5 21L3 16.5m0 0L7.5 12M3 16.5h13.5m0-13.5L21 7.5m0 0L16.5 12M21 7.5H7.5"/></svg>
                                Interchange Fees
                            </a>
                            <a href="{{ route('cards.mechanics-credit') }}"
                               class="sidebar-link flex items-center gap-2.5 px-3 py-2.5 rounded-lg text-[13px] font-medium text-[#374151] mb-0.5 @yield('nav_credit')">
                                <svg class="w-3.5 h-3.5 text-[#c4b5fd] shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5z"/></svg>
                                Credit Limits
                            </a>
                            <a href="{{ route('cards.mechanics-risk_based') }}"
                               class="sidebar-link flex items-center gap-2.5 px-3 py-2.5 rounded-lg text-[13px] font-medium text-[#374151] mb-0.5 @yield('nav_risk')">
                                <svg class="w-3.5 h-3.5 text-[#c4b5fd] shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z"/></svg>
                                Risk-based Pricing
                            </a>
                        </nav>
                    </div>

                    <div class="h-px bg-[#f0ebff] mx-4"></div>

                    {{-- Card Strategy group --}}
                    <div class="pt-3 pb-2">
                        <p class="group-header">Card Strategy</p>
                        <nav class="px-2">
                            <a href="{{ route('cards.strategy-reward') }}"
                               class="sidebar-link flex items-center gap-2.5 px-3 py-2.5 rounded-lg text-[13px] font-medium text-[#374151] mb-0.5 @yield('nav_reward')">
                                <svg class="w-3.5 h-3.5 text-[#c4b5fd] shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"/></svg>
                                Reward Program Economics
                            </a>
                            <a href="{{ route('cards.strategy-cashback') }}"
                               class="sidebar-link flex items-center gap-2.5 px-3 py-2.5 rounded-lg text-[13px] font-medium text-[#374151] mb-0.5 @yield('nav_cashback')">
                                <svg class="w-3.5 h-3.5 text-[#c4b5fd] shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                Cashback vs Points
                            </a>
                            <a href="{{ route('cards.strategy-analysis') }}"
                               class="sidebar-link flex items-center gap-2.5 px-3 py-2.5 rounded-lg text-[13px] font-medium text-[#374151] mb-0.5 @yield('nav_analysis')">
                                <svg class="w-3.5 h-3.5 text-[#c4b5fd] shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M7.5 21L3 16.5m0 0L7.5 12M3 16.5h13.5m0-13.5L21 7.5m0 0L16.5 12M21 7.5H7.5"/></svg>
                                Balance Transfer Analysis
                            </a>
                            <a href="{{ route('cards.strategy-strategy') }}"
                               class="sidebar-link flex items-center gap-2.5 px-3 py-2.5 rounded-lg text-[13px] font-medium text-[#374151] mb-0.5 @yield('nav_strategy')">
                                <svg class="w-3.5 h-3.5 text-[#c4b5fd] shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                Credit Utilization Strategy
                            </a>
                            <a href="{{ route('cards.strategy-tactics') }}"
                               class="sidebar-link flex items-center gap-2.5 px-3 py-2.5 rounded-lg text-[13px] font-medium text-[#374151] mb-0.5 @yield('nav_tactics')">
                                <svg class="w-3.5 h-3.5 text-[#c4b5fd] shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3"/></svg>
                                Card Churning Tactics
                            </a>
                        </nav>
                    </div>

                    <div class="h-px bg-[#f0ebff] mx-4"></div>

                    {{-- Market & Regulation group --}}
                    <div class="pt-3 pb-3">
                        <p class="group-header">Market & Regulation</p>
                        <nav class="px-2">
                            <a href="{{ route('cards.market-comparison') }}"
                               class="sidebar-link flex items-center gap-2.5 px-3 py-2.5 rounded-lg text-[13px] font-medium text-[#374151] mb-0.5 @yield('nav_comparison')">
                                <svg class="w-3.5 h-3.5 text-[#c4b5fd] shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064"/></svg>
                                Card Network Comparison
                            </a>
                            <a href="{{ route('cards.market-consumer') }}"
                               class="sidebar-link flex items-center gap-2.5 px-3 py-2.5 rounded-lg text-[13px] font-medium text-[#374151] @yield('nav_consumer')">
                                <svg class="w-3.5 h-3.5 text-[#c4b5fd] shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/></svg>
                                Consumer Protection Laws
                            </a>
                        </nav>
                    </div>
                </div>

                {{-- Stats widget --}}
                @hasSection('sidebar_stats')
                <div class="bg-white rounded-2xl border border-[#e8e2f8] p-5"
                     style="box-shadow:0 2px 14px rgba(30,10,60,.07)">
                    <p class="text-[10.5px] font-bold uppercase tracking-[.14em] text-violet-700 mb-4">Key Statistics</p>
                    @yield('sidebar_stats')
                </div>
                @endif

                {{-- Hub CTA --}}
                <div class="rounded-2xl p-5 text-white"
                     style="background:linear-gradient(145deg,#1e0a3c,#2d1060)">
                    <p class="text-[10.5px] font-bold uppercase tracking-[.14em] text-purple-400 mb-2">Credit Cards Hub</p>
                    <p class="text-[12.5px] text-white/50 mb-4 leading-relaxed">Explore all card analyses, comparisons, and strategies.</p>
                    <a href="{{ route('cards.mechanics-scoring') }}"
                       class="flex items-center gap-2 text-[13px] font-semibold text-purple-300 hover:text-white transition-colors">
                        View Cards Hub
                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </a>
                </div>

                {{-- Consultation CTA --}}
                <div class="rounded-2xl p-5 border border-violet-200"
                     style="background:linear-gradient(135deg,#f5f3ff,#ede9fe)">
                    <p class="text-[11px] font-bold uppercase tracking-[.12em] text-violet-700 mb-2">Free Consultation</p>
                    <p class="text-[12.5px] text-[#374151] mb-4 leading-relaxed">Questions about card selection and optimization strategy?</p>
                    <a href="{{ route('contact') }}"
                       class="block w-full text-center bg-violet-700 hover:bg-violet-800 text-white text-[13px] font-semibold py-2.5 rounded-xl transition-colors">
                        Book Free Call
                    </a>
                </div>

            </div>
        </aside>

        {{-- ─── MAIN CONTENT ─── --}}
        <main class="flex-1 min-w-0">

            <div class="flex gap-6">

                {{-- Article Card --}}
                <div class="flex-1 min-w-0 bg-white rounded-2xl border border-[#e8e2f8] overflow-hidden"
                     style="box-shadow:0 2px 14px rgba(30,10,60,.07)">

                    {{-- Top bar --}}
                    <div class="border-b border-[#f5f0ff] px-8 py-4 flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <span class="badge-violet">@yield('article_badge', 'Credit Cards')</span>
                            <span class="text-[12px] text-[#9ca3af] font-mono-sp">Expert Analysis</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <button class="p-2 rounded-lg text-[#9ca3af] hover:text-violet-700 hover:bg-violet-50 transition-all border-0 bg-transparent cursor-pointer" title="Share">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"/></svg>
                            </button>
                            <button class="p-2 rounded-lg text-[#9ca3af] hover:text-violet-700 hover:bg-violet-50 transition-all border-0 bg-transparent cursor-pointer" title="Bookmark">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"/></svg>
                            </button>
                        </div>
                    </div>

                    {{-- TOC (optional) --}}
                    @hasSection('toc')
                    <div class="mx-8 mt-6 p-5 rounded-2xl bg-[#f5f3ff] border border-[#e8e2f8]">
                        <p class="text-[10.5px] font-bold uppercase tracking-[.14em] text-violet-700 mb-3">Contents</p>
                        <div class="grid grid-cols-2 gap-x-6 gap-y-1.5">
                            @yield('toc')
                        </div>
                    </div>
                    @endif

                    {{-- Content --}}
                    <div class="px-8 py-8 prose-cards">
                        @yield('content')
                    </div>

                    {{-- Footer --}}
                    <div class="border-t border-[#f5f0ff] px-8 py-5 bg-[#fdfbff]">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-[11px] text-[#9ca3af] font-mono-sp uppercase tracking-wide mb-1.5">Was this helpful?</p>
                                <div class="flex items-center gap-2">
                                    <button class="flex items-center gap-1.5 text-[13px] font-medium text-[#374151] hover:text-violet-700 px-3 py-1.5 rounded-lg hover:bg-violet-50 transition-all border border-[#e8e2f8] hover:border-violet-300 bg-white cursor-pointer">
                                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"/></svg>
                                        Helpful
                                    </button>
                                    <button class="flex items-center gap-1.5 text-[13px] font-medium text-[#374151] hover:text-violet-700 px-3 py-1.5 rounded-lg hover:bg-violet-50 transition-all border border-[#e8e2f8] hover:border-violet-300 bg-white cursor-pointer">
                                        <svg class="w-4 h-4 rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"/></svg>
                                        Needs work
                                    </button>
                                </div>
                            </div>
                            <div class="text-right">
                                <p class="text-[11px] text-[#9ca3af] font-mono-sp mb-1">Last Updated</p>
                                <p class="text-[13px] font-semibold text-[#374151]">@yield('last_updated',now()->format('F Y'))</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Right panel --}}
                @hasSection('right_panel')
                <div class="w-[280px] shrink-0 space-y-4">
                    @yield('right_panel')
                </div>
                @endif

            </div>

            {{-- Related --}}
            @hasSection('related')
            <div class="mt-7">
                <p class="text-[10.5px] font-bold uppercase tracking-[.14em] text-violet-700 mb-4">Related Articles</p>
                <div class="grid grid-cols-3 gap-4">
                    @yield('related')
                </div>
            </div>
            @endif

        </main>
    </div>
</div>

@include('partials.footer')

@stack('scripts')
</body>
</html>