<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HoistingController;


Route::get('/', [HoistingController::class, 'index'])->name('home');
Route::get('email_hosting', [HoistingController::class, 'email_hosting'])->name('email_hosting');
Route::get('terms-condition', [HoistingController::class, 'terms'])->name('terms');
Route::get('shared-hosting', [HoistingController::class, 'sharedHosting'])->name('shared-hosting');
Route::get('privacy', [HoistingController::class, 'showPrivacy'])->name('privacy');
Route::get('domain-search-result', [HoistingController::class, 'showDomainSearchResultPage'])->name('showDomainResultPage');
Route::post('domain-search-result-interne', [HoistingController::class, 'completeDomainCheck'])->name('checkDomain');
Route::post('domain-search-result', [HoistingController::class, 'allDomainCheck'])->name('domain-search-result');
Route::get('domain-checker', [HoistingController::class, 'domainChecker'])->name('domain-checker');
Route::get('domain-transfer', [HoistingController::class, 'showDomainTransfer'])->name('domain-transfer');
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
Route::get('/cart', [CartController::class, 'showCart'])->name('cart');
Route::get('/cart/add/{id}', [CartController::class, 'add'])->name('cart.add');
Route::get('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
Route::get('/checkout', [CartController::class, 'checkout'])->name('checkout');

Route::get('showSpace', [CartController::class, 'showSpace'])->name('showSpace');


Route::post('domain-transfer-form', [HoistingController::class, 'domainTransfer'])->name('domain-transfer-form');
