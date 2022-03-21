<?php
session_start();
include "db_connection.php";

if(isset($_POST['uname']) && isset($_POST['pass']) && isset($_POST['role'])){

    function validate($data){
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
      }

      $uname = validate($_POST['uname']);
      $pass = validate($_POST['pass']);
      $role = validate($_POST['role']);
      
      if(empty($uname)){
        header("location:index.php?error=User Name is required");
        exit();
      }else if(empty($pass)){
        header("location:index.php?error=Password is required");
        exit();
      }else{
        
        //hashing password
        $pass = md5($pass);
        //recuperation data
        $sql = "select * from utilisateur where NomUtilisateur = '$uname' and Password ='$pass'";
        $result = mysqli_query($conn, $sql);       

        if(mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);
            
            if($row['NomUtilisateur']=== $uname && $row['Password']=== $pass && $row['Role']=== $role){            
              $_SESSION['NomUtilisateur'] = $row['NomUtilisateur'];
              $_SESSION['Name'] = $row['Name'];
              $_SESSION['IdUtilisateur'] = $row['IdUtilisateur'];
              $_SESSION['Role'] = $row['Role'];
              $_SESSION['ChangePwd'] = $row['ChangePwd'];
              
              
              header("location:home.php");
              exit();
           }else{
            header("location:index.php?error=Incorect User name Or Password Or Role Not Exist");
            exit();
           }
        }else{
            header("location:index.php?error=Incorect User name Or Password");
            exit();  
        }
      }
}else{
    header("location:index.php");
    exit();
  }







?>