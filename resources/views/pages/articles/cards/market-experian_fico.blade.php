@extends('layouts.credit-cards')

@section('title', 'Get Your Free FICO® Score & Credit Report — Experian')
@section('breadcrumb_section', 'Market & Regulation')
@section('breadcrumb_current', 'Free FICO® Score')
@section('hero_section_label', 'Sponsored · Experian')
@section('hero_title', 'Get Your Free FICO® Score Instantly')
@section('hero_subtitle', '100% free. No credit card required. Real-time monitoring and alerts included — start improving your credit today.')
@section('hero_date', now()->format('F Y'))
@section('hero_read_time', '5 min read')
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
<a href="#intro" class="toc-link text-[13px] text-[#6b7280] hover:text-violet-700 block">Why Your Credit Score Matters</a>
<a href="#score" class="toc-link text-[13px] text-[#6b7280] hover:text-violet-700 block">FICO® Score Breakdown</a>
<a href="#goals" class="toc-link text-[13px] text-[#6b7280] hover:text-violet-700 block">5 Credit Goals</a>
<a href="#boost" class="toc-link text-[13px] text-[#6b7280] hover:text-violet-700 block">Experian Boost™</a>
<a href="#tools" class="toc-link text-[13px] text-[#6b7280] hover:text-violet-700 block">Free Protection Tools</a>
<a href="#getstarted" class="toc-link text-[13px] text-[#6b7280] hover:text-violet-700 block">Get Started</a>
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
<div id="intro">
    <p class="text-[17px] text-[#1e0a3c] font-medium leading-relaxed mb-6">
        Your FICO® Score is the three-digit number that determines whether you get approved for a mortgage, auto loan, or credit card — and at what interest rate. A difference of just 50 points on your score can mean thousands of dollars more in interest over the life of a loan. Yet most Americans have never seen their actual FICO® Score.
    </p>
    <p class="text-[15px] text-[#374151] leading-relaxed mb-6">
        Experian changes that. As the largest consumer credit bureau in the United States, Experian gives you free, immediate access to your FICO® Score 8 — the same model used by 90% of top lenders — along with your full credit report, real-time monitoring, and a suite of tools to help you improve your score starting today. No credit card required. No trial period. No catch.
    </p>

    {{-- Why it matters callout --}}
    <div class="p-5 rounded-2xl bg-[#f7f5ff] border border-[#e8e2f8] mb-8 pb-8 border-b border-[#f5f0ff]">
        <p class="text-[11px] font-bold uppercase tracking-[.16em] text-violet-700 mb-3">Why Your Score Matters More Than You Think</p>
        <div class="grid grid-cols-3 gap-4">
            @foreach([
            ['$12,000+','Extra interest paid on a 30-yr mortgage with Fair vs Good credit'],
            ['1 in 5', 'Americans has an error on their credit report that could be hurting their score'],
            ['47 pts', 'Average FICO® Score increase reported by Experian Boost™ users'],
            ] as [$v,$l])
            <div class="text-center">
                <div class="text-[22px] font-black text-[#1e0a3c] fonttitle leading-none mb-1">{{ $v }}</div>
                <div class="text-[11.5px] text-[#6b7280] leading-snug">{{ $l }}</div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<h2 id="score">What Makes Up Your FICO® Score?</h2>
<p>
    FICO® Scores are calculated using data from your credit report, weighted across five categories. Each factor plays a different role — and understanding them tells you exactly where to focus your energy to see the fastest improvement.
</p>
<p>
    The most important thing to know: <strong>payment history alone accounts for 35% of your score.</strong> This means that consistently paying bills on time is the single highest-leverage action you can take — more impactful than paying down balances, opening new accounts, or any other strategy.
</p>

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
            ['Payment History', '35%', 'Pay every bill on time — even one 30-day late payment can drop your score by 60–110 points.'],
            ['Amounts Owed', '30%', 'Keep total utilization below 30%. Below 10% is ideal. Pay down revolving balances first.'],
            ['Credit History', '15%', 'Keep old accounts open even if unused. The average age of accounts matters significantly.'],
            ['New Credit', '10%', 'Each hard inquiry stays on your report for 2 years. Space out new applications by 6+ months.'],
            ['Credit Mix', '10%', 'A healthy mix of installment loans and revolving credit signals responsible management.'],
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

