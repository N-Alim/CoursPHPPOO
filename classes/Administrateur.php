<?php

class Administrateur extends Utilisateur implements NouvelUtilisateur
{
    // __call() et __callStatic() (similaire mais pour non statique et statique)

    public function __call($methode, $arguments)
    {
        echo "Methode : $methode<br />";
        var_dump($arguments);
    }
    

    // __get() et __set()


    public function __get($nomPropriete)
    {
        echo "Propiété : $nomPropriete";
    }

    public function __set($nomPropriete, $value)
    {
        echo "Propiété : $nomPropriete avec valeur : $value";
    }

    // __toString()
    public function  __toString()
    {
        return "Bien tenté";
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
