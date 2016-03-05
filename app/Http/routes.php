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
Route::get('test', [
    'as' => 'test',
    'uses' => 'PagesController@getTest'
]);
Route::get('about/contact', [
    'as' => 'contact',
    'uses' => 'PagesController@getContact'
]);
Route::resource('contact', 'PagesController');
/*
Laravel dynamic menu
*/
Menu::make('MyNavBar', function($menu){

  $menu->add('Sākums','./');
  $menu->add('Ražotāji');
  $menu->add('Katalogs');
  $menu->add('Kontakti', URL::route('contact'));

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
    Route::get('/addManifactures', 'HomeController@addManifactures');
    Route::get('/addParts', 'HomeController@addParts');
    Route::get('/addCategory', 'HomeController@addCategory');
    Route::get('/', function () {
        return view('welcome');
    });
});
