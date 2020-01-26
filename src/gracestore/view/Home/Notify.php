@extend(OutSideAppTemplate)

@build(title)
    Notification
@endbuild

@build(body)



<!-- Inner Content -->
<section class="inner-content">
    <div class="container">
        <div class="infomain">
            <h2 class="category-name">Notification</h2>
        </div>


        <div class="product-main text-left">

            <div class="row">
                <div class="col-12">
                    <div class="card  p-md-3">
                        <div class="card-body">

                            <p class="card-text text-lg-center">
                                @if(data('type') == 0)
                                    <i class="fa fa-times text-danger"></i>
                                @else
                                    <i class="fa fa-check text-success"></i>
                                @endif

                                {! data('message') !}
                            </p>
                            <hr class="mt-3 mb-4">
                        </div>
                    </div>
                </div>


            </div>


        </div>

    </div>
</section>


@endbuild
