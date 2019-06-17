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
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    
</head>
<body>
    
    
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
                                                <li><a href="#home" style="color:antiquewhite"><span class="glyphicon glyphicon-home"></span> HOME</a></li>
                                                <li><a href="#features" style="color:antiquewhite"><span class="glyphicon glyphicon-education"></span> Features</a></li>
                                                <li><a href="#contact" style="color:antiquewhite"><span class="glyphicon glyphicon-earphone"></span> CONTACT </a></li>
                                                
                                                
                                               
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
    
    
    
    
    
            <div id="home" class="home">
                <div class="overlay">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="main_home_slider text-center">
                                    <div class="single_home_slider">
                                        <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                                            <h1> SCHOOL MANAGER BY JAGRIT</h1>
                                            <p>Wondering How I will help you manage your School? <br>
                                                Click the features below.
                                            </p>
                                        </div>                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
    
    <!--FEATURES SECTION-->
    
        <div id="features" class="text-center">
            <div class="container">
                <div class="col-md-10 col-md-offset-1 section-title">
                    <h2 class="feature_title">Features</h2>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-4"><a href="index.php"><i class="fa fa-search" style="font-size: 38px;margin-bottom:20px;transition: all 0.5s;color: #fff;width: 100px;height: 100px;padding: 30px 0;border-radius: 50%;background: linear-gradient(to right, #846306 0%, #DEBC5E 100%);
	box-shadow: 10px 10px 10px rgba(0,0,0,.05);"></i>
                        <h3 class="feature_subtitle">Search Panel</h3></a>
                        <p>Just By entering Roll no. and Standard ,  you can view all the details of a particular student.</p>
                    </div>
    
                    <div class="col-xs-6 col-md-4"><a href="studentlogin.php"><i class="fa fa-user-graduate" style="font-size: 38px;margin-bottom:20px;transition: all 0.5s;color: #fff;width: 100px;height: 100px;padding: 30px 0;border-radius: 50%;background: linear-gradient(to right, #846306 0%, #DEBC5E 100%);
	box-shadow: 10px 10px 10px rgba(0,0,0,.05);"></i>
                        <h3 class="feature_subtitle" >Student Panel</h3></a>
                        <p>Registered Students can login and view their marks and attendance in different subjects.</p>
                    </div>
                    
                    <div class="col-xs-6 col-md-4"><a href="login.php"> <i class='fa fa-user-tie' style="font-size: 38px;margin-bottom:20px;transition: all 0.5s;color: #fff;width: 100px;height: 100px;padding: 30px 0;border-radius: 50%;background: linear-gradient(to right, #846306 0%, #DEBC5E 100%);
	box-shadow: 10px 10px 10px rgba(0,0,0,.05);"></i>
                        <h3 class="feature_subtitle" >Admin Panel</h3></a>
                        <p>Admin has authority to add, update and delete any student details.</p>
                    </div>
                </div>
            </div>
        </div>
    
    <!--footer-->
     <div id="contact">
         <div class="container">
             
             <div class="row">
                 <div class="col-lg-12 text-center">
                     <div class="section-title">
                         <h2>Contact Jagrit</h2>
                         <p> If you have some Questions or need Help! Please Feel Free to Contact Me!</p>
                     </div>
                 </div>
             </div>
             
             <div class="row">
                 <div class="col-md-3">
                     <div class="section-text">
                         <h4>Personal Information</h4>
                         <p>I am a 3rd year Btech-IT student.</p>
                         <p><i class="fa fa-phone"></i> 9478345660</p>
                         <p><i class="fa fa-envelope"></i> jagritbhupal29@gmail.com</p>
                     </div>
                 </div>
                 <div class="col-md-3">
                     <div class="section-text">
                         <h4>Working Hours</h4>
                         <p><i class="fa fa-clock-o"></i><span class="day">Weekdays:</span><span> 10 am to 6 pm </span></p>
                         <p><i class="fa fa-clock-o"></i><span class="day">Weekend:</span><span> 10am to 2pm</span></p>
                     </div>     
                 </div>
                 
                 <!--form section-->
                 <div class="col-md-6">
                     <form name="sentMessage" id="contactForm" novalidate="" action="contactForm.php">
                         <div class="row">
                             <div class="col-md-6">
                                 <div class="form-group">
                                     <input type="text" class="form-control" placeholder="Your Name *" id="name"
                                            required="" data-validation-required-messgae="Please enter your name.">
                                     <p class="help-block text-danger"></p>
                                 </div>
                             </div>
                              <div class="col-md-6">
                                 <div class="form-group">
                                     <input type="email" class="form-control" placeholder="Your Email *" id="email"
                                            required="" data-validation-required-messgae="Please enter email address.">
                                     <p class="help-block text-danger"></p>
                                 </div>
                             </div>
                         </div>
                         <div class="row">
                             <div class="col-md-12">
                                 <div class="form-group">
                                     <textarea class="form-control" placeholder="Your Message *" id="message" required="" data-validation-required-message="Please enter a message."></textarea>
										<p class="help-block text-danger"></p>
                                 </div>
                             </div>
                             <div class="clearfix"></div>
                         </div>
                         <div class="row">
								<div class="col-lg-12 text-center">
									<div id="success"></div>
									<button type="submit" class="btn btn-warning">Send Message</button>
								</div>
							</div>
                     </form>
                 </div>
             </div>
             
         </div>
    </div>
    
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="main_footer">
                        <div class="row">
                            <div class="col-sm-6 col-xs-12">
                                <div class="socialmedia">
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-instagram"></i></a>
                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                            
                            
                        <div class="col-sm-6 col-xs-12">
                                <div class="copyright_text">
                                    <p class=" wow fadeInRight" data-wow-duration="1s">Made with <i class="fa fa-heart"></i> by Jagrit. All Rights Reserved</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
</body>
</html>    