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

Route::get('/',function(){
    return view('welcome');
});
Route::get('/basic','pizzashowcontrol@home');
Route::post('/home','pizzashowcontrol@checklogin');
Route::get('/login','pizzashowcontrol@login');
Route::post('/insert','pizzashowcontrol@insert');
Route::get('/insertpage','pizzashowcontrol@insertpage');
Route::get('/order','pizzashowcontrol@order');
Route::post('/saveorder','pizzashowcontrol@saveorder');
Route::get('/history', 'pizzashowcontrol@history');









// route to process the form
//Route::post('/login', array('uses' => 'pizzashowcontrol@checklogin'));
