{{-- resources/views/layouts/mortgage.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>@yield('title','Mortgage Analysis') — Express Fintech</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])@vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        :root{--navy:#0c1f35;--indigo:#4f46e5;--indigo-light:#eef2ff;--gold:#b8973f;--text:#374151;--muted:#6b7280;--border:#e5e7eb;--bg:#f6f7fb;}
        *,*::before,*::after{margin:0;padding:0;box-sizing:border-box;}
        html{scroll-behavior:smooth;}
        .font-manrope{font-family:'Manrope',sans-serif;}
        /* HERO */
        .hero::after{content:'';position:absolute;inset:0;background:radial-gradient(ellipse 70% 70% at 70% 30%,rgba(79,70,229,.2) 0%,transparent 65%);pointer-events:none;}
        .hero h1 em{font-style:italic;color:#818cf8;}
        .hero-meta i{width:3px;height:3px;border-radius:50%;background:rgba(255,255,255,.2);display:inline-block;}
        .hero-right{display:flex;flex-direction:column;gap:10px;padding-bottom:52px;}
        .hero-stats{display:grid;grid-template-columns:repeat(3,1fr);gap:8px;}
        .hstat{background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.1);border-radius:10px;padding:14px 10px;text-align:center;transition:background .2s;}
        .hstat:hover{background:rgba(255,255,255,.1);}
        .hstat-v{font-family:'Lora',serif;font-size:20px;color:#a5b4fc;line-height:1;margin-bottom:4px;}
        .hstat-l{font-size:10px;color:rgba(255,255,255,.32);line-height:1.35;}
        /* LAYOUT */
        .layout{display:grid;grid-template-columns:210px 1fr;gap:48px;align-items:start;}
        .wrap{max-width:1100px;margin:auto;padding:0 28px;}
        /* SIDEBAR */
        .sidebar{position:sticky;top:24px;}
        .toc{background:#fff;border:1px solid var(--border);border-radius:12px;overflow:hidden;box-shadow:0 2px 8px rgba(12,31,53,.05);}
        .toc-head{background:var(--navy);padding:12px 18px;font-family:'Manrope',sans-serif;font-size:9.5px;font-weight:800;text-transform:uppercase;letter-spacing:.15em;color:rgba(255,255,255,.4);}
        .toc-group{font-family:'Manrope',sans-serif;font-size:9px;font-weight:800;text-transform:uppercase;letter-spacing:.14em;color:#9ca3af;padding:10px 18px 4px;}
        .toc a{display:flex;align-items:center;gap:8px;padding:8px 18px;font-size:12.5px;color:var(--muted);text-decoration:none;border-left:2px solid transparent;transition:all .15s;}
        .toc a:hover,.toc a.on{color:var(--indigo);background:var(--indigo-light);border-left-color:var(--indigo);font-weight:600;}
        .toc-n{font-family:'Manrope',sans-serif;font-size:9.5px;font-weight:700;color:var(--indigo);opacity:.55;min-width:14px;}
        .toc-div{height:1px;background:#f3f4f6;margin:4px 16px;}
        .scta{margin-top:14px;background:var(--navy);border-radius:12px;padding:22px 18px;border:1px solid rgba(255,255,255,.07);}
        .scta h4{font-family:'Lora',serif;font-size:15px;color:#fff;margin-bottom:6px;}
        .scta p{font-size:12px;color:rgba(255,255,255,.38);line-height:1.6;margin-bottom:14px;}
        .scta a{display:block;text-align:center;background:var(--indigo);color:#fff;font-size:12.5px;font-weight:600;padding:9px;border-radius:8px;text-decoration:none;transition:background .2s;}
        .scta a:hover{background:#4338ca;}

        /* ARTICLE HEADER */
        .art-bar{display:flex;align-items:center;justify-content:space-between;margin-bottom:24px;padding-bottom:20px;border-bottom:1px solid var(--border);}
        .art-badge{font-family:'Manrope',sans-serif;font-size:9.5px;font-weight:800;text-transform:uppercase;letter-spacing:.12em;padding:5px 12px;border-radius:100px;background:var(--indigo-light);color:var(--indigo);border:1px solid rgba(79,70,229,.2);}
        .art-actions{display:flex;align-items:center;gap:6px;}
        .art-btn{padding:7px;border-radius:8px;color:#9ca3af;border:0;background:transparent;cursor:pointer;transition:all .2s;}
        .art-btn:hover{color:var(--indigo);background:var(--indigo-light);}

        /* CONTENT */
        .content{min-width:0;}
        .sec{margin-bottom:60px;}
        .sec-hd{display:flex;align-items:flex-start;gap:14px;margin-bottom:22px;}
        .sec-num{flex-shrink:0;width:36px;height:36px;background:var(--indigo-light);border:1.5px solid rgba(79,70,229,.2);border-radius:9px;display:flex;align-items:center;justify-content:center;font-family:'Manrope',sans-serif;font-size:12px;font-weight:800;color:var(--indigo);margin-top:2px;}
        .sec h2{font-size:23px;color:var(--navy);line-height:1.25;}
        .sec p,.prose p{color:var(--muted);font-size:15px;line-height:1.85;margin-bottom:14px;}
        .sec ul,.prose ul{padding-left:22px;margin-bottom:14px;}
        .sec li,.prose li{color:var(--muted);font-size:15px;line-height:1.8;margin-bottom:4px;}

        /* Image */
        .img-b{border-radius:12px;overflow:hidden;margin:22px 0;border:1px solid var(--border);box-shadow:0 4px 16px rgba(12,31,53,.07);}
        .img-b img{width:100%;height:230px;object-fit:cover;display:block;}
        .img-cap{background:var(--navy);padding:10px 18px;font-size:11.5px;color:rgba(255,255,255,.4);font-style:italic;}
        .img-duo{display:grid;grid-template-columns:1fr 1fr;gap:14px;margin:22px 0;}
        .img-duo .img-b{margin:0;}

        /* Highlight */
        .hl{background:linear-gradient(135deg,#f0f1ff,#fafbff);border:1px solid rgba(79,70,229,.15);border-left:3px solid var(--indigo);border-radius:0 10px 10px 0;padding:20px 24px;margin:20px 0;}
        .hl-lbl{font-family:'Manrope',sans-serif;font-size:9.5px;font-weight:800;text-transform:uppercase;letter-spacing:.12em;color:var(--indigo);margin-bottom:6px;}
        .hl p{color:#374151!important;font-size:14px!important;margin:0!important;}

        /* Callout */
        .callout{background:var(--navy);border-radius:14px;padding:30px 36px;margin:24px 0;position:relative;overflow:hidden;}
        .callout::before{content:'';position:absolute;top:-40px;right:-40px;width:180px;height:180px;border-radius:50%;background:rgba(79,70,229,.15);}
        .callout h3{font-size:18px;color:#fff;margin-bottom:8px;position:relative;}
        .callout p{color:rgba(255,255,255,.45)!important;font-size:14px!important;margin:0!important;position:relative;max-width:600px;}

        /* Metrics */
        .metrics{display:grid;grid-template-columns:repeat(3,1fr);gap:14px;margin:22px 0;}
        .mc{background:#fff;border:1px solid var(--border);border-radius:12px;padding:24px 16px;text-align:center;box-shadow:0 2px 6px rgba(12,31,53,.04);transition:transform .2s,box-shadow .2s;}
        .mc:hover{transform:translateY(-3px);box-shadow:0 8px 24px rgba(79,70,229,.09);}
        .mc-v{font-size:30px;color:var(--indigo);line-height:1;margin-bottom:6px;}
        .mc-l{font-size:11.5px;color:#9ca3af;line-height:1.4;}

        /* Steps */
        .steps{display:flex;flex-direction:column;}
        .step{display:flex;gap:0;position:relative;}
        .step:not(:last-child)::before{content:'';position:absolute;left:17px;top:40px;width:2px;bottom:-14px;background:linear-gradient(to bottom,var(--indigo),transparent);}
        .step-l{flex-shrink:0;padding-right:20px;padding-top:2px;}
        .step-dot{width:36px;height:36px;border-radius:50%;background:var(--indigo);display:flex;align-items:center;justify-content:center;font-family:'Manrope',sans-serif;font-size:12px;font-weight:800;color:#fff;box-shadow:0 4px 10px rgba(79,70,229,.3);}
        .step-box{background:#fff;border:1px solid var(--border);border-radius:11px;padding:18px 22px;margin-bottom:14px;flex:1;box-shadow:0 1px 4px rgba(12,31,53,.04);}
        .step-title{font-family:'Manrope',sans-serif;font-size:13.5px;font-weight:700;color:var(--navy);margin-bottom:6px;}
        .step-body{font-size:13px;color:var(--muted);line-height:1.7;}

        /* Table */
        .tbl-wrap{background:#fff;border:1px solid var(--border);border-radius:12px;overflow:hidden;box-shadow:0 2px 6px rgba(12,31,53,.04);margin:20px 0;}
        .tbl-head{background:var(--navy);padding:13px 22px;display:flex;align-items:center;justify-content:space-between;}
        .tbl-head span{font-family:'Manrope',sans-serif;font-size:10.5px;font-weight:700;text-transform:uppercase;letter-spacing:.1em;color:rgba(255,255,255,.45);}
        .tbl-badge{background:rgba(79,70,229,.3)!important;color:#a5b4fc!important;padding:4px 10px;border-radius:100px;font-size:9.5px!important;}
        .tbl-wrap table{width:100%;border-collapse:collapse;font-size:13px;}
        .tbl-wrap thead th{padding:11px 22px;text-align:left;font-family:'Manrope',sans-serif;font-size:10px;font-weight:700;text-transform:uppercase;letter-spacing:.08em;color:#9ca3af;background:#fafbfc;border-bottom:1px solid var(--border);}
        .tbl-wrap tbody tr{border-bottom:1px solid #f3f4f6;transition:background .12s;}
        .tbl-wrap tbody tr:last-child{border-bottom:none;}
        .tbl-wrap tbody tr:hover{background:#fafbff;}
        .tbl-wrap tbody td{padding:13px 22px;color:#374151;}
        .tbl-wrap tbody td:first-child{font-weight:600;color:var(--navy);}
        .g{color:#059669!important;font-weight:600!important;}
        .a{color:#d97706!important;font-weight:600!important;}
        .r{color:#dc2626!important;font-weight:600!important;}

        /* Divider */
        .divider{height:1px;background:var(--border);margin:48px 0;}

        /* Related / Cards section */
        .cards-section{background:var(--navy);padding:60px 0;position:relative;overflow:hidden;}
        .cards-section::before{content:'';position:absolute;inset:0;background:radial-gradient(ellipse 50% 60% at 20% 50%,rgba(79,70,229,.18) 0%,transparent 65%);pointer-events:none;}
        .cs-title{font-family:'Lora',serif;font-size:26px;color:#fff;margin-bottom:6px;position:relative;}
        .cs-sub{color:rgba(255,255,255,.35);font-size:14.5px;margin-bottom:36px;position:relative;}
        .cards{display:grid;grid-template-columns:repeat(3,1fr);gap:18px;position:relative;}
        .card{background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.09);border-radius:12px;overflow:hidden;transition:all .22s;}
        .card:hover{transform:translateY(-5px);background:rgba(255,255,255,.08);border-color:rgba(99,102,241,.35);box-shadow:0 14px 36px rgba(0,0,0,.22);}
        .card img{width:100%;height:148px;object-fit:cover;display:block;}
        .card-body{padding:20px;}
        .card-tag{font-family:'Manrope',sans-serif;font-size:9.5px;font-weight:800;text-transform:uppercase;letter-spacing:.1em;color:#818cf8;margin-bottom:8px;}
        .card h4{font-family:'Lora',serif;font-size:15px;color:#fff;margin-bottom:8px;line-height:1.3;}
        .card p{font-size:13px!important;color:rgba(255,255,255,.4)!important;line-height:1.6!important;margin:0!important;}

        /* Feedback bar */
        .fb-bar{margin-top:48px;padding-top:20px;border-top:1px solid var(--border);display:flex;align-items:center;justify-content:space-between;}
        .fb-btn{display:flex;align-items:center;gap:6px;font-size:13px;font-weight:500;color:#374151;cursor:pointer;padding:7px 14px;border-radius:8px;border:1px solid var(--border);background:#fff;transition:all .2s;}
        .fb-btn:hover{color:var(--indigo);background:var(--indigo-light);border-color:#a5b4fc;}

        /* Animations */
        @keyframes fadeUp{from{opacity:0;transform:translateY(20px)}to{opacity:1;transform:translateY(0)}}
        .hero-inner>*{animation:fadeUp .65s ease both;}
        .hero-inner>*:nth-child(2){animation-delay:.1s;}
    </style>
    @stack('styles')
</head>
<body>

{{-- HEADER --}}
@include('partials.header')

{{-- ══ HERO ══ --}}
<section class="bg-[var(--navy)] pt-16 relative overflow-hidden">
    <div class="wrap">
        <div class="grid grid-cols-[1fr_380px] gap-14 items-end relative z-[1]">

            {{-- Left copy --}}
            <div>
                <div style="display:flex;gap:8px;margin-bottom:18px;flex-wrap:wrap;">
                    <span class="font-[Manrope] text-[10px] font-extrabold uppercase tracking-[0.12em] py-[5px] px-3 rounded-full bg-[rgba(79,70,229,0.25)] text-[#a5b4fc] border border-[rgba(99,102,241,0.3)]">@yield('hero_tag','Mortgage Analysis')</span>
                    <span class="font-[Manrope] text-[10px] font-extrabold uppercase tracking-[0.12em] py-[5px] px-3 rounded-full bg-[rgba(255,255,255,0.06)] text-[rgba(255,255,255,0.4)] border border-[rgba(255,255,255,0.12)]">@yield('hero_tag2','Core Concepts')</span>
                    <span class="font-[Manrope] text-[10px] font-extrabold uppercase tracking-[0.12em] py-[5px] px-3 rounded-full bg-[rgba(255,255,255,0.06)] text-[rgba(255,255,255,0.4)] border border-[rgba(255,255,255,0.12)]">Updated 2026</span>
                </div>
                <h1 class="fonttitle text-[clamp(26px,3.2vw,42px)] font-semibold text-white">@yield('hero_title','Mortgage Analysis')</h1>
                <p class="text-[rgba(255,255,255,0.45)] text-[15.5px] leading-[1.8] max-w-[520px] mb-7">@yield('hero_subtitle','Expert analysis of mortgage products, market dynamics, and lending fundamentals.')</p>
                <div class="flex items-center gap-4 font-[Manrope] text-[12px] text-white/[0.28] pb-[52px]">
                    <span>@yield('hero_date','March 2026')</span><i></i>
                    <span>@yield('hero_read_time','12 min read')</span><i></i>
                    <span>Express Fintech Research</span>
                </div>
            </div>

            {{-- Right panel --}}
            <div class="hero-right">
                <div class="rounded-[14px] overflow-hidden border border-[rgba(255,255,255,0.1)] shadow-[0_20px_60px_rgba(0,0,0,0.35)]">
                    <img src="@yield('hero_img','https://images.unsplash.com/photo-1560518883-ce09059eeffa?w=800&q=80')"
                         alt="@yield('hero_img_alt','Mortgage and property concept')" class="w-full h-[210px] object-cover block">
                </div>
                <div class="hero-stats">
                    @yield('hero_stats')
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ══ BODY ══ --}}
<div class="max-w-screen-xl mx-auto py-10 px-10">
    <div class="layout">

        {{-- ── SIDEBAR ── --}}
        <aside class="sidebar">
            <div class="toc">
                <div class="toc-head">Navigation</div>

                {{-- Fundamentals --}}
                <div class="toc-group">Fundamentals</div>
                <a href="{{ route('mortgages.fundamentals.fixed_vs_variable') }}"       class="@yield('nav_fixed_vs_variable')">
                    <span class="toc-n">01</span>Fixed vs Variable Rate
                </a>
                <a href="{{ route('mortgages.fundamentals.amortization_structure') }}"     class="@yield('nav_amortization_structure')">
                    <span class="toc-n">02</span>Amortization Structure
                </a>
                <a href="{{ route('mortgages.fundamentals.underwriting') }}"   class="@yield('nav_underwriting')">
                    <span class="toc-n">03</span>Mortgage Underwriting
                </a>
                <a href="{{ route('mortgages.fundamentals.ratio') }}"          class="@yield('nav_ratio')">
                    <span class="toc-n">04</span>Loan-to-Value Ratio
                </a>
                <a href="{{ route('mortgages.fundamentals.interest_rate') }}"  class="@yield('nav_interest_rate')">
                    <span class="toc-n">05</span>Interest Rate Mechanics
                </a>

                <div class="toc-div"></div>

                {{-- Products --}}
                <div class="toc-group">Products</div>
                <a href="{{ route('mortgages.products.conventional') }}"       class="@yield('nav_conventional')">
                    <span class="toc-n">—</span>Conventional Loans
                </a>
                <a href="{{ route('mortgages.products.fha_va') }}"             class="@yield('nav_fha_va')">
                    <span class="toc-n">—</span>FHA / VA Loans
                </a>
                <a href="{{ route('mortgages.products.jumbo') }}"              class="@yield('nav_jumbo')">
                    <span class="toc-n">—</span>Jumbo Loans
                </a>
                <a href="{{ route('mortgages.products.refinance') }}"          class="@yield('nav_refinance')">
                    <span class="toc-n">—</span>Refinance Strategies
                </a>
                <a href="{{ route('mortgages.products.adjustable_rate') }}"    class="@yield('nav_adjustable')">
                    <span class="toc-n">—</span>Adjustable-Rate (ARM)
                </a>

                <div class="toc-div"></div>

                {{-- Analysis --}}
                <div class="toc-group">Market Analysis</div>
                <a href="{{ route('mortgages.analysis.price_trends') }}"       class="@yield('nav_price_trends')">
                    <span class="toc-n">—</span>Housing Price Trends
                </a>
                <a href="{{ route('mortgages.analysis.securities') }}"         class="@yield('nav_securities')">
                    <span class="toc-n">—</span>MBS
                </a>
                <a href="{{ route('mortgages.analysis.forecasting') }}"        class="@yield('nav_forecasting')">
                    <span class="toc-n">—</span>Rate Forecasting
                </a>
                <a href="{{ route('mortgages.analysis.estate_cycles') }}"      class="@yield('nav_cycles')">
                    <span class="toc-n">—</span>Real Estate Cycles
                </a>
                <a href="{{ route('mortgages.analysis.regulatory') }}"         class="@yield('nav_regulatory')">
                    <span class="toc-n">—</span>Regulatory Impact
                </a>
            </div>

            {{-- CTA --}}
            <div class="scta">
                <h4>Expert Advice</h4>
                <p>Speak with our mortgage research team for personalised rate and product analysis.</p>
                <a href="{{ route('consultation') }}">Book Free Session →</a>
            </div>
        </aside>

        {{-- ── MAIN ── --}}
        <main class="content">

            {{-- Badge bar --}}
            <div class="art-bar">
                <div style="display:flex;align-items:center;gap:12px;">
                    <span class="art-badge">@yield('article_badge','Mortgage Analysis')</span>
                    <span style="font-family:'Manrope',sans-serif;font-size:11px;color:#9ca3af;">Expert Verified · 2026</span>
                </div>
                <div class="art-actions">
                    <button class="art-btn" title="Share">
                        <svg width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"/></svg>
                    </button>
                    <button class="art-btn" title="Save">
                        <svg width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"/></svg>
                    </button>
                </div>
            </div>

            {{-- Article body --}}
            @yield('content')

            {{-- Feedback --}}
            <div class="fb-bar">
                <div>
                    <p style="font-family:'Manrope',sans-serif;font-size:11px;color:#9ca3af;text-transform:uppercase;letter-spacing:.08em;margin-bottom:8px;">Was this helpful?</p>
                    <div style="display:flex;gap:8px;">
                        <button class="fb-btn">
                            <svg width="15" height="15" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"/></svg>
                            Helpful
                        </button>
                        <button class="fb-btn" style="transform:none;">
                            <svg width="15" height="15" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" style="transform:rotate(180deg)"><path stroke-linecap="round" stroke-linejoin="round" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"/></svg>
                            Needs work
                        </button>
                    </div>
                </div>
                <div style="text-align:right;">
                    <p style="font-family:'Manrope',sans-serif;font-size:11px;color:#9ca3af;margin-bottom:4px;">Last Updated</p>
                    <p style="font-size:13px;font-weight:600;color:#374151;">@yield('last_updated','March 2026')</p>
                </div>
            </div>

        </main>
    </div>
</div>

{{-- ══ RELATED ══ --}}
@hasSection('related')
<section class="cards-section">
    <div class="wrap">
        <h2 class="cs-title">Related Research</h2>
        <p class="cs-sub">Further analysis from the Express Fintech research team.</p>
        <div class="cards">
            @yield('related')
        </div>
    </div>
</section>
@endif

{{-- FOOTER --}}
<footer style="border-top:1px solid #e5e7eb;padding:28px 0;background:#fff;">
    <div class="wrap" style="display:flex;align-items:center;justify-content:space-between;font-size:12px;color:#9ca3af;">
        <span>© 2026 Express Fintech. All rights reserved.</span>
        <div style="display:flex;gap:20px;">
            <a href="#" style="color:#9ca3af;text-decoration:none;transition:color .2s;" onmouseover="this.style.color='#4f46e5'" onmouseout="this.style.color='#9ca3af'">Privacy Policy</a>
            <a href="#" style="color:#9ca3af;text-decoration:none;transition:color .2s;" onmouseover="this.style.color='#4f46e5'" onmouseout="this.style.color='#9ca3af'">Terms of Use</a>
            <a href="{{ route('consultation') }}" style="color:#9ca3af;text-decoration:none;transition:color .2s;" onmouseover="this.style.color='#4f46e5'" onmouseout="this.style.color='#9ca3af'">Contact</a>
        </div>
    </div>
</footer>

@stack('scripts')
</body>
</html>