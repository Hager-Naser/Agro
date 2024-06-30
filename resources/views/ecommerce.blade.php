<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="MkRqEzTGuoSx6LqJUm0OAKxSgNUYt26wTT7RMUZY">
    <link rel="manifest" href="manifest.json">
    <link rel="apple-touch-icon" href="{{ asset('assetUser/images/favicon.ico') }}">
    <link rel="icon" href="{{ asset('assetUser/images/favicon.ico" type="image/x-icon') }}">
    <link rel="icon" href="{{ asset('assetUser/images/favicon.ico" type="image/x-icon') }}">
    <meta name="theme-color" content="#e87316">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Surfside Media">
    <meta name="msapplication-TileImage" content="{{ asset('assetUser/images/favicon.ico') }}">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Surfside Media">
    <meta name="keywords" content="Surfside Media">
    <meta name="author" content="Surfside Media">
    <link rel="preconnect" href="https://fonts.gstatic.com">


    <title>@yield('title')</title>

    <link id="color-link" rel="stylesheet" type="text/css" href="{{ asset('assetUser/css/demo4.css') }}">

    <link id="rtl-link" rel="stylesheet" type="text/css" href="{{ asset('assetUser/css/vendors/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assetUser/css/vendors/font-awesome.css') }}">
    <link id="color-link" rel="stylesheet" type="text/css" href="{{ asset('assetUser/css/style.css') }}">
    <link id="color-link" rel="stylesheet" type="text/css" href="{{ asset('assetUser/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assetUser/css/vendors/ion.rangeSlider.min.css') }}">
    <link id="color-link" rel="stylesheet" type="text/css" href="{{ asset('assetUser/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assetUser/css/vendors/feather-icon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assetUser/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assetUser/css/vendors/slick/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assetUser/css/vendors/slick/slick-theme.css') }}">

    <style>
        .h-logo {
            max-width: 185px !important;
        }

        .f-logo {
            max-width: 220px !important;
        }

        @media only screen and (max-width: 600px) {
            .h-logo {
                max-width: 110px !important;
            }
        }
    </style>
    <link rel="stylesheet" href="{{ asset('assetUser/css/custom.css') }}">


    <style>
        header .profile-dropdown ul li {
            display: block;
            padding: 5px 20px;
            border-bottom: 1px solid #ddd;
            line-height: 35px;
        }

        header .profile-dropdown ul li:last-child {
            border-color: #fff;
        }

        header .profile-dropdown ul {
            padding: 10px 0;
            min-width: 250px;
        }

        .name-usr {
            background: #27AE60;
            padding: 8px 12px;
            color: #fff;
            font-weight: bold;
            text-transform: uppercase;
            line-height: 24px;
        }

        .name-usr span {
            margin-right: 10px;
        }

        @media (max-width:600px) {
            .h-logo {
                max-width: 150px !important;
            }

            i.sidebar-bar {
                font-size: 22px;
            }

            .mobile-menu ul li a svg {
                width: 20px;
                height: 20px;
            }

            .mobile-menu ul li a span {
                margin-top: 0px;
                font-size: 12px;
            }

            .name-usr {
                padding: 5px 12px;
            }
        }
    </style>
    @yield('css')
</head>

