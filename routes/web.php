<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ArticleController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::post('/be/login', [AuthController::class, 'submit'])->name('api.login');
Route::post('/be/logout', [AuthController::class, 'logout'])->name('api.logout');
Route::get('/be/article/{article_id}', [ArticleController::class, 'getArticle'])->name('api.getArticle');
Route::post('/be/comment/', [ArticleController::class, 'createComment'])->name('api.createComment');

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/form', [FormController::class, 'index'])->name('form');
Route::get('/article', [ArticleController::class, 'index'])->name('article');
