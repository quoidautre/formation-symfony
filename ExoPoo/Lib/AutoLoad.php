<?php

/**
 * Description of AutoLoad
 *
 * @author Human Booster
 */
function __autoload($className) {

    $className = '../' . str_replace('\\', '/', $className);

    //echo __METHOD__ . ' : ' . $className . '.php' . '</br>';

    if (is_readable($className . '.php')) {
        require_once $className . '.php';
        return true;
    }
    return false;
}
