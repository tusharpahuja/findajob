<?php
  include("../includes/database_connection.php");
  include("../includes/functions.php");
  include("../includes/session.php");
?>

<?php
  $error_in_name = "";
  $error_in_minage = "";
  $error_in_maxage = "";
  $error_in_age = "";
  $error_in_vacancies = "";
  $error_in_internships = "";
  $error_in_salary = "";
  $errors =  array();
  $outputy = "";
  $outputn = "";
  if(isset($_POST['submit'])){
    if(valid_name($_POST['name'])==1){
      $name = ($_POST['name']);
    }
    else{
      $error_in_name = "Only letters and white space allowed";
      array_push($errors, $error_in_name);
    }
    $address = $_POST['address'];
    if(valid_num($_POST['minage'])==1){
      $minage = (int)$_POST['minage'];
    }
    else{
      $error_in_minage = "Only digits allowed";
      array_push($errors, $error_in_minage);
    }
    if(valid_num($_POST['maxage'])==1){
      $maxage = (int)$_POST['maxage'];
    }
    else{
      $error_in_maxage = "Only digits allowed";
      array_push($errors, $error_in_maxage);
    }

    if($_POST['minage']>=$_POST['maxage']){
       $error_in_age = "Maximum age can't be less than minimum age";
       array_push($errors, $error_in_age);
    }
    $jobtype = $_POST['jobtype'];
    if(valid_num($_POST['vacancies'])==1){
      $vacancies = (int)$_POST['vacancies'];
    }
    else{
      $error_in_vacancies = "Only digits allowed";
      array_push($errors, $error_in_vacancies);
    }
    $qualification = $_POST['qualification'];
    if(valid_num($_POST['internships'])==1){
      $internships = (int)$_POST['internships'];
    }
    else{
      $error_in_internships = "Only digits allowed";
      array_push($errors, $error_in_vacancies);
    }
    if(valid_num($_POST['salary'])==1){
      $salary = (int)$_POST['salary'];
    }
    else{
      $error_in_salary = "Only digits allowed";
      array_push($errors, $error_in_salary);
    }

    if(empty($errors)){
      $query = "INSERT INTO hospital(name,address,job,max_age,min_age,vacancies,qualification,internship,salary) VALUES('$name','$address','$jobtype',$maxage,$minage,$vacancies,'$qualification',$internships,$salary)";
      $result = mysqli_query($connection,$query);
      if($result){
        $outputy .= "Form successfully submitted";
      }
      else{
        $outputn .= "Sorry ! Form could not be submitted"; 
      }
    }
  }  
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
    <p class="head">HOSPITAL</p>
  </div>

  <div class="container" style="color: grey;">
    <form class="form-horizontal" action="hospital_form.php" method="post">

      <div class="form-group">
        <label class="control-label col-sm-2" for="name">Name:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="name" placeholder="Enter name of the hospital" required>
        </div>
      </div>
      <?php 
        echo "<div style=\"margin-left: 15%;font-size: 80%;color: red;\">";
        echo $error_in_name; 
        echo "</div>";
      ?>
      <div class="form-group">
        <label class="control-label col-sm-2" for="address">Address:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="address" placeholder="Enter address of the hospital" required>
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" for="minage">Minimum Age:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="minage" placeholder="Enter minimum age required" required>
        </div>
      </div>

      <?php 
        echo "<div style=\"margin-left: 15%;font-size: 80%;color: red;\">";
        echo $error_in_minage; 
        echo "</div>";
      ?>

      <div class="form-group">
        <label class="control-label col-sm-2" for="maxage">Maximum Age:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="maxage" placeholder="Enter maximum age required" required>
        </div>
      </div>

      <?php 
        echo "<div style=\"margin-left: 15%;font-size: 80%;color: red;\">";
        echo $error_in_maxage; 
        echo "</div>";
      ?>
      <?php 
        echo "<div style=\"margin-left: 15%;font-size: 80%;color: red;\">";
        echo $error_in_age; 
        echo "</div>";
      ?>

      <div class="form-group">
        <label class="control-label col-sm-2" for="jobtype" required>Jobtype:</label>
        <div class="col-sm-10">
          <label class="radio-inline"><input type="radio" name="jobtype" value="Senior Doctor">Senior Doctor</label>
          <label class="radio-inline"><input type="radio" name="jobtype" value="Junior Doctor">Junior Doctor</label>
          <label class="radio-inline"><input type="radio" name="jobtype" value="Pharmacist">Pharmacist</label>
          <label class="radio-inline"><input type="radio" name="jobtype" value="Nurse">Nurse</label>
          <label class="radio-inline"><input type="radio" name="jobtype" value="Surgeon">Surgeon</label>
          <label class="radio-inline"><input type="radio" name="jobtype" value="Receptionist">Receptionist</label>
        </div>
      </div>

    
      <div class="form-group">
        <label class="control-label col-sm-2" for="vacancies">Vacancies:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="vacancies" placeholder="Enter the number of vacancies" required>
        </div>
      </div>

      <?php 
        echo "<div style=\"margin-left: 15%;font-size: 80%;color: red;\">";
        echo $error_in_vacancies; 
        echo "</div>";
      ?>

      <div class="form-group">
        <label class="col-sm-2 control-label " required>Qualification:</label>
        <div class="col-sm-10">
          <select class="form-control input-sm" name="qualification">
            <option value="10" >10th Pass</option>
            <option value="12" >12th Pass</option>
            <option value="UG" >UnderGraduate</option>
            <option value="PG" >PostGraduate</option>
          </select>
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" for="internships">Internships:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="internships" placeholder="Enter the minimum number of internships required" required>
        </div>
      </div>

      <?php 
        echo "<div style=\"margin-left: 15%;font-size: 80%;color: red;\">";
        echo $error_in_internships; 
        echo "</div>";
      ?>

      <div class="form-group">
        <label class="control-label col-sm-2" for="salary">Salary:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="salary" placeholder="Enter salary to be provided" required>
        </div>
      </div>

      <?php 
        echo "<div style=\"margin-left: 15%;font-size: 80%;color: red;\">";
        echo $error_in_salary; 
        echo "</div>";
      ?>

      <div class="form-group"> 
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" name = "submit" class="btn btn-primary">Submit</button>
        </div>
      </div>

      <?php 
        echo "<div style=\"margin-left: 15%;font-size: 120%;color: #00FF00;\">";
        echo $outputy; 
        echo "</div>";
      ?>
      <?php 
        echo "<div style=\"margin-left: 15%;font-size: 120%;color: red;\">";
        echo $outputn; 
        echo "</div>";
      ?>

    </form>
  </div>


<?php
  include("footer.php");
?>