<p>
    Experian's free dashboard shows you a breakdown of all five factors in real time — so you can see exactly which ones are helping your score and which ones need attention. Unlike a generic credit score, the FICO® Score 8 model Experian uses is the same one lenders actually pull when you apply for credit, meaning the number you see is the number that matters.
</p>

<h2 id="goals">Reach Your Credit & Money Goals</h2>
<p>
    Experian's free platform is built around five financial goals that most Americans share. Each section of the dashboard is dedicated to helping you make real, measurable progress — not just showing you a number and leaving you to figure out the rest.
</p>
<p>
    Whether you're trying to build credit from scratch, find a better credit card, reduce monthly bills, lower your insurance premium, or establish banking, Experian's tools are designed to move you forward. Here's what's available the moment you sign up:
</p>

<div class="my-6 space-y-3">
    @foreach([
    [
    'n' => '01',
    'title' => 'Get a free credit report & FICO® Score',
    'badge' => 'Most Popular',
    'body' => 'Your full Experian credit report and FICO® Score 8 load immediately after signup — no waiting, no verification delays. You can see every account, every hard inquiry, every negative item, and every positive factor on your report in one place. From there, Experian Boost™ lets you add on-time payments for utilities, streaming services, and eligible rent to raise your score instantly.',
    'grad' => 'from-violet-600 to-purple-700',
    ],
    [
    'n' => '02',
    'title' => 'See No Ding Decline™ credit cards',
    'badge' => null,
    'body' => 'Experian\'s card marketplace shows you personalised offers matched to your credit profile — with your approval odds displayed before you apply. Because Experian uses a soft pull to match you with offers, browsing cards never impacts your credit score. You only submit a hard inquiry when you decide to apply for a specific card.',
    'grad' => 'from-indigo-600 to-violet-700',
    ],
    [
    'n' => '03',
    'title' => 'Save over $600 on your bills',
    'badge' => null,
    'body' => 'Experian BillFixer™ negotiates your existing monthly bills on your behalf — internet, cable, TV, and phone. You share your bill, and Experian\'s team contacts your provider directly to negotiate a lower rate. There\'s no fee unless they save you money. Users save an average of $600+ per year without making a single call themselves.',
    'grad' => 'from-purple-700 to-indigo-800',
    ],
    [
    'n' => '04',
    'title' => 'Save on car insurance',
    'badge' => null,
    'body' => 'Most drivers are overpaying for auto insurance simply because they haven\'t compared quotes recently. Experian\'s insurance marketplace lets you compare quotes from top-rated providers in under 2 minutes. Your credit-based insurance score is a major factor in auto insurance pricing — Experian\'s platform uses your actual credit profile to surface quotes you\'re genuinely eligible for.',
    'grad' => 'from-violet-700 to-purple-900',
    ],
    [
    'n' => '05',
    'title' => 'Build credit with digital checking',
    'badge' => null,
    'body' => 'The Experian Smart Money™ Digital Checking Account is issued by Community Federal Savings Bank (CFSB), Member FDIC. It charges no monthly fees, pays no surprise charges, and helps you build credit simply by using it. Direct deposit users get access to funds up to 2 days early, and new accounts that receive qualifying deposits within 45 days earn a $50 bonus.',
    'grad' => 'from-indigo-700 to-violet-900',
    ],
    ] as $goal)
    <div class="flex gap-0 rounded-2xl overflow-hidden border border-[#e8e2f8]" style="box-shadow:0 1px 6px rgba(30,10,60,.05)">
        <div class="w-11 shrink-0 flex items-center justify-center bg-gradient-to-b {{ $goal['grad'] }}">
            <span class="text-[10px] font-black text-white/50 tracking-[.18em]"
                style="writing-mode:vertical-rl;transform:rotate(180deg)">{{ $goal['n'] }}</span>
        </div>
        <div class="flex-1 px-5 py-4 bg-white">
            <div class="flex items-center gap-2 mb-2">
                <p class="text-[14px] font-semibold text-[#1e0a3c] leading-snug">{{ $goal['title'] }}</p>
                @if($goal['badge'])
                <span class="badge-violet shrink-0">{{ $goal['badge'] }}</span>
                @endif
            </div>
            <p class="text-[13px] text-[#6b7280] leading-relaxed m-0">{{ $goal['body'] }}</p>
        </div>
    </div>
    @endforeach
