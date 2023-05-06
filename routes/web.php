<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/bitrefill', [App\Http\Controllers\HomeController::class, 'bitrefill'])->name('bitrefill');

/* Sites Pages */
Route::get('/', [App\Http\Controllers\GuestController::class, 'home'])->name('home');
Route::get('/products/{category}/liste', [App\Http\Controllers\GuestController::class, 'shop'])->name('shop');
Route::get('/product/details/{id}', [App\Http\Controllers\GuestController::class, 'productDetails'])->name('productDetails');
Route::get('/product/search', [App\Http\Controllers\GuestController::class, 'search'])->name('search');

/* Dashboard & Profile Client */
Route::get('/client/dashboard', [App\Http\Controllers\ClientController::class, 'dashboard'])->name('dashboard')->middleware('auth');
Route::get('/client/profile', [App\Http\Controllers\ClientController::class, 'profile'])->name('profile')->middleware('auth');
Route::POST('/client/profile/update', [App\Http\Controllers\ClientController::class, 'update_profile'])->name('update_profile')->middleware('auth');
Route::POST('/client/review/product', [App\Http\Controllers\ClientController::class, 'add_review'])->name('add_review')->middleware('auth');
Route::POST('/client/order/product', [App\Http\Controllers\CommandeController::class, 'store'])->name('store')->middleware('auth');
Route::get('/client/cart', [App\Http\Controllers\ClientController::class, 'cart'])->name('cart')->middleware('auth');
Route::get('/client/products/{idlc}/delete', [App\Http\Controllers\CommandeController::class, 'commande_delete'])->name('commande_delete')->middleware('auth');
Route::POST('/client/checkout', [App\Http\Controllers\ClientController::class, 'checkout'])->name('checkout')->middleware('auth');
Route::get('/client/commandes', [App\Http\Controllers\ClientController::class, 'mescommandes'])->name('mescommandes')->middleware('auth');
Route::POST('/logout', [App\Http\Controllers\Auth\LogoutController::class, 'logout'])->name('logout');

/* New Pages */
Route::get('/client/dashboard2', [App\Http\Controllers\ClientController::class, 'dashboard2'])->name('dashboard2')->middleware('auth');
Route::get('/client/commande', [App\Http\Controllers\ClientController::class, 'mescommandes2'])->name('mescommandes2')->middleware('auth');
Route::get('/client/calculator', [App\Http\Controllers\ClientController::class, 'calculator'])->name('calculator')->middleware('auth');
Route::get('/client/wallet', [App\Http\Controllers\ClientController::class, 'wallet'])->name('wallet')->middleware('auth');
Route::get('/client/deposit/create', [App\Http\Controllers\ClientController::class, 'deposit'])->name('deposit')->middleware('auth');
Route::get('/client/withdraw/create', [App\Http\Controllers\ClientController::class, 'withdraw'])->name('withdraw')->middleware('auth');
Route::get('/client/conversion/create', [App\Http\Controllers\ClientController::class, 'conversion'])->name('conversion')->middleware('auth');
Route::get('/client/support-ticket', [App\Http\Controllers\ClientController::class, 'ticket'])->name('ticket')->middleware('auth');
Route::get('/client/support-ticket/create', [App\Http\Controllers\ClientController::class, 'create'])->name('create')->middleware('auth');
Route::get('/client/news', [App\Http\Controllers\ClientController::class, 'news'])->name('news')->middleware('auth');

/* Dashboard & Profile Admin */
Route::get('/admin/dashboard', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('dashboard')->middleware('auth','admin');
Route::get('/admin/profile', [App\Http\Controllers\AdminController::class, 'profile'])->name('profile')->middleware('auth','admin'); //Afficher Page Profile Admin
Route::POST('/admin/profile/update', [App\Http\Controllers\AdminController::class, 'update_profile'])->name('update_profile')->middleware('auth','admin'); //Update Database Profile
Route::get('/admin/clients', [App\Http\Controllers\AdminController::class, 'liste'])->name('liste')->middleware('auth','admin');

/* Route Categories Admin */
Route::get('/admin/categories', [App\Http\Controllers\CategoryController::class, 'liste'])->name('liste')->middleware('auth','admin');
Route::POST('/admin/categories/add', [App\Http\Controllers\CategoryController::class, 'add_categorie'])->name('liste')->middleware('auth','admin');
Route::POST('/admin/categories/update', [App\Http\Controllers\CategoryController::class, 'update_categorie'])->name('liste')->middleware('auth','admin');
Route::get('/admin/categories/{id}/delete', [App\Http\Controllers\CategoryController::class, 'delete_categorie'])->name('liste')->middleware('auth','admin');

/* Route Products Admin */
Route::get('/admin/products', [App\Http\Controllers\ProductController::class, 'liste'])->name('liste')->middleware('auth','admin');
Route::POST('/admin/products/add', [App\Http\Controllers\ProductController::class, 'add_product'])->name('liste')->middleware('auth','admin');
Route::POST('/admin/products/update', [App\Http\Controllers\ProductController::class, 'update_product'])->name('liste')->middleware('auth','admin');
Route::get('/admin/products/{id}/delete', [App\Http\Controllers\ProductController::class, 'delete_product'])->name('liste')->middleware('auth','admin');

