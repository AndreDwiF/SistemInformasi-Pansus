<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ModelPansus');
		$this->load->library('form_validation');
	}

    public function index()
	{
		$data['title'] = $data['title'] = "Login";
    
		$this->load->view('pansus/view_register',$data);

	}
}