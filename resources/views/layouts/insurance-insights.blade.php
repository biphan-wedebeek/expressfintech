<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Express Fintech – Insurance Insights')</title>
    <link rel="icon" type="image/png" href="{{ asset('expressfintech.png') }}">
    <meta name="description" content="@yield('description')">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    @include('partials.header')
    <section class="relative flex items-center overflow-hidden py-12 min-h-[80vh]">
        <div class="absolute inset-0 z-0 bg-cover bg-center" style="background-image:url('@yield('hero_img')')"></div>
        <div class="absolute inset-0 z-[1]" style="background:linear-gradient(160deg,rgba(15,31,53,.92) 0%,rgba(26,48,80,.82) 55%,rgba(15,31,53,.95) 100%)"></div>
        <div class="absolute inset-0 z-[1] pointer-events-none" style="background:radial-gradient(ellipse 60% 80% at 70% 50%,rgba(79,70,229,.12) 0%,transparent 70%)"></div>
        <div class="relative z-[2] w-full max-w-[1280px] mx-auto px-16 max-lg:px-8">
            <div class="grid grid-cols-[1fr_380px] gap-[72px] items-center max-lg:grid-cols-1">
                <div>
                    <div class="inline-flex items-center gap-2 anim-1 text-[12px] font-semibold uppercase tracking-[.1em] px-4 py-2 rounded-full mb-7
                            bg-[rgba(79,70,229,.18)] border border-[rgba(79,70,229,.45)] text-[#a5b4fc]">
                        ✦ @yield('badge','Insurance Insights')
                    </div>
                    <nav class="flex items-center gap-2 text-[12px] text-white/[.38] mb-6 anim-2">
                        <a href="{{ route('home') }}" class="text-white/[.38] hover:text-[#818cf8] transition-colors">Home</a>
                        <span>/</span>
                        <a href="{{ route('insurance') }}" class="text-white/[.38] hover:text-[#818cf8] transition-colors">Insurance</a>
                        <span>/</span>
                        <span class="text-white/50">Industry Insights</span>
                        <span>/</span>
                        <span class="text-white/80">@yield('breadcrumb')</span>
                    </nav>

                    <h1 class="familyfont font-bold text-white! leading-[1.15] mb-6 anim-3" style="font-size:clamp(36px,4.8vw,60px)">
                        @yield('hero_title')
                    </h1>

                    <p class="text-[17px] leading-[1.75] text-white/65 max-w-[540px] mb-10 anim-4">
                        @yield('hero_subtitle')
                    </p>
                </div>

                <div class="ii-stats-card anim-7 max-lg:hidden">
                    <p class="text-[11px] font-bold uppercase tracking-[.12em] text-[#818cf8] mb-7">
                        @yield('card_title','Insurance Industry Overview')
                    </p>
                    <div class="grid grid-cols-2 gap-6"> @yield('hero_stats') </div>
                    @yield('hero_card_extra')
                </div>
            </div>
        </div>
    </section>

    <div class="sticky top-[72px] z-30 bg-navy border-b border-white/[.08]">
        <div class="max-w-[1280px] mx-auto px-16 py-[14px] flex items-center gap-[10px] flex-wrap max-lg:px-8">
            <span class="text-[11px] font-bold uppercase tracking-[.1em] text-white/30 mr-2 whitespace-nowrap">
                Industry Insights:
            </span>

            @foreach([
            ['Insurance Market Trends', 'insurance.insights.trends'],
            ['InsurTech Innovations', 'insurance.insights.insurtech'],
            ['Global Insurance Reports', 'insurance.insights.reports'],
            ] as [$label, $routeName])
            <a href="{{ route($routeName) }}"
                class="text-[13px] px-[18px] py-[7px] rounded-full whitespace-nowrap
                  no-underline transition-all duration-200
                  border border-white/[.1] bg-white/[.07] text-white/55
                  hover:bg-[rgba(79,70,229,.2)] hover:border-[rgba(79,70,229,.5)] hover:text-[#a5b4fc]
                  {{ request()->routeIs($routeName)
                      ? 'bg-[rgba(79,70,229,.2)] border-[rgba(79,70,229,.5)] text-[#a5b4fc] font-semibold'
                      : '' }}">
                {{ $label }}
            </a>
            @endforeach
        </div>
    </div>
    @yield('page_content')
    <section class="bg-[#f0f1f5] border-t border-[var(--border)] py-12">
        <div class="max-w-screen-xl mx-auto px-10 xl:px-16">
            <h2 class="familyfont text-navy font-bold text-[28px] mb-10">
                Related Research
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @yield('related_cards')
            </div>
        </div>
    </section>
    @if(trim($__env->yieldContent('cta_title')))
    <section class="bg-white py-12">
        <div class="max-w-screen-xl mx-auto">
            <div class="flex flex-row items-center justify-between gap-10 rounded-[20px] p-16 border border-[rgba(79,70,229,.2)] max-lg:flex-col max-lg:p-12 shadow-[0_20px_60px_rgba(15,31,53,.15)]"
                style="background:linear-gradient(135deg,#0f1f35 0%,#1a3050 100%)">
                <div class="flex-1">
                    <p class="inline-flex items-center gap-2 text-[11px] font-extrabold
                           uppercase tracking-[.14em] text-[#818cf8] mb-4
                           before:inline-block before:w-6 before:h-[3px]
                           before:bg-[#818cf8] before:rounded-sm">
                        @yield('cta_label','Extended Research')
                    </p>

                    <h2 class="familyfont text-white font-bold mb-4"
                        style="font-size:clamp(24px,3vw,36px)">
                        @yield('cta_title')
                    </h2>

                    <p class="text-[15px] leading-[1.8] text-white/55">
                        @yield('cta_desc')
                    </p>
                </div>

                <div class="flex flex-col gap-3 shrink-0">
                    {{-- pill primary --}}
                    <a href="{{ route('reviews') }}"
                        class="inline-flex items-center gap-2 font-semibold text-[15px]
                          px-8 py-[15px] rounded-full bg-[var(--indigo)] text-white shadow-[0_8px_20px_rgba(79,70,229,.35)]
                          transition-all duration-200 hover:bg-[var(--indigo-hover)] hover:-translate-y-0.5">
                        @yield('cta_btn','View All Research')
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2.5"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg>
                    </a>

                    <a href="{{ route('consultation') }}"
                        class="inline-flex items-center justify-center gap-2
                          font-medium text-[14px] px-8 py-[14px] rounded-full
                          border border-white/20 text-white/65 transition-all duration-200
                          hover:border-[#818cf8] hover:text-[#a5b4fc]">
                        Free Consultation
                    </a>
                </div>

            </div>
        </div>
    </section>
    @endif

    @include('partials.footer')
</body>

</html>