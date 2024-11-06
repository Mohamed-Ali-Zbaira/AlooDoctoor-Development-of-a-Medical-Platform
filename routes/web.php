<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClinicController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FacebookController;
use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\MedecinController;
use App\Http\Controllers\OperationController;
use App\Http\Controllers\RendezvousController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RendezvousOperationController;
use App\Http\Controllers\SearchMedecinController;
use App\Http\Controllers\VerificationController;
//use App\Http\Livewire\Dashboard\Post\UpdatePost;


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

require_once __DIR__ . '/dashboardMedecin.php';
require_once __DIR__ . '/dashboardSuperAdmin.php';

Route::get('/', function () {
    return view('Home.index');
});
Route::get('/', [IndexController::class, 'index'])->name('post.show');

Route::get('/signin', function () {
    return view('Home.auth.signin');
});
/*************************************  Status & Verfications   ********************************************************/
/*************************************  middleware   ********************************************************/

Route::middleware('auth')->group(function () {
    Route::get('/WaitingPage', function () {
        return view('Home.Verification.WaitingPage');
    });

    Route::get('/VerificationPage', [VerificationController::class, 'index'])->name('verification.index')->middleware('auth');
    Route::post('/VerificationPage/upload', [VerificationController::class, 'store'])->name('verification.store')->middleware('auth');
    Route::put('/VerificationPage/{id}', [VerificationController::class, 'update'])->name('verification.update')->middleware('auth');
    Route::delete('/VerificationPage/{id}', [VerificationController::class, 'destroy'])->name('verification.destroy')->middleware('auth');

    Route::get('/statut', function () {
        return view('Home.statut.statut');
    })->middleware('auth');
});

/*************************************  About   ********************************************************/

Route::get('/About', function () {
    return view('Home.About.About');
});

/*************************************  Profile   ********************************************************/
/*************************************  middleware   ********************************************************/

Route::middleware('auth')->group(function () {
    Route::get('/Profile', function () {
        return view('Home.Profile.ProfilePage');
    })->name('profile')->middleware('auth');
    Route::get('/profile', [ProfileController::class, 'showProfile'])->name('profile')->middleware('auth');
    Route::get('/profile/{id}', [ProfileController::class, 'getById'])->name('profile.show')->middleware('auth');
    Route::post('/update-profile', [ProfileController::class, 'update'])->name('update.profile')->middleware('auth');
    Route::get('/user/rendezvous', [ProfileController::class, 'getUserRendezvous'])->name('user.rendezvous')->middleware('auth');
    Route::get('/profile/print/{id}', [ProfileController::class, 'printAppointmentDetails'])->name('profile.print')->middleware('auth');
    Route::get('/profile', [ProfileController::class, 'showProfileOperation'])->name('showProfileOperation')->middleware('auth');
    Route::get('/user/rendezvous', [ProfileController::class, 'getUserRendezvousOperation'])->name('getUserRendezvousOperation')->middleware('auth');
    Route::get('/printOperation/{id}', [ProfileController::class, 'printAppointmentDetailsOperation'])->name('profileOperation.print')->middleware('auth');
});

/*************************************  contact   ********************************************************/
/*************************************  middleware   ********************************************************/

Route::middleware('auth')->group(function () {
    Route::get('/contact', [ContactController::class, 'showContactForm'])->name('contact.form');
    Route::post('/contact/submit', [ContactController::class, 'submitContactForm'])->name('contact.submit');
});

/*************************************  Auth   ********************************************************/

