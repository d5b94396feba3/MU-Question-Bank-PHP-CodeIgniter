<!doctype html>
<html lang="en">
  <head>
   <title>Mu Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


   <style type="text/css">


    .navbar-nav{
      padding: 12px;
      margin-left: 5px;

   }
   .navbar-header{
       padding: 12px;
      margin-left: 2px;
      text-decoration-color: white;
   }

   .navbar-right{
      padding: 12px;
      margin-right: 5px;

   }

   .footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: black;
   color: white;
   text-align: center;
}
body{
    background: #DCDCDC;
  }
 
     
    
   </style>
   

</head>
<body>
  
    <?php 
      if(isset($_SESSION['user_logged'])==False && isset($_SESSION['admin_logged'])==False)
      { 
      ?>
     <div class="top-line" > 
     <marquee>
      <font style="color:  #A52A2A;">
        Welcome to Mu Question Bank, Login to Account or Sign Up for search.
      </font> 
    </marquee> 
  </div> 
   <?php   }  ?>

  <header class="header-transparent" id="header-main">
 
            <nav class="navbar navbar-inverse">
              <div class="container-fluid">
                <div class="navbar-header">
                  <a class="navbar-brand" href="<?php echo base_url();?>home/mu_index">
                  Mu Question Bank
                </a>
                </div>

                <ul class="nav navbar-nav ">
                  <li class="active"><a href="<?php echo base_url();?>home/mu_index">Home</a></li>
                  <li><a href="<?php echo base_url();?>home/faq">FAQ</a></li>
                  <li><a href="<?php echo base_url();?>home/contacts">Contacts</a></li>
                  <li><a href="<?php echo base_url();?>home/aboutUs">About Us</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right" > 

                 <?php 
                   if(isset($_SESSION['user_logged'])==False && isset($_SESSION['admin_logged'])==False)
                 { 
                ?>
                <li><a href="<?php echo base_url();?>home/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                <li><a href="<?php echo base_url();?>home/register"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
               <?php   }  ?>

              <?php  

                          if(isset($_SESSION['admin_logged']))
                          { ?>

                             <li class="active"><a href="<?php echo base_url();?>admin/profile"><span class="glyphicon glyphicon-log-in"></span> Account</a></li>
                              <li><a href="<?php echo base_url(); ?>home/logout"><span class="glyphicon glyphicon-user"></span> Logout</a></li>
              <?php   }  ?>

              <?php  

                          if(isset($_SESSION['user_logged']))
                          { ?>

                             <li class="active"><a href="<?php echo base_url();?>user/profile"><span class="glyphicon glyphicon-log-in"></span> Account</a></li>
                             <li><a href="<?php echo base_url(); ?>home/logout"><span class="glyphicon glyphicon-user"></span> Logout</a></li>
              <?php   }  ?>
               
              </ul>

              </div>
            </nav>
</header>

    <section class="slice slice-lg pb-lg-0 bg-gradient-primary" data-separator="rounded-left" data-separator-orientation="bottom" >
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="mb--100 position-relative" style="z-index: 1;">
                            <div class="pt-lg text-center">
                                <h2 class="text-white text-uppercase ls-2 mb-4 text-white font-weight-700" style="color: #8B4513;"> Mu Question Bank</h2><br>
                                
                                <h5 style="color: #2F4F4F;" class="h3 text-white lh-160 font-weight-300">Mu Question Bank is a project for the students of all departments of Metropolitan University, to help them to connect all previous exam's questions in one place. </h5>
                            </div><br><br>

                            <div class="list-group list-group-space mt-5" >

                                <a href="#" class="list-group-item list-group-item-action d-flex flex-column flex-md-row align-items-center px-sm text-center text-md-left box-shadow-2" data-toggle="tooltip" data-original-title="Start with this">
                                    <div class="mr-md-sm mb-4 mb-md-0">
                                      
                                       <img alt="Image placeholder" src="<?php echo base_url(); ?>assets/images/university.png" class="img-fluid">

                                    </div>
                                    <div class="list-group-content" id="divOfMiddle">
                                        <div class="h4" style="color: #2F4F4F;">Are you a student of Metropolitan University?</div>
                                        <p style="font-size:115%;">You're welcome for being a part of muian family! We have tried to create a new way of finding all exam's questions of Metropolitan University for help all members of muian.</p>
                                    </div>
                                </a>


                                <a href="#" class="list-group-item list-group-item-action d-flex flex-column flex-md-row align-items-center px-sm text-center text-md-left box-shadow-2" data-toggle="tooltip" data-original-title="Start with this">
                                    <div class="mr-md-sm mb-4 mb-md-0">
                                      
                                       <img src="<?php echo base_url(); ?>assets/images/education.png" alt="Image placeholder"  class="img-fluid">

                                    </div>
                                    <div class="list-group-content">
                                        <div class="h4" style="color: #2F4F4F;" >Follow question's pattern and prepared for the best outcome.</div>
                                        <p style="font-size:115%;">Do you want to make a good score on the exam? Just see the pattern of questions of particular subjects and prepare yourself for the exam as much as passible then.</p>
                                    </div>
                                </a><br>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="clearfix"></div>

<br><br>


<div class="footer">
 <br>
  <div class="container">All rights reserved © Mu Question Bank 2019.
   <br>
   </div>
</div>
 
</body>
</html>