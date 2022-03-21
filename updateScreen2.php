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

       $sql = "SELECT * from ecran where IdEcran = $id";
       $result = mysqli_query($conn,$sql);
       
       if(mysqli_num_rows($result) > 0){
          $row =  mysqli_fetch_assoc($result);
       }else{
           header("location:updateScreen.php");
       }
    }else if(isset($_POST['update'])){       
        include "db_connection.php";

        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
            }
            $idmes2 =  validate($_POST['idmes']);
            $ide =    validate($_POST['ide']);       
            
            
                $sql = "update ecran set IdMessage=$idmes2 where IdEcran =$ide";
                $result = mysqli_query($conn,$sql);
    
                if($result){
                    header("location:Screen.php?success=successfuly Updated");
                }else{
                    header("location:updateScreen.php?IdEcran=$ide&error=unknown error occurred ");
                }

    }
?>