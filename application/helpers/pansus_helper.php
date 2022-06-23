<?php

function sudah_login()
{
    $ci= get_instance();
    if(!$ci->session->userdata('username'))
		{
			redirect('auth');
		}
        else{
            $role_id= $ci->session->userdata('role_id');
            $menu= $ci->uri->segment(1);

            $queryMenu = $ci->db->get_where('user_menu',['nama_menu'=>$menu])->row_array();
            $menu_id = $queryMenu['id_menu'];

            $userAccess = $ci->db->get_where('user_akses',[
                'role_id' => $role_id,
                'id_menu' => $menu_id
            ]);

            if($userAccess->num_rows() < 1)
            {
                redirect('auth/blocked');
            }
            

        }
}