<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\Article\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ConfereneController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Provider\ProviderController;
use App\Http\Controllers\UserController;
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
Auth::routes();

Route::get('/', [HomeController::class ,'index'])->name('home');
Route::get('/articles', [HomeController::class ,'article'])->name('articles.index');
Route::get('/forums', [HomeController::class,'forum'])->name('home.forums');
Route::get('/application/app', [HomeController::class, 'application'])->name('home.application');
Route::get('/detail/forum/{slug}', [HomeController::class, 'showTopic'])->name('show.topic');
Route::get('/application/app', [HomeController::class,'application'])->name('home.app');
Route::get('/application/detail/{slug}', [HomeController::class, 'showApplication'])->name('view.app');
Route::get('/article-tag/{slug}', [HomeController::class, 'articleTag'])->name('tag.article');
Route::get('/podcasts', [HomeController::class, 'podCasts'])->name('podcasts.index');
Route::get('/podcasts/detail/{slug}', [HomeController::class , 'showPodcast'])->name('podcast.show');
Route::get('/all-courses', [HomeController::class, 'courses'])->name('all.courses');
Route::get('/articles/detail/{slug}', [HomeController::class, 'show'])->name('article.detail');
Route::get('/auth/{provider}/redirect', [ProviderController::class, 'redirect']);
Route::get('/auth/{provider}/callback', [ProviderController::class, 'callback']);
Route::get('/contact', function() {
    return view('contact');
});
//pages d'administration du sites
Route::resources([
    'article' => ArticleController::class,
    'category' => CategoryController::class,
    'application'=> ApplicationController::class,
    'conference'  => ConfereneController::class,
    'course'=> CourseController::class,
    'forum'=> ForumController::class,
    'user' =>UserController::class
   ]);
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/get-article-by-tag/{id}', [HomeController::class, 'articleTag'])->name('article.tag');
