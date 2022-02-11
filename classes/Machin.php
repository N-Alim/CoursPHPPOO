<?php

final class Machin extends Test
{
    private float $taille;

    public function bonjour($truc) : void
    {
        echo "Bonjour $truc";
    }

    public function getTaille() : float
    {
        return $this->taille;
    }

    public function setTaille(float $combien) : void
    {
        $this->taille = $combien;
    }

}