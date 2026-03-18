<!DOCTYPE html>
<html lang="vi" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name='impact-site-verification' value='e4bf24d0-e930-4ad6-b364-a86751a3d024'>
    <title>@yield('title', 'Personal Finance') — Express Fintech</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[var(--bg-base)] text-[var(--text-body)]">
    @include('partials.header')

    @hasSection('hero')
    @yield('hero')
    @else
    <section class="relative bg-navy text-white py-20 border-b border-[var(--border)]">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <div class="flex items-center gap-3 mb-6 text-xs tracking-[0.25em] uppercase text-emerald-400 font-semibold">
                <span class="w-7 h-px bg-emerald-400"></span>
                @yield('eyebrow','Personal Finance · Express Fintech')
            </div>

            <h1 class="hero-title">
                @yield('page_title','Master Your Money')
            </h1>

            <p class="max-w-2xl text-gray-200 mt-4 text-[16px] leading-relaxed">
                @yield('page_lead','Practical frameworks for budgeting, saving, debt management, investing, and building long-term financial independence.')
            </p>
        </div>
    </section>
    @endif

    <nav class="sticky top-14 z-40 bg-white border-b border-[var(--border)] overflow-x-auto">
        <div class="max-w-7xl mx-auto px-6 lg:px-12 flex">

            @php
            $topicNav = [
            ['route' => 'finance.planning.budget', 'label' => 'Budgeting'],
            ['route' => 'finance.planning.emergency_fund', 'label' => 'Emergency Fund'],
            ['route' => 'finance.planning.retirement', 'label' => 'Retirement'],
            ['route' => 'finance.building.passive_income', 'label' => 'Passive Income'],
            ['route' => 'finance.building.independence', 'label' => 'Independence'],
            ['route' => 'finance.building.long_term', 'label' => 'Long-Term'],
            ['route' => 'finance.behavior.psychology', 'label' => 'Psychology'],
            ['route' => 'finance.behavior.decision_bias', 'label' => 'Bias'],
            ['route' => 'finance.behavior.risk_tolerance', 'label' => 'Risk'],
            ];
            @endphp

            @foreach($topicNav as $t)

            <a href="{{ route($t['route']) }}"
                class="flex-shrink-0 px-4 py-4 text-[11px] font-semibold tracking-[0.15em] uppercase border-b-2 border-transparent text-[var(--text-muted)] hover:text-emerald-600 hover:border-emerald-500 transition">
                {{ $t['label'] }}
            </a>

            @endforeach
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    @hasSection('related')
    @yield('related')
    @endif


    @include('partials.footer')
    @stack('scripts')
    <script>
        (function() {
            var btn = document.getElementById('fin-hamburger');
            var nav = document.getElementById('fin-mobile-nav');

            if (btn && nav) {
                btn.addEventListener('click', function() {

                    if (nav.classList.contains('hidden')) {
                        nav.classList.remove('hidden')
                        nav.classList.add('flex')
                    } else {
                        nav.classList.add('hidden')
                        nav.classList.remove('flex')
                    }

                });
            }
        })();
    </script>
</body>

</html>