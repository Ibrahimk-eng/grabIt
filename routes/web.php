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


//Navbar Header-top-menu pages
Route::get('/contact', 'PagesController@Contact')->name('contact');
Route::get('/login', 'PagesController@login')->name('login');


// All Pages Route
Route::get('/login', 'PagesController@login')->name('login');
Route::get('/registration', 'PagesController@register')->name('register');
Route::get('/', 'PagesController@Home')->name('home');
Route::get('/contact', 'PagesController@contact')->name('contact');
Route::post('/registration', 'PagesController@viewData')->name('register');


// Shop-bar Area
Route::get('/single-product', 'PagesController@SingleProduct')->name('single-product');
Route::get('/product-checkout', 'PagesController@ProductCheckout')->name('product-checkout');
Route::get('/shopping-cart', 'PagesController@ShoppingCart')->name('shopping-cart');
Route::get('/order-confirmation', 'PagesController@OrderConfirmation')->name('order-confirmation');


// Blog-bar Area
Route::get('/blog', 'PagesController@Blog')->name('blog');
Route::get('/blog-details', 'PagesController@Blogdetails')->name('blog-details');


// pages-bar Area
Route::get('/category', 'PagesController@Category')->name('category');
Route::get('/tracking', 'PagesController@Tracking')->name('tracking');
Route::get('/elements', 'PagesController@Elements')->name('elements');


// contact-bar Area
Route::get('/contact', 'PagesController@Contact')->name('contact');



// contact routes
// Route::get('/viewContact', 'ContactController@viewContact')->name('viewContact');
Route::post('/contact', 'ContactController@addContact')->name('addContact');


//Form routes
Route::get('/form', 'PagesController@Form')->name('form');
Route::post('/form', 'ProductsController@addForm')->name('addForm');
// Route::get('/viewForm', 'FormController@viewForm')->name('viewForm');
Route::get('/viewFormData', 'ProductsController@viewForm')->name('viewForm');
Route::get('/products', 'ProductsController@viewProducts')->name('viewProducts');
Route::get('/updateProducts/{id}', 'ProductsController@product_edit')->name('updateProducts');


