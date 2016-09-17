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
<title>LOGIN</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<meta name="keywords" />
<link href="css/style1.css" rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
</head>
<body>
<h1>Welcome to FINDAJOB<span>Please login...</span></h1>
<div class="login-box">
		<form>
			<input type="text" class="text" name="username" value="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}" >
			<input type="password" name="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
		</form>
		<!-- <div class="remember">
			<a href="#"><p>Remember me</p></a>
			<h4>Forgot your password?<a href="#">Click here.</a></h4>
		</div> -->
		<div class="clear"> </div>
		<div class="btn">
			<input type="submit" value="LOG IN" ></input><br><br>

				<span style="color: grey;">OR</span><br><br>
			<input type="submit" value="SIGN UP"></input>
		</div>
		<div class="clear"> </div>
</div>
<div class="footer">
     <p>Copyright &copy; 2016. All Rights Reserved | Design by <a href="home.php">findajob.com</a></p>
</div>
</body>
</html>
