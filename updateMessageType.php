<?php
include "updateMessageType2.php";
include "EditMessageType.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleAdminPage.css">
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800;900&display=swap" rel="stylesheet">	
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
	    <!--fontawesome-->
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" 
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		
		 <link rel="stylesheet" href="font/font/flaticon.css">
    <title>Update User</title>


</head>
<body>
<div class="modal-dialog" style="width: 505px;">
  <div class="modal-content">
                  
                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 class="modal-title">Update MessageType</h4>       
                  </div>
                  
                  <!-- Modal body -->           
                  <div class="modal-body">
                  <div class="form-group">  
                            
                  </div>
                    <form action="EditMessageType.php" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                          <label >Message Text:</label><br>
                          <input type="text" name="msgtxt" value="<?=$row['Msg_txt'] ;?>"  class="form-control form-control-lg" >
                      </div><br>
                      <div class="form-group">
                          <label >upload image:</label><br>
                          <input type="file" name="img" value="<?=$row['Msg_img'] ;?>"  class="form-control form-control-lg" >
                      </div><br>
                      <div class="form-group">
                          <label >upload video:</label><br>
                          <input type="file" name="vid" value="<?=$row['Msg_video'] ;?>"  class="form-control form-control-lg" >
                      </div><br>
                    
                      <div class="form-group">
                          <input type="text" name="idType" value="<?=$row['IdType'] ;?>"  class="form-control form-control-lg" hidden>
                      </div>
                       
                       <div class="modal-footer">
                      
                    <button  class="btn btn-primary btn-lg " type="submit" name="update" style="color: white;"  >Update MessageType</button>
                    <a href="Message.php">View All Messages </a>
                    
                  </div>
                  </form>
                  </div>
                  
                  <!-- Modal footer -->
                  
                  
                </div>
  
  
  
  
  </div>
<!--------------------------------------------------------------------------------------------------------------------->
 




      <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.0"></script>
    
  <script src="script.js"></script>          

</body>
</html>
