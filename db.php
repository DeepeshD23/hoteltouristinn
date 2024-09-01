<?php
 $host = "localhost";  
 $user = "root";  
 $password = '';  
 $db_name = "hoteld";  
// $host = "localhost:3309";  
// $user = "viocenc4_hoteltouristinn";  
// $password = 'Hoteltouristinn@1234';  
// $db_name = "viocenc4_hoteld";  
 $con= mysqli_connect($host, $user, $password, $db_name);
   
 if(mysqli_connect_errno()) {  
     die("Failed to connect with MySQL: ". mysqli_connect_error()); 
 }  
 
?>
