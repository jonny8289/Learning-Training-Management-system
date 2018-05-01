<?php
   include('session.php');
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Parinati@Admin</title>
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
                <li class="active">    
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
                        echo "<a href='welcome.php?u_id=".$row['u_id']."' class='navbar-brand' >Profile</a>";
     }
} 
    else {
        echo "No Data !!! ";
        }
        mysqli_close($conn);
?>
        
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
                                <li><a href="createuser.php"><i class="pe-7s-add-user">&nbsp</i> Create User</a></li>
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
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Profile</h4>
                            </div>
                            <div class="content">
                               
                            <?php
                            $query=mysql_connect("localhost","root","");
                            mysql_select_db("parinati",$query);
                            if(isset($_GET['u_id']))
                            {
                                $u_id=$_GET['u_id'];
                            if(isset($_POST['submit']))
                            {
                            $first=$_POST['first'];
                            $last=$_POST['last'];
                            $uname=$_POST['uname'];
                            $passwd=$_POST['passwd'];
                            $emailid=$_POST['emailid'];
                            $designation=$_POST['designation'];
                            $atheme=$_POST['atheme'];
                            $query3=mysql_query("update admin set first='$first',last='$last',uname='$uname', passwd='$passwd',emailid='$emailid',designation='$designation',atheme='$atheme' where u_id='$u_id'");
                            if($query3)
                                {
                                echo "<font color='green'><center><b>Updated !!!</b></center></font>";
                                    }
                                }

    $query1=mysql_query("select * from admin where u_id='$u_id'");
    $query2=mysql_fetch_array($query1);
    ?>

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
<div class="col-md-6">
    <div class="form-group">
        <label>Username</label>
        <input type="text" class="form-control" placeholder="Username" value="<?php echo $query2['uname']; ?>" name="uname">
    </div>
</div>
                                        
<div class="col-md-6">
    <div class="form-group">
        <label for="exampleInputEmail1">Email ID</label>
        <input type="email" class="form-control" placeholder="Email" value="<?php echo $query2['emailid']; ?>" name="emailid">
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label>First Name</label>
            <input type="text" class="form-control" placeholder="Company" value="<?php echo $query2['first']; ?>" name="first">
        </div>
    </div>
        
<div class="col-md-6">
    <div class="form-group">
        <label>Last Name</label>
        <input type="text" class="form-control" placeholder="Last Name" value="<?php echo $query2['last']; ?>" name="last">
    </div>
</div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label>Password</label>
            <input type="text" class="form-control" placeholder="Password" value="<?php echo $query2['passwd']; ?>" name="passwd">
        </div>
    </div>



    <div class="col-md-4">
        <div class="form-group">
                <label>Designation</label>
                <input type="text" class="form-control" placeholder="Designation" value="<?php echo $query2['designation']; ?>">
        </div>
    </div>
</div>

<div class="row">
  <div class="col-md-4">
        <div class="form-group">
            <label>Dashboard Theme</label>
            <select  name="atheme" placeholder="Enter Theme" class="form-control"  value="<?php echo $query2['atheme']; ?>">
                        <option value="green">Lemon</option>
                        <option value="blue">Sea</option>
                        <option value="red">Apple</option>
                        <option value="azure">water</option>
                        <option value="orange">Orange</option>
                        <option value="purple">Max</option>
            </select>
        </div>
    </div>
</div>
<button type="submit" class="btn btn-info btn-fill pull-right" name="submit">Update <i class="glyphicon glyphicon-pencil"></i></button>
            <div class="clearfix"></div>
                                </form>
                                <?php
                            }
                            ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-user">
                            <div class="image">
                                <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="..."/>
                            </div>

        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "parinati";
            $conn = mysqli_connect($servername, $username, $password, $dbname); 
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
                    }

            $sql = "SELECT  u_id,first,last,uname, passwd,emailid,designation,admimg FROM admin where uname ='$user_check'";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo " <div class='content'>
                                <div class='author'>
                                     <a href=''>
                                    <img class='avatar border-gray' src='viewadmin.php?u_id=".$row['u_id']."' alt='...'/>

                                      <h4 class='title'>".$row["first"]." ".$row["last"]."<br />
                                         <small>".$row["uname"]."</small><br>
                                         <small>".$row["passwd"]."</small>
                                      </h4>
                                    </a>
                                </div>
                                <p class='description text-center'>
                                 <small>".$row["emailid"]."</small> 
                                </p>
                            </div>";
     }
} 
else {
     echo "No Data !!! ";
    }
mysqli_close($conn);
?>







                            <hr>
                               
                        </div>
                    </div>

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