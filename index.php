<?php
date_default_timezone_set("Europe/Paris");
ini_set('display_errors', '1');

require_once __DIR__ . ".\\vendor\\autoload.php";

use SebastianBergmann\Timer\Timer;

$timer = new Timer();

$timer->start();

// var_dump($timer->stop()->asMicroseconds());

// $timer = new Timer();

for ($cnt=0; $cnt < 10000000; $cnt++) 
{ 
    echo "";
}
var_dump($timer->stop()->asMicroseconds());

echo "<br />";

$timer->start();
$cnt = 0;
while ($cnt < 10000000) 
{ 
    echo "";  
    $cnt++;
}
var_dump($timer->stop()->asMicroseconds());

// spl_autoload_register(function ($className)
// {
//     include "./classes/" . $className . ".php";
// });

/*$message = new Test();

$message->bonjour("Michel");

//@ devant un appel de méthode désactive l'affichage des erreurs

$homme = new Test();

$homme->setAge(42);

echo $homme->age;

var_dump($homme);
*/

/*
include "./classes/Namespace.php";

use function Exemple\bonjour as machin;

machin();

use function \bonjour as salut;

salut();

// $utilisateur = new \Exemple\User() 

use \Exemple\User;

$utilisateur = new User();

var_dump($utilisateur);
*/