<?php
defined('BASEPATH') or exit('No direct script access allowed');
class model_user extends CI_Model{

   public function simpanData($data = null){
       $this->db->insert('users', $data);
   }

   public function cekData($where = null){
       return $this->db->get_where('users', $where);
   }

   public function getUserWhere($where = null){
       return $this->db->get_where('users', $where);
   }

   public function cekUserAccess($where = null){
       $this->db->select('*');
       $this->db->from('access_menu');
       $this->db->where($where);
       return $this->db->get();
   }

   public function getUserLimit(){
       $this->db->select('*');
       $this->db->from('users');
       $this->db->limit(10, 0);
       return $this->db->get();
   }
}
