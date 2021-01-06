<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_admin extends CI_Model
{

	public function delete($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function add_data($data, $table)
	{
		$this->db->insert($table, $data);
	}

	public function edit_data($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	public function update_data($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}


	///////////////////////////////////////////Wisata Alam///////////////////////////
	function countAllWisata()
	{
		$this->db->join('tb_ktwisata', 'tb_ktwisata.id_kategori=tb_wisata.id_kategori');
		$this->db->join('tb_desa', 'tb_desa.id_desa=tb_wisata.id_desa');

		$datawisata = $this->db->get('tb_wisata')->num_rows();
		return $datawisata;
	}

	public function get_dataWisata($limit, $start)
	{
		$this->db->join('tb_ktwisata', 'tb_ktwisata.id_kategori=tb_wisata.id_kategori');
		$this->db->join('tb_desa', 'tb_desa.id_desa=tb_wisata.id_desa');
		$data = $this->db->get('tb_wisata', $limit, $start)->result_array();
		return $data;
	}

	public function wisata($id_wisata)
	{
		$this->db->join('tb_ktwisata', 'tb_ktwisata.id_kategori = tb_wisata.id_kategori');
		$this->db->join('tb_desa', 'tb_desa.id_desa=tb_wisata.id_desa');
		$this->db->join('tb_image', 'tb_image.id_image = tb_wisata.id_image');
		$this->db->join('tb_pramuwisata', 'tb_pramuwisata.id_pramuwisata = tb_wisata.id_pramuwisata');

		$result = $this->db->where('id_wisata', $id_wisata)->get('tb_wisata');
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return false;
		}
	}

	///////////////////////////////////////////Kategori Wisata Alam///////////////////////////
	function countAllKt()
	{
		$datawisata = $this->db->get('tb_ktwisata')->num_rows();
		return $datawisata;
	}

	public function get_dataKt($limit, $start)
	{
		$data = $this->db->get('tb_ktwisata', $limit, $start)->result_array();
		return $data;
	}

	///////////////////////////////////////////Berita Wisata Alam///////////////////////////
	function countAllBerita()
	{
		$this->db->join('tb_pengelola', 'tb_pengelola.id_pengelola=tb_berita.id_pengelola');
		$datawisata = $this->db->get('tb_berita')->num_rows();
		return $datawisata;
	}

	public function get_dataBerita($limit, $start)
	{
		$this->db->join('tb_pengelola', 'tb_pengelola.id_pengelola=tb_berita.id_pengelola');
		$data = $this->db->get('tb_berita', $limit, $start)->result_array();
		return $data;
	}

	//menampilkan detail berita
	public function berita($id_berita)
	{
		$this->db->join('tb_pengelola', 'tb_pengelola.id_pengelola=tb_berita.id_pengelola');

		$result = $this->db->where('id_berita', $id_berita)->get('tb_berita');
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return false;
		}
	}

	///////////////////////////////////////////Blog Wisata Alam///////////////////////////
	function countAllBlog()
	{
		$datawisata = $this->db->get('tb_blog')->num_rows();
		return $datawisata;
	}

	public function get_dataBlog($limit, $start)
	{
		$data = $this->db->get('tb_blog', $limit, $start)->result_array();
		return $data;
	}

	//menampilkan detail blog
	public function blog($id_blog)
	{

		$result = $this->db->where('id_blog', $id_blog)->get('tb_blog');
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return false;
		}
	}

	///////////////////////////////////////////Pengelola Wisata///////////////////////////
	function countAllPengelola()
	{
		$pengelolawisata = $this->db->get('tb_pengelola')->num_rows();
		return $pengelolawisata;
	}

	public function get_dataPengelola($limit, $start)
	{
		$data = $this->db->get('tb_pengelola', $limit, $start)->result_array();
		return $data;
	}

	//menampilkan detail blog
	public function pengelola($id_pengelola)
	{

		$result = $this->db->where('id_blog', $id_pengelola)->get('tb_pengelola');
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return false;
		}
	}

	///////////////////////////////////////////Pramuwisata Wisata///////////////////////////
	function countAllPramuwisata()
	{
		$this->db->join('tb_pengelola', 'tb_pengelola.id_pengelola=tb_pramuwisata.id_pengelola');
		$pramuwisaata = $this->db->get('tb_pramuwisata')->num_rows();
		return $pramuwisaata;
	}

	public function get_dataPramuwisata($limit, $start)
	{
		$this->db->join('tb_pengelola', 'tb_pengelola.id_pengelola=tb_pramuwisata.id_pengelola');
		$data = $this->db->get('tb_pramuwisata', $limit, $start)->result_array();
		return $data;
	}

	//menampilkan detail blog
	// public function pramuwisata($id_pengelola)
	// {

	// 	$result = $this->db->where('id_blog', $id_pengelola)->get('tb_pengelola');
	// 	if ($result->num_rows() > 0) {
	// 		return $result->result();
	// 	} else {
	// 		return false;
	// 	}
	// }

	///////////////////////////////////////////Users Wisata///////////////////////////
	function countAllUsers()
	{
		$this->db->join('user_active', 'user_active.is_active=tb_user.is_active');
		$this->db->join('user_role', 'user_role.id_role=tb_user.role_id');
		$dataUsers = $this->db->get('tb_user')->num_rows();
		return $dataUsers;
	}

	public function get_dataUsers($limit, $start)
	{
		$this->db->join('user_active', 'user_active.is_active=tb_user.is_active');
		$this->db->join('user_role', 'user_role.id_role=tb_user.role_id');
		$data = $this->db->get('tb_user', $limit, $start)->result_array();
		return $data;
	}

	//menampilkan detail users
	public function perViewUsers($id_user)
	{

		$result = $this->db->where('id_user', $id_user)->get('tb_user');
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return false;
		}
	}
}
