<?php

//namespace Controller;

function __autoload($className) {
    $className = str_replace('\\', '/', $className);

    if (is_readable($className . '.php')) {
        require_once $className . '.php';
        return true;
    }
    return false;
}

$controller = new \Controller\BlogController();
$controller->indexAction();
