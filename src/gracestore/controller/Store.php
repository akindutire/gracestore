<?php
namespace src\gracestore\controller;

use src\gracestore\middleware\ValidateStoreDashboardPerimeter;
use src\gracestore\middleware\ValidateUserAsAdmin;
use src\gracestore\model\Cart;
use src\gracestore\model\Category;
use src\gracestore\model\Product;
use src\gracestore\model\User;
use src\gracestore\service\UserAuthSvc;
use \zil\core\server\Param;
use \zil\core\server\Response;
use zil\factory\BuildQuery;
use zil\factory\Database;
use zil\factory\Redirect;
use \zil\factory\View;
use \zil\core\facades\helpers\Notifier;
use \zil\core\facades\helpers\Navigator;
use \zil\core\facades\decorators\Hooks;

use src\gracestore\Config;

/**
 *  @Controller:Store []
*/

class Store{

    use Notifier, Navigator, Hooks;

    public function Cart(Param $param){

        $uid = (new User())->getUserId();
        $OutputData = [
            'cart' => (new Cart())->as('c')->with('product as p', 'c.product_id = p.id')->where( ['user_id', $uid] )->filter('p.name', 'p.pix', 'c.order_id', 'c.qty', 'c.netprice')->get('VERBOSE')
        ];

        #render the desired interface inside the view folder

        View::render("Store/Cart.php", $OutputData);
    }

    public function ProductDetail(Param $param){

        $pro_id = $param->url('product_id');

        $sql = new BuildQuery( (new Database())->connect() );
        $rs = $sql->read('Product', [], [], ['ORDER BY RAND() LIMIT 3'] );
        $rs->setFetchMode(\PDO::FETCH_OBJ);
        $rp = $rs->fetchAll();

        $OutputData = [
            'product' => (new Product())->where( ['id', $pro_id] )->get(),
            'recommended-product' => $rp
        ];

        #render the desired interface inside the view folder

        View::render("Store/ProductDetail.php", $OutputData);
    }

    public function ProductsOfACategory(Param $param){

        $cat_id = $param->url('category_id');
        $P = new Product();
        $C = new Category();
        $OutputData = [
            'products' => $P->as('p')->with('Category as c', "p.cat_id = c.id")->where(['c.id', $cat_id])->filter('p.id','c.name as cn', 'p.name', 'p.price', 'p.description', 'p.nos_in_stock', 'p.pix')->desc()->get('VERBOSE'),
            'cat-name' => $C->filter('name')->where(['id', $cat_id])->get()->name,
            'cat-id' => $cat_id
            ];


        #render the desired interface inside the view folder

        View::render("Store/ProductsOfACategory.php", $OutputData);
    }

    public function AddCategory(Param $param){
        //Admin Md
        new ValidateUserAsAdmin($param);

        $OutputData = [];

        #render the desired interface inside the view folder

        View::render("Store/AddCategory.php", $OutputData);
    }

    public function AddProduct(Param $param){
        //Admin Md
        new ValidateUserAsAdmin($param);

        $cat_id = $param->url('category_id');

        $OutputData = [
            'cat-id' => $cat_id,
            'cat-name' => (new Category())->filter('name')->where( ['id', $cat_id] )->get()->name
        ];

        #render the desired interface inside the view folder

        View::render("Store/AddProduct.php", $OutputData);
    }

    public function Products(Param $param){

        $top_selling = [];
        $f_top_selling = [];
        $sql = new BuildQuery( (new Database())->connect() );
        $rs = $sql->read('Cart', [], [], ['GROUP BY product_id'] );
        while ( list($e, $e, $e, $p, $e, $e, $e, $e) = $rs->fetch()){
            $rsp = $sql->read('Cart', [ ['product_id', $p] ], [ 'SUM(qty) as sqty' ] );
            list($sum) = $rsp->fetch();

            $top_selling["P{$p}"] = $sum;
        }

        arsort($top_selling);
        array_splice($top_selling, 5);

        $P = new Product();
        foreach ( $top_selling as $pro_id => $qty_Sold){
            $pro_id = ltrim($pro_id, 'P');
            $prod_obj = $P->as('p')->with('Category as c', 'p.cat_id = c.id')->filter('p.id','c.name as cn', 'p.name', 'p.price', 'p.description', 'p.nos_in_stock', 'p.pix')->where( ['p.id', $pro_id] )->get();
            array_push($f_top_selling, $prod_obj);
        }

        $OutputData = [
            'products' => (new Product())->as('p')->with('Category as c', 'p.cat_id = c.id')->filter('p.id','c.name as cn', 'p.name', 'p.price', 'p.description', 'p.nos_in_stock', 'p.pix')->take(10)->get('VERBOSE'),
            'top-selling-products' => $f_top_selling
        ];


        #render the desired interface inside the view folder

        View::render("Store/Products.php", $OutputData);
    }

    public function Logout(Param $param){
        (new UserAuthSvc())->destroyGuard();
        new Redirect('login');
    }

    public function __construct(){}
    public function onInit(Param $param){}
    public function onAuth(Param $param){
        new ValidateStoreDashboardPerimeter($param);
    }
    public function onDispose(Param $param){}

}
