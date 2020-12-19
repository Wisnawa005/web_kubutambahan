<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_user extends CI_Model
{
	public function delete($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function edit($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	public function update($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	//menampilkan 8 data tb_wisata
	public function getTable_tb_wisata()
	{
		return $this->db->limit('6')->get('tb_wisata')->result();
	}

	//menampilkan detail wisata
	public function detail_wis($id_wisata)
	{
		$result = $this->db->where('id_wisata', $id_wisata)->get('tb_wisata');
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return false;
		}
	}
}
