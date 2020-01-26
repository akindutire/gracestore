<?php
namespace src\gracestore\service;

use src\gracestore\model\Cart;
use src\gracestore\model\Category;
use \zil\core\server\Http;
use zil\core\tracer\ErrorTracer;
use \zil\factory\Session;
use \zil\factory\Fileuploader;
use \zil\factory\Filehandler;
use \zil\factory\Logger;
use \zil\factory\Mailer;
use \zil\factory\Redirect;

use \zil\security\Encryption;
use \zil\security\Sanitize;

/**
 * @Service:TemplateDataProvider []
*/

class TemplateDataProvider{

    public function __construct(){ }

    public function category() : array {
        try{
            return (new Category())->all()->get('VERBOSE');
        } catch (\Throwable $t){
            new ErrorTracer($t);
        }
    }

    public function noItemsInCarts() : int {
        try{
            return (new Cart())->itemsInCart();
        } catch (\Throwable $t){
            new ErrorTracer($t);
        }
    }

    public function outstandingAmountInCart(): float {
        try{
            return (new Cart())->amtofItemsInCart();
        } catch (\Throwable $t){
            new ErrorTracer($t);
        }
    }
}
