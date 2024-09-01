<?php

require_once('db.php');

if(isset($_GET['id'])){
    $id=$_GET['id'];
$sql = "DELETE FROM roombook WHERE id = $id ";

if ($con->query($sql) === TRUE) {
    echo '<script>alert("RESERVATION CANCEL")</script>';
} else {
  echo "Error deleting record: " . $conn->error;
}
}
$con->close();
echo "<script type='text/javascript'> window.location='admin.php'</script>";
?>



