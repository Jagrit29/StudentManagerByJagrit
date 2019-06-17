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
<body style="padding-top:150px;background:#5F490C">
<?php
include ('titlehead.php');
?>
    
    <div class="text-center" style="padding-bottom:40px;color:wheat;font-family:georgia">
        <h3> Insert Student Details</h3>
<form method="post" action="addstudent.php" enctype="multipart/form-data"> <!--enctype so that we can take images as input-->
	<table border="1" align="center" style="background-color:wheat;width:50%;text-align:center;height:50%;">
		<tr>
			<td>Roll No</td>
			<td><input type="text" name="rollno" placeholder="Enter Rollno" required/></td>
		</tr>
		<tr>
			<td>Name</td>
			<td><input type="text" name="name" placeholder="Enter Name" required/></td>
		</tr>
		<tr>
			<td>City</td>
			<td><input type="text" name="city" placeholder="Enter City" required/></td>
		</tr>
		<tr>
			<td>Parent Contact</td>
			<td><input type="number" name="pcon" placeholder="Enter Parent Contact" required/></td>
		</tr>
		<tr>
			 <td>Standard</td>
			 <td>
			 	<input type="text" name="std" placeholder="Enter Standard" required/>
			</td>
		</tr>
		<tr>
			<td>Image</td>
			<td><input type="file" name="simg"/></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="submit" value="Submit"</td>
		</tr>
	</table>
</form> 
        <?php include('../footer.php'); ?>
</body>
</html>
<!-- ab hume ye data jo submit hoga wo hume database me pahunchana hai-->
<?php
	if(isset($_POST['submit'])) //jab submit pe click huya
	{
	include('../dbcon.php'); //ek directory piche ja ke
	$rollno=$_POST['rollno'];
	$name=$_POST['name'];
	$city=$_POST['city'];
	$pcon=$_POST['pcon'];
	$standard=$_POST['std'];
	$imagename=$_FILES['simg']['name']; //name file ka name save kr ne k liye
	$tempname=$_FILES['simg']['tmp_name'];
	move_uploaded_file($tempname,"dataimg/$imagename"); //move krne k liye temp se folder me
	$qry="INSERT INTO `student`( `rollno`, `name`, `city`, `pcont`, `standard`,`image`) VALUES ('$rollno','$name','$city','$pcon','$standard','$imagename')";
	$run=mysqli_query($con,$qry);
	if($run==true)
	{
	   ?>
	   <script>
	   		alert('Data Inserted Succesfully');
	   		window.open('addstudent.php');
	   </script>
	<?php   
	}
	}
	?>