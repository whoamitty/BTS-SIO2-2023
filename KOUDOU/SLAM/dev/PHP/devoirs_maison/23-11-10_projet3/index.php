<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    


<form class="formulaire" action ="FormulairePHPXAMPP-main/insert.php" method="GET">
<fieldset>
    <legend>Inscription</legend>
<label>Sujet</label> <input type ="text" name ="nom" placeholder="votre nom ici"/> <br>
<!-- <input type ="radio" name="gender" Value="Mr." placeholder="choisir si un homme"/> Homme <input type ="radio" name="gender" Value="Mme" placeholder="choisir si femme" />Femme <input type ="radio" name="gender" Value="Mlle" placeholder="choisir si femme" />Mademoiselle -->

<label for="message">Message :</label>

<textarea name="message" id="message" rows="5" required></textarea><br><br>

<input type="submit" value="Valider"/>
</fieldset>
</form> 

</body>
</html>