<?php

include "dbcon.php";
if(isset($_POST['submit'])){

  

    $name= $_POST['name'];
    $email= $_POST['email'];
    $dob= $_POST['dob'];
    $password= $_POST['password'];
    $branch= $_POST['branch'];
    $gender =$_POST['gender'];
    $education =$_POST['education'];
    $b=implode(",",$education);

   
    $filename = $_FILES['file'] ['name'];
    $tempname = $_FILES['file'] ['tmp_name'];

    $file = "upload/" .$filename;

    move_uploaded_file($tempname, $file);
    "<img src='$file' height='100' width='100' />";
$q ="INSERT INTO teacher2(name,email,dob,password,branch,gender,education,file) VALUES ('$name','$email','$dob','$password','$branch','$gender','$b','$file')";

  
  $query =mysqli_query($con, $q);

  /*  if($query){
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
            <h1 class="m-0 text-dark">Add Teacher</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Teacher</li>
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
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" action="" enctype="multipart/form-data" >
              
                <div class="card-body">
                  <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" placeholder="name" required>
        </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
            <label for="D.O.B.">D.O.B.:</label>
            <input type="date" name="dob" class="form-control" placeholder="dd/mm/yyyy" required>
        </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password:</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
      
        
        <div class="form-group">
            <label>Branch:</label> <br>
            <select name="branch" class="form-control" required>
             <option value="0">Select</option>
             <option value="cse">C.S.E</option>
             <option value="it">I.T</option>
             <option value="ee">E.E</option>
             <option value="ece">E.C.E</option>
             
             </select>
            
        </div>

        
        
        <div class="form-group">
            <label>Gender:</label><br>
             <input type="radio"  id="" name="gender" value="male" required> Male <br>

             <input type="radio"  id="" name="gender" value="female" required> Female
        </div>



             <div class="form-group">
                <label>Education:</label> <br>
             <input type="checkbox" name="education[]" value="mca">MCA
        <input type="checkbox" name="education[]" value="ca">CA      
        <input type="checkbox" name="education[]" value="ma">MA
        <input type="checkbox" name="education[]" value="bba">BBA
    </div>
                  <div class="form-group">
                     File Upload:<input type="file" name="file">
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->




</section>
</div><!--content-wrapper end-->


<?php include "footer.php"?>