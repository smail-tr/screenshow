<?php

if(isset($_GET['IdService'])){
include "db_connection.php";

function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }

    $ids = validate($_GET['IdService']);

    $sql = "SELECT IdService,NomService, b.IdUtilisateur,NomUtilisateur FROM service a JOIN utilisateur b on a.IdUtilisateur = b.IdUtilisateur where IdService = $ids";
        $result = mysqli_query($conn,$sql);


        if(mysqli_num_rows($result) > 0){
            $row =  mysqli_fetch_assoc($result);
         }else{
             header("location:servises.php");
         }


}else if(isset($_POST['update'])){
    
    include "db_connection.php"; 
       
    function validate($data){
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
     }

        $names = validate($_POST['names']);
        $idut =  validate($_POST['idut']);
        $ids = validate($_POST['ids']);

        if(empty($names)){
            header("location:editService.php?IdService=$ids&error=Name Service is required");
            
        
           
        }else{
         
            $sql = "update service set NomService='$names' where IdService =$ids";
            $result = mysqli_query($conn,$sql);

            if($result){
                header("location:servises.php?success=successfuly Updated");
            }else{
                header("location:editService.php?IdUtilisateur=$idut&error=unknown error occurred ");
            }
        }



}else{
    header("location:servises.php");
}


?>