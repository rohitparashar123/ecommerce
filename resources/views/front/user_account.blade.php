@extends('front/master')
@section('title','User Account')
@section('content')
<style type="text/css">
    .label_text{
  color: #1d1d1d; 
  font-weight: 600;
}
 .eye_position{
    position: relative;
    top: -32px;
    left: 875px!important;
    color: black;
}
</style>
<!-- breadcrumb-section start -->
<nav class="breadcrumb-section theme1 bg-lighten2 pt-110 pb-110">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center mb-15">
                    <h2 class="title text-dark text-capitalize">my account</h2>
                </div>
            </div>
            <div class="col-12">
                <ol class="breadcrumb bg-transparent m-0 p-0 align-items-center justify-content-center">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">my account</li>
                </ol>
            </div>
        </div>
    </div>
</nav>
<!-- breadcrumb-section end -->
<!-- product tab start -->

<div class="my-account pt-80 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="title text-capitalize mb-30 pb-25">my account</h3>
            </div>
            <!-- My Account Tab Menu Start -->
            <div class="col-lg-3 col-12 mb-30">
                <div class="myaccount-tab-menu nav" role="tablist">
                    <a href="#dashboad" data-toggle="tab"  class="active"><i class="fas fa-tachometer-alt"></i>
                        Dashboard</a>

                    <a href="#orders" data-toggle="tab"><i class="fa fa-cart-arrow-down"></i>
                        Orders</a>

                    <a href="#download" data-toggle="tab"><i class="fas fa-cloud-download-alt"></i>
                        Download</a>

                    <a href="#payment-method" data-toggle="tab"><i class="fa fa-credit-card"></i>
                        Payment
                        Method</a>

                    <a href="#address-edit" data-toggle="tab"><i class="fa fa-map-marker"></i>
                        address</a>

                    <a href="#account-info" data-toggle="tab"><i class="fa fa-user"></i> Account
                        Details</a>

                    
                </div>
            </div>
            <!-- My Account Tab Menu End -->

            <!-- My Account Tab Content Start -->
            <div class="col-lg-9 col-12 mb-30">
                <div class="tab-content" id="myaccountContent">
                    <!-- Single Tab Content Start -->
                    <div class="tab-pane fade active show" id="dashboad" role="tabpanel">
                        <div class="myaccount-content">
                            <h3>Dashboard</h3>

                            <div class="welcome mb-20">
                                <p>Hello, <strong>{{ Auth::user()->name }}</strong></p>
                            </div>

                            <p class="mb-0">From your account dashboard. you can easily check &amp; view your
                                recent orders, manage your shipping and billing addresses and edit your
                                password and account details.</p>
                        </div>
                    </div>
                    <!-- Single Tab Content End -->

                    <!-- Single Tab Content Start -->
                    <div class="tab-pane fade" id="orders" role="tabpanel">
                        <div class="myaccount-content">
                            <h3>Orders</h3>

                            <div class="myaccount-table table-responsive text-center">
                                <table class="table table-bordered">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>No</th>
                                            <th> Product Name</th>
                                            <th>Product Image</th>
                                            <th>Product Quantity</th>
                                            <th>Total Price</th>
                                            <th>Date & Time</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    @foreach($data as $product)
                                    <tbody>
                                        <tr>
                                            <td>{{$product->id}}</td>
                                            <td>{{$product->product_name}}</td>
                                            <td><img src="{{ url('/upload/'.$product->product_image)}}"></td>
                                            <td>{{$product->product_quantity}}</td>
                                            <td class="label_text">₹ {{$product->product_price}}</td>
                                            <td>{{$product->created_at}}</td>
                                            <td>
                                             <a href="" class="btn btn-info">View</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Single Tab Content End -->

                    <!-- Single Tab Content Start -->
                    <div class="tab-pane fade" id="download" role="tabpanel">
                        <div class="myaccount-content">
                            <h3>Downloads</h3>

                            <div class="myaccount-table table-responsive text-center">
                                <table class="table table-bordered">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Product</th>
                                            <th>Date</th>
                                            <th>Download</th>
                                        </tr>
                                    </thead>
                                     @foreach($data as $product)
                                    <tbody>
                                        <tr>
                                            <td>{{$product->product_name}}</td>
                                            <td>{{$product->created_at}}</td>
                                            <td><a href="/getOrderDetails" class="btn btn-primary">Download File</a></td>
                                        </tr>
                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Single Tab Content End -->

                    <!-- Single Tab Content Start -->
                    <div class="tab-pane fade" id="payment-method" role="tabpanel">
                        <div class="myaccount-content">
                            <h3>Payment Method</h3>
                           <table class="table table-bordered">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Id</th>
                                            <th>Payment</th>
                                           
                                        </tr>
                                    </thead>
                                     @foreach($data as $product)
                                    <tbody>
                                        <tr>
                                            <td>{{$product->id}}</td>
                                            <td>{{$product->payment_method}}</td>
                                        </tr>
                                    </tbody>
                                    @endforeach
                                </table>
                        </div>
                    </div>
                    <!-- Single Tab Content End -->

                    <!-- Single Tab Content Start -->
                    <div class="tab-pane fade" id="address-edit" role="tabpanel">
                        <div class="myaccount-content">
                            <h3>Billing Address</h3>
                                <table class="table table-bordered">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>No.</th>
                                            <th>Name</th>
                                            <th>Address</th>
                                            <th>Action</th>
                                           
                                        </tr>
                                    </thead>
                                     @foreach($data as $address)
                                    <tbody>
                                        <tr>
                                            <td>{{$address->id}}</td>
                                            <td>{{Auth::user()->name}}</td>
                                            <td>{{$address->city}},{{$address->pincode}},{{$address->country}}</td>
                                            <td><a href="{{url('/edit-address')}}" class="ht-btn black-btn d-inline-block edit-address-btn"><i
                                             class="fa fa-edit"></i>Edit Address</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    @endforeach
                                </table>
                        </div>
                    </div>
                    <!-- Single Tab Content End -->

                    <!-- Single Tab Content Start -->
                    <div class="tab-pane fade" id="account-info" role="tabpanel">
                        <div class="myaccount-content">
                            <h3>Account Details</h3>
                             <form action="{{url('/change-password')}}" method="post">
                                      @csrf 
                            <div class="account-details-form">
                                    <div class="row"> 
                                     
                                        <div class="col-lg-6 col-12 mb-30">
                                            <label class="mb-2 label_text">Full Name</label>
                                            <input id="display-name" placeholder="Full Name" type="text" value="{{Auth::user()->name}}">
                                        </div>

                                        <div class="col-lg-6 col-12 mb-30">
                                             <label class="mb-2 label_text">Email Address</label>
                                            <input id="email" placeholder="Email Address" type="email" value="{{Auth::user()->email}}">
                                        </div>

                                        <div class="col-12 mb-30">
                                            <h4>Password change</h4>
                                        </div>

                                        <div class="col-lg-6 col-12 mb-30">
                                            <input id="new-pwd" name="new_password" type="password" placeholder="New Password">
                                        </div>

                                        <div class="col-lg-6 col-12 mb-30">
                                            <input id="confirm-pwd" name="new_confirm_password" type="password" placeholder="Confirm Password">
                                        </div>

                                        <div class="col-12">
                                            <button type="submit" class="btn theme-btn--dark1 btn--md">Save Changes</button>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                    <!-- Single Tab Content End -->
                </div>
            </div>
            <!-- My Account Tab Content End -->
        </div>
    </div>
</div>
<!-- product tab end -->
<script type="text/javascript">
        function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
    </script>
@endsection