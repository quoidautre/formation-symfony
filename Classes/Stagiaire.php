<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Stagiaire
 *
 * @author Human Booster
 */
class Stagiaire extends Personne {

    use Extrait;

    protected $formation = "";
    protected $evaluations;

    public function __construct($formation, $prenom) {
        parent::__construct($prenom);
        $this->setFormation($formation);
    }

    /**
     * 
     * @return type
     */
    public function getFormation() {
        return $this->formation;
    }

    /**
     * 
     * @param type $formation
     * @return \Stagiaire
     */
    public function setFormation($formation) {
        $this->formation = $formation;
        return $this;
    }

    /**
     * summary
     *
     * description
     *
     * @param string $myArgument *description* 
     * 
     * @return type
     */
    public function parler($message, $color = "FF0000") {
        $message = '<span style="color:#' . $color . '">' . $message . '</span>';
        parent::parler($message);
    }

    /**
     * summary
     *
     * description
     *
     * 
     * @return type
     */
    public function testVisibility() {
        echo $this->getFirstName() . ', ' . $this->lastName;
    }

    public function ecrire($message) {
        echo $message;
    }

    /*
      public function DoNotExtend() {
      echo __METHOD__;
      }
     */

    /**
     * 
     * @return type
     */
    public function getEvaluations() {
        return $this->evaluations;
    }

    /**
     * 
     * @param type $evaluations
     * @return \Stagiaire
     */
    public function setEvaluations($evaluations) {
        $this->evaluations[] = $evaluations;
        return $this;
    }

    /**
     * summary
     *
     * description
     *
     * @param string $myArgument *description* 
     * 
     * @return type
     */
    public function addEvaluation(array $evaluation = []) {

        if (!is_array($evaluation))
            throw new Exception(__METHOD__ . " : you must pass an array");

        $this->setEvaluations($evaluation);
    }

}
