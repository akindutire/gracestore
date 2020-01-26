<?php
namespace src\gracestore\model;
use zil\core\tracer\ErrorTracer;
use \zil\factory\Model;
use zil\factory\Session;

class User{

    use Model;

	public $id = null;
	public $name = null;
	public $email = null;
	public $password = null;
	public $auth_token = null;
	public $is_admin = null;
	public $created_at = null;

	public static $table = 'User';


    public function __construct(){}

    public function getUserId() : int {
        try{
            $token = Session::get('AUTH_TOKEN');
            return $this->filter('id')->where([ 'auth_token', $token ])->get()->id;
        } catch (\Throwable $t){
            new ErrorTracer($t);
        }
    }

    public function isAdmin(): bool {
        try{
            $U = $this->filter('is_admin')->where( ['auth_token', Session::get('AUTH_TOKEN')] )->get();
            if( $U->is_admin == 1)
                return true;
            return false;
        } catch (\Throwable $t){
            new ErrorTracer($t);
        }
    }
}
    

