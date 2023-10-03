
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>FORM_PAGE</title>
</head>
<body>
 

	<form enctype="multipart/form-data" action="save_core.php" method="post">
	<label>Enter The Name</label><br>
	<input type="text" name="name" value=""><br>

	<label>Enter The Email</label><br>
	<input type="email" name="email"><br>

  <label for="phone">Enter a phone number:</label><br>
   <input type="tel" id="phone" name="number"pattern="[0-9]{7}[0-9]{2}[0-9]{2}" required><br>

	<label>Enter The Password</label><br>
	<input type="password" name="password"><br>

	<label>Upload the file</label><br>
	<input type="file" name="avater"><br><br>


	
	
	<button type="submit">SUBMIT</button>

	
	<!-- <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Type  user name" name="search"> -->
	<!-- <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name"> -->
	<!-- <button type="submit" name="searchBT" value="Search">SEARCH</button> -->
</form>



       
</body>
</html>