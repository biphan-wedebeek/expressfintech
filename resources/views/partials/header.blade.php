<div class="bg-navy text-white text-xs py-2 relative z-50">
    <div class="max-w-screen-xl mx-auto px-8 flex items-center justify-between">
        <span class="flex items-center gap-2 opacity-70 tracking-wide">
            <svg class="w-3 h-3 shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg>
            Trusted by 100,000+ readers worldwide
        </span>
        <div class="flex items-center gap-6">
            <a href="{{ route('contact') }}" class="flex items-center gap-1.5 opacity-70 hover:opacity-100 transition-opacity">
                <svg class="w-3 h-3 shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.11 12 19.79 19.79 0 0 1 1.08 3.4 2 2 0 0 1 3.06 1.2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.09 8.1A16 16 0 0 0 13 14l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 21 15z"/></svg>
                Free Consultation
            </a>
            <a href="{{ route('contact') }}" class="flex items-center gap-1.5 opacity-70 hover:opacity-100 transition-opacity">
                <svg class="w-3 h-3 shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg>
                Search Reviews
            </a>
        </div>
    </div>
</div>

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
            <a href="{{ route('contact') }}"
               class="bg-[#4f46e5] hover:bg-[#4338ca] text-white font-semibold text-[13.5px] px-5 py-2.5 rounded-lg transition-all hover:shadow-lg hover:shadow-indigo-500/25 whitespace-nowrap">
                Get Started
            </a>
        </div>

    </div>
</nav>

<div id="megaPanel" class="absolute left-0 right-0 z-40 hidden" style="top:68px">
    <div id="megaBackdrop" class="fixed inset-0 bg-black/20" style="top:108px;z-index:-1"></div>
    <div class="bg-white border-b border-[#e5e7eb] w-full" style="box-shadow:0 8px 32px rgba(15,31,53,.10)">
        <div class="max-w-screen-xl mx-auto px-8 py-8" id="megaContent"></div>
    </div>
</div>

