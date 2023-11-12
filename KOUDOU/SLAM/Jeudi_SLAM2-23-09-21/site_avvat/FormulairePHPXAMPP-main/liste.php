<!doctype html>
<html lang ="en">

<head>
<title> liste utilsateurs </title>

<style>

body{
    width:50%;
    margin:auto;
}
table{
  border-collapse: collapse;
  margin:25px 0 ;
  padding:5px;
  font-size : 0.9em;
  font-family:sans-serif;
  box-shadow: 0 0 20px rgba(0,0,0,0.15);
  

}

td,th{
    padding :10px;
    text-align: center;
}

thead{
    padding: 30px;

}
tbody tr{
    border-bottom:1px solid #dddddd;
}
thead tr, tfoot tr{
    background-color: #009879;
    color:#ffffff;
    text-align: center;

}
tbody tr.active-row{
    font-weight: bold;  
    color : #009879;
}

tbody tr:nth-of-type(even){
    background-color:#bfbdbd;

}

input [type="submit"]{
    width: 8em;

    background-color: #4caf50;
    border: none;
    border-radius: 3px;
    color: white;
    padding:6px;
    text-align:center;
    font-weight: bold;
    margin: 5px;
    
}


</style>

</head>

<body>

<h1> litse des utilisateurs </h1>

<table>     
    <thead>
    <tr> 
      <th> Identifiant </th>
      <th> Nom </th>
      <th> Prenom</th>
      <th> teleohone </th>
      <th> Mail</th>
      <th> Sexe <th>
      
   </tr>
</thead>

<?php
include "cnx.php";

$req =mysqli_query($link,"SELECT * FROM user");

while($res=mysqli_fetch_array($req))
{

    ?>

<tbody>

<tr>
    <td><?php echo $res["id"] ; ?> </td>
    <td><?php echo $res["nom"] ; ?> </td>
    <td><?php echo $res["prenom"] ; ?> </td>
    <td><?php echo $res["civilite"] ; ?> </td>
    <td><?php echo $res["email"] ; ?> </td>
    <td><?php echo $res["message"] ; ?> </td>
   
    
    <td>
    <form action="detail.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $res["id"] ; ?>"/>
    <input type="submit" value="Détail"/>
    </form>     

    <form action="delete.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $res["id"] ; ?>"/>
    <input type="submit" value="Supprimer"/>
    </form>
  
    </td>
</tr>

<tbody>



<?php

}

?>
 <tfoot>
    <tr> 
        <td colspan= "7"> 
          list des utilisateurs inscrits
        </td>
    </tr>
 </tfoot>
 
</table>


</body>