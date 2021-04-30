@extends('front/master')
@section('title','FoodBuddy')
@section('content')
<style type="text/css">
   .bg-image{
   background-repeat: no-repeat; 
   background-position: center bottom;
   background-size: cover;
   }
   .whatsapp-icon{
   position: fixed;
   bottom: 51px;
   width: 40px;
   height: 40px;
   right: 0px;
   }
   .section_top{
   position: relative;
   top: -90px;
   margin-bottom: 145px;
   }
   @media screen and (max-width: 576px){
   .section_top{
   display: none;
   }
   }
   .section_top_girl{
   position: relative;
   top: -235px;
   background-color: #171717;
   }
   @media screen and (max-width: 576px){
   .section_top_girl{
   display: none;
   }
   }
   #image_mobile2{
   position: relative;
   top: 204px;
   left: 15px;
   }
   #image_mobile11{
   position: relative;
   top: -191px;
   left: 374px;
   }
   #image_girl{
   position: relative;
   top: 0px;
   left: 258px;
   max-width: 70%;
   height: auto;
   }
   .responsive{
   padding: 0 20px;
   height: 570px;
   overflow: hidden;
   }
   .row_responsive{
   max-width: 1200px;
   min-width: 1200px;
   position: relative;
   margin: 0 auto;
   display: -ms-flexbox;
   display: flex;
   -ms-flex-direction: column;
   flex-direction: column;
   -ms-flex-pack: center;
   justify-content: center;
   height: 100%;
   }
   .big_heading{
   font-size: 40px;
   font-weight: 600;
   width: 300px;
   line-height: 1;
   letter-spacing: -.45px;
   }
   .big_heading_{
   font-size: 40px;
   font-weight: 600;
   color: white;
   line-height: 1;
   letter-spacing: -.45px;
   text-align: justify;
   }
   .small_heading{
   font-size: 20px;
   width: 400px;
   font-weight: 300;
   padding-top: 20px;
   padding-bottom: 60px;
   color: #7e808c;
   line-height: 1.2;
   }
   .small_heading_girl{
   font-size: 17px;
   width: 530px;
   text-align: justify;
   font-weight: 300;
   padding-top: 20px;
   padding-bottom: 60px;
   line-height: 1.2;
   }
   .top_heading_girl{
   position: relative;
   text-align: center;
   font-size: 20px;
   color: red;
   }
   .image_girl1{
   position: relative;
   top: -50px;
   width: 220px;
   height: 271px;
   left: 99px;
   }
   .girl_cook3{
   position: relative;
   top: -10px;
   left: -48px;
   }
</style>
<!-- main slider start -->
<section class="bg-light position-relative">
   <div class="main-slider dots-style theme1">
      @foreach($banner as $banner)
      <div class="slider-item bg-image" style="background: url('{{ url('/upload/'.$banner->image)}}');">
         <div class="container">
            <div class="row align-items-center slider-height">
               <div class="col-12">
                  <div class="slider-content">
                     <h5 class="sub-title text-white animated" data-animation-in="fadeInRight" data-delay-in="2" style="font-size: 40px; font-weight: 500;">
                        {{$banner->title}}
                     </h5>
                     <a href="shop-grid-4-column.html"
                        class="btn theme--btn1 btn--lg text-uppercase rounded-5 animated mt-45 mt-sm-25"
                        data-animation-in="zoomIn" data-delay-in="3">Order now</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      @endforeach
      <!-- slider-item end -->
   </div>
   <!-- slick-progress -->
   <div class="slick-progress">
      <span></span>
   </div>
   <!-- slick-progress end-->
</section>
<!-- main slider end -->
<!-- common banner  start -->
<!-- <div class="common-banner pt-80 bg-white">
   <div class="container">
       <div class="row">
           <div class="col-md-6 mb-30">
               <div class="banner-thumb">
                   <a href="shop-grid-4-column.html" class="zoom-in d-block overflow-hidden">
                       <img src="front/assets/img/banner/1.jpg" alt="banner-thumb-naile">
                   </a>
               </div>
           </div>
           <div class="col-md-3 col-sm-6 mb-30">
               <div class="banner-thumb">
                   <a href="shop-grid-4-column.html" class="zoom-in d-block overflow-hidden">
                       <img src="front/assets/img/banner/2.jpg" alt="banner-thumb-naile">
                   </a>
               </div>
           </div>
           <div class="col-md-3 col-sm-6 mb-30">
               <div class="banner-thumb">
                   <a href="shop-grid-4-column.html" class="zoom-in d-block overflow-hidden">
                       <img src="front/assets/img/banner/3.jpg" alt="banner-thumb-naile">
                   </a>
               </div>
           </div>
       </div>
   </div>
   </div> -->
