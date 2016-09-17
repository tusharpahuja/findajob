<?php
  include("../includes/database_connection.php");
  include("../includes/functions.php");
  include("../includes/session.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <title>JOB PORTAL</title>
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/css/font-awesome-animation.css" rel="stylesheet" />
    <!--<link href="assets/css/prettyPhoto.css" rel="stylesheet" />-->
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>   
</head>
<body >
         <!-- NAV SECTION -->
         <div class="navbar navbar-inverse navbar-fixed-top">
       
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php">findajob</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#home-sec">HOME</a></li>
                    <li><a href="#job-search">JOB SEARCH</a></li>
                     <li><a href="#profile">PROFILE</a></li>
                       <li><a href="#contact-us">CONTACT US</a></li>
                    <li><a href="#logout">LOGOUT</a></li>
                </ul>
            </div>
           
        </div>
    </div>
     <!--END NAV SECTION -->
    
    <!--HOME SECTION-->
    <div id="home-sec">

   
    <div class="container"  >
        <div class="row text-center">
            <div  class="col-md-12" >
                <span class="head-main" > Best Job Portal</span>
                <h2 class="head-sub-main">Find A Job Right Now</h2>
                <h3 class="head-last col-md-4 col-md-offset-4  col-sm-6 col-sm-offset-3">UNDER CONSTRUCTION</h3>
         
                 
            </div>
            <div class="col-md-12 col-sm-12">
               
                <a  href="#job-search">
                 <i class="fa fa-crosshairs fa-5x go-marg"></i> 
                    </a>
            </div>
        </div>
    </div>
         </div>
    
    <!--END HOME SECTION-->  

    <!--SERVICES SECTION-->    
    <section  id="job-search">
        <div class="container">
            <div class="row ">
                <h1 class="g-pad-bottom">  <i class="fa fa-crosshairs "></i> Job Search  </h1>
                
                <div class="text-center g-pad-bottom">
                    <div class="col-md-4 col-sm-4">
                            <i class="fa fa-fire-extinguisher fa-5x faa-vertical animated c-main "></i>
                            <h4>Free To Use </h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                            
                    </div>
                    <div class="col-md-4 col-sm-4">
                            <i class="fa fa-coffee fa-5x faa-ring animated c-main "></i>
                            <h4>100%  Responsive </h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
                                 Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                            
                    </div>
                   
                    <div class="col-md-4 col-sm-4">
                            <i class="fa fa-gavel fa-5x faa-shake animated c-main "></i>
                            <h4>Clean & Customizable </h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                          
                    </div>
                </div>
                  </div>
                <div class="row">
                  
                    <div class="col-md-4 col-sm-4">
                          <div class="panel panel-default">
                       
                        <div class="panel-body">
                             <h4 class="adjst">Lorem ipsum dolor sit amet </h4>
                            <p>
                                   Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
                                </p>
                             
                            
                        </div>
                    </div> 
                            
                    </div>
                   <div class="col-md-4 col-sm-4">
                          <div class="panel panel-default">
                       
                        <div class="panel-body">
                             <h4 class="adjst">Lorem ipsum dolor sit amet </h4>
                            <p>
                                   Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
                                </p>
                             
                            
                        </div>
                    </div> 
                            
                    </div>
                     <div class="col-md-4 col-sm-4">
                          <div class="panel panel-default">
                       
                        <div class="panel-body">
                             <h4 class="adjst">Lorem ipsum dolor sit amet </h4>
                            <p>
                                   Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
                                </p>
                             
                            
                        </div>
                    </div> 
                            
                    </div>
                </div>
          
        </div>
    </section>
    <!--END SERVICES SECTION-->
  
    <!--CONTACT SECTION-->
    
    <section  id="logout">
        <div class="container">
             
            <div class="row g-pad-bottom">
                  <h1 class="g-pad-bottom">  <i class="fa fa-crosshairs"></i> Contact Info  </h1>
                

                <div class="col-md-6 ">
                    <h2>Lorem ipsum dolor sit amet</h2>
                 
                    <p>
                         <strong> Address: </strong> &nbsp;Newyork City, Your Country, Pin-000000.  
                        <br />
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
                           Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.              
                    </p>
                    <form>
                        <div class="row">
                            <div class="col-md-6 ">
                                <div class="form-group">
                                    <input type="text" class="form-control" required="required" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-md-6 ">
                                <div class="form-group">
                                    <input type="text" class="form-control" required="required" placeholder="Email address">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 ">
                                <div class="form-group">
                                    <textarea name="message" id="message" required="required" class="form-control" rows="3" placeholder="Message"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Submit Request</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                   <iframe class="cnt" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2999841.293321206!2d-75.80920404999999!3d42.75594204999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew+York!5e0!3m2!1sen!2s!4v1395313088825" s ></iframe>

                </div>
            </div>
        </div>
    </section>
    <!--END CONTACT SECTION-->

   

    <!--FOOTER SECTION -->
    <div id="footer">
        2016 www.findajob.com | All Rights Reserved  
         
    </div>
    <!-- END FOOTER SECTION -->
</body>
</html>
