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
<body bgcolor="grey">
<?php
include ('titlehead.php');
include('../dbcon.php');
	
	$sid= $_GET['sid']; //jo sid me id  ayi hai usko sid variable me store  kiya  
	$sql="SELECT * FROM `student` WHERE id='$sid'"; //id use kr k us particular student ka pura data fetch kiya
    $run=mysqli_query($con,$sql);
    $data=mysqli_fetch_assoc($run);
    //phir hum form ke placeholder ki jagah value me purana data php se fetch kr k likhdege
?>
<form method="post" action="updatedata.php" enctype="multipart/form-data"> <!--enctype so that we can take images as input
   ab is form ka data naye page me bhejge jiska nam hum update data rkhege-->
	<table border="1" align="center">
		<tr>
			<td>Roll No</td>
			<td><input type="text" name="rollno" value="<?php echo $data['rollno']?>" required/></td>
		</tr>
		<tr>
			<td>Name</td>
			<td><input type="text" name="name" value="<?php echo $data['name']?>" required/></td>
		</tr>
		<tr>
			<td>City</td>
			<td><input type="text" name="city" value="<?php echo $data['city']?>" required/></td>
		</tr>
		<tr>
			<td>Parent Contact</td>
			<td><input type="number" name="pcon" value="<?php echo $data['pcont']?>" required/></td>
		</tr>
		<tr>
			 <td>Standard</td>
			 <td>
			 	<input type="text" name="std" value="<?php echo $data['standard']?>" required/>
			</td>
		</tr>
		<tr>
			<td>Image</td>
			<td><input type="file" name="simg"/></td>
		</tr>
		<tr>
		
			<td colspan="2" align="center">
			<input type="hidden" name="sid" value="<?php echo $data['id'];?>"/> <!--hum sid bhi bhej rhe hai form ke data ke saath, naye data ko save krne ke k kaam ayega -->
			<input type="submit" name="submit" value="Submit"/>
			</td>
		</tr>
	</table>
</form> 