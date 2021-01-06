<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_user');
		$this->load->helper('url');
		$this->load->helper('date');
		$this->load->helper('text');
		//$this->load->library('cart');
	}
	public function index()
	{
		$data['title'] = "PraBu Buleleng";
		$data['wisata'] = $this->M_user->getTable_tb_wisata()->result();
		$data['pengelola'] = $this->M_user->getAll_pengelola();

		$data['account'] = $this->db->get_where('tb_user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$this->load->view('front_end/login/template/header', $data);
		$this->load->view('front_end/login/index', $data);
		$this->load->view('front_end/login/template/footer');
	}

	// ===============================================ABOUT WISATA============================================= //
	public function about()
	{
		$data['title'] = "About PraBu";
		$data['account'] = $this->db->get_where('tb_user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$this->load->view('front_end/login/template/header', $data);
		$this->load->view('front_end/login/about', $data);
		$this->load->view('front_end/login/template/footer');
	}

	// ===============================================DESTINASI WISATA============================================= //
	public function destination()
	{
		$data['title'] = "PraBu Destination";
		$data['account'] = $this->db->get_where('tb_user', ['email' =>
		$this->session->userdata('email')])->row_array();

		//load library
		$this->load->library('pagination');
		$this->load->helper('text');

		//config
		$config['base_url'] = site_url('user_login/destination');
		$config['total_rows'] = $this->M_user->countAllWisata();
		$config['per_page'] = 4;
		$config['num_links'] = 4;

		//styling
		$config['full_tag_open'] = '<nav class="blog-pagination justify-content-center d-flex"><ul class="pagination">';
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
		$data['dataWisata'] = $this->M_user->get_dataWisata($config['per_page'], $data['start']);

		$this->load->view('front_end/login/template/header', $data);
		$this->load->view('front_end/login/wisata/destination', $data);
		$this->load->view('front_end/login/template/footer');
	}

	function detail_wisata($id_wisata)
	{
		$data['title'] = "Detail PraBu Destination";
		$data['account'] = $this->db->get_where('tb_user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$data['wisata'] = $this->M_user->wisata($id_wisata);

		$this->load->view('front_end/login/template/header', $data);
		$this->load->view('front_end/login/wisata/detail_wisata', $data);
		$this->load->view('front_end/login/template/footer');
	}

	function checkout()
	{
		$data['title'] = "Payment PraBu Destination";
		$data['account'] = $this->db->get_where('tb_user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$this->load->view('front_end/login/template/header', $data);
		$this->load->view('front_end/login/wisata/checkout', $data);
		$this->load->view('front_end/login/template/footer');
	}

	// ===============================================BLOG WISATA============================================= //
	public function blog()
	{
		$data['title'] = "Blog PraBu";
		$data['account'] = $this->db->get_where('tb_user', ['email' =>
		$this->session->userdata('email')])->row_array();

		//load library
		$this->load->library('pagination');
		$this->load->helper('text');

		//config
		$config['base_url'] = site_url('user/blog');
		$config['total_rows'] = $this->M_user->getAll_blog();
		$config['per_page'] = 3;
		//$config['num_links'] = 4;

		//styling
		$config['full_tag_open'] = '<nav class="blog-pagination justify-content-center d-flex"><ul class="pagination">';
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
		$data['blog'] = $this->M_user->get_dataBlog($config['per_page'], $data['start']);

		$this->load->view('front_end/login/template/header', $data);
		$this->load->view('front_end/login/blog/blog', $data);
		$this->load->view('front_end/login/template/footer');
	}

	public function detail_blog($id_blog)
	{
		$data['title'] = "Blog PraBu";
		$data['account'] = $this->db->get_where('tb_user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$data['detail_blog'] = $this->M_user->get_detailBlog($id_blog);
		$data['random_blog'] = $this->M_user->getRandom_blog($id_blog);

		$this->load->view('front_end/login/template/header', $data);
		$this->load->view('front_end/login/blog/detail_blog', $data);
		$this->load->view('front_end/login/template/footer');
	}

	// ===============================================NEWS WISATA============================================= //
	public function news()
	{
		$data['title'] = "News PraBu";
		$data['account'] = $this->db->get_where('tb_user', ['email' =>
		$this->session->userdata('email')])->row_array();

		//load library
		$this->load->library('pagination');
		$this->load->helper('text');

		//config
		$config['base_url'] = site_url('user/news');
		$config['total_rows'] = $this->M_user->getAll_berita();
		$config['per_page'] = 3;
		//$config['num_links'] = 4;

		//styling
		$config['full_tag_open'] = '<nav class="blog-pagination justify-content-center d-flex"><ul class="pagination">';
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
		$data['berita'] = $this->M_user->get_dataBerita($config['per_page'], $data['start']);

		$this->load->view('front_end/login/template/header', $data);
		$this->load->view('front_end/login/berita/news', $data);
		$this->load->view('front_end/login/template/footer');
	}

	public function detail_berita($id_berita)
	{
		$data['title'] = "News PraBu";
		$data['account'] = $this->db->get_where('tb_user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$data['detail_berita'] = $this->M_user->get_detailNews($id_berita);
		$data['random_berita'] = $this->M_user->getRandom_berita($id_berita);

		$this->load->view('front_end/login/template/header', $data);
		$this->load->view('front_end/login/berita/detail_berita', $data);
		$this->load->view('front_end/login/template/footer');
	}

	// ===============================================KONTAK WISATA============================================= //
	public function contact()
	{
		$data['title'] = "Contact PraBu";
		$data['account'] = $this->db->get_where('tb_user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$this->load->view('front_end/login/template/header', $data);
		$this->load->view('front_end/login/contact', $data);
		$this->load->view('front_end/login/template/footer');
	}

	// ===============================================PROFILE USER WISATA============================================= //
	public function profile()
	{
		$data['title'] = "Profile PraBu";
		$data['account'] = $this->db->get_where('tb_user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$this->load->view('front_end/login/template/header', $data);
		$this->load->view('front_end/login/profile/view_profile', $data);
		$this->load->view('front_end/login/template/footer');
	}
}
