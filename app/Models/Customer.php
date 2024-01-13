<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Session;

class Customer extends Model
{
    use HasFactory;
    private static $data, $image, $imageNewName, $directory, $imgUrl;
    public static function customer_register($request)
    {
        if ($request->id) {
            self::$data    = Customer::find($request->id);
            if ($request->image) {
                if (file_exists(self::$data->image)) {
                    unlink(self::$data->image);
                }
                self::$data->image = self::getImgurl($request);
            } else {
                self::$data->image = self::$data->image;
            }
        } else {
            $request->validate([
                'name'        => 'required',
                'last_name'   => 'required',
                'email'       => 'required|unique:customers,email',
                'password'    => 'required',
                'image'       => 'required',
                'mobile'       => 'required',
            ]);
            self::$data               = new Customer();
            self::$data->email        = $request->email;
            self::$data->mobile        = $request->mobile;
            self::$data->password     = bcrypt($request->password);
            self::$data->image        = self::getImgurl($request);
        }
        self::$data->first_name   = $request->name;
        self::$data->last_name    = $request->last_name;
        self::$data->save();

        Session::put('customer_id', self::$data->id);
        Session::put('customer_name', self::$data->first_name . ' ' . self::$data->last_name);
    }
    public static function add_custome($request)
    {
        self::$data               = new Customer();
        self::$data->email        = $request->email;
        self::$data->mobile        = $request->mobile;
        self::$data->password     = bcrypt($request->password);
        self::$data->first_name   = $request->name;
        self::$data->last_name    = $request->last_name;
        self::$data->save();

        Session::put('customer_id', self::$data->id);
        Session::put('customer_name', self::$data->first_name . ' ' . self::$data->last_name);
        return self::$data;
    }
    public static function change($request)
    {
        self::$data           = Customer::find($request->id);
        self::$data->password = bcrypt($request->new_password);
        self::$data->save();
    }

    public static function getImgurl($request)
    {
        self::$image        = $request->file('image');
        self::$imageNewName = rand() . '.' . self::$image->getClientOriginalExtension();
        self::$directory    = 'admin/profile-image/';
        self::$imgUrl       = self::$directory . self::$imageNewName;
        self::$image->move(self::$directory, self::$imageNewName);
        return self::$imgUrl;
    }
}
