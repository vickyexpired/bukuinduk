<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class auth extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('auth_m');
	}

	public function index()
	{
		$data['title'] = 'Login';
		if ($this->session->userdata('logged_in')) {
			redirect('admin/dashboard','refresh');
		} else {
			if ($this->input->post('submit')) {
				$this->form_validation->set_rules('username','Username','trim');
				$this->form_validation->set_rules('password','Password','trim');

				if ($this->form_validation->run() == false) {
					$this->session->set_flashdata('message','Login Failed');
					redirect('auth');
				} else {
					$user = $this->input->post('username');
					$pass = $this->input->post('password');

					if ($this->auth_m->login($user, $pass) == false) {
						$this->session->set_flashdata('message','Username or Password invalid');
						redirect('auth');
					} else {
						$records = $this->auth_m->login($user, $pass)->row_array();
						$sess_data = array(
							'username' => $records['username'],
							'level' => $records['level']
							);
						$this->session->set_userdata('logged_in', $sess_data);
						redirect('admin/dashboard','refresh');
					}
				}
			} else {
				$this->load->view('login_v', $data);
			}
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('','refresh');
	}
}