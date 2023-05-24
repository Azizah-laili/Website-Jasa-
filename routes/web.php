<?php

use App\Http\Controllers\cartdomainController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\logoController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\domainController;
use App\Http\Controllers\durasiController;
use App\Http\Controllers\artikelController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\hostingController;
use App\Http\Controllers\Landingcontroller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\websiteController;
use App\Http\Controllers\PayementController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\cartdesignController;
use App\Http\Controllers\adminsosmedController;
use App\Http\Controllers\carthostingController;
use App\Http\Controllers\cartwebsiteController;
use App\Http\Controllers\certificateController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\designsosmedController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
*/

Route::resource('/', Landingcontroller::class);
Route::get('/jasadomain', [LandingController::class, 'home_index_domain'])->name('domain.landing');
Route::get('/jasahosting', [LandingController::class, 'home_index_hosting'])->name('hosting.landing');
Route::get('/jasawebsite', [LandingController::class, 'home_index_website'])->name('website.landing');
Route::get('/jasalogo', [LandingController::class, 'home_index_logo'])->name('logo.landing');
Route::get('/jasacertificate', [LandingController::class, 'home_index_certificate'])->name('certificate.landing');
Route::get('/jasaadmin', [LandingController::class, 'home_index_admin'])->name('admin.landing');
Route::get('/jasadesign', [LandingController::class, 'home_index_design'])->name('design.landing');
Route::get('/semuaartikel', [LandingController::class, 'home_index_artikel'])->name('semuaartikel.landing');
Route::get('/aboutUs', [LandingController::class, 'home_index_aboutUs'])->name('aboutUs.landing');
Route::get('/semuaartikel/artikel/{artikel}/konten', [artikelController::class, 'section_artikel'])->name('section_artikel');

/* CONTACT CRUD AREA LANDING*/
Route::get('/contact/', [contactController::class, 'create_contact'])->name('contact.landing');//1 tampilkan satu web
Route::post('/contact/create', [contactController::class, 'store_contact'])->name('store_contact');//1 simpan web


//AUTH PEMBELI
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //CARTDESIGN
    Route::get('/cartdesign/{cartdesign}/edit', [cartdesignController::class, 'edit_cartdesign'])->name('edit_cartdesign');
    Route::patch('/cartdesign/{cartdesign}/update', [cartdesignController::class, 'update_cartdesign'])->name('update_cartdesign');
    Route::delete('/allcart/{cartdesign}', [cartdesignController::class, 'delete_cartdesign'])->name('delete_cartdesign'); 
    //AREA CART LOGO
    Route::get('/allcart', [cartwebsiteController::class, 'all_cart'])->name('all_cart');
    Route::get('/jasalogo/cart/{logo}', [cartdesignController::class, 'show_logo'])->name('cart_logo.landing');
    Route::post('/jasalogo/cart/{logo}', [cartdesignController::class, 'add_to_logocart'])->name('add_to_logocart');
    //AREA CART CERTIFICATE
    Route::get('/jasacertificate/cart/{certificate}', [cartdesignController::class, 'show_certificate'])->name('cart_certificate.landing');
    Route::post('/jasacertificate/cart/{certificate}', [cartdesignController::class, 'add_to_certificatecart'])->name('add_to_certificatecart');
    //AREA CART HOSTING
    Route::get('/jasahosting/cart/{hosting}', [carthostingController::class, 'show_hosting'])->name('cart_hosting.landing');
    Route::post('/jasahosting/cart/{hosting}', [carthostingController::class, 'add_to_carthosting'])->name('add_to_carthosting');
    Route::get('/carthosting/{carthosting}/edit', [carthostingController::class, 'edit_carthosting'])->name('edit_carthosting');
    Route::patch('/carthosting/{carthosting}/update', [carthostingController::class, 'update_carthosting'])->name('update_carthosting');
    Route::delete('/allcartdestroy/{carthosting}', [carthostingController::class, 'delete_carthosting'])->name('delete_carthosting');
    //AREA CART DOMAIN
    Route::get('/jasadomain/cart/{domain}', [cartdomainController::class, 'show_domain'])->name('cart_domain.landing');
    Route::post('/jasadomain/cart/{domain}', [cartdomainController::class, 'add_to_domaincart'])->name('add_to_domaincart');
    //AREA CART WEBSITE 
    Route::get('/jasawebsite/cart/{website}', [cartwebsiteController::class, 'show_website'])->name('cart_website.landing');
    Route::get('/cartwebsite/{cartwebsite}/edit', [cartwebsiteController::class, 'edit_cartwebsite'])->name('edit_cartwebsite');
    Route::patch('/cartwebsite/{cartwebsite}/update', [cartwebsiteController::class, 'update_cartwebsite'])->name('update_cartwebsite');
    Route::delete('/allcartdestroy/{cartwebsite}', [cartwebsiteController::class, 'delete_cartwebsite'])->name('delete_cartwebsite');
    Route::post('/jasawebsite/cart/{website}', [cartwebsiteController::class, 'add_to_cart'])->name('add_to_cart');
});

