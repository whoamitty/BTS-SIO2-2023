<!DOCTYPE html>
<html lang =en >
<head>
    <title>Inscription</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
    <link rel="stylesheet" media="screen" type="text/css" href="maf.css"/>
    
</head>

<body>
    <header>
     <nav>
        <ul>
            <li> <a href="https://github.com/AzizAbd"> Home </a> </li>
             <li> <a href ="#">News</a> </li>
             <li> <a href ="#">Contact</a> </li>
        </ul>
     </nav>
    </header>
<?php

include "cnx.php";
if(isset($_POST["id"])){

    $id=$_POST["id"];
    $req= mysqli_query($link,"SELECT * FROM user WHERE id='$id'");

    $res=mysqli_fetch_array($req);

}
else{
 echo "champs manquant";
}

?>
<form action ="modifier.php" method="GET">
    <fieldset>
    <legend>Détail</legend>
    <input type="hidden" name="id" value="<?php echo $res["id"]?> />" />
    <label>Nom</label> <input type ="text" name ="nom" value="<?php echo $res["nom"]?>"  placeholder="votre nom ici"/> <br>
    <label>Prenom</label> <input type ="text" name = "prenom" value="<?php echo $res["prenom"]?>" placeholder="votre Prénom ici"/> <br>
    <label>Email</label> <input type ="text" name="email" value="<?php echo $res["email"]?>" placeholder="votre mail ici"/> <br>
    <label>Civilite</label> 

<?php     
if($res["civilite"]="Mr.")
    {

            
    ?>
    <input type ="radio" name="gender" Value="Mr." checked="true"placeholder="choisir si un homme"/> Homme 
    <input type ="radio" name="gender" Value="Mme" placeholder="choisir si femme" />Femme<br>
    <input type ="radio" name="gender" Value="Mme" placeholder="choisir si Mademoiselle" />Mademoiselle<br>

    
    <?php
}




elseif($res["civilite"]="Mme"){
    ?>
    <input type ="radio" name="gender" Value="Mr." placeholder="choisir si un homme"/> Homme 
    <input type ="radio" name="gender" Value="Mme" checked="true" placeholder="choisir si femme" />Femme<br>
    <input type ="radio" name="gender" Value="Mme" placeholder="choisir si Mademoiselle" />Mademoiselle<br>

    <?php

}
else{
?>
    <input type ="radio" name="gender" Value="Mr." placeholder="choisir si un homme"/> Homme 
    <input type ="radio" name="gender" Value="Mme" placeholder="choisir si femme" />Femme<br>
    <input type ="radio" name="gender" Value="Mlle" checked="true" placeholder="choisir si Mademoiselle" />Mademoiselle<br>

<?php
}  



 ?>
 <input type="submit" value ="modifier"/>
    </fieldset>
        
    </form>

</body>


</html>