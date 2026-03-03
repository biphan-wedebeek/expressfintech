<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('finreview.png') }}">
    <meta name="description" content="@yield('description', 'Expert financial reviews you can trust – FinReview')">
    <title>@yield('title', 'FinReview – Deep Analysis')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>

<body class="bg-[#0f1115] text-white">

    @include('partials.header')

    {{-- TOP FEATURE STRIP --}}
    <div class="bg-gradient-to-r from-[#111] to-[#1a1d24] border-b border-[#2a2f3a] py-4 text-center text-sm tracking-wide text-[#6b6560]">
        Featured Research:
        <span class="text-[#c9a96e] font-semibold">
            @yield('feature_label','FinReview Industry Research 2026')
        </span>
    </div>

    {{-- HERO --}}
    <div class="bg-[#f5f0eb] py-8 max-w-screen-xl mx-auto">
        <div>
            {{-- Breadcrumb --}}
            <nav class="flex items-center gap-2 text-xs text-[#6b6560] mb-7">
                <a href="{{ route('home') }}" class="hover:text-[#c9a96e] transition">Home</a>
                <span>/</span>
                <a href="{{ route('insurance') }}" class="hover:text-[#c9a96e] transition">Insurance</a>
                <span>/</span>
                <span class="text-[#6b6560]">@yield('breadcrumb')</span>
            </nav>

            {{-- Badges --}}
            <div class="flex items-center gap-3 mb-5">
                <span class="bg-[#c9a96e] text-black text-[10px] font-black uppercase tracking-widest px-3 py-1.5 rounded-lg">
                    @yield('badge','Insurance Fundamentals')
                </span>
                @yield('extra_badges')
            </div>

            <h1 class="text-[36px] font-bold text-[#1a1a1a] leading-tight mb-3 familyfont ">
                @yield('hero_title')
            </h1>

            <p class="max-w-3xl text-[#6b6560] text-[17px] leading-relaxed">
                @yield('hero_subtitle')
            </p>

            <p class="mt-3 text-sm text-neutral-500">
                @yield('meta')
            </p>
        </div>
    </div>

    {{-- SIDEBAR + CONTENT --}}
    <div class="max-w-screen-xl mx-auto">
        <div class="flex gap-16 items-start pt-8 pb-24">

            {{-- SIDEBAR --}}
            <aside class="w-[240px] shrink-0 sticky top-[110px] hidden lg:block">

                <p class="text-xs uppercase tracking-widest font-bold text-neutral-500 mb-4">
                    Contents
                </p>

                <ul class="space-y-3 text-sm">
                    @yield('sidebar_toc')
                </ul>

                <div class="mt-9 pt-7 border-t border-[#2a2f3a]">
                    <p class="text-xs uppercase tracking-widest font-bold text-neutral-500 mb-4">
                        Insurance Fundamentals
                    </p>

                    <ul class="space-y-2 text-sm">
                        @foreach([
                        ['Insurance Principles', 'insurance.fundamentals.principles'],
                        ['Risk Assessment Models', 'insurance.fundamentals.risk-assessment'],
                        ['Underwriting Process', 'insurance.fundamentals.underwriting'],
                        ['Premium Calculation Methods', 'insurance.fundamentals.premium-calculation'],
                        ['Regulatory Framework', 'insurance.fundamentals.regulatory'],
                        ] as [$label,$routeName])
                        <li>
                            <a href="{{ route($routeName) }}"
                                class="transition hover:text-[#c9a96e] {{ request()->routeIs($routeName) ? 'text-[#c9a96e] font-semibold' : 'text-[#6b6560]' }}">
                                {{ $label }}
                            </a>
                        </li>
                        @endforeach
                    </ul>

                    <a href="{{ route('consultation') }}"
                        class="block mt-6 text-center bg-[#c9a96e] text-black font-bold text-sm py-3 rounded-xl hover:bg-[#b8934a] transition">
                        Get Free Consultation
                    </a>
                </div>
            </aside>

            {{-- MAIN CONTENT --}}
            <main class="flex-1 min-w-0 pt-2">
                @yield('page_content')
            </main>

        </div>
    </div>

    {{-- INSIGHT STRIP --}}
    @hasSection('insight_cards')
    <div class="bg-[#15181f] border-y border-[#2a2f3a] py-24">
        <div class="max-w-[1200px] mx-auto px-6">
            <div class="grid md:grid-cols-3 gap-10">
                @yield('insight_cards')
            </div>
        </div>
    </div>
    @endif

    {{-- BOTTOM CTA --}}
    <div class="max-w-[1200px] mx-auto px-6">
        <div class="py-28">
            <h2 class="font-serif text-3xl mb-7">
                @yield('cta_title','Extended Industry Research')
            </h2>

            <div class="bg-gradient-to-br from-[#1a1d24] to-[#12151b] border border-[#2a2f3a] rounded-2xl p-16">
                <p class="text-[#6b6560] max-w-2xl text-[15px] leading-relaxed">
                    @yield('cta_desc','Access deeper analysis frameworks, industry data models, and expert commentary used by financial professionals.')
                </p>

                <div class="flex flex-wrap items-center gap-4 mt-8">

                    <a href="{{ route('reviews') }}"
                        class="inline-flex items-center gap-2 bg-[#c9a96e] text-black font-bold text-[15px] px-7 py-3.5 rounded-xl hover:bg-[#b8934a] hover:-translate-y-0.5 transition">

                        @yield('cta_btn','View All Research')

                        <svg width="16" height="16" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2.5"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg>
                    </a>

                    <a href="{{ route('consultation') }}"
                        class="inline-flex items-center gap-2 border border-[#2a2f3a] text-[#6b6560] px-7 py-3.5 rounded-xl hover:border-[#c9a96e] hover:text-[#c9a96e] transition">
                        Free Consultation
                    </a>

                </div>
            </div>
        </div>
    </div>

    @include('partials.footer')
    @stack('scripts')

</body>

</html>