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
    public function insurancePrinciples()        { return view('pages.articles.insurance.fundamentals.principles'); }
    public function insuranceRiskAssessment()    { return view('pages.articles.insurance.fundamentals.risk-assessment'); }
    public function insuranceUnderwriting()      { return view('pages.articles.insurance.fundamentals.underwriting'); }
    public function insurancePremiumCalculation(){ return view('pages.articles.insurance.fundamentals.premium-calculation'); }
    public function insuranceRegulatory()        { return view('pages.articles.insurance.fundamentals.regulatory'); }
    
    // Insurance Categories
    public function insuranceCatLife()        { return view('pages.articles.insurance.categories.life'); }
    public function insuranceCatHealth()      { return view('pages.articles.insurance.categories.health'); }
    public function insuranceCatProperty()    { return view('pages.articles.insurance.categories.property'); }
    public function insuranceCatAuto()        { return view('pages.articles.insurance.categories.auto'); }
    public function insuranceCatReinsurance() { return view('pages.articles.insurance.categories.reinsurance'); }

    // Insurance Industry Insights
    public function insuranceInsightsTrends()  { return view('pages.articles.insurance.insights.market-trends'); }
    public function insuranceInsightsTech()    { return view('pages.articles.insurance.insights.insurtech'); }
    public function insuranceInsightsReports() { return view('pages.articles.insurance.insights.global-reports'); }

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

    // Credit Cards — Market & Regulation
    public function cardsMarketComparison() { return view('pages.articles.cards.market-comparison'); }
    public function cardsMarketConsumer()   { return view('pages.articles.cards.market-consumer'); }
}