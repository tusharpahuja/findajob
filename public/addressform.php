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
 
 if (isset($_POST['submit'])){
 $Street=$_POST["Street"];
 $City=$_POST["City"];
 $State=$_POST["State"];
 $PIN=$_POST["PIN"];

 $_SESSION['$Street']=$Street;
 $_SESSION['$City']=$City;
 $_SESSION['$State']=$State;
 $_SESSION['$PIN']=$PIN;
 
 header("Location: qiform.php");
}
 
?>
<div class="signup">
<div class="text">
<h1 align=center><b>Address Form</b></h1>
<form name="registration" action="addressform.php" method="post">
<center>
<pre>
<font face="Segoe UI">
Street:	<input type="text" name="Street" placeholder="Street">  <br>
City:		<input type="text" name="City" placeholder="City" required /><br>
State:	<input type="text" name="State" placeholder="State" required /><br>
PIN:		<input type="text" name="PIN" placeholder="PIN" required /><br>

</font>
</pre>
<input type="submit" name="submit" value="Next" />
</form>
</div>
</div>
</body>
</html>