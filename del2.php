<?php

require_once('db.php');

// Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

// sql to delete a record

if(isset($_GET['id'])){
    $id=$_GET['id'];
$sql = "DELETE FROM payment WHERE id='$id'";

if ($con->query($sql) === TRUE) {
    echo '<script>alert("Record deleted")</script>';
} else {
  echo "Error deleting record: " . $conn->error;
}
}
$con->close();
echo "<script type='text/javascript'> window.location='payment.php'</script>";
?>



