<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KategoriTopik extends CI_Controller {
	

	public function __construct()
	{
		parent::__construct();
		if(empty($this->session->userdata('status')))
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
		$data['title'] = "Data Pansus";
		$data['menu_active'] = "kelola data";
		$this->load->view('pansus/view_header',$data);
		$this->load->view('pansus/view_sidebar',$data);
		$this->load->view('pansus/view_footer');

		$this->load->view('pansus/view_kategoriTopik',$data);
	}
}