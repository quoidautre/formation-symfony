<?php

/**
 * Created by PhpStorm.
 * User: Human Booster
 * Date: 31/05/2017
 * Time: 08:53
 */
class Personne {

    private $firstName = "Donald";
    protected $lastName = "Duck";
    protected $dateNaissance;
    protected static $population = 0;

    const HEAD = 1;

    /**
     * 
     * @param type $firstName
     */
    function __construct($firstName) {
        $this->setFirstName($firstName);
        $this->lastName = "duck";
        $this->dateNaissance = new \DateTime;
        self::$population++;
    }

    /**
     * 
     * @return type
     */
    public function getFirstName() {
        return $this->firstName;
    }

    /**
     * 
     * @param type $firstName
     * @return \Personne
     */
    public function setFirstName($firstName) {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * 
     * @return type
     */
    public function getLastName() {
        return $this->lastName;
    }

    /**
     * 
     * @return type
     */
    public function getDateNaissance() {
        return $this->dateNaissance;
    }

    /**
     * 
     * @param type $lastName
     * @return \Personne
     */
    public function setLastName($lastName) {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * 
     * @param type $dateNaissance
     * @return \Personne
     */
    public function setDateNaissance($dateNaissance) {
        $this->dateNaissance = $dateNaissance;
        return $this;
    }

    /**
     * 
     * @return type
     */
    public function getConstants() {
        return self::HEAD;
    }

    /**
     * 
     * @return type
     */
    public function getPopulation() {
        return self::$population;
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
    public static function getStatisPopulation() {
        return self::$population;
    }

    /**
     * 
     * @param type $population
     * @return type
     */
    public function setPopulation($population) {
        self::$population = $population;
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
    public function parler($message) {
        echo '<span>' . $message . '</span><br>';
    }

}
