<?php
ob_start();
session_start(); //check krege kayi already login to nahi hai;baar bar login na krna pdege agar naya tab khole to
if(isset($_SESSION['uid'])) //agar session set hai to hi check kar bhai nahi to error ayega
{
	header('location:admin/admindash.php'); //agar login hoga to sida admindash pe le jayega
}
?>
<?php
 $img='images/admin.jpeg';
?>
<style>
    <?php include 'css/style.css';?>
</style>


<! DOCTYPE HTML>
<html lang="en_US">
<head>
	<meta charset="UTF-8">
	<title>Admin Login</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="adminbody">
    
  <header id="main_menu" class="header navbar-fixed-top">            
                <div class="main_menu_bg">
                    <div class="container">
                        <div class="row">
                            <div class="nave_menu">
                                <nav class="navbar navbar-default">
                                    <div class="container-fluid">
                                        <!-- Brand and toggle get grouped for better mobile display -->
                                        <div class="navbar-header">
                                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                                <span class="sr-only">Toggle navigation</span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </button>
                                            <a class="navbar-brand" href="main.php" style="color:antiquewhite;font-size:25px;"><span class="glyphicon glyphicon-Book"></span> School Manager
                                                 
                                            </a>
                                        </div>
<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
 <ul class="nav navbar-nav navbar-right">
                                                <li><a href="main.php" style="color:antiquewhite"><span class="glyphicon glyphicon-home"></span> HOME</a></li>
                                                <li><a href="main.php#features" style="color:antiquewhite"><span class="glyphicon glyphicon-education"></span> Features</a></li>
                                                <li><a href="main.php#contact" style="color:antiquewhite"><span class="glyphicon glyphicon-earphone"></span> CONTACT </a></li>
    </ul>
                         </div>
 </div>
                                </nav>
                            </div>	
                        </div>

                    </div>

                </div>
            </header> 
    <!--End of header -->
    <div class="text-center">  
        <div class="container-fluid" class="admin_login" style="margin:125px auto;">
        <div class="row">
        <div class="container">
            <div class="adminLoginTitle">
                <h1>Admin Panel</h1>
            </div>
            <div class="col-md-4 col-md-offset-4">
                <h4 align="center" style="color:wheat">Login your credentials</h4>  
	           <form action="login.php" method="post">
	                   <div class="form-group">
                                <input class="form-control" placeholder="Name" name="uname"  required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control"  placeholder="Password"  name="pass" required>
                            </div>
        <input type="submit" name="login" class="btn btn-warning text-center" value="Login">
                </form>
            </div>
            </div>
            </div>
        </div>
    </div>
    <?php include('footer.php');?> 
</body>
</html>
<?php
	include('dbcon.php');
	
	if(isset($_POST['login'])) //agar login button pe click kiyo to ye hoga
	{
	  $username =$_POST['uname'];
	  $password= $_POST['pass'];  //form ka data var me store kiya
	  
	  $qry="SELECT * FROM admin WHERE username ='$username' AND password= '$password'";
	  $run=mysqli_query($con,$qry);
	  $row=mysqli_num_rows($run);
	  if($row<1)
	  {
	  	?>
	  <script>
	  		alert('Username or Password not Match');
	  		window.open('login.php','_self');
	  </script>
	  
	      <?php
	  }
	  else
	  {
	  	$data=mysqli_fetch_assoc($run); //array for fetched row
	  	$id=$data['id']; //getting the id for the fetched admin
	  	//session pe set kro id ko
	  	$_SESSION['uid']=$id;  //uid nam ke session varriable me id set ho gyi
	  	header('location:admin/admindash.php'); //humne redirect kiya admindash wale page pe
	  	//ye hume admindash page pe le jayega  aur session ki id 1 set ho jayigi
	  }
	}
?>	