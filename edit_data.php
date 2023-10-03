<?php

  include'DBcunnect.php';

 if (isset($_REQUEST["edit_button"])) {
 	$name = $_REQUEST["name"];
 	$email=$_REQUEST["email"];
 	$number=$_REQUEST["number"];
 	$password=$_REQUEST["password"];
 	$edit_id=$_REQUEST["editingid"];

 	 $avater=$_FILES['avater']['name'];
     $avater_tmpName =$_FILES['avater']['tmp_name'];
     $location ="avater/";
     $unic_name=uniqid().".jpg";

    move_uploaded_file($avater_tmpName ,$location."$unic_name.jpg");



 $update_query="UPDATE  registration_form SET name='$name',email='$email',numbers='$number',password='$password',avater='avater' WHERE id=$edit_id";


    $run_query=mysqli_query($database_connect, $update_query);
    if ($run_query==true) {
    	header("location:table_data.php?edtited");
    }
 }


 ?>