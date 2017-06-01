<?php

namespace Lib;

/**
 * Description of Application
 *
 * @author Human Booster
 */
abstract class Application {

    protected $layout;
    protected $name;

    const WEB_ROOT = '';

    //////////////////
    abstract public function run();

    /////////////////
    /**
     * 
     * @return type
     */
    public function getLayout() {
        return $this->layout;
    }

    /**
     * 
     * @return type
     */
    public function getName() {
        return $this->name;
    }

    /**
     * 
     * @param type $layout
     * @return \Lib\Application
     */
    public function setLayout($layout) {
        $this->layout = $layout;
        return $this;
    }

    /**
     * 
     * @param type $name
     * @return \Lib\Application
     */
    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    ///////////////////
    protected function getController($bundle) {

        if (!empty($bundle)) {
            $controller = '\\Controller\\' . $this->name . '\\' . $bundle . 'Controller';

            if (class_exists($controller)) {
                return new $controller($this);
            } else {
                throw new \Exception("ERROR : " . __METHOD__);
            }
        } else {
            return false;
        }
    }

}
