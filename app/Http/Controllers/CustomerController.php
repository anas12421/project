<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use App\Models\Customer;
use App\Models\order;
use Illuminate\Http\Request;
use Session;

class CustomerController extends Controller
{
    private $customer;
    public function index()
    {
        return view('website.customer.login',[
            'currency' => Currency::find(1)
        ]);
    }
    public function register()
    {
        return view('website.customer.register',[
            'currency' => Currency::find(1)
        ]);
    }
    public function dashboard()
    {
        return view('website.customer.dashboard',[
            'currency' => Currency::find(1)
        ]);
    }
    public function edit_profile()
    {
        return view('website.customer.edit_profile',[
            'customer'=>Customer::find(Session::get('customer_id')),
            'currency' => Currency::find(1)
        ]);
    }


    public function login(Request $request) {
        $this->validate($request,[
            'email'       =>'required',
            'password'    =>'required',
        ]);
        $this->customer = Customer::where('email',$request->email)->first();
        if($this->customer){
            if(password_verify($request->password,$this->customer->password)){
                Session::put('customer_id',$this->customer->id );
                Session::put('customer_name',$this->customer->first_name . ' '. $this->customer->last_name);
                return redirect('/customer-dashboard');

            }else{
                return back()->with('messege','Invalide Password');
            }

        }else{
            return back()->with('messege','Invalide Email');
        }
    }


    public function save(Request $request) {
        // return $request; 
       Customer::customer_register($request);
       return redirect('/customer-dashboard');
    }

    public function logout() {
        // foreach(ShoppingCart::all() as $item){
        //     ShoppingCart::remove($item->__raw_id);
        // }
        Session::forget('customer_id');
        Session::forget('customer_name');
        return redirect('/');
    }

    public function profile(){
        return view('website.customer.profile',[
            'customer'=>Customer::find(Session::get('customer_id')),
            'currency' => Currency::find(1)
        ]);
     }
     public function changePassword(){
        return view('website.customer.changePassword',[
            'currency' => Currency::find(1)
        ]);
     }
     public function change(Request $request){
        $this->validate($request,[
            'old_password'            =>'required',
            'new_password'            =>'required',
            'confirm_password'        =>'required',
        ]);
        $this->data = Customer::find($request->id);
        if(password_verify($request->old_password,$this->data->password)){
            if($request->new_password == $request->confirm_password ){
                Customer::change($request);
                alert()->success('Successfully Change Password.');
                return redirect('/customer-change-Password');
            }else{
                return back()->with('messege','Do not match New Password and Confirm Password');
            }  
        }else{
            return back()->with('messege','Do not match Old Password and New Password');
        }
        return back();
        
     }


     public function order(){
        return view('website.customer.order',[
            'order_all'=>order::where('customer_id',Session::get('customer_id'))->orderBy('id','desc')->get(),
            'currency' => Currency::find(1)
        ]);
    }
    public function details(Request $request){
        return view('website.customer.details',[
            'orders'=> Order::find($request->id),
            'order_all'=>Order::where('customer_id',Session::get('customer_id'))->orderBy('id','desc')->first(),
            'currency' => Currency::find(1)
            
        ]);
    }
    public function review(Request $request){
        return view('website.customer.customer_review',[
            'orders'=> Order::find($request->id),
            'order_all'=>Order::where('customer_id',Session::get('customer_id'))->orderBy('id','desc')->first(),
            'currency' => Currency::find(1)
            
        ]);
    }
}
