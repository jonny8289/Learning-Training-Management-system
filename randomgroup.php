<?php
   include('session.php');
?>


<?php
$servername="localhost";
$username="root";
$password="";
$dbname="parinati";
$conn =new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("Connection Failed".$conn->connect_error);
}
if(isset($_GET['g_id']))
{
$g_id=$_GET['g_id'];

if(!empty($_POST['pstdesc'])) {
$pstdesc=$_POST['pstdesc']; 

$grnum = mysqli_fetch_assoc(mysqli_query($conn," SELECT g_id FROM groups WHERE groups.g_id = '$g_id'"));
$g_id  = $grnum['g_id'];

$sql = "INSERT INTO post( g_id, pstdesc) VALUES('$g_id' , '$pstdesc')";

if($conn->query($sql)==TRUE){
    
    $message="Successfully Posted !!!";
}
else {
    echo "Connection Failure" . $sql ."<br>" .$conn->error; 
 }
}
$conn->close();
error_reporting(0);
?>


<!doctype html>
<html lang="en">
<head>
 <script>
function validateForm() {
    var x = document.forms["myform"]["pstdesc"].value;
    if (x == "") {
        alert("The Post Tab cannot be empty !!!");
        return false;
    }
}
</script>
    <meta charset="utf-8"/>
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>Parinati@RandomGroup</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="assets/css/animate.min.css" rel="stylesheet"/>
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>
    <link href="assets/css/demo.css" rel="stylesheet"/>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/main.css">
    <link type="text/css" rel="stylesheet" href="css/style.css"/>
    <script src="java/jquery.min.js"></script>
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="<?php
                        $servername = 'localhost';
                        $username = 'root';
                        $password = '';
                        $dbname = 'parinati';

                        // Create connection
                        $conn = mysqli_connect($servername, $username, $password, $dbname);
                            // Check connection
                        if (!$conn) {
                            die('Connection failed: ' . mysqli_connect_error());
                                    }

                               $sql = "SELECT  * FROM admin where uname ='$user_check'";
                                    $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            // output data of each row
                            while($row = mysqli_fetch_assoc($result)) {
                                echo $row["atheme"];
     }
} else {
     echo 'No Data !!! ';
}

mysqli_close($conn);
?>" data-image="assets/img/sidebar-5.jpg">
<div class="sidebar-wrapper">
<div class="logo">
<a href="dashboard.php" class="simple-text">
<b> Parinati</b>
</a>
</div>
<ul class="nav">
            <li >
                <a href="dashboard.php">                                                   <i class="pe-7s-graph"></i>
                <p>Dashboard</p>
                </a>
                </li>
                <li>
                    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "parinati";
                        
        $conn = mysqli_connect($servername, $username, $password, $dbname);
                            
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
                }

$sql="SELECT  u_id,first,last,uname, passwd,emailid,designation,admimg FROM admin where uname ='$user_check'";
            $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
                           
            while($row = mysqli_fetch_assoc($result)) {
            echo "<a href='welcome.php?u_id=".$row['u_id']."'><i class='pe-7s-user'></i> <p>Profile</p></a>";
     }
} 
    else {
        echo "No Data !!! ";
        }
        mysqli_close($conn);
?>
                </li>

                <li>
                    <a href="viewevent.php">
                    <i class="pe-7s-note2"></i>
                    <p>View Events</p></a>
                </li>
                
                <li>
                    <a href="calendar.php">
                        <i class="pe-7s-news-paper"></i>
                        <p>Calendar</p></a>
                </li>
                
                <li>
                    <a href="addevent.php">
                        <i class="pe-7s-note"></i>
                        <p>Insert Events</p>
                    </a>
                </li>
                
                <li>
                    <a href="updateevent.php">
                        <i class="pe-7s-edit"></i>
                        <p>Update Events</p>
                    </a>
                </li>
                
                <li>
                    <a href="groups.php">
                        <i class="pe-7s-key"></i>
                        <p>create groups</p>
                    </a>
                </li>           
        </ul>
    </div>
</div>

<div class="main-panel">
<nav class="navbar navbar-default navbar-fixed">
<div class="container-fluid">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>                   
<a class="navbar-brand" href="calendar.php">Calendar</a>
</div>
<div class="collapse navbar-collapse">
<ul class="nav navbar-nav navbar-right">
	<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
<p>Groups<b class="caret"></b></p>
</a>
                              
<ul class="dropdown-menu"> 

<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "parinati";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
            } 
    $sql = "SELECT g_id,gname FROM groups";
    $result = $conn->query($sql);
    if($result->num_rows > 0) { 
    while($row = $result->fetch_assoc()) {	
	   echo "<li><a href='randomgroup.php?g_id=".$row['g_id']."'><i class='pe-7s-global'>&nbsp</i>"  .$row["gname"]."</a></li>";  
    }  
} 
else {
    echo "0 results <li>No groups</li>";
}
    $conn->close();
    error_reporting(0);
