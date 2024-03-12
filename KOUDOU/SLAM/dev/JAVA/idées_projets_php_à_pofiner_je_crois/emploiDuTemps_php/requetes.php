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
$matiere=@$_POST["matiere"];
$heure=@$_POST["heure"];
$jour=@$_POST["jour"];
$classe=@$_POST["classe"];
$classe2=@$_POST["classe2"];
$id=@$_POST["id"];
$mess='';
?>
<?php 
//suppréssion séance cours
if(isset($_POST['bsupp'])&&!empty($id)){
 $sql=mysqli_query($conn,"delete from tb_cours where id='$id'");
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
	<meta charset="utf8">
</head>

<body>
	<div align="center">
	<br>
	<a href="index.php">ENREGISTREMENT DES ENSEIGNANTS</a><br><br>
	<a href="cours.php">ENREGISTREMENT DES SEANCES DE COURS</a>
	<h2>Les séances de cours de la semaine par matière et par classe</h2>
	<form action="" method="POST" >
	<table>
	<tr><td><b>Classe </b></td><td><select name="classe" id="classe" >
     <option  value="<?php echo $classe; ?>"><?php echo $classe; ?></option>
         <option  value="6eme">6eme</option>
        <option  value="5eme">5eme</option>
        <option  value="4eme">4eme</option>
        <option  value="3eme">3eme</option>
        <option  value="2nde L">2nde L</option>
        <option  value="2nde S">2nde S</option>
        <option  value="1ere L">1ere L</option>
        <option  value="1ere S">1ere S</option>
        <option  value="TA">TA</option>
        <option  value="TD">TD</option>
        <option  value="TC">TC</option>
     </select></td></tr>
     <tr><td><b>Matière </b></td><td><input type="text" name="matiere" value="<?php print $matiere;?>"></td></tr>
     <tr><td></td><td><input type="submit" name="baff" value="AFFICHER" class="bouton"></td></tr>
	</table>
	</form>
	<h2>Emploi du temps de la semaine par classe</h2>
	<form action="" method="POST" >
	<table>
	<tr><td><b>Classe </b></td><td><select name="classe2" id="classe2" >
     <option  value="<?php echo $classe2; ?>"><?php echo $classe2; ?></option>
         <option  value="6eme">6eme</option>
        <option  value="5eme">5eme</option>
        <option  value="4eme">4eme</option>
        <option  value="3eme">3eme</option>
        <option  value="2nde L">2nde L</option>
        <option  value="2nde S">2nde S</option>
        <option  value="1ere L">1ere L</option>
        <option  value="1ere S">1ere S</option>
        <option  value="TA">TA</option>
        <option  value="TD">TD</option>
        <option  value="TC">TC</option>
     </select></td></tr>
     <tr><td></td><td><input type="submit" name="baff2" value="AFFICHER" class="bouton"></td></tr>
	</table>
	</form>
	
	<h2>Supprimer une séance de cours</h2>
	<form action="" method="POST" >
	<table>
	<tr><td><b>ID </b></td><td><input type="text" name="id" value="<?php print $id;?>"></td></tr>
     <tr><td></td><td><input type="submit" name="bsupp" value="SUPPRIMER" class="bouton"></td></tr>
	<tr><td></td><td><?php print $mess;?></td></tr>
	</table>
	</form>
	<?php 
	print"<br><br>";
	//afficher les séances de cours de la semaine par matiere et par classe
	if(isset($_POST['baff'])&&!empty($classe)&&!empty($matiere)){
	$rq2=mysqli_query($conn,"select * from enseignant_cours where classe='$classe' and matiere='$matiere' order by num_jour ");
	print'<table border="1" class="tab" ><tr><th>ID</th><th>Classe</th><th>Matiere</th><th>Jour</th><th>Heure</th><th>Nom enseignant</th><th>Contact enseignant</th></tr>';
	while($rst2=mysqli_fetch_assoc($rq2)){
	print"<tr>";
	  echo"<td>".$rst2['id']."</td>";
	         echo"<td>".$rst2['classe']."</td>";
	          echo"<td>".$rst2['matiere']."</td>";
	          echo"<td>".$rst2['jour']."</td>";
	           echo"<td>".$rst2['heure']."</td>";
	           echo"<td>".$rst2['nom']."</td>";
	           echo"<td>".$rst2['contact']."</td>";
	         print"</tr>";
	}
	print'</table>';
	
	}
	
	?>
	<?php 
	print"<br><br>";
	//afficher les emplois du temps de la semaine par classe
	if(isset($_POST['baff2'])&&!empty($classe2)){
	$rq2=mysqli_query($conn,"select * from enseignant_cours where classe='$classe2' order by num_jour,heure");
	print'<table border="1" class="tab" ><tr><th>ID</th><th>Classe</th><th>Matiere</th><th>Jour</th><th>Heure</th><th>Nom enseignant</th><th>Contact enseignant</th></tr>';
	while($rst2=mysqli_fetch_assoc($rq2)){
	print"<tr>";
	  echo"<td>".$rst2['id']."</td>";
	         echo"<td>".$rst2['classe']."</td>";
	          echo"<td>".$rst2['matiere']."</td>";
	          echo"<td>".$rst2['jour']."</td>";
	           echo"<td>".$rst2['heure']."</td>";
	           echo"<td>".$rst2['nom']."</td>";
	           echo"<td>".$rst2['contact']."</td>";
	         print"</tr>";
	}
	print'</table>';
	
	}
	
	?>
	</div>
</body>
</html>