<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ModelPansus');
		$this->load->library('form_validation');
	}

    public function index()
	{
		$data['title'] = $data['title'] = "Login";
    
		$this->load->view('pansus/view_login',$data);

	}

    public function prosesAuthLogin()
    {

		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$data = array(
			'username'=> $username,
			'password'=> $password
		  );
		  
          $cek = $this->ModelPansus->authLogin('admin',$data)->num_rows();
          if($cek > 0){
   
              $data_session = array(
                  'username' => $username,
                  'status' => "login"
                  );
   
              $this->session->set_userdata($data_session);
   
              redirect('dashboard');
   
          }else{
              redirect('auth');
          }
      }
      
    public function logout(){
		$this->session->sess_destroy();
		redirect('auth');
	}
		
}
