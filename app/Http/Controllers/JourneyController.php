<?php

namespace App\Http\Controllers;

use App\Models\Journey;
use Illuminate\Http\Request;

class JourneyController extends Controller
{
    public function add(){
        return view('admin.journey.index');
    }
    
    public function save(Request $request){
        // return $request;
        Journey::add($request);
        return redirect()->route('manage.journey');
        
    }
    public function manage(){
        return view('admin.journey.manage',[
            'slides'=>Journey::all()
        ]);
        
    }
    public function edit(Request $request){
        return view('admin.journey.edit',[
            'slide'=>Journey::find($request->id)
        ]);
        
    }
    public function delete( Request $request)
    {
        Journey::  delete_item($request);
        alert()->success('Successfully Delete');
        return back();
    }
}
