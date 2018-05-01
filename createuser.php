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
if(!empty($_POST['fname'])) {
  $sql="INSERT INTO employees(fname,lname,uname,psswd,email,phone)VALUES('".$_POST['fname']."','".$_POST['lname']."','".$_POST['uname']."','".$_POST['psswd']."','".$_POST['email']."','".$_POST['phone']."')";

if($conn->query($sql)==TRUE){
  $message="Inserted Successfully !!!";
}
else {
    $error="Connection Failure" . $sql ."<br>" .$conn->error;
  }
}
$conn->close();
error_reporting(0);
?>
<!doctype html>
<html lang="en">
<head>
<script src="java/angular.min.js"></script>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Parinati@CreateEmp</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>
    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />
    <!--Fonts and icons-->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="<?php
                        $servername = 'localhost';
                        $username = 'root';
                        $password = '';
                        $dbname = 'parinati';
                        $conn = mysqli_connect($servername, $username, $password, $dbname);
                        if (!$conn) {
                            die('Connection failed: ' . mysqli_connect_error());
                                    }
                               $sql = "SELECT  * FROM admin where uname ='$user_check'";
                               $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_assoc($result)) {
                                echo $row["atheme"];
                                        }
                                    } 
                                    else {
                                        echo 'No Data !!! ';
                                        }
                        mysqli_close($conn);
?>" data-image="assets/img/sidebar-5.jpg">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="dashboard.php" class="simple-text">
                  <b>  Parinati</b>
                </a>
            </div>

            <ul class="nav">
                <li>
                <a href="dashboard.php">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li >    
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
                    </a>
                </li>
                <li>
                <a href="viewevent.php">
                        <i class="pe-7s-note2"></i>
                        <p>View Events</p>
                    </a>
                </li>
                <li>
                <a href="calendar.php">
                        <i class="pe-7s-news-paper"></i>
                        <p>Calendar</p>
                    </a>
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



       <a href="createuser.php" class="navbar-brand" >Emp-Profile</a>
        
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <p>Groups<b class="caret"></b></p></a>
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
                if ($result->num_rows > 0) {
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
                                    <p>
                                        Employee Management
                                        <b class="caret"></b>
                                    </p>
                              </a>
                               <ul class="dropdown-menu">
                                <li class="active"><a href="createuser.php"><i class="pe-7s-add-user">&nbsp</i> Create User</a></li>
                                <li><a href="viewuser.php"><i class='pe-7s-look'>&nbsp</i>Retrieve User</a></li>
                                <li><a href="updateuser.php"><i class='pe-7s-edit'>&nbsp</i>Update User</a></li>
                                <li><a href="deleteuser.php"><i class='pe-7s-delete-user'>&nbsp</i>Delete User</a></li>
                          
                              </ul>
                        </li>
                          <li>
                           <a href="dashboard.php">
                               <p><?php echo $login_session; ?></p>
                            </a>
                        </li>
                        <li>
                            <a href = "logout.php">
                                <p>Log out</p>
                            </a>
                        </li>
                        <li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>
                
<div class="content">
<div ng-app="">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="header">
                    <h4 class="title">Employee Data</h4>
                    </div>
                    <div class="content">

    <form method="POST" action="">
    <div class="row">
        <div class="col-md-5">
        <div class="form-group">
        <label>Company </label>
    <input type="text" class="form-control" disabled placeholder="Company" value="Parinati Solutions.">
    </div>
</div>
  </div>
  <div class="row">    
<div class="col-md-3">
    <div class="form-group">
        <label>First Name</label>
        <input type="text" class="form-control" placeholder="First Name" name="fname" ng-model="fname">
    </div>
</div>
                                        
<div class="col-md-4">
    <div class="form-group">
        <label for="exampleInputEmail1">Last Name</label>
        <input type="text" class="form-control" placeholder="Last Name" name="lname" ng-model="lname">
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control" placeholder="Username"  name="uname" ng-model="uname">
        </div>
    </div>
        
<div class="col-md-6">
    <div class="form-group">
        <label>Password</label>
        <input type="text" class="form-control" placeholder="Password"  name="psswd" ng-model="psswd">
    </div>
</div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" placeholder="Email Address"  name="email" ng-model="email">

        </div>
    </div>
</div>
<div class="row">
      <div class="col-md-6">
        <div class="form-group">
            <label>Phone</label>
          
            <input type="text" class="form-control" placeholder="P.Number"  name="phone" ng-model="phone">
        </div>
    </div>
</div>

<button type="submit" class="btn btn-success btn-fill pull-right">Create<i class="glyphicon glyphicon-pencil"></i></button>
            <div class="clearfix"></div>
        </form>
   
        </div>
    </div>
</div>
<!--  Begin     side demo box-->

                    <div class="col-md-4">
                        <div class="card card-user">
                            <div class="image">
                                <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="..."/>
                            </div>

                <div class="content">
                                <div class="author">
                                
                                     <img class="avatar border-gray" src="" alt='...'/>

                                      <h4 class="title">{{fname}} {{lname}}<br />  
                                      </h4>
                                    
                                </div>
                                <p class="description text-center">
                                 {{uname}}
                                </p>
                                <p class="description text-center">
                                 {{psswd}}
                                </p>
                                 <p class="description text-center">
                                 {{email}}
                                </p>
                                <p class="description text-center">
                                 {{phone}}
                                </p>
                            </div>
                            <hr>
                               
                        </div>
                    </div>


<!--  End     side demo box-->



                </div>
            </div>
        </div>
                        


    <footer class="footer">
            <div class="container-fluid">
      
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.parinati.in">Parinati Solutions</a>,Paridigms Redefined...
                </p>
            </div>
        </footer>


    </div>
</div>



</body>

   <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
    <!--  Checkbox, Radio & Switch Plugins -->
    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="assets/js/light-bootstrap-dashboard.js"></script>
    <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <script src="assets/js/demo.js"></script>
</html>