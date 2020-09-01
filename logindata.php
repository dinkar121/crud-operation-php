<?php

 session_start();

if($_SESSION["email"]==true)
 {
 	
 	echo "Welcome " . $_SESSION['email'];

 }	
 else
 {
 	header('location:login.php');
 }	
 

 ?>

<a href="logout.php">Logout</a>
