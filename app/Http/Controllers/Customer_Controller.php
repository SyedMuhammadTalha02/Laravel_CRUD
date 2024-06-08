<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class Customer_Controller extends Controller
{
    public function create(){
        $title = 'Create Customer';
        $url = url('/customer');
        $customer = new Customer();
        $data = compact('url', 'title', 'customer');
        return view('Customer')->with($data);
    }
    
    
    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'pass'=>'required',
            'address'=>'required',
            'gender'=>'required',
            'date'=>'required',
            'city'=> 'required'
        ]);
        $customer = new Customer;
        $customer->name = $request['name']; 
        $customer->email = $request['email'];
        $customer->password = $request['pass'];
        $customer->address = $request['address'];
        $customer->gender = $request['gender'];
        $customer->city = $request['city'];
        $customer->dob = $request['date'];
        $customer->save();
        return redirect('/customer/view');
        // echo '<pre>';
        // print_r($request->all());
    }

    public function view(Request $request){
        $search = $request['search'] ?? "";
        if($search != ""){
            $customers = Customer::where('name', "LIKE", "%$search%")->paginate(10);
        }
        else{
            $customers = Customer::paginate(10);
        }
        
        $data = compact('customers', 'search');
        return view('customer_view')->with($data);
        // echo '<pre>';
        // print_r($request->all());
    }
    Public function trash(){
        $customers= Customer::onlyTrashed()->get();
        $data = compact('customers');
        return view ('customer_trash')->with($data);
        }
    

    Public function delete($id){
        $customer= Customer::find($id);
        if (!is_null($customer)){
            $customer->delete();
            return redirect('/customer/view');
        }
    }
    
    Public function restore($id){
        $customer= Customer::withTrashed()->find($id);
        if (!is_null($customer)){
            $customer->restore();
            return redirect('/customer/view');
        }
    }

    Public function force_delete($id){
        $customer= Customer::withTrashed()->find($id);
        if (!is_null($customer)){
            $customer->forceDelete();
            return redirect('/customer/view');
        }
    }

    public function edit($id){
        $customer = Customer::find($id);
        if (is_null($customer)){
            return redirect('/customer/view');
        }
        else{
        $title = 'Update Customer';
        $url= url('/customer/update') . '/' . $id;
        $data = compact('customer', 'url', 'title');
        return view('customer')->with($data);
        }
    }

    public function update($id, Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            // 'pass'=>'<PASSWORD>',
            'address'=>'required',
            'gender'=>'required',
            'date'=>'required',
            'city'=> 'required'
        ]);
        $customer = Customer::find($id);
        $customer->name = $request['name']; 
        $customer->email = $request['email'];
        // $customer->password = $request['pass'];
        $customer->address = $request['address'];
        $customer->gender = $request['gender'];
        $customer->city = $request['city'];
        $customer->dob = $request['date'];
        $customer->save();
        return redirect('/customer/view');
        // echo '<pre>';
        // print_r($request->all());
       
    }

}