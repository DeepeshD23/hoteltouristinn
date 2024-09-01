<?php  
session_start();  
if(!isset($_SESSION["username"]))
{
 header("location:login.php");
}
?> 
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tourist Inn Admin</title>
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper" style="background-color: #94024c; color: white;">
        <nav class="navbar navbar-default top-navbar" role="navigation"style="background-color: #94024c; color: white;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="admin.php"style="background-color: #94024c; color: white;">MAIN MENU </a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
			
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false"style="background-color: #94024c; color: white;">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="usersetting.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="settings.php"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
					
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a  href="settings.php"><i class="fa fa-dashboard"></i>Rooms Status</a>
                    </li>
					<li>
                        <a  href="room.php"><i class="fa fa-plus-circle"></i>Add Room</a>
                    </li>
                    <li>
                        <a  href="roomdel.php"><i class="fa fa-desktop"></i> Delete Room</a>
                    </li>
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
       
        
       
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                           NEW ROOM <small></small>
                        </h1>
                    </div>
                </div> 
                 
                                 
            <div class="row">
                
                <div class="col-md-5 col-sm-5">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            ADD NEW ROOM
                        </div>
                        <div class="panel-body">
						<form name="form" method="post">
                            <div class="form-group">
                                            <label>Type Of Room *</label>
                                            <select name="troom"  class="form-control" required>
												<option value selected ></option>
                                                <option value="Single Room">SINGLE ROOM</option>
                                                <option value="Family Room">FAMILY ROOM</option>
                                                <option value="Deluxe Room">DELUXE ROOM</option>
                                            </select>
                              </div>
							  
								
							 <input type="submit" name="add" value="Add New" class="btn btn-primary"> 
							</form>
							<?php
							 include('db.php');
							 if(isset($_POST['add']))
							 {
										$room = $_POST['troom'];
										
										$place = 'Free';
										
										$check="SELECT * FROM room WHERE type = '$room'";
										$rs = mysqli_query($con,$check);
										$data = mysqli_fetch_array($rs, MYSQLI_NUM);
										
										if($data[0] > 100) {
											echo "<script type='text/javascript'> alert('Room Already in Exists')</script>";
											
										}

										else
										{
							 
										
										$sql ="INSERT INTO `room`( `type`,`place`) VALUES ('$room','$place')" ;
										if(mysqli_query($con,$sql))
										{
										 echo '<script>alert("New Room Added") </script>' ;
                                         header('location:room.php');
										}else {
											echo '<script>alert("Sorry ! Check The System") </script>' ;
										}
							 }
							 
							}
							
							?>
                        </div>
                        
                    </div>
                </div>
                
                  
           
			 <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    
   
</body>
</html>


