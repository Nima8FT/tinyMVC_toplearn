<?php

$base_url = "http://localhost/tinyMVC_toplearn/";
$base_dir = "/tinyMVC_toplearn/";
$tmp = explode('?',$_SERVER['REQUEST_URI']);
$current_route = str_replace($base_dir,'',$tmp[0]);
unset($tmp);

?>