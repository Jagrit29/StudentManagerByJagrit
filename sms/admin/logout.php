<?php
//logout me hum ye krege ke jitne bhi session bnaye unko destroy krde
session_start(); //session ki functionality use krne ke liye ye important hota hai
session_destroy();
header('location:../main.php');
?>