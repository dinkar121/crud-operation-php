<?php
error_reporting(0);
include "dbcon.php";
if(isset($_POST['submit'])){

 $sname=$_POST['sname'];
 $email=$_POST['email'];
 $mno=$_POST['mno'];
 $password=$_POST['password'];
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
    "<img src='$file' height='100' width='100' />";


$q ="INSERT INTO reg (sname,email,mno,password,gender,collage,qualification,branch,Icourse,file) VALUES ('$sname','$email','$mno','$password','$gender','$collage','$qua','$branch','$b','$file')";

$query =mysqli_query($con, $q);

    /*if($query){
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
*/



}


?>

<?php include "header.php"?>
<?php include "sidbar.php"?>


	<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Registration:</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Registration:</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

  <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-.2">
            </div>
          <!-- left column -->
          <div class="col-md-8">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form:</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" enctype="multipart/form-data" action="" style="padding-bottom: 50px">
        <div class="form-group">
            <br>
            <label>Student Name</label>
            <input type="text" name="sname" class="form-control" placeholder="student name" required>
        </div>
        
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" name="email" class="form-control" placeholder="email" required>
        </div>
        <div class="form-group">
            <label for="number">Mobile Number:</label>
            <input type="text" name="mno" class="form-control" placeholder="mobile number" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" class="form-control" placeholder="password" required>
        </div>
        <div class="form-group">
            <label>Gender:</label><br>
             <input type="radio"  id="" name="gender" value="male" required> Male <br>

             <input type="radio"  id="" name="gender" value="female" required> Female
        </div>
        <div class="form-group">
            <label>Collage:</label>
             <select name="collage" class="form-control" required>
             <option value="0">Select</option>
             <option value="rjit">RJIT</option>
             <option value="shriram college">SHRIRAM COLLEGE OF ENGINEERING AND MANAGEMENT</option>
             <option value="mpct">MPCT</option>
             <option value="mits">MITS</option>
             <option value="itm">ITM</option>
             <option value="others">OTHERS</option>

             </select>
        </div>
        <div class="form-group">
             <label>Qualifications</label> <br>
              <select name="qualification" class="form-control" required>
              <option value="0">Select</option>
              <option value="btech">B.Tech</option>
              <option value="bca">B.C.A</option>
              <option value="mca">M.C.A</option>
              <option value="bsc">B.S.C</option>
              <option value="other">OTHER</option>
          </select>
                                        
        </div>
        <div class="form-group">
            <label>Branch</label> <br>
            <select name="branch" class="form-control" required>
             <option value="0">Select</option>
             <option value="cse">C.S.E</option>
             <option value="it">I.T</option>
             <option value="ee">E.E</option>
             <option value="ec">E.C</option>
             <option value="mech">MECH.</option>
             <option value="civil">CIVIL</option>
             <option value="automobile">AUTOMOBILE</option>
             <option value="other">OTHER</option>
                                        

             </select>
            
        </div>
       <!-- <div class="form-group" >
             <label>Semester</label> <br>
             <select name="sem" class="form-control" required>
             <option value="0">Select</option>
             <option value="Ist">Ist Semester</option>
             <option value="IInd">IInd Semester</option>
             <option value="IIIrd">IIIrd Semester</option>
             <option value="IVth">IVth Semester</option>
             <option value="Vth">Vth Semester</option>
             <option value="VIth">VIth Semester</option>
             <option value="VIIth">VIIth Semester</option>
             <option value="VIIIth">VIIIth Semester</option>
                                        

            </select>
            
        </div>
      -->

        <div class="form-group">
        <label>Internship Course</label> <br>
        
        <input type="checkbox" name="Icourse[]" value="Web Designing">Web Designing Internship Course (45 days)<br>
        <input type="checkbox" name="Icourse[]" value="Web Development">Web Development Internship Course (90 days)<br>     
        <input type="checkbox" name="Icourse[]" value="php">PHP<br>
        <input type="checkbox" name="Icourse[]" value="Laravel">Laravel 7<br>
        <input type="checkbox" name="Icourse[]" value="Angular">Angular<br>
        <input type="checkbox" name="Icourse[]" value="Vue Js">Vue Js <br>    
        <input type="checkbox" name="Icourse[]" value="React JS">React JS<br>
        <input type="checkbox" name="Icourse[]" value="React Native">React Native<br>

        </div>
        File Upload:<input type="file" name="file">

        <br>
        <br>



        
        <input type="submit" name="submit" class="btn btn-info" value="submit">
        


    </form>
            </div>
            <!-- /.card -->




</section>
</div><!--content-wrapper end-->

		
	
<?php include "footer.php"?>