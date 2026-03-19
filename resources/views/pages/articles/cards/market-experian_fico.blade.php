@extends('layouts.credit-cards')

@section('title', 'Get Your Free FICO® Score & Credit Report — Experian')
@section('breadcrumb_section', 'Market & Regulation')
@section('breadcrumb_current', 'Free FICO® Score')
@section('hero_section_label', 'Sponsored · Experian')
@section('hero_title', 'Get Your Free FICO® Score Instantly')
@section('hero_subtitle', '100% free. No credit card required. Real-time monitoring and alerts included — start improving your credit today.')
@section('hero_date', now()->format('F Y'))
@section('hero_read_time', '3 min read')
@section('article_badge', 'Sponsored · Experian')
@section('last_updated', now()->format('F Y'))
@section('nav_experian', 'active')

@section('hero_stats')
<div class="hero-stat rounded-xl px-5 py-4 text-center min-w-[130px]">
    <p class="text-[26px] font-bold text-white fonttitle">100%</p>
    <p class="text-[11.5px] text-purple-300/70 leading-tight mt-1">Free forever</p>
</div>
<div class="hero-stat rounded-xl px-5 py-4 text-center min-w-[130px]">
    <p class="text-[26px] font-bold text-white fonttitle">FICO® 8</p>
    <p class="text-[11.5px] text-purple-300/70 leading-tight mt-1">Used by 90% of lenders</p>
</div>
@endsection

@section('sidebar_stats')
<div class="space-y-2.5">
    @foreach([
    ['Poor', '300–579', '#f87171'],
    ['Fair', '580–669', '#fb923c'],
    ['Good', '670–739', '#eab308'],
    ['Very Good', '740–799', '#34d399'],
    ['Exceptional', '800–850', '#7c3aed'],
    ] as [$l, $v, $hex])
    <div class="flex items-center justify-between px-3 py-2.5 rounded-xl bg-[#f7f5ff] border border-[#e8e2f8]">
        <p class="text-[12px] font-medium text-[#374151]">{{ $l }}</p>
        <p class="text-[12px] font-bold" style="color:{{ $hex }}">{{ $v }}</p>
    </div>
    @endforeach
</div>
@endsection

@section('toc')
<a href="#score" class="toc-link text-[13px] text-[#6b7280] hover:text-violet-700 block">FICO® Score Breakdown</a>
<a href="#goals" class="toc-link text-[13px] text-[#6b7280] hover:text-violet-700 block">5 Credit Goals</a>
<a href="#boost" class="toc-link text-[13px] text-[#6b7280] hover:text-violet-700 block">Experian Boost™</a>
<a href="#tools" class="toc-link text-[13px] text-[#6b7280] hover:text-violet-700 block">Free Tools</a>
<a href="#disclaimer" class="toc-link text-[13px] text-[#6b7280] hover:text-violet-700 block">Disclaimers</a>
@endsection

@section('right_panel')

<div class="bg-[#1e0a3c] rounded-2xl p-5 text-white">
    <p class="text-[10.5px] font-bold uppercase tracking-[.14em] text-purple-400 mb-4">Live Score Preview</p>
    <div class="bg-[#2d1060] rounded-xl p-4 mb-4 text-center">
        <div class="text-[54px] font-black fonttitle text-white leading-none mb-1">702</div>
        <div class="text-[11px] text-purple-300/70 mb-3">FICO® Score 8 — Good</div>
        <div class="h-2 rounded-full bg-white/10 overflow-hidden">
            <div class="h-full rounded-full" style="width:67%;background:linear-gradient(90deg,#7c3aed,#a78bfa)"></div>
        </div>
        <div class="flex justify-between text-[10px] text-white/30 mt-1.5">
            <span>300</span><span>850</span>
        </div>
    </div>
    <div class="grid grid-cols-3 gap-2 mb-4">
        @foreach([['18%','Utilization','#34d399'],['5','Accounts','#a78bfa'],['2yr+','Avg age','#60a5fa']] as [$v,$l,$hex])
        <div class="bg-white/5 rounded-xl p-2.5 text-center">
            <div class="text-[15px] font-bold" style="color:{{ $hex }}">{{ $v }}</div>
            <div class="text-[9.5px] text-white/40 mt-0.5 leading-tight">{{ $l }}</div>
        </div>
        @endforeach
    </div>
    <div class="bg-emerald-500/15 border border-emerald-500/25 rounded-xl px-4 py-2.5 text-center mb-4">
        <p class="text-[12px] text-emerald-400 font-semibold">🚀 Score updated immediately</p>
    </div>
    <a href="https://www.experian.com/?pc=sem_exp_admedia&cc=sem_exp_admedia_ad_&ref=20251218012670117324&utm_source=admedia&utm_campaign=Search_29_120800_Experian_Brand"
        class="block w-full text-center bg-[#b721ff] hover:bg-[#a010f0] text-white text-[14px] font-bold py-3.5 rounded-xl transition-all">
        Let's get started →
    </a>
    <p class="text-[10.5px] text-white/25 text-center mt-2">No credit card required</p>
