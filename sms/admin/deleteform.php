
<?php
//is me hum update query likhege ta ki jo naya data hai woh update ho jaye
include('../dbcon.php'); //ek directory piche ja ke

	$id=$_REQUEST ['sid']; //yaha pe humne koi form bhra ni hai to woh request krega jo piche humne submit kri thi jisme humne delete submit kiya tha
	
	$qry="DELETE FROM `student` WHERE id='$id'";
	$run=mysqli_query($con,$qry);
	if($run==true)
	{
	   ?>
	   <script>
	   		alert('Data Deleted Succesfully');
	   		window.open('admindash.php','_self'); //hume vapis jana hai us page pe  //self ka mtlb isi page me open kro
	   </script>
	<?php   
	}

?>