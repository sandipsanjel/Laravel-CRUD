<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;


class CustomerController extends Controller
{
    public function create(){
        $url = url('/customers');
        $title = "Customer Registration";
        $data = compact('url','title');
        return view('customer')->with($data);
    }

    // public function index(){
    //     return view('/customer');
    // }
    

    public function store(Request $request){
        // $request->validate(
        //     [
        //         'name'=>'required',
        //         'email'=>'required|email',
        //         'password'=>'required|confirmed',
        //         'password_confirmation'=>'required',
        //         'country'=>'required',
        //         'state'=>'required' ,               
        //         'address'=>'address'                
        //     ]
        // );

        // echo "<pre>";
        // print_r($request->all());

        // Insert Query
        $customer = new Customer;
        $customer->user_name = $request['name'];
        $customer->email = $request['email'];
        $customer->gender = $request['gender'];
        $customer->address = $request['address'];
        $customer->state = $request['state'];
        $customer->country = $request['country'];
        $customer->dob = $request['dob'];
        $customer->password = md5($request['password']);
        $customer->save();

        return redirect('/view');
    }
    
//for selection/read operation
    public function view(){
        $customers= customer::all();

        // echo "<pre>";
        // print_r($customers);
        // echo "</pre>";
        
        $data= compact('customers'); //it makes the the arrya of inilialized variable 
        return view('customer-view')->with($data);
        
    }
}


