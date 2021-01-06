<?php
defined('BASEPATH') or exit('No direct script acess allowed');
class Admin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		is_logged_in();
		$this->load->model('M_admin');
		$this->load->helper('url');
	}

	function index()
	{
		$data['title'] = "PraBu Buleleng";
		$data['deskripsi'] = "Silahkan melakukan tugas sebagai administrasi untuk menunjang perubahan Desa Wisata Kecamatan Kubutambahan";

		$data['account'] = $this->db->get_where('tb_user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/templates/sidebar', $data);
		$this->load->view('admin/index', $data);
		$this->load->view('admin/templates/footer');
	}

	///////////////////////////////////////////Invoice Wisata Alam///////////////////////////
	public function invoice()
	{
		$data['title'] = "Data Invoice";
		$data['account'] = $this->db->get_where('tb_user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$data['invoice'] = $this->M_admin->getviewData();
		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/invoice', $data);
		$this->load->view('admin/templates/footer');
	}

	function detail_invoice($id_invoice)
	{
		$data['title'] = "Detail Data Invoice";
		$data['account'] = $this->db->get_where('tb_user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$data['pesanan'] = $this->M_admin->getviewPesanan_Id($id_invoice);
		//$data['invoice'] = $this->M_admin->getInvoice_Id($id_invoice);

		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/detail_invoice', $data);
		$this->load->view('admin/templates/footer');
	}

	///////////////////////////////////////////Wisata Alam///////////////////////////
	function wstAlam()
	{
		$data['title'] = "Daftar Wisata Alam";
		$data['account'] = $this->db->get_where('tb_user', ['email' =>
		$this->session->userdata('email')])->row_array();

		//load library
		$this->load->library('pagination');
		$this->load->helper('text');

		//config
		$config['base_url'] = site_url('admin/wstAlam');
		$config['total_rows'] = $this->M_admin->countAllWisata();
		$config['per_page'] = 5;
		//$config['num_links'] = 4;

		//styling
		$config['full_tag_open'] = '<nav aria-label="Page navigation example"><ul class="pagination">';
		$config['full_tag_close'] = '</ul></nav>';

		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&laquo';

		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';

		$config['attributes'] = array('class' => 'page-link');

		//initialize
		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);
		$data['dataWisata'] = $this->M_admin->get_dataWisata($config['per_page'], $data['start']);

		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/templates/sidebar', $data);
		$this->load->view('admin/wisata/daftar_wisata/view_wisata', $data);
		$this->load->view('admin/templates/footer');
	}

	public function create_wisata()
	{
		$data['title'] = 'Buat Daftar Wisata';
		$data['account'] = $this->db->get_where('tb_user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$data['wisata'] = $this->M_admin->countAllWisata();
		$data['create_desa'] = $this->db->get('tb_desa')->result_array();
		$data['create_kt'] = $this->db->get('tb_ktwisata')->result_array();
		$data['create_pramuwisata'] = $this->db->get('tb_pramuwisata')->result_array();
		$data['create_foto'] = $this->db->get('tb_image')->result_array();

		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/templates/sidebar', $data);
		$this->load->view('admin/wisata/daftar_wisata/create_wisata', $data);
		$this->load->view('admin/templates/footer');
	}

	public function add_data_wisata()
	{
		$id_kategori     = $this->input->post('id_kategori');
		$id_desa     	 = $this->input->post('id_desa');
		$id_image    	 = $this->input->post('id_image');
		$id_pramuwisata  = $this->input->post('id_pramuwisata');
		$nama_wisata     = $this->input->post('nama_wisata');
		$harga      	 = $this->input->post('harga');
		$durasi          = $this->input->post('durasi');
		$deskripsi_wisata     = $this->input->post('deskripsi_wisata');
		$alamat_wisata        = $this->input->post('alamat_wisata');
		$fasilitas_wisata     = $this->input->post('fasilitas_wisata');
		$latitude_wisata      = $this->input->post('latitude_wisata');
		$longitude_wisata     = $this->input->post('longitude_wisata');
		// $foto            = $_FILES['foto'];
		// if ($foto = '') {
		// } else {
		// 	$config['upload_path']     = './assets/upload/barang';
		// 	$config['allowed_types']   = 'jpg|JPEG|png|gif';

		// 	$this->load->library('upload', $config);
		// 	if (!$this->upload->do_upload('foto')) {
		// 		echo "Gambar Gagal Diupload!";
		// 	} else {
		// 		$foto = $this->upload->data('file_name');
		// 	}
		// }
		$data = array(
			'id_kategori'        => $id_kategori,
			'id_desa'       	 => $id_desa,
			'id_image'           => $id_image,
			'id_pramuwisata'     => $id_pramuwisata,
			'nama_wisata'        => $nama_wisata,
			'harga'              => $harga,
			'durasi'             => $durasi,
			'deskripsi_wisata'   => $deskripsi_wisata,
			'alamat_wisata'      => $alamat_wisata,
			'fasilitas_wisata'   => $fasilitas_wisata,
			'latitude_wisata'    => $latitude_wisata,
			'longitude_wisata'   => $longitude_wisata,
		);
		$this->M_admin->add_data($data, 'tb_wisata');
		redirect('Admin/wstAlam');
	}

	function perView_wisata($id_wisata)
	{
		$data['title'] = "Detail Berita";
		$data['account'] = $this->db->get_where('tb_user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$data['wisata'] = $this->M_admin->wisata($id_wisata);

		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/templates/sidebar', $data);
		$this->load->view('admin/wisata/daftar_wisata/perView_wisata', $data);
		$this->load->view('admin/templates/footer');
	}

	public function delete_wisata($id)
	{
		$where = array('id_wisata' => $id);
		$this->M_admin->delete($where, 'tb_wisata');
		redirect('admin/wstAlam');
	}

	///////////////////////////////////////////Kategori Wisata Alam///////////////////////////
	function ktWisata()
	{
		$data['title'] = "Daftar Kategori Wisata Alam";
		$data['account'] = $this->db->get_where('tb_user', ['email' =>
		$this->session->userdata('email')])->row_array();

		//load library
		$this->load->library('pagination');
		$this->load->helper('text');

		//config
		$config['base_url'] = site_url('admin/ktWisata');
		$config['total_rows'] = $this->M_admin->countAllKt();
		$config['per_page'] = 5;
		//$config['num_links'] = 4;

		//styling
		$config['full_tag_open'] = '<nav aria-label="Page navigation example"><ul class="pagination">';
		$config['full_tag_close'] = '</ul></nav>';

		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';

		$config['attributes'] = array('class' => 'page-link');

		//initialize
		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);
		$data['kategori'] = $this->M_admin->get_dataKt($config['per_page'], $data['start']);

		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/templates/sidebar', $data);
		$this->load->view('admin/wisata/kt_wisata/view_kategori', $data);
		$this->load->view('admin/templates/footer');
	}

	public function add_data_kategori()
	{
		$nama_kategori     = $this->input->post('nama_kategori');

		$data = array(
			'nama_kategori'        => $nama_kategori,
		);
		$this->M_admin->add_data($data, 'tb_ktwisata');
		redirect('admin/ktWisata');
	}

	public function delete_ktWisata($id)
	{
		$where = array('id_kategori' => $id);
		$this->M_admin->delete($where, 'tb_ktwisata');
		redirect('admin/ktWisata');
	}

	///////////////////////////////////////////User Pelanggan///////////////////////////
	function users()
	{
		$data['title'] = "Users Wisata PraBu Buleleng";

		$data['account'] = $this->db->get_where('tb_user', ['email' =>
		$this->session->userdata('email')])->row_array();

		//load library
		$this->load->library('pagination');
		$this->load->helper('text');

		//config
		$config['base_url'] = site_url('admin/users');
		$config['total_rows'] = $this->M_admin->countAllUsers();
		$config['per_page'] = 5;
		//$config['num_links'] = 4;

		//styling
		$config['full_tag_open'] = '<nav aria-label="Page navigation example"><ul class="pagination">';
		$config['full_tag_close'] = '</ul></nav>';

		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';

		$config['attributes'] = array('class' => 'page-link');

		//initialize
		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);
		$data['dataUsers'] = $this->M_admin->get_dataUsers($config['per_page'], $data['start']);

		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/templates/sidebar', $data);
		$this->load->view('admin/users/user', $data);
		$this->load->view('admin/templates/footer');
	}

	public function delete_users($id)
	{
		$where = array('id_user' => $id);
		$this->M_admin->delete($where, 'tb_user');
		redirect('admin/users');
	}

	///////////////////////////////////////////User Administrator///////////////////////////
	function pramuwisata()
	{
		$data['title'] = "Pramuwisata Wisata PraBu Buleleng";

		$data['account'] = $this->db->get_where('tb_user', ['email' =>
		$this->session->userdata('email')])->row_array();

		//load library
		$this->load->library('pagination');
		$this->load->helper('text');

		//config
		$config['base_url'] = site_url('admin/pramuwisata');
		$config['total_rows'] = $this->M_admin->countAllPramuwisata();
		$config['per_page'] = 5;
		//$config['num_links'] = 4;

		//styling
		$config['full_tag_open'] = '<nav aria-label="Page navigation example"><ul class="pagination">';
		$config['full_tag_close'] = '</ul></nav>';

		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';

		$config['attributes'] = array('class' => 'page-link');

		//initialize
		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);
		$data['pramuwisaata'] = $this->M_admin->get_dataPramuwisata($config['per_page'], $data['start']);

		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/templates/sidebar', $data);
		$this->load->view('admin/users/pramuwisata', $data);
		$this->load->view('admin/templates/footer');
	}

	public function delete_pramuwisata($id)
	{
		$where = array('id_pramuwisata' => $id);
		$this->M_admin->delete($where, 'tb_pramuwisata');
		redirect('admin/wstAlam');
	}

	///////////////////////////////////////////User Pengelola Wisata///////////////////////////
	function pengelola()
	{
		$data['title'] = "Pengelola Wisata PraBu Buleleng";

		$data['account'] = $this->db->get_where('tb_user', ['email' =>
		$this->session->userdata('email')])->row_array();

		//load library
		$this->load->library('pagination');
		$this->load->helper('text');

		//config
		$config['base_url'] = site_url('admin/pengelola');
		$config['total_rows'] = $this->M_admin->countAllPengelola();
		$config['per_page'] = 5;
		//$config['num_links'] = 4;

		//styling
		$config['full_tag_open'] = '<nav aria-label="Page navigation example"><ul class="pagination">';
		$config['full_tag_close'] = '</ul></nav>';

		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';

		$config['attributes'] = array('class' => 'page-link');

		//initialize
		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);
		$data['pengelolawisata'] = $this->M_admin->get_dataPengelola($config['per_page'], $data['start']);

		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/templates/sidebar', $data);
		$this->load->view('admin/users/pengelola', $data);
		$this->load->view('admin/templates/footer');
	}

	function perView_pengelola($id_wisata)
	{
		$data['title'] = "Detail Berita";
		$data['account'] = $this->db->get_where('tb_user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$data['wisata'] = $this->M_admin->wisata($id_wisata);

		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/templates/sidebar', $data);
		$this->load->view('admin/wisata/daftar_wisata/perView_wisata', $data);
		$this->load->view('admin/templates/footer');
	}

	public function delete_pengelola($id)
	{
		$where = array('id_wisata' => $id);
		$this->M_admin->delete($where, 'tb_wisata');
		redirect('admin/pramuwisata');
	}

	///////////////////////////////////////////Berita Desa Wisata///////////////////////////
	function berita()
	{
		$data['title'] = "PraBu Buleleng";
		$data['account'] = $this->db->get_where('tb_user', ['email' =>
		$this->session->userdata('email')])->row_array();

		//load library
		$this->load->library('pagination');
		$this->load->helper('text');

		//config
		$config['base_url'] = site_url('admin/berita');
		$config['total_rows'] = $this->M_admin->countAllBerita();
		$config['per_page'] = 5;
		//$config['num_links'] = 4;

		//styling
		$config['full_tag_open'] = '<nav aria-label="Page navigation example"><ul class="pagination">';
		$config['full_tag_close'] = '</ul></nav>';

		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&laquo';

		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';

		$config['attributes'] = array('class' => 'page-link');

		//initialize
		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);
		$data['dataBerita'] = $this->M_admin->get_dataBerita($config['per_page'], $data['start']);

		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/templates/sidebar', $data);
		$this->load->view('admin/berita/view_berita', $data);
		$this->load->view('admin/templates/footer');
	}

	public function create_news()
	{
		$data['title'] = 'Buat Berita';
		$data['account'] = $this->db->get_where('tb_user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$data['blog'] = $this->M_admin->countAllBerita();
		$data['create_pengelola'] = $this->db->get('tb_pengelola')->result_array();

		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/templates/sidebar', $data);
		$this->load->view('admin/berita/create_berita', $data);
		$this->load->view('admin/templates/footer');
	}

	public function add_data_news()
	{
		$judul_berita       = $this->input->post('judul_berita');
		$id_pengelola     	  = $this->input->post('id_pengelola');
		$deskripsi_berita    	  = $this->input->post('deskripsi_berita');
		//$tanggal		  = $this->input->post('id_pramuwisata');

		$foto            = $_FILES['foto'];
		if ($foto = '') {
		} else {
			$config['upload_path']     = './assets/upload/berita';
			$config['allowed_types']   = 'jpg|JPEG|png|gif';

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('foto')) {
				echo "Gambar Gagal Diupload!";
			} else {
				$foto = $this->upload->data('file_name');
			}
		}
		$data = array(
			'judul_berita'         => $judul_berita,
			'id_pengelola'     		 => $id_pengelola,
			'deskripsi_berita'           => $deskripsi_berita,
			'foto'           => $foto,
			//'tanggal'       	 => $tanggal,

		);
		$this->M_admin->add_data($data, 'tb_berita');
		redirect('admin/berita');
	}

	function perView_berita($id_berita)
	{
		$data['title'] = "Detail Berita";
		$data['account'] = $this->db->get_where('tb_user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$data['berita'] = $this->M_admin->berita($id_berita);

		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/templates/sidebar', $data);
		$this->load->view('admin/berita/perView_berita', $data);
		$this->load->view('admin/templates/footer');
	}

	public function delete_berita($id)
	{
		$where = array('id_berita' => $id);
		$this->M_admin->delete($where, 'tb_berita');
		redirect('admin/berita');
	}

	///////////////////////////////////////////Blog Desa Wisata///////////////////////////
	function blog()
	{
		$data['title'] = "Blog PraBu Buleleng";
		$data['account'] = $this->db->get_where('tb_user', ['email' =>
		$this->session->userdata('email')])->row_array();

		//load library
		$this->load->library('pagination');
		$this->load->helper('text');

		//config
		$config['base_url'] = site_url('admin/blog');
		$config['total_rows'] = $this->M_admin->countAllBlog();
		$config['per_page'] = 5;
		//$config['num_links'] = 4;

		//styling
		$config['full_tag_open'] = '<nav aria-label="Page navigation example"><ul class="pagination">';
		$config['full_tag_close'] = '</ul></nav>';

		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&laquo';

		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';

		$config['attributes'] = array('class' => 'page-link');

		//initialize
		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);
		$data['dataBlog'] = $this->M_admin->get_dataBlog($config['per_page'], $data['start']);

		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/templates/sidebar', $data);
		$this->load->view('admin/blog/view_blog', $data);
		$this->load->view('admin/templates/footer');
	}

	function perView_blog($id_blog)
	{
		$data['title'] = "Detail Blog";
		$data['account'] = $this->db->get_where('tb_user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$data['blog'] = $this->M_admin->blog($id_blog);

		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/templates/sidebar', $data);
		$this->load->view('admin/blog/perView_blog', $data);
		$this->load->view('admin/templates/footer');
	}

	public function create_blog()
	{
		$data['title'] = 'Buat Blog';
		$data['account'] = $this->db->get_where('tb_user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$data['blog'] = $this->M_admin->countAllBlog();

		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/templates/sidebar', $data);
		$this->load->view('admin/blog/create_blog', $data);
		$this->load->view('admin/templates/footer');
	}

	public function add_data_blog()
	{
		$judul_blog       = $this->input->post('judul_blog');
		$author     	  = $this->input->post('author');
		$isi_blog    	  = $this->input->post('isi_blog');
		//$tanggal		  = $this->input->post('id_pramuwisata');

		$foto            = $_FILES['foto'];
		if ($foto = '') {
		} else {
			$config['upload_path']     = './assets/upload/blog';
			$config['allowed_types']   = 'jpg|JPEG|png|gif';

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('foto')) {
				echo "Gambar Gagal Diupload!";
			} else {
				$foto = $this->upload->data('file_name');
			}
		}
		$data = array(
			'judul_blog'         => $judul_blog,
			'author'     		 => $author,
			'isi_blog'           => $isi_blog,
			'foto'           => $foto,
			//'tanggal'       	 => $tanggal,

		);
		$this->M_admin->add_data($data, 'tb_blog');
		redirect('admin/blog');
	}

	public function delete_blog($id)
	{
		$where = array('id_blog' => $id);
		$this->M_admin->delete($where, 'tb_blog');
		redirect('admin/blog');
	}

	///////////////////////////////////////////Blog Desa Wisata///////////////////////////
	function profile()
	{
		$data['title'] = "PraBu Buleleng";
		$data['account'] = $this->db->get_where('tb_user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/templates/sidebar', $data);
		$this->load->view('admin/profile/view_profile', $data);
		$this->load->view('admin/templates/footer');
	}
}
