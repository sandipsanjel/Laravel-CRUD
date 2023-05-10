<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RegistrationController;
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
    return view('index');
});
// for routing through 
Route::get('/register',[RegistrationController::class,'index']);
Route::post('/register',[RegistrationController::class,'register']);


// Route:: get('/home', function() {
//     return view ('home');
// });

// Route::get('/' ,[DemoController::class,'index' ]);

 Route::get('/index',SingleActionController::class); //this method is for the singleactioncontroller whre only one function is invoke 

Route::resource('/index' ,sharkController::class);//for Resourse controller where we can do crud operations

//to get ti datae of the customers in browser
Route::get('/customers', function () {
$Customers= customer::all();
echo "<pre>";
print_r($Customers);

});


//insert into database
Route::get('/customers/create' ,[CustomerController:: class,'create'])->name('customer.create');
Route::post('/customers' ,[CustomerController:: class,'store']);

//read //selection
Route::get('/view' ,[CustomerController:: class,'view']);


