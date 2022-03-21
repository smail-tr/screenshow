<?php
if(isset($_GET['IdUtilisateur'])){
    include "db_connection.php";

     function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }

        $id = validate($_GET['IdUtilisateur']);

        $sql = "update utilisateur set Etat='desactive' where IdUtilisateur =$id";
           
        
            $result = mysqli_query($conn,$sql);
   
            if($result){
                header("location:manageUsers.php?success=successfuly Desactivate");
            }else{
                header("location:manageUsers.php?error=unknown error occurred ");
            }



}else{
    header("location:manageUsers.php");
}

?>
