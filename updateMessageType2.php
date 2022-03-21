<?php
if(isset($_GET['IdType'])){
    include "db_connection.php";

  
       $id = $_GET['IdType'];
      

       

       $sql = "select * from typem where IdType = $id";
       $result = mysqli_query($conn,$sql);
       $upl="uploads\\";
       if(mysqli_num_rows($result) > 0){
          $row =  mysqli_fetch_assoc($result);
       }else{
           header("location:Message.php");
       }
   }


else{
   header("location:updateMessageType.php");
}



?>