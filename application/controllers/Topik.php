<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Topik extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		sudah_login();
		$this->load->model('ModelPansus');
		$this->load->library('form_validation');
	}

    public function index()
	{
		$data['data'] = $this->ModelPansus->getTopikjoin();
		$data['komisi'] = $this->ModelPansus->getKomisi();
		$data['title'] = $data['title'] = "Kelola Data | Topik";
		$data['menu_active'] = "kelola data";
		$this->load->view('pansus/view_header',$data);
		$this->load->view('pansus/view_sidebar',$data);
		$this->load->view('pansus/view_footer');

		$this->load->view('pansus/view_topik',$data);
	}

    public function tambah()
	{
		$this->form_validation->set_rules('namaTopik','NamaTopik','required|trim');
		$this->form_validation->set_rules('komisi','Komisi','required|trim');
		
		if($this->form_validation->run()== false)
		{
			redirect('topik');
		}
		else
		{
		$komisi = $this->input->post('komisi');
		$namaTopik = $this->input->post('namaTopik');

		$data = array(
			'nama_topik'=> $namaTopik,
			'id_komisi'=> $komisi
		  );
		  
		  $this->ModelPansus->tambahDataTopik($data);
		  redirect('topik');		
		}
	}

    public function ProseshapusTopik()
	{
		$idTopik= $this->input->post('id_topik');
        $this->ModelPansus->hapusTopik($idTopik);

		redirect('topik');
	}

    public function ProsesEditTopik()
	{
		$this->form_validation->set_rules('namaTopik','NamaTopik','required|trim');		
		if($this->form_validation->run()== false)
		{
			redirect('topik');
		}
		else
		{
		$idTopik = $this->input->post('id_topik');
		$namaTopik = $this->input->post('namaTopik');
		$namaKomisi= $this->input->post('namaKomisi');

		$data = array(
			'nama_topik'=> $namaTopik,
			'id_komisi'=>$namaKomisi
		  );
		$where = array(
			'id_topik' => $idTopik
		);

		  $this->ModelPansus->editTopik($where,$data,'topik');
		  redirect('topik');
	}
}

		// public function prosesKategoriTopik()
		// {
		
		// $nama_komisi=$this->input->get('komisi');
		// $kategori['data']=$this->ModelPansus->getTopikByName($nama_komisi);
		// $data['data']=$this->ModelPansus->getKategoriTopik($kategori['id_komisi']);
		// $data['title'] = $data['title'] = "Data Pansus";
		// $data['menu_active'] = "kelola data";
		// $this->load->view('pansus/view_header',$data);
		// $this->load->view('pansus/view_sidebar',$data);
		// $this->load->view('pansus/view_footer');

		// $this->load->view('pansus/view_kategoriKomisi',$data);
		// }

	

}