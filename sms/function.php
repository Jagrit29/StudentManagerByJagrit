<?php
	function showdetails($standard,$rollno)
	{
			include('dbcon.php');
			$qry="SELECT * FROM `student` WHERE rollno='$rollno' AND standard='$standard'";
			$run=mysqli_query($con,$qry);
			$rows=mysqli_num_rows($run);
			if($rows>0)
			{
				$data=mysqli_fetch_assoc($run);               
?>
<div class="result">
<table border="1" style="width:60%;margin-top:2%;background:wheat;color:black;border: 3px solid #5F490C" align="center">
					<tr>
                        <td colspan="3" align="center"><b>Student Details</b></td>
					</tr>
					
					<tr>
					<!-- Ab hume database se data print krwana hai html page pe using php and html-->
						<td rowspan="5" align="center"><img src="dataimg/<?php echo $data['image'];?>" style="max-height:150px;max-width:120px;"</td>
						<th>Roll No</th>
						<td align="center"><?php echo $data['rollno'];?></td> <!--sql wala nam dalna hota hai [] isme-->
					</tr>
					
					<tr>
					    <th>Name</th>
						<td align="center"><?php echo $data['name'];?></td>
					</tr>	
					<tr>
					    <th>Standard</th>
						<td align="center"><?php echo $data['standard'];?></td>
					</tr>	
					<tr>
					    <th>City</th>
						<td align="center"><?php echo $data['city'];?></td>
					</tr>	
					<tr>
					    <th>Parent Contact</th>
						<td align="center"><?php echo $data['pcont'];?></td>
					</tr>	
					
				</table>
</div>
				
				<?php
			}
			else
			{
			?>
			  <script>
			  	alert('No student Found');
			  </script>
			 <?php 
			}
	}
            ?>