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

// Route::get('/', function () {
//     return view('Home/home');
// });

Route::get('/','HomeViewController@index');
Route::get('/createContent','ContentViewController@create');
Route::post('/createContentComplete','ContentViewController@store');

Route::get('/', function () {

    // Alert::success('Success Title', 'Success Message');
    return view('home.Home'); 
});





