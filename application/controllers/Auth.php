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
		  
          $cek = $this->db->get_where('user',['username' => $username,'password' => $password])->row_array();
		  if($cek)
		  {
				$data = [
					'username' => $cek['username'],
					'role_id' => $cek['role_id']
				];
				$this->session->set_userdata($data);
				if($cek['role_id'] == 1)
				{
					redirect('Dashboard');
				}else{
					redirect('User');
				}
		  }
		  else
		  {
			redirect('auth');
		  }
		
		  
		}
        //   if($cek > 0){
		// 	$id_role=1;
        //     $data_session = array(
        //           'username' => $username,
        //           'status' => "login",
		// 		  'role_id' => $id_role
        //           );
   
        //       $this->session->set_userdata($data_session);
   
        //       redirect('dashboard');
   
        //   }else{
			
		// 	$cekUser = $this->ModelPansus->authLoginUser('user',$data)->num_rows();
		// 	if($cekUser > 0){
		// 		$id=2;
		// 		$data_session = array(
		// 			'username' => $username,
		// 			'status' => "login",
		// 			'role_id' => $id
		// 			);
		// 			$this->session->set_userdata($data_session);
		// 			redirect('User');
		// 	}else{
		// 		redirect('auth');
		// 	}
        //   }
      

	public function blocked()
	{
		echo 'access blocked';
	}
      
    public function logout(){
		$this->session->sess_destroy();
		redirect('auth');
	}
		
}
