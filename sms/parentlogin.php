<! DOCTYPE HTML>
<html lang="en_US">
<head>
	<meta charset="UTF-8">
	<title>Student Management System</title>
     <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
</head>
<body>
    
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
           <a class="navbar-brand" href="index.php"> Student Management System</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
            <li><a href="login.php"><span class="glyphicon glyphicon-user"></span> Admin Login</a></li>
            <li><a href="studentlogin.php">Student Login</a></li>
            <li><a href="parentlogin.php">Parent Login</a></li>
            <li><a href="teacherlogin.php">Teacher Login</a></li>
            <li><a href="aboutschool.php">About School</a></li>
        </ul> 
        </div>
    </div>
</div>
    <div class="text-center">  
        <div class="container-fluid" class="admin_login"
             style="margin:100px auto;">
        <div class="row">
        <div class="container">
            <div class="col-md-4 col-md-offset-4">
                <h2 align="center">Log In</h2>  
	           <form action="login.php" method="post">
	                   <div class="form-group">
                                <input class="form-control" placeholder="Parent Id" name="pid"  required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control"  placeholder="Password"  name="pass" required>
                            </div>
        <input type="submit" name="login" class="btn btn-primary text-center" value="Login">
                </form>
            </div>
            </div>
            </div>
        </div>
    </div>
    
    <?php include('footer.php');?>
    </body>
    
</html>    