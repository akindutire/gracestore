<?php
namespace src\gracestore\middleware;

use zil\core\interfaces\Middleware;
use zil\core\interfaces\Param;
use zil\factory\Redirect;
use zil\factory\Session;

/**
 *   @Middleware:ValidateStoreDashboardPerimeter []
*/

class ValidateStoreDashboardPerimeter implements Middleware{

    public function __construct(Param $param){

        if(is_null(Session::get('AUTH_TOKEN')) || is_null(Session::get('email'))){
            new Redirect('login');
        }
    }

}
