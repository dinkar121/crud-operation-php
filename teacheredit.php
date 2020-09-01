<?php
include ('dbcon.php');

if (isset($_GET['id']))
{
$id =$_GET['id'];
$query ="select * From teacher2 where id=$id";
$fire =mysqli_query($con,$query) or die("can not fetch the data.".mysqli_error($con));

//if($fire)echo "we got the data.";
$user = mysqli_fetch_assoc($fire);
//checkbox code
$a=$user['education'];
//echo $a;
$b=explode(",", $a); //checkbox
//echo $b; //array

//end checkbox code

echo $user['name'];

}
?>

<?php
  
  if(isset($_POST['update'])){

  	    $name=$_POST['name'];
 $email=$_POST['email'];
 $dob=$_POST['dob'];
 $password=$_POST['password'];
 $branch=$_POST['branch'];
 $gender=$_POST['gender'];
 

        $c = $_POST['education'];
        $d=implode(",",$c);


  	    
  	    

  	    
  	   


  	    

  	     
  	  $query ="UPDATE teacher2  SET name = '$name',email = '$email',dob='$dob',password='$password',branch='$gender', education='$education', education='$d' WHERE id='$id'";
  	  $fire = mysqli_query($con, $query) or die("can not fetch the data.".mysqli_error($con));

  	  //if($fire)echo "data updated successfully.";
  	  if($fire) header("Location:viewteacher.php");

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
                   <label> Name</label>
            <input type="text" name="name" class="form-control" placeholder="student name" value="<?php echo $user['name'] ?>" required>
        </div>
        
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" name="email" class="form-control" placeholder="email" value="<?php echo $user['email'] ?>" required>
        </div>
        <div class="form-group">
            <label for="number">DOB</label>
            <input type="date" name="dob" class="form-control" placeholder="mobile number"value="<?php echo $user['dob'] ?>" required>
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
             <option value="ece"
             <?php 
        if($user["branch"]=='ece')
        {
          echo "selected";
        }

                ?>
                >E.C
              </option>
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
        <label>education:</label> <br>
        
        <input type="checkbox" name="education[]" value="mca"
        <?php
        if(in_array("mca", $b))
        {
          echo "checked";
        } 
        ?>>MCA<br>
        <input type="checkbox" name="education[]" value="ma"
        <?php
        if(in_array("ma", $b))
        {
          echo "checked";
        } 
        ?>
        >MA<br>     
        <input type="checkbox" name="education[]" value="ba"
        <?php
        if(in_array("ba", $b))
        {
          echo "checked";
        } 
        ?>
        >BA<br>
        

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