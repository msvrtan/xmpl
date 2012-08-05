<?php


/**
 * Simple session singleton class.
 *
 * This is only an example class.
 */
class SessionSingleton
{

    /**
     * Array holding values gathered from $_SESSION.
     *
     * @var array
     */
    protected $arrValues;

    /**
     * Singleton placeholder.
     *
     * @var SessionSingleton
     */
    protected static $instance;

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

    /**
     * Singleton instance method.
     *
     * Supports lazy loading so instance will ge generated only if needed. Also
     * prohibits mutliple instances of object.
     *
     * @static
     *
     * @return SessionSingleton
     */
    public static function getInstance()
    {

        if (static::$instance === null) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    /**
     * Method for getting property value from current session.
     *
     * It will return all values if $propertyName is set to null, but if property
     * defined but does not exist it will return null.
     *
     * @param string $propertyName
     *
     * @return mixed
     */
    public function get($propertyName = null)
    {

        if ($propertyName === null) {
            return $this->arrValues;
        }

        if (array_key_exists($propertyName, $this->arrValues)) {
            return $this->arrValues[$propertyName];
        }

        return null;
    }

    /**
     * Method for setting property and value to current session.
     *
     * @param string $propertyName
     * @param mixed  $propertyValue
     *
     * @return boolean
     */
    public function set($propertyName, $propertyValue)
    {

        $this->arrValues[$propertyName] = $propertyValue;

        return true;
    }

    /**
     * Method for adding new property and value to current session if not exists.
     *
     * @param string $propertyName
     * @param mixed  $propertyValue
     *
     * @return boolean
     */
    public function add($propertyName, $propertyValue)
    {

        if (array_key_exists($propertyName, $this->arrValues)) {
            return false;
        }

        $this->arrValues[$propertyName] = $propertyValue;

        return true;
    }
}