?>
</ul>

</li>
					  					  
<li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <p>Employee Management<b class="caret"></b></p></a>
    <ul class="dropdown-menu">
    <li><a href="createuser.php"><i class="pe-7s-add-user">&nbsp</i> Create User</a></li>
    <li><a href="viewuser.php"><i class='pe-7s-look'>&nbsp</i>Retrieve User</a></li>
    <li><a href="updateuser.php"><i class='pe-7s-edit'>&nbsp</i>Update User</a></li>
    <li><a href="deleteuser.php"><i class='pe-7s-delete-user'>&nbsp</i>Delete User</a></li>
    </ul>
</li>
<li><a href="dashboard.php"><p><?php echo $login_session; ?></p></a></li>
<li><a href = "logout.php"><p>Log out</p></a></li>
<li class="separator hidden-lg hidden-md"></li>
</ul>
        </div>
    </div>
</nav>

<div class="content">
    <div class="container-fluid">
        <div class="row">

<div class='col-md-12'>
            <div class='card'>
            <div class='header'>
            <h4 class='title'>      
<?php
$query=mysql_connect("localhost","root","");
mysql_select_db("parinati",$query);
if(isset($_GET['g_id']))
{
$g_id=$_GET['g_id'];
$query1=mysql_query("select * from groups where g_id='$g_id'");
while($query2=mysql_fetch_array($query1))
{
echo $query2['gname'];
}
?>
    </h4>                             
</div>

<div class='content table-responsive table-full-width'>                         
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="parinati";
$conn =new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("Connection Failed".$conn->connect_error);
}

if(!empty($_POST['pstdesc'])) {
  $sql="INSERT INTO post(pstdesc, g_id_fk, u_id_fk,)SELECT 'pstdesc', g_id FROM groups WHERE g_id = '$g_id'";
  
if($conn->query($sql)==TRUE){   
    $message="Successfully Posted !!!";
}
else {
    $error="Connection Failure" . $sql ."<br>" .$conn->error;   
    }
}
$conn->close();
error_reporting(0);
?>                      
                            
<form method="post" action="" id="contact_form" name="myform" onsubmit="return validateForm()"> 

    <div class="form-group">
    <div class="col-sm-10">
    <Textarea class="form-control" type="text" PlaceHolder="Post" name="pstdesc" ></textarea>
    </div>
    </div>

    <div class="form-group">
    <div class="col-sm-5">
    <button type="submit" class="btn btn-success btn-fill pull-right">Post <i class="glyphicon glyphicon-pencil"></i></button>
    </div>
    </div>
    </form>
            
    <br><br>
    <br><br>        
    <br><br>

        </div>
    </div>
</div>

    </div>
</div>


<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Groups Member</h4>
                                <p class="category"></p>
                            </div>
                            <div class="content">
                              <ul class="list-group">

<br>

<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "parinati";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT g_id,gname FROM groups";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {
        echo "<li class='list-group-item'>".$row["gname"]."</li>";
    }  
} 
else {
    echo "0 results <li>No groups</li>";
}

$conn->close();
error_reporting(0);
?>

</ul>

<div class="footer">                            
<hr><div class="stats">
<i class="fa fa-clock-o"></i> <?php echo "Updating ..."; ?></div></div>
                            </div>
                        </div>
                    </div>

<div class="col-md-8">
                <div class="card">
                            <div class="header">
                                <h4 class="title">Post</h4>
                                <p class="category">Updating...</p>
                            </div>
                            
<div class="content">
   
<?php
$query=mysql_connect("localhost","root","");
mysql_select_db("parinati",$query);
if(isset($_GET['g_id']))
{
$g_id=$_GET['g_id'];
$query1=mysql_query("select * from post where g_id='$g_id'");


while($query2=mysql_fetch_array($query1))
{
echo "<center>
    <blockquote class='blockquote'>
    <table class='table'><tr><td><p class='mb-0'>".$query2['pstdesc']."</p></td>    
    <td class='td-actions text-right'> 
    <a href='deletepost.php?pst_id=".$query2['pst_id']."'>
    <button type='button' rel='tooltip' title='Remove' class='btn btn-danger btn-simple btn-xs'>
                                                        <i class='fa fa-times'></i>
                                                    </button></a></td></tr>
    </table><footer class='blockquote-footer' align='right'>Admin</footer>

    </blockquote><br>
        </center>";
}
?>          
<?php } ?>  
<?php } ?>      
<?php } ?>          

   </div>
</div>
</div>
<footer class="footer">
    <div class="container-fluid">
        <p class="copyright pull-right">
        &copy; <script>document.write(new Date().getFullYear())</script> 
        <a href="http://www.parinati.in">Parinati Solutions</a>,Paridigms Redefined...
        </p>
    </div>
</footer>

</div>
</div>
</body>
   <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="assets/js/light-bootstrap-dashboard.js"></script>
    <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <script src="assets/js/demo.js"></script>
</html>