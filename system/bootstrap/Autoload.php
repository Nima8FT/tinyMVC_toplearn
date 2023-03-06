<?php 

namespace System\Bootstrap;

class Autoload {

    public function autoloader() {
        //search for spl autoload register
        spl_autoload_register(function($className) {
            $className = str_replace("\\" , DIRECTORY_SEPARATOR , $className);
            include_once($_SERVER['DOCUMENT_ROOT'] . '/tinyMVC_toplearn/' . $className . '.php');
        });
    }

}

?>