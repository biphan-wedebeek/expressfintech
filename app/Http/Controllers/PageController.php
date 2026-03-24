<?php

namespace App\Http\Controllers;
use App\Services\BannerService;

class PageController extends Controller
{
    public function __construct(protected BannerService $bannerService) {}

    public function getStarted()     { return view('pages.get-started'); }
    public function consultation()   { return view('pages.consultation'); }
    public function search()         { return view('pages.search'); }
    public function reviews()        { return view('pages.reviews'); }
    public function insurance()      { return view('pages.insurance'); }
    public function banking()        { return view('pages.banking'); }
    public function creditCards()    { return view('pages.credit-cards'); }
    public function mortgages()      { return view('pages.mortgages'); }
    public function personalFinance(){ return view('pages.personal-finance'); }

    // Article detail pages
    public function articleFedRate()      { return view('pages.articles.fed-rate-decision'); }
    public function articleEmergencyFund(){ return view('pages.articles.emergency-fund-vs-savings'); }
    public function articleHomeInsurance(){ return view('pages.articles.home-insurance-premiums'); }

    // Insurance Fundamentals
    public function insuranceFundamentalsPrinciples()        { return view('pages.articles.insurance.fundamentals-principles'); }
    public function insuranceFundamentalsRiskAssessment()    { return view('pages.articles.insurance.fundamentals-risk_assessment'); }
    public function insuranceFundamentalsUnderwriting()      { return view('pages.articles.insurance.fundamentals-underwriting'); }
    public function insuranceFundamentalsPremiumCalculation(){ return view('pages.articles.insurance.fundamentals-premium_calculation'); }
    public function insuranceFundamentalsRegulatory()        { return view('pages.articles.insurance.fundamentals-regulatory'); }
    
    // Insurance Categories
    public function insuranceCategoriesLifeAnalysis()  { return view('pages.articles.insurance.categories-life_analysis'); }
    public function insuranceCategoriesHealthSystems()
    {
        return view('pages.articles.insurance.categories-health_systems', [
            'banners_bottom' => $this->bannerService->get('Insurance', 'Health Insurance Systems', 3),
        ]);
    }
    public function insuranceCategoriesProperty()      { return view('pages.articles.insurance.categories-property'); }
    public function insuranceCategoriesAutoMarket()    { return view('pages.articles.insurance.categories-auto_market'); }
    public function insuranceCategoriesReinsurance()   { return view('pages.articles.insurance.categories-reinsurance'); }

    // Insurance Industry Insights
    public function insuranceInsightsMarketTrends()  { return view('pages.articles.insurance.insights-market_trends'); }
    public function insuranceInsightsInsurtech()    { return view('pages.articles.insurance.insights-insurtech'); }
    public function insuranceInsightsGlobalReports() { return view('pages.articles.insurance.insights-global_reports'); }

    // Banking Structure
    public function bankingStructureRetailCommercial() { return view('pages.articles.banking.structure-retail_commercial'); }
    public function bankingStructureCentralBanking()   { return view('pages.articles.banking.structure-central_banking'); }
    public function bankingStructureDigitalEvolution()   { return view('pages.articles.banking.structure-digital_evolution'); }
    public function bankingStructureOpenBanking()      { return view('pages.articles.banking.structure-open_banking'); }

    // Banking Products
    public function bankingProductsDepositAnalysis()     { return view('pages.articles.banking.products-deposit_analysis'); }
    public function bankingProductsLendingFramework()    { return view('pages.articles.banking.products-lending_framework'); }
    public function bankingProductsCorporateServices()   { return view('pages.articles.banking.products-corporate_services'); }
    public function bankingProductsCrossBorderPayments() { return view('pages.articles.banking.products-crossborder_payments'); }
    public function bankingProductsTreasuryServices()    { return view('pages.articles.banking.products-treasury_services'); }

    // Backing Analysis
    public function bankingAnalysisGlobalOutlook()        {return view ('pages.articles.banking.analysis-global_outlook');}
    public function bankingAnalysisNimCapital()           {return view ('pages.articles.banking.analysis-nim_capital');}
    public function bankingAnalysisProfitabilityMetrics() {return view ('pages.articles.banking.analysis-profitability_metrics');}
    public function bankingAnalysisRiskLiquidity()        {return view ('pages.articles.banking.analysis-risk_liquidity');}

    // Credit Cards Mechanics
    public function cardsMechanicsScoring()   { return view('pages.articles.cards.mechanics-scoring'); }
    public function cardsMechanicsApr()       { return view('pages.articles.cards.mechanics-apr'); }
    public function cardsMechanicsInterchange(){ return view('pages.articles.cards.mechanics-interchange'); }
    public function cardsMechanicsCredit()    { return view('pages.articles.cards.mechanics-credit'); }
    public function cardsMechanicsRiskBased() { return view('pages.articles.cards.mechanics-risk_based'); }

