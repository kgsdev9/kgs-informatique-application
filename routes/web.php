<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\Article\ArticleController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Provider\ProviderController;
use App\Livewire\ArticleRessource;
use Illuminate\Support\Facades\Route;


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


//mes pages visiteurs
Route::get('/', [HomeController::class ,'index'])->name('home');
Route::get('/articles', [HomeController::class ,'article'])->name('articles.index');
Route::get('/forums', [HomeController::class,'topic'])->name('topic.index');Route::get('/application/app', [HomeController::class, 'application'])->name('home.application');
Route::get('/application/app', [HomeController::class,'application'])->name('home.app');
Route::get('/application/app/{slug}', [HomeController::class, 'showApplication'])->name('view.app');

Route::resources([
    'article' => ArticleController::class,
    'category' => CategoryController::class,
    'application'=> ApplicationController::class
   ]);

Route::get('/home', function () {
    return view('home');
})->middleware('guest');

Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::get('/articles/{id}', [HomeController::class, 'show'])->name('article.detail');
Route::get('/auth/{provider}/redirect', [ProviderController::class, 'redirect']);
Route::get('/auth/{provider}/callback', [ProviderController::class, 'callback']);
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

Route::get('/discutions', function() {
    return view('discution');
});

Route::get('/article-ressource', ArticleRessource::class);
Route::get('/get-article-by-tag/{id}', [HomeController::class, 'articleTag'])->name('article.tag');
Auth::routes();

