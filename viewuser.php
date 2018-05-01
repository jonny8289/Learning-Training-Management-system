<?php
   include('session.php');
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>Parinati@ViewUser</title>
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
                <li >
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
<a class="navbar-brand" href="viewuser.php">View User</a>
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
    <li class="active"><a href="viewuser.php"><i class='pe-7s-look'>&nbsp</i>Retrieve User</a></li>
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
            <div class="col-md-7">
                <div class="card">
                    <div class="header">
                    <h4 class="title"></h4>
                    </div>
                    <div class="content">

    <form method="GET" action="">
    <div class="row">
        <div class="col-md-5">
        <div class="form-group">
        <label>Search </label>
    <input type="text" class="form-control" placeholder="Employees" name="query">
    </div>
</div></div>
<button type="submit" class="btn btn-info btn-fill pull-right">Search <i class="glyphicon glyphicon-pencil"></i></button>
            <div class="clearfix"></div>
        </form>
     
        </div>
    </div>
</div>
</div>




<?php
    mysql_connect("localhost", "root", "") or die("Error connecting to database: ".mysql_error());
     
    mysql_select_db("parinati") or die(mysql_error());
?> 
<?php
if (isset($_GET['query'])) {
    $query = $_GET['query']; 
     
    $min_length = 3;
     
    if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
         
        $query = htmlspecialchars($query); 
         
        $query = mysql_real_escape_string($query);
         
        $raw_results = mysql_query("SELECT * FROM employees
            WHERE (`fname` LIKE '%".$query."%')") or die(mysql_error());
             
         
        if(mysql_num_rows($raw_results) > 0){ 
            while($results = mysql_fetch_array($raw_results)){
                header("Content-type: image/jpeg");
            
               echo "<div class='col-md-4'>
    <div class='card card-user'>
        <div class='image'>
            <img src='https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400' alt=/>
    </div>
<div class='content'>
    <div class='author'>
        
       <img class='avatar border-gray' src='view.php?emp_id=".$results['emp_id']."' alt='...'/>
         
            <h4 class='title'>".$results["fname"]." ".$results["lname"]."<br />
               <small>".$results["emp_id"]."</small>
            <p class='description text-center'><b>".$results["uname"]."</b></p>
            <p class='description text-center'><b>".$results["psswd"]."</b></p>
            </h4>
        
    </div>
<p class='description text-center'> ".$results["email"]."
                            </p>
                            </div>
                            <hr>
                            <div class='text-center'>
                            </div>
                        </div>
                    </div>";
            
            }
             
        }
        else{ 
            echo "No results";
        }
         
    }
    else{ 
        $note= "<center><font color='red'>Enter ID or FName <br >Minimum length is </font>".$min_length."</center>";
    }
}
    error_reporting(0);
?>  

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

$sql = "SELECT * FROM employees";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
        echo "<div class='col-md-4'>
    <div class='card card-user'>
        <div class='image'>
            <img src='https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400' alt=/>
    </div>
<div class='content'>
    <div class='author'>
        
         <img class='avatar border-gray' src='view.php?emp_id=".$row['emp_id']."' alt='...'/>
            
            <h4 class='title'>".$row["fname"]." ".$row["lname"]."<br />
            <small>".$row["emp_id"]."</small><br>
           <p class='description text-center'><b>".$row["uname"]."</b></p>
           <p class='description text-center'><b>".$row["psswd"]."</b></p>
            </h4>
        
    </div>
<p class='description text-center'> ".$row["email"]."
                            </p>
                            </div>
                            <hr>
                            <div class='text-center'>
                            </div>
                        </div>
                    </div>
                    ";
    }
    echo "  </tbody></table>";
} else {
    echo "No Events";
}
$conn->close();
error_reporting(0);
?>  







                
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