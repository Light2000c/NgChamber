<?php

use App\Models\News;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\admin\CartController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\pages\NewsController;
use App\Http\Controllers\pages\PlanController;
use App\Http\Controllers\pages\ShopController;
use App\Http\Controllers\admin\EventController;
use App\Http\Controllers\admin\OrderController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\plans\smallController;
use App\Http\Controllers\admin\ReviewController;
use App\Http\Controllers\profile\CallController;
use App\Http\Controllers\admin\AddBlogController;
use App\Http\Controllers\admin\AddNewsController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\ServiceController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\pages\AboutUsController;
use App\Http\Controllers\pages\ContactController;
use App\Http\Controllers\pages\LeadersController;
use App\Http\Controllers\pages\PrivacyController;
use App\Http\Controllers\pages\ProfileController;
use App\Http\Controllers\plans\premiumController;
use App\Http\Controllers\plans\startUpController;
use App\Http\Controllers\admin\AddEventController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\viewBlogController;
use App\Http\Controllers\admin\viewNewsController;
use App\Http\Controllers\pages\BenefitsController;
use App\Http\Controllers\payment\PaypalController;
use App\Http\Controllers\payment\StripeController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\viewEventController;
use App\Http\Controllers\payment\FlutterController;
use App\Http\Controllers\plans\corporateController;
use App\Http\Controllers\plans\NonProfitController;
use App\Http\Controllers\profile\AddressController;
use App\Http\Controllers\admin\addLeadersController;
use App\Http\Controllers\admin\AddProductController;
use App\Http\Controllers\admin\AmbassadorController;
use App\Http\Controllers\pages\NewsDetailController;
use App\Http\Controllers\payment\PaystackController;
use App\Http\Controllers\plans\IndividualController;
use App\Http\Controllers\profile\WishlistController;
use App\Http\Controllers\admin\AddCategoryController;
use App\Http\Controllers\admin\AddServicesController;
use App\Http\Controllers\admin\TeamMembersController;
use App\Http\Controllers\admin\TransactionController;
use App\Http\Controllers\admin\viewLeadersController;
use App\Http\Controllers\admin\viewProductController;
use App\Http\Controllers\pages\PlanDetailsController;
use App\Http\Controllers\plans\AssociationController;
use App\Http\Controllers\pages\EventDetailsController;
use App\Http\Controllers\pages\viewBlogpostController;
use App\Http\Controllers\pages\LeaderDetailsController;
use App\Http\Controllers\profile\EditProfileController;
use App\Http\Controllers\admin\addAmbassadorsController;
use App\Http\Controllers\admin\AddJobController;
use App\Http\Controllers\admin\AddTeamMembersController;
use App\Http\Controllers\admin\DonationController as AdminDonationController;
use App\Http\Controllers\pages\TermsAgreementController;
use App\Http\Controllers\pages\TermsConditionController;
use App\Http\Controllers\admin\viewAmbassadorsController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\pages\BlogController as PageBlog;
use App\Http\Controllers\profile\ProfileProductController;
use App\Http\Controllers\admin\LoginController as AdminLogin;
use App\Http\Controllers\admin\LeadersController as adminLeaders;
use App\Http\Controllers\pages\ServicesController as PageService;
use App\Http\Controllers\admin\NewsController as AdminNewsController;
use App\Http\Controllers\pages\CartController as PagesCartController;
use App\Http\Controllers\pages\EventController as mainEventController;
use App\Http\Controllers\admin\EditProfileController as AdminEditProfileController;
use App\Http\Controllers\admin\JobController;
use App\Http\Controllers\admin\PlanController as AdminPlanController;
use App\Http\Controllers\admin\ViewJobController;
use App\Http\Controllers\job\InternController;
use App\Http\Controllers\job\NormalController;
use App\Http\Controllers\job\ViewJobController as JobViewJobController;
use App\Http\Controllers\pages\AmbassadorController as PagesAmbassadorController;
use App\Http\Controllers\pages\CareerController;
use App\Http\Controllers\pages\DonationController;
use App\Http\Controllers\pages\viewProductController as PagesViewProductController;
use App\Http\Controllers\payment\DonationPayController;
use App\Http\Controllers\profile\TransactionController as ProfileTransactionController;
use App\Models\Job;

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
    $events = Event::get();
    $news = News::get();
    return view('home', [
        'events' => $events,
        'news' => $news,
    ]);
});

Route::get('check', function () {
    return view('check');
});

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/home', [App\Http\Controllers\HomeController::class, 'sendMessage']);