</div>

<div class="bg-white rounded-2xl border border-[#e8e2f8] p-5" style="box-shadow:0 2px 14px rgba(30,10,60,.07)">
    <p class="text-[10.5px] font-bold uppercase tracking-[.14em] text-violet-700 mb-3">What's Included — Free</p>
    <div class="space-y-2.5">
        @foreach([
        'FICO® Score 8, updated in real time',
        'Full Experian credit report',
        'Credit monitoring & instant alerts',
        'Dark web surveillance scan',
        'Experian Boost™',
        ] as $item)
        <div class="flex items-center gap-2.5">
            <div class="w-4 h-4 rounded-full bg-emerald-100 flex items-center justify-center shrink-0">
                <svg class="w-2.5 h-2.5 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                </svg>
            </div>
            <p class="text-[12.5px] text-[#374151]">{{ $item }}</p>
        </div>
        @endforeach
    </div>
</div>

@endsection

@section('content')

<p class="text-[17px] text-[#1e0a3c] font-medium leading-relaxed mb-8 pb-6 border-b border-[#f5f0ff]">
    Your FICO® Score determines whether you get approved for loans — and at what interest rate. Experian gives you free access to your score, your full credit report, and real-time monitoring. No credit card. No trial. 100% free, right now.
</p>

<h2 id="score">What Makes Up Your FICO® Score?</h2>
<p>Five factors determine your score. Understanding each one is the first step to improving it.</p>

