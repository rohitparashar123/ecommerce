<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(Request $request){
     if($request->session()->has('ADMIN_LOGIN')){
           return redirect('admin/dashboard');
        }
        else{
            
            return view('admin.login');
        }
    }
    public function auth(Request $req){
      $req->validate([   

       'email'=>'required|email',
       'password'=>' required|min:8|max:12|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/',
      ]);

    	$email=$req->post('email');
          $password=$req->post('password');

          // $result=Admin::where(['email'=>$email,'password'=>$password])->get();
          $result=Admin::where(['email'=>$email])->first();
          if($result){

              $req->session()->put('ADMIN_LOGIN',true);
              $req->session()->put('ADMIN_ID',$result->id);
              return redirect('admin/dashboard');
            }else{
              $req->session()->flash('error','please enter valid password');
              return redirect('/admin_');
            }
    }
    public function dashboard()
    {
        return view('admin.dashboard');
    }

}
