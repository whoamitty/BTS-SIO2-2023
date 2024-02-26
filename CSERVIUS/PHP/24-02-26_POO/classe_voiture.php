
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
        demarrer();
        accelerer();
        freiner();
        afficherInfos();
        
    }
}


/* {
marque (string)
modele (string)
couleur (string)
sieges (int)
kilometrage (int)
vitesse (int)
} */