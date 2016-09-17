<?php
  include("../includes/database_connection.php");
  include("../includes/functions.php");
  include("../includes/session.php");
?>

<?php

	 // If form submitted, insert values into the database.
	 if (isset($_POST['username']))
	 {
	 $username = $_POST['username'];
	 $password = md5($_POST['password']);
	 echo "$password";
	 //Checking is user existing in the database or not
	 $query = "SELECT * FROM `user_info` WHERE username='$username' and password='$password'";
	 $result = mysql_query($query) or die(mysql_error());
	 $rows = mysql_num_rows($result);
	 if($rows==1){
	 $_SESSION['username'] = $username;
	 echo "user logged in";
	 header("Location: home.html"); // Redirect user to index.php
	 }else{
	 echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
	 }
 	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
</head>
<body>
<b>
<div class="login">
<center>
<div class="text"> 
	<font size="7">Login</font>
	<form method="POST" action="login.php">
	<table>
	<tr><td>Username<td><input type="text" name="username"></tr><br>
	<tr><td>Password<td><input type="password" name="password"></tr><br>
	</table>
	<br>

	<input type="submit" name="Login" onclick="verify()"> &nbsp&nbsp&nbsp   <input type="reset" name="Reset">
	</form>
</div>
</center>
</div>
</b>

</body>
</html>