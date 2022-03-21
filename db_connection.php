<?php 

$sname = "localhost";
$uname ="root";
$password ="";
$db_name = "dynamique_display_final2";


$conn = mysqli_connect($sname , $uname , $password , $db_name);

if(!$conn){
    echo "Connection Failed !";
}




?>