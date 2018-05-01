<?php
   include('sessionuser.php');
?>
<?php include_once('functions.php') ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>Parinati@Calendar</title>
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

                               $sql = "SELECT  * FROM employees where uname ='$user_check'";
                                    $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            // output data of each row
                            while($row = mysqli_fetch_assoc($result)) {
                                echo $row["etheme"];
     }
} else {
     echo 'No Data !!! ';
}

mysqli_close($conn);
?>" data-image="assets/img/sidebar-5.jpg">
<div class="sidebar-wrapper">
<div class="logo">
<a href="dashboarduser.php" class="simple-text">
<b> Parinati</b>
</a>
</div>
<ul class="nav">
            <li >
                <a href="dashboarduser.php">                                                   <i class="pe-7s-graph"></i>
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

$sql="SELECT  emp_id,fname,lname,uname, psswd,email,phone,empimg FROM employees where uname ='$user_check'";
            $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
                           
            while($row = mysqli_fetch_assoc($result)) {
            echo "<a href='welcomeuser.php?emp_id=".$row['emp_id']."'><i class='pe-7s-user'></i> <p>Profile</p></a>";
     }
} 
    else {
        echo "No Data !!! ";
        }
        mysqli_close($conn);
?>
                </li>
                <li >
                <a href="vieweventuser.php">
                <i class="pe-7s-note2"></i>
                <p>View Events</p></a>
                </li>
                <li class="active">
                    <a href="calendaruser.php">
                        <i class="pe-7s-news-paper"></i>
                        <p>Calendar</p></a>
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
<a class="navbar-brand" href="calendaruser.php">Calendar</a>
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
	   echo "<li><a href='randomgroupuser.php?g_id=".$row['g_id']."'><i class='pe-7s-global'>&nbsp</i>"  .$row["gname"]."</a></li>";  
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
					  					  

<li><a href="dashboarduser.php"><p><?php echo $login_session; ?></p></a></li>
<li><a href = "logout.php"><p>Log out</p></a></li>
<li class="separator hidden-lg hidden-md"></li>
</ul>
        </div>
    </div>
</nav>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
				<div id="calendar_div">
                <?php
                 echo getCalender(); 
                 ?>
				</div>
            </div>
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