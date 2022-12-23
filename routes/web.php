<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authentication;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ProductController;


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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/',[Authentication::class,'index']);
Route::post('/sign',[Authentication::class,'signIn'])->name('signin');
Route::get('/signIn',[Authentication::class,'index'])->name('signInform');
Route::get('/logout',[Authentication::class,'signOut'])->name('logOut');

Route::group(['middleware' => 'isUser'],function(){
Route::resource('/category',CategoryController::class);

Route::resource('/expense',ExpenseController::class);

Route::resource('/role',RoleController::class);

Route::resource('/product',ProductController::class);

Route::get('/pdf',[ProductController::class,'downloadpdf'])->name('pdf');

});