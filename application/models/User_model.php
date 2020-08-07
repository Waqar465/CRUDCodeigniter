<?php
class User_model extends CI_Model{

	//inserting data in DB
	public function create($formarray){
		$this->db->insert('users',$formarray); //Insert into users(email,user_name,account) values(?,?,?)

	}

	//fetching all data from DB.
	public function getall(){
		$query= $this->db->get('users');
		return $query->result_array();
	}

	//get single user on the basis of id
	public function getuser($user_id){
		$this->db->where('id',$user_id);
		$query= $this->db->get('users');
		return $query->row_array();
	}
	//update user data on the basis of the id.
	public function updateuser($user_id,$formdata){
		$this->db->where('id',$user_id);
		$this->db->update('users',$formdata);  //update users SET email=? ,
	}
	public function delete($user_id){
		$this->db->where('id',$user_id);
		$this->db->delete('users');  //update users SET email=? ,
	}

}


?>
