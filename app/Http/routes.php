<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
	
Route::get('/', function () {
    return view('welcome');
});
Route::get('/f', function () {
    return view('pages.contact');
});
Route::get('test', [
    'as' => 'test',
    'uses' => 'PagesController@getTest'
]);
Route::get('contact', [
    'as' => 'contact',
    'uses' => 'PagesController@getContact'
]);
Route::resource('contact', 'PagesController');
/*
Laravel dynamic menu
*/
Menu::make('MyNavBar', function($menu){

  $menu->add('Home','#');
  $menu->add('test');
  $menu->add('About',  URL::route('contact'));

});
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::auth();
    Route::get('/home', 'HomeController@index');
    Route::get('/', function () {
        return view('welcome');
    });
});
