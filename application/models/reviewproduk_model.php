<?php

    class Reviewproduk_model extends CI_Model{
        public function tampil_data(){
            return  $this->db->get('tb_solusi');
          }
      
          public function input_data($data){
            $this->db->insert('tb_solusi',$data);
          }

          public function edit_data($where,$table){
            return $this->db->get_where($table,$where);
      
          }

          public function update_data($where,$data,$table){
            $this->db->where($where);
            $this->db->update($table,$data);
          }

          public function hapus_data($where,$table){
            $this->db->where($where);
            $this->db->delete($table);
          }





    }   


?>