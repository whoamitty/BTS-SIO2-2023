<!-- 24-02-26 -->
<?php

class Voiture
{
    private string $marque;
    private string $modele;
    private string $couleur;
    private int $sieges;
    private int $kilometrage;
    private int $vitesse;

    public function __construct($marque,$modele,$couleur,$sieges,$kilometrage,$vitesse)
    {
        echo 'Marque :' . $this->marque . PHP_EOL;
        echo 'Modele :' . $this->modele . PHP_EOL;
        echo 'Couleur :' . $this->couleur . PHP_EOL;
        echo 'Sieges :' . $this->sieges . PHP_EOL;
        echo 'Kilometrage :' . $this->kilometrage . PHP_EOL;
        echo 'Vitesse :' . $this->vitesse . PHP_EOL;
    }

    public function getVitesse(){
        return $this->vitesse;
    }

    public function getKilometrage(){
        return $this->kilometrage;
    }

}

new Voiture = 

$count=1;
echo $voiture-> getVitesse(); //50
$voiture->freiner();
$voiture->freiner();

while ($count<500){
    $Voiture->vitesse*=50;
    $count++;

}

// Quelle est la vitesse ?
echo $voiture->getVitesse(); // 30

$voiture->rouler(100);

// Quel est le kilométrage ?
echo $voiture->getKilometrage(); 

/* private function toString(){
} */

/* {
marque (string)
modele (string)
couleur (string)
sieges (int)
kilometrage (int)
vitesse (int)
} */