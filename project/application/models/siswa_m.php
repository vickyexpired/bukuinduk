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

	public function date_indo($date_full)
	{
		$date = substr($date_full, 8, 2);
		$month = substr($date_full, 5, 2);
		$year = substr($date_full, 0, 4);

		switch ($month) {
			case '01':
				$month = "Januari";
				break;
			case '02':
				$month = "Februari";
				break;
			case '03':
				$month = "Maret";
				break;
			case '04':
				$month = "April";
				break;
			case '05':
				$month = "Mei";
				break;
			case '06':
				$month = "Juni";
				break;
			case '07':
				$month = "Juli";
				break;
			case '08':
				$month = "Agustus";
				break;
			case '09':
				$month = "September";
				break;
			case '10':
				$month = "Oktober";
				break;
			case '11':
				$month = "November";
				break;
			case '12':
				$month = "Desember";
				break;
		}

		$final = $date.' '.$month.' '.$year;
		return $final;
	}

	public function gol_darah($id)
	{
		switch ($id) {
			case '1':
				$hasil = "A";
				break;
			case '2':
				$hasil = "B";
				break;
			case '3':
				$hasil = "AB";
				break;
			case '4':
				$hasil = "O";
				break;
		}
		return $hasil;
	}

	public function baca_quran($id)
	{
		switch ($id) {
			case '1':
				$hasil = "Lancar";
				break;
			case '2':
				$hasil = "Cukup Lancar";
				break;
			case '3':
				$hasil = "Tidak Lancar";
				break;
		}
		return $hasil;
	}
}