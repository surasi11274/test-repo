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

//Home
Route::get('/','HomeViewController@index');

//create content
Route::get('/createContent','ContentViewController@create');

//post content success
Route::post('/createContentComplete','ContentViewController@store');

//creator
Route::get('/creator/group1','CreatorViewController@index1');
Route::get('/creator/group2','CreatorViewController@index2');
Route::get('/creator/group3','CreatorViewController@index3');
Route::get('/creator/group4','CreatorViewController@index4');
Route::get('/creator/group5','CreatorViewController@index5');

//show content creator
Route::get('/creator/showcontent','CreatorViewController@create');

Route::get('/', function () {
    // Alert::success('Success Title', 'Success Message');
    return view('home.Home'); 
});





