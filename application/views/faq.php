<!doctype html>
<html lang="en">
  <head>
   <title>FAQ</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
   <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap1.min.css">

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

  <header class="header-transparent" id="header-main">
 
            <nav class="navbar navbar-inverse">
              <div class="container-fluid">
                <div class="navbar-header">
                  <a class="navbar-brand" href="<?php echo base_url();?>home/mu_index">Mu Question Bank</a>
                </div>

                <ul class="nav navbar-nav ">
                  <li ><a href="<?php echo base_url();?>home/mu_index">Home</a></li>
                  <li class="active"><a href="<?php echo base_url();?>home/faq">FAQ</a></li>
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

                               <div class="serv-mine white-box">
    <div class="container">
      <div class="faq-box">
        <div class="faq-item">
          <h2>What is <font class="notranslate">Mu Question Bank</font>?</h2>
          <p>Mu Question Bank is a project for the students of all departments of Metropolitan University, to help them to connect all previous exam's questions in one place.</p>
        </div>
       
        <div class="faq-item">
          
        </div>
        <div class="faq-item">
          <h2>How do I search question?</h2>
          <p> <a href="<?php echo base_url();?>home/login"><span>Login</span></a> to your account for search. Searching is only allowed for registered members.</p>
        </div>
        <div class="faq-item">
          <h2>I don't have an Account. How can I create one?</h2>
          <p>You can create an account if you're a member of muian family. <a href="<?php echo base_url();?>home/register">Sign Up</a> if you want to join.</p>
        </div>
        <div class="faq-item">
          <h2>How can I provide my department's exam questions?</h2>
          <p>Well, you can contact with support via Email for sending it.</p>
        </div>
        <div class="faq-item">
          <h2>Can I send question's PDF only?</h2>
          <p>You can make a PDF of your question or just take pictures of question both sides send to admin via Email.</p>
        </div>
       
      
       
       
        <div class="clearfix"></div>
      </div>
    </div>
    </div>
                               
                        </div>
                    </div>
                </div>
            </div>
        </section>

<br><br>


<div class="footer">
 <br>
  <div class="container">All rights reserved © Mu Question Bank 2019.
   <br>
   </div>
</div>
 
</body>
</html>