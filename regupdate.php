<?php
include ('dbcon.php');

if (isset($_GET['id']))
{
$id =$_GET['id'];
$query ="select * From reg where id=$id";
$fire =mysqli_query($con,$query) or die("can not fetch the data.".mysqli_error($con));

//if($fire)echo "we got the data.";
$user = mysqli_fetch_assoc($fire);
//checkbox code
$a=$user['Icourse'];
//echo $a;
$b=explode(",", $a); //checkbox
//echo $b; //array

//end checkbox code

echo $user['sname'];

}
?>

<?php
  
  if(isset($_POST['update'])){

  	    $sname=$_POST['sname'];
 $email=$_POST['email'];
 $mno=$_POST['mno'];
 $password=$_POST['password'];
 $gender=$_POST['gender'];
 $collage=$_POST['collage'];
 $qua=$_POST['qualification'];
 $branch=$_POST['branch'];
        $c = $_POST['Icourse'];
        $d=implode(",",$c);


  	    
  	    

  	    
  	   


  	    

  	     
  	  $query ="UPDATE reg  SET sname = '$sname',email = '$email',mno='$mno',password='$password',gender='$gender', collage='$collage',qualification='$qua',branch='$branch', Icourse='$d' WHERE id='$id'";
  	  $fire = mysqli_query($con, $query) or die("can not fetch the data.".mysqli_error($con));

  	  //if($fire)echo "data updated successfully.";
  	  if($fire) header("Location:regdisplay.php");

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
            <h1 class="m-0 text-dark">Update:</h1>
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
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form:</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" action="">
                <div class="card-body">
                  <div class="form-group">
                   <label>Student Name</label>
            <input type="text" name="sname" class="form-control" placeholder="student name" value="<?php echo $user['sname'] ?>" required>
        </div>
        
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" name="email" class="form-control" placeholder="email" value="<?php echo $user['email'] ?>" required>
        </div>
        <div class="form-group">
            <label for="number">Mobile Number:</label>
            <input type="text" name="mno" class="form-control" placeholder="mobile number"value="<?php echo $user['mno'] ?>" required>
        </div>
        <div class="form-group">
            <label>Password:</label>
            <input type="text" name="password" class="form-control" placeholder="password" value="<?php echo $user['password'] ?>" required>
            
        </div>
        <div class="form-group">
            <label>Gender:</label><br>
             <input type="radio"  id="" name="gender" value="male" required
             <?php
         if($user["gender"]=='male')
         {
          echo "checked";
         }
         ?>
         > Male <br>

             <input type="radio"  id="" name="gender" value="female" required
             <?php
         if($user["gender"]=='female')
         {
          echo "checked";
         }
         ?>
         > Female
        </div>
        <div class="form-group">
            <label>Collage:</label>
             <select name="collage" class="form-control" required>
             <option value="0">Select</option>
             <option value="rjit"
             <?php 
        if($user["collage"]=='rjit')
        {
          echo "selected";
        }

                ?>
                >RJIT</option>
             <option value="shriram college"
             <?php 
        if($user["qualification"]=='shriram college')
        {
          echo "selected";
        }

                ?>
                >SHRIRAM COLLEGE OF ENGINEERING AND MANAGEMENT</option>

             <option value="mpct"
             <?php 
        if($user["qualification"]=='mpct')
        {
          echo "selected";
        }

                ?>
                >MPCT</option>
             <option value="mits"
             <?php 
        if($user["qualification"]=='mits')
        {
          echo "selected";
        }

                ?>
                >MITS</option>
             <option value="itm"
             <?php 
        if($user["qualification"]=='itm')
        {
          echo "selected";
        }

                ?>
                >ITM</option>

             <option value="others"
             <?php 
        if($user["qualification"]=='others')
        {
          echo "selected";
        }

                ?>
                >OTHERS</option>

             </select>
        </div>
        <div class="form-group">
             <label>Qualifications</label> <br>
              <select name="qualification" class="form-control" required>
              <option value="0">Select</option>
              <option value="btech"
              <?php 
        if($user["qualification"]=='btech')
        {
          echo "selected";
        }

                ?>
                >B.Tech</option>
              <option value="bca"
              <?php 
        if($user["qualification"]=='btech')
        {
          echo "selected";
        }

                ?>
                >B.C.A</option>
              <option value="mca"
              <?php 
        if($user["qualification"]=='mca')
        {
          echo "selected";
        }

                ?>
                >M.C.A</option>
              <option value="bsc"
              <?php 
        if($user["qualification"]=='bsc')
        {
          echo "selected";
        }

                ?>
                >B.S.C</option>
              <option value="other"
              <?php 
        if($user["qualification"]=='other')
        {
          echo "selected";
        }

                ?>
                >OTHER</option>
          </select>
                                        
        </div>
        <div class="form-group">
            <label>Branch</label> <br>
            <select name="branch" class="form-control" required>
             <option value="0">Select</option>
             <option value="cse"
             <?php 
        if($user["branch"]=='cse')
        {
          echo "selected";
        }

                ?>
                >C.S.E</option>
             <option value="it"
             <?php 
        if($user["branch"]=='it')
        {
          echo "selected";
        }

                ?>>I.T</option>

             <option value="ee"
             <?php 
        if($user["branch"]=='ee')
        {
          echo "selected";
        }

                ?>
                >E.E</option>
             <option value="ec"
             <?php 
        if($user["branch"]=='ec')
        {
          echo "selected";
        }

                ?>
                >E.C</option>
             <option value="mech"
             <?php 
        if($user["branch"]=='mech')
        {
          echo "selected";
        }

                ?>
                >MECH.</option>

             <option value="civil"
             <?php 
        if($user["branch"]=='civil')
        {
          echo "selected";
        }

                ?>
                >CIVIL</option>
             <option value="automobile"
             <?php 
        if($user["branch"]=='automobile')
        {
          echo "selected";
        }

                ?>
                >AUTOMOBILE</option>

             <option value="other"
             <?php 
        if($user["branch"]=='other')
        {
          echo "selected";
        }

                ?>
                >OTHER</option>
                                        

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
        
        <input type="checkbox" name="Icourse[]" value="Web Designing"
        <?php
        if(in_array("Web Designing", $b))
        {
          echo "checked";
        } 
        ?>>Web Designing Internship Course (45 days)<br>
        <input type="checkbox" name="Icourse[]" value="Web Development"
        <?php
        if(in_array("Web Development", $b))
        {
          echo "checked";
        } 
        ?>
        >Web Development Internship Course (90 days)<br>     
        <input type="checkbox" name="Icourse[]" value="php"
        <?php
        if(in_array("php", $b))
        {
          echo "checked";
        } 
        ?>
        >PHP<br>
        <input type="checkbox" name="Icourse[]" value="Laravel"
        <?php
        if(in_array("Laravel", $b))
        {
          echo "checked";
        } 
        ?>
        >Laravel 7<br>
        <input type="checkbox" name="Icourse[]" value="Angular"
        <?php
        if(in_array("Angular", $b))
        {
          echo "checked";
        } 
        ?>
        >Angular<br>
        <input type="checkbox" name="Icourse[]" value="Vue Js"
        <?php
        if(in_array("Vue Js", $b))
        {
          echo "checked";
        } 
        ?>
        >Vue Js <br>    
        <input type="checkbox" name="Icourse[]" value="React JS"
        <?php
        if(in_array("React JS", $b))
        {
          echo "checked";
        } 
        ?>
        >React JS<br>
        <input type="checkbox" name="Icourse[]" value="React Native"
        <?php
        if(in_array("React Native", $b))
        {
          echo "checked";
        } 
        ?>
        >React Native<br>

        </div>
        File Upload:<input type="file" name="file">

        <br>
        <br>



        
        <input type="submit" name="update" class="btn btn-info" value="update">
        


    </form>
            </div>
            <!-- /.card -->




</section>
</div><!--content-wrapper end-->

    
  
<?php include "footer.php"?>