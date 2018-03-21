<?php
require_once ('config/config.php');

function __autoload($class_name){
    require_once ('libraries/'.$class_name.'.php');
}