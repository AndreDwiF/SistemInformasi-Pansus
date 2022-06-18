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
        $kasus['kasus']= $this->ModelPansus->ambilDatakasusbyID()->result();
		$this->load->view('pansus/view_pansus',$kasus);
	}

    // public function index_id()
	// {
    //     $kasus['kasus']= $this->ModelPansus->ambilDatakasusbyID()->result();
	// 	$this->load->view('pansus/view_pansus',$kasus);
	// }
}