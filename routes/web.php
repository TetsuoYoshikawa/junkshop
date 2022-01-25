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

Route::middleware('auth')
    ->group(function () {
        Route::get('/sell', 'SellController@showSellForm')->name('sell');
        Route::post('/sell', 'SellController@sellItem')->name('sell');
    });

Route::name('line_item.')
    ->group(function () {
        Route::post('/line_item/create', 'LineItemController@create')->name('create');
        Route::post('/line_item/delete', 'LineItemController@delete')->name('delete');
    });

Route::middleware('auth')
    ->name('cart.')
    ->group(function () {
        Route::get('/cart', 'CartController@index')->name('index');
        Route::get('/cart/checkout', 'CartController@checkout')->name('checkout');
        Route::get('/cart/success', 'CartController@success')->name('success');
    });

Route::prefix('mypage')
    ->namespace('MyPage')
    ->middleware('auth')
    ->group(function () {
        Route::get('/edit-profile', 'ProfileController@showProfileEditForm')->name('mypage.edit-profile');
        Route::post('/edit-profile', 'ProfileController@editProfile')->name('mypage.edit-profile');
        Route::get('/sold-items', 'SoldItemsController@showSoldItems')->name('mypage.sold-items');
        Route::post('/sold-items/delete', 'SoldItemsController@delete')->name('sold-items.delete');
    });
