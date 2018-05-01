<?php
 
  $emp_id = $_GET['emp_id'];
  // do some validation here to ensure id is safe
 
  $link = mysql_connect("localhost", "root", "");
  mysql_select_db("parinati");
  $sql = "SELECT empimg FROM employees WHERE emp_id='$emp_id'";
  $result = mysql_query("$sql");
  $row = mysql_fetch_assoc($result);
  mysql_close($link);
 
  header("Content-type: image/jpeg");
  echo $row['empimg'];
?>