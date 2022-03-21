<?php
include "updateScreen2.php";

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
    <title>Update Screen</title>
</head>
<body>
<div class="modal-dialog" style="width: 505px;">
      <div class="modal-content">
             <!-- Modal Header -->
             <div class="modal-header">
                    <h4 class="modal-title">Update Screen</h4>       
            </div>
                    <!-- Modal body --> 
                    <div class="modal-body">
                        <div class="form-group">
                        <?php if(isset($_GET['error'])){    ?>
                            <div class="alert alert-danger" role="alert">
                            <?php echo $_GET['error']; ?>
                            </div>
                            <?php  }?>  
                        </div>
                            <form action="updateScreen2.php" method="POST">            
                                <div class="form-group">
                                <label for="">Adress Mac :</label>
                                <input type="text" name="macsc" value="<?=$row['AdressMac'] ;?>"  class="form-control form-control-lg" disabled>
                                </div><br>
                                <div class="form-group">
                                <label for="">Name Screen :</label>
                                <input type="text" name="namesc" value="<?=$row['NomEcran'] ;?>"  class="form-control form-control-lg" disabled>
                                </div><br>                                                                                                               
                                <div class="form-group">
                                <label for="">Choose New Message :</label>
                                    <?php
                                           include "db_connection.php";
                                               $sql = "SELECT * FROM message ";
                                               $result = mysqli_query($conn,$sql);
                                               
                                               echo "<select class='form-control form-control-lg' name='idmes'  >";
                                                      
                                               while ($row1 = mysqli_fetch_array($result)) {
                                                   
                                                   echo "<option  value='" . $row1['IdMessage'] . "'>" . $row1['Titre'] . "</option>";
                                               }
                                               echo "</select>";
                                               ?> 
                                             </div>
                                             <div class="modal-footer">   
                                             <input type="text" name="ide" value="<?=$row['IdEcran'] ;?>" hidden>           
                                        <button  class="btn btn-primary btn-lg " name="update" style="color: white;"  @click="showAddModal=false">Update Screen</button>
                                        <a href="Screen.php">View All Screens </a>
                                        
                                      </div>

                            </form>
                    </div>
                    <!-- Modal footer -->
      </div>
</div>


      </div>
</div>











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