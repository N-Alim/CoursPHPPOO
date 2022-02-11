<?php
date_default_timezone_set("Europe/Paris");
ini_set('display_errors', '1');

spl_autoload_register(function ($className)
{
    include "./classes/" . $className . ".php";
});

$message = new Test();

$message->bonjour("Michel");

//@ devant un appel de méthode désactive l'affichage des erreurs

$homme = new Test();

$homme->setAge(42);

echo $homme->age;

var_dump($homme);
