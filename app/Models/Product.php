<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    private static $data, $image, $imageNewName, $directory, $imgUrl,$str,$image_back;
    public static function add($request)
    {
        
        if ($request->id) {
            
            self::$data = Product::find($request->id);
            if ($request->image) {
                if (file_exists(self::$data->image)) {
                    unlink(self::$data->image);
                }
                self::$data->image = self::getImgurl($request);
            }else {
                self::$data->image = self::$data->image;
            }
            if ($request->image_back){
                if (file_exists(self::$data->image_back)){
                    unlink(self::$data->image_back);
                }
                self::$data->image_back = self::getImgurl_back($request);
            } else {
                self::$data->image_back = self::$data->image_back;
            }
        } else {
            $request->validate([
                'product_name' => 'required|unique:products,name',
                'price'        => 'required',
                'product_stock'=> 'required',
                'product_code' => 'required',
                'product_color'=> 'required',
                'image'        => 'required',
                'image_back'   => 'required',
            ]);
            self::$data             = new Product();
            self::$data->image      = self::getImgurl($request);
            self::$data->image_back = self::getImgurl_back($request);
        }
        self::$data->name            = $request->product_name;
        self::$data->price           = $request->price;
        self::$data->product_stock   = $request->product_stock;
        self::$data->product_code    = $request->product_code;
        self::$data->product_color   = $request->product_color;
        self::$data->s               = $request->checkbox1;
        self::$data->m               = $request->checkbox2;
        self::$data->l               = $request->checkbox3;
        self::$data->xl              = $request->checkbox4;
        self::$data->xxl             = $request->checkbox5;
        self::$data->save();
    }
    public static function delete_item($request){
        self::$data = Product::find($request->id);
        if (self::$data->image){
            if (file_exists(self::$data->image)){
                unlink(self::$data->image);
            }
        }
        if (self::$data->image_back){
            if (file_exists(self::$data->image_back)){
                unlink(self::$data->image_back);
            }
        }
        self::$data->delete();
    }
    public static function getImgurl($request)
    {
        self::$image = $request->file('image');
        self::$imageNewName = rand() . '.' . self::$image->getClientOriginalExtension();
        self::$directory = 'admin/product-image/';
        self::$imgUrl = self::$directory . self::$imageNewName;
        self::$image->move(self::$directory, self::$imageNewName);
        return self::$imgUrl;
    }
    public static function getImgurl_back($request)
    {
        self::$image_back = $request->file('image_back');
        self::$imageNewName = rand() . '.' . self::$image_back->getClientOriginalExtension();
        self::$directory = 'admin/product-image/';
        self::$imgUrl = self::$directory . self::$imageNewName;
        self::$image_back->move(self::$directory, self::$imageNewName);
        return self::$imgUrl;
    }
}