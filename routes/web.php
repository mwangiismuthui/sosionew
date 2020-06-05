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


Route::get('/','FrontEndController@index')->name('index');
Route::get('/our-products/sosio-fruits-and-vegetables','FrontEndController@products')->name('products');
Route::get('/about-sosio-fruits-and-vegetables','FrontEndController@about')->name('about');
Route::get('/contact-sosio-fruits-and-vegetables','FrontEndController@contact')->name('contact');
Route::get('/quality_assurance','FrontEndController@quality_assurance')->name('quality_assurance');
Route::get('/sosio-fruits-and-vegetables/order/online','FrontEndController@order')->name('order');
Route::get('/fresh-fruits/kenya-mangoes','FrontEndController@mangoes')->name('mangoes');
Route::get('/fresh-vegetables/kenya-carrots','FrontEndController@carrots')->name('carrots');
Route::get('/fresh-fruits/kenyan-avocadoes','FrontEndController@avocadoes')->name('avocadoes');
Route::get('/fresh-herbs/herbs-in-kenya','FrontEndController@herbs')->name('herbs');
Route::get('/fresh-spices/spices-in-kenya','FrontEndController@spices')->name('spices');
Route::get('/fresh-fruits/kenya-fresh-apples','FrontEndController@apples')->name('apples');
Route::get('/fresh-herbs/kenya-dill','FrontEndController@dill')->name('dill');
Route::get('/fresh-herbs/kenya-oregano','FrontEndController@oregano')->name('oregano');
Route::get('/fresh-friuts/kenya-tree-tomato','FrontEndController@tree_tomato')->name('tree_tomato');
Route::get('/fresh-vegetables/kenya-beetroot','FrontEndController@beetroot')->name('beetroot');
Route::get('/kenya-vegetables/kenya-brocolli','FrontEndController@brocolli')->name('brocolli');
Route::get('/kenya-vegetables/butternut-in-kenya','FrontEndController@butternut')->name('butternut');
Route::get('/herbs-in-kenya/kenya-marjoram','FrontEndController@marjoram')->name('marjoram');
Route::get('/fresh-vegetables/cabbages-in-kenya','FrontEndController@cabbage')->name('cabbage');
Route::get('/kenya-thorn-mellon/thorn-mellon','FrontEndController@thorn_mellon')->name('thorn_mellon');
Route::get('/fresh-fruits/strawberries-in-kenya','FrontEndController@straw_berries')->name('straw_berries');
Route::get('/fresh-fruits/kenya-passion-fruit','FrontEndController@passion_fruit')->name('passion_fruit');
Route::get('/fresh-fruits/kenya-pears','FrontEndController@pears')->name('pears');
Route::get('/fresh-kenyan-rosemary/rosemary-in-kenya','FrontEndController@rosemary')->name('rosemary');
Route::get('/kenyan-herbs/fresh-curry-leaves','FrontEndController@curry_leaves')->name('curry_leaves');
Route::get('/kenya-lemon-grass/fresh-lemon-grass','FrontEndController@lemon_grass')->name('lemon_grass');


// post routes//
Route::get('/contact/post','FrontEndController@contact_form')->name('contact_form');
Route::get('/order/post','FrontEndController@order_form')->name('order_form');
Route::get('/newsletter','FrontEndController@newsletter')->name('newsletter');



Route::get('/dashboard/index', 'HomeController@dashboard')->name('dashboard');

// ..................Products..............................//
Route::get('/product/index', 'ProductController@index')->name('product.index');
Route::post('/product/store', 'ProductController@store')->name('product.store');
Route::get('/product/edit/{id}', 'ProductController@edit')->name('product.edit');
Route::post('/product/update/{id}', 'ProductController@update')->name('product.update');
Route::delete('/product/destroy/', 'ProductController@destroy')->name('product.destroy');
Route::delete('/photo/destroy/', 'ProductController@photoDestroy')->name('photo.destroy');

// ..................Category..............................//
Route::get('/category/index', 'CategoryController@index')->name('category.index');
Route::post('/category/store', 'CategoryController@store')->name('category.store');
Route::get('/category/edit/{id}', 'CategoryController@edit')->name('category.edit');
Route::post('/category/update/{id}', 'CategoryController@update')->name('category.update');
Route::delete('/category/destroy/', 'CategoryController@destroy')->name('category.destroy');

// ..................Slider..............................//
Route::get('/slider/index', 'SliderController@index')->name('slider.index');
Route::post('/slider/store', 'SliderController@store')->name('slider.store');
Route::get('/slider/edit/{id}', 'SliderController@edit')->name('slider.edit');
Route::post('/slider/update/{id}', 'SliderController@update')->name('slider.update');
Route::delete('/slider/destroy/', 'SliderController@destroy')->name('slider.destroy');
