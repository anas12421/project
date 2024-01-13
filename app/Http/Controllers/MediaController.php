<?php

namespace App\Http\Controllers;

use App\Models\Social_Media;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function save(Request $request)
    {
        // return $request;
        Social_Media::add($request);
        return back();
    }
    public function manage(Request $request)
    {
        return view('admin.social_media.manage',[
            'media'=> Social_Media::find(1)
        ]);
    }
}
