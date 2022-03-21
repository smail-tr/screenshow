<?php
if(isset($_POST['updateMessage'])){       
  include "db_connection.php"; 
 
   
  $IdMessage = $_POST['IdMessage'];
  $Title = $_POST['Title'];
  $DateDebut = $_POST['DateD'];
  $DateFin = $_POST['DateF'];
  $IdService= $_POST['IdService'];
  $IdType= $_POST['idType'];
  
 //--------------------------------

  
 
   $sql="UPDATE message SET Titre='$Title',DateDebut='$DateDebut',DateFin='$DateFin',IdService=$IdService,IdType=$IdType where IdMessage= $IdMessage";
   $result=mysqli_query($conn,$sql);
   
   if($result){
     header("location:managements.php?success3=successfuly Updated");
 }else{
     header("location:managements.php?IdMessage=$IdMessage&error=unknown error occurred ");
 }
     
    }else{
      header("location:managements.php");
    }