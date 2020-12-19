<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_user');
		$this->load->helper('url');
		//$this->load->library('cart');
	}

	public function index()
	{
		$data['title'] = "PraBu Buleleng";
		$data['wisata'] = $this->M_user->getTable_tb_wisata();

		$this->load->view('front_end/no_login/template/header', $data);
		$this->load->view('front_end/no_login/index', $data);
		$this->load->view('front_end/no_login/template/footer');
	}

	function detail_wisata($id_wisata)
	{
		$data['title'] = "Detail Produk";

		$data['barang'] = $this->M_user->detail_brg($id_wisata);

		$this->load->view('front_end/no_login/template/header', $data);
		$this->load->view('front_end/no_login/detail_wisata', $data);
		$this->load->view('front_end/no_login/template/footer');
	}

	public function about()
	{
		$data['title'] = "About PraBu";

		$this->load->view('front_end/no_login/template/header', $data);
		$this->load->view('front_end/no_login/about', $data);
		$this->load->view('front_end/no_login/template/footer');
	}
	public function destination()
	{
		$data['title'] = "PraBu Destination";

		$this->load->view('front_end/no_login/template/header', $data);
		$this->load->view('front_end/no_login/destination', $data);
		$this->load->view('front_end/no_login/template/footer');
	}
	public function blog()
	{
		$data['title'] = "Blog PraBu";

		$this->load->view('front_end/no_login/template/header', $data);
		$this->load->view('front_end/no_login/blog', $data);
		$this->load->view('front_end/no_login/template/footer');
	}
	public function news()
	{
		$data['title'] = "News PraBu";

		$this->load->view('front_end/no_login/template/header', $data);
		$this->load->view('front_end/no_login/news', $data);
		$this->load->view('front_end/no_login/template/footer');
	}
	public function contact()
	{
		$data['title'] = "Contact PraBu";

		$this->load->view('front_end/no_login/template/header', $data);
		$this->load->view('front_end/no_login/contact', $data);
		$this->load->view('front_end/no_login/template/footer');
	}
}
