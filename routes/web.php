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

Auth::routes();

Route::get('/', 'ItemsController@showItems')->name('top');
Route::get('/items/{item}', 'ItemsController@showItemDetail')->name('item');

Route::name('product.')
    ->group(function () {
        Route::get('/a', 'ProductController@index')->name('index');
        Route::get('/product/{id}', 'ProductController@show')->name('show');
        //Route::get('/', 'ItemsController@showItems')->name('top');
    });

Route::get('sells', 'ProductController@showSellForm')->name('product.sell');
Route::post('sells', 'ProductController@sellItem')->name('sells');

Route::name('line_item.')
    ->group(function () {
        Route::post('/line_item/create', 'LineItemController@create')->name('create');
        Route::post('/line_item/delete', 'LineItemController@delete')->name('delete');
    });

Route::name('cart.')
    ->group(function () {
        Route::get('/cart', 'CartController@index')->name('index');
        Route::get('/cart/checkout', 'CartController@checkout')->name('checkout');
        Route::get('/cart/success', 'CartController@success')->name('success');
    });

Route::middleware('auth')
    ->group(function () {
        Route::get('items/{item}/buy', 'ItemsController@showBuyItemForm')->name('item.buy');
        Route::post('items/{item}/buy', 'ItemsController@buyItem')->name('item.buy');
        Route::get('sell', 'SellController@showSellForm')->name('sell');
        Route::post('sell', 'SellController@sellItem')->name('sell');
    });

Route::prefix('mypage')
    ->namespace('MyPage')
    ->middleware('auth')
    ->group(function () {
        Route::get('edit-profile', 'ProfileController@showProfileEditForm')->name('mypage.edit-profile');
        Route::post('edit-profile', 'ProfileController@editProfile')->name('mypage.edit-profile');
        Route::get('sold-items', 'SoldItemsController@showSoldItems')->name('mypage.sold-items');
    });
