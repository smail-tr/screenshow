<?php
include "db_connection.php";

$sql = "select * from utilisateur where Role = 'user' ";
$result = mysqli_query($conn,$sql);

?>