<!-- common banner  end -->
<!-- product tab start -->
<section class="product-tab bg-white pt-50 pb-80">
   <div class="container">
      <div class="product-tab-nav mb-35">
         <div class="row align-items-center">
            <div class="col-12">
               <div class="section-title text-center mb-30">
                  <h2 class="title text-dark text-capitalize">Our products</h2>
                  <p class="text mt-10">Add our products to weekly line up</p>
               </div>
            </div>
            <div class="col-12">
               <nav class="product-tab-menu theme1">
                  <ul class="nav nav-pills justify-content-center" id="pills-tab" role="tablist">
                     <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                           role="tab" aria-controls="pills-home" aria-selected="true">Women Shoes</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                           role="tab" aria-controls="pills-profile" aria-selected="false">Men Shoes</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact"
                           role="tab" aria-controls="pills-contact" aria-selected="false">Casual Shoes</a>
                     </li>
                  </ul>
               </nav>
            </div>
         </div>
      </div>
      <!-- product-tab-nav end -->
      <div class="row">
         <div class="col-12">
            <div class="tab-content" id="pills-tabContent">
               <!-- first tab-pane -->
               <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                  aria-labelledby="pills-home-tab">
                  <div class="product-slider-init theme1 slick-nav">
                     @foreach($products as $products)
                     <div class="slider-item">
                        <div class="product-list mb-30">
                           <div class="card product-card">
                              <div class="card-body p-0">
                                 <div class="media flex-column">
                                    <div class="product-thumbnail position-relative">
                                       <span class="badge badge-danger top-right">New</span>
                                       <a href="{{url('product-detail/'.$products->id)}}">
                                       <img class="first-img" src="{{url('/upload/'.$products->product_image)}}"
                                          alt="thumbnail" style="width: 100%; height: 100%;">
                                       </a>
                                       <!-- product links -->
                                       <ul class="product-links d-flex justify-content-center">
                                          <li>
                                             <a href="wishlist.html">
                                             <span data-toggle="tooltip" data-placement="bottom"
                                                title="add to wishlist" class="icon-heart"> </span>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#" data-toggle="modal" data-target="#compare">
                                             <span data-toggle="tooltip" data-placement="bottom"
                                                title="Add to compare" class="icon-shuffle"></span>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#" data-toggle="modal" data-target="#quick-view">
                                             <span data-toggle="tooltip" data-placement="bottom"
                                                title="Quick view" class="icon-magnifier"></span>
                                             </a>
                                          </li>
                                       </ul>
                                       <!-- product links end-->
                                    </div>
                                    <div class="media-body">
                                       <div class="product-desc">
                                          <h3 class="title"><a href="shop-grid-4-column.html">{{$products->product_name}}</a></h3>
                                          <div class="star-rating">
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star de-selected"></span>
                                          </div>
                                          <div class="d-flex align-items-center justify-content-between">
                                             <h6 class="product-price">${{$products->product_price}}</h6>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- product-list End -->
                        </div>
                        <div class="product-list">
                           <div class="card product-card">
                              <div class="card-body p-0">
                                 <div class="media flex-column">
                                    <div class="product-thumbnail position-relative">
                                       <span class="badge badge-success top-left">-10%</span>
                                       <span class="badge badge-danger top-right">New</span>
                                       <a href="{{url('product-detail/'.$products->id)}}">
                                       <img class="first-img" src="{{url('/upload/'.$products->product_image)}}"
                                          alt="thumbnail">
                                       </a>
                                       <!-- product links -->
                                       <ul class="product-links d-flex justify-content-center">
                                          <li>
                                             <a href="wishlist.html">
                                             <span data-toggle="tooltip" data-placement="bottom"
                                                title="add to wishlist" class="icon-heart"> </span>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#" data-toggle="modal" data-target="#compare">
                                             <span data-toggle="tooltip" data-placement="bottom"
                                                title="Add to compare" class="icon-shuffle"></span>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#" data-toggle="modal" data-target="#quick-view">
                                             <span data-toggle="tooltip" data-placement="bottom"
                                                title="Quick view" class="icon-magnifier"></span>
                                             </a>
                                          </li>
                                       </ul>
                                       <!-- product links end-->
                                    </div>
                                    <div class="media-body">
                                       <div class="product-desc">
                                          <h3 class="title"><a href="shop-grid-4-column.html">{{$products->product_name}}</a></h3>
                                          <div class="star-rating">
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star de-selected"></span>
                                          </div>
                                          <div class="d-flex align-items-center justify-content-between">
                                             <h6 class="product-price"><del class="del">$23.90</del>
                                                <span class="onsale">${{$products->product_price}}</span>
                                             </h6>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- product-list End -->
                        </div>
                     </div>
                     @endforeach
                     <!-- slider-item end -->
                  </div>
               </div>
               <!-- second tab-pane -->
               <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                  <div class="product-slider-init theme1 slick-nav">
                     <div class="slider-item">
                        <div class="product-list mb-30">
                           <div class="card product-card">
                              <div class="card-body p-0">
                                 <div class="media flex-column">
                                    <div class="product-thumbnail position-relative">
                                       <span class="badge badge-danger top-right">New</span>
                                       <a href="single-product.html">
                                       <img class="first-img" src="front/assets/img/product/1.jpg"
                                          alt="thumbnail">
                                       </a>
                                       <!-- product links -->
                                       <ul class="product-links d-flex justify-content-center">
                                          <li>
                                             <a href="wishlist.html">
                                             <span data-toggle="tooltip" data-placement="bottom"
                                                title="add to wishlist" class="icon-heart"> </span>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#" data-toggle="modal" data-target="#compare">
                                             <span data-toggle="tooltip" data-placement="bottom"
                                                title="Add to compare" class="icon-shuffle"></span>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#" data-toggle="modal" data-target="#quick-view">
                                             <span data-toggle="tooltip" data-placement="bottom"
                                                title="Quick view" class="icon-magnifier"></span>
                                             </a>
                                          </li>
                                       </ul>
                                       <!-- product links end-->
                                    </div>
                                    <div class="media-body">
                                       <div class="product-desc">
                                          <h3 class="title"><a href="shop-grid-4-column.html">New Luxury
                                             Men's Slim Fit Shirt Short Sleeve...</a>
                                          </h3>
                                          <div class="star-rating">
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star de-selected"></span>
                                          </div>
                                          <div class="d-flex align-items-center justify-content-between">
                                             <h6 class="product-price">$11.90</h6>
                                             <button class="pro-btn" data-toggle="modal"
                                                data-target="#add-to-cart"><i
                                                class="icon-basket"></i></button>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- product-list End -->
                        </div>
                        <div class="product-list">
                           <div class="card product-card">
                              <div class="card-body p-0">
                                 <div class="media flex-column">
                                    <div class="product-thumbnail position-relative">
                                       <span class="badge badge-success top-left">-10%</span>
                                       <span class="badge badge-danger top-right">New</span>
                                       <a href="single-product.html">
                                       <img class="first-img" src="front/assets/img/product/6.jpg"
                                          alt="thumbnail">
                                       </a>
                                       <!-- product links -->
                                       <ul class="product-links d-flex justify-content-center">
                                          <li>
                                             <a href="wishlist.html">
                                             <span data-toggle="tooltip" data-placement="bottom"
                                                title="add to wishlist" class="icon-heart"> </span>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#" data-toggle="modal" data-target="#compare">
                                             <span data-toggle="tooltip" data-placement="bottom"
                                                title="Add to compare" class="icon-shuffle"></span>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#" data-toggle="modal" data-target="#quick-view">
                                             <span data-toggle="tooltip" data-placement="bottom"
                                                title="Quick view" class="icon-magnifier"></span>
                                             </a>
                                          </li>
                                       </ul>
                                       <!-- product links end-->
                                    </div>
                                    <div class="media-body">
                                       <div class="product-desc">
                                          <h3 class="title"><a href="shop-grid-4-column.html">New Balance
                                             Running Arishi trainers in triple</a>
                                          </h3>
                                          <div class="star-rating">
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star de-selected"></span>
                                          </div>
                                          <div class="d-flex align-items-center justify-content-between">
                                             <h6 class="product-price"><del class="del">$23.90</del>
                                                <span class="onsale">$21.51</span>
                                             </h6>
                                             <button class="pro-btn" data-toggle="modal"
                                                data-target="#add-to-cart"><i
                                                class="icon-basket"></i></button>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- product-list End -->
                        </div>
                     </div>
                     <!-- slider-item end -->
                     <div class="slider-item">
                        <div class="product-list mb-30">
                           <div class="card product-card">
                              <div class="card-body p-0">
                                 <div class="media flex-column">
                                    <div class="product-thumbnail position-relative">
                                       <span class="badge badge-danger top-right">New</span>
                                       <a href="single-product.html">
                                       <img class="first-img" src="front/assets/img/product/2.jpg"
                                          alt="thumbnail">
                                       </a>
                                       <!-- product links -->
                                       <ul class="product-links d-flex justify-content-center">
                                          <li>
                                             <a href="wishlist.html">
                                             <span data-toggle="tooltip" data-placement="bottom"
                                                title="add to wishlist" class="icon-heart"> </span>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#" data-toggle="modal" data-target="#compare">
                                             <span data-toggle="tooltip" data-placement="bottom"
                                                title="Add to compare" class="icon-shuffle"></span>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#" data-toggle="modal" data-target="#quick-view">
                                             <span data-toggle="tooltip" data-placement="bottom"
                                                title="Quick view" class="icon-magnifier"></span>
                                             </a>
                                          </li>
                                       </ul>
                                       <!-- product links end-->
                                    </div>
                                    <div class="media-body">
                                       <div class="product-desc">
                                          <h3 class="title"><a href="shop-grid-4-column.html">New Balance
                                             Fresh Foam Kaymin from new zeland</a>
                                          </h3>
                                          <div class="star-rating">
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star de-selected"></span>
                                          </div>
                                          <div class="d-flex align-items-center justify-content-between">
                                             <h6 class="product-price">$11.90</h6>
                                             <button class="pro-btn" data-toggle="modal"
                                                data-target="#add-to-cart"><i
                                                class="icon-basket"></i></button>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- product-list End -->
                        </div>
                        <div class="product-list">
                           <div class="card product-card">
                              <div class="card-body p-0">
                                 <div class="media flex-column">
                                    <div class="product-thumbnail position-relative">
                                       <span class="badge badge-danger top-right">New</span>
                                       <a href="single-product.html">
                                       <img class="first-img" src="front/assets/img/product/7.jpg"
                                          alt="thumbnail">
                                       </a>
                                       <!-- product links -->
                                       <ul class="product-links d-flex justify-content-center">
                                          <li>
                                             <a href="wishlist.html">
                                             <span data-toggle="tooltip" data-placement="bottom"
                                                title="add to wishlist" class="icon-heart"> </span>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#" data-toggle="modal" data-target="#compare">
                                             <span data-toggle="tooltip" data-placement="bottom"
                                                title="Add to compare" class="icon-shuffle"></span>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#" data-toggle="modal" data-target="#quick-view">
                                             <span data-toggle="tooltip" data-placement="bottom"
                                                title="Quick view" class="icon-magnifier"></span>
                                             </a>
                                          </li>
                                       </ul>
                                       <!-- product links end-->
                                    </div>
                                    <div class="media-body">
                                       <div class="product-desc">
                                          <h3 class="title"><a href="shop-grid-4-column.html">New Balance
                                             Running Fuel Cell trainers</a>
                                          </h3>
                                          <div class="star-rating">
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star de-selected"></span>
                                          </div>
                                          <div class="d-flex align-items-center justify-content-between">
                                             <h6 class="product-price">$11.90</h6>
                                             <button class="pro-btn" data-toggle="modal"
                                                data-target="#add-to-cart"><i
                                                class="icon-basket"></i></button>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- product-list End -->
                        </div>
                     </div>
                     <!-- slider-item end -->
                     <div class="slider-item">
                        <div class="product-list mb-30">
                           <div class="card product-card">
                              <div class="card-body p-0">
                                 <div class="media flex-column">
                                    <div class="product-thumbnail position-relative">
                                       <span class="badge badge-danger top-right">New</span>
                                       <a href="single-product.html">
                                       <img class="first-img" src="front/assets/img/product/3.jpg"
                                          alt="thumbnail">
                                       </a>
                                       <!-- product links -->
                                       <ul class="product-links d-flex justify-content-center">
                                          <li>
                                             <a href="wishlist.html">
                                             <span data-toggle="tooltip" data-placement="bottom"
                                                title="add to wishlist" class="icon-heart"> </span>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#" data-toggle="modal" data-target="#compare">
                                             <span data-toggle="tooltip" data-placement="bottom"
                                                title="Add to compare" class="icon-shuffle"></span>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#" data-toggle="modal" data-target="#quick-view">
                                             <span data-toggle="tooltip" data-placement="bottom"
                                                title="Quick view" class="icon-magnifier"></span>
                                             </a>
                                          </li>
                                       </ul>
                                       <!-- product links end-->
                                    </div>
                                    <div class="media-body">
                                       <div class="product-desc">
                                          <h3 class="title"><a href="shop-grid-4-column.html">Juicy
                                             Couture
                                             Tricot Logo Stripe Jacket</a>
                                          </h3>
                                          <div class="star-rating">
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star de-selected"></span>
                                          </div>
                                          <div class="d-flex align-items-center justify-content-between">
                                             <h6 class="product-price"> $21.51</h6>
                                             <button class="pro-btn" data-toggle="modal"
                                                data-target="#add-to-cart"><i
                                                class="icon-basket"></i></button>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- product-list End -->
                        </div>
                        <div class="product-list">
                           <div class="card product-card">
                              <div class="card-body p-0">
                                 <div class="media flex-column">
                                    <div class="product-thumbnail position-relative">
                                       <span class="badge badge-danger top-right">New</span>
                                       <a href="single-product.html">
                                       <img class="first-img" src="front/assets/img/product/8.jpg"
                                          alt="thumbnail">
                                       </a>
                                       <!-- product links -->
                                       <ul class="product-links d-flex justify-content-center">
                                          <li>
                                             <a href="wishlist.html">
                                             <span data-toggle="tooltip" data-placement="bottom"
                                                title="add to wishlist" class="icon-heart"> </span>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#" data-toggle="modal" data-target="#compare">
                                             <span data-toggle="tooltip" data-placement="bottom"
                                                title="Add to compare" class="icon-shuffle"></span>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#" data-toggle="modal" data-target="#quick-view">
                                             <span data-toggle="tooltip" data-placement="bottom"
                                                title="Quick view" class="icon-magnifier"></span>
                                             </a>
                                          </li>
                                       </ul>
                                       <!-- product links end-->
                                    </div>
                                    <div class="media-body">
                                       <div class="product-desc">
                                          <h3 class="title"><a href="shop-grid-4-column.html">orginal
                                             Kaval
                                             Windbreaker Winter Jacket</a>
                                          </h3>
                                          <div class="star-rating">
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star de-selected"></span>
                                          </div>
                                          <div class="d-flex align-items-center justify-content-between">
                                             <h6 class="product-price">$11.90</h6>
                                             <button class="pro-btn" data-toggle="modal"
                                                data-target="#add-to-cart"><i
                                                class="icon-basket"></i></button>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- product-list End -->
                        </div>
                     </div>
                     <!-- slider-item end -->
                     <div class="slider-item">
                        <div class="product-list mb-30">
                           <div class="card product-card">
                              <div class="card-body p-0">
                                 <div class="media flex-column">
                                    <div class="product-thumbnail position-relative">
                                       <span class="badge badge-danger top-right">New</span>
                                       <a href="single-product.html">
                                       <img class="first-img" src="front/assets/img/product/4.jpg"
                                          alt="thumbnail">
                                       <img class="second-img" src="front/assets/img/product/12.jpg"
                                          alt="thumbnail">
                                       </a>
                                       <!-- product links -->
                                       <ul class="product-links d-flex justify-content-center">
                                          <li>
                                             <a href="wishlist.html">
                                             <span data-toggle="tooltip" data-placement="bottom"
                                                title="add to wishlist" class="icon-heart"> </span>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#" data-toggle="modal" data-target="#compare">
                                             <span data-toggle="tooltip" data-placement="bottom"
                                                title="Add to compare" class="icon-shuffle"></span>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#" data-toggle="modal" data-target="#quick-view">
                                             <span data-toggle="tooltip" data-placement="bottom"
                                                title="Quick view" class="icon-magnifier"></span>
                                             </a>
                                          </li>
                                       </ul>
                                       <!-- product links end-->
                                    </div>
                                    <div class="media-body">
                                       <div class="product-desc">
                                          <h3 class="title"><a href="shop-grid-4-column.html">Juicy
                                             Couture
                                             Tricot Logo Stripe Jacket</a>
                                          </h3>
                                          <div class="star-rating">
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star de-selected"></span>
                                          </div>
                                          <div class="d-flex align-items-center justify-content-between">
                                             <h6 class="product-price"><del class="del">$23.90</del>
                                                <span class="onsale">$21.51</span>
                                             </h6>
                                             <button class="pro-btn" data-toggle="modal"
                                                data-target="#add-to-cart"><i
                                                class="icon-basket"></i></button>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- product-list End -->
                        </div>
                        <div class="product-list">
                           <div class="card product-card">
                              <div class="card-body p-0">
                                 <div class="media flex-column">
                                    <div class="product-thumbnail position-relative">
                                       <span class="badge badge-danger top-right">New</span>
                                       <a href="single-product.html">
                                       <img class="first-img" src="front/assets/img/product/9.jpg"
                                          alt="thumbnail">
                                       </a>
                                       <!-- product links -->
                                       <ul class="product-links d-flex justify-content-center">
                                          <li>
                                             <a href="wishlist.html">
                                             <span data-toggle="tooltip" data-placement="bottom"
                                                title="add to wishlist" class="icon-heart"> </span>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#" data-toggle="modal" data-target="#compare">
                                             <span data-toggle="tooltip" data-placement="bottom"
                                                title="Add to compare" class="icon-shuffle"></span>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#" data-toggle="modal" data-target="#quick-view">
                                             <span data-toggle="tooltip" data-placement="bottom"
                                                title="Quick view" class="icon-magnifier"></span>
                                             </a>
                                          </li>
                                       </ul>
                                       <!-- product links end-->
                                    </div>
                                    <div class="media-body">
                                       <div class="product-desc">
                                          <h3 class="title"><a href="shop-grid-4-column.html">orginal
                                             Kaval
                                             Windbreaker Winter Jacket</a>
                                          </h3>
                                          <div class="star-rating">
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star de-selected"></span>
                                          </div>
                                          <div class="d-flex align-items-center justify-content-between">
                                             <h6 class="product-price">$11.90</h6>
                                             <button class="pro-btn" data-toggle="modal"
                                                data-target="#add-to-cart"><i
                                                class="icon-basket"></i></button>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- product-list End -->
                        </div>
                     </div>
                     <!-- slider-item end -->
                     <div class="slider-item">
                        <div class="product-list mb-30">
                           <div class="card product-card">
                              <div class="card-body p-0">
                                 <div class="media flex-column">
                                    <div class="product-thumbnail position-relative">
                                       <span class="badge badge-danger top-right">New</span>
                                       <a href="single-product.html">
                                       <img class="first-img" src="front/assets/img/product/5.jpg"
                                          alt="thumbnail">
                                       <img class="second-img" src="front/assets/img/product/12.jpg"
                                          alt="thumbnail">
                                       </a>
                                       <!-- product links -->
                                       <ul class="product-links d-flex justify-content-center">
                                          <li>
                                             <a href="wishlist.html">
                                             <span data-toggle="tooltip" data-placement="bottom"
                                                title="add to wishlist" class="icon-heart"> </span>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#" data-toggle="modal" data-target="#compare">
                                             <span data-toggle="tooltip" data-placement="bottom"
                                                title="Add to compare" class="icon-shuffle"></span>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#" data-toggle="modal" data-target="#quick-view">
                                             <span data-toggle="tooltip" data-placement="bottom"
                                                title="Quick view" class="icon-magnifier"></span>
                                             </a>
                                          </li>
                                       </ul>
                                       <!-- product links end-->
                                    </div>
                                    <div class="media-body">
                                       <div class="product-desc">
                                          <h3 class="title"><a href="shop-grid-4-column.html">New Luxury
                                             Men's
                                             Slim Fit Shirt Short Sleeve...</a>
                                          </h3>
                                          <div class="star-rating">
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star de-selected"></span>
                                          </div>
                                          <div class="d-flex align-items-center justify-content-between">
                                             <h6 class="product-price">$11.90</h6>
                                             <button class="pro-btn" data-toggle="modal"
                                                data-target="#add-to-cart"><i
                                                class="icon-basket"></i></button>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- product-list End -->
                        </div>
                        <div class="product-list">
                           <div class="card product-card">
                              <div class="card-body p-0">
                                 <div class="media flex-column">
                                    <div class="product-thumbnail position-relative">
                                       <span class="badge badge-danger top-right">New</span>
                                       <a href="single-product.html">
                                       <img class="first-img" src="front/assets/img/product/12.jpg"
                                          alt="thumbnail">
                                       <img class="second-img" src="front/assets/img/product/5.jpg"
                                          alt="thumbnail">
                                       </a>
                                       <!-- product links -->
                                       <ul class="product-links d-flex justify-content-center">
                                          <li>
                                             <a href="wishlist.html">
                                             <span data-toggle="tooltip" data-placement="bottom"
                                                title="add to wishlist" class="icon-heart"> </span>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#" data-toggle="modal" data-target="#compare">
                                             <span data-toggle="tooltip" data-placement="bottom"
                                                title="Add to compare" class="icon-shuffle"></span>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#" data-toggle="modal" data-target="#quick-view">
                                             <span data-toggle="tooltip" data-placement="bottom"
                                                title="Quick view" class="icon-magnifier"></span>
                                             </a>
                                          </li>
                                       </ul>
                                       <!-- product links end-->
                                    </div>
                                    <div class="media-body">
                                       <div class="product-desc">
                                          <h3 class="title"><a href="shop-grid-4-column.html">orginal
                                             Kaval
                                             Windbreaker Winter Jacket</a>
                                          </h3>
                                          <div class="star-rating">
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star de-selected"></span>
                                          </div>
                                          <div class="d-flex align-items-center justify-content-between">
                                             <h6 class="product-price">$11.90</h6>
                                             <button class="pro-btn" data-toggle="modal"
                                                data-target="#add-to-cart"><i
                                                class="icon-basket"></i></button>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- product-list End -->
                        </div>
                     </div>
                     <!-- slider-item end -->
                     <div class="slider-item">
                        <div class="product-list mb-30">
                           <div class="card product-card">
                              <div class="card-body p-0">
                                 <div class="media flex-column">
                                    <div class="product-thumbnail position-relative">
                                       <span class="badge badge-danger top-right">New</span>
                                       <a href="{{url('/product-detail/'.$products->id)}}">
                                       <img class="first-img" src="front/assets/img/product/10.jpg"
                                          alt="thumbnail">
                                       <img class="second-img" src="front/assets/img/product/8.jpg"
                                          alt="thumbnail">
                                       </a>
                                       <!-- product links -->
                                       <ul class="product-links d-flex justify-content-center">
                                          <li>
                                             <a href="wishlist.html">
                                             <span data-toggle="tooltip" data-placement="bottom"
                                                title="add to wishlist" class="icon-heart"> </span>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#" data-toggle="modal" data-target="#compare">
                                             <span data-toggle="tooltip" data-placement="bottom"
                                                title="Add to compare" class="icon-shuffle"></span>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#" data-toggle="modal" data-target="#quick-view">
                                             <span data-toggle="tooltip" data-placement="bottom"
                                                title="Quick view" class="icon-magnifier"></span>
                                             </a>
                                          </li>
                                       </ul>
                                       <!-- product links end-->
                                    </div>
                                    <div class="media-body">
                                       <div class="product-desc">
                                          <h3 class="title"><a href="shop-grid-4-column.html">New Luxury
                                             Men's
                                             Slim Fit Shirt Short Sleeve...</a>
                                          </h3>
                                          <div class="star-rating">
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star de-selected"></span>
                                          </div>
                                          <div class="d-flex align-items-center justify-content-between">
                                             <h6 class="product-price"><del class="del">$23.90</del>
                                                <span class="onsale">$21.51</span>
                                             </h6>
                                             <button class="pro-btn" data-toggle="modal"
                                                data-target="#add-to-cart"><i
                                                class="icon-basket"></i></button>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- product-list End -->
                        </div>
                        <div class="product-list">
                           <div class="card product-card">
                              <div class="card-body p-0">
                                 <div class="media flex-column">
                                    <div class="product-thumbnail position-relative">
                                       <span class="badge badge-danger top-right">New</span>
                                       <a href="single-product.html">
                                       <img class="first-img" src="front/assets/img/product/11.jpg"
                                          alt="thumbnail">
                                       <img class="second-img" src="front/assets/img/product/5.jpg"
                                          alt="thumbnail">
                                       </a>
                                       <!-- product links -->
                                       <ul class="product-links d-flex justify-content-center">
                                          <li>
                                             <a href="wishlist.html">
                                             <span data-toggle="tooltip" data-placement="bottom"
                                                title="add to wishlist" class="icon-heart"> </span>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#" data-toggle="modal" data-target="#compare">
                                             <span data-toggle="tooltip" data-placement="bottom"
                                                title="Add to compare" class="icon-shuffle"></span>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#" data-toggle="modal" data-target="#quick-view">
                                             <span data-toggle="tooltip" data-placement="bottom"
                                                title="Quick view" class="icon-magnifier"></span>
                                             </a>
                                          </li>
                                       </ul>
                                       <!-- product links end-->
                                    </div>
                                    <div class="media-body">
                                       <div class="product-desc">
                                          <h3 class="title"><a href="shop-grid-4-column.html">orginal
                                             Kaval
                                             Windbreaker Winter Jacket</a>
                                          </h3>
                                          <div class="star-rating">
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star de-selected"></span>
                                          </div>
                                          <div class="d-flex align-items-center justify-content-between">
                                             <h6 class="product-price">$11.90</h6>
                                             <button class="pro-btn" data-toggle="modal"
                                                data-target="#add-to-cart"><i
                                                class="icon-basket"></i></button>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- product-list End -->
                        </div>
                     </div>
                     <!-- slider-item end -->
                  </div>
               </div>
               <!-- third tab-pane -->
               <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                  <div class="product-slider-init theme1 slick-nav">
                     <div class="slider-item">
                        <div class="product-list mb-30">
                           <div class="card product-card">
                              <div class="card-body p-0">
                                 <div class="media flex-column">
                                    <div class="product-thumbnail position-relative">
                                       <span class="badge badge-danger top-right">New</span>
                                       <a href="single-product.html">
                                       <img class="first-img" src="front/assets/img/product/1.jpg"
                                          alt="thumbnail">
                                       </a>
                                       <!-- product links -->
                                       <ul class="product-links d-flex justify-content-center">
                                          <li>
                                             <a href="wishlist.html">
                                             <span data-toggle="tooltip" data-placement="bottom"
                                                title="add to wishlist" class="icon-heart"> </span>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#" data-toggle="modal" data-target="#compare">
                                             <span data-toggle="tooltip" data-placement="bottom"
                                                title="Add to compare" class="icon-shuffle"></span>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#" data-toggle="modal" data-target="#quick-view">
                                             <span data-toggle="tooltip" data-placement="bottom"
                                                title="Quick view" class="icon-magnifier"></span>
                                             </a>
                                          </li>
                                       </ul>
                                       <!-- product links end-->
                                    </div>
                                    <div class="media-body">
                                       <div class="product-desc">
                                          <h3 class="title"><a href="shop-grid-4-column.html">New Luxury
                                             Men's Slim Fit Shirt Short Sleeve...</a>
                                          </h3>
                                          <div class="star-rating">
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star de-selected"></span>
                                          </div>
                                          <div class="d-flex align-items-center justify-content-between">
                                             <h6 class="product-price">$11.90</h6>
                                             <button class="pro-btn" data-toggle="modal"
                                                data-target="#add-to-cart"><i
                                                class="icon-basket"></i></button>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- product-list End -->
                        </div>
                        <div class="product-list">
                           <div class="card product-card">
                              <div class="card-body p-0">
                                 <div class="media flex-column">
                                    <div class="product-thumbnail position-relative">
                                       <span class="badge badge-success top-left">-10%</span>
                                       <span class="badge badge-danger top-right">New</span>
                                       <a href="single-product.html">
                                       <img class="first-img" src="front/assets/img/product/6.jpg"
                                          alt="thumbnail">
                                       </a>
                                       <!-- product links -->
                                       <ul class="product-links d-flex justify-content-center">
                                          <li>
                                             <a href="wishlist.html">
                                             <span data-toggle="tooltip" data-placement="bottom"
                                                title="add to wishlist" class="icon-heart"> </span>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#" data-toggle="modal" data-target="#compare">
                                             <span data-toggle="tooltip" data-placement="bottom"
                                                title="Add to compare" class="icon-shuffle"></span>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#" data-toggle="modal" data-target="#quick-view">
                                             <span data-toggle="tooltip" data-placement="bottom"
                                                title="Quick view" class="icon-magnifier"></span>
                                             </a>
                                          </li>
                                       </ul>
                                       <!-- product links end-->
                                    </div>
                                    <div class="media-body">
                                       <div class="product-desc">
                                          <h3 class="title"><a href="shop-grid-4-column.html">New Balance
                                             Running Arishi trainers in triple</a>
                                          </h3>
                                          <div class="star-rating">
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star de-selected"></span>
                                          </div>
                                          <div class="d-flex align-items-center justify-content-between">
                                             <h6 class="product-price"><del class="del">$23.90</del>
                                                <span class="onsale">$21.51</span>
                                             </h6>
                                             <button class="pro-btn" data-toggle="modal"
                                                data-target="#add-to-cart"><i
                                                class="icon-basket"></i></button>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- product-list End -->
                        </div>
                     </div>
                     <!-- slider-item end -->
                     <div class="slider-item">
                        <div class="product-list mb-30">
                           <div class="card product-card">
                              <div class="card-body p-0">
                                 <div class="media flex-column">
                                    <div class="product-thumbnail position-relative">
                                       <span class="badge badge-danger top-right">New</span>
                                       <a href="single-product.html">
                                       <img class="first-img" src="front/assets/img/product/2.jpg"
                                          alt="thumbnail">
                                       </a>
                                       <!-- product links -->
                                       <ul class="product-links d-flex justify-content-center">
                                          <li>
                                             <a href="wishlist.html">
                                             <span data-toggle="tooltip" data-placement="bottom"
                                                title="add to wishlist" class="icon-heart"> </span>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#" data-toggle="modal" data-target="#compare">
                                             <span data-toggle="tooltip" data-placement="bottom"
                                                title="Add to compare" class="icon-shuffle"></span>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#" data-toggle="modal" data-target="#quick-view">
                                             <span data-toggle="tooltip" data-placement="bottom"
                                                title="Quick view" class="icon-magnifier"></span>
                                             </a>
                                          </li>
                                       </ul>
                                       <!-- product links end-->
                                    </div>
                                    <div class="media-body">
                                       <div class="product-desc">
                                          <h3 class="title"><a href="shop-grid-4-column.html">New Balance
                                             Fresh Foam Kaymin from new zeland</a>
                                          </h3>
                                          <div class="star-rating">
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star de-selected"></span>
                                          </div>
                                          <div class="d-flex align-items-center justify-content-between">
                                             <h6 class="product-price">$11.90</h6>
                                             <button class="pro-btn" data-toggle="modal"
                                                data-target="#add-to-cart"><i
                                                class="icon-basket"></i></button>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- product-list End -->
                        </div>
                        <div class="product-list">
                           <div class="card product-card">
                              <div class="card-body p-0">
                                 <div class="media flex-column">
                                    <div class="product-thumbnail position-relative">
                                       <span class="badge badge-danger top-right">New</span>
                                       <a href="single-product.html">
                                       <img class="first-img" src="front/assets/img/product/7.jpg"
                                          alt="thumbnail">
                                       </a>
                                       <!-- product links -->
                                       <ul class="product-links d-flex justify-content-center">
                                          <li>
                                             <a href="wishlist.html">
                                             <span data-toggle="tooltip" data-placement="bottom"
                                                title="add to wishlist" class="icon-heart"> </span>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#" data-toggle="modal" data-target="#compare">
                                             <span data-toggle="tooltip" data-placement="bottom"
                                                title="Add to compare" class="icon-shuffle"></span>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#" data-toggle="modal" data-target="#quick-view">
                                             <span data-toggle="tooltip" data-placement="bottom"
                                                title="Quick view" class="icon-magnifier"></span>
                                             </a>
                                          </li>
                                       </ul>
                                       <!-- product links end-->
                                    </div>
                                    <div class="media-body">
                                       <div class="product-desc">
                                          <h3 class="title"><a href="shop-grid-4-column.html">New Balance
                                             Running Fuel Cell trainers</a>
                                          </h3>
                                          <div class="star-rating">
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star de-selected"></span>
                                          </div>
                                          <div class="d-flex align-items-center justify-content-between">
                                             <h6 class="product-price">$11.90</h6>
                                             <button class="pro-btn" data-toggle="modal"
                                                data-target="#add-to-cart"><i
                                                class="icon-basket"></i></button>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- product-list End -->
                        </div>
                     </div>
                     <!-- slider-item end -->
                     <div class="slider-item">
                        <div class="product-list mb-30">
                           <div class="card product-card">
                              <div class="card-body p-0">
                                 <div class="media flex-column">
                                    <div class="product-thumbnail position-relative">
                                       <span class="badge badge-danger top-right">New</span>
                                       <a href="single-product.html">
                                       <img class="first-img" src="front/assets/img/product/3.jpg"
                                          alt="thumbnail">
                                       </a>
                                       <!-- product links -->
                                       <ul class="product-links d-flex justify-content-center">
                                          <li>
                                             <a href="wishlist.html">
                                             <span data-toggle="tooltip" data-placement="bottom"
                                                title="add to wishlist" class="icon-heart"> </span>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#" data-toggle="modal" data-target="#compare">
                                             <span data-toggle="tooltip" data-placement="bottom"
                                                title="Add to compare" class="icon-shuffle"></span>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#" data-toggle="modal" data-target="#quick-view">
                                             <span data-toggle="tooltip" data-placement="bottom"
                                                title="Quick view" class="icon-magnifier"></span>
                                             </a>
                                          </li>
                                       </ul>
                                       <!-- product links end-->
                                    </div>
                                    <div class="media-body">
                                       <div class="product-desc">
                                          <h3 class="title"><a href="shop-grid-4-column.html">Juicy
                                             Couture
                                             Tricot Logo Stripe Jacket</a>
                                          </h3>
                                          <div class="star-rating">
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star de-selected"></span>
                                          </div>
                                          <div class="d-flex align-items-center justify-content-between">
                                             <h6 class="product-price"> $21.51</h6>
                                             <button class="pro-btn" data-toggle="modal"
                                                data-target="#add-to-cart"><i
                                                class="icon-basket"></i></button>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- product-list End -->
                        </div>
                        <div class="product-list">
                           <div class="card product-card">
                              <div class="card-body p-0">
                                 <div class="media flex-column">
                                    <div class="product-thumbnail position-relative">
                                       <span class="badge badge-danger top-right">New</span>
                                       <a href="single-product.html">
                                       <img class="first-img" src="front/assets/img/product/8.jpg"
                                          alt="thumbnail">
                                       </a>
                                       <!-- product links -->
                                       <ul class="product-links d-flex justify-content-center">
                                          <li>
                                             <a href="wishlist.html">
                                             <span data-toggle="tooltip" data-placement="bottom"
                                                title="add to wishlist" class="icon-heart"> </span>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#" data-toggle="modal" data-target="#compare">
                                             <span data-toggle="tooltip" data-placement="bottom"
                                                title="Add to compare" class="icon-shuffle"></span>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#" data-toggle="modal" data-target="#quick-view">
                                             <span data-toggle="tooltip" data-placement="bottom"
                                                title="Quick view" class="icon-magnifier"></span>
                                             </a>
                                          </li>
                                       </ul>
                                       <!-- product links end-->
                                    </div>
                                    <div class="media-body">
                                       <div class="product-desc">
                                          <h3 class="title"><a href="shop-grid-4-column.html">orginal
                                             Kaval
                                             Windbreaker Winter Jacket</a>
                                          </h3>
                                          <div class="star-rating">
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star de-selected"></span>
                                          </div>
                                          <div class="d-flex align-items-center justify-content-between">
                                             <h6 class="product-price">$11.90</h6>
                                             <button class="pro-btn" data-toggle="modal"
                                                data-target="#add-to-cart"><i
                                                class="icon-basket"></i></button>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- product-list End -->
                        </div>
                     </div>
                     <!-- slider-item end -->
                     <div class="slider-item">
                        <div class="product-list mb-30">
                           <div class="card product-card">
                              <div class="card-body p-0">
                                 <div class="media flex-column">
                                    <div class="product-thumbnail position-relative">
                                       <span class="badge badge-danger top-right">New</span>
                                       <a href="single-product.html">
                                       <img class="first-img" src="front/assets/img/product/4.jpg"
                                          alt="thumbnail">
                                       <img class="second-img" src="front/assets/img/product/12.jpg"
                                          alt="thumbnail">
                                       </a>
                                       <!-- product links -->
                                       <ul class="product-links d-flex justify-content-center">
                                          <li>
                                             <a href="wishlist.html">
                                             <span data-toggle="tooltip" data-placement="bottom"
                                                title="add to wishlist" class="icon-heart"> </span>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#" data-toggle="modal" data-target="#compare">
                                             <span data-toggle="tooltip" data-placement="bottom"
                                                title="Add to compare" class="icon-shuffle"></span>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#" data-toggle="modal" data-target="#quick-view">
                                             <span data-toggle="tooltip" data-placement="bottom"
                                                title="Quick view" class="icon-magnifier"></span>
                                             </a>
                                          </li>
                                       </ul>
                                       <!-- product links end-->
                                    </div>
                                    <div class="media-body">
                                       <div class="product-desc">
                                          <h3 class="title"><a href="shop-grid-4-column.html">Juicy
                                             Couture
                                             Tricot Logo Stripe Jacket</a>
                                          </h3>
                                          <div class="star-rating">
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star de-selected"></span>
                                          </div>
                                          <div class="d-flex align-items-center justify-content-between">
                                             <h6 class="product-price"><del class="del">$23.90</del>
                                                <span class="onsale">$21.51</span>
                                             </h6>
                                             <button class="pro-btn" data-toggle="modal"
                                                data-target="#add-to-cart"><i
                                                class="icon-basket"></i></button>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- product-list End -->
                        </div>
                        <div class="product-list">
                           <div class="card product-card">
                              <div class="card-body p-0">
                                 <div class="media flex-column">
                                    <div class="product-thumbnail position-relative">
                                       <span class="badge badge-danger top-right">New</span>
                                       <a href="single-product.html">
                                       <img class="first-img" src="front/assets/img/product/9.jpg"
                                          alt="thumbnail">
                                       </a>
                                       <!-- product links -->
                                       <ul class="product-links d-flex justify-content-center">
                                          <li>
                                             <a href="wishlist.html">
                                             <span data-toggle="tooltip" data-placement="bottom"
                                                title="add to wishlist" class="icon-heart"> </span>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#" data-toggle="modal" data-target="#compare">
                                             <span data-toggle="tooltip" data-placement="bottom"
                                                title="Add to compare" class="icon-shuffle"></span>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#" data-toggle="modal" data-target="#quick-view">
                                             <span data-toggle="tooltip" data-placement="bottom"
                                                title="Quick view" class="icon-magnifier"></span>
                                             </a>
                                          </li>
                                       </ul>
                                       <!-- product links end-->
                                    </div>
                                    <div class="media-body">
                                       <div class="product-desc">
                                          <h3 class="title"><a href="shop-grid-4-column.html">orginal
                                             Kaval
                                             Windbreaker Winter Jacket</a>
                                          </h3>
                                          <div class="star-rating">
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star de-selected"></span>
                                          </div>
                                          <div class="d-flex align-items-center justify-content-between">
                                             <h6 class="product-price">$11.90</h6>
                                             <button class="pro-btn" data-toggle="modal"
                                                data-target="#add-to-cart"><i
                                                class="icon-basket"></i></button>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- product-list End -->
                        </div>
                     </div>
                     <!-- slider-item end -->
                     <div class="slider-item">
                        <div class="product-list mb-30">
                           <div class="card product-card">
                              <div class="card-body p-0">
                                 <div class="media flex-column">
                                    <div class="product-thumbnail position-relative">
                                       <span class="badge badge-danger top-right">New</span>
                                       <a href="single-product.html">
                                       <img class="first-img" src="front/assets/img/product/5.jpg"
                                          alt="thumbnail">
                                       <img class="second-img" src="front/assets/img/product/12.jpg"
                                          alt="thumbnail">
                                       </a>
                                       <!-- product links -->
                                       <ul class="product-links d-flex justify-content-center">
                                          <li>
                                             <a href="wishlist.html">
                                             <span data-toggle="tooltip" data-placement="bottom"
                                                title="add to wishlist" class="icon-heart"> </span>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#" data-toggle="modal" data-target="#compare">
                                             <span data-toggle="tooltip" data-placement="bottom"
                                                title="Add to compare" class="icon-shuffle"></span>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#" data-toggle="modal" data-target="#quick-view">
                                             <span data-toggle="tooltip" data-placement="bottom"
                                                title="Quick view" class="icon-magnifier"></span>
                                             </a>
                                          </li>
                                       </ul>
                                       <!-- product links end-->
                                    </div>
                                    <div class="media-body">
                                       <div class="product-desc">
                                          <h3 class="title"><a href="shop-grid-4-column.html">New Luxury
                                             Men's
                                             Slim Fit Shirt Short Sleeve...</a>
                                          </h3>
                                          <div class="star-rating">
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star de-selected"></span>
                                          </div>
                                          <div class="d-flex align-items-center justify-content-between">
                                             <h6 class="product-price">$11.90</h6>
                                             <button class="pro-btn" data-toggle="modal"
                                                data-target="#add-to-cart"><i
                                                class="icon-basket"></i></button>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- product-list End -->
                        </div>
                        <div class="product-list">
                           <div class="card product-card">
                              <div class="card-body p-0">
                                 <div class="media flex-column">
                                    <div class="product-thumbnail position-relative">
                                       <span class="badge badge-danger top-right">New</span>
                                       <a href="single-product.html">
                                       <img class="first-img" src="front/assets/img/product/12.jpg"
                                          alt="thumbnail">
                                       <img class="second-img" src="front/assets/img/product/5.jpg"
                                          alt="thumbnail">
                                       </a>
                                       <!-- product links -->
                                       <ul class="product-links d-flex justify-content-center">
                                          <li>
                                             <a href="wishlist.html">
                                             <span data-toggle="tooltip" data-placement="bottom"
                                                title="add to wishlist" class="icon-heart"> </span>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#" data-toggle="modal" data-target="#compare">
                                             <span data-toggle="tooltip" data-placement="bottom"
                                                title="Add to compare" class="icon-shuffle"></span>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#" data-toggle="modal" data-target="#quick-view">
                                             <span data-toggle="tooltip" data-placement="bottom"
                                                title="Quick view" class="icon-magnifier"></span>
                                             </a>
                                          </li>
                                       </ul>
                                       <!-- product links end-->
                                    </div>
                                    <div class="media-body">
                                       <div class="product-desc">
                                          <h3 class="title"><a href="shop-grid-4-column.html">orginal
                                             Kaval
                                             Windbreaker Winter Jacket</a>
                                          </h3>
                                          <div class="star-rating">
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star de-selected"></span>
                                          </div>
                                          <div class="d-flex align-items-center justify-content-between">
                                             <h6 class="product-price">$11.90</h6>
                                             <button class="pro-btn" data-toggle="modal"
                                                data-target="#add-to-cart"><i
                                                class="icon-basket"></i></button>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- product-list End -->
                        </div>
                     </div>
                     <!-- slider-item end -->
                     <div class="slider-item">
                        <div class="product-list mb-30">
                           <div class="card product-card">
                              <div class="card-body p-0">
                                 <div class="media flex-column">
                                    <div class="product-thumbnail position-relative">
                                       <span class="badge badge-danger top-right">New</span>
                                       <a href="single-product.html">
                                       <img class="first-img" src="front/assets/img/product/10.jpg"
                                          alt="thumbnail">
                                       <img class="second-img" src="front/assets/img/product/8.jpg"
                                          alt="thumbnail">
                                       </a>
                                       <!-- product links -->
                                       <ul class="product-links d-flex justify-content-center">
                                          <li>
                                             <a href="wishlist.html">
                                             <span data-toggle="tooltip" data-placement="bottom"
                                                title="add to wishlist" class="icon-heart"> </span>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#" data-toggle="modal" data-target="#compare">
                                             <span data-toggle="tooltip" data-placement="bottom"
                                                title="Add to compare" class="icon-shuffle"></span>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#" data-toggle="modal" data-target="#quick-view">
                                             <span data-toggle="tooltip" data-placement="bottom"
                                                title="Quick view" class="icon-magnifier"></span>
                                             </a>
                                          </li>
                                       </ul>
                                       <!-- product links end-->
                                    </div>
                                    <div class="media-body">
                                       <div class="product-desc">
                                          <h3 class="title"><a href="shop-grid-4-column.html">New Luxury
                                             Men's
                                             Slim Fit Shirt Short Sleeve...</a>
                                          </h3>
                                          <div class="star-rating">
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star de-selected"></span>
                                          </div>
                                          <div class="d-flex align-items-center justify-content-between">
                                             <h6 class="product-price"><del class="del">$23.90</del>
                                                <span class="onsale">$21.51</span>
                                             </h6>
                                             <button class="pro-btn" data-toggle="modal"
                                                data-target="#add-to-cart"><i
                                                class="icon-basket"></i></button>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- product-list End -->
                        </div>
                        <div class="product-list">
                           <div class="card product-card">
                              <div class="card-body p-0">
                                 <div class="media flex-column">
                                    <div class="product-thumbnail position-relative">
                                       <span class="badge badge-danger top-right">New</span>
                                       <a href="single-product.html">
                                       <img class="first-img" src="front/assets/img/product/11.jpg"
                                          alt="thumbnail">
                                       <img class="second-img" src="front/assets/img/product/5.jpg"
                                          alt="thumbnail">
                                       </a>
                                       <!-- product links -->
                                       <ul class="product-links d-flex justify-content-center">
                                          <li>
                                             <a href="wishlist.html">
                                             <span data-toggle="tooltip" data-placement="bottom"
                                                title="add to wishlist" class="icon-heart"> </span>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#" data-toggle="modal" data-target="#compare">
                                             <span data-toggle="tooltip" data-placement="bottom"
                                                title="Add to compare" class="icon-shuffle"></span>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#" data-toggle="modal" data-target="#quick-view">
                                             <span data-toggle="tooltip" data-placement="bottom"
                                                title="Quick view" class="icon-magnifier"></span>
                                             </a>
                                          </li>
                                       </ul>
                                       <!-- product links end-->
                                    </div>
                                    <div class="media-body">
                                       <div class="product-desc">
                                          <h3 class="title"><a href="shop-grid-4-column.html">orginal
                                             Kaval
                                             Windbreaker Winter Jacket</a>
                                          </h3>
                                          <div class="star-rating">
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star"></span>
                                             <span class="ion-ios-star de-selected"></span>
                                          </div>
                                          <div class="d-flex align-items-center justify-content-between">
                                             <h6 class="product-price">$11.90</h6>
                                             <button class="pro-btn" data-toggle="modal"
                                                data-target="#add-to-cart"><i
                                                class="icon-basket"></i></button>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- product-list End -->
                        </div>
                     </div>
                     <!-- slider-item end -->
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- product tab end -->
<!-- simple section start -->
<section class="section_top">
   <div class="container responsive">
      <div class="row row_responsive">
         <div class="col-md-5">
            <div class="big_heading" style="color: black; font-family: ProximaNova,Arial,Helvetica Neue,sans-serif;">Restaurants in Your Pocket</div>
            <div class="small_heading">
               Order from your favorite restaurants & track on the go,with FoodBuddy.
            </div>
            <div>
               <a href="" style="text-decoration: none; background-color: transparent;">
               <img src="../images/googleplay1.png" style="margin-right: 20px;" width="200">
               </a>
               <a href="" style="text-decoration: none; background-color: transparent;">
               <img src="../images/googleplay2.png" width="200">
               </a>
            </div>
         </div>
         <div class="col-md-7">
            <img src="../images/mobile2.png" id="image_mobile2" width="384" height="489">
            <img src="../images/mobile11.png" id="image_mobile11"  width="384" height="489">
         </div>
      </div>
   </div>
