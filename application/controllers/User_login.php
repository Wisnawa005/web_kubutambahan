<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		is_logged_in();
		$this->load->helper('url');
	}
	public function index()
	{
		$data['title'] = "PraBu Buleleng";
		$data['account'] = $this->db->get_where('tb_user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$this->load->view('front_end/login/template/header', $data);
		$this->load->view('front_end/login/index', $data);
		$this->load->view('front_end/login/template/footer');
	}

	public function about()
	{
		$data['title'] = "About PraBu";

		$this->load->view('front_end/login/template/header', $data);
		$this->load->view('front_end/login/about', $data);
		$this->load->view('front_end/login/template/footer');
	}
	public function destination()
	{
		$data['title'] = "PraBu Destination";

		$this->load->view('front_end/login/template/header', $data);
		$this->load->view('front_end/login/destination', $data);
		$this->load->view('front_end/login/template/footer');
	}
	public function blog()
	{
		$data['title'] = "Blog PraBu";

		$this->load->view('front_end/login/template/header', $data);
		$this->load->view('front_end/login/blog', $data);
		$this->load->view('front_end/login/template/footer');
	}
	public function news()
	{
		$data['title'] = "News PraBu";

		$this->load->view('front_end/login/template/header', $data);
		$this->load->view('front_end/login/news', $data);
		$this->load->view('front_end/login/template/footer');
	}
	public function contact()
	{
		$data['title'] = "Contact PraBu";

		$this->load->view('front_end/login/template/header', $data);
		$this->load->view('front_end/login/contact', $data);
		$this->load->view('front_end/login/template/footer');
	}
}
