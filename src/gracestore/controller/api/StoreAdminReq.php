<?php
namespace src\gracestore\controller;

use src\gracestore\config\Config;
use src\gracestore\middleware\ValidateStoreDashboardPerimeter;
use src\gracestore\middleware\ValidateUserAsAdmin;
use src\gracestore\model\Category;
use src\gracestore\model\Product;
use src\gracestore\service\UserNotification;
use \zil\core\server\Param;
use \zil\core\server\Response;
use zil\factory\Fileuploader;
use \zil\factory\View;
use \zil\core\facades\helpers\Notifier;
use \zil\core\facades\helpers\Navigator;
use \zil\core\facades\decorators\Hooks;

use zil\security\Validation;

/**
 *  @Controller:StoreAdminReq []
*/

class StoreAdminReq{

    use Notifier, Navigator, Hooks;

    public function CreateProduct(Param $param){
        try{
            $V = new Validation(
                ['product', 'required'],
                ['slug', 'required'],
                ['nos_in_stock', 'number'],
                ['price', 'number'],
                ['description', 'required']
            );

            if($V->isPassed()){

                if(!isset($_FILES['file']))
                    throw new \Exception("Product picture missing");

                $name = time().preg_replace('/[\s]+/','',$_FILES['file']['name']);

                $FU = (new Fileuploader())->upload(  [
                    'file' => $_FILES['file'],
                    'type' => ['image/png', 'image/gif', 'image/jpg', 'image/jpeg'],
                    'size' => 20 * 1058816,
                    'destination' => (new Config())->getProductPath()."/{$name}"
                ]  );

                $P = new Product();

                if($P->isExists([ 'name', $param->form('product') ], ['cat_id', $param->url('category_id')] ))
                    throw new \Exception("Product already existing");

                if($FU->isUploaded()){


                    $P->cat_id = $param->url('category_id');
                    $P->name = $param->form('product');
                    $P->slug = $param->form('slug');
                    $P->pix = $name;
                    $P->nos_in_stock = $param->form('nos_in_stock');
                    $P->description = $param->form('description');
                    $P->price = $param->form('price');

                    if($P->create()){
                        (new UserNotification())->StoreNotif('Product added!', 1);
                    }else{
                        throw new \Exception("Couldn't add product");
                    }

                }else{
                    throw new \Exception("Couldn't add product image, {$FU->getError()}");
                }
            }else{
                throw new \Exception($V->getErrorString());
            }
        }catch(\Throwable $t){
            (new UserNotification())->StoreNotif($t->getMessage(), 0);
        }
    }

    public function CreateCategory(Param $param){
        try{
            $V = new Validation(
                ['category', 'required']
            );

            if($V->isPassed()){
                $C = new Category();
                if($C->isExists( ['name', $param->form('category')] ))
                    throw new \Exception("Category already existing");

                $C->name = ucfirst($param->form('category'));
                $C->is_disabled = false;
                if($C->create()){
                    (new UserNotification())->StoreNotif("{$param->form('category')} added!", 1);
                }else{
                    throw new \Exception($param->form('category')." not created");
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
        //Admin Md
        new ValidateUserAsAdmin($param);
    }
    public function onDispose(Param $param){}

}