    // Credit Cards Strategy
    public function cardsStrategyReward()    { return view('pages.articles.cards.strategy-reward'); }
    public function cardsStrategyCashback()  { return view('pages.articles.cards.strategy-cashback'); }
    public function cardsStrategyAnalysis()  { return view('pages.articles.cards.strategy-analysis'); }
    public function cardsStrategyStrategy()  { return view('pages.articles.cards.strategy-strategy'); }
    public function cardsStrategyTactics()   { return view('pages.articles.cards.strategy-tactics'); }

    // Credit Cards  Market & Regulation
    public function cardsMarketComparison()   {
         return view('pages.articles.cards.market-comparison',[
            'banners_right' => $this->bannerService->get('Credit Cards', 'Card Network Comparison', 2),
         ]); 
    }
    public function cardsMarketConsumer()     { return view('pages.articles.cards.market-consumer'); }
    public function cardsMarketExperianFico() { return view('pages.articles.cards.market-experian_fico'); }

    // Mortgages — Fundamentals
    public function mortgagesFundamentalsFixedVsVariable() { return view('pages.articles.mortgages.fundamentals-fixed_vs_variable'); }
    public function mortgagesFundamentalsAmortizationStructure()  { return view('pages.articles.mortgages.fundamentals-amortization_structure'); }
    public function mortgagesFundamentalsUnderwriting(){ return view('pages.articles.mortgages.fundamentals-underwriting'); }
    public function mortgagesFundamentalsRatio()       { return view('pages.articles.mortgages.fundamentals-ratio'); }
    public function mortgagesFundamentalsInterestRate(){ return view('pages.articles.mortgages.fundamentals-interest_rate'); }
 
    // Mortgages — Products
    public function mortgagesProductsConventional()   { return view('pages.articles.mortgages.products-conventional_loans'); }
    public function mortgagesProductsFhaVa()          { return view('pages.articles.mortgages.products-fha_va'); }
    public function mortgagesProductsJumbo()          { return view('pages.articles.mortgages.products-jumbo_loans'); }
    public function mortgagesProductsRefinance()      { return view('pages.articles.mortgages.products-refinance'); }
    public function mortgagesProductsAdjustableRate() { return view('pages.articles.mortgages.products-adjustable_rate'); }
 
    // Mortgages — Market Analysis
    public function mortgagesAnalysisPriceTrends() { return view('pages.articles.mortgages.analysis-price_trends'); }
    public function mortgagesAnalysisSecurities()  { return view('pages.articles.mortgages.analysis-securities'); }
    public function mortgagesAnalysisForecasting() { return view('pages.articles.mortgages.analysis-forecasting'); }
    public function mortgagesAnalysisEstateCycles(){ return view('pages.articles.mortgages.analysis-estate_cycles'); }
    public function mortgagesAnalysisRegulatory()  { return view('pages.articles.mortgages.analysis-regulatory'); }

    // Financial Planning
    public function financePlanningBudget()         { return view('pages.articles.finance.planning-budget'); }
    public function financePlanningEmergencyFund()  { return view('pages.articles.finance.planning-emergency_fund'); }
    public function financePlanningRetirement()     { return view('pages.articles.finance.planning-retirement'); }
    public function financePlanningTax()            { return view('pages.articles.finance.planning-tax'); }
    public function financePlanningNetWorth()       { return view('pages.articles.finance.planning-net_worth'); }
 
    // Financial Wealth Building
    public function financeBuildingPassiveIncome()    { return view('pages.articles.finance.building-passive_income'); }
    public function financeBuildingLongTerm()         { return view('pages.articles.finance.building-long_term'); }
    public function financeBuildingDebt()             { return view('pages.articles.finance.building-debt'); }
    public function financeBuildingIndependence()     { return view('pages.articles.finance.building-independence'); }
    public function financeBuildingDiversification()  { return view('pages.articles.finance.building-diversification'); }
 
    // Financial Behavior
    public function financeBehaviorPsychology()     { return view('pages.articles.finance.behavior-psychology'); }
    public function financeBehaviorSpending()       { return view('pages.articles.finance.behavior-spending'); }
    public function financeBehaviorRiskTolerance()  {
         return view('pages.articles.finance.behavior-risk_tolerance',[
            'banners_right' => $this->bannerService->get('Personal Finance', 'Risk Tolerance', 2),
         ]); 
    }
    public function financeBehaviorDecisionBias()   { return view('pages.articles.finance.behavior-decision_bias'); }
    public function financeBehaviorConsumerTrends() { return view('pages.articles.finance.behavior-consumer_trends'); }
}