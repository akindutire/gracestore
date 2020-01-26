<?php
namespace src\gracestore\controller;

use src\gracestore\middleware\ValidateStoreDashboardPerimeter;
use src\gracestore\model\Cart;
use src\gracestore\model\Product;
use src\gracestore\model\User;
use src\gracestore\service\UserNotification;
use \zil\core\server\Param;
use \zil\core\server\Response;
use \zil\factory\View;
use \zil\core\facades\helpers\Notifier;
use \zil\core\facades\helpers\Navigator;
use \zil\core\facades\decorators\Hooks;

use src\gracestore\Config;
use zil\security\Encryption;
use zil\security\Validation;

/**
 *  @Controller:StoreUserReq []
*/

class StoreUserReq{

    use Notifier, Navigator, Hooks;

    public function AddToCart(Param $param){
        try{

            $V = new Validation(
                ['partridge', 'number']
            );
            if($V->isPassed()){
                $qty = $param->form('partridge');
                $product_id = $param->url('product_id');

                $Product = new Product();
                $PF = $Product->filter('nos_in_stock', 'price')->where( ['id', $product_id] )->get();
                $nos_in_stock = $PF->nos_in_stock;

                $unit_price = $PF->price;
                if($qty <= $nos_in_stock){

                    $C = new Cart();
                    $C->qty = $qty;
                    $C->user_id = (new User())->getUserId();
                    $C->is_paid = false;
                    $C->product_id = $product_id;
                    $C->order_id = (new Encryption())->generateShortHash();
                    $C->netprice = $qty * $unit_price;

                    if($C->create()){
                        $Product->nos_in_stock = $nos_in_stock - $qty;

                        if($Product->where( ['id', $product_id] )->update() == 1){
                            $this->goBack();
                        }else{
                            $last = $C::lastInsert();
                            $C->where( ['id', $last] )->delete();
                        }
                    }else{
                        throw new \Exception("Couldn't add to cart, retry");
                    }
                }


            }else{
                throw new \Exception($V->getErrorString());
            }
        }catch(\Throwable $t){
            (new UserNotification())->StoreNotif($t->getMessage(), 0);
        }
    }

    public function __construct(){}
    public function onInit(Param $param){}
    public function onAuth(Param $param){
        new ValidateStoreDashboardPerimeter($param);
    }
    public function onDispose(Param $param){}

}
