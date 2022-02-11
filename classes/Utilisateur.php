<?php

class Utilisateur
{
    protected string $userName;
    protected string $userPassword;

    public function __construct(string $name, string $password)
    {
        $this->userName  = $name;
        $this->userPassword  = $password;
    }

    public function getName()
    {
        return $this->userName;
    }
}