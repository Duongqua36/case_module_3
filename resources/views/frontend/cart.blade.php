<!DOCTYPE HTML>
<html>
<head>
    <title>Footwear - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rokkitt:100,300,400,700" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{asset('cart/css/animate.css')}}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{asset('cart/css/icomoon.css')}}">
    <!-- Ion Icon Fonts-->
    <link rel="stylesheet" href="{{asset('cart/css/ionicons.min.css')}}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{asset('cart/css/bootstrap.min.css')}}">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('cart/css/magnific-popup.css')}}">

    <!-- Flexslider  -->
    <link rel="stylesheet" href="{{asset('cart/css/flexslider.css')}}">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('cart/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('cart/css/owl.theme.default.min.css')}}">

    <!-- Date Picker -->
    <link rel="stylesheet" href="{{asset('cart/css/bootstrap-datepicker.css')}}">
    <!-- Flaticons  -->
    <link rel="stylesheet" href="{{asset('cart/fonts/flaticon/font/flaticon.css')}}">

    <!-- Theme style  -->
    <link rel="stylesheet" href="{{asset('cart/css/style.css')}}">

</head>
<body>

<div class="colorlib-loader"></div>

<div id="page">
    <nav class="colorlib-nav" role="navigation">
        <div class="top-menu">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7 col-md-9">
                        <div id="colorlib-logo"><a href="index.html">Computer Shop</a></div>
                    </div>
                    <div class="col-sm-5 col-md-3">
                        <form action="#" class="search-wrap">
                            <div class="form-group">
                                <input type="search" class="form-control search" placeholder="Search">
                                <button class="btn btn-primary submit-search text-center" type="submit"><i
                                        class="icon-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 text-left menu-1">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li class="has-dropdown active">
                                <ul class="dropdown">
                                    <li><a href="product-detail.html">Product Detail</a></li>
                                    <li><a href="cart.html">Shopping Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="order-complete.html">Order Complete</a></li>
                                    <li><a href="add-to-wishlist.html">Wishlist</a></li>
                                </ul>
                            </li>
                            <li class="cart"><a href="cart.html"><i class="icon-shopping-cart"></i><span
                                        class="badge badge-secondary">{{ (Session::has('cart')) ? count(Session::get('cart')->items) : "0" }}</span>
                                </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col">
                    <p class="bread"><span><a href="index.html">Home</a></span> / <span>Shopping Cart</span></p>
                </div>
                <div class="colorlib-product">
                    <div class="container">
                        <div class="row row-pb-lg">
                            <div class="col-md-10 offset-md-1">
                                <div class="process-wrap">
                                    <div class="process text-center active">
                                        <p><span>01</span></p>
                                        <h3>Shopping Cart</h3>
                                    </div>
                                    <div class="process text-center">
                                        <p><span>02</span></p>
                                        <h3>Checkout</h3>
                                    </div>
                                    <div class="process text-center">
                                        <p><span>03</span></p>
                                        <h3>Order Complete</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-pb-lg">
                            <div class="col-md-12">
                                <div class="product-name d-flex">
                                    <div class="one-forth text-left px-4">
                                        <span>Product</span>
                                    </div>
                                    <div class="one-forth text-left px-4">
                                        <span>image</span>
                                    </div>
                                    <div class="one-eight text-center">
                                        <span>Price</span>
                                    </div>
                                    <div class="one-eight text-center">
                                        <span>Quantity</span>
                                    </div>
                                    <div class="one-eight text-center">
                                        <span>Total</span>
                                    </div>
                                    <div class="one-eight text-center px-4">
                                        <span>Remove</span>
                                    </div>
                                </div>

                                @if(Session::has('cart') && $cart->Quantity > 0)
                                    @foreach($cart->items as $product)
                                        <div class="product-cart d-flex">
                                            <div class="one-forth">
                                                <div class="display-tc" style="width: 280px">
                                                    <h4 class="nomargin">{{ $product['item']->name }}</h4>
                                                </div>
                                                <div class="one-eight text-center">
                                                    <img src="{{ asset('storage/images/' . $product['item']->image) }}" style="width: 100px">
                                                </div>
                                            </div>
                                            <div class="one-eight text-center">
                                                <div class="display-tc">
                                                    <span class="price">{{ '$'. $product['item']->price }}</span>
                                                </div>
                                            </div>
                                            <div class="one-eight text-center">
                                                <div class="display-tc">
                                                    <input type="number" data-id="{{ $product['item']->id }}" class="form-control text-center update-product-cart" min="0" name="qty"
                                                           value="{{ $product['qty'] }}">
                                                </div>
                                            </div>
                                            <div class="one-eight text-center">
                                                <div class="display-tc" id="product-total-{{$product['item']->id}}"
                                                     class="text-center">{{ '$' . $product['price'] }}
                                                </div>
                                            </div>
                                            <div class="one-eight text-center">
                                                <div class="display-tc">
                                                    <a class="btn btn-danger btn-sm"
                                                       href="{{ route('cart.removeCart', $product['item']->id) }}"><i
                                                            class="fa fa-trash-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="product-cart d-flex">
                            <div class="row row-pb-lg">
                                <div class="col-md-12">
                                    <div class="total-wrap">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <form action="#">
                                                    <div class="row form-group">
                                                        <div class="col-sm-9">
                                                            <input type="text" name="quantity"
                                                                   class="form-control input-number"
                                                                   placeholder="Your Coupon Number...">
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <input type="submit" value="Apply Coupon"
                                                                   class="btn btn-primary">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-sm-4 text-center">
                                                <div class="total">
                                                    <div class="grand-total">
                                                        <p><span><strong>Total: {{'$'. $cart->totalPrice }}</strong></span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        <div class="row">
                            <div class="col-sm-8 offset-sm-2 text-center colorlib-heading colorlib-heading-sm">
                                <h2>Related Products</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 col-lg-3 mb-4 text-center">
                                <div class="product-entry border">
                                    <a href="#" class="prod-img">
                                        <img src="{{asset('cart/images/laptop.jpg')}}" class="img-fluid"
                                             alt="Free html5 bootstrap 4 template">
                                    </a>
                                    <div class="desc">
                                        <h2><a href="#">Computer</a></h2>
                                        <span class="price">$360.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-lg-3 mb-4 text-center">
                                <div class="product-entry border">
                                    <a href="#" class="prod-img">
                                        <img src="{{asset('cart/images/laptop1.jpg')}}" class="img-fluid"
                                             alt="Free html5 bootstrap 4 template">
                                    </a>
                                    <div class="desc">
                                        <h2><a href="#">Computer</a></h2>
                                        <span class="price">$360.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-lg-3 mb-4 text-center">
                                <div class="product-entry border">
                                    <a href="#" class="prod-img">
                                        <img src="{{asset('cart/images/dell-xps.jpg')}}" class="img-fluid"
                                             alt="Free html5 bootstrap 4 template">
                                    </a>
                                    <div class="desc">
                                        <h2><a href="#">Computer</a></h2>
                                        <span class="price">$360.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-lg-3 mb-4 text-center">
                                <div class="product-entry border">
                                    <a href="#" class="prod-img">
                                        <img src="{{asset('cart/images/dell-xps-13.jpeg')}}" class="img-fluid"
                                             alt="Free html5 bootstrap 4 template">
                                    </a>
                                    <div class="desc">
                                        <h2><a href="#">Computer</a></h2>
                                        <span class="price">$360.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <footer id="colorlib-footer" role="contentinfo">
                    <div class="container">
                        <div class="row row-pb-md">
                            <div class="col footer-col colorlib-widget">
                                <h4>About Footwear</h4>
                                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                    unorthographic life</p>
                                <p>
                                <ul class="colorlib-social-icons">
                                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                                    <li><a href="#"><i class="icon-linkedin"></i></a></li>
                                    <li><a href="#"><i class="icon-dribbble"></i></a></li>
                                </ul>
                                </p>
                            </div>
                            <div class="col footer-col colorlib-widget">
                                <h4>Customer Care</h4>
                                <p>
                                <ul class="colorlib-footer-links">
                                    <li><a href="#">Contact</a></li>
                                    <li><a href="#">Returns/Exchange</a></li>
                                    <li><a href="#">Gift Voucher</a></li>
                                    <li><a href="#">Wishlist</a></li>
                                    <li><a href="#">Special</a></li>
                                    <li><a href="#">Customer Services</a></li>
                                    <li><a href="#">Site maps</a></li>
                                </ul>
                                </p>
                            </div>
                            <div class="col footer-col colorlib-widget">
                                <h4>Information</h4>
                                <p>
                                <ul class="colorlib-footer-links">
                                    <li><a href="#">About us</a></li>
                                    <li><a href="#">Delivery Information</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Support</a></li>
                                    <li><a href="#">Order Tracking</a></li>
                                </ul>
                                </p>
                            </div>

                            <div class="col footer-col">
                                <h4>News</h4>
                                <ul class="colorlib-footer-links">
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="#">Press</a></li>
                                    <li><a href="#">Exhibitions</a></li>
                                </ul>
                            </div>

                            <div class="col footer-col">
                                <h4>Contact Information</h4>
                                <ul class="colorlib-footer-links">
                                    <li>291 South 21th Street, <br> 721 New York</li>
                                    <li><a href="tel://1234567920">+ 12345678</a></li>
                                    <li><a href="mailto:info@yoursite.com">chuduong350@gmail.com</a></li>
                                    <li><a href="#">yoursite.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="copy">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <p>
							<span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i
                                    class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com"
                                                                                     target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
                                    <span class="block">Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a> , <a
                                            href="http://pexels.com/" target="_blank">Pexels.com</a></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>


            <div class="gototop js-top">
                <a href="#" class="js-gotop"><i class="ion-ios-arrow-up"></i></a>
            </div>
        </div>
    </div>
</div>
            <!-- jQuery -->
            <script src="{{asset('cart/js/jquery.min.js')}}"></script>
            <!-- popper -->
            <script src="{{asset('cart/js/popper.min.js')}}"></script>
            <!-- bootstrap 4.1 -->
            <script src="{{asset('cart/js/bootstrap.min.js')}}"></script>
            <!-- jQuery easing -->
            <script src="{{asset('cart/js/jquery.easing.1.3.js')}}"></script>
            <!-- Waypoints -->
            <script src="{{asset('cart/js/jquery.waypoints.min.js')}}"></script>
            <!-- Flexslider -->
            <script src="{{asset('cart/js/jquery.flexslider-min.js')}}"></script>
            <!-- Owl carousel -->
            <script src="{{asset('cart/js/owl.carousel.min.js')}}"></script>
            <!-- Magnific Popup -->
            <script src="{{asset('cart/js/jquery.magnific-popup.min.js')}}"></script>
            <script src="{{asset('cart/js/magnific-popup-options.js')}}"></script>
            <!-- Date Picker -->
            <script src="{{asset('cart/js/bootstrap-datepicker.js')}}"></script>
            <!-- Stellar Parallax -->
            <script src="{{asset('cart/js/jquery.stellar.min.js')}}"></script>
            <!-- Main -->
            <script src="{{asset('cart/js/main.js')}}"></script>

</body>
</html>

