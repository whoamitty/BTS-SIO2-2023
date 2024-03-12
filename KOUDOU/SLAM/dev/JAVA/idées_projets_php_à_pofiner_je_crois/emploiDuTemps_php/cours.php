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
$mess='';
?>
<?php 
//enregistrement séance cours
if(isset($_POST['benrg'])&&!empty($matricule)&&!empty($matiere)
&&!empty($heure)&&!empty($jour)&&!empty($classe)){
 $sql=mysqli_query($conn,"insert into tb_cours (classe,matiere,Jour,heure,matricule_ens) values('$classe','$matiere','$jour','$heure','$matricule')");
if($sql){
 $mess="<b>Enregistrement éffectué avec succès !</b>";
 mysqli_query($conn,"update tb_cours set num_jour=1 where Jour='LUNDI'");
 mysqli_query($conn,"update tb_cours set num_jour=2 where Jour='MARDI'");
 mysqli_query($conn,"update tb_cours set num_jour=3 where Jour='MERCREDI'");
 mysqli_query($conn,"update tb_cours set num_jour=4 where Jour='JEUDI'");
 mysqli_query($conn,"update tb_cours set num_jour=5 where Jour='VENDREDI'");
 mysqli_query($conn,"update tb_cours set num_jour=6 where Jour='SAMEDI'");
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
	<a href="requetes.php">REQUETES</a>
<h2>Liste générale des enseignants</h2>
<?php 
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
<h2>Formulaire d'enregistrement des séances de cours</h2>
<form action="" method="POST" >
<fieldset >
	<legend >Séance</legend>
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
	<tr><td><b>Matière </b></td><td><input type="text" name="matiere" value=""></td></tr>
	<tr><td><b>Jour </b></td><td><select name="jour" id="jour" >
     <option  value="<?php echo $jour; ?>"><?php echo $jour; ?></option>
         <option  value="LUNDI">LUNDI</option>
        <option  value="MARDI">MARDI</option>
        <option  value="MERCREDI">MERCREDI</option>
        <option  value="JEUDI">JEUDI</option>
        <option  value="VENDREDI">VENDREDI</option>
        <option  value="SAMEDI">SAMEDI</option>
     </select></td></tr>
  <tr><td><b>Heure </b></td><td><select name="heure" id="heure" >
     <option  value="<?php echo $heure; ?>"><?php echo $heure; ?></option>
         <option  value="1ere et 2eme H">1ere et 2eme H</option>
        <option  value="3eme et 4eme H">3eme et 4eme H</option>
        <option  value="5eme et 6eme H">5eme et 6eme H</option>
        <option  value="1ere H">1ere H</option>
        <option  value="2eme H">2eme H</option>
        <option  value="3eme H">3eme H</option>
        <option  value="4eme H">4eme H</option>
        <option  value="5eme H">5eme H</option>
        <option  value="6eme H">6eme H</option>
        <option  value="2eme et 3eme H">2eme et 3eme H</option>
        <option  value="4eme et 5eme H">4eme et 5eme H</option>
     </select></td></tr>
  <tr><td><b>Matricule enseignant </b></td><td><input type="text" name="matricule" value=""></td></tr>
	<tr><td></td><td><input type="submit" name="benrg" value="ENREGISTRER" class="bouton"></td></tr>
	<tr><td></td><td><?php print $mess;?></td><td></td></tr>
	</table>
	</fieldset>
</form>
<?php 
print"<br><br>";
	//affichage liste séances cours
	$rq2=mysqli_query($conn,"select * from tb_cours order by id desc ");
	print'<table border="1" class="tab" ><tr><th>Classe</th><th>Matiere</th><th>Jour</th><th>Heure</th><th>Enseignant</th></tr>';
	while($rst2=mysqli_fetch_assoc($rq2)){
	  print"<tr>";
	         echo"<td>".$rst2['classe']."</td>";
	          echo"<td>".$rst2['matiere']."</td>";
	          echo"<td>".$rst2['Jour']."</td>";
	           echo"<td>".$rst2['heure']."</td>";
	           echo"<td>".$rst2['matricule_ens']."</td>";
	        
	         print"</tr>";
	}
		print'</table>';
	?>
</div>
</body>
</html>