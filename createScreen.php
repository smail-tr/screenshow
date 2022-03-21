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
        $macs = validate($_POST['macs']);
        
        $idm = validate($_POST['idm']);

        if(empty($name)){
            header("location:Screen.php?error=Screen Name is required");
            
        }else if(empty($macs)){
            header("location:Screen.php?error=Adress Mac is required");
           
        }else{
            $sql = "INSERT INTO ecran(AdressMac,NomEcran,IdMessage) VALUES ('$macs','$name',$idm)";
            $result = mysqli_query($conn,$sql);
            if($result){                
                header("location:Screen.php?success=Screen Added Successfuly");
            }else{
                header("location:Screen.php?error=unknown error occurred ");
            }
        }






}else{
    header("location:Screen.php");
}



?>