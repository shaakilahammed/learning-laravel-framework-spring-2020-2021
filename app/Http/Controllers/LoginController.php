<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function verify(LoginRequest $req){
        // $valid=Validator::make($req->all(),[
        //     'email' => 'required|email|max:50',
        //     'password' => 'required|min:8|max:20|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/',
        // ]);

        // if($valid->fails()){
        //     $request->session()->flash('error', 'Invalid username or password');
        //     return redirect('/');
        // }
        return response()->json(['success'=>"true"],200);
    }
    
}
