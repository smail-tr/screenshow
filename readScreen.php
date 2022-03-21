<?php
include "db_connection.php";

$sql = "SELECT IdEcran, AdressMac, NomEcran, a.Etat,a.IdMessage,b.Titre,b.IdService,c.NomService,b.IdType FROM ecran a JOIN message b on a.IdMessage = b.IdMessage JOIN service c on b.IdService = c.IdService ";
$result = mysqli_query($conn,$sql);

?>