<body class="theme-color4 light ltr">
    @include('layouts.header')
    <!-- slider section -->
    <div class="hero_area">

        <section class="slider_section">
            <div class="slider_bg_box">
                <img src="{{ asset('assetUser/images/slider-bg.jpg') }}" alt="">
            </div>
            <div id="customCarousel1" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container-fluid-lg ">
                            <div class="row">
                                <div class="col-md-7 col-lg-6 ">
                                    <div class="detail-box">
                                        <h1>
                                            <span>
                                                Sale 20% Off
                                            </span>
                                            <br>
                                            On Everything
                                        </h1>
                                        <p style="line-height: 1.5rem;padding-right:60px;">
                                            Explicabo esse amet tempora quibusdam laudantium, laborum eaque magnam
                                            fugiat hic? Esse dicta aliquid error repudiandae earum suscipit fugiat
                                            molestias, veniam, vel architecto veritatis delectus repellat modi
                                            impedit
                                            sequi.
                                        </p>
                                        <div class="btn-box">
                                            <a href="{{ route('shop.index') }}" class="btn1">
                                                Shop Now
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- end slider section -->

    <!-- banner section start -->
    <section class="ratio2_1 banner-style-2">
        <div class="container-fluid-lg">
            <div class="row gy-4">
                @foreach ($categories as $category)
                    <div class="col-lg-4 col-md-6">
                        <div class="collection-banner p-bottom p-center text-center">
                            <a href="shop-left-sidebar.html" class="banner-img">
                                <img src="{{ asset('assets/images/' . $category->image) }}"
                                    class="bg-img blur-up lazyload" alt="">
                            </a>
                            <div class="banner-detail">
                                <a href="javacript:void(0)" class="heart-wishlist">
                                    <i class="far fa-heart"></i>
                                </a>
                                <span class="font-dark-30">26% <span>OFF</span></span>
                            </div>
                            <a href="shop-left-sidebar.html" class="contain-banner">
                                <div class="banner-content with-big">
                                    <h2 class="mb-2">{{ $category->name }} Fashion</h2>
                                    <span>BUY ONE GET ONE FREE</span>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- banner section end -->

    <section class="ratio_asos overflow-hidden">
        <div class="container-fluid-lg">
            <div class="product p-sm-0">
                <div class="row m-0">
                    <div class="col-12 p-0">
                        <div class="title-3 text-center">
                            <h2>New Arrival</h2>
                            <h5 class="theme-color">Our Collection</h5>
                        </div>
                    </div>
                </div>
                <style>
                    .r-price {
                        display: flex;
                        flex-direction: row;
                        gap: 20px;
                    }

                    .r-price .main-price {
                        width: 100%;
                    }

                    .r-price .rating {
                        padding-left: auto;
                    }

                    .product-style-3.product-style-chair .product-title {
                        text-align: left;
                        width: 100%;
                    }

                    .product .btn-box {
                        display: -webkit-box;
                        display: -ms-flexbox;
                        display: flex;
                        -webkit-box-pack: center;
                        -ms-flex-pack: center;
                        justify-content: center;
                        margin-top: 45px;
                    }

                    .product .btn-box a {
                        display: inline-block;
                        padding: 10px 40px;
                        background-color: #27AE60;
                        border: 1px solid #27AE60;
                        color: #ffffff;
                        border-radius: 0;
                        -webkit-transition: all 0.3s;
                        transition: all 0.3s;
                        font-weight: bold;
                    }

                    .product .btn-box a:hover {
                        background-color: transparent;
                        color: #27AE60;
                    }

                    @media (max-width:600px) {

                        .product-box p,
                        .product-box a {
                            text-align: left;
                        }

                        .product-style-3.product-style-chair .main-price {
                            text-align: right !important;
                        }
                    }
                </style>
                <div class="row g-sm-4 g-3">
                    <?php $i = 1; ?>
                    @foreach ($products as $product)
                        <?php $i++; ?>
                        @if ($i < 8)
                            <div class="col-xl-2 col-lg-2 col-6">
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <a href="product/details.html">
                                            <img src="{{ asset('assets/images/' . $product->image) }}"
                                                class="w-100 bg-img blur-up lazyload" alt="">
                                        </a>
                                        <div class="circle-shape"></div>
                                        <span class="background-text">Furniture</span>
                                        <div class="label-block">
                                            <span class="label label-theme">{{ $product->discount }}% Off</span>
                                        </div>


                                        <div class="cart-wrap">
                                            <form action="" method="post">
                                                @csrf
                                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                <input type="hidden" name="price" value="{{ $product->price }}">
                                                <input type="hidden" name="quantity" value="1">
                                                <button type="submit" formaction="{{ route('cartStore') }}" style="border: 0px;outline:0px;">
                                                    <i data-feather="shopping-cart"></i>
                                                </button>
                                                <button type="submit" formaction="{{ route('show')}}" style="border: 0px;outline:0px;">
                                                    <i data-feather="eye"></i>
                                                </button>
                                                <button type="submit" formaction="{{ route('wishlistStore') }}" style="border: 0px;outline:0px;">
                                                    <i data-feather="heart"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="product-style-3 product-style-chair">
                                        <div class="product-title d-block mb-0">
                                            <div class="r-price">
                                                <div class="theme-color">${{ $product->price }}</div>
                                                <div class="main-price">
                                                    <ul class="rating mb-1 mt-0">
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <p class="font-light mb-sm-2 mb-0">Dolores Et</p>
                                            <a href="product/details.html" class="font-default">
                                                <h5>{{ $product->name }}</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                        @break
                    @endif
                @endforeach

            </div>
            <div class="btn-box text-center">
                <a href="{{ route('shop.index') }}" class="btn1">
                    Show All Products
                </a>
            </div>
        </div>
    </div>
