<?php
//is me hum update query likhege ta ki jo naya data hai woh update ho jaye
include('../dbcon.php'); //ek directory piche ja ke
	$rollno=$_POST['rollno'];
	$name=$_POST['name'];
	$city=$_POST['city'];
	$pcon=$_POST['pcon'];
	$standard=$_POST['std'];
	$id=$_POST['sid']; //ye hume woh id btayega jiska update krna hai   ye sid humne hidden send kri hai pichle form me
	$imagename=$_FILES['simg']['name']; //name file ka name save kr ne k liye
	$tempname=$_FILES['simg']['tmp_name'];
	move_uploaded_file($tempname,"dataimg/$imagename"); //move krne k liye temp se folder me
	$qry="UPDATE `student` SET `rollno` = '$rollno', `name` = '$name', `city` = '$city', `pcont` = '$pcon', `standard` = '$standard',`image` = '$imagename' WHERE `student`.`id` = $id;";
	$run=mysqli_query($con,$qry);
	if($run==true)
	{
	   ?>
	   <script>
	   		alert('Data Updated Succesfully');
	   		window.open('admindash.php','_self'); //hume vapis jana hai us page pe  //self ka mtlb isi page me open kro
	   </script>
	<?php   
	}

?>