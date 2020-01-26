<?php
namespace src\gracestore\model;
use \zil\factory\Model;

class Product{

    use Model;

	public $id = null;
	public $cat_id = null;
	public $name = null;
	public $nos_in_stock = null;
	public $price = null;
	public $discount = null;
	public $is_Archived = null;
	public $created_at = null;
	public $slug = null;
	public $pix = null;
	public $description = null;

	public static $table = 'Product';


    public function __construct(){
        self::$key = 'id';
    }
    
}
    


