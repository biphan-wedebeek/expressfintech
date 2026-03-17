@extends('layouts.finreview')
@section('title', 'Express Fintech – Expert Financial Reviews You Can Trust')

@section('content')

<section class="relative overflow-hidden flex flex-col items-center justify-center text-center px-6 pt-16 pb-24" style="background:linear-gradient(160deg,#0f1f35 0%,#1a3050 55%,#0f1f35 100%)">
    <div class="absolute inset-0 pointer-events-none opacity-[.04]" style="background-image:linear-gradient(#fff 1px,transparent 1px),linear-gradient(90deg,#fff 1px,transparent 1px);background-size:48px 48px"></div>
    <div class="absolute pointer-events-none" style="top:-120px;left:50%;transform:translateX(-50%);width:600px;height:600px;background:radial-gradient(circle,rgba(79,70,229,.18) 0%,transparent 70%);"></div>
    <div class="relative inline-flex items-center gap-2 text-[11px] font-semibold uppercase tracking-[.14em] px-4 py-1.5 rounded-full mb-8" style="background:rgba(79,70,229,.18);border:1px solid rgba(79,70,229,.35);color:#a5b4fc">
        ✦ Evidence-Based Financial Analysis
    </div>

    <h1 class="relative hero-title max-w-[820px] mx-auto mb-6">
        Expert Financial Reviews<br>
        <span style="color:#818cf8">You Can Trust</span>
    </h1>

    <p class="relative max-w-[540px] leading-[1.85] mb-12 text-[16px] font-light" style="color:rgba(255,255,255,.55)">
        In-depth analysis and honest comparisons of financial products, insurance policies,
        banking services, and credit cards — built on data, not sponsored opinion.
    </p>

    <div class="relative flex items-center gap-4 flex-wrap justify-center mb-14">
        <a href="{{ route('article.fed-rate') }}" class="inline-flex items-center gap-2.5 font-bold text-[14.5px] px-8 py-[14px] rounded-xl transition-all hover:-translate-y-0.5"
            style="background:#4f46e5;color:#fff;box-shadow:0 8px 24px rgba(79,70,229,.35)"
            onmouseover="this.style.background='#4338ca';this.style.boxShadow='0 12px 32px rgba(79,70,229,.45)'"
            onmouseout="this.style.background='#4f46e5';this.style.boxShadow='0 8px 24px rgba(79,70,229,.35)'">
            Explore Reviews
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7" />
            </svg>
        </a>
        <a href="{{ route('contact') }}" class="inline-flex items-center gap-2.5 font-medium text-[14.5px] px-8 py-[14px] rounded-xl transition-all"
            style="border:1.5px solid rgba(255,255,255,.2);color:rgba(255,255,255,.8)"
            onmouseover="this.style.borderColor='rgba(129,140,248,.6)';this.style.color='#a5b4fc';this.style.background='rgba(79,70,229,.12)'"
            onmouseout="this.style.borderColor='rgba(255,255,255,.2)';this.style.color='rgba(255,255,255,.8)';this.style.background='transparent'">
            Get Free Consultation
        </a>
    </div>

    <div class="relative flex items-stretch w-full max-w-[720px] rounded-2xl overflow-hidden"
        style="border:1px solid rgba(255,255,255,.08);background:rgba(255,255,255,.04);backdrop-filter:blur(12px)">
        @foreach([['1,200+','Reviews Published'],['100K+','Monthly Readers'],['98%','Accuracy Rate'],['210+','Products Compared']] as $i=>$s)
        <div class="flex-1 text-center py-6 px-4 {{ $i<3?'border-r':''}}" style="{{ $i<3?'border-color:rgba(255,255,255,.08)':'' }}">
            <div class="font-extrabold leading-none mb-2 familyfont text-[34px]" style="color:#818cf8">{{ $s[0] }}</div>
            <div class="text-[10.5px] tracking-[.12em] uppercase" style="color:rgba(255,255,255,.35)">{{ $s[1] }}</div>
        </div>
        @endforeach
    </div>
</section>

