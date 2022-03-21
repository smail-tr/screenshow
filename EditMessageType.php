<?php
if(isset($_POST['update'])){       
    include "db_connection.php"; 
    
   

     $msgtext = $_POST['msgtxt'];
     $IdType= $_POST['idType'];
     $c_image= $_FILES['img']['name'];
    $c_image_temp=$_FILES['img']['tmp_name'];
    //--------------------------------
    $c_video= $_FILES['vid']['name'];
    $c_video_temp=$_FILES['vid']['tmp_name'];

    move_uploaded_file($c_image_temp , "uploads/$c_image");
    move_uploaded_file($c_image_temp , "uploads/$c_video");

    /* $new_img = $_FILES['img']['name'];
     $old_img = $_POST['old_img'];
     $idType = $_POST['idType'];

     if($new_img !=''){
          $update_filename = $_FILES['img']['name'];
     }else{
      $update_filename = $old_img ; 
     }
     if(file_exists("uploads/".$_FILES['img']['name'])){
        $filename = $_FILES['img']['name'];
        header('location: updateMessageType.php');
     }else{*/
      $sql="update typem set Msg_txt='$msgtext',Msg_img='$c_image',Msg_video='$c_video' where IdType=$IdType";
      $result=mysqli_query($conn,$sql);
      header("location:Message.php?success=succesfuly updated");
     //}

    /* if(empty($text)){
         header("location:updateMessageType.php?Idtype=$id&error=messagetype is required");
         
     }else{
         move_uploaded_file($c_image_temp , "uploads\$c_image");
         move_uploaded_file($c_video_temp , "uploads\$c_video");
         
         $sql = "update typem set Msg_txt='$text',Msg_img='$c_image',Msg_video='$c_video'where IdType =$id";
         $result = mysqli_query($conn,$sql);

         if($result){
             header("location:Message.php?success=successfuly Updated");
         }else{
             header("location:Message.php?IdType=$id&error=unknown error occurred ");
         }


     }*/
    }