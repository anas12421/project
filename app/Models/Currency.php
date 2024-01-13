<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Intervention\Image\Colors\Hsl\Channels\Saturation;

class Currency extends Model
{
    use HasFactory;
    private static $data;
    public static function currencyAdd($request){
        self::$data = Currency::find($request->id);
        self::$data->EUR  = $request->EUR;
        self::$data->GEP  = $request->GEP;
        self::$data->AUD  = $request->AUD;
        self::$data->save(); 
    }
}
