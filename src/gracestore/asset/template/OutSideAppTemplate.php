<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="">
    <title>Store | @section(title) </title>
    <!-- bootstrap -->
    <link href={! uresource("css/bootstrap.min.css") !} rel="stylesheet">
    <link rel="stylesheet" href={! uresource("css/bootstrap.offcanvas.min.css") !} />
    <!-- Owl cerosel style -->
    <link rel="stylesheet" href={! uresource("css/owl.carousel.min.css") !}>
    <link rel="stylesheet" href={! uresource("css/owl.theme.default.min.css") !}>
    <link rel="stylesheet" href={! uresource("css/animate.css") !}>
    <!-- Responsive tab style -->
    <link rel="stylesheet" href={! uresource("css/easy-responsive-tabs.css") !}>
    <!-- price range style -->
    <link rel="stylesheet" type="text/css" href={! uresource("css/jquery-ui.css") !}>
    <!-- custom style -->
    <link href={! uresource("css/style.css") !} rel="stylesheet">
    <link href={! uresource("css/query.css") !} rel="stylesheet">
    <!-- Product detail zoom style -->
    <link rel="stylesheet" href={! uresource("css/easyzoom.css") !} />
    <!-- Website color switch style -->
    <link rel="stylesheet" href=(! uresource("css/color-switcher.css") !}>
    <!-- Font icon style -->
    <link href={! uresource("css/fontello.css") !} rel="stylesheet">
    <!-- Favicon and touch icons  -->
    <link rel="shortcut icon" href={! uresource("images/favicon.ico") !} type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" integrity="sha256-+N4/V/SbAFiW1MPBCXnfnP9QSN3+Keu+NlB+0ev/YKQ=" crossorigin="anonymous" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->
</head>

<body>
<!-- Loader -->
<div class="loader">
    <div class="loader-inner"></div>
</div>
<!-- /Loader -->

