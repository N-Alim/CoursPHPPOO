<?php
class User
{
    use Increment;
    protected $nom;
    protected $prenom;
    protected $quantite;

    public function __construct($a, $b, $c)
    {
        $this->nom = $a;
        $this->prenom = $b;
        $this->quantite = $c;
    }

}