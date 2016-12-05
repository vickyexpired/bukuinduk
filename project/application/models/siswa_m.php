<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class siswa_m extends CI_Model
{
	public function get_all()
	{
		$query = "
				SELECT a.id_siswa, a.nisn, a.nama_lengkap, a.telp, b.nama_sd 
				FROM tsiswa AS a, tsd AS b
				WHERE b.id_sd=a.id_sd
				";
		return $this->db->query($query);
	}

	public function get_id_ortu($id)
	{
		$this->db->select('id_ortu');
		$this->db->where('id_siswa',$id);
		return $this->db->get('tsiswa');
	}

	public function get_foto($id)
	{
		$this->db->select('foto');
		$this->db->where('id_siswa',$id);
		return $this->db->get('tsiswa');
	}
}