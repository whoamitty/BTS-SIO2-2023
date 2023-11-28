<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php

$recipes = ['Cassoulet', '[...]', 'mathieu.dupont@exemple.com', true];



function count1($recipes){
    $i=0;
    echo "Soluce foreach<br />";
    foreach($recipes as $tada){
        $i++;

    }
    echo $i;
}
// count1($recipes);


$boolean=1;
$i=0;

// Infinie, ça fait planter
/* while ($boolean) {
    echo $recipes[$i].'<br />';

    
    try{
        echo $recipes[$i].'<br />';

    }


    catch (OutOfRangeException) {
        echo 'ça marche<br />';
        echo $i;
        exit;
    }

    $i++;

} */



// echo $recipes[4];

/*
try {
echo $recipes[4];

}

 catch (Exception) {

    // echo "ça marche";
    echo 'Exception reçue : ',  $e->getMessage(), "\n";

        
} */





?>

</body>
</html>