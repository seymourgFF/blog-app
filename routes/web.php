<?php

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


Route::group(['namespace'=>'Post'],function (){
    Route::get('/','IndexController')->name('main');
    Route::get('/posts', 'IndexController')->name('posts');
    Route::get('/posts/create', 'CreateController')->name('post.create');
    Route::post('/posts', 'StoreController')->name('post.store');
    Route::get('/posts/{post}', 'ShowController')->name('post.show');
    Route::get('/posts/{post}/edit', 'EditController')->name('post.edit');
    Route::patch('/posts/{post}', 'UpdateController')->name('post.update');
    Route::delete('/posts/{post}', 'DeleteController')->name('post.delete');
});
Route::group(['namespace'=>'Category'],function (){
    Route::get('/category', 'IndexController')->name('cats');
    Route::get('/category/{cat}', 'ShowController')->name('cats.show');

});
Route::group(['namespace'=>'Page'],function (){
    Route::get('/contacts','ContactController@index')->name('contact');
    Route::get('/about','AboutController@index')->name('about');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['namespace'=>'Admin\Post', 'prefix'=>'admin'],function (){
        Route::get('/posts/create', 'CreateController')->name('post.create');
        Route::post('/posts', 'StoreController')->name('post.store');
        Route::get('/posts/{post}/edit', 'EditController')->name('post.edit');
        Route::patch('/posts/{post}', 'UpdateController')->name('post.update');
        Route::delete('/posts/{post}', 'DeleteController')->name('post.delete');
});
