<!doctype html>
<html class="no-js" lang="">
    
<!-- Mirrored from themebeyond.com/pre/ganic-prev/ganic-live/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 May 2023 18:13:53 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Checkout</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="img/logo/favicon-icon.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/fontawesome-all.min.css">
        <link rel="stylesheet" href="css/jquery-ui.css">
        <link rel="stylesheet" href="css/flaticon.css">
        <link rel="stylesheet" href="css/aos.css">
        <link rel="stylesheet" href="css/slick.css">
        <link rel="stylesheet" href="css/default.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    </head>
    <body>

        <!-- preloader -->
        <div id="preloader">
            <div id="loading-center">
                <img src="img/logo/logo-loader.gif" alt="" id="loader">
            </div>
        </div>
        <!-- preloader-end -->


        <!-- Website Header -->
        <?php
            include 'website_header.php';
        ?>
        <!-- Website Header end -->



        <!-- main-area -->
        <main>

            <!-- breadcrumb-area -->
            <div class="breadcrumb-area breadcrumb-bg-two">
                <div class="container custom-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-content">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                        <li class="breadcrumb-item"><a href="index.html">Pages</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- breadcrumb-area-end -->

            <!-- checkout-area -->
            <div class="checkout-area pt-90 pb-90">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="checkout-progress-wrap">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="checkout-progress-step">
                                    <ul>
                                        <li class="active">
                                            <div class="icon"><i class="fas fa-check"></i></div>
                                            <span>Shipping</span>
                                        </li>
                                        <li>
                                            <div class="icon">2</div>
                                            <span>Order Successful</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="checkout-form-wrap">
                                <form action="#">
                                    <div class="checkout-form-top">
                                        <h5 class="title">Contact information</h5>
                                        <p>Already have an account? <a href="contact.html">Log in</a></p>
                                    </div>
                                    <input type="text" placeholder="Email or Mobile Phone Number *">
                                    <div class="news-and-offers custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="nao">
                                        <label class="custom-control-label" for="nao">Keep me up to date on news and offers</label>
                                    </div>
                                    <div class="building-info-wrap">
                                        <h5 class="title">Billing Information</h5>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="text" placeholder="First Name *">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" placeholder="Last Name *">
                                            </div>
                                        </div>
                                        <input type="text" placeholder="Company Name ( optional )">
                                        <input type="text" placeholder="Country / Region *">
                                        <input type="text" placeholder="Street Address *">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="text" placeholder="Town City">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" placeholder="State *">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" placeholder="Postal zip">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" placeholder="State *">
                                            </div>
                                        </div>
                                        <div class="different-address-wrap">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="sda">
                                                <label class="custom-control-label" for="sda">Ship to a Different Address?</label>
                                            </div>
                                            <div class="account-create-info">
                                                <a href="contact.html">Create an Account <i class="fas fa-user"></i></a>
                                            </div>
                                        </div>
                                        <textarea name="message" id="message" placeholder="Order You Have Notes ( Optional )"></textarea>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="shop-cart-total order-summary-wrap">
                                <h3 class="title">Order Summary</h3>
                                <div class="os-products-item">
                                    <div class="thumb">
                                        <a href="shop-details.html"><img src="img/product/os-products-thumb.jpg" alt=""></a>
                                    </div>
                                    <div class="content">
                                        <h6 class="title"><a href="shop-details.html">Uncle Bens Vanla</a></h6>
                                        <span class="price">$3.50</span>
                                    </div>
                                    <div class="remove">x</div>
                                </div>
                                <div class="shop-cart-widget">
                                    <form action="#">
                                        <ul>
                                            <li class="sub-total"><span>Subtotal</span> $ 136.00</li>
                                            <li>
                                                <span>Shipping</span>
                                                <div class="shop-check-wrap">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                        <label class="custom-control-label" for="customCheck1">Free Shipping</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                        <label class="custom-control-label" for="customCheck2">LOCAL PICKUP: $5.00</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="cart-total-amount"><span>Total Price</span> <span class="amount">$ 151.00</span></li>
                                        </ul>
                                        <div class="payment-method-info">
                                            <div class="paypal-method-flex">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck5">
                                                    <label class="custom-control-label" for="customCheck5">Cash on delivery</label>
                                                    <p>Pay with cash upon delivery.</p>
                                                </div>
                                            </div>
                                            <div class="paypal-method-flex">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck6">
                                                    <label class="custom-control-label" for="customCheck6">PayPal</label>
                                                </div>
                                                <div class="paypal-logo"><img src="img/images/card.png" alt=""></div>
                                            </div>
                                        </div>
                                        <div class="payment-terms">
                                            <p>The purpose Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck7">
                                                <label class="custom-control-label" for="customCheck7">I agree to the website terms and conditions</label>
                                            </div>
                                        </div>
                                        <a href="checkout.html" class="btn">Place order</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- checkout-area-end -->

        </main>
        <!-- main-area-end -->


        <!-- footer-area -->
        <?php
            include 'website_footer.php';
        ?>
        <!-- footer-area-end -->


		<!-- JS here -->
        <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/vendor/jquery-3.6.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/jquery.countdown.min.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/ajax-form.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/aos.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>

</html>
