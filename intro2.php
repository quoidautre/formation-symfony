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

    $lorem = 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilis';

    //$extrait = new Extrait($lorem);

    var_dump($stagiaire->getTxtExtrait($lorem));
} catch (Exception $e) {
    echo $e->getMessage();
}


