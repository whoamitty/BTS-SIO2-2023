<?php

// $user="root";
// $mdp="";
// $db="avaat";
// $server ="localhost";

// $link = mysqli_connect($server,$user,$mdp,$db);

// if($link)
// {
//     ;
// }//echo ""

// else
// {die(mysqli_connect_error());}




// $db="avaat";
// $server ="localhost";



require 'db-config.php';

try 
{
    $PDO = new PDO('$DB_DSN','$DB_USER','$DB_PASS');
    echo 'Connexion etablie !';
}

catch(PDOException $pe)
{
    echo 'ERREUR :<br>'.$pe->getMessage();
}

?>
