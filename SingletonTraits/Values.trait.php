<?php

trait ValuesTrait
{

    /**
     * Array holding values gathered from $_SESSION.
     *
     * @var array
     */
    protected $arrValues;

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