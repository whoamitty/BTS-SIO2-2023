<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "emploidutemps_db";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
} 
/*Code écrit du 28 au 29 mars 2021 à N'djaména au Tchad par
   TARGOTO CHRISTIAN
   Contact: ct@chrislink.net / 23560316682
 */
?>
<?php 
$matricule=@$_POST["matricule"];
$nom=@$_POST["nom"];
$contact=@$_POST["contact"];
$mess='';
?>
<?php 
//enregistrement enseignant
if(isset($_POST['benrg'])&&!empty($matricule)&&!empty($nom)&&!empty($contact)){
$sql=mysqli_query($conn,"insert into tb_enseignant(matricule,nom,contact) values('$matricule','$nom','$contact')");
 
if($sql){
 $mess="<b>Enregistrement éffectué avec succès !</b>";
}
else{
 $mess="<b>Erreur !</b>";
}

}

?>
<?php 
//modification enseignant
if(isset($_POST['bmodif'])&&!empty($matricule)&&!empty($nom)&&!empty($contact)){
 $sql=mysqli_query($conn,"update tb_enseignant set nom='$nom',contact='$contact' where matricule='$matricule'");
if($sql){
 $mess="<b>Modification éffectuée avec succès !</b>";
}
else{
 $mess="<b>Erreur !</b>";
}

}

?>
<?php 
//suppréssion enseignant
if(isset($_POST['bsupp'])&&!empty($matricule)){
 $sql=mysqli_query($conn,"delete from tb_enseignant where matricule='$matricule'");
if($sql){
 $mess="<b>Suppréssion éffectuée avec succès !</b>";
}
else{
 $mess="<b>Erreur !</b>";
}

}

?>
<!-- Created by TopStyle Trial - www.topstyle4.com -->
<!DOCTYPE html>
<html>
<head>
	<title>chcode_appli</title>
	<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>

<body>
	<div align="center">
	<br>
	<a href="cours.php">ENREGISTREMENT DES SEANCES DE COURS</a><br><br>
	<a href="requetes.php">REQUETES</a>
	<h2>Formulaire d'enregistrement des enseignants</h2>
	<form action="" method="POST">
	<fieldset >
	<legend >Enseignant</legend>
	<table>
	<tr><td><b>Matricule </b></td><td><input type="text" name="matricule" value=""></td></tr>
	<tr><td><b>Nom </b></td><td><input type="text" name="nom" value=""></td></tr>
	<tr><td><b>Contact </b></td><td><input type="text" name="contact" value=""></td></tr>
	<tr><td></td><td><input type="submit" name="benrg" value="ENREGISTRER" class="bouton"></td></tr>
   <tr><td></td><td><input type="submit" name="bmodif" value="MODIFIER" class="bouton"></td></tr>
	<tr><td></td><td><input type="submit" name="bsupp" value="SUPPRIMER" class="bouton"></td></tr>
	<tr><td></td><td><?php print $mess;?></td><td></td></tr>
	</table>
	</fieldset>
	</form>
	
	<?php 
	print"<br><br>";
	//affichage liste enseignants
	$rq1=mysqli_query($conn,"select * from tb_enseignant ");
	print'<table border="1" class="tab"><tr><th>Matricule</th><th>Nom</th><th>Contact</th></tr>';
	while($rst=mysqli_fetch_assoc($rq1)){
	  print"<tr>";
	         echo"<td>".$rst['matricule']."</td>";
	          echo"<td>".$rst['nom']."</td>";
	           echo"<td>".$rst['contact']."</td>";
	        
	         print"</tr>";
	}
		print'</table>';
	?>
	</div>
	
</body>
</html>