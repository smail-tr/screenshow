<?php 

session_start();
if(isset($_SESSION['IdUtilisateur']) && isset($_SESSION['NomUtilisateur'])){

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="stylehome0.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800;900&display=swap" rel="stylesheet">
    <title>Screen Show</title>
	
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
	    <!--fontawesome-->
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" 
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		
		 <link rel="stylesheet" href="font/font/flaticon.css">
  </head>
  

   
  
  <body>
  
  <?php if($_SESSION['Role'] == 'admin' ){?>
  
         <!--for admin--> 
         <div id="wrapper">
   <div class="overlay"></div>
    
        <!-- Sidebar -->
    <nav class="fixed-top align-top" id="sidebar-wrapper" role="navigation">
       <div class="simplebar-content" style="padding: 0px;">
				<a class="sidebar-brand" href="index.html">
          <span class="align-middle">
            <img class="img" src="img/sirclelogo.png">
          </span>
        </a>

		 <ul  class="nav nav-pills">
	 
	         <li style="width: 300px;font-size: 20px;" class="nav-item"> 
		        <a href="home.php" class="nav-link text-left active"  class="dropdown-item" role="button" 
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-home"></i> &nbsp;Home 
                 </a>
		     </li>
             
             <li style="width: 300px; font-size: 20px;" class="nav-item"> 
                 
		        <a href="manageUsers.php" class="nav-link text-left"  class="dropdown-item" role="button" 
		         aria-haspopup="true" aria-expanded="false">
                 <i class="fas fa-users"></i> &nbsp;Users 
                 </a>
		     </li>
             <li style="width: 300px;font-size: 20px;" class="nav-item"> 
		        <a href="servises.php" class="nav-link text-left"  class="dropdown-item"  role="button" 
		         aria-haspopup="true" aria-expanded="false">
                 <i class="fas fa-ticket-alt"></i>  &nbsp;services 
                 </a>
		     </li>
             <li style="width: 300px;font-size: 20px;" class="nav-item"> 
		        <a href="Message.php"class="nav-link text-left"  class="dropdown-item"  role="button" 
		         aria-haspopup="true" aria-expanded="false">
                 <i class="fas fa-envelope"></i>  &nbsp;Messages
                 </a>
		     </li>
             <li style="width: 300px;font-size: 20px;" class="nav-item"> 
		        <a href="Screen.php"class="nav-link text-left"   class="dropdown-item"  role="button" 
		         aria-haspopup="true" aria-expanded="false">
                 <i class="fas fa-desktop"></i>  &nbsp;Screens 
                 </a>
		     </li>
	  
		  </ul>

				
			</div>
	   
	   
    </nav>
        <!-- /#sidebar-wrapper -->



        <!-- Page Content -->
        <div id="page-content-wrapper">
        
			
			<div id="content">

       <div class="container-fluid p-0 px-lg-0 px-md-0">
        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light my-navbar">

          <!-- Sidebar Toggle (Topbar) -->
            <div type="button"  id="bar" class="nav-icon1 hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
               <span></span>
			    <span></span>
				 <span></span>
            </div>
			

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light " placeholder="Search for..." aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown  d-sm-none">
         
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small"
					placeholder="Search for..." >
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
           <li class="nav-item dropdown">
							<a class="nav-icon dropdown" href="#" id="alertsDropdown" data-toggle="dropdown" aria-expanded="false">
								<div class="position-relative">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell align-middle"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>
                <!--	/////////////////////////////////////////////////////////////////////////<span class="indicator">4</span>-->
								</div>
							</a>
						
						</li>
            <!-- Nav Item - Messages -->
            

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown">
                <img class="img-profile rounded-circle" src="img/user.png">
              </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right py-0" aria-labelledby="alertsDropdown">
                  <div style=" box-shadow: 1px 1px 2px 2px black;width: 200px; height:300px ;" class="dropdown-menu-header">
                  <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown">
                    <img class="img-profile rounded-circle" style=" margin-left: 70px;" src="img/user.png">
                    <br>
                    <p style="text-align: center; font-size: 25px; font-family:arial narrow; color:#1995D1;"><?php echo $_SESSION['Name']; ?> (<?php echo $_SESSION['Role'];  ?>)</p>
                    <br>
                    
                  <div style="width: 200px;"class="btn-group-vertical">                   
                    <a href="#" role="button" style="text-align: center;"  class="btn btn-light" >
                    <i style="float: left;font-size:25px;" class="fas fa-cog"></i>
                    Settings
                    </a>                 
                    <a href="admin.php" role="button" style="text-align: center;"  class="btn btn-light" >
                    <i style="float: left;font-size: 25px;" class="fas fa-user"></i>
                    Profile
                    </a>
                    
                    <hr style="width:100%;text-align:left;color:black;height:10px">
                    <a href="logout.php" role="button" style="text-align: center;"  class="btn btn-light" >
                    <i style="float: left;font-size: 25px;" class="fas fa-sign-out-alt"></i>
                    Log Out
                    </a>
                    
                  </div>
                  </a>
                  </div>
                </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->       
                   <div >
                    <div>
                        <img class="image2" src="img/—Pngtree—led tv 11 - vector_4358566.png" width="700px" height="590px" style="margin-left: 700px;">
                    </div >
                        <div class="textposition">
                            <h2 class="h22" data-text="Welcome to our site...">&nbsp;</h2><br>
                            <p class="txtmini"> " A site for the makers of the animated <br> &nbsp;Display screen at your service "</p>
                        </div>
                        
                        <div class="positions">
                            <h2 class="h222" datas-text="Dynamique Display">&nbsp;</h2>
                            
                        </div>
                    </div>       
        <!-- /.container-fluid -->

      </div>

			
			<footer class="footer">
				<div class="container-fluid">
					
				</div>
			</footer>
			
        </div>
		</div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-----------------------------------------------------------Page User------------------------------>
  <?php }else if($_SESSION['Role'] == 'user' && $_SESSION['ChangePwd'] == 'oui'){ ?>
        <!-------------------------------------------------------------->   
       <div  id="app">
       <div  id="wrapper">
        <div class="overlay"></div>
         
             <!-- Sidebar -->
         
          
          
         </nav>
             <!-- /#sidebar-wrapper -->
     
     
     
             <!-- Page Content -->
             <div  id="page-content-wrapper">
              
           
           <div id="content">
     
            <div class="container-fluid p-0 px-lg-0 px-md-0">
             <!-- Topbar -->
             <nav class="navbar navbar-expand navbar-light my-navbar">
     
               <!-- Sidebar Toggle (Topbar) -->
               
           
     
               <!-- Topbar Search -->
             
     
               <!-- Topbar Navbar -->
               <ul class="navbar-nav ml-auto">
     
                 <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                 
     
                 <!-- Nav Item - Alerts -->
               
                 <!-- Nav Item - Messages -->
                 
                 
                 <!-- Nav Item - User Information -->
                 <li class="nav-item dropdown">
                   <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown">
                     <img class="img-profile rounded-circle" src="img/user.png">
                   </a>
                     <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right py-0" aria-labelledby="alertsDropdown">
                       <div style=" box-shadow: 1px 1px 2px 2px black;width: 200px; height:200px ;" class="dropdown-menu-header">
                       <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown">
                         <img class="img-profile rounded-circle" style=" margin-left: 70px;" src="img/user.png">
                         <br>
                         <p style="text-align: center; font-size: 25px; font-family:arial narrow; color:#1995D1;"><?php echo $_SESSION['Name']; ?> (<?php echo $_SESSION['Role'];  ?>)</p>
                         <br>
                         
                       <div style="width: 200px;"class="btn-group-vertical">                   
                                                 
                         <hr style="width:170%;text-align:left;color:black;height:10px">
                         <a href="logout.php" role="button" style="text-align: center;"  class="btn btn-light" >
                         <i style="float: left;font-size: 25px;" class="fas fa-sign-out-alt"></i>
                         Log Out
                         </a>
                         
                       </div>
                       </a>
                       </div>
                     </div>
                 </li>
     
                 </ul>
     
             </nav>
             <!-- End of Topbar -->
                 
     
                 </div>
             <!-- Begin Page Content -->
             <div  class="container-fluid px-lg-4">
             <hr class="my-4">  
                  <center> <form class="form-pass" action="change-pass-usser.php" method="POST" style="background-color: white;width:400px">              
                     <h5 class="h5style" >Change Password</h5>
                     <?php if(isset($_GET['error'])){    ?>
                    <div class="alert alert-danger" role="alert">
                    <?php echo $_GET['error']; ?>
                     </div>
                     <?php  }?>                 
                     <hr class="my-4">
                     <div class="form-group">
                       <label for="formGroupExampleInput2" >Current password</label>
                       <input  style="width: 40%;" type="password" class="form-control" name="op" id="currentPassword" placeholder="current password">
                     </div>
                     <div class="form-group">
                       <label for="formGroupExampleInput2">New password</label>
                       <input  style="width: 40%;" type="password" class="form-control" name="np" id="newPassword" placeholder="new password">
                     </div>
                     <div class="form-group">
                       <label for="formGroupExampleInput2">Confirm password</label>
                       <input  style="width: 40%;" type="password" class="form-control" name="c_np" id="confirmPassword" placeholder="confirm password">
                     </div>
                     
                       <br>
                       <button style="border-radius: 20px;" type="submit" class="btn btn-info">Save changes</button>
                   </form></center>
                   
                   
     
             </div>
             <!-- /.container-fluid -->
     
           </div>
     
           
           <footer class="footer">
             <div class="container-fluid">
               
             </div>
           </footer>
           
             </div>
         </div>
             <!-- /#page-content-wrapper -->
     
         </div>
         <!-- /#wrapper -->
       </div>
        
       
       
       
         <!------------------------------------------------------------>

  <?php }else{ ?>
     <!--<h1> welcome user </h1>
      <a href="logout.php">Logout</a>-->
      <div id="wrapper">
   <div class="overlay"></div>
    
        <!-- Sidebar -->
    <nav class="fixed-top align-top" id="sidebar-wrapper" role="navigation">
       <div class="simplebar-content" style="padding: 0px;">
				<a class="sidebar-brand" href="index.html">
          <span class="align-middle">
            <img class="img" src="img/sirclelogo.png">
          </span>
        </a>

		 <ul  class="nav nav-pills">
	 
	         <li style="width: 300px;font-size: 20px;" class="nav-item"> 
		        <a href="home.php" class="nav-link text-left active"  class="dropdown-item" role="button" 
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-home"></i> &nbsp;Home 
                 </a>
		     </li>                    
             <li style="width: 300px;font-size: 20px;" class="nav-item"> 
		        <a href="managements.php" class="nav-link text-left"  class="dropdown-item"  role="button" 
		         aria-haspopup="true" aria-expanded="false">
                 <i class="fas fa-ticket-alt"></i>  &nbsp;Managements 
                 </a>

		  </ul>

				
			</div>
	   
	   
    </nav>
        <!-- /#sidebar-wrapper -->



        <!-- Page Content -->
        <div id="page-content-wrapper">
        
			
			<div id="content">

       <div class="container-fluid p-0 px-lg-0 px-md-0">
        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light my-navbar">

          <!-- Sidebar Toggle (Topbar) -->
            <div type="button"  id="bar" class="nav-icon1 hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
               <span></span>
			    <span></span>
				 <span></span>
            </div>
			

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light " placeholder="Search for..." aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown  d-sm-none">
         
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small"
					placeholder="Search for..." >
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
           <li class="nav-item dropdown">
							<a class="nav-icon dropdown" href="#" id="alertsDropdown" data-toggle="dropdown" aria-expanded="false">
								<div class="position-relative">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell align-middle"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>
                <!--	/////////////////////////////////////////////////////////////////////////<span class="indicator">4</span>-->
								</div>
							</a>
						
						</li>
            <!-- Nav Item - Messages -->
            

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown">
                <img class="img-profile rounded-circle" src="img/user.png">
              </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right py-0" aria-labelledby="alertsDropdown">
                  <div style=" box-shadow: 1px 1px 2px 2px black;width: 200px; height:300px ;" class="dropdown-menu-header">
                  <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown">
                    <img class="img-profile rounded-circle" style=" margin-left: 70px;" src="img/user.png">
                    <br>
                    <p style="text-align: center; font-size: 25px; font-family:arial narrow; color:#1995D1;"><?php echo $_SESSION['Name']; ?> (<?php echo $_SESSION['Role'];  ?>)</p>
                    <br>
                    
                  <div style="width: 200px;"class="btn-group-vertical">                   
                    <a href="#" role="button" style="text-align: center;"  class="btn btn-light" >
                    <i style="float: left;font-size:25px;" class="fas fa-cog"></i>
                    Settings
                    </a>                 
                    <a href="userpass.php" role="button" style="text-align: center;"  class="btn btn-light" >
                    <i style="float: left;font-size: 25px;" class="fas fa-user"></i>
                    Profile
                    </a>
                    
                    <hr style="width:100%;text-align:left;color:black;height:10px">
                    <a href="logout.php" role="button" style="text-align: center;"  class="btn btn-light" >
                    <i style="float: left;font-size: 25px;" class="fas fa-sign-out-alt"></i>
                    Log Out
                    </a>
                    
                  </div>
                  </a>
                  </div>
                </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->       
                   <div >
                    <div>
                        <img class="image2" src="img/—Pngtree—led tv 11 - vector_4358566.png" width="700px" height="590px" style="margin-left: 700px;">
                    </div >
                        <div class="textposition">
                            <h2 class="h22" data-text="Welcome to our site...">&nbsp;</h2><br>
                            <p class="txtmini"> " A site for the makers of the animated <br> &nbsp;Display screen at your service "</p>
                        </div>
                        
                        <div class="positions">
                            <h2 class="h222" datas-text="Dynamique Display">&nbsp;</h2>
                            
                        </div>
                    </div>       
        <!-- /.container-fluid -->

      </div>

			
			<footer class="footer">
				<div class="container-fluid">
					
				</div>
			</footer>
			
        </div>
		</div>
        <!-- /#page-content-wrapper -->

    </div>
  <?php }?>
  <!----------------------------------------------------------------Fin Page User---------------------------->
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
<?php 
}else{
     
    header("location:index.php");
         exit();

}

?>