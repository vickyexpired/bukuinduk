<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/	
class data_pekerjaan_ortu extends CI_Controller
{
	private $table;

	private $column_id;

	public function __construct()
	{
		parent::__construct();
		$this->load->model('crud');
		$this->table = 'tjob';
		$this->column_id = 'id_job';
	}

	public function index()
	{
		$data['title'] = 'Data Orang Tua';
		if (!$this->session->userdata('logged_in')) {
			redirect('auth','refresh');
		} else {
			$data['record'] = $this->crud->get_all($this->table)->result_array();
			$this->load->view('admin/ortu_pekerjaan_list_v',$data);
		}
	}

	public function add()
	{
		if (!$this->session->userdata('logged_in')) {
			redirect('auth','refresh');
		} else {
			if ($this->input->post('submit')) {
				$jenis = $this->input->post('jenis');
				$keterangan = $this->input->post('keterangan');
				$data_insert = array(
					'nama_job' => $jenis,
					'ket_job' => $keterangan
					);
				$this->crud->add($this->table, $data_insert);
				$this->session->set_flashdata('message','Sukses menambahkan data.');
				redirect('admin/data_pekerjaan_ortu/','refresh');
			} else {
				redirect('admin/data_pekerjaan_ortu/','refresh');
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
				$id = $this->input->post('id_job');
				$nama = $this->input->post('nama_job');
				$keterangan = $this->input->post('ket_job');

				$data_update = array(
					'nama_job' => $nama,
					'ket_job' => $keterangan
					);

				$this->crud->edit($this->table, $this->column_id, $id, $data_update);
				$this->session->set_flashdata('message','Sukses mengedit data.');
				redirect('admin/data_pekerjaan_ortu/','refresh');
			} else {
				$data['record'] = $this->crud->get_one($this->table, $this->column_id, $id)->row_array();
				$this->load->view('admin/ortu_pekerjaan_edit_v',$data);
			}
		}
	}

	public function delete($id)
	{
		if (!$this->session->userdata('logged_in')) {
			redirect('auth','refresh');
		} else if ($id == '') {
            redirect('admin/data_pekerjaan_ortu/','refresh');
		} else {
			$this->crud->delete($this->table, $this->column_id, $id);
			$this->session->set_flashdata('message','Sukses menghapus data.');
			redirect('admin/data_pekerjaan_ortu/','refresh');
		}
	}
}