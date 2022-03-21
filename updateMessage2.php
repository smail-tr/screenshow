<?php
if(isset($_GET['IdMessage'])){
    include "db_connection.php";

  
       $id = $_GET['IdMessage'];
      

       

       $sql = "select IdMessage,Titre,DateDebut,DateFin,a.IdService,NomService,IdType from message a JOIN service b on b.IdService=a.IdService where IdMessage = $id";
       $result = mysqli_query($conn,$sql);
       
       if(mysqli_num_rows($result) > 0){
          $rows =  mysqli_fetch_assoc($result);
       }else{
           header("location:Message.php");
       }
   }


else{
   header("location:updateMessage.php");
}



?>