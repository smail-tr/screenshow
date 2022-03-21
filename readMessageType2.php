<?php
include "db_connection.php";

$sql = "SELECT IdEcran, AdressMac, NomEcran, a.Etat,a.IdMessage,b.Titre,b.IdService,c.NomService,b.IdType,d.Msg_txt,d.Msg_img,d.Msg_video FROM ecran a JOIN message b on a.IdMessage = b.IdMessage JOIN service c on b.IdService = c.IdService join typem d on b.IdType = d.IdType";
$result = mysqli_query($conn,$sql);

?>