<?php

class Administrateur extends Utilisateur implements NouvelUtilisateur
{
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