<!-- Header Main -->
<header id="myHeader">

    <div class="container-fix">
        <div class="row">
            <div class="col-lg-2 col-sm-4 order-sm-2 order-lg-1 col-12">
                <div class="logo d-inline-block d-md-inline-block d-lg-inline"><a href="{! route('') !}"><img src={! uresource('images/trends-logo.png') !} alt="trends" title="trends" class="img-fluid"></a></div>
            </div>
            <div class="col-lg-8 col-sm-4 order-sm-1 order-lg-2 col-4">
                <nav class="navbar navbar-expand-lg">

                    <button class="navbar-toggler offcanvas-toggle" type="button" data-toggle="offcanvas" data-target="#navbar-collapse">☰ <span>Menu</span></button>

                    <div class="navbar-offcanvas navbar-offcanvas-touch" id="navbar-collapse">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="index-2.html">Home</a>
                            </li>

                            <!-- Dropdown -->
                            <li class="nav-item dropdown mg-menu">
                                <a class="nav-link dropdown-toggle" href="product-listing.html" id="navbardrop" data-toggle="dropdown">
                                    Women
                                </a>
                                <div class="dropdown-menu" id="fix-heightW">
                                    <div class="row no-gutters d-flex">
                                        <div class="col-12 col-md-12 col-lg-8 add-pad">
                                            <div class="row">
                                                <div class="col-12 col-lg-4">
                                                    <span><a href="#">Clothing</a></span>
                                                    <a class="dropdown-item" href="#">Shirt</a>
                                                    <a class="dropdown-item" href="#">Tops</a>
                                                    <a class="dropdown-item" href="#">Tees</a>
                                                    <a class="dropdown-item" href="#">Suits & Blazers</a>
                                                    <a class="dropdown-item" href="#">Sportswear</a>
                                                    <a class="dropdown-item" href="#">Casual Shirt</a>
                                                    <a class="dropdown-item" href="#">Hoodies</a>
                                                    <a class="dropdown-item" href="#">Sweatshirts</a>
                                                    <a class="dropdown-item" href="#">Muscle Tee</a>
                                                    <a class="dropdown-item" href="#">Rikke T-Shirt</a>
                                                    <a class="dropdown-item" href="#">Dresses & Skirts</a>
                                                    <a class="dropdown-item" href="#">Jackets & Sweaters</a>
                                                </div>
                                                <div class="col-12 col-lg-4">
                                                    <span><a href="#">Handbags</a></span>
                                                    <a class="dropdown-item" href="#">Backpacks</a>
                                                    <a class="dropdown-item" href="#">Shoulder Bags</a>
                                                    <a class="dropdown-item" href="#">Wallets</a>
                                                    <a class="dropdown-item" href="#">Dresses & Skirts</a>
                                                    <a class="dropdown-item" href="#">Wristlets</a>
                                                    <a class="dropdown-item" href="#">Suits & Blazers</a>
                                                    <a class="dropdown-item" href="#">Other Women’s Clothing</a>
                                                    <a class="dropdown-item" href="#">Jeans, Pants & Leggings</a>
                                                    <a class="dropdown-item" href="#">Sportswear</a>
                                                    <a class="dropdown-item" href="#">Dresses & Skirts</a>
                                                    <a class="dropdown-item" href="#">Muscle Tee</a>
                                                    <a class="dropdown-item" href="#">Mia Top</a>
                                                </div>
                                                <div class="col-12 col-lg-4">
                                                    <span><a href="#">Footwear</a></span>
                                                    <a class="dropdown-item" href="#">Boot & Sandles</a>
                                                    <a class="dropdown-item" href="#">Sports Shoes</a>
                                                    <a class="dropdown-item" href="#">Jeans, Pants & Leggings</a>
                                                    <a class="dropdown-item" href="#">Pumps & Heels</a>
                                                    <a class="dropdown-item" href="#">Loafers & Slipons</a>
                                                    <a class="dropdown-item" href="#">Sportswear</a>
                                                    <a class="dropdown-item" href="#">Other Women’s Clothing</a>
                                                    <a class="dropdown-item" href="#">Mia Top</a>
                                                    <a class="dropdown-item" href="#">Muscle Tee</a>
                                                    <a class="dropdown-item" href="#">Rikke T-Shirt</a>
                                                    <a class="dropdown-item" href="#">Dresses & Skirts</a>
                                                    <a class="dropdown-item" href="#">Jackets & Sweaters</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-12 col-lg-4"><a href="#"><img src={! uresource("images/shop-banner.jpg") !} class="img-fluid float-right fix-img" alt=""></a></div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown mg-menu">
                                <a class="nav-link dropdown-toggle" href="product-listing.html" id="navbardrop02" data-toggle="dropdown">
                                    men
                                </a>
                                <div class="dropdown-menu" id="fix-heightM">
                                    <div class="row no-gutters d-flex">
                                        <div class="col-12 col-md-12 col-lg-8 add-pad">
                                            <div class="row">
                                                <div class="col-12 col-lg-4">
                                                    <span><a href="#">Men Clothing</a></span>
                                                    <a class="dropdown-item" href="#">Shirt</a>
                                                    <a class="dropdown-item" href="#">Tops</a>
                                                    <a class="dropdown-item" href="#">Tees</a>
                                                    <a class="dropdown-item" href="#">Suits & Blazers</a>
                                                    <a class="dropdown-item" href="#">Sportswear</a>
                                                    <a class="dropdown-item" href="#">Casual Shirt</a>
                                                    <a class="dropdown-item" href="#">Hoodies</a>
                                                    <a class="dropdown-item" href="#">Sweatshirts</a>
                                                    <a class="dropdown-item" href="#">Muscle Tee</a>
                                                    <a class="dropdown-item" href="#">Rikke T-Shirt</a>
                                                    <a class="dropdown-item" href="#">Dresses & Skirts</a>
                                                    <a class="dropdown-item" href="#">Jackets & Sweaters</a>
                                                </div>
                                                <div class="col-12 col-lg-4">
                                                    <span><a href="#">Men accessories</a></span>
                                                    <a class="dropdown-item" href="#">Backpacks</a>
                                                    <a class="dropdown-item" href="#">Shoulder Bags</a>
                                                    <a class="dropdown-item" href="#">Wallets</a>
                                                    <a class="dropdown-item" href="#">Dresses & Skirts</a>
                                                    <a class="dropdown-item" href="#">Wristlets</a>
                                                    <a class="dropdown-item" href="#">Suits & Blazers</a>
                                                    <a class="dropdown-item" href="#">Other Women’s Clothing</a>
                                                    <a class="dropdown-item" href="#">Jeans, Pants & Leggings</a>
                                                    <a class="dropdown-item" href="#">Sportswear</a>
                                                    <a class="dropdown-item" href="#">Dresses & Skirts</a>
                                                    <a class="dropdown-item" href="#">Muscle Tee</a>
                                                    <a class="dropdown-item" href="#">Mia Top</a>
                                                </div>
                                                <div class="col-12 col-lg-4">
                                                    <span><a href="#">Footwear</a></span>
                                                    <a class="dropdown-item" href="#">Boot & Sandles</a>
                                                    <a class="dropdown-item" href="#">Sports Shoes</a>
                                                    <a class="dropdown-item" href="#">Jeans, Pants & Leggings</a>
                                                    <a class="dropdown-item" href="#">Pumps & Heels</a>
                                                    <a class="dropdown-item" href="#">Loafers & Slipons</a>
                                                    <a class="dropdown-item" href="#">Sportswear</a>
                                                    <a class="dropdown-item" href="#">Other Women’s Clothing</a>
                                                    <a class="dropdown-item" href="#">Mia Top</a>
                                                    <a class="dropdown-item" href="#">Muscle Tee</a>
                                                    <a class="dropdown-item" href="#">Rikke T-Shirt</a>
                                                    <a class="dropdown-item" href="#">Dresses & Skirts</a>
                                                    <a class="dropdown-item" href="#">Jackets & Sweaters</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-12 col-lg-4"><a href="#"><img src={! uresource("images/shop-banner.jpg") !} class="img-fluid  float-right fix-img" alt=""></a></div>

                                    </div>

                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbardrop03" data-toggle="dropdown">
                                    accessories
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Backpacks</a>
                                    <a class="dropdown-item" href="#">Shoulder Bags</a>
                                    <a class="dropdown-item" href="#">Wallets</a>
                                    <a class="dropdown-item" href="#">Dresses & Skirts</a>
                                    <a class="dropdown-item" href="#">Wristlets</a>
                                    <a class="dropdown-item" href="#">Suits & Blazers</a>
                                    <a class="dropdown-item" href="#">Other Women’s Clothing</a>
                                    <a class="dropdown-item" href="#">Jeans, Pants & Leggings</a>
                                    <a class="dropdown-item" href="#">Sportswear</a>
                                    <a class="dropdown-item" href="#">Dresses & Skirts</a>
                                    <a class="dropdown-item" href="#">Muscle Tee</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbardrop04" data-toggle="dropdown">
                                    Pages
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="about-us.html">About Us</a>
                                    <a class="dropdown-item" href="blog.html">Blog</a>
                                    <a class="dropdown-item" href="blog-detail.html">Blog Detail</a>
                                    <a class="dropdown-item" href="login.html">Login</a>
                                    <a class="dropdown-item" href="register.html">Register</a>
                                    <a class="dropdown-item" href="cart.html">Cart</a>
                                    <a class="dropdown-item" href="checkout.html">Checkout</a>
                                    <a class="dropdown-item" href="checkout-success.html">Checkout Success</a>
                                    <a class="dropdown-item" href="faq.html">Faq</a>
                                    <a class="dropdown-item" href="404.html">404</a>
                                </div>
                            </li>


                        </ul>
                    </div>
                </nav>
            </div>
            <div class="col-lg-2 col-sm-4 order-sm-3 order-lg-3 col-8">
                <div class="block-right">
                    <div class="setting" id="log">

                        <button class="btn drop-btn" data-boundary="log" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-menu"></i></button>
                        <nav id="top" class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu2">
                            <ul class="list-unstyled top-links">
                                <li>
                                    <div>
                                        <span class="text-ex">My Account</span>
                                        <div id="top-links">
                                            <ul class="ul-account list-unstyled">

                                                <li><a href={! route('sign-in') !} id="customer_login_link"><span>Sign in</span></a></li>

                                                <li><a href={! route('sign-up') !} id="customer_register_link"><span>Register</span></a></li>


                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>

                                    <div id="form-currency">
                                        <span class="text-ex">Currency: USD</span>


                                    </div>
                                </li>

                            </ul>
                        </nav>
                    </div>
                    <div class="cart-container">
                        <div id="cart" class="btn-group btn-block">
                            <button class="btn drop-btn" type="button" data-boundary="cart" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-shopping-cart"></i> <span id="cart-total">3</span>
                            </button>

                            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu3" id="carttoggle">

                                <li class="has-scroll">
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <td class="text-center">
                                                <a href="#">
                                                    <img class="cart-image" src={! uresource("images/floaral-white-frock-266x372.jpg") !} alt="floaral white frock" title="floaral white frock" />
                                                </a>
                                            </td>
                                            <td class="text-left info-item">
                                                <a class="cart-name" href="#">Kopo Designs Woolrich Klettersack Backpack</a>
                                                <p class="cart-quantity">&times;1</p>
                                                <p class="cart-price"><span class=money>$100.00</span></p>
                                            </td>
                                            <td class="text-center cart-close">
                                                <button type="button" onclick="" title="Remove" class="btn btn-danger btn-xs">
                                                    <i class="icon-close"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </li>

                                <li class="has-scroll">
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <td class="text-center">
                                                <a href="#">
                                                    <img class="cart-image" src={! uresource("images/pink--tshirt-266x372.jpg") !} alt="Pink Shirt" title="Pink Shirt" />
                                                </a>
                                            </td>
                                            <td class="text-left info-item">
                                                <a class="cart-name" href="#">Jopo Designs Woolrich Klettersack Backpack</a>
                                                <p class="cart-quantity">&times;1</p>
                                                <p class="cart-price"><span class=money>$100.00</span></p>
                                            </td>
                                            <td class="text-center cart-close">
                                                <button type="button" onclick="" title="Remove" class="btn btn-danger btn-xs">
                                                    <i class="icon-close"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </li>

                                <li class="has-scroll">
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <td class="text-center">
                                                <a href="#">
                                                    <img class="cart-image" src={! uresource("images/trend-tshirt-158x211.jpg") !} alt="trend tshirt" title="trend tshirt" />
                                                </a>
                                            </td>
                                            <td class="text-left info-item">
                                                <a class="cart-name" href="#">Iopo Designs Woolrich Klettersack Backpack</a>
                                                <p class="cart-quantity">&times;1</p>
                                                <p class="cart-price"><span class=money>$100.00</span></p>
                                            </td>
                                            <td class="text-center cart-close">
                                                <button type="button" onclick="" title="Remove" class="btn btn-danger btn-xs">
                                                    <i class="icon-close"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </li>

                                <li>
                                    <table class="table">
                                        <tr>
                                            <td class="text-left"><strong>Subtotal :</strong></td>
                                            <td class="text-right"><span class=money>$300.00</span></td>
                                        </tr>
                                    </table>
                                    <p class="text-center cart-button">
                                        <a href="cart.html">View Cart</a>
                                        <a href="checkout.html">Checkout</a>
                                    </p>
                                </li>
                            </ul>

                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