</div>

<h2 id="boost">Experian Boost™ — Raise Your Score in Minutes</h2>
<p>
    For most of credit scoring history, on-time payments for rent, utilities, and subscription services were invisible to credit bureaus. Your landlord doesn't report to Experian. Neither does your electricity provider or your Netflix subscription. You could pay every bill perfectly for a decade and receive zero credit for it.
</p>
<p>
    Experian Boost™ changes this. It's a free feature that lets you connect your bank accounts and automatically find eligible on-time payment history across bills that were previously ignored. Once connected, those payments are added to your Experian credit file and your FICO® Score updates <strong>immediately</strong> — not in 30 days, not at the next reporting cycle. Right now.
</p>

<div class="my-6 p-6 rounded-2xl border-l-4 border-violet-500" style="background:linear-gradient(135deg,#f5f3ff,#ede9fe)">
    <p class="text-[13.5px] font-semibold text-[#4c1d95] mb-2">Eligible bill types and average score impact</p>
    <p class="text-[13px] text-[#5b21b6] leading-relaxed mb-4">Experian scans your transaction history and identifies recurring payments. You choose which ones to add — you're always in control of what gets included.</p>
    <div class="flex flex-wrap gap-2 mb-4">
        @foreach(['Cell phone +13 pts avg','Utilities +11 pts avg','Streaming +6 pts avg','Rent up to +20 pts'] as $pill)
        <span class="text-[11.5px] font-semibold text-violet-700 px-3 py-1.5 rounded-full border border-violet-300 bg-white">{{ $pill }}</span>
        @endforeach
    </div>
    <p class="text-[12.5px] text-[#6b7280] m-0">* Average impact data based on Experian internal reporting. Results vary by individual credit profile.</p>
</div>

<p>
    Experian Boost™ is particularly valuable for people with thin credit files — those who are new to credit or who have limited account history. If you have fewer than 5 accounts on your credit report, Boost can make a meaningful difference. It's also useful for anyone who has been working to improve their score and wants to accelerate the process using payment history they've already built.
</p>

<h2 id="tools">Free Credit Protection Tools</h2>
<p>
    Beyond your score and report, Experian includes three credit protection tools that are available immediately with your free account. These are the same tools that competing services charge monthly fees to access — Experian provides them at no cost because they believe every consumer deserves basic protection over their credit identity.
</p>

<div class="my-6 rounded-2xl border border-[#e8e2f8] overflow-hidden divide-y divide-[#f0ebff]">
    @foreach([
    [
    'M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z',
    'Security Freeze',
    'A security freeze prevents lenders from accessing your Experian credit file entirely — meaning no new credit can be opened in your name while the freeze is active. You can freeze and unfreeze your file instantly through the app or website, so it doesn\'t affect your ability to apply for credit when you choose to.',
    ],
    [
    'M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25z',
    'Disputes',
    'The Federal Trade Commission estimates that 1 in 5 Americans has an error on at least one of their credit reports. Errors — like accounts that don\'t belong to you, incorrect balances, or payments marked late when they weren\'t — can significantly lower your score. Experian\'s dispute tool lets you flag and correct inaccurate items directly through the platform, without writing letters or making phone calls.',
    ],
    [
    'M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z',
    'Fraud Alert',
    'A fraud alert notifies lenders that they must take additional steps to verify your identity before opening new credit in your name. Unlike a security freeze (which blocks access entirely), a fraud alert allows lenders to still process applications — but requires them to contact you first. This is particularly useful if you suspect your personal information has been compromised but still want to be able to apply for credit.',
    ],
    ] as [$path, $title, $desc])
    <div class="flex items-start gap-4 px-5 py-5 bg-white hover:bg-[#fdfbff] transition-colors">
        <div class="w-9 h-9 rounded-xl bg-violet-100 flex items-center justify-center shrink-0 mt-0.5">
            <svg style="width:18px;height:18px" fill="none" viewBox="0 0 24 24" stroke="#7c3aed" stroke-width="1.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="{{ $path }}" />
            </svg>
        </div>
        <div>
            <p class="text-[13.5px] font-semibold text-violet-700 mb-1">{{ $title }}</p>
            <p class="text-[13px] text-[#6b7280] leading-relaxed m-0">{{ $desc }}</p>
        </div>
    </div>
    @endforeach
