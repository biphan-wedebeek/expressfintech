<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;

use App\Http\Controllers\LoanApplicationController;
use App\Http\Controllers\ClickTrackingController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\AdvertiserPostbackController;
// Trang chủ
Route::get('/', [HomeController::class, 'index'])->name('home');

// Static pages
Route::get('/contact',      [ContactController::class, 'index'])->name('contact');
Route::post('/contact',     [ContactController::class, 'store'])->name('contact.store');
Route::get('/search',         [PageController::class, 'search'])->name('search');

// Article detail pages
Route::get('/articles/fed-rate-decision',         [PageController::class, 'articleFedRate'])->name('article.fed-rate');
Route::get('/articles/emergency-fund-vs-savings', [PageController::class, 'articleEmergencyFund'])->name('article.emergency-fund');
Route::get('/articles/home-insurance-premiums',   [PageController::class, 'articleHomeInsurance'])->name('article.home-insurance');

// Insurance Fundamentals sub-pages
Route::get('/insurance/fundamentals/principles',          [PageController::class, 'insuranceFundamentalsPrinciples'])->name('insurance.fundamentals.principles');
Route::get('/insurance/fundamentals/risk-assessment',     [PageController::class, 'insuranceFundamentalsRiskAssessment'])->name('insurance.fundamentals.risk-assessment');
Route::get('/insurance/fundamentals/underwriting',        [PageController::class, 'insuranceFundamentalsUnderwriting'])->name('insurance.fundamentals.underwriting');
Route::get('/insurance/fundamentals/premium-calculation', [PageController::class, 'insuranceFundamentalsPremiumCalculation'])->name('insurance.fundamentals.premium-calculation');
Route::get('/insurance/fundamentals/regulatory',          [PageController::class, 'insuranceFundamentalsRegulatory'])->name('insurance.fundamentals.regulatory');

// Insurance Categories sub-pages
Route::get('/insurance/categories/life',         [PageController::class, 'insuranceCategoriesLifeAnalysis'])->name('insurance.categories.life');
Route::get('/insurance/categories/health',       [PageController::class, 'insuranceCategoriesHealthSystems'])->name('insurance.categories.health');
Route::get('/insurance/categories/property',     [PageController::class, 'insuranceCategoriesProperty'])->name('insurance.categories.property');
Route::get('/insurance/categories/auto',         [PageController::class, 'insuranceCategoriesAutoMarket'])->name('insurance.categories.auto');
Route::get('/insurance/categories/reinsurance',  [PageController::class, 'insuranceCategoriesReinsurance'])->name('insurance.categories.reinsurance');

// Insurance Industry Insights
Route::get('/insurance/insights/market-trends',  [PageController::class, 'insuranceInsightsMarketTrends'])->name('insurance.insights.trends');
Route::get('/insurance/insights/insurtech',      [PageController::class, 'insuranceInsightsInsurtech'])->name('insurance.insights.insurtech');
Route::get('/insurance/insights/global-reports', [PageController::class, 'insuranceInsightsGlobalReports'])->name('insurance.insights.reports');

// Banking Structure
Route::get('/banking/structure/retail-vs-commercial', [PageController::class, 'bankingStructureRetailCommercial'])->name('banking.structure-retail_commercial');
Route::get('/banking/structure/central-banking',      [PageController::class, 'bankingStructureCentralBanking'])->name('banking.structure-central_banking');
Route::get('/banking/structure/digital-evolution',      [PageController::class, 'bankingStructureDigitalEvolution'])->name('banking.structure-digital_evolution');
Route::get('/banking/structure/open-banking',         [PageController::class, 'bankingStructureOpenBanking'])->name('banking.structure-open_banking');

// Banking Products
Route::get('/banking/products/deposit-products',     [PageController::class, 'bankingProductsDepositAnalysis'])->name('banking.products-deposit_analysis');
Route::get('/banking/products/lending-framework',    [PageController::class, 'bankingProductsLendingFramework'])->name('banking.products-lending_framework');
Route::get('/banking/products/corporate-banking',    [PageController::class, 'bankingProductsCorporateServices'])->name('banking.products-corporate_services');
Route::get('/banking/products/cross-border-payments',[PageController::class, 'bankingProductsCrossBorderPayments'])->name('banking.products-crossborder_payments');
Route::get('/banking/products/treasury-services',    [PageController::class, 'bankingProductsTreasuryServices'])->name('banking.products-treasury_services');

