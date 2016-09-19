<?php
  include("../includes/database_connection.php");
  include("../includes/functions.php");
  include("../includes/session.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>My Profile</title>
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
      <a class="navbar-brand " href="home.php">findajob.com -    <a class="navbar-brand " href="profile.php">  <span class="a1"> MY PROFILE </span></a> </a>
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

<div class="container-fluid bg-1 text-center">
  <h3 class="margin">Akshay Kumar</h3>
  <img src="images/t2.jpg" class="img-responsive img-circle margin" style="display:inline" alt="Bird" width="350" height="350">
  <h3>I love swimming</h3>
</div>

<div class="container-fluid bg-2 text-center">
  <h3 class="margin">My Profile</h3>
  <p> </p>
  <a href="#" class="btn btn-default btn-lg">
    <span class="glyphicon glyphicon-search"></span> Search
  </a>
</div>

<div class="container-fluid bg-3 text-center">
  <h3 class="margin">My Interests</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <p></p>
      
    </div>
    <div class="col-sm-4">
      <p></p>
     
    </div>
    <div class="col-sm-4">
      <p></p>
  
    </div>
  </div>
</div>

<?php
  include("footer.php");
?>




