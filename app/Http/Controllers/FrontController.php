<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Monarobase\CountryList\CountryListFacade;
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
use App\SMS;


class FrontController extends Controller
{
	

public function index()
    { 
        $banner=Banner::all();   
        $categories=Category::orderby('name','ASC')->get(); 
        $products=Product::orderby('created_at','DESC')->get();
        return view('front.index',compact('banner','categories','products'));    
    }

public function productdetail($id){

	$products=Product::find($id);
	$prds=Product::orderby('created_at','DESC')->get();
	return view('front.product-detail',compact('products','prds'));
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
	$countries = CountryListFacade::getList('en');
	return view('front.checkout',compact('data','a','countries'));

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
	$data->order_status='pending';
	$data->order_id=Str::random(10);
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
	
	if($data['payment_method']=='cod'){
		return view('front.thanks');
	}
	if($data['payment_method']==''){
		return redirect('thanks');
	}
	if($data['payment_method']==''){
		return redirect('thanks');
	}
	if($data['payment_method']==''){
		return redirect('thanks');
	}
	if($data['payment_method']==''){
		return redirect('thanks');
	}
	if($data['payment_method']=='paytm'){
		
		
            //$data->order_status = 'pending';
            $amount=$data['grand_total'];
            $order_id=$data['order_id'];

            $data_for_request = $this->handlePaytmRequest( $order_id, $amount, );


            $paytm_txn_url = 'https://securegw-stage.paytm.in/theia/processTransaction';
            $paramList = $data_for_request['paramList'];
            $checkSum = $data_for_request['checkSum'];
    
            return view( 'front.paytm-merchant-form', compact( 'paytm_txn_url', 'paramList', 'checkSum' ) );
	}

}

public function handlePaytmRequest( $order_id, $grand_total ) {
		// Load all functions of encdec_paytm.php and config-paytm.php
		$this->getAllEncdecFunc();
		$this->getConfigPaytmSettings();

		$checkSum = "";
		$paramList = array();

		// $paramList["body"] = array(
		// 	"requestType"   => "Payment",
		// 	"mid"           => "izMqEx58417900878943",
		// 	"websiteName"   => "WEBSTAGING",
		// 	"orderId"       => "$order_id",
		// 	"callbackUrl"   => "/paytm-callback",
		// 	"txnAmount"     => array(
		// 		"value"     => "1.00",
		// 		"currency"  => "INR",
		// 	),
		// 	"userInfo"      => array(
		// 		"custId"    => "CUST_001",
		// 	),
		// );

		// Create an array having all required parameters for creating checksum.
		$paramList["MID"] = 'pAvTJo89149283760589';
		$paramList["ORDER_ID"] = $order_id;
		$paramList["CUST_ID"] = $order_id;
		$paramList["INDUSTRY_TYPE_ID"] = 'Retail';
		$paramList["CHANNEL_ID"] = 'WEB';
		$paramList["TXN_AMOUNT"] = $grand_total;
		$paramList["WEBSITE"] = 'WEBSTAGING';
		$paramList["CALLBACK_URL"] = url( '/paytm-callback' );
		$paytm_merchant_key = 'JdfNKOubhfqQXBQ8';

		//Here checksum string will return by getChecksumFromArray() function.
		$checkSum = getChecksumFromArray( $paramList, $paytm_merchant_key );

		return array(
			'checkSum' => $checkSum,
			'paramList' => $paramList
		);
	}


