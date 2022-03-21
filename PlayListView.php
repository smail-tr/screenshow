<?php 
session_start();
if(isset($_SESSION['IdUtilisateur']) && isset($_SESSION['NomUtilisateur'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>View PlayList</title>
</head>
<body>
    <div class="card text-center container" style="border-radius: 30px; top:250px; width:500px; height: 200px;">
    <h1 style=" font-family:'Times New Roman', Times, serif;">" PlayList "</h1>
    <form action="PlayList.php" method="POST">
    <div class="input-group mb-2 border shadow p-3 rounded">
       
    <span class="input-group-text btn-dark">PlayList Time :</span> 
    
     <input type="number"  name="timel" min="0" class="form-control" aria-label="Amount (to the nearest dollar)">
     <span class="input-group-text btn-dark">Min</span>
          </div>
          <br>
         <button name="env" class="btn btn-dark">Click</button>
        
        
    
    </div> </form>
    <style>
    body{
        background-color: #FFF5EE;
    }
    .container{
        background-color: #F08080;
    }
    </style>
  
</body>
</html>
<?php
}else{
     
     header("location:index.php");
          exit();
 
 }
 
 ?>