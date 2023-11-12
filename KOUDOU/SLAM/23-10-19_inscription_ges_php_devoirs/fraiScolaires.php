<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inscription_db";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
} 

$classe=isset($_POST["classe"]) ?  $_POST["classe"] : "";
$mtpaye=isset($_POST["mtpaye"]) ? $_POST["mtpaye"] : "";
$matricule=isset($_POST["matricule"]) ? $_POST["matricule"] : "";

$mess='';
?>
<?php 
//Enregistrer montant annuel des classes
if(isset($_POST['benrg'])&&!empty($classe)&&!empty($mtpaye)){
   mysqli_query($conn,"insert into tb_frais(classe,montant) values('$classe','$mtpaye')");
   $mess="<b>Enregistrement éffectué avec succès !</b>";
}

//Modification montant annuel
 if(isset($_POST['bmodif'])&&!empty($classe)&&!empty($mtpaye)){
    mysqli_query($conn,"update tb_frais set montant='$mtpaye' where classe='$classe'");
    $mess="<b>Modification éffectuée avec succès !</b>";
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
	<a href="index.php">ACCUEIL</a><br><br>
	<h2>Formulaire de mise à jour des  frais de scolarité</h2>
	<form action="" method="POST">
	<table>
	<tr><td><b>Classe</b></td><td><select name="classe" id="classe" >
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
     <tr><td><b>Montant payé (cfa)</b></td><td><input type="text" name="mtpaye" value="<?php print $mtpaye;?>"></td></tr>
     <tr><td><input type="submit" name="benrg" value="ENREGISTRER" class="bouton"></td><td><input type="submit" name="bmodif" value="MODIFIER" class="bouton"></td></tr>
	</table>
	</form>
	<?php print $mess;?>
	<?php 
	print "<br><br>";
	//liste des montants par classes
	$rq1=mysqli_query($conn,"select * from tb_frais");
	print '<table border="1" class="tab"><tr><th>Classe</th><th>Montant annuel (cfa)</th></tr>';
	while($rst=mysqli_fetch_assoc($rq1)){
	  $classe_data=$rst['classe'];
	  $montant_data=$rst['montant'];
	  print"<tr>";
	         echo"<td>$classe_data</td>";
	         echo"<td>$montant_data</td>";
	         print"</tr>";
	}
	print'</table>';
	?>
	<h2>Historique des paiements éffectués</h2>
	<form action="" method="POST">
	<table >
	<tr><td><b>Matricule</b></td><td><input type="text" name="matricule" value="<?php print $matricule;?>"></td><td><input type="submit" name="brech" value="CHERCHER" class="bouton"></td></tr>
	</table>
	</form>
	<?php
	//recherche  paiement
	if(isset($_POST['brech'])&&!empty($matricule)){
	$rq1=mysqli_query($conn,"select tbHistoriquePaie.matricule,tbHistoriquePaie.datePaie,tbHistoriquePaie.montant,prenom,nom,classe from tbHistoriquePaie inner join tb_eleve on tb_eleve.matricule=tbHistoriquePaie.matricule where tbHistoriquePaie.matricule='$matricule' order by tbHistoriquePaie.datePaie desc");
	print'<table border="1" class="tab"><tr><th>Matricule</th><th>Date</th><th>Montant payé (cfa)</th><th>Nom</th><th>Prénom</th><th>Classe</th></tr>';
	while($rst=mysqli_fetch_assoc($rq1)){
	 print"<tr>";
	         echo "<td>".$rst['matricule']."</td>";
	         echo "<td>".$rst['datePaie']."</td>";
	         echo "<td>".$rst['montant']."</td>";
	         echo "<td>".$rst['prenom']."</td>";
	         echo "<td>".$rst['nom']."</td>";
	         echo "<td>".$rst['classe']."</td>";
	         print "</tr>";
	
	}
		print'</table>';
	}
	?>
	
	<?php 
	//liste historique paiement
	$rq1=mysqli_query($conn,"select tbHistoriquePaie.matricule,tbHistoriquePaie.datePaie,tbHistoriquePaie.montant,prenom,nom,classe from tbHistoriquePaie inner join tb_eleve on tb_eleve.matricule=tbHistoriquePaie.matricule  order by tbHistoriquePaie.datePaie desc");
	print'<table border="1" class="tab"><tr><th>Matricule</th><th>Date</th><th>Montant payé (cfa)</th><th>Nom</th><th>Prénom</th><th>Classe</th></tr>';
	while($rst=mysqli_fetch_assoc($rq1)){
	 print"<tr>";
	         echo"<td>".$rst['matricule']."</td>";
	         echo"<td>".$rst['datePaie']."</td>";
	         echo"<td>".$rst['montant']."</td>";
	         echo"<td>".$rst['prenom']."</td>";
	         echo"<td>".$rst['nom']."</td>";
	         echo"<td>".$rst['classe']."</td>";
	         print"</tr>";
	
	}
		print'</table>';
	/*Code écrit du 24 au 26 mars 2021 à N'djaména au Tchad par
   TARGOTO CHRISTIAN
   Contact: ct@chrislink.net / 23560316682
 */
	?>
	<br>
	</div>
</body>
</html>