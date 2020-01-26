<?php
namespace src\gracestore\migration;

use zil\factory\Schema;
use zil\core\interfaces\Migration;

/**
 *   @Migration:create_category_table->Category []
*/
class create_category_table implements Migration{

    /**
     * Attributes to be created
    *
    * @return void
    */
    public function set(){

        /**
         * New Schema or Connect to existing schema
        */

        $schema = new Schema('Category');

        $schema->build('id')->Primary()->Integer()->AutoIncrement();
        $schema->build('name')->String()->Unique();
        $schema->build('is_disabled')->Boolean()->Default('0');
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
