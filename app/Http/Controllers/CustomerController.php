<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;


class CustomerController extends Controller
{
    public function create()
    {
        $url = url('/customer');
        $title = "Customer Registration";
        $data = compact('url', 'title');
        return view('customer')->with($data);
    }

    // public function index(){
    //     return view('/customer');
    // }


    public function store(Request $request)
    {
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

        // p($request->all());
        die;
        $customer = new Customer;
        $customer->user_name = $request['name'];
        $customer->email = $request['email'];
        $customer->gender = $request['gender'];
        $customer->address = $request['address'];
        $customer->state = $request['state'];
        $customer->country = $request['country'];
        $customer->dob = $request['dob'];
        $customer->password = $request['password'];
        $customer->save();

        return redirect('/customer');
    }

    //for selection/read operation
    public function view()
    {
        $customers = Customer::all();

         
        // prx($customers->toArray());
        // prx(json_encode($customers->toArray()));

        // echo "<pre>";
        // print_r($customers->toArray());
        // die();

        $data = compact('customers'); //it makes the the arrya of inilialized variable 
        return view('customer-view')->with($data);
    }
    public function delete($id)
    {
        $customer = customer::find($id); //here it find from model wherer we have suppose  protected $primarykey="customer_id";
        if (!is_null($customer)) { //this is the condition to check if customer is null or not  
            $customer->delete();
            return redirect('customer');
        }
    }
    public function edit($id)
    {
        $customer = Customer::find($id);
        $url = url('/customer/update') . "/" . $id;
        $title = "Update Customer";
        $data = compact('customer', 'url', 'title');
        return view('customer')->with($data);
    }
    public function update($id, Request $request)
    {
        // update Query
        // prx($request->all());
        $customer = customer::find($id);
        if (!is_null($customer)) {
            $customer->user_name = $request['name'];
            $customer->email = $request['email'];
            $customer->gender = $request['gender'];
            $customer->address = $request['address'];
            $customer->state = $request['state'];
            $customer->country = $request['country'];
            $customer->dob = $request['dob'];
            $customer->password = md5($request['password']);
            $customer->save();
        }
        return redirect('/customer');
    }
}
