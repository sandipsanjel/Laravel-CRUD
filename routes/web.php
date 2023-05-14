<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\sharkController;
use App\Http\Controllers\SingleActionController;
use Illuminate\Support\Facades\Route;
use App\Models\Customer;
use Illuminate\Http\Request;



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
Route::get('/customer/create' ,[CustomerController:: class,'create'])->name('customer.create');
//to post in database 
Route::post('/customer' ,[CustomerController:: class,'store']);
//read //selection section
Route::get('/customer' ,[CustomerController:: class,'view']);
//edit update operation
Route::get('/customer/edit/{id}', [CustomerController:: class,'edit'])->name('customer.edit');
Route::post('/customer/update/{id}', [CustomerController:: class,'update'])->name('customer.update');
//To delete 
Route::get('/customer/delete/{id}', [CustomerController:: class,'delete'])->name('customer.delete');

//for session

Route::get('/get-all-session', function(){
    $session = session()->all(); //seesion is global function that access the all data
 p($session); 


});


Route::get('set-session',function ( Request $request) {
$request->session()-> put('user_name','sandip sanjel');
$request->session()->put('user_id','45687');
return redirect('get-all-session');
});



