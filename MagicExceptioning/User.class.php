<?php

/**
 *
 */
class User
{

    public $userId;

    public $username;

    public function __construct()
    {
    }

    public function __call($methodName, $methodArgs)
    {

        throw new BadMethodCallException('Unknown method ' . $methodName . ' on class ' . get_class($this) . ' ');
    }

    public function __get($property)
    {

        throw new DomainException('Accessing undefined property ' . $property . ' in class ' . get_class($this));
    }

    public function __set($property, $value)
    {

        throw new DomainException('Setting undefined property ' . $property . ' in class ' . get_class($this));
    }
}
