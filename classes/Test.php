<?php

class Test
{
    private int $age;

    public function bonjour($truc) : void
    {
        echo "Bonjour $truc";
    }

    public function getAge() : int
    {
        return $this->age;
    }

    public function setAge(int $configAge) : void
    {
        $this->age = $configAge;
    }

}