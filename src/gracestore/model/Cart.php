<?php
namespace src\gracestore\model;
use \zil\factory\Model;

class Cart{

    use Model;

	public $id = null;
	public $user_id = null;
	public $order_id = null;
	public $product_id = null;
	public $qty = null;
	public $is_paid = null;
	public $created_at = null;
	public $netprice = null;

	public static $table = 'Cart';


    public function __construct(){}

    public function itemsInCart() : int {
        $uid = (new User())->getUserId();
        return $this->where( ['user_id', $uid] )->count();
    }

    public function amtofItemsInCart() : float {
        $uid = (new User())->getUserId();
        return (float)$this->filter('SUM(netprice) as np')->where( ['user_id', $uid] )->get()->np;
    }
}
    


