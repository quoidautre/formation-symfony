<?php

namespace Lib;

/**
 * Description of EntityManager
 *
 * @author Human Booster
 */
abstract class EntityManager {

    /**
     *
     * @var type \PDO
     */
    protected $factory;

    public function __construct() {
        $this->factory = pdoFactory::get();
        //var_dump($this->factory);
    }

}
