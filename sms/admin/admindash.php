<?php
session_start(); //Session start kiya
	  	if(isset($_SESSION['uid'])) #check krege ki session uid exist krta hai ya nhi us se pta lgegea ke redirect huya hai ya nahi
	  	{
	  	}
	  	else
	  	{
	  	 header('location:../login.php'); //agar koi sida jana chahe admindash pe
	  	 // bina session set kiye to nahi ja payega
	  	 }
?>
<?php
	include ('header.php');
?>
<style>
    <?php 
    include ('../css/style.css');
    ?>
</style>
<html lang="en_US">
<head>
	<meta charset="UTF-8">
	<title>Student Management System</title>
     <!-- Bootstrap Core CSS -->
        <link href="../css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="../css/style.css" rel="stylesheet">
        <link href="../css/owl.carousel.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="../js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>
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
                                                <li><a href="../main.php" style="color:antiquewhite"><span class="glyphicon glyphicon-home"></span> HOME</a></li>
                                                <li><a href="../main.php#features" style="color:antiquewhite"><span class="glyphicon glyphicon-education"></span> Features</a></li>
                                                <li><a href="../main.php#contact" style="color:antiquewhite"><span class="glyphicon glyphicon-earphone"></span> CONTACT </a></li> 
                                               <li><a href="logout.php" style="color:antiquewhite"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li> 
     
    </ul>
                         </div>
 </div>
                                </nav>
                            </div>	
                        </div>

                    </div>

                </div>
            </header> 
	<div  class="container text-center" style="
       color:wheat;
                                               
       margin-top:10%;
       height:100px;
       line-height:18px;
       font-family:georgia;
       align:center;">
        
		<h1 align="center"> Welcome to Admin Dashboard </h1> 
	</div>
	<div class="pp_box" align="center">
	<div align="center" class="parent_box owl-carousel">
                <div class="box" >
				<a href="addstudent.php">Insert Student
                    Details</a>
                </div>    
                <div class="box" >
                <a href="updatestudent.php" style="margin:0 auto;">Update Student Details</a>
                </div>    
                <div class="box">
			    <a href="deletestudent.php">Delete Student Details</a>
                </div>    
	</div>
    </div>
        <script src="../js/jquery.js"></script>
        <script src="../js/owl.carousel.js"></script>
        <script>
            $('.owl-carousel').owlCarousel({
                   loop:true,
                   margin:10,
                   nav:true,
                   items:3,
                   center:true,
                   autoplay:true,
                   autoplayHoverPause:true,
                   autoplayTimeout:2000,
                   
                    /*navigation to ayegi agar 4 se zada ho*/
             });
        
        </script>
    <?php include('../footer.php'); ?>
</body>
</html	