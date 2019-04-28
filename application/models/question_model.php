<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class question_model extends CI_Model {

   
	public function getQuestion()
	{
		$query=$this->db->get('question_info');
		//$query=$this->db->order_by('q_id','DESC');
		if($query->num_rows() > 0)
		{
			$this->db->order_by('q_id','DESC');
			return $query->result();
		}else{

			return false;

		}
		
	}


	public function searchOrderByTitle()
	{


		$this->db->select("*");
		$this->db->from("question_info");

		$this->db->order_by('q_title','ASC');
		$query=$this->db->get();
		return $query->result();

		//return $this->db->get();

	}
	public function searchOrderByCode()
	{


		$this->db->select("*");
		$this->db->from("question_info");

		$this->db->order_by('q_code','ASC');
		$query=$this->db->get();
		return $query->result();

		//return $this->db->get();

	}
	public function searchOrderByDept()
	{


		$this->db->select("*");
		$this->db->from("question_info");

		$this->db->order_by('q_dept','ASC');
		$query=$this->db->get();
		return $query->result();

		//return $this->db->get();

	}
	public function searchOrderByType()
	{


		$this->db->select("*");
		$this->db->from("question_info");

		$this->db->order_by('q_type','ASC');
		$query=$this->db->get();
		return $query->result();

		//return $this->db->get();

	}
	public function searchOrderByYear()
	{


		$this->db->select("*");
		$this->db->from("question_info");

		$this->db->order_by('q_year','ASC');
		$query=$this->db->get();
		return $query->result();

		//return $this->db->get();

	}
	
	public function searchOrderById()
	{


		$this->db->select("*");
		$this->db->from("question_info");

		$this->db->order_by('q_id','ASC');
		$query=$this->db->get();
		return $query->result();

		//return $this->db->get();

	}
	public function searchOrderByClassTest()
	{


		$this->db->select("*");
		$this->db->from("question_info");
		$this->db->where('q_type','Class Test');
		//$this->db->order_by('q_title','ASC');
		$query=$this->db->get();
		return $query->result();

		//return $this->db->get();

	}

	public function searchOrderByMidterm()
	{


		$this->db->select("*");
		$this->db->from("question_info");
		$this->db->where('q_type','Midterm');

		//$this->db->order_by('q_title','ASC');
		$query=$this->db->get();
		return $query->result();

		//return $this->db->get();

	}

	public function searchOrderByFinal()
	{


		$this->db->select("*");
		$this->db->from("question_info");
        $this->db->where('q_type','Final');
		//$this->db->order_by('q_title','ASC');
		$query=$this->db->get();
		return $query->result();

		//return $this->db->get();

	}

	public function searchOrderByAscYear()
	{


		$this->db->select("*");
		$this->db->from("question_info");

		$this->db->order_by('q_year','ASC');
		$query=$this->db->get();
		return $query->result();

		//return $this->db->get();

	}
	public function searchOrderByDesYear()
	{


		$this->db->select("*");
		$this->db->from("question_info");

		$this->db->order_by('q_year','DESC');
		$query=$this->db->get();
		return $query->result();

		//return $this->db->get();

	}

	public function submit()
	{

      
        // $f_name=$_FILES[$this->input->post('file')][''];


        


		$field=array('q_title'=>$this->input->post('title'),
					 'q_code'=>$this->input->post('code'),
					 'q_dept'=>$this->input->post('dept'),
					 'q_type'=>$this->input->post('type'),
					 'q_year'=>$this->input->post('year'),
					 'q_file'=>$this->input->post('file')
					);


		$this->db->insert('question_info',$field);

		if($this->db->affected_rows()>0){

			return true;
		}
		else
		{
			return false;
		}
	}

	public function getQuestionById($id)
	{
		$this->db->where('q_id',$id);
		$query=$this->db->get('question_info');
		if($query->num_rows() > 0)
		{
			//$this->db->order_by('q_id','DESC');
			return $query->row();
		}else{

			return false;

		}
		
	}
	

	public function update()
	{


		$id=$this->input->post('text_hidden');
		

		$field=array('q_title'=>$this->input->post('title'),
					 'q_code'=>$this->input->post('code'),
					 'q_dept'=>$this->input->post('dept'),
					 'q_type'=>$this->input->post('type'),
					 'q_year'=>$this->input->post('year'),
					 'q_file'=>$this->input->post('file')
					);

		
		$this->db->where('q_id',$id);
		$this->db->update('question_info',$field);

		if($this->db->affected_rows()>0){

			return true;
		}
		else
		{
			return false;
		}
	}

	public function delete($id)
	{

		$this->db->where('q_id',$id);
		$this->db->delete('question_info');

		if($this->db->affected_rows()>0){

			return true;
		}
		else
		{
			return false;
		}
	}

	public function search($query)
	{


		$this->db->select("*");
		$this->db->from("question_info");


		if($query!='')
		{
			$this->db->like('q_title',$query);
			$this->db->or_like('q_code',$query);
			$this->db->or_like('q_dept',$query);
			$this->db->or_like('q_type',$query);
			$this->db->or_like('q_year',$query);
			$this->db->or_like('q_file',$query);
		}

		$this->db->order_by('q_id','DESC');

		return $this->db->get();

	}


	 function getDownloadRows($id){
       

        $this->db->where('q_id',$id);
		$query=$this->db->get('question_info');
		if($query->num_rows() > 0)
		{
			return $query->row();
		}else{

			return false;

		}


    }

    public function login()
    {

    		$username=$this->input->post('username');
  			$password=md5($this->input->post('password'));


  			$this->db->select('*');
  			$this->db->from('user_info');
  			$this->db->where(array('user_name'=>$username,'user_pass'=>$password));

  			$query=$this->db->get();

  			$user=$query->row();

  			if($user=$query->row()){
  				
			return $user=$query->row();

		    }else{

			return false;
		   }


    }
     public function admin_login()
    {

    		$username=$this->input->post('username');
  			$password=md5($this->input->post('password'));


  			$this->db->select('*');
  			$this->db->from('admin_info');
  			$this->db->where(array('ad_user_name'=>$username,'ad_user_pass'=>$password));

  			$query=$this->db->get();

  			$user=$query->row();

  			if($user=$query->row()){
  				
			return $user=$query->row();

		    }else{

			return false;
		   }


    }

   public function register()
    {

    	$data=array(

  				'user_name'=>$_POST['username'],
  				'uesr_email'=>$_POST['email'],
  				'user_pass'=>md5($_POST['password']),
  				'created_date'=>date('Y-m-d'),
  				'phone'=>$_POST['phone'],
  				'batch_id'=>$_POST['batch_id'],
  				'dept'=>$_POST['dept'],

  			);

  		$this->db->insert('user_info',$data);

		if($this->db->affected_rows()>0){

			return true;
		}
		else
		{
			return false;
		}


    	
    }

}
