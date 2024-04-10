<?php


include "cnx.php";



if(isset($_GET["nom"]) && isset($_GET["prenom"]) && isset($_GET["civilite"]) && isset($_GET["email"]) && isset($_GET["message"]))
{
    $nom = $_GET["nom"];
    $prenom = $_GET["prenom"];
    $civilite=$_GET["civilite"];
    // $phone = $_GET["tel"];
    $email = $_GET["email"];
    $message=$_GET["message"];
    // $sexe = $_GET["gender"];
    
    $req=mysqli_query($link, "insert into user(nom,prenom,civilite,mail, message) values ('$nom','$prenom','$civilite','$mail','$message')");
    

       if($req) 
       {
        header("location:liste.php");

       
        }
        
        else{
         echo   "erreur d'insertion";
        }
}


?>