<?php

namespace Lib;

/**
 * Description of Controller
 *
 * @author Human Booster
 */
class Controller {

    /**
     *
     * @var type 
     */
    protected $app;
    private $nameAction = "Action";

    /**
     * 
     * @param type $app
     */
    public function __construct($app) {
        $this->app = $app;
    }

    /**
     * 
     * @param type $action
     * @return boolean
     */
    public function getAction($action) {

        if (!empty($action)) {
            $method = $action . $this->nameAction;
            //var_dump($this);
            // var_dump($this->app);
            //var_dump($this->app);
            //  if (method_exists($this, $action)) {
            $this->$method();
            return true;
            //   } else {
            //      return false;
            //  }
        } else {
            return false;
        }
    }

    /**
     * 
     * @param type $view
     * @param array $data
     */
    protected function render($view, array $data) {
        if (extract($data) > 0) {
            ob_start();
            include __DIR__ . '/../View/' . $view;
            $contentView = ob_get_clean();
            include __DIR__ . '/../View/' . $this->app->getLayout();
        } else {
            throw new \Exception("ERROR : " . __METHOD__);
        }
    }

}
