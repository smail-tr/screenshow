<?php
include "db_connection.php";

$sql = "SELECT IdMessage,Titre,DateDebut,DateFin,a.IdService,NomService,IdType FROM message a JOIN service b on b.IdService=a.IdService";
$result1 = mysqli_query($conn,$sql);

?>