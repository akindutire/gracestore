<?php
namespace src\gracestore\migration;

use zil\factory\Schema;
use zil\core\interfaces\Migration;

/**
 *   @Migration:add_desc_field_to_product->Product []
*/
class add_desc_field_to_product implements Migration{

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

        $schema->build('description')->Text();
    }

    /**
     * Rollback directives
    *
    * @return void
    */
    public function unset(){

    }
}
