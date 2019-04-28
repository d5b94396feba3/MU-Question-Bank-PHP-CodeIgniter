<!DOCTYPE html>
<html>
<head>
	<title>View_home</title>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
	 <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap1.min.css"> 
 
</head>
<body>
	<br><br>

   
<div class="container">
		 
     <center><h1>Mu Questions Bank</h1></center> 

     <?php 


          if($this->session->flashdata('success_msg'))
          {

        ?>

        <div class="alert alert-success">
              
              <?php echo $this->session->flashdata('success_msg'); ?>

        </div>

     <?php   
          }
      ?>


      <?php 


          if($this->session->flashdata('error_msg'))
          {

        ?>

        <div class="alert alert-error">
              
              <?php echo $this->session->flashdata('error_msg'); ?>

        </div>

     <?php   
          }
      ?>


       <?php 


          if($this->session->flashdata('success_msg'))
          {

        ?>

        <div class="alert alert-error">
              
              <?php echo $this->session->flashdata('error_msg_download'); ?>

        </div>

     <?php   
          }
      ?>



	 <a class="btn btn-primary" href="<?php echo base_url();?>home/add"> Add new</a>
	 <br> <br>


     <div class="form-group">
      <div class="input-group">
      <span class="input-group-addon">Search</span> 
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
        <th>Question Id</th>
        <th><a href="<?php echo base_url('home/searchOrderByElements'); ?>">Question Title</th>
        <th>Question Code</th>
        <th>Question dept</th>
        <th>Question type</th>
        <th>Question year</th>
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

</div>
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
</body>
</html>