<?php

  class Login extends CI_Controller{
    public function index(){
      $data['main_content']='login_form';
      $this->load->view('includes/template',$data);
    }
    public function validate_credentials(){
      $this->load->model('membership_model');
      $query=$this->membership_model->validate();
      //user credentials are valid
      if($query){
        $data=[
          'username'=>$this->input->post('username'),
          'is_logged_in'=>true
        ];
        $this->session->set_userdata($data);
        redirect('site/members_area');
      }
      else{
        $this->index();
      }
    }

    public function signup(){
      $data['main_content']='signup_form';
      $this->load->view('includes/template',$data);
    }

    public function create_member(){
      $this->load->library('form_validation');
      $this->form_validation->set_rules('firstname','Name','trim|required');
      $this->form_validation->set_rules('lastname','Last Name','trim|required');
      $this->form_validation->set_rules('email','Email Addres','trim|required|valid_email');
      $this->form_validation->set_rules('username','Username','trim|required|min_length[4]');
      $this->form_validation->set_rules('password','Password','trim|required|min_length[4]|max_length[32]');
      $this->form_validation->set_rules('password2','Password','trim|required|matches[password]');

      if(!$this->form_validation->run()){
        $this->signup();
      }else{
        $this->load->model('membership_model');
        if($query=$this->membership_model->create_account()){
          $data['main_content']='signup_success';
          $this->load->view('includes/template',$data);
        }else{
          $this->load->view('signup_form');
        }
      }
    }
  }
