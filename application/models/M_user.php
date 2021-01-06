<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_user extends CI_Model
{
	//menampilkan 3 data tb_wisata
	public function getTable_tb_wisata()
	{
		$this->db->select('*');
		$this->db->from('tb_wisata');
		$this->db->join('tb_ktwisata', 'tb_ktwisata.id_kategori = tb_wisata.id_kategori');
		$this->db->join('tb_image', 'tb_image.id_image = tb_wisata.id_image');
		$query = $this->db->limit('3')->get();
		return $query;
	}


	//menampilkan detail wisata
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


	function countAllWisata()
	{
		$this->db->join('tb_ktwisata', 'tb_ktwisata.id_kategori=tb_wisata.id_kategori');
		$this->db->join('tb_desa', 'tb_desa.id_desa=tb_wisata.id_desa');
		$this->db->join('tb_image', 'tb_image.id_image = tb_wisata.id_image');

		$datawisata = $this->db->get('tb_wisata')->num_rows();
		return $datawisata;
	}

	public function get_dataWisata($limit, $start)
	{
		$this->db->join('tb_ktwisata', 'tb_ktwisata.id_kategori=tb_wisata.id_kategori');
		$this->db->join('tb_desa', 'tb_desa.id_desa=tb_wisata.id_desa');
		$this->db->join('tb_image', 'tb_image.id_image = tb_wisata.id_image');

		$data = $this->db->get('tb_wisata', $limit, $start)->result_array();
		return $data;
	}

	//menampilkan wisata
	public function showAll()
	{
		$this->db->select('*');
		$this->db->from('tb_wisata');
		$this->db->join('tb_ktwisata', 'tb_ktwisata.id_kategori = tb_wisata.id_kategori');
		$this->db->join('tb_image', 'tb_image.id_image = tb_wisata.id_image');
		$this->db->join('tb_desa', 'tb_desa.id_desa=tb_wisata.id_desa');
		$query = $this->db->get()->result();
		return $query;
	}



	//menampilkan pengelola
	public function getAll_pengelola()
	{
		return $this->db->get('tb_pengelola')->result();
	}

	//menampilkan berita
	public function getAll_berita()
	{
		$this->db->join('tb_pengelola', 'tb_pengelola.id_pengelola = tb_berita.id_pengelola');
		return $this->db->get('tb_berita')->num_rows();
	}

	public function get_dataBerita($limit, $start)
	{
		$this->db->join('tb_pengelola', 'tb_pengelola.id_pengelola = tb_berita.id_pengelola');

		$data = $this->db->get('tb_berita', $limit, $start)->result_array();
		return $data;
	}

	public function get_detailNews($id_berita)
	{
		$this->db->join('tb_pengelola', 'tb_pengelola.id_pengelola = tb_berita.id_pengelola');
		$result = $this->db->where('id_berita', $id_berita)->get('tb_berita');
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return false;
		}
	}

	public function getRandom_berita()
	{
		$this->db->join('tb_pengelola', 'tb_pengelola.id_pengelola = tb_berita.id_pengelola');
		return $this->db->limit('4')->get('tb_berita')->result_array();
	}

	//menampilkan bblog
	public function getAll_blog()
	{
		return $this->db->get('tb_blog')->num_rows();
	}

	public function get_dataBlog($limit, $start)
	{
		$data = $this->db->get('tb_blog', $limit, $start)->result_array();
		return $data;
	}

	public function get_detailBlog($id_blog)
	{
		$result = $this->db->where('id_blog', $id_blog)->get('tb_blog');
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return false;
		}
	}

	public function getRandom_blog()
	{
		return $this->db->limit('4')->get('tb_blog')->result();
	}
}
