<?php
class Produit
{
    use Increment;
    protected $designation;
    protected $quantite;

    public function __construct($a, $b)
    {
        $this->designation = $a;
        $this->quantite = $b;
    }
}