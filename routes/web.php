<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AccountSettingController;
use App\Http\Controllers\BackendManagementController;
use App\Http\Controllers\QuestionnaireController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\PaymentController;

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
Route::get('/login/google', [MemberController::class, 'redirectToGoogle'])->name('redirectToGoogle');
Route::get('/login/google/callback', [MemberController::class, 'handleGoogleCallback'])->name('handleGoogleCallback');
Route::get('/login/facebook', [MemberController::class, 'redirectToFacebook'])->name('redirectToFacebook');
Route::get('/login/facebook/callback', [MemberController::class, 'handleFacebookCallback'])->name('handleFacebookCallback');

Route::get("/", [MemberController::class, "OverviewIndex"])->name("OverviewIndex");

Route::get("/sign-up", [MemberController::class, "SignUpIndex"])->name("SignUpIndex");
Route::post("/sign-up", [MemberController::class, "SignUpPost"])->name("SignUpPost");
Route::get("/sign-in", [MemberController::class, "SignInIndex"])->name("SignInIndex");
Route::post("/sign-in", [MemberController::class, "SignInPost"])->name("SignInPost");
Route::get("/sign-in/{ID}", [MemberController::class, "SignInVerifyIndex"])->name("SignInVerifyIndex");
Route::post("/signin", [MemberController::class, "SignInVerifyPost"])->name("SignInVerifyPost");
Route::get("/logout", [MemberController::class, "LogoutIndex"])->name("LogoutIndex");
Route::get("/comfirm-email", [MemberController::class, "ConfirmEmailIndex"])->name("ConfirmEmailIndex");
Route::get("/interest-category", [MemberController::class, "InterestCategoryIndex"])->name("InterestCategoryIndex");
Route::post("/interest-category", [MemberController::class, "InterestCategoryPost"])->name("InterestCategoryPost");
Route::get("/forgot-password", [MemberController::class, "ForgotPasswordIndex"])->name("ForgotPasswordIndex");
Route::post("/forgot-password", [MemberController::class, "ForgotPasswordPost"])->name("ForgotPasswordPost");
Route::get("/forgot-password2", [MemberController::class, "ForgotPassword2Index"])->name("ForgotPassword2Index");
Route::post("/forgot-password2", [MemberController::class, "ForgotPassword2Post"])->name("ForgotPassword2Post");
Route::post("/change-password", [MemberController::class, "ChangePasswordPost"])->name("ChangePasswordPost");
Route::get("/change-password", [MemberController::class, "ChangePasswordIndex"])->name("ChangePasswordIndex");
Route::get("/change-password/{ID}/{Token}", [MemberController::class, "ResetPasswordPost"])->name("ResetPasswordPost");
Route::post("/sendemail", [MemberController::class, "SendEmail"])->name("SendEmail");

Route::get("/", [AccountSettingController::class, "OverviewIndex"])->name("OverviewIndex");
Route::get("/overview-search", [AccountSettingController::class, "OverviewSearchIndex"])->name("OverviewSearchIndex");
Route::get("/project-event", [AccountSettingController::class, "ProjectEventIndex"])->name("ProjectEventIndex");
Route::get("/event-new", [AccountSettingController::class, "EventNewIndex"])->name("EventNewIndex");
// Route::get("/accountSetting/profile", [AccountSettingController::class, "ProfileIndex"])->name("ProfileIndex");


Route::get("/qustionnaire/qustion-main", [QuestionnaireController::class, "QuestionMain"])->name("Questionnaire.QuestionMain");
Route::get("/backendManagement/overview", [BackendManagementController::class, "OverviewIndex"])->name("BackendManagement.OverviewIndex");
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/account', [AccountController::class, 'account'])->name('account');
// Route::get('/favorite', [HomeController::class, 'favorite'])->name('favorite');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/compare', [HomeController::class, 'compare'])->name('compare');
Route::get('/unit', [HomeController::class, 'event'])->name('event');
Route::get('/unit(home)', [HomeController::class, 'event_home'])->name('event_home');

Route::post('/check-subscription-by-mobile', [AccountSettingController::class, 'CheckSubScriptionByMobile'])->name('CheckSubScriptionByMobile');
Route::post('/save-subscription-by-event-id', [AccountSettingController::class, 'SaveSubScriptionByEventID'])->name('SaveSubScriptionByEventID');
Route::middleware(['auth', 'prevent-back-history'])->group(function () {
    Route::get("/booking/booking-main", [BookingController::class, "BookingMain"])->name("Booking.BookingMain");
    Route::post("/booking/booking-main", [BookingController::class, "BookingMain"])->name("BookingComplete");
    Route::post("/booking/complete", [BookingController::class, "BookingResponse"])->name("BookingResponse");
    Route::get('/interest', [HomeController::class, 'InterestIndex'])->name('InterestIndex');
    Route::get('/Interest', [HomeController::class, 'InterestInIndex'])->name('InterestInIndex');
    Route::post('/interest', [HomeController::class, 'InterestPost'])->name('InterestPost');
    Route::get('/profile', [HomeController::class, 'ProfileIndex'])->name('ProfileIndex');
    Route::post('/profile', [HomeController::class, 'ProfilePost'])->name('ProfilePost');
    Route::get('/booking-history', [HomeController::class, 'BookingHistory'])->name('BookingHistory');
    Route::get('/favorite', [HomeController::class, 'favorite'])->name('favorite');
    Route::post('/payment', [PaymentController::class, 'Payment'])->name('Payment');
});

