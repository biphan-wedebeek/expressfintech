<footer style="background:#0f1f35;color:#fff">

    <div class="max-w-screen-xl mx-auto py-16">
        <div class="grid grid-cols-1 lg:grid-cols-[300px_1fr] gap-14">

            {{-- Brand + newsletter --}}
            <div>
                <a href="{{ route('home') }}" class="flex items-center gap-3 mb-5">
                    <div class="h-10 rounded-lg flex items-center justify-center overflow-hidden shrink-0">
                        <img src="{{ asset('expressfintech.png') }}" alt="Logo" class="w-full h-full object-cover">
                    </div>
                    <span class="familyfont text-[18px] font-bold">Express Fintech</span>
                </a>
                <p class="text-[13.5px] leading-relaxed mb-6 max-w-[250px]" style="color:rgba(255,255,255,.45)">
                    Your trusted source for expert reviews and comparisons across finance, insurance, banking, and credit cards.
                </p>

                {{-- Newsletter --}}
                <div class="flex gap-2">
                    <input type="email" placeholder="Your email"
                           class="flex-1 rounded-lg px-4 py-2.5 text-[13px] text-white outline-none min-w-0 transition-colors"
                           style="background:rgba(255,255,255,.07);border:1px solid rgba(255,255,255,.12);color:#fff"
                           onfocus="this.style.borderColor='rgba(129,140,248,.6)'"
                           onblur="this.style.borderColor='rgba(255,255,255,.12)'">
                    <button class="font-semibold text-[13px] px-4 py-2.5 rounded-lg transition-colors whitespace-nowrap"
                            style="background:#4f46e5;color:#fff"
                            onmouseover="this.style.background='#4338ca'"
                            onmouseout="this.style.background='#4f46e5'">
                        Subscribe
                    </button>
                </div>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div>
                    <h4 class="text-[11px] font-bold uppercase tracking-[.13em] mb-4" style="color:rgba(255,255,255,.9)">Insurance</h4>
                    <ul class="space-y-2.5">
                        <li><a href="{{ route('insurance.fundamentals.principles') }}"          class="text-[13px] transition-colors" style="color:rgba(255,255,255,.45)" onmouseover="this.style.color='#a5b4fc'" onmouseout="this.style.color='rgba(255,255,255,.45)'">Insurance Principles</a></li>
                        <li><a href="{{ route('insurance.fundamentals.risk-assessment') }}"     class="text-[13px] transition-colors" style="color:rgba(255,255,255,.45)" onmouseover="this.style.color='#a5b4fc'" onmouseout="this.style.color='rgba(255,255,255,.45)'">Risk Assessment Models</a></li>
                        <li><a href="{{ route('insurance.fundamentals.regulatory') }}"          class="text-[13px] transition-colors" style="color:rgba(255,255,255,.45)" onmouseover="this.style.color='#a5b4fc'" onmouseout="this.style.color='rgba(255,255,255,.45)'">Regulatory Framework</a></li>
                        <li><a href="{{ route('insurance.categories.life') }}"                  class="text-[13px] transition-colors" style="color:rgba(255,255,255,.45)" onmouseover="this.style.color='#a5b4fc'" onmouseout="this.style.color='rgba(255,255,255,.45)'">Life Insurance Analysis</a></li>
                        <li><a href="{{ route('insurance.categories.health') }}"                class="text-[13px] transition-colors" style="color:rgba(255,255,255,.45)" onmouseover="this.style.color='#a5b4fc'" onmouseout="this.style.color='rgba(255,255,255,.45)'">Health Insurance Systems</a></li>
                        <li><a href="{{ route('insurance.insights.trends') }}"                  class="text-[13px] transition-colors" style="color:rgba(255,255,255,.45)" onmouseover="this.style.color='#a5b4fc'" onmouseout="this.style.color='rgba(255,255,255,.45)'">Insurance Market Trends</a></li>
                        <li><a href="{{ route('insurance.insights.insurtech') }}"               class="text-[13px] transition-colors" style="color:rgba(255,255,255,.45)" onmouseover="this.style.color='#a5b4fc'" onmouseout="this.style.color='rgba(255,255,255,.45)'">InsurTech Innovations</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-[11px] font-bold uppercase tracking-[.13em] mb-4" style="color:rgba(255,255,255,.9)">Banking & Cards</h4>
                    <ul class="space-y-2.5">
                        <li><a href="{{ route('banking.structure-retail_commercial') }}"        class="text-[13px] transition-colors" style="color:rgba(255,255,255,.45)" onmouseover="this.style.color='#a5b4fc'" onmouseout="this.style.color='rgba(255,255,255,.45)'">Retail vs Commercial Banking</a></li>
                        <li><a href="{{ route('banking.structure-central_banking') }}"          class="text-[13px] transition-colors" style="color:rgba(255,255,255,.45)" onmouseover="this.style.color='#a5b4fc'" onmouseout="this.style.color='rgba(255,255,255,.45)'">Central Banking Systems</a></li>
                        <li><a href="{{ route('banking.structure-digital_evolution') }}"        class="text-[13px] transition-colors" style="color:rgba(255,255,255,.45)" onmouseover="this.style.color='#a5b4fc'" onmouseout="this.style.color='rgba(255,255,255,.45)'">Digital Banking Evolution</a></li>
                        <li><a href="{{ route('cards.mechanics-scoring') }}"                    class="text-[13px] transition-colors" style="color:rgba(255,255,255,.45)" onmouseover="this.style.color='#a5b4fc'" onmouseout="this.style.color='rgba(255,255,255,.45)'">Credit Scoring Models</a></li>
                        <li><a href="{{ route('cards.mechanics-apr') }}"                        class="text-[13px] transition-colors" style="color:rgba(255,255,255,.45)" onmouseover="this.style.color='#a5b4fc'" onmouseout="this.style.color='rgba(255,255,255,.45)'">APR & Interest Calculation</a></li>
                        <li><a href="{{ route('cards.mechanics-interchange') }}"                class="text-[13px] transition-colors" style="color:rgba(255,255,255,.45)" onmouseover="this.style.color='#a5b4fc'" onmouseout="this.style.color='rgba(255,255,255,.45)'">Interchange Fees</a></li>
                        <li><a href="{{ route('cards.mechanics-risk_based') }}"                 class="text-[13px] transition-colors" style="color:rgba(255,255,255,.45)" onmouseover="this.style.color='#a5b4fc'" onmouseout="this.style.color='rgba(255,255,255,.45)'">Risk-based Pricing</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-[11px] font-bold uppercase tracking-[.13em] mb-4" style="color:rgba(255,255,255,.9)">Mortgage & Financial</h4>
                    <ul class="space-y-2.5">
                        <li><a href="{{ route('mortgages.fundamentals.fixed_vs_variable') }}"  class="text-[13px] transition-colors" style="color:rgba(255,255,255,.45)" onmouseover="this.style.color='#a5b4fc'" onmouseout="this.style.color='rgba(255,255,255,.45)'">Fixed vs Variable Rate</a></li>
                        <li><a href="{{ route('mortgages.fundamentals.amortization_structure') }}" class="text-[13px] transition-colors" style="color:rgba(255,255,255,.45)" onmouseover="this.style.color='#a5b4fc'" onmouseout="this.style.color='rgba(255,255,255,.45)'">Amortization Structure</a></li>
                        <li><a href="{{ route('mortgages.fundamentals.underwriting') }}"       class="text-[13px] transition-colors" style="color:rgba(255,255,255,.45)" onmouseover="this.style.color='#a5b4fc'" onmouseout="this.style.color='rgba(255,255,255,.45)'">Mortgage Underwriting</a></li>
                        <li><a href="{{ route('finance.planning.budget') }}"                   class="text-[13px] transition-colors" style="color:rgba(255,255,255,.45)" onmouseover="this.style.color='#a5b4fc'" onmouseout="this.style.color='rgba(255,255,255,.45)'">Budget Systems</a></li>
                        <li><a href="{{ route('finance.planning.emergency_fund') }}"           class="text-[13px] transition-colors" style="color:rgba(255,255,255,.45)" onmouseover="this.style.color='#a5b4fc'" onmouseout="this.style.color='rgba(255,255,255,.45)'">Emergency Fund Modeling</a></li>
                        <li><a href="{{ route('finance.planning.retirement') }}"               class="text-[13px] transition-colors" style="color:rgba(255,255,255,.45)" onmouseover="this.style.color='#a5b4fc'" onmouseout="this.style.color='rgba(255,255,255,.45)'">Retirement Planning</a></li>
                        <li><a href="{{ route('finance.planning.tax') }}"                      class="text-[13px] transition-colors" style="color:rgba(255,255,255,.45)" onmouseover="this.style.color='#a5b4fc'" onmouseout="this.style.color='rgba(255,255,255,.45)'">Tax Planning Strategies</a></li>
                    </ul>
                </div>
                {{-- Company --}}
                <div>
                    <h4 class="text-[11px] font-bold uppercase tracking-[.13em] mb-4" style="color:rgba(255,255,255,.9)">Company</h4>
                    <ul class="space-y-2.5">
                        <li><a href="#" class="text-[13px] transition-colors" style="color:rgba(255,255,255,.45)" onmouseover="this.style.color='#a5b4fc'" onmouseout="this.style.color='rgba(255,255,255,.45)'">About Us</a></li>
                        <li><a href="#" class="text-[13px] transition-colors" style="color:rgba(255,255,255,.45)" onmouseover="this.style.color='#a5b4fc'" onmouseout="this.style.color='rgba(255,255,255,.45)'">Contact</a></li>
                        <li><a href="{{ route('search') }}" class="text-[13px] transition-colors" style="color:rgba(255,255,255,.45)" onmouseover="this.style.color='#a5b4fc'" onmouseout="this.style.color='rgba(255,255,255,.45)'">Search Reviews</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    {{-- Bottom bar --}}
    <div style="border-top:1px solid rgba(255,255,255,.08)">
        <div class="max-w-screen-xl mx-auto px-8 py-5 flex flex-col md:flex-row items-center justify-between gap-3">
            <p class="text-[12px]" style="color:rgba(255,255,255,.3)">© {{ date('Y') }} Express Fintech. All rights reserved. Expert reviews you can trust.</p>
            <div class="flex items-center gap-5">
                @foreach(['Terms of Service','Privacy Policy','Cookie Policy','Disclosure','Sitemap'] as $l)
                <a href="#" class="text-[12px] transition-colors" style="color:rgba(255,255,255,.3)"
                   onmouseover="this.style.color='rgba(165,180,252,.8)'" onmouseout="this.style.color='rgba(255,255,255,.3)'">{{ $l }}</a>
                @endforeach
            </div>
        </div>
    </div>

</footer>