<?php

use App\Http\Controllers\AlamatController;
use App\Http\Controllers\AnakController;
use App\Http\Controllers\AuthAdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CatalogueController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PriaController;
use App\Http\Controllers\WanitaController;
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


Route::get('/', function () {
    return view('mainGuest');
})->middleware("guest");

// Contanct Start
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/guest-contact', function () {
    return view('contactGuest');
})->middleware('guest');
// End Contact

// About Start
Route::get('/about', function () {
    return view('about');
});

Route::get('/guest-about', function() {
    return view('aboutGuest');
})->middleware('guest');

// End about


Route::middleware(["auth"]) -> group(function() {

    Route::get('/afterLogin', function () {
        return view('mainAfter');
    });

    // Baju Wanita
    Route::get('/baju/woman', [WanitaController::class, "show"]);
    Route::get('/baju/woman/create', [WanitaController::class, "create_page"])->middleware("admin");
    Route::post('/baju/woman/create/store', [WanitaController::class, "create_store"]);
    Route::get('/baju/woman/{id}/update', [WanitaController::class, "update_page"])->middleware("admin");
    Route::put('/baju/woman/{id}/update/store', [WanitaController::class, "update_store"]);
    Route::get('/baju/woman/{id}/delete', [WanitaController::class, "destroy"])->middleware("admin");
    Route::get('/baju/woman/{id}/detail', [WanitaController::class, "detail_page"]);

    // Baju Anak
    Route::get('/baju/kids', [AnakController::class, "show"]);
    Route::get('/baju/kids/create', [AnakController::class, "create_page"])->middleware("admin");
    Route::post('/baju/kids/create/store', [AnakController::class, "create_store"]);
    Route::get('/baju/kids/{id}/update', [AnakController::class, "update_page"])->middleware("admin");
    Route::put('/baju/kids/{id}/update/store', [AnakController::class, "update_store"]);
    Route::get('/baju/kids/{id}/delete', [AnakController::class, "destroy_kids"])->middleware("admin");
    Route::get('/baju/kids/{id}/detail', [AnakController::class, "detail_page"]);

    // Baju Pria
    Route::get('/baju/mens', [PriaController::class, "show"]);
    Route::get('/baju/mens/create', [PriaController::class, "create_page"])->middleware("admin");
    Route::post('/baju/mens/create/store', [PriaController::class, "create_store"]);
    Route::get('/baju/mens/{id}/update', [PriaController::class, "update_page"])->middleware("admin");
    Route::put('/baju/mens/{id}/update/store', [PriaController::class, "update_store"]);
    Route::get('/baju/mens/{id}/delete', [PriaController::class, "destroy"])->middleware("admin");
    Route::get('/baju/mens/{id}/detail', [PriaController::class, "detail_page"]);

    // Profile
    Route::get('/account/profile', [AuthAdminController::class, "profile_page"]);
    Route::put('/account/profile/{id}/update/store', [AuthAdminController::class, "profileUpdate_store"]);
    Route::put('/account/profile/{id}/foto_profile/store', [AuthAdminController::class, "upload_image"]);
    Route::get('/account/profile/{image}/foto_profile/delete', [AuthAdminController::class, "destroy_picture"]);
    Route::get('/accounts/members', [AuthAdminController::class, "all_account"]);
    Route::get('/delete/{id}/member-account', [AuthAdminController::class, "delete_member"]);

    // Ubah password
    Route::get('/account/password/update', [AuthAdminController::class, "password_page"]);
    Route::put('/account/password/{id}/update/store', [AuthAdminController::class, "password_store"]);

    // Alamat
    // Route::get('/account/alamat', [AlamatController::class, "alamat_page"]);
    // Route::get('/account/address/add', [AlamatController::class, "create_page"]);
    // Route::post('/account/address/add/store', [AlamatController::class, "create_store"]);
    // Route::get('/account/address/{id}/delete', [AlamatController::class, "destroy_address"]);

    // Catalog
    Route::get('/catalogue', [CatalogueController::class, "showCatalog"]);

    // Cart
    Route::get('/cart', [CartController::class, "show"] );
    Route::put('/cart/{id}/add', [CartController::class, "add_cart"]);
    Route::put('/cart/update-item/{id}', [CartController::class, "update_cart"])->middleware("auth");
    Route::get('/cart/hapus-item/{id}', [CartController::class, "removeItem"]);
});



// Auth Regist
Route::get('/account/create', [AuthAdminController::class, "regist_page"])->middleware("guest");;
Route::post('/account/create/store-signUp', [AuthAdminController::class, "regist_store"]);

// Auth Login
Route::get('/account/login/buyer', [AuthAdminController::class, "login_page"])->name("login")->middleware("guest");
Route::post('/account/create/store-login', [AuthAdminController::class, "login_store"]);

// Auth Logout
Route::get('/account/logout', [AuthAdminController::class, "logout"]);

// Auth Delete
Route::get('/auth/{id}/delete-account', [AuthAdminController::class, 'delete_account']);

// Payment Checkout
Route::post('/checkout/payment/{id}', [CartController::class, "checkout"]);
Route::post('/checkout/payment/detail/{id}', [CartController::class, "checkout_byDetail"]);
Route::post('/checkout/payment/detail/{id}', [CartController::class, "checkout_byDetail"]);
Route::post('/checkout/payment/detail/{id}', [CartController::class, "checkout_byDetail"]);

// Hasil Pembayaran
// Route::get('/history/transaction', [PaymentController::class, "show_page"]);
Route::get('/history', [PaymentController::class, "show_page"]);
Route::get('/adminCheck', [PaymentController::class, "admin_check"]);
Route::put('/adminCheck/{id}/status-check', [PaymentController::class, "status_check"]);

Route::get('/profile2', function () {
    return view('admin.auth.profile2');
});
