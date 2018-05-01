<?php
 
  $u_id = $_GET['u_id'];
  // do some validation here to ensure id is safe
 
  $link = mysql_connect("localhost", "root", "");
  mysql_select_db("parinati");
  $sql = "SELECT admimg FROM admin WHERE u_id='$u_id'";
  $result = mysql_query("$sql");
  $row = mysql_fetch_assoc($result);
  mysql_close($link);
 
  header("Content-type: image/jpeg");
  echo $row['admimg'];
?>