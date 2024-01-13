<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journey extends Model
{
    use HasFactory;
    private static $data, $image, $imageNewName, $directory, $imgUrl;
    public static function add($request)
    {
        if ($request->id) {
            self::$data = Journey::find($request->id);
            if ($request->image) {
                if (file_exists(self::$data->image)) {
                    unlink(self::$data->image);
                }
                self::$data->image         = self::getImgurl($request->image);
            } else {
                self::$data->image         = self::$data->image;
            }
        } else {
            $request->validate([
                'journey_text'   => 'required',
                'date'           => 'required',
                'link'           => 'required',
                'image'          => 'required',
            ]);
            self::$data = new Journey();
            self::$data->image         = self::getImgurl($request->image);
            
        }
        self::$data->date          = $request->date;
        self::$data->journey_text  = $request->journey_text;
        self::$data->link          = $request->link;
        self::$data->save();
    }


    public static function delete_item($request)
    {
        self::$data = Journey::find($request->id);
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
        self::$directory    = 'admin/journey-image/';
        self::$imgUrl       = self::$directory . self::$imageNewName;
        $image->move(self::$directory, self::$imageNewName);
        return self::$imgUrl;
    }
}
