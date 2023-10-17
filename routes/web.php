<?php

use App\Http\Controllers\Article\ArticleController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Provider\ProviderController;
use App\Livewire\Article;
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

Route::resources([
 'article' => ArticleController::class
]);


Route::get('/', [HomeController::class ,'index'])->name('home');


Route::get('/articles', [HomeController::class, 'articles'])->name('articles');

Route::get('/home', function () {
    return view('home');
})->middleware('guest');

Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::get('/articles/{id}', [HomeController::class, 'show'])->name('article.detail');


Route::get('/auth/{provider}/redirect', [ProviderController::class, 'redirect']);
Route::get('/auth/{provider}/callback', [ProviderController::class, 'callback']);


Route::get('/articles-testing-livewire', Article::class)->name('testing.article');


Route::get('/dashboard', function() {
    return view('admin.index');
});


Route::get('/discutions', function() {
    return view('discution');
});


Route::get('/test', function() {
    return view('test');
});
