<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="MkRqEzTGuoSx6LqJUm0OAKxSgNUYt26wTT7RMUZY">
    <link rel="manifest" href="manifest.js') }}on">
    <link rel="apple-touch-icon" href="{{ asset('assetUser/images/favicon.ico') }}">
    <link rel="icon" href="{{ asset('assetUser/images/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('assetUser/images/favicon.ico') }}" type="image/x-icon">
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

    <title>SurfsideMedia</title>

    <link id="rtl-link" rel="stylesheet" type="text/css" href="{{ asset('assetUser/css/vendors/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assetUser/css/vendors/ion.rangeSlider.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assetUser/css/vendors/font-awesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assetUser/css/vendors/feather-icon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assetUser/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assetUser/css/vendors/slick/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assetUser/css/vendors/slick/slick-theme.css') }}">
    <link id="color-link" rel="stylesheet" type="text/css" href="{{ asset('assetUser/css/demo4.css') }}">
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

</head>

<body class="theme-color4 light ltr">
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
            background: var(--theme-color);
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
    <header class="header-style-2" id="home">
        <div class="main-header navbar-searchbar">
            <div class="container-fluid-lg">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-menu">

                            <div class="menu-right">
                                <ul>


                                    <li class="onhover-dropdown theme-color">
                                        <div class="cart-media  name-usr">
                                            <i data-feather="user"></i>
                                        </div>
                                        <div class="onhover-div profile-dropdown">
                                            <ul>
                                                <li>
                                                    <a href="{{ route('login') }}" class="d-block">Login</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('register') }}" class="d-block">Register</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <style>
        input [type="text"]:focus,
        [type="email"]:focus,
        [type="url"]:focus,
        [type="password"]:focus,
        [type="number"]:focus,
        [type="date"]:focus,
        [type="datetime-local"]:focus,
        [type="month"]:focus,
        [type="search"]:focus,
        [type="tel"]:focus,
        [type="time"]:focus,
        [type="week"]:focus,
        [multiple]:focus,
        textarea:focus,
        select:focus {
            --tw-ring-color: transparent !important;
            border-color: transparent !important;
        }

        input [type="text"]:hover,
        [type="email"]:hover,
        [type="url"]:hover,
        [type="password"]:hover,
        [type="number"]:hover,
        [type="date"]:hover,
        [type="datetime-local"]:hover,
        [type="month"]:hover,
        [type="search"]:hover,
        [type="tel"]:hover,
        [type="time"]:hover,
        [type="week"]:hover,
        [multiple]:hover,
        textarea:hover,
        select:hover {
            --tw-ring-color: transparent !important;
            border-color: transparent !important;
        }

        input [type="text"]:active,
        [type="email"]:active,
        [type="url"]:active,
        [type="password"]:active,
        [type="number"]:active,
        [type="date"]:active,
        [type="datetime-local"]:active,
        [type="month"]:active,
        [type="search"]:active,
        [type="tel"]:active,
        [type="time"]:active,
        [type="week"]:active,
        [multiple]:active,
        textarea:active,
        select:active {
            --tw-ring-color: transparent !important;
            border-color: transparent !important;
        }

        .selectRole p{
            text-align: left;
            line-height: 60px;
    font-weight: 300;    font-family: "Roboto", sans-serif;
    font-size: calc(15px + (18 - 15) * ((100vw - 320px) / (1920 - 320)));
        }

        .select label {
            display: block;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .select div {
            margin-bottom: 10px;
        }

        .select input[type="radio"] {
            margin-right: 10px;
            vertical-align: middle;
        }

        .select label[for^="role-"] {
            vertical-align: middle;
            font-weight: normal;
        }
    </style>

    <!-- Log In Section Start -->
    <div class="login-section">
        <div class="materialContainer">
            <div class="box">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="login-title">
                        <h2>Register</h2>
                    </div>
                    {{-- <input type="hidden" name="roles[]" value="User"> --}}
                    <div class="input">
                        <label for="name">Username</label>
                        <input id="name" type="text"
                            class="form-control p-0 @error('name') is-invalid @enderror" name="name"
                            value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>

                    <div class="input">
                        <label for="emailname">Email</label>
                        <input id="emailname" type="email"
                            class="form-control p-0 @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>

                    <div class="input">
                        <label for="pass">Password</label>
                        <input id="pass" type="password"
                            class="form-control p-0 @error('password') is-invalid @enderror" name="password" required
                            autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="input">
                        <label for="compass">Confirm Password</label>
                        <input id="compass" type="password" class="form-control p-0" name="password_confirmation"
                            required autocomplete="new-password">

                    </div>
                    <div class="selectRole">
                        <p style="text-align:left;font-size:20px;">Select Role</p>

                        <input type="radio" name="roles[]" value="owner" style="display: inline">
                        <label for="owner" style="padding-right: 20px">Owner</label>
                        <input type="radio" name="roles[]" value="user" style="display: inline">
                        <label for="user">User</label><br>
                    </div>
                    {{-- <div class="select">
                        <label for="">Select Role</label>
                        <div>
                            <input type="radio" id="role-owner" class="form-control p-0" name="roles[]" value="owner" title="Select Owner role">
                            <label for="">Owner</label>
                        </div>
                        <div>
                            <input type="radio" id="role-user" class="form-control p-0" name="roles[]" value="user" title="Select User role">
                            <label for="">User</label>
                        </div>
                    </div> --}}
                    <a href="javascript:void(0)" class="pass-forgot">Forgot your password?</a>

                    <div class="button login">
                        <button type="submit">
                            <span> Sign up</span>
                            <i class="fa fa-check"></i>
                        </button>
                    </div>

                    <p>Already have an account? <a href="{{ route('register') }}" class="theme-color">Log In now</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
    <!-- Log In Section End -->

    <footer class="footer-sm-space mt-5">
        <div class="main-footer">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="footer-contact">
                            <div class="brand-logo">
                                <a href="index.htm" class="footer-logo float-start">
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
                                    <span><b>Email:</b><span class="font-light"> contact@surfsidemedia.in</span></span>
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
                                                        <a href="details.php">
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
                                                        <a href="details.php">
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
                                                        <a href="details.php">
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
                                                        <a href="details.php">
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
    </script>
</body>

</html>
