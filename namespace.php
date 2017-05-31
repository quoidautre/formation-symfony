<?php

use \Lib\Article;
use \Lib\Model\Panier;

try {

    function __autoload($className) {
        $className = str_replace('\\', '/', $className);

        if (is_readable($className . '.php')) {
            require_once $className . '.php';
            return true;
        }
        return false;
    }

    $article = new Article();
    echo "</br>";
    $basket = new Panier();
} catch (Exception $e) {
    echo $e->getMessage();
}
