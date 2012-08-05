<?php
/**
 * Example runner for multiple calls to singleton instances.
 *
 * Idea of this example is to show how singleton logic can be separated into
 * trait and values logic into trait of its own. Since classes in PHP can not
 * extend multiple classes this is the only way to separate chunks of often used
 * logic to help developers in DRY.
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