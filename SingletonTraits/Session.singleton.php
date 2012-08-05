<?php
require 'Singleton.trait.php';
require 'Values.trait.php';


/**
 * Simple session singleton class.
 */
class SessionSingleton
{

    use SingletonTrait, ValuesTrait;


    /**
     * Class constructor.
     *
     * Marked as protected so this constructor cant be called from outside. If
     * someone tries to instantiate "new SessionSingleton()" PHP will throw
     * "PHP Fatal error:  Call to protected SessionSingleton::__construct() from invalid context in .."
     *
     */
    protected function __construct()
    {

        $this->arrValues = $_SESSION;
    }
}