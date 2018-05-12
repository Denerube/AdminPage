<?php
/**
 * Created by PhpStorm.
 * User: ruben
 * Date: 8/05/2018
 * Time: 10:55
 */

class Stap
{
    private $naam;
    private $aantalVragen;
    private $soortVraag;

    /**
     * @return mixed
     */
    public function getSoortVraag()
    {
        return $this->soortVraag;
    }

    /**
     * @param mixed $soortVraag
     */
    public function setSoortVraag($soortVraag)
    {
        $this->soortVraag = $soortVraag;
    }
    private $vragen=array();

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
    public function getAantalVragen()
    {
        return $this->aantalVragen;
    }

    /**
     * @param mixed $aantalVragen
     */
    public function setAantalVragen($aantalVragen)
    {
        $this->aantalVragen = $aantalVragen;
    }

    /**
     * @return array
     */
    public function getVragen()
    {
        return $this->vragen;
    }

    /**
     * @param array $vragen
     */
    public function setVragen($vragen)
    {
        $this->vragen = $vragen;
    }

    public function addVraag($vraag){
        array_push($this->vragen,$vraag);
    }
}