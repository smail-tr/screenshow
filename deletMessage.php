<?php
if(isset($_GET['IdMessage'])){
    include "db_connection.php";

     function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }

        $id = validate($_GET['IdMessage']);

        $sql = "delete from message where IdMessage =$id";
           
        
            $result = mysqli_query($conn,$sql);
   
            if($result){
                header("location:Message.php?success3=successfuly Deleted");
            }else{
                header("location:Message.php?error=unknown error occurred ");
            }



}else{
    header("location:Message.php");
}
?>