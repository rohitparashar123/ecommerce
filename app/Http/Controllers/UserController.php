<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Cart;
use Session;
use DB;

class UserController extends Controller
{
public function register(){
return view('front.register');
}

public function doRegister(Request $a){
$a->validate([   
'name'=>'required',
'email'=>'required|email|unique:users',
'password'=>' required|min:8|max:12|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/',
]);
$data = new User;
// print_r($a->all());
$data->name=$a->name;
$data->email=$a->email;
$data->password=Hash::make($a->password);
$data->save();
if($data){
return redirect('/login_page')->with('message','You Have Successfully Regiestered, Now Please Login!');
}
}

public function login(){
return view('front.login');
}

public function dologin(Request $b){
$b->validate([   
'email'=>'required|email',
'password'=>' required|min:8|max:12',
]);

$data=$b->all();
$session_id=Session::getId();
if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password']]))
{
Cart::where('session_id',$session_id)->update(['user_email'=>$data['email']]);
return redirect('/')->with('do_login','Welcome to FoodBuddy 😍');
}
else{
return redirect()->back()->with('message','Invalid Email and Password');
}
}

}