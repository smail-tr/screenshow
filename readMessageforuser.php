<?php
include "db_connection.php";
 
$r = $_SESSION['NomUtilisateur'];
$sql = "SELECT b.IdUtilisateur,c.NomUtilisateur,IdMessage,Titre,DateDebut,DateFin,a.IdService,NomService,IdType FROM message a JOIN service b on b.IdService=a.IdService JOIN utilisateur c on b.IdUtilisateur = c.IdUtilisateur where NomUtilisateur ='$r'";
$result1 = mysqli_query($conn,$sql);

?>