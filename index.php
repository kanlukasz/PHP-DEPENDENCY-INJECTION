<?php

spl_autoload_register(function($class) {
    include $class.'.php';
});

$browser = new Browser();
$url = new Web($browser);
$url->redirect();
