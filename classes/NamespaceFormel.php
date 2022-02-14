<?php

namespace Exemple {
    class User
    {
        public $nom;
        public function setName(string $nom) : void
        {
            $this->nom = $nom;
        }

        public function getName() : string
        {
            return $this->nom;
        }
    }

    const VILLE = 'Vernon';
    function bonjour() {
        echo "Bonjour <br />";
    }
    $codePostal = 27200;
}

namespace {
    function bonjour() {
        echo "Salut <br />";
    }
} 