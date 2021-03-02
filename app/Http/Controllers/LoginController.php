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
                return "customer";
            }
            else if($user->type=='vendor'){
                $req->session()->put('loggedUser',$user->id);
                return "vendor";
            }
            else if($user->type=='accountant'){
                $req->session()->put('loggedUser',$user->id);
                return "accountant";
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
    // public function customerDashboard()
    // {
    //     $data = User::find(session('loggedUser'));
    //     return view('customer.dashboard')->with('data',$data);
    // }
    // public function accountantDashboard()
    // {
    //     $data = User::find(session('loggedUser'));
    //     return view('accountant.dashboard')->with('data',$data);
    // }
    // public function vendorDashboard()
    // {
    //     $data = User::find(session('loggedUser'));
    //     return view('vendor.dashboard')->with('data',$data);
    // }
    
}
