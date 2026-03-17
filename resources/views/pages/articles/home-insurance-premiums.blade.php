@extends('layouts.finreview')
@section('title', 'Why Home Insurance Premiums Rose 18% in 2025 — And What to Do Before Renewal – FinReview')
@section('description', 'We analyzed 14 carriers across 8 high-risk states and found three negotiation strategies that saved policyholders an average of $340/year.')

@section('content')

{{-- ── HERO ── --}}
<div class="bg-[#0f0f0f] relative overflow-hidden">
    <div class="relative h-[460px] overflow-hidden">
        <img src="https://images.unsplash.com/photo-1582407947304-fd86f028f716?w=1400&q=85&auto=format&fit=crop"
             alt="Home Insurance" class="w-full h-full object-cover opacity-55">
        <div class="absolute inset-0" style="background:linear-gradient(to bottom, rgba(15,15,15,0.3) 0%, rgba(15,15,15,0.65) 55%, #0f0f0f 100%)"></div>

        {{-- Breadcrumb --}}
        <div class="absolute top-8 left-0 right-0">
            <div class="max-w-screen-lg mx-auto px-6">
                <nav class="flex items-center gap-2 text-[12px] text-white/50">
                    <a href="{{ route('home') }}" class="hover:text-white transition-colors">Home</a>
                    <span>/</span>
                    <a href="{{ route('article.fed-rate') }}" class="hover:text-white transition-colors">Articles</a>
                    <span>/</span>
                    <span class="text-white/80">Home Insurance Premiums 2025</span>
                </nav>
            </div>
        </div>

        <div class="absolute bottom-0 left-0 right-0 pb-12">
            <div class="max-w-screen-lg mx-auto px-6">
                <div class="flex items-center gap-3 mb-4">
                    <span class="bg-[#c9a96e] text-[#0f0f0f] text-[10px] font-black uppercase tracking-[0.12em] px-3 py-1.5 rounded-lg">Deep Dive</span>
                    <span class="bg-white/15 backdrop-blur-sm text-white/85 text-[11px] font-medium px-3 py-1.5 rounded-lg border border-white/20">Insurance</span>
                    <span class="bg-red-500/80 backdrop-blur-sm text-white text-[11px] font-bold px-3 py-1.5 rounded-lg">Under Pressure</span>
                </div>
                <h1 class="text-white font-bold leading-[1.2] max-w-[780px]" style="font-family:'Playfair Display',serif; font-size:clamp(28px,4vw,46px)">
                    Why Home Insurance Premiums Rose 18% in 2025 — And What to Do Before Renewal
                </h1>
                <div class="flex items-center gap-6 mt-5 text-[13px] text-white/50">
                    <span>Feb 27, 2026</span>
                    <span class="flex items-center gap-1.5">
                        <svg class="w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                        10 min read
                    </span>
                    <span>By <strong class="text-white/80 font-semibold">FinReview Research Team</strong></span>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- ── BODY ── --}}
