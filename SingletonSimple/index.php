<?php
/**
 * Example runner for multiple calls to simple singleton instances.
 *
 * This example will show how instances of SessionSingleton behave when called
 * multiple times. Here $objSession & $objAnotherSessionInstance are actually
 * same, they both use same instance and share memory space so any change in
 * property values will be seen in both objects.
 *
 */

// Require all needed files.
require 'Session.singleton.php';

// Start session.
session_start();

// Instantiate session object.
$objSession = SessionSingleton::getInstance();

// Show all values stored in session object.
var_dump($objSession->get());

// Set new properties/values to current session
$objSession->set('value1', 1);
$objSession->set('value2', 2);

// Show all values after first set of changes..
var_dump($objSession->get());

// Instantiate another session singleton.
$objAnotherSessionInstance = SessionSingleton::getInstance();

// Show all values from this new object instance.
var_dump($objAnotherSessionInstance->get());

// Set property value on this new object.
$objAnotherSessionInstance->set('value1', 9);

// Show all values from both objects. This shows that both objects reference
// same memory space.
var_dump($objSession->get());
var_dump($objAnotherSessionInstance->get());