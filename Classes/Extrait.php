<?php

/**
 * Description of Extrait
 *
 * @author Human Booster
 */
class Extrait {

    public $txtExtrait = '';
    public $limitExtrait = 50;
    public $suite = '...';

    /**
     * 
     * @param type $firstName
     */
    function __construct($extrait) {
        $this->setTxtExtrait($extrait);
    }

    /**
     * 
     * @return type
     */
    public function getTxtExtrait() {
        $this->txtExtrait = strip_tags($this->txtExtrait);

        if (mb_strlen($this->txtExtrait) >= $this->limitExtrait) {
            $this->txtExtrait = substr($this->txtExtrait, 0, $this->limitExtrait);
        }
        return $this->txtExtrait . ' ' . $this->suite;
    }

    /**
     * 
     * @param type $txtExtrait
     * @return \Extrait
     */
    public function setTxtExtrait($txtExtrait) {
        $this->txtExtrait = $txtExtrait;
        return $this;
    }

}
