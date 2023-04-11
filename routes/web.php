<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\admin\CartController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\pages\NewsController;
use App\Http\Controllers\pages\PlanController;
use App\Http\Controllers\pages\ShopController;
use App\Http\Controllers\admin\EventController;
use App\Http\Controllers\admin\OrderController;
use App\Http\Controllers\admin\AddBlogController;
use App\Http\Controllers\admin\AddNewsController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\ServiceController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\pages\AboutUsController;
use App\Http\Controllers\pages\ContactController;
use App\Http\Controllers\pages\ProfileController;
use App\Http\Controllers\admin\AddEventController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\viewBlogController;
use App\Http\Controllers\payment\StripeController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\viewEventController;
use App\Http\Controllers\admin\AddProductController;
use App\Http\Controllers\payment\PaystackController;
use App\Http\Controllers\admin\AddCategoryController;
use App\Http\Controllers\admin\AddServicesController;
use App\Http\Controllers\admin\TeamMembersController;
use App\Http\Controllers\admin\TransactionController;
use App\Http\Controllers\admin\viewProductController;
use App\Http\Controllers\pages\PlanDetailsController;
use App\Http\Controllers\pages\EventDetailsController;
use App\Http\Controllers\pages\viewBlogpostController;
use App\Http\Controllers\admin\AddTeamMembersController;
use App\Http\Controllers\pages\BlogController as PageBlog;
use App\Http\Controllers\admin\LoginController as AdminLogin;
use App\Http\Controllers\pages\ServicesController as PageService;
use App\Http\Controllers\admin\NewsController as AdminNewsController;
use App\Http\Controllers\admin\viewNewsController;
use App\Http\Controllers\pages\CartController as PagesCartController;
use App\Http\Controllers\pages\EventController as mainEventController;
use App\Http\Controllers\pages\NewsDetailController;
use App\Http\Controllers\pages\viewProductController as PagesViewProductController;
use App\Http\Controllers\payment\PaypalController;
use App\Http\Controllers\profile\AddressController;
use App\Http\Controllers\profile\CallController;
use App\Http\Controllers\profile\EditProfileController;
use App\Http\Controllers\profile\ProfileProductController;
use App\Http\Controllers\profile\WishlistController;

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
    return view('welcome');
});

Route::get('check', function () {
    return view('check');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'login']);

