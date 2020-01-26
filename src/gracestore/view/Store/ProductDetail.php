@extend(StoreApp)

@build(title)
{! data('product')->name !} Detail
@endbuild

@build(body)
{!! $pro = data('product') !!}

<!-- Inner Content -->
<section class="inner-content">
    <div class="container">


        <div class="product-main">
            <div class="row d-flex">
                <div class="col-md-6 col-12">
                    <div class="prod-gal">

                        <div id="sync1" class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="easyzoom easyzoom--overlay">
                                    <a href={! asset("products/$pro->pix") !}>
                                        <img src={! asset("products/$pro->pix") !} alt="white floral frock">
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="easyzoom easyzoom--overlay">
                                    <a href={! asset("products/$pro->pix") !}>
                                    <img src={! asset("products/$pro->pix") !} alt="white floral frock">
                                    </a>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="product-disarea">
                        <h2 class="product-name">{! $pro->name !}</h2>

                        <div class="brand">Brand : <span><a href="#">{! $pro->slug !}</a></span></div>
                        <p class="price">
                            <span class="price-new">${! number_format($pro->price, 2) !}</span>

                        </p>
                        <div class="short-des">
                            <p>{! $pro->description !}</p>
                        </div>

                        @if($pro->nos_in_stock > 0)
                            <div class="brand">Availability : <span class="stock"> {! $pro->nos_in_stock !} IN stock</span></div>
                        @else
                            <div class="brand">Availability : <span class="stock bg-danger">OUT OF stock</span></div>
                        @endif

                        <form action={! route('add-to-cart') !}/{! $pro->id !} id="form_buy" method="post">
                            {! csrf !}
                            <div class="form-group quantitypic">
                                <label>Qty : </label>
                                <input type="number" name="partridge" id="partridge" value="1" class="form-control">
                            </div>


                            <div class="form-group">
                                <button class="btn" id="addcart"><i class="icon-shopping-cart"></i> Add to cart</button>

                            </div>


                        </form>

                    </div>
                </div>
            </div>

            <div class="recent-tab">
                <h2>You may also like</h2>
                <div class="recentprod">
                    <div class="row d-flex">

                        @foreach( data('recommended-product') as $rec_pro )
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="product-thumb">
                                    <div class="image">
                                        <a href="#">
                                            <img class="img-fluid" src={! asset("products/$rec_pro->pix") !} alt="">
                                        </a>


                                        <a href=""><div class="overlay"><span class="sr-only">overlay bg</span></div></a>
                                    </div>
                                    <!-- image -->
                                    <div class="caption">
                                        <h4 class="product-name">
                                            <a href={! route('store/product/') !}{! $rec_pro->id !}>
                                                {! $rec_pro->name !}
                                            </a>
                                        </h4>
                                        <p class="price">
                                            <span class="price-new">${! number_format($rec_pro->price, 2) !}</span>

                                        </p>

                                    </div>
                                    <!-- caption -->
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>


@endbuild