</section>
<section class="section_top_girl">
   <div class="container responsive">
      <div class="row row_responsive">
         <div class="col-md-7">
            <img src="../images/girl_cook3.jpg" width="700px" class="girl_cook3">   
         </div>
         <div class="col-md-5">
            <div class="big_heading_" style="color: white; font-family: ProximaNova,Arial,Helvetica Neue,sans-serif;">Taste Of Delicious Food with Professional Chef</div>
            <div class="small_heading">
               We make the food according to the taste of our beloved Customers!!!
            </div>
            <div>
               <a href="shop-grid-4-column.html"
                  class="text-uppercase btn theme--btn1 btn--lg banner-btn" style=" position:relative; top: -25px; left: 75px;">Order Now</a>
               <img src="../images/girl_cook1.png" class="image_girl1" data-animation-in="zoomIn">
               <div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- simple section end -->
<!-- common banner  start -->
<div class="common-banner bg-white pb-50">
   <!--  <div class="container">
      <div class="row">
          <div class="col-lg-4 col-md-6 mb-30">
              <div class="banner-thumb">
                  <div class="zoom-in d-block overflow-hidden position-relative">
                      <img src="front/assets/img/banner/4.jpg" alt="banner-thumb-naile">
                      <a href="shop-grid-4-column.html"
                          class="text-uppercase btn theme--btn1 btn--lg banner-btn position-absolute">Men’s</a>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-30">
              <div class="banner-thumb">
                  <div class="zoom-in d-block overflow-hidden position-relative">
                      <img src="front/assets/img/banner/5.jpg" alt="banner-thumb-naile">
                      <a href="shop-grid-4-column.html"
                          class="text-uppercase btn theme--btn1 btn--lg banner-btn position-absolute">woMen’s</a>
                  </div>
      
              </div>
          </div>
          <div class="col-lg-4 col-md-12 mb-30">
              <div class="banner-thumb">
                  <div class="zoom-in d-block overflow-hidden position-relative mb-30">
                      <img src="front/assets/img/banner/6.jpg" alt="banner-thumb-naile">
                      <a href="shop-grid-4-column.html"
                          class="text-uppercase btn theme--btn1 btn--lg banner-btn position-absolute">running</a>
                  </div>
                  <div class="zoom-in d-block overflow-hidden position-relative">
                      <img src="front/assets/img/banner/7.jpg" alt="banner-thumb-naile">
                      <a href="shop-grid-4-column.html"
                          class="text-uppercase btn theme--btn1 btn--lg banner-btn position-absolute">accessories</a>
                  </div>
              </div>
          </div>
      </div>
      </div> -->
