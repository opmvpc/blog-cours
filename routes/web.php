<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\ArticleController as AdminArticleController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

/*====================================
=            Front Office            =
====================================*/

// Page d'accueil
Route::get('/', [HomepageController::class, 'index']);

// Liste des articles
Route::get('/articles', [ArticleController::class, 'index'])->name('front.articles.index');
// Détail d'un article
Route::get('/articles/{id}', [ArticleController::class, 'show'])->name('front.articles.show');

// Page à propos
Route::get('/about', [AboutController::class, 'index'])->name('about.index');

/*====================================
=            Back Office             =
====================================*/

// Page d'accueil du back office
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->prefix('admin')->group(function () {
    // Gestion des articles (création, modification, suppression)
    Route::resource('/articles', AdminArticleController::class);
});

// Gestion du profil utilisateur
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::patch('/profile/avatar', [ProfileController::class, 'updateAvatar'])->name('profile.avatar.update');
});

// Authentification
require __DIR__.'/auth.php';
