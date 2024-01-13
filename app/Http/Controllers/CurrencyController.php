<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use AshAllenDesign\LaravelExchangeRates\Classes\ExchangeRate;

use Guzzle\Http\Exception\ClientErrorResponseException;

use carbon\Carbon;
use Session;

class CurrencyController extends Controller
{
    //

    public function index()
    {

        return view('currency');
    }

    public function exchangeCurrency(Request $request)
    {
        // return $request;
        
        Session::put('currency',$request->currency_to);

        return back();
    }
}