Route::get('/signup', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/signup', [AuthController::class, 'register']);
Route::get('/signin', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/signin', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/user', [AuthController::class, 'getUser'])->name('user');
Route::get('/reset-password', [AuthController::class, 'openResetPassword'])->name('openResetPassword');
Route::post('/send-email-password', [AuthController::class, 'sendResetLinkEmail'])->name('send-email-password');
Route::get('/reset-passwordEmail/{token}', [AuthController::class, 'showResetPasswordForm'])->name('password.reset');
Route::post('/update-passwordEmail', [AuthController::class, 'updateResetPassword'])->name('updateResetPassword');
/*Route::get('/reset-password', [AuthController::class, 'showResetPasswordForm'])->name('password.request');*/

/*************************************  Posts   ********************************************************/

Route::get('/blog', [PostController::class, 'index'])->name('posts.index');
Route::get('/blogs/{id}', [PostController::class, 'show'])->name('blog.show');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::post('/posts/search', [PostController::class, 'search'])->name('posts.search');

/*************************************  Medecin   ********************************************************/
/*************************************  middleware   ********************************************************/

Route::prefix('medecins')->middleware('auth')->group(function () {
    Route::get('/', [MedecinController::class, 'index'])->name('medecin.index');
    Route::get('/create', [MedecinController::class, 'create'])->name('medecin.create');
    Route::post('/', [MedecinController::class, 'store'])->name('medecin.store');
    Route::get('/{id}', [MedecinController::class, 'show'])->name('medecin.show');
    Route::get('/{id}/edit', [MedecinController::class, 'edit'])->name('medecin.edit');
    Route::put('/{id}', [MedecinController::class, 'update'])->name('medecin.update');
    Route::delete('/{id}', [MedecinController::class, 'destroy'])->name('medecin.destroy');
});
Route::get('/medecins', [MedecinController::class, 'index'])->name('medecin.index');
Route::get('/medecins/{id}', [MedecinController::class, 'show'])->name('medecin.show');


Route::post('/search-medecin', [SearchMedecinController::class, 'search'])->name('search.medecin');

/*************************************  Clinique   ********************************************************/
/*************************************  middleware   ********************************************************/

Route::get('/clinic', [ClinicController::class, 'index'])->name('clinics.index');
Route::get('/clinic/{id}', [ClinicController::class, 'show'])->name('clinics.show');

Route::post('/search', [ClinicController::class, 'search'])->name('search');

/*************************************  Operation   ********************************************************/
/*************************************  middleware   ********************************************************/


Route::get('/operations', [OperationController::class, 'index'])->name('operations.index');
Route::post('/operations/search', [OperationController::class, 'search'])->name('operations.search');
Route::get('/operation/{id}', [OperationController::class, 'showOperationDetails'])->name('operation-details');;
Route::get('/MedecinDetail', function () {
    return view('Home.Medecin.MedecinDetail');
});

/************************************* Rendez Vous Operation   ********************************************************/
/*************************************  middleware   ********************************************************/

Route::post('/operations', [RendezvousOperationController::class, 'store'])->name('rendezvousOperations.store')->middleware('auth');

/*************************************  Blocked Contact Form   ********************************************************/

Route::prefix('admin')->group(function () {
    Route::get('/statut',  [StatusController::class, 'index'])->name('status.index');
    Route::get('/statut/create', [StatusController::class, 'create'])->name('status.create');
    Route::post('/statut', [StatusController::class, 'store'])->name('status.store');
    Route::get('/statut/{id}', [StatusController::class, 'show'])->name('status.show');
    Route::get('/statut/{id}/edit', [StatusController::class, 'edit'])->name('status.edit');
    Route::put('/statut/{id}', [StatusController::class, 'update'])->name('status.update');
    Route::delete('/statut/{id}', [StatusController::class, 'destroy'])->name('status.destroy');
});
Route::post('/rendezvous/store', [RendezvousController::class, 'store'])->name('rendezvous.store')->middleware('auth');

/*************************************  Auth with Google   ********************************************************/

Route::get('auth/google', [GoogleAuthController::class, 'redirect'])->name('google-auth');
Route::get('auth/google/call-back', [GoogleAuthController::class, 'callbackGoogle']);

/*************************************  Auth with Facebook   ********************************************************/

Route::get('Facebook/login', [FacebookController::class, 'provider'])->name('facebook.login');
Route::get('Facebook/call-back', [FacebookController::class, 'HandleCallback'])->name('facebook.Callback');
