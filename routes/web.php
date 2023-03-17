<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\admin\CartController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\admin\EventController;
use App\Http\Controllers\admin\OrderController;
use App\Http\Controllers\admin\AddBlogController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\ServiceController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\admin\AddEventController;
use App\Http\Controllers\admin\viewBlogController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\viewEventController;
use App\Http\Controllers\admin\AddProductController;
use App\Http\Controllers\admin\AddServicesController;
use App\Http\Controllers\admin\TeamMembersController;
use App\Http\Controllers\admin\TransactionController;
use App\Http\Controllers\admin\viewProductController;
use App\Http\Controllers\admin\AddTeamMembersController;
use App\Http\Controllers\admin\LoginController as AdminLogin;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'login']);

Route::get('register', [RegisterController::class, 'index'])->name('register');
Route::post('register', [RegisterController::class, 'register']);


// Admin Routes
Route::middleware(['is_admin'])->group(function(){
Route::get('admin/dashboard', [DashboardController::class, 'index'])->name('adminDashboard')->middleware('is_admin');

Route::get('admin/blog', [BlogController::class, 'index'])->name('adminBlog');
Route::delete('admin/blog/{blog}', [BlogController::class, 'destroy']);

Route::get('admin/add-blog-post', [AddBlogController::class, 'index'])->name('adminAddBlog');
Route::post('admin/add-blog-post', [AddBlogController::class, 'store']);
Route::get('admin/blog/{blog}', [viewBlogController::class, 'index'])->name('view-blog');
Route::put('admin/blog/{blog}', [viewBlogController::class, 'update']);

Route::get('admin/event', [EventController::class, 'index'])->name('adminEvent');

Route::get('admin/add-event', [AddEventController::class, 'index'])->name('adminAddEvent');
Route::post('admin/add-event', [AddEventController::class, 'store']);
Route::get('admin/event/{event}', [viewEventController::class, 'index'])->name('view-event');
Route::put('admin/event/{event}', [viewEventController::class, 'update']);

Route::get('admin/services', [ServiceController::class, 'index'])->name('adminServices');

Route::get('admin/add-services', [AddServicesController::class, 'index'])->name('adminAddServices');

Route::get('admin/products', [ProductController::class, 'index'])->name('adminProduct');

Route::get('admin/add-product', [AddProductController::class, 'index'])->name('adminAddProduct');
Route::post('admin/add-product', [AddProductController::class, 'store']);
Route::get('admin/product/{product}', [viewProductController::class, 'index'])->name('view-product');
Route::put('admin/product/{product}', [viewProductController::class, 'update']);

Route::get('admin/orders', [OrderController::class, 'index'])->name('adminOrders');

Route::get('admin/carts', [CartController::class, 'index'])->name('adminCarts');

Route::get('admin/transactions', [TransactionController::class, 'index'])->name('adminTransactions');

Route::get('admin/team-members', [TeamMembersController::class, 'index'])->name('adminTeam');

Route::get('admin/add-team-members', [AddTeamMembersController::class, 'index'])->name('adminAddTeam');

Route::get('admin/users', [UserController::class, 'index'])->name('adminUsers');

});

Route::get('admin/login', [AdminLogin::class, 'index']);
Route::post('admin/login', [AdminLogin::class, 'login'])->name('adminLogin');


