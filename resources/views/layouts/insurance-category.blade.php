<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Express Fintech – Insurance Categories')</title>
    <link rel="icon" type="image/png" href="{{ asset('expressfintech.png') }}">
    <meta name="description" content="@yield('description')">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
@include('partials.header')

<section class="relative overflow-hidden flex items-center" style="min-height:78vh">
    <div class="absolute inset-0 bg-cover bg-center"style="background-image:url('@yield('hero_img')')"></div>
    <div class="absolute inset-0"style="background:linear-gradient(135deg,rgba(15,31,53,.92) 0%,rgba(26,48,80,.85) 60%,rgba(15,31,53,.75) 100%)"></div>
    <div class="absolute pointer-events-none"style="top:-100px;left:-100px;width:500px;height:500px;background:radial-gradient(circle,rgba(79,70,229,.2) 0%,transparent 70%)"></div>

    <div class="relative px-[10%] py-14 max-w-[900px]">
        <nav class="flex items-center gap-2 text-[12px] mb-7 text-white/40">
            <a href="{{ route('home') }}"class="text-white/40 hover:text-[#818cf8] transition-colors">Home</a>
            <span>/</span>
            <a href="{{ route('insurance') }}"class="text-white/40 hover:text-[#818cf8] transition-colors">Insurance</a>
            <span>/</span>
            <span class="text-white/50">Insurance Categories</span>
            <span>/</span>
            <span class="text-white/80">@yield('breadcrumb')</span>
        </nav>

        <div class="flex items-center gap-2.5 flex-wrap mb-6">
            <span class="inline-block text-[10px] font-extrabold uppercase tracking-[.12em]
                        px-[14px] py-[6px] rounded-lg bg-[rgba(79,70,229,.25)] text-[#a5b4fc] border border-[rgba(79,70,229,.4)]">
                @yield('badge','Insurance Categories')
            </span>
            @yield('extra_badges')
        </div>

        <h1 class="familyfont font-bold text-white! leading-[1.15] mb-5"style="font-size:clamp(32px,4.5vw,54px)">
            @yield('hero_title')
        </h1>

        <p class="text-[17px] leading-[1.75] max-w-[660px] mb-3 text-white/60">@yield('hero_subtitle')</p>

        <p class="text-[13px] text-white/30">@yield('meta')</p>
    </div>
</section>

<div class="bg-surface border-b border-[var(--border)]">
    <div class="max-w-screen-xl mx-auto py-12">
        <h2 class="familyfont text-navy font-bold text-[26px] mb-4">
            @yield('intro_title')
        </h2>
        <p class="text-muted text-[15.5px] leading-[1.85]">
            @yield('intro_body')
        </p>
    </div>
</div>

@yield('page_content')

<section class="max-w-screen-xl mx-auto py-12">
    <h2 class="familyfont text-navy font-bold text-[26px] mb-8">Related Research</h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @yield('related_cards')
    </div>
</section>

@if(trim($__env->yieldContent('cta_title')))
<section class="max-w-screen-xl mx-auto py-14 bg-white border-t border-[var(--border)]">
    <h2 class="familyfont text-navy font-bold text-[32px] mb-8">
        @yield('cta_title')
    </h2>

    <div class="card p-14">
        <p class="text-muted max-w-[700px] text-[15px] leading-[1.8] mb-8">
            @yield('cta_desc')
        </p>
        <div class="flex items-center gap-4 flex-wrap">
            <a href="{{ route('reviews') }}" class="btn-primary text-[14px] px-7 py-[13px]">
                @yield('cta_btn','View All Research')
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2.5"
                     stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14M12 5l7 7-7 7"/>
                </svg>
            </a>

            <a href="{{ route('consultation') }}" class="btn-secondary text-[14.5px] px-7 py-[13px]">
                Free Consultation
            </a>
        </div>
    </div>
</section>
@endif

@include('partials.footer')
</body>
</html>