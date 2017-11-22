<?php

    class Site_Model extends CI_Model{

      public function get_records(){
        $query=$this->db->get('data');
        return $query->result();
      }

      public function insert_db($data){
        $this->db->insert('data',$data);
        return;
      }

      public function update_db($data)
      {
        $this->db->where('id',3);
        $this->db->update('data',$data);
      }

      public function delete_db(){
        $this->db->where('id',$this->uri->segment(3));
        $this->db->delete('data');
      }

}



 ?>