</div>
<!-- common banner  end -->
<!-- product tab repetation start -->
<section class="bg-white theme1 pb-80">
   <div class="container">
      <div class="row">
         <div class="col-12 col-lg-5 col-xl-4 mb-5 mb-lg-0">
            <div class="card product-card no-shadow theme-border">
               <div class="product-ctry-init slick-nav-sync">
                  <div class="slider-item">
                     <div class="card-body pt-4 px-4 pb-5 position-relative">
                        <div class="hot-deal d-flex align-items-center justify-content-between">
                           <h3 class="title text-dark text-capitalize">hot deals</h3>
                           <span
                              class="badge badge-success position-static cb6">-20%</span>
                        </div>
                        <!-- countdown-sync-init -->
                        <div class="countdown-sync-init">
                           <div class="countdown-item">
                              <div class="product-thumb">
                                 <img src="front/assets/img/slider/thumb/1.jpg" alt="product-thumb">
                                 <ul class="product-links d-flex justify-content-center">
                                    <li>
                                       <a href="wishlist.html">
                                       <span data-toggle="tooltip" data-placement="bottom"
                                          data-original-title="add to wishlist"
                                          class="icon-heart"></span>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#" data-toggle="modal" data-target="#compare">
                                       <span data-toggle="tooltip" data-placement="bottom"
                                          data-original-title="Add to compare" class="icon-shuffle">
                                       </span>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#" data-toggle="modal" data-target="#quick-view">
                                       <span data-toggle="tooltip" data-placement="bottom"
                                          data-original-title="Quick view" class="icon-magnifier">
                                       </span>
                                       </a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                           <!-- single-product end -->
                           <div class="countdown-item">
                              <div class="product-thumb">
                                 <img src="front/assets/img/slider/thumb/2.jpg" alt="product-thumb">
                                 <ul class="product-links d-flex justify-content-center">
                                    <li>
                                       <a href="wishlist.html">
                                       <span data-toggle="tooltip" data-placement="bottom"
                                          data-original-title="add to wishlist"
                                          class="icon-heart"></span>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#" data-toggle="modal" data-target="#compare">
                                       <span data-toggle="tooltip" data-placement="bottom"
                                          data-original-title="Add to compare" class="icon-shuffle">
                                       </span>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#" data-toggle="modal" data-target="#quick-view">
                                       <span data-toggle="tooltip" data-placement="bottom"
                                          data-original-title="Quick view" class="icon-magnifier">
                                       </span>
                                       </a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                           <!-- single-product end -->
                           <div class="countdown-item">
                              <div class="product-thumb">
                                 <img src="front/assets/img/slider/thumb/3.jpg" alt="product-thumb">
                                 <ul class="product-links d-flex justify-content-center">
                                    <li>
                                       <a href="wishlist.html">
                                       <span data-toggle="tooltip" data-placement="bottom"
                                          data-original-title="add to wishlist"
                                          class="icon-heart"></span>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#" data-toggle="modal" data-target="#compare">
                                       <span data-toggle="tooltip" data-placement="bottom"
                                          data-original-title="Add to compare" class="icon-shuffle">
                                       </span>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#" data-toggle="modal" data-target="#quick-view">
                                       <span data-toggle="tooltip" data-placement="bottom"
                                          data-original-title="Quick view" class="icon-magnifier">
                                       </span>
                                       </a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                           <!-- single-product end -->
                           <div class="countdown-item">
                              <div class="product-thumb">
                                 <img src="front/assets/img/slider/thumb/4.jpg" alt="product-thumb">
                                 <ul class="product-links d-flex justify-content-center">
                                    <li>
                                       <a href="wishlist.html">
                                       <span data-toggle="tooltip" data-placement="bottom"
                                          data-original-title="add to wishlist"
                                          class="icon-heart"></span>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#" data-toggle="modal" data-target="#compare">
                                       <span data-toggle="tooltip" data-placement="bottom"
                                          data-original-title="Add to compare" class="icon-shuffle">
                                       </span>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#" data-toggle="modal" data-target="#quick-view">
                                       <span data-toggle="tooltip" data-placement="bottom"
                                          data-original-title="Quick view" class="icon-magnifier">
                                       </span>
                                       </a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                           <!-- single-product end -->
                        </div>
                        <!-- countdown-sync-nav -->
                        <div class="countdown-sync-nav">
                           <div class="countdown-item">
                              <div class="product-thumb">
                                 <a href="javascript:void(0)">
                                 <img src="front/assets/img/slider/thumb/1.1.jpg" alt="product-thumb">
                                 </a>
                              </div>
                           </div>
                           <!-- single-product end -->
                           <div class="countdown-item">
                              <div class="product-thumb">
                                 <a href="javascript:void(0)"> <img src="front/assets/img/slider/thumb/2.1.jpg"
                                    alt="product-thumb"></a>
                              </div>
                           </div>
                           <!-- single-product end -->
                           <div class="countdown-item">
                              <div class="product-thumb">
                                 <a href="javascript:void(0)"> <img src="front/assets/img/slider/thumb/3.1.jpg"
                                    alt="product-thumb"></a>
                              </div>
                           </div>
                           <!-- single-product end -->
                           <div class="countdown-item">
                              <div class="product-thumb">
                                 <a href="javascript:void(0)"><img src="front/assets/img/slider/thumb/4.1.jpg"
                                    alt="product-thumb"></a>
                              </div>
                           </div>
                           <!-- single-product end -->
                        </div>
                        <div class="product-desc text-center p-0">
                           <h3 class="title"><a href="shop-grid-4-column.html">Originals Windbreaker Winter
                              Jacket</a>
                           </h3>
                           <div class="star-rating">
                              <span class="ion-ios-star"></span>
                              <span class="ion-ios-star"></span>
                              <span class="ion-ios-star"></span>
                              <span class="ion-ios-star"></span>
                              <span class="ion-ios-star"></span>
                           </div>
                           <div class="text-center position-relative">
                              <h6 class="product-price"><del class="del">$23.90</del> <span
                                 class="onsale">$21.51</span></h6>
                              <button class="pro-btn pro-btn-right" data-toggle="modal"
                                 data-target="#add-to-cart"><i class="icon-basket"></i></button>
                           </div>
                           <div class="availability mt-15">
                              <p>Availability: <span class="in-stock">300 In Stock</span></p>
                           </div>
                        </div>
                        <div class="clockdiv d-md-flex justify-content-center align-items-center">
                           <div class="title">Hurry Up! Offers ends in:</div>
                           <div class="text-center" data-countdown="2022/01/01"></div>
                        </div>
                     </div>
                  </div>
                  <!-- slider-item End -->
                  <div class="slider-item">
                     <div class="card-body pt-4 px-4 pb-5 position-relative">
                        <div class="hot-deal d-flex align-items-center justify-content-between">
                           <h3 class="title text-dark text-capitalize">hot deals</h3>
                           <span
                              class="badge badge-success position-static cb6">-20%</span>
                        </div>
                        <!-- countdown-sync-init -->
                        <div class="countdown-sync-init">
                           <div class="countdown-item">
                              <div class="product-thumb">
                                 <img src="front/assets/img/slider/thumb/1.jpg" alt="product-thumb">
                                 <ul class="product-links d-flex justify-content-center">
                                    <li>
                                       <a href="wishlist.html">
                                       <span data-toggle="tooltip" data-placement="bottom"
                                          data-original-title="add to wishlist">
                                       <i class="icon-heart"></i>
                                       </span>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#" data-toggle="modal" data-target="#compare">
                                       <span data-toggle="tooltip" data-placement="bottom"
                                          data-original-title="Add to compare">
                                       <i class="icon-shuffle"></i>
                                       </span>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#" data-toggle="modal" data-target="#quick-view">
                                       <span data-toggle="tooltip" data-placement="bottom"
                                          data-original-title="Quick view">
                                       <i class="icon-magnifier"></i>
                                       </span>
                                       </a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                           <!-- single-product end -->
                           <div class="countdown-item">
                              <div class="product-thumb">
                                 <img src="front/assets/img/slider/thumb/2.jpg" alt="product-thumb">
                                 <ul class="product-links d-flex justify-content-center">
                                    <li>
                                       <a href="wishlist.html">
                                       <span data-toggle="tooltip" data-placement="bottom"
                                          data-original-title="add to wishlist">
                                       <i class="icon-heart"></i>
                                       </span>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#" data-toggle="modal" data-target="#compare">
                                       <span data-toggle="tooltip" data-placement="bottom"
                                          data-original-title="Add to compare">
                                       <i class="icon-shuffle"></i>
                                       </span>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#" data-toggle="modal" data-target="#quick-view">
                                       <span data-toggle="tooltip" data-placement="bottom"
                                          data-original-title="Quick view">
                                       <i class="icon-magnifier"></i>
                                       </span>
                                       </a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                           <!-- single-product end -->
                           <div class="countdown-item">
                              <div class="product-thumb">
                                 <img src="front/assets/img/slider/thumb/3.jpg" alt="product-thumb">
                                 <ul class="product-links d-flex justify-content-center">
                                    <li>
                                       <a href="wishlist.html">
                                       <span data-toggle="tooltip" data-placement="bottom"
                                          data-original-title="add to wishlist">
                                       <i class="icon-heart"></i>
                                       </span>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#" data-toggle="modal" data-target="#compare">
                                       <span data-toggle="tooltip" data-placement="bottom"
                                          data-original-title="Add to compare">
                                       <i class="icon-shuffle"></i>
                                       </span>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#" data-toggle="modal" data-target="#quick-view">
                                       <span data-toggle="tooltip" data-placement="bottom"
                                          data-original-title="Quick view">
                                       <i class="icon-magnifier"></i>
                                       </span>
                                       </a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                           <!-- single-product end -->
                           <div class="countdown-item">
                              <div class="product-thumb">
                                 <img src="front/assets/img/slider/thumb/4.jpg" alt="product-thumb">
                                 <ul class="product-links d-flex justify-content-center">
                                    <li>
                                       <a href="wishlist.html">
                                       <span data-toggle="tooltip" data-placement="bottom"
                                          data-original-title="add to wishlist">
                                       <i class="icon-heart"></i>
                                       </span>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#" data-toggle="modal" data-target="#compare">
                                       <span data-toggle="tooltip" data-placement="bottom"
                                          data-original-title="Add to compare">
                                       <i class="icon-shuffle"></i>
                                       </span>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#" data-toggle="modal" data-target="#quick-view">
                                       <span data-toggle="tooltip" data-placement="bottom"
                                          data-original-title="Quick view">
                                       <i class="icon-magnifier"></i>
                                       </span>
                                       </a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                           <!-- single-product end -->
                        </div>
                        <!-- countdown-sync-nav -->
                        <div class="countdown-sync-nav">
                           <div class="countdown-item">
                              <div class="product-thumb">
                                 <a href="javascript:void(0)">
                                 <img src="front/assets/img/slider/thumb/1.1.jpg" alt="product-thumb">
                                 </a>
                              </div>
                           </div>
                           <!-- single-product end -->
                           <div class="countdown-item">
                              <div class="product-thumb">
                                 <a href="javascript:void(0)"> <img src="front/assets/img/slider/thumb/2.1.jpg"
                                    alt="product-thumb"></a>
                              </div>
                           </div>
                           <!-- single-product end -->
                           <div class="countdown-item">
                              <div class="product-thumb">
                                 <a href="javascript:void(0)"> <img src="front/assets/img/slider/thumb/3.1.jpg"
                                    alt="product-thumb"></a>
                              </div>
                           </div>
                           <!-- single-product end -->
                           <div class="countdown-item">
                              <div class="product-thumb">
                                 <a href="javascript:void(0)"><img src="front/assets/img/slider/thumb/4.1.jpg"
                                    alt="product-thumb"></a>
                              </div>
                           </div>
                           <!-- single-product end -->
                        </div>
                        <div class="product-desc text-center p-0">
                           <h3 class="title"><a href="shop-grid-4-column.html">Originals Windbreaker Winter
                              Jacket</a>
                           </h3>
                           <div class="star-rating">
                              <span class="ion-ios-star"></span>
                              <span class="ion-ios-star"></span>
                              <span class="ion-ios-star"></span>
                              <span class="ion-ios-star"></span>
                              <span class="ion-ios-star"></span>
                           </div>
                           <div class="text-center position-relative">
                              <h6 class="product-price"><del class="del">$23.90</del> <span
                                 class="onsale">$21.51</span></h6>
                              <button class="pro-btn pro-btn-right" data-toggle="modal"
                                 data-target="#add-to-cart"><i class="icon-basket"></i></button>
                           </div>
                           <div class="availability mt-15">
                              <p>Availability: <span class="in-stock">300 In Stock</span></p>
                           </div>
                        </div>
                        <div class="clockdiv d-md-flex justify-content-center align-items-center">
                           <div class="title">Hurry Up! Offers ends in:</div>
                           <div class="text-center" data-countdown="2022/01/01"></div>
                        </div>
                     </div>
                  </div>
                  <!-- slider-item End -->
                  <div class="slider-item">
                     <div class="card-body pt-4 px-4 pb-5 position-relative">
                        <div class="hot-deal d-flex align-items-center justify-content-between">
                           <h3 class="title text-dark text-capitalize">hot deals</h3>
                           <span
                              class="badge badge-success position-static cb6">-20%</span>
                        </div>
                        <!-- countdown-sync-init -->
                        <div class="countdown-sync-init">
                           <div class="countdown-item">
                              <div class="product-thumb">
                                 <img src="front/assets/img/slider/thumb/1.jpg" alt="product-thumb">
                                 <ul class="product-links d-flex justify-content-center">
                                    <li>
                                       <a href="wishlist.html">
                                       <span data-toggle="tooltip" data-placement="bottom"
                                          data-original-title="add to wishlist">
                                       <i class="icon-heart"></i>
                                       </span>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#" data-toggle="modal" data-target="#compare">
                                       <span data-toggle="tooltip" data-placement="bottom"
                                          data-original-title="Add to compare">
                                       <i class="icon-shuffle"></i>
                                       </span>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#" data-toggle="modal" data-target="#quick-view">
                                       <span data-toggle="tooltip" data-placement="bottom"
                                          data-original-title="Quick view">
                                       <i class="icon-magnifier"></i>
                                       </span>
                                       </a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                           <!-- single-product end -->
                           <div class="countdown-item">
                              <div class="product-thumb">
                                 <img src="front/assets/img/slider/thumb/2.jpg" alt="product-thumb">
                                 <ul class="product-links d-flex justify-content-center">
                                    <li>
                                       <a href="wishlist.html">
                                       <span data-toggle="tooltip" data-placement="bottom"
                                          data-original-title="add to wishlist">
                                       <i class="icon-heart"></i>
                                       </span>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#" data-toggle="modal" data-target="#compare">
                                       <span data-toggle="tooltip" data-placement="bottom"
                                          data-original-title="Add to compare">
                                       <i class="icon-shuffle"></i>
                                       </span>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#" data-toggle="modal" data-target="#quick-view">
                                       <span data-toggle="tooltip" data-placement="bottom"
                                          data-original-title="Quick view">
                                       <i class="icon-magnifier"></i>
                                       </span>
                                       </a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                           <!-- single-product end -->
                           <div class="countdown-item">
                              <div class="product-thumb">
                                 <img src="front/assets/img/slider/thumb/3.jpg" alt="product-thumb">
                                 <ul class="product-links d-flex justify-content-center">
                                    <li>
                                       <a href="wishlist.html">
                                       <span data-toggle="tooltip" data-placement="bottom"
                                          data-original-title="add to wishlist">
                                       <i class="icon-heart"></i>
                                       </span>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#" data-toggle="modal" data-target="#compare">
                                       <span data-toggle="tooltip" data-placement="bottom"
                                          data-original-title="Add to compare">
                                       <i class="icon-shuffle"></i>
                                       </span>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#" data-toggle="modal" data-target="#quick-view">
                                       <span data-toggle="tooltip" data-placement="bottom"
                                          data-original-title="Quick view">
                                       <i class="icon-magnifier"></i>
                                       </span>
                                       </a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                           <!-- single-product end -->
                           <div class="countdown-item">
                              <div class="product-thumb">
                                 <img src="front/assets/img/slider/thumb/4.jpg" alt="product-thumb">
                                 <ul class="product-links d-flex justify-content-center">
                                    <li>
                                       <a href="wishlist.html">
                                       <span data-toggle="tooltip" data-placement="bottom"
                                          data-original-title="add to wishlist">
                                       <i class="icon-heart"></i>
                                       </span>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#" data-toggle="modal" data-target="#compare">
                                       <span data-toggle="tooltip" data-placement="bottom"
                                          data-original-title="Add to compare">
                                       <i class="icon-shuffle"></i>
                                       </span>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#" data-toggle="modal" data-target="#quick-view">
                                       <span data-toggle="tooltip" data-placement="bottom"
                                          data-original-title="Quick view">
                                       <i class="icon-magnifier"></i>
                                       </span>
                                       </a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                           <!-- single-product end -->
                        </div>
                        <!-- countdown-sync-nav -->
                        <div class="countdown-sync-nav">
                           <div class="countdown-item">
                              <div class="product-thumb">
                                 <a href="javascript:void(0)">
                                 <img src="front/assets/img/slider/thumb/1.1.jpg" alt="product-thumb">
                                 </a>
                              </div>
                           </div>
                           <!-- single-product end -->
                           <div class="countdown-item">
                              <div class="product-thumb">
                                 <a href="javascript:void(0)"> <img src="front/assets/img/slider/thumb/2.1.jpg"
                                    alt="product-thumb"></a>
                              </div>
                           </div>
                           <!-- single-product end -->
                           <div class="countdown-item">
                              <div class="product-thumb">
                                 <a href="javascript:void(0)"> <img src="front/assets/img/slider/thumb/3.1.jpg"
                                    alt="product-thumb"></a>
                              </div>
                           </div>
                           <!-- single-product end -->
                           <div class="countdown-item">
                              <div class="product-thumb">
                                 <a href="javascript:void(0)"><img src="front/assets/img/slider/thumb/4.1.jpg"
                                    alt="product-thumb"></a>
                              </div>
                           </div>
                           <!-- single-product end -->
                        </div>
                        <div class="product-desc text-center p-0">
                           <h3 class="title"><a href="shop-grid-4-column.html">Originals Windbreaker Winter
                              Jacket</a>
                           </h3>
                           <div class="star-rating">
                              <span class="ion-ios-star"></span>
                              <span class="ion-ios-star"></span>
                              <span class="ion-ios-star"></span>
                              <span class="ion-ios-star"></span>
                              <span class="ion-ios-star"></span>
                           </div>
                           <div class="text-center position-relative">
                              <h6 class="product-price"><del class="del">$23.90</del> <span
                                 class="onsale">$21.51</span></h6>
                              <button class="pro-btn pro-btn-right" data-toggle="modal"
                                 data-target="#add-to-cart"><i class="icon-basket"></i></button>
                           </div>
                           <div class="availability mt-15">
                              <p>Availability: <span class="in-stock">300 In Stock</span></p>
                           </div>
                        </div>
                        <div class="clockdiv d-md-flex justify-content-center align-items-center">
                           <div class="title">Hurry Up! Offers ends in:</div>
                           <div class="text-center" data-countdown="2022/01/01"></div>
                        </div>
                     </div>
                  </div>
                  <!-- slider-item End -->
               </div>
            </div>
         </div>
         <div class="col-12 col-lg-7 col-xl-8">
            <!-- section-title start -->
            <div class="section-title text-center mb-30">
               <h2 class="title text-dark text-capitalize">New Arrivals</h2>
               <p class="text mt-10">Add new products to weekly line up</p>
            </div>
            <!-- section-title end -->
            <div class="product-slider2-init theme1 slick-nav">
               <div class="slider-item">
                  <div class="product-list mb-30">
                     <div class="card product-card">
                        <div class="card-body p-0">
                           <div class="media flex-column">
                              <div class="product-thumbnail position-relative">
                                 <span class="badge badge-danger top-right">New</span>
                                 <a href="single-product.html">
                                 <img class="first-img" src="front/assets/img/product/1.jpg" alt="thumbnail">
                                 </a>
                                 <!-- product links -->
                                 <ul class="product-links d-flex justify-content-center">
                                    <li>
                                       <a href="wishlist.html">
                                       <span data-toggle="tooltip" data-placement="bottom"
                                          title="add to wishlist" class="icon-heart"> </span>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#" data-toggle="modal" data-target="#compare">
                                       <span data-toggle="tooltip" data-placement="bottom"
                                          title="Add to compare" class="icon-shuffle"></span>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#" data-toggle="modal" data-target="#quick-view">
                                       <span data-toggle="tooltip" data-placement="bottom"
                                          title="Quick view" class="icon-magnifier"></span>
                                       </a>
                                    </li>
                                 </ul>
                                 <!-- product links end-->
                              </div>
                              <div class="media-body">
                                 <div class="product-desc">
                                    <h3 class="title"><a href="shop-grid-4-column.html">New Luxury
                                       Men's Slim Fit Shirt Short Sleeve...</a>
                                    </h3>
                                    <div class="star-rating">
                                       <span class="ion-ios-star"></span>
                                       <span class="ion-ios-star"></span>
                                       <span class="ion-ios-star"></span>
                                       <span class="ion-ios-star"></span>
                                       <span class="ion-ios-star de-selected"></span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                       <h6 class="product-price">$11.90</h6>
                                       <button class="pro-btn" data-toggle="modal"
                                          data-target="#add-to-cart"><i class="icon-basket"></i></button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- product-list End -->
                  </div>
                  <div class="product-list">
                     <div class="card product-card">
                        <div class="card-body p-0">
                           <div class="media flex-column">
                              <div class="product-thumbnail position-relative">
                                 <span class="badge badge-success top-left">-10%</span>
                                 <span class="badge badge-danger top-right">New</span>
                                 <a href="single-product.html">
                                 <img class="first-img" src="front/assets/img/product/6.jpg" alt="thumbnail">
                                 </a>
                                 <!-- product links -->
                                 <ul class="product-links d-flex justify-content-center">
                                    <li>
                                       <a href="wishlist.html">
                                       <span data-toggle="tooltip" data-placement="bottom"
                                          title="add to wishlist" class="icon-heart"> </span>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#" data-toggle="modal" data-target="#compare">
                                       <span data-toggle="tooltip" data-placement="bottom"
                                          title="Add to compare" class="icon-shuffle"></span>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#" data-toggle="modal" data-target="#quick-view">
                                       <span data-toggle="tooltip" data-placement="bottom"
                                          title="Quick view" class="icon-magnifier"></span>
                                       </a>
                                    </li>
                                 </ul>
                                 <!-- product links end-->
                              </div>
                              <div class="media-body">
                                 <div class="product-desc">
                                    <h3 class="title"><a href="shop-grid-4-column.html">New Balance
                                       Running Arishi trainers in triple</a>
                                    </h3>
                                    <div class="star-rating">
                                       <span class="ion-ios-star"></span>
                                       <span class="ion-ios-star"></span>
                                       <span class="ion-ios-star"></span>
                                       <span class="ion-ios-star"></span>
                                       <span class="ion-ios-star de-selected"></span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                       <h6 class="product-price"><del class="del">$23.90</del>
                                          <span class="onsale">$21.51</span>
                                       </h6>
                                       <button class="pro-btn" data-toggle="modal"
                                          data-target="#add-to-cart"><i class="icon-basket"></i></button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- product-list End -->
                  </div>
               </div>
               <!-- slider-item end -->
               <div class="slider-item">
                  <div class="product-list mb-30">
                     <div class="card product-card">
                        <div class="card-body p-0">
                           <div class="media flex-column">
                              <div class="product-thumbnail position-relative">
                                 <span class="badge badge-danger top-right">New</span>
                                 <a href="single-product.html">
                                 <img class="first-img" src="front/assets/img/product/2.jpg" alt="thumbnail">
                                 </a>
                                 <!-- product links -->
                                 <ul class="product-links d-flex justify-content-center">
                                    <li>
                                       <a href="wishlist.html">
                                       <span data-toggle="tooltip" data-placement="bottom"
                                          title="add to wishlist" class="icon-heart"> </span>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#" data-toggle="modal" data-target="#compare">
                                       <span data-toggle="tooltip" data-placement="bottom"
                                          title="Add to compare" class="icon-shuffle"></span>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#" data-toggle="modal" data-target="#quick-view">
                                       <span data-toggle="tooltip" data-placement="bottom"
                                          title="Quick view" class="icon-magnifier"></span>
                                       </a>
                                    </li>
                                 </ul>
                                 <!-- product links end-->
                              </div>
                              <div class="media-body">
                                 <div class="product-desc">
                                    <h3 class="title"><a href="shop-grid-4-column.html">New Balance
                                       Fresh Foam Kaymin from new zeland</a>
                                    </h3>
                                    <div class="star-rating">
                                       <span class="ion-ios-star"></span>
                                       <span class="ion-ios-star"></span>
                                       <span class="ion-ios-star"></span>
                                       <span class="ion-ios-star"></span>
                                       <span class="ion-ios-star de-selected"></span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                       <h6 class="product-price">$11.90</h6>
                                       <button class="pro-btn" data-toggle="modal"
                                          data-target="#add-to-cart"><i class="icon-basket"></i></button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- product-list End -->
                  </div>
                  <div class="product-list">
                     <div class="card product-card">
                        <div class="card-body p-0">
                           <div class="media flex-column">
                              <div class="product-thumbnail position-relative">
                                 <span class="badge badge-danger top-right">New</span>
                                 <a href="single-product.html">
                                 <img class="first-img" src="front/assets/img/product/7.jpg" alt="thumbnail">
                                 </a>
                                 <!-- product links -->
                                 <ul class="product-links d-flex justify-content-center">
                                    <li>
                                       <a href="wishlist.html">
                                       <span data-toggle="tooltip" data-placement="bottom"
                                          title="add to wishlist" class="icon-heart"> </span>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#" data-toggle="modal" data-target="#compare">
                                       <span data-toggle="tooltip" data-placement="bottom"
                                          title="Add to compare" class="icon-shuffle"></span>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#" data-toggle="modal" data-target="#quick-view">
                                       <span data-toggle="tooltip" data-placement="bottom"
                                          title="Quick view" class="icon-magnifier"></span>
                                       </a>
                                    </li>
                                 </ul>
                                 <!-- product links end-->
                              </div>
                              <div class="media-body">
                                 <div class="product-desc">
                                    <h3 class="title"><a href="shop-grid-4-column.html">New Balance
                                       Running Fuel Cell trainers</a>
                                    </h3>
                                    <div class="star-rating">
                                       <span class="ion-ios-star"></span>
                                       <span class="ion-ios-star"></span>
                                       <span class="ion-ios-star"></span>
                                       <span class="ion-ios-star"></span>
                                       <span class="ion-ios-star de-selected"></span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                       <h6 class="product-price">$11.90</h6>
                                       <button class="pro-btn" data-toggle="modal"
                                          data-target="#add-to-cart"><i class="icon-basket"></i></button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- product-list End -->
                  </div>
               </div>
               <!-- slider-item end -->
               <div class="slider-item">
                  <div class="product-list mb-30">
                     <div class="card product-card">
                        <div class="card-body p-0">
                           <div class="media flex-column">
                              <div class="product-thumbnail position-relative">
                                 <span class="badge badge-danger top-right">New</span>
                                 <a href="single-product.html">
                                 <img class="first-img" src="front/assets/img/product/3.jpg" alt="thumbnail">
                                 </a>
                                 <!-- product links -->
                                 <ul class="product-links d-flex justify-content-center">
                                    <li>
                                       <a href="wishlist.html">
                                       <span data-toggle="tooltip" data-placement="bottom"
                                          title="add to wishlist" class="icon-heart"> </span>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#" data-toggle="modal" data-target="#compare">
                                       <span data-toggle="tooltip" data-placement="bottom"
                                          title="Add to compare" class="icon-shuffle"></span>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#" data-toggle="modal" data-target="#quick-view">
                                       <span data-toggle="tooltip" data-placement="bottom"
                                          title="Quick view" class="icon-magnifier"></span>
                                       </a>
                                    </li>
                                 </ul>
                                 <!-- product links end-->
                              </div>
                              <div class="media-body">
                                 <div class="product-desc">
                                    <h3 class="title"><a href="shop-grid-4-column.html">Juicy
                                       Couture
                                       Tricot Logo Stripe Jacket</a>
                                    </h3>
                                    <div class="star-rating">
                                       <span class="ion-ios-star"></span>
                                       <span class="ion-ios-star"></span>
                                       <span class="ion-ios-star"></span>
                                       <span class="ion-ios-star"></span>
                                       <span class="ion-ios-star de-selected"></span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                       <h6 class="product-price"> $21.51</h6>
                                       <button class="pro-btn" data-toggle="modal"
                                          data-target="#add-to-cart"><i class="icon-basket"></i></button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- product-list End -->
                  </div>
                  <div class="product-list">
                     <div class="card product-card">
                        <div class="card-body p-0">
                           <div class="media flex-column">
                              <div class="product-thumbnail position-relative">
                                 <span class="badge badge-danger top-right">New</span>
                                 <a href="single-product.html">
                                 <img class="first-img" src="front/assets/img/product/8.jpg" alt="thumbnail">
                                 </a>
                                 <!-- product links -->
                                 <ul class="product-links d-flex justify-content-center">
                                    <li>
                                       <a href="wishlist.html">
                                       <span data-toggle="tooltip" data-placement="bottom"
                                          title="add to wishlist" class="icon-heart"> </span>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#" data-toggle="modal" data-target="#compare">
                                       <span data-toggle="tooltip" data-placement="bottom"
                                          title="Add to compare" class="icon-shuffle"></span>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#" data-toggle="modal" data-target="#quick-view">
                                       <span data-toggle="tooltip" data-placement="bottom"
                                          title="Quick view" class="icon-magnifier"></span>
                                       </a>
                                    </li>
                                 </ul>
                                 <!-- product links end-->
                              </div>
                              <div class="media-body">
                                 <div class="product-desc">
                                    <h3 class="title"><a href="shop-grid-4-column.html">orginal
                                       Kaval
                                       Windbreaker Winter Jacket</a>
                                    </h3>
                                    <div class="star-rating">
                                       <span class="ion-ios-star"></span>
                                       <span class="ion-ios-star"></span>
                                       <span class="ion-ios-star"></span>
                                       <span class="ion-ios-star"></span>
                                       <span class="ion-ios-star de-selected"></span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                       <h6 class="product-price">$11.90</h6>
                                       <button class="pro-btn" data-toggle="modal"
                                          data-target="#add-to-cart"><i class="icon-basket"></i></button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- product-list End -->
                  </div>
               </div>
               <!-- slider-item end -->
               <div class="slider-item">
                  <div class="product-list mb-30">
                     <div class="card product-card">
                        <div class="card-body p-0">
                           <div class="media flex-column">
                              <div class="product-thumbnail position-relative">
                                 <span class="badge badge-danger top-right">New</span>
                                 <a href="single-product.html">
                                 <img class="first-img" src="front/assets/img/product/4.jpg" alt="thumbnail">
                                 <img class="second-img" src="front/assets/img/product/12.jpg" alt="thumbnail">
                                 </a>
                                 <!-- product links -->
                                 <ul class="product-links d-flex justify-content-center">
                                    <li>
                                       <a href="wishlist.html">
                                       <span data-toggle="tooltip" data-placement="bottom"
                                          title="add to wishlist" class="icon-heart"> </span>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#" data-toggle="modal" data-target="#compare">
                                       <span data-toggle="tooltip" data-placement="bottom"
                                          title="Add to compare" class="icon-shuffle"></span>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#" data-toggle="modal" data-target="#quick-view">
                                       <span data-toggle="tooltip" data-placement="bottom"
                                          title="Quick view" class="icon-magnifier"></span>
                                       </a>
                                    </li>
                                 </ul>
                                 <!-- product links end-->
                              </div>
                              <div class="media-body">
                                 <div class="product-desc">
                                    <h3 class="title"><a href="shop-grid-4-column.html">Juicy
                                       Couture
                                       Tricot Logo Stripe Jacket</a>
                                    </h3>
                                    <div class="star-rating">
                                       <span class="ion-ios-star"></span>
                                       <span class="ion-ios-star"></span>
                                       <span class="ion-ios-star"></span>
                                       <span class="ion-ios-star"></span>
                                       <span class="ion-ios-star de-selected"></span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                       <h6 class="product-price"><del class="del">$23.90</del>
                                          <span class="onsale">$21.51</span>
                                       </h6>
                                       <button class="pro-btn" data-toggle="modal"
                                          data-target="#add-to-cart"><i class="icon-basket"></i></button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- product-list End -->
                  </div>
                  <div class="product-list">
                     <div class="card product-card">
                        <div class="card-body p-0">
                           <div class="media flex-column">
                              <div class="product-thumbnail position-relative">
                                 <span class="badge badge-danger top-right">New</span>
                                 <a href="single-product.html">
                                 <img class="first-img" src="front/assets/img/product/9.jpg" alt="thumbnail">
                                 </a>
                                 <!-- product links -->
                                 <ul class="product-links d-flex justify-content-center">
                                    <li>
                                       <a href="wishlist.html">
                                       <span data-toggle="tooltip" data-placement="bottom"
                                          title="add to wishlist" class="icon-heart"> </span>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#" data-toggle="modal" data-target="#compare">
                                       <span data-toggle="tooltip" data-placement="bottom"
                                          title="Add to compare" class="icon-shuffle"></span>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#" data-toggle="modal" data-target="#quick-view">
                                       <span data-toggle="tooltip" data-placement="bottom"
                                          title="Quick view" class="icon-magnifier"></span>
                                       </a>
                                    </li>
                                 </ul>
                                 <!-- product links end-->
                              </div>
                              <div class="media-body">
                                 <div class="product-desc">
                                    <h3 class="title"><a href="shop-grid-4-column.html">orginal
                                       Kaval
                                       Windbreaker Winter Jacket</a>
                                    </h3>
                                    <div class="star-rating">
                                       <span class="ion-ios-star"></span>
                                       <span class="ion-ios-star"></span>
                                       <span class="ion-ios-star"></span>
                                       <span class="ion-ios-star"></span>
                                       <span class="ion-ios-star de-selected"></span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                       <h6 class="product-price">$11.90</h6>
                                       <button class="pro-btn" data-toggle="modal"
                                          data-target="#add-to-cart"><i class="icon-basket"></i></button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- product-list End -->
                  </div>
               </div>
               <!-- slider-item end -->
               <div class="slider-item">
                  <div class="product-list mb-30">
                     <div class="card product-card">
                        <div class="card-body p-0">
                           <div class="media flex-column">
                              <div class="product-thumbnail position-relative">
                                 <span class="badge badge-danger top-right">New</span>
                                 <a href="single-product.html">
                                 <img class="first-img" src="front/assets/img/product/5.jpg" alt="thumbnail">
                                 <img class="second-img" src="front/assets/img/product/12.jpg" alt="thumbnail">
                                 </a>
                                 <!-- product links -->
                                 <ul class="product-links d-flex justify-content-center">
                                    <li>
                                       <a href="wishlist.html">
                                       <span data-toggle="tooltip" data-placement="bottom"
                                          title="add to wishlist" class="icon-heart"> </span>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#" data-toggle="modal" data-target="#compare">
                                       <span data-toggle="tooltip" data-placement="bottom"
                                          title="Add to compare" class="icon-shuffle"></span>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#" data-toggle="modal" data-target="#quick-view">
                                       <span data-toggle="tooltip" data-placement="bottom"
                                          title="Quick view" class="icon-magnifier"></span>
                                       </a>
                                    </li>
                                 </ul>
                                 <!-- product links end-->
                              </div>
                              <div class="media-body">
                                 <div class="product-desc">
                                    <h3 class="title"><a href="shop-grid-4-column.html">New Luxury
                                       Men's
                                       Slim Fit Shirt Short Sleeve...</a>
                                    </h3>
                                    <div class="star-rating">
                                       <span class="ion-ios-star"></span>
                                       <span class="ion-ios-star"></span>
                                       <span class="ion-ios-star"></span>
                                       <span class="ion-ios-star"></span>
                                       <span class="ion-ios-star de-selected"></span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                       <h6 class="product-price">$11.90</h6>
                                       <button class="pro-btn" data-toggle="modal"
                                          data-target="#add-to-cart"><i class="icon-basket"></i></button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- product-list End -->
                  </div>
                  <div class="product-list">
                     <div class="card product-card">
                        <div class="card-body p-0">
                           <div class="media flex-column">
                              <div class="product-thumbnail position-relative">
                                 <span class="badge badge-danger top-right">New</span>
                                 <a href="single-product.html">
                                 <img class="first-img" src="front/assets/img/product/12.jpg" alt="thumbnail">
                                 <img class="second-img" src="front/assets/img/product/5.jpg" alt="thumbnail">
                                 </a>
                                 <!-- product links -->
                                 <ul class="product-links d-flex justify-content-center">
                                    <li>
                                       <a href="wishlist.html">
                                       <span data-toggle="tooltip" data-placement="bottom"
                                          title="add to wishlist" class="icon-heart"> </span>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#" data-toggle="modal" data-target="#compare">
                                       <span data-toggle="tooltip" data-placement="bottom"
                                          title="Add to compare" class="icon-shuffle"></span>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#" data-toggle="modal" data-target="#quick-view">
                                       <span data-toggle="tooltip" data-placement="bottom"
                                          title="Quick view" class="icon-magnifier"></span>
                                       </a>
                                    </li>
                                 </ul>
                                 <!-- product links end-->
                              </div>
                              <div class="media-body">
                                 <div class="product-desc">
                                    <h3 class="title"><a href="shop-grid-4-column.html">orginal
                                       Kaval
                                       Windbreaker Winter Jacket</a>
                                    </h3>
                                    <div class="star-rating">
                                       <span class="ion-ios-star"></span>
                                       <span class="ion-ios-star"></span>
                                       <span class="ion-ios-star"></span>
                                       <span class="ion-ios-star"></span>
                                       <span class="ion-ios-star de-selected"></span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                       <h6 class="product-price">$11.90</h6>
                                       <button class="pro-btn" data-toggle="modal"
                                          data-target="#add-to-cart"><i class="icon-basket"></i></button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- product-list End -->
                  </div>
               </div>
               <!-- slider-item end -->
               <div class="slider-item">
                  <div class="product-list mb-30">
                     <div class="card product-card">
                        <div class="card-body p-0">
                           <div class="media flex-column">
                              <div class="product-thumbnail position-relative">
                                 <span class="badge badge-danger top-right">New</span>
                                 <a href="single-product.html">
                                 <img class="first-img" src="front/assets/img/product/10.jpg" alt="thumbnail">
                                 <img class="second-img" src="front/assets/img/product/8.jpg" alt="thumbnail">
                                 </a>
                                 <!-- product links -->
                                 <ul class="product-links d-flex justify-content-center">
                                    <li>
                                       <a href="wishlist.html">
                                       <span data-toggle="tooltip" data-placement="bottom"
                                          title="add to wishlist" class="icon-heart"> </span>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#" data-toggle="modal" data-target="#compare">
                                       <span data-toggle="tooltip" data-placement="bottom"
                                          title="Add to compare" class="icon-shuffle"></span>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#" data-toggle="modal" data-target="#quick-view">
                                       <span data-toggle="tooltip" data-placement="bottom"
                                          title="Quick view" class="icon-magnifier"></span>
                                       </a>
                                    </li>
                                 </ul>
                                 <!-- product links end-->
                              </div>
                              <div class="media-body">
                                 <div class="product-desc">
                                    <h3 class="title"><a href="shop-grid-4-column.html">New Luxury
                                       Men's
                                       Slim Fit Shirt Short Sleeve...</a>
                                    </h3>
                                    <div class="star-rating">
                                       <span class="ion-ios-star"></span>
                                       <span class="ion-ios-star"></span>
                                       <span class="ion-ios-star"></span>
                                       <span class="ion-ios-star"></span>
                                       <span class="ion-ios-star de-selected"></span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                       <h6 class="product-price"><del class="del">$23.90</del>
                                          <span class="onsale">$21.51</span>
                                       </h6>
                                       <button class="pro-btn" data-toggle="modal"
                                          data-target="#add-to-cart"><i class="icon-basket"></i></button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- product-list End -->
                  </div>
                  <div class="product-list">
                     <div class="card product-card">
                        <div class="card-body p-0">
                           <div class="media flex-column">
                              <div class="product-thumbnail position-relative">
                                 <span class="badge badge-danger top-right">New</span>
                                 <a href="single-product.html">
                                 <img class="first-img" src="front/assets/img/product/11.jpg" alt="thumbnail">
                                 <img class="second-img" src="front/assets/img/product/5.jpg" alt="thumbnail">
                                 </a>
                                 <!-- product links -->
                                 <ul class="product-links d-flex justify-content-center">
                                    <li>
                                       <a href="wishlist.html">
                                       <span data-toggle="tooltip" data-placement="bottom"
                                          title="add to wishlist" class="icon-heart"> </span>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#" data-toggle="modal" data-target="#compare">
                                       <span data-toggle="tooltip" data-placement="bottom"
                                          title="Add to compare" class="icon-shuffle"></span>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#" data-toggle="modal" data-target="#quick-view">
                                       <span data-toggle="tooltip" data-placement="bottom"
                                          title="Quick view" class="icon-magnifier"></span>
                                       </a>
                                    </li>
                                 </ul>
                                 <!-- product links end-->
                              </div>
                              <div class="media-body">
                                 <div class="product-desc">
                                    <h3 class="title"><a href="shop-grid-4-column.html">orginal
                                       Kaval
                                       Windbreaker Winter Jacket</a>
                                    </h3>
                                    <div class="star-rating">
                                       <span class="ion-ios-star"></span>
                                       <span class="ion-ios-star"></span>
                                       <span class="ion-ios-star"></span>
                                       <span class="ion-ios-star"></span>
                                       <span class="ion-ios-star de-selected"></span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                       <h6 class="product-price">$11.90</h6>
                                       <button class="pro-btn" data-toggle="modal"
                                          data-target="#add-to-cart"><i class="icon-basket"></i></button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- product-list End -->
                  </div>
               </div>
               <!-- slider-item end -->
            </div>
         </div>
      </div>
   </div>
