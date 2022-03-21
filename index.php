
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Screen Show</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" 
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
     <link rel="stylesheet" type="text/css" href="style.css">   
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>  
          
       <img class="img" src="ScreenShowPng.png" alt="logo">          
    <form action="login.php" method="POST">
    <h2><i class="fas fa-user-tag"></i> LOGIN</h2>
    <?php if(isset($_GET['error'])) {?>
    <p class="error"><?php echo $_GET['error']; ?></p>
    <?php } ?>
    <?php if(isset($_GET['success'])){    ?>
                    <div class="alert alert-success" role="alert">
                    <?php echo $_GET['success']; ?>
                     </div>
                     <?php  }?>
    <label for="uname" class="mb-2"><i class="far fa-user"></i> User Name</label>
    <input type="text"  name="uname" placeholder="user name"><br>
    
    <label for="pass" class="mb-2"><i class="fas fa-key"></i> Password</label>
    <input type="password"  name="pass" placeholder="password"><br>
    
    <label class="mb-2" ><i class="fas fa-user" ></i> Select User Type :</label>
    <select class="form-select mb-3" aria-label="Default select example" name="role">
            <option selected value="user">user</option>
            <option value="admin">admin</option>
    </select>

    <button type="submit">LOGIN</button>
    </form>
</body>
</html>