    function getAllEncdecFunc() {
		function encrypt_e($input, $ky) {
			$key   = html_entity_decode($ky);
			$iv = "@@@@&&&&####$$$$";
			$data = openssl_encrypt ( $input , "AES-128-CBC" , $key, 0, $iv );
			return $data;
		}

		function decrypt_e($crypt, $ky) {
			$key   = html_entity_decode($ky);
			$iv = "@@@@&&&&####$$$$";
			$data = openssl_decrypt ( $crypt , "AES-128-CBC" , $key, 0, $iv );
			return $data;
		}

		function pkcs5_pad_e($text, $blocksize) {
			$pad = $blocksize - (strlen($text) % $blocksize);
			return $text . str_repeat(chr($pad), $pad);
		}

		function pkcs5_unpad_e($text) {
			$pad = ord($text[strlen($text) - 1]);
			if ($pad > strlen($text))
				return false;
			return substr($text, 0, -1 * $pad);
		}

		function generateSalt_e($length) {
			$random = "";
			srand((double) microtime() * 1000000);

			$data = "AbcDE123IJKLMN67QRSTUVWXYZ";
			$data .= "aBCdefghijklmn123opq45rs67tuv89wxyz";
			$data .= "0FGH45OP89";

			for ($i = 0; $i < $length; $i++) {
				$random .= substr($data, (rand() % (strlen($data))), 1);
			}

			return $random;
		}

		function checkString_e($value) {
			if ($value == 'null')
				$value = '';
			return $value;
		}

		function getChecksumFromArray($arrayList, $key, $sort=1) {
			if ($sort != 0) {
				ksort($arrayList);
			}
			$str = getArray2Str($arrayList);
			$salt = generateSalt_e(4);
			$finalString = $str . "|" . $salt;
			$hash = hash("sha256", $finalString);
			$hashString = $hash . $salt;
			$checksum = encrypt_e($hashString, $key);
			return $checksum;
		}
		function getChecksumFromString($str, $key) {

			$salt = generateSalt_e(4);
			$finalString = $str . "|" . $salt;
			$hash = hash("sha256", $finalString);
			$hashString = $hash . $salt;
			$checksum = encrypt_e($hashString, $key);
			return $checksum;
		}

		function verifychecksum_e($arrayList, $key, $checksumvalue) {
			$arrayList = removeCheckSumParam($arrayList);
			ksort($arrayList);
			$str = getArray2StrForVerify($arrayList);
			$paytm_hash = decrypt_e($checksumvalue, $key);
			$salt = substr($paytm_hash, -4);

			$finalString = $str . "|" . $salt;

			$website_hash = hash("sha256", $finalString);
			$website_hash .= $salt;

			$validFlag = "FALSE";
			if ($website_hash == $paytm_hash) {
				$validFlag = "TRUE";
			} else {
				$validFlag = "FALSE";
			}
			return $validFlag;
		}

		function verifychecksum_eFromStr($str, $key, $checksumvalue) {
			$paytm_hash = decrypt_e($checksumvalue, $key);
			$salt = substr($paytm_hash, -4);

			$finalString = $str . "|" . $salt;

			$website_hash = hash("sha256", $finalString);
			$website_hash .= $salt;

			$validFlag = "FALSE";
			if ($website_hash == $paytm_hash) {
				$validFlag = "TRUE";
			} else {
				$validFlag = "FALSE";
			}
			return $validFlag;
		}

		function getArray2Str($arrayList) {
			$findme   = 'REFUND';
			$findmepipe = '|';
			$paramStr = "";
			$flag = 1;
			foreach ($arrayList as $key => $value) {
				$pos = strpos($value, $findme);
				$pospipe = strpos($value, $findmepipe);
				if ($pos !== false || $pospipe !== false)
				{
					continue;
				}

				if ($flag) {
					$paramStr .= checkString_e($value);
					$flag = 0;
				} else {
					$paramStr .= "|" . checkString_e($value);
				}
			}
			return $paramStr;
		}

		function getArray2StrForVerify($arrayList) {
			$paramStr = "";
			$flag = 1;
			foreach ($arrayList as $key => $value) {
				if ($flag) {
					$paramStr .= checkString_e($value);
					$flag = 0;
				} else {
					$paramStr .= "|" . checkString_e($value);
				}
			}
			return $paramStr;
		}

		function redirect2PG($paramList, $key) {
			$hashString = getchecksumFromArray($paramList, $key);
			$checksum = encrypt_e($hashString, $key);
		}

		function removeCheckSumParam($arrayList) {
			if (isset($arrayList["CHECKSUMHASH"])) {
				unset($arrayList["CHECKSUMHASH"]);
			}
			return $arrayList;
		}

		function getTxnStatus($requestParamList) {
			return callAPI(PAYTM_STATUS_QUERY_URL, $requestParamList);
		}

		function getTxnStatusNew($requestParamList) {
			return callNewAPI(PAYTM_STATUS_QUERY_NEW_URL, $requestParamList);
		}

		function initiateTxnRefund($requestParamList) {
			$CHECKSUM = getRefundChecksumFromArray($requestParamList,PAYTM_MERCHANT_KEY,0);
			$requestParamList["CHECKSUM"] = $CHECKSUM;
			return callAPI(PAYTM_REFUND_URL, $requestParamList);
		}

		function callAPI($apiURL, $requestParamList) {
			$jsonResponse = "";
			$responseParamList = array();
			$JsonData =json_encode($requestParamList);
			$postData = 'JsonData='.urlencode($JsonData);
			$ch = curl_init($apiURL);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);
			curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
			curl_setopt($ch, CURLOPT_HTTPHEADER, array(
					'Content-Type: application/json',
					'Content-Length: ' . strlen($postData))
			);
			$jsonResponse = curl_exec($ch);
			$responseParamList = json_decode($jsonResponse,true);
			return $responseParamList;
		}

