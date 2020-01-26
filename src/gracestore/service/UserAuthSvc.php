<?php
namespace src\gracestore\service;

use src\gracestore\model\User;
use zil\core\scrapper\Info;
use \zil\core\server\Http;
use zil\core\server\Param;
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
 * @Service:UserAuthSvc []
*/

class UserAuthSvc{

    public function __construct(){ }

    public function AuthSetUp(string $email, string $password) : ?string {
        try{
            $U = new User();
            $fetched = $U->as('u')
                ->filter('u.id')
                ->where(
                    ['u.email', $email],
                    ['u.password', $this->encodePassword($password)]
                )->count();

            if($fetched == 1 ) {
                $token = (new Encryption())->authKey();
                $U->auth_token = $token;
                if( $U->where( ['email', $email] )->update() == 1){
                    Session::build('AUTH_TOKEN', $token)->build('email', $email);
                    return $token;
                }else{
                    throw new \Exception("An error occurred, couldn't update token");
                }
            }else{
                return null;
            }

        } catch (\Throwable $t){
            new ErrorTracer($t);
        }
    }

    public function encodePassword(string $password) : string {
        try{
            return sha1($password);
        } catch (\Throwable $t){
            new ErrorTracer($t);
        }
    }

    public function destroyGuard() {
        try{
            Session::delete('AUTH_TOKEN')::delete('email');
        }catch (\Throwable $t){
            new ErrorTracer($t);
        }
    }

    public function isAdmin() : bool {
        return (new User())->isAdmin();
    }
}
