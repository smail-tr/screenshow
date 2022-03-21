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

        $uname = validate($_POST['uname']);
        $mail = validate($_POST['mail']);
        $name = validate($_POST['name']);
        $role = validate($_POST['role']);
        
        $idut = validate($_POST['idut']);

        if(empty($uname)){
            header("location:updateUser.php?IdUtilisateur=$idut&error=User Name is required");
                             
        }else if(empty($mail)){
            header("location:updateUser.php?IdUtilisateur=$idut&error=Email is required");
            
        }else if(empty($name)){
            header("location:updateUser.php?IdUtilisateur=$idut&error=Name is required");          
        }else{
            
            $sql = "update utilisateur set NomUtilisateur='$uname',Email='$mail',Name='$name' where IdUtilisateur =$idut";
            $result = mysqli_query($conn,$sql);

            if($result){
                header("location:manageUsers.php?success=successfuly Updated");
            }else{
                header("location:updateUser.php?IdUtilisateur=$idut&error=unknown error occurred ");
            }


        }


}else{
    header("location:manageUsers.php");
}



?>