<?php
if(isset($_GET['IdEcran'])){
    include "db_connection.php";

     function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }

        $id = validate($_GET['IdEcran']);

        $sql = "update ecran set Etat='desactive' where IdEcran =$id";
           
        
            $result = mysqli_query($conn,$sql);
   
            if($result){
                header("location:Screen.php?success=successfuly Desactivate");
            }else{
                header("location:Screen.php?error=unknown error occurred ");
            }



}else{
    header("location:Screen.php");
}
?>