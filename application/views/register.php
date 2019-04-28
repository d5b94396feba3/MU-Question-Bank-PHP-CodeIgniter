<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
   <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap1.min.css">


    <style type="text/css">

      body {
     background-color: lightblue;
    }

     #divMain {
      padding-left: 345px;
      padding-top: 70px;
      padding-bottom: 70px;
     
    }
    #la_id1{
      padding-left: 7px;
      padding-top: 8px;
     
    }
    #la_id2{
      padding-left: 7px;
      padding-top: 8px;
    }
    #la_id3{
      padding-left: 7px;
      padding-top: 2px;
    }
    #la_id4{
      padding-left: 2px;
      padding-top: 8px;

      
    }
    #la_id5{
      padding-left: 7px;
      padding-top: 3px;
    }
    #la_id6{
      padding-left: 7px;
      padding-top: 8px;
    }
    #la_id7{
      padding-left: 7px;
      padding-top: 8px;
    }
    
    </style>



    <title>Register account</title>
  </head>
  <body>
    
    <br><br>
    

     
    <main>




 

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


      <?php  echo validation_errors('<div class="alert alert-danger">','</div>') ?>


       <div class="text-center mb-5">

                        <div class="text-center mb-5">
                            <h6 class="h3">Create account</h6>
                            <p class="text-muted mb-0">It's simple and easy!</p>
                        </div>
       </div>

      <form action="<?php echo base_url();?>home/register" method="POST">



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
                                </div><br>
      </div><br>



    
       <div class="form-group">
                                <label class="col-md-2" id="la_id3">Confirm Password</label>

                                <div class="col-md-10">
                                      <input type="password" class="form-control" name="password2" id="password2" autocomplete="off" placeholder="********">
                                </div><br>
      </div><br>

     <div class="form-group">
                                <label class="col-md-2" id="la_id4">Department</label>

                                <div class="col-md-10">
                                     <input type="text" class="form-control" name="dept" id="dept" placeholder="Ex: CSE">
                                </div><br>
      </div><br>



      <div class="form-group">
                                <label class="col-md-2" id="la_id5">Batch Id</label>

                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="batch_id" id="batch_id" placeholder="Ex: 161-115-061">
                                </div><br>
      </div><br>

      <div class="form-group">
                                <label class="col-md-2" id="la_id6">Email address</label>

                                <div class="col-md-10">
                                     <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
                                </div><br>
      </div><br>

       <div class="form-group">
                                <label class="col-md-2" id="la_id7">Phone</label>

                                <div class="col-md-10">
                                     <input type="text" class="form-control" name="phone" id="phone" placeholder="Ex: 017XXXXXXXX">
                                </div><br>
      </div><br>



          <div class="form-group">
            
                         <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" name="checkregister" id="checkregister" type="checkbox">
                                    <label class="custom-control-label" for="customCheckRegister">
                                        <span>I agree to the Terms and Conditions</a> and Privacy Policy</a>.</span>
                          </div>
         </div>


     <div class="text-center mb-3">

                                  <button type="submit" name="btn_register" class="btn btn-block btn-primary">Create account</button>
    </div>

   <div class="text-center">
                                <span class="small d-sm-block d-md-inline">Already registered?</span>
                                <a href="<?php echo base_url();?>home/login" class="small font-weight-bold">Sign in</a>
     </div>


      </form>

      </div>
       </div>
     </div>
   </div><br><br>

 
</main>

   
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
 <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>


  </body>
</html>