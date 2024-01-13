<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function add(){
        return view('admin.product.index');
        
    }
    
    public function save(Request $request){
        // return $request;
        Product::add($request);
        if ($request->id) {
            alert()->success('Update Successfully.',);
        } else {
            alert()->success('Add Successfully.',);
        }
        return redirect()->route('manage.product');
        
    }
    public function manage(){
        return view('admin.product.manage',[
            'products'=>Product::all()
        ]);
        
    }
    public function edit(Request $request){
        return view('admin.product.edit',[
            'product'=>Product::find($request->id)
        ]);
        
    }
    public function delete( Request $request)
    {
        Product::  delete_item($request);
        alert()->success('Successfully Delete');
        return back();
    }
}
