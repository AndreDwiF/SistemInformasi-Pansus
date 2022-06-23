<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KategoriTopikUser extends CI_Controller {
	

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('username'))
		{
			redirect('auth');
		}		
		$this->load->model('ModelPansus');
	}
    public function index()
	{
		$nama_komisi=$this->input->get('komisi');
		$kategori=$this->ModelPansus->getTopikByName($nama_komisi);
		$data['data']=$this->ModelPansus->getKategoriTopik($kategori['id_komisi']);
		$data['title'] = "Data Pansus | Topik";
		$data['menu_active'] = "kelola data";
		$this->load->view('pansus/view_header',$data);
		$this->load->view('pansus/view_footer');

		$this->load->view('user/view_kategoriTopikUser',$data);
	}
}