<?php

namespace Model;

/**
 * Description of Category
 *
 * @author Human Booster
 */
class Category extends \Lib\Entity {

    protected $id;
    protected $title;

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
    public function getTitle() {
        return $this->title;
    }

    /**
     * 
     * @param type $id
     * @return \Model\Category
     */
    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    /**
     * 
     * @param type $title
     * @return \Model\Category
     */
    public function setTitle($title) {
        $this->title = $title;
        return $this;
    }

}
