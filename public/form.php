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
    p {
      font-size: 16px;
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
  <div class="container" style="color: grey;">
    <form class="form-horizontal">
      <div class="form-group">
        <label class="control-label col-sm-2" for="username">Username:</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="email" placeholder="Enter email">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="email">Email:</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="email" placeholder="Enter email">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="email">Email:</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="email" placeholder="Enter email">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="pwd">Password:</label>
        <div class="col-sm-10"> 
          <input type="password" class="form-control" id="pwd" placeholder="Enter password">
        </div>
      </div>
      <div class="form-group"> 
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">Submit</button>
        </div>
      </div>
    </form>
  </div>
</body>
</html>