<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <meta http-equiv="X-UA-Compatible" content="ie=edge" />
      <meta name="description" content="" />
      <title>@yield('title')</title>
      <!-- Favicon -->
      <link rel="shortcut icon" type="image/x-icon" href="{{asset('../images/favicon.png')}}" />
      <!--********************************** 
         all css files 
         *************************************-->
      <!--*************************************************** 
         fontawesome,bootstrap,plugins and main style css
         ***************************************************-->
      <link rel="stylesheet" href="{{asset('front/assets/css/fontawesome.min.css')}}" />
      <link rel="stylesheet" href="{{asset('front/assets/css/ionicons.min.css')}}" />
      <link rel="stylesheet" href="{{asset('front/assets/css/simple-line-icons.css')}}" />
      <link rel="stylesheet" href="{{asset('front/assets/css/plugins/jquery-ui.min.css')}}">
      <link rel="stylesheet" href="{{asset('front/assets/css/bootstrap.min.css')}}" />
      <link rel="stylesheet" href="{{asset('front/assets/css/plugins/plugins.css')}}" />
      <link rel="stylesheet" href="{{asset('front/assets/css/style.min.css')}}" />
      <link rel="stylesheet" href="{{asset('../css/style.css')}}" />
       <!-- Toaster Notification -->
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

      <!-- prevent back button after logout -->
      
      <!-- prevent back button after logout -->
      
      <!-- Use the minified version files listed below for better performance and remove the files listed above -->
      <!--**************************** 
         Minified  css 
         ****************************-->
      <!--*********************************************** 
         vendor min css,plugins min css,style min css
         ***********************************************-->
      <!-- <link rel="stylesheet" href="assets/css/vendor/vendor.min.css" />
         <link rel="stylesheet" href="assets/css/plugins/plugins.min.css" />
         <link rel="stylesheet" href="assets/css/style.min.css" /> -->
         <style type="text/css">
           .toast-success{background-color:#000!important;position: relative!important; top: 60px;}
           .search_bar_position{
                position: relative;
                left: 105px;
           }
           .background_color{
            background: linear-gradient(to right, #dfeae7, #F0F2F0);
           }
           footer:after {
              position: absolute;
              left: 0;
              bottom: 0;
              width: calc(35% + 33px);
              height: 100%;
              content: "";
              /*background: url(../images/footer.png);*/
              background: linear-gradient(#dfeae7, #F0F2F0);
              z-index: 1;
              }

              /*.footer-menu li a {
                font-size: 14px;
                line-height: 24px;
                text-transform: capitalize;
                color: #fff;
              }*/
              /*.theme2 .footer-menu li a:hover{
                color: black;
              }*/
              .login_btn{
                color: #3e64ff!important;
                padding-top: 10px!important;
                padding-bottom: 10px!important;
                padding-right: 25px!important;
                padding-left: 25px!important;
                border-radius: 30px!important;
                font-size: 15px!important;
               border: none!important;
                box-shadow: 2px 2px 5px #babecc, -5px -5px 10px hsl(0deg 0% 100% / 45%);
                outline: none!important;
              }
              .login_btn:focus{
                
                box-shadow: inset 2px 2px 5px #babecc, -5px -5px 10px hsl(0deg 0% 100% / 45%);
                outline: none!important;
                
              }
           @media  screen and (max-width: 576px) {
              .toast-success{background-color:#000!important;position: relative!important; top: 80px; left: -50px;}
               .search_bar_position{
                position: relative;
                left: 0px;
           }
           }
           .theme-default {
    background: #f33535;
    width: 40px;
    height: 40px;
    bottom: 30px;
    right: 90px;
    border-radius: 100%;
    color: #fff;
    text-align: center;
    font-size: 22px;
    line-height: 40px;
    font-weight: 700;
}
         </style>
   </head>
   <body>
      <!-- offcanvas-overlay start -->
      <div class="offcanvas-overlay"></div>
      <!-- offcanvas-overlay end -->
      <!-- offcanvas-mobile-menu start -->
      <div id="offcanvas-mobile-menu" class="offcanvas theme1 offcanvas-mobile-menu">
         <div class="inner">
            <div class="border-bottom mb-4 pb-4 text-right">
               <button class="offcanvas-close">??</button>
            </div>
            <!-- <div class="offcanvas-head mb-4">
               <nav class="offcanvas-top-nav">
                   <ul class="d-flex justify-content-center align-items-center">
                       <li class="mx-4"><a href="compare.html"><i class="ion-ios-loop-strong"></i> Compare <span>(0)</span>
                           </a></li>
                       <li class="mx-4">
                           <a href="wishlist.html"> <i class="ion-android-favorite-outline"></i> Wishlist
                               <span>(0)</span></a>
                       </li>
                   </ul>
               </nav>
               </div> -->
            <nav class="offcanvas-menu">
               <ul>
                  <li><a href="/"><span class="menu-text">Home</span></a></li>
                  <li>
                     <a href="#"><span class="menu-text">Food Menu</span></a>
                     <ul class="offcanvas-submenu">
                        <li><a href="about-us.html"> Veg Food <span class="fas fa-apple-alt"></span></a></li>
                        <li><a href="cart.html">Non-Veg Food <span class="fas fa-drumstick-bite"></span> </a></li>
                        <li><a href="checkout.html">Chinese &amp; Fast Food <span class="fas fa-hamburger"></span></a></li>
                        <li><a href="compare.html">Punjabi Food <span class="fas fa-cookie"></span></a></li>
                     </ul>
                  </li>
                  <li>
                  <a href="/login_page">About</a>
                  </li>
                  <li>
                  <a href="/contact-us">Contact Us</a> 
                 </li>
               </ul>
            </nav>
            <div class="offcanvas-social py-30">
               <ul>
                  <li>
                     <a href="#"><i class="icon-social-facebook"></i></a>
                  </li>
                  <li>
                     <a href="#"><i class="icon-social-twitter"></i></a>
                  </li>
                  <li>
                     <a href="#"><i class="icon-social-instagram"></i></a>
                  </li>
                  <li>
                     <a href="#"><i class="icon-social-google"></i></a>
                  </li>
                  <li>
                     <a href="#"><i class="icon-social-instagram"></i></a>
                  </li>
               </ul>
            </div>
         </div>
      </div>
      <!-- offcanvas-mobile-menu end -->
      <!-- OffCanvas Wishlist Start -->
      <div id="offcanvas-wishlist" class="offcanvas offcanvas-wishlist theme1">
         <div class="inner">
            <div class="head d-flex flex-wrap justify-content-between">
               <span class="title">Wishlist</span>
               <button class="offcanvas-close">??</button>
            </div>
            <ul class="minicart-product-list">
               <li>
                  <a href="single-product.html" class="image"><img src="front/assets/img/product/4.jpg"
                     alt="Cart product Image"></a>
                  <div class="content">
                     <a href="single-product.html" class="title">Walnut Cutting Board</a>
                     <span class="quantity-price">1 x <span class="amount">$100.00</span></span>
                     <a href="#" class="remove">??</a>
                  </div>
               </li>
               <li>
                  <a href="single-product.html" class="image"><img src="front/assets/img/product/5.jpg"
                     alt="Cart product Image"></a>
                  <div class="content">
                     <a href="single-product.html" class="title">Lucky Wooden Elephant</a>
                     <span class="quantity-price">1 x <span class="amount">$35.00</span></span>
                     <a href="#" class="remove">??</a>
                  </div>
               </li>
               <li>
                  <a href="single-product.html" class="image"><img src="front/assets/img/product/6.jpg"
                     alt="Cart product Image"></a>
                  <div class="content">
                     <a href="single-product.html" class="title">Fish Cut Out Set</a>
                     <span class="quantity-price">1 x <span class="amount">$9.00</span></span>
                     <a href="#" class="remove">??</a>
                  </div>
               </li>
            </ul>
            <a href="wishlist.html" class="btn theme--btn-default btn--lg d-block d-sm-inline-block rounded-5 mt-30">view
            wishlist</a>
         </div>
      </div>
      <!-- OffCanvas Wishlist End -->
      <!-- OffCanvas Cart Start -->
      <div id="offcanvas-cart" class="offcanvas offcanvas-cart theme1">
         <div class="inner">
            <div class="head d-flex flex-wrap justify-content-between">
               <span class="title">Cart</span>
               <button class="offcanvas-close">??</button>
            </div>
            <ul class="minicart-product-list">
               <li>
                  <a href="single-product.html" class="image"><img src="front/assets/img/product/1.jpg"
                     alt="Cart product Image"></a>
                  <div class="content">
                     <a href="single-product.html" class="title">Walnut Cutting Board</a>
                     <span class="quantity-price">1 x <span class="amount">$100.00</span></span>
                     <a href="#" class="remove">??</a>
                  </div>
               </li>
               <li>
                  <a href="single-product.html" class="image"><img src="front/assets/img/product/2.jpg"
                     alt="Cart product Image"></a>
                  <div class="content">
                     <a href="single-product.html" class="title">Lucky Wooden Elephant</a>
                     <span class="quantity-price">1 x <span class="amount">$35.00</span></span>
                     <a href="#" class="remove">??</a>
                  </div>
               </li>
               <li>
                  <a href="single-product.html" class="image"><img src="front/assets/img/product/3.jpg"
                     alt="Cart product Image"></a>
                  <div class="content">
                     <a href="single-product.html" class="title">Fish Cut Out Set</a>
                     <span class="quantity-price">1 x <span class="amount">$9.00</span></span>
                     <a href="#" class="remove">??</a>
                  </div>
               </li>
            </ul>
            <div class="sub-total d-flex flex-wrap justify-content-between">
               <strong>Subtotal :</strong>
               <span class="amount">$144.00</span>
            </div>
            <a href="{{url('/cart')}}" class="btn  ml-5 theme--btn-default btn--lg d-block d-sm-inline-block rounded-5 mr-sm-2">view
            cart</a>
            <a href="{{url('/checkout')}}"
               class="btn theme-btn--dark1 btn--lg d-block d-sm-inline-block mt-4 mt-sm-0 rounded-5">checkout</a>
         </div>
      </div>
      <!-- OffCanvas Cart End -->
      <!-- header start -->
      <header>
         <!-- header top start -->
         <!-- <div class="header-top theme1 bg-dark py-15">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-7 order-last order-md-first">
                        <div class="static-info text-center text-md-left">
                            <p class="text-white">Join our showroom and get <span class="theme-color">50 % off</span>
                                Coupon code : <span class="theme-color">Junno50</span></p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5">
                        <nav class="navbar-top pb-2 pb-md-0 position-relative">
                            <ul class="d-flex justify-content-center justify-content-md-end align-items-center">
                                <li>
                                    <a href="#" id="dropdown1" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">Setting <i class="ion ion-ios-arrow-down"></i></a>
                                    <ul class="topnav-submenu dropdown-menu" aria-labelledby="dropdown1">
                                        <li><a href="myaccount.html">My account</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="login.html">Sign out</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" id="dropdown2" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">USD $ <i class="ion ion-ios-arrow-down"></i> </a>
                                    <ul class="topnav-submenu dropdown-menu" aria-labelledby="dropdown2">
                                        <li class="active"><a href="#">EUR ???</a></li>
                                        <li><a href="#">USD $</a></li>
                                    </ul>
                                </li>
                                <li class="english">
                                    <a href="#" id="dropdown3" class="pr-0" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <img src="front/assets/img/logo/us-flag.jpg" alt="us flag"> English
                                        <i class="ion ion-ios-arrow-down"></i>
                                    </a>
                                    <ul class="topnav-submenu dropdown-menu" aria-labelledby="dropdown3">
                                        <li class="active">
                                            <a href="#"><img src="front/assets/img/logo/us-flag.jpg" alt="us flag">
                                                English</a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="front/assets/img/logo/france.jpg" alt="france flag">
                                                Fran??ais</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            </div> -->
         <!-- header top end -->
         <!-- header-middle satrt -->
         <div class="header-middle pt-20 background_color" >
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-sm-6 col-lg-2 order-first">
                     <div class="logo text-center text-sm-left mb-30 mb-sm-0">
                        <a href="/"><img src="{{url('../images/main_logo2-1.png')}}" alt="logo"></a>
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-5 order-last order-md-first">
                     <div class="search-form pt-30 pt-lg-0 search_bar_position" >
                        <form class="form-inline position-relative">
                           <input class="form-control theme1-border" type="search"
                              placeholder="Enter your search key ...">
                           <button class="btn search-btn theme-bg btn-rounded" type="submit"><i
                              class="icon-magnifier"></i></button>
                        </form>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-5">
                     <nav class="navbar-top pb-2 pb-md-0 position-relative">
                        <ul class="d-flex justify-content-center justify-content-md-end align-items-center">
                           <li>
                               <ul class="d-flex justify-content-center justify-content-md-end align-items-center">
                        @guest
                            <li>
                                <a href="{{url('/login_page')}}" class="btn login_btn">Login</a>
                            </li>
                            @if (Route::has('register'))
                           <!--  <li class="nav-item">
                                <a class="nav-link" href="{{ ('signup') }}">{{ __('Register') }}</a> 
                            </li> -->
                        @endif
                        @else
                            <li>                                                          
                                <a href="{{'#'}}" id="dropdown1" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false" style="color: black!important; font-weight: bolder!important;">  {{ Auth::user()->name }} <i class="ion ion-ios-arrow-down"></i></a>
                                <ul class="topnav-submenu dropdown-menu" aria-labelledby="dropdown1">
                                    <li><a href="{{url('/User-account')}}">My account</a></li>
                                    <li><a href="{{url('/checkout')}}">Checkout</a></li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                          </a>
                                         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                          </form>
                                    </li>
                                </ul>
                            </li>
                            @endguest                    
                        </ul> 
                           </li>
                           <li class="mr-0 cart-block position-relative">
                              <a  class="offcanvas-toggle" href="#offcanvas-cart">
                                 <span class="position-relative">&nbsp;&nbsp;
                                 <i class="icon-bag" style="font-weight: bolder; color: black!important;"></i>
                                 </span>
                                 <span class="cart-total position-relative">
                                    <!-- $90.00 -->
                                 </span>
                              </a>
                           </li>
                           <li>
                              <a class="offcanvas-toggle" href="#offcanvas-wishlist">
                              <span class="position-relative">
                              <i class="icon-heart" style="font-weight: bolder; color: black!important;"></i>
                              <span class="badge cbdg1" style="color: black;">3</span>
                              </span>
                              </a>
                           </li>
                           <div class="mobile-menu-toggle theme1 d-lg-none">
                              <a href="#offcanvas-mobile-menu" class="offcanvas-toggle">
                                 <svg viewbox="0 0 800 600">
                                    <path
                                       d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200"
                                       id="top"></path>
                                    <path d="M300,320 L540,320" id="middle"></path>
                                    <path
                                       d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190"
                                       id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318)">
                                    </path>
                                 </svg>
                              </a>
                           </div>
                        </ul>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
         <!-- header-middle end -->
         <!-- header bottom start -->
         <nav id="sticky" class="header-bottom theme1 d-none d-lg-block" >
            <div class="container background_color">
               <div class="row align-items-center">
                  <div class="col-lg-8 offset-lg-4 d-flex flex-wrap align-items-center position-relative">
                     <ul class="main-menu d-flex">
                        <li class="active ml-0">
                           <a href="/" class="pl-0">Home</a>
                        </li>
                        <li>
                           <a href="#">Food Menu &nbsp;<i class="ion-ios-arrow-down"></i></a>
                           <ul class="sub-menu">
                              <li><a href="about-us.html"><span class="fas fa-apple-alt"></span> Veg Food</a></li>
                              <li><a href="cart.html"><span class="fas fa-drumstick-bite"></span> Non-Veg Food</a></li>
                              <li><a href="checkout.html"><span class="fas fa-hamburger"></span> Chinese &amp; Fast Food</a></li>
                              <li><a href="compare.html"><span class="fas fa-cookie"></span> Punjabi Food</a></li>
                           </ul>
                        </li>
                        <li>
                           <a href="/about">About</a> 
                        </li>
                        <li>
                           <a href="/contact-us">Contact Us</a> 
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </nav>
         <!-- header bottom end -->
         <div class="mobile-category-nav theme1 d-lg-none py-20 background_color" >
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <!--=======  category menu  =======-->
                     <div class="hero-side-category">
                        <!-- Category Toggle Wrap -->
                        <div class="category-toggle-wrap">
                           <!-- Category Toggle -->
                           <button class="category-toggle"><i class="fa fa-bars"></i> All Categories</button>
                        </div>
                        <!-- Category Menu -->
                        <nav class="category-menu">
                           <ul>
                              <li class="menu-item-has-children menu-item-has-children-1">
                                 <a href="#">Accessories & Parts<i class="ion-ios-arrow-down"></i></a>
                                 <!-- category submenu -->
                                 <ul class="category-mega-menu category-mega-menu-1">
                                    <li><a href="#">Cables & Adapters</a></li>
                                    <li><a href="#">Batteries</a></li>
                                    <li><a href="#">Chargers</a></li>
                                    <li><a href="#">Bags & Cases</a></li>
                                    <li><a href="#">Electronic Cigarettes</a></li>
                                 </ul>
                              </li>
                              <li class="menu-item-has-children menu-item-has-children-2">
                                 <a href="#">Camera & Photo<i class="ion-ios-arrow-down"></i></a>
                                 <!-- category submenu -->
                                 <ul class="category-mega-menu category-mega-menu-2">
                                    <li><a href="#">Digital Cameras</a></li>
                                    <li><a href="#">Camcorders</a></li>
                                    <li><a href="#">Camera Drones</a></li>
                                    <li><a href="#">Action Cameras</a></li>
                                    <li><a href="#">Photo Studio Supplies</a></li>
                                 </ul>
                              </li>
                              <li class="menu-item-has-children menu-item-has-children-3">
                                 <a href="#">Smart Electronics <i class="ion-ios-arrow-down"></i></a>
                                 <!-- category submenu -->
                                 <ul class="category-mega-menu category-mega-menu-3">
                                    <li><a href="#">Wearable Devices</a></li>
                                    <li><a href="#">Smart Home Appliances</a></li>
                                    <li><a href="#">Smart Remote Controls</a></li>
                                    <li><a href="#">Smart Watches</a></li>
                                    <li><a href="#">Smart Wristbands</a></li>
                                 </ul>
                              </li>
                              <li class="menu-item-has-children menu-item-has-children-4">
                                 <a href="#">Audio & Video <i class="ion-ios-arrow-down"></i></a>
                                 <!-- category submenu -->
                                 <ul class="category-mega-menu category-mega-menu-4">
                                    <li><a href="#">Televisions</a></li>
                                    <li><a href="#">TV Receivers</a></li>
                                    <li><a href="#">Projectors</a></li>
                                    <li><a href="#">Audio Amplifier Boards</a></li>
                                    <li><a href="#">TV Sticks</a></li>
                                 </ul>
                              </li>
                              <li class="menu-item-has-children menu-item-has-children-5">
                                 <a href="#">Portable Audio & Video <i class="ion-ios-arrow-down"></i></a>
                                 <!-- category submenu -->
                                 <ul class="category-mega-menu category-mega-menu-5">
                                    <li><a href="#">Headphones</a></li>
                                    <li><a href="#">Speakers</a></li>
                                    <li><a href="#">MP3 Players</a></li>
                                    <li><a href="#">VR/AR Devices</a></li>
                                    <li><a href="#">Microphones</a></li>
                                 </ul>
                              </li>
                              <li class="menu-item-has-children menu-item-has-children-6">
                                 <a href="#">Video Game <i class="ion-ios-arrow-down"></i></a>
                                 <!-- category submenu -->
                                 <ul class="category-mega-menu category-mega-menu-6">
                                    <li><a href="#">Handheld Game Players</a></li>
                                    <li><a href="#">Game Controllers</a></li>
                                    <li><a href="#">Joysticks</a></li>
                                    <li><a href="#">Stickers</a></li>
                                 </ul>
                              </li>
                              <li><a href="#">Televisions</a></li>
                              <li><a href="#">Digital Cameras</a></li>
                              <li><a href="#">Headphones</a></li>
                              <li><a href="#">Wearable Devices</a></li>
                              <li><a href="#">Smart Watches</a></li>
                              <li><a href="#">Game Controllers</a></li>
                              <li><a href="#"> Smart Home Appliances</a></li>
                              <li class="hidden"><a href="#">Projectors</a></li>
                              <li>
                                 <a href="#" id="more-btn"><i class="ion-ios-plus-empty"></i>
                                 More Categories</a>
                              </li>
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!--=======  End of category menu =======-->
      </header>
      <!-- header end -->
      @yield('content')
      <!-- footer strat -->
      <footer class="bg-light theme1 position-relative" style="background: linear-gradient( #dfeae7, #F0F2F0);">
         <!-- footer bottom start -->
         <div class="footer-bottom pt-80 pb-30">
            <div class="container">
               <div class="row">
                  <div class="col-12 col-md-6 col-lg-4 mb-30">
                     <div class="footer-widget mx-w-400">
                        <div class="footer-logo mb-35">
                           <a href="/">
                           <img src="{{url('../images/main_logo2-1.png')}}" alt="footer logo">
                           </a>
                        </div>
                        <p class="text mb-30">We are a team of designers and developers that create high quality
                           Magento, Prestashop, Opencart.
                        </p>
                        <div class="address-widget mb-30">
                           <div class="media">
                              <span class="address-icon mr-3">
                              <img src="{{url('front/assets/img/icon/phone.png')}}" alt="phone">
                              </span>
                              <div class="media-body">
                                 <p class="help-text text-uppercase">NEED HELP?</p>
                                 <h4 class="title text-dark"><a href="tel:+1(123)8889999">(+800) 345 678</a></h4>
                              </div>
                           </div>
                        </div>
                        <div class="social-network">
                           <ul class="d-flex">
                              <li><a href="https://www.facebook.com/" target="_blank"><span
                                 class="icon-social-facebook"></span></a></li>
                              <li><a href="https://twitter.com/" target="_blank"><span
                                 class="icon-social-twitter"></span></a></li>
                              <li><a href="https://www.youtube.com/" target="_blank"><span
                                 class="icon-social-youtube"></span></a></li>
                              <li class="mr-0"><a href="https://www.instagram.com/" target="_blank"><span
                                 class="icon-social-instagram"></span></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-2 mb-30">
                     <div class="footer-widget">
                        <div class="border-bottom cbb1 mb-25">
                           <div class="section-title pb-20">
                              <h2 class="title text-dark text-uppercase">Information</h2>
                           </div>
                        </div>
                        <!-- footer-menu start -->
                        <ul class="footer-menu">
                           <li><a href="#">Delivery</a></li>
                           <li><a href="about-us.html">About us</a></li>
                           <li><a href="#">Secure payment</a></li>
                           <li><a href="/contact-us">Contact us</a></li>
                           <li><a href="#">Sitemap</a></li>
                           <li><a href="#">Stores</a></li>
                        </ul>
                        <!-- footer-menu end -->
                     </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-2 mb-30">
                     <div class="footer-widget">
                        <div class="border-bottom cbb1 mb-25">
                           <div class="section-title pb-20">
                              <h2 class="title text-dark text-uppercase">Custom Links</h2>
                           </div>
                        </div>
                        <!-- footer-menu start -->
                        <ul class="footer-menu">
                           <li><a href="#">Legal Notice</a></li>
                           <li><a href="#">Prices drop</a></li>
                           <li><a href="#">New products</a></li>
                           <li><a href="#">Best sales</a></li>
                           <li><a href="login.html">Login</a></li>
                           <li><a href="myaccount.html">My account</a></li>
                        </ul>
                        <!-- footer-menu end -->
                     </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4 mb-30">
                     <div class="footer-widget">
                        <div class="border-bottom cbb1 mb-25">
                           <div class="section-title pb-20">
                              <h2 class="title text-dark text-uppercase">Newsletter</h2>
                           </div>
                        </div>
                        <p class="text mb-20">You may unsubscribe at any moment. For that purpose, please find our
                           contact info in the legal notice.
                        </p>
                        <div class="nletter-form mb-35">
                           <form class="form-inline position-relative"
                              action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef"
                              target="_blank" method="post">
                              <input class="form-control" type="text" placeholder="Your email address">
                              <button class="btn nletter-btn text-capitalize" type="submit">Sign
                              up</button>
                           </form>
                        </div>
                        <div class="store d-flex">
                           <a href="https://www.apple.com/" class="d-inline-block mr-3"><img
                              src="{{url('front/assets/img/icon/apple.png')}}" alt="apple icon"> </a>
                           <a href="https://play.google.com/store/" class="d-inline-block"><img
                              src="{{url('front/assets/img/icon/play.png')}}" alt="apple icon"> </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- footer bottom end -->
         <!-- coppy-right start -->
         <div class="coppy-right pb-80">
            <div class="container">
               <div class="row">
                  <div class="col-12 col-md-6 col-lg-4">
                     <div class="text-left">
                        <p class="mb-3 mb-md-0">Copyright &copy; <a href="https://hasthemes.com/">HasThemes</a>. All
                           Rights Reserved
                        </p>
                     </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-8">
                     <div class="text-left">
                        <img src="{{url('front/assets/img/payment/1.png')}}" alt="img">
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- coppy-right end -->
      </footer>
      <!-- footer end -->
      <!-- modals start -->
      <!-- first modal -->
      <div class="modal fade theme1 style1" id="quick-view" tabindex="-1" role="dialog">
         <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <div class="row">
                     <div class="col-md-8 mx-auto col-lg-5 mb-5 mb-lg-0">
                        <div class="product-sync-init mb-20">
                           <div class="single-product">
                              <div class="product-thumb">
                                 <img src="front/assets/img/slider/thumb/1.jpg" alt="product-thumb">
                              </div>
                           </div>
                           <!-- single-product end -->
                           <div class="single-product">
                              <div class="product-thumb">
                                 <img src="front/assets/img/slider/thumb/2.jpg" alt="product-thumb">
                              </div>
                           </div>
                           <!-- single-product end -->
                           <div class="single-product">
                              <div class="product-thumb">
                                 <img src="front/assets/img/slider/thumb/3.jpg" alt="product-thumb">
                              </div>
                           </div>
                           <!-- single-product end -->
                           <div class="single-product">
                              <div class="product-thumb">
                                 <img src="front/assets/img/slider/thumb/4.jpg" alt="product-thumb">
                              </div>
                           </div>
                           <!-- single-product end -->
                        </div>
                        <div class="product-sync-nav">
                           <div class="single-product">
                              <div class="product-thumb">
                                 <a href="javascript:void(0)"> <img src="front/assets/img/slider/thumb/1.1.jpg"
                                    alt="product-thumb"></a>
                              </div>
                           </div>
                           <!-- single-product end -->
                           <div class="single-product">
                              <div class="product-thumb">
                                 <a href="javascript:void(0)"> <img src="front/assets/img/slider/thumb/2.1.jpg"
                                    alt="product-thumb"></a>
                              </div>
                           </div>
                           <!-- single-product end -->
                           <div class="single-product">
                              <div class="product-thumb">
                                 <a href="javascript:void(0)"><img src="front/assets/img/slider/thumb/3.1.jpg"
                                    alt="product-thumb"></a>
                              </div>
                           </div>
                           <!-- single-product end -->
                           <div class="single-product">
                              <div class="product-thumb">
                                 <a href="javascript:void(0)"><img src="front/assets/img/slider/thumb/4.1.jpg"
                                    alt="product-thumb"></a>
                              </div>
                           </div>
                           <!-- single-product end -->
                        </div>
                     </div>
                     <div class="col-lg-7 mt-5 mt-md-0">
                        <div class="modal-product-info">
                           <div class="product-head">
                              <h2 class="title">New Balance Running Arishi trainers in triple</h2>
                              <h4 class="sub-title">Reference: demo_5</h4>
                              <div class="star-content mb-20">
                                 <span class="star-on"><i class="fas fa-star"></i> </span>
                                 <span class="star-on"><i class="fas fa-star"></i> </span>
                                 <span class="star-on"><i class="fas fa-star"></i> </span>
                                 <span class="star-on"><i class="fas fa-star"></i> </span>
                                 <span class="star-on de-selected"><i class="fas fa-star"></i> </span>
                              </div>
                           </div>
                           <div class="product-body">
                              <span class="product-price text-center"> <span class="new-price">$29.00</span>
                              </span>
                              <p>Break old records and make new goals in the New Balance?? Arishi Sport v1.</p>
                              <ul>
                                 <li>Predecessor: None.</li>
                                 <li>Support Type: Neutral.</li>
                                 <li>Cushioning: High energizing cushioning.</li>
                              </ul>
                           </div>
                           <div class="d-flex mt-30">
                              <div class="product-size">
                                 <h3 class="title">Dimension</h3>
                                 <select>
                                    <option value="0">40x60cm</option>
                                    <option value="1">60x90cm</option>
                                    <option value="2">80x120cm</option>
                                 </select>
                              </div>
                           </div>
                           <div class="product-footer">
                              <div class="product-count style d-flex flex-column flex-sm-row my-4">
                                 <div class="count d-flex">
                                    <input type="number" min="1" max="10" step="1" value="1">
                                    <div class="button-group">
                                       <button class="count-btn increment"><i
                                          class="fas fa-chevron-up"></i></button>
                                       <button class="count-btn decrement"><i
                                          class="fas fa-chevron-down"></i></button>
                                    </div>
                                 </div>
                                 <div>
                                    <button class="btn theme-btn--dark1 btn--xl mt-5 mt-sm-0 rounded-5">
                                    <span class="mr-2"><i class="ion-android-add"></i></span>
                                    Add to cart
                                    </button>
                                 </div>
                              </div>
                              <div class="addto-whish-list">
                                 <a href="#"><i class="icon-heart"></i> Add to wishlist</a>
                                 <a href="#"><i class="icon-shuffle"></i> Add to compare</a>
                              </div>
                              <div class="pro-social-links mt-10">
                                 <ul class="d-flex align-items-center">
                                    <li class="share">Share</li>
                                    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="ion-social-google"></i></a></li>
                                    <li><a href="#"><i class="ion-social-pinterest"></i></a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- second modal -->
      <div class="modal fade style2" id="compare" tabindex="-1" role="dialog">
         <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <h5 class="title"><i class="fa fa-check"></i> Product added to compare.</h5>
               </div>
            </div>
         </div>
      </div>
      <!-- second modal -->
      <div class="modal fade style3" id="add-to-cart" tabindex="-1" role="dialog">
         <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
               <div class="modal-header justify-content-center bg-dark">
                  <h5 class="modal-title" id="add-to-cartCenterTitle"> <span class="ion-checkmark-round"></span>
                     Product successfully added to your shopping cart
                  </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <div class="row">
                     <div class="col-lg-5 divide-right">
                        <div class="row">
                           <div class="col-md-6">
                              <img src="front/assets/img/modal/1.jpg" alt="img">
                           </div>
                           <div class="col-md-6 mb-2 mb-md-0">
                              <h4 class="product-name">New Balance Running Arishi trainers in triple</h4>
                              <h5 class="price">$$29.00</h5>
                              <h6 class="color"><strong>Dimension: </strong>: <span class="dmc">40x60cm</span> </h6>
                              <h6 class="quantity"><strong>Quantity:</strong>&nbsp;1</h6>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-7">
                        <div class="modal-cart-content">
                           <p class="cart-products-count">There is 1 item in your cart.</p>
                           <p><strong>Total products:</strong>&nbsp;$123.72</p>
                           <p><strong>Total shipping:</strong>&nbsp;$7.00 </p>
                           <p><strong>Taxes</strong>&nbsp;$0.00</p>
                           <p><strong>Total:</strong>&nbsp;$130.72 (tax excl.)</p>
                           <div class="cart-content-btn">
                              <button type="button" class="btn theme-btn--dark1 btn--md mt-4"
                                 data-dismiss="modal">Continue
                              shopping</button>
                              <button class="btn theme-btn--dark1 btn--md mt-4"><i
                                 class="ion-checkmark-round"></i>Proceed to
                              checkout</button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
    
      <!-- modals end -->
      <!--*********************** 
         all js files
         ***********************-->
      <!--****************************************************** 
         jquery,modernizr ,poppe,bootstrap,plugins and main js
         ******************************************************-->
      <script src="{{asset('front/assets/js/vendor/jquery-3.5.1.min.js')}}"></script>
      <script src="{{asset('front/assets/js/vendor/modernizr-3.7.1.min.js')}}"></script>
      <script src="{{asset('front/assets/js/popper.min.js')}}"></script>
      <script src="{{asset('front/assets/js/plugins/jquery-ui.min.js')}}"></script>
      <script src="{{asset('front/assets/js/bootstrap.min.js')}}"></script>
      <script src="{{asset('front/assets/js/plugins/plugins.js')}}"></script>
      <script src="{{asset('front/assets/js/main.js')}}"></script>
      <script src="{{ asset('front/assets/js/push.min.js') }}"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
      @if(Session::has('do_login'))
      <script> 
      toastr.success("{!!Session::get('do_login')!!}");
     </script>
      @endif
      @if(Session::has('info_msg'))
      <script> 
      toastr.info("{!!Session::get('info_msg')!!}");
     </script>
      @endif
      @if(Session::has('Order_placed'))
      <script> 
      toastr.success("{!!Session::get('Order_placed')!!}");
     </script>
      @endif
       @if(Session::has('Order_deleted'))
      <script> 
      toastr.warning("{!!Session::get('Order_deleted')!!}");
     </script>
      @endif
      <!-- Use the minified version files listed below for better performance and remove the files listed above -->
      <!--*************************** 
         Minified  js 
         ***************************-->
      <!--*********************************** 
         vendor,plugins and main js
         ***********************************-->
      <!-- <script src="front/assets/js/vendor/vendor.min.js"></script>
         <script src="front/assets/js/plugins/plugins.min.js"></script>
         <script src="front/assets/js/main.js"></script> -->
         <script >
           function select_payment_method(){
            if($('.paytm').is(':checked') || $('.cod').is(':checked') || $('.googlepay').is(':checked')  || $('.razorpay').is(':checked') ){
      alert('checked');
    }
    else{
      alert('Please select payment method');
      return false;
    }           
  }

         </script>

         <!-- push notifications -->
       <!--   <script>
    let loggedInUser =@json(\Illuminate\Support\Facades\Auth::user());
    let loginUrl = '{{ url('/login_page') }}';
    const iconPath = '{{ asset('../images/main_logo2-1.png') }}';
    // Loading button plugin (removed from BS4)
    (function ($) {
        $.fn.button = function (action) {
            if (action === 'loading' && this.data('loading-text')) {
                this.data('original-text', this.html()).html(this.data('loading-text')).prop('disabled', true);
            }
            if (action === 'reset' && this.data('original-text')) {
                this.html(this.data('original-text')).prop('disabled', false);
            }
        };
    }(jQuery));
    Push.create("Hello Rohit!",{
       body: "Welcome to the FoodBuddy.",
       timeout: 5000,
       icon: iconPath,
    });
</script> -->
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/60a3e36a185beb22b30e6e34/1f6030ml1';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
  <!-- Messenger Chat plugin Code -->
    <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v10.0'
          });
        };

        (function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
      </script>

      <!-- Your Chat plugin code -->
      <div class="fb-customerchat"
        attribution="biz_inbox"
        page_id="106436151633653">
      </div>
   </body>
</html>
