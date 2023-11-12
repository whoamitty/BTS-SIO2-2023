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
/*Code écrit du 24 au 26 mars 2021 à N'djaména au Tchad par
   TARGOTO CHRISTIAN
   Contact: ct@chrislink.net / 23560316682
 */
?>
<?php 
	$matricule=isset($_POST["matricule"]) ? $_POST["matricule"] : "";
	$classe2=isset($_POST["classe2"]) ? $_POST["classe2"] : "";
	$mtpaye=isset($_POST["mtpaye"]) ? $_POST["mtpaye"] : "";
	$mess1='';
	$mess2='';
	$mess3='';
	
	$prenom=isset($_POST["prenom"]) ?  $_POST["prenom"]  : "";
	$nom=isset($_POST["nom"]) ? $_POST["nom"] : "";
	$sexe=isset($_POST["sexe"]) ? $_POST["sexe"] : "";
	$dateN=isset($_POST["dateN"]) ? $_POST["dateN"] : "";
	$classe=isset($_POST["classe"]) ? $_POST["classe"] : "";
	$quartier=isset($_POST["quartier"]) ? $_POST["quartier"] : "";
	$contact=isset($_POST["contact"]) ? $_POST["contact"] : "";
	$s_classe=isset($_POST["s_classe"]) ? $_POST["s_classe"] : "";
	$s_ecole=isset($_POST["s_ecole"]) ? $_POST["s_ecole"] : "";
?>
<?php 
//Enregistrement des élèves
if(isset($_POST['benrg'])&&!empty($matricule)&&!empty($nom)&&!empty($prenom)&&!empty($sexe)&&!empty($classe)
&&!empty($dateN)&&!empty($quartier)&&!empty($contact)&&!empty($s_classe)&&!empty($s_ecole)){
$sql=mysqli_query($conn,"insert into tb_eleve(matricule,prenom,nom,sexe,dateNaissance,classe,quartier,contacTuteur,situation_classe,situation_ecole,montantPaye) values('$matricule','$prenom','$nom','$sexe','$dateN','$classe','$quartier','$contact','$s_classe','$s_ecole','0.00') ");
if($sql){
$mess2="<b>Inscription éffectuée avec succès! </b>";
}
else{
 $mess2="<b>Erreur ! </b>";
}
}
?>
<?php
//Modification d'un enregistrement 
if(isset($_POST['bmodif'])&&!empty($matricule)){
//$sql=mysqli_query($conn,"update tb_eleve set prenom='$prenom',nom='$nom',sexe='$sexe',dateNaissance='$dateN',classe='$classe', quartier='$quartier', contacTuteur='$contact',situation_classe='$s_classe',situation_ecole='$s_ecole'  where matricule='$matricule'");
    //prenom
    if(!empty($prenom)){
      mysqli_query($conn,"update tb_eleve set prenom='$prenom' where matricule='$matricule'");
      $mess2="<b>Modification éffectuée avec succès ! </b>";
    }
    //nom
    if(!empty($nom)){
      mysqli_query($conn,"update tb_eleve set nom='$nom' where matricule='$matricule'");
      $mess2="<b>Modification éffectuée avec succès ! </b>";
    }
    //sexe
    if(!empty($sexe)){
      mysqli_query($conn,"update tb_eleve set sexe='$sexe' where matricule='$matricule'");
      $mess2="<b>Modification éffectuée avec succès ! </b>";
    }
    //date de naissance
    if(!empty($dateN)){
      mysqli_query($conn,"update tb_eleve set dateNaissance='$dateN' where matricule='$matricule'");
      $mess2="<b>Modification éffectuée avec succès ! </b>";
    }
    //classe
    if(!empty($classe)){
      mysqli_query($conn,"update tb_eleve set classe='$classe' where matricule='$matricule'");
      $mess2="<b>Modification éffectuée avec succès ! </b>";
    }
    //quartier
    if(!empty($quartier)){
      mysqli_query($conn,"update tb_eleve set quartier='$quartier' where matricule='$matricule'");
      $mess2="<b>Modification éffectuée avec succès ! </b>";
    }
    //Contact tuteur
    if(!empty($contact)){
      mysqli_query($conn,"update tb_eleve set contacTuteur='$contact' where matricule='$matricule'");
      $mess2="<b>Modification éffectuée avec succès ! </b>";
    }
    //situation en classe
    if(!empty($s_classe)){
      mysqli_query($conn,"update tb_eleve set situation_classe='$s_classe' where matricule='$matricule'");
      $mess2="<b>Modification éffectuée avec succès ! </b>";
    }
    //situation dans l'école
    if(!empty($s_ecole)){
      mysqli_query($conn,"update tb_eleve set situation_ecole='$s_ecole' where matricule='$matricule'");
      $mess2="<b>Modification éffectuée avec succès ! </b>";
    }
}
?>
<?php 
//Supprimer un enregistrement
if(isset($_POST['bsupp'])&&!empty($matricule)){
 $sql= mysqli_query($conn,"delete from tb_eleve where matricule='$matricule'"); 
 if($sql){
 $mess2="<b>Suppréssion éffectuée avec succès ! </b>";
 }
 else{
 $mess2="<b>Erreur ! </b>";
 }

}
//comparaison des matricules de la table et du formulaire
	  $sqrech=mysqli_query($conn,"select count(*) as nbcompte from tb_eleve where matricule='$matricule'");
    if($rsrech=mysqli_fetch_assoc($sqrech)){
      $compteur=$rsrech['nbcompte'];
    }
    if(isset($_POST['brech'])&&!empty($matricule)){
    if($compteur==0){
       $mess3="<b>   Introuvable !</b>";
    }
    }

