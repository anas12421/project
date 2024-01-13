<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\User;
use Illuminate\Http\Request;

class DeshboardController extends Controller
{
    private  $data;
    public function index(){
        return view('admin.home.index',[
            'orders' => order::all()
        ]);
        
    }
    public function adminManage(){
        return view('admin.home.manage',[
            'admins' => User::all()
        ]);
        
    }
    public function adminRegister(Request $request){
        $this->validate($request, [
            'name'         => 'required',
            'email'        => 'required|unique:customers,email',
            'password'     => 'required'
        ]);
        $this->data = new User();
        $this->data->name = $request->name;
        $this->data->email = $request->email;
        $this->data->password = bcrypt($request->password);
        $this->data->save();
        return redirect()->route('admin.manage');
        
    }
    public function adminAdd(){
        return view('admin.home.add');
        
    }
    public function adminDelete(Request $request){
        $this->data  = User::find($request->id);
        $this->data->delete();
        return redirect()->route('admin.manage');
        
    }

    
}
