<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['isLogin'])->group(function () {

        Route::get('/books/create' , [BookController::class,'create'])->name('books.create');
        Route::post('/books/store' , [BookController::class,'store'])->name('books.store');
        Route::get('/books/edit/{id}' , [BookController::class,'edit'])->name('books.edit');
        Route::post('/books/update/{id}' , [BookController::class,'update'])->name('books.update');
        Route::get('/books/delete/{id}' , [BookController::class,'delete'])->name('books.delete');

        Route::get('/categories/create' , [CategoryController::class,'create'])->name('categories.create');
        Route::post('/categories/store' , [CategoryController::class,'store'])->name('categories.store');
        Route::get('/categories/edit/{id}' , [CategoryController::class,'edit'])->name('categories.edit');
        Route::post('/categories/update/{id}' , [CategoryController::class,'update'])->name('categories.update');
        Route::get('/categories/delete/{id}' , [CategoryController::class,'delete'])->name('categories.delete');

        Route::get('/logout' ,[AuthController::class,'logout'])->name('auth.logout');

        Route::get('/notes/create' ,[NoteController::class, 'create'])->name('notes.create');
        Route::post('/notes/store' ,[NoteController::class, 'store'])->name('notes.store');



});



//books
Route::get('/books', [BookController::class,'index'])->name('books.index');
Route::get('/books/show/{id}', [BookController::class,'show'])->name('books.show');

//categories
Route::get('/categories', [CategoryController::class,'index'])->name('categories.index');
Route::get('/categories/show/{id}', [CategoryController::class,'show'])->name('categories.show');


//auth
Route::get('/register' ,[AuthController::class,'register'])->name('auth.register');
Route::post('/handle-register' ,[AuthController::class,'handleRegister'])->name('auth.handleregister');

Route::get('/login' ,[AuthController::class,'login'])->name('auth.login');
Route::post('/handle-login' ,[AuthController::class,'handleLogin'])->name('auth.handlelogin');


 
Route::get('/login/github',[AuthController::class,'redirectToProvider'])->name('auth.github.redirect');
Route::get('/login/github/callback',[AuthController::class,'handleProviderCallback'])->name('auth.github.callback');

//search
Route::get('/books', [BookController::class,'index'])->name('books.index');
Route::get('/books/search', [BookController::class,'search'])->name('books.search');
