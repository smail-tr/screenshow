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

        

        $sql = "select * from utilisateur where IdUtilisateur = $id";
        $result = mysqli_query($conn,$sql);
        
        if(mysqli_num_rows($result) > 0){
           $row =  mysqli_fetch_assoc($result);
        }else{
            header("location:manageUsers.php");
        }
     }else if(isset($_POST['update'])){       
        include "db_connection.php"; 
        
        function validate($data){
         $data = trim($data);
         $data = stripslashes($data);
         $data = htmlspecialchars($data);
         return $data;
         }
 
         $npass = validate($_POST['npass']);        
         $idut = validate($_POST['idut']);
 
         if(empty($npass)){
             header("location:resetPassUser.php?IdUtilisateur=$idut&error=New Password is required");
                                                 
         }else{
             
             $npass = md5($npass);

             $sql = "update utilisateur set Password='$npass',ChangePwd='oui' where IdUtilisateur =$idut";
             $result = mysqli_query($conn,$sql);
 
             if($result){
                 header("location:manageUsers.php?success=successfuly Updated");
             }else{
                 header("location:resetPassUser.php?IdUtilisateur=$idut&error=unknown error occurred ");
             }
 
 
         }


}else{
    header("location:manageUsers.php");
}



?>