<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Backend Routes Login Check
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->name('admin.')->middleware('isLogin')->group(function (){
    Route::get('giris','App\Http\Controllers\Back\AuthController@login')->name('login');
    Route::post('giris','App\Http\Controllers\Back\AuthController@loginPost')->name('login.post');
});

/*
|--------------------------------------------------------------------------
| Backend Routes After Login
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->name('admin.')->middleware('isAdmin')->group(function (){
    Route::get('panel','App\Http\Controllers\Back\Dashboard@index')->name('dashboard');
    Route::resource('makaleler','App\Http\Controllers\Back\ArticleController');
    Route::get('deletearticle/{id}','App\Http\Controllers\Back\ArticleController@delete')->name('delete.article');
    Route::get('mesajlar','App\Http\Controllers\Back\ContactController@index')->name('messages');
    Route::get('mesajgöster/{id}','App\Http\Controllers\Back\ContactController@message')->name('show.message');
    Route::get('mesajlar/{id}','App\Http\Controllers\Back\ContactController@deleteMessage')->name('delete.message');
    Route::get('cikis','App\Http\Controllers\Back\AuthController@logout')->name('logout');
});

/*
|--------------------------------------------------------------------------
| Front Routes
|--------------------------------------------------------------------------
*/
    Route::get('/','App\Http\Controllers\Front\Homepage@index')->name('homepage');
    Route::get('/iletisim','App\Http\Controllers\Front\Homepage@contact')->name('contact');
    Route::post('/iletisim','App\Http\Controllers\Front\Homepage@contactPost')->name('contactPost');
    Route::get('/blog/{slug}','App\Http\Controllers\Front\Homepage@single')->name('single');
    Route::get('/kategori/{category}','App\Http\Controllers\Front\Homepage@category')->name('category');
    Route::get('/{sayfa}','App\Http\Controllers\Front\Homepage@page')->name('page');


