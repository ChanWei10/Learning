<?php
include "game.php";
include "animal.php";
include "rabbit.php";
include "tortoise.php";

// AUTOLOAD INCLUDE （自动拿去找该include的php file）
// function myAutoLoad($class_name) {
//     $class_name = strtolower($class_name);
//     $path = "{$class_name}.php";
//     if(file_exists($path)){
//         require_once($path);
//     }else{
//         die("The file {$class_name}.php could not be found.");
//     }
                
// }

// spl_autoload_register('myAutoLoad');

$rabbit = new Rabbit ("Ratu");
$tortoise = new Tortoise ("Tatu");

$game = new Game();

$game->takepart($rabbit);
// var_dump($rabbit);
$game->takepart($tortoise);

$game->warmup();
$game->start();
$game->report();
?>