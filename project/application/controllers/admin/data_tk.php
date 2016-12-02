<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/	
class data_tk extends CI_Controller
{
	private $table;

	private $column_id;

	public function __construct()
	{
		parent::__construct();
		$this->load->model('crud');
		$this->table = 'ttk';
		$this->column_id = 'id_tk';
	}

	public function index()
	{
		$data['title'] = 'Data TK';
		if (!$this->session->userdata('logged_in')) {
			redirect('auth','refresh');
		} else {
			$data['record'] = $this->crud->get_all($this->table)->result_array();
			$this->load->view('admin/tk_list',$data);
		}
	}

	public function add()
	{
		if (!$this->session->userdata('logged_in')) {
			redirect('auth','refresh');
		} else {
			if ($this->input->post('submit')) {
				$nama = $this->input->post('nama_tk');
				$alamat = $this->input->post('alamat_tk');
				$data_insert = array(
					'nama_tk' => $nama,
					'alamat_tk' => $alamat
					);
				$this->crud->add($this->table, $data_insert);
				$this->session->set_flashdata('message','Sukses menambahkan data.');
				redirect('admin/data_tk/','refresh');
			} else {
				redirect('admin/data_tk/','refresh');
			}
		}
	}

	public function edit($id = '')
	{
		$data['title'] = 'Data TK';
		if (!$this->session->userdata('logged_in')) {
			redirect('auth','refresh');
		} else {
			if ($this->input->post('submit')) {
				$id = $this->input->post('id_tk');
				$nama = $this->input->post('nama_tk');
				$alamat = $this->input->post('alamat_tk');

				$data_update = array(
					'nama_tk' => $nama,
					'alamat_tk' => $alamat
					);

				$this->crud->edit($this->table, $this->column_id, $id, $data_update);
				$this->session->set_flashdata('message','Sukses mengedit data.');
				redirect('admin/data_tk/','refresh');
			} else {
				$data['record'] = $this->crud->get_one($this->table, $this->column_id, $id)->row_array();
				$this->load->view('admin/tk_edit',$data);
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
			redirect('admin/data_tk/','refresh');
		}
	}
}