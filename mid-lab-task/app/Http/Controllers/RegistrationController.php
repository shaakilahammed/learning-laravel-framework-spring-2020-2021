<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\User;

class RegistrationController extends Controller
{
    public function index(){
        return view('registration');
    }
    public function register(Request $req){
        $req->validate([
            'full_name' => 'required|string|min:3|max:30',
            'user_name' => 'required|string|min:3|max:30',
            'email' => 'required|string|min:10|max:50|email|unique:users',
            'phone' => 'required|numeric|digits:11',
            'password' => 'required|string|min:8|max:20|confirmed',
            'city' => 'required|string|min:3|max:20',
            'country' => 'required|string|min:3|max:20',
            'company_name' => 'required|string|min:3|max:20',
            
        ]);
        $user = new User();
        $user->full_name     = $req->full_name;
        $user->user_name     = $req->user_name;
        $user->email         = $req->email;
        $user->type         = $req->type;
        $user->password         = $req->password;
        $user->city         = $req->city;
        $user->country = $req->country;
        $user->phone         = $req->phone;
        $user->company_name         = $req->company_name;
        
        $user->save();
        return redirect('/');
    }

}