</header>
<!-- /Header Main -->

<!-- Content Main -->
<div class="main-content">
    <!-- Banner -->
    @section(slider)

    <!--Body: Dynamic Content-->
    @section(body)

    <!-- Footer area -->
    <section class="container-fix">
        <footer>
            <div class="container-fluid">
                <div class="row d-flex">
                    <div class="col-12 col-md-12 col-lg-3">
                        <div class="ft-logo"><a href="#"><img src={! uresource("images/trends-ft-logo.png") !} alt="Trends logo"></a></div>
                        <p>Copyright © 2020 by Store.<br>All Rights Reserved.</p>

                    </div>
                    <div class="col-12 col-md-12 col-lg-9">
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="ft-area">
                                    <h3>Quick Links</h3>
                                    <ul>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Our Office</a></li>
                                        <li><a href="#">Deliver</a></li>
                                        <li><a href="#">Store</a></li>
                                        <li><a href="#">Guarantee</a></li>
                                        <li><a href="#">Buy Gift card</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="ft-area">
                                    <h3>Information</h3>
                                    <ul>
                                        <li><a href="#">Track your order</a></li>
                                        <li><a href="#">Term</a></li>
                                        <li><a href="#">Conditions</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                        <li><a href="#">Manufactures</a></li>
                                        <li><a href="#">New brands</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 col-lg-6">
                                <div class="ft-area">
                                    <h3>Newsletter</h3>

                                    <div class="news-link">
                                        <form id="newsletter" method="post">
                                            <input type="email" required placeholder="Newsletter Signup">
                                            <span class="arrow"><input type="submit" name="subit" value=""></span>
                                        </form>
                                    </div>
                                    <div class="social-link">
                                        <ul>
                                            <li><a href="#"><i class="icon-facebook-letter-logo"></i></a></li>
                                            <li><a href="#"><i class="icon-twitter-logo-silhouette"></i></a></li>
                                            <li><a href="#"><i class="icon-instagram"></i></a></li>
                                            <li><a href="#"><i class="icon-pinterest"></i></a></li>
                                            <li><a href="#"><i class="icon-youtube"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </footer>
    </section>
</div>
<!-- /Content Main -->

<!-- Go to Top -->
<a href="#" class="scrollup"><i class="icon-arrow"></i></a>
<!-- /Go to Top -->

<!-- jquery first -->
<script src={! uresource("js/jquery.min.js") !}></script>
<!-- bootstrap -->
<script src={! uresource("js/popper.min.js") !}></script>
<script src={! uresource("js/bootstrap.min.js") !}></script>
<script src={! uresource("js/bootstrap.offcanvas.js") !}></script>
<!-- Owl carousel -->
<script src={! uresource("js/owl.carousel.min.js") !}></script>
<!-- Product image zoom -->
<script src={! uresource("js/easyzoom.js") !}></script>
<!-- Responsive tab -->
<script src={! uresource("js/easy-responsive-tabs.js") !}></script>
<!-- Custome scrollbar -->
<script src={! uresource("js/jquery.nicescroll.min.js") !}></script>
<!-- price range -->
<script src={! uresource("js/jquery-ui.js") !}></script>
<!-- Color switcher for all site sripts -->
<script src={! uresource("js/color-switcher.js") !}></script>
<!-- custom sripts -->
<script src={! uresource("js/custom.js") !}></script>

</body>
</html>
