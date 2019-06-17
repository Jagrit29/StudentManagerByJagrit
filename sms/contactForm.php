<?php
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $mailFrom=$_POST['email'];
    $message=$_POST['message'];
    

    $mailto="jagritbhupal29@gmail.com"; //can't send directly to gmail
    
    $headers= "From: ".$mailFrom;
    $txt= "You have received a message from ".$name.".\n\n".$message;
    
    mail($mailTo,$txt,$headers);
    header("Location:main.php?mailsent");
}
?>