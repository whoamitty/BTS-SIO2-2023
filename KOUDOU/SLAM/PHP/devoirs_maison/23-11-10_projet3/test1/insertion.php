<?php
// ouverture d'une connexion à la BDD agenda
$objetPdo = new PDO('mysql:host=localhost;dbname=agenda', 'root','');

// preparation de la requete d'insertion (SQL)
$pdostat = $objetPdo->prepare('INSERT INTO contact (lastName,firstName,phone,mail   ) VALUE (:nom, :prenom, :tel, :mel)');

// On lie chaque marqueur a une valeur

$pdostat->bindValue(':nom', $_POST['lastName'], PDO::PARAM_STR);
$pdostat->bindValue(':prenom', $_POST['firstName'], PDO::PARAM_STR);
$pdostat->bindValue(':tel', $_POST['phone'], PDO::PARAM_STR);
$pdostat->bindValue(':mel', $_POST['mail'], PDO::PARAM_STR);

// execution de la requete preparee

$insertIsok = $pdostat->execute();

if($insertIsok) {
    $message ='le contact a été  ajouté dans la BDD';
}
else {
    $message ='Echec de l\'insertion';
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewportcontent",width="device-width", user-scalable="no", initial-scale="1.0", maximum-scale="1.0", minimum-scale="1.0">
    <title> Document </title>  
</head>
<body>
    <h1> Insertion des Contacts </h1>
    <p>
        <?php echo $message; ?>
        
    </p>
</body>
</html>