<div class="my-6 overflow-hidden rounded-2xl border border-[#e8e2f8]">
    <table class="w-full border-collapse text-[13.5px]">
        <thead>
            <tr style="background:linear-gradient(135deg,#1e0a3c,#2d1060)">
                <th class="text-left px-5 py-3.5 text-[11px] font-bold uppercase tracking-[.13em] text-purple-300 w-[36%]">Factor</th>
                <th class="text-center px-4 py-3.5 text-[11px] font-bold uppercase tracking-[.13em] text-purple-200/80 w-[14%]">Weight</th>
                <th class="text-left px-5 py-3.5 text-[11px] font-bold uppercase tracking-[.13em] text-purple-200/80">Key Action</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-[#f5f0ff]">
            @foreach([
            ['Payment History', '35%', 'Pay every bill on time — one missed payment can hurt significantly.'],
            ['Amounts Owed', '30%', 'Keep credit utilization below 30% of your available limit.'],
            ['Credit History', '15%', 'Don\'t close old accounts — the longer the history, the better.'],
            ['New Credit', '10%', 'Space out applications; hard inquiries temporarily lower your score.'],
            ['Credit Mix', '10%', 'A variety of account types signals responsible credit management.'],
            ] as [$factor, $weight, $action])
            <tr class="hover:bg-[#fdfbff] transition-colors">
                <td class="px-5 py-3 font-semibold text-[#1e0a3c] bg-[#fdfbff]">{{ $factor }}</td>
                <td class="px-4 py-3 text-center"><span class="badge-violet">{{ $weight }}</span></td>
                <td class="px-5 py-3 text-[#6b7280]">{{ $action }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<h2 id="goals">Reach Your Credit & Money Goals</h2>
<p>Sign up once and unlock five financial tools — all free, all in one dashboard.</p>

<div class="my-6 space-y-3">
    @foreach([
    ['01','Get a free credit report & FICO® Score', 'Most Popular', 'See your full Experian credit report and FICO® Score 8 instantly. Raise your score using eligible bills: utilities, streaming services, and rent payments.', 'from-violet-600 to-purple-700'],
    ['02','See No Ding Decline™ credit cards', null, 'Browse personalised card offers matched to your profile with no score impact. See approval odds before you apply — so you only apply for cards you\'re likely to get.', 'from-indigo-600 to-violet-700'],
    ['03','Save over $600 on your bills', null, 'Experian BillFixer™ negotiates your monthly bills on your behalf — internet, TV, phone — with average savings of $600+ per year.', 'from-purple-700 to-indigo-800'],
    ['04','Save on car insurance', null, 'Compare auto insurance quotes from top providers in under 2 minutes. Most users find $500+ in annual savings by switching.', 'from-violet-700 to-purple-900'],
    ['05','Build credit with digital checking', null, 'The Experian Smart Money™ Digital Checking Account builds credit with no monthly fees. Earn a $50 bonus with qualifying direct deposit.', 'from-indigo-700 to-violet-900'],
    ] as [$n, $title, $badge, $desc, $grad])
    <div class="flex gap-0 rounded-2xl overflow-hidden border border-[#e8e2f8]" style="box-shadow:0 1px 6px rgba(30,10,60,.05)">
        {{-- Gradient number strip --}}
        <div class="w-11 shrink-0 flex items-center justify-center bg-gradient-to-b {{ $grad }}">
            <span class="text-[10px] font-black text-white/50 tracking-[.18em]"
                style="writing-mode:vertical-rl;transform:rotate(180deg)">{{ $n }}</span>
        </div>
        {{-- Text only, no link --}}
        <div class="flex-1 px-5 py-4 bg-white">
            <div class="flex items-center gap-2 mb-1.5">
                <p class="text-[14px] font-semibold text-[#1e0a3c] leading-snug">{{ $title }}</p>
                @if($badge)
                <span class="badge-violet shrink-0">{{ $badge }}</span>
                @endif
            </div>
            <p class="text-[13px] text-[#6b7280] leading-relaxed m-0">{{ $desc }}</p>
        </div>
    </div>
    @endforeach
</div>

<h2 id="boost">Experian Boost™ — Raise Your Score in Minutes</h2>

<div class="my-6 p-6 rounded-2xl border-l-4 border-violet-500" style="background:linear-gradient(135deg,#f5f3ff,#ede9fe)">
    <p class="text-[13.5px] font-semibold text-[#4c1d95] mb-2">Add bills that normally don't count toward your credit score</p>
    <p class="text-[13.5px] text-[#5b21b6] leading-relaxed mb-4">Connect your bank account and Experian automatically finds eligible payments — cell phone, utilities, Netflix, Spotify, and eligible rent. Your score updates <strong>immediately</strong> after connecting.</p>
    <div class="flex flex-wrap gap-2">
        @foreach(['Cell phone +13 pts avg','Utilities +11 pts avg','Streaming +6 pts avg','Rent up to +20 pts'] as $pill)
        <span class="text-[11.5px] font-semibold text-violet-700 px-3 py-1.5 rounded-full border border-violet-300 bg-white">{{ $pill }}</span>
        @endforeach
    </div>
</div>

<h2 id="tools">Free Credit Protection Tools</h2>
<p>Three additional tools come with every free Experian account — no upgrade needed.</p>

<div class="my-6 rounded-2xl border border-[#e8e2f8] overflow-hidden divide-y divide-[#f0ebff]">
    @foreach([
    [
    'M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z',
    'Security Freeze',
    'Freeze or unfreeze your Experian credit file instantly — preventing new accounts from being opened in your name.',
    ],
    [
    'M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25z',
    'Disputes',
    'Correct inaccurate information in your Experian credit file directly — no phone call needed.',
    ],
    [
    'M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z',
    'Fraud Alert',
    'Add a fraud alert on your Experian file — lenders must take extra steps to verify your identity before opening new credit.',
    ],
    ] as [$path, $title, $desc])
    <div class="flex items-start gap-4 px-5 py-4 bg-white hover:bg-[#fdfbff] transition-colors">
        <div class="w-9 h-9 rounded-xl bg-violet-100 flex items-center justify-center shrink-0 mt-0.5">
            <svg style="width:18px;height:18px" fill="none" viewBox="0 0 24 24" stroke="#7c3aed" stroke-width="1.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="{{ $path }}" />
            </svg>
        </div>
        <div>
            <p class="text-[13.5px] font-semibold text-violet-700 mb-0.5">{{ $title }}</p>
            <p class="text-[13px] text-[#6b7280] leading-relaxed m-0">{{ $desc }}</p>
        </div>
    </div>
    @endforeach
</div>

<div class="my-8 rounded-2xl text-center relative overflow-hidden"
    style="background:linear-gradient(145deg,#1e0a3c,#2d1060);padding:2.5rem 2rem">
    <div class="absolute inset-0 pointer-events-none"
        style="background:radial-gradient(ellipse 60% 60% at 70% 30%,rgba(167,139,250,0.12) 0%,transparent 60%)"></div>
    <div class="relative z-10">
        <p class="text-[10px] font-bold uppercase tracking-[.2em] text-white! mb-2">100% Free · No Credit Card Required</p>
        <h3 class="!mt-0 !mb-3 fonttitle text-[22px] text-white! font-bold">Get Your Free FICO® Score & Credit Report</h3>
        <p class="text-white/50! text-[13px] mb-6 max-w-sm mx-auto leading-relaxed">
            New credit scores take effect immediately.<br>Free monitoring and alerts included.
        </p>
        <a href="https://www.experian.com/?pc=sem_exp_admedia&cc=sem_exp_admedia_ad_&ref=20251218012670117324&utm_source=admedia&utm_campaign=Search_29_120800_Experian_Brand"
            class="inline-flex items-center gap-2.5 bg-[#b721ff] hover:bg-[#a010f0] text-white font-bold text-[15px] px-8 py-4 rounded-xl transition-all hover:shadow-lg hover:shadow-purple-800/40">
            Let's get started
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M12 5l7 7-7 7" />
            </svg>
        </a>
        <p class="text-white/50! text-[11px] mt-3">Results vary. See disclaimers below.</p>
    </div>
</div>


<div id="disclaimer" class="pt-5 border-t border-[#f5f0ff]">
    <p class="text-[10.5px] font-bold uppercase tracking-[.14em] text-[#9ca3af] mb-2">Disclaimers</p>
    <div class="space-y-1.5 text-[11.5px] text-[#9ca3af] leading-relaxed">
        <p>* Credit score based on FICO® Score 8 model. Lenders may use a different scoring model.</p>
        <p>§ Results vary. Not all payments are boost-eligible. Some users may not see improved scores or approval odds.</p>
        <p>** Not available to residents of: <strong class="text-[#6b7280]">California, Massachusetts, Arkansas, Arizona, Texas, Tennessee, Florida, Nebraska, Illinois.</strong></p>
        <p>Express Fintech may receive compensation when you click links to products featured here. This content is sponsored by Experian.</p>
    </div>
</div>

@endsection

@section('related')
<a href="{{ route('cards.mechanics-scoring') }}"
    class="block bg-white rounded-xl border border-[#e8e2f8] p-4 hover:border-violet-300 hover:shadow-md transition-all">
    <span class="text-[10.5px] font-bold uppercase tracking-[.12em] text-violet-600 mb-2 block">Card Mechanics</span>
    <p class="text-[13.5px] font-semibold text-[#1e0a3c] leading-snug">Credit Scoring Models Explained</p>
</a>
<a href="{{ route('cards.market-comparison') }}"
    class="block bg-white rounded-xl border border-[#e8e2f8] p-4 hover:border-violet-300 hover:shadow-md transition-all">
    <span class="text-[10.5px] font-bold uppercase tracking-[.12em] text-pink-500 mb-2 block">Market & Regulation</span>
    <p class="text-[13.5px] font-semibold text-[#1e0a3c] leading-snug">Card Network Comparison</p>
</a>
<a href="{{ route('cards.strategy-cashback') }}"
    class="block bg-white rounded-xl border border-[#e8e2f8] p-4 hover:border-violet-300 hover:shadow-md transition-all">
    <span class="text-[10.5px] font-bold uppercase tracking-[.12em] text-indigo-500 mb-2 block">Card Strategy</span>
    <p class="text-[13.5px] font-semibold text-[#1e0a3c] leading-snug">Cashback vs Points — Which Wins?</p>
</a>
@endsection