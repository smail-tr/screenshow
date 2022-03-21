<?php

if(isset($_POST['create'])){
    include "db_connection.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }

        $uname = validate($_POST['uname']);
        $pass =  validate($_POST['pass']);
        $mail = validate($_POST['mail']);
        $name = validate($_POST['name']);
        $role = validate($_POST['role']);
        $etat   = validate($_POST['etat']);
        

        if(empty($uname)){
            header("location:manageUsers.php?error=User Name is required");
            
        }else if(empty($pass)){
            header("location:manageUsers.php?error=Password is required");
           
        }else if(empty($mail)){
            header("location:manageUsers.php?error=Email is required");
            
        }else if(empty($name)){
            header("location:manageUsers.php?error=Name is required");
           
        }else{
            //hashing pass
            $pass = md5($pass);
            $sql = "insert into utilisateur(NomUtilisateur,Password,Email,Name,Role,Etat) values('$uname','$pass','$mail','$name','$role','$etat') ";
            $result = mysqli_query($conn,$sql);

            if($result){                
                header("location:manageUsers.php?success=successfuly Created");
            }else{
                header("location:manageUsers.php?error=unknown error occurred ");
            }


        }
       



}



?>