//ADMIN AREA
Route::middleware(['admin'])->group(function(){
/* ARTIKEL CRUD AREA ADMIN*/
Route::get('/admin/artikel/create', [artikelController::class, 'create_artikel'])->name('create_artikel');//1 tampilkan satu web
Route::post('/admin/artikel/create', [artikelController::class, 'store_artikel'])->name('store_artikel');//1 simpan web
Route::get('/admin/artikel', [artikelController::class, 'index_artikel'])->name('index_artikel');//2 tampilkan semua web
Route::get('/admin/artikel/{artikel}/edit', [artikelController::class, 'edit_artikel'])->name('edit_artikel');//3 tampilkan satu web
Route::patch('/admin/artikel/{artikel}/update', [artikelController::class, 'update_artikel'])->name('update_artikel');//3 update web
Route::delete('/admin/artikel/{artikel}', [artikelController::class, 'delete_artikel'])->name('delete_artikel');//hapus web

/* CONTACT CRUD AREA ADMIN*/
Route::get('/admin/allcontact', [contactController::class, 'index_contact'])->name('index_contact');//2 tampilkan semua web
Route::get('/admin/contact/{contact}/message', [contactController::class, 'edit_contact'])->name('edit_contact');//3 tampilkan satu web
Route::delete('/admin/contact/{contact}', [contactController::class, 'delete_contact'])->name('delete_contact');//hapus web

/* DOMAIN CRUD AREA ADMIN*/
Route::get('/admin/domain/create', [domainController::class, 'create_domain'])->name('create_domain');//1 tampilkan satu web
Route::post('/admin/domain/create', [domainController::class, 'store_domain'])->name('store_domain');//1 simpan web
Route::get('/admin/domain', [domainController::class, 'index_domain'])->name('index_domain');//2 tampilkan semua web
Route::get('/admin/domain/{domain}/edit', [domainController::class, 'edit_domain'])->name('edit_domain');//3 tampilkan satu web
Route::patch('/admin/domain/{domain}/update', [domainController::class, 'update_domain'])->name('update_domain');//3 update web
Route::delete('/admin/domain/{domain}', [domainController::class, 'delete_domain'])->name('delete_domain');//hapus web

/* HOSTING CRUD AREA ADMIN*/
Route::get('/admin/hosting/create', [hostingController::class, 'create_hosting'])->name('create_hosting');//1 tampilkan satu web
Route::post('/admin/hosting/create', [hostingController::class, 'store_hosting'])->name('store_hosting');//1 simpan web
Route::get('/admin/hosting', [hostingController::class, 'index_hosting'])->name('index_hosting');//2 tampilkan semua web
Route::get('/admin/hosting/{hosting}/edit', [hostingController::class, 'edit_hosting'])->name('edit_hosting');//3 tampilkan satu web
Route::patch('/admin/hosting/{hosting}/update', [hostingController::class, 'update_hosting'])->name('update_hosting');//3 update web
Route::delete('/admin/hosting/{hosting}', [hostingController::class, 'delete_hosting'])->name('delete_hosting');//hapus web

/* DESAIN SOSMED CRUD AREA ADMIN ADMIN*/
Route::get('/admin/design/create', [designsosmedController::class, 'create_design'])->name('create_design');//1 tampilkan satu web
Route::post('/admin/design/create', [designsosmedController::class, 'store_design'])->name('store_design');//1 simpan web */
Route::get('/admin/design', [designsosmedController::class, 'index_design'])->name('index_design');//2 tampilkan semua web
Route::get('/admin/design/{design_sosmed}/edit', [designsosmedController::class, 'edit_design'])->name('edit_design');//3 tampilkan satu web
Route::patch('/admin/design/{design_sosmed}/update', [designsosmedController::class, 'update_design'])->name('update_design');//3 update web
Route::delete('/admin/design/{design_sosmed}', [designsosmedController::class, 'delete_design'])->name('delete_design');//hapus web

/*ADMIN SOSMED CRUD AREA ADMIN*/
Route::get('/admin/admin/create', [adminsosmedController::class, 'create_admin'])->name('create_admin');//1 tampilkan satu web
Route::post('/admin/admin/create', [adminsosmedController::class, 'store_admin'])->name('store_admin');//1 simpan web */
Route::get('/admin/admin', [adminsosmedController::class, 'index_admin'])->name('index_admin');//2 tampilkan semua web
Route::get('/admin/admin/{admin_sosmed}/edit', [adminsosmedController::class, 'edit_admin'])->name('edit_admin');//3 tampilkan satu web
Route::patch('/admin/admin/{admin_sosmed}/update', [adminsosmedController::class, 'update_admin'])->name('update_admin');//3 update web
Route::delete('/admin/admin/{admin_sosmed}', [adminsosmedController::class, 'delete_admin'])->name('delete_admin');//hapus web

/* CERTIFICATE CRUD AREA ADMIN*/
Route::get('/admin/certificate/create', [certificateController::class, 'create_certificate'])->name('create_certificate');//1 tampilkan satu web
Route::post('/admin/certificate/create', [certificateController::class, 'store_certificate'])->name('store_certificate');//1 simpan web */
Route::get('/admin/certificate', [certificateController::class, 'index_certificate'])->name('index_certificate');//2 tampilkan semua web
Route::get('/admin/certificate/{certificate}/edit', [certificateController::class, 'edit_certificate'])->name('edit_certificate');//3 tampilkan satu web
Route::patch('/admin/certificate/{certificate}/update', [certificateController::class, 'update_certificate'])->name('update_certificate');//3 update web
Route::delete('/admin/certificate/{certificate}', [certificateController::class, 'delete_certificate'])->name('delete_certificate');//hapus web

/* LOGO CRUD AREA ADMIN*/
Route::get('/admin/logo/create', [logoController::class, 'create_logo'])->name('create_logo');//1 tampilkan satu web
Route::post('/admin/logo/create', [logoController::class, 'store_logo'])->name('store_logo');//1 simpan web */
Route::get('/admin/logo', [logoController::class, 'index_logo'])->name('index_logo');//2 tampilkan semua web
Route::get('/admin/logo/{logo}/edit', [logoController::class, 'edit_logo'])->name('edit_logo');//3 tampilkan satu web
Route::patch('/admin/logo/{logo}/update', [logoController::class, 'update_logo'])->name('update_logo');//3 update web
Route::delete('/admin/logo/{logo}', [logoController::class, 'delete_logo'])->name('delete_logo');//hapus web

/* WEBSITE CRUD AREA ADMIN  DONE*/
Route::get('/admin/website/create', [websiteController::class, 'create_website'])->name('create_website');//1 tampilkan satu web
Route::post('/admin/website/create', [websiteController::class, 'store_website'])->name('store_website');//1 simpan web
Route::get('/admin/website', [websiteController::class, 'index_website'])->name('index_website');//2 tampilkan semua web
Route::get('/admin/website/{website}/edit', [websiteController::class, 'edit_website'])->name('edit_website');//3 tampilkan satu web
Route::patch('/admin/website/{website}/update', [websiteController::class, 'update_website'])->name('update_website');//3 update web
Route::delete('/admin/website/{website}', [websiteController::class, 'delete_website'])->name('delete_website');//hapus web

/* DOMAIN CRUD AREA ADMIN*/
Route::get('/admin/durasi/create', [durasiController::class, 'create_durasi'])->name('create_durasi');//1 tampilkan satu web
Route::post('/admin/durasi/create', [durasiController::class, 'store_durasi'])->name('store_durasi');//1 simpan web
Route::get('/admin/durasi', [durasiController::class, 'index_durasi'])->name('index_durasi');//2 tampilkan semua web
Route::get('/admin/durasi/{durasi_hosting}/edit', [durasiController::class, 'edit_durasi'])->name('edit_durasi');//3 tampilkan satu web
Route::patch('/admin/durasi/{durasi_hosting}/update', [durasiController::class, 'update_durasi'])->name('update_durasi');//3 update web
Route::delete('/admin/durasi/{durasi_hosting}', [durasiController::class, 'delete_durasi'])->name('delete_durasi');//hapus web

//HALAMAN DASHBOARD
Route::get('/admin/dashboard', [dashboardController::class, 'index_dashboard'])->name('index_dashboard');//2 tampilkan semua web

/* 02 buat route conform  payment receipt end, lanjut ke view */
Route::get('/admin/transaction', [TransactionController::class, 'indextransaction'])->name('indextransaction');
Route::post('/admin/transaction/{transaction}/confirm', [TransactionController::class, 'confirm_payment'])->name('confirm_payment_receipt');


//JENIS PAYEMENT ADMIN
Route::get('/admin/payment', [PayementController::class, 'index_payement'])->name('index_payement');
Route::get('/admin/payment/create', [PayementController::class, 'create_payement'])->name('create_payement');
Route::post('/admin/payment/create', [PayementController::class, 'store_payement'])->name('store_payement');
Route::get('/admin/payment/{payement}/edit', [PayementController::class, 'edit_payement'])->name('edit_payement');
Route::patch('/admin/payment/{payement}/update', [PayementController::class, 'update_payement'])->name('update_payement');
Route::delete('/admin/payment/{payement}', [PayementController::class, 'delete_payement'])->name('delete_payement');

});



//AREA DONE ATAS





//TRANSAKSI AREA
Route::get('/checkout', [TransactionController::class, 'index_transaction'])->name('index_transaction');

//area CONFIRM done
Route::get('/cart/checkout/', [TransactionController::class, 'checkout'])->name('checkout');
Route::post('/cart/checkout/', [TransactionController::class, 'store_confirm'])->name('store_confirm');

Route::get('/jasawebsite/cart/{website}', [cartwebsiteController::class, 'show_website'])->name('cart_website.landing');


/* PAYEMENT AREA CRUD ADMIN*/










require __DIR__.'/auth.php';
