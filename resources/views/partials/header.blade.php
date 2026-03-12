{{-- ── TOP BAR ── --}}
<div class="bg-navy text-white text-xs py-2 relative z-50">
    <div class="max-w-screen-xl mx-auto px-8 flex items-center justify-between">
        <span class="flex items-center gap-2 opacity-70 tracking-wide">
            <svg class="w-3 h-3 shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg>
            Trusted by 100,000+ readers worldwide
        </span>
        <div class="flex items-center gap-6">
            <a href="{{ route('consultation') }}" class="flex items-center gap-1.5 opacity-70 hover:opacity-100 transition-opacity">
                <svg class="w-3 h-3 shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.11 12 19.79 19.79 0 0 1 1.08 3.4 2 2 0 0 1 3.06 1.2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.09 8.1A16 16 0 0 0 13 14l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 21 15z"/></svg>
                Free Consultation
            </a>
            <a href="{{ route('search') }}" class="flex items-center gap-1.5 opacity-70 hover:opacity-100 transition-opacity">
                <svg class="w-3 h-3 shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg>
                Search Reviews
            </a>
        </div>
    </div>
</div>

{{-- ── MAIN NAV ── --}}
<nav id="siteNavbar" class="bg-white border-b border-[#e5e7eb] sticky top-0 z-50" style="box-shadow:0 1px 3px rgba(15,31,53,.06)">
    <div class="max-w-screen-xl mx-auto flex items-center h-[68px] gap-8">

        {{-- Logo --}}
        <a href="{{ route('home') }}" class="flex items-center gap-3 shrink-0">
            <div class="h-9 rounded-lg flex items-center justify-center overflow-hidden shrink-0">
                <img src="{{ asset('expressfintech.png') }}" alt="Express Fintech Logo" class="w-full h-full object-cover">
            </div>
            <div class="flex flex-col leading-none">
                <span class="text-[16px] font-bold text-[#0f1f35] tracking-tight familyfont">Express Fintech</span>
                <span class="text-[9px] font-semibold uppercase tracking-[0.15em] text-[#9ca3af] mt-[3px]">Expert assessment.</span>
            </div>
        </a>

        {{-- Nav links --}}
        <ul class="flex items-center gap-0.5 flex-1 list-none p-0 m-0">
            @foreach([
                ['insurance','Insurance'],
                ['banking','Banking'],
                ['credit-cards','Credit Cards'],
                ['mortgages','Mortgages'],
                ['personal-finance','Personal Finance'],
            ] as [$key,$label])
            <li>
                <button data-menu="{{ $key }}"
                        class="nav-btn flex items-center gap-1.5 px-3.5 py-2 text-[13.5px] font-medium text-[#374151] rounded-lg hover:bg-[#eef2ff] hover:text-[#4f46e5] transition-all cursor-pointer bg-transparent border-0 whitespace-nowrap">
                    {{ $label }}
                    <svg data-arr class="w-3.5 h-3.5 text-[#9ca3af] transition-transform duration-200 shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
                </button>
            </li>
            @endforeach
        </ul>

        {{-- Actions --}}
        <div class="flex items-center gap-2.5 shrink-0 ml-auto">
            <button class="p-2 rounded-lg text-[#6b7280] hover:bg-[#eef2ff] hover:text-[#4f46e5] transition-all bg-transparent border-0 cursor-pointer">
                <svg class="w-[18px] h-[18px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg>
            </button>
            <a href="{{ route('get-started') }}"
               class="bg-[#4f46e5] hover:bg-[#4338ca] text-white font-semibold text-[13.5px] px-5 py-2.5 rounded-lg transition-all hover:shadow-lg hover:shadow-indigo-500/25 whitespace-nowrap">
                Get Started
            </a>
        </div>

    </div>
</nav>

{{-- ── MEGA PANEL ── --}}
<div id="megaPanel" class="absolute left-0 right-0 z-40 hidden" style="top:68px">
    <div id="megaBackdrop" class="fixed inset-0 bg-black/20" style="top:108px;z-index:-1"></div>
    <div class="bg-white border-b border-[#e5e7eb] w-full" style="box-shadow:0 8px 32px rgba(15,31,53,.10)">
        <div class="max-w-screen-xl mx-auto px-8 py-8" id="megaContent"></div>
    </div>
