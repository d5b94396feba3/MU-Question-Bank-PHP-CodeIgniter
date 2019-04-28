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
   body{
    background: #DCDCDC;
  }
     
    
   </style>

 <title>Admin's account</title>  
 
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
                  <li ><a href="<?php echo base_url();?>home/faq">FAQ</a></li>
                  <li><a href="<?php echo base_url();?>home/contacts">Contacts</a></li>
                  <li><a href="<?php echo base_url();?>home/aboutUs">About Us</a></li>
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

   
<div class="container">
 <center>
  <?php 


          if($this->session->flashdata('success_admin'))
          {

        ?>

        <div class="alert alert-success">
              
              <?php echo $this->session->flashdata('success_admin'); ?>

        </div>

     <?php   
          }
      ?>


      <?php 


          if($this->session->flashdata('error_adLoginFirst'))
          {

        ?>

        <div class="alert alert-error">
              
              <?php echo $this->session->flashdata('error_adLoginFirst'); ?>

        </div>

     <?php   
          }
      ?>
       <?php 


          if($this->session->flashdata('error_admin'))
          {

        ?>

        <div class="alert alert-error">
              
              <?php echo $this->session->flashdata('error_admin'); ?>

        </div>

     <?php   
          }
      ?>


       <?php 


          if($this->session->flashdata('error_msg_download'))
          {

        ?>

        <div class="alert alert-error">
              
              <?php echo $this->session->flashdata('error_msg_download'); ?>

        </div>

     <?php   
          }
      ?>
</center>

     <h3 align="left" style="color: #2F4F4F;">   Hello, <?php echo $_SESSION['username'].'!'; ?> </h3>
     <center><h1 style="color: #8B4513;">MU QUESTIONS BANK</h1></center> 

     


   <a class="btn btn-primary" href="<?php echo base_url();?>home/add"> Add new</a>
   <br> <br>


     <div class="form-group">
      <div class="input-group">
      <span class="input-group-addon ">Search</span> 
        <input type="text" name="search" id="search" placeholder="Enter Keywords For Search" class="form-control"> 
        
      </div>
             
     </div>
    <br> 


    <div id="result">


            
    </div>
    
      
   <br> 
    <table class="table" border="3px">
    <thead>
      <tr>
        <th><a href="<?php echo base_url('home/searchOrderById'); ?>">Question Id</th>
        <th><a href="<?php echo base_url('home/searchOrderByTitle'); ?>">Question Title</th>
        <th><a href="<?php echo base_url('home/searchOrderByCode'); ?>">Question Code</th>
        <th><a href="<?php echo base_url('home/searchOrderByDept'); ?>">Question dept</th>
        <th><a href="<?php echo base_url('home/searchOrderByType'); ?>">Question type</th>
        <th><a href="<?php echo base_url('home/searchOrderByYear'); ?>">Question year</th>
        <th>Question file</th>
        <th>Modify</th>
      </tr>
    </thead>
    <tbody>


      <?php 


        if($questionInfo){
          foreach ($questionInfo as $qtn) {

      ?>


      <tr>
        <td><?php echo $qtn->q_id; ?></td>
        <td><?php echo $qtn->q_title; ?></td>
        <td><?php echo $qtn->q_code; ?></td>
        <td><?php echo $qtn->q_dept; ?></td>
        <td><?php echo $qtn->q_type; ?></td>
        <td><?php echo $qtn->q_year; ?></td>
        <td><a class="btn btn-info" href="<?php echo base_url('home/download/'.$qtn->q_id); ?>"> Download</a></td>
        <td> <a class="btn btn-info" href="<?php echo base_url('home/edit/'.$qtn->q_id); ?>"> Edit</a>
             <a class="btn btn-danger" href="<?php echo base_url('home/delete/'.$qtn->q_id); ?>" onclick="return confirm('Do you want to delete this record?');"> Delete</a>
        </td>
      </tr>
      <?php 

    }
      }

      ?>

    </tbody>
  </table>

</div><br><br>
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
        }


      });
     

    });



 </script>
 <div class="footer">
 <br>
  <div class="container">All rights reserved © Mu 2019.
   <br>
   </div>
</div>
</body>
</html>