</section>
<!-- product tab repetation end -->
<!-- staic media start -->
<!-- <section class="static-media-section pb-80 bg-white">
   <div class="container">
       <div class="static-media-wrap theme-bg rounded-5">
           <div class="row">
               <div class="col-lg-3 col-sm-6 py-3">
                   <div class="d-flex static-media2 flex-column flex-sm-row">
                       <img class="align-self-center mb-2 mb-sm-0 mr-auto  mr-sm-3" src="front/assets/img/icon/2.png"
                           alt="icon">
                       <div class="media-body">
                           <h4 class="title text-capitalize text-white">Free Shipping</h4>
                           <p class="text text-white">On all orders over $75.00</p>
                       </div>
                   </div>
               </div>
               <div class="col-lg-3 col-sm-6 py-3">
                   <div class="d-flex static-media2 flex-column flex-sm-row">
                       <img class="align-self-center mb-2 mb-sm-0 mr-auto  mr-sm-3" src="front/assets/img/icon/3.png"
                           alt="icon">
                       <div class="media-body">
                           <h4 class="title text-capitalize text-white">Free Returns</h4>
                           <p class="text text-white">Returns are free within 9 days</p>
                       </div>
                   </div>
               </div>
               <div class="col-lg-3 col-sm-6 py-3">
                   <div class="d-flex static-media2 flex-column flex-sm-row">
                       <img class="align-self-center mb-2 mb-sm-0 mr-auto  mr-sm-3" src="front/assets/img/icon/4.png"
                           alt="icon">
                       <div class="media-body">
                           <h4 class="title text-capitalize text-white">100% Payment Secure</h4>
                           <p class="text text-white">Your payment are safe with us.</p>
                       </div>
                   </div>
               </div>
               <div class="col-lg-3 col-sm-6 py-3">
                   <div class="d-flex static-media2 flex-column flex-sm-row">
                       <img class="align-self-center mb-2 mb-sm-0 mr-auto  mr-sm-3" src="front/assets/img/icon/5.png"
                           alt="icon">
                       <div class="media-body">
                           <h4 class="title text-capitalize text-white">Support 24/7</h4>
                           <p class="text text-white">Contact us 24 hours a day</p>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
   </section> -->
