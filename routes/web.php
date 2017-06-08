<?php

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


Route::group(['namespace'=>'Admin','prefix'=>'admin'],function (){
    Route::get('login','SessionController@showLogin')->name('admin_session_login');#展示后台登陆页路由
    Route::post('login','SessionController@login')->name('admin_session_login');#处理后台登陆路由
    Route::get('logout','SessionController@logout')->name('admin_session_logout');#处理后台登陆路由
    Route::get('','IndexController@index')->name('admin_index_index');#展示后台登陆页路由
    #----------------------------------------------------------------------------------------------
    Route::resource('member','MemberController');
    Route::resource('menu','MenuController');



});
Route::group(['namespace'=>'Home'],function (){
    Route::get('login','SessionController@showLogin')->name('home_session_login');#展示后台登陆页路由
    Route::post('login','SessionController@login')->name('home_session_login');#处理后台登陆路由
    Route::get('register','SessionController@register')->name('home_session_register');#处理后台登陆路由

});


//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
