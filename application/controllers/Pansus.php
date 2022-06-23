<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pansus extends CI_Controller {
	

	public function __construct()
	{
		parent::__construct();
		sudah_login();
		$this->load->model('ModelPansus');
		$this->load->library('form_validation');
	}
	
	public function index()
	{
		$komisi['data'] = $this->ModelPansus->getKomisi();
		$data['title'] = $data['title'] = "Kelola Data | Komisi";
		$data['menu_active'] = "kelola data";
		$this->load->view('pansus/view_header',$data);
		$this->load->view('pansus/view_sidebar',$data);
		$this->load->view('pansus/view_footer');

		$this->load->view('pansus/view_komisi',$komisi);
	}
	
	public function ProsestambahKomisi()
	{
		
		$this->form_validation->set_rules('namaKomisi','Nama','required|trim');
		
		if($this->form_validation->run()== false)
		{
			redirect('pansus');

		}
		else
		{
		$nama = $this->input->post('namaKomisi',true);

		$data = array(
			'nama_komisi' => $nama
		  );
		  
		  $this->ModelPansus->tambahDatakomisi($data);
		  redirect('pansus');
		}
		
	}

	public function ProseshapusKomisi()
	{
		$idKomisi= $this->input->post('id_komisi');
        $this->ModelPansus->hapusKomisi($idKomisi);

		redirect('pansus');
	}

	public function ProsesEditKomisi()
	{
		$this->form_validation->set_rules('namaKomisi','NamaKomisi','required|trim');
		
		if($this->form_validation->run()== false)
		{
			redirect('pansus');
		}
		else
		{
		$idKomisi = $this->input->post('id_komisi');
		$namaKomisi= $this->input->post('namaKomisi');
		$data = array(
			'nama_komisi'=> $namaKomisi
		  );
		$where = array(
			'id_komisi' => $idKomisi
		);

		  $this->ModelPansus->editKomisi($where,$data,'komisi');
		  redirect('pansus');
	}
}

	// echo "<pre>";
	// print_r($data);
	// echo "</pre>";
	
	
}
