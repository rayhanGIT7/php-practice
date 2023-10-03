<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
  	<?php 
	   include'DBcunnect.php';
       
       if(isset($_REQUEST["id"])) {
       	$edit_id=$_REQUEST["id"];

       	$selectInfo="SELECT * FROM registration_form WHERE  id=$edit_id";

       	$runInfo=mysqli_query($database_connect,$selectInfo);

       	while($data =mysqli_fetch_array($runInfo)){
       
	?>

	<form action="edit_data.php" method="post">

	<label>Enter The Name</label><br>
	<input type="text" name="name" value="<?php echo $data["name"]; ?>"><br>

	<label>Enter The Email</label><br>
	<input type="email" name="email" value="<?php echo $data["email"]; ?>"><br>

   <label for="phone">Enter a phone number:</label><br>
   <input type="tel" id="phone" name="number"pattern="[0-9]{7}[0-9]{2}[0-9]{2}"required value="<?php echo $data["numbers"]; ?>"><br>

	<label>Enter The Password</label><br>
	<input type="text" name="password" value="<?php echo $data["password"]; ?>"><br>

	<label>Upload the file</label><br>
	<input type="file" name="avater" value="<?php echo $data["avater"]; ?>"><br><br>

    <input type="hidden" name="editingid" value="<?php echo $edit_id ?>">
    <button type="submit" name="edit_button">UPDATA</button>

</form>

<?php } }?> 
</body>
</html>