<?php

 session_start();
 ?>

<?php include "header.php"?>
<?php include "sidbar.php"?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Display:</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">View Students</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

      <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12" >
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Bordered Table</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                
                  <table  >
                  <thead>                  
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>student name</th>
                      <th>Email</th>
                      <th>password</th>
                      <th>mobile</th>
                      <th>Gender</th>
                      <th>Collage</th>
                      <th>Qualification</th>
                      <th>Branch</th>
                     <!-- <th>semester</th>-->
                      <th style="width: 10px">course</th>
                      <th>file</th>

                      <th>Action</th>
                    </tr>
                  </thead>
                  <?php
  include('dbcon.php');
  $q= "select * from reg";
   $query = mysqli_query($con, $q);

  while ($result= mysqli_fetch_array($query)) {
    



  ?>
                  <tbody>
                    <tr>
                      <td><?php echo $result['id']?></td>
                      <td><?php echo $result['sname']?></td>
                      <td><?php echo $result['email']?></td>
                      <td><?php echo $result['password']?></td>
                      <td><?php echo $result['mno']?></td>
                      <td><?php echo $result['gender']?></td>
                      <td><?php echo $result['collage']?></td>
                      <td><?php echo $result['qualification']?></td>
                      <td><?php echo $result['branch']?></td>
                      <td><?php echo $result['Icourse']?></td>
                      <td><img class="b" src="<?php echo $result['file']?>"></td>
                     
                      
                      <td><a href="regupdate.php ?id=<?php echo $result['id'];?>">Update</a>~
    <a href="regdelete.php ?id=<?php echo $result['id'];?>">Delete</a></td>
                      
                    </tr>
                   
                  </tbody>
                    <?php
    }
  ?>
                </table>
              
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
            <!-- /.card -->





</section>






 

 </div><!--end-->   





<?php include "footer.php"?>