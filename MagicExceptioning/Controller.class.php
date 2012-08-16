<?php

/**
 *
 */
class Controller
{

    protected $objUser;

    public function __construct()
    {

        $this->objUser           = new User();
        $this->objUser->userId   = 1;
        $this->objUser->username = 'root';
    }

    public function showUser()
    {

        echo $this->objUser->mirko;
    }

    public function showPasswordHash()
    {

        $this->objUser->getPasswordHash();
    }
}
