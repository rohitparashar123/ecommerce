@extends('front/master')
@section('title','Add To Cart')
@section('content')
<style type="text/css">
    .theme-btn--dark1 {
  color: #ffffff!important;
  background: #1d1d1d!important;
}

.theme-btn--dark1:hover {
  color: #ffffff!important;
  background: #f33535!important;
}
</style>
<!-- breadcrumb-section start -->
<nav class="breadcrumb-section theme1 bg-lighten2 pt-110 pb-110" style="background-image: url('../images/login1.jpg'); background-position: center center; background-repeat: no-repeat; background-size: cover;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center mb-15">
                    <h2 class="title text-dark text-capitalize">cart</h2>
                </div>
            </div>
            <div class="col-12">
                <ol class="breadcrumb bg-transparent m-0 p-0 align-items-center justify-content-center">
                    <li class="breadcrumb-item"><a href="index.html" style="color: white!important">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page" style="color: white!important;">cart</li>
                </ol>
            </div>
        </div>
    </div>
</nav>
<!-- breadcrumb-section end -->
<!-- product tab start -->
<section class="whish-list-section theme1 pt-80 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-8">
                <h3 class="title mb-30 pb-25 text-capitalize">Your cart items</h3>
                <div class="table-responsive">
                  
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th class="text-center" scope="col">Product Image</th>
                                <th class="text-center" scope="col">Product Name</th>
                                <th class="text-center" scope="col">Qty</th>
                                <th class="text-center" scope="col">Price</th>
                                <th class="text-center" scope="col">action</th>
                            </tr>
                        </thead>
                        <tbody>
                              @foreach($data as $cart)
                            <tr>
                                <input type="hidden" value="{{$cart->id}}" name="id">
                                <th class="text-center" scope="row">
                                    <img src="{{url('/upload/'.$cart->product_image)}}" alt="img">
                                </th>
                                <td class="text-center">
                                    <span class="whish-title">{{$cart->product_name}}</span>
                                </td>
                                <td class="text-center">
                                    <div class="product-count style">
                                        <div class="count d-flex justify-content-center">
                                            <input type="number" min="1" max="10" name="product_quantity" step="1" value="{{$cart->product_quantity}}">
                                            <div class="button-group">
                                                <a  href="{{url('cart/updatequantity/'.$cart->id.'/1')}}" class="count-btn increment"><i
                                                        class="fas fa-chevron-up"></i></a>
                                                <a href="{{url('cart/updatequantity/'.$cart->id.'/-1')}}" class="count-btn decrement"><i
                                                        class="fas fa-chevron-down"></i></a> 
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <span class="whish-list-price">
                                        ${{$cart->product_price*$cart->product_quantity}}
                                    </span></td>

                                <td class="text-center">
                                    <a href="{{url('cart/delete/')}}/{{$cart->id}}"> <span class="trash"><i class="fas fa-trash-alt"></i></span></a>
                                </td>
                            </tr>
                              @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-4 mb-30 mt-5">
                <ul class="list-group cart-summary rounded-0">
                    <?php
                    $total_amount=0;
                    ?>
                    @foreach($a as $carts)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        
                        <ul class="items">
                            <li>{{$carts->product_name}}</li>
                             <li>Quantity</li>
                            
                        </ul>
                        <ul class="amount">
                            <li>{{$carts->product_price}}</li>
                            <li>{{$carts->product_quantity}}</li>
                        </ul>
                    </li>
                    <?php
                    $total_amount=$total_amount+($carts->product_price*$carts->product_quantity);
                    ?>
                    @endforeach
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <ul class="items">
                            <li>Total Price:</li>
                            <li>Taxes</li>
                        </ul>
                        <ul class="amount">
                            <li><?php echo $total_amount ?></li>
                            <li>$0</li>
                        </ul>
                    </li>
                    <li class="list-group-item text-center">
                        @if(Auth::check())
                        <a href="/checkout" class="btn theme-btn--dark1 btn--md">Proceed To Pay</a>
                        @else
                        <a href="/login_page" class="btn theme-btn--dark1 btn--md">Checkout</a>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- product tab end -->
@endsection