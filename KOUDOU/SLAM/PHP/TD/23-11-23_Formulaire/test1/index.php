<!DOCTYPE html>
<html>
<?php
	?>
<head>
<title> Agenda </title>
</head>
<body>
<h2> Ajouter un contact </h2>
<form action="insertion.php" method="POST">
<p>
<label for="nom"> Nom </label>
<input id="nom" type="text" name="firstName" >
</p>
<p>
<label for="prenom"> Prénom </label>
<input id="prenom" type="text" name="lastName" >
</p>
<p>
<label for="tel"> Telephone </label>
<input id="tel" type="text" name="phone" >
</p>
<p>
<label for="mel"> Adresse electronique </label>
<input id="mel" type="email" name="mail" >
</p>
<p>
<input type="submit" value="Enregistrer">
</p>
</form>
</p>
</body>
</html>