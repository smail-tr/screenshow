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
        $IdService =  validate($_POST['idser']);
        $IdType =  validate($_POST['idT']);
       
        
        if(empty($titre)){
            header("location:Message.php?error=Message Title is required");
            
        }else if(empty($DateDebut)){
            header("location:Message.php?error=Start date is required");
           
        }else if(empty($DateFin)){
            header("location:Message.php?error=End date is required");
           
        }
        else{
            $sql = "INSERT INTO message(titre,DateDebut,DateFin,IdService,IdType) VALUES ('$titre','$DateDebut','$DateFin','$IdService','$IdType')";
            $result7 = mysqli_query($conn,$sql);
            if($result7){                
                header("location:Message.php?success2=Message Added Successfuly");
            }else{
                header("location:Message.php?error=unknown error occurred ");
            }
        }
}
?>
