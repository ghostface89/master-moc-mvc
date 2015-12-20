<?php

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)));
$url = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : '';
require_once (ROOT . DS . 'library' . DS . 'bootstrap.php');

function dd(){
    echo '<pre>';
    array_map(function($x) { print_r($x); }, func_get_args()); die;
}