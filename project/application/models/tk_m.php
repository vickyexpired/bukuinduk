<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class tk_m extends CI_Model
{
	public function get_all()
	{
		return $this->db->get('ttk');
	}

	public function get_one($id)
	{
		$this->db->where('id_tk',$id);
		return $this->db->get('ttk');
	}

	public function add($data_insert)
	{
		$this->db->insert('ttk',$data_insert);
	}

	public function edit($id, $data)
	{
		$this->db->where('id_tk',$id);
		$this->db->update('ttk',$data);
	}

	public function delete($id)
	{
		$this->db->where('id_tk');
		$this->db->delete('ttk');
	}
}