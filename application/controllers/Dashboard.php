<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ModelPansus');
	}
	
	public function index()
	{
		$data['rapat'] = $this->ModelPansus->getRapat();
		$data['komisi']= $this->ModelPansus->getKomisi();
		$data['title'] = $data['title'] = "Dashboard";
		$data['menu_active'] = "Dashboard";
		$this->load->view('pansus/view_header',$data);
		$this->load->view('pansus/view_sidebar',$data);
		$this->load->view('pansus/view_footer');

		$this->load->view('pansus/view_admin',$data);
	}
}