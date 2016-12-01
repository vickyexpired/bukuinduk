<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/	
class dashboard extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = 'Dashboard';
		if (!$this->session->userdata('logged_in')) {
			redirect('auth','refresh');
		} else {
			$this->load->view('admin/dashboard_v',$data);
		}
	}
}