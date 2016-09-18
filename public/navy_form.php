<?php
  include("../includes/database_connection.php");
  include("../includes/functions.php");
  include("../includes/session.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>FORM</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/footer.css">
</head>
<body>
  <nav class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header " >
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand " href="home.php">findajob.com  </a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="home.php">home</a></li>
          <li><a href="login.php">jobs</a></li>
          <li><a href="logout.php">logout</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container">
    <p class="head">NDA - NAVY</p>
  </div>

  <div class="container" style="color: grey;">
    <form class="form-horizontal" action="navy_form.php" method="post">
      <div class="form-group">
        <label class="control-label col-sm-2" for="branch">Branch:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="branch" placeholder="Enter Branch">
        </div>
      </div>
      
      <div class="form-group">
        <label class="control-label col-sm-2" for="PAT">PAT:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="pat" placeholder="Enter minimum Physical Assessment Test score required">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" for="height">Height:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="height" placeholder="Enter minimum height required">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" for="weight">Weight:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="weight" placeholder="Enter minimum weight required">
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label ">Qualification:</label>
        <div class="col-sm-10">
          <select class="form-control input-sm">
            <option value="10" name="10">10th Pass</option>
            <option value="12" name="12">12th Pass</option>
            <option value="UG" name="UG">UnderGraduate</option>
            <option value="PG" name="PG">PostGraduate</option>
          </select>
        </div>
      </div>

       <div class="form-group">
        <label class="control-label col-sm-2" for="salary">Salary:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="salary" placeholder="Enter salary to be provided">
        </div>
      </div>

      <div class="form-group"> 
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </form>
  </div>

<?php
  include("footer.php");
?>