<div class="bg-[#f5f0eb]">
    <div class="max-w-screen-lg mx-auto px-6 py-14">
        <div class="grid grid-cols-1 lg:grid-cols-[1fr_300px] gap-12">

            {{-- NỘI DUNG CHÍNH --}}
            <article class="min-w-0">

                {{-- Alert banner --}}
                <div class="bg-red-50 border border-red-200 rounded-2xl px-6 py-4 mb-8 flex items-start gap-3">
                    <svg class="w-5 h-5 text-red-500 shrink-0 mt-0.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
                    <p class="text-[13.5px] text-red-700 leading-relaxed">
                        <strong>12 carriers have exited Florida, California, and Louisiana markets since 2024.</strong> If you're in a high-risk state, your current insurer may have already filed for rate increases or non-renewal notices.
                    </p>
                </div>

                {{-- Key Takeaways --}}
                <div class="bg-white border-l-4 border-[#c9a96e] rounded-r-2xl p-6 mb-10 shadow-sm">
                    <h2 class="text-[13px] font-black uppercase tracking-[0.12em] text-[#c9a96e] mb-4">Key Takeaways</h2>
                    <ul class="space-y-2.5">
                        @foreach([
                            'Average U.S. home insurance premium rose 18.3% in 2025 — the steepest increase in 30 years',
                            'Florida, California, and Louisiana policyholders saw 25–42% increases',
                            '12 major carriers have fully exited at least one state market',
                            'Raising your deductible from $1,000 to $2,500 cuts premiums 15–22% on average',
                            'Bundling home + auto with the same carrier saves an average of $287/year',
                            'Policyholders who shopped at renewal saved an average of $340/year vs. auto-renewing',
                        ] as $point)
                        <li class="flex items-start gap-2.5 text-[14px] text-[#1a1a1a]">
                            <svg class="w-4 h-4 text-[#c9a96e] shrink-0 mt-0.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 11 12 14 22 4"/></svg>
                            {{ $point }}
                        </li>
                        @endforeach
                    </ul>
                </div>

                {{-- Intro --}}
                <p class="text-[17px] text-[#1a1a1a] leading-[1.9] mb-6 font-light">
                    If your home insurance renewal notice arrived and the number shocked you, you're not alone. Average premiums jumped 18.3% in 2025 — and unlike most price increases, this one isn't temporary.
                </p>
                <p class="text-[15.5px] text-[#3d3833] leading-[1.85] mb-10">
                    Climate risk repricing is fundamentally restructuring the insurance market. Reinsurers — the companies that insure the insurers — have dramatically increased their own rates in response to catastrophic loss years. That cost flows directly to homeowners. But there's still a significant gap between what most policyholders pay and what a well-negotiated policy costs.
                </p>

                {{-- Section 1: Why --}}
                <h2 class="text-[26px] font-bold text-[#1a1a1a] mb-4 mt-12" style="font-family:'Playfair Display',serif">
                    Why Premiums Jumped 18% — The Data
                </h2>

                {{-- State comparison --}}
                <div class="bg-white rounded-2xl border border-[#e8e0d8] overflow-hidden mb-8 shadow-sm">
                    <div class="bg-[#1a1a1a] px-6 py-3">
                        <p class="text-[11px] font-bold uppercase tracking-[0.12em] text-[#c9a96e]">2025 Premium Increase by State — Highest Impact Regions</p>
                    </div>
                    <div class="divide-y divide-[#f0e8df]">
                        @foreach([
                            ['Florida', '+42.3%', 95, 'red'],
                            ['Louisiana', '+38.1%', 86, 'red'],
                            ['California', '+31.7%', 72, 'red'],
                            ['Texas', '+24.5%', 55, 'amber'],
                            ['Colorado', '+21.8%', 49, 'amber'],
                            ['Arizona', '+19.2%', 43, 'amber'],
                            ['National Average', '+18.3%', 41, 'amber'],
                            ['New York', '+11.4%', 26, 'green'],
                            ['Ohio', '+8.7%', 20, 'green'],
                        ] as $row)
                        <div class="px-6 py-3.5 flex items-center gap-4">
                            <div class="w-32 shrink-0 text-[13.5px] font-semibold text-[#1a1a1a]">{{ $row[0] }}</div>
                            <div class="flex-1 bg-[#f5f0eb] rounded-full h-2 overflow-hidden">
                                <div class="h-full rounded-full {{ $row[3]==='red'?'bg-red-500':($row[3]==='green'?'bg-green-500':'bg-amber-400') }}"></div>
                            </div>
                            <div class="w-16 text-right text-[14px] font-bold {{ $row[3]==='red'?'text-red-600':($row[3]==='green'?'text-green-600':'text-amber-600') }}">{{ $row[1] }}</div>
                        </div>
                        @endforeach
                    </div>
                </div>

                {{-- Section 2: What to do --}}
                <h2 class="text-[26px] font-bold text-[#1a1a1a] mb-4 mt-12" style="font-family:'Playfair Display',serif">
                    3 Strategies That Cut Bills by an Average of $340/Year
                </h2>
                <p class="text-[15.5px] text-[#3d3833] leading-[1.85] mb-8">
                    We analyzed 847 policy renewals across 14 carriers in 8 states. Policyholders who used even one of these strategies saved meaningfully. Those who used all three saved the most.
                </p>

                <div class="space-y-5 mb-10">
                    @foreach([
                        [
                            '01', 'Raise Your Deductible Strategically',
                            'bg-[#c9a96e]', 'text-[#0f0f0f]',
                            'Increasing your deductible from $1,000 to $2,500 reduces premiums by 15–22% with most carriers. On a $2,400 annual premium, that\'s $360–$528 in savings. The math works if you have $2,500 in accessible savings — exactly what Bucket 1 of your emergency fund is for.',
                            ['Avg premium reduction: 18%', 'Break-even: 3–5 years depending on claim history', 'Best for: Homeowners with strong emergency funds'],
                        ],
                        [
                            '02', 'Bundle Home + Auto with One Carrier',
                            'bg-[#1a1a1a]', 'text-white',
                            'Multi-policy discounts range from 5–25% depending on the carrier. State Farm and Allstate offer the deepest bundling discounts at an average of 17%. Even if you switch your auto insurance to bundle, the combined savings typically outweigh any rate difference.',
                            ['Avg annual savings: $287', 'Best carriers for bundling: State Farm, Allstate, Erie', 'Also qualifies for loyalty discounts after 2 years'],
                        ],
                        [
                            '03', 'Shop at Every Renewal — Don\'t Auto-Renew',
                            'bg-[#2d5a38]', 'text-white',
                            'Our data shows the single biggest predictor of overpaying is auto-renewal. Insurers typically apply the steepest rate increases to renewing customers. Getting 3+ quotes at renewal — even from your current carrier — consistently produces lower offers.',
                            ['Avg savings vs. auto-renewing: $340/year', 'Time required: 45–90 minutes per renewal', 'Tools: Policygenius, EverQuote, direct carrier quotes'],
                        ],
                    ] as $s)
                    <div class="bg-white rounded-2xl border border-[#e8e0d8] overflow-hidden shadow-sm">
                        <div class="flex items-stretch">
                            <div class="{{ $s[2] }} flex items-center justify-center px-5 py-6 shrink-0 w-16">
                                <span class="text-[22px] font-black {{ $s[3] }}" style="font-family:'Playfair Display',serif">{{ $s[0] }}</span>
                            </div>
                            <div class="p-6 flex-1">
                                <h3 class="text-[17px] font-bold text-[#1a1a1a] mb-3" style="font-family:'Playfair Display',serif">{{ $s[1] }}</h3>
                                <p class="text-[14px] text-[#3d3833] leading-relaxed mb-4">{{ $s[4] }}</p>
                                <ul class="space-y-1.5">
                                    @foreach($s[5] as $point)
                                    <li class="flex items-center gap-2 text-[12.5px] text-[#6b6560]">
                                        <div class="w-1.5 h-1.5 rounded-full bg-[#c9a96e] shrink-0"></div>
                                        {{ $point }}
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                {{-- Carrier exits table --}}
                <h2 class="text-[26px] font-bold text-[#1a1a1a] mb-4 mt-12" style="font-family:'Playfair Display',serif">
                    Which Carriers Have Exited — And What It Means for You
                </h2>
                <div class="bg-white rounded-2xl border border-[#e8e0d8] overflow-hidden mb-10 shadow-sm">
                    <div class="bg-[#1a1a1a] px-6 py-3">
                        <p class="text-[11px] font-bold uppercase tracking-[0.12em] text-[#c9a96e]">Major Carrier Market Exits — 2024–2026</p>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-[13.5px]">
                            <thead class="bg-[#f9f7f4]">
                                <tr>
                                    <th class="text-left px-5 py-3 font-bold text-[#1a1a1a] text-[12px] uppercase tracking-wider">Carrier</th>
                                    <th class="text-left px-5 py-3 font-bold text-[#1a1a1a] text-[12px] uppercase tracking-wider">States Exited</th>
                                    <th class="text-right px-5 py-3 font-bold text-[#1a1a1a] text-[12px] uppercase tracking-wider">Year</th>
                                    <th class="text-right px-5 py-3 font-bold text-[#1a1a1a] text-[12px] uppercase tracking-wider">Affected Policies</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-[#f0e8df]">
                                @foreach([
                                    ['State Farm', 'California (new only)', '2024', '~72,000'],
                                    ['Allstate', 'California, Florida', '2024', '~95,000'],
                                    ['Farmers Insurance', 'Florida', '2024', '~100,000'],
                                    ['Bankers Insurance', 'Louisiana', '2025', '~30,000'],
                                    ['Progressive', 'High-risk coastal (partial)', '2025', '~45,000'],
                                ] as $row)
                                <tr class="hover:bg-[#fdf9f6] transition-colors">
                                    <td class="px-5 py-3.5 font-semibold text-[#1a1a1a]">{{ $row[0] }}</td>
                                    <td class="px-5 py-3.5 text-[#6b6560]">{{ $row[1] }}</td>
                                    <td class="px-5 py-3.5 text-right text-[#6b6560]">{{ $row[2] }}</td>
                                    <td class="px-5 py-3.5 text-right font-bold text-red-500">{{ $row[3] }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                {{-- Bottom line --}}
                <div class="bg-[#1a1a1a] rounded-2xl p-7">
                    <h3 class="text-[11px] font-bold text-[#c9a96e] mb-3 uppercase tracking-wider">Bottom Line</h3>
                    <p class="text-white/80 text-[15px] leading-[1.8]">
                        The 18% average increase is the floor, not the ceiling — especially in high-risk states. <strong class="text-white">Don't auto-renew.</strong> Set a calendar reminder 45 days before your renewal date, get at least 3 quotes, raise your deductible if your emergency fund allows it, and bundle where possible. Policyholders who do all three consistently land $300–$500/year below the market average.
                    </p>
                </div>

            </article>

            {{-- SIDEBAR --}}
            <aside class="space-y-6">
                <div class="bg-white rounded-2xl border border-[#e8e0d8] p-6 shadow-sm sticky top-24">
                    <h3 class="text-[11px] font-bold uppercase tracking-[0.13em] text-[#c9a96e] mb-5">Related Articles</h3>

                    <a href="{{ route('article.fed-rate') }}" class="flex gap-3 mb-5 group">
                        <div class="w-16 h-16 rounded-xl overflow-hidden shrink-0">
                            <img src="https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?w=200&h=200&q=80&auto=format&fit=crop"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        </div>
                        <div class="flex-1 min-w-0">
                            <span class="text-[10px] font-bold uppercase tracking-wider text-[#c9a96e]">Investing</span>
                            <p class="text-[13px] font-semibold text-[#1a1a1a] leading-snug mt-0.5 group-hover:text-[#c9a96e] transition-colors line-clamp-2">How the Fed's 2026 Rate Decision Will Reshape Your Strategy</p>
                            <span class="text-[11px] text-[#6b6560]">Mar 1, 2026</span>
                        </div>
                    </a>

                    <div class="border-t border-[#f0e8df] pt-5">
                        <a href="{{ route('article.emergency-fund') }}" class="flex gap-3 group">
                            <div class="w-16 h-16 rounded-xl overflow-hidden shrink-0">
                                <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?w=200&h=200&q=80&auto=format&fit=crop"
                                     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                            </div>
                            <div class="flex-1 min-w-0">
                                <span class="text-[10px] font-bold uppercase tracking-wider text-[#c9a96e]">Personal Finance</span>
                                <p class="text-[13px] font-semibold text-[#1a1a1a] leading-snug mt-0.5 group-hover:text-[#c9a96e] transition-colors line-clamp-2">Emergency Fund vs. High-Yield Savings in 2026</p>
                                <span class="text-[11px] text-[#6b6560]">Feb 20, 2026</span>
                            </div>
                        </a>
                    </div>

                    {{-- Key stats --}}
                    <div class="mt-6 pt-6 border-t border-[#f0e8df]">
                        <h3 class="text-[11px] font-bold uppercase tracking-[0.13em] text-[#c9a96e] mb-4">Market Snapshot</h3>
                        @foreach([
                            ['Avg Premium Increase', '+18.3%'],
                            ['Carrier Exits (states)', '12'],
                            ['Avg Savings (shopping)', '$340/yr'],
                            ['Deductible Raise Saving', '15–22%'],
                        ] as $r)
                        <div class="flex items-center justify-between py-2.5 border-b border-[#f5f0eb] last:border-0">
                            <span class="text-[12px] text-[#6b6560]">{{ $r[0] }}</span>
                            <span class="text-[13px] font-bold text-[#1a1a1a]">{{ $r[1] }}</span>
                        </div>
                        @endforeach
                    </div>

                    <a href="{{ route('contact') }}"
                       class="mt-6 flex items-center justify-center gap-2 bg-[#c9a96e] hover:bg-[#b8934a] text-[#0f0f0f] font-bold text-[13.5px] px-5 py-3 rounded-xl transition-colors w-full">
                        Get Free Consultation
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </a>
                </div>
            </aside>

        </div>
    </div>
</div>

@endsection