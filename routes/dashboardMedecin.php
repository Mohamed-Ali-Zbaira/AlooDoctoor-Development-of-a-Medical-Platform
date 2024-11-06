<?php

use App\Http\Controllers\RendezvousOperationMedecinController;
use App\Http\Controllers\CliniqueMedecinController;
use App\Http\Controllers\dashMedecinController;
use App\Http\Controllers\ListesRendezVousOperationsController;
use App\Http\Controllers\OperationMedecinController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\RendezvousController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'medecin'])->group(function () {
    Route::get('/Dashboard', function () {
        return view('Dashboard.index');
    });
    /*************************************  patients   ********************************************************/
    Route::get('/Dashboard/patients', [dashMedecinController::class, 'getPatientsMedecin'])->name('Patients.index');
    /*************************************  calendars   ********************************************************/
    Route::get('/Dashboard/calendars', function () {
        return view('Dashboard.calendars.calendarsPage');
    })->name('calendars');
    /*************************************  Profile   ********************************************************/
    Route::get('/Dashboard/Profile', [dashMedecinController::class, 'showProfileMedecin'])->name('profileMedecin');
    Route::get('/Dashboard/Profile/Update', [dashMedecinController::class, 'showUpdateProfileForm'])->name('profiledash.update');
    Route::post('/Dashboard/Profile/Update', [dashMedecinController::class, 'updateProfile'])->name('profile.update.submit');
    /*************************************  Rendezvous   ********************************************************/
    Route::get('/get-rdv/{id}', [RendezvousController::class, 'getById']);
    Route::get('/delete-rdv/{id}', [RendezvousController::class, 'delete'])->name('delete-rdv');
    Route::post('/rendezvous', [dashMedecinController::class, 'store'])->name('rendezvousMedecin.store');
    Route::get('/dashboard/liste-rendezvous', [dashMedecinController::class, 'getRendezVousDuMedecin'])->name('rendezvous.index');
    Route::post('/rendezvous/update/{id}', [dashMedecinController::class, 'update'])->name('rendezvous.update');
    Route::get('/GetByid/{id}', [dashMedecinController::class, 'GetByid'])->name('rendezvous.GetByid');
    Route::get('/rendezvous/delete/{id}', [dashMedecinController::class, 'destroy'])->name('rendezvous.destroy');

    /*************************************  blogPage   ********************************************************/
    Route::get('/Dashboard/blogPage', [dashMedecinController::class, 'getPostsByAuthenticatedUserId'])->name('blogPage');
    Route::post('/posts/{id}', [PostController::class, 'update'])->name('posts.update');
    Route::delete('/posts/delete/{id}', [PostController::class, 'destroy'])->name('posts.destroy');

    // Route::post('/Dashboard/AddblogPage', [PostController::class, 'store'])->name('post.store');
    Route::middleware(['auth'])->group(function () {
        Route::get('/Dashboard/AddblogPage', function () {
            return view('Dashboard.Blog.AjouterPosts');
        })->name('AddblogPage');

        // Route to handle the form submission
        Route::post('/Dashboard/StorePost', [PublicationController::class, 'store'])->name('StorePost');
    });
    /*************************************  Operation   ********************************************************/

    Route::get('/dashboardMedecin/ListesOperations', [OperationMedecinController::class, 'getAllOperations'])->name('operationsDashMedecin.index');
    Route::post('/dashboardMedecin/ListesOperations', [OperationMedecinController::class, 'store'])->name('operationsDashMedecin.store');
    Route::get('/dashboardMedecin/ListesOperations/{id}', [OperationMedecinController::class, 'destroy'])->name('operationsDashMedecin.destroy');
    Route::put('/dashboardMedecin/ListesOperations/{id}', [OperationMedecinController::class, 'update'])->name('operatioperationsDashMedecinons.update');

    /************************************* Rendez-Vous Operation   ********************************************************/

    Route::middleware('auth')->get('/dashboardMedecin/ListesRendezVousOperations', [ListesRendezVousOperationsController::class, 'getRendezvousByIdAuth']);
    Route::middleware('auth')->get('/dashboard/rendezvous', [ListesRendezVousOperationsController::class, 'getRendezvousByIdAuth']);
    Route::middleware('auth')->post('/dashboard/rendezvous/update/{id}', [ListesRendezVousOperationsController::class, 'update'])->name('rendezvousss.update');


    // Route::get('/dashboardMedecin/Operations/Rendez-Vous', [RendezvousOperationMedecinController::class, 'index'])->name('medecin.rendezvous_operations.index')->middleware('auth');
    // Route::get('/dashboardMedecin/Operations/Rendez-Vous/{id}', [RendezvousOperationMedecinController::class, 'destroy'])->name('medecin.rendezvous_operations.destroy');
    // Route::put('/dashboardMedecin/Operations/Rendez-Vous/{id}', [RendezvousOperationMedecinController::class, 'update'])->name('medecin.rendezvous_operations.update');

    /*************************************  Cliniques   ********************************************************/

    Route::get('/dashboardMedecin/cliniques', [CliniqueMedecinController::class, 'index'])->name('cliniques.index')->middleware('auth');
    Route::get('/dashboardMedecin/cliniques/{clinique}', [CliniqueMedecinController::class, 'destroy'])->name('cliniques.destroy')->middleware('auth');
    Route::get('/dashboardMedecin/cliniques/{clinique}/edit', [CliniqueMedecinController::class, 'edit'])->name('cliniques.edit')->middleware('auth');
    Route::put('/dashboardMedecin/cliniques/{clinique}', [CliniqueMedecinController::class, 'update'])->name('cliniques.update')->middleware('auth');
    Route::post('/dashboardMedecin/cliniques', [CliniqueMedecinController::class, 'store'])->name('cliniques.store')->middleware('auth');
});