Route::get('forgot-password', function () {
    return view('auth.passwords.email');
})->name('forgot-password');

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'login']);

Route::post('logout', [LogoutController::class, 'logout'])->name('logout');

Route::get('register', [RegisterController::class, 'index'])->name('register');
Route::post('register', [RegisterController::class, 'register']);
// Route::post('register', [RegisterController::class, 'purchasePlan'])->name('purchase-plan');

Route::get('event', [mainEventController::class, 'index'])->name('event');
Route::get('events/{event}', [EventDetailsController::class, 'index'])->name('events-detail');

Route::get('shop', [ShopController::class, 'index'])->name('shop');
Route::get('shop/{product}', [PagesViewProductController::class, 'index'])->name('product-details');

Route::get('about-us', [AboutUsController::class, 'index'])->name('about');

Route::get('contact-us', [ContactController::class, 'index'])->name('contact');

Route::get('privacy-and-policy', [PrivacyController::class, 'index'])->name('privacy-policy');

Route::get('terms-and-conditions', [TermsConditionController::class, 'index'])->name('terms-and-conditions');

Route::get('terms-of-service-agreement', [TermsAgreementController::class, 'index'])->name('terms-agreement');

Route::post('cart/{product}', [PagesCartController::class, 'store'])->name('cart');
Route::delete('cart/{product}', [PagesCartController::class, 'destroy'])->name('cart');

Route::get('leadership', [LeadersController::class, 'index'])->name('leaders');

Route::get('ambassador', [PagesAmbassadorController::class, 'index'])->name('ambassadors');

Route::get('donation', [DonationController::class, 'index'])->name('donation');
Route::post('donation', [DonationController::class, 'pay']);

Route::get('careers', [CareerController::class, 'index'])->name('careers');

Route::get('jobs/all', [NormalController::class, 'index'])->name('normal-jobs');
Route::get('jobs/intern', [InternController::class, 'index'])->name('intern-jobs');

Route::get('jobs/detail/{job}', [JobViewJobController::class, 'index'])->name('view-job');



Route::get('newss/{category?}', [NewsController::class, 'index'])->name('news');

Route::get('news/detail/{news}',  [NewsDetailController::class, 'index'])->name('news-details');

Route::get('/membership-plans', [PlanController::class, 'index'])->name('plans');
Route::post('/membership-plans', [PlanController::class, 'purchasePlan'])->middleware(['auth' => 'verified']);

Route::get('membership-benefits', [BenefitsController::class, 'index'])->name('benefits');

Route::get('plans/startup', [startUpController::class, 'index'])->name('startup-plan');
Route::get('plans/small-business', [smallController::class, 'index'])->name('small-plan');
Route::get('plans/corporate', [corporateController::class, 'index'])->name('corporate-plan');
Route::get('plans/premium-investor', [premiumController::class, 'index'])->name('premium-plan');
Route::get('plans/non-profit', [NonProfitController::class, 'index'])->name('nonprofit-plan');
Route::get('plans/association', [AssociationController::class, 'index'])->name('association-plan');




// payment routes


// Route::get('/success', [StripeController::class, 'success'])->name('success');

// Route::get('payment/pay-with-paypal', [PaypalController::class, 'index'])->name('pay-with-paypal');
// Route::post('paypal', [PaypalController::class, 'pay'])->name('paypal');
// Route::get('paypal-success', [PaypalController::class, 'success'])->name('paypal-success');
// Route::get('paypal-error', [PaypalController::class, 'error'])->name('paypal-error');

// Route::any('pay-with-flutter', [FlutterController::class, 'index'])->name('flutter');

Route::get('/donation-pay', [DonationPayController::class, 'index'])->name('donation-pay');
Route::post('donation-checkout', [DonationPayController::class, 'checkout']);



Route::middleware(['auth' => 'verified'])->group(function () {

    Route::get('/pay', [StripeController::class, 'index'])->name('pay');
    Route::post('checkout', [StripeController::class, 'checkout'])->name('checkout');

    // Route::get('paystack',[PaystackController::class, 'index'])->name('paystack');
    // Route::post('/pay-with-paystack', [PaystackController::class, 'redirectToGateway'])->name('pay-with-paystack');
    // Route::get('/payment/callback', [PaystackController::class, 'handleGatewayCallback']);



    //profile routes

    Route::get('profile', [ProfileController::class, 'index'])->name('profile');

    Route::get('profile/edit-profile', [EditProfileController::class, 'index'])->name('edit-profile')->middleware('is_paid_user');
    Route::put('profile/edit-profile', [EditProfileController::class, 'store']);

    Route::get('profile/transactions', [ProfileTransactionController::class, 'index'])->name('transactions')->middleware('is_paid_user');

    // Route::get('profile/product', [ProfileProductController::class, 'index'])->name('manage-product');
    // Route::post('profile/product', [ProfileProductController::class, 'store']);

    // Route::get('profile/address', [AddressController::class, 'index'])->name('edit-address');

    // Route::get('profile/call-request', [CallController::class, 'index'])->name('call-request');

    // Route::get('profile/wishlist', [WishlistController::class, 'index'])->name('wishlist');

});


