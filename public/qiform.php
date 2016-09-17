<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="css/signup.css" />
</head>
<body>
<?php
$connection = mysql_connect('localhost', 'root', '');
if (!$connection){
 die("Database Connection Failed" . mysql_error());
}
$select_db = mysql_select_db('findajob');
if (!$select_db){
 die("Database Selection Failed" . mysql_error());
}
session_start();

 if (isset($_POST['Interests'])){
 	$qualification= $_POST['Qualification'];
 	//$Interests= $_POST['Interests'];
 	//$date=date();

    $username= $_SESSION["$username"];
	$name= $_SESSION['$name'];
	$gender= $_SESSION['$gender'];
	$password= $_SESSION['$password'];
	$email= $_SESSION['$email'];
	$dob= $_SESSION['$dob'];
	$street=$_SESSION['$Street'];
	$City= $_SESSION['$City'];
	$State= $_SESSION['$State'];
	$PIN= $_SESSION['$PIN'];

	$age=18;

 $query = "INSERT INTO `user_details`(`user_id`, `name`, `email`, `password`, `username`, `qualification`, `birthday`, `street`, `city`, `PIN`, `state`, `age`, `gender`) VALUES (0,'$name','$email','$password','$username','$qualification','$dob','$street','$City','PIN','$State','$age','$gender')";
 $result = mysql_query($query);
 echo "$result";
 if($result){
 	Echo "User Registred";
 }
 else{echo "User Not Registred";
 }
}
?>
<div class="signup">
<div class="text">
<h1 align=center><b>Interests Form</b></h1>
<form name="registration" action="qiform.php" method="post">
<center>
<pre>
<font face="Segoe UI">
Qualification:	 <select type="dropdown" name="Qualification">
					<option value="10" name="10">10th Pass</option>
					<option value="12" name="12">12th Pass</option>
					<option value="UG" name="UG">UnderGraduate</option>
					<option value="PG" name="PG">PostGraduate</option>
				</select><br>
Interests:		<input type="checkbox" name="Interests" value="Government"/>Government
		  <input type="checkbox" name="Interests" value="IT"/>IT Sector
		 <input type="checkbox" name="Interests" value="Banking"/>Banking
	    <input type="checkbox" name="Interests" value="NDA"/>NDA

</font>
</pre>
<input type="submit" name="submit" value="Next" />
</form>
</div>
</div>

</body>
</html>