<?php

//ini_set('error_reporting', E_ALL);
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('log_errors', 0);

set_error_handler(function ($errno, $errstr, $errfile, $errline){
    var_dump($errno, $errstr, $errfile, $errline);
});

$myArray = ["PHP","Java", "Python"];
echo $myArray[3];