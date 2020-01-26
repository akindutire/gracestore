<?php
namespace src\gracestore\middleware;

use src\gracestore\service\UserAuthSvc;
use zil\core\interfaces\Middleware;
use zil\core\interfaces\Param;
use zil\factory\Redirect;
use zil\factory\Session;

/**
 *   @Middleware:ValidateUserAsAdmin []
*/

class ValidateUserAsAdmin implements Middleware{

    public function __construct(Param $param){
        $is_admin = (new UserAuthSvc())->isAdmin();
        if($is_admin == false){
            new Redirect('login');
        }
    }

}
