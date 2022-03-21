<?php

if(isset($_POST['create'])){
    include "db_connection.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }

        $name = validate($_POST['names']);
        $idu =  validate($_POST['idut']);
        
        if(empty($name)){
            header("location:servises.php?error=Service Name is required");
            
        }else if(empty($idu)){
            header("location:servises.php?error=Responsable is required");
           
        }else{
            $sql = "INSERT INTO service(NomService,IdUtilisateur) VALUES ('$name',$idu)";
            $result = mysqli_query($conn,$sql);
            if($result){                
                header("location:servises.php?success=Service Added Successfuly");
            }else{
                header("location:servises.php?error=unknown error occurred ");
            }
        }
}









?>