</div>

<p>
    Experian also monitors your credit file continuously and sends you real-time alerts whenever a change is detected — a new account opened, a balance update, a new inquiry, or a change in personal information. This means you'll know about suspicious activity the moment it happens, not weeks later when you next check your report manually.
</p>

<h2 id="getstarted">Why Experian — and Why Now?</h2>
<p>
    There are dozens of services that offer a "free credit score" — but most of them give you a VantageScore, not a FICO® Score. The difference matters: VantageScore and FICO® Score 8 are calculated differently, and since 90% of top lenders use FICO® when evaluating applications, a VantageScore can give you a misleading picture of where you actually stand.
</p>
<p>
    Experian is one of the only services that gives you your actual FICO® Score 8 for free — the same number your mortgage lender, auto dealer, or credit card issuer will pull when you apply. Knowing this number in advance lets you apply with confidence, negotiate better terms, and avoid the guesswork that leads most people to apply for products they're not going to qualify for.
</p>

<div class="my-6 p-6 rounded-2xl bg-[#f7f5ff] border border-[#e8e2f8]">
    <p class="text-[11px] font-bold uppercase tracking-[.16em] text-violet-700 mb-4">Experian vs Other Free Score Services</p>
    <div class="overflow-x-auto">
        <table class="w-full border-collapse text-[13px]">
            <thead>
                <tr class="border-b border-[#e8e2f8]">
                    <th class="text-left py-2.5 pr-4 text-[11px] font-bold uppercase tracking-[.1em] text-[#9ca3af] w-[40%]">Feature</th>
                    <th class="text-center py-2.5 px-3 text-[11px] font-bold text-violet-700 uppercase tracking-[.1em]">Experian</th>
                    <th class="text-center py-2.5 px-3 text-[11px] font-bold text-[#9ca3af] uppercase tracking-[.1em]">Others</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-[#f0ebff]">
                @foreach([
                ['Actual FICO® Score 8', '✓', '✗ VantageScore only'],
                ['Full credit report access', '✓', 'Partial or paid'],
                ['Real-time score updates', '✓', 'Monthly only'],
                ['Experian Boost™', '✓', '✗ Not available'],
                ['Dark web surveillance', '✓', 'Paid tier only'],
                ['Credit card marketplace', '✓', 'Limited'],
                ['Completely free', '✓', 'Often freemium'],
                ] as [$feat, $exp, $other])
                <tr>
                    <td class="py-2.5 pr-4 text-[#374151] font-medium">{{ $feat }}</td>
                    <td class="py-2.5 px-3 text-center text-emerald-600 font-semibold">{{ $exp }}</td>
                    <td class="py-2.5 px-3 text-center text-[#9ca3af]">{{ $other }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<p>
    The right time to check your credit score is before you need it — not after you've already applied for a loan and received a rate you didn't expect. Monitoring your score consistently means you'll catch errors early, understand what's affecting your score, and be ready to apply for the best available rates when the time comes.
</p>
<p>
    Signup takes less than 3 minutes. You'll need your name, email address, and the last four digits of your Social Security Number to verify your identity. No payment information is collected at any point in the process.
</p>

<div id="getstarted" class="my-8 rounded-2xl text-center relative overflow-hidden"
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
        <p>* Credit score calculated based on FICO® Score 8 model. Your lender or insurer may use a different FICO® Score than FICO® Score 8, or another type of credit score altogether.</p>
        <p>§ Results will vary. Not all payments are boost-eligible. Some users may not receive an improved score or approval odds. Not all lenders use Experian credit files, and not all lenders use scores impacted by Experian Boost.</p>
        <p>† The Experian Smart Money™ Debit Card is issued by Community Federal Savings Bank (CFSB), pursuant to a license from Mastercard International. Experian is a Program Manager, not a bank. Funds are insured up to $250,000.</p>
        <p>** This offer is not available to residents of: <strong class="text-[#6b7280]">California, Massachusetts, Arkansas, Arizona, Texas, Tennessee, Florida, Nebraska, and Illinois.</strong></p>
        <p>Express Fintech may receive compensation when you click on links to products featured here. This content is sponsored by Experian. Experian® is a registered trademark of Experian Information Solutions, Inc.</p>
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