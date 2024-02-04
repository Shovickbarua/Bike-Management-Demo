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
<<<<<<< HEAD
use App\Http\Controllers\Old_sale;
=======
use App\Http\Controllers\IncomeController;
>>>>>>> c1b1bb4f7cececa3c914f07d81f64a9466d4c6c1


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
/*Authentication*/
Route::get('/',[Authentication::class,'index']);
Route::post('/sign',[Authentication::class,'signIn'])->name('signin');
Route::get('/signIn',[Authentication::class,'index'])->name('signInform');
Route::get('/logout',[Authentication::class,'signOut'])->name('logOut');



Route::group(['middleware' => 'isUser'],function(){

Route::get('/dashboards',[Dashboard::class,'dash'])->name('dash');

Route::resource('/category',CategoryController::class);
<<<<<<< HEAD

Route::resource('/expense',ExpenseController::class);

Route::resource('/role',RoleController::class);

/*Product*/
Route::resource('/product',ProductController::class);
=======
// Expense
Route::resource('/expense',ExpenseController::class);
Route::get('/expenses',[ExpenseController::class,'ex_reports'])->name('ex_reports');
Route::get('/expenses/pdf',[ExpenseController::class,'ex_pdf'])->name('ex_report');

// Income
Route::resource('/income',IncomeController::class);
Route::get('/incomes',[IncomeController::class,'in_reports'])->name('in_reports');
Route::get('/incomes/pdf',[IncomeController::class,'in_pdf'])->name('in_report');
Route::get('/daily_incomes',[IncomeController::class,'insert_daily'])->name('insert_daily');
Route::get('/daily_incomes/show',[IncomeController::class,'daily'])->name('daily');

Route::resource('/role',RoleController::class);
Route::get('/delete/{id}',[RoleController::class,'destroy'])->name('destroy');

/*Product*/
Route::resource('/product',ProductController::class);
Route::get('/products_stock',[ProductController::class,'report'])->name('stock_reports');//Product Stock
>>>>>>> c1b1bb4f7cececa3c914f07d81f64a9466d4c6c1
Route::get('/products',[ProductController::class,'indexsale'])->name('indexsale');

/*Bike*/
Route::resource('/bike',BikeController::class);
<<<<<<< HEAD

/*Bike Sale*/
Route::resource('/bike_sale',BikesaleController::class);
Route::get('/bike_sales',[BikesaleController::class,'bikeinvoice'])->name('bikeinvoice');
=======
Route::get('/bike_stock',[BikeController::class,'bike_stocks'])->name('bike_stocks');

/*Bike Sale*/
Route::resource('/bike_sale',BikesaleController::class);
Route::get('/bike_sales/{invoiceId}',[BikesaleController::class,'bikeinvoice'])->name('bikeinvoice');
Route::get('/bike_details/{invoiceId}',[BikesaleController::class,'saledetails'])->name('saledetails');
Route::get('/bike_report',[BikesaleController::class,'bike_reports'])->name('bike_reports');
Route::get('/bike_report/pdf',[BikesaleController::class,'bike_pdf'])->name('bike_report');
>>>>>>> c1b1bb4f7cececa3c914f07d81f64a9466d4c6c1

/*Product Sale */
Route::resource('/sale',SaleController::class);
Route::get('/sales/{product_name}',[SaleController::class,'add_sales'])->name('add_sale');
<<<<<<< HEAD
Route::get('/product_sales/reports',[SaleController::class,'reports'])->name('reports');
Route::get('/product_report',[SaleController::class,'product_report'])->name('pro_report');
Route::get('/show_sale',[SaleController::class,'show_sale'])->name('show_sale');
Route::get('/invoice/{invoiceId}',[SaleController::class,'invoice'])->name('invoice');
=======
Route::get('/product_sales/reports',[SaleController::class,'reports'])->name('reports');//Sale Report
Route::get('/product_report',[SaleController::class,'product_report'])->name('pro_report');//Sale Report
Route::get('/show_sale',[SaleController::class,'show_sale'])->name('show_sale');
Route::get('/invoice/{invoiceId}',[SaleController::class,'invoice'])->name('invoice');
Route::get('/pos_invoice/{invoiceId}',[SaleController::class,'pos_invoice'])->name('pos_invoice');
>>>>>>> c1b1bb4f7cececa3c914f07d81f64a9466d4c6c1

/*Old Sale Add */
Route::get('/add_old_bike_sales',[BikesaleController::class,'add_old_bike_sale'])->name('add_old_bike_sale');
Route::get('/add_old_sales',[SaleController::class,'add_old_sale'])->name('add_old_sale');

<<<<<<< HEAD
/*Bike Service*/
=======
//Report

/*Bike Service*/
Route::resource('/services',BikeServiceController::class);
>>>>>>> c1b1bb4f7cececa3c914f07d81f64a9466d4c6c1
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