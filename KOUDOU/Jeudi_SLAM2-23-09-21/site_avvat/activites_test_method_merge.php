<!DOCTYPE html>
<html lang="fr">


<head>
  <meta charset="utf-8" />
  <!-- <link rel="stylesheet" type="text/css" href="Style01.css"> -->
  <!-- centre l'image de font en bas (chelou ?)-->

  <!-- <link rel="stylesheet" type="text/css" href="Styles.css"> -->
  <!-- background existe  -->

  <!-- <link rel="stylesheet" type="text/css" href="./Styles1.css"> -->
  <!-- background n'existe pas et quasiment même code que style.css, il faut choisir -->

  <!-- <link rel="stylesheet" type="text/css" href="Styles2.css"> -->
  <!-- gère le style de activites.php -->

  <!-- <link rel="stylesheet" type="text/css" href="whoami_styles.css"> -->
  <link rel="stylesheet" type="text/css" href="Styles_method-merge.css">

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



  <!-- <center>


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


    
  </center> -->

    <div id="slider">
      <a href="#" class="control_next">>></a>
      <a href="#" class="control_prev"><</a>
          <ul>
            <li><a href="./activites0.php"> <img src="images/im1.png" alt /></a></li>
            <li><a href="./activites1.php"> <img src="images/im2.png" alt /></a></li>
            <li><a href="./activites2.php"> <img src="images/im3.png" alt /></a></li>
            <li><a href="./activites3.php"> <img src="images/im4.png" alt /></a></li>
            <li><a href="./activites4.php"> <img src="images/im5.png" alt /></a></li>
            <li><a href="./activites5.php"> <img src="images/im6.png" alt /></a></li>
            <li><a href="./activites6.php"> <img src="images/im8.png" alt /></a></li>
            <li><a href="./activites7.php"> <img src="images/im7.png" alt /></a></li>
            <li><a href="./activites8.php"> <img src="images/im9.png" alt /></a></li>
          </ul>
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

  <!-- <script type="text/javascript" src="./jquery.js"> </script>
  <script type="text/javascript" src="./activites.js"> </script> -->
</body>
</html>