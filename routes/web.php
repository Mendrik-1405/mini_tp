<?php
use App\Http\Controllers\CArticle;
use App\Http\Controllers\Cuser;
use App\Http\Controllers\PDFController;
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

//Route::get('/', function () { return view('master'); });

Route::get('/Nouvel-Article', [CArticle::class,"form_Article"]);
Route::get('/listes-article-AI',[CArticle::class,"listArticle"]);
Route::get('/Article/description-{slug}-{id}',[CArticle::class,'get_Article'])->where(['slug'=>'([a-zA-Z0-9\-]+)']);
Route::post('/insert',[CArticle::class,"insert_Article"]);
Route::get('/pdf/{id}', [PDFController::class, 'generatePDF']);

Route::get('users/login',function () { return view('pagelogin');});
Route::get('users/logout',[Cuser::class,'logout_users']);
Route::post('users/connect',[Cuser::class,'connect_users']);