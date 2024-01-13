<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use ShoppingCart;
use Session;

class orderDetails extends Model
{
    use HasFactory;
    public static $data;
    public static function orderDetails($request,$id) {
        foreach(ShoppingCart::all() as $item){
            self::$data = new orderDetails();
            self::$data->order_id       = $id;
            self::$data->product_id     =$item->id;
            self::$data->product_name   =$item->name;
            self::$data->product_price  =$item->price;
            self::$data->product_qty    =$item->qty;
            self::$data->product_size   =$item->size;
            self::$data->product_color   =$item->color;
            self::$data->product_image  =$item->image;
            self::$data->save();
            ShoppingCart::remove($item->__raw_id);
        }
        Session::put('order_id', self::$data->order_id);
        
    }
    public static function deleteOrder($request){
        self::$data = OrderDetails::where('order_id',$request->id);
        self::$data->delete();
    }
}
