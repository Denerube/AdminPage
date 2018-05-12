<?php
/**
 * Created by PhpStorm.
 * User: ruben
 * Date: 8/05/2018
 * Time: 10:48
 */

class Oef
{
    private $naam;
    private $aantalStappen;
    private $stappen=array();

    /**
     * @return mixed
     */
    public function getNaam()
    {
        return $this->naam;
    }

    /**
     * @param mixed $naam
     */
    public function setNaam($naam)
    {
        $this->naam = $naam;
    }

    /**
     * @return mixed
     */
    public function getAantalStappen()
    {
        return $this->aantalStappen;
    }

    /**
     * @param mixed $aantalStappen
     */
    public function setAantalStappen($aantalStappen)
    {
        $this->aantalStappen = $aantalStappen;
    }

    /**
     * @return array
     */
    public function getStappen()
    {
        return $this->stappen;
    }

    /**
     * @param array $stappen
     */
    public function setStappen($stappen)
    {
        $this->stappen = $stappen;
    }
    public  function addStap($stap){
        array_push($this->stappen,$stap);
    }

}