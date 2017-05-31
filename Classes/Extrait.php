<?php

/**
 * Description of Extrait
 *
 * @author Human Booster
 */
Trait Extrait {

    public $txtExtrait = '';
    public $limitExtrait = 50;
    public $suite = '...';

    /**
     * 
     * @return type
     */
    public function getTxtExtrait($ex) {
        $this->setTxtExtrait($ex);

        $this->txtExtrait = strip_tags(trim($this->txtExtrait));

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
