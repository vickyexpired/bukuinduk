<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/	
class data_pendidikan_ortu extends CI_Controller
{
	private $table;

	private $column_id;

	public function __construct()
	{
		parent::__construct();
		$this->load->model('crud');
		$this->table = 'tedu';
		$this->column_id = 'id_edu';
	}

	public function index()
	{
		$data['title'] = 'Data Orang Tua';
		if (!$this->session->userdata('logged_in')) {
			redirect('auth','refresh');
		} else {
			$data['record'] = $this->crud->get_all($this->table)->result_array();
			$this->load->view('admin/ortu_pendidikan_list_v',$data);
		}
	}

	public function add()
	{
		if (!$this->session->userdata('logged_in')) {
			redirect('auth','refresh');
		} else {
			if ($this->input->post('submit')) {
				$level_edu = $this->input->post('level_edu');
				$data_insert = array(
					'level_edu' => $level_edu
					);
				$this->crud->add($this->table, $data_insert);
				$this->session->set_flashdata('message','Sukses menambahkan data.');
				redirect('admin/data_pendidikan_ortu/','refresh');
			} else {
				redirect('admin/data_pendidikan_ortu/','refresh');
			}
		}
	}

	public function edit($id = '')
	{
		$data['title'] = 'Data Orang Tua';
		if (!$this->session->userdata('logged_in')) {
			redirect('auth','refresh');
		} else {
			if ($this->input->post('submit')) {
				$id = $this->input->post('id_edu');
				$level = $this->input->post('level_edu');

				$data_update = array(
					'level_edu' => $level
					);

				$this->crud->edit($this->table, $this->column_id, $id, $data_update);
				$this->session->set_flashdata('message','Sukses mengedit data.');
				redirect('admin/data_pendidikan_ortu/','refresh');
			} else {
				$data['record'] = $this->crud->get_one($this->table, $this->column_id, $id)->row_array();
				$this->load->view('admin/ortu_pendidikan_edit_v',$data);
			}
		}
	}

	public function delete($id)
	{
		if (!$this->session->userdata('logged_in')) {
			redirect('auth','refresh');
		} else {
			$this->crud->delete($this->table, $this->column_id, $id);
			$this->session->set_flashdata('message','Sukses menghapus data.');
			redirect('admin/data_pendidikan_ortu/','refresh');
		}
	}
}