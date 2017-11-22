<?php

  //sending email with code igniter

  class Email extends CI_Controller{

    function __construct(){
      parent::__construct();
    }
     function index(){
        $this->load->view('newletter');
   }
    function send(){
      //we can also load it in the config file or create a seperate class in config folder

      $this->load->library('form_validation');
      //field name error message and validation rules
      $this->form_validation->set_rules('name','Name','trim | required');
      $this->form_validation->set_rules('email','Email Address','trim | required | valid_email');
      //if form validation succeeds
    if(!$this->form_validation->run()){
          $this->load->view('newsletter');
    }else{
      //form succeeds and send the email
      $name=$this->input->post('name');
      $email=$this->input->post('email');

      $config= array(
       'protocol' => 'smtp',
       'smtp_host'=>'ssl://smtp.googlemail.com',
       'smtp_port'=>465,
       'smtp_user'=>'techben97@gmail.com',
       'smtp_pass'=>'fordgt45'
     );

     $this->load->library('email',$config);

     $this->email->set_newline("\r\n");
     $this->email->from('techben97@gmail.com','Joshua Melvin');
     $this->email->to($email);
     $this->email->subject('this is to test');
     $this->email->message('Yeah Its Working Fine!!!');
     $this->path->config->item('server_root');
     $file=$path.'igniter/attachments/my_info.txt';

     $this->email->attach($file);
    }

     if($this->email->send()){
        echo "Your Email Send!!";
      }else{
        show_error($this->email->print_debugger());
      }
    }
  }
