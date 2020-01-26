<?php
namespace src\gracestore\model;
use \zil\factory\Model;

class Category{

    use Model;

	public $id = null;
	public $name = null;
	public $is_disabled = null;
	public $created_at = null;

	public static $table = 'Category';


    public function __construct(){}
    
}
    
