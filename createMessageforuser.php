<?php

if(isset($_POST['createMessage'])){
    include "db_connection.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }

        $titre = validate($_POST['title']);
        $DateDebut =  validate($_POST['DateD']);
        $DateFin =  validate($_POST['DateF']);
        $IdService =  validate($_POST['ids']);
        $IdType =  validate($_POST['idT']);
       
        
        if(empty($titre)){
            header("location:managements.php?error=Message Title is required");
            
        }else if(empty($DateDebut)){
            header("location:managements.php?error=Start date is required");
           
        }else if(empty($DateFin)){
            header("location:managements.php?error=End date is required");
           
        }
        else{
            $sql = "INSERT INTO message(titre,DateDebut,DateFin,IdService,IdType) VALUES ('$titre','$DateDebut','$DateFin','$IdService','$IdType')";
            $result7 = mysqli_query($conn,$sql);
            if($result7){                
                header("location:managements.php?success2=Message Added Successfuly");
            }else{
                header("location:managements.php?error=unknown error occurred ");
            }
        }
}
?>