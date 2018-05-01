<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "parinati";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$pst_id=$_GET['pst_id'];

// sql to delete a record
$sql = "DELETE FROM post WHERE pst_id='$pst_id'";

if ($conn->query($sql) === TRUE) {
   
	header("location:randomgroup.php?g_id=".$query2['g_id']."");
} else {
     $error="Error deleting record: " . $conn->error;
}

$conn->close();
?>