// banking Analysis
Route::get('/banking/analysis/global-outlook',        [PageController::class, 'bankingAnalysisGlobalOutlook'])->name('banking.analysis-global_outlook');
Route::get('/banking/analysis/nim-capital',           [PageController::class, 'bankingAnalysisNimCapital'])->name('banking.analysis-nim_capital');
Route::get('/banking/analysis/profitability-metrics', [PageController::class, 'bankingAnalysisProfitabilityMetrics'])->name('banking.analysis-profitability_metrics');
Route::get('/banking/analysis/risk-liquidity',        [PageController::class, 'bankingAnalysisRiskLiquidity'])->name('banking.analysis-risk_liquidity');

// Credit Cards Mechanics
Route::get('/credit-cards/mechanics/credit-scoring',     [PageController::class, 'cardsMechanicsScoring'])->name('cards.mechanics-scoring');
Route::get('/credit-cards/mechanics/apr-interest',       [PageController::class, 'cardsMechanicsApr'])->name('cards.mechanics-apr');
Route::get('/credit-cards/mechanics/interchange-fees',   [PageController::class, 'cardsMechanicsInterchange'])->name('cards.mechanics-interchange');
Route::get('/credit-cards/mechanics/credit-limits',      [PageController::class, 'cardsMechanicsCredit'])->name('cards.mechanics-credit');
Route::get('/credit-cards/mechanics/risk-based-pricing', [PageController::class, 'cardsMechanicsRiskBased'])->name('cards.mechanics-risk_based');

// Credit Cards Strategy
Route::get('/credit-cards/strategy/reward-programs',         [PageController::class, 'cardsStrategyReward'])->name('cards.strategy-reward');
Route::get('/credit-cards/strategy/cashback-vs-points',      [PageController::class, 'cardsStrategyCashback'])->name('cards.strategy-cashback');
Route::get('/credit-cards/strategy/balance-transfer',        [PageController::class, 'cardsStrategyAnalysis'])->name('cards.strategy-analysis');
Route::get('/credit-cards/strategy/credit-utilization',      [PageController::class, 'cardsStrategyStrategy'])->name('cards.strategy-strategy');
Route::get('/credit-cards/strategy/card-churning',           [PageController::class, 'cardsStrategyTactics'])->name('cards.strategy-tactics');

// Credit Cards Market & Regulation
Route::get('/credit-cards/market/network-comparison',    [PageController::class, 'cardsMarketComparison'])->name('cards.market-comparison');
Route::get('/credit-cards/market/consumer-protection',   [PageController::class, 'cardsMarketConsumer'])->name('cards.market-consumer');
Route::get('/credit-cards/market/free-fico-score',       [PageController::class, 'cardsMarketExperianFico'])->name('cards.market-experian_fico');

// Mortgages Fundamentals
Route::get('/mortgages/fundamentals/fixed-vs-variable',     [PageController::class, 'mortgagesFundamentalsFixedVsVariable'])->name('mortgages.fundamentals.fixed_vs_variable');
Route::get('/mortgages/fundamentals/amortization',          [PageController::class, 'mortgagesFundamentalsAmortizationStructure'])->name('mortgages.fundamentals.amortization_structure');
Route::get('/mortgages/fundamentals/underwriting',          [PageController::class, 'mortgagesFundamentalsUnderwriting'])->name('mortgages.fundamentals.underwriting');
Route::get('/mortgages/fundamentals/loan-to-value',         [PageController::class, 'mortgagesFundamentalsRatio'])->name('mortgages.fundamentals.ratio');
Route::get('/mortgages/fundamentals/interest-rate-mechanics',[PageController::class, 'mortgagesFundamentalsInterestRate'])->name('mortgages.fundamentals.interest_rate');
 
