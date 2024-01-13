<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use App\Models\Mission;
use Illuminate\Http\Request;

class MissionController extends Controller
{
    public function add(){
        return view('admin.mission.index');
    }
    
    public function save(Request $request){
        // return $request;
        Mission::add($request);
        return redirect()->route('mission.manage');
        
    }
    public function manage(){
        return view('admin.mission.manage',[
            'slides'=>Mission::all()
        ]);
        
    }
    public function edit(Request $request){
        return view('admin.mission.edit',[
            'slide'=>Mission::find($request->id)
        ]);
        
    }
    public function delete( Request $request)
    {
        Mission:: delete_item($request);
        alert()->success('Successfully Delete');
        return back();
    }
    public function currencyAdd( Request $request)
    {
        // return $request;
        Currency:: currencyAdd($request);
        alert()->success('Successfully Delete');
        return back();
    }
    public function currencymanage(Request $request)
    {
        return view('admin.currency.index',[
            'currencies'=> Currency::all()
        ]);
    }
}
