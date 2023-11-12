<!DOCTYPE html>
<html lang="fr">


<head>
  <meta charset="utf-8" />
  <!-- <link rel="stylesheet" type="text/css" href="css/Style01.css"> -->
  <!-- centre l'image de font en bas (chelou ?)-->

  <!-- <link rel="stylesheet" type="text/css" href="css/Styles.css"> -->
  <!-- background existe  -->

  <link rel="stylesheet" type="text/css" href="css/Styles1.css">
  <!-- background n'existe pas et quasiment même code que style.css, il faut choisir -->

  <link rel="stylesheet" type="text/css" href="css/Styles2.css">
  <!-- gère le style de activites.php -->

  <!-- <link rel="stylesheet" type="text/css" href="css/whoami_styles.css"> -->
  <script src="activites.js"></script>
  
  <style>
    a {
      text-decoration: none
    }
  </style>
  <title>A V V A T - ACCUEIL</title>
</head>

<body>



  <?php
  include("menu.php");
  ?>



  <center>


    <div id="caroussel">



      <div class="images">
        <a href="./activites0.php">  <img src="images/im1.png" alt />   </a>
        <a href="./activites1.php">  <img src="images/im2.png" alt />   </a>
        <a href="./activites2.php">  <img src="images/im3.png" alt />   </a>
        <a href="./activites3.php">  <img src="images/im4.png" alt />   </a>
        <a href="./activites4.php">  <img src="images/im5.png" alt />   </a>
        <a href="./activites5.php">  <img src="images/im6.png" alt />   </a>
        <a href="./activites6.php">  <img src="images/im8.png" alt />   </a>
        <a href="./activites7.php">  <img src="images/im7.png" alt />   </a>
        <a href="./activites8.php">  <img src="images/im9.png" alt />   </a>
        <a href="./activites9.php">  <img src="images/im1.png" alt /> </a>
      </div>


    </div>


    
  </center>


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
</body>
</html>