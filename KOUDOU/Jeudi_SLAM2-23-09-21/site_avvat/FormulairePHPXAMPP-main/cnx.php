<?php

$user="root";
$mdp="";
$db="avaat";
$server ="localhost";

$link = mysqli_connect($server,$user,$mdp,$db);

if($link)
{
    //echo "";
}

else
{die(mysqli_connect_error());}
?>