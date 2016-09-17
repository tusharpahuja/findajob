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
          <li><a href="signup">logout</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container">
    <p class="head">SCHOOL</p>
  </div>

  <div class="container" style="color: grey;">
    <form class="form-horizontal" action="school_form.php" method="post">

      <div class="form-group">
        <label class="control-label col-sm-2" for="name">Name:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="name" placeholder="Enter name of the school">
        </div>
      </div>
      
      <div class="form-group">
        <label class="control-label col-sm-2" for="address">Address:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="address" placeholder="Enter address of the school">
        </div>
      </div>
      
      <div class="form-group">
        <label class="control-label col-sm-2" for="jobtype">Jobtype:</label>
        <div class="col-sm-10">
          <label class="radio-inline"><input type="radio" name="jobtype">Teacher</label>
          <label class="radio-inline"><input type="radio" name="jobtype">Receptionist</label>
          <label class="radio-inline"><input type="radio" name="jobtype">Lab Assisstant</label>
          <label class="radio-inline"><input type="radio" name="jobtype">Accountant</label>
          <label class="radio-inline"><input type="radio" name="jobtype">Faculty Incharge</label>
        </div>
      </div>
      
      <div class="form-group">
        <label class="control-label col-sm-2" for="minage">Minimum Age:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="minage" placeholder="Enter minimum age required">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" for="maxage">Maximum Age:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="maxage" placeholder="Enter maximum age required">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" for="vacancies">Vacancies:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="vacancies" placeholder="Enter the number of vacancies">
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