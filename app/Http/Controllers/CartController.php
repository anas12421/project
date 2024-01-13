<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\ElseIf_;
use ShoppingCart;

class CartController extends Controller
{
    private $product, $dis, $dis_price;

    public function index(Request $request)
    {
        // return $request;
        $this->product = Product::find($request->id);
        //return $this->product;
        // $this->dis = ($this->product->regular_price*$this->product->discount) /100 ;
        // $this->dis_price = $this->product->regular_price - $this->dis ;
        ShoppingCart::add($this->product->id, $this->product->name, $request->qty, $this->product->price,['image' => $this->product->image, 'color' => $request->btnradio_color,'check' => $request->check_box,'size' => $request->size,'color'=>$request->color]);
        alert()->success('Add Successfully.');
        if ($request->policy == 'cart') {
            return back();
        } elseif ($request->policy == 'online') {
            return redirect()->route('checkout');
        }
    }
    public function remove($id)
    {
        ShoppingCart::remove($id);
        return back();
    }
    public function update(Request $request)
    {
        // return $request;
        ShoppingCart::update($request->id, $request->qty);
        return back();
    }
}
