<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KategoriRapatUser extends CI_Controller {
	

	public function __construct()
	{
		parent::__construct();
		sudah_login();
		$this->load->model('ModelPansus');
	}
    public function index()
	{
		$nama_topik=$this->input->get('topik');
		$kategori=$this->ModelPansus->getRapatByName($nama_topik);
		$data['data']=$this->ModelPansus->getKategoriRapat($kategori['id_topik']);
		$data['title'] = "Data Pansus | Rapat";
		$data['menu_active'] = "kelola data";
		$this->load->view('pansus/view_header',$data);
		$this->load->view('pansus/view_sidebar',$data);
		$this->load->view('pansus/view_footer');

		$this->load->view('user/view_kategoriRapatUser',$data);
	}
}