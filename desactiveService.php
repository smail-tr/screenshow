<?php
if(isset($_GET['IdService'])){
    include "db_connection.php";

     function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }

        $id = validate($_GET['IdService']);

        $sql = "update service set Etat='desactive' where IdService =$id";
           
        
            $result = mysqli_query($conn,$sql);
   
            if($result){
                header("location:servises.php?success=successfuly Desactivate");
            }else{
                header("location:servises.php?error=unknown error occurred ");
            }



}else{
    header("location:servises.php");
}

?>