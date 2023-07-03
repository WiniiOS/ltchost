<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HoistingController;
use App\Http\Controllers\ContactController;



Route::get('/', [HoistingController::class, 'index'])->name('home');
Route::get('email_hosting', [HoistingController::class, 'email_hosting'])->name('email_hosting');
Route::get('terms-condition', [HoistingController::class, 'terms'])->name('terms');

Route::post('sendmail', [ContactController::class, 'sendmail'])->name('sendmail');


Route::get('shared-hosting', [HoistingController::class, 'sharedHosting'])->name('shared-hosting');

Route::get('privacy', [HoistingController::class, 'showPrivacy'])->name('privacy');

Route::post('domain-search-result-interne', [HoistingController::class, 'completeDomainCheck'])->name('checkDomain');

Route::get('domain-search-result', [HoistingController::class, 'showDomainSearchResultPage'])->name('showDomainResultPage');
Route::post('domain-search-result', [HoistingController::class, 'allDomainCheck'])->name('domain-search-result');

Route::post('/check-domain-availability', [HoistingController::class, 'checkDomainAvailability'])->name('checking');

Route::get('domain-checker', [HoistingController::class, 'domainChecker'])->name('domain-checker');

Route::get('/domain-transfer/{domain?}', [HoistingController::class, 'showDomainTransfer'])->name('domain-transfer');

Route::get('domain-registration', [HoistingController::class, 'domainRegistration'])->name('domain-registration');
Route::get('pricing-comparaison', [HoistingController::class, 'showPricingComparison'])->name('pricing-comparaison');

Route::get('pricing-package', [HoistingController::class, 'showPricingPackage'])->name('pricing-package');
Route::get('pricing-specifications', [HoistingController::class, 'showPricingSpecifications'])->name('pricing-specifications');
Route::get('pricing-web-hosting', [HoistingController::class, 'showPricingWebHosting'])->name('pricing-web-hosting');
Route::get('contact', [HoistingController::class, 'showContact'])->name('contact');
Route::get('about', [HoistingController::class, 'showAbout'])->name('about');
Route::get('blog', [BlogController::class, 'index'])->name('blog');
Route::get('sign-up', [UserController::class, 'register'])->name('register');
Route::get('connexion', [UserController::class, 'connexion'])->name('connexion');
Route::post('sign-up', [UserController::class, 'save'])->name('save');
Route::post('authentify', [UserController::class, 'authentify'])->name('authentify');

Route::get('/checkout', [CartController::class, 'checkout'])->name('checkout');

/* Client Space */
Route::get('showSpace', [UserController::class, 'showSpace'])->name('showSpace');
Route::get('showSpacedns', [UserController::class, 'showSpacedns'])->name('showSpacedns');
Route::get('showSpacemdp', [UserController::class, 'showSpacedmdp'])->name('showSpacemdp');

// ROUTE POUR MODIFIER LE MOT DE PASSE
Route::post('changepass', [UserController::class, 'changePass'])->name('changepass');
Route::post('updateuser', [UserController::class, 'update'])->name('updateuser');


Route::get('user-profile', [HoistingController::class, 'showProfile'])->name('user-profile');

Route::post('domain-transfer-form', [HoistingController::class, 'domainTransfer'])->name('domain-transfer-form');

Route::get('logout', [UserController::class, 'logout'])->name('logout');

/* Cart Routes */
Route::get('panier/ajouter', [CartController::class, 'store'])->name('cart.store');
Route::get('panier', [CartController::class, 'index'])->name('panier');
Route::get('videpanier', function() {
    Cart::destroy();
});

Route::delete('panier/{rowId}', [CartController::class, 'destroy'])->name('cart.destroy');

/* Factures Routes */
Route::get('facture', [CartController::class, 'generatePDF'])->name('facture');

// tests
Route::get('mail', [CartController::class, 'sendMailFacture'])->name('mail');
Route::get('dns', [HoistingController::class, 'modifyNameServer'])->name('dns');

Route::post('modify_dns', [HoistingController::class, 'modifyNameServer'])->name('modify_dns');


// Panier
Route::get('panier', [CartController::class, 'index'])->name('panier');

Route::post('save-transaction', [CartController::class, 'saveTransaction']);

Route::get('notify_url', [HoistingController::class, 'show_alert'])->name('notify'); 


// test
Route::get('test', [UserController::class, 'changePassword'])->name('test');