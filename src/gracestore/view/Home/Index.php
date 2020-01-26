@extend(OutSideAppTemplate)

@build(slider)

    <section class="banner-wrapper">

    <div class="container-fix">
        <div id="owl-banner" class="owl-carousel owl-theme">

            <div class="item">
                <img src={! uresource("images/slide-01.jpg") !} alt="" />
                <div class="item-caption">
                    <div class="container d-flex h-100">
                        <div class="align-self-center">
                            <!-- Applying animation to Caption using animate.css  -->
                            <!-- add class animated <animation-name> provided by animate.css  -->
                            <h3 class="animated fadeInDown">Our Store</h3>
                            <h2 class="animated fadeInDown">women/ men / children</h2>
                            <p class="animated fadeInUp">Simplicity is the ultimate sophistication</p>
<!--                            <a href="#" class="sp-btn animated flipInX delay-1">Shop Now <i class="icon-arrow"></i></a>-->
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</section>

@endbuild

@build(body)

    <!-- New arrival, Most view, sale section -->
    <section class="newarrival-wrapper">
        <div class="container">
            <div class="wel-blk">
                <h2><span>Welcome</span> prodcuts</h2>
                <p>trends notare quam littera gothica, quam nunc putamus parum claram anteposuerit litterarum formas.</p>
            </div>

            <div id="horizontalTab-arrival">
                <ul class="resp-tabs-list">
                    <li>New Arrivals</li>
                    <li>On sale</li>
                    <li>Most viewed</li>
                </ul>
                <div class="resp-tabs-container">
                    <div>
                        <div class="d-md-flex row">
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="product-layout product-grid">
                                    <div class="product-thumb">
                                        <div class="image">
                                            <a href="product-detail.html">
                                                <img class="img-fluid" src={! uresource("images/floaral-white-frock-266x372.jpg") !} alt="Floral White Frock">
                                            </a>

                                            <div class="action-links">
                                                <button class="btn-cart" type="button" title="Add to cart"><i class="icon-shopping-cart"></i></button>
                                                <button class="btn-wishlist" type="button" title="Add to Wish List"><i class="icon-heart-empty"></i></button>
                                                <button class="btn-quickview" type="button" title="Quick View" onclick="location.href='product-detail.html'"><i class="icon-search"></i></button>
                                            </div>
                                            <a href="product-detail.html"><div class="overlay"><span class="sr-only">overlay bg</span></div></a>
                                        </div>
                                        <!-- image -->
                                        <div class="caption">
                                            <h4 class="product-name">
                                                <a href="product-detail.html">Dras neque ullam te ullam tonc orperoncorper</a>
                                            </h4>
                                            <p class="price">
                                                <span class="price-new">$337.00</span>
                                                <span class="price-old">$450.00</span>
                                            </p>
                                            <div class="ratings">
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                            </div>
                                        </div>
                                        <!-- caption -->
                                    </div>
                                    <!-- product-thumb -->
                                </div>
                                <!-- product-layout -->
                            </div>

                            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="product-layout product-grid">
                                    <div class="product-thumb">
                                        <div class="image">
                                            <a href="product-detail.html">
                                                <img class="img-fluid" src={! uresource("images/blue-frock-266x372.jpg") !} alt="blue frock">
                                            </a>

                                            <div class="action-links">
                                                <button class="btn-cart" type="button" title="Add to cart"><i class="icon-shopping-cart"></i></button>
                                                <button class="btn-wishlist" type="button" title="Add to Wish List"><i class="icon-heart-empty"></i></button>
                                                <button class="btn-quickview" type="button" title="Quick View" onclick="location.href='product-detail.html'"><i class="icon-search"></i></button>
                                            </div>
                                            <a href="product-detail.html"><div class="overlay"><span class="sr-only">overlay bg</span></div></a>
                                        </div>
                                        <!-- image -->
                                        <div class="caption">
                                            <h4 class="product-name">
                                                <a href="product-detail.html">Dras neque ullam te ullam tonc orperoncorper</a>
                                            </h4>
                                            <p class="price">
                                                <span class="price-new">$337.00</span>
                                                <span class="price-old">$450.00</span>
                                            </p>
                                            <div class="ratings">
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                            </div>
                                        </div>
                                        <!-- caption -->
                                    </div>
                                    <!-- product-thumb -->
                                </div>
                                <!-- product-layout -->
                            </div>

                            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="product-layout product-grid">
                                    <div class="product-thumb">
                                        <div class="image">
                                            <a href="product-detail.html">
                                                <img class="img-fluid" src={! uresource("images/man-suit-266x372.jpg") !} alt="man suit">
                                            </a>

                                            <div class="action-links">
                                                <button class="btn-cart" type="button" title="Add to cart"><i class="icon-shopping-cart"></i></button>
                                                <button class="btn-wishlist" type="button" title="Add to Wish List"><i class="icon-heart-empty"></i></button>
                                                <button class="btn-quickview" type="button" title="Quick View" onclick="location.href='product-detail.html'"><i class="icon-search"></i></button>
                                            </div>
                                            <a href="product-detail.html"><div class="overlay"><span class="sr-only">overlay bg</span></div></a>
                                        </div>
                                        <!-- image -->
                                        <div class="caption">
                                            <h4 class="product-name">
                                                <a href="product-detail.html">Dras neque ullam te ullam tonc orperoncorper</a>
                                            </h4>
                                            <p class="price">
                                                <span class="price-new">$337.00</span>
                                                <span class="price-old">$450.00</span>
                                            </p>
                                            <div class="ratings">
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                            </div>

                                        </div>
                                        <!-- caption -->
                                    </div>
                                    <!-- product-thumb -->
                                </div>
                                <!-- product-layout -->
                            </div>

                            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="product-layout product-grid">
                                    <div class="product-thumb">
                                        <div class="image">
                                            <a href="product-detail.html">
                                                <img class="img-fluid" src={! uresource("images/funky-tshirt-266x372.jpg") !} alt="funky tshirt">
                                            </a>

                                            <div class="action-links">
                                                <button class="btn-cart" type="button" title="Add to cart"><i class="icon-shopping-cart"></i></button>
                                                <button class="btn-wishlist" type="button" title="Add to Wish List"><i class="icon-heart-empty"></i></button>
                                                <button class="btn-quickview" type="button" title="Quick View" onclick="location.href='product-detail.html'"><i class="icon-search"></i></button>
                                            </div>
                                            <a href="product-detail.html"><div class="overlay"><span class="sr-only">overlay bg</span></div></a>
                                        </div>
                                        <!-- image -->
                                        <div class="caption">
                                            <h4 class="product-name">
                                                <a href="product-detail.html">Dras neque ullam te ullam tonc orperoncorper</a>
                                            </h4>
                                            <p class="price">
                                                <span class="price-new">$337.00</span>
                                                <span class="price-old">$450.00</span>
                                            </p>
                                            <div class="ratings">
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                            </div>
                                        </div>
                                        <!-- caption -->
                                    </div>
                                    <!-- product-thumb -->
                                </div>
                                <!-- product-layout -->
                            </div>

                            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="product-layout product-grid">
                                    <div class="product-thumb">
                                        <div class="image">
                                            <a href="product-detail.html">
                                                <img class="img-fluid" src={! uresource("images/virsexy--tshirt-266x372.jpg") !} alt="virsexy tshirt">
                                            </a>

                                            <div class="action-links">
                                                <button class="btn-cart" type="button" title="Add to cart"><i class="icon-shopping-cart"></i></button>
                                                <button class="btn-wishlist" type="button" title="Add to Wish List"><i class="icon-heart-empty"></i></button>
                                                <button class="btn-quickview" type="button" title="Quick View" onclick="location.href='product-detail.html'"><i class="icon-search"></i></button>
                                            </div>
                                            <a href="product-detail.html"><div class="overlay"><span class="sr-only">overlay bg</span></div></a>
                                        </div>
                                        <!-- image -->
                                        <div class="caption">
                                            <h4 class="product-name">
                                                <a href="product-detail.html">Dras neque ullam te ullam tonc orperoncorper</a>
                                            </h4>
                                            <p class="price">
                                                <span class="price-new">$337.00</span>
                                                <span class="price-old">$450.00</span>
                                            </p>
                                            <div class="ratings">
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                            </div>
                                        </div>
                                        <!-- caption -->
                                    </div>
                                    <!-- product-thumb -->
                                </div>
                                <!-- product-layout -->
                            </div>

                            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="product-layout product-grid">
                                    <div class="product-thumb">
                                        <div class="image">
                                            <a href="product-detail.html">
                                                <img class="img-fluid" src={! uresource("images/blue-suit-266x372.jpg") !} alt="blue suit">
                                            </a>

                                            <div class="action-links">
                                                <button class="btn-cart" type="button" title="Add to cart"><i class="icon-shopping-cart"></i></button>
                                                <button class="btn-wishlist" type="button" title="Add to Wish List"><i class="icon-heart-empty"></i></button>
                                                <button class="btn-quickview" type="button" title="Quick View" onclick="location.href='product-detail.html'"><i class="icon-search"></i></button>
                                            </div>
                                            <a href="product-detail.html"><div class="overlay"><span class="sr-only">overlay bg</span></div></a>
                                        </div>
                                        <!-- image -->
                                        <div class="caption">
                                            <h4 class="product-name">
                                                <a href="product-detail.html">Dras neque ullam te ullam tonc orperoncorper</a>
                                            </h4>
                                            <p class="price">
                                                <span class="price-new">$337.00</span>
                                                <span class="price-old">$450.00</span>
                                            </p>
                                            <div class="ratings">
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                            </div>
                                        </div>
                                        <!-- caption -->
                                    </div>
                                    <!-- product-thumb -->
                                </div>
                                <!-- product-layout -->
                            </div>

                            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="product-layout product-grid">
                                    <div class="product-thumb">
                                        <div class="image">
                                            <a href="product-detail.html">
                                                <img class="img-fluid" src={! uresource("images/leas--tshirt-266x372.jpg") !} alt="leas tshirt">
                                            </a>

                                            <div class="action-links">
                                                <button class="btn-cart" type="button" title="Add to cart"><i class="icon-shopping-cart"></i></button>
                                                <button class="btn-wishlist" type="button" title="Add to Wish List"><i class="icon-heart-empty"></i></button>
                                                <button class="btn-quickview" type="button" title="Quick View" onclick="location.href='product-detail.html'"><i class="icon-search"></i></button>
                                            </div>
                                            <a href="product-detail.html"><div class="overlay"><span class="sr-only">overlay bg</span></div></a>
                                        </div>
                                        <!-- image -->
                                        <div class="caption">
                                            <h4 class="product-name">
                                                <a href="product-detail.html">Dras neque ullam te ullam tonc orperoncorper</a>
                                            </h4>
                                            <p class="price">
                                                <span class="price-new">$337.00</span>
                                                <span class="price-old">$450.00</span>
                                            </p>
                                            <div class="ratings">
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                            </div>
                                        </div>
                                        <!-- caption -->
                                    </div>
                                    <!-- product-thumb -->
                                </div>
                                <!-- product-layout -->
                            </div>

                            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="product-layout product-grid">
                                    <div class="product-thumb">
                                        <div class="image">
                                            <a href="product-detail.html">
                                                <img class="img-fluid" src={! uresource("images/pink--tshirt-266x372.jpg") !} alt="pink tshirt">
                                            </a>

                                            <div class="action-links">
                                                <button class="btn-cart" type="button" title="Add to cart"><i class="icon-shopping-cart"></i></button>
                                                <button class="btn-wishlist" type="button" title="Add to Wish List"><i class="icon-heart-empty"></i></button>
                                                <button class="btn-quickview" type="button" title="Quick View" onclick="location.href='product-detail.html'"><i class="icon-search"></i></button>
                                            </div>
                                            <a href="product-detail.html"><div class="overlay"><span class="sr-only">overlay bg</span></div></a>
                                            <div class="label-product label_sale">Sale</div>
                                        </div>
                                        <!-- image -->
                                        <div class="caption">
                                            <h4 class="product-name">
                                                <a href="product-detail.html">Dras neque ullam te ullam tonc orperoncorper</a>
                                            </h4>
                                            <p class="price">
                                                <span class="price-new">$337.00</span>
                                                <span class="price-old">$450.00</span>
                                            </p>
                                            <div class="ratings">
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                            </div>
                                        </div>
                                        <!-- caption -->
                                    </div>
                                    <!-- product-thumb -->
                                </div>
                                <!-- product-layout -->
                            </div>

                        </div>
                    </div>
                    <div>
                        <div class="d-md-flex row">
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="product-layout product-grid">
                                    <div class="product-thumb">
                                        <div class="image">
                                            <a href="product-detail.html">
                                                <img class="img-fluid" src={! uresource("images/floaral-white-frock-266x372.jpg") !} alt="Floral White Frock">
                                            </a>

                                            <div class="action-links">
                                                <button class="btn-cart" type="button" title="Add to cart"><i class="icon-shopping-cart"></i></button>
                                                <button class="btn-wishlist" type="button" title="Add to Wish List"><i class="icon-heart-empty"></i></button>
                                                <button class="btn-quickview" type="button" title="Quick View" onclick="location.href='product-detail.html'"><i class="icon-search"></i></button>
                                            </div>
                                            <a href="product-detail.html"><div class="overlay"><span class="sr-only">overlay bg</span></div></a>
                                        </div>
                                        <!-- image -->
                                        <div class="caption">
                                            <h4 class="product-name">
                                                <a href="product-detail.html">Dras neque ullam te ullam tonc orperoncorper</a>
                                            </h4>
                                            <p class="price">
                                                <span class="price-new">$337.00</span>
                                                <span class="price-old">$450.00</span>
                                            </p>
                                            <div class="ratings">
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                            </div>
                                        </div>
                                        <!-- caption -->
                                    </div>
                                    <!-- product-thumb -->
                                </div>
                                <!-- product-layout -->
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="product-layout product-grid">
                                    <div class="product-thumb">
                                        <div class="image">
                                            <a href="product-detail.html">
                                                <img class="img-fluid" src={! uresource("images/pink--tshirt-266x372.jpg") !} alt="pink tshirt">
                                            </a>

                                            <div class="action-links">
                                                <button class="btn-cart" type="button" title="Add to cart"><i class="icon-shopping-cart"></i></button>
                                                <button class="btn-wishlist" type="button" title="Add to Wish List"><i class="icon-heart-empty"></i></button>
                                                <button class="btn-quickview" type="button" title="Quick View" onclick="location.href='product-detail.html'"><i class="icon-search"></i></button>
                                            </div>
                                            <a href="product-detail.html"><div class="overlay"><span class="sr-only">overlay bg</span></div></a>
                                            <div class="label-product label_sale">Sale</div>
                                        </div>
                                        <!-- image -->
                                        <div class="caption">
                                            <h4 class="product-name">
                                                <a href="product-detail.html">Dras neque ullam te ullam tonc orperoncorper</a>
                                            </h4>
                                            <p class="price">
                                                <span class="price-new">$337.00</span>
                                                <span class="price-old">$450.00</span>
                                            </p>
                                            <div class="ratings">
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                            </div>
                                        </div>
                                        <!-- caption -->
                                    </div>
                                    <!-- product-thumb -->
                                </div>
                                <!-- product-layout -->
                            </div>

                            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="product-layout product-grid">
                                    <div class="product-thumb">
                                        <div class="image">
                                            <a href="product-detail.html">
                                                <img class="img-fluid" src={! uresource("images/blue-suit-266x372.jpg") !} alt="blue suit">
                                            </a>

                                            <div class="action-links">
                                                <button class="btn-cart" type="button" title="Add to cart"><i class="icon-shopping-cart"></i></button>
                                                <button class="btn-wishlist" type="button" title="Add to Wish List"><i class="icon-heart-empty"></i></button>
                                                <button class="btn-quickview" type="button" title="Quick View" onclick="location.href='product-detail.html'"><i class="icon-search"></i></button>
                                            </div>
                                            <a href="product-detail.html"><div class="overlay"><span class="sr-only">overlay bg</span></div></a>
                                        </div>
                                        <!-- image -->
                                        <div class="caption">
                                            <h4 class="product-name">
                                                <a href="product-detail.html">Dras neque ullam te ullam tonc orperoncorper</a>
                                            </h4>
                                            <p class="price">
                                                <span class="price-new">$337.00</span>
                                                <span class="price-old">$450.00</span>
                                            </p>
                                            <div class="ratings">
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                            </div>
                                        </div>
                                        <!-- caption -->
                                    </div>
                                    <!-- product-thumb -->
                                </div>
                                <!-- product-layout -->
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="product-layout product-grid">
                                    <div class="product-thumb">
                                        <div class="image">
                                            <a href="product-detail.html">
                                                <img class="img-fluid" src={! uresource("images/man-suit-266x372.jpg") !} alt="man suit">
                                            </a>

                                            <div class="action-links">
                                                <button class="btn-cart" type="button" title="Add to cart"><i class="icon-shopping-cart"></i></button>
                                                <button class="btn-wishlist" type="button" title="Add to Wish List"><i class="icon-heart-empty"></i></button>
                                                <button class="btn-quickview" type="button" title="Quick View" onclick="location.href='product-detail.html'"><i class="icon-search"></i></button>
                                            </div>
                                            <a href="product-detail.html"><div class="overlay"><span class="sr-only">overlay bg</span></div></a>
                                        </div>
                                        <!-- image -->
                                        <div class="caption">
                                            <h4 class="product-name">
                                                <a href="product-detail.html">Dras neque ullam te ullam tonc orperoncorper</a>
                                            </h4>
                                            <p class="price">
                                                <span class="price-new">$337.00</span>
                                                <span class="price-old">$450.00</span>
                                            </p>
                                            <div class="ratings">
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                            </div>
                                        </div>
                                        <!-- caption -->
                                    </div>
                                    <!-- product-thumb -->
                                </div>
                                <!-- product-layout -->
                            </div>

                            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="product-layout product-grid">
                                    <div class="product-thumb">
                                        <div class="image">
                                            <a href="product-detail.html">
                                                <img class="img-fluid" src={! uresource("images/funky-tshirt-266x372.jpg") !} alt="funky tshirt">
                                            </a>

                                            <div class="action-links">
                                                <button class="btn-cart" type="button" title="Add to cart"><i class="icon-shopping-cart"></i></button>
                                                <button class="btn-wishlist" type="button" title="Add to Wish List"><i class="icon-heart-empty"></i></button>
                                                <button class="btn-quickview" type="button" title="Quick View" onclick="location.href='product-detail.html'"><i class="icon-search"></i></button>
                                            </div>
                                            <a href="product-detail.html"><div class="overlay"><span class="sr-only">overlay bg</span></div></a>
                                        </div>
                                        <!-- image -->
                                        <div class="caption">
                                            <h4 class="product-name">
                                                <a href="product-detail.html">Dras neque ullam te ullam tonc orperoncorper</a>
                                            </h4>
                                            <p class="price">
                                                <span class="price-new">$337.00</span>
                                                <span class="price-old">$450.00</span>
                                            </p>
                                            <div class="ratings">
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                            </div>
                                        </div>
                                        <!-- caption -->
                                    </div>
                                    <!-- product-thumb -->
                                </div>
                                <!-- product-layout -->
                            </div>

                            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="product-layout product-grid">
                                    <div class="product-thumb">
                                        <div class="image">
                                            <a href="product-detail.html">
                                                <img class="img-fluid" src={! uresource("images/virsexy--tshirt-266x372.jpg") !} alt="virsexy tshirt">
                                            </a>

                                            <div class="action-links">
                                                <button class="btn-cart" type="button" title="Add to cart"><i class="icon-shopping-cart"></i></button>
                                                <button class="btn-wishlist" type="button" title="Add to Wish List"><i class="icon-heart-empty"></i></button>
                                                <button class="btn-quickview" type="button" title="Quick View" onclick="location.href='product-detail.html'"><i class="icon-search"></i></button>
                                            </div>
                                            <a href="product-detail.html"><div class="overlay"><span class="sr-only">overlay bg</span></div></a>
                                        </div>
                                        <!-- image -->
                                        <div class="caption">
                                            <h4 class="product-name">
                                                <a href="product-detail.html">Dras neque ullam te ullam tonc orperoncorper</a>
                                            </h4>
                                            <p class="price">
                                                <span class="price-new">$337.00</span>
                                                <span class="price-old">$450.00</span>
                                            </p>
                                            <div class="ratings">
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                            </div>
                                        </div>
                                        <!-- caption -->
                                    </div>
                                    <!-- product-thumb -->
                                </div>
                                <!-- product-layout -->
                            </div>

                            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="product-layout product-grid">
                                    <div class="product-thumb">
                                        <div class="image">
                                            <a href="product-detail.html">
                                                <img class="img-fluid" src={! uresource("images/leas--tshirt-266x372.jpg") !} alt="leas tshirt">
                                            </a>

                                            <div class="action-links">
                                                <button class="btn-cart" type="button" title="Add to cart"><i class="icon-shopping-cart"></i></button>
                                                <button class="btn-wishlist" type="button" title="Add to Wish List"><i class="icon-heart-empty"></i></button>
                                                <button class="btn-quickview" type="button" title="Quick View" onclick="location.href='product-detail.html'"><i class="icon-search"></i></button>
                                            </div>
                                            <a href="product-detail.html"><div class="overlay"><span class="sr-only">overlay bg</span></div></a>
                                        </div>
                                        <!-- image -->
                                        <div class="caption">
                                            <h4 class="product-name">
                                                <a href="product-detail.html">Dras neque ullam te ullam tonc orperoncorper</a>
                                            </h4>
                                            <p class="price">
                                                <span class="price-new">$337.00</span>
                                                <span class="price-old">$450.00</span>
                                            </p>
                                            <div class="ratings">
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                            </div>
                                        </div>
                                        <!-- caption -->
                                    </div>
                                    <!-- product-thumb -->
                                </div>
                                <!-- product-layout -->
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="product-layout product-grid">
                                    <div class="product-thumb">
                                        <div class="image">
                                            <a href="product-detail.html">
                                                <img class="img-fluid" src={! uresource("images/blue-frock-266x372.jpg") !} alt="blue frock">
                                            </a>

                                            <div class="action-links">
                                                <button class="btn-cart" type="button" title="Add to cart"><i class="icon-shopping-cart"></i></button>
                                                <button class="btn-wishlist" type="button" title="Add to Wish List"><i class="icon-heart-empty"></i></button>
                                                <button class="btn-quickview" type="button" title="Quick View" onclick="location.href='product-detail.html'"><i class="icon-search"></i></button>
                                            </div>
                                            <a href="product-detail.html"><div class="overlay"><span class="sr-only">overlay bg</span></div></a>
                                        </div>
                                        <!-- image -->
                                        <div class="caption">
                                            <h4 class="product-name">
                                                <a href="product-detail.html">Dras neque ullam te ullam tonc orperoncorper</a>
                                            </h4>
                                            <p class="price">
                                                <span class="price-new">$337.00</span>
                                                <span class="price-old">$450.00</span>
                                            </p>
                                            <div class="ratings">
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                            </div>
                                        </div>
                                        <!-- caption -->
                                    </div>
                                    <!-- product-thumb -->
                                </div>
                                <!-- product-layout -->
                            </div>

                        </div>
                    </div>
                    <div>
                        <div class="d-md-flex row">
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="product-layout product-grid">
                                    <div class="product-thumb">
                                        <div class="image">
                                            <a href="product-detail.html">
                                                <img class="img-fluid" src={! uresource("images/funky-tshirt-266x372.jpg") !} alt="funky tshirt">
                                            </a>

                                            <div class="action-links">
                                                <button class="btn-cart" type="button" title="Add to cart"><i class="icon-shopping-cart"></i></button>
                                                <button class="btn-wishlist" type="button" title="Add to Wish List"><i class="icon-heart-empty"></i></button>
                                                <button class="btn-quickview" type="button" title="Quick View" onclick="location.href='product-detail.html'"><i class="icon-search"></i></button>
                                            </div>
                                            <a href="product-detail.html"><div class="overlay"><span class="sr-only">overlay bg</span></div></a>
                                        </div>
                                        <!-- image -->
                                        <div class="caption">
                                            <h4 class="product-name">
                                                <a href="product-detail.html">Dras neque ullam te ullam tonc orperoncorper</a>
                                            </h4>
                                            <p class="price">
                                                <span class="price-new">$337.00</span>
                                                <span class="price-old">$450.00</span>
                                            </p>
                                            <div class="ratings">
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                            </div>
                                        </div>
                                        <!-- caption -->
                                    </div>
                                    <!-- product-thumb -->
                                </div>
                                <!-- product-layout -->
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="product-layout product-grid">
                                    <div class="product-thumb">
                                        <div class="image">
                                            <a href="product-detail.html">
                                                <img class="img-fluid" src={! uresource("images/pink--tshirt-266x372.jpg") !} alt="pink tshirt">
                                            </a>

                                            <div class="action-links">
                                                <button class="btn-cart" type="button" title="Add to cart"><i class="icon-shopping-cart"></i></button>
                                                <button class="btn-wishlist" type="button" title="Add to Wish List"><i class="icon-heart-empty"></i></button>
                                                <button class="btn-quickview" type="button" title="Quick View" onclick="location.href='product-detail.html'"><i class="icon-search"></i></button>
                                            </div>
                                            <a href="product-detail.html"><div class="overlay"><span class="sr-only">overlay bg</span></div></a>
                                            <div class="label-product label_sale">Sale</div>
                                        </div>
                                        <!-- image -->
                                        <div class="caption">
                                            <h4 class="product-name">
                                                <a href="product-detail.html">Dras neque ullam te ullam tonc orperoncorper</a>
                                            </h4>
                                            <p class="price">
                                                <span class="price-new">$337.00</span>
                                                <span class="price-old">$450.00</span>
                                            </p>
                                            <div class="ratings">
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                            </div>
                                        </div>
                                        <!-- caption -->
                                    </div>
                                    <!-- product-thumb -->
                                </div>
                                <!-- product-layout -->
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="product-layout product-grid">
                                    <div class="product-thumb">
                                        <div class="image">
                                            <a href="product-detail.html">
                                                <img class="img-fluid" src={! uresource("images/virsexy--tshirt-266x372.jpg") !} alt="virsexy tshirt">
                                            </a>

                                            <div class="action-links">
                                                <button class="btn-cart" type="button" title="Add to cart"><i class="icon-shopping-cart"></i></button>
                                                <button class="btn-wishlist" type="button" title="Add to Wish List"><i class="icon-heart-empty"></i></button>
                                                <button class="btn-quickview" type="button" title="Quick View" onclick="location.href='product-detail.html'"><i class="icon-search"></i></button>
                                            </div>
                                            <a href="product-detail.html"><div class="overlay"><span class="sr-only">overlay bg</span></div></a>
                                        </div>
                                        <!-- image -->
                                        <div class="caption">
                                            <h4 class="product-name">
                                                <a href="product-detail.html">Dras neque ullam te ullam tonc orperoncorper</a>
                                            </h4>
                                            <p class="price">
                                                <span class="price-new">$337.00</span>
                                                <span class="price-old">$450.00</span>
                                            </p>
                                            <div class="ratings">
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                            </div>
                                        </div>
                                        <!-- caption -->
                                    </div>
                                    <!-- product-thumb -->
                                </div>
                                <!-- product-layout -->
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="product-layout product-grid">
                                    <div class="product-thumb">
                                        <div class="image">
                                            <a href="product-detail.html">
                                                <img class="img-fluid" src={! uresource("images/floaral-white-frock-266x372.jpg") !} alt="Floral White Frock">
                                            </a>

                                            <div class="action-links">
                                                <button class="btn-cart" type="button" title="Add to cart"><i class="icon-shopping-cart"></i></button>
                                                <button class="btn-wishlist" type="button" title="Add to Wish List"><i class="icon-heart-empty"></i></button>
                                                <button class="btn-quickview" type="button" title="Quick View" onclick="location.href='product-detail.html'"><i class="icon-search"></i></button>
                                            </div>
                                            <a href="product-detail.html"><div class="overlay"><span class="sr-only">overlay bg</span></div></a>
                                        </div>
                                        <!-- image -->
                                        <div class="caption">
                                            <h4 class="product-name">
                                                <a href="product-detail.html">Dras neque ullam te ullam tonc orperoncorper</a>
                                            </h4>
                                            <p class="price">
                                                <span class="price-new">$337.00</span>
                                                <span class="price-old">$450.00</span>
                                            </p>
                                            <div class="ratings">
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                            </div>
                                        </div>
                                        <!-- caption -->
                                    </div>
                                    <!-- product-thumb -->
                                </div>
                                <!-- product-layout -->
                            </div>

                            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="product-layout product-grid">
                                    <div class="product-thumb">
                                        <div class="image">
                                            <a href="product-detail.html">
                                                <img class="img-fluid" src={! uresource("images/blue-frock-266x372.jpg") !} alt="blue frock">
                                            </a>

                                            <div class="action-links">
                                                <button class="btn-cart" type="button" title="Add to cart"><i class="icon-shopping-cart"></i></button>
                                                <button class="btn-wishlist" type="button" title="Add to Wish List"><i class="icon-heart-empty"></i></button>
                                                <button class="btn-quickview" type="button" title="Quick View" onclick="location.href='product-detail.html'"><i class="icon-search"></i></button>
                                            </div>
                                            <a href="product-detail.html"><div class="overlay"><span class="sr-only">overlay bg</span></div></a>
                                        </div>
                                        <!-- image -->
                                        <div class="caption">
                                            <h4 class="product-name">
                                                <a href="product-detail.html">Dras neque ullam te ullam tonc orperoncorper</a>
                                            </h4>
                                            <p class="price">
                                                <span class="price-new">$337.00</span>
                                                <span class="price-old">$450.00</span>
                                            </p>
                                            <div class="ratings">
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                            </div>
                                        </div>
                                        <!-- caption -->
                                    </div>
                                    <!-- product-thumb -->
                                </div>
                                <!-- product-layout -->
                            </div>

                            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="product-layout product-grid">
                                    <div class="product-thumb">
                                        <div class="image">
                                            <a href="product-detail.html">
                                                <img class="img-fluid" src={! uresource("images/man-suit-266x372.jpg") !} alt="man suit">
                                            </a>

                                            <div class="action-links">
                                                <button class="btn-cart" type="button" title="Add to cart"><i class="icon-shopping-cart"></i></button>
                                                <button class="btn-wishlist" type="button" title="Add to Wish List"><i class="icon-heart-empty"></i></button>
                                                <button class="btn-quickview" type="button" title="Quick View" onclick="location.href='product-detail.html'"><i class="icon-search"></i></button>
                                            </div>
                                            <a href="product-detail.html"><div class="overlay"><span class="sr-only">overlay bg</span></div></a>
                                        </div>
                                        <!-- image -->
                                        <div class="caption">
                                            <h4 class="product-name">
                                                <a href="product-detail.html">Dras neque ullam te ullam tonc orperoncorper</a>
                                            </h4>
                                            <p class="price">
                                                <span class="price-new">$337.00</span>
                                                <span class="price-old">$450.00</span>
                                            </p>
                                            <div class="ratings">
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                            </div>
                                        </div>
                                        <!-- caption -->
                                    </div>
                                    <!-- product-thumb -->
                                </div>
                                <!-- product-layout -->
                            </div>

                            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="product-layout product-grid">
                                    <div class="product-thumb">
                                        <div class="image">
                                            <a href="product-detail.html">
                                                <img class="img-fluid" src={! uresource("images/blue-suit-266x372.jpg") !} alt="blue suit">
                                            </a>

                                            <div class="action-links">
                                                <button class="btn-cart" type="button" title="Add to cart"><i class="icon-shopping-cart"></i></button>
                                                <button class="btn-wishlist" type="button" title="Add to Wish List"><i class="icon-heart-empty"></i></button>
                                                <button class="btn-quickview" type="button" title="Quick View" onclick="location.href='product-detail.html'"><i class="icon-search"></i></button>
                                            </div>
                                            <a href="product-detail.html"><div class="overlay"><span class="sr-only">overlay bg</span></div></a>
                                        </div>
                                        <!-- image -->
                                        <div class="caption">
                                            <h4 class="product-name">
                                                <a href="product-detail.html">Dras neque ullam te ullam tonc orperoncorper</a>
                                            </h4>
                                            <p class="price">
                                                <span class="price-new">$337.00</span>
                                                <span class="price-old">$450.00</span>
                                            </p>
                                            <div class="ratings">
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                            </div>
                                        </div>
                                        <!-- caption -->
                                    </div>
                                    <!-- product-thumb -->
                                </div>
                                <!-- product-layout -->
                            </div>

                            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="product-layout product-grid">
                                    <div class="product-thumb">
                                        <div class="image">
                                            <a href="product-detail.html">
                                                <img class="img-fluid" src={! uresource("images/leas--tshirt-266x372.jpg") !} alt="leas tshirt">
                                            </a>

                                            <div class="action-links">
                                                <button class="btn-cart" type="button" title="Add to cart"><i class="icon-shopping-cart"></i></button>
                                                <button class="btn-wishlist" type="button" title="Add to Wish List"><i class="icon-heart-empty"></i></button>
                                                <button class="btn-quickview" type="button" title="Quick View" onclick="location.href='product-detail.html'"><i class="icon-search"></i></button>
                                            </div>
                                            <a href="product-detail.html"><div class="overlay"><span class="sr-only">overlay bg</span></div></a>
                                        </div>
                                        <!-- image -->
                                        <div class="caption">
                                            <h4 class="product-name">
                                                <a href="product-detail.html">Dras neque ullam te ullam tonc orperoncorper</a>
                                            </h4>
                                            <p class="price">
                                                <span class="price-new">$337.00</span>
                                                <span class="price-old">$450.00</span>
                                            </p>
                                            <div class="ratings">
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                                <i class="icon-bookmark-button"></i>
                                            </div>
                                        </div>
                                        <!-- caption -->
                                    </div>
                                    <!-- product-thumb -->
                                </div>
                                <!-- product-layout -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <!-- Feature area -->
    <section class="feature-area">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-3 d-flex">
                    <div class="inner-sin-feature">
                        <div class="icon d-inline-block">
                            <i class="icon-delivery-truck"></i>
                        </div>
                        <div class="f-content">
                            <h6>FREE SHIPPING</h6>
                            <p>Free shipping on all order</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 d-flex">
                    <div class="inner-sin-feature">
                        <div class="icon d-inline-block">
                            <i class="icon-call-center-worker-with-headset"></i>
                        </div>
                        <div class="f-content">
                            <h6>ONLINE SUPPORT</h6>
                            <p>Online support 24 hours</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 d-flex">
                    <div class="inner-sin-feature">
                        <div class="icon d-inline-block">
                            <i class="icon-money"></i>
                        </div>
                        <div class="f-content">
                            <h6>MONEY RETURN</h6>
                            <p>Back guarantee under 5 days</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 d-flex">
                    <div class="inner-sin-feature">
                        <div class="icon d-inline-block">
                            <i class="icon-percentage"></i>
                        </div>
                        <div class="f-content">
                            <h6>MEMBER DISCOUNT</h6>
                            <p>Onevery order over $150</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endbuild
