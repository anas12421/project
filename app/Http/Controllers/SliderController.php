<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\slide;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function add()
    {
        return view('admin.banner.index');
    }

    public function save(Request $request)
    {
        // return $request;
        // $this->validate($request, [
        //     'banner_text'   => 'required',
        //     'image'         => 'required'
        // ]);
        Banner::add($request);
        return redirect()->route('manage');
    }
    public function manage()
    {
        return view('admin.banner.manage', [
            'slides' => Banner::all()
        ]);
    }
    public function edit(Request $request)
    {
        return view('admin.banner.edit', [
            'slide' => Banner::find($request->id)
        ]);
    }
    public function delete(Request $request)
    {
        Banner::delete_item($request);
        alert()->success('Successfully Delete');
        return back();
    }
}