<!-- staic media end -->
<!-- blog-section start -->
<!-- <section class="blog-section theme1 pb-65"> -->
<!-- <div class="container">
   <div class="row">
       <div class="col-12">
           <div class="section-title text-center mb-30">
               <h2 class="title text-dark text-capitalize">Latest Blogs</h2>
               <p class="text mt-10">Present posts in a best way to highlight interesting moments of your blog.
               </p>
           </div>
       </div>
   </div>
   <div class="row">
       <div class="col-12">
           <div class="blog-init slick-nav">
               <div class="slider-item">
                   <div class="single-blog">
                       <a class="blog-thumb mb-20 zoom-in d-block overflow-hidden"
                           href="blog-grid-left-sidebar.html">
                           <img src="front/assets/img/blog-post/1.jpg" alt="blog-thumb-naile">
                       </a>
                       <div class="blog-post-content">
                           <a class="blog-link theme-color d-inline-block mb-10 text-uppercase"
                               href="https://themeforest.net/user/hastech">Fashion</a>
                           <h3 class="title text-capitalize mb-15"><a href="single-blog.html">This is first
                                   Post For XipBlog</a></h3>
                           <h5 class="sub-title"> Posted by <a class="blog-link theme-color d-inline-block mx-1"
                                   href="https://themeforest.net/user/hastech">HasTech</a>31TH Aug 2020</h5>
   
                       </div>
                   </div>
               </div> -->
