<?php

use App\Http\Controllers\PostController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MedecinController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//authentification Api
// Route::post('/register', [AuthController::class, 'register']);
// Route::post('/login', [AuthController::class, 'login'])->name('login');

// Route::middleware('auth:sanctum')->group(function () {
//     Route::post('/logout', [AuthController::class, 'logout']);
//     Route::get('/user', function (Request $request) {
//         return $request->user();
//     });
// });

// //Crud User Api
// Route::prefix('users')->group(function () {
//     Route::get('/', [UserController::class, 'index']);      // GET /api/users
//     Route::get('{id}', [UserController::class, 'show']);     // GET /api/users/{id}
//     Route::post('/', [UserController::class, 'store']);      // POST /api/users
//     Route::put('{id}', [UserController::class, 'update']);   // PUT /api/users/{id}
//     Route::delete('{id}', [UserController::class, 'destroy']); // DELETE /api/users/{id}
// });

// //Crud Medecin
// Route::group(['prefix' => 'medecins'], function () {
//     Route::get('/', [MedecinController::class, 'index']);
//     Route::get('/{id}', [MedecinController::class, 'show']);
//     Route::post('/', [MedecinController::class, 'store']);
//     Route::put('/{id}', [MedecinController::class, 'update']);
//     Route::patch('/{id}', [MedecinController::class, 'update']);
//     Route::delete('/{id}', [MedecinController::class, 'destroy']);
//     Route::post('/search', [MedecinController::class, 'search']);
// });
// //post
// Route::middleware('auth:sanctum')->group(function () {
//     // Medecin routes
//     Route::post('/medecin/posts', [MedecinController::class, 'createPost']);

//     // Comment routes
//    // Route::post('/posts/{postId}/comments', [CommentController::class, 'store']);
// });

// // Comment routes
// Route::prefix('posts')->group(function () {
//     Route::get('{postId}/comments', [CommentController::class, 'index']); // Afficher les commentaires d'un post
//     Route::post('comments/{postId}', [CommentController::class, 'store']); // Créer un nouveau commentaire pour un post
// });

// Route::prefix('comments')->group(function () {
//     Route::put('{commentId}', [CommentController::class, 'update']); // Mettre à jour un commentaire existant
//     Route::delete('{commentId}', [CommentController::class, 'destroy']); // Supprimer un commentaire existant
// });
// //recuperer


// Route::middleware('auth:sanctum')->group(function () {
//     //Route::get('/posts', [PostController::class, 'index']);
//     //Route::get('/posts/{postId}', [PostController::class, 'show']);
//     Route::post('/posts', [PostController::class, 'store']);
//     Route::put('/posts/{postId}', [PostController::class, 'update']);
//     Route::delete('/posts/{postId}', [PostController::class, 'destroy']);
//     //Route::get('/recent-posts', [PostController::class, 'getRecentPosts']);
//     //Route::get('/category-stats', [PostController::class, 'getCategoryStats']);
// });
// Route::get('/posts/{postId}', [PostController::class, 'show']);
// Route::get('/posts', [PostController::class, 'index']);
// Route::get('/recent-posts', [PostController::class, 'getRecentPosts']);
// Route::get('/category-stats', [PostController::class, 'getCategoryStats']);

// //Contact
// Route::apiResource('contacts', ContactController::class);