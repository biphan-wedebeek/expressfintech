<div class="bg-[#1a1a1a] text-[#f5f0eb] text-[12px] py-2 relative z-50">
    <div class="max-w-screen-xl mx-auto px-8 flex items-center justify-between">
        <span class="flex items-center gap-2 opacity-80 tracking-wide">
            <svg class="w-3 h-3 shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg>
            Trusted by 100,000+ readers worldwide
        </span>
        <div class="flex items-center gap-6">
            <a href="{{ route('consultation') }}" class="flex items-center gap-1.5 opacity-80 hover:opacity-100 transition-opacity">
                <svg class="w-3 h-3 shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.11 12 19.79 19.79 0 0 1 1.08 3.4 2 2 0 0 1 3.06 1.2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.09 8.1A16 16 0 0 0 13 14l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 21 15z"/></svg>
                Free Consultation
            </a>
            <a href="{{ route('search') }}" class="flex items-center gap-1.5 opacity-80 hover:opacity-100 transition-opacity">
                <svg class="w-3 h-3 shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg>
                Search Reviews
            </a>
        </div>
    </div>
</div>

<nav id="siteNavbar" class="bg-white border-b border-[#d9d0c7] sticky top-0 z-50 shadow-sm">
    <div class="max-w-screen-xl mx-auto flex items-center h-[72px] gap-8">

        {{-- Logo --}}
        <a href="{{ route('home') }}" class="flex items-center gap-3 shrink-0">
            <div class="w-10 h-10 bg-[#1a1a1a] text-[#f5f0eb] rounded-lg flex items-center justify-center text-[13px] font-bold shrink-0" >
                <img src="{{ asset('finreview.png') }}" alt="FinReview Logo">
            </div>
            <div class="flex flex-col leading-none">
                <span class="text-[17px] font-bold text-[#1a1a1a] tracking-tight familyfont">FinReview</span>
                <span class="text-[9px] font-semibold uppercase tracking-[0.15em] text-[#6b6560] mt-[3px]">Expert Reviews</span>
            </div>
        </a>

        {{-- Nav links --}}
        <ul class="flex items-center gap-1 flex-1 list-none p-0 m-0">
            <li><button data-menu="insurance"        class="nav-btn flex items-center gap-1.5 px-3.5 py-2 text-[14px] font-medium text-[#1a1a1a] rounded-lg hover:bg-[#ede7e0] transition-colors cursor-pointer bg-transparent border-0 whitespace-nowrap">Insurance        <svg data-arr class="w-4 h-4 text-[#6b6560] transition-transform duration-200 shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg></button></li>
            <li><button data-menu="banking"          class="nav-btn flex items-center gap-1.5 px-3.5 py-2 text-[14px] font-medium text-[#1a1a1a] rounded-lg hover:bg-[#ede7e0] transition-colors cursor-pointer bg-transparent border-0 whitespace-nowrap">Banking          <svg data-arr class="w-4 h-4 text-[#6b6560] transition-transform duration-200 shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg></button></li>
            <li><button data-menu="credit-cards"     class="nav-btn flex items-center gap-1.5 px-3.5 py-2 text-[14px] font-medium text-[#1a1a1a] rounded-lg hover:bg-[#ede7e0] transition-colors cursor-pointer bg-transparent border-0 whitespace-nowrap">Credit Cards     <svg data-arr class="w-4 h-4 text-[#6b6560] transition-transform duration-200 shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg></button></li>
            <li><button data-menu="mortgages"        class="nav-btn flex items-center gap-1.5 px-3.5 py-2 text-[14px] font-medium text-[#1a1a1a] rounded-lg hover:bg-[#ede7e0] transition-colors cursor-pointer bg-transparent border-0 whitespace-nowrap">Mortgages        <svg data-arr class="w-4 h-4 text-[#6b6560] transition-transform duration-200 shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg></button></li>
            <li><button data-menu="personal-finance" class="nav-btn flex items-center gap-1.5 px-3.5 py-2 text-[14px] font-medium text-[#1a1a1a] rounded-lg hover:bg-[#ede7e0] transition-colors cursor-pointer bg-transparent border-0 whitespace-nowrap">Personal Finance <svg data-arr class="w-4 h-4 text-[#6b6560] transition-transform duration-200 shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg></button></li>
        </ul>

        {{-- Actions --}}
        <div class="flex items-center gap-3 shrink-0 ml-auto">
            <button class="p-2 rounded-lg text-[#1a1a1a] hover:bg-[#ede7e0] transition-colors bg-transparent border-0 cursor-pointer">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg>
            </button>
            <a href="{{ route('get-started') }}" class="bg-[#c9a96e] hover:bg-[#b8934a] text-[#1a1a1a] font-semibold text-[14px] px-5 py-2.5 rounded-lg transition-colors whitespace-nowrap">
                Get Started
            </a>
        </div>

    </div>
