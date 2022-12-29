<?php
use App\HTTP\Controllers\PostController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('posts',[PostController::class,'index'])->name('posts');;

 Route::get('post/create',[PostController::class,'create']);
Route::post('post/insert',[PostController::class,'insert'])->name('post.insert');
Route::get('post/edit/{id}',[PostController::class,'edit'])->name('post.edit');
Route::post('post/update/{id}',[PostController::class,'update'])->name('post.update');
Route::get('post/delete/{id}',[PostController::class,'delete'])->name('post.delete');


