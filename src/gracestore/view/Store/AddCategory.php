@extend(StoreApp)

@build(title)
Add Category
@endbuild

@build(body)

<!-- inner content -->
<section class="inner-content">
    <div class="container">
        <div class="infomain">

            <h2 class="category-name">Create a category</h2>
        </div>


        <div class="product-main text-left">
            <div class="row">

                <div class="col-md-12 col-12">
                    <div class="card p-md-3">
                        <div class="card-body billing-new-address-form border-0 pt-0">
                            <form method="post" action="{! route('admin/create-category') !}" id="creAccount">
                                {! csrf !}
                                <div class="pinfo">

                                    <div class="row">

                                        <div class="col-lg-4 mb-4">
                                            <label for="category">Category name<span class="red">*</span></label>
                                            <input class="form-control" name="category" placeholder="" value="" required type="text" id="category">
                                        </div>

                                    </div>


                                </div>

                                <input type="submit" value="Submit" class="btn btn-red float-left">
                            </form>
                        </div>
                    </div>
                </div>

            </div>


        </div>

    </div>
</section>

@endbuild
