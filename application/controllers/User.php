<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	

	public function __construct()
	{
		parent::__construct();
		sudah_login();
		$this->load->model('ModelPansus');
	}
	public function index()
	{
		$data['komisi']= $this->ModelPansus->getKomisi();
		$data['title'] = $data['title'] = "Dashboard | User";
		$data['menu_active'] = "Dashboard";
		$this->load->view('pansus/view_header',$data);
		$this->load->view('pansus/view_footer');

		$this->load->view('pansus/view_pansus',$data);
	}
}