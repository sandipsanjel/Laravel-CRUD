<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\sharkController;
use App\Http\Controllers\SingleActionController;
use Illuminate\Support\Facades\Route;
use App\Models\Customer;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Route:: get('/home', function() {
//     return view ('home');
// });

Route::get('/' ,[DemoController::class,'home' ]);

 Route::get('/index',SingleActionController::class); //this method is for the singleactioncontroller whre only one function is invoke 

Route::resource('/index' ,sharkController::class);//for Resourse controller where we can do crud operations

// Route::get('/customers', function () {
// $Customers= customer::all();
// echo "<pre>";
// print_r($Customers);

// });

Route::get('/customers' ,[CustomerController:: class,'create']);
Route::post('/customers' ,[CustomerController:: class,'store']);