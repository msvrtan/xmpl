<?php

/**
 *
 */
class Controller
{

    public function __construct()
    {
    }

    public function showUser()
    {

        $obj           = new User();
        $obj->userId   = 1;
        $obj->username = 'root';

        echo $obj->mirko;


        //$obj->getPasswordHash();

        echo PHP_EOL .  'Show user done' . PHP_EOL;
    }
}
