<!-- 2023-11-20 14:46:09 -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php

    // Déclaration du tableau des recettes
    $recipes = [
        ['Cassoulet', '[...]', 'mathieu.dupont@exemple.com', true],
        ['Couscous', '[...]', 'mathieu.dupont@exemple.com', false]
    ]
    ?>

    <h1>Affichage des recettes</h1>
    <ul>
        <?php for ($i = 0; $i < count($recipes); $i++) :  ?>
            <li>
                <?php
                echo "{$recipes[$i][0]}        ( {$recipes[$i][2]} )";
                ?>
            </li>

        <?php endfor; ?>
    </ul>
    

</body>

</html>