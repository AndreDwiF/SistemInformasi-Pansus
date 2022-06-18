<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelPansus extends CI_Model
{
        public function getKomisi()
        {
          return $this->db->get('komisi')->result();
          
        }

        public function ambilRapat()
        {
          return $this->db->get('rapat')->result();
          
        }

        public function getRapat()
        {
          $this->db->select(['a.nama_komisi','a.id_komisi','b.nama_rapat','b.tanggal_rapat','b.id_rapat','c.nama_topik','c.id_topik']);
          $this->db->from('rapat as b');
          $this->db->join('komisi as a','a.id_komisi=b.id_komisi','left');
          $this->db->join('topik as c','c.id_topik=b.id_topik','left');
          $this->db->order_by('nama_komisi','asc');
          $return= $this->db->get('');
          return $return->result();
          
        }

        public function tambahDatakomisi($data)
        {
        $this->db->insert('komisi',$data);
        }

        public function hapusKomisi($idKomisi)
        {
          $this->db->where('id_komisi',$idKomisi);
          $this->db->delete('komisi');
        }

        public function editKomisi($where,$data,$table)
        {
          $this->db->where($where);
          $this->db->update($table,$data);        
        }
        
        public function hapusRapat($idRapat)
        {
          $this->db->where('id_rapat',$idRapat);
          $this->db->delete('rapat');
        }

        public function tambahDataRapat($data)
        {
          $this->db->insert('rapat',$data);
        }

        public function editRapat($where,$data,$table)
        {
          $this->db->where($where);
          $this->db->update($table,$data);        
        }

        public function getTopik()
        {
          return $this->db->get('topik')->result();
          
        }
        

        public function tambahDataTopik($data)
        {
          $this->db->insert('topik',$data);
        }

        public function hapusTopik($idTopik)
        {
          $this->db->where('id_topik',$idTopik);
          $this->db->delete('topik');
        }

        public function editTopik($where,$data,$table)
        {
          $this->db->where($where);
          $this->db->update($table,$data);        
        }

  
}
  // private $_table = "feedback";

	// public function rules()
	// {
	// 	return [
	// 		[
	// 			'field' => 'nama', 
	// 			'label' => 'Nama', 
	// 			'rules' => 'required|max_length[32]'
	// 		],
	// 	];
	// }

   

// SELECT kasus.id_kasus, topik.nama_topik, kasus.nama_rapat FROM kasus INNER JOIN topik ON kasus.id_topik=topik.id_topik

// // $tes = new ModelPansus();
// var_export($tes->ambilDatakasus(1));
// die();