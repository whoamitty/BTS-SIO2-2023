<?php

$db = null ;
$recipes= [];

try {
    $db=new PDO(
        'mysql:dbname=foodly;host=127.0.0.1:2222;charset=utf8',
        'root',
        '',
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]

    );

    $query = 'SELECT title, content, author, img FROM recipe WHERE
    isEnabled=:isEnable';

    $statement=$db->prepare($query, [PDO::ATTR_CURSOR =>
    PDO::CURSOR_FWDONLY]);

    $statement->execute(['isEnabled'=> true]);

    $recipes=$statement-> fetchAll();
    echo '<pre>';
    var_dump($recipes);
    echo '</pre>';
}

catch(Exception $e){

}