<?php 
  include'DBcunnect.php';
  
$get_ID = $_REQUEST['id'];

$delete_query ="DELETE FROM registration_form WHERE id=$get_ID";

  $run_DLquery=mysqli_query($database_connect,$delete_query);
  if ($run_DLquery==true) {
    header("location:table_data.php?deleted");
  }
?>