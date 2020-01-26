@extend(OutSideAppTemplate)

@build(title)
    Login
@endbuild

@build(body)

    <!-- Inner Content -->
    <section class="inner-content">
        <div class="container">
            <div class="infomain">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Login</li>
                </ol>
                <h2 class="category-name">Login</h2>
            </div>


            <div class="product-main text-left">

                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="card  p-md-3">
                            <div class="card-body">
                                <h4 class="card-title pb-md-2">New Customers</h4>
                                <p class="card-text">By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
                                <hr class="mt-3 mb-4">
                                <form method="post" id="new_Customer">
                                    <input type="submit" class="btn btn-red" value="Create an account">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="card mt-3 mt-md-0 p-md-3">
                            <div class="card-body">
                                <form method="post" action="{! route('login-account') !}" id="registerCus">
                                    {! csrf !}
                                    <h4 class="card-title pb-md-2">Registered Customers</h4>
                                    <p class="card-text">If you have an account with us, please log in.</p>
                                    <div class="row billing-new-address-form p-0 pt-4 border-0">
                                        <div class="col-lg-6 mb-3">
                                            <label for="email">Email Address <span class="red">*</span></label>
                                            <input class="form-control" name="email" placeholder="" value="" required type="email" id="email">
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <label for="password">Password <span class="red">*</span> </label>
                                            <input class="form-control" name="password" placeholder="" value="" type="password" id="password" required>
                                        </div>
                                    </div>
                                    <span class="fpass-txt float-right">* Required Fields</span>
                                    <hr class="my-4">
                                    <span class="fpass-txt pt-3 float-left"><a href="#">Forgot Your Password?</a></span>
                                    <input type="submit" class="btn btn-red float-right" value="Login">
                                </form>
                            </div>
                        </div>
                    </div>

                </div>


            </div>

        </div>
    </section>

@endbuild