// topic routes
Route::get('topics/agriculture', [TopicController::class, 'agriculture'])->name('agriculture');
Route::get('topics/oil-and-gas', [TopicController::class, 'oil'])->name('oil');
Route::get('topics/education', [TopicController::class, 'education'])->name('education');
Route::get('topics/health-care', [TopicController::class, 'healthCare'])->name('health-care');
Route::get('topics/manufacturing', [TopicController::class, 'manufacturing'])->name('manufacturing');
Route::get('topics/information-communication-technology', [TopicController::class, 'informationTechnology'])->name('information');
Route::get('topics/water-sanitation', [TopicController::class, 'waterSanitation'])->name('water-sanitation');
Route::get('topics/pharmaceuticals', [TopicController::class, 'pharmaceuticals'])->name('pharmaceuticals');
Route::get('topics/mining-and-solid-minerals', [TopicController::class, 'mining'])->name('mining');
Route::get('topics/telecommunication', [TopicController::class, 'telecommunication'])->name('telecommunication');
Route::get('topics/creative-industry', [TopicController::class, 'creative'])->name('creative');
Route::get('topics/sports', [TopicController::class, 'sport'])->name('sport');
Route::get('topics/renewable-energy', [TopicController::class, 'renewable'])->name('renewable');
Route::get('topics/transportation', [TopicController::class, 'transportation'])->name('transportation');
Route::get('topics/environment', [TopicController::class, 'environment'])->name('environment');
Route::get('topics/hospitaliy-and-tourism', [TopicController::class, 'hospitality'])->name('hospitality');
Route::get('topics/banking-and-finanace', [TopicController::class, 'banking'])->name('banking');
Route::get('topics/construction', [TopicController::class, 'construction'])->name('construction');
Route::get('topics/real-estate', [TopicController::class, 'estate'])->name('estate');
Route::get('topics/retail-and-wholesale', [TopicController::class, 'retail'])->name('retail');
Route::get('topics/trade', [TopicController::class, 'trade'])->name('trade');
Route::get('topics/insurance', [TopicController::class, 'insurance'])->name('insurance');
Route::get('topics/improving-government-services', [TopicController::class, 'improving'])->name('improving');
Route::get('topics/professional-services', [TopicController::class, 'professional'])->name('professional');
Route::get('topics/diversity-equity-and-inclusion', [TopicController::class, 'diversity'])->name('diversity');
Route::get('topics/corporate-social-responsibility', [TopicController::class, 'corporate'])->name('corporate');
Route::get('topics/climate-change', [TopicController::class, 'climate'])->name('climate');
Route::get('topics/immigration', [TopicController::class, 'immigration'])->name('immigration');
Route::get('topics/small-business', [TopicController::class, 'business'])->name('business');
Route::get('topics/infrastructure', [TopicController::class, 'infrastructure'])->name('infrastructure');
Route::get('topics/employment', [TopicController::class, 'employment'])->name('employment');
Route::get('topics/taxes', [TopicController::class, 'taxes'])->name('taxes');
Route::get('topics/women-and-youth', [TopicController::class, 'women'])->name('women');
Route::get('topics/research', [TopicController::class, 'research'])->name('research');



