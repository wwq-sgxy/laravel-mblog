<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| 在此处为应用程序注册 web 路由。这些路由被 RouteServiceProvider 加载，
| 它里面有一个包含 "web" 中间件组的路由组。现在就来写点东西吧！
|
*/

Route::get('/', 'StaticPagesController@home')->name('home');
Route::get('/help', 'StaticPagesController@help')->name('help');
Route::get('/about', 'StaticPagesController@about')->name('about');
Route::get('/contact', 'StaticPagesController@contact')->name('contact');

Route::get('signup', 'UsersController@create')->name('signup');
Route::resource('users', 'UsersController',[
  'parameters' => [ 'users' => 'id'],
  'except' =>['create']
]);

Route::get('login', 'SessionsController@create')->name('login');
Route::post('login', 'SessionsController@store')->name('login');
Route::delete('logout', 'SessionsController@destroy')->name('logout');
