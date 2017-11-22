<?php

  class Site extends CI_Controller{
    public function index(){
      $data=[];
      //$this->load->view('crud_view');
      if($query=$this->site_model->get_records()){
        $data['records']=$query->result();
      }
      $this->load->view('crud_view',$data);
    }

    public function create(){
      $data = array('title' =>$this->input->post('title') ,
                    'contents'=>$this->input->post('content')
              );
      $this->site_model->insert_db($data);
      $this->index();
    }

    public function delete(){
      $this->site_model->delete_db();
      $this->index();
    }

    public function update(){
      $data=[
        'title'=>'My Newly Updated Title',
        'contents'=>'My newly Updated Content'
      ];
      $this->site_model->update_db($data);
    }

    public function members_area(){
      $this->load->view('members_area');
    }
  }