<!-- slider-item end -->
<!--   <div class="slider-item">
   <div class="single-blog">
       <a class="blog-thumb mb-20 zoom-in d-block overflow-hidden"
           href="blog-grid-left-sidebar.html">
           <img src="front/assets/img/blog-post/2.jpg" alt="blog-thumb-naile">
       </a>
       <div class="blog-post-content">
           <a class="blog-link theme-color d-inline-block mb-10 text-uppercase"
               href="https://themeforest.net/user/hastech">Fashion</a>
           <h3 class="title text-capitalize mb-15"><a href="single-blog.html">This is Secound
                   Post For XipBlog</a></h3>
           <h5 class="sub-title"> Posted by <a class="blog-link theme-color d-inline-block mx-1"
                   href="https://themeforest.net/user/hastech">HasTech</a>31TH Aug 2020</h5>
   
       </div>
   </div>
   </div> -->
<!-- slider-item end -->
<!--  <div class="slider-item">
   <div class="single-blog">
       <a class="blog-thumb mb-20 zoom-in d-block overflow-hidden"
           href="blog-grid-left-sidebar.html">
           <img src="front/assets/img/blog-post/3.jpg" alt="blog-thumb-naile">
       </a>
       <div class="blog-post-content">
           <a class="blog-link theme-color d-inline-block mb-10 text-uppercase"
               href="https://themeforest.net/user/hastech">Fashion</a>
           <h3 class="title text-capitalize mb-15"><a href="single-blog.html">This is third
                   Post For XipBlog</a></h3>
           <h5 class="sub-title"> Posted by <a class="blog-link theme-color d-inline-block mx-1"
                   href="https://themeforest.net/user/hastech">HasTech</a>31TH Aug 2020</h5>
   
       </div>
   </div>
   </div> -->
