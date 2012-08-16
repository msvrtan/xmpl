<?php
/**
 *
 */

// Require all needed files.
require 'User.class.php';
require 'Logger.class.php';


function myErrorHandler($errno, $errstr, $errfile, $errline) {

        echo "'catched' error:" .$errstr;

    return false;
    return true;
}

function fatal_error_handler() {

    var_dump( error_get_last());
    return true;

}


set_error_handler('myErrorHandler');
register_shutdown_function('fatal_error_handler');


try
{

    $objController = new Controller();
    $objController->showUser();

}
catch(Exception $e )
{
    echo $e->getMessage();
    echo PHP_EOL;
    //var_dump($e->getTrace());

}

echo PHP_EOL .  'The end?' . PHP_EOL;
