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

{!!  use src\gracestore\service\UserAuthSvc as UAS !!}
{!!  use src\gracestore\service\TemplateDataProvider as TDP !!}
{!!  $UAS = new UAS !!}
{!!  $TDP = new TDP !!}
{!!  $isAdmin = $UAS->isAdmin() !!}

<!-- Header Main -->
<header id="myHeader">

    <div class="container-fix">
        <div class="row">
            <div class="col-lg-2 col-sm-4 order-sm-2 order-lg-1 col-12">
                <div class="logo d-inline-block d-md-inline-block d-lg-inline"><a href="{! route('store') !}"><img src={! uresource('images/trends-logo.png') !} alt="trends" title="trends" class="img-fluid"></a></div>
            </div>
            <div class="col-lg-8 col-sm-4 order-sm-1 order-lg-2 col-4">
                <nav class="navbar navbar-expand-lg">

                    <button class="navbar-toggler offcanvas-toggle" type="button" data-toggle="offcanvas" data-target="#navbar-collapse">☰ <span>Menu</span></button>

                    <div class="navbar-offcanvas navbar-offcanvas-touch" id="navbar-collapse">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="{! route('store') !}">Home</a>
                            </li>


                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbardrop04" data-toggle="dropdown">
                                    Categories
                                </a>
                                <div class="dropdown-menu">

                                    @foreach($TDP->category() as $cat)

                                    <a class="dropdown-item" href={! route("store/cat/") !}{! $cat->id !}>{! $cat->name !}</a>

                                    @endforeach

                                    <hr>

                                    @if($isAdmin == true)
                                        <a class="dropdown-item" href="{! route('admin/add-category') !}">Add Category</a>
                                    @endif

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

                                                <li><a href={! route('logout') !} id="customer_login_link"><span>Logout</span></a></li>



                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>

                                    <div id="form-currency">
                                        <span class="text-ex">Currency: USD</span>

                                        <ul>
                                            <li>Total in Cart: ${! number_format($TDP->outstandingAmountInCart(), 2) !}</li>

                                        </ul>

                                    </div>
                                </li>

                            </ul>
                        </nav>
                    </div>
                    <div class="cart-container">
                        <div id="cart" class="btn-group btn-block">
                           @if($TDP->noItemsInCarts() > 0)
                                <a class="btn drop-btn" href={! route('store/cart') !}>
                                    <i class="icon-shopping-cart"></i> <span id="cart-total">{! $TDP->noItemsInCarts() !}</span>
                                </a>
                            @endif

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
