<?php

abstract class Utilisateur
{
    public const TVA = 1.2;
    public const ROLE = 2;
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

    abstract public function getRole();    
}