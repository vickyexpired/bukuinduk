<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class siswa_m extends CI_Model
{
	function get_all()
	{
		$query = "
				SELECT a.id_siswa, a.nisn, a.nama_lengkap, a.telp, b.nama_sd 
				FROM tsiswa AS a, tsd AS b
				WHERE b.id_sd=a.id_sd
				";
		return $this->db->query($query);
	}
}