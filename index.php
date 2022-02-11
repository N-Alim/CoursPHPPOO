<?php
date_default_timezone_set("Europe/Paris");

spl_autoload_register(function ($className)
{
    include "./classes/" . $className . ".php";
});

$message = new Test();

$message->bonjour("Michel");

//@ devant un appel de méthode désactive l'affichage des erreurs

$homme = new Test();

$homme->setAge(42);

var_dump($homme);
