<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ModelPansus');
	}
    public function index()
	{
		$data['data'] = $this->ModelPansus->getRapat();
		$data['title'] = $data['title'] = "Home";
		$data['menu_active'] = "User";
		$this->load->view('pansus/view_header',$data);
		$this->load->view('pansus/view_footer');

		$this->load->view('pansus/view_pansus',$data);
	}
}