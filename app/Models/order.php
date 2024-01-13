<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Session;

class order extends Model
{
    use HasFactory;
    public static $data;
    
    public static function order($request,$id) {
        self::$data = new Order();
        self::$data->customer_id       = $id;
        self::$data->order_date        = date('Y-m-d');
        self::$data->order_timestamp   = strtotime(date('Y-m-d'));
        self::$data->order_total       = session::get('order_total');
        self::$data->tax_total         = Session::get('tax_total');
        self::$data->shipping_total    = Session::get('shipping_total');
        self::$data->delivery_address  = $request->delivery;
        self::$data->save();
        Session::put('order_amount', self::$data->order_total );
        return self::$data; 
    }
    public function customer(){
        return $this->belongsTo(Customer::class);
    }
    public function allProductDetails(){
        return $this->hasmany(orderDetails::class);
    }
    public static function deleteOrder($request) {
        self::$data = Order::find($request->id);
        self::$data->delete();
    }
}
