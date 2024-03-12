<?php


include "cnx.php";


if(isset($_GET["id"]) && isset($_GET["nom"]) && isset($_GET["prenom"]) && isset($_GET["phone"]) && isset($_GET["mail"]) && isset($_GET["gender"]) )
{

    $id=$_GET["id"];
    $nom=$_GET["nom"];
    $prenom=$_GET["prenom"];
    $tel=$_GET["phone"];
    $mail=$_GET["mail"];
    $gender=$_GET["gender"];

    $req=mysqli_query($link, "UPDATE user SET nom='$nom', prenom='$prenom',tel='$tel', mail='$mail', sexe='$gender' WHERE id='$id'");
      if($req){
        header("location:liste.php");
      }else{
        echo"echec de mise àjour";
      }
}
else{

 echo"champs manquant";
}




?>