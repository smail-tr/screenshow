<?php 

session_start();
include "readMessageforuser.php";
include "readMessageType.php";
if(isset($_SESSION['IdUtilisateur']) && isset($_SESSION['NomUtilisateur'])){

?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style2.css">
    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800;900&display=swap" rel="stylesheet">
    <title>Managements</title>
	
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
	    <!--fontawesome-->
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" 
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		
		 <link rel="stylesheet" href="font/font/flaticon.css">
</head>
<body>
<!-- ---------------------------------------------------------------------------------------------- -->
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
		        <a href="home.php" class="nav-link text-left "  class="dropdown-item" role="button" 
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-home"></i> &nbsp;Home 
                 </a>
		     </li>                    
             <li style="width: 300px;font-size: 20px;" class="nav-item"> 
		        <a href="managements.php" class="nav-link text-left active"  class="dropdown-item"  role="button" 
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
        <div class="container-fluid px-lg-4">
        <h4 style="font-family:sans-serif;margin-top: 15px;color: #222e3c;">Manage My Messages</h4>
        <hr>
        <div style="width: 50%;"><input style="width: 50%;" class="form-control" id="myInput" type="text" placeholder="Search Message..."></div>
              <div style="float: right;margin-top: -40px;">
                <button type="button" class="btn btn-primary" data-toggle="modal"  data-target="#myAddModalMessage">
                  <i class="fas fa-plus-circle"></i>&nbsp;&nbsp;
                  Add Message
                </button>         
            </div>
          <br>
          <?php if(isset($_GET['success2'])){    ?>
                    <div class="alert alert-success" role="alert">
                    <?php echo $_GET['success2']; ?>
                     </div>
           <?php  }?>
           <?php if(isset($_GET['error'])){    ?>
                    <div class="alert alert-danger" role="alert">
                    <?php echo $_GET['error']; ?>
                     </div>
           <?php  }?>
           <?php if(isset($_GET['success3'])){    ?>
                    <div class="alert alert-success" role="alert">
                    <?php echo $_GET['success3']; ?>
                     </div>
           <?php  }?>
           <!-- Message Table-->
           
          <table class="table" class="border shadow p-3 rounded">
            <thead style="color: blue;" class="thead-dark">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Start date</th>
                <th scope="col">End date</th>
                <th scope="col">service</th>
                <th scope="col">ID Type</th>
                <th scope="col">Edit</th>
 
              </tr>
            </thead>
            <tbody id="myTable" >
            <?php
                                        $i =0;
                                        while($row5 = mysqli_fetch_assoc($result1)){
                                        $i++;
                                        ?>
              <tr>
              
                <th scope="row"><?=$i?></th>
                <td><?=$row5['Titre']?></td>
                <td><?=$row5['DateDebut']?></td>
                <td><?=$row5['DateFin']?></td>
                <td><?=$row5['NomService']?></td>
                <td><?=$row5['IdType']?></td> 
                <td>
                  <div class="col-lg-15">
                    <a href="UpdateMessageforuser.php?IdMessage=<?=$row5['IdMessage']?>" class="text-success" > <i class="fas fa-edit"></i>
                    </a>
                  </div>
                </td>     
              </tr>
              <?php }?>
            </tbody>
          </table>
          <!--  -->
          <div class="modal" id="myAddModalMessage">
                <div class="modal-dialog">
                  <div class="modal-content">
                  
                    <!-- Modal Header -->
                    <div class="modal-header">
                      <h4 class="modal-title">Add New Message</h4>
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
                     <form action="createMessageforuser.php" method="POST" >
                  
                        <div class="form-group">
                        <label for="formGroupExampleInput">Title:</label>
                           <input class="form-control" name="title" placeholder="Title" >
                        </div>
                        <div class="form-group">
                        <label for="formGroupExampleInput">DateDebut:</label>
                        <input class="form-control" type="datetime-local"  name="DateD">
                        </div>
                        <div class="form-group">
                        <label for="formGroupExampleInput">DateFin:</label>
                        <input class="form-control" type="datetime-local"  name="DateF">
                        </div>
                        <label for="formGroupExampleInput">Service:</label><br>

                                <?php

                            include "db_connection.php";

                            $sql = "SELECT a.IdService, a.NomService, a.Etat, a.IdUtilisateur,b.NomUtilisateur FROM service a JOIN utilisateur b on a.IdUtilisateur = b.IdUtilisateur where NomUtilisateur ='user'";
                            $result2 = mysqli_query($conn,$sql);

                            echo "<select class='form-control form-control-lg' name='ids' >";
                            while ($row2 = mysqli_fetch_array($result2)) {
                            
                                echo "<option value='" . $row2['IdService'] . "'>" . $row2['NomService'] . "</option>";
                            }
                            echo "</select>";

                            ?>
                             <label for="formGroupExampleInput">MessageType:</label><br>
                          <?php

                                include "db_connection.php";

                                $sql = "SELECT IdType FROM typem";
                                $result2 = mysqli_query($conn,$sql);

                                echo "<select class='form-control form-control-lg' name='idT' >";
                                while ($row2 = mysqli_fetch_array($result2)) {
                                  
                                    echo "<option value='" . $row2['IdType'] . "'>" . $row2['IdType'] . "</option>";
                                }
                                echo "</select>";

                                ?><br>
                        
                       
                      
                        
                       <div class="modal-footer">
                       
                       <button  class="btn btn-primary btn-lg btn-block" name="createMessage" style="color: white;"  >Add Message</button>
                    </div>
                    </form>
                    
                  </div>
                </div>
                   </div>
              </div>
          <!--  -->
                 <!--table TypeMessage-->
                                    <br>

                          <hr>
                          <h4 style="font-family:sans-serif;margin-top: 15px;color: #222e3c;margin-left:25px">Message Type</h4>
                          <hr>
                          <br>   
                          <table class="table" class="border shadow p-3 rounded">
                          <thead style="color: blue;" class="thead-dark">
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Text message</th>
                            <th scope="col">Image </th>
                            <th scope="col">Video</th>
                            <th scope="col">View</th>          
                          </tr>
                          </thead>
                          <tbody id="myTable" >
                                              <?php
                                                    $i =0;
                                                    $upl="uploads\\";
                                                    $upl2="uploads\\";
                                                    while($rows = mysqli_fetch_assoc($result)){
                                                    $i++;
                                                    ?>
                          <tr>

                            <th scope="row"><?=$rows['IdType']?></th>
                            <td><?=$rows['Msg_txt']?></td>
                            
                            <td><img src="<?=$upl.$rows['Msg_img']?>" width="200px"></td>
                            <td><video src="<?=$upl2.$rows['Msg_video']?>" width="200px" controls></video></td>
                            <td>
                            <div class="col-lg-15">
                            <a class="btn btn-primary" style="text-align: center;" href="View.php?IdType=<?= $rows['IdType'] ?>" role="button">View</a>
                            </div>               
                            </td>
                          </tr>

                          <?php }?>
                          </tbody>
                          </table>
          <!--  -->
              <hr>
              <h1 style="font-family:sans-serif;margin-top: 15px;color: #222e3c;">Auto Read</h1>
        <hr>
        <div style="width: 50%;"> <h3>Play List For Message</h3> </div>
              <div style="float: right;margin-top: -40px;">
                <a href="PlayListView.php" class="btn btn-primary">
                <i class="far fa-eye"></i>&nbsp;&nbsp;
                  View As Play List
                  </a>        
            </div>
         
              <hr>
              <div class="container">
                        <h1 style="text-align: center; color: royalblue;font-size:50px;">My Screens</h1>
                        <hr>
                        <div class="row">
                            <?php
                            include "db_connection.php";
                            include "readMessageType3.php";
                            $i = 0;
                            $upl="uploads\\";
                            
                            while ($row = mysqli_fetch_assoc($result)) {
                                $i++;
                            ?>

                                <div class="col-3">
                                   
                                        <div class="jumbotron">
                                             <h3 style="color: #990000;"><?= $row['NomEcran'] ?></h3>
                                             <hr>
                                            <h1 ><?= $row['Msg_txt'] ?></h1>
                                            <hr class="my-1">
                                            <img src="<?= $upl.$row['Msg_img'] ?>" height="150px" width="150px" alt="">
                                            <video src="<?= $upl.$row['Msg_video'] ?>" height="150px" width="150px" controls></video>
                                            <br>
                                           
                                            <a class="btn btn-primary"  style="text-align: center;" href="View.php?IdType=<?= $row['IdType'] ?>" role="button">View</a>

                                                <i class="fab fa-chromecast"></i></button>
                                        </div>
                                    
                                </div>

                            <?php
                            }
                            ?>
                        </div>
                    </div>
         <!--  -->
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


























<!-- ----------------------------------------------------------------------------------------------------- -->
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