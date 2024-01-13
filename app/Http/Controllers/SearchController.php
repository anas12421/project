<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use App\Models\Product;
use Illuminate\Http\Request;
use Session;

class SearchController extends Controller
{
    private $search;
    public function search(Request $request)
    {
        // return $request;
        $this->search = $request->search;
        Session::put('search', $this->search);
        return view('website.search.index', [
            'products' => Product::where('name', 'like', "%$this->search%")->orderBy('id', 'desc')->get(),
            'currency' => Currency::find(1),
        ]);
    }
}
