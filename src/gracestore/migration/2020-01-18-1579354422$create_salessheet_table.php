<?php
namespace src\gracestore\migration;

use zil\factory\Schema;
use zil\core\interfaces\Migration;

/**
 *   @Migration:create_salessheet_table->SalesSheet []
*/
class create_salessheet_table implements Migration{

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

        $schema->build('id')->Primary()->Integer()->AutoIncrement();
        $schema->build('user_id')->Integer()->Foreign('Users', 'id');
        $schema->build('order_id')->Integer();
        $schema->build('product_id')->Integer()->Foreign('Product', 'id');
        $schema->build('qty')->Integer();
        $schema->build('is_paid')->Integer();
        $schema->build('created_at')->Timestamp();
    }

    /**
     * Rollback directives
    *
    * @return void
    */
    public function unset(){

    }
}
