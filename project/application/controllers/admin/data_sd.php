<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/	
class data_sd extends CI_Controller
{
	private $table;

	private $column_id;

	public function __construct()
	{
		parent::__construct();
		$this->load->model('crud');
		$this->table = 'tsd';
		$this->column_id = 'id_sd';
	}

	public function index()
	{
		$data['title'] = 'Data SD';
		if (!$this->session->userdata('logged_in')) {
			redirect('auth','refresh');
		} else {
			$data['record'] = $this->crud->get_all($this->table)->result_array();
			$this->load->view('admin/sd_list_v',$data);
		}
	}

	public function add()
	{
		if (!$this->session->userdata('logged_in')) {
			redirect('auth','refresh');
		} else {
			if ($this->input->post('submit')) {
				$nama = $this->input->post('nama_sd');
				$alamat = $this->input->post('alamat_sd');
				$data_insert = array(
					'nama_sd' => $nama,
					'alamat_sd' => $alamat
					);
				$this->crud->add($this->table, $data_insert);
				$this->session->set_flashdata('message','Sukses menambahkan data.');
				redirect('admin/data_sd/','refresh');
			} else {
				redirect('admin/data_sd/','refresh');
			}
		}
	}

	public function edit($id = '')
	{
		$data['title'] = 'Data SD';
		if (!$this->session->userdata('logged_in')) {
			redirect('auth','refresh');
		} else {
			if ($this->input->post('submit')) {
				$id = $this->input->post('id_sd');
				$nama = $this->input->post('nama_sd');
				$alamat = $this->input->post('alamat_sd');

				$data_update = array(
					'nama_sd' => $nama,
					'alamat_sd' => $alamat
					);

				$this->crud->edit($this->table, $this->column_id, $id, $data_update);
				$this->session->set_flashdata('message','Sukses mengedit data.');
				redirect('admin/data_sd/','refresh');
			} else {
				$data['record'] = $this->crud->get_one($this->table, $this->column_id, $id)->row_array();
				$this->load->view('admin/sd_edit_v',$data);
			}
		}
	}

	public function delete($id)
	{
		if (!$this->session->userdata('logged_in')) {
			redirect('auth','refresh');
		} else if ($id == '') {
            redirect('admin/data_sd/','refresh');
		} else {
			$this->crud->delete($this->table, $this->column_id, $id);
			$this->session->set_flashdata('message','Sukses menghapus data.');
			redirect('admin/data_sd/','refresh');
		}
	}
}