<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Express Fintech – Deep Analysis')</title>
    <link rel="icon" type="image/png" href="{{ asset('expressfintech.png') }}">
    <meta name="description" content="@yield('description')">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

@include('partials.header')

<div class="bg-navy border-b border-white/[0.08] py-[10px] text-center text-[13px] tracking-[0.3px] text-white/55">
    Featured Research:
    <span class="font-semibold" style="color:#818cf8">@yield('feature_label','Express Fintech Industry Research 2026')</span>
</div>

<div class="max-w-screen-xl mx-auto">
    <div class="py-14 pb-12">
        <nav class="flex items-center gap-2 text-xs text-[#9ca3af] mb-6">
            <a href="{{ route('home') }}" class="text-[#9ca3af] hover:text-[var(--indigo)] transition-colors duration-200">Home</a>
            <span>/</span>
            <a href="{{ route('insurance') }}" class="text-[#9ca3af] hover:text-[var(--indigo)] transition-colors duration-200">Insurance</a>
            <span>/</span>
            <span class="text-[#6b7280]">@yield('breadcrumb')</span>
        </nav>

        <div class="flex items-center gap-[10px] mb-[18px]">
            <span class="badge badge-indigo">@yield('badge','Insurance Fundamentals')</span>
            <span class="inline-flex items-center text-[11px] font-medium text-[#6b7280] px-3 py-[6px] rounded-lg border border-[var(--border)] bg-white">
                @yield('extra_badges')
            </span>
        </div>

        <h1 class="familyfont text-[clamp(28px,3.8vw,44px)] leading-[1.18] mb-4 text-navy">
            @yield('hero_title')
        </h1>

        <p class="max-w-[800px] text-muted text-[17px] leading-[1.75]">
            @yield('hero_subtitle')
        </p>

        <p class="mt-3 text-xs text-[#9ca3af]">
            @yield('meta')
        </p>
    </div>
</div>

<div class="max-w-screen-xl mx-auto">
    <div class="flex gap-14 items-start py-12 pb-24">
        <aside class="w-56 shrink-0 sticky top-24">
            <p class="text-[11px] uppercase text-[#9ca3af] tracking-[.1em] font-bold mb-[14px]">Contents</p>
            <ul class="list-none">@yield('sidebar_toc')</ul>

            <div class="mt-8 pt-6 border-t border-[var(--border)]">
                <p class="text-[11px] uppercase text-[#9ca3af] tracking-[.1em] font-bold mb-[14px]">Insurance Fundamentals</p>
                <ul class="list-none">
                    @foreach([
                        ['Insurance Principles', 'insurance.fundamentals.principles'],
                        ['Risk Assessment Models', 'insurance.fundamentals.risk-assessment'],
                        ['Underwriting Process', 'insurance.fundamentals.underwriting'],
                        ['Premium Calculation Methods', 'insurance.fundamentals.premium-calculation'],
                        ['Regulatory Framework', 'insurance.fundamentals.regulatory'],
                    ] as [$label,$routeName])
                    <li class="mb-2">
                        <a href="{{ route($routeName) }}"
                           class="block text-[13px] py-[3px] transition-colors duration-200
                                  {{ request()->routeIs($routeName)
                                     ? 'text-[var(--indigo)] font-semibold'
                                     : 'text-muted hover:text-[var(--indigo)]' }}">
                        </a>
                    </li>
                    @endforeach
                </ul>

                <a href="{{ route('consultation') }}"
                   class="btn-primary justify-center w-full mt-6 text-[13px] py-[11px]">
                    Get Free Consultation
                </a>
            </div>
        </aside>

        <main class="flex-1 min-w-0 pt-[6px]">
            @yield('page_content')
        </main>
    </div>
</div>

@hasSection('insight_cards')
<div class="bg-[#f0f1f5] border-t border-b border-[var(--border)] py-12">
    <div class="max-w-screen-xl mx-auto">
        <div class="grid grid-cols-3 gap-8">
            @yield('insight_cards')
        </div>
    </div>
</div>
@endif

<div class="max-w-screen-xl mx-auto">
    <div class="py-12">
        <h2 class="familyfont text-[32px] text-navy mb-6">
            @yield('cta_title','Extended Industry Research')
        </h2>

        <div class="card relative overflow-hidden px-[52px] py-12">
            <div class="pointer-events-none absolute top-0 right-0 w-[220px] h-[220px]"
                 style="background:radial-gradient(circle,rgba(79,70,229,.05),transparent)"></div>

            <p class="text-muted max-w-[700px] text-[15px] leading-[1.8]">
                @yield('cta_desc','Access deeper analysis frameworks, industry data models, and expert commentary used by financial professionals.')
            </p>

            <div class="flex items-center gap-[14px] mt-7 flex-wrap">
                <a href="{{ route('reviews') }}" class="btn-primary text-[14.5px] px-7 py-[13px]">
                    @yield('cta_btn','View All Research')
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </a>
                <a href="{{ route('consultation') }}" class="btn-secondary text-[14.5px] px-7 py-[13px]">
                    Free Consultation
                </a>
            </div>
        </div>
    </div>
</div>

@include('partials.footer')
</body>
</html>