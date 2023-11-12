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
 $password = " " ; 

 // On cree la connexion
 $conn = new mysqli ($servername, $username, $password);

 // On verifie la connexion
 if ($conn -> connect_error) {
   die ( "Erreur". $conn -> connect_error);
 }
 echo "connexion réussie" ;
 </body>
 </html>