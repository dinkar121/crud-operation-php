<?php
include "dbcon.php";


 $email=$_POST['email'];
 $password=$_POST['password'];
 

$q ="INSERT INTO registration (email,password) VALUES ('$email','$password')";

$query =mysqli_query($con, $q);

    if($query){
        ?>
        <script>
            alert("data inserted properly")
        </script>
        <?php
    }else{
        ?>
        <script>
            alert("data not inserted")
        </script>
        <?php
    }







?>