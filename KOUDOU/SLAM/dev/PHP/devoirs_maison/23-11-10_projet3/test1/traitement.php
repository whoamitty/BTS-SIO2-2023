<?php

// Parametres mysql à remplacer par les vôtres 
define('DB_SERVER', 'localhost'); // serveur mysql
define('DB_SERVER_USERNAME', 'root'); // nom d'utilisateur
define('DB_SERVER_PASSWORD', ''); // mot de passe
define('DB_DATABASE', 'formulaire1Koudou'); // nom de la base
// Connexion au serveur mysql
?>


<!--
CREATE TABLE formulaire
(
    id INT(11)  NOT NULL PRIMARY KEY AUTO_INCREMENT ,
    civilite VARCHAR(5) NOT NULL ,
    nom VARCHAR(150) NOT NULL,
    adresse VARCHAR(255) NOT NULL,
    codepostal VARCHAR(10) NOT NULL,
    ville VARCHAR(150) NOT NULL,
    pays VARCHAR(150) NOT NULL,
    interets VARCHAR(255) NOT NULL,
    message TEXT NOT NULL,
    date datetime NOT NULL
);
-->