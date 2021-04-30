<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Banner;
use App\Category;
use App\Product;
use App\Cart;
use Session;
use Auth;
use DB;
use App\Order;
use App\OrderProduct;
use PDF;

class FrontController extends Controller
{
public function index(){

	$banner=Banner::all();
	$category=Category::all();
	$products=Product::all();
	return view('front.index',compact('banner','category','products'));
}

public function productdetail($id){

	$products=Product::find($id);
	return view('front.product-detail',compact('products'));
}

public function addtocart(Request $a){

// print_r($a->all());
	$session_id=Session::getId();  
	$data = new Cart;
	if(Auth::check()){
	$useremail=Auth::User()->email;
	$data->user_email=$useremail;
	}
	$data->product_id=$a->product_id;
	$data->product_name=$a->product_name;
	$data->product_price=$a->product_price;
	$data->product_image=$a->product_image;
	$data->product_quantity=$a->product_quantity;
	$data->session_id=$session_id;
	$data->save();
	if($data){
	return redirect('cart');
	}
}

public function cart(){

	if (Auth::check()){
	$useremail= Auth::User()->email; 
	$data= Cart::where('user_email',$useremail)->get();
	$a= Cart::where('user_email',$useremail)->get();
	return view('front.cart',compact('data','a'));
	}
	else{
	$session_id=Session::getId();
	$data=Cart::where(['session_id'=>$session_id])->get();
	// $data = Cart::all();
	$a=Cart::where(['session_id'=>$session_id])->get();
	return view('front.cart',compact('data','a'));
	}
}

public function deletecart($id){

	$data = Cart::find($id);
	$delete = $data->delete();
	if($delete){
	return redirect('cart')->with('Order_deleted','Your product has been deleted');
	} 
}

public function updatequantity($id=null,$product_quantity=null){

	DB::table('carts')->where('id',$id)->increment('product_quantity',$product_quantity);
	return redirect('cart');

}

public function checkout(){

	if (Auth::check()){

	$useremail= Auth::User()->email; 
	$data= Cart::where('user_email',$useremail)->get();
	$a= Cart::where('user_email',$useremail)->get();
	return view('front.checkout',compact('data','a'));

    }
	else
	{
	$session_id=Session::getId();
	$data=Cart::where(['session_id'=>$session_id])->get();
	// $data = Cart::all();
	$a=Cart::where(['session_id'=>$session_id])->get();
	return view('front.checkout',compact('data','a'));
	}
}

public function about(){

	return view('front.about');

}

public function contactus(){

	return view('front.contact');
}

public function placeOrder(Request $a){
	$data = new Order;
	$data->useremail=$a->email;
	$data->name=$a->name;
	$data->address=$a->address;
	$data->city=$a->city;
	$data->state=$a->state;
	$data->country=$a->country;
	$data->pincode=$a->pincode;
	$data->phone=$a->phone;
	$data->payment_method=$a->payment_method;
	$data->grand_total=$a->grand_total;
	$data->save();
	$order_id=DB::getPdo()->lastinsertID();
	// print_r($order_id);
	// die;
	$cart_product=DB::table('carts')->where(['user_email'=>$a->email])->get();
	foreach($cart_product as $c){
	$cart = new OrderProduct;
	$cart->useremail=$a->email;
	$cart->order_id=$order_id;
	$cart->product_id=$c->product_id;
	$cart->product_name=$c->product_name;
	$cart->product_size=$c->product_size;
	$cart->product_price=$c->product_price;
	$cart->product_image=$c->product_image;
	$cart->product_quantity=$c->product_quantity;
	$cart->save();
	}
	if($data){
	$useremail=Auth::user()->email;
	DB::table('carts')->where('user_email',$useremail)->delete();
	return redirect('/checkout')->with('Order_placed','Your order has been placed Successfully');
	}
	else{
	return redirect('/checkout')->with('Order_placed','Your order has not been placed Successfully');
	}
}

// public function orderConfirm(){
// 	$useremail=Auth::user()->email;
// 	DB::table('carts')->where('user_email',$useremail)->delete();
// 	return view('front.thanks');
// }

public function userAccount(){
	if (Auth::check()){
	$useremail= Auth::User()->email;
	$order=Order::where('useremail',$useremail)->get();
	$data= OrderProduct::where('useremail',$useremail)->get();
	$a= OrderProduct::where('useremail',$useremail)->get();
	return view('front.user_account',compact('data','a','order'));
	}
	else{
	$session_id=Session::getId();
	$data=OrderProduct::where(['session_id'=>$session_id])->get();
	$order=Order::where('useremail',$useremail)->get();
	// $data = Cart::all();
	$a=OrderProduct::where(['session_id'=>$session_id])->get();
	return view('front.user_account',compact('data','a','order'));
	}
}

public function editAddress(){

    return view('front.edit_address');
}

public function pdf(){

	$order=Order::all();
	$data = OrderProduct::all();
	$pdf = PDF::loadView('front.user_account',compact('data','order'))->setPaper('a4', 'portrait');
	return $pdf->download('Order-details.pdf');
	}

}
