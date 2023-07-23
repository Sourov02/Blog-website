<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboradController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthorController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',[BlogController::class,'index'])->name('/');
Route::get('blog-details/{slug}',[BlogController::class,'blogDetails'])->name('blog.details');


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->name('dashboard');

    Route::get('/dashboard',[DashboradController::class,'index'])->name('dashboard');


    Route::get('/add-category',[CategoryController::class,'addCategory'])->name('add.category');
    Route::get('/manage-category',[CategoryController::class,'manageCategory'])->name('manage.category');
    Route::post('/new-category',[CategoryController::class,'saveCategory'])->name('new.category');


    Route::get('/category-edit/{id}',[CategoryController::class,'editCategory'])->name('category.edit');
    Route::get('/category-status/{id}',[CategoryController::class,'categoryStatus'])->name('category.status');
    Route::post('/category-delete',[CategoryController::class,'categoryDelete'])->name('category.delete');
    Route::post('/update.category',[CategoryController::class,'updateCategory'])->name('update.category');


    Route::get('/add-author',[AuthorController::class,'addAuthor'])->name('add.author');
    Route::get('/manage-author',[AuthorController::class,'manageAuthor'])->name('manage.author');
    Route::post('/new-author',[AuthorController::class,'saveAuthor'])->name('new.author');

    Route::get('/edit-author/{id}',[AuthorController::class,'editAuthor'])->name('author.edit');
    Route::get('/status-author/{id}',[AuthorController::class,'statusAuthor'])->name('author.status');
    Route::post('/delete-author',[AuthorController::class,'deleteAuthor'])->name('author.delete');
    Route::post('/update-author',[AuthorController::class,'updateAuthor'])->name('author.update');


    Route::get('/add-blog',[BlogController::class,'addBlog'])->name('add.blog');
    Route::get('/manage-blog',[BlogController::class,'manageBlog'])->name('manage.blog');
    Route::post('/new-blog',[BlogController::class,'saveBlog'])->name('new.blog');
    Route::get('/edit-blog',[BlogController::class,'editBlog'])->name('blog.edit');
    Route::post('/delete-blog',[BlogController::class,'deleteBlog'])->name('blog.delete');




});
