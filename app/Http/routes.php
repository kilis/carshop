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

Route::get('about/contact', [
    'as' => 'contact',
    'uses' => 'PagesController@getContact'
]);
Route::get('/parts', [
    'as' => 'parts',
    'uses' => 'PagesController@getParts'
]);
Route::get('part_img/get/{id}.notjpg', [
	'as' => 'get_part_img', 'uses' => 'PartController@get']);
Route::resource('contact', 'PagesController');
Route::resource('get', 'PartController');
/*
Laravel dynamic menu
*/

Menu::make('MyNavBar', function($menu){

  $menu->add('Sākums','./');
  $menu->add('Detaļas', URL::route('parts'));
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
	Route::get('/', [
		'as' => 'index',
		'uses' => 'PartsController@index'
	]);
    Route::get('/home', 'HomeController@index');
    Route::get('/addManifactures', 'HomeController@addManifactures');
    Route::get('/addParts', 'HomeController@addParts');
    Route::get('/addCategory', 'HomeController@addCategory');
	Route::get('/admin/part/new', 'PartController@newPart');
	Route::get('/admin/part', 'PartController@index');
	Route::get('/admin/part/destroy/{id}', 'PartController@destroy');
	Route::post('/admin/part/save', 'PartController@add');
    Route::get('/parts', 'PagesController@getParts');
	Route::get('/addProduct/{productId}', 'CartController@addItem');
	Route::get('/removeItem/{productId}', 'CartController@removeItem');
	Route::post('/checkout', 'OrderController@checkout');
	Route::get('order/{orderId}', 'OrderController@viewOrder');
	Route::get('order', 'OrderController@index');
	Route::get('download/{orderId}/{filename}', 'OrderController@download');
	Route::get('/cart', 'CartController@showCart');
	Route::get('/about/contact', function () {
        return view('pages.contact');
    });
});
