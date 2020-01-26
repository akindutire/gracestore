<?php

include_once $_SERVER['DOCUMENT_ROOT'].'/zil/vendor/autoload.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/zil/zil/main.php';

use zil\App;
use src\gracestore\config\Config as gracestoreCFG;


$cfg = [ 	'0' => new gracestoreCFG,  ];

$AppSpace = new App($cfg);

/**
 * @params
*  true - allow all | false - deny all
*/

    $AppSpace->start();

