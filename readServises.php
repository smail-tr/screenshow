<?php
include "db_connection.php";

$sql = "SELECT `IdService`, `NomService`,a.Etat, NomUtilisateur FROM service a join utilisateur b on a.IdUtilisateur = b.IdUtilisateur";
$result = mysqli_query($conn,$sql);




?>