<!-- slider-item end -->
<!--  <div class="slider-item">
   <div class="single-blog">
       <a class="blog-thumb mb-20 zoom-in d-block overflow-hidden"
           href="blog-grid-left-sidebar.html">
           <img src="front/assets/img/blog-post/4.jpg" alt="blog-thumb-naile">
       </a>
       <div class="blog-post-content">
           <a class="blog-link theme-color d-inline-block mb-10 text-uppercase"
               href="https://themeforest.net/user/hastech">Fashion</a>
           <h3 class="title text-capitalize mb-15"><a href="single-blog.html">This is fourth
                   Post For XipBlog</a></h3>
           <h5 class="sub-title"> Posted by <a class="blog-link theme-color d-inline-block mx-1"
                   href="https://themeforest.net/user/hastech">HasTech</a>31TH Aug 2020</h5>
   
       </div>
   </div>
   </div> -->
<!-- slider-item end -->
<!--  <div class="slider-item">
   <div class="single-blog">
       <a class="blog-thumb mb-20 zoom-in d-block overflow-hidden"
           href="blog-grid-left-sidebar.html">
           <img src="front/assets/img/blog-post/1.jpg" alt="blog-thumb-naile">
       </a>
       <div class="blog-post-content">
           <a class="blog-link theme-color d-inline-block mb-10 text-uppercase"
               href="https://themeforest.net/user/hastech">Fashion</a>
           <h3 class="title text-capitalize mb-15"><a href="single-blog.html">This is fiveth
                   Post For XipBlog</a></h3>
           <h5 class="sub-title"> Posted by <a class="blog-link theme-color d-inline-block mx-1"
                   href="https://themeforest.net/user/hastech">HasTech</a>31TH Aug 2020</h5>
   
       </div>
   </div>
   </div> -->
<!-- slider-item end -->
<!--  </div>
   </div>
   </div>
   </div>
   </section> -->
<!-- blog-section end -->
<!-- brand slider start -->
<!-- <div class="brand-slider-section theme1 bg-white"> -->
<!--     <div class="container">
   <div class="row">
       <div class="col-12">
           <div class="brand-init border-top py-35 slick-nav-brand">
               <div class="slider-item">
                   <div class="single-brand">
                       <a href="https://themeforest.net/user/hastech" class="brand-thumb">
                           <img src="front/assets/img/brand/1.jpg" alt="brand-thumb-nail">
                       </a>
                   </div>
               </div> -->
<!-- slider-item end -->
<!--   <div class="slider-item">
   <div class="single-brand">
       <a href="https://themeforest.net/user/hastech" class="brand-thumb">
           <img src="front/assets/img/brand/2.jpg" alt="brand-thumb-nail">
       </a>
   </div>
   </div> -->
<!-- slider-item end -->
<!--  <div class="slider-item">
   <div class="single-brand">
       <a href="https://themeforest.net/user/hastech" class="brand-thumb">
           <img src="front/assets/img/brand/3.jpg" alt="brand-thumb-nail">
       </a>
   </div>
   </div> -->
<!-- slider-item end -->
<!-- <div class="slider-item">
   <div class="single-brand">
       <a href="https://themeforest.net/user/hastech" class="brand-thumb">
           <img src="front/assets/img/brand/4.jpg" alt="brand-thumb-nail">
       </a>
   </div>
   </div>
   -->                    <!-- slider-item end -->
<!--  <div class="slider-item">
   <div class="single-brand">
       <a href="https://themeforest.net/user/hastech" class="brand-thumb">
           <img src="front/assets/img/brand/5.jpg" alt="brand-thumb-nail">
       </a>
   </div>
   </div> -->
<!-- slider-item end -->
<!--  <div class="slider-item">
   <div class="single-brand">
       <a href="https://themeforest.net/user/hastech" class="brand-thumb">
           <img src="front/assets/img/brand/2.jpg" alt="brand-thumb-nail">
       </a>
   </div>
   </div> -->
<!-- slider-item end -->
<!--   <div class="slider-item">
   <div class="single-brand">
       <a href="https://themeforest.net/user/hastech" class="brand-thumb">
           <img src="front/assets/img/brand/3.jpg" alt="brand-thumb-nail">
       </a>
   </div>
   </div> -->
<!-- slider-item end -->
<!-- </div>
   </div>
   </div>
   </div>
   </div> -->
<!-- brand slider end -->
<!-- Whatsapp icon starts -->
<div>
   <a href="https://wa.me/919340821225" class="whatsapp-icon" target="_blank">
   <img src="../images/whatsapp.png" width="50px">
   </a>
</div>
@endsection