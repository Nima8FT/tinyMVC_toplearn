<?php

$base_url = "http://localhost/tinyMVC_toplearn/";
$base_dir = "/tinyMVC_toplearn/";
$tmp = explode('?',$_SERVER['REQUEST_URI']);
$current_route = str_replace($base_dir,'',$tmp[0]);
unset($tmp);

$db_host = 'localhost';
$db_name = 'tinyMvcToplearn';
$db_username = 'root';
$db_password = '';

?>