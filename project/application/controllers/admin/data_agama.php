<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/	
class data_agama extends CI_Controller
{
	private $table;

	private $column_id;

	public function __construct()
	{
		parent::__construct();
		$this->load->model('crud');
		$this->table = 'tagama';
		$this->column_id = 'id_agama';
	}

	public function index()
	{
		$data['title'] = 'Data Agama';
		if (!$this->session->userdata('logged_in')) {
			redirect('auth','refresh');
		} else {
			$data['record'] = $this->crud->get_all($this->table)->result_array();
			$this->load->view('admin/agama_list_v',$data);
		}
	}

	public function add()
	{
		if (!$this->session->userdata('logged_in')) {
			redirect('auth','refresh');
		} else {
			if ($this->input->post('submit')) {
				$nama_agama = $this->input->post('nama_agama');
				$data_insert = array(
					'nama_agama' => $nama_agama
					);
				$this->crud->add($this->table, $data_insert);
				$this->session->set_flashdata('message','Sukses menambahkan data.');
				redirect('admin/data_agama/','refresh');
			} else {
				redirect('admin/data_agama/','refresh');
			}
		}
	}

	public function edit($id = '')
	{
		$data['title'] = 'Data Agama';
		if (!$this->session->userdata('logged_in')) {
			redirect('auth','refresh');
		} else {
			if ($this->input->post('submit')) {
				$id = $this->input->post('id_agama');
				$nama_agama = $this->input->post('nama_agama');

				$data_update = array(
					'nama_agama' => $nama_agama
					);

				$this->crud->edit($this->table, $this->column_id, $id, $data_update);
				$this->session->set_flashdata('message','Sukses mengedit data.');
				redirect('admin/data_agama/','refresh');
			} else {
				$data['record'] = $this->crud->get_one($this->table, $this->column_id, $id)->row_array();
				$this->load->view('admin/agama_edit_v',$data);
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
			redirect('admin/data_agama/','refresh');
		}
	}
}