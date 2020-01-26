<?php
namespace src\gracestore\migration;

use zil\factory\Schema;
use zil\core\interfaces\Migration;

/**
 *   @Migration:create_user_table->Users []
*/
class create_user_table implements Migration{

    /**
     * Attributes to be created
    *
    * @return void
    */
    public function set(){

        /**
         * New Schema or Connect to existing schema
        */

        $schema = new Schema('User');

        $schema->build('id')->Primary()->Integer()->AutoIncrement();
        $schema->build('name')->String();
        $schema->build('email')->String()->Unique();
        $schema->build('password')->String();
        $schema->build('auth_token')->String()->Unique();
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
