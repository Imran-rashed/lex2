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

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});

Route::get('/config-cache', function() {
    Artisan::call('config:cache');
    return "Cache is Config";
});

Route::get('/key-generate', function() {
    Artisan::call('key:generate');
    return "key is generated";
});


Route::get('/', function () {
   // return view('welcome');
    return redirect()->route('context.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware'=>'auth'], function(){

    	// Dashboard
//	Route::get('dashboard', 'DashboardController@index')->name('dashboard');
        //Context
    Route::get('contextlist', 'ContextController@index')->name('context.index');
    Route::get('context/create', 'ContextController@create')->name('context.create');
        //Article
    Route::get('articlelist', 'ArticleController@index')->name('article.index');
    //Route::get('article/{id}', 'ArticleController@single');
    Route::get('article/create', 'ArticleController@create')->name('article.create');
    Route::post('article/save', 'ArticleController@store')->name('article.store');
    

        //Term
    Route::get('termlist', 'TermController@index')->name('term.index');
    Route::get('term/create', 'TermController@create')->name('term.create');
        //Search
    Route::get('advancedsearch', 'AdvnacedSearchController@index')->name('advancedsearch.index');

    //Profile
    Route::get('profile', 'UserProfile@edit')->name('user.profile');
    Route::post('profile/save', 'UserProfile@update')->name('user.profileUpdate');
    //Password
    Route::get('changePassword', 'PasswordController@index')->name('password.index');
    Route::post('changePassword/update', 'PasswordController@store')->name('password.change');


    Route::group(['middleware' => 'admin'], function () {
            //Term
    Route::get('users', 'UserController@index')->name('user.index');
    Route::post('user/create', 'UserController@store')->name('user.create');
    });


});

