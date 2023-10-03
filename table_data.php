<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>

  <?php
   

     if (isset($_REQUEST["deleted"])) {
       echo "DELETE SUCCESSFULL !"; 
     }

     
        elseif 
          (isset($_REQUEST["edtited"])) {
       echo "UPDATE SUCCESSFULL !"; 
     }


    ?>
    <br><br>
<table id="tabale_data" border="1px">
      
      <tr> 
          <td><b>SL_No</b></td>
          <td><b>DB_ID</b></td>
          <td><b>Name</b></td>
          <td><b>Email</b></td>
          <td><b>Number</b></td>
          <td><b>Password</b></td>
          <td><b>Profile_Picture</b></td>
          <td><b>Action</b></td>
      </tr>
      
       <?php
       include'db_cunnection.php';
       
           
       
       $showdata="SELECT * FROM registration_form"; 

       $run = mysqli_query($database_connect,$showdata);
       

         $count=1;
       if ($run ==true) { 
          while($data = mysqli_fetch_array( $run )) { ?>


       <tr>   
              <td><?php  echo $count;  $count++ ; ?></td>  
              <td><?php  echo $data["ID"]; ?></td>  
              <td><?php  echo $data["name"]; ?></td>
              <td><?php  echo $data["email"]; ?></td>
              <td><?php  echo $data["numbers"]; ?></td>
              <td><?php  echo $data["password"]; ?></td>
             <td> <center><img width="60px" src="avater/<?php  echo $data["avater"]; ?>" alt=""/></center> </td>

            <td><a href="update-form.php?id=<?php  echo $data["ID"];  ?>">Edit</a>
                
            <td> <a onclick="return confirm('ARE YOE SURE!')" href="delete.php?id=<?php  echo $data["ID"];  ?>">Delete</a></td> 
      </tr>

     <?php   }} ?>

<a href="form.php"><button> AGIN LOGIN</button></a> 
    
       
         

   </table>
</body>
</html>