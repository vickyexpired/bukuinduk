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

                $data_ortu = array(
                	'nama_a' => $this->input->post('nama_a'),
                	'job_a' => $this->input->post('job_a'),
                	'agama_a' => $this->input->post('agama_a'),
                	'edu_a' => $this->input->post('edu_a'),
                	'usia_a' => $this->input->post('usia_a'),
                	'status_a' => $this->input->post('status_a'),
                	'nama_i' => $this->input->post('nama_i'),
                	'job_i' => $this->input->post('job_i'),
                	'agama_i' => $this->input->post('agama_i'),
                	'edu_i' => $this->input->post('edu_i'),
                	'usia_i' => $this->input->post('usia_i'),
                	'status_i' => $this->input->post('status_i'),
                	'alamat_ortu' => $this->input->post('alamat_ortu'),
                	'telp_ortu' => $this->input->post('telp_ortu'),
                	'hp_ortu' => $this->input->post('hp_ortu')
                	);

                $this->crud->add('tortu',$data_ortu);
                $record_id = $this->crud->get_max_id('tortu','id_ortu')->row_array();

                if (!$this->upload->do_upload('foto')) {
                    $foto = '';
                } else {
                    $wow = $this->upload->data();
                    $foto = $wow['file_name'];
				}

                $data_siswa = array(
                	'nama_lengkap' => $this->input->post('nama_lengkap'),
                	'nama_panggilan' => $this->input->post('nama_panggilan'),
                	'no_pendaftaran' => $this->input->post('no_pendaftaran'),
                	't4_lahir' => $this->input->post('t4_lahir'),
                	'tgl_lahir'=> $this->input->post('tgl_lahir'),
                	'jk' => $this->input->post('jk'),
                	'anakke' => $this->input->post('anakke'),
                	'kandung' => $this->input->post('kandung'),
                	'tiri' => $this->input->post('tiri'),
                	'angkat' => $this->input->post('angkat'),
                	'alamat' => $this->input->post('alamat'),
                	'kelas' => $this->input->post('kelas'),
                	'nisn' => $this->input->post('nisn'),
                	'telp' => $this->input->post('telp'),
                	'hp' => $this->input->post('hp'),
                	'foto' => $foto,
                	'id_ortu' => $record_id['max(id_ortu)'],
                	'tinggi' => $this->input->post('tinggi'),
                	'berat' => $this->input->post('berat'),
                	'id_goldar' => $this->input->post('id_goldar'),
                	'badan' => $this->input->post('badan'),
                	'telinga' => $this->input->post('telinga'),
                	'mata_kanan_plus' => $this->input->post('mata_kanan_plus'),
                	'mata_kanan_min' => $this->input->post('mata_kanan_min'),
                	'mata_kiri_plus' => $this->input->post('mata_kiri_plus'),
                	'mata_kiri_min' => $this->input->post('mata_kiri_min'),
                	'hidung' => $this->input->post('hidung'),
                	'penyakit_sering' => $this->input->post('penyakit_sering'),
                	'penyakit_kronis' => $this->input->post('penyakit_kronis'),
                	'penyakit_kronis_lama' => $this->input->post('penyakit_kronis_lama'),
                	'opname' => $this->input->post('opname'),
                	'opname_sakit' => $this->input->post('opname_sakit'),
                	'opname_sakit_lama' => $this->input->post('opname_sakit_lama'),
                	'pantangan' => $this->input->post('pantangan'),
	                'hobi' => $this->input->post('hobi'),
	                'mapel' => $this->input->post('mapel'),
	                'olahraga' => $this->input->post('olahraga'),
	                'citacita' => $this->input->post('citacita'),
	                'penghasilan' => $this->input->post('penghasilan'),
	                'sekolah' => $this->input->post('sekolah'),
	                'not_sekolah' => $this->input->post('not_sekolah'),
	                'penanggung' => $this->input->post('penanggung'),
	                'indonesia' => $this->input->post('indonesia'),
	                'daerah' => $this->input->post('daerah'),
	                'asing' => $this->input->post('asing'),
	                'id_tk' => $this->input->post('id_tk'),
	                'id_sd' => $this->input->post('id_sd'),
	                'baca_quran' => $this->input->post('baca_quran'),
	                'tempat_belajar' => $this->input->post('tempat_belajar'),
	                'hafalan' => $this->input->post('hafalan'),
	                'informasi' => $this->input->post('informasi')
                	);

                $this->crud->add('tsiswa',$data_siswa);

				$this->session->set_flashdata('message','Sukses menambahkan data.');
				redirect('admin/data_siswa/','refresh');


			} else {
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
				$id = $this->input->post('id_siswa');
				$id_ortu = $this->input->post('id_ortu');
				$config['upload_path']          = './uploads/siswa/';
                $config['allowed_types']        = 'gif|jpg|png';

                $this->load->library('upload', $config);

                $data_ortu = array(
                	'nama_a' => $this->input->post('nama_a'),
                	'job_a' => $this->input->post('job_a'),
                	'agama_a' => $this->input->post('agama_a'),
                	'edu_a' => $this->input->post('edu_a'),
                	'usia_a' => $this->input->post('usia_a'),
                	'status_a' => $this->input->post('status_a'),
                	'nama_i' => $this->input->post('nama_i'),
                	'job_i' => $this->input->post('job_i'),
                	'agama_i' => $this->input->post('agama_i'),
                	'edu_i' => $this->input->post('edu_i'),
                	'usia_i' => $this->input->post('usia_i'),
                	'status_i' => $this->input->post('status_i'),
                	'alamat_ortu' => $this->input->post('alamat_ortu'),
                	'telp_ortu' => $this->input->post('telp_ortu'),
                	'hp_ortu' => $this->input->post('hp_ortu')
                	);

            	$this->crud->edit('tortu','id_ortu', $id_ortu, $data_ortu);

            	if (!$this->upload->do_upload('foto')) {
                    $wow = $this->siswa_m->get_foto($id)->row_array();
                    $foto = $wow['foto'];
                } else {
                    $wow = $this->upload->data();
                    $foto = $wow['file_name'];
				}

				$data_siswa = array(
                	'nama_lengkap' => $this->input->post('nama_lengkap'),
                	'nama_panggilan' => $this->input->post('nama_panggilan'),
                	'no_pendaftaran' => $this->input->post('no_pendaftaran'),
                	't4_lahir' => $this->input->post('t4_lahir'),
                	'tgl_lahir'=> $this->input->post('tgl_lahir'),
                	'jk' => $this->input->post('jk'),
                	'anakke' => $this->input->post('anakke'),
                	'kandung' => $this->input->post('kandung'),
                	'tiri' => $this->input->post('tiri'),
                	'angkat' => $this->input->post('angkat'),
                	'alamat' => $this->input->post('alamat'),
                	'kelas' => $this->input->post('kelas'),
                	'nisn' => $this->input->post('nisn'),
                	'telp' => $this->input->post('telp'),
                	'hp' => $this->input->post('hp'),
                	'foto' => $foto,
                	'id_ortu' => $id_ortu,
                	'tinggi' => $this->input->post('tinggi'),
                	'berat' => $this->input->post('berat'),
                	'id_goldar' => $this->input->post('id_goldar'),
                	'badan' => $this->input->post('badan'),
                	'telinga' => $this->input->post('telinga'),
                	'mata_kanan_plus' => $this->input->post('mata_kanan_plus'),
                	'mata_kanan_min' => $this->input->post('mata_kanan_min'),
                	'mata_kiri_plus' => $this->input->post('mata_kiri_plus'),
                	'mata_kiri_min' => $this->input->post('mata_kiri_min'),
                	'hidung' => $this->input->post('hidung'),
                	'penyakit_sering' => $this->input->post('penyakit_sering'),
                	'penyakit_kronis' => $this->input->post('penyakit_kronis'),
                	'penyakit_kronis_lama' => $this->input->post('penyakit_kronis_lama'),
                	'opname' => $this->input->post('opname'),
                	'opname_sakit' => $this->input->post('opname_sakit'),
                	'opname_sakit_lama' => $this->input->post('opname_sakit_lama'),
                	'pantangan' => $this->input->post('pantangan'),
	                'hobi' => $this->input->post('hobi'),
	                'mapel' => $this->input->post('mapel'),
	                'olahraga' => $this->input->post('olahraga'),
	                'citacita' => $this->input->post('citacita'),
	                'penghasilan' => $this->input->post('penghasilan'),
	                'sekolah' => $this->input->post('sekolah'),
	                'not_sekolah' => $this->input->post('not_sekolah'),
	                'penanggung' => $this->input->post('penanggung'),
	                'indonesia' => $this->input->post('indonesia'),
	                'daerah' => $this->input->post('daerah'),
	                'asing' => $this->input->post('asing'),
	                'id_tk' => $this->input->post('id_tk'),
	                'id_sd' => $this->input->post('id_sd'),
	                'baca_quran' => $this->input->post('baca_quran'),
	                'tempat_belajar' => $this->input->post('tempat_belajar'),
	                'hafalan' => $this->input->post('hafalan'),
	                'informasi' => $this->input->post('informasi')
                	);

				$this->crud->edit('tsiswa','id_siswa',$id,$data_siswa);

				$this->session->set_flashdata('message','Sukses mengedit data.');
				redirect('admin/data_siswa/','refresh');
			} else {
				$data['record_siswa'] = $this->crud->get_one('tsiswa', 'id_siswa', $id)->row_array();
            	$record_id = $this->siswa_m->get_id_ortu($id)->row_array();
            	$data['record_ortu'] = $this->crud->get_one('tortu', 'id_ortu', $record_id['id_ortu'])->row_array();
				$data['record_tk'] = $this->crud->get_all('ttk')->result_array();
				$data['record_sd'] = $this->crud->get_all('tsd')->result_array();
				$data['record_job'] = $this->crud->get_all('tjob')->result_array();
				$data['record_agama'] = $this->crud->get_all('tagama')->result_array();
				$data['record_edu'] = $this->crud->get_all('tedu')->result_array();
				$this->load->view('admin/siswa_edit_v',$data);
			}
		}
	}

	public function delete($id)
	{
		if (!$this->session->userdata('logged_in')) {
			redirect('auth','refresh');
		} else {
            $record_id = $this->siswa_m->get_id_ortu($id)->row_array();
			$this->crud->delete('tortu', 'id_ortu', $record_id['id_ortu']);
			$this->crud->delete('tsiswa', 'id_siswa', $id);
			$this->session->set_flashdata('message','Sukses menghapus data.');
			redirect('admin/data_siswa/','refresh');
		}
	}
}