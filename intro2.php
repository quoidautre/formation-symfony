<?php

/**
 * Created by PhpStorm.
 * User: Human Booster
 * Date: 30/05/2017
 * Time: 16:27
 */
include 'Classes/Personne.php';
include 'Classes/Stagiaire.php';

try {
    /////////////////////////////////////////////
    $stagiaire = new Stagiaire("Symfony2", "Fabrice");

    $stagiaire->addEvaluation(['php', '14']);
    $stagiaire->addEvaluation(['js', '8']);

    //$stagiaire->addEvaluation(18);

    var_dump($stagiaire);
} catch (Exception $e) {
    echo $e->getMessage();
}


