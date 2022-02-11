<?php
date_default_timezone_set("Europe/Paris");

spl_autoload_register(function ($className)
{
    include "./classes/" . $className . ".php";
});

$message = new Test();

$message->bonjour("Michel");

$homme = new Test();

$homme->setAge(42);

var_dump($homme);
