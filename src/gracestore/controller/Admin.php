<?php
namespace src\gracestore\controller;

use \zil\core\server\Param;
use \zil\core\server\Response;
use \zil\factory\View;
use \zil\core\facades\helpers\Notifier;
use \zil\core\facades\helpers\Navigator;
use \zil\core\facades\decorators\Hooks;

use src\gracestore\Config;

/**
 *  @Controller:Admin []
*/

class Admin{

    use Notifier, Navigator, Hooks;



    public function AdminSignUp(Param $param){

        $OutputData = [];

        #render the desired interface inside the view folder

        View::render("Home/AdminSignUp.php", $OutputData);
    }

    public function __construct(){}
    public function onInit(Param $param){}
    public function onAuth(Param $param){}
    public function onDispose(Param $param){}

}
