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
}