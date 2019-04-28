<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
   <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap1.min.css">
  
   

    <title>Login to account</title>

    <style type="text/css">
      body {
     background-color: lightblue;
    }
    #divMain {
      padding-left: 350px;
      padding-top: 120px;
      padding-right: 10px;
    }
    #la_id1{
      padding-left: 10px;
      padding-top: 8px;
    }
    #la_id2{
      padding-left: 10px;
      padding-top: 8px;
    }
    </style>


  </head>
  <body>

    <br>
    
<center>


        <div class="container h-100vh d-flex align-items-center" id="divMain">
            <div class="col">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6">
                      <span class="clearfix"></span>

    <?php  

          if(isset($_SESSION['success']))
          { ?>

            <div class="alert alert-success">
              
              <?php echo $_SESSION['success']; ?>

            </div>

       <?php   }  ?>

       <?php  

          if(isset($_SESSION['error']))
          { ?>

            <div class="alert alert-danger">
              
              <?php echo $_SESSION['error']; ?>

            </div>

       <?php   }  ?>


      <?php  echo validation_errors('<div class="alert alert-danger">','</div>') ?>


   
   <div class="text-center mb-5">

                            <h6 class="h3">Admin Login</h6>
                            <p class="text-muted mb-0">It's simple and easy!</p>
   </div>

   

   <form action="<?php echo base_url();?>admin/admin_login" method="post">


      <div class="form-group">
                                <label class="col-md-2" id="la_id1">Username</label>

                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                                </div><br>
      </div><br>



      <div class="form-group">
                                <label class="col-md-2" id="la_id2">Password</label>

                                <div class="col-md-10">
                                    <input type="password" class="form-control" name="password" id="password" autocomplete="off" placeholder="********">
                                </div>
      </div>

         <div class="form-group">
            <br><br>
                         <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" name="checkregister" id="checkregister" type="checkbox">
                                    <label class="custom-control-label" for="customCheckRegister">
                                        <span>I agree to the Terms and Conditions and Privacy Policy.</span>
                          </div>
         </div>


   <div class="text-center mb-3">

                                <button  type="submit" name="btn_login" class="btn btn-block btn-primary">Sign in</button>
    </div>

   <div class="text-center">
                                <small>Not registered?</small>
                                <a href="<?php echo base_url();?>home/register" class="small font-weight-bold">Create account</a>
     </div>

  </form>

     </div>
       </div>
     </div>
   </div>

</center>


   
 <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
 <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

  </body>
</html>