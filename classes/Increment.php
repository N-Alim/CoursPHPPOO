<?php
trait Increment
{
    protected $quantite;

    public function incrementer()
    {
        $this->quantite++;
        echo $this->quantite . "<br />";
        return $this;
    }
}
