<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('profile','UserController@profile');
Route::get('news','BlogController@index');
Route::get('/home', function () {
    return view('welcome');
});
Route::get('/profile', 'HomeController@showProfile');
Route::post('/profile', 'HomeController@update_avatar');

Route::group(['middleware' => 'auth'], function () {
    Route::group(['middleware' => ['web']],function(){
        Route::resource('blog','BlogController');
        Route::get('/getPDF', 'PDFControl@getPDF');
        Route::get('campsite',function(){
            return view ('campsite');
        });
        Route::get('/payticket',function(){
            return view ('payticket');
        });
    });
});
Route::get('user/activation/{token}', 'Auth\RegisterController@activateUser')->name('user.activate');

Route::get('create','BlogController@create');
Route::get('about',function(){
    return view ('about');
});
Route::get('mainstage',function(){
    return view ('mainstage');
});
Route::get('tournaments',function(){
    return view ('tournament');
});
Route::post('asd/{user}',['uses'=>'UserContr@pay']);
Auth::routes();