		function callNewAPI($apiURL, $requestParamList) {
			$jsonResponse = "";
			$responseParamList = array();
			$JsonData =json_encode($requestParamList);
			$postData = 'JsonData='.urlencode($JsonData);
			$ch = curl_init($apiURL);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);
			curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
			curl_setopt($ch, CURLOPT_HTTPHEADER, array(
					'Content-Type: application/json',
					'Content-Length: ' . strlen($postData))
			);
			$jsonResponse = curl_exec($ch);
			$responseParamList = json_decode($jsonResponse,true);
			return $responseParamList;
		}
		function getRefundChecksumFromArray($arrayList, $key, $sort=1) {
			if ($sort != 0) {
				ksort($arrayList);
			}
			$str = getRefundArray2Str($arrayList);
			$salt = generateSalt_e(4);
			$finalString = $str . "|" . $salt;
			$hash = hash("sha256", $finalString);
			$hashString = $hash . $salt;
			$checksum = encrypt_e($hashString, $key);
			return $checksum;
		}
		function getRefundArray2Str($arrayList) {
			$findmepipe = '|';
			$paramStr = "";
			$flag = 1;
			foreach ($arrayList as $key => $value) {
				$pospipe = strpos($value, $findmepipe);
				if ($pospipe !== false)
				{
					continue;
				}

				if ($flag) {
					$paramStr .= checkString_e($value);
					$flag = 0;
				} else {
					$paramStr .= "|" . checkString_e($value);
				}
			}
			return $paramStr;
		}
		function callRefundAPI($refundApiURL, $requestParamList) {
			$jsonResponse = "";
			$responseParamList = array();
			$JsonData =json_encode($requestParamList);
			$postData = 'JsonData='.urlencode($JsonData);
			$ch = curl_init($apiURL);
			curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);
			curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
			curl_setopt($ch, CURLOPT_URL, $refundApiURL);
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$headers = array();
			$headers[] = 'Content-Type: application/json';
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			$jsonResponse = curl_exec($ch);
			$responseParamList = json_decode($jsonResponse,true);
			return $responseParamList;
		}
	}




    function getConfigPaytmSettings() {
		define('PAYTM_ENVIRONMENT', 'TEST'); // PROD
		define('PAYTM_MERCHANT_KEY', 'JdfNKOubhfqQXBQ8'); //Change this constant's value with Merchant key downloaded from portal
		define('PAYTM_MERCHANT_MID', 'pAvTJo89149283760589'); //Change this constant's value with MID (Merchant ID) received from Paytm
		define('PAYTM_MERCHANT_WEBSITE', 'WEBSTAGING'); //Change this constant's value with Website name received from Paytm

		$PAYTM_STATUS_QUERY_NEW_URL='https://securegw-stage.paytm.in/merchant-status/getTxnStatus';
		$PAYTM_TXN_URL='https://securegw-stage.paytm.in/theia/processTransaction';
		if (PAYTM_ENVIRONMENT == 'PROD') {
			$PAYTM_STATUS_QUERY_NEW_URL='https://securegw.paytm.in/merchant-status/getTxnStatus';
			$PAYTM_TXN_URL='https://securegw.paytm.in/theia/processTransaction';
		}
		define('PAYTM_REFUND_URL', '');
		define('PAYTM_STATUS_QUERY_URL', $PAYTM_STATUS_QUERY_NEW_URL);
		define('PAYTM_STATUS_QUERY_NEW_URL', $PAYTM_STATUS_QUERY_NEW_URL);
		define('PAYTM_TXN_URL', $PAYTM_TXN_URL);
	}

    public function paytmCallback( Request $request ) {
   		// return $request;

		$order_id = $request['ORDERID'];

		if ( 'TXN_SUCCESS' === $request['STATUS'] ) {
			$transaction_id = $request['TXNID'];
			$order = Order::where( 'order_id', $order_id )->first();
			$order->order_status = 'complete';
			$order->transaction_id = $transaction_id;
			$order->save();
		    $data = Order::where('order_id',$order_id)->get();
			// $useremail=Auth::user()->email;
	  //       DB::table('carts')->where('user_email',$useremail)->delete();
            $message="Hii rohit welcome to our services foodbuddy.com";
            $mobile = "9340821225";
            SMS::sendSMS($message,$mobile);

			return view( 'front.order-complete', compact( 'order') );

		} else if( 'TXN_FAILURE' === $request['STATUS'] ){
			return view( 'front.payment-failed' );
		}
	}



public function userAccount(){
	if (Auth::check()){
	$useremail= Auth::User()->email;
	 $data = DB::table('orders')
       ->join('order_products','orders.id','order_products.order_id',$useremail)
       ->get();
	return view('front.user_account',compact('data'));
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

	$useremail= Auth::User()->email;
	$data = DB::table('orders')
       ->join('order_products','orders.id','order_products.order_id',$useremail)
       ->get();

	$pdf = PDF::loadView('front.user_account',compact('data'))->setPaper('a4', 'portrait');
	
	return $pdf->download('Order-details.pdf');
	}

	
}