<script>
(function(){
    const R = {

        // Insurance
        'insurance.principles':          '{{ route("insurance.fundamentals.principles") }}',
        'insurance.risk-assessment':     '{{ route("insurance.fundamentals.risk-assessment") }}',
        'insurance.underwriting':        '{{ route("insurance.fundamentals.underwriting") }}',
        'insurance.premium-calculation': '{{ route("insurance.fundamentals.premium-calculation") }}',
        'insurance.regulatory':          '{{ route("insurance.fundamentals.regulatory") }}',
        
        'insurance.categories.life':        '{{ route("insurance.categories.life") }}',
        'insurance.categories.health':      '{{ route("insurance.categories.health") }}',
        'insurance.categories.property':    '{{ route("insurance.categories.property") }}',
        'insurance.categories.auto':        '{{ route("insurance.categories.auto") }}',
        'insurance.categories.reinsurance': '{{ route("insurance.categories.reinsurance") }}',

        'insurance.insights.trends':        '{{ route("insurance.insights.trends") }}',
        'insurance.insights.insurtech':     '{{ route("insurance.insights.insurtech") }}',
        'insurance.insights.reports':       '{{ route("insurance.insights.reports") }}',

        // Banking
        'banking.structure.retail-commercial': '{{ route("banking.structure-retail_commercial") }}',
        'banking.structure.central-banking':   '{{ route("banking.structure-central_banking") }}',
        'banking.structure.digital-evolution': '{{ route("banking.structure-digital_evolution") }}',
        'banking.structure.open-banking':      '{{ route("banking.structure-open_banking") }}',

        'banking.products.deposit':      '{{ route("banking.products-deposit_analysis") }}',
        'banking.products.lending':      '{{ route("banking.products-lending_framework") }}',
        'banking.products.corporate':    '{{ route("banking.products-corporate_services") }}',
        'banking.products.cross-border': '{{ route("banking.products-crossborder_payments") }}',
        'banking.products.treasury':     '{{ route("banking.products-treasury_services") }}',

        'banking.analysis.global-outlook':        '{{ route("banking.analysis-global_outlook") }}',
        'banking.analysis.nim-capital':           '{{ route("banking.analysis-nim_capital") }}',
        'banking.analysis.profitability-metrics': '{{ route("banking.analysis-profitability_metrics") }}',
        'banking.analysis.risk-liquidity':        '{{ route("banking.analysis-risk_liquidity") }}',

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

        'cards.market.comparison':    '{{ route("cards.market-comparison") }}',
        'cards.market.consumer':      '{{ route("cards.market-consumer") }}',
        'cards.market.experian_fico': '{{ route("cards.market-experian_fico") }}',

        // Mortgages Fundamentals
        'mortgages.fundamentals.fixed_vs_variable':        '{{ route("mortgages.fundamentals.fixed_vs_variable") }}',
        'mortgages.fundamentals.amortization_structure':   '{{ route("mortgages.fundamentals.amortization_structure") }}',
        'mortgages.fundamentals.underwriting':             '{{ route("mortgages.fundamentals.underwriting") }}',
        'mortgages.fundamentals.ratio':                    '{{ route("mortgages.fundamentals.ratio") }}',
        'mortgages.fundamentals.interest_rate':            '{{ route("mortgages.fundamentals.interest_rate") }}',
        
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

        // Financial Planning
        'finance.planning.budget':         '{{ route("finance.planning.budget") }}',
        'finance.planning.emergency_fund': '{{ route("finance.planning.emergency_fund") }}',
        'finance.planning.retirement':     '{{ route("finance.planning.retirement") }}',
        'finance.planning.tax':            '{{ route("finance.planning.tax") }}',
        'finance.planning.net_worth':      '{{ route("finance.planning.net_worth") }}',
        
        // Financial Wealth Building
        'finance.building.passive_income':   '{{ route("finance.building.passive_income") }}',
        'finance.building.long_term':        '{{ route("finance.building.long_term") }}',
        'finance.building.debt':             '{{ route("finance.building.debt") }}',
        'finance.building.independence':     '{{ route("finance.building.independence") }}',
        'finance.building.diversification':  '{{ route("finance.building.diversification") }}',
        
        // Financial Behavior
        'finance.behavior.psychology':     '{{ route("finance.behavior.psychology") }}',
        'finance.behavior.spending':       '{{ route("finance.behavior.spending") }}',
        'finance.behavior.risk_tolerance': '{{ route("finance.behavior.risk_tolerance") }}',
        'finance.behavior.decision_bias':  '{{ route("finance.behavior.decision_bias") }}',
        'finance.behavior.consumer_trends':'{{ route("finance.behavior.consumer_trends") }}',
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
                {
                    badge:'TOP PICK',
                    title:'Straight-Through Processing & Digital Underwriting',
                    h:R['insurance.underwriting']+'#section-03',
                    img:'https://images.unsplash.com/photo-1518770660439-4636190af475?w=400&q=80'
                },
                {
                    badge:null,
                    title:'Insurance Market Trends & Analysis {{ now()->year }}',
                    h:R['insurance.insights.trends'],
                    img:'https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=400&q=80'
                },
            ]
        },
        banking:{
            c1:{title:'Banking Structure',items:[
                {t:'Retail vs Commercial Banking',h:R['banking.structure.retail-commercial']},
                {t:'Central Banking Systems',     h:R['banking.structure.central-banking']},
                {t:'Digital Banking Evolution',   h:R['banking.structure.digital-evolution']},
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
                {l:'Profitability Metrics',       h:R['banking.analysis.profitability-metrics']},
                {l:'NIM & Capital Ratios',        h:R['banking.analysis.nim-capital']},
                {l:'Risk & Liquidity Management', h:R['banking.analysis.risk-liquidity']},
                {l:'Global Banking Outlook',      h:R['banking.analysis.global-outlook']},
            ]},
            featured:[
                {
                    badge: 'DEEP DIVE',
                    title: 'Open Banking: APIs, PSD2 & the Platform Economy',
                    h: R['banking.structure.open-banking'],
                    img: 'https://images.unsplash.com/photo-1558494949-ef010cbdcc31?w=400&q=80'
                },
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
                {l:'Card Network Comparison',     h:R['cards.market.comparison']},
                {l:'Consumer Protection Laws',    h:R['cards.market.consumer']},
                {l:'Free FICO® Score — Experian', h:R['cards.market.experian_fico'] },
            ]},
            featured:[
                {
                    badge: 'MUST READ',
                    title: 'APR & Daily Compounding: The True Cost of Carrying a Balance',
                    h: R['cards.mechanics.apr'],
                    img: 'https://images.unsplash.com/photo-1563013544-824ae1b704d3?w=400&q=80'
                },
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
                {
                    badge: 'FUNDAMENTALS',
                    title: 'Loan-to-Value Ratio: Equity, PMI & What Lenders Really Look At',
                    h: R['mortgages.fundamentals.ratio'],
                    img: 'https://images.unsplash.com/photo-1554224155-6726b3ff858f?w=400&q=80'
                },
            ]
        },
        'personal-finance': {
            c1: { title: 'Financial Planning', items: [
                { t: 'Budget Systems',          h: R['finance.planning.budget'] },
                { t: 'Emergency Fund Modeling', h: R['finance.planning.emergency_fund'] },
                { t: 'Retirement Planning',     h: R['finance.planning.retirement'] },
                { t: 'Tax Planning Strategies', h: R['finance.planning.tax'] },
                { t: 'Net Worth Analysis',      h: R['finance.planning.net_worth'] },
            ]},
            c2: { title: 'Wealth Building', items: [
                { l: 'Passive Income Models',    h: R['finance.building.passive_income'] },
                { l: 'Long-term Compounding',    h: R['finance.building.long_term'] },
                { l: 'Debt Optimization',        h: R['finance.building.debt'] },
                { l: 'Financial Independence',   h: R['finance.building.independence'] },
                { l: 'Income Diversification',   h: R['finance.building.diversification'] },
            ]},
            c3: { title: 'Financial Behavior', items: [
                { l: 'Psychology of Money',      h: R['finance.behavior.psychology'] },
                { l: 'Spending Patterns',        h: R['finance.behavior.spending'] },
                { l: 'Risk Tolerance',           h: R['finance.behavior.risk_tolerance'] },
                { l: 'Financial Decision Bias',  h: R['finance.behavior.decision_bias'] },
                { l: 'Consumer Trends',          h: R['finance.behavior.consumer_trends'] },
            ]},
            featured:[
                {
                    badge: 'TAX SEASON',
                    title: 'Tax Strategy: Legal Frameworks to Minimise Your Lifetime Tax Bill',
                    h: R['finance.planning.tax'],
                    img: 'https://images.unsplash.com/photo-1554224154-26032ffc0d07?w=400&q=80'
                },
            ]
        },
    };

    /* ─── Render ─── */

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
        <div class="w-[66px] h-[50px] rounded-lg shrink-0 overflow-hidden">
            ${r.img
                ? `<img src="${r.img}" alt="" class="w-full h-full object-cover">`
                : `<div class="w-full h-full flex items-center justify-center" style="background:#eef2ff"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#4f46e5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><path d="m21 15-5-5L5 21"/></svg></div>`
            }
        </div>
        <div class="flex-1 min-w-0">
            ${r.badge?`<span class="inline-block text-[9px] font-bold tracking-[0.12em] uppercase text-[#4f46e5] px-2 py-0.5 rounded-md mb-1.5" style="background:#eef2ff;border:1px solid rgba(79,70,229,.2)">${r.badge}</span>`:''}
            <p class="text-[13px] font-semibold text-[#0f1f35] leading-snug m-0">${r.title}</p>
        </div>
    </a>`).join('');
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