?>
<?php 
//Ajout de montant de paiement
if(isset($_POST['bajout'])&&!empty($mtpaye)&&!empty($matricule)){
$sql1=mysqli_query($conn,"update tb_eleve set montantPaye=montantPaye+'$mtpaye' where matricule='$matricule' ");
$sql2=mysqli_query($conn,"insert into tbHistoriquePaie(matricule,datePaie,montant) values('$matricule',now(),'$mtpaye')");
  if($sql1&&$sql2){
  $mess1="<b>Paiement enregistré avec succès ! </b>";
  }
  else{
   $mess1="<b>Erreur ! </b>";
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
	<a href="fraiScolaires.php">FRAIS SCOLAIRES</a><br><br>
	<a href="effectifs.php">EFFECTIFS PAR CATEGORIE</a>
	<h2>Formulaire d'inscription des élèves</h2>
	<form action="" method="POST">
	<fieldset >
	<table>
	<tr><td><b>Matricule</b></td><td><input type="text" name="matricule" value="<?php print "$matricule";?>"></td><td><input type="submit" name="brech" value="CHERCHER" class="bouton"></td></tr>
	<tr><td><b>Prénom</b></td><td><input type="text" name="prenom" value=""></td><td><?php print $mess3;?></td></tr>
	<tr><td><b>Nom</b></td><td><input type="text" name="nom" value=""></td></tr>
	<tr><td><b>Sexe</b></td><td><select name="sexe" id="sexe"  >
	<option  value="<?php echo $sexe; ?>"><?php echo $sexe; ?></option>
         <option  value="MASCULIN">MASCULIN</option>
        <option  value="FEMININ">FEMININ</option>
     </select></td></tr>
     <tr><td><b>Date de naissance</b></td><td><input type="text" name="dateN" value=""></td></tr>
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
     <tr><td><b>Quartier</b></td><td><input type="text" name="quartier" value=""></td></tr>
     <tr><td><b>Contact du tuteur</b></td><td><input type="text" name="contact" value=""></td></tr>
     <tr><td><b>Situation en classe</b></td><td><select name="s_classe" id="s_classe" >
     <option  value="<?php echo $s_classe; ?>"><?php echo  $s_classe; ?></option>
         <option  value="NOUVEAU/NOUVELLE">NOUVEAU/NOUVELLE</option>
        <option  value="REDOUBLANT(E)">REDOUBLANT(E)</option>
     </select></td></tr>
     <tr><td><b>Situation dans l'école</b></td><td><select name="s_ecole" id="s_ecole" >
     <option  value="<?php echo $s_ecole; ?>"><?php echo  $s_ecole; ?></option>
         <option  value="ANCIEN(NE)">ANCIEN(NE)</option>
         <option  value="NOUVEAU/NOUVELLE">NOUVEAU/NOUVELLE</option> 
     </select></td></tr>
<tr><td></td><td></td><td></td></tr>
<tr><td></td><td></td><td></td></tr>
	<tr><td><input type="submit" name="benrg" value="ENREGISTRER" class="bouton"></td><td><input type="submit" name="bmodif" value="MODIFIER" class="bouton"></td><td><input type="submit" name="bsupp" value="SUPPRIMER" class="bouton"></td></tr>
<tr><td></td><td></td><td></td></tr>
<tr><td></td><td><?php print $mess2;?></td><td></td></tr>
<tr>
<tr><td><b>Montant payé (cfa)</b></td><td><input type="text" name="mtpaye" value=""></td><td><input type="submit" name="bajout" value="AJOUTER" class="bouton"></td></tr>
	<tr><td></td><td><?php print $mess1;?></td><td></td></tr>
<tr><td></td><td></td><td></td></tr>

	</table>
	</fieldset>
	</form>
	<form action="" method="POST">
	<table>
	<tr><td></td><td><input type="submit" name="bliste" value="LISTE DES ELEVES D'UNE CLASSE" class="bouton2"></td><td><select name="classe2" id="classe" >
         <option  value="<?php echo $classe2; ?>"><?php echo $classe2; ?></option>
         <option  value="6eme">6eme</option>
        <option  value="5eme">5eme</option>
        <option  value="4eme">4eme</option>
        <option  value="3eme">3eme</option>
        <option  value="2nde L">2nde L</option>
        <option  value="2nde S">2nde S</option>
        <option  value="1ere L">1ere L</option>
        <option  value="1ere S">1ere S</option>
        <option  value="BTS">BTS</option>
        <option  value="TA">TA</option>
        <option  value="TD">TD</option>
        <option  value="TC">TC</option>
     </select></td></tr>
	</table>
	</form>
	<br><br>
	<?php 
	//affichage de la liste des eleves d'une classe
	if(isset($_POST['bliste'])&& !empty($classe2)){
	$rq1=mysqli_query($conn,"select * from frais_eleve where classe='$classe2' ");
	print'<table border="1" class="tab"><tr><th>Matricule</th><th>Nom</th><th>Prénom</th><th>Sexe</th><th>Montant payé (cfa)</th><th>Classe</th></tr>';
	
	while($rst=mysqli_fetch_assoc($rq1)){
	 
	  $matri=$rst['matricule'];
	        $lenom=$rst['nom'];
	        $leprenom=$rst['prenom'];
	        $lesexe=$rst['sexe'];
	        $laclasse=$rst['classe'];
	        $mtp=$rst['montantPaye'];
	         print"<tr>";
	         echo"<td>$matri</td>";
	         echo"<td>$lenom</td>";
	         echo"<td>$leprenom</td>";
	         echo"<td>$lesexe</td>";
	         echo"<td>$mtp</td>";
	         echo"<td>$laclasse</td>";
	         print"</tr>";
	}
	print'</table>';
	//affichage effectif
	    //nbre total d'eleves
	$rq2=mysqli_query($conn,"select count(matricule) as total from tb_eleve where classe='$classe2'");
		if($rst2=mysqli_fetch_assoc($rq2)){
		$total=$rst2['total'];
		}
		//nbre total de garçons
		$rq3=mysqli_query($conn,"select count(matricule) as totalg from tb_eleve where classe='$classe2' and sexe='MASCULIN'");
		if($rst3=mysqli_fetch_assoc($rq3)){
		$totalg=$rst3['totalg'];
		}
		//nbre total de filles
		$rq4=mysqli_query($conn,"select count(matricule) as totalf from tb_eleve where classe='$classe2' and sexe='FEMININ'");
		if($rst4=mysqli_fetch_assoc($rq4)){
		$totalf=$rst4['totalf'];
		}
		echo"<b>Effectif de la classe de $classe2 : </b><br>";
		echo "<b>Nombre total d'élèves : $total </b><br>";
		echo "<b>Nombre total des garçons : $totalg </b><br>";
		echo "<b>Nombre total des filles : $totalf </b><br>";
		print"<br><br>";
	}
	
	?>
	
	<?php 
	//affichage du résultat de recherche
	   
	if(isset($_POST['brech'])&&!empty($matricule)&&($compteur==1)){
	
	//montant restant
	$rq1=mysqli_query($conn,"select montant-montantPaye as reste from frais_eleve where matricule='$matricule' ");
	if($rs1=mysqli_fetch_assoc($rq1)){
	$reste=$rs1['reste'];
	}
	
	$exe=mysqli_query($conn,"select * from frais_eleve where matricule = '$matricule'");
	if($rst=mysqli_fetch_assoc($exe)){
	  echo"<br><b>Voici les renseignements sur le numéro de matricule ".$rst['matricule']." :</b><br>";
	  echo"<br><b>Prénom : ".$rst['prenom']."</b><br><br>";
	  echo"<b>Nom : ".$rst['nom']."</b><br><br>";
	  echo"<b>Sexe : ".$rst['sexe']."</b><br><br>";
	  echo"<b>Date de naissance : ".$rst['dateNaissance']."</b><br><br>";
	  echo"<b>Classe : ".$rst['classe']."</b><br><br>";
	  echo"<b>Quartier : ".$rst['quartier']."</b><br><br>";
	  echo"<b>Contact du tuteur : ".$rst['contacTuteur']."</b><br><br>";
	  echo"<b>Situation en classe : ".$rst['situation_classe']."</b><br><br>";
	  echo"<b>Situation dans l'école : ".$rst['situation_ecole']."</b><br><br>";
	  echo"<b>Montant payé : ".$rst['montantPaye']." CFA</b><br><br>";
	}
	echo"<b>Montant restant : $reste CFA</b>";
	print"<br><br>";
	
	}
	/*Code écrit du 24 au 26 mars 2021 à N'djaména au Tchad par
   TARGOTO CHRISTIAN
   Contact: ct@chrislink.net / 23560316682
 */
	?>
	



	</div>
</body>
</html>