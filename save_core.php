


  <?php 

include 'DBcunnect.php';
//  if(isset($_REQUEST["name"])&& isset($_REQUEST["email"])&& isset($_REQUEST["number"]) && isset($_REQUEST["password"]) && isset($_REQUEST["avater"])){
    
if ($_SERVER['REQUEST_METHOD']=='POST'){
     $name=$_POST['name'];
     $email=$_POST['email'];
     $number=$_POST['number'];
     $password=$_POST['password'];
     $avater=$_FILES['avater']['name'];
     $avater_tmpName =$_FILES['avater']['tmp_name'];
     $location ="avater/";
     $unic_name=uniqid().".jpg";

move_uploaded_file($avater_tmpName ,$location."$unic_name.jpg");

  

  

$insart_query="INSERT INTO registration_form( name, email, numbers,password,avater) VALUES ('$name','$email','$number','$password','$unic_name.jpg')";

   $run_query=mysqli_query($database_connect,$insart_query);

   if($run_query==true){

  header("location:table_data.php");
   }

  
}
// }

?>
