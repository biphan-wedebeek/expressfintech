<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
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
    public function insuranceCategoriesHealthSystems() { return view('pages.articles.insurance.categories-health_systems'); }
    public function insuranceCategoriesProperty()      { return view('pages.articles.insurance.categories-property'); }
    public function insuranceCategoriesAutoMarket()    { return view('pages.articles.insurance.categories-auto_market'); }
    public function insuranceCategoriesReinsurance()   { return view('pages.articles.insurance.categories-reinsurance'); }

    // Insurance Industry Insights
    public function insuranceInsightsMarketTrends()  { return view('pages.articles.insurance.insights-market_trends'); }
    public function insuranceInsightsInsurtech()    { return view('pages.articles.insurance.insights-insurtech'); }
    public function insuranceInsightsGlobalReports() { return view('pages.articles.insurance.insights-global_reports'); }

    // Banking Structure
    public function bankingStructureRetailCommercial() { return view('pages.articles.banking.structure.retail-commercial'); }
    public function bankingStructureCentralBanking()   { return view('pages.articles.banking.structure.central-banking'); }
    public function bankingStructureDigitalBanking()   { return view('pages.articles.banking.structure.digital-banking'); }
    public function bankingStructureOpenBanking()      { return view('pages.articles.banking.structure.open-banking'); }

    // Banking Products
    public function bankingProductsDeposit()     { return view('pages.articles.banking.products.deposit-banking'); }
    public function bankingProductsLending()     { return view('pages.articles.banking.products.lending-banking'); }
    public function bankingProductsCorporate()   { return view('pages.articles.banking.products.corporate-banking'); }
    public function bankingProductsCrossBorder() { return view('pages.articles.banking.products.cross-banking'); }
    public function bankingProductsTreasury()    { return view('pages.articles.banking.products.treasury-banking'); }

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
    public function cardsMarketComparison() { return view('pages.articles.cards.market-comparison'); }
    public function cardsMarketConsumer()   { return view('pages.articles.cards.market-consumer'); }

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

}
