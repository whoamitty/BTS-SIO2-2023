<!DOCTYPE html>
<html lang="fr">
    <head>
    <meta charset="utf-8" />
<title>AVVAT - Contact</title>
</head>
<body>
    <h1> Base de données MySQL </h1>
 <?php
 $servername = "localhost" ;
 $username = "root" ;
 $password = "root" ; 

 // On teste la connexion
 try {
 $conn = new PDO ("mysql:host=$servername;dbname=formulaire", $username, $password);

 // On définit le mode d'erreur de DPO sur exception
 $conn = setAttribute( PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 echo "connexion réussie";
 }
  /* on capture les exceptions si une exception est lancée et on affiche
 * les informations relatives à celle-ci */
catch ( PDO Exception $e) {
   echo " Erreur : ".$e -> getMessage();

}
//On ferme la connexion
$conn = null;
?>
 </body>
 </html>