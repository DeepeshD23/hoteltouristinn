<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> HOTEL Tourist Inn</title>
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- Morris Chart Styles-->
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />

    <script>
		function validateDates() {
			var checkinDate = new Date(document.getElementById("cin").value);
			var checkoutDate = new Date(document.getElementById("cout").value);
			if (checkinDate >= checkoutDate) {
				alert("Check-out date must be after check-in date!");
				return false;
			}
			return true;
		}
	</script>

</head>
<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <a  href="index.php"><img src="images/final logo inn.png" alt="Error loading"
						style="height: 60px;"></a>
                    </li>
                    <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
						<li class="nav-item active"><a href="reserve.php" class="nav-link">Enquiry-Now</a></li>
						<li class="nav-item"><a href="rooms.php" class="nav-link">Rooms</a></li>
						<li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
						<li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
						<li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
						<li class="nav-item"><a href="login.php" class="nav-link">Admin</a></li>
					</ul>
            </div>
        </nav>
       
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            ENQUIRY FORM <small></small>
                        </h1>
                    </div>
                </div>           
            <div class="row">
                <div class="col-md-5 col-sm-5">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            PERSONAL INFORMATION
                        </div>
                        <div class="panel-body">
						<form name="form" method="post" onsubmit="return validateDates()">
                            <div class="form-group">
                                            <label>Title*</label>
                                            <select name="title" class="form-control" required >
												<option value selected ></option>
                                                <option value="Dr.">Dr.</option>
                                                <option value="Miss.">Miss.</option>
                                                <option value="Mr.">Mr.</option>
                                                <option value="Mrs.">Mrs.</option>
												<option value="Prof.">Prof.</option>						
                                            </select>
                              </div>
							  <div class="form-group">
                                            <label>First Name</label>
                                            <input name="fname" class="form-control" required>
                               </div>
							   <div class="form-group">
                                            <label>Last Name</label>
                                            <input name="lname" class="form-control" required>
                               </div>
							   <div class="form-group">
                                            <label>Email</label>
                                            <input name="email" type="email" class="form-control" required>
                               </div>
                               <div class="form-group">
                                            <label>Number of male</label>
                                            <select name="male" class="form-control"required>
												<option value selected ></option>
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
                                            </select>
                              </div>
                              <div class="form-group">
                                            <label>Number of female</label>
                                            <select name="female" class="form-control"required>
												<option value selected ></option>
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
                                            </select>
                              </div>
                              <div class="form-group">
                                            <label>Number of child</label>
                                            <select name="child" class="form-control"required>
												<option value selected ></option>
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
                                            </select>
                              </div>
							   <div class="form-group">
                                            <label>Nationality*</label>
                                            <label class="radio-inline">
                                                <input type="radio" name="nation"  value="Indian" checked="">Indians
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="nation"  value="Foreigner">Foreigner
                                            </label>
                                </div>
								<div class="form-group">
                                            <!-- <label>Mobile Number</label> -->
                                            <!-- <input name="phone" type ="text" class="form-control" required >   -->
                                            <label for="phone">Phone Number:</label>
                                            <input type="text" pattern="\d{10}" maxlength="10">


                               </div> 
                        </div>
                    </div>
                </div>
                
                  
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            RESERVATION INFORMATION
                        </div>
                        <div class="panel-body">
								<div class="form-group">
                                            <label>Type Of Room *</label>
                                            <select name="troom"  class="form-control" required>
												<option value selected ></option>
                                                <option value="Single Room"> SINGLE ROOM</option>
                                                <option value="Family Room"> FAMILY ROOM</option>
												<option value="Deluxe Room"> DELUXE ROOM</option>
                                            </select>
                              </div>
							  <div class="form-group">
                                            <label>No.of Rooms *</label>
                                            <select name="nroom" class="form-control" required>
												<option value selected ></option>
                                                <option value="1">1</option>
                                               <option value="2">2</option>
												<option value="3">3</option>
                                            </select>
                               </div>							  
							  <div class="form-group">
                                            <label for="cin">Check-In</label>
                                            <input type="date" id="cin" name="cin" class="form-control" required>
                                            
                               </div>
							   <div class="form-group">
                                            <label for="cout">Check-Out</label>
                                            <input type="date" id="cout" name="cout" class="form-control" required>           
                               </div>
                               <div class="form-group">
                                            <label>Check-In Time</label>
                                            <input name="tin" type ="time" class="form-control" required>            
                               </div>
                               <div class="form-group">
                                            <label>Check-out Time</label>
                                            <input name="tout" type ="time" class="form-control" required>            
                               </div>
                       </div>
                    </div>
                </div>
			    <div class="col-md-12 col-sm-12">
                    <div class="well">
                        <h4>HUMAN VERIFICATION</h4>
                        <p>Type Below this code <?php $Random_code=rand(1000,9999); echo$Random_code; ?> </p><br />
						<p>Enter the random code<br /></p>
							<input  type="text" name="code1" title="random code" />
							<input type="hidden" name="code" value="<?php echo $Random_code; ?>" />
						<input type="submit" name="submit" class="btn btn-primary">

                        <?php

                            include "db.php";
							if(isset($_POST['submit']))
							{
							$code1=$_POST['code1'];
							$code=$_POST['code']; 
							if($code1!="$code")
							{
							$msg="Invalide code"; 
							}
							else
							{
							
									$con=mysqli_connect("localhost","root","","hoteld");
									$check="SELECT * FROM roombook WHERE email = '$_POST[email]'";
									$rs = mysqli_query($con,$check);
									$data = mysqli_fetch_array($rs, MYSQLI_NUM);
									if($data[0] > 1) {
										echo "<script type='text/javascript'> alert('User Already in Exists')</script>";
									 
                                        // isset($cOTLdata['char_data'])
                                        // $len = isset($cOTLdata['char_data']) ? count($cOTLdata['char_data']) : 0;

									}

									else
									{
										$new ="Not Confirm";
										$newUser="INSERT INTO `roombook`(`Title`, `FName`, `LName`,  `male`, `female`, `child`, `Email`, `National`, `Phone`, `TRoom`, `NRoom`, `cin`, `cout`, `tin`, `tout`, `stat`, `nodays`) VALUES ('$_POST[title]','$_POST[fname]','$_POST[lname]','$_POST[male]','$_POST[female]','$_POST[child]','$_POST[email]','$_POST[nation]','$_POST[phone]','$_POST[troom]','$_POST[nroom]','$_POST[cin]','$_POST[cout]','$_POST[tin]','$_POST[tout]','$new',datediff('$_POST[cout]','$_POST[cin]'))";
										if (mysqli_query($con,$newUser))
										{
											echo "<script type='text/javascript'> alert('Your Booking application has been sent')</script>";
											
										}
										else
										{
											echo "<script type='text/javascript'> alert('Error adding user in database')</script>";
											
										}
									}

							$msg="Your code is correct";
							}
							}
							?>

						</form>
							
                    </div>
                </div>
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
