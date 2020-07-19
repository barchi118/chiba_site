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

Route::get('/', function () {
    return view('welcome');
});
Route::get('main','MainController@index');
Route::get('profile','ProfileController@index');
Route::get('mail','MailController@index');//http://localhost/mysite2/public/mailでアクセスしたときにmail/indexを開くため
Route::post('mail','MailController@sendMail'); //送信ボタンを押したときにメールを送るため