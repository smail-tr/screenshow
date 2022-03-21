<?php
include "updateMessage2.php";


?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="styleMessage.css">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800;900&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT"
        crossorigin="anonymous"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Roboto:wght@300;400;500;700;900&display=swap"
        rel="stylesheet">
    <!--fontawesome-->

    <link rel="stylesheet" href="font/font/flaticon.css">
    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800;900&display=swap" rel="stylesheet">
    <title>Update Message</title>

    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Roboto:wght@300;400;500;700;900&display=swap"
        rel="stylesheet">
    <!--fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <link rel="stylesheet" href="font/font/flaticon.css">

    <script src="jquery.datetimepicker.min.js"></script>
</head>




<body>
<div class="modal-dialog" style="width: 505px;" class="border shadow p-3 rounded">
  <div class="modal-content">
                  
                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 class="modal-title">Update Message</h4>       
                  </div>
                  
                  <!-- Modal body -->           
                  <div class="modal-body">
                  <div class="form-group">  
                            
                  </div>
                    <form action="EditMessageforuser.php" method="POST" >
                      <div class="form-group">
                          <label >Message Title:</label><br>
                          <input type="text" class="form-control" name="Title" value="<?=$rows['Titre'] ;?>" >
                      </div><br>
                      <div class="form-group">
                          <label > Start Date:</label><br>
                          <input class="form-control"  value="<?=$rows['DateDebut'] ;?>"  type="text"  name="DateD">
                      </div><br>
                      <div class="form-group">
                          <label >End Date:</label><br>
                          <input class="form-control"  value="<?=$rows['DateFin'] ;?>"  type="text"  name="DateF">
                      </div><br>
                     
                      <div class="form-group">
                      <label >Service:</label><br>
                      <?php

                                include "db_connection.php";
                                
                               

                                echo "<select class='form-control form-control-lg' name='IdService' >";
                                echo "<option selected value='" . $rows['IdService'] . "'>" . $rows['NomService'] . "</option>";
                                    
                                echo "</select>";

                                ?>
                      </div><br>
                      
                      <input type="text" class="form-control" value="<?=$rows['IdMessage'] ;?>" name="IdMessage" hidden >
                      </div><br>
                      <div class="form-group">
                      <label >Id Type:</label><br>
                      <?php

                                include "db_connection.php";

                                $sql = "SELECT IdType FROM typem";
                                $result = mysqli_query($conn,$sql);

                                echo "<select class='form-control form-control-lg' name='idType' >";
                                echo "<option selected value='" . $rows['IdType'] . "'>" . $rows['IdType'] . "</option>";
                                    
                                while ($row = mysqli_fetch_array($result)) {
                                
                                    echo "<option value='" . $row['IdType'] . "'>" . $row['IdType'] . "</option>";
                                }
                                echo "</select>";

                                ?>
                      </div>

                       
                       <div class="modal-footer">
                      
                    <button  class="btn btn-primary btn-lg "  name="updateMessage" style="color: white;"  >Update Message</button>
                    <a href="managements.php">View All Messages </a>
                    
                  </div>
                  </form>
                  </div>
                  
                  <!-- Modal footer -->
                  
                  
                </div>
  
  
  
  
  </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.0"></script>
    <script src="jquery.datetimepicker.full.min.js"></script>
    <script src="script.js"></script>
    <script type="text/javascript">
     

    </script>


</body>

</html>