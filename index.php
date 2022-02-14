<?php
date_default_timezone_set("Europe/Paris");
ini_set('display_errors', '1');

spl_autoload_register(function ($className)
{
    include "./classes/" . $className . ".php";
});

/*$message = new Test();

$message->bonjour("Michel");

//@ devant un appel de méthode désactive l'affichage des erreurs

$homme = new Test();

$homme->setAge(42);

echo $homme->age;

var_dump($homme);
*/

include "./classes/Namespace.php";

use function Exemple\bonjour as machin;

machin();

use function \bonjour as salut;

salut();

/* $utilisateur = new \Exemple\User() */

use \Exemple\User;

$utilisateur = new User();

var_dump($utilisateur);