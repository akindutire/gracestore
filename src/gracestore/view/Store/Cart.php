@extend(StoreApp)

@build(title)
My Cart
@endbuild

@build(body)

    <!-- inner content -->
    <section class="inner-content ">
    <div class="container">
        <div class="infomain">

            <h2 class="category-name">Your shopping cart</h2>
        </div>


        <div class="product-main text-left">
            <div class="row">
                <div class="col-12">
                    <table id="cartData" class="table table-striped table-condensed">
                        <thead class="thead-dark">
                        <tr>
<!--                            <th style="width:8%"></th>-->
                            <th style="width:12%">Product</th>
                            <th style="width:50%">Product name</th>
                            <th style="width:10%">Quantity</th>
                            <th style="width:10%">unit price</th>
                            <th style="width:10%">Total</th>

                        </tr>
                        </thead>

                        <tbody>

                        @foreach(data('cart') as $pro)

                            <tr>
<!--                            <td class="prod-cancel"><a href="#"><i class="icon-close"></i></a></td>-->
                            <td data-th="Product" class="d-none d-md-table-cell">
                                <div class="d-inline-block"><img src={! asset("products/$pro->pix") !} alt="Blue Frock" class="img-fluid" width="90"></div>
                            </td>
                            <td data-th="Product name">
                                <p><a href="#">{! $pro->name !}
                                    </a></p>
                            </td>
                            <td data-th="Quantity">{! $pro->qty !}</td>
                            <td data-th="unit price">${! intval($pro->netprice/$pro->qty) !} <span>x {! $pro->qty !}</span></td>
                            <td data-th="Total">$ {! number_format($pro->netprice,2) !}</td>
                        </tr>

                        @endforeach

                        </tbody>
                        <!--<tfoot>
                                <tr class="d-md-none">
                                    <td class="text-center"><strong>Total 1.99</strong></td>
                                </tr>
                                <tr>
                                    <td><a href="#" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
                                    <td colspan="2" class="hidden-xs"></td>
                                    <td class="hidden-xs text-center"><strong>Total $1.99</strong></td>
                                    <td><a href="#" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
                                </tr>
                            </tfoot>-->
                    </table>


                </div>


                <div class="col-12 col-md-6 col-lg-4 ml-auto pt-5 pb-4">


                    <div class="cart_totals">


                        <table id="shop_table" class="table  table-condensed text-left text-white">

                            <tr class="cart-total">
                                <th>Total</th>
                                <td>${! number_format($TDP->outstandingAmountInCart(), 2)    !}</td>
                            </tr>

                        </table>

                    </div>
                </div>
            </div>

<!--            <div class="row">-->
<!--                <div class="col-12 col-sm-12 col-md-5">-->
<!--                    <div class="proceed-to-checkout"><a class="checkout-button btn btn-outline-dark" href="#">Continue Shopping</a></div>-->
<!--                </div>-->
<!--                <div class="col-12 col-sm-12 col-md-7 text-right">-->
<!--                    <div class="proceed-to-checkout"><a class="checkout-button btn btn-outline-dark" href="#">Proceed to checkout</a></div>-->
<!--                    <div class="paypal-payment"><a href="#"><img src="images/paypal-batch.jpg" alt="Paypal"></a></div>-->
<!--                </div>-->
<!--            </div>-->

        </div>

    </div>
</section>

@endbuild
