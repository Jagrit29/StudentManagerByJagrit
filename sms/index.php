<?php
  $url='images/index1.jpg';
?>
<style>
<?php include 'css/style.css'; ?>
</style>





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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body class="searchBody">
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
    
    
    
    
    
    
    
    
    
    
    
    
    
    
<div class="container">    
    <div class="container searchmtable" style="margin-top:125px;border:2px solid wheat;border-radius:5px;width:60%;height:auto;background-color:antiquewhite" >
        <h1  align= "center" style="font-family:Times new roman;margin-top:5%"> Search Student Profile</h1>  
        <form method="post" action="index.php" style="margin-top:3%;">
            <table class="searchtable"  align="center">
                <tr>
                    <td colspan="2" align="center"><b>STUDENT INFORMATION</b></td>
	            </tr>
	
	            <tr>
                    <td align="center">Choose Standard :</td>
                    <td align="center">
                        <select name="std" required>
                            <option value="1">1st</option>   <!--variable me value pass hogi jo hai 1-->
                            <option value="2">2nd</option>
                            <option value="3">3rd</option>
				            <option value="4">4th</option>
				            <option value="5">5th</option>
				            <option value="6">6th</option>
				            <option value="7">7th</option>
				            <option value="8">8th</option>
				            <option value="9">9th</option>
				            <option value="10">10th</option>
			            </select>	
		            </td>
                </tr>
	
	<tr>
		<td align="center">Enter Roll No</td>
		<td align="center"><input type="text" name="rollno" required/ style="border-radius:8px;border-color:black;"></td>
	</tr>
	
	<tr>
		<td colspan="2" align="center" style="color:black;border:10px;border-radius:20px;">
            <input type="submit" name="submit" value="Show Info" style="margin:5px 0;border: 2px solid black; border-radius:8px;"/></td>
	</tr>
                
	
</table>
</form>
    </div>    
    </div>
<?php include('footer.php');?> 
</body>
</html>



















<!-- PHP CODE -->


<?php
	if(isset($_POST['submit']))
	{
	$standard=$_POST['std'];
	$rollno=$_POST['rollno'];
	include('dbcon.php');
	include('function.php');
	showdetails($standard,$rollno);  //ye func bnaya hai jo display krdega   ye func alag file me defined hai
	
	
	}
	


?>