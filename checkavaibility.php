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
   
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>

<?php

session_start();

include "db.php";

if(isset($_POST['submit']))
{
$in = $_POST['check_in'];
$checkin = date("Y-m-d", strtotime($in));  

$out = $_POST['check_out'];
$checkout = date("Y-m-d", strtotime($out)); 

$Rtype = $_POST['rtype'];


//$sqldate =  "SELECT SUM(NRoom) as totalroom FROM roombook WHERE cin AND cout BETWEEN '$checkin' AND '$checkout' AND TRoom = '$Rtype' AND stat = 'Confirm'";
//for between ROOMs
$sql= "SELECT SUM(NRoom) as total FROM roombook WHERE cin AND cout BETWEEN '$checkin' AND '$checkout' AND TRoom = '$Rtype' AND stat = 'Confirm'";
$query_run = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($query_run); 
$notavailable = $row['total'];

//for not between dates
$sqlnot="SELECT SUM(NRoom) as bookroom FROM roombook WHERE cin AND cout NOT BETWEEN '$checkin' AND '$checkout' AND TRoom = 'Single Room' AND stat = 'Confirm';";
$querynot = mysqli_query($con,$sqlnot);
$rownot = mysqli_fetch_assoc($querynot); 
$not = $rownot['bookroom'];

    if($Rtype == 'Single Room' && $not < 5)
    {
                if($notavailable < 5)
                {
                    $total = 0;
                    $total = 5-$notavailable;
                    echo "<script>alert('There are " . $total . " free Single rooms available for the selected dates.')</script>";
                    echo "<script type='text/javascript'> window.location='index.php'</script>";
                }
                else{

                    //new date for single room
                    $newdatesql="SELECT MAX(cout) as mdate FROM roombook WHERE cin AND cout BETWEEN '$checkin' AND '$checkout' AND TRoom = '$Rtype' AND stat = 'Confirm';";
                    $querynewdate = mysqli_query($con,$newdatesql);
                    $rownewdate = mysqli_fetch_assoc($querynewdate); 
                    $newdate = $rownewdate['mdate'];
                    $datevalue = date('d-m-y', strtotime($newdate. ' + 2 days'));

                    echo "<script>alert ('sorry no room available')</script>";    
                    echo "<script>alert('we recomand you to check from this date : $datevalue')</script>";
                    echo "<script type='text/javascript'> window.location='index.php'</script>";
                }
    }

    elseif($Rtype == 'Family Room' && $not < 5) 
    {
        if($notavailable < 5)
        {
            $total = 0;
            $total = 5-$notavailable;
            echo "<script>alert('There are " . $total . " free Family rooms available for the selected dates.')</script>";
            echo "<script type='text/javascript'> window.location='index.php'</script>";
         
        }
        else{
            $newdatesql="SELECT MAX(cout) as mdate FROM roombook WHERE cin AND cout BETWEEN '$checkin' AND '$checkout' AND TRoom = '$Rtype' AND stat = 'Confirm';";
                    $querynewdate = mysqli_query($con,$newdatesql);
                    $rownewdate = mysqli_fetch_assoc($querynewdate); 
                    $newdate = $rownewdate['mdate'];
                    $datevalue = date('d-m-y', strtotime($newdate. ' + 2 days'));

                    echo "<script>alert ('sorry no room available')</script>";    
                    echo "<script>alert('we recomand you to check from this date : $datevalue')</script>";
                    echo "<script type='text/javascript'> window.location='index.php'</script>";
            
        }
    } 
    elseif($Rtype == 'Deluxe Room' && $not < 6) 
    {
        if($notavailable < 6)
        {
            $total = 0;
            $total = 6-$notavailable;
            echo "<script>alert('There are " . $total . " free Deluxe rooms available for the selected dates.')</script>";
            echo "<script type='text/javascript'> window.location='index.php'</script>";
        }
        else{
                    $newdatesql="SELECT MAX(cout) as mdate FROM roombook WHERE cin AND cout BETWEEN '$checkin' AND '$checkout' AND TRoom = '$Rtype' AND stat = 'Confirm';";
                    $querynewdate = mysqli_query($con,$newdatesql);
                    $rownewdate = mysqli_fetch_assoc($querynewdate); 
                    $newdate = $rownewdate['mdate'];
                    $datevalue = date('d-m-y', strtotime($newdate. ' + 2 days'));

                    echo "<script>alert ('sorry no   room available')</script>";    
                    echo "<script>alert('we recommand you to check from this date : $datevalue')</script>";
                    echo "<script type='text/javascript'> window.location='index.php'</script>";
            
        }
    }
    else{
        
        $newdatesql="SELECT MAX(cout) as mdate FROM roombook WHERE cin AND cout NOT BETWEEN '$checkin' AND '$checkout' AND TRoom = '$Rtype' AND stat = 'Confirm';";
        $querynewdate = mysqli_query($con,$newdatesql);
        $rownewdate = mysqli_fetch_assoc($querynewdate); 
        $newdate = $rownewdate['mdate'];
        $datevalue = date('d-m-y', strtotime($newdate. ' + 2 days'));

        echo "<script>alert ('sorry no   room available')</script>";    
        echo "<script>alert('we recommand you to check from this date : $datevalue')</script>";
        echo "<script type='text/javascript'> window.location='index.php'</script>";
    }
}
else{
    echo "<script>alert(ERROR)</script>";
    echo "<script type='text/javascript'> window.location='index.php'</script>";
}

?>