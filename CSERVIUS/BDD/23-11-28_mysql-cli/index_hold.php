<?php 
// include("pass.php");

echo "Je kiff ma vie";


error_reporting(E_ALL);
error_reporting(-1);

ini_set('error_reporting', E_ALL);



/* Connexion à une base MySQL avec l'invocation de pilote */
$dsn = 'mysql:dbname=foodly;host=127.0.0.1:2222';
$user = 'root';
include("pass.php");

try {
$dbh = new PDO($dsn, $user, $password);



    $sql = 'SELECT * FROM aliment';

    $res = $dbh->prepare($sql);
    $res->execute();
    $resColumn = $res->fetchAll(PDO::FETCH_COLUMN, 0);

    for ($r = 0; $r <= 3; $r++)
        echo 'Row ' . $r . ' returned: ' . $resColumn[$r] . "\n";

    $dbo = null;
    $res = null;
} catch (Exception $e) {

    // echo '<br />Exception reçue : ',  $e->getMessage(), "<br />";
    if ($res instanceof PDOStatement) {
        print_r($res->errorInfo());
    }

    throw '<pre>'.$e.'</pre>';
}


