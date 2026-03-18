{{-- resources/views/layouts/insurance.blade.php --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('expressfintech.png') }}">
    <meta name='impact-site-verification' value='e4bf24d0-e930-4ad6-b364-a86751a3d024'>
    <meta name="description" content="@yield('title','Insurance Analysis') — Express Fintech">
    <title>@yield('title', 'Express Fintech – Expert Financial Reviews')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('styles')
    <style>
        /* ── COLOUR TOKENS (matched to site palette) ── */
        :root {
            --navy: #0c1f35;
            --navy-mid: #162c47;
            --navy-lt: #eef3f8;
            --indigo: #4f46e5;
            --indigo-lt: #eef2ff;
            --gold: #b8973f;
            /* accent — replaces amber */
            --gold-dk: #8c6d20;
            --text: #374151;
            --muted: #6b7280;
            --border: #e5e7eb;
            --bg: #f6f7fb;
            --white: #ffffff;
            --green: #059669;
            --red: #dc2626;
        }

        body {
            background: var(--white);
            color: var(--text);
            line-height: 1.7;
        }

        .cover-meta span {
            font-size: 11px;
            letter-spacing: .1em;
            text-transform: uppercase;
            color: var(--muted);
            padding-right: 22px;
            margin-right: 22px;
            border-right: 1px solid var(--border);
        }

        .cover-meta span:last-child {
            border-right: none;
        }

        /* single principle item */
        .p-item {
            display: grid;
            grid-template-columns: 56px 1fr;
            gap: 0 32px;
            padding-bottom: 24px;
            border-bottom: 1px solid var(--border);
        }

        .p-item:last-child {
            border-bottom: none;
        }

        .p-index {
            padding-top: 6px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .p-index-num {
            font-family: 'Playfair Display', Georgia, serif;
            font-size: 42px;
            font-weight: 700;
            line-height: 1;
            color: var(--indigo);
            opacity: .25;
        }

        .p-index-line {
            width: 1px;
            flex: 1;
            min-height: 40px;
            background: linear-gradient(to bottom, var(--border), transparent);
            margin-top: 8px;
        }

        .p-tag {
            font-size: 10.5px;
            letter-spacing: .22em;
            color: var(--indigo);
            font-weight: 800;
            text-transform: uppercase;
            margin-bottom: 8px;
        }

        .p-title {
            font-family: 'Playfair Display', Georgia, serif;
            font-size: 36px;
            font-weight: 700;
            line-height: 1.05;
            color: var(--navy);
            margin-bottom: 16px;
        }

        .p-title em {
            font-style: italic;
            font-weight: 300;
        }

        .p-text {
            font-size: 15px;
            font-weight: 300;
            color: var(--muted);
            line-height: 1.85;
            margin-bottom: 20px;
        }

        .p-text strong {
            font-weight: 600;
            color: var(--text);
        }

        .p-text em {
            font-style: italic;
        }

        /* inline note */
        .p-note {
            background: var(--indigo-lt);
            border-left: 3px solid var(--indigo);
            padding: 14px 18px;
            margin-bottom: 20px;
        }

        .p-note-label {
            font-size: 9.5px;
            letter-spacing: .2em;
            color: var(--indigo);
            font-weight: 800;
            text-transform: uppercase;
            margin-bottom: 4px;
        }

        .p-note p {
            font-size: 13.5px;
            font-weight: 400;
            color: var(--text);
            line-height: 1.7;
        }

        /* inline quote */
        .p-quote {
            border-top: 1px solid var(--border);
            border-bottom: 1px solid var(--border);
            padding: 20px 0;
            margin: 20px 0;
        }

        .p-quote p {
            font-family: 'Playfair Display', Georgia, serif;
            font-size: 20px;
            font-style: italic;
            font-weight: 400;
            color: var(--navy);
            line-height: 1.55;
        }

        .p-quote cite {
            display: block;
            margin-top: 8px;
            font-family: 'DM Sans', sans-serif;
            font-size: 11px;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: .12em;
            color: var(--indigo);
            font-style: normal;
        }

        /* image inside principle */
        .p-img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            display: block;
            margin-bottom: 20px;
        }

        .p-img-caption {
            font-size: 11.5px;
            color: var(--muted);
            font-style: italic;
            padding-top: 8px;
            border-top: 1px solid var(--border);
            margin-bottom: 20px;
            margin-top: -12px;
        }

        /* ══════════════════════════════════
           METRICS BAND
        ══════════════════════════════════ */
        .metrics-band {
            background: var(--navy);
            border-top: 2px solid var(--navy);
            border-bottom: 2px solid var(--navy);
            padding: 0 60px;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 0;
        }

        .mitem {
            padding: 36px 32px;
            border-right: 1px solid rgba(255, 255, 255, .07);
            transition: background .2s;
        }

        .mitem:last-child {
            border-right: none;
        }

        .mitem:hover {
            background: rgba(255, 255, 255, .03);
        }

        .mitem-v {
            font-family: 'Playfair Display', Georgia, serif;
            font-size: 44px;
            font-weight: 700;
            color: #a5b4fc;
            /* indigo-300 — matches hero hstat-v */
            line-height: 1;
            margin-bottom: 6px;
        }

        .mitem-l {
            font-size: 11px;
            color: rgba(255, 255, 255, .35);
            text-transform: uppercase;
            letter-spacing: .08em;
            line-height: 1.4;
        }

        .pstep {
            background: var(--white);
            padding: 28px 24px;
            border-top: 3px solid transparent;
            transition: border-color .2s, background .2s;
        }

        .pstep:hover {
            border-top-color: var(--indigo);
            background: var(--indigo-lt);
        }

        .pstep-n {
            font-family: 'Playfair Display', Georgia, serif;
            font-size: 44px;
            font-weight: 700;
            color: var(--indigo);
            opacity: .2;
            line-height: 1;
            margin-bottom: 12px;
        }

        .pstep-title {
            font-size: 13.5px;
            font-weight: 600;
            color: var(--navy);
            margin-bottom: 8px;
        }

        .pstep-body {
            font-size: 12.5px;
            font-weight: 300;
            color: var(--muted);
            line-height: 1.7;
        }

        /* ══════════════════════════════════
           TABLE
        ══════════════════════════════════ */

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 13px;
        }

        thead th {
            padding: 10px 20px;
            text-align: left;
            font-size: 9.5px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: .1em;
            color: var(--muted);
            background: var(--bg);
            border-bottom: 1px solid var(--border);
        }

        thead th:first-child {
            padding-left: 0;
        }

        tbody tr {
            border-bottom: 1px solid #f3f4f6;
            transition: background .12s;
        }

        tbody tr:last-child {
            border-bottom: none;
        }

        tbody tr:hover {
            background: rgba(79, 70, 229, .04);
        }

        tbody td {
            padding: 13px 20px;
            color: var(--text);
        }

        tbody td:first-child {
            font-weight: 600;
            color: var(--navy);
            padding-left: 0;
        }

        .g {
            color: var(--green) !important;
            font-weight: 600 !important;
        }

        .a {
            color: var(--gold-dk) !important;
            font-weight: 600 !important;
        }

        .r {
            color: var(--red) !important;
            font-weight: 600 !important;
        }

        .rcard {
            background: rgba(255, 255, 255, .05);
            overflow: hidden;
            transition: all .22s;
        }

        .rcard:hover {
            background: rgba(255, 255, 255, .08);
            transform: translateY(-4px);
            box-shadow: 0 14px 36px rgba(0, 0, 0, .22);
        }

        .rcard img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            display: block;
        }

        .rcard-body {
            padding: 22px;
        }

        .rcard-cat {
            font-size: 10px;
            letter-spacing: .2em;
            color: #a5b4fc;
            font-weight: 800;
            text-transform: uppercase;
            margin-bottom: 6px;
        }

        .rcard-title {
            font-family: 'Playfair Display', Georgia, serif;
            font-size: 19px;
            font-weight: 700;
            color: var(--white);
            line-height: 1.2;
            margin-bottom: 8px;
        }

        .rcard-body p {
            font-size: 12.5px;
            font-weight: 300;
            color: rgba(255, 255, 255, .4);
            line-height: 1.65;
        }

        /* ══════════════════════════════════
           ANIMATIONS
        ══════════════════════════════════ */
        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(16px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .cover-left {
            animation: fadeUp .7s ease both;
        }

        .cover-right {
            animation: fadeUp .7s .1s ease both;
        }

        /* ══════════════════════════════════
           OPTIONAL: sidebar layout pages
        ══════════════════════════════════ */
        .ins-wrap {
            max-width: 1100px;
            margin: 0 auto;
            padding: 0 60px;
        }
    </style>
</head>

<body>
    @include('partials.header')
    <section class="bg-[var(--navy-lt)] border-b-2 border-[var(--navy)]">
        <div class="max-w-screen-xl mx-auto grid grid-cols-[1fr_400px] gap-[80px] items-center px-10">
            <div class="cover-left">
                <div class="fonttitle text-[11px] tracking-[0.28em] text-[var(--indigo)] flex items-center gap-[10px] font-extrabold uppercase mb-5 before:content-[''] before:w-7 before:h-[2px] before:bg-[var(--indigo)] before:inline-block">@yield('cover_kicker','Insurance Fundamentals · Deep Analysis')</div>
                <h1 class="text-[clamp(52px,6vw,82px)] font-bold leading-[0.9] text-[var(--navy)] tracking-[-0.02em] mb-6">@yield('cover_h1_line1','Insurance')<br>
                    <em class="italic font-light text-[var(--indigo)] block">@yield('cover_h1_em','Fundamentals')</em>
                </h1>
                <p class="text-[15.5px] font-light text-[var(--muted)] leading-[1.8] max-w-[560px] pl-4 border-l-2 border-[var(--indigo)] mb-[44px]">@yield('cover_deck','Expert analysis of insurance principles, products, and market dynamics.')</p>
                <div class="flex gap-0 py-[18px] border-t border-[var(--border)] cover-meta">
                    <span><b class="text-[var(--navy)]">Author</b> EF Research</span>
                    <span><b class="text-[var(--navy)]">Date</b> @yield('cover_date', now()->format('F Y'))</span>
                    <span><b class="text-[var(--navy)]">Read</b> @yield('cover_read','12 min')</span>
                    <span><b class="text-[var(--navy)]">Topic</b> @yield('cover_topic','Insurance')</span>
                </div>
            </div>

            <div class="cover-right">
                <img class="w-full h-[360px] object-cover block rounded-t-[2px]"
                    src="@yield('cover_img','https://images.unsplash.com/photo-1450101499163-c8848c66ca85?w=800&q=80')"
                    alt="@yield('cover_img_alt','Insurance analysis')">
                <div class="grid grid-cols-2 gap-[1px] bg-[var(--border)] border border-[var(--border)] border-t-0">
                    @yield('cover_stats')
                </div>
            </div>
        </div>
    </section>

    <div class="max-w-[960px] mx-auto p-12">
        @hasSection('block_label')
        <div class="fonttitle text-[10.5px] tracking-[0.28em] text-[var(--muted)] font-extrabold uppercase flex items-center gap-[14px] mb-[56px] after:content-[''] after:flex-1 after:h-px after:bg-[var(--border)]">@yield('block_label')</div>
        @endif
        @yield('content')
    </div>

    @hasSection('metrics_band')
    <div class="bg-[var(--navy)] border-y-2 border-[var(--navy)] ">
        <div class="max-w-screen-xl mx-auto flex justify-evenly">
            @yield('metrics_band')
        </div>
    </div>
    @endif

    @hasSection('process')
    <div class="bg-[var(--bg)] border-b border-[var(--border)]">
        <div class="max-w-screen-xl mx-auto py-12 flex items-baseline justify-between mb-10 pb-4 border-b border-[var(--border)]">
            <h2 class="font-['Playfair_Display'] text-[30px] font-bold text-[var(--navy)]">@yield('process_title','The Process')</h2>
            <span class="text-[10.5px] tracking-[0.2em] text-[var(--indigo)] font-extrabold uppercase">@yield('process_subtitle','Four Stages')</span>
        </div>
        <div class="max-w-screen-xl mx-auto grid grid-cols-4 gap-px bg-[var(--border)]">
            @yield('process')
        </div>
    </div>
    @endif

    @hasSection('ins_table')
    <div class="max-w-screen-xl mx-auto py-10 bg-[var(--white)] border-b border-[var(--border)]">
        <div class="flex items-baseline justify-between mb-10 pb-4 border-b border-[var(--border)]">
            <h2 class="font-['Playfair_Display'] text-[30px] font-bold text-[var(--navy)]">@yield('table_title','Analysis Matrix')</h2>
            <span class="text-[10.5px] tracking-[0.2em] text-[var(--indigo)] font-extrabold uppercase">@yield('table_badge', now()->format('F Y'))</span>
        </div>
        @yield('ins_table')
    </div>
    @endif

    @hasSection('related')
    <div class=" bg-[var(--navy)] border-t-2 border-[var(--navy)]">
        <div class="max-w-screen-xl mx-auto flex items-baseline justify-between mb-10 pb-4 border-b border-white/10">
            <h2 class="text-[30px] font-bold text-white!">Related Research</h2>
            <span class="text-[10.5px] tracking-[0.2em] text-[var(--indigo)] font-extrabold uppercase">@yield('related_count','Three Articles')</span>
        </div>
        <div class="max-w-screen-xl mx-auto grid grid-cols-3 gap-px bg-white/10">
            @yield('related')
        </div>
    </div>
    @endif


    @include('partials.footer')
    @stack('scripts')
</body>

</html>