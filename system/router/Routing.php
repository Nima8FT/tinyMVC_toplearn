<?php

namespace System\router;

use ReflectionMethod;

class Routing
{

    //user in to address exacly
    private $current_route;

    public function __construct()
    {
        global $current_route;
        $this->current_route = explode('/', $current_route);
    }


    public function run()
    {
        //where is project exacly
        $path = realpath(dirname(__FILE__) . '/../../application/controlles/' . ucwords(strtolower($this->current_route[0])) . '.php');
        if (!file_exists($path)) {
            echo "404 - file not exists";
            exit();
        }
        require_once($path);
        //just one cell method = index
        sizeof($this->current_route) == 1 ? $method = "index" : $method = $this->current_route[1];
        $class = "Application\controlles\\" . ucwords(strtolower($this->current_route[0]));
        $object = new $class();
        if (method_exists($object, $method)) {
            $reflection = new ReflectionMethod($class, $method);
            $parameter_count = $reflection->getNumberOfParameters();
            if ($parameter_count <= count(array_slice($this->current_route, 2))) {
                call_user_func_array(array($object, $method), array_slice($this->current_route, 2));
            } else {
                echo "404 - parameter error";
            }
        } else {
            echo "404 - method not exist";
        }
    }

}

?>