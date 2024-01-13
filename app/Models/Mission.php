<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Intervention\Image\ImageManagerStatic as Image;

class Mission extends Model
{
    use HasFactory;
    private static $data, $image, $imageNewName, $directory, $imgUrl,$image_resize;
    public static function add($request)
    {
        if ($request->id) {
            self::$data = Mission::find($request->id);
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
                'mission_text'  => 'required',
                'image'         => 'required',
            ]);
            self::$data            = new Mission();
            self::$data->image     = self::getImgurl($request->image);
        }
        self::$data->mission_text  = $request->mission_text;
        self::$data->save();
    }


    public static function delete_item($request)
    {
        self::$data = Mission::find($request->id);
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
        self::$directory    = 'admin/mission-image/';
        self::$imgUrl       = self::$directory . self::$imageNewName;
        $image->move(self::$directory, self::$imageNewName);
        // self::$image_resize = Resize::make($image->getRealPath());
        // self::$image_resize->resize(400,500)->save(self::$directory);

        return self::$imgUrl;
    }
}
