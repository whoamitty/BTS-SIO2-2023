<?php 
/*Code php écrit le 20 avril 2021 à N'djaména au Tchad par
   TARGOTO Christian
   Contact: ct@chrislink.net / 23560316682
 */
?>
<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "biblio_db";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
} 

?>
<?php 
$mess1="";
$titre=@$_POST["titre"];
$genre=@$_POST["genre"];
$nom=@$_POST["nom"];
$pays=@$_POST["pays"];
$region=@$_POST["region"];
$annee=@$_POST["annee"];
$nombre=@$_POST["nombre"];
$id=@$_POST["id"];
?>
<?php 
//enregistrement des livres
if(isset($_POST['benrg'])&&!empty($titre)&&!empty($genre)&&!empty($nom)&&!empty($pays)
&&!empty($region)&&!empty($annee)&&!empty($nombre)){
$sql=mysqli_query($conn,"insert into tb_livre(titre_livre,genre_livre,nom_auteur,pays_auteur,region_auteur,annee_sortie,nombre) values('$titre','$genre','$nom','$pays','$region','$annee','$nombre')");
 
if($sql){
 $mess1="<b>Enregistrement éffectué avec succès !</b>";
}
else{
 $mess1="<b>Erreur !</b>";
}

}

?>
<?php 
//supprimer un livre
if(isset($_POST['bsupp'])&&!empty($id)){
 $sql=mysqli_query($conn,"delete from tb_livre where id_livre='$id'");
 if($sql){
   $mess1="<b>Suppréssion éffectuée avec succès !</b>";
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
<div align="center" >
 <h2>Formulaire d'enregistrement et de recherche des livres</h2>
 <form action="" method="POST">
      <fieldset >
      <legend ><b>Livre</b></legend>
      <table>
      <tr><td><b>Titre livre</b></td><td><input type="text" name="titre" value=""></td></tr>
      <tr><td><b>Genre livre</b></td><td><select name="genre" id="genre"  >
	<option  value=""></option>
	      <option  value="ROMAN">ROMAN</option>
         <option  value="NOUVELLE">NOUVELLE</option>
        <option  value="PIECE">PIECE</option>
        <option  value="POESIE">POESIE</option>
        <option  value="SCIENCE">SCIENCE</option>
        <option  value="HISTOIRE">HISTOIRE</option>
     </select></td></tr>
      <tr><td><b>Nom auteur</b></td><td><input type="text" name="nom" value=""></td></tr>
      <tr><td><b>Pays auteur</b></td><td><input type="text" name="pays" value=""></td><td><input type="submit" name="brech" value="CHERCHER" class="bouton"></td></tr>
      
      <tr><td><b>Région auteur</b></td><td><select name="region" id="region"  >
	<option  value=""></option>
	      <option  value="AFRIQUE AUSTRALE">AFRIQUE AUSTRALE</option>
         <option  value="AFRIQUE CENTRALE">AFRIQUE CENTRALE</option>
        <option  value="AFRIQUE OCCIDENTALE">AFRIQUE OCCIDENTALE</option>
        <option  value="AFRIQUE DU NORD">AFRIQUE DU NORD</option>
        <option  value="AMERIQUE DU NORD">AMERIQUE DU NORD</option>
        <option  value="AMERIQUE DU SUD">AMERIQUE DU SUD</option>
        <option  value="ASIE">ASIE</option>
        <option  value="EUROPE">EUROPE</option>
        <option  value="OCEANIE">OCEANIE</option>
     </select></td></tr>
      <tr><td><b>Année sortie</b></td><td><input type="text" name="annee" value=""></td></tr>
      <tr><td><b>Nombre exemplaires</b></td><td><input type="number" min="1" name="nombre" value=""></td></tr>
      <tr><td></td><td><input type="submit" name="benrg" value="ENREGISTRER" class="bouton"></td></tr>
      <tr><td><input type="number" min="1" name="id" placeholder="Identifiant" value="<?php print $id;?>"></td><td><input type="submit" name="bsupp" value="SUPPRIMER" class="bouton"></td></tr>
      
      <tr><td></td><td><?php print $mess1;?></td></tr>
      </table>
      </fieldset>
      </form>
      <?php 
//recherche des livres  de la bibliotheque
if(isset($_POST['brech'])){
print"<br><h3>Résultat de la recherche</h3>";
   $rq1=mysqli_query($conn,"select * from tb_livre order by id_livre desc ");
   //recherche par titre
  if(!empty($titre)){
	$rq1=mysqli_query($conn,"select * from tb_livre where titre_livre like '%$titre%'");
	}
	//recherche par genre
  if(!empty($genre)){
	$rq1=mysqli_query($conn,"select * from tb_livre where genre_livre like '%$genre%'");
	}
	//recherche par nom auteur
  if(!empty($nom)){
	$rq1=mysqli_query($conn,"select * from tb_livre where nom_auteur like '%$nom%'");
	}
		//recherche par pays auteur
  if(!empty($pays)){
	$rq1=mysqli_query($conn,"select * from tb_livre where pays_auteur like '%$pays%'");
	}
	//recherche par région auteur
  if(!empty($region)){
	$rq1=mysqli_query($conn,"select * from tb_livre where region_auteur like '%$region%'");
	}
	//recherche par année de sortie
  if(!empty($annee)){
	$rq1=mysqli_query($conn,"select * from tb_livre where annee_sortie  like '%$annee%'");
	}
	//recherche par genre et pays
  if(!empty($genre)&&!empty($pays)){
	$rq1=mysqli_query($conn,"select * from tb_livre where genre_livre like '%$genre%' and pays_auteur like '%$pays%'");
	}
		//recherche par genre et région
  if(!empty($genre)&&!empty($region)){
	$rq1=mysqli_query($conn,"select * from tb_livre where genre_livre like '%$genre%' and region_auteur like '%$region%'");
	}
	//recherche par genre et année de sortie
  if(!empty($genre)&&!empty($annee)){
	$rq1=mysqli_query($conn,"select * from tb_livre where genre_livre like '%$genre%' and annee_sortie  like '%$annee%'");
	}
	//recherche par genre , région et année de sortie
  if(!empty($genre)&&!empty($region)&&!empty($annee)){
	$rq1=mysqli_query($conn,"select * from tb_livre where genre_livre like '%$genre%' and annee_sortie  like '%$annee%' and region_auteur like '%$region%' ");
	}
	print'<table border="1" class="tab"><tr><th>Titre livre</th><th>Genre livre</th><th>Nom auteur</th><th>Pays auteur</th><th>Région auteur</th><th>Année de sortie</th><th>Nombre</th><th>Identifiant</th></tr>';
	
	while($rst=mysqli_fetch_assoc($rq1)){
	         print"<tr>";
	         echo"<td>".$rst['titre_livre']."</td>";
	         echo"<td>".$rst['genre_livre']."</td>";
	          echo"<td>".$rst['nom_auteur']."</td>";
	           echo"<td>".$rst['pays_auteur']."</td>";
	           echo"<td>".$rst['region_auteur']."</td>";
	           echo"<td>".$rst['annee_sortie']."</td>";
	           echo"<td>".$rst['nombre']."</td>";
	            echo"<td>".$rst['id_livre']."</td>";
	         print"</tr>";
	}
	print'</table>';
}
?>
<?php 
//affichage des livres  de la bibliotheque
print"<h3>Liste des livres de la bibliothèque</h3>";
	$rq2=mysqli_query($conn,"select * from tb_livre order by id_livre desc ");
	print'<table border="1" class="tab"><tr><th>Titre livre</th><th>Genre livre</th><th>Nom auteur</th><th>Pays auteur</th><th>Région auteur</th><th>Année de sortie</th><th>Nombre</th><th>Identifiant</th></tr>';
	
	while($rst2=mysqli_fetch_assoc($rq2)){
	         print"<tr>";
	         echo"<td>".$rst2['titre_livre']."</td>";
	         echo"<td>".$rst2['genre_livre']."</td>";
	          echo"<td>".$rst2['nom_auteur']."</td>";
	           echo"<td>".$rst2['pays_auteur']."</td>";
	           echo"<td>".$rst2['region_auteur']."</td>";
	           echo"<td>".$rst2['annee_sortie']."</td>";
	           echo"<td>".$rst2['nombre']."</td>";
	            echo"<td>".$rst2['id_livre']."</td>";
	         print"</tr>";
	}
	print'</table>';

?>
<?php 
/*Code php écrit le 20 avril 2021 à N'djaména au Tchad par
   TARGOTO Christian
   Contact: ct@chrislink.net / 23560316682
 */
?>
</div>
</body>
</html>