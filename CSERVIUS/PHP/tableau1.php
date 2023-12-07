<!-- $recipes= [
    ['Cassoulet', '[...]', 'mathieu.dupont@exemple.com', true],
    ['Couscous', '[...]', 'mathieu.dupont@exemple.com', false]
] -->
<?php

$recipes[0]= 'Cassoulet';
$recipes[1]= 'Couscous';
$recipes[2]= 'Escalope';

$recipes = [];

$recipes[0]= 'Cassoulet'; 
$recipes[1]= 'Couscous';
$recipes[2]= 'Escalope Milanes';

/* $recipe = [
    [
        'title'=> 'Cassoulet',
        'recipes' => 'Etape 1 : des flageolets ; Etape 2 : ...',
        'author' => 'john.doe@exemple.com',
        'enabled' => true,
    ]
    ] ;
    */

// $recipe['title'] = 'Cassoulet'
$recipes = [
    ['Cassoulet', '[...]', 'mathieu.dupont@exemple.com', true],
    ['Couscous', '[...]', 'mathieu.dupont@exemple.com', false]
];

/* for ($i = 0; $i < 2; $i++){
    echo $recipes[$i][0];
} */

/* foreach($recipe as $recipe){
    echo $recipe[0];
} */

$recipe =[ [
        'title'=> 'Cassoulet',
        'recipes' => 'Etape 1 : des flageolets ; Etape 2 : ...',
        'author' => 'john.doe@exemple.com',
        'enabled' => true,
    ],
    [
        'title'=> 'Cassoulet',
        'recipes' => 'Etape 1 : des flageolets ; Etape 2 : ...',
        'author' => 'john.doe@exemple.com',
        'enabled' => true,

    
    ] ] ;


foreach($recipe as $tada){
        echo $tada['title'].' contribué par '.$tada['author'].'<br>';
        
}

// <title> contribué(e) par <author>
/* foreach($recipe as $tada){
    echo $tada.'<br>';
    
} */