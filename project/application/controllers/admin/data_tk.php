<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/	
class data_tk extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('tk_m');
	}

	public function index()
	{
		$data['title'] = 'Data TK';
		if (!$this->session->userdata('logged_in')) {
			redirect('auth','refresh');
		} else {
			$data['record'] = $this->tk_m->get_all()->result_array();
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
				$this->tk_m->add($data_insert);
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

				$this->tk_m->edit($id, $data_update);
				$this->session->set_flashdata('message','Sukses mengedit data.');
				redirect('admin/data_tk/','refresh');
			} else {
				$data['record'] = $this->tk_m->get_one($id)->row_array();
				$this->load->view('admin/tk_edit',$data);
			}
		}
	}

	public function delete($id)
	{
		if (!$this->session->userdata('logged_in')) {
			redirect('auth','refresh');
		} else {
			$this->tk_m->delete($id);
			$this->session->set_flashdata('message','Sukses menghapus data.');
			redirect('admin/data_tk/','refresh');
		}
	}
}