<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Social_Media extends Model
{
    use HasFactory;
    private static $data;
    public static function add($request){
        self::$data             = Social_Media::find($request->id);
        self::$data->instagram  = $request->instagram;
        self::$data->fb         = $request->fb;
        self::$data->youtube    = $request->youtube;
        self::$data->save(); 
    }

}
