@extends('front/master')
@section('title','Thanks')
@section('content')
<style type="text/css">
/*.cart {
    height: 100vh
}*/
.card{
     padding: 0;
     margin: 0;
     display: flex;
     flex-direction: row;
    box-shadow: 2px 2px 5px #babecc, -5px -5px 10px hsl(0deg 0% 100% / 45%);
}

.img_responsive{
    position: relative;
    left: 50px;
    max-width: 100%;
    background-position: center center;
    background-size: cover;
    background-repeat: no-repeat;
}

.text_outer{
    color: black;
    font-size: 30px;
    font-family: prague;

}
.text_inner{
   color: red;
}

.swing {
  animation: swing ease-in-out 1s infinite alternate;
  transform-origin: center -20px;
  float: left;
  
}
.swing img {
  border: 5px solid #f8f8f8;
  display: block;
}
.swing:after {
  content: "";
  position: absolute;
  width: 20px;
  height: 20px;
  border: 1px solid #999;
  top: -10px;
  left: 50%;
  z-index: 0;
  border-bottom: none;
  border-right: none;
  transform: rotate(45deg);
}
/* nail */
.swing:before {
  content: "";
  position: absolute;
  width: 5px;
  height: 5px;
  top: -14px;
  left: 54%;
  z-index: 5;
  border-radius: 50% 50%;
  background: #000;
}

@keyframes swing {
  0% {
    transform: rotate(3deg);
  }
  100% {
    transform: rotate(-3deg);
  }
}

@media screen and (max-width: 576px) {
    .swing {
  animation: swing ease-in-out 1s infinite alternate;
  transform-origin: center -20px;
  float: left;
  
}
.swing img {
  border: 5px solid #f8f8f8;
  display: block;
}
.swing:after {
  content: "";
  position: absolute;
  width: 20px;
  height: 20px;
  border: 1px solid #999;
  top: -10px;
  left: 50%;
  z-index: 0;
  border-bottom: none;
  border-right: none;
  transform: rotate(45deg);
}
/* nail */
.swing:before {
  content: "";
  position: absolute;
  width: 5px;
  height: 5px;
  top: -14px;
  left: 54%;
  z-index: 5;
  border-radius: 50% 50%;
  background: #000;
}

@keyframes swing {
  0% {
    transform: rotate(3deg);
  }
  100% {
    transform: rotate(-3deg);
  }
}
.text{
    color: black;
    font-size: 30px;
    font-family: prague;  
    padding: 10px;  
}
.card{
     padding: 20px;
     margin: 0;
     display: flex;
     flex-direction: column;
    box-shadow: 2px 2px 5px #babecc, -5px -5px 10px hsl(0deg 0% 100% / 45%);
}
.img_responsive{
    position: relative;
    left: 0px;
    max-width: 100%;
    background-position: center center;
    background-size: cover;
    background-repeat: no-repeat;
}
}

</style>
<div class="container-fluid mt-4 mb-4">
    <div class="row d-flex cart align-items-center justify-content-center">
        <!-- <h3>Order Confirmed Successfully</h3> -->
        <div class="col-md-8">
            <div class="card align-items-center justify-content-center">
                <div class="col-sm-5">
               <h1 class="text_outer">Thank you,<span class="text_inner"><strong>{{Auth::user()->name}}</strong></span><br><br> Your order will be delivered to you soon <br> Have a Great Day!!!</h1>
               </div>
               <div class="col-sm-5">
                     <img src="{{asset('../images/delivery.png')}}" class="img_responsive swing" id='sweetlandia'>
               </div>
         </div>
        </div>
    </div>
</div>
@endsection
<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Cart;
use Session;
use DB;
use Sentinel;
use Reminder;
use Mail;

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