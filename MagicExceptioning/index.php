<?php
/**
 *
 */

// Require all needed files.
require 'User.class.php';
require 'Controller.class.php';

$objController = new Controller();

try {

    $objController->showUser();
} catch (Exception $e) {
    echo PHP_EOL;
    echo $e->getMessage();
    echo PHP_EOL;
    echo $e->getTraceAsString();
}

try {

    $objController->showPasswordHash();
} catch (Exception $e) {
    echo PHP_EOL;
    echo $e->getMessage();
    echo PHP_EOL;
    echo $e->getTraceAsString();
}

echo PHP_EOL;
echo 'The end.';
echo PHP_EOL;