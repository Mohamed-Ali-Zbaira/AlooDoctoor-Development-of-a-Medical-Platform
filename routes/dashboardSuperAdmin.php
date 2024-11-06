<?php

use App\Http\Controllers\CliniqueAdminController;
use App\Http\Controllers\CliniqueMedecinController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MedecinSuperAdminController;
use App\Http\Controllers\StatisticsSuperAdminController;
use App\Http\Controllers\OperationSuperAdminController;
use App\Http\Controllers\ProfileAdminController;
use App\Http\Controllers\publicationAdmin;
use App\Http\Controllers\UserSuperAdmin;
use Illuminate\Support\Facades\Route;

Route::get('/dashboardSuperAdmin', function () {
    return view('DashboardSuperAdmin.index');
});
/*************************************  Statistics   ********************************************************/

Route::get('/dashboardSuperAdmin', [StatisticsSuperAdminController::class, 'index'])->name('admin.statistics');
Route::get('/dashboardSuperAdmin', [StatisticsSuperAdminController::class, 'recentPosts'])->name('statistics.recent_posts');

/*************************************  Medecin   ********************************************************/
Route::get('/dashboardSuperAdmin/ListesMedecin', [MedecinSuperAdminController::class, 'index'])->name('medecin_super_admin.index');
Route::get('/dashboardSuperAdmin/ListesMedecin/{id}', [MedecinSuperAdminController::class, 'show'])->name('medecin_super_admin.show');
Route::delete('/dashboardSuperAdmin/ListesMedecin/{id}', [MedecinSuperAdminController::class, 'delete'])->name('medecin_super_admin.delete');
Route::put('/dashboardSuperAdmin/medecins/{id}/update-etat', [MedecinSuperAdminController::class, 'updateEtat'])->name('medecin_super_admin.update_etat');

Route::get('/dashboardSuperAdmin/ListesMedecin/{id}/download', [MedecinSuperAdminController::class, 'downloadDocument'])->name('medecin_super_admin.download');

/*************************************  Operation   ********************************************************/

Route::get('/dashboardSuperAdmin/ListesOperations', [OperationSuperAdminController::class, 'getAllOperations'])->name('operations.index');
Route::post('/dashboardSuperAdmin/ListesOperations', [OperationSuperAdminController::class, 'store'])->name('operationsDash.store');
Route::get('/dashboardSuperAdmin/ListesOperations/{id}', [OperationSuperAdminController::class, 'destroy'])->name('operations.destroy');
Route::put('/dashboardSuperAdmin/ListesOperations/{id}', [OperationSuperAdminController::class, 'update'])->name('operations.update');

/*************************************  Contact   ********************************************************/


Route::get('/dashboardSuperAdmin/Reclamation', [ContactController::class, 'index'])->name('contacts.index');
Route::get('/contacts/{id}', [ContactController::class, 'show'])->name('contacts.show');
Route::delete('/contacts/{id}', [ContactController::class, 'destroy'])->name('contacts.destroy');

/*************************************  User   ********************************************************/

Route::get('/dashboardSuperAdmin/ListesUser', [UserSuperAdmin::class, 'index'])->name('User_super_admin.index');

/*************************************  Cliniques   ********************************************************/

Route::get('/DashboardSuperAdmin/cliniques', [CliniqueAdminController::class, 'index'])->name('cliniques.index')->middleware('auth');
Route::get('/DashboardSuperAdmin/cliniques/{clinique}', [CliniqueAdminController::class, 'destroy'])->name('cliniques.destroy')->middleware('auth');
Route::get('/DashboardSuperAdmin/cliniques/{clinique}/edit', [CliniqueAdminController::class, 'edit'])->name('cliniques.edit')->middleware('auth');
Route::put('/DashboardSuperAdmin/cliniques/{clinique}', [CliniqueAdminController::class, 'update'])->name('cliniques.update')->middleware('auth');
Route::post('/DashboardSuperAdmin/cliniques', [CliniqueAdminController::class, 'store'])->name('cliniques.store')->middleware('auth');
////////


Route::get('/DashboardSuperAdmin/blogPage', [publicationAdmin::class, 'getPostsByAuthenticatedUserId'])->name('blogPageee');
Route::post('/posts/{id}', [publicationAdmin::class, 'update'])->name('posts.update');
Route::delete('/posts/delete/{id}', [publicationAdmin::class, 'destroy'])->name('posts.destroy');

// Route::post('/Dashboard/AddblogPage', [PostController::class, 'store'])->name('post.store');
Route::middleware(['auth'])->group(function () {
    Route::get('/DashboardSuperAdmin/AddblogPage', function () {
        return view('DashboardSuperAdmin.Blog.AjouterPosts');
    })->name('AddblogPage');

    // Route to handle the form submission
    Route::post('/DashboardSuperAdmin/StorePost', [publicationAdmin::class, 'store'])->name('StorePost');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/DashboardSuperAdmin/profile', [ProfileAdminController::class, 'show'])->name('admin.profile.show');
    Route::post('/DashboardSuperAdmin/profile/update', [ProfileAdminController::class, 'update'])->name('admin.profile.update');
});