<?php

/*
|--------------------------------------------------------------------------
| Webルート
|--------------------------------------------------------------------------
|
| ここでアプリケーションのWebルートを登録できます。"web"ルートは
| ミドルウェアのグループの中へ、RouteServiceProviderによりロード
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('home', 'HomeController@index')->name('home');

    Route::get('profile', 'UserController@profile');
    Route::get('account', 'UserController@account');
//Route::post('profile', 'UserController@create');
//Route::get('profile/{user}/edit', 'UserController@edit')->name('user.edit');
    Route::put('profile', 'UserController@updateProfile');
    Route::put('account', 'UserController@updateAccount');


    Route::get('/{url_name}', 'FollowController@show');
    Route::post('/{url_name}', 'FollowController@create');
    Route::delete('/{url_name}', 'FollowController@delete');

    Route::post('tweet', 'TweetController@tweet');


});



//Route::get('profile', 'MockController@profile');
//Route::post('profile', 'MockController@profile');
Route::get('search', 'MockController@search');
Route::get('user', 'MockController@user');
Route::get('following', 'MockController@following');
Route::get('followers', 'MockController@followers');


