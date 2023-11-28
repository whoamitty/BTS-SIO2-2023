<?php
// Paramètres MySql à remplacer par les nôtres
define("DB_SERVER", "localhost"); // serveur mysql
define("DB_SERVER_USERNAME", "root"); // nom d'utilisateur
define("DB_SERVER_PASSWORD", "motdepasse"); // Mot de passe
define("DB_DATABASE", "telechargements") ; // nom de la base de données
// connexion au serveur
$connect = mysql_connect(DB_SERVER, DB_SERVER_USERNAME, DB_SERVER_PASSWORD) or die(" impossible de se connecter :" . mysql_error());
// Selection de la base de donnée
mysql_select_db( DB_DATABASE, $connect);
$msg_erreur = "Erreur. les champs suivants doivent être obligatoirement remplis : 
<br/> <br/>';
$msg_ok = 'Votre demande a bien été prise en compte.";
$message = $msg_erreur ;
// Vérification des champs
if(empty($_POST[" Civilite "]))
message. = 'Votre Civilité <br/>';
f(empty($_POST[" nom "]))
message. = 'Votre nom <br/>';
f(empty($_POST[" adresse "]))
message. = 'Votre adresse <br/>';
f(empty($_POST[" codepostal "]))
message. = 'Votre Code postal <br/>';
f(empty($_POST[" ville "]))
message. = 'Votre ville <br/>';
f(empty($_POST[" Commets "]))
message. = 'Votre message <br/>';
// Si un champ est vide, on affiche le message d'erreur
if(strlen($message) > strlen($msg_erreur)) {

    echo $message;
    // sinon c'est ok
} else  {
foreach ($_POST as $index => $valeur ) {
$$index = mysql_real_escape_string (trim($valeur));
}
$interets = $_POST["interets"];
$sqlinterets = " ";
for ( $i = 0; $i < count($interets); $i++)
{
    $sqlinterets .= $interets[$i];
    $sqlinterets .= ", " ;
}

$sql = " INSERT INTO formulaire VALUES(("","".$civilite."",  "".$nom."",  "".$adresse."",  "".$codepostal."",  "".$ville."",  "".$pays."",  "".$sqlinterets."",  "".$qlcomments."",  now())";
$res = mysql_query($sql);
if ($res) {
    echo $msg_ok;
} else {
    echo mysql_error();

   }

}
?>