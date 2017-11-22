<?php

  class MemberShip_Model extends CI_Model{
    public function validate(){
      $this->db->where('username',$this->input->post('username'));
      $this->db->where('password',md5($this->input->post('password')));
      $query=$this->db->get('members');
      if($query->num_rows() > 0){
        return true;
      }
    }

    public function create_account(){
      $new_member=[
        'username'=>$this->input->post('username'),
        'first_name'=>$this->input->post('firstname'),
        'last_name'=>$this->input->post('lastname'),
        'password'=>md5($this->input->post('password')),
        'email_address'=>$this->input->post('email'),
      ];

      $insert=$this->db->insert('members',$new_member);
      return $insert;
    }
  }
