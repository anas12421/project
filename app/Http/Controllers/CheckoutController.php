<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use App\Models\Customer;
use Illuminate\Http\Request;
use Session;

class CheckoutController extends Controller
{
    private $customer, $order;
    public function index()
    {
        if (Session::get('customer_id')) {
            $this->customer = Customer::find(Session::get('customer_id'));
        } else {
            $this->customer = ' ';
        }
        return view('website.checkout.index', [
            'customer' => $this->customer,
            'currency' => Currency::find(1)
        ]);
    }
}
