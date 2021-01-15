<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});

Route::view('/register','register');

Route::post('/login', [UserController::class, 'login']);

Route::post('/register', [UserController::class, 'register']);

Route::get('/', [ProductController::class, 'index']);

Route::get('detail/{product}', [ProductController::class, 'detail'])->name('detail');

Route::get('search', [ProductController::class, 'search'])->name('search');

Route::post('add_to_card', [ProductController::class, 'addToCard']);

Route::get('/cardlist', [ProductController::class, 'cardList'])->name('cardlist');

Route::get('remove_product/{id}', [ProductController::class, 'removeProduct'])->name('remove_Product');






#page url for webpage posts
Route::get('/posts', [PostController::class, 'posts'])->name('posts');

#page to create posts (for only admin user)
Route::get('/posts/create', [PostController::class, 'create'])->name('create.post');

#single post show
Route::get('/posts/{post}', [PostController::class, 'showPost'])->name('show');

#created post save urs + function
Route::post('/posts/save_post', [PostController::class, 'save'])->name('save.post');

#post edit url
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('edit');

#post update url + func
Route::put('/posts/{post}/update_post', [PostController::class, 'update'])->name('update.post');

#delete post
Route::get('/posts/{post}/delete_post', [PostController::class, 'delete'])->name('delete');





Route::get('ordernow', [ProductController::class, 'orderNow'])->name('ordernow');

Route::post('orderplace', [ProductController::class, 'orderPlace']);

Route::get('myorders', [ProductController::class, 'myOrders']);




