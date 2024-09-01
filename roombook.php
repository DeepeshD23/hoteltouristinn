<?php  
session_start();  
if(!isset($_SESSION["username"]))
{
 header("location:admin.php");
}
?> 

<?php
		if(!isset($_GET["rid"]))
		{
				
			 header("location:admin.php");
		}
		else {
				$curdate=date("Y/m/d");
				include ('db.php');
				$id = $_GET['rid'];
				
				
				$sql ="Select * from roombook where id = '$id'";
				$re = mysqli_query($con,$sql);
				while($row=mysqli_fetch_array($re))
				{
					$title = $row['Title'];
					$fname = $row['FName'];
					$lname = $row['LName'];
					$male = $row['male'];
					$female = $row['female'];
					$child = $row['child'];
					$email = $row['Email'];
					$nat = $row['National'];
					
					$Phone = $row['Phone'];
					$troom = $row['TRoom'];
					$nroom = $row['NRoom'];
					
					$non = $row['NRoom'];
					
					$cin = $row['cin'];
					$cout = $row['cout'];
					$tin = $row['tin'];
					$tout = $row['tout'];
					$sta = $row['stat'];
					$days = $row['nodays'];
					
				
				
				}
					
					
				
		
	}
		
		
		
			?> 

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Administrator	</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapper"style="background-color: #94024c;">
        <nav class="navbar navbar-default top-navbar" role="navigation"style="background-color: #94024c;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="admin.php"style="background-color: #94024c;"> <?php echo $_SESSION["username"]; ?> </a>
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
                        <a  href="admin.php"><i class="fa fa-dashboard"></i> Status</a>
                    </li>
					
                    <li>
                        <a href="payment.php"><i class="fa fa-qrcode"></i> Payment</a>
                    </li>
					<li>
                        <a href="records.php"><i class="fa fa-qrcode"></i> Records</a>
                    </li>
                    <li>
                        <a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                	</ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
		
		
		

        <div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Room Booking<small>	<?php echo  $curdate; ?> </small>
                        </h1>
                    </div>
					
					
					<div class="col-md-8 col-sm-8">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                           Booking Confirmation
                        </div>
                        <div class="panel-body">
							
							<div class="table-responsive">
                                <table class="table">
                                    <tr>
                                         <th>DESCRIPTION</th>
                                         <th>INFORMATION</th>
                                            
                                        </tr>
                                        <tr>
                                            <th>Name</th>
                                            <th><?php echo $title.$fname.$lname; ?> </th>
                                            
                                        </tr>
										<tr>
                                            <th>Male</th>
                                            <th><?php echo $male; ?> </th>
                                            
                                        </tr>
										<tr>
                                            <th>Female</th>
                                            <th><?php echo $female; ?> </th>
                                            
                                        </tr>
										<tr>
                                            <th>Child</th>
                                            <th><?php echo $child; ?> </th>
                                            
                                        </tr>

										<tr>
                                            <th>Email</th>
                                            <th><?php echo $email; ?> </th>
                                            
                                        </tr>
										<tr>
                                            <th>Nationality </th>
                                            <th><?php echo $nat; ?></th>
                                            
                                        </tr>
										
										<tr>
                                            <th>Phone No </th>
                                            <th><?php echo $Phone; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>Type Of the Room </th>
                                            <th><?php echo $troom; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>No Of the Room </th>
                                            <th><?php echo $nroom; ?></th>
                                            
                                        </tr>
										
										
										<tr>
                                            <th>Check-in Date </th>
                                            <th><?php echo $cin; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>Check-out Date</th>
                                            <th><?php echo $cout; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>Check-in Time</th>
                                            <th><?php echo $tin; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>Check-out Time</th>
                                            <th><?php echo $tout; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>No of days</th>
                                            <th><?php echo $days; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>Status Level</th>
                                            <th><?php echo $sta; ?></th>
                                            
                                        </tr>
                                   
                                  
                                        
                                        
                                    
                                </table>
                            </div>
                        
					
							
                        </div>
                        <div class="panel-footer">
                            <form method="post" action="reject.php">
										<div class="form-group">
														<label>Select the Confirmation</label>
														<select name="conf"class="form-control">
															<option value selected>	</option>
															<option value="Confirm">Confirm</option>
															

														</select>

										 </div>
							<input type="submit" name="co" value="OK" class="btn btn-success">
						<button type="submit" name="reject">Reject</button>
							
							</form>
                        </div>
                    </div>
					</div>
					
					<?php
						$rsql ="select * from room";
						$rre= mysqli_query($con,$rsql);
						$r = 0 ;
						$sc = 0;
						$gh = 0;
						$sr = 0;
						while($rrow=mysqli_fetch_array($rre))
						{
							$r = $r + 1;
							$s = $rrow['type'];
							$p = $rrow['place'];
							if($s=="Single Room" )
							{
								$sc = $sc+ 1;
							}
							
							if($s=="Family Room")
							{
								$gh = $gh + 1;
							}
							if($s=="Deluxe Room" )
							{
								$sr = $sr + 1;
							}
							
							
						
						}
						?>
						
						<?php
						$csql ="select * from payment";
						$cre= mysqli_query($con,$csql);
						$cr = 0;
						$csc = 0;
						$cgh = 0;
						$csr = 0;
				
						while($crow=mysqli_fetch_array($cre))
						{
							$cr = $cr + 1;
							$cs = $crow['troom'];
							
							if($cs=="Single Room"  )
							{
								$csc = $csc + 1;
							}
							
							if($cs=="Family Room" )
							{
								$cgh = $cgh + 1;
							}
							if($cs=="Deluxe Room" )
							{
								$csr = $csr + 1;
							}
							
							
						
						}
				
					?>
					<div class="col-md-4 col-sm-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Available Room Details
                        </div>
                        <div class="panel-body">
						<table width="200px">
							
							<tr>
								<td><b>Single Room </b></td>
								<td><button type="button" class="btn btn-primary btn-circle"><?php  
									$f1 =$sc -$csc;
									if($f1 <=0 )
									{	
										$f1 = "NO";
										echo $f1;
									}
									else{
										echo $f1;
									}
								
								
								?> </button></td> 
							</tr>
							<tr>
								<td><b>Family Room</b>	 </td>
								<td><button type="button" class="btn btn-primary btn-circle"><?php 
								$f2 =  $gh -$cgh;
								if($f2 <=0 )
									{	$f2 = "NO";
										echo $f2;
									}
									else{
										echo $f2;
									}

								?> </button></td> 
							</tr>
							<tr>
								<td><b>Deluxe Room	 </b></td>
								<td><button type="button" class="btn btn-primary btn-circle"><?php
								$f3 =$sr - $csr;
								if($f3 <=0 )
									{	$f3 = "NO";
										echo $f3;
									}
									else{
											echo $f3;
									}

								?> </button></td> 
							</tr>
							
							<tr>
								<td><b>Total Rooms	</b> </td>
								<td> <button type="button" class="btn btn-danger btn-circle"><?php 
								
								//$f4 =$r-$cr;  
								$f4 = $f1 + $f2 + $f3;
								if($f4 <=0 )
									{	$f4 = "NO";
										echo $f4;
									}
									else{
											echo $f4;
									}
								 ?> </button></td> 
							</tr>
						</table>
						
						
						
                        
						
						</div>
                        <div class="panel-footer">
                            
                        </div>
                    </div>
					</div>
                </div>
                <!-- /. ROW  -->
				
                </div>
                <!-- /. ROW  -->
				
				
				
				
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
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>


