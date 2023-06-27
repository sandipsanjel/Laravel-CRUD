<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RegistrationController;
// use App\Http\Controllers\DemoController;
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


Route::get('/', function () {
    return view('index');
});

Route::get('/register',[RegistrationController::class,'index']);
Route::post('/register',[RegistrationController::class,'register']);

Route::get('/customer/create',[CustomerController::class,'create'])->name('customer.create');
Route::get('/customer/delete/{id}',[CustomerController::class,'delete'])->name('customer.delete');
Route::get('/customer/force-delete/{id}',[CustomerController::class,'forceDelete'])->name('customer.force-delete');
Route::get('/customer/restore/{id}',[CustomerController::class,'restore'])->name('customer.restore');
Route::get('/customer/edit/{id}',[CustomerController::class,'edit'])->name('customer.edit');
Route::post('/customer/update/{id}',[CustomerController::class,'update'])->name('customer.update');
Route::get('/customer',[CustomerController::class,'view']);
Route::get('/customer/trash',[CustomerController::class,'trash'])->name('customer.trash');
Route::post('/customer',[CustomerController::class,'store']);

Route::get('/get-all-session',function(){
    $session = session()->all();
    prx($session);
});

Route::get('/set-session',function(Request $request){
    $request->session()->put('user_name','Abhishek Choksi');
    $request->session()->put('user_id','123');
    $request->session()->flash('status','Success');
    return redirect('get-all-session');
});

Route::get('/destroy-session',function(Request $request){
    session()->forget(['user_name','user_id']);
    //session()->forget('user_id');
    return redirect('get-all-session');
});

Route::get('/upload',[FileUploadController::class,'index']);
Route::post('/upload',[FileUploadController::class,'upload']);
