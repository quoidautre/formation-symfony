<?php

namespace Lib;

/**
 * Description of FrontEnd
 *
 * @author Human Booster
 */
class FrontEnd extends Application {

    public function __construct() {
        $this->layout = 'layout.html.php';
        $this->name = 'FrontEnd';
    }

    public function run() {
        $bundle = ucfirst((isset($_GET['module']) and ! empty($_GET['module'])) ? $_GET['module'] : "blog");
        $action = ucfirst((isset($_GET['action']) and ! empty($_GET['action'])) ? $_GET['action'] : "index");

        if (!$controller = $this->getController($bundle)) {
            throw new \Exception("ERROR : " . __METHOD__ . ' => controller not found !');
        }

        if (!$controller->getAction($action)) {
            throw new \Exception("ERROR : " . __METHOD__ . ' => action not found !');
        }

        //var_dump($controller);
    }

}
