<?php

namespace Lib;

/**
 * Description of Entity
 *
 * @author Human Booster
 */
abstract class Entity extends EntityManager {

    protected $id;
    protected $errors;

    ///////////////////////////////

    public function __construct(Array $dataToHydrate = []) {
        $this->hydrate($dataToHydrate);
        parent::__construct();
    }

    /**
     * 
     * @return type
     */
    public function getId() {
        return $this->id;
    }

    /**
     * 
     * @param type $id
     * @return \Lib\Entity
     */
    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    /**
     * 
     * @return type
     */
    public function getErrors() {
        return $this->errors;
    }

    /**
     * 
     * @param type $errors
     * @return \Lib\Entity
     */
    public function setErrors($errors) {
        $this->errors = $errors;
        return $this;
    }

    /**
     * 
     * @param array $data
     */
    protected function hydrate(Array $data = []) {
        if (isset($data)) {
            foreach ($data as $key => $value) {
                $setter = 'set' . ucfirst($key);
                if (method_exists($this, $setter)) {
                    $this->$setter($value);
                } else {
                    throw new \Exception("ERROR : " . __METHOD__ . ': Setter doesn\'t exists !');
                }
            }
        }
    }

}
