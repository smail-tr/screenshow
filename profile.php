
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800;900&display=swap" rel="stylesheet">
    <title>Hello, world!</title>
	
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
		        <a href="#" class="nav-link text-left active" data-toggle="pill" class="dropdown-item" role="button" 
                aria-haspopup="true" aria-expanded="false">
                 <i class="flaticon-bar-chart-1"></i>  Edit user 
                 </a>
		     </li>
             
             <li style="width: 300px; font-size: 20px;" class="nav-item"> 
                 
		        <a href="#" class="nav-link text-left" data-toggle="pill" class="dropdown-item" role="button" 
		         aria-haspopup="true" aria-expanded="false">
                 <i class="flaticon-bar-chart-1"></i>  Setting 
                 </a>
		     </li>
             <li style="width: 300px;font-size: 20px;" class="nav-item"> 
		        <a href="#" class="nav-link text-left" data-toggle="pill" class="dropdown-item"  role="button" 
		         aria-haspopup="true" aria-expanded="false">
                 <i class="flaticon-bar-chart-1"></i>  Contact 
                 </a>
		     
	  
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
                <img class="img-profile rounded-circle" src="img/logo3.png">
              </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right py-0" aria-labelledby="alertsDropdown">
                  <div style=" box-shadow: 1px 1px 2px 2px black;width: 200px; height:290px ;padding-right: 15px;" class="dropdown-menu-header">
                  <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown">
                    <img class="img-profile rounded-circle" style="margin-left: 70px;" src="img/logo3.png">
                    <br>
                    <p style="text-align: center; color:#1995D1;">Screen Show</p>
                    <br>
                    <div style="width: 180px;" class="btn-group-vertical">
                      <button  class="btn btn-light btn-block"> 
                        <i class="fas fa-user-alt"></i>&nbsp
                        Profile
                       </button>
                       <button class="btn btn-light btn-block"> 
                        <i  class="fas fa-sign-out-alt"></i>&nbsp
                      Logout
                       </button>
                       <button class="btn btn-light btn-block"> 
                        <i class="fas fa-cog"></i>&nbsp
                      Setting
                       </button>
                    </div>
                   
                  </a>
                  </div>
                </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div  class="container-fluid px-lg-4">
            <h4 style="font-family:sans-serif;margin-top: 15px;">Edit Profile</h4>

              <hr class="my-4">
            
              <form>
                <div class="form-group">
                  <label for="formGroupExampleInput">User</label>
                  <input style="width: 40%;" type="text" class="form-control" id="user" placeholder="user">
                </div>
                <div class="form-group">
                  <label for="formGroupExampleInput2">Password</label>
                  <input  style="width: 40%;" type="password" class="form-control" id="password" placeholder="Password">
                </div>
                <div class="form-group">
                  <label for="formGroupExampleInput2">Email</label>
                  <input  style="width: 40%;" type="Email" class="form-control" id="email" placeholder="email">
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <hr class="my-4">
                <h5 style="font-family:sans-serif;">change password</h5>
                <hr class="my-4">
                <div class="form-group">
                  <label for="formGroupExampleInput2">current password</label>
                  <input  style="width: 40%;" type="password" class="form-control" id="currentPassword" placeholder="current password">
                </div>
                <div class="form-group">
                  <label for="formGroupExampleInput2">New password</label>
                  <input  style="width: 40%;" type="password" class="form-control" id="newPassword" placeholder="new password">
                </div>
                <div class="form-group">
                  <label for="formGroupExampleInput2">confirm password</label>
                  <input  style="width: 40%;" type="password" class="form-control" id="confirmPassword" placeholder="confirm password">
                </div>
                <div class="form-group">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                      Check me out
                    </label>
                  </div><br>
                  <button style="border-radius: 20px;" type="submit" class="btn btn-info">Save changes</button>
              </form>
              

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