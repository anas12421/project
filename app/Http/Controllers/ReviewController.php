<?php

namespace App\Http\Controllers;

use App\Models\orderDetails;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    // private $data, $data2;
    // public function index(Request $request)
    // {
    //     return $request;
    //     // Review::add($request);
    //     $this->data = orderDetails::where('order_id', $request->order_id)->get();
    //     foreach ($this->data as $item) {
    //         if ($item->review == 0) {
    //             if ($item->product_id == $request->product_id) {
    //                 $this->data2 = orderDetails::find($item->id);
    //                 $this->data2->review = 1;
    //                 $this->data2->save();
    //             }
    //         }
    //     }
    //     return redirect()->route('home');
    // }
}
