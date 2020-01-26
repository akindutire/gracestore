@extend(OutSideAppTemplate)

@build(title)
    Admin Reg
@endbuild

@build(body)

<!-- inner content -->
    <section class="inner-content">
    <div class="container">
        <div class="infomain">

            <h2 class="category-name">Create an Admin account</h2>
        </div>


        <div class="product-main text-left">
            <div class="row">

                <div class="col-md-12 col-12">
                    <div class="card p-md-3">
                        <div class="card-body billing-new-address-form border-0 pt-0">
                            <form method="post" action="{! route('admin/create-account') !}" id="creAccount">
                                {! csrf !}
                                <div class="pinfo">
                                    <h4 class="card-title">Personal Information</h4>

                                    <div class="row">
                                        <div class="col-lg-4 mb-4">
                                            <label for="firstname">Full Name <span class="red">*</span></label>
                                            <input class="form-control" name="fullname" placeholder="" value="" required type="text" id="fullname">
                                        </div>
                                        <div class="col-lg-4 mb-4">
                                            <label for="email">Email <span class="red">*</span> </label>
                                            <input class="form-control" placeholder="" value="" type="email" name="email" id="email" required>
                                        </div>
                                        <div class="col-lg-4 mb-4">
                                            <label for="password">Password <span class="red">*</span> </label>
                                            <input class="form-control" name="password" placeholder="" value="" type="password" id="password" required>
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
