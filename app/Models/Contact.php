<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    private static $data;
    public static function add($request){
        Self::$data         = new Contact();
        Self::$data->name   = $request->name;
        Self::$data->email  = $request->email;
        Self::$data->number = $request->number;
        Self::$data->text   = $request->text;
        Self::$data->save();

    }
    
    public static function deletw_item($request){
        Self::$data  = Contact::find($request->id);
        self::$data->delete();
    }
    
}
