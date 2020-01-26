<?php
namespace src\gracestore\migration;

use zil\factory\Schema;
use zil\core\interfaces\Migration;

/**
 *   @Migration:rename_order_tab_to_cart->Order []
*/
class rename_order_tab_to_cart implements Migration{

    /**
     * Attributes to be created
    *
    * @return void
    */
    public function set(){

        /**
         * New Schema or Connect to existing schema
        */

        $schema = new Schema('Order');

        $schema->renameSchema('Cart');
    }

    /**
     * Rollback directives
    *
    * @return void
    */
    public function unset(){

    }
}
