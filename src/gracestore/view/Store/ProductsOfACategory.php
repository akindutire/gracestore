@extend(StoreApp)

@build(title)
{! data('cat-name') !} Products
@endbuild

@build(body)

<!-- New arrival, Most view, sale section -->
<section class="newarrival-wrapper">
    <div class="container">


        <div id="horizontalTab-arrival">
            <ul class="resp-tabs-list">
                <li>
                    {! data('cat-name') !} Products
                    @if($UAS->isAdmin())
                        <a href={! route('admin/add-product/') !}{! data('cat-id') !} class="btn btn-sm btn-danger"><i class="fa fa-plus"></i></a>
                    @endif
                </li>

            </ul>
            <div class="resp-tabs-container">
                <div>
                    <div class="d-md-flex row">

                        @foreach( data('products') as $pro )

                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="product-layout product-grid">
                                <div class="product-thumb">
                                    <div class="image">
                                        <a href={! route('store/product/') !}{! $pro->id !}>
                                            <img class="img-fluid" src={! asset("products/$pro->pix") !} alt="">
                                        </a>

                                        <div class="action-links">
                                            <button class="btn-quickview" type="button" title="Quick View" onclick="location.href='{! route('store/product/') !}{! $pro->id !}'"><i class="icon-search"></i></button>
                                        </div>
                                        <a href={! route('store/product/') !}{! $pro->id !}><div class="overlay"><span class="sr-only">overlay bg</span></div></a>
                                    </div>
                                    <!-- image -->
                                    <div class="caption">
                                        <h4 class="product-name">
                                            <a href={! route('store/product/') !}{! $pro->id !}>{! $pro->name !}--<b>{! $pro->cn !}</b></a>
                                        </h4>
                                        <p class="price">
                                            <span class="price-new">${! number_format($pro->price, 2) !}</span>
                                        </p>

                                    </div>
                                    <!-- caption -->
                                </div>
                                <!-- product-thumb -->
                            </div>
                            <!-- product-layout -->
                        </div>

                        @endforeach


                    </div>
                </div>

            </div>
        </div>

    </div>

</section>

@endbuild