</nav>

<div id="megaPanel" class="absolute left-0 right-0 z-40 hidden" style="top: 72px">
    <div id="megaBackdrop" class="fixed inset-0 bg-black/25" style="top:108px; z-index:-1"></div>
    <div class="bg-white border-b border-[#d9d0c7] shadow-2xl w-full">
        <div class="max-w-screen-xl mx-auto px-8 py-8" id="megaContent">
            {{-- JS inject nội dung vào đây --}}
        </div>
    </div>
</div>

<script>
    (function () {
         const R = {
            'insurance.principles':       '{{ route("insurance.fundamentals.principles") }}',
            'insurance.risk-assessment':  '{{ route("insurance.fundamentals.risk-assessment") }}',
            'insurance.underwriting':     '{{ route("insurance.fundamentals.underwriting") }}',
            'insurance.premium-calculation': '{{ route("insurance.fundamentals.premium-calculation") }}',
            'insurance.regulatory':       '{{ route("insurance.fundamentals.regulatory") }}',

            'insurance':    '{{ route("insurance") }}',
            'banking':      '{{ route("banking") }}',
            'credit-cards': '{{ route("credit-cards") }}',
            'mortgages':    '{{ route("mortgages") }}',
            'personal-finance': '{{ route("personal-finance") }}',
            'reviews':      '{{ route("reviews") }}',

            'insurance.categories.life':        '{{ route("insurance.categories.life") }}',
            'insurance.categories.health':      '{{ route("insurance.categories.health") }}',
            'insurance.categories.property':    '{{ route("insurance.categories.property") }}',
            'insurance.categories.auto':        '{{ route("insurance.categories.auto") }}',
            'insurance.categories.reinsurance': '{{ route("insurance.categories.reinsurance") }}',
        };
        
        const MENUS = {
            insurance: {
                c1:{ title:'Insurance Fundamentals', items:[
                    {t:'Insurance Principles',        h: R['insurance.principles']},
                    {t:'Risk Assessment Models',      h: R['insurance.risk-assessment']},
                    {t:'Underwriting Process',        h: R['insurance.underwriting']},
                    {t:'Premium Calculation Methods', h: R['insurance.premium-calculation']},
                    {t:'Regulatory Framework',        h: R['insurance.regulatory']},
                ]},
                c2: { title:' Insurance Categories', items:[
                    {l:'Life Insurance Analysis',     h:R['insurance.categories.life']},
                    {l:'Health Insurance Systems',    h:R['insurance.categories.health']},
                    {l:'Property & Casualty',         h:R['insurance.categories.property']},
                    {l:'Auto Insurance Market',       h:R['insurance.categories.auto']},
                    {l:'Reinsurance Structure',       h:R['insurance.categories.reinsurance']},
                ]},
                c3: { title:' Industry Insights', items:[
                    {l:'Insurance Market Trends',  h:'#'},
                    {l:'InsurTech Innovations',    h:'#'},
                    {l:'Global Insurance Reports', h:'#'},
                ]},
                featured:[
                    {badge:'TOP PICK', title:'State Farm Home Insurance Review 2026', h:'#'},
                    {badge:null,       title:'GEICO Auto Insurance Review 2026',      h:'#'},
                ]
            },
            banking: {
                c1: { title:'Banking Structure', items:[
                    {t:'Retail vs Commercial Banking', h:'#'},
                    {t:'Central Banking Systems',      h:'#'},
                    {t:'Digital Banking Evolution',    h:'#'},
                    {t:'Open Banking',                 h:'#'},
                ]},
                c2: { title:'Banking Products', items:[
                    {l:'Deposit Products Analysis',  h:'#'},
                    {l:'Lending Framework',          h:'#'},
                    {l:'Corporate Banking Services', h:'#'},
                    {l:'Cross-border Payments',      h:'#'},
                    {l:'Treasury Services',          h:'#'},
                ]},
                c3: { title:'Banking Industry Analysis', items:[
                    {l:'Profitability Metrics',           h:'#'},
                    {l:'NIM & Capital Ratios',            h:'#'},
                    {l:'Risk & Liquidity Management',     h:'#'},
                    {l:'Global Banking Outlook',          h:'#'},
                ]},
                featured:[
                    {badge:'EDITOR CHOICE', title:'Ally Bank High-Yield Savings Review 2026', h:'#'},
                ]
            },
            'credit-cards': {
                c1: { title:'Card Mechanics', items:[
                    {t:'Credit Scoring Models',      h:'#'},
                    {t:'APR & Interest Calculation', h:'#'},
                    {t:'Interchange Fees',           h:'#'},
                    {t:'Credit Limits',              h:'#'},
                    {t:'Risk-based Pricing',         h:'#'},
                ]},
                c2: { title:'Card Strategy', items:[
                    {l:'Reward Program Economics',    h:'#'},
                    {l:'Cashback vs Points',          h:'#'},
                    {l:'Balance Transfer Analysis',   h:'#'},
                    {l:'Credit Utilization Strategy', h:'#'},
                    {l:'Card Churning Tactics',       h:'#'},
                ]},
                c3: { title:'Market & Regulation', items:[
                    {l:'Card Network Comparison',   h:'#'},
                    {l:'Consumer Protection Laws',  h:'#'},
                ]},
                featured:[ ]
            },
            mortgages: {
                c1: { title:'Mortgage Fundamentals', items:[
                    {t:'Fixed vs Variable Rate',      h:'#'},
                    {t:'Amortization Structure',      h:'#'},
                    {t:'Mortgage Underwriting',       h:'#'},
                    {t:'Loan-to-Value Ratio',         h:'#'},
                    {t:'Interest Rate Mechanisms',    h:'#'}, 
                ]},
                c2: { title:'Mortgage Products', items:[
                    {l:'Conventional Loans',        h:'#'},
                    {l:'FHA / VA Loans',            h:'#'},
                    {l:'Jumbo Loans',               h:'#'},
                    {l:'Refinance Strategies',      h:'#'},
                    {l:'Adjustable-Rate Mortgages', h:'#'},
                ]},
                c3: { title:'Housing Market Analysis', items:[
                    {l:'Housing Price Trends',          h:'#'},
                    {l:'Mortgage-backed Securities',    h:'#'},
                    {l:'Rate Forecasting',              h:'#'},
                    {l:'Real Estate Cycles',            h:'#'},
                    {l:'Regulatory Impact',             h:'#'},
                ]},
                featured:[
                    {badge:null,       title:'Home Depot Project Loan Review 2026', h:'#'},
                    {badge:'TRENDING', title:'Mortgage Rate Trends 2026',           h:'#'},
                ]
            },
            'personal-finance': {
                c1: { title:' Financial Planning', items:[
                    {t:'Budget Systems',           h:'#'},
                    {t:'Emergency Fund Modeling',  h:'#'},
                    {t:'Retirement Planning',      h:'#'},
                    {t:'STax Planning Strategies', h:'#'},
                    {t:'Net Worth Analysis',       h:'#'},
                ]},
                c2: { title:'Wealth Building', items:[
                    {l:'Passive Income Models',   h:'#'},
                    {l:'Long-term Compounding',   h:'#'},
                    {l:'Debt Optimization',       h:'#'},
                    {l:'Financial Independence',  h:'#'},
                    {l:'Income Diversification',  h:'#'},
                ]},
                c3: { title:'Financial Behavior', items:[
                    {l:'Psychology of Money',      h:'#'},
                    {l:'Spending Patterns',        h:'#'},
                    {l:'Risk Tolerance',           h:'#'},
                    {l:'Financial Decision Bias',  h:'#'},
                    {l:'Consumer Trends',          h:'#'},
                ]},
                featured:[]
            },
        };

        /* ─── Render helpers ─────────────────────────────────────── */
        const imgPH = `<div class="w-[70px] h-[54px] rounded-lg bg-[#e8e0d8] flex items-center justify-center shrink-0 overflow-hidden">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#c9a96e" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><path d="m21 15-5-5L5 21"/></svg>
        </div>`;

        function col1HTML(col) {
            return `
                <p class="text-[11px] font-bold uppercase tracking-[0.12em] text-[#c9a96e] mb-4">${col.title}</p>
                ${col.items.map(i=>`
                <a href="${i.h}" class="block py-2 rounded-lg hover:bg-[#f5f0eb] transition-colors mb-1 group">
                    <div class="text-[14px] font-semibold text-[#1a1a1a] leading-snug group-hover:text-[#1a1a1a]">${i.t}</div>
                    ${i.d?`<div class="text-[12px] text-[#6b6560] mt-0.5">${i.d}</div>`:''}
                </a>`).join('')}`;
        }

        function colSimpleHTML(col) {
            return `
                <p class="text-[11px] font-bold uppercase tracking-[0.12em] text-[#c9a96e] mb-4">${col.title}</p>
                ${col.items.map(i=>`
                <a href="${i.h}" class="block py-2.5 rounded-lg text-[14px] font-medium text-[#1a1a1a] hover:bg-[#f5f0eb] hover:text-[#c9a96e] transition-colors mb-0.5">${i.l}</a>`
                ).join('')}`;
        }

        function featuredHTML(items) {
            const header = `<p class="text-[11px] font-bold uppercase tracking-[0.12em] text-[#c9a96e] mb-4">Featured Reviews</p>`;
            if (!items.length) return header + `<p class="text-[13px] text-[#6b6560] px-3">Coming soon...</p>`;
            return header
                + items.map(r=>`
                <a href="${r.h}" class="flex items-start gap-3 p-2.5 rounded-xl hover:bg-[#f5f0eb] transition-colors mb-2">
                    ${imgPH}
                    <div class="flex-1 min-w-0">
                        ${r.badge?`<span class="inline-block text-[9px] font-bold tracking-[0.12em] uppercase text-[#c9a96e] bg-[#fdf6ec] border border-[#f0dbb5] px-2 py-0.5 rounded-md mb-1.5">${r.badge}</span>`:''}
                        <p class="text-[13.5px] font-semibold text-[#1a1a1a] leading-snug m-0">${r.title}</p>
                    </div>
                </a>`).join('')
                + `<a href="#" class="inline-flex items-center gap-2 text-[13px] font-semibold text-[#c9a96e] mt-2 px-3 py-1.5 rounded-lg hover:bg-[#f5f0eb] transition-all group">
                    View all reviews
                    <svg class="w-3.5 h-3.5 group-hover:translate-x-0.5 transition-transform" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>`;
        }

        function renderMenu(key) {
            const d = MENUS[key]; if (!d) return;
            document.getElementById('megaContent').innerHTML = `
                <div style="display:grid; grid-template-columns:1fr 1fr 1fr 1px 300px; gap:0">
                    <div style="padding-right:32px">${col1HTML(d.c1)}</div>
                    <div style="padding-right:32px">${colSimpleHTML(d.c2)}</div>
                    <div style="padding-right:32px">${colSimpleHTML(d.c3)}</div>
                    <div style="background:#d9d0c7; margin:0 4px"></div>
                    <div style="padding-left:32px">${featuredHTML(d.featured)}</div>
                </div>`;
        }

        /* ─── Toggle ─────────────────────────────────────────────── */
        const navbar   = document.getElementById('siteNavbar');
        const panel    = document.getElementById('megaPanel');
        const backdrop = document.getElementById('megaBackdrop');
        const btns     = document.querySelectorAll('.nav-btn');
        let   activeKey = null;

        // Đặt panel là con của navbar để absolute hoạt động đúng
        navbar.style.position = 'sticky';
        navbar.appendChild(panel);

        function open(key, btn) {
            activeKey = key;
            renderMenu(key);
            panel.classList.remove('hidden');
            btns.forEach(b => {
                const on = b === btn;
                b.classList.toggle('bg-[#ede7e0]', on);
                b.querySelector('[data-arr]').style.transform = on ? 'rotate(180deg)' : '';
            });
        }

        function close() {
            activeKey = null;
            panel.classList.add('hidden');
            btns.forEach(b => {
                b.classList.remove('bg-[#ede7e0]');
                b.querySelector('[data-arr]').style.transform = '';
            });
        }

        btns.forEach(btn => {
            btn.addEventListener('click', e => {
                e.stopPropagation();
                const key = btn.dataset.menu;
                activeKey === key ? close() : open(key, btn);
            });
        });

        backdrop.addEventListener('click', close);
        document.addEventListener('keydown', e => e.key === 'Escape' && close());
        document.addEventListener('click', e => {
            if (!e.target.closest('#siteNavbar')) close();
        });

    })();
</script>