<?php

class Administrateur extends Utilisateur implements NouvelUtilisateur
{
    // __call() et __callStatic() (similaire mais pour non statique et statique)

    public function __call($methode, $arguments)
    {
        echo "Methode : $methode<br />";
        var_dump($arguments);
    }
    
    private function display()
    {
        echo "Rien";
    }


    public function getName()
    {
        echo parent::getName();
        echo "cela marche";
    }

    public function effectuerPeriodeEssai()
    {
        echo "Je suis en période d'essai";
    }

    public function getRole()
    {
        return self::ROLE;
    }
}
