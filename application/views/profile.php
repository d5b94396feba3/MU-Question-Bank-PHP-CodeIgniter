<!doctype html>
<html lang="en">
  <head>
   
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
  #search {
    padding-left: 10px;
    padding-right: 10px;
  }
  #inputDiv{
    padding-left: 25px;
    padding-right: 25px;
    padding-top: 25px;
  }
  #result{
    padding-left: 25px;
    padding-right: 25px;
    padding-top: 25px;
  }
  #table_text{
    color: white;
  }

  body{
    background: #DCDCDC;
  }
     
    
   </style>

 <title>User's account</title>  
 
</head>
<body>

  <header class="header-transparent" id="header-main">
 
            <nav class="navbar navbar-inverse">
              <div class="container-fluid">
                <div class="navbar-header">
                  <a class="navbar-brand" href="<?php echo base_url();?>home/mu_index">Mu Question Bank</a>
                  
                  <!-- 
<a class="navbar-brand" id="logoImg" href="#"><img src="<?php echo base_url(); ?>assets/images/mqb.png" alt="logo" style="width:80px;"></a>
                  -->
                </div>

                <ul class="nav navbar-nav ">
                  <li ><a href="<?php echo base_url();?>home/mu_index">Home</a></li>
                  <li ><a href="<?php echo base_url();?>home/faq">FAQ</a></li>
                  <li ><a href="<?php echo base_url();?>home/contacts">Contacts</a></li>
                  <li ><a href="<?php echo base_url();?>home/aboutUs">About Us</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right" > 

               <?php  

                          if(isset($_SESSION['admin_logged']))
                          { ?>

                             <li class="active"><a href="<?php echo base_url();?>admin/profile"><span class="glyphicon glyphicon-log-in"></span> Account</a></li>

              <?php   }  ?>

              <?php  

                          if(isset($_SESSION['user_logged']))
                          { ?>

                             <li class="active"><a href="<?php echo base_url();?>user/profile"><span class="glyphicon glyphicon-log-in"></span> Account</a></li>

              <?php   }  ?>
                <li><a href="<?php echo base_url(); ?>home/logout"><span class="glyphicon glyphicon-user"></span> Logout</a></li>
               
              </ul>

              </div>
            </nav>
</header>

    <section class="slice slice-lg pb-lg-0 bg-gradient-primary" data-separator="rounded-left" data-separator-orientation="bottom">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="mb--100 position-relative" style="z-index: 1;">
                            <div class="pt-lg text-center">
                          <?php  

                          if(isset($_SESSION['success']))
                          { ?>

                            <div class="alert alert-success">
                              
                              <?php echo $_SESSION['success']; ?>

                            </div>

                       <?php   }  ?>

                          <h3 align="left" style="color: #6E1919;">   Hello, <?php echo $_SESSION['username'].'!'; ?> </h3>
                                <h2 class="text-white text-uppercase ls-2 mb-4 text-white font-weight-700" style="color: #2F4F4F;">
                                 Mu Question Bank</h2>
                              
                              
                            </div><br>
                             <div class="form-group" id="inputDiv">
                            <div class="input-group">
                            <span class="input-group-addon">Search</span> 
                              <input type="text" name="search" id="search" placeholder="Enter Keywords For Search" class="form-control"> 

                            </div>
                             <div class="input-group">
                            <span class="input-group-addon">Sort By</span>
                             
                              <select name="type" id="foo" class="form-control" onChange="window.location.href=this.value">
                              <option value="">Choose an option</option>
                              <optgroup label="Question's Type">
                                 <option value="<?php echo base_url();?>home/searchOrderByMidterm">Midterm</option>
                                    <option value="<?php echo base_url();?>home/searchOrderByClassTest">Class Test</option>
                              
                                    <option value="<?php echo base_url();?>home/searchOrderByFinal" ><a href="<?php echo base_url();?>home/searchOrderByFinal">Final</option>
                            </optgroup>

                               <optgroup label="Question's Year">
                              <option value="<?php echo base_url();?>home/searchOrderByAscYear">Ascending Year</option>
                              <option value="<?php echo base_url();?>home/searchOrderByDesYear">Descending Year</option>
                              </optgroup>

                            </select>

                            </div>
                           </div>

                        </div>
                    </div>
                </div>

                <div id="result">


                  <table class="table" border="3px" style="background-color: #74493F;">
                  <thead>
                    <tr id="table_text">
                     
                     <!--  <th><a href="<?php echo base_url('home/searchOrderByTitle'); ?>">Title</th>
                      <th><a href="<?php echo base_url('home/searchOrderByCode'); ?>">Code</th>
                      <th><a href="<?php echo base_url('home/searchOrderByDept'); ?>">Dept</th>
                      <th><a href="<?php echo base_url('home/searchOrderByType'); ?>">Type</th>
                      <th><a href="<?php echo base_url('home/searchOrderByYear'); ?>">Year</th>
                      <th>File download</th> -->

                      <th >Title</th>
                      <th >Code</th>
                      <th >Dept</th>
                      <th >Type</th>
                      <th >Year</th>
                      <th >File download</th>
                     
                    </tr>
                    </thead>
                    <tbody>


                      <?php 


                        if($questionInfo){
                          foreach ($questionInfo as $qtn) {

                      ?>


                      <tr id="table_text">
                        
                        <td><?php echo $qtn->q_title; ?></td>
                        <td><?php echo $qtn->q_code; ?></td>
                        <td><?php echo $qtn->q_dept; ?></td>
                        <td><?php echo $qtn->q_type; ?></td>
                        <td><?php echo $qtn->q_year; ?></td>
                        <td><a class="btn btn-info" href="<?php echo base_url('home/download/'.$qtn->q_id); ?>"> Download</a></td>
                       
                      </tr>
                      <?php 

                    }
                      }

                      ?>

                    </tbody>
                  </table>

                 </div>

            </div>
        </section>

<br><br>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript">
   
    $(document).ready(function(){
  
  //  load_data();

    function load_data(query)
  {         
        $.ajax({
                
                url:"<?php echo base_url();?>home/searchData",
                method:"POST",
                data:{query:query},
                success: function(data)
                {
                    $('#result').html(data);
                }

               })
 }


      $('#search').keyup(function(){

        var search=$(this).val();

        if(search!='')
        {
            load_data(search);
        }
        else
        {
            // load_data();
             $('#result').html("");
             //redirect(base_url('user/profile'));
        }


      });
     

    });

     document.getElementById("foo").onchange = function() {
        if (this.selectedIndex!==0) {
            window.location.href = this.value;
        }        
    };


 </script>

<div class="footer">
 <br>
  <div class="container">All rights reserved © Mu Question Bank 2019.

   <br>
   </div>
</div>

</body>
</html>