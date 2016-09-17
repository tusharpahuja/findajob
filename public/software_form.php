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
  <style>
    body {
      font: 20px Montserrat, sans-serif;
      line-height: 1.8;
      color: #f5f6f7;
    }
    .head {
      font: 40px Montserrat, sans-serif;
      text-align: center;
      color: #1E90FF;
    }

    .container-fluid {
      padding-top: 70px;
      padding-bottom: 70px;
    }
    .navbar-nav  li a:hover {
      color: #1abc9c !important;
    }
    .a1:hover{
      color: #FF69B4;
    }
  }
</style>
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
          <li><a href="signup">logout</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container">
    <p class="head">IT - SOFTWARE DEVELOPMENT</p>
  </div>

  <div class="container" style="color: grey;">
    <form class="form-horizontal">
    
      <div class="form-group">
        <label class="control-label col-sm-2" for="internships">Internships:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="internships" placeholder="Enter the minimum number of internships required">
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
</body>
</html>