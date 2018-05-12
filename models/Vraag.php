<?php
/**
 * Created by PhpStorm.
 * User: ruben
 * Date: 8/05/2018
 * Time: 10:57
 */

class Vraag
{
    private $naam;
    private $soortVraag;
    private $juistOfFout;
    //true = juist, false=fout!
    private $content;

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

    /**
     * @return mixed
     */
    public function getJuistOfFout()
    {
        return $this->juistOfFout;
    }

    /**
     * @param mixed $juistOfFout
     */
    public function setJuistOfFout($juistOfFout)
    {
        $this->juistOfFout = $juistOfFout;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }
}