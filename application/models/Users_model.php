<?php
    	class Users_model extends CI_Model {
    		function __construct(){
    			parent::__construct();
    			$this->load->database();
    		}
     
    		public function getAllUsers(){
    			$query = $this->db->get('student');
    			return $query->result(); 
    		}
     
    		public function insertuser($user){
    			return $this->db->insert('student', $user);
    		}
     
    		public function getUser($id){
    			$query = $this->db->get_where('student',array('id'=>$id));
    			return $query->row_array();
    		}
     
    		public function updateuser($user, $id){
    			$this->db->where('student.id', $id);
    			return $this->db->update('student', $user);
    		}
     
    		public function deleteuser($id){
    			$this->db->where('student.id', $id);
    			return $this->db->delete('student');
    		}
     
    	}
    ?>