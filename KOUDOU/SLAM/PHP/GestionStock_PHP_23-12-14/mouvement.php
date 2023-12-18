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
$id=@$_POST['id'];
$code=@$_POST['code'];
$qte=@$_POST['qte'];
$date=@$_POST['date'];
$nature=@$_POST['nature'];
if(isset($_POST['bajout'])){
$exe1=mysqli_query($conn,"insert into mouvmt values('$id','$code','$qte','$nature','$date')");
if($exe1){
   $mess="Ajout réussie !!";
}
else
   $mess="Echec ajout !!";
}

?>

<?php 
//suppréssion
if(isset($_POST['bsupp'])){
$exe2=mysqli_query($conn,"delete from mouvmt where idmv='$id'");
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
$exe3=mysqli_query($conn,"update mouvmt set codeprd='$code', quantite='$qte',nature='$nature', date='$date' where idmv='$id'");
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
	<h3 align="center">Mouvement des produits (dépot/retrait)</h3>
	<div align="center">
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST"  >
  <table align="">
    <tr><td></td><td><?php echo $mess; ?></td></tr>
    <tr><td></td><td><strong >Identifiant</strong></td></tr>
   <tr><td></td><td><input type="text" name="id" class="champ" size="25"  ></td></tr>
    <tr><td></td><td><strong >Code produit   </strong><select name="code" id="code" >
         <option  value="sv">sv</option>
        <option  value="sr">sr</option>
        <option  value="sp">sp</option>
        <option  value="ncf">ncf</option>
        <option  value="sr">sr</option>
        <option  value="nd">nd</option>
     </select></td></tr>
   <tr><td></td><td><strong >Quantité</strong></td></tr>
   <tr><td></td><td><input type="text" name="qte" class="champ" size="25"  ></td></tr>
   <tr><td></td><td><strong>Date</strong></td></tr>
   <tr><td></td><td><input type="text" name="date" class="champ" size="25"></td></tr>
   <tr><td></td><td><strong>Nature</strong></td></tr>
   <tr><td></td><td><input type="radio" name="nature" value="depot" >Dépot<input type="radio" name="nature" value="Retrait" >Retrait</td></tr>
  
  </table>
  
  <input type="submit" name="bajout" value="Ajouter" class="bouton" >
  <input type="submit" name="bsupp" value="Supprimer" class="bouton" >
  <input type="submit" name="bmodif" value="Modifier" class="bouton" >
  <input type="submit" name="brech" value="Recherche" class="bouton" >

  </form>
  
  <?php 
  //recherche
   if(isset($_POST['brech'])&& !empty($id)){
	$rs=mysqli_query($conn,"select * from mouvmt where idmv='$id' ");
	print'<div style="overflow-x:auto;">';
	print'<table border="1" id="tbfich">';
	print'<tr><th>Identifiant</th><th>Code produit</th><th>Quantité</th><th>Nature</th><th>Date</th></tr>';
	while ($row2 = mysqli_fetch_assoc($rs)){
	$id=$row2['idmv'];
	$codep=$row2['codeprd'];
	$quantite=$row2['quantite'];
	$nature=$row2['nature'];
	$date=$row2['date'];
	print'<tr>';
	print'<td>';
	     echo $id;
	print'</td>';
	
	print'<td>';
	     echo $codep;
	print'</td>';
	
	print'<td>';
	     echo 	$quantite;
	print'</td>';
	
		print'<td>';
	     echo 	$nature;
	print'</td>';
	
		print'<td>';
	     echo 	$date;
	print'</td>';
	
	print'</tr>';
		}
	print'</table >';
print'</div>';
}
	?>
  <p><br></p>
	 <?php 
  
	$rq=mysqli_query($conn,"select * from mouvmt ");
	print'<div style="overflow-x:auto;">';
	print'<table border="1" id="tbfich">';
	print'<tr><th>Identifiant</th><th>Code produit</th><th>Quantité</th><th>Nature</th><th>Date</th></tr>';
	while ($row = mysqli_fetch_assoc($rq)){
	$id=$row['idmv'];
	$codep=$row['codeprd'];
	$quantite=$row['quantite'];
	$nature=$row['nature'];
	$date=$row['date'];
	print'<tr>';
	print'<td>';
	     echo $id;
	print'</td>';
	
	print'<td>';
	     echo $codep;
	print'</td>';
	
	print'<td>';
	     echo 	$quantite;
	print'</td>';
	
		print'<td>';
	     echo 	$nature;
	print'</td>';
	
		print'<td>';
	     echo 	$date;
	print'</td>';
	
	print'</tr>';
		}
	print'</table >';
print'</div>';

	?>
<button onclick="document.location = 'index.php'" id="bt">Produits</button>
<button onclick="document.location = 'requetes.php'" id="bt">Requetes</button>
	</div>
</body>
</html>