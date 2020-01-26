<?php
namespace src\gracestore\route;

use \zil\core\interfaces\Route;
use \zil\core\server\Resource;

/**
 *   @Route:Web
*/

class Web implements Route{

    use \zil\core\facades\decorators\Route_D1;

    /**
     * Web routes
    *
    * @return array
    */
    public function route(): array{

        $basic_route = [
            'home' => (new Resource('Home@Index'))
                ->alias('')
                ->get(),

            'sign-in' => (new Resource('Home@Login'))->alias('login')->get(),

            'sign-up' => (new Resource('Home@SignUp'))->get(),

            'store' => (new Resource('Store@Products'))->get(),
            'store/cat/:category_id' => (new Resource('Store@ProductsOfACategory'))->get(),
            'store/product/:product_id' => (new Resource('Store@ProductDetail'))->get(),
            'store/cart' => (new Resource('Store@Cart'))->get(),

            'logout' => (new Resource('Store@Logout'))->get(),

            /**API REQUEST*/
            'login-account' => (new Resource('api/Auth@Login'))->post(),
            'create-account' => (new Resource('api/Auth@SignUp'))->post(),
            'add-to-cart/:product_id' => (new Resource('api/StoreUserReq@AddToCart'))->post(),
        ];

        $admin_route = $this->prefix('admin/', [

            'sign-up' => (new Resource('Admin@SignUp'))->get(),

            'add-category' => (new Resource('Store@AddCategory'))->get(),
            'add-product/:category_id' => (new Resource('Store@AddProduct'))->get(),

            'create-account' => (new Resource('api/Auth@SignUpForAdmin'))->post(),
            'create-category' => (new Resource('api/StoreAdminReq@CreateCategory'))->post(),
            'create-product/:category_id' => (new Resource('api/StoreAdminReq@CreateProduct'))->post(),
        ]);

        return $this->merge($basic_route, $admin_route);
    }
}

