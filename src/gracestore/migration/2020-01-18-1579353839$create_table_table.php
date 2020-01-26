<?php
namespace src\gracestore\migration;

use zil\factory\Schema;
use zil\core\interfaces\Migration;

/**
 *   @Migration:create_table_table->Product []
*/
class create_table_table implements Migration{

    /**
     * Attributes to be created
    *
    * @return void
    */
    public function set(){

        /**
         * New Schema or Connect to existing schema
        */

        $schema = new Schema('Product');

        $schema->build('id')->Primary()->Integer()->AutoIncrement();
        $schema->build('cat_id')->Integer()->Foreign('Category', 'id');
        $schema->build('name')->String();
        $schema->build('nos_in_stock')->Integer();
        $schema->build('price')->Double();
        $schema->build('discount')->Double();
        $schema->build('is_Archived')->Boolean()->Default('0');
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
