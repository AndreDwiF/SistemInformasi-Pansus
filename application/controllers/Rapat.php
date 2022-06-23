<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rapat extends CI_Controller {
	

	public function __construct()
	{
		parent::__construct();
		sudah_login();
		$this->load->model('ModelPansus');
		$this->load->library('form_validation');
	}
    public function index()
	{
		$data['data'] = $this->ModelPansus->getRapat();
		$data['komisi']= $this->ModelPansus->getKomisi();
		$data['topik'] = $this->ModelPansus->getTopik();
		$data['title'] = $data['title'] = "Kelola Data | Rapat";
		$data['menu_active'] = "kelola data";
		$this->load->view('pansus/view_header',$data);
		$this->load->view('pansus/view_sidebar',$data);
		$this->load->view('pansus/view_footer');

		$this->load->view('pansus/view_tambahrapat',$data);
	}

	public function tambah()
	{
		$this->form_validation->set_rules('namaRapat','NamaRapat','required|trim');
		$this->form_validation->set_rules('komisi','Komisi','required|trim');
		
		if($this->form_validation->run()== false)
		{
			redirect('rapat');
		}
		else
		{
		$komisi = $this->input->post('komisi');
		$namaRapat = $this->input->post('namaRapat');
		$topik = $this->input->post('topik');
		$tanggalRapat = $this->input->post('tanggalRapat');

		$data = array(
			'id_komisi'=> $komisi,
			'id_topik'=> $topik,
			'nama_rapat'=> $namaRapat,
			'tanggal_rapat'=> $tanggalRapat
		  );
		  
		  $this->ModelPansus->tambahDataRapat($data);
		  redirect('rapat');		
		}
	}
	
	public function ProseshapusRapat()
	{
		$idRapat= $this->input->post('id_rapat');
        $this->ModelPansus->hapusRapat($idRapat);

		redirect('rapat');
	}

	public function ProsesEditRapat()
	{
		$this->form_validation->set_rules('namaRapat','NamaRapat','required|trim');		
		if($this->form_validation->run()== false)
		{
			redirect('rapat');
		}
		else
		{
		$idRapat = $this->input->post('id_rapat');
		$namaRapat = $this->input->post('namaRapat');
		$komisi= $this->input->post('komisi');
		$topik= $this->input->post('topik');
		$tanggalRapat= $this->input->post('tanggalRapat');

		$data = array(
			'nama_rapat'=> $namaRapat,
			'tanggal_rapat'=> $tanggalRapat,
			'id_komisi'=>$komisi,
			'id_topik'=>$topik
		  );
		$where = array(
			'id_rapat' => $idRapat
		);

		  $this->ModelPansus->editRapat($where,$data,'rapat');
		  redirect('rapat');
	}
}

}