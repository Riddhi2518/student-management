<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
     
    class Users extends CI_Controller {
     
    	function __construct(){
    		parent::__construct();
    		$this->load->helper('url');
    		$this->load->model('users_model');
    	}
     
    	public function index(){
    		$data['users'] = $this->users_model->getAllUsers();
    		$this->load->view('user_list.php', $data);
    	}
     
    	public function addnew(){
    		$this->load->view('addform.php');
    	}
     
    	public function insert(){
        $user['student_id'] = $this->input->post('student_id');
            $user['First_name'] = $this->input->post('First_name');
            $user['Last_name'] = $this->input->post('Last_name');
            $user['registration_date'] = $this->input->post('registration_date');
            $user['gender'] = $this->input->post('gender');
            $user['cource'] = $this->input->post('cource');
            $user['email'] = $this->input->post('email');
            
     
    		$query = $this->users_model->insertuser($user);
     
    		if($query){
    			header('location:'.base_url().$this->index());
    		}
     
    	}
     
    	public function edit($id){
    		$data['user'] = $this->users_model->getUser($id);
    		$this->load->view('editform', $data);
    	}
     
    	public function update($id){
    		$user['student_id'] = $this->input->post('student_id');
            $user['First_name'] = $this->input->post('First_name');
            $user['Last_name'] = $this->input->post('Last_name');
            $user['registration_date'] = $this->input->post('registration_date');
            $user['gender'] = $this->input->post('gender');
            $user['cource'] = $this->input->post('cource');
            $user['email'] = $this->input->post('email');
    		

     
    		$query = $this->users_model->updateuser($user, $id);
     
    		if($query){
    			header('location:'.base_url().$this->index());
    		}
    	}
     
    	public function delete($id){
    		$query = $this->users_model->deleteuser($id);
     
    		if($query){
    			header('location:'.base_url().$this->index());
    		}
    	}
    }
     
     
    ?>