</section>

<!-- category section start -->

<!-- category section end -->


<style>
    .products-c .bg-size {
        background-position: center 0 !important;
    }
</style>
@foreach ($categories as $category)
    <section class="product ratio_asos overflow-hidden pb-5 container-fluid-lg">
        <div class="px-0 container-fluid p-sm-0">
            <div class="row m-0">
                <div class="col-12 p-0">
                    <div class="title-3 text-center">
                        <h2>Product Top Deals</h2>
                        <h5 class="theme-color">Our {{ $category->name }} Collection</h5>
                    </div>
                </div>

                <div class="our-product products-c">
                    @foreach ($products as $product)
                        @if ($product->category_id == $category->id)
                            <div>
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <a href="product/details.html">
                                            <img src="{{ asset('assets/images/' . $product->image) }}"
                                                class="w-100 bg-img blur-up lazyload" alt="">
                                        </a>
                                        <div class="circle-shape"></div>
                                        <span class="background-text">Fashion</span>
                                        <div class="label-block">
                                            <span class="label label-theme">{{ $product->discount }}% Off</span>
                                        </div>
                                        <div class="cart-wrap">
                                            <form action="" method="post">
                                                @csrf
                                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                <input type="hidden" name="price" value="{{ $product->price }}">
                                                <input type="hidden" name="quantity" value="1">
                                                <button type="submit" formaction="{{ route('cartStore') }}" style="border: 0px;outline:0px;">
                                                    <i data-feather="shopping-cart"></i>
                                                </button>
                                                <button type="submit" formaction="{{ route('show')}}" style="border: 0px;outline:0px;">
                                                    <i data-feather="eye"></i>
                                                </button>
                                                <button type="submit" formaction="{{ route('wishlistStore') }}" style="border: 0px;outline:0px;">
                                                    <i data-feather="heart"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="product-style-3 product-style-chair">
                                        <div class="product-title d-block mb-0">
                                            <div class="r-price">
                                                <div class="theme-color">${{ $product->price }}</div>
                                                <div class="main-price">
                                                    <ul class="rating mb-1 mt-0">
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <p class="font-light mb-sm-2 mb-0">Multicolor Dress</p>
                                            <a href="product/details.html" class="font-default">
                                                <h5>{{ $product->name }}</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach

                </div>
                <div class="btn-box text-center">
                    <a href="{{ route('shop.index') }}" class="btn1">
                        Show {{ $category->name }} Products
                    </a>
                </div>
            </div>
        </div>
    </section>
@endforeach
<div id="qvmodal"></div>

