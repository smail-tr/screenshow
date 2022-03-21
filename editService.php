<?php 
include "editService2.php";
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
  <title>Update Service</title>
</head>
<body>
<div class="modal-dialog">
              <div class="modal-content">
              
                <!-- Modal Header -->
                <div class="modal-header border shadow p-3">
                  <h4 class="modal-title text-center">Update Service</h4>
                  
                </div>
                
                
                <!-- Modal body -->
                <div class="modal-body">
                  <form action="editService2.php" method="POST">
                    <h3 class="text-info text-center"><strong> Updating Service </strong></h3>
                    <br>
                    <?php if(isset($_GET['error'])){    ?>
                    <div class="alert alert-danger" role="alert">
                    <?php echo $_GET['error']; ?>
                     </div>
                     <?php  }?>                   
                     <br>
                    <div class="form-group">
                        <input type="text" id="names" name="names" value="<?=$row['NomService'] ;?>" class="form-control form-control-lg" placeholder="service name">
                    </div><br>                   
                    <input type="text" class="form-control" name="idut" id="idut" disabled value="<?=$row['NomUtilisateur'] ;?>">
                     <br>
                     <div class="modal-footer">
                     <input type="text" name="ids" value="<?=$row['IdService'] ;?>" hidden>
                  <button  class="btn btn-primary btn-lg " style="color: white;" name="update" @click="showAddModal=false">Update</button>
                  <a href="servises.php" >View all Services</a>
                  
                </div> 
                </form>
                </div>
                
                <!-- Modal footer -->
                  
              </div>
            </div>












<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      
      <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/vue@2.6.0"></script>
        
      <script src="script.js"></script>
</body>
</html>