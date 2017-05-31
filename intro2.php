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
    var_dump($stagiaire);

    echo $stagiaire->parler("Hi there !");

    echo $stagiaire->testVisibility();
} catch (Exception $ex) {
    echo "ERROR " . $ex->getMessage();
}


