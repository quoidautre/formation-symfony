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
    $personne = new Personne('Donald');

    /*
      $personne = new Personne('Donald');

      echo $personne->setFirstName("James")->setLastName("Bond")->getFirstName() . "</br>";

      //echo $personne->setPopulation("100") . "<br>";
      echo $personne->getPopulation() . "</br>";

      echo $personne->getConstants() . "</br>";

      $personne2 = new Personne('Ronald');
      echo $personne->getPopulation() . " | " . $personne2->getPopulation() . "</br>";

      echo "Static function : " . \Personne::getStatisPopulation() . "</br>";

      var_dump($personne);
      var_dump($personne2);
     */
    /////////////////////////////////////////////
    $stagiaire = new Stagiaire("Symfony2", "Fabrice");
    var_dump($stagiaire);

    echo $personne->parler("Hi there !");
    echo $stagiaire->parler("Hi there !");

    echo $stagiaire->testVisibility();
} catch (Exception $ex) {
    echo "ERROR " . $ex->getMessage();
}


