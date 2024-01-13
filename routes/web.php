<?php

use App\Http\Controllers\AdminOrderController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DeshboardController;
use App\Http\Controllers\JourneyController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\MissionController;
use App\Http\Controllers\MyController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SliderController;
use Illuminate\Support\Facades\Route;

use Carbon\Carbon;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::controller(MyController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/store', 'store')->name('store');
    Route::get('/details/{id}', 'details')->name('details');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/about', 'about')->name('about');
    Route::get('/IFMH', 'IFMH')->name('IFMH');
    Route::post('/contact.save', 'ContactSave')->name('contact.save');
    Route::post('/subscribe', 'subscribe')->name('subscribe');
    Route::post('/test', 'test')->name('test');
});
Route::controller(CustomerController::class)->group(function () {
    Route::get('/customer-login', 'index')->name('customer.login');
    Route::post('/customer-access', 'login')->name('customer.access');
    Route::get('/customer-register', 'register')->name('customer.register');
    Route::post('/customer-save', 'save')->name('customer.save');
    Route::middleware('customer')->group(function () {
        Route::get('/customer-dashboard', 'dashboard')->name('customer.dashboard');
        Route::get('/customer-logout', 'logout')->name('customer.logout');
        Route::get('/customer-profile', 'profile')->name('customer.profile');
        Route::get('/customer-change-Password', 'changePassword')->name('customer.changePassword');
        Route::post('/customer-Password', 'change')->name('change.password');
        Route::get('/customer-order', 'order')->name('customer.order');
        Route::post('/customer-details', 'details')->name('customer.details');
        Route::get('/edit-profile', 'edit_profile')->name('edit.profile');
        Route::get('/customer-order', 'order')->name('customer.order');
        Route::post('/customer-details', 'details')->name('customer.details');
        Route::post('/customer-review', 'review')->name('customer.review');
    });
});

Route::controller(CartController::class)->group(function () {
    Route::post('/add-cart', 'index')->name('add.cart');
    Route::get('/remove-cart-product/{id}', 'remove')->name('remove.cart.product');
    Route::post('/uadate-cart-product', 'update')->name('uadate.cart.product');
    // Route::post('/test', 'test')->name('test');
});
Route::controller(CheckoutController::class)->group(function () {
    Route::get('/checkout', 'index')->name('checkout');
});
Route::controller(OrderController::class)->group(function () {
    Route::post('/order', 'index')->name('order');
});
Route::controller(CurrencyController::class)->group(function () {
    Route::post('/exchangeCurrency', 'exchangeCurrency')->name('exchangeCurrency');
});
Route::controller(SearchController::class)->group(function () {
    Route::post('/search', 'search')->name('search');
});
// Route::controller(ReviewController::class)->group(function () {
//     Route::post('/review', 'index')->name('review');
// });


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [DeshboardController::class, 'index'])->name('dashboard');
    Route::get('/admin.manage', [DeshboardController::class, 'adminManage'])->name('admin.manage');
    Route::get('/admin.add', [DeshboardController::class, 'adminAdd'])->name('admin.add');
    Route::post('/admin-register', [DeshboardController::class, 'adminRegister'])->name('admin.register');
    Route::post('/admin-delete', [DeshboardController::class, 'adminDelete'])->name('admin.delete');

    Route::controller(SliderController::class)->group(function () {
        Route::get('/add', 'add')->name('add');
        Route::post('/save', 'save')->name('save');
        Route::get('/manage', 'manage')->name('manage');
        Route::post('/edit', 'edit')->name('edit');
        Route::post('/delete', 'delete')->name('delete');
        // Route::get('/store', 'store')->save('store');
        // Route::get('/contact', 'contact')->name('contact');
        // Route::get('/about', 'about')->name('about');
    });
    Route::controller(MissionController::class)->group(function () {
        Route::get('/mission-add', 'add')->name('mission.add');
        Route::post('/mission-save', 'save')->name('mission.save');
        Route::get('/mission-manage', 'manage')->name('mission.manage');
        Route::post('/mission-edit', 'edit')->name('mission.edit');
        Route::post('/mission-delete', 'delete')->name('mission.delete');
        Route::post('/currency-save', 'currencyAdd')->name('currency.save');
        Route::get('/currency', 'currencymanage')->name('currency');
    });
    Route::controller(ProductController::class)->group(function () {
        Route::get('/add-product', 'add')->name('add.product');
        Route::post('/save-product', 'save')->name('product.save');
        Route::get('/manage-product', 'manage')->name('manage.product');
        Route::post('/edit-product', 'edit')->name('edit.product');
        Route::post('/delete-product', 'delete')->name('delete.product');
    });
    Route::controller(AdminOrderController::class)->group(function () {
        Route::get('/admin/order', 'index')->name('admin.order');
        Route::get('/admin/all-order', 'allOrder')->name('admin.all-order');
        Route::get('/admin/new-order', 'new')->name('admin.new-order');
        Route::get('/admin/processing-order', 'processing')->name('admin.processing-order');
        Route::get('/admin/cencel-order', 'cencel')->name('admin.cencel-order');
        Route::get('/admin/complete-order', 'complete')->name('admin.complete-order');
        Route::post('/admin/order-details', 'details')->name('admin.order-details');
        Route::post('/admin/order-edit', 'edit')->name('admin.order-edit');
        Route::post('/admin/order-update', 'update')->name('admin.order-update');
        Route::post('/admin/order-delete', 'deleteOrder')->name('admin.order-delete');
        Route::post('/admin/order-invoice', 'invoice')->name('admin.invoice');
        Route::post('/admin/print-invoice', 'printInvoice')->name('admin.print-invoice');
        Route::post('/admin/print-download', 'download')->name('admin.print-download');
    });

    Route::controller(JourneyController::class)->group(function () {
        Route::get('/journey', 'add')->name('journey');
        Route::post('/save-journey', 'save')->name('journey.save');
        Route::get('/manage-journey', 'manage')->name('manage.journey');
        Route::post('/edit-journey', 'edit')->name('edit.journey');
        Route::post('/delete-journey', 'delete')->name('delete.journey');
    });
    Route::controller(MediaController::class)->group(function () {
        Route::post('/media-save', 'save')->name('media.save');
        Route::get('/media-manage', 'manage')->name('media.manage');
        Route::post('/media-edit', 'edit')->name('media.edit');
    });
    Route::controller(ContactController::class)->group(function () {
        Route::get('/contact.view', 'view')->name('contact.view');
        Route::post('/contact.info', 'info')->name('contact.info');
        Route::post('/contact.delete', 'ContactDelete')->name('contact.delete');
        Route::get('/Subscribe-view', 'Subscribe')->name('Subscribe.view');
        Route::post('/Subscribe-delete', 'SubscribeDelete')->name('Subscribe.delete');
    });
});
