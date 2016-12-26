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

Route::get('/', 'StaticPagesController@home');
Route::get('/help', 'StaticPagesController@help');
Route::get('/about', 'StaticPagesController@about');
