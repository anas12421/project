<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Contact;
use App\Models\Currency;
use App\Models\Customer;
use App\Models\Journey;
use App\Models\Mission;
use App\Models\Product;
use App\Models\slide;
use App\Models\Social_Media;
use App\Models\Subscribe;
use Illuminate\Http\Request;

class MyController extends Controller
{
    public $data;
    public function index()

    {
        return view('website.home.index', [
            'products' => Product::all(),
            'missions' => Mission::all(),
            'customers' => Customer::all(),
            'banner'    => Banner::find(3),
            'currency' => Currency::find(1),
            // 'media' => Social_Media::find(1),
            'jounreys' => Journey::all()
        ]);
    }
    public function store()
    {
        return view('website.store.index', [
            'products' => Product::all(),
            'currency' => Currency::find(1)
        ]);
    }
    public function details($id)
    {
        $this->data = Product::find($id);
        return view('website.details.index', [
            'product' => Product::find($id),
            'anotherProduct' => Product::where('product_code',$this->data->product_code)->get(),
            'currency' => Currency::find(1)
        ]);
    }
    public function contact()
    {
        return view('website.contact.index',[
            'currency' => Currency::find(1)
        ]);
    }
    public function test(Request $request)
    {
        // return $request;
        $this->data =  Currency::convert()
            ->from('USD')
            ->to('EUR')
            ->amount(50)
            ->get();
        // $this->data =  Currency::convert()
        //     ->from('USD')
        //     ->to('EUR')
        //     ->amount(50)
        //     ->get();
        return view('website.test',[
            'value' => $this->data
        ]);
    }
    public function about()
    {
        return view('website.about.index',[
            'currency' => Currency::find(1)
        ]);
    }
    public function IFMH()
    {
        return view('website.IFMH.index',[
            'currency' => Currency::find(1)
        ]);
    }

    public function ContactSave(Request $request){
        $this->validate($request, [
            'name'         => 'required',
            'email'        => 'required',
            'number'       => 'required',
        ]);
        // return $request;
        Contact::add($request);
        return back();
    }
    public function subscribe(Request $request){
        $this->validate($request, [
            'email'        => 'required|unique:subscribes,email',
        ]);
        // return $request;
        Subscribe::add($request);
        return back();
    }
}
