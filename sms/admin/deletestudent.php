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
<body style="padding-top:150px;background:#5F490C;" >
<?php
include ('titlehead.php');
?>
    
<div class="text-center" style="padding-bottom:40px;color:wheat;font-family:georgia">
        <h3> Delete Student Details</h3>
</div>
<form action="deletestudent.php" method="post">
	<table align="center">
		<tr>
			<th style="color:wheat; padding-right:10px;" >Enter Standard</th>
			<td style=" padding-right:10px;"><input type="number" name="standard" placeholder="Enter Standard" required/></td>
			<th style="color:wheat; padding-right:10px;">Enter Student Name</th>	
			<td style=" padding-right:10px;"><input type="text" name="stuname" placeholder="Enter Student Name" required/></td>
		    <td colspan="2"><input type="submit" name="submit" value="Search"/></td>
		</tr>	
	</table>
</form>

<table align="center" width="60%" border="1" style="margin-top:10px;">
    <tr style="background-color:wheat">
	    <th>No</th>
	    <th>Image</th>
	    <th>Name</th>
	    <th>Roll No</th>
	    <th>Edit</th>
	</tr>
	
	
	<?php	
		if(isset($_POST['submit']))
			{
   				include('../dbcon.php');
   				$standard=$_POST['standard'];
   				$name=$_POST['stuname'];
   
   				$qry="SELECT * FROM `student` WHERE standard='$standard' AND name LIKE '%$name%' ";
   				$run=mysqli_query($con,$qry);
   				$rows=mysqli_num_rows($run);
   				if($rows<1)
   					{
     					echo "<tr><td colspan='5'>No Records Found</td></tr>";
   					}
   				else
   					{
   						$count=0;
       					while($data=mysqli_fetch_assoc($run))
       						{
       							$count++;
       							
    ?>
    				<!-- Now we need  print data in html page-->
       							<tr style="color:wheat;text-align:center" >
	    							<td><?php echo $count; ?></td> <!--printing the no.-->
	    							<td><img src="../dataimg/<?php echo $data['image'];?>" style="max-width:100px"/></td>
	    							<td>  <?php echo $data['name']; ?> </td>
	    							<td> <?php echo $data['rollno'];?> </td>
	    							<td><a href="deleteform.php?sid=<?php echo $data['id']?>">Delete</a></td> 
	    							<!-- humne saath me sid ke ander user ki id bhi send krdi hai
	    							yaha pe hum id bhi send kr rahe hai user ki saathmane ta ki uski value hi update ho -->
	    							
								</tr>
       						<?php	
       						}
   					}                
				}
				?> 
</table>
<div>    
<?php include('footer.php'); ?>
</div>    
</body>		