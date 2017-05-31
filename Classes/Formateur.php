<?php

/**
 * Description of Formateur
 *
 * @author Human Booster
 */
class Formateur extends Personne {

    /**
     * summary
     *
     * description
     *
     * @param string $myArgument *description* 
     * 
     * @return type
     */
    public function ecrire($message) {
        
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
    public function addEvaluationStagiaire(array $evaluation, \Stagiaire $stagiaire) {
        $stagiaire->addEvaluation($evaluation);
    }

}
