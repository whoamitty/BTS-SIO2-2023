<?php

class Personnage{
    private string $nom;
    private int $pointsDevie=5000;
    private int $forceAttaque=100;
    private Arme $armeJoueur;

    public function init($nom,$pointsDevie, $forceAttaque): void{
        $this->nom=$nom;
        $this->pointsDevie=$pointsDevie;
        $this->forceAttaque=$forceAttaque;

    }

    public function initArme($nom, $bonusAttaque): void {
        $this->armeJoueur = new Arme();
        $this->armeJoueur->init($nom, $bonusAttaque);
    }

    public function attaquer(Personnage $cible): int{
        if  ($cible->pointsDevie>0){
        echo $this->nom .' attaque ' . $cible->getName()."<br>";
        $degats=$this->forceAttaque+$this->armeJoueur->getbonusAttaque();
        $this->recevoirDegats($degats,$cible);
        return 1;
    }
    else {
        echo "Le combat est terminé<br>";
        echo $this->nom.' as gagné';
        return 0;
    }
    

        
    }

    
    public function recevoirDegats(int $degats,Personnage $cible){
        
        $cible->pointsDevie-=$degats;
        if  ($cible->pointsDevie<0){
            $cible->pointsDevie=0;
            
        }
        echo $cible->getName() .' as perdus '. $degats.'PV'  ;
        echo '<br>';




    }

    public function getName() : string {
        return $this->nom;
    }

    public function getPointsDevie() : string {
        return $this->pointsDevie;
    }
    public function presentation(){
        echo $this->nom . '<br>';
        echo "Points de vie: ".$this->pointsDevie . '<br>';
        echo 'Arme: '.$this->armeJoueur->getName();
    }



}

    



class Arme{
    private string $nom;
    private int $bonusAttaque;

    public function init($nom, $bonusAttaque): void {
        $this->nom=$nom;
        $this->bonusAttaque=$bonusAttaque;

    }

    public function getBonusAttaque() : int {
        return $this->bonusAttaque;

    }
    public function getName() : string {
        return $this->nom;

    }

    

}

$joueur1=new Personnage;
$joueur2=new Personnage;

$joueur1->init("Carine",50000,300);
$joueur1->initArme("Voix",3000);

$joueur2->init("Mikasa",50000,200);
$joueur2->initArme("Lame",200);


$live=1;
while ($live)  {
    $joueur1->presentation();
    echo '<br>';
    $joueur2->presentation();
    echo '<br><br>';


    $live=$joueur1->attaquer($joueur2);
    if ($live){
    $live=$joueur2->attaquer($joueur1);}

}


