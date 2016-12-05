<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class crud extends CI_Model
{
	public function get_all($table)
	{
		return $this->db->get($table);
	}

	public function get_one($table, $column_id, $id)
	{
		$this->db->where($column_id,$id);
		return $this->db->get($table);
	}

	public function get_max_id($table, $column_id)
	{
		$this->db->select('max('.$column_id.')');
		return $this->db->get($table);
	}

	public function add($table, $data)
	{
		$this->db->insert($table,$data);
	}

	public function edit($table, $column_id, $id, $data)
	{
		$this->db->where($column_id,$id);
		$this->db->update($table,$data);
	}

	public function delete($table, $column_id, $id)
	{
		$this->db->where($column_id, $id);
		$this->db->delete($table);
	}
}