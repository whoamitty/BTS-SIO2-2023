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
	<a href="index.php">ACCUEIL</a>
	<h2>Effectif des élèves de l'établissement scolaire</h2> 
	<?php 
	//nombre total des élèves
	$rq1=mysqli_query($conn,"select count(matricule) as total from tb_eleve");
	if($rst=mysqli_fetch_assoc($rq1)){
	$total=$rst['total'];
	echo"<br><b>Nombre total des élèves : $total</b>";
	}
	//nombre total des garçons
	$rq2=mysqli_query($conn,"select count(matricule) as totalg from tb_eleve where sexe='MASCULIN'");
	if($rst2=mysqli_fetch_assoc($rq2)){
	$totalg=$rst2['totalg'];
	echo"<br><br><b>Nombre total des garçons : $totalg</b>";
	}
	//nombre total des filles
	$rq3=mysqli_query($conn,"select count(matricule) as totalf from tb_eleve where sexe='FEMININ'");
	if($rst3=mysqli_fetch_assoc($rq3)){
	$totalf=$rst3['totalf'];
	echo"<br><br><b>Nombre total des filles : $totalf</b>";
	}
	//nombre total des anciens élèves
	$rq4=mysqli_query($conn,"select count(matricule) as total_ancien from tb_eleve where situation_ecole='ANCIEN(NE)'");
	if($rst4=mysqli_fetch_assoc($rq4)){
	$total_ancien=$rst4['total_ancien'];
	echo"<br><br><b>Nombre total des anciens élèves : $total_ancien</b>";
	}
	//nombre total des nouveaux élèves
	$rq5=mysqli_query($conn,"select count(matricule) as total_nouveaux from tb_eleve where situation_ecole='NOUVEAU/NOUVELLE'");
	if($rst5=mysqli_fetch_assoc($rq5)){
	$total_nouveaux=$rst5['total_nouveaux'];
	echo"<br><br><b>Nombre total des nouveaux élèves : $total_nouveaux</b>";
	}
	?>
	
	</div>
</body>
</html>