</div>

<script>
(function(){
    const R = {
        'insurance.principles':          '{{ route("insurance.fundamentals.principles") }}',
        'insurance.risk-assessment':     '{{ route("insurance.fundamentals.risk-assessment") }}',
        'insurance.underwriting':        '{{ route("insurance.fundamentals.underwriting") }}',
        'insurance.premium-calculation': '{{ route("insurance.fundamentals.premium-calculation") }}',
        'insurance.regulatory':          '{{ route("insurance.fundamentals.regulatory") }}',

        'insurance':         '{{ route("insurance") }}',
        'banking':           '{{ route("banking") }}',
        'credit-cards':      '{{ route("credit-cards") }}',
        'mortgages':         '{{ route("mortgages") }}',
        'personal-finance':  '{{ route("personal-finance") }}',
        'reviews':           '{{ route("reviews") }}',

        // Insurance
        'insurance.categories.life':        '{{ route("insurance.categories.life") }}',
        'insurance.categories.health':      '{{ route("insurance.categories.health") }}',
        'insurance.categories.property':    '{{ route("insurance.categories.property") }}',
        'insurance.categories.auto':        '{{ route("insurance.categories.auto") }}',
        'insurance.categories.reinsurance': '{{ route("insurance.categories.reinsurance") }}',

        'insurance.insights.trends':        '{{ route("insurance.insights.trends") }}',
        'insurance.insights.insurtech':     '{{ route("insurance.insights.insurtech") }}',
        'insurance.insights.reports':       '{{ route("insurance.insights.reports") }}',

        // Banking
        'banking.structure.retail-commercial': '{{ route("banking.structure.retail-commercial") }}',
        'banking.structure.central-banking':   '{{ route("banking.structure.central-banking") }}',
        'banking.structure.digital-banking':   '{{ route("banking.structure.digital-banking") }}',
        'banking.structure.open-banking':      '{{ route("banking.structure.open-banking") }}',

        'banking.products.deposit':      '{{ route("banking.products.deposit") }}',
        'banking.products.lending':      '{{ route("banking.products.lending") }}',
        'banking.products.corporate':    '{{ route("banking.products.corporate") }}',
        'banking.products.cross-border': '{{ route("banking.products.cross-border") }}',
        'banking.products.treasury':     '{{ route("banking.products.treasury") }}',

        // Cards
        'cards.mechanics.scoring':    '{{ route("cards.mechanics-scoring") }}',
        'cards.mechanics.apr':        '{{ route("cards.mechanics-apr") }}',
        'cards.mechanics.interchange':'{{ route("cards.mechanics-interchange") }}',
        'cards.mechanics.credit':     '{{ route("cards.mechanics-credit") }}',
        'cards.mechanics.risk_based': '{{ route("cards.mechanics-risk_based") }}',

        'cards.strategy.reward':    '{{ route("cards.strategy-reward") }}',
        'cards.strategy.cashback':  '{{ route("cards.strategy-cashback") }}',
        'cards.strategy.analysis':  '{{ route("cards.strategy-analysis") }}',
        'cards.strategy.strategy':  '{{ route("cards.strategy-strategy") }}',
        'cards.strategy.tactics':   '{{ route("cards.strategy-tactics") }}',

        'cards.market.comparison': '{{ route("cards.market-comparison") }}',
        'cards.market.consumer':   '{{ route("cards.market-consumer") }}',

        // Mortgages Fundamentals
        'mortgages.fundamentals.fixed_vs_variable': '{{ route("mortgages.fundamentals.fixed_vs_variable") }}',
        'mortgages.fundamentals.amortization_structure':   '{{ route("mortgages.fundamentals.amortization_structure") }}',
        'mortgages.fundamentals.underwriting': '{{ route("mortgages.fundamentals.underwriting") }}',
        'mortgages.fundamentals.ratio':        '{{ route("mortgages.fundamentals.ratio") }}',
        'mortgages.fundamentals.interest_rate':'{{ route("mortgages.fundamentals.interest_rate") }}',
        
        // Mortgages Products
        'mortgages.products.conventional':   '{{ route("mortgages.products.conventional") }}',
        'mortgages.products.fha_va':         '{{ route("mortgages.products.fha_va") }}',
        'mortgages.products.jumbo':          '{{ route("mortgages.products.jumbo") }}',
        'mortgages.products.refinance':      '{{ route("mortgages.products.refinance") }}',
        'mortgages.products.adjustable_rate':'{{ route("mortgages.products.adjustable_rate") }}',
        
        // Mortgages Analysis
        'mortgages.analysis.price_trends': '{{ route("mortgages.analysis.price_trends") }}',
        'mortgages.analysis.securities':   '{{ route("mortgages.analysis.securities") }}',
        'mortgages.analysis.forecasting':  '{{ route("mortgages.analysis.forecasting") }}',
        'mortgages.analysis.estate_cycles':'{{ route("mortgages.analysis.estate_cycles") }}',
        'mortgages.analysis.regulatory':   '{{ route("mortgages.analysis.regulatory") }}',
    };

    const MENUS = {
        insurance:{
            c1:{title:'Insurance Fundamentals',items:[
                {t:'Insurance Principles',        h:R['insurance.principles']},
                {t:'Risk Assessment Models',      h:R['insurance.risk-assessment']},
                {t:'Underwriting Process',        h:R['insurance.underwriting']},
                {t:'Premium Calculation Methods', h:R['insurance.premium-calculation']},
                {t:'Regulatory Framework',        h:R['insurance.regulatory']},
            ]},
            c2:{title:'Insurance Categories',items:[
                {l:'Life Insurance Analysis',  h:R['insurance.categories.life']},
                {l:'Health Insurance Systems', h:R['insurance.categories.health']},
                {l:'Property & Casualty',      h:R['insurance.categories.property']},
                {l:'Auto Insurance Market',    h:R['insurance.categories.auto']},
                {l:'Reinsurance Structure',    h:R['insurance.categories.reinsurance']},
            ]},
            c3:{title:'Industry Insights',items:[
                {l:'Insurance Market Trends',  h:R['insurance.insights.trends']},
                {l:'InsurTech Innovations',    h:R['insurance.insights.insurtech']},
                {l:'Global Insurance Reports', h:R['insurance.insights.reports']},
            ]},
            featured:[
                {badge:'TOP PICK',title:'State Farm Home Insurance Review 2026',h:'#'},
                {badge:null,      title:'GEICO Auto Insurance Review 2026',     h:'#'},
            ]
        },
        banking:{
            c1:{title:'Banking Structure',items:[
                {t:'Retail vs Commercial Banking',h:R['banking.structure.retail-commercial']},
                {t:'Central Banking Systems',     h:R['banking.structure.central-banking']},
                {t:'Digital Banking Evolution',   h:R['banking.structure.digital-banking']},
                {t:'Open Banking',                h:R['banking.structure.open-banking']},
            ]},
            c2:{title:'Banking Products',items:[
                {l:'Deposit Products Analysis', h:R['banking.products.deposit']},
                {l:'Lending Framework',         h:R['banking.products.lending']},
                {l:'Corporate Banking Services',h:R['banking.products.corporate']},
                {l:'Cross-border Payments',     h:R['banking.products.cross-border']},
                {l:'Treasury Services',         h:R['banking.products.treasury']},
            ]},
            c3:{title:'Banking Industry Analysis',items:[
                {l:'Profitability Metrics',       h:'#'},
                {l:'NIM & Capital Ratios',        h:'#'},
                {l:'Risk & Liquidity Management', h:'#'},
                {l:'Global Banking Outlook',      h:'#'},
            ]},
            featured:[
                {badge:'EDITOR CHOICE',title:'Ally Bank High-Yield Savings Review 2026',h:'#'},
            ]
        },
        'credit-cards':{
            c1:{title:'Card Mechanics',items:[
                {t:'Credit Scoring Models',     h:R['cards.mechanics.scoring']},
                {t:'APR & Interest Calculation',h:R['cards.mechanics.apr']},
                {t:'Interchange Fees',          h:R['cards.mechanics.interchange']},
                {t:'Credit Limits',             h:R['cards.mechanics.credit']},
                {t:'Risk-based Pricing',        h:R['cards.mechanics.risk_based']},
            ]},
             c2:{title:'Card Strategy',items:[
                {l:'Reward Program Economics',   h:R['cards.strategy.reward']},
                {l:'Cashback vs Points',         h:R['cards.strategy.cashback']},
                {l:'Balance Transfer Analysis',  h:R['cards.strategy.analysis']},
                {l:'Credit Utilization Strategy',h:R['cards.strategy.strategy']},
                {l:'Card Churning Tactics',      h:R['cards.strategy.tactics']},
            ]},
            c3:{title:'Market & Regulation',items:[
                {l:'Card Network Comparison',  h:R['cards.market.comparison']},
                {l:'Consumer Protection Laws', h:R['cards.market.consumer']},
            ]},
            featured:[
                {badge:'TOP PICK',  title:'Chase Sapphire Preferred Review 2026', h:'#'},
                {badge:'BEST VALUE',title:'Citi Double Cash Review 2026',          h:'#'},
            ]
        },
        mortgages:{
            c1:{title:'Mortgage Fundamentals',items:[
                {t:'Fixed vs Variable Rate',   h:R['mortgages.fundamentals.fixed_vs_variable']},
                {t:'Amortization Structure',   h:R['mortgages.fundamentals.amortization_structure']},
                {t:'Mortgage Underwriting',    h:R['mortgages.fundamentals.underwriting']},
                {t:'Loan-to-Value Ratio',      h:R['mortgages.fundamentals.ratio']},
                {t:'Interest Rate Mechanisms', h:R['mortgages.fundamentals.interest_rate']},
            ]},
            c2:{title:'Mortgage Products',items:[
                {l:'Conventional Loans',        h:R['mortgages.products.conventional']},
                {l:'FHA / VA Loans',            h:R['mortgages.products.fha_va']},
                {l:'Jumbo Loans',               h:R['mortgages.products.jumbo']},
                {l:'Refinance Strategies',      h:R['mortgages.products.refinance']},
                {l:'Adjustable-Rate Mortgages', h:R['mortgages.products.adjustable_rate']},
            ]},
            c3:{title:'Housing Market Analysis',items:[
                {l:'Housing Price Trends',        h:R['mortgages.analysis.price_trends']},
                {l:'Mortgage-backed Securities',  h:R['mortgages.analysis.securities']},
                {l:'Rate Forecasting',            h:R['mortgages.analysis.forecasting']},
                {l:'Real Estate Cycles',          h:R['mortgages.analysis.estate_cycles']},
                {l:'Regulatory Impact',           h:R['mortgages.analysis.regulatory']},
            ]},
            featured:[
                {badge:null,       title:'Home Depot Project Loan Review 2026', h:'#'},
                {badge:'TRENDING', title:'Mortgage Rate Trends 2026',           h:'#'},
            ]
        },
        'personal-finance':{
            c1:{title:'Financial Planning',items:[
                {t:'Budget Systems',          h:'#'},
                {t:'Emergency Fund Modeling', h:'#'},
                {t:'Retirement Planning',     h:'#'},
                {t:'Tax Planning Strategies', h:'#'},
                {t:'Net Worth Analysis',      h:'#'},
            ]},
            c2:{title:'Wealth Building',items:[
                {l:'Passive Income Models',  h:'#'},
                {l:'Long-term Compounding',  h:'#'},
                {l:'Debt Optimization',      h:'#'},
                {l:'Financial Independence', h:'#'},
                {l:'Income Diversification', h:'#'},
            ]},
            c3:{title:'Financial Behavior',items:[
                {l:'Psychology of Money',     h:'#'},
                {l:'Spending Patterns',       h:'#'},
                {l:'Risk Tolerance',          h:'#'},
                {l:'Financial Decision Bias', h:'#'},
                {l:'Consumer Trends',         h:'#'},
            ]},
            featured:[]
        },
    };

    /* ─── Render ─── */
    const imgPH = `<div class="w-[66px] h-[50px] rounded-lg flex items-center justify-center shrink-0 overflow-hidden" style="background:#eef2ff">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#4f46e5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><path d="m21 15-5-5L5 21"/></svg>
    </div>`;

    function col1HTML(col){
        return `<p class="text-[10.5px] font-bold uppercase tracking-[0.14em] text-[#4f46e5] mb-4">${col.title}</p>
        ${col.items.map(i=>`<a href="${i.h}" class="block py-2 px-2 rounded-lg hover:bg-[#eef2ff] transition-colors mb-0.5 group">
            <div class="text-[13.5px] font-semibold text-[#0f1f35] group-hover:text-[#4f46e5] leading-snug">${i.t}</div>
        </a>`).join('')}`;
    }

    function colSimpleHTML(col){
        return `<p class="text-[10.5px] font-bold uppercase tracking-[0.14em] text-[#4f46e5] mb-4">${col.title}</p>
        ${col.items.map(i=>`<a href="${i.h}" class="block py-2 px-2 rounded-lg text-[13.5px] font-medium text-[#374151] hover:bg-[#eef2ff] hover:text-[#4f46e5] transition-colors mb-0.5">${i.l}</a>`).join('')}`;
    }

    function featuredHTML(items){
        const hdr = `<p class="text-[10.5px] font-bold uppercase tracking-[0.14em] text-[#4f46e5] mb-4">Featured Reviews</p>`;
        if(!items.length) return hdr+`<p class="text-[13px] text-[#9ca3af] px-2">Coming soon…</p>`;
        return hdr + items.map(r=>`
        <a href="${r.h}" class="flex items-start gap-3 p-2.5 rounded-xl hover:bg-[#eef2ff] transition-colors mb-1.5">
            ${imgPH}
            <div class="flex-1 min-w-0">
                ${r.badge?`<span class="inline-block text-[9px] font-bold tracking-[0.12em] uppercase text-[#4f46e5] px-2 py-0.5 rounded-md mb-1.5" style="background:#eef2ff;border:1px solid rgba(79,70,229,.2)">${r.badge}</span>`:''}
                <p class="text-[13px] font-semibold text-[#0f1f35] leading-snug m-0">${r.title}</p>
            </div>
        </a>`).join('')
        +`<a href="${R['reviews']}" class="inline-flex items-center gap-2 text-[13px] font-semibold text-[#4f46e5] mt-2 px-2 py-1.5 rounded-lg hover:bg-[#eef2ff] transition-all group">
            View all reviews
            <svg class="w-3.5 h-3.5 group-hover:translate-x-0.5 transition-transform" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </a>`;
    }

    function renderMenu(key){
        const d=MENUS[key]; if(!d) return;
        document.getElementById('megaContent').innerHTML=`
        <div style="display:grid;grid-template-columns:1fr 1fr 1fr 1px 280px;gap:0">
            <div style="padding-right:28px">${col1HTML(d.c1)}</div>
            <div style="padding-right:28px">${colSimpleHTML(d.c2)}</div>
            <div style="padding-right:28px">${colSimpleHTML(d.c3)}</div>
            <div style="background:#e5e7eb;margin:0 4px"></div>
            <div style="padding-left:28px">${featuredHTML(d.featured)}</div>
        </div>`;
    }

    /* ─── Toggle ─── */
    const navbar=document.getElementById('siteNavbar');
    const panel=document.getElementById('megaPanel');
    const backdrop=document.getElementById('megaBackdrop');
    const btns=document.querySelectorAll('.nav-btn');
    let activeKey=null;

    navbar.style.position='sticky';
    navbar.appendChild(panel);

    function open(key,btn){
        activeKey=key; renderMenu(key);
        panel.classList.remove('hidden');
        btns.forEach(b=>{
            const on=b===btn;
            b.classList.toggle('bg-[#eef2ff]',on);
            b.classList.toggle('text-[#4f46e5]',on);
            b.querySelector('[data-arr]').style.transform=on?'rotate(180deg)':'';
        });
    }
    function close(){
        activeKey=null; panel.classList.add('hidden');
        btns.forEach(b=>{
            b.classList.remove('bg-[#eef2ff]','text-[#4f46e5]');
            b.querySelector('[data-arr]').style.transform='';
        });
    }

    btns.forEach(btn=>btn.addEventListener('click',e=>{
        e.stopPropagation();
        const key=btn.dataset.menu;
        activeKey===key?close():open(key,btn);
    }));
    backdrop.addEventListener('click',close);
    document.addEventListener('keydown',e=>e.key==='Escape'&&close());
    document.addEventListener('click',e=>{ if(!e.target.closest('#siteNavbar')) close(); });
})();
</script>