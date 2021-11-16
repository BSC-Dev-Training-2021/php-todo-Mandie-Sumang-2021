<?php
require 'function.php';
spl_autoload_register(function($class){
require_once $_SERVER['DOCUMENT_ROOT']."/php-todo-Mandie-Sumang-2021-main/class/".$class.'.php';
});

?>