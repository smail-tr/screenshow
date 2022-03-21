<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styleService.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Add Services</title>
    <style>
        body{
            background-color:floralwhite;
        }
    </style>
</head>
<body>
<form action="createService.php" action="POST">
<div style="width: 30%;margin: auto;margin-top: 80px; padding: 20px;box-shadow: 2px 2px 2px 2px #888888;" class="card text-center">
        <div style="background-color: cornflowerblue;" class="card-header">
         <strong>Service</strong> 
        </div>
        <div class="card-body">
          <h5 class="card-title">Adding New Service</h5>
         <hr>
        </div>
        <div class="mb-3">          
            <label for="names" class="form-label"><strong> Service Name</strong></label>
            <input type="text" class="form-control" name="names" id="names" placeholder="service name">
          </div>
          <div class="mb-3">
            <label for="IdUtilisateur" class="form-label"><strong> Service Administrator</strong></label>
                                          <?php

                              include "db_connection.php";

                              $sql = "SELECT IdUtilisateur,NomUtilisateur FROM utilisateur";
                              $result = mysqli_query($conn,$sql);

                              echo "<select class='form-select' name='idut' id='idut'>";
                              while ($row = mysqli_fetch_array($result)) {
                                  echo "<option value='" . $row['IdUtilisateur'] . "'>" . $row['NomUtilisateur'] . "</option>";
                              }
                              echo "</select>";

                              ?>
          </div>
          <div class="card-footer text-muted">
          <button class="btn btn-outline-primary" style="border-radius: 50px;width: 7em;" name="create" type="submit">Save</button>         
            <br><br>
            
       <a style="text-decoration: none;color: black;" href="servises.php"><button style="border-radius: 50px;width: 10em;" type="button" class="btn btn-outline-secondary"><i class="fas fa-chevron-circle-left"></i>&nbsp;Back</button></a>
                
        </div>


</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script> 
</body>
</html>