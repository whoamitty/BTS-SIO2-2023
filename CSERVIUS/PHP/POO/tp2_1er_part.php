<!-- 04-03-2024 14:42:44 -->
<?php
class Pont{
    // unit="m²"
    // private string $unite = "m²";
    private const UNITE="m²";
    private float $longueur;
    private float $largeur;
    // 5*2='10 m2';

    public static function validerTaille(float $taille): bool {
        if ($taille < 0){
            trigger_error('La longueur ne doit pas être négative', E_USER_ERROR);
            return false;
        }
        else{
            return true;
        }

    }

    public function setLongueur(float $longueur): void{

        if(self::validerTaille($longueur)){
        $this->longueur=$longueur;}
    }
    public function setLargeur(float $largeur): void{
        if(self::validerTaille($largeur)){
            $this->largeur=$largeur;}
    }

    public function getSurface(): string{
        return $this->longueur*$this->largeur . self::UNITE;
    }
}

$bridge = new Pont();
// $bridge->longueur=1200;
// $bridge->largeur=15;

/* $bridge-> setLargeur(1200.5);
$bridge-> setLongueur(15); */

$bridge-> setLargeur(1200.5);
$bridge-> setLongueur(22);
echo $bridge->getSurface();