// Mortgages Products
Route::get('/mortgages/products/conventional-loans',    [PageController::class, 'mortgagesProductsConventional'])->name('mortgages.products.conventional');
Route::get('/mortgages/products/fha-va-loans',          [PageController::class, 'mortgagesProductsFhaVa'])->name('mortgages.products.fha_va');
Route::get('/mortgages/products/jumbo-loans',           [PageController::class, 'mortgagesProductsJumbo'])->name('mortgages.products.jumbo');
Route::get('/mortgages/products/refinance-strategies',  [PageController::class, 'mortgagesProductsRefinance'])->name('mortgages.products.refinance');
Route::get('/mortgages/products/adjustable-rate',       [PageController::class, 'mortgagesProductsAdjustableRate'])->name('mortgages.products.adjustable_rate');
 
// Mortgages Market Analysis
Route::get('/mortgages/analysis/housing-price-trends',     [PageController::class, 'mortgagesAnalysisPriceTrends'])->name('mortgages.analysis.price_trends');
Route::get('/mortgages/analysis/mortgage-backed-securities',[PageController::class, 'mortgagesAnalysisSecurities'])->name('mortgages.analysis.securities');
Route::get('/mortgages/analysis/rate-forecasting',         [PageController::class, 'mortgagesAnalysisForecasting'])->name('mortgages.analysis.forecasting');
Route::get('/mortgages/analysis/real-estate-cycles',       [PageController::class, 'mortgagesAnalysisEstateCycles'])->name('mortgages.analysis.estate_cycles');
Route::get('/mortgages/analysis/regulatory-impact',        [PageController::class, 'mortgagesAnalysisRegulatory'])->name('mortgages.analysis.regulatory');

// Financial Planning
Route::get('/finance/planning/budget-systems',    [PageController::class, 'financePlanningBudget'])->name('finance.planning.budget');
Route::get('/finance/planning/emergency-fund',    [PageController::class, 'financePlanningEmergencyFund'])->name('finance.planning.emergency_fund');
Route::get('/finance/planning/retirement',        [PageController::class, 'financePlanningRetirement'])->name('finance.planning.retirement');
Route::get('/finance/planning/tax-strategies',    [PageController::class, 'financePlanningTax'])->name('finance.planning.tax');
Route::get('/finance/planning/net-worth',         [PageController::class, 'financePlanningNetWorth'])->name('finance.planning.net_worth');
Route::get('/planning/aarp-membership',           [PageController::class, 'financePlanningAarpMembership'])->name('finance.planning.aarp_membership');

// Financial Wealth Building
Route::get('/finance/building/passive-income',      [PageController::class, 'financeBuildingPassiveIncome'])->name('finance.building.passive_income');
Route::get('/finance/building/long-term-compounding',[PageController::class, 'financeBuildingLongTerm'])->name('finance.building.long_term');
Route::get('/finance/building/debt-optimization',   [PageController::class, 'financeBuildingDebt'])->name('finance.building.debt');
Route::get('/finance/building/financial-independence',[PageController::class, 'financeBuildingIndependence'])->name('finance.building.independence');
Route::get('/finance/building/income-diversification',[PageController::class, 'financeBuildingDiversification'])->name('finance.building.diversification');
 
// Financial Behavior
Route::get('/finance/behavior/psychology-of-money',[PageController::class, 'financeBehaviorPsychology'])->name('finance.behavior.psychology');
Route::get('/finance/behavior/spending-patterns',  [PageController::class, 'financeBehaviorSpending'])->name('finance.behavior.spending');
Route::get('/finance/behavior/risk-tolerance',     [PageController::class, 'financeBehaviorRiskTolerance'])->name('finance.behavior.risk_tolerance');
Route::get('/finance/behavior/decision-bias',      [PageController::class, 'financeBehaviorDecisionBias'])->name('finance.behavior.decision_bias');
Route::get('/finance/behavior/consumer-trends',    [PageController::class, 'financeBehaviorConsumerTrends'])->name('finance.behavior.consumer_trends');
// FORM

// Offers
Route::get('/offers', [OfferController::class, 'index'])->name('offers.index');
Route::get('/click', [ClickTrackingController::class, 'handle'])->name('offer.click');
Route::get('/postback/banner/{network}', [AdvertiserPostbackController::class, 'handle'])->name('advertiser.postback');

Route::post('/admin/mark-contacts-read', function () { \App\Models\FintechContact::where('status', 'new')->update(['status' => 'read']); return response()->json(['ok' => true]); })->middleware(['web', 'auth']);
