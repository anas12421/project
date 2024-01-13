<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscribe extends Model
{
    use HasFactory;
    private static $data;
    public static function add($request){
        Self::$data         = new Subscribe();
        Self::$data->email  = $request->email;
        Self::$data->save();
    }
    
    public static function deletw_item($request){
        Self::$data  = Subscribe::find($request->id);
        self::$data->delete();
    }
}
