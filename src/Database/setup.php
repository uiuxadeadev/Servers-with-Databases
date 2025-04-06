<?php

// spl_autoload_extensions(".php");
// spl_autoload_register(function($class) {
//     $file = dirname(__DIR__) . '/'  . str_replace('\\', '/', $class). '.php';
//     if (file_exists(stream_resolve_include_path($file))) include($file);
// });

use Database\MySQLWrapper;

$mysqli = new MySQLWrapper();

$result = $mysqli->query(file_get_contents(__DIR__ . '/Examples/cars-setup.sql'));

if($result === false) throw new Exception('Could not execute query.');
else print("Successfully ran all SQL setup queries.".PHP_EOL);