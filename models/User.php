<?php
/**
 * Created by PhpStorm.
 * User: Ruben
 * Date: 25/05/2018
 * Time: 11:12
 */

class User
{
    private $UserName;
    private $IsAdmin;
    private $Token;

    /**
     * @return mixed
     */
    public function getUserName()
    {
        return $this->UserName;
    }

    /**
     * @param mixed $UserName
     */
    public function setUserName($UserName)
    {
        $this->UserName = $UserName;
    }

    /**
     * @return mixed
     */
    public function getisAdmin()
    {
        return $this->IsAdmin;
    }

    /**
     * @param mixed $IsAdmin
     */
    public function setIsAdmin($IsAdmin)
    {
        $this->IsAdmin = $IsAdmin;
    }

    /**
     * @return mixed
     */
    public function getToken()
    {
        return $this->Token;
    }

    /**
     * @param mixed $Token
     */
    public function setToken($Token)
    {
        $this->Token = $Token;
    }

}