</body>

</html>

<?php
						if(isset($_POST['co']))
						{	
							$st = $_POST['conf'];
							
							 
							
							if($st=="Confirm")
							{
									$urb = "UPDATE `roombook` SET `stat`='$st' WHERE id = '$id'";
									
								if($f1=="NO" )
								{
									echo "<script type='text/javascript'> alert('Sorry! Not Available Single Room ')</script>";
								}
								else if($f2 =="NO")
									{
										echo "<script type='text/javascript'> alert('Sorry! Not Available  Family Room')</script>";
										
									}
									else if ($f3 == "NO")
									{
										echo "<script type='text/javascript'> alert('Sorry! Not Available Deluxe Room')</script>";
									}
										
										
										else if( mysqli_query($con,$urb))
											{	
												//echo "<script type='text/javascript'> alert('Guest Room booking is Confirm')</script>";
												//echo "<script type='text/javascript'> window.location='admin.php'</script>";
												 $type_of_room = 0;       
														if($troom=="Single Room")
														{
															$type_of_room = 1100;
														
														}
														else if($troom=="Family Room")
														{
															$type_of_room = 1400;
														}
														else if($troom=="Deluxe Room")
														{
															$type_of_room = 1700;
														}
														
														
														
														
														
														
														$ttot = $type_of_room * $days * $nroom;
														
													
														
														$fintot = $ttot  + $btot ;
															
															//echo "<script type='text/javascript'> alert('$count_date')</script>";
														$psql = "INSERT INTO `payment`(`id`, `title`, `fname`, `lname`, `troom`, `nroom`, `cin`, `cout`, `ttot`,`mepr`, `btot`,`fintot`,`noofdays`) VALUES ('$id','$title','$fname','$lname','$troom','$nroom','$cin','$cout','$ttot','$mepr','$btot','$fintot','$days')";
														$psql1 = "INSERT INTO `records`(`id`, `title`, `fname`, `lname`, `troom`, `nroom`, `cin`, `cout`, `ttot`,`mepr`, `btot`,`fintot`,`noofdays`) VALUES ('$id','$title','$fname','$lname','$troom','$nroom','$cin','$cout','$ttot','$mepr','$btot','$fintot','$days')";
														mysqli_query($con,$psql1);
														if(mysqli_query($con,$psql))
														{	$notfree="NotFree";
															$s="select place from room where type='$troom' && place='free' ";
															$r=mysqli_query($con,$s);
															$re=mysqli_fetch_num($r) ;
															$co= mysqli_num_rows($re);   	
															

															$rpsql = "UPDATE `room` SET `place`='$notfree',`cusid`='$id' where type='$troom' ";
															if(mysqli_query($con,$rpsql))
															{
															echo "<script type='text/javascript'> alert('Booking Confirm'+$co)</script>";
														    echo "<script type='text/javascript'> window.location='admin.php'</script>";
															
														    }
															
															
														}
												
											}
									
                                        
							}	
					
						}
					
									
									
							
						?>