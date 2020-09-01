<?php

 session_start();
 ?>

<?php
include ('dbcon.php');

if (isset($_POST['login']))
{
	 echo$email = $_POST['email']; 
	 echo$password =  $_POST['password']; 
$query = "SELECT * FROM  registration WHERE email = '$email' && password= '$password'";
	$data = mysqli_query($con, $query);
    $total =mysqli_num_rows($data);
	 echo $total;


	 if($total==1){

    $_SESSION['email'] =$email;
   header('location:dashboard.php');

  }
  


}
?>






