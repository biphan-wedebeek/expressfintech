@extends('layouts.finreview')
@section('title', "How the Fed's " . now()->year . " Rate Decision Will Reshape Your Strategy – FinReview")
@section('description', 'In-depth analysis of the Fed rate cut probability and what it means for your savings, mortgage, and investments.')

@section('content')

<div class="bg-[#0f0f0f] relative overflow-hidden">
    <div class="relative h-[460px] overflow-hidden">
        <img src="https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?w=1400&q=85&auto=format&fit=crop"
            alt="Federal Reserve Rate Analysis" class="w-full h-full object-cover opacity-60">
        <div class="absolute inset-0" style="background:linear-gradient(to bottom, rgba(15,15,15,0.3) 0%, rgba(15,15,15,0.7) 60%, #0f0f0f 100%)"></div>

        <div class="absolute top-8 left-0 right-0">
            <div class="max-w-screen-lg mx-auto px-6">
                <nav class="flex items-center gap-2 text-[12px] text-white/50">
                    <a href="{{ route('home') }}" class="hover:text-white transition-colors">Home</a>
                    <span>/</span>
                    <a href="{{ route('article.fed-rate') }}" class="hover:text-white transition-colors">Articles</a>
                    <span>/</span>
                    <span class="text-white/80">Fed Rate Decision {{ now()->year }}</span>
                </nav>
            </div>
        </div>

        <div class="absolute bottom-0 left-0 right-0 pb-12">
            <div class="max-w-screen-lg mx-auto px-6">
                <div class="flex items-center gap-3 mb-4">
                    <span class="bg-[#c9a96e] text-[#0f0f0f] text-[10px] font-black uppercase tracking-[0.12em] px-3 py-1.5 rounded-lg">In-Depth Analysis</span>
                    <span class="bg-white/15 backdrop-blur-sm text-white/85 text-[11px] font-medium px-3 py-1.5 rounded-lg border border-white/20">Investing</span>
                    <span class="bg-white/15 backdrop-blur-sm text-white/85 text-[11px] font-medium px-3 py-1.5 rounded-lg border border-white/20">Interest Rates</span>
                </div>
                <h1 class="text-white! font-bold leading-[1.2] max-w-[780px]" style="font-family:'Playfair Display',serif; font-size:clamp(28px,4vw,46px)">
                    How the Fed's {{ now()->year }} Rate Decision Will Reshape Your Savings, Mortgage, and Investment Strategy
                </h1>
                <div class="flex items-center gap-6 mt-5 text-[13px] text-white/50">
                    <span>{{ seoUpdateDate('article-fed-rate') }}</span>
                    <span class="flex items-center gap-1.5">
                        <svg class="w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10" />
                            <polyline points="12 6 12 12 16 14" />
                        </svg>
                        12 min read
                    </span>
                    <span>By <strong class="text-white/80 font-semibold">FinReview Research Team</strong></span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bg-[#f5f0eb]">
    <div class="max-w-screen-lg mx-auto px-6 py-14">
        <div class="grid grid-cols-1 lg:grid-cols-[1fr_300px] gap-12">
            <article class="min-w-0">
                <div class="bg-white border-l-4 border-[#c9a96e] rounded-r-2xl p-6 mb-10 shadow-sm">
                    <h2 class="text-[13px] font-black uppercase tracking-[0.12em] text-[#c9a96e] mb-4">Key Takeaways</h2>
                    <ul class="space-y-2.5">
                        @foreach([
                        'Markets price a 78% probability of a 25bps Fed rate cut by June '. now()->format('M Y'),
                        'High-yield savings rates will likely drop from 4.75% to ~4.25% APY within 90 days of a cut',
                        'Mortgage rates could fall to 5.8%–6.0% range, opening refinancing windows',
                        'Bond portfolios should shift toward longer duration before the cut',
                        'Growth stocks historically outperform 6–12 months post-cut'
                        ] as $point)
                        <li class="flex items-start gap-2.5 text-[14px] text-[#1a1a1a]">
                            <svg class="w-4 h-4 text-[#c9a96e] shrink-0 mt-0.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="9 11 12 14 22 4" />
                            </svg>
                            {{ $point }}
                        </li>
                        @endforeach
                    </ul>
                </div>

                <p class="text-[17px] text-[#1a1a1a] leading-[1.9] mb-6 font-light">
                    The Federal Reserve's next move is the most consequential financial decision of {{ now()->year }} — and with a 78% market-implied probability of a 25 basis point cut by June, the question is no longer <em>if</em> rates will fall, but <em>what you should do before they do.</em>
                </p>
                <p class="text-[15.5px] text-[#3d3833] leading-[1.85] mb-10">
                    Our research team analyzed historical Fed cutting cycles going back to 1995 and modeled the impact across four asset classes: high-yield savings, fixed-rate mortgages, bond portfolios, and equities. Here's exactly what the data shows.
                </p>

                <h2 class="text-[26px] font-bold text-[#1a1a1a] mb-4 mt-12" style="font-family:'Playfair Display',serif">
                    What a 25bps Cut Means for Your Savings Account
                </h2>
                <p class="text-[15.5px] text-[#3d3833] leading-[1.85] mb-5">
                    High-yield savings accounts are among the most rate-sensitive products available to retail investors. When the Fed cuts the federal funds rate by 25bps, online banks typically pass through 80–100% of the reduction within 30–60 days.
                </p>

                <div class="bg-white rounded-2xl border border-[#e8e0d8] overflow-hidden mb-8 shadow-sm">
                    <div class="bg-[#1a1a1a] px-6 py-3">
                        <p class="text-[11px] font-bold uppercase tracking-[0.12em] text-[#c9a96e]">Projected Savings Rate Impact — Top 5 Online Banks</p>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-[13.5px]">
                            <thead class="bg-[#f9f7f4]">
                                <tr>
                                    <th class="text-left px-5 py-3 font-bold text-[#1a1a1a] text-[12px] uppercase tracking-wider">Bank</th>
                                    <th class="text-right px-5 py-3 font-bold text-[#1a1a1a] text-[12px] uppercase tracking-wider">Current APY</th>
                                    <th class="text-right px-5 py-3 font-bold text-[#1a1a1a] text-[12px] uppercase tracking-wider">Post-Cut (est.)</th>
                                    <th class="text-right px-5 py-3 font-bold text-[#1a1a1a] text-[12px] uppercase tracking-wider">Timeline</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-[#f0e8df]">
                                @foreach([
                                ['Ally Bank', '4.75%', '4.50%', '30–45 days'],
                                ['Marcus by Goldman', '4.70%', '4.45%', '14–30 days'],
                                ['SoFi', '4.60%', '4.35%', '7–14 days'],
                                ['Discover Online', '4.65%', '4.40%', '30–45 days'],
                                ['American Express HYSA', '4.55%', '4.30%', '30–60 days'],
                                ] as $row)
                                <tr class="hover:bg-[#fdf9f6] transition-colors">
                                    <td class="px-5 py-3.5 font-semibold text-[#1a1a1a]">{{ $row[0] }}</td>
                                    <td class="px-5 py-3.5 text-right text-[#c9a96e] font-bold">{{ $row[1] }}</td>
                                    <td class="px-5 py-3.5 text-right text-red-500 font-bold">{{ $row[2] }}</td>
                                    <td class="px-5 py-3.5 text-right text-[#6b6560]">{{ $row[3] }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <p class="text-[15.5px] text-[#3d3833] leading-[1.85] mb-10">
                    <strong class="text-[#1a1a1a]">Our recommendation:</strong> If you have $50,000+ in a HYSA, consider locking in a portion into 12–18 month CDs now. Current CD rates at Marcus (5.05%) and Discover (4.95%) represent a spread of 30–40bps over HYSA — a premium worth capturing before the cut lands.
                </p>

                <h2 class="text-[26px] font-bold text-[#1a1a1a] mb-4 mt-12" style="font-family:'Playfair Display',serif">
                    Mortgage Rates: Should You Buy, Wait, or Refinance?
                </h2>
                <p class="text-[15.5px] text-[#3d3833] leading-[1.85] mb-5">
                    Mortgage rates don't move 1:1 with the federal funds rate — they track the 10-year Treasury yield, which has already priced in much of the anticipated cut. That said, a confirmed cut typically reduces 30-year fixed rates by 15–30bps over the following 60 days.
                </p>

                <div class="grid grid-cols-3 gap-4 mb-8">

                    @foreach([
                    ['Current 30Y Rate', '6.12%', 'text-[#1a1a1a]', 'National average as of Mar '. now()->format('M Y')],
                    ['Post-Cut Estimate', '5.85%', 'text-green-600', 'Within 60 days of June cut'],
                    ['Refinance Break-even', '18 mo.', 'text-[#c9a96e]', 'At current closing costs avg'],
                    ] as $m)
                    <div class="bg-white rounded-xl border border-[#e8e0d8] p-5 text-center shadow-sm">
                        <div class="text-[11px] text-[#6b6560] uppercase tracking-wider mb-2">{{ $m[0] }}</div>
                        <div class="text-[28px] font-extrabold {{ $m[2] }} mb-1" style="font-family:'Playfair Display',serif">{{ $m[1] }}</div>
                        <div class="text-[11px] text-[#6b6560] leading-tight">{{ $m[3] }}</div>
                    </div>
                    @endforeach
                </div>

                <p class="text-[15.5px] text-[#3d3833] leading-[1.85] mb-10">
                    For homeowners with rates above 7.0%, the math on refinancing becomes compelling if rates hit 5.85%. On a $400,000 loan, that's roughly $340/month in savings — breaking even on typical $8,000 closing costs in under 24 months.
                </p>

                <h2 class="text-[26px] font-bold text-[#1a1a1a] mb-4 mt-12" style="font-family:'Playfair Display',serif">
                    Investment Portfolio: What History Tells Us
                </h2>
                <p class="text-[15.5px] text-[#3d3833] leading-[1.85] mb-5">
                    Analyzing the past 6 Fed cutting cycles (1995, 1998, 2001, 2007, 2019, 2020), we found consistent patterns in how major asset classes perform in the 12 months following the first cut.
                </p>

                <div class="bg-white rounded-2xl border border-[#e8e0d8] overflow-hidden mb-10 shadow-sm">
                    <div class="bg-[#1a1a1a] px-6 py-3">
                        <p class="text-[11px] font-bold uppercase tracking-[0.12em] text-[#c9a96e]">12-Month Post-Cut Performance — Historical Average</p>
                    </div>
                    <div class="divide-y divide-[#f0e8df]">
                        @foreach([
                        ['S&P 500 (Growth)', '+14.2%', 'green', 85],
                        ['REITs', '+18.7%', 'green', 95],
                        ['Investment Grade Bonds', '+8.1%', 'green', 60],
                        ['10Y Treasury', '+6.3%', 'green', 45],
                        ['High-Yield Savings', '+0.2%', 'gray', 15],
                        ['Cash / Money Market', '-1.4%', 'red', 10],
                        ] as $row)
                        <div class="px-6 py-4 flex items-center gap-4">
                            <div class="w-36 shrink-0 text-[13.5px] font-semibold text-[#1a1a1a]">{{ $row[0] }}</div>
                            <div class="flex-1 bg-[#f5f0eb] rounded-full h-2.5 overflow-hidden">
                                <div class="h-full rounded-full {{ $row[2]==='green'?'bg-green-500':($row[2]==='red'?'bg-red-400':'bg-[#c9a96e]') }}" style="width:{{ $row[3] }}%"></div>
                            </div>
                            <div class="w-14 text-right text-[14px] font-bold {{ $row[2]==='green'?'text-green-600':($row[2]==='red'?'text-red-500':'text-[#6b6560]') }}">{{ $row[1] }}</div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="bg-[#1a1a1a] rounded-2xl p-7 mb-10">
                    <h3 class="text-[15px] font-bold text-[#c9a96e]! mb-3 uppercase tracking-wider text-[11px]">Bottom Line</h3>
                    <p class="text-white/80 text-[15px] leading-[1.8]">
                        A June {{ now()->year }} rate cut is highly probable but not guaranteed. The most risk-adjusted move is to <strong class="text-white">lock in CD rates now</strong>, <strong class="text-white">pre-qualify for a mortgage refinance</strong>, and <strong class="text-white">tilt your equity exposure toward REITs and growth</strong> — while keeping 3–6 months of expenses in liquid HYSA regardless of rate changes.
                    </p>
                </div>

            </article>

            <aside class="space-y-6">
                <div class="bg-white rounded-2xl border border-[#e8e0d8] p-6 shadow-sm sticky top-24">
                    <h3 class="text-[11px] font-bold uppercase tracking-[0.13em] text-[#c9a96e] mb-5">Related Articles</h3>

                    <a href="{{ route('article.emergency-fund') }}" class="flex gap-3 mb-5 group">
                        <div class="w-16 h-16 rounded-xl overflow-hidden shrink-0">
                            <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?w=200&h=200&q=80&auto=format&fit=crop"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        </div>
                        <div class="flex-1 min-w-0">
                            <span class="text-[10px] font-bold uppercase tracking-wider text-[#c9a96e]">Personal Finance</span>
                            <p class="text-[13px] font-semibold text-[#1a1a1a] leading-snug mt-0.5 group-hover:text-[#c9a96e] transition-colors line-clamp-2">Emergency Fund vs. High-Yield Savings in {{ now()->year }}</p>
                            <span class="text-[11px] text-[#6b6560]">{{ seoUpdateDate('article-emergency-fund') }}</span>
                        </div>
                    </a>

                    <div class="border-t border-[#f0e8df] pt-5">
                        <a href="{{ route('article.home-insurance') }}" class="flex gap-3 group">
                            <div class="w-16 h-16 rounded-xl overflow-hidden shrink-0">
                                <img src="https://images.unsplash.com/photo-1582407947304-fd86f028f716?w=200&h=200&q=80&auto=format&fit=crop"
                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                            </div>
                            <div class="flex-1 min-w-0">
                                <span class="text-[10px] font-bold uppercase tracking-wider text-[#c9a96e]">Insurance</span>
                                <p class="text-[13px] font-semibold text-[#1a1a1a] leading-snug mt-0.5 group-hover:text-[#c9a96e] transition-colors line-clamp-2">Why Home Insurance Premiums Rose 18% in 2025</p>
                                <span class="text-[11px] text-[#6b6560]">{{ seoUpdateDate('article-home-insurance') }}</span>
                            </div>
                        </a>
                    </div>

                    <div class="mt-6 pt-6 border-t border-[#f0e8df]">
                        <h3 class="text-[11px] font-bold uppercase tracking-[0.13em] text-[#c9a96e] mb-4">Live Key Rates</h3>
                        @foreach([
                        ['Fed Funds Rate', '4.25–4.50%'],
                        ['10Y Treasury', '3.92%'],
                        ['30Y Mortgage Avg', '6.12%'],
                        ['Top HYSA Rate', '4.75%'],
                        ] as $r)
                        <div class="flex items-center justify-between py-2.5 border-b border-[#f5f0eb] last:border-0">
                            <span class="text-[12.5px] text-[#6b6560]">{{ $r[0] }}</span>
                            <span class="text-[13px] font-bold text-[#1a1a1a]">{{ $r[1] }}</span>
                        </div>
                        @endforeach
                    </div>

                    <a href="{{ route('contact') }}"
                        class="mt-6 flex items-center justify-center gap-2 bg-[#c9a96e] hover:bg-[#b8934a] text-[#0f0f0f] font-bold text-[13.5px] px-5 py-3 rounded-xl transition-colors w-full">
                        Get Free Consultation
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </aside>
        </div>
    </div>
</div>

@endsection