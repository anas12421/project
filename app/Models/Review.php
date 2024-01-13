<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    private static $data;
    public static function add($request){
        Self::$data         = new Subscribe();
        Self::$data->email  = $request->email;
        Self::$data->save();
    }
}