<footer class="footer-sm-space mt-5">
    <div class="main-footer">
        <div class="container-fluid-lg">
            <div class="row gy-4">
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="footer-contact">
                        <div class="brand-logo">
                            <a href="" class="footer-logo float-start">
                                <img src="{{ asset('assetUser/images/logo.png') }}"
                                    class="f-logo img-fluid blur-up lazyload" alt="logo">
                            </a>
                        </div>
                        <ul class="contact-lists" style="clear:both;">
                            <li>
                                <span><b>phone:</b> <span class="font-light"> +1 0000000000</span></span>
                            </li>
                            <li>
                                <span><b>Address:</b><span class="font-light"> NIT, Faridabad, Haryana,
                                        India</span></span>
                            </li>
                            <li>
                                <span><b>Email:</b><span class="font-light">
                                        contact@surfsidemedia.in</span></span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="footer-links">
                        <div class="footer-title">
                            <h3>About us</h3>
                        </div>
                        <div class="footer-content">
                            <ul>
                                <li>
                                    <a href="index.htm" class="font-dark">Home</a>
                                </li>
                                <li>
                                    <a href="shop.html" class="font-dark">Shop</a>
                                </li>
                                <li>
                                    <a href="about-us.html" class="font-dark">About Us</a>
                                </li>
                                <li>
                                    <a href="#" class="font-dark">Blog</a>
                                </li>
                                <li>
                                    <a href="contact-us.html" class="font-dark">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                    <div class="footer-links">
                        <div class="footer-title">
                            <h3>New Categories</h3>
                        </div>
                        <div class="footer-content">
                            <ul>
                                <li>
                                    <a href="shop.html" class="font-dark">Latest Shoes</a>
                                </li>
                                <li>
                                    <a href="shop.html" class="font-dark">Branded Jeans</a>
                                </li>
                                <li>
                                    <a href="shop.html" class="font-dark">New Jackets</a>
                                </li>
                                <li>
                                    <a href="shop.html" class="font-dark">Colorfull Hoodies</a>
                                </li>
                                <li>
                                    <a href="shop.html" class="font-dark">Shiner Goggles</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                    <div class="footer-links">
                        <div class="footer-title">
                            <h3>Get Help</h3>
                        </div>
                        <div class="footer-content">
                            <ul>
                                <li>
                                    <a href="#" class="font-dark">Your Orders</a>
                                </li>
                                <li>
                                    <a href="#" class="font-dark">Your Account</a>
                                </li>
                                <li>
                                    <a href="#" class="font-dark">Track Orders</a>
                                </li>
                                <li>
                                    <a href="#" class="font-dark">Your Wishlist</a>
                                </li>
                                <li>
                                    <a href="#" class="font-dark">Shopping FAQs</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 d-none d-sm-block">
                    <div class="footer-newsletter">
                        <h3>Let’s stay in touch</h3>
                        <div class="form-newsletter">
                            <div class="input-group mb-4">
                                <input type="text" class="form-control color-4"
                                    placeholder="Your Email Address">
                                <span class="input-group-text" id="basic-addon4"><i
                                        class="fas fa-arrow-right"></i></span>
                            </div>
                            <p class="font-dark mb-0">Keep up to date with our latest news and special offers.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sub-footer">
        <div class="container">
            <div class="row gy-3">
                <div class="col-md-6">
                    <ul>
                        <li class="font-dark">We accept:</li>
                        <li>
                            <a href="javascript:void(0)">
                                <img src="{{ asset('assetUser/images/payment-icon/1.jpg') }}"
                                    class="img-fluid blur-up lazyload" alt="payment icon">
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <img src="{{ asset('assetUser/images/payment-icon/2.jpg') }}"
                                    class="img-fluid blur-up lazyload" alt="payment icon">
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <img src="{{ asset('assetUser/images/payment-icon/3.jpg') }}"
                                    class="img-fluid blur-up lazyload" alt="payment icon">
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <img src="{{ asset('assetUser/images/payment-icon/4.jpg') }}"
                                    class="img-fluid blur-up lazyload" alt="payment icon">
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <p class="mb-0 font-dark">© 2023, Surfside Media.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="modal fade newletter-modal" id="newsletter">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content ">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <img src="{{ asset('assetUser/images/newletter-icon.png') }}" class="img-fluid blur-up lazyload"
                    alt="">
                <div class="modal-title">
                    <h2 class="tt-title">Sign up for our Newsletter!</h2>
                    <p class="font-light">Never miss any new updates or products we reveal, stay up to date.</p>
                    <p class="font-light">Oh, and it's free!</p>

                    <div class="input-group mb-3">
                        <input placeholder="Email" class="form-control" type="text">
                    </div>

                    <div class="cancel-button text-center">
                        <button class="btn default-theme w-100" data-bs-dismiss="modal"
                            type="button">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade cart-modal" id="addtocart" tabindex="-1" role="dialog" aria-label="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content ">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div class="modal-contain">
                    <div>
                        <div class="modal-messages">
                            <i class="fas fa-check"></i> 3-stripes full-zip hoodie successfully added to
                            you cart.
                        </div>
                        <div class="modal-product">
                            <div class="modal-contain-img">
                                <img src="{{ asset('assetUser/images/fashion/instagram/4.jpg') }}"
                                    class="img-fluid blur-up lazyload" alt="">
                            </div>
                            <div class="modal-contain-details">
                                <h4>Premier Cropped Skinny Jean</h4>
                                <p class="font-light my-2">Yellow, Qty : 3</p>
                                <div class="product-total">
                                    <h5>TOTAL : <span>$1,140.00</span></h5>
                                </div>
                                <div class="shop-cart-button mt-3">
                                    <a href="shop-left-sidebar.php"
                                        class="btn default-light-theme conti-button default-theme default-theme-2 rounded">CONTINUE
                                        SHOPPING</a>
                                    <a href="cart.php"
                                        class="btn default-light-theme conti-button default-theme default-theme-2 rounded">VIEW
                                        CART</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="ratio_asos mt-4">
                    <div class="container">
                        <div class="row m-0">
                            <div class="col-sm-12 p-0">
                                <div
                                    class="product-wrapper product-style-2 slide-4 p-0 light-arrow bottom-space spacing-slider">
                                    <div>
                                        <div class="product-box">
                                            <div class="img-wrapper">
                                                <div class="front">
                                                    <a href="product/details.html">
                                                        <img src="{{ asset('assetUser/images/fashion/product/front/1.jpg') }}"
                                                            class="bg-img blur-up lazyload" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-details text-center">
                                                <div class="rating-details d-block text-center">
                                                    <span class="font-light grid-content">B&Y Jacket</span>
                                                </div>
                                                <div class="main-price mt-0 d-block text-center">
                                                    <h3 class="theme-color">$78.00</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="product-box">
                                            <div class="img-wrapper">
                                                <div class="front">
                                                    <a href="product/details.html">
                                                        <img src="{{ asset('assetUser/images/fashion/product/front/2.jpg') }}"
                                                            class="bg-img blur-up lazyload" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-details text-center">
                                                <div class="rating-details d-block text-center">
                                                    <span class="font-light grid-content">B&Y Jacket</span>
                                                </div>
                                                <div class="main-price mt-0 d-block text-center">
                                                    <h3 class="theme-color">$78.00</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="product-box">
                                            <div class="img-wrapper">
                                                <div class="front">
                                                    <a href="product/details.html">
                                                        <img src="{{ asset('assetUser/images/fashion/product/front/3.jpg') }}"
                                                            class="bg-img blur-up lazyload" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-details text-center">
                                                <div class="rating-details d-block text-center">
                                                    <span class="font-light grid-content">B&Y Jacket</span>
                                                </div>
                                                <div class="main-price mt-0 d-block text-center">
                                                    <h3 class="theme-color">$78.00</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="product-box">
                                            <div class="img-wrapper">
                                                <div class="front">
                                                    <a href="product/details.html">
                                                        <img src="{{ asset('assetUser/images/fashion/product/front/4.jpg') }}"
                                                            class="bg-img blur-up lazyload" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-details text-center">
                                                <div class="rating-details d-block text-center">
                                                    <span class="font-light grid-content">B&Y Jacket</span>
                                                </div>
                                                <div class="main-price mt-0 d-block text-center">
                                                    <h3 class="theme-color">$78.00</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="tap-to-top">
    <a href="#home">
        <i class="fas fa-chevron-up"></i>
    </a>
