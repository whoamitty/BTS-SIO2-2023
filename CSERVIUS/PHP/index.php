<!-- 23-11-13 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    date_default_timezone_set("America/Cayenne") ;
    echo 'Jour<br>', date('l d m Y'),'<br><br>' ;
    echo 'Heur<br>', date('H:i:s');
    ?>
    
</body>
</html>