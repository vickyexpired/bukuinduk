<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/	
class data_siswa extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('siswa_m');
		$this->load->model('crud');
	}

	public function index()
	{
		$data['title'] = 'Data Siswa';
		if (!$this->session->userdata('logged_in')) {
			redirect('auth','refresh');
		} else {
			$data['record'] = $this->siswa_m->get_all()->result_array();
			$this->load->view('admin/siswa_list_v',$data);
		}
	}

	public function add()
	{
		$data['title'] = 'Data Siswa';
		if (!$this->session->userdata('logged_in')) {
			redirect('auth','refresh');
		} else {
			if ($this->input->post('submit')) {
				$config['upload_path']          = './uploads/siswa/';
                $config['allowed_types']        = 'gif|jpg|png';

                $this->load->library('upload', $config);

                $data_siswa = array(
                	'nama_lengkap' => $this->input->post('nama_lengkap'),
                	'nama_panggilan' => $this->input->post('nama_panggilan'),
                	'no_pendaftaran' => $this->input->post('no_pendaftaran'),
                	't4_lahir' => $this->input->post('t4_lahir'),
                	'tgl_lahir'=> $this->input->post('tgl_lahir'),
                	'jk' => $this->input->post('jk'),

                	);
                
                $this->input->post('anakke');
                $this->input->post('kandung');
                $this->input->post('tiri');
                $this->input->post('angkat');
                $this->input->post('alamat');
                $this->input->post('kelas');
                $this->input->post('nisn');
                $this->input->post('telp');
                $this->input->post('hp');

                $this->input->post('tinggi');
                $this->input->post('berat');
                $this->input->post('id_goldar');
                $this->input->post('badan');
                $this->input->post('telinga');
                $this->input->post('mata_kanan_plus');
                $this->input->post('mata_kanan_min');
                $this->input->post('mata_kiri_plus');
                $this->input->post('mata_kiri_min');
                $this->input->post('hidung');
                $this->input->post('penyakit_sering');
                $this->input->post('penyakit_kronis');
                $this->input->post('penyakit_kronis_lama');
                $this->input->post('opname');
                $this->input->post('opname_sakit');
                $this->input->post('opname_sakit_lama');
                $this->input->post('pantangan');

                $this->input->post('id_tk');
                $this->input->post('id_sd');

                $this->input->post('nama_a');
                $this->input->post('job_a');
                $this->input->post('agama_a');
                $this->input->post('edu_a');
                $this->input->post('usia_a');
                $this->input->post('status_a');
                $this->input->post('nama_i');
                $this->input->post('job_i');
                $this->input->post('agama_i');
                $this->input->post('edu_i');
                $this->input->post('usia_i');
                $this->input->post('status_i');
                $this->input->post('alamat_ortu');
                $this->input->post('telp_ortu');
                $this->input->post('hp_ortu');

                $this->input->post('hobi');
                $this->input->post('mapel');
                $this->input->post('olahraga');
                $this->input->post('citacita');

                $this->input->post('penghasilan');
                $this->input->post('sekolah');
                $this->input->post('not_sekolah');
                $this->input->post('penanggung');
                $this->input->post('indonesia');
                $this->input->post('daerah');
                $this->input->post('asing');

                $this->input->post('baca_quran');
                $this->input->post('tempat_belajar');
                $this->input->post('hafalan');
                $this->input->post('informasi');
			} else {
				$data['record_goldar'] = $this->crud->get_all('tgoldar')->result_array();
				$data['record_tk'] = $this->crud->get_all('ttk')->result_array();
				$data['record_sd'] = $this->crud->get_all('tsd')->result_array();
				$data['record_job'] = $this->crud->get_all('tjob')->result_array();
				$data['record_agama'] = $this->crud->get_all('tagama')->result_array();
				$data['record_edu'] = $this->crud->get_all('tedu')->result_array();
				$this->load->view('admin/siswa_add_v',$data);
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
				redirect('admin/data_siswa/','refresh');
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
		} else {
			$this->crud->delete($this->table, $this->column_id, $id);
			$this->session->set_flashdata('message','Sukses menghapus data.');
			redirect('admin/data_siswa/','refresh');
		}
	}
}