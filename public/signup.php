<?php
$connection = mysql_connect('localhost', 'root', 'techno2480');
if (!$connection){
 die("Database Connection Failed" . mysql_error());
}

$select_db = mysql_select_db('findajob');
if (!$select_db){
 die("Database Selection Failed" . mysql_error());
}

 if (isset($_POST['username'])){
 	session_start();
 $username = $_POST['username'];
 $name = $_POST['fname']. " " .$_POST['lname'];;
 $gender=$_POST['Gender'];
 $password = md5($_POST['password']);
 $email = $_POST['email'];
 $dob = $_POST['dob'];
 
 $_SESSION['$username']=$username;
 $_SESSION['$name']=$name;
 $_SESSION['$gender']=$gender;
 $_SESSION['$password']=$password;
 $_SESSION['$email']=$email;
 $_SESSION['$dob']=$dob;

 header("Location: addressform.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="css/signup.css" />
</head>
<body>
<div class="signup">
<div class="text">
<h1 align=center><b>Registration</b></h1>
<center>
<form name="registration" action="signup.php" method="post">
<pre>
<font face="Segoe UI">
First Name: 	<input type="text" name="fname" placeholder="First Name"><br>
Last Name:	<input type="text" name="lname" placeholder="Last Name"><br>
Gender:		<input type="radio" name="Gender" value="M" style = "width:20px; height:2em;">Male 		<input type="radio" name="Gender" value="F" style = "width:20px; height:2em;">Female<br>
Username:	<input type="text" name="username" placeholder="Username" required /><br>
Email:	 	<input type="email" name="email" placeholder="Email" required /><br>
Password: 	<input type="password" name="password" placeholder="Password" required /><br>
Date Of Birth:	<input type="date" name="dob"><br>
</font>
</pre>
<input type="submit" name="submit" value="Next" />
</form>
</div>
</div>

</body>
</html>