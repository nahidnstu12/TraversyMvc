<?php 
require_once "config/config.php";

require_once "helpers/_redirects.php";
require_once "helpers/_session.php";

// Autoload Core Library
spl_autoload_register(function($className){
    require_once("libraries/$className.php");
})


?>