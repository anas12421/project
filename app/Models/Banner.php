<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
    private static $data, $image, $imageNewName, $directory, $imgUrl;
    public static function add($request)
    {
        if ($request->id) {
            self::$data = Banner::find($request->id);
            if ($request->image) {
                if (file_exists(self::$data->image)) {
                    unlink(self::$data->image);
                }
                self::$data->banner_text = $request->banner_text;
                self::$data->image         = self::getImgurl($request->image);
                self::$data->save();
            } else {
                self::$data->banner_text = $request->banner_text;
                self::$data->image         = self::$data->image;
                self::$data->save();
            }
        } else {
            $request->validate([
                'banner_text'   => 'required',
                'image'         => 'required'
            ]);
            self::$data = new Banner();
            self::$data->banner_text   = $request->banner_text;
            self::$data->image         = self::getImgurl($request->image);
            self::$data->save();
        }
    }


    public static function delete_item($request)
    {
        self::$data = Banner::find($request->id);
        if (self::$data->image) {
            if (file_exists(self::$data->image)) {
                unlink(self::$data->image);
            }
        }
        self::$data->delete();
    }





    public static function getImgurl($image)
    {
        self::$imageNewName = rand() . '.' . $image->getClientOriginalExtension();
        self::$directory    = 'admin/banner-image/';
        self::$imgUrl       = self::$directory . self::$imageNewName;
        $image->move(self::$directory, self::$imageNewName);
        return self::$imgUrl;
    }
}
