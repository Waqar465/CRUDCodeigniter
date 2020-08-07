<?php
class User extends CI_Controller{
	public function index(){
		$this->load->model('User_model');
		$users=$this->User_model->getall();
		$data = array();
		$data['users']=$users;
//		print_r($data);
		$this->load->view('list',$data);
	}
	function create(){
		$this->load->model('User_model');
		$this->form_validation->set_rules('email','email','required|valid_email');
		$this->form_validation->set_rules('user_name','user_name','required');
		$this->form_validation->set_rules('account','account','required');

		if($this->form_validation->run() == false){
			$this->load->view('create');
		}
		else{
			$formarray = array();
			$formarray['email']= $this->input->post('email');
			$formarray['user_name']= $this->input->post('user_name');
			$formarray['account']= $this->input->post('account');
			$this->User_model->create($formarray);
			$this->session->set_flashdata('success','Record added successfuly');
			redirect(base_url('index.php/User/index'));
		}
	}

	public function edit($userid){
		$this->load->model('User_model');

		$user=$this->User_model->getuser($userid);
		$data = array();
		$data['user']=$user;

		$this->form_validation->set_rules('email','email','required|valid_email');
		$this->form_validation->set_rules('user_name','user_name','required');
		$this->form_validation->set_rules('account','account','required');
		if($this->form_validation->run() == false){
			$this->load->view('edit',$data);
		}
		else{
			$formdata= array();
			$formdata['email']= $this->input->post('email');
			$formdata['user_name'] = $this->input->post('user_name');
			$formdata['account']=$this->input->post('account');
			$this->User_model->updateuser($userid,$formdata);
			$this->session->set_flashdata('success','Record added successfuly');
			redirect(base_url('index.php/User/index'));
		}

	}

	public function delete($userid){
		$this->load->model('User_model');
		$this->User_model->delete($userid);
		redirect(base_url('index.php/User/index'));
	}
}

?>
