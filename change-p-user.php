<?php 
session_start();
if(isset($_SESSION['IdUtilisateur']) && isset($_SESSION['NomUtilisateur']) ){

    include "db_connection.php";
    if(isset($_POST['op']) && isset($_POST['np']) && isset($_POST['c_np'])){
       
        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        
        $op = validate($_POST['op']);
        $np = validate($_POST['np']);
        $c_np = validate($_POST['c_np']);
        

        if(empty($op)){
            header("location:userpass.php?error=Current password is required");
            exit();
        }else if(empty($np)){
            header("location:userpass.php?error=New password is required");
            exit();
        }else if($np !== $c_np){
            header("location:userpass.php?error=The Confirmation Password Does Not Match");
            exit();
        }else{
            
            $id = $_SESSION['IdUtilisateur'];
            //hasshin old pass
            $op = md5($op);

            $sql = "select Password from utilisateur where IdUtilisateur = '$id' and Password ='$op' ";
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result) === 1){
                //hashing new pass 
                $np = md5($np);
                
                $sql_2 ="update utilisateur set Password='$np' where IdUtilisateur='$id'";
                 mysqli_query($conn,$sql_2);
                 header("location:userpass.php?success=Your Password Has Been Changed");
                
                exit();
            }else{
                header("location:userpass.php?error=Incorrect Password");
                exit();
            }
        }

        }else{
            header("location:userpass.php");
            exit();
        }








}else{
     
    header("location:index.php");
         exit();

}

?>