<?php

namespace Model;

/**
 * Description of Article
 *
 * @author Human Booster
 */
class Article extends \Lib\Entity {

    protected $id;
    protected $title;
    protected $date;
    protected $content;
    protected $image;

    const MAX_LENGTH_TITLE = 2;

    ///////////////////////
    public function __construct(Array $data = []) {
        $this->setDate(new \DateTime);
        parent::__construct($data);
    }

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
     * @return type
     */
    public function getDate() {
        return $this->date;
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
     * @param type $id
     * @return \Model\Article
     */
    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    /**
     * 
     * @param type $title
     * @return \Model\Article
     */
    public function setTitle($title) {
        if (mb_strlen($title) < self::MAX_LENGTH_TITLE) {
            $this->errors[] = "You must add a title greater then " . self::MAX_LENGTH_TITLE . " characters";
        } else {
            $this->title = $title;
        }

        return $this;
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
     * @param type $content
     * @return \Model\Article
     */
    public function setContent($content) {
        $this->content = $content;
        return $this;
    }

    /**
     * 
     * @return type
     */
    public function getImage() {
        if (is_null($this->image)) {
            $this->image = 'noimage.png';
        }
        return $this->image;
    }

    /**
     * 
     * @param type $image
     * @return \Model\Article
     */
    public function setImage($image) {
        $this->image = $image;
        return $this;
    }

}
