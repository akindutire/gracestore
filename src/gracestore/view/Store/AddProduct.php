@extend(StoreApp)

@build(title)
    {!! $title = data('cat-name') !!}
    Add  {! $title !} Products
@endbuild

@build(body)

<!-- inner content -->
<section class="inner-content">
    <div class="container">
        <div class="infomain">

            <h2 class="category-name">Add to {! data('cat-name') !}</h2>
        </div>


        <div class="product-main text-left">
            <div class="row">

                <div class="col-md-12 col-12">
                    <div class="card p-md-3">
                        <div class="card-body billing-new-address-form border-0 pt-0">
                            <form class="col-6 offset-3" enctype="multipart/form-data" method="post" action="{! route('admin/create-product/') !}{! data('cat-id') !}" id="creAccount">
                                {! csrf !}

                                    <div class="row">

                                        <div class="form-group col-12 mb-4">
                                            <label for="product">Product name<span class="red">*</span></label>
                                            <input class="form-control" name="product" placeholder="" value="" required type="text" id="product">
                                        </div>

                                        <div class="form-group col-12 mb-4">
                                            <label for="nos_in_stock">No in Stock<span class="red">*</span></label>
                                            <input class="form-control" name="nos_in_stock" placeholder="" value="" required type="number" id="nos_in_stock">
                                        </div>

                                        <div class="form-group col-12 mb-4">
                                            <label for="slug">Slug<span class="red">*</span></label>
                                            <input class="form-control" name="slug" placeholder="" value="" required type="text" id="slug"/>
                                        </div>

                                        <div class="form-group col-12 mb-4">
                                            <label for="price">Price(USD)<span class="red">*</span></label>
                                            <input class="form-control" name="price" placeholder="" value="" required type="number" id="price">
                                        </div>

                                        <div class="form-group col-12 mb-4">
                                            <label for="pix">Picture<span class="red">*</span></label>
                                            <input type="file" class="form-control" name="file" required id="pix">
                                        </div>

                                        <div class="form-group col-12 mb-4">
                                            <label for="description">Description<span class="red">*</span></label>
                                            <textarea class="form-control" name="description" required id="description"></textarea>
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
