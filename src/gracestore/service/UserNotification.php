<?php
namespace src\gracestore\service;

use \zil\core\server\Http;
use \zil\factory\Session;
use \zil\factory\Fileuploader;
use \zil\factory\Filehandler;
use \zil\factory\Logger;
use \zil\factory\View;
use \zil\factory\Redirect;

use \zil\security\Encryption;
use \zil\security\Sanitize;

/**
 * @Service:UserNotification []
*/

class UserNotification{

    public function __construct(){ }

    public function Notif(string $message, int $type) {
        View::render("Home/Notify", [ 'message' => $message, 'type' => $type]);
    }

    public function StoreNotif(string $message, int $type) {
        View::render("Store/Notify", [ 'message' => $message, 'type' => $type]);
    }

}
