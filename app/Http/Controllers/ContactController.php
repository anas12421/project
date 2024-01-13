<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Subscribe;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    
    public static function view(){
        return view('admin.contact.view',[
            'messages' =>Contact::orderBy('id', 'desc')->get()
        ]);
    }
    public static function info(Request $request){
        return view('admin.contact.details',[
            'message' =>Contact::find($request->id)
        ]);
    }
    public static function ContactDelete(Request $request){
        Contact::deletw_item($request);
        return redirect()->route('contact.view');
    }
    public static function Subscribe(){
        return view('admin.subscribe.view',[
            'Subscribes' =>Subscribe::orderBy('id', 'desc')->get()
        ]);
    }
    public static function SubscribeDelete(Request $request){
        Subscribe::deletw_item($request);
        return redirect()->route('Subscribe.view');
    }
    
}
