<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authentication;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\BikeController;
use App\Http\Controllers\BikesaleController;
use App\Http\Controllers\BikeServiceController;


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

Route::get('/dashboards',[Dashboard::class,'dash'])->name('dash');

Route::resource('/category',CategoryController::class);

Route::resource('/expense',ExpenseController::class);

Route::resource('/role',RoleController::class);

Route::resource('/product',ProductController::class);
Route::get('/products',[ProductController::class,'indexsale'])->name('indexsale');

Route::resource('/bike',BikeController::class);

Route::resource('/bike_sale',BikesaleController::class);
Route::get('/bike_sales',[BikesaleController::class,'bikeinvoice'])->name('bikeinvoice');

Route::resource('/sale',SaleController::class);
Route::get('/sales/{product_name}',[SaleController::class,'add_sales'])->name('add_sale');
Route::get('/product_sales/reports',[SaleController::class,'reports'])->name('reports');
Route::get('/product_report',[SaleController::class,'product_report'])->name('pro_report');
Route::get('/show_sale',[SaleController::class,'show_sale'])->name('show_sale');
Route::get('/invoice/{invoiceId}',[SaleController::class,'invoice'])->name('invoice');

Route::get('service/first',[BikeServiceController::class,'index'])->name('index');
Route::get('service/second',[BikeServiceController::class,'second'])->name('second');
Route::get('service/third',[BikeServiceController::class,'third'])->name('third');
Route::get('service/fourth',[BikeServiceController::class,'fourth'])->name('fourth');
Route::get('service/fifth',[BikeServiceController::class,'fifth'])->name('fifth');
Route::get('service/sixth',[BikeServiceController::class,'sixth'])->name('sixth');
Route::get('service/seventh',[BikeServiceController::class,'seventh'])->name('seventh');
Route::get('service/eighth',[BikeServiceController::class,'eighth'])->name('eighth');

Route::get('/pdf',[ProductController::class,'downloadpdf'])->name('pdf');

});