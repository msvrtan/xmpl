<?php

trait SingletonTrait
{

    /**
     * Singleton placeholder.
     *
     * @var SessionSingleton
     */
    protected static $instance;

    /**
     * Class constructor.
     *
     * Marked as protected so this contrstructor cant be called from outside. If
     * someone tries to instantiate "new XxxSingleton()" PHP will throw
     * "PHP Fatal error:  Call to protected XxxSingleton::__construct() from invalid context in .."
     *
     */
    protected function __construct()
    {
    }

    /**
     * Singleton instance method.
     *
     * Supports lazy loading so instance will ge generated only if needed. Also
     * prohibits mutliple instances of object.
     *
     * @static
     *
     * @return static
     */
    public static function getInstance()
    {

        if (static::$instance === null) {
            static::$instance = new static();
        }

        return static::$instance;
    }
}