Route::get('register', [RegisterController::class, 'index'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

Route::get('events', [mainEventController::class, 'index'])->name('event');
Route::get('events/detail', [EventDetailsController::class, 'index']);

Route::get('shop', [ShopController::class, 'index'])->name('shop');
Route::get('shop/{product}', [PagesViewProductController::class, 'index'])->name('product-details');

Route::get('blogs', [PageBlog::class, 'index'])->name('blog');
Route::get('blogs/{blog}', [viewBlogpostController::class, 'index'])->name('viewBlog');

Route::get('services', [PageService::class, 'index']);

Route::get('about-us', [AboutUsController::class, 'index'])->name('about');

Route::get('contact-us', [ContactController::class, 'index'])->name('contact');

Route::post('cart/{product}', [PagesCartController::class, 'store'])->name('cart');
Route::delete('cart/{product}', [PagesCartController::class, 'destroy'])->name('cart');

Route::get('profile', [ProfileController::class, 'index'])->name('profile');
Route::post('profile', [ProfileController::class, 'store'])->middleware('has_store');

Route::get('edit-profile', [EditProfileController::class, 'index'])->name('edit-profile');
Route::post('edit-profile', [EditProfileController::class, 'store']);

Route::get('/pay', [StripeController::class, 'index'])->name('pay');
Route::post('checkout', [StripeController::class, 'checkout'])->name('checkout');
Route::get('/success', [StripeController::class, 'success'])->name('success');

Route::get('paystack/{plan}',[PaystackController::class, 'index'])->name('paystack');
Route::post('/pay-with-paystack', [PaystackController::class, 'redirectToGateway'])->name('pay-with-paystack');
Route::get('/payment/callback', [PaystackController::class, 'handleGatewayCallback']);

Route::get('newss', [NewsController::class, 'index'])->name('news');

Route::get('news/{news}',  [NewsDetailController::class, 'index'])->name('news-details');

Route::get('/plans', [PlanController::class, 'index'])->name('plans');

Route::get('plans/{plan}', [PlanDetailsController::class, 'index'])->name('plan-details');

Route::post('plans/{plan}', [PlanDetailsController::class, 'pay'])->name('proceed-payment');

Route::get('profile/edit-profile', [EditProfileController::class, 'index'])->name('edit-profile');

Route::get('profile/product', [ProfileProductController::class, 'index'])->name('manage-product');

Route::get('profile/address', [AddressController::class, 'index'])->name('edit-address');

Route::get('profile/call-request', [CallController::class, 'index'])->name('call-request');

Route::get('profile/wishlist', [WishlistController::class, 'index'])->name('wishlist');

Route::get('payment/pay-with-paypal', [PaypalController::class, 'index'])->name('pay-with-paypal');
Route::post('paypal', [PaypalController::class, 'pay'])->name('paypal');
Route::get('paypal-success', [PaypalController::class, 'success'])->name('paypal-success');
Route::get('paypal-error', [PaypalController::class, 'error'])->name('paypal-error');



// Admin Routes
Route::middleware(['is_admin'])->group(function(){
Route::get('admin/dashboard', [DashboardController::class, 'index'])->name('adminDashboard')->middleware('is_admin');

Route::get('admin/blog', [BlogController::class, 'index'])->name('adminBlog');
Route::delete('admin/blog/{blog}', [BlogController::class, 'destroy'])->name('adminBlogDelete');

Route::get('admin/add-blog-post', [AddBlogController::class, 'index'])->name('adminAddBlog');
Route::post('admin/add-blog-post', [AddBlogController::class, 'store']);
Route::get('admin/blog/{blog}', [viewBlogController::class, 'index'])->name('view-blog');
Route::put('admin/blog/{blog}', [viewBlogController::class, 'update']);

Route::get('admin/event', [EventController::class, 'index'])->name('adminEvent');
Route::delete('admin/event/{event}', [EventController::class, 'destroy'])->name('adminEventDelete');

Route::get('admin/add-event', [AddEventController::class, 'index'])->name('adminAddEvent');
Route::post('admin/add-event', [AddEventController::class, 'store']);
Route::get('admin/event/{event}', [viewEventController::class, 'index'])->name('view-event');
Route::put('admin/event/{event}', [viewEventController::class, 'update']);

Route::get('admin/services', [ServiceController::class, 'index'])->name('adminServices');

Route::get('admin/add-services', [AddServicesController::class, 'index'])->name('adminAddServices');

Route::get('admin/products', [ProductController::class, 'index'])->name('adminProduct');
Route::delete('admin/products/{product}', [ProductController::class, 'destroy'])->name('adminProductDelete');

Route::get('admin/add-product', [AddProductController::class, 'index'])->name('adminAddProduct');
Route::post('admin/add-product', [AddProductController::class, 'store']);
Route::get('admin/product/{product}', [viewProductController::class, 'index'])->name('view-product');
Route::put('admin/product/{product}', [viewProductController::class, 'update']);

Route::get('admin/orders', [OrderController::class, 'index'])->name('adminOrders');

Route::get('admin/carts', [CartController::class, 'index'])->name('adminCarts');
Route::delete('admin/carts/{cart}', [CartController::class, 'destroy'])->name('adminCartDelete');

Route::get('admin/transactions', [TransactionController::class, 'index'])->name('adminTransactions');

Route::get('admin/team-members', [TeamMembersController::class, 'index'])->name('adminTeam');
Route::delete('admin/team-members/{user}', [TeamMembersController::class, 'destroy'])->name('adminMembersDelete');

Route::get('admin/add-team-members', [AddTeamMembersController::class, 'index'])->name('adminAddTeam');


Route::get('admin/users', [UserController::class, 'index'])->name('adminUsers');
Route::delete('admin/users/{user}', [UserController::class, 'destroy'])->name('adminUsersDelete');

Route::get('admin/category', [CategoryController::class, 'index'])->name('adminCategory');
Route::delete('admin/category/{category}', [CategoryController::class, 'destroy'])->name('deleteCategory');

Route::get('admin/add-category', [AddCategoryController::class, 'index'])->name('addCategory');
Route::post('admin/add-category', [AddCategoryController::class, 'store']);

Route::get('admin/news', [AdminNewsController::class, 'index'])->name('adminNews');
Route::delete('admin/news/{news}', [AdminNewsController::class, 'destroy'])->name('adminNewsDelete');

Route::get('admin/add-news', [AddNewsController::class, 'index'])->name('adminAddnews');
Route::post('admin/add-news', [AddNewsController::class, 'store']);

Route::get('admin/news/{news}', [viewNewsController::class, 'index'])->name('view-news');
Route::put('admin/news/{news}', [viewNewsController::class, 'update']);

});

Route::get('admin/login', [AdminLogin::class, 'index']);
Route::post('admin/login', [AdminLogin::class, 'login'])->name('adminLogin');


