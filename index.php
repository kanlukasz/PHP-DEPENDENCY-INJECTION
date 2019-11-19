<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

spl_autoload_register(function($class) {
    include $class.'.php';
});

$browser = new Browser();
$url = new Web($browser);
$url->redirect();