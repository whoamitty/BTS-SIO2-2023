<?php
include "cnx.php";

if(isset($_POST["id"])){
 
    $id=$_POST["id"];

    $req=mysqli_query($link,"DELETE FROM USER WHERE ID='$id'");

    if($req)
    {
        header("location:liste.php");

    }
    else {echo "erreur suppression";}
}

else 
{
echo "champs manuant";
}

?>