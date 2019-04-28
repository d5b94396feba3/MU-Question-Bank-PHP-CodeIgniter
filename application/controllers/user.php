<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

  	 public function __construct()
  	 {



  	 	parent:: __construct();

  	 	if(isset($_SESSION['user_logged'])==False)
  	 	{


  			$this->session->set_flashdata("error","Please login first to view this page!!");
  	 		redirect("home/login","refresh");
  	 	}
      
     
      $this->load->model('question_model','qmodel');
  	 }


     public function index()
  {

    if(isset($_SESSION['user_logged'])==False)
      {


        $this->session->set_flashdata("error","Please login first to view this page!!");
        redirect("home/login","refresh");
      }
    $data['questionInfo']=$this->qmodel->getQuestion();
    //print_r($data);
    //$this->load->view('view_home',$data);
    $this->load->view('profile',$data);


    //
    
  }
  	

  		public function profile()
  		{



  		if(isset($_SESSION['user_logged'])==False)
  	 	{

  			$this->session->set_flashdata("error","Please login first to view this page!!");
  	 		redirect("home/login","refresh");
  	 	}


       $data['questionInfo']=$this->qmodel->getQuestion();
    //print_r($data);
    //$this->load->view('view_home',$data);
       $this->load->view('profile',$data);
  		}





 }


?>