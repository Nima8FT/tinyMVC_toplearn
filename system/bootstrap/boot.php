<?php

session_start();

require_once('system/config.php');
require_once('system/bootstrap/Autoload.php');

//error that this one
$autoload = new \System\Bootstrap\Autoload();
$autoload->autoloader();

// include('system/config.php');
// include('system/router/Routing.php');
// include('system/traits/Redirect.php');
// include('system/traits/View.php');
// include('application/controlles/Controller.php');
// include('application/controlles/Home.php');

$router = new \System\router\Routing();
$router->run();

?>