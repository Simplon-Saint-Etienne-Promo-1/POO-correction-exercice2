<?php

class Animal {
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function info() {
        echo "Je suis un animal, mon nom est ". $this->name . " et j'ai ". $this->age . " ans";
    }
}

class Mammifere extends Animal {
    public $poids;

    public function __construct($name, $age, $poids) {
        parent::__construct($name, $age);
        $this->poids = $poids;
    }

    public function infoPlus() {
        echo "Je suis un mammifère, mon nom est ". $this->name . ", j'ai ". $this->age . " ans et je pèse " . $this->poids . " kg";
    }
}

class Chien extends Mammifere {
    private $couleur;

    public function __construct($name, $age, $poids, $couleur) {
        parent::__construct($name, $age, $poids);
        $this->couleur = $couleur;
    }

    public function crie() {
        echo "J'aboie ! Mon nom est ". $this->name . ", j'ai ". $this->age . " ans, je pèse " . $this->poids . " kg et ma robe est de couleur " . $this->couleur;
    }
}

$monChien = new Chien("Buddy", 5, 15, "marron");
$monChien->info(); // Affiche "Je suis un animal, mon nom est Buddy et j'ai 5 ans"
$monChien->infoPlus(); // Affiche "Je suis un mammifère, mon nom est Buddy, j'ai 5 ans et je pèse 15 kg"
$monChien->crie(); // Affiche "J'aboie ! Mon nom est Buddy, j'ai 5 ans, je pèse 15 kg et ma robe est de couleur marron"

?>