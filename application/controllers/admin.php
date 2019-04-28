<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

  	 public function __construct()
  	 {

  	 	parent:: __construct();

   
      $this->load->model('question_model','qmodel');
     

  	 	// if(isset($_SESSION['admin_logged'])==False)
  	 	// {


  			// $this->session->set_flashdata("error","Please login first to view this page!!");
  	  // //		redirect("home/login","refresh");
  	 	// }

    //   $data['questionInfo']=$this->qmodel->getQuestion();
    // //print_r($data);
    // $this->load->view('admin_profile',$data);



  	 }


   public function index()
  {


    if(isset($_SESSION['admin_logged'])==False)
      {


        $this->session->set_flashdata("error","Please login first to view this page!!");
      //    redirect("home/login","refresh");
      }

    $data['questionInfo']=$this->qmodel->getQuestion();
    //print_r($data);
    $this->load->view('admin_profile',$data);

    //

      
    
  }



     public function admin_login()
    {

      $this->form_validation->set_rules('username','Username','required');
      $this->form_validation->set_rules('password','Password','required|min_length[5]');
      $this->form_validation->set_rules('checkregister','checkregister','required');

      if($this->form_validation->run()== True)
      {

        //$username=$_POST['username'];
        //$password=md5($_POST['password']);

        $user=$this->qmodel->admin_login();

        //$username=$this->input->post('username');
        //$password=$this->input->post('password');
         
        // $this->db->select('*');
        // $this->db->from('admin_info');
        // $this->db->where(array('ad_user_name'=>$username,'ad_user_pass'=>$password));

        // $query=$this->db->get();

        // $user=$query->row();
        
        if($user){

          $this->session->set_flashdata("success_admin","You are logged in");
          


          $_SESSION['admin_logged']=True;
          $_SESSION['username']=$user->ad_user_name;

           redirect("admin/profile","refresh");

          //redirect(base_url('home/profile'));


        }else{

          $this->session->set_flashdata("error_admin","No such account exists in database");

          //redirect("auth/login","refresh");
        }

      }

      $this->load->view('admin_login');
    }
  	

  		public function profile()
  		{



  		if(isset($_SESSION['admin_logged'])==False)
  	 	{

  			$this->session->set_flashdata("error_adLoginFirst","Please login first to view this page!!");
  	 		redirect("admin/admin_login","refresh");
  	 	}
       //index();

      $data['questionInfo']=$this->qmodel->getQuestion();
    //print_r($data);
      $this->load->view('admin_profile',$data);


  			//$this->load->view('admin_profile');
  		}





 }


?>