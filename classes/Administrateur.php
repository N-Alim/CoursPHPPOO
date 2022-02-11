<?php

class Administrateur extends Utilisateur
{
    public function getName()
    {
        echo parent::getName();
        echo "cela marche";
    }

    public function getRole()
    {
        return self::ROLE;
    }
}