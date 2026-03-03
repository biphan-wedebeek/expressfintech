<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('finreview.png') }}">
    <title>@yield('title', 'FinReview – Insurance Categories')</title>
    <meta name="description" content="@yield('description')">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @include('partials.header')

    <section class="min-h-[80vh] flex items-center relative overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center" style="background-image:url('@yield('hero_img')')"></div>
        <div class="absolute inset-0" style="background:linear-gradient(rgba(0,0,0,.72),rgba(0,0,0,.90))"></div>
        <div class="relative max-w-250 px-[10%] py-14">
            <nav class="flex items-center gap-2 text-[12px] mb-7" style="color:rgba(255,255,255,.4)">
                <a href="{{ route('home') }}" class="hover:text-[#c9a96e] transition-colors" style="color:rgba(255,255,255,.4)">Home</a>
                <span>/</span>
                <a href="{{ route('insurance') }}" class="hover:text-[#c9a96e] transition-colors" style="color:rgba(255,255,255,.4)">Insurance</a>
                <span>/</span>
                <span style="color:rgba(255,255,255,.5)">Insurance Categories</span>
                <span>/</span>
                <span style="color:rgba(255,255,255,.75)">@yield('breadcrumb')</span>
            </nav>
            <div class="flex items-center gap-2.5 flex-wrap mb-5">
                <span class="bg-[#c9a96e] text-[#0c0f14] text-[10px] font-black uppercase tracking-[.12em] px-3 py-1.5 rounded-lg">
                    @yield('badge','Insurance Categories')
                </span>
                @yield('extra_badges')
            </div>

            <h1 class="font-bold text-white leading-[1.15] mb-5" style="font-family:'Playfair Display',serif; font-size:clamp(34px,4.5vw,54px)">
                @yield('hero_title')
            </h1>
            <p class="text-[18px] leading-[1.7] max-w-[680px] mb-3.5" style="color:rgba(255,255,255,.65)">
                @yield('hero_subtitle')
            </p>
            <p class="text-[14px]" style="color:rgba(255,255,255,.35)">@yield('meta')</p>
        </div>
    </section>
    <div class="bg-[#f5f0eb] py-8 max-w-screen-xl mx-auto">
        <div class="flex items-center gap-2 flex-wrap">
            <span class="text-[11px] font-bold uppercase tracking-[.1em] text-[#555] mr-3 whitespace-nowrap">Insurance Categories:</span>
            @php $catNav = [
            ['Life Insurance Analysis', 'insurance.categories.life'],
            ['Health Insurance Systems', 'insurance.categories.health'],
            ['Property & Casualty', 'insurance.categories.property'],
            ['Auto Insurance Market', 'insurance.categories.auto'],
            ['Reinsurance Structure', 'insurance.categories.reinsurance'],
            ]; @endphp
            @foreach($catNav as [$label,$route])
            <a href="{{ route($route) }}"
                class="text-[13px] px-3.5 py-1.5 rounded-lg border whitespace-nowrap transition-all
                  {{ request()->routeIs($route)
                      ? 'text-[#c9a96e] border-[#c9a96e] bg-[#c9a96e]/[.07] font-semibold'
                      : 'text-[#666] border-[#1e2330] hover:text-[#c9a96e] hover:border-[#c9a96e]' }}">
                {{ $label }}
            </a>
            @endforeach
        </div>
    </div>
    <div class="bg-[#10141b] border-b border-[#1a1f29] py-8">
        <h2 class="font-bold text-white text-[28px] mb-4 familyfont max-w-screen-xl mx-auto">
            @yield('intro_title')
        </h2>
        <p class="text-[#b8b8b8] text-[15.5px] max-w-screen-xl mx-auto leading-[1.85]">
            @yield('intro_body')
        </p>
    </div>
    @yield('page_content')
    <section class="py-12 max-w-screen-xl mx-auto">
        <h2 class="font-bold text-[#1a1a1a] text-[28px] mb-9 familyfont">Related Research</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-7">
            @yield('related_cards')
        </div>
    </section>
    @if(trim($__env->yieldContent('cta_title')))
    <section class="px-[10%] py-24">
        <h2 class="font-bold text-white text-[34px] mb-8 familyfont">
            @yield('cta_title')
        </h2>
        <div class="rounded-2xl border border-[#232833] p-16" style="background:linear-gradient(145deg,#1a1f29,#11141a)">
            <p class="text-[#b8b8b8] max-w-[700px] text-[15px] leading-[1.8] mb-8">
                @yield('cta_desc')
            </p>
            <div class="flex items-center gap-4 flex-wrap">
                <a href="{{ route('reviews') }}"
                    class="inline-flex items-center gap-2 bg-[#c9a96e] hover:bg-[#b8934a] text-[#0c0f14] font-bold text-[15px] px-7 py-3.5 rounded-xl transition-all hover:-translate-y-0.5">
                    @yield('cta_btn','View All Research')
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14M12 5l7 7-7 7" />
                    </svg>
                </a>
                <a href="{{ route('consultation') }}"
                    class="inline-flex items-center gap-2 text-[#888] border border-[#2a2f3a] hover:border-[#c9a96e] hover:text-[#c9a96e] font-medium text-[15px] px-7 py-3.5 rounded-xl transition-all">
                    Free Consultation
                </a>
            </div>
        </div>
    </section>
    @endif

    @include('partials.footer')
</body>

</html>