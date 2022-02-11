<?php
date_default_timezone_set("Europe/Paris");
ini_set('display_errors', '1');

spl_autoload_register(function ($className)
{
    include "./classes/" . $className . ".php";
});

$utilisateur1 = new Administrateur("Michel", "1234");

// var_dump($utilisateur1);

// echo $utilisateur1->getName();
// echo $utilisateur1->choucroute();
// __get() | $utilisateur1->truc;
// __set() | $utilisateur1->machine = 22;

echo $utilisateur1;

$bidule = new Administrateur("MICHEL", "1234");

$cloneObjet = clone $bidule;

// $bidule("coucou");

$addition = function($a, $b)
{
    return $a + $b;
};

echo $addition(10, 20.2);

// Méthode anonyme et closure (les () appellent la méthode)

(function()
{
    echo "Il fait beau et chaud";
})();

