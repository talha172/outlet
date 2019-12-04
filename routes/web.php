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

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('index');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/shirts', function (){
	return view('shirts');
});
Route::get('/casualshirts', function (){
	return view('casualshirts');
});
Route::get('/tshirts', function (){
	return view('tshirts');
});
Route::get('/tuxedoshirts', function (){
	return view('tuxedoshirts');
});
Route::get('/dressshirts', function (){
	return view('dressshirts');
});
Route::get('/products', function (){
	return view('products');
});
Route::get('/pants', function (){
	return view('pants');
});
Route::get('/casualpants', function (){
	return view('casualpants');
});
Route::get('/sweatpants', function (){
	return view('sweatpants');
});
Route::get('/skinnypants', function (){
	return view('skinnypants');
});
Route::get('/shoes', function (){
	return view('shoes');
});
Route::get('/casualshoes', function (){
	return view('casualshoes');
});
Route::get('/boots', function (){
	return view('boots');
});
Route::get('/loafers', function (){
	return view('loafers');
});
Route::get('/formalshoes', function (){
	return view('formalshoes');
});
Route::get('/oxfords', function (){
	return view('oxfords');
});
Route::get('/watches', function (){
	return view('watches');
});
Route::get('/quartzwatches',function (){
	return view('quartzwatches');
});
Route::get('/mechanicalwatches', function (){
	return view('mechanicalwatches');
});
Route::get('/sportswatches', function (){
	return view('sportswatches');
});
Route::get('/digitalwatches', function (){
	return view('digitalwatches');
});
Route::get('/jackets', function (){
	return view('jackets');
});
Route::get('/leatherjackets', function (){
	return view('leatherjackets');
});
Route::get('/hoodies', function (){
	return view('hoodies');
});
Route::get('/blazers', function (){
	return view('blazers');
});
Route::get('/woolenjackets', function (){
	return view('woolenjackets');
});
Route::get('/wallets', function (){
	return view('wallets');
});
Route::get('/belts', function (){
	return view('belts');
});
Route::get('/shades', function (){
	return view('shades');
});
Route::get('/sunglasses', function (){
	return view('sunglasses');
});
Route::get('/readingglasses', function (){
	return view('readingglasses');
});
Route::get('/b1', function (){
	return view('b1');
});
Route::get('/b2', function (){
	return view('b2');
});
Route::get('/b3', function (){
	return view('b3');
});
Route::get('/checkout', function (){
	return view('checkout');
});
Route::get('/confirmation', function (){
	return view('confirmation');
});

