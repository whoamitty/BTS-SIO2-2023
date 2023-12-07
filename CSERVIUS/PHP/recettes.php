<!-- 2023-12-04 15:42:02 -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Affichage des recettes</title>
</head>

<?php 
$recipes =[ [
    'title'=> 'Chompignons',
    'recipe' => 'Etape 1 : des flageolets ; Etape 2 : ...',
    'author' => 'john.doe@exemple.com',
    'image' => 'image/flavors-youth_9.webp',
    'is_enabled' => true,
],
[
    'title'=> 'Nouilles de riz',
    'recipe' => 'Etape 1 : des flageolets ; Etape 2 : ...',
    'author' => 'john.doe@exemple.com',
    'image' => 'image/riche.jpg',
    'is_enabled' => true,

],
[
    'title'=> 'Croque Monsieur',
    'recipe' => 'Etape 1 : des flageolets ; Etape 2 : ...',
    'author' => 'john.doe@exemple.com',
    'image' => 'image/anime_girls_toast_eggs_food_closed_eyes_coffee-2199485.jpg',
    'is_enabled' => true,

], ] ;
?>




<body>
    <div  class="container">
        <article>
    
<?php foreach ($recipes as $recipe ) {

    // if ($recipe['is_enabled']){

        if ( array_key_exists('is_enabled', $recipe) && $recipe['is_enabled']){?>


<div class="aline-top" class="card" style="width: 18rem;">
    
    <img src="<?= $recipe['image']; ?>" class="card-img-top" alt="...">
<div class="card-body">
                    <i>
                    <h3 class="card-title"> <?=$recipe['title'];?></h3>

                    <div><?=$recipe['recipe']?></div>
                    <?=$recipe['author']?><br>
                </i>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>


<?php }} ?>

        </article>
    </div>

</body>

</html>