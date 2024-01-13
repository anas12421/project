<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\order;
use App\Models\orderDetails;
use Illuminate\Http\Request;

use Session;

class OrderController extends Controller
{
    private $customer, $order;
    public function index(Request $request)
    {
        if (Session::get('customer_id')) {
            $this->customer = Customer::find(Session::get('customer_id'));
        } else {
            $this->validate($request, [
                'name'        => 'required',
                'last_name'   => 'required',
                'password'    => 'required',
                'email'       => 'required|unique:customers,email',
                'mobile'      => 'required|unique:customers,email',
                'delivery'    => 'required',
            ]);
            $this->customer = Customer::add_custome($request);
        }
        $this->validate($request, [
            'delivery' => 'required'
        ]);
        $this->order  = order::order($request, $this->customer->id);
        orderDetails::orderDetails($request, $this->order->id);
        alert()->success('Order Successfull','Check->Deshboard');
        return redirect()->route('home');
        // return $request;
    }
}
