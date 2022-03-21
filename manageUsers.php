<?php
session_start();
include "readUsers.php";
if(isset($_SESSION['IdUtilisateur']) && isset($_SESSION['NomUtilisateur'])){
  if($_SESSION['Role'] == 'admin'){
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="styleAdminPage.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800;900&display=swap" rel="stylesheet">
    <title>Users</title>
	
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
	    <!--fontawesome-->
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" 
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		
		 <link rel="stylesheet" href="font/font/flaticon.css">
  </head>
  

   
  
  <body>
  
  <div  id="app">
  <div  id="wrapper">
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
    <a href="home.php" class="nav-link text-left "  class="dropdown-item" role="button" 
        aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-home"></i> &nbsp;Home 
         </a>
 </li>
     
     <li style="width: 300px; font-size: 20px;" class="nav-item"> 
         
    <a href="manageUsers.php" class="nav-link text-left active"  class="dropdown-item" role="button" 
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
        <div  id="page-content-wrapper">
         
			
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
            

            </div>
        <!-- Begin Page Content -->
        <div  class="container-fluid px-lg-4">
          <h4 style="font-family:sans-serif;margin-top: 15px;color: #222e3c;" >Manage Users</h4>
         <hr>           
            <div class="col-lg-15">
            
                   <div style="width: 50%;"><input style="width: 50%;"  class="form-control" id="myInput" type="text" placeholder="Search user..."></div>
                   
                  <div style="float: right;margin-top: -40px;">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myAddModal">
                    <i class="fas fa-user"></i>&nbsp;&nbsp;
                    Add New User
                  </button>
                </div>
                <br>
                
                <?php if(isset($_GET['success'])){    ?>
                    <div class="alert alert-success" role="alert">
                    <?php echo $_GET['success']; ?>
                     </div>
                     <?php  }?>
                                     
              <!-- The Modal -->
              <div class="modal" id="myAddModal">
                <div class="modal-dialog">
                  <div class="modal-content">
                  
                    <!-- Modal Header -->
                    <div class="modal-header">
                      <h4 class="modal-title">Add New User</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
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
                      <form action="createUsers.php" method="POST">
                        <div class="form-group">
                            <input type="text" name="uname" value="<?php if(isset($_GET['uname'])) echo ($_GET['uname']) ; ?>" class="form-control form-control-lg" placeholder="username">
                        </div><br>
                        <div class="form-group">
                          <input type="password" name="pass" value="<?php if(isset($_GET['pass'])) echo ($_GET['pass']) ; ?>" class="form-control form-control-lg" placeholder="password">
                      </div><br>
                        <div class="form-group">
                            <input type="email" name="mail" value="<?php if(isset($_GET['mail'])) echo ($_GET['mail']) ; ?>" class="form-control form-control-lg" placeholder="Email">
                        </div><br>
                        <div class="form-group">
                            <input type="text" name="name" value="<?php if(isset($_GET['name'])) echo ($_GET['name']) ; ?>" class="form-control form-control-lg" placeholder="Name">
                        </div><br>                      
                        <div class="form-group">
                        <select class="form-control form-control-lg" aria-label="Default select example" name="role">
                            <option selected>Chosse Type</option>
                            <option value="admin">admin</option>
                            <option value="user">user</option>                            
                          </select>
                          </div><br>             
                          <div class="form-group">
                        <select class="form-control form-control-lg" aria-label="Default select example" name="etat">
                            <option selected>State</option>
                            <option value="active">active</option>
                            <option value="desactive">desactive</option>                            
                          </select>
                          </div>
                         <br>
                         <div class="modal-footer">
                      <button  class="btn btn-primary btn-lg btn-block" name="create" style="color: white;"  @click="showAddModal=false">Add User</button>
                      
                    </div>
                    </form>
                    </div>
                    
                    <!-- Modal footer -->
                    
                    
                  </div>
                </div>
              </div>
            </div>
            
            <br>
            <?php  
            if(mysqli_num_rows($result)){?>
         
           
          <table class="table">
            <thead style="color: blue; " class="thead-dark">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">User</th>
                <th scope="col">Password</th>
                <th scope="col">Email</th>
                <th scope="col">Name</th>
                <th scope="col">Type</th>
                <th scope="col">State</th>
                <th scope="col">Change Password</th>
                <th scope="col">Edit</th>
                <th scope="col">Desactive</th>
                <th scope="col">Active</th>
                <th scope="col">Reset Password</th>
              </tr>
            </thead>
            <tbody id="myTable">
               <?php
                $i =0;
                while($rows = mysqli_fetch_assoc($result)){
                $i++;
                ?>
              <tr>
                <th scope="row"><?=$i?></th>
                <td><?=$rows['NomUtilisateur']?></td>
                <td><input style="border: none;background:transparent;" type="password" value="<?=$rows['Password']?>" disabled></td>
                <td><?=$rows['Email']?></td>
                <td><?=$rows['Name']?></td>
                <td><?=$rows['Role']?></td>
                <?php  
                if($rows['Etat'] == 'active'){
                  $col = '#99ff99';
                }else if($rows['Etat'] == 'desactive'){               
                  $col = '#ff1a1a';
                }               
                ?>
                <td style="background-color:<?php echo $col ; ?>"> <strong><?=$rows['Etat']?></strong></td>
                <td><?=$rows['ChangePwd']?></td>
                <td>
                  <div class="col-lg-15">
                  <a href="updateUser.php?IdUtilisateur=<?=$rows['IdUtilisateur']?>" class="text-success"  > <i class="fas fa-edit"></i> 
                  </a></td>
                  <td>
                    <div class="col-lg-15">
                    
                     <!-- ------------------------------------------>
                     <a href="#edit<?=$rows['IdUtilisateur']?>"  class="text-danger" data-toggle="modal">
                     <i class="fas fa-ban"></i>
                            </a>
                            <div id="edit<?=$rows['IdUtilisateur']?>" class="modal fade" role="dialog">
                                <form method="post" class="form-horizontal" role="form">
                                    <div class="modal-dialog modal-sm">
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">                                  
                                                <h4 class="modal-title">Desactivate User</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                          
                                            <h4 class="text-danger">are you sure want to desactivate this user?</h4>                                                  
                                           </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-warning" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
                                               <a href="desactiveUser.php?IdUtilisateur=<?=$rows['IdUtilisateur']?>" class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span> Desactive</a> 
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>   
                    </td>
                    <!------------------------------------------------------------------------------->
                    <td>
                    <div class="col-lg-15">
                    
                     <!-- ------------------------------------------>
                     <a href="#edit1<?=$rows['IdUtilisateur']?>"  class="text-success"  data-toggle="modal">
                     <i class="fas fa-check"></i>
                            </a>
                            <div id="edit1<?=$rows['IdUtilisateur']?>" class="modal fade" role="dialog">
                                <form method="post" class="form-horizontal" role="form">
                                    <div class="modal-dialog modal-sm">
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">                                  
                                                <h4 class="modal-title">activate User</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                          
                                            <h4 class="text-danger">are you sure want to activate this user?</h4>                                                  
                                           </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-warning" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
                                               <a href="activeUser.php?IdUtilisateur=<?=$rows['IdUtilisateur']?>" class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span> active</a> 
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>   
                    </td>
                    <!------------------------------------------------------------------------------->
                    <td>
                  <div class="col-lg-15">
                  <a href="resetPassUser.php?IdUtilisateur=<?=$rows['IdUtilisateur']?>" class="text-danger"  > <i class="fas fa-redo-alt"></i> 
                  </a></td>
                    <!------------------------------------------------------------------------------->
                    </tr>
                  <?php } ?>
              
            </tbody>
          </table>
      <?php }?>
             <!--Add new user modal-->
         
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
<?php }else{
 session_start();
 session_unset();
 session_destroy();
 
 header("location:accessDenied.php");
 
} ?>
<?php 
}else{
    
    header("location:index.php");
         exit();

}

?>