<section class="bg-white py-16 px-6">
    <div class="max-w-screen-xl mx-auto">
        <div class="flex items-end justify-between mb-12">
            <div>
                <div class="section-label">Editor's Pick</div>
                <h2 class="familyfont text-[36px] font-bold text-[#0f1f35] leading-tight">Featured Reviews</h2>
                <p class="text-[#6b7280] text-[15px] mt-3 max-w-[480px] leading-relaxed">
                    Hand-picked by our editorial team for accuracy, depth, and real-world relevance.
                </p>
            </div>
            <a href="{{ route('article.fed-rate') }}" class="hidden lg:inline-flex items-center gap-2 text-[13.5px] font-semibold px-5 py-2.5 rounded-lg transition-all shrink-0"
                style="color:#4f46e5;border:1.5px solid rgba(79,70,229,.3);background:#eef2ff"
                onmouseover="this.style.background='#e0e7ff';this.style.borderColor='#4f46e5'"
                onmouseout="this.style.background='#eef2ff';this.style.borderColor='rgba(79,70,229,.3)'">
                View All Reviews
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7" />
                </svg>
            </a>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-[1.15fr_1fr] gap-6 items-stretch">
            <a href="{{ route('article.fed-rate') }}" class="group bg-white rounded-2xl overflow-hidden flex flex-col transition-all duration-300"
                style="border:1px solid #e5e7eb;box-shadow:0 2px 8px rgba(15,31,53,.06)"
                onmouseover="this.style.boxShadow='0 20px 48px rgba(15,31,53,.12)';this.style.transform='translateY(-4px)';this.style.borderColor='rgba(79,70,229,.2)'"
                onmouseout="this.style.boxShadow='0 2px 8px rgba(15,31,53,.06)';this.style.transform='';this.style.borderColor='#e5e7eb'">
                <div class="relative overflow-hidden shrink-0" style="height:240px">
                    <img src="https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?w=800&q=80&auto=format&fit=crop"
                        alt="Federal Reserve Rate Analysis" class="w-full h-full object-cover">
                    <div class="absolute inset-0" style="background:linear-gradient(to top,rgba(15,31,53,.75) 0%,transparent 50%)"></div>
                    <div class="absolute top-4 left-4 flex items-center gap-2">
                        <span class="bg-surface p-1 rounded backdrop-blur-md text-gray-700">In-Depth Analysis</span>
                        <span class="bg-surface p-1 rounded backdrop-blur-md text-gray-700">Investing</span>
                    </div>
                </div>
                <div class="p-6 flex flex-col flex-1" style="background:#f8f9fb">
                    <h3 class="familyfont text-[22px] font-bold text-[#0f1f35] leading-[1.3] mb-4 group-hover:text-[#4f46e5] transition-colors">
                        How the Fed's {{ now()->year }} Rate Decision Will Reshape Your Savings, Mortgage, and Investment Strategy
                    </h3>
                    <p class="text-[#6b7280] text-[14.5px] leading-[1.8] mb-6 flex-1">
                        With a 78% market probability of a Q2 rate cut, our analysts break down exactly how each 25bps move affects high-yield savings, 30-year mortgages, bond portfolios, and equity valuations.
                    </p>
                    <div class="flex items-center justify-between pt-5" style="border-top:1px solid #e5e7eb">
                        <span class="text-[12px] text-[#9ca3af]">{{ seoUpdateDate('article-fed-rate') }}</span>
                        <span class="inline-flex items-center gap-1.5 text-[13px] font-bold text-[#4f46e5] group-hover:gap-3 transition-all">
                            Read Analysis
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7" />
                            </svg>
                        </span>
                    </div>
                </div>
            </a>

            <div class="flex flex-col gap-6">
                @php $year = now()->year; @endphp
                @foreach([
                [
                route('article.emergency-fund'),
                'https://images.unsplash.com/photo-1554224155-6726b3ff858f?w=300&h=500&q=80&auto=format&fit=crop&crop=center',
                'Personal Finance',
                "Emergency Fund vs. High-Yield Savings in {$year}: Where Should Your $10K Go?",
                'With rates still above 4.5% APY, we model four scenarios — liquid savings, T-bills, money market funds, and CDs — to find the optimal split.',
                seoUpdateDate('article-emergency-fund'),
                ],
                [
                route('article.home-insurance'),
                'https://images.unsplash.com/photo-1582407947304-fd86f028f716?w=300&h=500&q=80&auto=format&fit=crop&crop=center',
                'Insurance',
                'Why Home Insurance Premiums Rose 18% in 2025 — And What to Do Before Renewal',
                'Climate risk repricing is permanent. We analyzed 14 carriers across 8 high-risk states and found three strategies that saved policyholders $340/year on average.',
                seoUpdateDate('article-home-insurance'),
                ],
                ] as [$url,$img,$cat,$title,$desc,$date])
                <a href="{{ $url }}"
                    class="group rounded-2xl overflow-hidden flex flex-1 transition-all duration-300"
                    style="background:#f8f9fb;border:1px solid #e5e7eb;box-shadow:0 2px 8px rgba(15,31,53,.04)"
                    onmouseover="this.style.boxShadow='0 12px 32px rgba(15,31,53,.10)';this.style.transform='translateY(-2px)';this.style.borderColor='rgba(79,70,229,.2)'"
                    onmouseout="this.style.boxShadow='0 2px 8px rgba(15,31,53,.04)';this.style.transform='';this.style.borderColor='#e5e7eb'">
                    <div class="shrink-0 relative overflow-hidden" style="width:120px;min-height:100%">
                        <img src="{{ $img }}" alt="{{ $title }}" class="absolute inset-0 w-full h-full object-cover">
                        <div class="absolute top-3 left-2 right-2">
                            <span class="bg-surface p-1 rounded backdrop-blur-md text-gray-700">Analysis</span>
                        </div>
                    </div>
                    <div class="p-5 flex flex-col flex-1 min-w-0">
                        <span class="text-[11px] font-semibold text-[#6b7280] px-2.5 py-0.5 rounded-full inline-block mb-2.5 w-fit"
                            style="background:#f4f5f7;border:1px solid #e5e7eb">{{ $cat }}</span>
                        <h3 class="familyfont text-[15px] font-bold text-[#0f1f35] leading-snug mb-2 group-hover:text-[#4f46e5] transition-colors line-clamp-2">{{ $title }}</h3>
                        <p class="text-[12.5px] text-[#6b7280] leading-relaxed flex-1 line-clamp-3">{{ $desc }}</p>
                        <div class="flex items-center justify-between mt-3 pt-3" style="border-top:1px solid #e5e7eb">
                            <span class="text-[11.5px] text-[#9ca3af]">{{ $date }}</span>
                            <span class="text-[12px] font-bold text-[#4f46e5] flex items-center gap-1 group-hover:gap-2 transition-all">
                                Read <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7" />
                                </svg>
                            </span>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section style="background:#f4f5f7;padding:80px 24px;border-top:1px solid #e5e7eb">
    <div class="max-w-screen-xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div>
                <div class="section-label">Our Promise</div>
                <h2 class="familyfont text-[38px] font-bold text-[#0f1f35] leading-[1.15] mb-6">
                    Why Readers Trust<br>Our Reviews
                </h2>
                <p class="text-[#6b7280] text-[15.5px] leading-relaxed mb-8 max-w-[400px]">
                    Since our founding, we have been committed to transparent, accurate, and actionable financial reviews
                    that help consumers make confident decisions.
                </p>
                <a href="#" class="inline-flex items-center gap-2 font-semibold text-[14px] text-[#4f46e5] hover:gap-3 transition-all">
                    Learn about our methodology
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7" />
                    </svg>
                </a>
            </div>

            <div class="grid grid-cols-2 gap-4">
                @foreach([
                ['
                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                <polyline points="14 2 14 8 20 8" />
                <line x1="16" y1="13" x2="8" y2="13" />
                <line x1="16" y1="17" x2="8" y2="17" />',
                'Thoroughly Researched',
                'Every review involves hours of research, real product testing, and verification before publication.'],
                ['
                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                <circle cx="9" cy="7" r="4" />
                <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                <path d="M16 3.13a4 4 0 0 1 0 7.75" />',
                'Expert Team',
                'Certified financial analysts and industry professionals with decades of combined experience.'],
                ['
                <polyline points="9 11 12 14 22 4" />
                <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11" />',
                'Unbiased Analysis',
                'Strict editorial independence. Our reviews are never influenced by advertisers or product providers.'],
                ['
                <circle cx="12" cy="8" r="6" />
                <path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11" />',
                'Award-Winning',
                'Recognized for excellence in financial journalism by leading industry organizations.'],
                ] as [$icon,$title,$desc])
                <div class="bg-white rounded-2xl p-5 transition-all group cursor-default"
                    style="border:1px solid #e5e7eb;box-shadow:0 2px 8px rgba(15,31,53,.04)"
                    onmouseover="this.style.borderColor='rgba(79,70,229,.25)';this.style.boxShadow='0 8px 24px rgba(79,70,229,.10)'"
                    onmouseout="this.style.borderColor='#e5e7eb';this.style.boxShadow='0 2px 8px rgba(15,31,53,.04)'">
                    <div class="w-10 h-10 rounded-xl flex items-center justify-center mb-4" style="background:#eef2ff">
                        <svg class="w-5 h-5" style="color:#4f46e5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">{!! $icon !!}</svg>
                    </div>
                    <h3 class="text-[14.5px] font-bold text-[#0f1f35] mb-2">{{ $title }}</h3>
                    <p class="text-[12.5px] text-[#6b7280] leading-relaxed">{{ $desc }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section class="bg-white py-16 px-6" style="border-top:1px solid #e5e7eb">
    <div class="max-w-screen-xl mx-auto">
        <div class="mb-12">
            <div class="section-label">Updated Weekly</div>
            <h2 class="familyfont text-[34px] font-bold text-[#0f1f35] leading-tight mb-3">Sector Analysis & Key Indicators</h2>
            <p class="text-[#6b7280] text-[15px] max-w-[500px] leading-relaxed">
                Real-time sector insights compiled by our research team with expert commentary and forward-looking analysis.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
            @php $year = now()->year; @endphp
            @php
            $sectors = [
            ['icon'=>'
            <line x1="18" y1="20" x2="18" y2="10" />
            <line x1="12" y1="20" x2="12" y2="4" />
            <line x1="6" y1="20" x2="6" y2="14" />',
            'route' => route('banking.structure-retail_commercial'), 
            'cat'=>'Banking Structure',
            'badge'=>'Foundational','bc'=>'badge-amber',
            'title'=>'Retail vs Commercial Banking',
            'desc'=>'Two distinct business models sharing the same banking licence — retail serves millions of individuals with standardised products, while commercial serves thousands of businesses with tailored financial solutions.',
            'metrics'=>[['Retail customer base','100+','◬','red'],['Avg commercial loan','$2.4M','▽','green'],['NIM gap (retail vs corp)','+140bps','▽','green']]],
            ['icon'=>'
            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
            <polyline points="22 4 12 14.01 9 11.01" />',
            'route' => route('insurance.fundamentals.principles'),
            'cat'=>'Insurance Fundamentals',
            'badge'=>'Core Principles','bc'=>'badge-red',
            'title'=>'Seven Principles of Insurance',
            'desc'=>'The legal and contractual foundations governing every insurance contract — from indemnity and insurable interest to subrogation and loss minimisation.',
            'metrics'=>[['Global premium volume','$7.5T','▽','green'],['Combined ratio ex-CAT','94.2%','▽','green'],['Subrogation recoveries','$8.2B','▽','green']]],
            ['icon'=>'
            <circle cx="12" cy="12" r="10" />
            <polyline points="12 6 12 12 16 14" />',
            'route' => route('mortgages.fundamentals.fixed_vs_variable'),
            'cat'=>'Mortgage Fundamentals',
            'badge'=>'Rate Structures','bc'=>'badge-blue',
            'title'=>'Fixed vs Variable Rate Mortgages',
            'desc'=>'How fixed and adjustable mortgage rate structures are priced, how they compare across time horizons, and how to choose between them in a high-rate environment.',
            'metrics'=>[['Avg 30-yr fixed {$year}','6.8%','◬','red'],['Avg 5/1 ARM {$year}','6.1%','▽','green'],['Initial rate spread','0.7%','↣','green']]],
            ['icon'=>'
            <polyline points="22 7 13.5 15.5 8.5 10.5 2 17" />
            <polyline points="16 7 22 7 22 13" />',
            'route' => route('finance.planning.emergency_fund'),
            'cat'=>'Chapter 02 · Planning',
            'badge'=>'Foundation First','bc'=>'badge-green',
            'title'=>'Emergency Fund — Build Your Financial Firewall',
            'desc'=>'Before investing a single dollar, you need a financial firewall. 3–6 months of essential expenses held in a liquid account — the one rule with no exceptions.',
            'metrics'=>[['Starter fund target','$1,000','▽','green'],['Full fund coverage','3–6×','▽','green'],['Freelancer target','6–12×','↣','gray']]],
            ];
            @endphp

            @foreach($sectors as $s)
            <div class="rounded-2xl p-6 transition-all duration-300 group"
                style="background:#f8f9fb;border:1px solid #e5e7eb;box-shadow:0 2px 8px rgba(15,31,53,.04)"
                onmouseover="this.style.borderColor='rgba(79,70,229,.25)';this.style.boxShadow='0 12px 32px rgba(15,31,53,.10)'"
                onmouseout="this.style.borderColor='#e5e7eb';this.style.boxShadow='0 2px 8px rgba(15,31,53,.04)'">
                <div class="flex items-start justify-between mb-4">
                    <div class="flex items-center gap-2.5">
                        <div class="w-8 h-8 rounded-lg flex items-center justify-center shrink-0" style="background:#eef2ff">
                            <svg class="w-4 h-4" style="color:#4f46e5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">{!! $s['icon'] !!}</svg>
                        </div>
                        <span class="text-[10.5px] font-bold uppercase tracking-[.12em] text-[#6b7280]">{{ $s['cat'] }}</span>
                    </div>
                    <span class="badge {{ $s['bc'] }} shrink-0">{{ $s['badge'] }}</span>
                </div>
                <h3 class="familyfont text-[17px] font-bold text-[#0f1f35] mb-2.5 leading-snug group-hover:text-[#4f46e5] transition-colors">{{ $s['title'] }}</h3>
                <p class="text-[13px] text-[#6b7280] leading-relaxed mb-5">{{ $s['desc'] }}</p>
                <div class="grid grid-cols-3 gap-2 rounded-xl p-4 mb-5" style="background:#fff;border:1px solid #e5e7eb">
                    @foreach($s['metrics'] as $idx=>$m)
                    <div class="text-center {{ $idx>0?'border-l border-[#e5e7eb]':'' }}">
                        <div class="text-[10px] text-[#9ca3af] mb-1.5 leading-tight">{{ $m[0] }}</div>
                        <div class="text-[14px] font-bold text-[#0f1f35]">
                            {{ $m[1] }}
                            <span class="{{ $m[3]==='green'?'text-emerald-500':($m[3]==='red'?'text-red-400':'text-[#9ca3af]') }} text-[11px]">{{ $m[2] }}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
                <a href="{{ $s['route'] }}" class="inline-flex items-center gap-1.5 text-[13px] font-semibold text-[#4f46e5] hover:gap-3 transition-all">
                    Read full analysis
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7" />
                    </svg>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section style="background:#f4f5f7;padding:90px 24px;border-top:1px solid #e5e7eb;position:relative;overflow:hidden">
    <div class="absolute inset-0 pointer-events-none" style="background:radial-gradient(ellipse 60% 80% at 50% 50%,rgba(79,70,229,.06) 0%,transparent 70%)"></div>
    <div class="max-w-screen-xl mx-auto text-center relative">
        <div class="inline-flex items-center gap-2 text-[11px] font-bold uppercase tracking-[.16em] px-4 py-1.5 rounded-full mb-6"
            style="background:#eef2ff;border:1px solid rgba(79,70,229,.2);color:#4f46e5">
            Get Expert Advice
        </div>

        <h2 class="familyfont text-[36px] font-bold text-[#0f1f35] mb-5">
            Not Sure Where to Start?
        </h2>
        <p class="text-[#6b7280] text-[16px] max-w-[500px] mx-auto leading-relaxed mb-10">
            Our financial experts can help you compare products and find the best option for your specific situation — completely free.
        </p>

        <div class="flex items-center gap-4 justify-center flex-wrap">
            <a href="{{ route('contact') }}"
                class="inline-flex items-center gap-2 font-bold text-[15px] px-8 py-[14px] rounded-xl transition-all hover:-translate-y-0.5"
                style="background:#4f46e5;color:#fff;box-shadow:0 8px 24px rgba(79,70,229,.3)"
                onmouseover="this.style.background='#4338ca';this.style.boxShadow='0 12px 32px rgba(79,70,229,.4)'"
                onmouseout="this.style.background='#4f46e5';this.style.boxShadow='0 8px 24px rgba(79,70,229,.3)'">
                Get Free Consultation
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7" />
                </svg>
            </a>
            <a href="{{ route('article.fed-rate') }}"
                class="inline-flex items-center gap-2 font-medium text-[15px] px-8 py-[14px] rounded-xl transition-all"
                style="color:#374151;border:1.5px solid #d1d5db"
                onmouseover="this.style.borderColor='#4f46e5';this.style.color='#4f46e5';this.style.background='#eef2ff'"
                onmouseout="this.style.borderColor='#d1d5db';this.style.color='#374151';this.style.background='transparent'">
                Browse All Reviews
            </a>
        </div>
    </div>
</section>

@endsection