<?php

include ('dbcon.php');

$id = $_GET['id'];

$q = "DELETE FROM teacher2 WHERE  id = $id ";

mysqli_query($con, $q);

header ('location:viewteacher.php');


?>