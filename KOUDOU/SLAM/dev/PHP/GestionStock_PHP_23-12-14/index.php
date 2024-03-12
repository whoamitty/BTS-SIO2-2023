<?php 
/*application réalisée du 13 au 15 Avril 2020 à Ndjaména au Tchad par
  Targoto Christian
  contact: +23560316682 / ct@chrislink.net
*/
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "stockges";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
} 

?>
<?php 
//ajout
$mess="";
$code=@$_POST['code'];
$nom=@$_POST['nom'];
$prix=@$_POST['prix'];
if(isset($_POST['bajout'])){
$exe1=mysqli_query($conn,"insert into produit values('$code','$nom','$prix')");
if($exe1){
   $mess="Ajout réussie !!";
}
else
   $mess="Echec ajout !!";
}

?>

<?php 
//suppression
if(isset($_POST['bsupp'])){
$exe2=mysqli_query($conn,"delete from produit where codeprod='$code'");
if($exe2){
   $mess="Suppréssion réussie !!";
}
else
   $mess="Echec suppréssion !!";
}

?>

<?php 
//modifier
if(isset($_POST['bmodif'])){
$exe3=mysqli_query($conn,"update produit set nomprod='$nom',prix='$prix' where codeprod='$code'");
if($exe3){
   $mess="Modification réussie !!";
}
else
   $mess="Echec modification !!";
}
?>

<!-- Created by TopStyle Trial - www.topstyle4.com -->
<!DOCTYPE html>
<html>
<head>
	<title>chcode_appli</title>
	<meta charset="utf8">
	<link rel="stylesheet" type="text/css" href="moncss.css">
</head>

<body>
	<h3 align="center">Gestion de stock dans une épicerie</h3>
		<h4 align="center">Formulaire d'ajout des produits</h4>
	<div align="center" >
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST"  >
  <table align="">
    <tr><td></td><td><?php echo $mess; ?></td></tr>
    <tr><td></td><td><strong >Code produit</strong></td></tr>
   <tr><td></td><td><input type="text" name="code" class="champ" size="25"  ></td></tr>
   
   <tr><td></td><td><strong>Nom produit</strong></td></tr>
   <tr><td></td><td><input type="text" name="nom" class="champ" size="25"></td></tr>
   
   <tr><td></td><td><strong>Prix unitaire</strong></td></tr>
   <tr><td></td><td><input type="text" name="prix" class="champ" size="25"></td></tr>
  
  </table>
  
  <input type="submit" name="bajout" value="Ajouter" class="bouton" >
  <input type="submit" name="bsupp" value="Supprimer" class="bouton" >
  <input type="submit" name="bmodif" value="Modifier" class="bouton" >
  <input type="submit" name="brech" value="Recherche" class="bouton" >
  </form>
  <p><br></p>
  
  <?php 
//recherche

if(isset($_POST['brech'])&& !empty($code)){
$exe4=mysqli_query($conn,"select * from produit where codeprod='$code'");
if($exe4){
   print'<div style="overflow-x:auto;">';
	print'<table border="1" id="tbfich">';
	print'<tr><th>Code produit</th><th>Nom produit</th><th>Prix unitaire</th></tr>';
	while ($row = mysqli_fetch_assoc($exe4)){
	$codep=$row['codeprod'];
	$nomp=$row['nomprod'];
	$prix=$row['prix'];
	print'<tr>';
	print'<td>';
	     echo $codep;
	print'</td>';
	
	
	print'<td>';
	     echo 	$nomp;
	print'</td>';
	
		print'<td>';
	     echo 	$prix;
	print'</td>';
	
	print'</tr>';
		}
	print'</table >';
print'</div>';
}

}
?>
  
  
  <?php 
  
	$rq=mysqli_query($conn,"select * from produit ");
	print'<div style="overflow-x:auto;">';
	print'<table border="1" id="tbfich">';
	print'<tr><th>Code produit</th><th>Nom produit</th><th>Prix unitaire</th></tr>';
	while ($row = mysqli_fetch_assoc($rq)){
	$codep=$row['codeprod'];
	$nomp=$row['nomprod'];
	$prix=$row['prix'];
	print'<tr>';
	print'<td>';
	     echo $codep;
	print'</td>';
	
	
	print'<td>';
	     echo 	$nomp;
	print'</td>';
	
		print'<td>';
	     echo 	$prix;
	print'</td>';
	
	print'</tr>';
		}
	print'</table >';
print'</div>';

	?>
		<button onclick="document.location = 'mouvement.php'" id="bt">Mouvement</button>
		<button onclick="document.location = 'requetes.php'" id="bt">Requetes</button>
  </div>
</body>
</html>