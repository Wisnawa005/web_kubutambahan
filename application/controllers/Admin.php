<?php
defined('BASEPATH') or exit('No direct script acess allowed');
class Admin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		is_logged_in();
		///$this->load->model('M_admin');
		$this->load->helper('url');
	}
	function index()
	{
		$data['title'] = "PraBu Buleleng";
		$data['account'] = $this->db->get_where('tb_user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/index', $data);
		$this->load->view('admin/templates/footer');
	}
}
