<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Model;

/**
 * Description of ProductManager
 *
 * @author Human Booster
 */
class ProductManager extends \Lib\EntityManager {

    protected $name = "product";

    /**
     * 
     * @throws \Exception
     */
    public function getByCategory($id) {
        $idCategory = (int) $id;

        $sql = "SELECT " . $this->name . ".id, " . $this->name . ".title, " . $this->name . ".price,category.title as category_title "
                . " FROM " . $this->name .
                "   INNER JOIN category "
                . " ON category.id = " . $this->name . ".id_category where category.id = :idCategory";

        $sth = $this->factory->prepare($sql);

        $sth->bindValue(':idCategory', $idCategory);
        $sth->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, Product::class);
        $sth->execute();

        return $sth->fetchAll();
    }

}
