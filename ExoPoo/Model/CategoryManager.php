<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Model;

/**
 * Description of CategoryManager
 *
 * @author Human Booster
 */
class CategoryManager extends \Lib\EntityManager {

    protected $name = "category";

    /**
     * 
     * @param int $number
     * @return \Model\CategoryManager
     */
    public function get() {
        $sql = "SELECT * FROM " . $this->name . " ORDER by title ASC;";
        $sth = $this->factory->prepare($sql);

        $sth->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, Category::class);
        $sth->execute();

        return $sth->fetchAll();
    }

}
