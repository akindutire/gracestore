<?php
namespace src\gracestore\migration;

use zil\factory\Schema;
use zil\core\interfaces\Migration;

/**
 *   @Migration:add_netprice_field_to_cart->Cart []
*/
class add_netprice_field_to_cart implements Migration{

    /**
     * Attributes to be created
    *
    * @return void
    */
    public function set(){

        /**
         * New Schema or Connect to existing schema
        */

        $schema = new Schema('Cart');

        $schema->build('netprice')->Double();
    }

    /**
     * Rollback directives
    *
    * @return void
    */
    public function unset(){

    }
}
