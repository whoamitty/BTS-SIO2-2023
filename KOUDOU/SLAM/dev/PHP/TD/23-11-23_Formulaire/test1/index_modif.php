<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./formulaire.css" type="text/css">

</head>

<body>
    <!-- <form method="post" action="traitement.php"> -->
    <form method="post" action="./traitement.php">

        <p class="titre">Coordonnées</p>
        <fieldset id="coordonnees">
            <p id="civilite"><label>Civilité : </label><br>
                <input type="radio" name="civilite" value="M." />M.
                <input type="radio" name="civilite" value="Mlle" />Mlle
                <input type="radio" name="civilite" value="Mme" />Mme
            </p>


        <label>Nom :</label><br>
        <input type="text" name="nom" size="30" value="valeur" maxlength="100" /> <br /><br />
        
        <label>Adresse :</label><br>
        <input type="text" name="adresse" size="30" value="valeur" maxlength="100" /> <br /><br />

        <label>Code postale :</label><br>
        <input type="text" name="codepostal" size="30" value="valeur" maxlength="100" /> <br /><br />

        <label>Ville :</label><br>
        <input type="text" name="ville" size="30" value="valeur" maxlength="100" /> <br /><br />

        <label>Pays :</label><br>
        <select name="pays" >
            <option value="france">France</option>
            <option value="belgique">Belgique</option>
            <option value="suise">Suisse</option>
        </select>

        <p id="interets"><label>Centres d'intérêts :</label><br>
        <input type="checkbox" name="interets[]" value="sport" /> Sport
        <input type="checkbox" name="interets[]" value="cinema" /> Cinéma
        <input type="checkbox" name="interets[]" value="internet" /> Internet
        <input type="checkbox" name="interets[]" value="voyage" /> Voyage


        </p>

        </fieldset>



        <p class="titre">Message</p>
        <fieldset id="message"><br />
        <textarea name="comments" cols="40" rows="5"></textarea>
        </fieldset>
        <p id="buttons">
            <input type="submit" value="Envoyer" />
            <input type="reset" value="Recommencer" />
        </p>

    </form>





</body>

</html>