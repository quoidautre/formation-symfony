<?php

namespace Lib;

/**
 * Description of pdoFactory
 *
 * @author Human Booster
 */
class pdoFactory {

    public static $dbHost = 'localhost';
    public static $dbName = 'mvc';
    public static $dbUser = 'root';
    public static $dbPassword = '';
    public static $pdo = null;

    public function __construct() {
        
    }

    /**
     * 
     * @return type
     */
    public static function get() {
        if (is_null(self::$pdo)) {
            self::$pdo = new \PDO('mysql:host=' .
                    self::$dbHost . ';dbname=' .
                    self::$dbName . ';', self::$dbUser, self::$dbPassword);
            return self::$pdo;
        }
    }

}