</div>
<div class="bg-overlay"></div>
<script src="{{ asset('assetUser/js/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('assetUser/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assetUser/js/feather/feather.min.js') }}"></script>
<script src="{{ asset('assetUser/js/lazysizes.min.js') }}"></script>
<script src="{{ asset('assetUser/js/slick/slick.js') }}"></script>
<script src="{{ asset('assetUser/js/slick/slick-animation.min.js') }}"></script>
<script src="{{ asset('assetUser/js/slick/custom_slick.js') }}"></script>
<script src="{{ asset('assetUser/js/price-filter.js') }}"></script>
<script src="{{ asset('assetUser/js/ion.rangeSlider.min.js') }}"></script>
<script src="{{ asset('assetUser/js/filter.js') }}"></script>
<script src="{{ asset('assetUser/js/newsletter.js') }}"></script>
<script src="{{ asset('assetUser/js/cart_modal_resize.js') }}"></script>
<script src="{{ asset('assetUser/js/bootstrap/bootstrap-notify.min.js') }}"></script>
<script src="{{ asset('assetUser/js/theme-setting.js') }}"></script>
<script src="{{ asset('assetUser/js/script.js') }}"></script>
<script>
    $(function() {
        $('[data-bs-toggle="tooltip"]').tooltip()
    });
    $(".our-product").slick({
        dots: true,
        infinite: true,
        speed: 500,
        arrows: false,
        slidesToShow: 5,
        slidesToScroll: 1,
        responsive: [{
                breakpoint: 1630,
                settings: {
                    slidesToShow: 6,
                },
            },
            {
                breakpoint: 1367,
                settings: {
                    slidesToShow: 5,
                },
            },
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 4,
                },
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                },
            },
            {
                breakpoint: 740,
                settings: {
                    slidesToShow: 2,
                },
            },
            {
                breakpoint: 481,
                settings: {
                    slidesToShow: 2,
                },
            },
        ],
    });
</script>
</body>

</html>
