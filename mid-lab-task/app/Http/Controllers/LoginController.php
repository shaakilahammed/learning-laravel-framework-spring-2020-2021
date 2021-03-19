<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests\LoginRequest;
use App\Models\User;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function verify(LoginRequest $req){
        $user  = User::where('email',$req->email)->where('password',$req->password)->first();

        if($user!=NULL){
            if($user->type=='admin'){
                $req->session()->put('loggedUser',['user_name'=>$user->user_name,'user_type'=>$user->type]);

                // return $req->session()->get('loggedUser');
               return redirect('/admin');
            }else if($user->type=='customer'){
                $req->session()->put('loggedUser',$user->id);
                return redirect('/customer');
            }
            else if($user->type=='vendor'){
                $req->session()->put('loggedUser',$user->id);
                return redirect('/vendor');
            }
            else if($user->type=='accountant'){
                $req->session()->put('loggedUser',$user->id);
                return redirect('/accountant');
            }
            
        }else{
           $req->session()->flash('error','invalid email/password');
           return redirect('/');
        }
    }


    public function superAdminDashboard()
    {
        return view('superadmin.home');
    }
    public function customerDashboard()
    {
        return view('customer.home');
    }
    public function accountantDashboard()
    {
        return view('accountant.home');
    }
    public function vendorDashboard()
    {
        return view('vendor.home');
    }
    
}
