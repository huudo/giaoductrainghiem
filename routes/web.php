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
Route::group(['middleware' => 'locale'], function() {
	Route::get('/', function () {
	    return view('welcome');
	});
	Route::get('/', function() 
	{
	   return View::make('pages.home');
	}); 
	Route::get('/contact', function() 
	{ 
	   return View::make('pages.contact');
	 
	});
        Route::get('/gallery', function() 
	{ 
	   return View::make('pages.gallery');
	 
	});
	Route::get('/prices', function()
	{
	   return View::make('pages.prices');
	});
	Route::get('/news', function()
	{
	   return View::make('pages.news');
	});
	Route::get('/events', function(){
	   return View::make('pages.events');
	});
	Route::get('single-event', function()
	{
	   return View::make('pages.single-event');
	});
	Route::get('accomodations',function()
	{
	   return View::make('pages.accomodations');
	});
	Route::get('single-accomodation',function()
	{
	   return View::make('pages.single-accomodation');
	});
	Route::get('single-product',function()
	{
	   return View::make('pages.single-product');
	});
	Route::get('single-product-1',function()
	{
	   return View::make('pages.single-product-1');
	});
	Route::get('single-product-2',function()
	{
	   return View::make('pages.single-product-2');
	});
	Route::get('single-product-3',function()
	{
	   return View::make('pages.single-product-3');
	});
	Route::get('single-product-4',function()
	{
	   return View::make('pages.single-product-4');
	});
	Route::get('single-product-5',function()
	{
	   return View::make('pages.single-product-5');
	});

	Route::get('shop-cart',function()
	{
	   return View::make('pages.shop-cart');
	});
	Route::get('shop-checkout',function()
	{
	   return View::make('pages.shop-checkout');
	});
	Route::get('blog-masonry',function()
	{
	   return View::make('pages.blog-masonry');
	});
	Route::get('single-post-right-sidebar',function()
	{
	   return View::make('pages.single-post-right-sidebar');
	});

	Route::get('single-post-left-sidebar',function()
	{
	   return View::make('pages.single-post-left-sidebar');
	});
	Route::get('single-post-full-width',function()
	{
	   return View::make('pages.single-post-full-width');
	});



});
Route::get('change-language/{lang}',[
	'uses' => 'HomeController@changeLang',
	'as' => 'changeLang'
]);
