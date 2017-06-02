<?php

namespace Model;

/**
 * Description of Product
 *
 * @author Human Booster
 */
class Product {

    /**
     *
     * @var type 
     */
    protected $id;

    /**
     *
     * @var type 
     */
    protected $price;

    /**
     *
     * @var type 
     */
    protected $title;

    /**
     *
     * @var \Model\Category 
     */
    protected $category;

    /**
     * 
     * @return type
     */
    public function getId() {
        return $this->id;
    }

    /**
     * 
     * @return type
     */
    public function getPrice() {
        return $this->price;
    }

    /**
     * 
     * @return type
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * 
     * @return type
     */
    public function getCategory() {
        return $this->category;
    }

    /**
     * 
     * @param \Model\type $id
     * @return \Model\Product
     */
    public function setId(type $id) {
        $this->id = $id;
        return $this;
    }

    /**
     * 
     * @param \Model\type $price
     * @return \Model\Product
     */
    public function setPrice(type $price) {
        $this->price = $price;
        return $this;
    }

    /**
     * 
     * @param \Model\type $title
     * @return \Model\Product
     */
    public function setTitle(type $title) {
        $this->title = $title;
        return $this;
    }

    /**
     * 
     * @param \Model\Category $category
     * @return \Model\Product
     */
    public function setCategory(\Model\Category $category) {
        $this->category = $category;
        return $this;
    }

}
