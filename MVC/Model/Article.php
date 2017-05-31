<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Model;

/**
 * Description of Article
 *
 * @author Human Booster
 */
class Article {

    /**
     *
     * @var String 
     */
    private $title;

    /**
     *
     * @var String 
     */
    private $content;

    /**
     *
     * @var \DateTime
     */
    private $date;

    /**
     * 
     */
    public function __construct() {
        $this->date = new \DateTime;
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
    public function getContent() {
        return $this->content;
    }

    /**
     * 
     * @return \DateTime
     */
    public function getDate() {
        return $this->date;
    }

    /**
     * 
     * @param \DateTime $date
     * @return \Model\Article
     */
    public function setDate(\DateTime $date) {
        $this->date = $date;
        return $this;
    }

    /**
     * 
     * @param type $title
     * @return \Model\Article
     */
    public function setTitle($title) {
        $this->title = $title;
        return $this;
    }

    /**
     * 
     * @param type $content
     * @return \Model\Article
     */
    public function setContent($content) {
        $this->content = $content;
        return $this;
    }

}
