<?php

if(isset($_POST['create'])){
    include "db_connection.php";
    
    $text=$_POST['text'];

    $output_dir = "uploads/";/* Path for file upload */
	$RandomNum   = time();
	$ImageName      = str_replace(' ','-',strtolower($_FILES['image']['name'][0]));
	$ImageType      = $_FILES['image']['type'][0];
	$ImageExt = substr($ImageName, strrpos($ImageName, '.'));
	$ImageExt       = str_replace('.','',$ImageExt);
	$ImageName      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
	$NewImageName = $ImageName.'-'.$RandomNum.'.'.$ImageExt;
    $ret[$NewImageName]= $output_dir.$NewImageName;

    //--------------------------------------------------------------------------------
    $target_dir = "uploads/";

    $target_file = $target_dir . basename($_FILES["video"]["name"]);
    
   
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    
    if($imageFileType != "mp4" && $imageFileType != "avi" && $imageFileType != "mov" && $imageFileType != "3gp" && $imageFileType != "mpeg")
    {
        header("location:Message.php?error=File Format Not Suppoted");
    } 
    
    else
    {
        
    
    $video_path=$_FILES['video']['name'];
    //---------------------------------------------------------------------------------
	
	/* Try to create the directory if it does not exist */
	if (!file_exists($output_dir))
	{
		@mkdir($output_dir, 0777);
	}               
	move_uploaded_file($_FILES["image"]["tmp_name"][0],$output_dir."/".$NewImageName );
    move_uploaded_file($_FILES["video"]["tmp_name"][0],$output_dir."/".$video_path );
	     $sql = "INSERT INTO typem(Msg_txt,Msg_img,Msg_video)VALUES ('$text','$NewImageName','$video_path')";
         $result = mysqli_query($conn,$sql);
		if ($result) {
			 header("location:Message.php?success=Type Message Added Successfuly");
		}
		else {
            header("location:Message.php?error=unknown error occurred");
	 }
    }}

?>
 
           
        