// Admin Routes
Route::middleware(['is_admin'])->group(function () {
    Route::get('admin/dashboard', [DashboardController::class, 'index'])->name('adminDashboard')->middleware('is_admin');

    Route::get('admin/edit-profile', [AdminEditProfileController::class, 'index'])->name('admin-editprofile');
    Route::put('admin/edit-profile', [AdminEditProfileController::class, 'update']);

    Route::get('admin/blog', [BlogController::class, 'index'])->name('adminBlog');
    Route::delete('admin/blog/{blog}', [BlogController::class, 'destroy'])->name('adminBlogDelete');

    // Route::get('admin/add-blog-post', [AddBlogController::class, 'index'])->name('adminAddBlog');
    // Route::post('admin/add-blog-post', [AddBlogController::class, 'store']);
    // Route::get('admin/blog/{blog}', [viewBlogController::class, 'index'])->name('view-blog');
    // Route::put('admin/blog/{blog}', [viewBlogController::class, 'update']);

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

    // Route::get('admin/add-product', [AddProductController::class, 'index'])->name('adminAddProduct');
    // Route::post('admin/add-product', [AddProductController::class, 'store']);
    // Route::get('admin/product/{product}', [viewProductController::class, 'index'])->name('view-product');
    // Route::put('admin/product/{product}', [viewProductController::class, 'update']);

    // Route::get('admin/orders', [OrderController::class, 'index'])->name('adminOrders');

    // Route::get('admin/carts', [CartController::class, 'index'])->name('adminCarts');
    // Route::delete('admin/carts/{cart}', [CartController::class, 'destroy'])->name('adminCartDelete');

    Route::get('admin/transactions', [TransactionController::class, 'index'])->name('admin-transactions');
    Route::delete('admin/transactionss/{transaction}', [TransactionController::class, 'destroy'])->name('delete-transactions');

    Route::get('admin/team-members', [TeamMembersController::class, 'index'])->name('adminTeam');
    Route::delete('admin/team-members/{user}', [TeamMembersController::class, 'destroy'])->name('adminMembersDelete');

    Route::get('admin/add-team-members', [AddTeamMembersController::class, 'index'])->name('adminAddTeam');
    Route::post('admin/add-team-members', [AddTeamMembersController::class, 'store']);

    Route::get('admin/users', [UserController::class, 'index'])->name('adminUsers');
    Route::delete('admin/users/{user}', [UserController::class, 'destroy'])->name('adminUsersDelete');
    Route::put('admin/users/{user}', [UserController::class, 'update'])->name('adminUsersUpdate');

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

    Route::get('admin/review', [ReviewController::class, 'index'])->name('admin-review');
    Route::put('admin/review/{product}', [ReviewController::class, 'approve'])->name('admin-approve');

    Route::get('admin/leaders', [adminLeaders::class, 'index'])->name('admin-leaders');
    Route::delete('admin/leaders/{leader}', [adminLeaders::class, 'destroy'])->name('delete-leaders');

    Route::get('admin/add-leaders', [addLeadersController::class, 'index'])->name('add-leaders');
    Route::post('admin/add-leaders', [addLeadersController::class, 'store']);

    Route::get('admin/view-leaders/{leader}', [viewLeadersController::class, 'index'])->name('admin-view-leaders');
    Route::put('admin/view-leaders/{leader}', [viewLeadersController::class, 'update']);

    Route::get('admin/ambassadors', [AmbassadorController::class, 'index'])->name('admin-ambassadors');
    Route::delete('admin/ambassadors/{ambassador}', [AmbassadorController::class, 'destroy'])->name('delete-ambassadors');

    Route::get('admin/add-ambassadors', [addAmbassadorsController::class, 'index'])->name('add-ambassadors');
    Route::post('admin/add-ambassadors', [addAmbassadorsController::class, 'store']);

    Route::get('admin/view-ambassadors/{ambassador}', [viewAmbassadorsController::class, 'index'])->name('admin-view-ambassadors');
    Route::put('admin/view-ambassadors/{ambassador}', [viewAmbassadorsController::class, 'update']);

    Route::get('admin/donations', [AdminDonationController::class, 'index'])->name('admin-donations');
    Route::delete('admin/donations/{donation}', [AdminDonationController::class, 'destroy'])->name('delete-donations');


    Route::get('admin/plans', [AdminPlanController::class, 'index'])->name('admin-plans');
    Route::delete('admin/plans/{plan}', [AdminPlanController::class, 'destroy'])->name('delete-plans');


    Route::get('admin/jobs', [JobController::class, 'index'])->name('admin-jobs');
    Route::delete('admin/jobs/{job}', [JobController::class, 'destroy'])->name('delete-jobs');

    Route::get('admin/add-jobs', [AddJobController::class, 'index'])->name('add-jobs');
    Route::post('admin/add-jobs', [AddJobController::class, 'store']);

    Route::get('admin/view-jobs/{job}', [ViewJobController::class, 'index'])->name('admin-view-jobs');
    Route::put('admin/view-jobs/{job}', [ViewJobController::class, 'update']);
});

Route::get('admin/login', [AdminLogin::class, 'index']);
Route::post('admin/login', [AdminLogin::class, 'login'])->name('adminLogin');
