<?php
date_default_timezone_set("Europe/Paris");
ini_set('display_errors', '1');

spl_autoload_register(function ($className)
{
    include "./classes/" . $className . ".php";
});

$machin = new User("Michel", "Dumont", 50);
$banane = new Produit("Banane", 22);

$machin->incrementer();
$banane->incrementer()->incrementer();
