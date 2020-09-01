<?php
include "dbcon.php";

 $sname=$_POST['sname'];
 $email=$_POST['email'];
 $mno=$_POST['mno'];
 $address=$_POST['address'];
 $gender=$_POST['gender'];
 $collage=$_POST['collage'];
 $qua=$_POST['qualification'];
 $branch=$_POST['branch'];

 $Icourse=$_POST['Icourse'];
 $b=implode(",",$Icourse);
 $filename = $_FILES['file'] ['name'];
    $tempname = $_FILES['file'] ['tmp_name'];

    $file = "upload/" .$filename;

    move_uploaded_file($tempname, $file);
   echo "<img src='$file' height='100' width='100' />";


$q ="INSERT INTO reg (sname,email,mno,address,gender,collage,qualification,branch,Icourse,file) VALUES ('$sname','$email','$mno','$address','$gender','$collage','$qua','$branch','$b','$file')";

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