<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TrackingController;
use App\Http\Controllers\LoanApplicationController;

// Trang chủ
Route::get('/', [HomeController::class, 'index'])->name('home');

// Static pages
Route::get('/get-started',    [PageController::class, 'getStarted'])->name('get-started');
Route::get('/consultation',   [PageController::class, 'consultation'])->name('consultation');
Route::get('/search',         [PageController::class, 'search'])->name('search');
Route::get('/reviews',        [PageController::class, 'reviews'])->name('reviews');

// Category pages
Route::get('/insurance',        [PageController::class, 'insurance'])->name('insurance');
Route::get('/banking',          [PageController::class, 'banking'])->name('banking');
Route::get('/credit-cards',     [PageController::class, 'creditCards'])->name('credit-cards');
Route::get('/mortgages',        [PageController::class, 'mortgages'])->name('mortgages');
Route::get('/personal-finance', [PageController::class, 'personalFinance'])->name('personal-finance');

// Article detail pages
Route::get('/articles/fed-rate-decision-2026',         [PageController::class, 'articleFedRate'])->name('article.fed-rate');
Route::get('/articles/emergency-fund-vs-savings-2026', [PageController::class, 'articleEmergencyFund'])->name('article.emergency-fund');
Route::get('/articles/home-insurance-premiums-2026',   [PageController::class, 'articleHomeInsurance'])->name('article.home-insurance');

// Insurance Fundamentals sub-pages
Route::get('/insurance/fundamentals/principles',          [PageController::class, 'insurancePrinciples'])->name('insurance.fundamentals.principles');
Route::get('/insurance/fundamentals/risk-assessment',     [PageController::class, 'insuranceRiskAssessment'])->name('insurance.fundamentals.risk-assessment');
Route::get('/insurance/fundamentals/underwriting',        [PageController::class, 'insuranceUnderwriting'])->name('insurance.fundamentals.underwriting');
Route::get('/insurance/fundamentals/premium-calculation', [PageController::class, 'insurancePremiumCalculation'])->name('insurance.fundamentals.premium-calculation');
Route::get('/insurance/fundamentals/regulatory',          [PageController::class, 'insuranceRegulatory'])->name('insurance.fundamentals.regulatory');

// Insurance Categories sub-pages
Route::get('/insurance/categories/life',         [PageController::class, 'insuranceCatLife'])->name('insurance.categories.life');
Route::get('/insurance/categories/health',       [PageController::class, 'insuranceCatHealth'])->name('insurance.categories.health');
Route::get('/insurance/categories/property',     [PageController::class, 'insuranceCatProperty'])->name('insurance.categories.property');
Route::get('/insurance/categories/auto',         [PageController::class, 'insuranceCatAuto'])->name('insurance.categories.auto');
Route::get('/insurance/categories/reinsurance',  [PageController::class, 'insuranceCatReinsurance'])->name('insurance.categories.reinsurance');

// Insurance Industry Insights
Route::get('/insurance/insights/market-trends',  [PageController::class, 'insuranceInsightsTrends'])->name('insurance.insights.trends');
Route::get('/insurance/insights/insurtech',      [PageController::class, 'insuranceInsightsTech'])->name('insurance.insights.insurtech');
Route::get('/insurance/insights/global-reports', [PageController::class, 'insuranceInsightsReports'])->name('insurance.insights.reports');

// Banking Structure
Route::get('/banking/structure/retail-vs-commercial', [PageController::class, 'bankingStructureRetailCommercial'])->name('banking.structure.retail-commercial');
Route::get('/banking/structure/central-banking',      [PageController::class, 'bankingStructureCentralBanking'])->name('banking.structure.central-banking');
Route::get('/banking/structure/digital-banking',      [PageController::class, 'bankingStructureDigitalBanking'])->name('banking.structure.digital-banking');
Route::get('/banking/structure/open-banking',         [PageController::class, 'bankingStructureOpenBanking'])->name('banking.structure.open-banking');

// Banking Products
Route::get('/banking/products/deposit-products',     [PageController::class, 'bankingProductsDeposit'])->name('banking.products.deposit');
Route::get('/banking/products/lending-framework',    [PageController::class, 'bankingProductsLending'])->name('banking.products.lending');
Route::get('/banking/products/corporate-banking',    [PageController::class, 'bankingProductsCorporate'])->name('banking.products.corporate');
Route::get('/banking/products/cross-border-payments',[PageController::class, 'bankingProductsCrossBorder'])->name('banking.products.cross-border');
Route::get('/banking/products/treasury-services',    [PageController::class, 'bankingProductsTreasury'])->name('banking.products.treasury');

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

// Credit Cards — Market & Regulation
Route::get('/credit-cards/market/network-comparison',    [PageController::class, 'cardsMarketComparison'])->name('cards.market-comparison');
Route::get('/credit-cards/market/consumer-protection',   [PageController::class, 'cardsMarketConsumer'])->name('cards.market-consumer');

// FORM
Route::get('/intake', [TrackingController::class, 'form'])->name('intake');
Route::post('/loan/apply', [LoanApplicationController::class, 'store'])->name('loan.apply');
