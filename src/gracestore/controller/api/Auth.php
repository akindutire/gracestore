<?php
namespace src\gracestore\controller;

use src\gracestore\model\User;
use src\gracestore\service\UserAuthSvc;
use src\gracestore\service\UserNotification;
use \zil\core\server\Param;
use \zil\core\server\Response;
use zil\core\tracer\ErrorTracer;
use zil\factory\Redirect;
use \zil\factory\View;
use \zil\core\facades\helpers\Notifier;
use \zil\core\facades\helpers\Navigator;
use \zil\core\facades\decorators\Hooks;

use src\gracestore\Config;
use zil\security\Encryption;
use zil\security\Validation;

/**
 *  @Controller:Auth []
*/

class Auth{

    use Notifier, Navigator, Hooks;

    public function SignUpForAdmin(Param $param) {
        try{

            $this->ProcessSignUp($param, 1);

        }catch(\Throwable $t){
            new ErrorTracer($t);
        }
    }

    public function SignUp(Param $param){
        try{

            $this->ProcessSignUp($param, 0);

        }catch(\Throwable $t){
           new ErrorTracer($t);
        }
    }

    public function Login(Param $param){
        try{
            $V = new Validation(
                ['email', 'email|required'],
                ['password', 'required']
            );

            if($V->isPassed()){
                $UAuthSvc = new UserAuthSvc();
                $e = $param->form('email');
                $p = $param->form('password');

                if( !is_null($UAuthSvc->AuthSetUp($e, $p) ) ){
                    new Redirect('store');
                }else {
                    throw new \Exception("Couldn't Login to account, incorrect login credentials");
                }
            }else{
                throw new \Exception($V->getErrorString());
            }
        }catch(\Throwable $t){
            (new UserNotification())->Notif($t->getMessage(), 0);
        }
    }

    private function ProcessSignUp(Param $param, bool $is_Admin){
        try {
            $V = new Validation(
                ['email', 'email|required'],
                ['password', 'required'],
                ['fullname', 'required']
            );

            $UAuthSvc = new UserAuthSvc();
            if ($V->isPassed()) {
                $U = new User();

                $U->email = $param->form('email');
                $U->password = $UAuthSvc->encodePassword($param->form('password'));
                $U->name = $param->form('fullname');
                $U->is_admin = $is_Admin;

                if ($U->create()) {
                    $e = $param->form('email');
                    $p = $param->form('password');

                    if (!is_null($UAuthSvc->AuthSetUp($e, $p))) {
                        new Redirect('store');
                    } else {
                        throw new \Exception("Couldn't complete registration");
                    }
                }
            } else {
                throw new \Exception($V->getErrorString());
            }
        }catch (\Throwable $t){
            (new UserNotification())->Notif($t->getMessage(), 0);
        }
    }

    public function __construct(){}
    public function onInit(Param $param){}
    public function onAuth(Param $param){}
    public function onDispose(Param $param){}

}
