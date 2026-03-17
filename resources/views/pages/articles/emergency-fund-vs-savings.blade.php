@extends('layouts.finreview')
@section('title', 'Emergency Fund vs. High-Yield Savings 2026: Where Should Your $10K Go? – FinReview')
@section('description', 'We model four scenarios across liquid savings, T-bills, money market funds, and CDs to find the optimal split for your financial safety net.')

@section('content')

{{-- ── HERO ── --}}
<div class="bg-[#0f0f0f] relative overflow-hidden">
    <div class="relative h-[460px] overflow-hidden">
        <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?w=1400&q=85&auto=format&fit=crop"
             alt="Personal Finance Savings" class="w-full h-full object-cover opacity-55">
        <div class="absolute inset-0" style="background:linear-gradient(to bottom, rgba(15,15,15,0.3) 0%, rgba(15,15,15,0.65) 55%, #0f0f0f 100%)"></div>

        {{-- Breadcrumb --}}
        <div class="absolute top-8 left-0 right-0">
            <div class="max-w-screen-lg mx-auto px-6">
                <nav class="flex items-center gap-2 text-[12px] text-white/50">
                    <a href="{{ route('home') }}" class="hover:text-white transition-colors">Home</a>
                    <span>/</span>
                    <a href="{{ route('article.fed-rate') }}" class="hover:text-white transition-colors">Articles</a>
                    <span>/</span>
                    <span class="text-white/80">Emergency Fund vs. High-Yield Savings</span>
                </nav>
            </div>
        </div>

        <div class="absolute bottom-0 left-0 right-0 pb-12">
            <div class="max-w-screen-lg mx-auto px-6">
                <div class="flex items-center gap-3 mb-4">
                    <span class="bg-[#c9a96e] text-[#0f0f0f] text-[10px] font-black uppercase tracking-[0.12em] px-3 py-1.5 rounded-lg">Analysis</span>
                    <span class="bg-white/15 backdrop-blur-sm text-white/85 text-[11px] font-medium px-3 py-1.5 rounded-lg border border-white/20">Personal Finance</span>
                    <span class="bg-white/15 backdrop-blur-sm text-white/85 text-[11px] font-medium px-3 py-1.5 rounded-lg border border-white/20">Savings</span>
                </div>
                <h1 class="text-white font-bold leading-[1.2] max-w-[780px]" style="font-family:'Playfair Display',serif; font-size:clamp(28px,4vw,46px)">
                    Emergency Fund vs. High-Yield Savings in 2026: Where Should Your $10K Go?
                </h1>
                <div class="flex items-center gap-6 mt-5 text-[13px] text-white/50">
                    <span>Feb 20, 2026</span>
                    <span class="flex items-center gap-1.5">
                        <svg class="w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                        8 min read
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

                {{-- Key Takeaways --}}
                <div class="bg-white border-l-4 border-[#c9a96e] rounded-r-2xl p-6 mb-10 shadow-sm">
                    <h2 class="text-[13px] font-black uppercase tracking-[0.12em] text-[#c9a96e] mb-4">Key Takeaways</h2>
                    <ul class="space-y-2.5">
                        @foreach([
                            'Keep 1–2 months of expenses in pure liquid savings (no penalties)',
                            'Park 2–3 months in a top-rate HYSA earning 4.5–4.75% APY',
                            '3-month T-bills currently yield 5.2% — better than most HYSAs for non-urgent funds',
                            'CDs with 12-month terms lock in rates before the Fed cuts — ideal for months 4–6 of your buffer',
                            'Money market funds are liquid but yields lag HYSA by 15–30bps on average',
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
                    Most financial advice treats the emergency fund as a single bucket — three to six months of expenses, parked somewhere "safe." In 2026, that thinking is costing people real money.
                </p>
                <p class="text-[15.5px] text-[#3d3833] leading-[1.85] mb-10">
                    With short-term rates still historically elevated and a Fed cut looming, the right strategy isn't where to put your emergency fund — it's <em>how to structure it across multiple vehicles</em> to maximize yield without sacrificing accessibility when you need it most.
                </p>

                {{-- Section 1 --}}
                <h2 class="text-[26px] font-bold text-[#1a1a1a] mb-4 mt-12" style="font-family:'Playfair Display',serif">
                    The 4-Bucket Framework
                </h2>
                <p class="text-[15.5px] text-[#3d3833] leading-[1.85] mb-6">
                    We model a $10,000 emergency fund across four scenarios, optimizing for both yield and access time. The goal: every dollar earns as much as possible while staying reachable within your personal risk tolerance.
                </p>

                {{-- 4 buckets --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-10">
                    @foreach([
                        ['Bucket 1', '1–2 Months', 'HYSA (Instant)', 'bg-[#c9a96e]', 'text-[#0f0f0f]',
                         '$2,000–$3,500', '4.75% APY', 'Access in minutes. No lock-up. Your true emergency buffer.',
                         'Ally, Marcus, SoFi'],
                        ['Bucket 2', '2–3 Months', '3-Month T-Bills', 'bg-[#1a1a1a]', 'text-white',
                         '$3,000–$4,500', '5.20% yield', '91-day maturity. Slightly better rate, federal tax exempt at state level.',
                         'TreasuryDirect.gov'],
                        ['Bucket 3', '3–5 Months', '12-Month CD', 'bg-[#2d5a38]', 'text-white',
                         '$2,500–$3,500', '5.05% APY', 'Lock rate now before Fed cuts. Early withdrawal penalty ~90 days interest.',
                         'Marcus, Discover'],
                        ['Bucket 4', '5–6 Months', 'Money Market Fund', 'bg-[#1e3a5f]', 'text-white',
                         '$1,000–$2,000', '4.45% yield', 'Liquid like HYSA but slightly lower yield. Use for overflow only.',
                         'Fidelity SPAXX, Vanguard VMFXX'],
                    ] as $b)
                    <div class="bg-white rounded-2xl border border-[#e8e0d8] overflow-hidden shadow-sm">
                        <div class="px-5 py-3.5 {{ $b[3] }} flex items-center justify-between">
                            <span class="font-bold text-[13px] {{ $b[4] }}">{{ $b[0] }} — {{ $b[1] }}</span>
                            <span class="text-[10px] font-black uppercase tracking-wider {{ $b[4] }} opacity-75">{{ $b[2] }}</span>
                        </div>
                        <div class="p-5">
                            <div class="flex items-baseline gap-2 mb-1">
                                <span class="text-[22px] font-extrabold text-[#1a1a1a]" style="font-family:'Playfair Display',serif">{{ $b[6] }}</span>
                                <span class="text-[12px] text-[#6b6560]">{{ $b[5] }}</span>
                            </div>
                            <p class="text-[13px] text-[#6b6560] leading-relaxed mb-3">{{ $b[7] }}</p>
                            <p class="text-[11.5px] font-semibold text-[#c9a96e]">{{ $b[8] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>

                {{-- Section 2 --}}
                <h2 class="text-[26px] font-bold text-[#1a1a1a] mb-4 mt-12" style="font-family:'Playfair Display',serif">
                    Comparing the Options: Real Numbers on $10,000
                </h2>

                <div class="bg-white rounded-2xl border border-[#e8e0d8] overflow-hidden mb-8 shadow-sm">
                    <div class="bg-[#1a1a1a] px-6 py-3">
                        <p class="text-[11px] font-bold uppercase tracking-[0.12em] text-[#c9a96e]">12-Month Interest Earned on $10,000</p>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-[13.5px]">
                            <thead class="bg-[#f9f7f4]">
                                <tr>
                                    <th class="text-left px-5 py-3 font-bold text-[#1a1a1a] text-[12px] uppercase tracking-wider">Vehicle</th>
                                    <th class="text-right px-5 py-3 font-bold text-[#1a1a1a] text-[12px] uppercase tracking-wider">Rate</th>
                                    <th class="text-right px-5 py-3 font-bold text-[#1a1a1a] text-[12px] uppercase tracking-wider">12-Mo. Earned</th>
                                    <th class="text-right px-5 py-3 font-bold text-[#1a1a1a] text-[12px] uppercase tracking-wider">Liquidity</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-[#f0e8df]">
                                @foreach([
                                    ['3-Month T-Bills (rolling)', '5.20%', '$520', 'High (91-day cycle)', 'green'],
                                    ['12-Month CD', '5.05%', '$505', 'Low (penalty applies)', 'amber'],
                                    ['HYSA — Ally', '4.75%', '$475', 'Instant', 'green'],
                                    ['Money Market Fund', '4.45%', '$445', 'Instant', 'green'],
                                    ['Traditional Savings', '0.45%', '$45', 'Instant', 'red'],
                                    ['Checking Account', '0.07%', '$7', 'Instant', 'red'],
                                ] as $row)
                                <tr class="hover:bg-[#fdf9f6] transition-colors">
                                    <td class="px-5 py-3.5 font-medium text-[#1a1a1a]">{{ $row[0] }}</td>
                                    <td class="px-5 py-3.5 text-right font-bold text-[#c9a96e]">{{ $row[1] }}</td>
                                    <td class="px-5 py-3.5 text-right font-bold text-[#1a1a1a]">{{ $row[2] }}</td>
                                    <td class="px-5 py-3.5 text-right text-[12.5px] {{ $row[4]==='green'?'text-green-600':($row[4]==='red'?'text-red-500':'text-amber-600') }}">{{ $row[3] }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                {{-- Bottom line --}}
                <div class="bg-[#1a1a1a] rounded-2xl p-7 mb-10">
                    <h3 class="text-[11px] font-bold text-[#c9a96e] mb-3 uppercase tracking-wider">Our Recommended Split for $10,000</h3>
                    <p class="text-white/80 text-[15px] leading-[1.8] mb-4">
                        <strong class="text-white">$2,500 in HYSA</strong> (instant access buffer) + <strong class="text-white">$4,500 in rolling T-bills</strong> (higher yield, 91-day cycle) + <strong class="text-white">$3,000 in a 12-month CD</strong> (lock rate before Fed cuts) = estimated <strong class="text-[#c9a96e]">$499/year</strong> in interest — vs. $475 in pure HYSA or $45 in a traditional savings account.
                    </p>
                    <p class="text-white/50 text-[13px]">Adjust the T-bill / HYSA split based on your job security and how quickly you'd need access in an emergency.</p>
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
                        <a href="{{ route('article.home-insurance') }}" class="flex gap-3 group">
                            <div class="w-16 h-16 rounded-xl overflow-hidden shrink-0">
                                <img src="https://images.unsplash.com/photo-1582407947304-fd86f028f716?w=200&h=200&q=80&auto=format&fit=crop"
                                     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                            </div>
                            <div class="flex-1 min-w-0">
                                <span class="text-[10px] font-bold uppercase tracking-wider text-[#c9a96e]">Insurance</span>
                                <p class="text-[13px] font-semibold text-[#1a1a1a] leading-snug mt-0.5 group-hover:text-[#c9a96e] transition-colors line-clamp-2">Why Home Insurance Premiums Rose 18% in 2025</p>
                                <span class="text-[11px] text-[#6b6560]">Feb 27, 2026</span>
                            </div>
                        </a>
                    </div>

                    {{-- Rate comparison widget --}}
                    <div class="mt-6 pt-6 border-t border-[#f0e8df]">
                        <h3 class="text-[11px] font-bold uppercase tracking-[0.13em] text-[#c9a96e] mb-4">Top HYSA Rates Today</h3>
                        @foreach([
                            ['Ally Bank', '4.75%'],
                            ['Marcus', '4.70%'],
                            ['SoFi', '4.60%'],
                            ['Discover', '4.65%'],
                        ] as $r)
                        <div class="flex items-center justify-between py-2.5 border-b border-[#f5f0eb] last:border-0">
                            <span class="text-[12.5px] text-[#6b6560]">{{ $r[0] }}</span>
                            <span class="text-[13px] font-bold text-[#c9a96e]">{{ $r[1] }}</span>
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