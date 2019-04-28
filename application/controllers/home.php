<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {


    function __construct()
  	{
  		parent::__construct();
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
		$this->load->view('admin_profile',$data);
	    //$this->load->view('profile',$data);


		//
		
	}

	public function searchOrderById()
	{
		$data['questionInfo']=$this->qmodel->searchOrderById();
		//print_r($data);
		//$this->load->view('search_view/title_view_home',$data);
		$this->load->view('admin_profile',$data);
		//redirect(base_url('home/index'));
		//
		
	}

	public function searchOrderByTitle()
	{
		$data['questionInfo']=$this->qmodel->searchOrderByTitle();
		//print_r($data);
		//$this->load->view('search_view/title_view_home',$data);
		$this->load->view('admin_profile',$data);
		//redirect(base_url('home/index'));
		//
		
	}
	public function searchOrderByCode()
	{
		$data['questionInfo']=$this->qmodel->searchOrderByCode();
		//print_r($data);
		//$this->load->view('search_view/title_view_home',$data);
		$this->load->view('admin_profile',$data);
		//redirect(base_url('home/index'));
		//
		
	}
	public function searchOrderByDept()
	{
		$data['questionInfo']=$this->qmodel->searchOrderByDept();
		//print_r($data);
		//$this->load->view('search_view/title_view_home',$data);
		$this->load->view('admin_profile',$data);
		//redirect(base_url('home/index'));
		//
		
	}
	public function searchOrderByType()
	{
		$data['questionInfo']=$this->qmodel->searchOrderByType();
		//print_r($data);
		//$this->load->view('search_view/title_view_home',$data);
		$this->load->view('admin_profile',$data);
		//redirect(base_url('home/index'));
		//
		
	}
	public function searchOrderByYear()
	{
		$data['questionInfo']=$this->qmodel->searchOrderByYear();
		//print_r($data);
		//$this->load->view('search_view/title_view_home',$data);
		$this->load->view('admin_profile',$data);
		//redirect(base_url('home/index'));
		//
		
	}


	public function searchOrderByDesYear()
	{
		$data['questionInfo']=$this->qmodel->searchOrderByDesYear();
		//print_r($data);
		//$this->load->view('search_view/title_view_home',$data);
		$this->load->view('profile',$data);
		//redirect(base_url('home/index'));
		//
		
	}
	public function searchOrderByAscYear()
	{
		$data['questionInfo']=$this->qmodel->searchOrderByAscYear();
		//print_r($data);
		//$this->load->view('search_view/title_view_home',$data);
		$this->load->view('profile',$data);
		//redirect(base_url('home/index'));
		//
		
	}
	public function searchOrderByFinal()
	{
		$data['questionInfo']=$this->qmodel->searchOrderByFinal();
		//print_r($data);
		//$this->load->view('search_view/title_view_home',$data);
		$this->load->view('profile',$data);
		//redirect(base_url('home/index'));
		//
		
	}
	public function searchOrderByMidterm()
	{
		$data['questionInfo']=$this->qmodel->searchOrderByMidterm();
		//print_r($data);
		//$this->load->view('search_view/title_view_home',$data);
		$this->load->view('profile',$data);
		//redirect(base_url('home/index'));
		//
		
	}
	public function searchOrderByClassTest()
	{
		$data['questionInfo']=$this->qmodel->searchOrderByClassTest();
		//print_r($data);
		//$this->load->view('search_view/title_view_home',$data);
		$this->load->view('profile',$data);
		//redirect(base_url('home/index'));
		//
		
	}


	public function add()
	{
		
		$this->load->view('addQuestion');
		
	}
	public function faq()
	{
		
		$this->load->view('faq');
		
	}
	public function contacts()
	{
		
		$this->load->view('contacts');
		
	}
	public function aboutUs()
	{
		
		$this->load->view('aboutUs');
		
	}

	public function submit()
	{
		
		$result=$this->qmodel->submit();

		if($result){
			
			$this->session->set_flashdata("success_msg"," Record added successfully");

		}else{

			$this->session->set_flashdata("error_msg"," Fail to add record");
		}
		
		redirect(base_url('admin/profile'));
	}

	public function edit($id)
	{

		$data['editQn']=$this->qmodel->getQuestionById($id);
		
		$this->load->view('editQuestion',$data);
		
	}

	public function update()
	{

		$result=$this->qmodel->update();


		if($result){
			
			$this->session->set_flashdata("success_msg"," Record updated successfully ");

		}else{

			$this->session->set_flashdata("error_msg"," Fail to update record");
		}

		redirect(base_url('admin/profile'));
	}
	public function delete($id)
	{

		$result=$this->qmodel->delete($id);

		if($result){
			
			$this->session->set_flashdata("success_msg"," Record deleted successfully");

		}else{

			$this->session->set_flashdata("error_msg"," Fail to delete record");
		}

		redirect(base_url('admin/profile'));
	}

	
	public function searchData()
	{

			$output='';
			$query='';

			if($this->input->post('query'))
			{
				$query=$this->input->post('query');

			}
		    $data=$this->qmodel->search($query);

		    $output.='
			
			<div class="table-responsive">

			<table class="table table-bordered table-striped">

			  <tr>
				
				<th>Title</th>
		        <th>Code</th>
		        <th>Dept</th>
		        <th>Type</th>
		        <th>Year</th>
		        <th>File</th>
		        <th>File download </th>

			  </tr>

			

			</div>

		    ';

		if($data->num_rows()>0){

			foreach ($data->result() as $row) {


				$output .= '
				
				 <tr>
				
				<td>'.$row->q_title.'</td>
		        <td>'.$row->q_code.'</td>
		        <td>'.$row->q_dept.'</td>
		        <td>'.$row->q_type.'</td>
		        <td>'.$row->q_year.'</td>
		        <td>'.$row->q_file.'</td>
		        <td><a class="btn btn-info" href='.base_url('home/download/'.$row->q_id).'> Download</a></td>
		        

			   </tr>



				';
				
			}
		}
		else
		{
			$output .='

			<tr colspan ="7">
				
				<td>
					No data found
				</td>

			</tr>

			';
		}

       $output .= '</table>';

       echo $output;
	}



	public function download($id){
        if(!empty($id)){
           
            $this->load->helper('download');
            
            
            $fileInfo = $this->qmodel->getDownloadRows($id);
            
           
            $file = 'uploads/files/'.$fileInfo->q_file;

            if(!empty($file))
            {
             force_download($file, NULL);
            } 
            else{

            	$this->session->set_flashdata("error_msg_download"," Fail to download record");

            }         
            
            
        }
    }

     public function mu_index()
    {
        $this->load->view('mu_index');
    }


    public function login()
  	{

  		$this->form_validation->set_rules('username','Username','required');
  		$this->form_validation->set_rules('password','Password','required|min_length[5]');
      $this->form_validation->set_rules('checkregister','checkregister','required');

  		if($this->form_validation->run()== True)
  		{

  			//$username=$_POST['username'];
  			//$password=md5($_POST['password']);

  			$user=$this->qmodel->login();

  			//$username=$this->input->post('username');
  			//$password=$this->input->post('password');
         /*
  			$this->db->select('*');
  			$this->db->from('admin_info');
  			$this->db->where(array('ad_user_name'=>$username,'ad_user_pass'=>$password));

  			$query=$this->db->get();

  			$user=$query->row();
        */
  			if($user){

  				$this->session->set_flashdata("success","You are logged in");



  				$_SESSION['user_logged']=True;
  				$_SESSION['username']=$user->user_name;


  			    redirect("user/profile","refresh");
  				//redirect(base_url('home/profile'));


  			}else{

  				$this->session->set_flashdata("error","No such account exists in database");

  				//redirect("auth/login","refresh");
  			}

  		}

  		$this->load->view('login');
  	}

  	// public function admin_login()
   //  {

   //    $this->form_validation->set_rules('username','Username','required');
   //    $this->form_validation->set_rules('password','Password','required|min_length[5]');
   //    $this->form_validation->set_rules('checkregister','checkregister','required');

   //    if($this->form_validation->run()== True)
   //    {

   //      //$username=$_POST['username'];
   //      //$password=md5($_POST['password']);

   //      $user=$this->qmodel->admin_login();

   //      //$username=$this->input->post('username');
   //      //$password=$this->input->post('password');
         
   //      $this->db->select('*');
   //      $this->db->from('admin_info');
   //      $this->db->where(array('ad_user_name'=>$username,'ad_user_pass'=>$password));

   //      $query=$this->db->get();

   //      $user=$query->row();
        
   //      if($user){

   //        $this->session->set_flashdata("success","You are logged in");



   //        $_SESSION['user_logged']=True;
   //        $_SESSION['username']=$user->ad_user_name;

   //          redirect("admin/profile","refresh");
   //        //redirect(base_url('home/profile'));


   //      }else{

   //        $this->session->set_flashdata("error","No such account exists in database");

   //        //redirect("auth/login","refresh");
   //      }

   //    }

   //    $this->load->view('admin_login');
   //  }

  	public function logout()
  	{
  		unset($_SESSION);
  		session_destroy();
  		redirect("home/mu_index","refresh");
  	}


  	public function register()
  	{

  		if(isset($_POST['btn_register'])){
  			$this->form_validation->set_rules('username','Username','required');
  			$this->form_validation->set_rules('email','Email','required');
  			$this->form_validation->set_rules('password','Password','required|min_length[5]');
  			$this->form_validation->set_rules('password','Confirm Password','required|min_length[5]|matches[password]');
  			$this->form_validation->set_rules('phone','Phone','required|min_length[11]');

        $this->form_validation->set_rules('checkregister','Check','required');

       
  		}

  		if($this->form_validation->run()== True)
  		{ 
  			//echo "form validated";

  			// $data=array(

  			// 	'user_name'=>$_POST['username'],
  			// 	'uesr_email'=>$_POST['email'],
  			// 	'user_pass'=>md5($_POST['password']),
  			// 	'created_date'=>date('Y-m-d'),
  			// 	'phone'=>$_POST['phone'],
  			// 	'batch_id'=>$_POST['batch_id'],
  			// 	'dept'=>$_POST['dept'],

  			// );

  			// $this->db->insert('user_info',$data);

  	    $result=$this->qmodel->register();

		if($result){
			
			$this->session->set_flashdata("success","Your account has been registered.You can login now.");
            redirect("home/login","refresh");
		}else{

			$this->session->set_flashdata("error_msg"," Fail to register new account");
		}
		
		

  			//$this->session->set_flashdata("success","Your account has been registered.You can login now.");
  			///redirect("auth/register","refresh");



  		}

  		$this->load->view('register');
  	}


	
}
