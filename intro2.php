<?php

/**
 * Created by PhpStorm.
 * User: Human Booster
 * Date: 30/05/2017
 * Time: 16:27
 */
function __autoload($className) {
    $folders = ['Classes', 'Lib'];
    foreach ($folders as $folder) {
        if (is_readable($folder . '/' . $className . '.php')) {
            require_once __DIR__ . '/' . $folder . '/' . $className . '.php';
            return true;
        }
        return false;
    }
}

try {
    /////////////////////////////////////////////
    $stagiaire = new Stagiaire("Symfony2", "Fabrice");

    $stagiaire->addEvaluation(['php', '14']);
    $stagiaire->addEvaluation(['js', '8']);

    //$stagiaire->addEvaluation(18);

    var_dump($stagiaire);
    ////////////////////////////////////////

    $formateur = new Formateur("Ernest", "James");
    $formateur->addEvaluationStagiaire(['python', 19], $stagiaire);

    var_dump($stagiaire->getEvaluations());
    var_dump($formateur);
} catch (Exception $e) {
    echo $e->getMessage();
}


