<?php

class A
{

    public function a__call($methodName, $methodArgs)
    {

        throw new BadMethodCallException('Unknown method ' . $methodName . ' on class ' . get_class($this) . ' ');
    }

    public function a__get($property)
    {

        throw new DomainException('Accessing undefined property ' . $property . ' in class ' . get_class($this));
    }

    public function __set($property, $value)
    {

        throw new DomainException('Setting undefined property ' . $property . ' in class ' . get_class($this));
    }
}

/**
 *
 */
class User extends A
{

    public $userId;

    public $username;

    public function __construct()
    {
    }
}
