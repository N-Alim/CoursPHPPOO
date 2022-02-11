<?php

class Mere
{
    private $value = 1;
    
    public function afficherMere()
    {
        echo "Mere::value = $this->value";
        echo "<br />";
    }

    public function __clone()
    {
        $this->value = 10;
    }
}

class Fille extends Mere
{
    public function __clone()
    {
        parent::__clone();
        $this->value = 100;
    }

    public function afficherFille()
    {
        echo "Fille::value = $this->value";
        echo "<br />";
    }
}

$test = new Mere();
$test->afficherMere();

$testClone = clone $test;
$testClone->afficherMere();

$fille = new Fille();
$machin = clone $fille;
$machin->afficherMere();
$machin->afficherFille();
