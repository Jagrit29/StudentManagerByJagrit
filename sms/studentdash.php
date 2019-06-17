<?php
include('dbcon.php');
session_start();
     if(isset($_SESSION['rid']))
     {
         $roll=$_SESSION['rid'];
     }
     else
     {
         header('location:studentlogin.php');
     }
$qry="SELECT * FROM `student` WHERE rollno ='$roll'";     
$run=mysqli_query($con,$qry);
$row=mysqli_num_rows($run);
$data=mysqli_fetch_assoc($run);
?>
<?php
   include('admin/header.php');
?>
<style>
    <?php
    include('css/style.css');
    ?>
</style>
<html lang="en_Us">
    <head>
        	<meta charset="UTF-8">
	<title>Student Management System</title>
     <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/owl.carousel.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
    <body style="padding-top:50px;background-color:#5F490C">
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
                                               <li><a href="logout1.php" style="color:antiquewhite"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li> 
     
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
        <div class="container text-center" style="margin-top:50px;">
            <h2 style="margin-bottom:40px;color:wheat;font-family:georgia;">Welcome Back, <span><?php echo $data['name'];?></span></h2>
        <form method="post" action="studentdash.php">
            <div class="panel panel-default" style="width:40%;margin: 0px auto;">
                 <div class="panel-heading">
                     <h3 align="center" class="panel-title">View Attendance</h3>
                 </div>
                
                <div class="panel-body">
                      You can view current attendance in your subjects by clicking here.
                </div>
                 <input type="submit" name="submit1" value="Show Info" class="btn btn-warning"/>
                
            </div>
            
            <div class="panel panel-default" style="width:60%;margin: 0px auto;margin-top:30px;">
                 <div class="panel-heading">
                     <h3 class="panel-title">View Marks</h3>
                 </div>
                
                <div class="panel-body">
                      You can view current marks in your subjects by clicking here.
                    <br>
                </div>
                 <input type="submit" name="submit1" value="Show Info" class="btn btn-warning"/>
                
            </div>
            </form>
        </div>
        
       <?php
        include('footer.php');
        ?>
    </body>
</html>

<?php
  if(isset($_POST['submit1']))
  {
      $roll=$_SESSION['rid'];
      include('dbcon.php');
      include('showMarks.php');
      showMarks($roll);
  }
?>