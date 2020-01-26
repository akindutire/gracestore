<?php
namespace src\gracestore\migration;

use zil\factory\Schema;
use zil\core\interfaces\Migration;

/**
 *   @Migration:add_is_admin_field_to_user->User []
*/
class add_is_admin_field_to_user implements Migration{

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

        $schema->build('is_admin')->Boolean()->After('auth_token')->Default('0');
    }

    /**
     * Rollback directives
    *
    * @return void
    */
    public function unset(){

    }
}
