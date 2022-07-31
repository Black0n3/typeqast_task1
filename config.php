<?php
//declare(strict_types=1);
//error_reporting(E_ALL);
//ini_set('display_errors', 'On');

spl_autoload_register(function($class) {
    require_once "Includes/" . $class . '.php';
});