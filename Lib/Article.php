<?php

namespace Lib;

use DateTime;

/**
 * Description of Article
 *
 * @author Human Booster
 */
class Article {

    private $title;
    private $content;
    private $currentDate;

    public function __construct() {
        $this->currentDate = new DateTime('2017-05-31');
        echo __METHOD__ . ' : ' . $this->currentDate->format('d/m/Y');
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
     * @param type $title
     * @return \Article
     */
    public function setTitle($title) {
        $this->title = $title;
        return $this;
    }

    /**
     * 
     * @param type $content
     * @return \Article
     */
    public function setContent($content) {
        $this->content = $content;
        return $this;
    }

}
