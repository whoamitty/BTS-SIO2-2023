<!DOCTYPE html>
<html lang="fr">


<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" type="text/css" href="css/Styles.css">
  <link rel="stylesheet" type="text/css" href="css/Styles_contact.css">
  <link rel="stylesheet" type="text/css" href="FormulairePHPXAMPP-main/maf.css">
  <style>
    a {
      text-decoration: none
    }
  </style>
  <title>A V V A T - ACCUEIL</title>
</head>

<body background="#F8CD99">
  <div id="bloc_page">
    <header>
      <div id="titre_principal">
        <img src="images/logo_av1.png" alt="Logo de avvat" id="logo" />
      </div>
      <?php
      include("menu.php");
      ?>
    </header>
    <div>
      <img src="images/bannierefestival.png" alt="" /></a>
    </div>
  </div>

  <div class="container">
    <section>
      <article>


        </center>
        <h1><strong>
            <center> Bienvenue sur ce site </center>
          </strong> </h1>


        <!-- <form class="formulaire" action="./admin/formulair/traitement_formulaire.php" method="POST">

          <label for="nom">Nom :</label>
          <input type="text" name="nom" id="nom" required><br><br>

          <label for="email">Email :</label>
          <input type="email" name="email" id="email" placeholder="indiquer votre email" required><br><br>

          <label for="message">Message :</label>
          <textarea name="message" id="message" rows="5" required></textarea><br><br>

          <input type="submit" value="Envoyer">

        </form> -->


    <form class="formulaire" action="FormulairePHPXAMPP-main/insert.php" method="GET">
        <fieldset>
        <legend>Inscription</legend>
        <label>Nom</label> <input type ="text" name ="nom" placeholder="votre nom ici"/> <br>
        <label>Prénom</label> <input type ="text" name = "prenom" placeholder="votre Prénom ici"/> <br>
        <label>tel</label> <input type ="number" name="tel" placeholder="votre numéro de téléphone ici"/> <br>
        <label>Email</label> <input type ="email" name="email" placeholder="votre mail ici"/> <br>
        <label>Civilite</label> 
        <input type ="radio" name="gender" Value="Mr." placeholder="choisir si un homme"/> Homme <input type ="radio" name="gender" Value="Mme" placeholder="choisir si femme" />Femme <input type ="radio" name="gender" Value="Mlle" placeholder="choisir si femme" />Mademoiselle

        <label for="message">Message :</label>

        <textarea name="message" id="message" rows="5" required></textarea><br><br>

        <input type="submit" value="Valider"/>
      </fieldset>
    </form> 




<!-- 
        <form class="formulaire" action="./admin/formulair/traitement_formulaire.php" method="POST">
          <label for="civilite">Civilité :</label>
          <select name="civilite" id="civilite">
            <option value="M.">M.</option>
            <option value="Mme.">Mme.</option>
            <option value="Mlle.">Mlle.</option>
          </select><br><br>

          <label for="nom">Nom :</label>
          <input type="text" name="nom" id="nom" required><br><br>

          <label for="prenom">Prénom :</label>
          <input type="text" name="prenom" id="prenom" required><br><br>

          <label for="email">Email :</label>
          <input type="email" name="email" id="email" required><br><br>

          <label for="message">Message :</label><br>
          <textarea name="message" id="message" rows="5" required></textarea><br><br>

          <input type="submit" value="Envoyer">

        </form> -->

      </article>
      <aside>
        <img src="images/bulle.png" alt="" id="fleche_bulle" />
        <p id="photo_zozor"><img src="images/contact.png" alt="Photo de contact avvat" /></p>
      </aside>
      </center>

    </section>
  </div>



  <footer>
    <hr>
    <div id="tweet">
      <h1> </h1>
      <p><mark><b> © Association A.V.V.A.T <br> Loi 1901 - Tous droits réservés</b></mark></p>
    </div>
    <div id="mes_photos">
      <h1><b><a href="https://www.youtube.com/watch?v=oHPJDqotupQ&t=237s" target="_self">La Video de la dixième anniversaire d'AVVAT</b></a></h1>
    </div>
    <div id="mes_amis">
      <h1><b>INFOS UTILES</b></h1>
      <ul>
        <li><a href=" projets.html ">Projets et perspectives </a></li>
      </ul>
    </div>
  </footer>
  </div>
</body>

</html>