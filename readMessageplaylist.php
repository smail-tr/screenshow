<?php
include "db_connection.php";
$r = $_SESSION['NomUtilisateur'];
$sql = "SELECT IdMessage, a.IdType,b.Msg_txt,b.Msg_img,b.Msg_video,d.IdUtilisateur FROM message a JOIN typem b on a.IdType = b.IdType join service c on a.IdService = c.IdService JOIN utilisateur d on c.IdUtilisateur = d.IdUtilisateur where d.NomUtilisateur='$r'";
$result = mysqli_query($conn,$sql);

?>